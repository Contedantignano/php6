<html>
<head>
    <title>Operatore + negli array</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Operatore "+" negli array</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Operatore + negli array ha un comportamento diverso;<br>
    <b>L'operatore + associato a elementi array produce L'UNIONE geometrica degli INSIEMI.</b><br>
Si ottiene l'unine eli elemnti del primo con il secondo.
</p><p>Nel caso di SOVRAPPOSIZIONE DI CHIAVI (elementi diversi associati alla stessa chiave) gli elementi dell'elemento a destra del "+" vengono ritenuti più importanti e sostituiranno gli elementi del primo array. </p>
<hr>
<br>
<?php
$rubrica = array ("1234" => "Rag.Rossi",
                  "1235" => "Dott.Bianchi",
                  "1237" => "Ing.Verdi");

$agg = array ("12345" => "Rag.Giallo",
              "12378" => "Dott.Fucsia",
              "12346" => "Avv.Neri");

print ("<b>Rubrica iniziale</b><br>");
    foreach ($rubrica as $k => $v)
    {
        print("$v: $k<br>");
    }
print ("<b>Aggiornamento</b><br>");
    foreach ($agg as $k => $v)
    {
        print("$v: $k<br>");
    }
print ("<b>Rubrica finale</b><br>");
    foreach ($rubrica + $agg  as $k => $v)
    {
        print("$v: $k<br>");
    }
?>
<br>
<hr>

</body>
</html>