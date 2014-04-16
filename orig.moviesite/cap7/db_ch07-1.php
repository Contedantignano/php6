<?php
$db = mysql_connect('localhost', 'bp6am', 'bp6ampass') or 
    die ('Unable to connect. Check your connection parameters.');
mysql_select_db('moviesite', $db) or die(mysql_error($db));

//create the images table
$query = 'CREATE TABLE images (
        image_id       INTEGER      NOT NULL AUTO_INCREMENT,
        image_caption  VARCHAR(255) NOT NULL,
        image_username VARCHAR(255) NOT NULL,
        image_filename VARCHAR(255) NOT NULL DEFAULT "",
        image_date     DATE         NOT NULL,
        PRIMARY KEY (image_id)
    )
    ENGINE=MyISAM';
mysql_query($query, $db) or die (mysql_error($db));

echo 'Images table successfully created.';
?>