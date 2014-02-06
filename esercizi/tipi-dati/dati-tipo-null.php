<html>
<head>
    <title>I dati tipo NULL in PHP</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>I dati tipo NULL in PHP</h2>
    <?php include 'include_menu.php'; ?>
    <?php
    $nome = "mariella";
    $nome = NULL;
    
    if ($nome)
    {
        print("Ciao $nome, benvenuta<br>\n");}
    else
    {
        print("Non ci conosciamo?<br>\n");}
    ?>
</body>
</html>