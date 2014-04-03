<?php
class veicolo
{
    private $marca;
    private $modello;
    private $colore;
    private $targa;

    public function __construct($marca, $modello, $colore, $targa)
      {
          $this->marca=$marca;
          $this->modello=$modello;
          $this->colore=$colore;
          $this->targa=$targa;
          print("Adesso ho il nuovo veicolo $marca - $modello - $colore - $targa<br>");
      }

    public function stampa()
        {
            print("<br>");
            print("*  VEICOLO *<br>");
            print("Marca: " . $this->marca . "; ");
            print("Modello: " . $this->modello . "; ");
            print("Colore: " . $this->colore . "; ");
            print("Targa: " . $this->targa . "; ");
            print("<br>");
        }
    public function __clone()
    {
        $this->marca = ("clone di " . $that->marca);
        $this->modello = ("clone di " . $that->modello);
        $this->colore = ("clone di " . $that->colore);
        $this->colore = ("clone di " . $that->targa);
    }
}
?>
<html>
<head>
    <title>Clonazione degli oggetti</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Clonazione degli oggetti</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Clonazione degli oggetti</p>
<hr>
<br>
<?php
$veicolo1 = new veicolo("Fiat","Panda","Rossa", "AB123CD");
$veicolo2 = $veicolo1 -> _clone();
$veicolo1 ->stampa();
$veicolo2 ->stampa();

print("<br>");


if ($veicolo1==$veicolo2)
{ print('$veicolo1 e $veicolo2 ' . "sono uguali<br>"); }
else
{ print('$veicolo1 e $veicolo2 ' . "NON sono uguali"); }
?>
<br>
<hr>

</body>
</html>