<?php
    class veicolo
    {
        private $marca;

        public function __construct($marca)
        {
            $this->marca=$marca;
            print ("Adesso ho il nuovo veicolo $marca<br>");
        }
    }
?>
<html>
<head>
    <title>Uguaglianza tra oggetti</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Uguaglianza tra oggetti</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Uguaglianza tra oggetti; funziona come quella per le variabili
e cioè un oggetto è identico se punta alla stessa zona (o Locazione) di memoria.</p>
<hr>
<br>
<ol>
    <li>L'operatore <b>==</b> verifica l'uguaglianza tra gli oggetti e <b>restituisce TRUE</b> solo nel caso
    in cui <b>tutte le proprietà interne degli oggetti siano uguali.</b></li>
</ol>
<br>
<hr>
<?php
    $veicolo1 = new veicolo("Fiat");
    $veicolo2 = new veicolo("Ford");
    $veicolo3 = new veicolo("Ford");
    $veicolo4 = $veicolo1;
    print("<br>");
    if ($veicolo1==$veicolo2)
    {
      print ('$veicolo1 e $veicolo2 ' . " sono uguali <br> ");
    }
    else
    {
      print ('$veicolo1 e $veicolo2 ' . " NON sono uguali <br> ");
    }

    if ($veicolo1===$veicolo2)
    {
      print ('$veicolo1 e $veicolo2 ' . " sono identici <br> ");
    }
    else
    {
      print ('$veicolo1 e $veicolo2 ' . " NON sono identici<br> ");
    }

    if ($veicolo1==$veicolo3)
    {
      print ('$veicolo1 e $veicolo3 ' . " sono uguali <br> ");
    }
    else
    {
      print ('$veicolo1 e $veicolo3 ' . " NON sono uguali <br> ");
    }
    if ($veicolo1===$veicolo3)
    {
        print ('$veicolo1 e $veicolo3 ' . " sono identici <br> ");
    }
    else
    {
        print ('$veicolo1 e $veicolo3 ' . " NON sono identici<br> ");
    }
    if ($veicolo1==$veicolo4)
    {
        print ('$veicolo1 e $veicolo4 ' . " sono uguali <br> ");
    }
    else
    {
        print ('$veicolo1 e $veicolo4 ' . " NON sono uguali <br> ");
    }
    if ($veicolo1===$veicolo4)
    {
        print ('$veicolo1 e $veicolo4 ' . " sono identici <br> ");
    }
    else
    {
         print ('$veicolo1 e $veicolo4 ' . " NON sono identici<br> ");
    }

    if ($veicolo2==$veicolo3)
    {
        print ('$veicolo2 e $veicolo3 ' . " sono uguali <br> ");
    }
    else
    {
        print ('$veicolo2 e $veicolo3 ' . " NON sono uguali <br> ");
    }
    if ($veicolo2===$veicolo3)
    {
        print ('$veicolo2 e $veicolo3 ' . " sono identici <br> ");
    }
    else
    {
        print ('$veicolo2 e $veicolo3 ' . " NON sono identici<br> ");
    }
?>
</body>
</html>