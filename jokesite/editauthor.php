<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Joke CMS: Edit Authors</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"″>
</head>
<body>
<h2>Joke CMS: Edit Authors</h2>
<?php

//un nuovo autore è stato inviato utilizzando il form sotto

    $dbcnx = @mysql_connect('localhost','root','root');
    if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
    }
    if (!@mysql_select_db('ijdb')) {
    exit ('<p>Unable to locate joke '.' database at this time.</p>');
    }
    //i dettagli dell'autore sono stati aggiornati
    if (isset($_POST['name'])):

        $name = $_POST['name'];
        $email = $_POST['email'];
        $id = $_POST['id'];

        $sql = "UPDATE author SET
               name='$name',
               email='$email'
               WHERE  id='$id'";

    if (@mysql_query($sql)) {
        echo '<p>Author details updated</p>';
    } else {
        echo '<p>Error updating author details: </p>' . mysql_error() . '</p>';
    }
?>
<p><a href="authors.php">Return to author list</a></p>


<?php else: //permette di modificare gli autori
        $id = $_GET['id'];
        $author = @mysql_query(
            "SELECT name, email FROM author WHERE id='$id'");
        if (!$author) {
        exit ('<p>Error fetching author details: ' . mysql_error() . '</p>');
        }

        $author = mysql_fetch_array($author);
        $name = $author['name'];
        $email = $author['email'];

        //Converte i caratteri speciali

        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
?>

<form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Edit author:</p>
    <label>Name: <input type="text" name="name" value="<?php echo $name?>"/> </label><br>
    <label>Email: <input type="text" name="email" value="<?php echo $email?>"/> </label><br>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <input type="submit" value="submit"/>
</form>

<?php endif; ?>

</body>
</html>