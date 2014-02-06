<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 01/02/14
 * Time: 16:55
 * To change this template use File | Settings | File Templates.
 * ESEMPIO DI CICLO WHILE
 */

$num = 0;
while ($num < 5) {
    $num = $num + 1;
    echo $num;
    echo '<br/>';
}
?>
<?php echo '<br/>'?>
<?php
    $num = 0;
    do {
        $num = $num + 1;
        echo $num;
        echo '<br/>';
    } while ($num < 20); /** la condizione è verificata alla fine! quindi il ciclo viene eseguito alemeno una volta */
?>