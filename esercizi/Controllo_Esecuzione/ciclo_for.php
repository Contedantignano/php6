<html>
<head>
    <title>Ciclo for</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Ciclo For</h2>
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
</html>