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
<html>
<head>
    <title>Add movie</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="commit.php?action=add&type=movie" method="post">
    <table>
        <tr>
            <td>Movie name</td>
            <td><input type="text" name="movie_name"/></td>
        </tr>
        <tr>
            <td>Movie type</td>
            <td>
                <select name="movie_type"/>
                <?php
                //seleziona le tipologie di film
                $query = 'SELECT
                            movietype_id, movietype_label
                          FROM
                            movietype
                          ORDER BY
                            movietype_label';
                $result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));
                //Popola la select
                while ($row = mysql_fetch_assoc($result)) {
                    //foreach ($row as $value) {
                        echo '<option value="'. $row['movietype_id'] .'">' . $row['movietype_label'] . '</option>';
                   // }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Movie year</td>
            <td><select name="movie_year">
            <?php
                for ($yr = date("Y"); $yr >= 1970; $yr--) {
                    echo '<option value="' . $yr .'">' . $yr .'</option>';
                }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Lead actor</td>
            <td><select name="movie_leadactor">
                    <?php
                    //seleziona le tipologie di film
                    $query = 'SELECT
                            people_id, people_fullname
                          FROM
                            people
                          WHERE
                            people_isactor = 1
                          ORDER BY
                            people_fullname';
                    $result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

                    //Popola la select
                    while ($row = mysql_fetch_assoc($result)) {

                        //foreach ($row as $value) {
                            echo '<option value="' . $row['people_id'] .'">';
                            echo $row['people_fullname'] .'</option>';
                        //}
                    }
                    ?>
                 </select>
            </td>
        </tr>
        <td>Director</td>
        <td><select name="movie_director">
                <?php
                //seleziona le tipologie di film
                $query = 'SELECT
                            people_id, people_fullname
                          FROM
                            people
                          WHERE
                            people_isdirector = 1
                          ORDER BY
                            people_fullname';
                $result = mysql_query($query, $dbcnx) or die (mysql_error($dbcnx));

                //Popola la select
                while ($row = mysql_fetch_assoc($result)) {
                    //foreach ($row as $value) {
                        echo '<option value="' . $row['people_id'] .'">';
                        echo $row['people_fullname'] .'</option>';
                    //}
                }
                ?>
            </select>
        </td>
        <tr>
            <td colspan="2" style="text-align: center;"><input type="submit" name="submit" value="add" /></td>
        </tr>
    </table>
</form>
</body>
</html>