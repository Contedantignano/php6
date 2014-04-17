<?php
$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('moviesite', $dbcnx)) {
    exit ('<p>Unable to locate data '.' database at this time.</p>');
}
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
mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

echo 'Images table successfully created.';
?>