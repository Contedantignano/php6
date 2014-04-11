<?php
/** Le funzioni si definiscono sempre prima del codice HTML */
function setConto()
{
    $contocorrente = "213456789/AB";
    print ("Dentro la funzione il numero di conto è <b>$contocorrente</b><br><br>");
    global $contocorrente;
    print ("Dentro la funzione il numero di conto (global) è <b>$contocorrente</b><br><br>");
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
<p>Con il COMANDO GLOBAL <B>>REFERENZIAMO</B> una variabile all'interno della funzione in modo
che assuma il valore di un'altra variabile inizializzata fuori della funzione.</p>
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