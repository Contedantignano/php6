<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 13/04/14
 * Time: 10:10
 * To change this template use File | Settings | File Templates.
 */
$bar = "stackoverflowpro";
$foo = <<<HTML
<p>Hello $bar</p>
HTML;
?>
<?
echo <<<EOM
Hello
EOM;
?>
<?php
$my_string = <<<TEXT
My
apple
is
red.
My Apple is red!
TEXT;
echo $my_string;
?>