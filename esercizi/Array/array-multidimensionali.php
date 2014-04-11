<?php
    function getBgColor()
    {
        static $col = "black";
        $col=($col=="black" ? "white" : "black");
        return $col;
    }

    function getColor()
    {
        static $index = 1;
        if($index <= 16)
        {$col="red";}
        else
        {$col="green";}
        $index++;
        return $col;
    }
?>

<html>
<head>
    <title>Array MultiDimensionali</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Array MultiDimensionali - La Scacchiera</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>L'Array Multidimensionale è una Array che ne contiene Altri.<br>Questa caratteristica consente di sviluppare
struttura complesse come come matrici, strutture spaziali, o dotate di un numero superiore di dimensioni.</p>
<br><b>Costruzione di una scacchiera</b>
<hr>
<br>
<?php
$scacchiera[] = array ("T","C","A","Q","K","A","C","T");
//** $scacchiera è già una ARRAY SENZA KEY - qui si aggiunge un ARRAY ad un ARRAY */
$scacchiera[] = array ("P","P","P","P","P","P","P","P");
$scacchiera[] = array (" "," "," "," "," "," "," "," ");
$scacchiera[] = array (" "," "," "," "," "," "," "," ");
$scacchiera[] = array (" "," "," "," "," "," "," "," ");
$scacchiera[] = array (" "," "," "," "," "," "," "," ");
$scacchiera[] = array (" "," "," "," "," "," "," "," ");
$scacchiera[] = array ("P","P","P","P","P","P","P","P");
$scacchiera[] = array ("T","C","A","Q","K","A","C","T");
//** La scacchiera è disegnata ed impostata dagli array qui sopra. Lo schema è già visibile */
print ("<table border=\"1\">");
//** Apro la tabella o il div di contenimento */
for ($i=0;$i<count($scacchiera);$i++)
//** Questo primo ciclo for scandisce e attiva tutte le righe della scacchiera */
{
    print ("<tr>");
        for ($j=0;$j<count($scacchiera[$i]);$j++)
            //** Questo secondo ciclo interno "for" scandisce TUTTI GLI ELEMENTI del ciclo precedente della scacchiera */
        {
            print ("<td bgcolor=\" ". getBgColor() ."\"><font color=\" ". getColor() ."\">" . ($scacchiera[$i][$j]==" " ? "&nbsp; " :$scacchiera[$i][$j]) . "</font></td>");
        }
    print ("</tr>");
    getBgColor();
}
print ("</table>");
?>
</body>
</html>