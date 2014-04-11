<html>
<head>
    <title>Array Monodimensionale PHP</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Array Monodimensionale</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>E' una lista che associa ad un certo numero di valori le chiavi appropriate</p>
<hr>
<br>
<table border="1">
    <?php
    $vocali = array ("A" , "E", "I", "O", "U");
    print ("<tr><td colspan=\" " . count($vocali) .  "\">");
    print ("<b>Le volcali sono: </b> ");
    print ("</td></tr>");
    print ("</tr>");
    foreach ($vocali as $k => $v)
    {
        print("<td>$v ($k)</td>");
    }
    print ("</tr>");
    ?>
</table>
</body>
</html>