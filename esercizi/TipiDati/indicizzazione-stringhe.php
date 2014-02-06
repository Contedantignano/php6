<html>
<head>
    <title>Indicizzazione delle variabili stringa in PHP</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Indicizzazione delle variabili stringa in PHP</h2>
    <?php include 'include_menu.php'; ?>
        <?php
        $variabilestringa = "paperino";
        print("Stringa originale: $variabilestringa{$i}<br><br>");
        print("Stringa verticale: <br>");
        for($i=0; $i<strlen($variabilestringa); $i++)
        {
            print($variabilestringa{$i} . "<br>");
            /** questo comando per ogni iterazione del ciclo stampa una lettera della parola.+
         */
        }
    ?>
</body>
</html>