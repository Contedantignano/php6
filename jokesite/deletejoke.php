<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Joke CMS: Delete Joke</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"″>
</head>
<body>
<h2>Joke CMS: Delete Joke</h2>
<?php

$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('ijdb')) {
    exit ('<p>Unable to locate joke '.' database at this time.</p>');
}
//Cancella tutti i recordset
$id = $_GET['id'];
$ok1 = @mysql_query("DELETE FROM jokecategory WHERE " . "jokeid='$id'");
$ok2 = @mysql_query("DELETE FROM joke WHERE " . " id='$id'");
//Controllo eleminazione con IF

if ($ok1 && $ok2) {
    echo '<p>Joke deleted succefully!</p>';
    } else {
    echo '<p>Error deleting joke from database!<br>' . 'Error ' . mysql_error() .'</p>';
}
?>
<p><a href="jokes.php">New joke search</a></p>
</body>
</html>
