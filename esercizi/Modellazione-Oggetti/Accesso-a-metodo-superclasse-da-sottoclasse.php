<?php
class veicolo
{
    public $motoreacceso;

    public function __construct()
    {
        print("Adesso hai un nuovo veicolo <br>");
        $this->motoreacceso = false;
    }

    public function accendi()
    {
        print("Accendo il motore del mio veicolo<br>");
        $this->motoreacceso = true;
    }
}
class auto extends veicolo
{
    public function __construct()
    {
        parent::__construct();
        print("Il mio nuovo veicolo è un'auto<br>");
    }
    public function accendi()
    {
        parent::accendi();
        print("girando la chiave nel quadro<br>");
        $this->motoreacceso=true;
    }
}
?>
<html>
<head>
    <title>OVERLOADING</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>OVERLOADING-EXTEN</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Un metodo della classe principale viene ridefinito-<br>In questo esercizio attraverso il comando PARENT utilizzo un metodo delle "superclasse" (lo stesso codice) che avevo già ridefinito nella sottoclasse
per evitare di riscrivere codice e per avere maggiore elasticità nel perfezionare i metodi a secondo dell'utilizzo di cui ho bisogno.</p>
<br>
in particolare:<br>
<ul><b>
    <li>per un costruttore: parent::__construct();</li>
    <li>per un metodo tradizioniale: parent::nomemetodo();</li>
    <li>per un metodo tradizioniale: parent::nomeproprietà;</li>
</ul></b>
<hr>
<br>
<?php
$veicolo = new veicolo();
$veicolo->accendi();
print("<br>");
$auto = new auto();
$auto->accendi();
?>
<br>
<hr>
</body>
</html>