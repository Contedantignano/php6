<?php
   session_start();


   //verifica se l'utente ha fatto la log-in con una password valida
   if ($_SESSION['authuser'] !=1) {
   echo 'Sorry, but you dont\' t have permission to view this page!';
   exit();
   }
 ?>
<html>
<head>
    <title>
    <?php

    if (isset($_GET['favmovie'])) {
    echo ' - ';
    echo $_GET['favmovie'];
    }
    ?>
    </title>
<head>
    <body>
    <?php include 'header.php'; ?>
    <?php


    $favmovies = array ('Life of Brian',
                       ' Stripes',
                       ' Office Space',
                       ' The Holy Grail',
                       ' Matrix ',
                       ' Terminator 2',
                       ' Start Track IV',
                       ' Close Encounters of the Kind ',
                       ' Caddyshack ',
                       ' La tua mamma a peora');


    if (isset($_GET['favmovie'])) {
      echo 'Welcome to our site,  ';
      echo $_SESSION['username'];
      echo '! <br/>';
      echo 'My fovourite movie is ';
      echo $_GET['favmovie'];
      echo '<br/>';
      $movierate=5;
      echo 'My movie rating for this movie is: ';
      echo $movierate;
    } else {


      echo 'My top ' . $_POST['num'] . ' favorite movies';

        if (isset($_POST['sorted'])) {
            sort($favmovies);
            echo ' (sorted alphabetically) ';
        }
        echo ' are: <br/>';
        $numlist = 0;
        echo '<ol>';
        while ($numlist < $_POST['num']) {
            echo '<li>';
            echo $favmovies[$numlist];
            echo '</li>';
            $numlist = $numlist + 1;
        }
    }
    ?>
    <?php include 'footer.php'; ?>
  </body>
</html>