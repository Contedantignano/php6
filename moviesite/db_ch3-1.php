<?php

$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}

/** $db = mysql_connect('localhost','root','root') or die ('Unable to connect to database'); */


$query = 'CREATE DATABASE IF NOT EXISTS moviesite';
mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));
mysql_select_db('moviesite', $dbcnx) or die (mysql_error($dbcnx));

$query = 'CREATE TABLE movie (
    movie_id                        INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT,
    movie_name                      VARCHAR(255)      NOT NULL,
    movie_type                      TINYINT           NOT NULL DEFAULT 0,
    movie_year                      SMALLINT UNSIGNED NOT NULL DEFAULT 0,
    movie_leadactor                 INTEGER UNSIGNED  NOT NULL DEFAULT 0,
    movie_director                  INTEGER UNSIGNED  NOT NULL DEFAULT 0,

    PRIMARY KEY (movie_id),
    KEY movie_type (movie_type, movie_year)
)
ENGINE=MyISAM';
mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

$query = 'CREATE TABLE movietype (
    movietype_id                        TINYINT UNSIGNED  NOT NULL AUTO_INCREMENT,
    movietype_label                     VARCHAR(100)      NOT NULL,

    PRIMARY KEY (movietype_id),
    KEY (movietype_id)
)
ENGINE=MyISAM';
mysql_query($query, $dbcnx) or die (mysql_error());


$query = 'CREATE TABLE people (
    people_id                        INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT,
    people_fullname                  VARCHAR(255)      NOT NULL,
    people_isactor                   TINYINT(1)           NOT NULL DEFAULT 0,
    people_isdirector                TINYINT(1)           NOT NULL DEFAULT 0,

    PRIMARY KEY (people_id)
)
ENGINE=MyISAM';
mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

echo 'Movie type database successfully created';
?>