<?php
$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('moviesite')) {
    exit ('<p>Unable to locate data '.' database at this time.</p>');
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Movie name</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>
 <table border="1">
     <tr>
         <th>Movie name</th>
         <th>Movie year</th>
     </tr>
     <?php
     //recupera il movie type per le commedie
     $query = 'SELECT
           movietype_id
          FROM
           movietype
          WHERE
           movietype_label = "Comedy"';

     $result = mysql_query($query, $dbcnx) or die (mysql_error());
     $row = mysql_fetch_assoc($result);
     $movietype_id = $row['movietype_id'];

     //recupera il movie type per le commedie
     $query = 'SELECT
           movie_name, movie_year
          FROM
           movie
          WHERE
           movie_type = . $movietype_id . ;
          ORDER BY
            movie_name';



     $result = mysql_query($query, $dbcnx) or die (mysql_error());


     while ($row = mysql_fetch_array($result)){
         //Mostra la righa della tabella
         echo '<tr>';
         echo '<td>' . $row['movie_name'] . '</td>';
         echo '<td>' . $row['movie_year'] . '</td>';
         echo '</tr>';
     }
     ?>
 </table>
</body>
</html>