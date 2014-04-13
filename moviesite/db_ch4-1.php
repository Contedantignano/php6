<?php

$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('moviesite')) {
    exit ('<p>Unable to locate data '.' database at this time.</p>');
}
/** DEPRECATED
 * $db = mysql_connect('localhost','root','root')
 * or die ('Unable to connect to database'); */
/**
$query = 'CREATE DATABASE IF NOT EXISTS moviesite';
mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));
mysql_select_db('moviesite', $dbcnx) or die (mysql_error($dbcnx));
*/

//Modifica la tabella movie aggiungendo i campi durata, incassi e costi
$query = 'ALTER TABLE movie ADD COLUMN (
            movie_running_time          TINYINT UNSIGNED NULL,
            movie_cost                  DECIMAL (4,1)   NULL,
            movie_takings               DECIMAL (4,1)   NULL
            )';
mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

//Inserisce i nuovi dati nella tabella movie

$query = 'UPDATE movie SET
            movie_running_time = 101,
            movie_cost = 81,
            movie_takings = 242.6
          WHERE
            movie_id = 1';
mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

$query = 'UPDATE movie SET
            movie_running_time = 89,
            movie_cost = 10,
            movie_takings = 10.8
          WHERE
            movie_id = 2';
mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

$query = 'UPDATE movie SET
            movie_running_time = 134,
            movie_cost = NULL,
            movie_takings = 33.2
          WHERE
            movie_id = 3';
mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));


echo 'Data inserted successfully in database';
?>