<html>
<head>
    <title>Uso deigli Array 2</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Uso deigli Array 2</h2>
<?php include 'include_menu.php'; ?>
<hr>
<b>Secondo ciclo con $k Chiave definita</b>
<p>In questo esempio è stato creato un array $ruolo associando della <b>chiavi persolanizzate</b>
    (il ruolo) ed il nome:<br>
<b>$nome_a rray[nome_chiave] = valore;</b><br>
</p>
<hr>
<br>
<?php
$ruolo["Amministratore"] = "Faustone Papettone";
$ruolo["Direttore Genereale"] = "Rocco Siffredi";
$ruolo["Troione"] = "Francona della Curva";
$ruolo["Tu ma a peora"] = "Ci sta bene!";

foreach ($ruolo as $k => $v)
    /**il costrutto foreach consente di effettuare cicli e ripetizioni su tutti
    gli elementi di una collezione di array; */
{
    print ("<b>Ruolo:</b> $k | <b>Nome:</b> $v<br>");
}
?>
</body>
</html>