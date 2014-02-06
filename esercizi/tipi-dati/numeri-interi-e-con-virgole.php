<html>
    <head>
        <title>Numeri Interi e PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <h2>Numeri Interi e con le Virgole</h2>
    <?php include 'include_menu.php'; ?>
    <table border="1" bordercolor="grey" cellpadding="2">
        <tr><td colspan="4"><h4>Numeri interi</h4></tr></td>
        <?php
            $interopositivo = 2147483658;
            $interonegativo = -2147483658;
            $ottale = 01426534;
            $esadecimale = 0x12AF;
            print("<tr><td>Intero positivo</td><td>$interopositivo</td></tr>\n");
            print("<tr><td>Intero negativo</td><td>$interonegativo</td></tr>\n");
            print("<tr><td>Ottale</td><td>$ottale</td></tr>\n");
            print("<tr><td>Esadecimale</td><td>$esadecimale</td></tr>\n");
            print("<tr><td>Esadecimale con dechex();</td><td>" . dechex($esadecimale) . "</td></tr>\n");
        /** qui sull'ultima riga sono entrato ed uscito codice */
        ?>
    </table>
    <br>
    <table border="1" bordercolor="grey" cellpadding="2">
        <tr><td colspan="4"><h4>Numeri con virgola mobile</h4></tr></td>
        <?php
        $realpositivo = 2147483658.1234;
        $realnegativo = -2147483658.43217;
        $realesponenziale = 3.2E9;
        print("<tr><td>numero reale positivo</td><td>$realpositivo</td></tr>\n");
        print("<tr><td>numero reale negativo</td><td>$realnegativo</td></tr>\n");
        print("<tr><td>notazione esponenziale</td><td>$realesponenziale</td></tr>\n");
        ?>
    </table>
    </body>
</html>

