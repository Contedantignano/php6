<html>
<head>
    <title>Istruzione EXIT</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Istruzione EXIT</h2>
<?php include 'include_menu.php'; ?>
<hr>
<br>
<?php
  $maxrighe = 10;
for ($indice=$maxrighe; $indice>=0; $indice--) {
    if ($indice==0) exit;
    print("$maxrighe / $indice =  " . ("$maxrighe / $indice") . "<br>" );
}
?>
</body>
</html>