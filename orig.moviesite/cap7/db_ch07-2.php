<?php
$db = mysql_connect('localhost', 'bp6am', 'bp6ampass') or 
    die ('Unable to connect. Check your connection parameters.');
mysql_select_db('moviesite', $db) or die(mysql_error($db));

//create the images table
$query = 'ALTER TABLE images DROP COLUMN image_filename';

mysql_query($query, $db) or die (mysql_error($db));

echo 'Images table successfully updated.';
?>