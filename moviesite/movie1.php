<?php
  session_start();
  $_SESSION['username'] = $_POST['user'];
  $_SESSION['userpass'] = $_POST['pass'];
  $_SESSION['authuser'] = 0;
  if (($_SESSION['username']=='Joe') and
     ($_SESSION['userpass']=='12345')) {$_SESSION['authuser'] = 1;
      } else {
      echo 'Sorry but you dont\'t have permission to view this page!';
      exit();
  }
?>
<html>
<head>
    <title>Find my Fovourite Movie!</title>
<head>
<body>
<?php include 'header.php'; ?>
<?php
    $myfavmovie = urlencode('Life of Brian');
    echo "<a href=\"jokesite.php?favmovie=$myfavmovie\">";
    echo "Click here to see information about my favourite movie!";
    echo "</a>";
?>
<br/>
Or choose how many movies you would you like to see:
<br/>
<form method="post" action="moviesite.php">
    <p>Enter number of movies (up to 10):</p>
     <input type="text" name="num" maxlength="2" size="2" />
    <br/>
    Check to sort alphabetically:
    <input type="checkbox" name="sorted" />
    </p>
    <input type="submit" name="submit" value="Submit" />
</form>
<?php include 'footer.php'; ?>
</body>
</html>


