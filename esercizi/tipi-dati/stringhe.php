<html>
    <head>
        <title>Le Stringhe e PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <h2>Dati Stringa in PHP</h2>
    <?php include 'include_menu.php'; ?>
    <?php
    /**test php UTF */
    header("Vary: Accept");
    header("Content-Type: text/html;charset=UTF-8");
    echo'<?xml version="1.0" encoding="UTF-8?>';
    ?>
       <?php
       /** le stringhe stanno dentro degli appositi delimitatori */
       $variabilestringa = "paperino";
       print("il valore della variabile $variabilestringa è $variabilestringa<br>");
       print('il valore della variabile $variabilestringa è $variabilestringa<br>');
       print('il valore della variabile $variabilestringa ' .  "è $variabilestringa<br>");
       print('stampo un singolo apice: \' e un doppio apice: " <br>');
       print("stampo un singolo apice: ' e un doppio apice: \" <br>");
       ?>

       <?php
       header('Content-Language: it');
       header('Content-type: text/html;charset=utf-8');
       echo 'àèéìòù' . "\n";
       ?>

    </body>
</html>

