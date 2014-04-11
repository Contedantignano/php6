<?php
class persona
{
    //Attributi
    private $name;

        //Costruttore
        public function __construct($n)
        {
            $this->name = $n;
            //Oggetto creato in runtime con la variabile di appoggio
            print("E' stato creato l'oggetto " . $this->name . "<br>");
        }

        //Distruttore
        public function __destruct()
        {   //il distruttore non accetta parametri.
            print("L'oggetto " . $this->name .  "  è stato distrutto<br>");
        }
}
?>
<html>
<head>
    <title>Costruttore e Distruttore</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Costruttore e Distruttore</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Costruttore e Distruttore di oggetti</p>
<hr>
<br>
<?php
   print("Inizio Script<br>");
   $utente = new persona("Paperino");
   $utente = new persona("Topolino");
   print("Fine script<br>");
?>

</body>
</html>