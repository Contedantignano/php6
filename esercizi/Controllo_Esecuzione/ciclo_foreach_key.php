<html>
<head>
    <title>Ciclo foreach con chiave di accesso</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Ciclo foreach con chiave di accesso</h2>
<p>il costrutto foreach consente di effettuare cicli e ripetizioni su tutti<br>
    gli elementi di una collezione di array; in questo esempio viene aggiunta una chiave di accesso ad ogni valore dell'array</p>
<?php include 'include_menu.php'; ?>
<hr>
<br>
<?php
$a= array("Autunno", "Inverno", "Primanvera", "Estate");
print ("<b>Elementi dell'array: <b/> <br><br>");
foreach ($a as $k => $v)
{
    print "$k - $v<br>";
}
?>
</body>
</html>