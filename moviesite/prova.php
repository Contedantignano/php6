<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 15/04/14
 * Time: 14:03
 * To change this template use File | Settings | File Templates.
 */
$dbcnx = @mysql_connect('localhost','root','root');
if (!$dbcnx) {
    exit ('<p>Unable to connect to the '.' database server at this time.</p>' );
}
if (!@mysql_select_db('moviesite')) {
    exit ('<p>Unable to locate data '.' database at this time.</p>');
}
?>

<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 15/04/14
 * Time: 15:13
 * To change this template use File | Settings | File Templates.
 */
                //seleziona le tipologie di film
                $query = 'SELECT
                            movietype_id, movietype_label
                          FROM
                            movietype
                          ORDER BY
                            movietype_label';
                $result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

while($row = mysql_fetch_assoc($result))
{
    echo $row['movietype_id'] . " " . $row['movietype_label'];
    echo "<br>";
}
?>
    <hr>
<?php

                while ($row = mysql_fetch_assoc($result)){
                    extract($row);
                    echo $movietype_id . ' ';
                    echo $movietype_label.'<br>';
                }

?>