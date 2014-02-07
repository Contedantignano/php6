<html>
<head>
    <title>Ciclo foreach</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Ciclo foreach</h2>
<p>il costrutto foreach consente di effettuare cicli e ripetizioni su tuttu gli elementi di una collezione di array</p>
<?php include 'include_menu.php'; ?>
<hr>
<br>
<?php
$maxrighe = 11;
for ($indice=1; $indice<=$maxrighe; $indice++)
    /** L'operatore nella condizioni significa non maggiore
     * for (inizio: condizione; azione)
     * {
     * istruzioni
     * }
     * IL ciclo for offre la possibilità di non eseguire nessuna iterazione.
     */
{
    print("Questa è la riga $indice di $maxrighe<br>");
}
?>
</body>
</html>*/