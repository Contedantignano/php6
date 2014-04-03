<html>
<head>
    <title>$_REQUEST</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>$_REQUEST</h2>
<?php include 'include_menu.php'; ?>
<hr>
<br>
<?php
    print ("<b>Scheda cliente</b><br><br>");
    print ("Nome: " . $_REQUEST['nome'] . "Cognome: " . $_REQUEST['nome'] . "<br>" );
    print ("Sesso: " . ($_REQUEST['sesso']=="m"?"Maschio":"Femmina") . "<br>" );
    print ("Nato il: " . $_REQUEST['data'] . " a " . $_REQUEST['luogo'] );
?>

<br>
<hr>

</body>
</html>