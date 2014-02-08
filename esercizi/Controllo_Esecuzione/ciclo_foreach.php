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
<?php
    $a= array("Autunno", "Inverno", "Primanvera", "Estate");
    print ("<b>Elementi dell'array: <b/> <br><br>");
    foreach ($a as $v)
    {
       print "$v<br>";
    }
?>
</body>
</html>