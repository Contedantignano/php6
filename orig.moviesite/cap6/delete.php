<?php
$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('moviesite', $dbcnx)) {
    exit ('<p>Unable to locate data '.' database at this time.</p>');
}

if (!isset($_GET['do']) || $_GET['do'] != 1) {
    switch ($_GET['type']) {
    case 'movie':
        echo 'Are you sure you want to delete this movie?<br/>';
        break;
    case 'people':
        echo 'Are you sure you want to delete this person?<br/>';
        break;
    } 
    echo '<a href="' . $_SERVER['REQUEST_URI'] . '&do=1">yes</a> '; 
    echo 'or <a href="admin.php">no</a>';
} else {
    switch ($_GET['type']) {
    case 'people':
        $query = 'UPDATE movie SET
                movie_leadactor = 0 
            WHERE
                movie_leadactor = ' . $_GET['id'];
        $result = mysql_query($query, $dbcnx) or die(mysql_error($dbcnx));

        $query = 'DELETE FROM people 
            WHERE
                people_id = ' . $_GET['id'];
        $result = mysql_query($query, $dbcnx) or die(mysql_error($dbcnx));
?>
<p style="text-align: center;">Your person has been deleted.
<a href="movie_index.php">Return to Index</a></p>
<?php
        break;
    case 'movie':
        $query = 'DELETE FROM movie 
            WHERE
                movie_id = ' . $_GET['id'];
        $result = mysql_query($query, $dbcnx) or die(mysql_error($dbcnx));
?>
<p style="text-align: center;">Your movie has been deleted.
<a href="movie_index.php">Return to Index</a></p>
<?php
        break;
    }
}
?>