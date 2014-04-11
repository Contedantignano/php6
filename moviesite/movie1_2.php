<!--Assegno la variabile e la invio tramite URL ad un file che la estrarrà con $_GET-->

<html>
<head>
    <title>Find my Fovourite Movie!</title>
<head>
<body>
<?php
    $myfavmovie = urlencode('Life of Brian');
    echo "<a href=\"jokesite.php?favmovie=$myfavmovie\">";
    echo 'Click here to see information about my favourite movie!';
    echo '</a>';
?>
</body>
</html>


