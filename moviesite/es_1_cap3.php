<?php
function get_people_fullname($dbcnx,$people_id) {
    $query = 'SELECT
                  people_fullname
              FROM
                  people
              WHERE
                  people_id = ' . $people_id;
    $result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));
    $row = mysql_fetch_assoc($result);
    return $row['people_fullname'];
}
/**Chiude la funzione */
/**imposta connessione e seleziona il db */
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
    <title>Movie info</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>
<h2>Movie info</h2>
<table border="1">
    <tr>
        <th>Movie name</th>
        <th>Lead actor</th>
        <th>Director</th>
    </tr>
    <?php
    //Recupera i film
    $query = 'SELECT
                movie_name, movie_leadactor, movie_director
              FROM
                movie';
    $result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

    while ($row = mysql_fetch_assoc($result)) {

    //while ($row = mysql_fetch_array($result)) {
    /** mysql_fetch_array restituisce due insiemi di array **/

    $actor_name = get_people_fullname ($dbcnx, $row['movie_leadactor']);
    $director_name = get_people_fullname ($dbcnx, $row['movie_director']);

    echo '<tr>';
            echo '<td>' . $row['movie_name'] . '</td>';
            echo '<td>' . $actor_name . '</td>';
            echo '<td>' . $director_name . '</td>';
            echo '</tr>';
    }
    ?>
</table>
</body>
</html>

