<html>
<head>
    <title>I Valori Boleani True/False in PHP</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>I Valori Boleani True/False in PHP</h2>
<p>Le variabili boleane Vero e Falso sono molto importanti per le iterazioni condizionali</p>
<?php include 'include_menu.php'; ?>
<?php
 /** Per dichiarare una variabile boleana si usa questa sintassi */
 $utenteregistrato = TRUE;
 $utenteamministratore = FALSE;
 if ($utenteregistrato)
 {
     print("clicca <a href=\"\">qua</a> per modificare il tuo profilo<br>");

     if ($utenteamministratore)
     {
     print("clicca <a href=\"\">qua</a> per modificare accedere all'amministrazione<br>");
     }
 }

 else {
     print("clicca <a href=\"\">qua</a> per registrarti<br>");
      }
?>

</body>
</html>