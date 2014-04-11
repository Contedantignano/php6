<html>
<head>
    <title>Altri metodi di inizializzazione</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Altri metodi di inizializzazione</h2>
<?php include 'include_menu.php'; ?>
<hr>
<b>////////////////</b>
<p>FF<b>chiavi persolanizzate</b>
    (il ruolo) ed il nome:<br>
<b>$nome_a rray[nome_chiave] = valore;</b><br>
</p>
<hr>
<br>
<?php
    $persona = array(
        "Nome" => "Carlo",
        "Cognome" => "Gicomini",
        "Indirizzo" => "Via Roma 1",
        "Citta" => "Livorno",
        "Cap" => "57125",
    );

        print ("<b>Scheda personale</b><br>");
        foreach ($persona as $k => $v)
        {
            print("$k: $v<br>");
        }
?>
</body>
</html>
