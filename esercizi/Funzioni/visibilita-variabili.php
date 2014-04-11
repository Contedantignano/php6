<?php
/** Le funzioni si definiscono sempre prima del codice HTML */
function setConto()
{
    $contocorrente = "213456789/AB";
    /** questa variabile è definita e visibile solo all'interno e sarà sovrascritta */
    print ("Dentro la funzione il numero di conto è <b>$contocorrente</b><br><br>");
}
?>
<html>
<head>
    <title>Visibilità delle Variabili in PHP</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Visibilità delle Variabili in PHP</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Le variabili utilizzate (DEFINITE) all'interno delle funzioni sono VISIBILI SOLO nella funzione stessa.
    e non esistono fuori del contesto.</p>
<hr>
<br>
<?php
$contocorrente = "12345678/FE";
setConto();
print ("Fuori della funzione il conto corrente è <b>$contocorrente</b>");
?>
<b></b>
</body>
</html>