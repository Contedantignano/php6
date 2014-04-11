<html>
<head>
    <title>Ciclo while</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Ciclo while</h2>
<p>il costrutto "Ciclo while" è molto simile al ciclo FOR; <b>qui le variabili che in qualche
    modo influenzano le condizioni sono innestate nel ciclo stesso.</b><br>
    Il ciclo viene effettuato MENTRE LA CONDIZIONE (ed i parametri) E' TRUE</p>
<p>Il ciclo while dura fino a quando la condizione è vera. Per far questo dobbiamo necessariamente far variare la condizione all'interno del ciclo.
Esempio:</p>
<?php include 'include_menu.php'; ?>
<hr>
<br>
Ciclo HILE:<br>
* WHILE (Condizione_1)<br>
* {<br>
* istruzioni da eseguire + eventuali istruzioni di modidica della condizione<br>
* come ad esempio $var_di_condizione+++
* }<br>
<hr>
<br>
<?php
    $row =1;
    $maxrow = 10;
    while ($row <= $maxrow)
    {
      print ("Riga $row, ne mancano ancora " . ($maxrow - $row) ." <br>");
        /** modifica condizioni */
        $row++;
    }
?>
</body>
</html>