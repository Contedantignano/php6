<?php
function swap(&$a, &$b)
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
    <title>Passaggio Parametri Per Riferimento (&)</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Passaggio Parametri Per Riferimento <b>(&$var)</b></h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Passaggio di variabili per riferimento assegna un valore ad una variabile in una<br>
che viene conservato. Accade perchè al nome di variabile <b>è stato assegnato il carattere &</b><br>
e che indica che quella variabile è stata passata per riferimento.</p>
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
>