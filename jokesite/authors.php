<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Joke CMS: Manage Authors</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"″>
</head>
<body>
<h2>Joke CMS: Manage Authors</h2>
<ul>
    <?php

    $dbcnx = @mysql_connect('localhost','root','root');
    if (!$dbcnx) {
        exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
    }
    if (!@mysql_select_db('ijdb')) {
        exit ('<p>Unable to locate joke ' .  ' database at this time.</p>');
    }

    $authors = @mysql_query('SELECT id, name FROM author');
    if (!$authors) {
        exit('<p>Error retrieving authors from database!<br>'.'Error: ' . mysql_error() . '</p>');
    }
    while ($author = mysql_fetch_array($authors)){
        $id = $author['id'];
        $name = htmlspecialchars($author['name']);
        echo "<li>$name ".
             "<a href='editauthor.php?id=$id'>Edit</a> ".
             "<a href='deleteauthor.php?id=$id'>Delete</a></li>";
    }
    ?>
</ul>
<p><a href="newauthor.php">Add new author</a></p>
<p><a href="index.html">Return to home page</a></p>
</body>
</html>