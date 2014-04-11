<?php
/** setto una variabile che invio a jokesite*/
  session_start();
  $_SESSION['username'] = 'Joe12345';
  $_SESSION['authuser'] = 1;
?>
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


