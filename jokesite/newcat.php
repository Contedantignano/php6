<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Joke CMS: Add new category</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"″>
</head>
<body>
<h2>Joke CMS: Add new category</h2>
<?php if (isset($_POST['name'])):

    //si riferisce all'aggiunta della categoria dal form qui sotto

$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('ijdb')) {
    exit ('<p>Unable to locate joke '.' database at this time.</p>');
}

$name = $_POST['name'];
$sql = "INSERT INTO category SET name='$name' ";
if (@mysql_query($sql)){
    echo '<p>New category adedd</p>';
    } else {
    echo '<p>Error adding new category: ' . mysql_error() .'</p>';
}
?>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Add another category</a></p>
<p><a href="cats.php">Return to category list</a></p>

<?php else: //Permette all'utente di aggiungere una categoria ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><p>Enter new category:</p>
    <label>Name: <input type="text" name="name" /></label><br>
    <input type="submit" value="SUBMIT" />
</form>

<?php endif; ?>
</body>
</html>
