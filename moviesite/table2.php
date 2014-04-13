<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 13/04/14
 * Time: 02:14
 * To change this template use File | Settings | File Templates.
 */

//Riceve l'identificativo di un registra e ne restituisce il nome completo

function get_director($director_id) {

    global $dbcnx;

    $query = 'SELECT
                people_fullname
              FROM
                people
              WHERE
                people_id = ' . $director_id;

    $result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

    $row = mysql_fetch_assoc($result);
    extract($row);

    return $people_fullname;
}

//Riceve l'identificativo di un attore principale e ne restituisce il nome completo
function get_leadactor($leadactor_id) {

    global $dbcnx;

    $query = 'SELECT
                people_fullname
              FROM
                people
              WHERE
                people_id = ' . $leadactor_id;

    $result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

    $row = mysql_fetch_assoc($result);
    extract($row);

    return $people_fullname;
}

//Riceve l'identificativo di un tipo di film e ne restituisce il nome completo
function get_movietype($type_id) {

    global $dbcnx;

    $query = 'SELECT
                movietype_label
              FROM
                movietype
              WHERE
                movietype_id = ' . $type_id;

    $result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

    $row = mysql_fetch_assoc($result);
    extract($row);

    return $movietype_label;

}

//Collegamento e selezione database
$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('moviesite')) {
    exit ('<p>Unable to locate data '.' database at this time.</p>');
}

//Recupera i dati principali della tabella
$query = 'SELECT
            movie_id, movie_name, movie_year, movie_director, movie_leadactor, movie_type
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
        //scrorre i risultati e richiama le funzioni
        while ($row = mysql_fetch_assoc($result)) {
            extract($row);

            $director = get_director($movie_director);
            $leadactor = get_leadactor($movie_leadactor);
            $movietype = get_movietype($movie_type);

        $table .= <<<ENDHTML
           <tr>
           <td><a href="movie_details.php?movie_id=$movie_id" title="click here for more info">$movie_name</a></td>
           <td>$movie_year</td>
           <td>$director</td>
           <td>$leadactor</td>
           <td>$movietype</td>
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