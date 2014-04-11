<html>
<head>
    <title>Comando CONTINUE</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Comando CONTINUE</h2>
<p>CONTINUE è da utilizzare <b>all'interno dei cicli</b> PER DECIDERE di volta in volta SE CONTINUARE
   con l'esecuzione o meno dello script. L'istruzione è posta dentro il ciclo stesso, ovunque sia necessario.
</p>
<?php include 'include_menu.php'; ?>
<hr>
<br>
<?php
$row =1;
$maxrow = 100;
while ($row<=$maxrow) {
    $resto = (int)($maxrow % $row);
    if ($resto !=5)
    { $row++;
     continue;
    } print ("$maxrow / $row =". (int)($maxrow / $row) . "<br>");
      print ("Il resto è " . $resto . "<br><br>");
      $row++;
    }
?>
</body>
</html>