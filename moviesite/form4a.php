<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 14/04/14
 * Time: 12:43
 * To change this template use File | Settings | File Templates.
 */
//Test di controllo
if ($_POST['submit'] == 'Add') {
    if ($_POST['type'] == 'movie' && $_POST['movie_type'] == '') {
            header('location: form4.php');
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Multipurpose Form</title>
    <style type="text/css">
        <!--
        td {vertical-align: top}
        -->
    </style>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>
<?php
//Mostra un nuovo modulo...se l'utente sta aggiungendo ADD
if ($_POST['submit'] == 'Add') {
    echo '<h1>' . ucfirst($_POST['type']) . '</h1>';
}
?>
<form action="form4b.php" method="post">
    <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>"/>
    <table>
        <tr>
            <td>Name</td>
            <td>
                <?php echo $_POST['name']; ?>
                <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>"/>
            </td>
        </tr>
        <?php
        if ($_POST['type'] == 'movie') {
        ?>
        <tr>
            <td>Movie type</td>
            <td>
                <?php echo $_POST['movie_type']; ?>
                <input type="hidden" name="movie_type" value="<?php echo $_POST['movie_type']; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Year</td>
            <td><input type="text" name="year" /></td>
        </tr>
        <tr>
            <td>Movie description</td>
            <?php
            } else {
                echo'<tr><td>Biography</td>';
            }
            ?>
            <td><textarea name="extra" rows="5" cols="60"></textarea></td>
            </tr><tr>
            <td colspan="2" style="text-align: center; ">
                <?php
                if (isset($_POST['debug'])) {
                    echo '<input type="hidden" name="debug" value="on" />';
                ?>
                <input type="submit" name="submit" value="Add"/>
            </td>
        </tr>
    </table>
</form>
<?php
//L'utente sta solo cercando qualcosa
} else if ($_POST['submit'] == 'Search') {
    echo '<h1>Search for ' . ucfirst($_POST['type']) . '</h1>';
    echo '<p>Searching for ' . $_POST['name'] . ' ...</p>';
}
if (isset($_POST['debug'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
?>
</body>
</html>