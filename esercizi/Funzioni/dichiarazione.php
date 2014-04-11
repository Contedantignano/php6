<?php
    function somma($a,$b)
        {
            return ($a + $b);
        }
?>
<html>
<head>
    <title>Dichiarazione di funzione PHP</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Dichiarazione di funzione PHP</h2>
<?php include 'include_menu.php'; ?>
<hr>
<br>
<?php
    $valore1 = 10;
    $valore2 = 48;
    print ("valore1 = $valore1<br>");
    print ("valore2 = $valore2<br>");
    $somma = somma($valore1, $valore2);
    print("somma = $somma<br>");
?>

</body>
</html>