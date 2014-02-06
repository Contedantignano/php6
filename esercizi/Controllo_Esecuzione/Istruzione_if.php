<html>
<head>
    <title>Indicizzazione delle variabili stringa in PHP</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Indicizzazione delle variabili stringa in PHP</h2>
<?php include 'include_menu.php'; ?>
<hr>
<?php
  $number = 54;
  $stringa = "54";
  if ($number==$stringa)
  {
      print ('$number e $stringa sono uguali' . "<br>");
    if ($number===$stringa)
    { print ('$number e $stringa sono identici' . "<br>");}
        else
        { print ('$number e $stringa non sono identici' . "<br>");}
  } else {
      print ('$number e $stringa non sono uguali' . "<br>");
  }
?>
</body>
</html>

