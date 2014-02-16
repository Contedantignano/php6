<html>
<head>
    <title> in PHP</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Array rappresentazione spaziale - IL cubo</h2>
<?php include 'include_menu.php'; ?>
<hr>
<h2>Array rappresentazione spaziale</h2>
<p>La multidimensionalità consente la costruzione di stutture complesse e non rappresentabili sul piano dell'interfaccia web</p>
<hr>
<br>
<?php
for ($x=1;$x<=10;$x++);
  {
    for ($y=1;$y<=10;$y++);
      {
        for ($z=1;$z<=10;$z++);
          {
               $cubo[$x][$y][$z] = rand(1,100);
          }
      }

  }
for ($x=1;$x<=10;$x++);
  {
    for ($y=1;$y<=10;$y++);
      {
       for ($z=1;$z<=10;$z++);
         {
         print("\$cubo[$x][$y][$z] = {$cubo[$x][$y][$z]}<br>");
         }
      }
  }
?>
<br>
<hr>

</body>
</html>