<?php
$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('moviesite')) {
    exit ('<p>Unable to locate data '.' database at this time.</p>');
}
$query = 'SELECT
              movie.movie_name, movietype.movietype_label
          FROM
              movie, movietype
          WHERE
              movie.movie_type = movietype.movietype_id
          AND
              movie_year > 1990
          ORDER BY
              movie_type';
$result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

/** mostra i risultati con il ciclo foreach e la funzione mysql_fecth_assoc*/

echo '<table border="1" bordercolor="#CCC">';
while ($row = mysql_fetch_assoc($result)) {
    echo '<tr>';
    foreach ($row as $value) {
        echo '<td>' . $value . '</td> ';
    }
    echo '</tr>';
}
echo '</table>';
?>