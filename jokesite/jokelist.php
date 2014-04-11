<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Joke CMS:Manage Joke</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"″>
</head>
<body>
<h2>Joke CMS: Manage Joke</h2>
<?php

$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('ijdb')) {
    exit ('<p>Unable to locate joke '.' database at this time.</p>');
}
//Dichiarazione select di base
    $select = 'SELECT DISTINCT id, joketext';
    $from   = ' FROM joke';
    $where  = ' WHERE 1';
    $aid    = $_POST['aid'];
    if ($aid != '') { //Un autore è selezionato
    $where .= " AND authorid='$aid' ";
    }
    $cid = $_POST['cid'];
    if ($cid != '') { //una categoria è selezionata
    $from  .= ', jokecategory';
    $where .= " AND id=jokeid AND categoryid='$cid'";
    }
    $searchtext = $_POST['searchtext'];
    if ($searchtext != '') { //il testo della ricerca è specificato
    $where .= " AND joketext LIKE '%$searchtext%' ";
    }
?>
<table>
    <tr>
        <th>Joke text</th>
        <th>Options</th>
    </tr>
<?php
    $jokes = @mysql_query($select . $from . $where);
    if (!$jokes) {
        echo '</table>';
        exit('<p>Error retrieving jokes from database!<br>' .
             'Error: ' . mysql_error() . '</p>' );
    }
    while ($joke = mysql_fetch_array($jokes)) {
        echo "<tr valing=top>\n";
        $id = $joke['id'];
        $joketext = htmlspecialchars($joke['joketext']);
        echo "<td>$joketext</td>\n";
        echo "<td><a href='editjoke.php?id=$id'>Edit</a> | " .
             "<a href='deletejoke.php?id=$id'>Delete</a></td>\n";
        echo "</tr>\n";
    }
?>
    </table>
    <p><a href="jokes.php">New Search</a></p>
    </body>
</html>
