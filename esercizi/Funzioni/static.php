<?php
    function callCounter()
    {
        static $counter=0;
        $counter++;
        print ("La funzoione callCounter è stata esegyutia $counter volte.<br>");
    }
?>
<html>
<head>
    <title>Static</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Static</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Con il comambdo STATIC <b>la variabile all'interno della funzione conserva il suo valore;</b>
    valore che gli è stato impresso nell'ultimo ciclo di utilizzo</p>
<hr>
<br>
<?php
    for($i=0; $i<15; $i++)
    {
        callCounter();
    }
?>
</body>
</html>
