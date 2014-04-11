<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Joke CMS: Edit Category</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"″>
</head>
<body>
<h2>Joke CMS: Edit Category</h2>
<?php

    $dbcnx = @mysql_connect('localhost','root','root');
    if (!$dbcnx) {
        exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
    }
    if (!@mysql_select_db('ijdb')) {
        exit ('<p>Unable to locate joke '.' database at this time.</p>');
    }

    if (isset($_POST['name'])):
    //i dettagli della categoria sono stati aggiornati

    $name= $_POST['name'];
    $id = $_POST['id'];
    $sql = "UPDATE category SET
            name='$name'
            WHERE id='$id'";
    if (@mysql_query($sql)) {
        echo '<p>Category details updated.</p>';
        } else {
        echo '<p>Error updating category detail ' . mysql_error() .'</p>';
}
?>
<p><a href="cats.php">Return to category list</a></p>

<?php else:   //Permette all'utente di modificare la categoria

    $id = $_GET['id'];
    $cat = @mysql_query("SELECT name FROM category WHERE id='$id'");
    if (!$cat) {
        exit('<p>Error fetching category details: ' . mysql_error() .'</p>');
    }
    $cat = mysql_fetch_array($cat);
    $name = $cat['name'];

    //Converte i caratteri speciali in attributo HTML
    $name = htmlspecialchars($name);
?>
        <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
            <p>Edit category:</p>
            <label>Name: <input type="text" name="name" value="<?php echo $name?>"/> </label><br>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <input type="submit" value="submit"/>
        </form>
<?php endif; ?>
</body>
</html>