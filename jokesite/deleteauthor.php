<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Joke CMS: Delete Authors</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"″>
</head>
<body>
<h2>Joke CMS: Delete Authors</h2>
    <?php

    $dbcnx = @mysql_connect('localhost','root','root');
    if (!$dbcnx) {
        exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
    }
    if (!@mysql_select_db('ijdb')) {
        exit ('<p>Unable to locate joke ' .  ' database at this time.</p>');
    }
//Cancella tutte le barzellette appartenenti all'autore insieme al record dell'autore
    $id = $_GET['id'];
    $ok1 = @mysql_query("DELETE FROM joke WHERE authorid='$id'");
    $ok2 = @mysql_query("DELETE FROM author WHERE id='$id'");
    if ($ok1 && $ok2) {
        echo '<p>Author deleted succefully!</p>';
        } else {
        echo '<p>Error deleting author from database!<br/>'.'Error: ' . mysql_error() . '</p>';
    }
    ?>
<p><a href="authors.php">Return to authors list</a></p>
</body>
</html>