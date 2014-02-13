<?php
    function getBgColor()
    {
        static $col = "black";
        $col=($col=="black"?"white" : "black");
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
$scacchiera[] = array ("P","P","P","P","P","P","P","P");
$scacchiera[] = array (" "," "," "," "," "," "," "," ");
$scacchiera[] = array (" "," "," "," "," "," "," "," ");
$scacchiera[] = array (" "," "," "," "," "," "," "," ");
$scacchiera[] = array (" "," "," "," "," "," "," "," ");
$scacchiera[] = array (" "," "," "," "," "," "," "," ");
$scacchiera[] = array ("P","P","P","P","P","P","P","P");
$scacchiera[] = array ("T","C","A","Q","K","A","C","T");

print ("<table border=\"1\">");
for ($i=0;$i<count($scacchiera);$i++)
{
    print ("<tr>");
    for ($j=0;$j<count($scacchiera[$i]);$j++)
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