<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 14/04/14
 * Time: 01:32
 * To change this template use File | Settings | File Templates.
 */

//Operatore ternario in questo caso non elabora il modulo se è selezionata la voce "movie" ed il radiobutton non è selezionato
if ($_POST['type'] == 'movie' && $_POST['movie_type'] == '') {
    header('location: form3.php');
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title><?php echo $_POST['submit'] . ' ' . $_POST['type'] . ': ' . $_POST['name']; ?></title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>
<?php
if (isset($_POST['debug'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}

$name= ucfirst($_POST['name']);
if ($_POST['type'] == 'movie')
{
    $foo = $_POST['movie_type'] . ' ' . $_POST['type'];
    } else {

    $foo = $_POST['type'];
}
echo '<p>You are ' . $_POST['submit'] . 'ing ';
echo ($_POST['submit'] == 'Search') ? 'For ' : '';
echo 'a ' . $foo . ' named ' . $name . '</p>';
?>

</body>
</html>