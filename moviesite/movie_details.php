<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 13/04/14
 * Time: 13:03
 * To change this template use File | Settings | File Templates.
 */
//riceve l'identificativo di un regista e ne restituisce il nome completo
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

function calculate_differences($takings, $cost) {

    $difference = $takings - $cost;

    if ($difference < 0) {
        $color = 'red';
        $difference = '$' . abs($difference) . 'million';
    } else if ($difference > 0) {
        $color = 'green';
        $difference = '$' . $difference . 'million';
    } else {
        $color = 'blue';
        $difference ='broke even';
    }
    return '<span style="color:' . $color . ';">' . $difference . '</span>';
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
            movie_name, movie_year, movie_director, movie_leadactor, movie_type,
            movie_type, movie_running_time, movie_cost, movie_takings
         FROM
            movie
         WHERE
            movie_id = ' . $_GET['movie_id'];

$result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

$row = mysql_fetch_assoc($result);
$movie_name                 = $row['movie_name'];
$movie_director             = get_director($row['movie_director']);
$movie_leadactor            = get_leadactor($row['movie_leadactor']);
$movie_year                 = $row['movie_year'];
$movie_running_time         = $row['movie_running_time'] .' mins';
$movie_takings              = $row['movie_takings'] .' millions';
$movie_cost                 = $row['movie_cost'].' millions';
$movie_health               = calculate_differences($row['movie_takings'],$row['movie_cost']);

//mostra le info
echo <<<ENDHTML
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Details and reviews for: $movie_name;</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>
 <div style="text-align: center;">
    <h2>$movie_name</h2>
    <h3><em>Details</em></h3>
 <table cellpadding="2" cellspacing="2" style="width: 70%; margin-left: auto; margin-right: auto;">
    <tr>
        <td><strong>Title</strong></strong></td>
        <td>$movie_name</td>
        <td><strong>Release Year</strong></strong></td>
        <td>$movie_year</td>
    </tr>
    <tr>
        <td><strong>Movie director</strong></strong></td>
        <td>$movie_director</td>
        <td><strong>Cost</strong></strong></td>
        <td>$movie_cost</td>
    </tr>
    <tr>
        <td><strong>Lead actor</strong></strong></td>
        <td>$movie_leadactor</td>
        <td><strong>Takings</strong></strong></td>
        <td>$movie_takings</td>
    </tr>
    <tr>
        <td><strong>Running time</strong></strong></td>
        <td>$movie_running_time</td>
        <td><strong>Health</strong></strong></td>
        <td>$movie_health</td>
    </tr>
</table></div>
</body>
</html>
ENDHTML;
