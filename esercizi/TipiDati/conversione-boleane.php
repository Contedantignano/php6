<html>
<head>
    <title>Conversioni Boleane True/False in PHP</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Conversioni Boleane True/False in PHP</h2>
<p>Esercizio sulle conversioni boleane</p>
<p>Le convesioni bolane sono importantissime; convenzionalmente infatti PHP processa i dati e converte in valori <br>
   boleani in questo modo:</p></br>
<ol>
    <li>Una VARIABILE NUMERICA di valore ZERO =  FALSE (è convertita in false)</li>
    <li>Una VARIABILE STRINGRA di valore VUOTA =  FALSE (è convertita in false)</li>
    <li>Una VARIABILE ARRAY    di con ZERO elementi =  FALSE </li>
    <li>Una valore NULL  =  FALSE </li>
</ol>
<ol>
    <li><B>Qualunque oggetto istanziato = TRUE</B></li>
</ol>
<?php include 'include_menu.php'; ?>

    <?php
        /** dichiarazione di variabili */
        $mariti = "";
        $statocivile = "";
        $nome = "Elena";
        /** inizio ciclo condizionale */

        if ($mariti)
        { $statocivile = "coniugata"; }
        else
        { $statocivile = "nubile"; }

        if(!$nome)
        { $nome = "sconosciuta"; }

        print("Cara $nome, il tuo stato civile è <b>$statocivile</b>");
        ?>
</body>
</html>