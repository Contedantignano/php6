<?php
    class veicolo
    {
        private $marca;
        private $modello;
        private $colore;
        private $targa;

        public function  __construct($marca, $modello, $colore, $targa)
        {
            $this->marca=$marca;
            $this->modello=$modello;
            $this->colore=$colore;
            $this->targa=$targa;
            print("Adesso ho il nuovo veicolo $marca - $modello - $colore - $targa<br>");
        }

        public function simile($veicolo)
        {
            return (
            ($this->marca==$veicolo->marca) AND
            ($this->modello==$veicolo->modello) AND
            ($this->colore==$veicolo->colore) );

        }
    }
?>
<html>
<head>
    <title>Uguaglianza personalizzata tra gli oggetti</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Uguaglianza personalizzata tra gli oggetti</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Nella programmazione ad oggetti in tema di uguaglianza ed identicità è possibile <b>definire parametri
   di confronto personalizzati</b> DIVERSI DALLO STANDARD PHP; ma che siano compatibili con i requisiti funzionali.</p>
<hr>
<br>
<?php
    $veicolo1 = new veicolo("Fiat", "Panda" , "Rossa" , "AB123CD");
    $veicolo2 = new veicolo("Fiat", "Panda" , "Rossa" , "AB123CD");
    $veicolo3 = new veicolo("Fiat", "Panda" , "Rossa" , "TR435FF");
    $veicolo4 = new veicolo("Fiat", "Panda" , "Verde" , "YT654EF");
    print("<br>");

    if ($veicolo1==$veicolo2)
    {
        print('$veicolo1 e $veicolo2' . "sono uguali<br>");
    }
        else
        {
            print('$veicolo1 e $veicolo2' . "NON sono uguali<br>");
        }
    if ($veicolo1->simile($veicolo2))
    {
        print('$veicolo1 e $veicolo2' . "sono simili<br>");
    }
    else
    {
        print('$veicolo1 e $veicolo2' . "NON sono simili<br>");
    }

    if ($veicolo1==$veicolo3)
    {
        print('$veicolo1 e $veicolo3' . "sono uguali<br>");
    }
    else
    {
        print('$veicolo1 e $veicolo3' . "NON sono uguali<br>");
    }
    if ($veicolo1->simile($veicolo3))
    {
        print('$veicolo1 e $veicolo3' . "sono simili<br>");
    }
    else
    {
        print('$veicolo1 e $veicolo3' . "NON sono simili<br>");
    }

    if ($veicolo1==$veicolo4)
    {
        print('$veicolo1 e $veicolo4' . "sono uguali<br>");
    }
    else
    {
        print('$veicolo1 e $veicolo4' . "NON sono uguali<br>");
    }
    if ($veicolo1->simile($veicolo4))
    {
        print('$veicolo1 e $veicolo4' . "sono simili<br>");
    }
    else
    {
        print('$veicolo1 e $veicolo4' . "NON sono simili<br>");
    }
?>
<br>
<hr>

</body>
</html>