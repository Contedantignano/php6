<html>
<head>
    <title>Comando BREAK</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Comando BREAK</h2>
<p>BREAK è da utilizzare <b>per uscire e terminare dei cicli apparentemente infiniti</b> come ad esempio WHILE.
L'istruzione è posta dentro il ciclo stesso, ovunque sia necessario <br>
[ad esempio: if ($row==15) break; $row++;]
</p>

<?php include 'include_menu.php'; ?>
<hr>
<br>
<?php
$row =1;
$maxrow = 50;
while ($row <= $maxrow)
{
    print ("Riga $row, ne mancano ancora " . ($maxrow - $row) ." <br>");
    if ($row==15) break;
    $row++;
}
?>
</body>
</html>