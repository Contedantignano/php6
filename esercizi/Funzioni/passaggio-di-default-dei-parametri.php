<?php
    function chiama($nome, $telefono="012345687991")
        {
            print ("<b>Chiamata telefonica:</b><br>");
            print ("Nome: $nome<br>");
            print ("Telefono: $telefono<br><br>");
        }
?>
<html>
<head>
    <title>Passaggio parametri di defautl</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Passaggio parametri di defautl</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>lo script illustra il passaggio di parametri di defautl dalla funzione all'output; <br>
questo avviene perchè nella funzione è stato passato un valore ad uno delle "VARIABILI PARAMETRO DI FUNZIONE";<br>
<b>-Se tale parametro non viene reimpostato dal programma o da fonti input la fuzione utilizza quello di defaul!</b>
</p>
<hr>
<br>
<?php
 chiama ("Paperino","1111111111111");
 chiama ("Pluto","22222222222222");
 chiama ("Minnie","");
?>

</body>
</html>