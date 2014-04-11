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

$jokessql = 'SELECT joke.id, LEFT(joketext, 20), jokedate, name, email
    FROM joke, author, jokecategory
    WHERE authorid=author.id AND jokeid=joke.id';

if (isset($_GET['cat'])) { // Category filter specified
  $cat = $_GET['cat'];
  $jokessql .= " AND categoryid='$cat'";

  // Get category name
  $catresult = @mysql_query("SELECT name from category WHERE id='$cat'");
  if (!$catresult) {
    exit('<p>Error retrieving category name from database!<br />' .
       'Error: ' . mysql_error() . '</p>');
  }
  if (mysql_num_rows($catresult) < 1)
  {
    exit('<p>Couldn\'t find specified category in the database!</p>');
  }
  $catdetail = mysql_fetch_array($catresult);
  $catname = htmlspecialchars($catdetail['name']);
} else {
  $catname = 'All';
}

?>
<h1><?php echo $catname; ?> Jokes</h1>

<table>
<tr><th>Joke Text</th><th>Author</th><th>Date</th></tr>

<?php
$jokes = @mysql_query($jokessql);
if (!$jokes) {
  echo('</table>');
  exit('<p>Error retrieving jokes from database!<br />' .
      'Error: ' . mysql_error() . '</p>');
}

while ($joke = mysql_fetch_array($jokes)) {

  $id = $joke['id'];
  $joketext = $joke['LEFT(joketext, 20)'];

  // If the joke text is 20 characters long, add "..." to the end of it
  // to indicate that it is actually longer. strlen() returns string length!
  if (strlen($joketext) == 20) {
    $joketext .= "...";
  }

  // Remove any custom tags (even partial ones!) in the joke text. They are not needed in this preview.
  //$joketext = ereg_replace('\\[(B|EB|I|EI|L|L=|L=[-_./a-z0-9!&%#?+,\'=:;@~]+|EL|E)?(]|$)', '', $joketext);

  // Finally, make it safe to display in an HTML document
  $joketext = htmlspecialchars($joketext);

  $author = htmlspecialchars($joke['name']);
  $email = htmlspecialchars($joke['email']);
  $jdate = $joke['jokedate'];

  echo "<tr valign=\"top\">\n";
  echo "<td><a href=\"joke.php?id=$id\">$joketext</a></td>\n";
  echo "<td><a href=\"mailto:$email\">$author</a></td>\n";
  echo "<td>$jdate</td>\n";
  echo "</tr>\n";
}
?>

</table>
<p><a href="index.php">Back to front page</a></p>
</body>
</html>