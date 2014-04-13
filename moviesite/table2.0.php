<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 13/04/14
 * Time: 02:14
 * To change this template use File | Settings | File Templates.
 */
$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('moviesite')) {
    exit ('<p>Unable to locate data '.' database at this time.</p>');
}
$query = 'SELECT
            movie_name, movie_year, movie_director, movie_leadactor, movie_type
         FROM
            movie
         ORDER BY
            movie_name ASC,
            movie_year DESC';
$result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));
//Determina il numero di righe nel risultato
$num_movies = mysql_num_rows($result);


$table = <<<ENDHTML
<div style="text-align: center">
    <h2>Movie review database</h2>
    <table border="1" cellpadding="2" cellspacing="2"
           style="width: 70%; margin-left: auto; margin-right: auto;">
        <tr>
            <th>Movie title</th>
            <th>Year of release</th>
            <th>Movie director</th>
            <th>Movie lead actor</th>
            <th>Movie type</th>
        </tr>

ENDHTML;
        //scrorre i risultati
        while ($row = mysql_fetch_assoc($result)) {
            extract($row);
        $table .= <<<ENDHTML
           <tr>
           <td>$movie_name</td>
           <td>$movie_year</td>
           <td>$movie_director</td>
           <td>$movie_leadactor</td>
           <td>$movie_type</td>
           </tr>
ENDHTML;
}
$table.= <<<ENDHTML
    </table>
    <p>$num_movies Movies</p>
</div>
ENDHTML;
echo $table;
?>