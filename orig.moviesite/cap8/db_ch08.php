<?php
$db = mysql_connect('localhost', 'bp6am', 'bp6ampass') or 
    die ('Unable to connect. Check your connection parameters.');
mysql_select_db('moviesite', $db) or die(mysql_error($db));

//alter the movie table to include release and rating
$query = 'ALTER TABLE movie ADD COLUMN (
    movie_release INTEGER UNSIGNED DEFAULT 0,
    movie_rating  TINYINT UNSIGNED DEFAULT 5)';
mysql_query($query, $db) or die(mysql_error($db));

echo 'Movie database successfully updated!';
?>