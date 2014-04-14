<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 14/04/14
 * Time: 18:54
 * To change this template use File | Settings | File Templates.
 */
?>
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
if ($_POST['type'] == 'movie') {
    echo '<h1>New ' . ucfirst($_POST['movie_type']) . ': ';
} else {
    echo '<h1>New ' . ucfirst($_POST['type']) . ': ';
}
echo $_POST['name'] . '</h1>';

echo '<table>';
if ($_POST['type'] == 'movie') {
    echo '<tr>';
    echo '<td style="font-weight: bold">Year</td>';
    echo '<td>' . $_POST['year'] . '</td>';
    echo '<tr></tr>';
    echo '<td style="font-weight: bold">Movie description</td>';
} else {
    echo '<tr><td>Biography</td>';
}
    echo '<td>' . str_replace('</br>', '', $_POST['extra']) . '</td>';
    echo '</tr><tr>';
    echo '</table>';

if(isset($_POST['debug'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
?>
</body>
</html>