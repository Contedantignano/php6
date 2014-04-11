<?php
    function swap($a, $b)
        {
            print ("°°°inizio della swap: a=$a - b=$b<br>");
            $temp=$a;
            /** $temp acquisisce il valore di $a */
            $a=$b;
            /** $a acquisice il valore di $b */
            $b=$temp;
            /** $a acquisice il valore di $a tramite $temp che lo ha custodito */
            print ("°°°°fine della swap: a=$a - b=$b<br>");
        }
?>
<html>
<head>
    <title>Passaggio Parametri Per Valore</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Passaggio Parametri Per Valore</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Il <b>Passaggio Parametri Per Valore</b> permette di PASSARE AD UNA FUZIONE DEI VALORI dei
      le cui modifiche, <b>effettuate all'interno della funzione,</b> vengono perse!</p>
      <p>A meno che non siano memorizzate in un DB o tramite GLOBAL</p>
      <p>Per modificare realmente il valore di una variabile all'interno di una funzione dobbiamo
      passare UN RIFERIMENTO alla variabile stessa.</p>
<hr>
<br>
<?php
    $a=12;
    $b=34;
    print ("Scambio di parametri (per valore)<br>");
    swap($a,$b);
    print ("Dopo la swap: a=$a - b=$b<br>");
?>
</body>
