<html>
<head>
    <title>Ciclo foreach</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Ciclo foreach</h2>
<p>il costrutto foreach consente di effettuare cicli e ripetizioni su tutti<br>
    gli elementi di una collezione di array</p>
<?php include 'include_menu.php'; ?>
<hr>
<br>
E' strutturato cos':<br>
* foreach ($array as $valore)<br>
* {<br>
* istruzioni da eseguire per ogni elemento dell'array<br>
* }<br>
* a ogni iterazione viene leto un elemento di array e viene assegnato a valore, <b>per cui su tale elemento</b><br>
è possibile effettuare qualsiasi tipo di operazione di lettura.
<hr>
<br>
<?php
    $a= array("Autunno", "Inverno", "Primanvera", "Estate", "Cacca", "Merda" , "Culo");
    print ("<b>Elementi dell'array: <b/> <br><br>");
    foreach ($a as $valore)
    {
       print "$valore<br>";
    }
?>
</body>
</html>