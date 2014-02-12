<html>
<head>
    <title>Uso deigli Array</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Uso deigli Array</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Aggiunta di elementi di navigazione</p>
<hr>
<br>
<table border="1">
    <?php
    $citta = array ("Torino" , "Milano" , "Roma");
    $citta[] = "Napoli";
    $citta[] = "Palermo";
    $citta[] =  "Cagliari";

    print ("<table border=\"1\">");
    print ("<tr><td>Elenco città</td></tr>");
        for ($i=0;$i<count($citta);$i++)
        {
            print ("<tr><td>$citta[$i]</td></tr>");
        }
    print ("</table>");
    ?>
</table>
</body>
</html>