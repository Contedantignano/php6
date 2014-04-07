<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Joke CMS: Add New Joke</title>
    <meta http-equiv="content-type"
          content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php

$dbcnx = @mysql_connect('localhost', 'root', 'root');
if (!$dbcnx) {
    exit('<p>Unable to connect to the ' .
        'database server at this time.</p>');
}

if (!@mysql_select_db('ijdb')) {
    exit('<p>Unable to locate the joke ' .
        'database at this time.</p>');
}

if (isset($_POST['joketext'])):
    // A new joke has been entered
    // using the form.

    $aid = $_POST['aid'];
    $joketext = $_POST['joketext'];
    $cats = $_POST['cats'];

    if ($aid == '') {
        exit('<p>You must choose an author for this joke. Click "Back" and try again.</p>');
    }

    $sql = "INSERT INTO joke SET
      joketext='$joketext',
      jokedate=CURDATE(),
      authorid='$aid'";
    if (@mysql_query($sql)) {
        echo '<p>New joke added</p>';
    } else {
        exit('<p>Error adding new joke: ' . mysql_error() . '</p>');
    }

    $jid = mysql_insert_id();

    if (isset($_POST['cats'])) {
        $cats = $_POST['cats'];
    } else {
        $cats = array();
    }

    $numCats = 0;
    foreach ($cats as $catID) {
        $sql = "INSERT IGNORE INTO jokecategory
            SET jokeid=$jid, categoryid=$catID";
        $ok = @mysql_query($sql);
        if ($ok) {
            $numCats = $numCats + 1;
        } else {
            echo "<p>Error inserting joke into category $catID: " .
                mysql_error() . '</p>';
        }
    }
    ?>

    <p>Joke was added to <?php echo $numCats; ?> categories.</p>

    <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Add another joke</a></p>
    <p><a href="jokes.php">Return to joke search</a></p>

<?php
else: // Allow the user to enter a new joke

    $authors = @mysql_query('SELECT id, name FROM author');
    if (!$authors) {
        exit('<p>Unable to obtain author list from the database.</p>');
    }

    $cats = @mysql_query('SELECT id, name FROM category');
    if (!$cats) {
        exit('<p>Unable to obtain category list from the database.</p>');
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Enter the new joke:<br />
            <textarea name="joketext" rows="5" cols="45">
            </textarea></p>
        <p>Author:
            <select name="aid" size="1">
                <option selected value="">Select One</option>
                <option value="">---------</option>
                <?php
                while ($author = mysql_fetch_array($authors)) {
                    $aid = $author['id'];
                    $aname = htmlspecialchars($author['name']);
                    echo "<option value='$aid'>$aname</option>\n";
                }
                ?>
            </select></p>
        <p>Place in categories:<br />
            <?php
            while ($cat = mysql_fetch_array($cats)) {
                $cid = $cat['id'];
                $cname = htmlspecialchars($cat['name']);
                echo "<label><input type='checkbox' name='cats[]' value='$cid' />$cname</label><br />\n";
            }
            ?>
        </p>
        <input type="submit" value="SUBMIT" />
    </form>
<?php endif; ?>
</body>
</html>