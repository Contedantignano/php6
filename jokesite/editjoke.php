<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Joke CMS: Edit Joke</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"″>
</head>
<body>
<h2>Joke CMS: Edit Joke</h2>
<?php

$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('ijdb')) {
    exit ('<p>Unable to locate joke '.' database at this time.</p>');
}
if (isset($_POST['joketext'])):
    // The joke's details have
    // been updated.

    $id = $_POST['id'];
    $aid = $_POST['aid'];
    $joketext = $_POST['joketext'];

    $sql = "UPDATE joke SET
          joketext='$joketext',
          authorid='$aid'
          WHERE id='$id'";
    if (mysql_query($sql)) {
        echo '<p>Joke details updated.</p>';
    } else {
        exit('<p>Error updating joke details: ' .
            mysql_error() . '</p>');
    }

    // Delete all existing entries for this
    // joke from the jokecategory table
    $ok = mysql_query("DELETE FROM jokecategory
                     WHERE jokeid='$id'");
    if (!$ok) {
        exit('<p>Error removing joke from all categories:' .
            mysql_error() . '</p>');
    }

    if (isset($_POST['cats'])) {
        $cats = $_POST['cats'];
    } else {
        $cats = array();
    }

    foreach ($cats as $catID) {
        $sql = "INSERT IGNORE INTO jokecategory
            SET jokeid='$id', categoryid='$catID'";
        $ok = @mysql_query($sql);
        if (!$ok) {
            echo "<p>Error inserting joke into category $catID: " .
                mysql_error() . '</p>';
        }
    }

    ?>
<p><a href="jokes.php">New joke search</a></p>

<?php else:
/* Permette di modificare le barzellette */
    $id = $_GET['id'];

    $joke = @mysql_query("SELECT joketext, authorid FROM joke
                          WHERE id='$id'");
    if(!$joke) {
        exit('<p>Error fetching joke details: ' . mysql_error() . '</p>');
    }

    $joke = mysql_fetch_array($joke);

    $joketext = $joke['joketext'];
    $authid = $joke['authorid'];

    $joketext = htmlspecialchars($joketext);

    /* recupera un elenco di autori
     * e le categorie per le caselle di controllo e selezione */

    $authors = @mysql_query('SELECT id, name FROM author');
    if (!$authors) {
        exit ('<p>Unable to obtain authors list from database.</p>');
    }

    $cats = @mysql_query('SELECT id, name FROM category');
    if (!$cats) {
        exit('<p>Unable to obtain category list from database'. mysql_error() . '</p>');
    }
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Edit the joke:<br>
    <textarea name="joketext" rows="15" cols="45"><?php echo $joketext; ?></textarea>
    <p>Author:
    <select name="aid" size="1">
       <?php
            while ($author = mysql_fetch_array($authors)) {
                $aid = $author ['id'];
                $name = htmlspecialchars($author['name']);
                if ($aid == $authid) {
                    echo "<option selected='selected' value='$aid'>" . "$aname</option>\n";
                } else {
                    echo "<option value='$aid'>$name</option>\n";
                }
            }
       ?>
    </select></p>
    <p>In categories:<br />
        <?php
        while ($cat = mysql_fetch_array($cats)) {
            $cid = $cat['id'];
            $cname = htmlspecialchars($cat['name']);

            // Check if the joke is in this category
            $result = @mysql_query(
                "SELECT * FROM jokecategory
       WHERE jokeid='$id' AND categoryid='$cid'");
            if (!$result) {
                exit('<p>Error fetching joke details: ' .
                    mysql_error() . '</p>');
            }

            // mysql_num_rows gives the number of entries
            // in a result set. In this case, if the result
            // contains one or more rows, the condition
            // below will evaluate to true to indicate that
            // the joke does belong to the category, and the
            // checkbox should be checked.
            if (mysql_num_rows($result)) {
                echo "<input type='checkbox' checked='checked' name='cats[]' value='$cid' />$cname<br />\n";
            } else {
                echo "<input type='checkbox' name='cats[]' value='$cid' />$cname<br />\n";
            }
        }
        ?>
    </p>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <input type="submit" value="SUBMIT" />
</form>

<?php endif; ?>

</body>
</html>