<html>
<head>
    <title>Uso deigli Array 2</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Uso deigli Array 2</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Aggiunta di elementi di navigazione</p>
<hr>
<br>
<?php
$ruolo[] = "Amministratore";
$ruolo[] = "Direttore Genereale";
$ruolo[] = "Troione";
$ruolo[] = "Tu ma a peora";

foreach ($ruolo as $k => $v)
    /**il costrutto foreach consente di effettuare cicli e ripetizioni su tutti
    gli elementi di una collezione di array; */
{
    print ("Ruolo: $k - Nome: $v<br>");
}
?>

</body>
</html>