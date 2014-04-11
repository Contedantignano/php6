<html>
<head>
    <title>My Movie Site</title>
<head>
<body>

<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 26/01/14
 * Time: 10:01
 * To change this template use File | Settings | File Templates.
 */
  define('FAVMOVIE', 'The Life of Brian');
  echo 'My fovourite movie is';
  echo FAVMOVIE;
/**
 *  Una constante è un segna posto per un valore che viene richiamato all'interno del codice
 *  è DEFINITO PRIMA DI UTILIZZARLO
 *  ATTENZIONE: UNA VOLTA DEFINITA UNA COSTANTE NON PUO ESSERE RIDEFINITA O MODIFICATA
 */
echo '</br>';
$movierate=5;
/**
 * Definisco ed assegno alla variabile il valore
 */
echo 'My movie rating for this movie is:   ';
echo $movierate;
/**
 * In output faccio vedere il valore della variabile
 */

/** Eisistono 4 modi per passare le variabili.
 * SESSIONE
 * MODULO HTML
 * COOKIE
 * URL
*/
?>
</body>
</html>

