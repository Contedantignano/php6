<?php
/**
 * Le variabili vengono passate per valore.
 * CIOE:   Quando una variabile viene associata a un'altra..
 * E' IL SUO VALORE CHE VIENE INSERITO NELLA ZONA DI MEMORIA REFERENZIATA DALLA VARIABILE
 * DI DESTINAZIONE.
 */
?>
<html>
<head>
    <title>Le variabili vengono passate per valore</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Le variabili vengono passate per valore</h2>
<?php include 'include_menu.php'; ?>
<p>Le variabili vengono passate per valore. CIOE:<BR/>
    Quando una variabile viene associata a un'altra..<BR/>
    <b>E' IL SUO VALORE CHE VIENE INSERITO NELLA ZONA DI MEMORIA REFERENZIATA DALLA VARIABILE
    * DI DESTINAZIONE</b>.
</p>
<?php
    $mittente = "Paolino";
    $destinatario = &$mittente;
    $mittente = "Pietrozzu";

    print('$mittente: ' . "$mittente:  <br>\n");
    print('$destinatario: ' . "$destinatario:  <br>\n");
?>
</body>
</html>