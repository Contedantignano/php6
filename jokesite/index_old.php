<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The Internet Joke Database</title>
<meta http-equiv="content-type"
    content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Welcome to the Internet Joke Database!</h1>
<p>Please select a category:</p>
<ul>
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

$cats = @mysql_query('SELECT id, name FROM category');
if (!$cats) {
  exit('<p>Error retrieving categories from database!<br />' .
      'Error: ' . mysql_error() . '</p>');
}

while ($cat = mysql_fetch_array($cats)) {
  $id = $cat['id'];
  $name = htmlspecialchars($cat['name']);

  echo "<li><a href='jokelist.php?cat=$id'>$name</a></li>";
}

?>
</ul>
<p>Or <a href="jokelist.php">view all jokes</a> in the database.</p>
</body>
</html>