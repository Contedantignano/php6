<html>
<head>
    <title>Ciclo foreach con chiave di accesso</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Ciclo foreach con chiave di accesso</h2>
<p>il costrutto foreach consente di effettuare cicli e ripetizioni su tutti<br>
    gli elementi di una collezione di array; <br>
    <b>in questo esempio viene aggiunta una chiave di accesso ad ogni valore dell'array</b></p>
<?php include 'include_menu.php'; ?>
<hr>
<br>
Foreach con <b>chiave di accesso</b> è strutturato cos':<br>
* foreach ($array as <b>$chiave</b>  => $valore)<br>
* {<br>
* istruzioni da eseguire per ogni elemento dell'array<br>
* }<br>
* a ogni iterazione viene leto un elemento di array e viene assegnato a valore, <b>per cui su tale elemento</b><br>
è possibile effettuare qualsiasi tipo di operazione di lettura.
<hr>
<br>
<?php
$a= array("Autunno", "Inverno", "Primanvera", "Estate");
print ("<b>Elementi dell'array: <b/> <br><br>");
print ("chiave - Valore<br>");
foreach ($a as $k => $v)
{
    print "$k - $v<br>";
}
?>
</body>
</html>