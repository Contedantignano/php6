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
<?php
 /** Il costrutto SWITCH consente di TESTARE IL VALORE di una VARIABILE (o di una espressione)
 * e di definire ed eseguire delle operazioni IN CORRISPONDENZA di un determinato valore
 */
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