<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 14/04/14
 * Time: 19:54
 * To change this template use File | Settings | File Templates.
 */
$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('moviesite')) {
    exit ('<p>Unable to locate data '.' database at this time.</p>');
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Movie database</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
    <style type="text/css">
        th { background-color: #999; }
        .odd_row { background-color: #EEE; }
        .even_row { background-color: #FFF; }
    </style>
</head>
<body>
<table style="width: 100%;">
    <tr>
        <th colspan="2">Movies <a href="movie.php?action=add">[ADD]</a></th>
    </tr>
    <?php
    $query = 'SELECT * FROM movie';
    $result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

    $odd = true;
    while ($row = mysql_fetch_assoc($result)) {
        echo ($odd == true) ? '<tr class="odd_row">' : '<tr class="even_row">';
        $odd =!$odd;
        echo '<td style="width:85%;">';
        echo $row['movie_name'];
        echo '</td><td>';
        echo ' <a href="movie.php?action=edit&id' . $row['movie_id'] .'"> [EDIT]</a>';
        echo ' <a href="movie.php?type=movie&id' . $row['movie_id'] .'"> [DELETE]</a>';
        echo '</td></tr>';
    }
    ?>
    <tr>
        <th colspan="2">People <a href="people.php?action=add">[ADD]</a></th>
    </tr>
    <?php
    $query = 'SELECT * FROM people';
    $result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

    $odd = true;
    while ($row = mysql_fetch_assoc($result)) {
        echo ($odd == true) ? '<tr class="odd_row">' : '<tr class="even_row">';
        $odd =!$odd;
        echo '<td style="width:25%;">';
        echo $row['people_fullname'];
        echo '</td><td>';
        echo ' <a href="people.php?action=edit&id' . $row['people_id'] .'"> [EDIT]</a>';
        echo ' <a href="people.php?type=people&id' . $row['people_id'] .'"> [DELETE]</a>';
        echo '</td></tr>';
    }
    ?>
</table>
</body>
</html>