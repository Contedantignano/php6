<?php
function my_error_handler($e_type, $e_message, $e_file, $e_line) {
    switch ($e_type) {
    case E_ERROR:
        echo '<h1>Fatal Error</h1>';
        echo '<p>A fatal error has occurred in ' . $e_file . ' at line ' .
            $e_line . '.<br/>' . $e_message . '.</p>';
        die();
        break;

    case E_WARNING:
        echo '<h1>Warning</h1>';
        echo '<p>A warning has occurred in ' . $e_file . ' at line ' . $e_line .
            '.<br/>' . $e_message . '.';
        break;

    case E_NOTICE:
        //don't show notice errors
        break;
    }
}

//set the error handler to be used
set_error_handler('my_error_handler');

//set string with "Wrox" spelled wrong
$string_variable = 'Worx books are awesome!';

//try to use str_replace to replace Worx with Wrox
//this will generate an E_WARNING
//because of wrong parameter count
str_replace('Worx', 'Wrox');
?>