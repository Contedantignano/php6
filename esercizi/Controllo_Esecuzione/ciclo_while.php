<html>
<head>
    <title>Ciclo while</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Ciclo while</h2>
<p>il costrutto "Ciclo while" è molto simile al ciclo FOR; qui le variabili che in qualche
    modo influenzano le condizioni sono innestate nel ciclo stesso.</p>
<p>Il ciclo viene effettuato MENTRE LA CONDIZIONE E' TRUE</p>
<?php include 'include_menu.php'; ?>
<hr>
<br>
<?php
    $row =1;
    $maxrow = 10;
    while ($row <= $maxrow)
    {
      print ("Riga $row, ne mancano ancora " . ($maxrow - $row) ." <br>");
        $row++;
    }
?>
</body>
</html>