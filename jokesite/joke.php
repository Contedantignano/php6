<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The Internet Joke Database</title>
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

// Get the joke text from the database
$id = $_GET['id'];
$joke = @mysql_query(
    "SELECT joketext FROM joke WHERE id='$id'");
if (!$joke) {
  exit('Unable to load the joke from the database.');
}
if (mysql_num_rows($joke) < 1) {
  exit('Could not locate the specified joke ID.');
}
$joke = mysql_fetch_array($joke);
$joketext = $joke['joketext'];

// Filter out HTML code
$joketext = htmlspecialchars($joketext);

// If no page specified, default to the first page ($page = 0)
if (!isset($_GET['page'])) {
  $page = 0;
} else {
  $page = $_GET['page'];
}

// Split the text into an array of pages
$textarray = spliti('\[PAGEBREAK]', $joketext);

// Select the page we want
$joketext = $textarray[$page];

// Bold and italics
$joketext = str_replace(array('[b]', '[B]'), '<strong>', $joketext);
$joketext = str_replace(array('[eb]', '[EB]'), '</strong>', $joketext);
$joketext = str_replace(array('[i]', '[I]'), '<em>', $joketext);
$joketext = str_replace(array('[ei]', '[EI]'), '</em>', $joketext);

// Paragraphs and line breaks
$joketext = preg_replace("/\r/", '', $joketext);
$joketext = preg_replace("/\n\n/", '</p><p>', $joketext);
$joketext = preg_replace("/\n/", '<br />', $joketext);

// Hyperlinks
$joketext = preg_replace(
  '/\\[L]([-_./a-z0-9!&%#?+,\'=:;@~]+)\\[EL]/',
  '<a href="\\1">\\1</a>', $joketext);
$joketext = preg_replace(
  '/\\[L=([-_./a-z0-9!&%#?+,\'=:;@~]+)]([^\\[]+)\\[EL]/',
  '<a href="\\1">\\2</a>', $joketext);

$PHP_SELF = $_SERVER['PHP_SELF'];

if ($page != 0) {
  $prevpage = $page - 1;
  echo "<p><a href=\"$PHP_SELF?id=$id&amp;page=$prevpage\">".
      'Previous Page</a></p>';
}

echo "<p>$joketext</p>";

if ($page < count($textarray) - 1) {
  $nextpage = $page + 1;
  echo "<p><a href=\"$PHP_SELF?id=$id&amp;page=$nextpage\">".
      'Next Page</a></p>';
}

?>
<p><a href="index.php">Back to the front page</a></p>
</body>
</html>