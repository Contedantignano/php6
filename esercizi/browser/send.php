<html>
<head>
    <title>Leggere le informazioni con il browser</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Leggere le informazioni con il browser</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Leggere le informazioni con il browser</p>
<hr>
<br>
<?php
    $a = $_REQUEST;
    print("<b>Parametri del form HTML:</b><br><br>");
    foreach ($a as $k => $v)
    {
        print "<b>$k</b>: $v<br>";
    }
?>
<br>
<hr>

</body>
</html>