<?php
    class persona
    {
        //ATTRIBUTI
        private $name;
        /*  In questo esempio è stato attivato un ATTIBUTO PRIVATO ($name)
         *  per accedere al contenuto di questa proprietà (attributi) la CLASSE (class persona) fornisce "un METODO" cioè un funzione pubblica
         *  all'interno della classe
         *  getName() - in questo esempio  - più avanti nella scirpt.
         *  Questo METODO/funzione può accedere a tutti i valori e variabili nello script perchè ne è compreso e quindi li può restituri in output.
         *  $this->nomevariabile ..... E' IL METODO PER ACCEDERE AL VALRORE DELLA VARIABILE
         *  $this sarà l'oggetto che sarà costruito RUNTIME e che possiederà dei valori all'interno della proprietà.
         */

        //COSTRUTTORE - che utilizza l'attributo in runtime con questa costruzione di codice.
        public function __construct($n)
            /*
             * il parametro passato al COSTRUTTORE "$n" è utilizzato per  inizializzara ancora una volta la variabile
             * $name, ancora una volta attraverso l'utilizzo dell'instanza a runtime dell'oggetto, cioè $this;
             */
        {
            $this->name = $n;
            //rappresenta l'OGGETTO che in RUNTIME avrà i volori all'interno delle proprietà
        }
        //METODI (In questo esempio è l'unico metodo di accesso al contenuto della proprietà della Classe Perosna)
        //non è altro che una funzione interna alla Classe e che ha quindi accesso a tutte le variabili
        //(anche degli attributi privati)
        public function getName()
            /*
             * il METODO getName() "in questo caso" ha la funzione di restituire al CHIAMANTE della Classe UNA COPIA DEL VALORE contenuto in $name DELL'OGGETTO.
             * il chiamante è fuori dalla funzione... nel codice di esecuizione.
             */
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
<br>
<?php

    $utente = new persona("Paperino");
    print ("il nome del primo oggetto è: <b>".$utente->getName()."</b><br><br>");
                                            /*
                                             * CHIAMANTE DELLA CLASSE -da notare che accede al valore della
                                             * Classe Persona - appena invoca - con la notazione "freccia ->"
                                             * difatti legge il valore della proprietà nel momento in cui è instaziata in "return $this->name;".
                                             */
    $utente = new persona("Topolino");
    print ("il nome del secondo oggetto è: <b>" . $utente->getName() . "</b><br><br>");
    /*
     * PER ACCDERE AD UNA PROPRIETA' SI USA (oggetto -> metodo(parametri)
     * oppure                               (oggetto -> nomevariabile)
     * nell'esempio getName() nello script.
     */
?>
<br>
<br>
<p>Una classe può contenere le proprie costanti, variabili (chiamate "proprietà"), e funzioni (chiamate "methods").</p>
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

</body>
</html>