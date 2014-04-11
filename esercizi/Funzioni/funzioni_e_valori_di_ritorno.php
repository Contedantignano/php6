<?php
/** Nella prima parte del codice vengono dichiarate la funzioni. Così è la prassi.
 *  Serve a mantenere il codice più ordinato ed è una buona consuetudine.
 */
function operazione($a, $op, $b)
{
    switch($op)
    {
        case "più";
            return ($a + $b);
        case "meno";
            return ($a - $b);
        case "per";
            return ($a * $b);
        case "diviso";
            return ($a / $b);
        default:
            return ("errore!");
    }
}
?>
<html>
<head>
    <title>Più valori di ritorno funzione</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>USO DI RETURN - Più valori di ritorno in una funzione</h2>
<?php include 'include_menu.php'; ?>
<hr>
<br>
<?php
/** Nella prima parte di codice - dopo la funzione - recupero i dati */
$valore1 = 10;
$valore2 = 48;
print ("valore1 = $valore1<br>");
print ("valore2 = $valore2<br>");

/** costruisco un array dove inserisco le operazioni */

$operazioni = array("più","meno","per","diviso","pippo");

/** Utilizzo foreach per CICLARE all'interno dell'Array ($v = è la chiave) */
foreach ($operazioni as $v)
{
    print ("$valore1 $v $valore2 = ");
    print (operazione($valore1, $v, $valore2));
    print ("<br>");
}
?>

</body>
</html>