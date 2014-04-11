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

$query = 'INSERT INTO movie (movie_id, movie_name, movie_type,
          movie_year, movie_leadactor, movie_director)
          VALUES
          (1, "Bruce Almighty", 5, 2003, 1, 2),
          (2, "Office Space", 5, 1999, 5, 6),
          (3, "Grand Canion", 2, 1991, 4, 3)';

mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

$query = 'INSERT INTO movietype (movietype_id, movietype_label)
          VALUES (1, "Sci Fi"),
                 (2, "Drama"),
                 (3, "Adventure"),
                 (4, "War"),
                 (5, "Commedy"),
                 (6, "Horror"),
                 (7, "Action"),
                 (8, "Kid")';

mysql_query($query, $dbcnx) or die (mysql_error());


$query = 'INSERT INTO people (people_id, people_fullname, people_isactor, people_isdirector)
          VALUES (1, "Jim Carrey", 1, 0),
                 (2, "Tom Shadyac", 0, 1),
                 (3, "Lawrence Kasdan", 0, 1),
                 (4, "Kevin Kline", 1, 0),
                 (5, "Ron Livingston", 1, 0),
                 (6, "Mike Jude", 0, 1)';

mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

echo 'Data inserted successfully in database';
?>