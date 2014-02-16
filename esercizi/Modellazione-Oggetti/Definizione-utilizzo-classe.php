<?php
    class persona
    {
        //attributi
        private $name;

        //Costruttore
        public function __construct($n)
        {
            $this->name = $n;
        }
        //Metodi
        public function getName()
        {
            return $this->name;
        }

    }
?>
<html>
<head>
    <title>Definizione e utilizzo di una classe in PHP5</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Definizione e utilizzo di una classe in PHP5</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>sintassi definizione di classe;</p>
<p>class NomeClasse extends NomeSuperClasse <br>
{   <br>
//dichiarazione degli attributi (proprietà che compongono la struttura dei dati)
    <br>
//dichiarazione del costruttore o distruttore
    <br>
//dichiarazione dei metodi (cioè le operazioni)
}   <br>
</p>
<hr>
<br>
<?php

    $utente = new persona("Paperino");
    print ("il nome del primo oggetto è: <b>".$utente->getName()."</b><br><br>");

    $utente = new persona("Topolino");
    print ("il nome del secondo oggetto è: <b>" . $utente->getName() . "</b><br><br>");
?>
<br>
<hr>

</body>
</html>