<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Joke CMS: Joke list Authors</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"″>
</head>
<body>
<h2>Joke CMS: Manage joke</h2>
<p><a href="newjoke.php">Create new joke</a></p>
<?php
$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('ijdb')) {
    exit ('<p>Unable to locate joke '.' database at this time.</p>');
}
$authors = @mysql_query('SELECT id, name FROM author');
if(!$authors) {
    exit ('<p>Unable to obtain authors list from database.</p>');
}
$cats = @mysql_query('SELECT id, name FROM category');
if(!$cats) {
    exit ('<p>Unable to obtain category list from database.</p>');
}
?>
<form action="jokelist.php" method="post">
    <p>View jokes satisfying the following criteria:</p>
    <label>By author:
        <select name="aid" size="1">
            <option selected value="">Any author</option>
            <?php
            while ($author = mysql_fetch_array($authors))
            {
                $aid = $author['id'];
                $aname = htmlspecialchars($author['name']);
                echo "<option value='$aid'>$aname</option>\n";
            }
            ?>
        </select></label></br>
    <label>By category:
        <select name="cid" size="1">
            <option selected value="">Any category</option>
            <?php
            while ($cat = mysql_fetch_array($cats))
            {
                $cid = $cat['id'];
                $cname = htmlspecialchars($cat['name']);
                echo "<option value='$cid'>$cname</option>\n";
            }
            ?>
         </select><br>
         <label>Containing text: <input type="text" name="searchtext" /></label><br>
         <input type="submit" value="SEARCH"/>
</form>
<p><a href="index.html">Return to front page</a></p>
</body>
</html>
