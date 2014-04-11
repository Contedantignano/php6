
<html>
    <head>
        <title>Is it a leap year?</title>
    <head>
  <body>
    <?php
    date_default_timezone_set('America/New_York');
    $leapyear = date('L');
    if ($leapyear == 1) {
        echo 'Hooray it\'s a leap year';
    } else {
        echo 'Aww, sorry, mate. No leap year this year... ha dimenticavo Puppa\'s uno a zero\'s';
    }
    ?>
  </body>
</html>
