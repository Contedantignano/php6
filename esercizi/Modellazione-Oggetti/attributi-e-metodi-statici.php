<?php
class utilities
{
    private static $counter=0;
    public static $siteurl = "http://www.mysite.com";
    const ROOTPATH ="/application/web";

    public static function getcounter()
    {
        return self::$counter++;
    }
}
?>
<html>
<head>
    <title>Attributi e metodi statici</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Attributi e metodi statici</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Un attributo statico può essere richiamato direttamente dalla classe <b>senza dover per forza creare un oggetto istanza</b> della classe stessa
</p>
<p>La sintassi è la seguente:</p>
<ul style="font-weight: bold;">
    <li>nomeclasse::$nomeattributo</li>
    <li>nomeclasse::nomemetodo()</li>
</ul>
<hr>
<br>
<?php
        print("siteurl:  " . utilities::$siteurl . "<br>");
        print("ROOTPATH:  " . utilities::ROOTPATH . "<br>");
        for($i=0;$i<5;$i++)
        {
            print("counter: " . utilities::getcounter() . "<br>");
        }
?>
<br>
<hr>

</body>
</html>