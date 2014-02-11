<html>
    <head>
        <title>Le Stringhe e PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <h2>Dati Stringa in PHP</h2>
    <?php include 'include_menu.php'; ?>
    <br>
       <?php
       /** le stringhe stanno dentro degli appositi delimitatori */
       $variabilestringa = "paperino";
       print("il valore della variabile $variabilestringa è $variabilestringa<br>");
       print('il valore della variabile $variabilestringa è $variabilestringa<br>');
       print('il valore della variabile $variabilestringa ' .  "è $variabilestringa<br>");
       print('stampo un singolo apice: \' e un doppio apice: " <br>');
       print("stampo un singolo apice: ' e un doppio apice: \" <br>");
       ?>
    </body>
</html>

