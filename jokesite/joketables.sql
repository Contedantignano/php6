# Code to create a simple joke table that stores an author ID

CREATE TABLE joke (
 id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 joketext TEXT,
 jokedate DATE NOT NULL,
 authorid INT
);

# Code to create a simple author table

CREATE TABLE author (
 id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(255),
 email VARCHAR(255)
);

# Code to create a lookup table for joke-category relationship

CREATE TABLE jokecategory (
 jokeid INT NOT NULL,
 categoryid INT NOT NULL,
 PRIMARY KEY (jokeid, categoryid)
);

# Code to create a simple category table

CREATE TABLE category (
 id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(255)
);
