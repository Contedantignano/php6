<html>
<head>
    <title>IF-ELSE-IF PHP</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>IF ELESE IF CONTROLLO DELLA RIPRODUZIONE DEL CODICE</h2>
<p>E' <b>utilizzato per scrivere condizioni di iterazioni molto potenti</b> che prevedono un alto numero di condizioni.</p>
<?php include 'include_menu.php'; ?>
<hr>
<br>
<?php
    $anni = 54;
    $riduzione = FALSE;
    $biglietto = 0;
        if ($anni <= 12)
            /** l'operatore indica NON Maggiore  */
        {
            print ("Hai $anni anni, quindi hai diritto allo sconto<br>");
        $biglietto = 10;
        }
        elseif (($anni > 12)&&$riduzione)
           {
            print ("Hai hai diritto ad una riduzione<br>");
            $biglietto = 15;
           }
           else
           {
            print ("Non hai diritto a sconti o riduzioni<br>");
            $biglietto =  30;
           }
            print ("Il tuo biglietto costa: $biglietto euro<br>");
?>
</body>
</html>