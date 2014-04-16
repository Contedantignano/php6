<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 15/04/14
 * Time: 16:19
 * To change this template use File | Settings | File Templates.
 */
$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('moviesite', $dbcnx)) {
    exit ('<p>Unable to locate data '.' database at this time.</p>');
}
?>
<html>
<head>
    <title>Commit</title>
</head>
<body>
<?php
switch ($_GET['action']) {
    case 'add':
        switch ($_GET['type']) {
            case 'movie':
                $query = 'INSERT INTO
            movie
                (movie_name, movie_year, movie_type, movie_leadactor,
                movie_director)
            VALUES
                ("' . $_POST['movie_name'] . '",
                 ' . $_POST['movie_year'] . ',
                 ' . $_POST['movie_type'] . ',
                 ' . $_POST['movie_leadactor'] . ',
                 ' . $_POST['movie_director'] . ')';
                break;
        }
        break;
    case 'edit':
        switch ($_GET['type']) {
            case 'movie':
                $query = 'UPDATE movie SET
                movie_name = "' . $_POST['movie_name'] . '",
                movie_year = ' . $_POST['movie_year'] . ',
                movie_type = ' . $_POST['movie_type'] . ',
                movie_leadactor = ' . $_POST['movie_leadactor'] . ',
                movie_director = ' . $_POST['movie_director'] . '
            WHERE
                movie_id = ' . $_POST['movie_id'];
                break;
        }
        break;
}

if (isset($query)) {
    $result = mysql_query($query, $db) or die(mysql_error($db));
}
?>
<p>Done!</p>
</body>
</html>