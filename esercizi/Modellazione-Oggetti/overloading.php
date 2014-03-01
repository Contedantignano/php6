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

    public function statomotore()
    {
        print("Adesso il motore del mio veicolo è " . ($this->motoreacceso ? "acceso":"spento") . "<br>");
    }
}
class auto extends veicolo
{
    public function accendi()
    {
        print("Accendo il motore dell'auto<br>");
        $this->motoreacceso = true;
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
<p>Un metodo della classe principale viene ridefinito</p>
<hr>
<br>
<?php
    $veicolo = new veicolo();
    $veicolo->accendi();
    $veicolo->statomotore();
    print ("<br>");
    $auto = new auto();
    $auto->accendi();
    $auto->statomotore();
?>
<br>
<hr>
</body>
</html>