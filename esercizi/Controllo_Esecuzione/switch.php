<html>
<head>
    <title>Controllo escuzione switch PHP</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Controllo escuzione switch PHP</h2>
<?php include 'include_menu.php'; ?>
<hr>
<br>
<p> Il costrutto SWITCH <b>consente di TESTARE IL VALORE di una VARIABILE (o di una espressione)</b>
    e di <p style="text-decoration: underline">definire ed eseguire delle operazioni IN CORRISPONDENZA di un determinato valore
    <br>Scrip di esempio: riconoscimento vocale o consonante...</p>
<hr>
<br>
<?php
    $lettera = "o";
    switch ($lettera)
    {
        case "a";
        case "e";
        case "i";
        case "o";
        case "u";
            $tipo = "vocale";
            break;
        default: $tipo = "consonante";
    }
    print ("La lettera $lettera è una $tipo<br>");
?>
</body>
</html>