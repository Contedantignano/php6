<?php
$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('moviesite')) {
    exit ('<p>Unable to locate data '.' database at this time.</p>');
}
$query = 'SELECT
              movie_name, movie_type
          FROM
              movie
          WHERE
              movie_year > 1990
          ORDER BY
              movie_type';
$result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

/** mostra i risultati con il ciclo foreach e la funzione mysql_fecth_assoc*/

while ($row = mysql_fetch_assoc($result)) {
    foreach ($row as $value){
        echo $value . ' ';
    }
    echo '<br>';
}
?>