<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Joke CMS: Manage Categories</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"″>
</head>
<body>
<h2>Joke CMS: Manage Categories</h2>
<ul>
    <?php

    $dbcnx = @mysql_connect('localhost','root','root');
    if (!$dbcnx) {
        exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
    }
    if (!@mysql_select_db('ijdb')) {
        exit ('<p>Unable to locate joke ' .  ' database at this time.</p>');
    }

    $cats = @mysql_query('SELECT id, name FROM category');
    if (!$cats) {
        exit('<p>Error retrieving categories from database!<br>'.'Error: ' . mysql_error() . '</p>');
    }

    while ($cat = mysql_fetch_array($cats)){
        $id = $cat['id'];
        $name = htmlspecialchars($cat['name']);
        echo "<li>$name ".
            "<a href='editcat.php?id=$id'>Edit</a> ".
            "<a href='deletecat.php?id=$id'>Delete</a></li>";
    }
    ?>
</ul>
<p><a href="newcat.php">Add new cat</a></p>
<p><a href="index.html">Return to home page</a></p>
</body>
</html>