<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Joke CMS: Add New Authors</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"″>
</head>
<body>
<h2>Joke CMS: Add New Authors</h2>
<?php if (isset($_POST['name'])):

//un nuovo autore è stato inviato utilizzando il form sotto

    $dbcnx = @mysql_connect('localhost','root','root');
    if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
    }
    if (!@mysql_select_db('ijdb')) {
    exit ('<p>Unable to locate joke '.' database at this time.</p>');
    }

$name = $_POST['name'];
$email = $_POST['email'];
$sql = "INSERT INTO author SET
       name='$name',
       email='$email' ";

    if (@mysql_query($sql)) {
        echo '<p>New author added</p>';
    } else {
        echo '<p>Error addeding new author</p>' . mysql_error() . '</p>';
    }

?>

    <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Add another author </a></p>
    <p><a href="authors.php">Return to author list</a></p>

<?php else: //permette a tutti gli utenti di inserire nuovi autori ?>
    <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Enter new author:</p>
        <label>Name: <input type="text" name="name"/></label><br>
        <label>Email: <input type="text" name="email"/></label><br>
        <input type="submit" value="submit"/>
    </form>

<?php endif; ?>



</body>
</html>