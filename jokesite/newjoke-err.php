<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Joke CMS: Add New Joke</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"″>
</head>
<body>
<h2>Joke CMS: New Joke</h2>
<?php if (isset($_POST['name'])):

    $dbcnx = @mysql_connect('localhost','root','root');
    if (!$dbcnx) {
        exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
    }
    if (!@mysql_select_db('ijdb')) {
        exit ('<p>Unable to locate joke '.' database at this time.</p>');
    }
 ?>


<?php else:
    //Permette all'utente di inviare una nuova barzelletta

    $authors = @mysql_query('SELECT id, name FROM author ');
    if (!$authors) {
        exit('<p>Unable to obtain author list form the database.</p>');
    }

    $cats = @mysql_query('SELECT id, name FROM category');
    if (!$cats) {
        exit('<p>Unable to obtain category list from database');
    }
?>
<form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Enter the name of joke:<br>
        <textarea name="joketext" rows="5" class="45"></textarea></p>
    <p>Author:
     <select name="aid" size="1">
        <option selected value="">Select one</option>
        <option value="">-------------</option>
<?php
 while ($author = @mysql_fetch_array($authors)) {
     $aid = $author['id'];
     $aname = htmlspecialchars($author['name']);
     echo "<option value='$aid'>$name</option>\n";
     }
?>
    </select>
    </p>
<p>Place in categories:<br>
<?php
    while ($cat = mysql_fetch_array($cats)) {
        $cid = $cat['id'];
        $cname = htmlspecialchars($cat['name']);
        echo "<label><input type='checkbox' name='cats[]' " . " value='$cid' />$cname</label><br>\n";
    }
?>
</p>
    <input type="submit" value="SUBMIT">
    </form>
<?php endif; ?>