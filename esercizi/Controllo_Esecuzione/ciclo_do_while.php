<html>
<head>
    <title>Ciclo do-while</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Ciclo do-while</h2>
<p>il costrutto Ciclo Do-While <strong>prima esegue il primo ciclo</strong>e poi controlla la condizione.</p>
<p>Il ciclo viene effettuato; il test eseguito in fondo al primo ciclo serve a determinare se
    ripetere il ciclo o bloccarne l'esecuzione</p>
<?php include 'include_menu.php'; ?>
<hr>
<br>
<?php
    $i =10;
    do{
        print ($i-- . " <br>");
    } while ($i>0);
?>
</body>
</html>