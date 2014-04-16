<?php
//create your error handler function
function my_error_handler($e_type, $e_message, $e_file, $e_line) { 

    $msg = 'Errors have occurred while executing a page.' . "\n\n";
    $msg .= 'Error Type: ' . $e_type . "\n";
    $msg .= 'Error Message: ' . $e_message . "\n";
    $msg .= 'Filename: ' . $e_file . "\n";
    $msg .= 'Line Number: ' . $e_number . "\n";
    $msg = wordwrap($msg, 75);

    switch($error_type) {
    case E_ERROR:
        mail('admin@example.com', 'Fatal Error from Website', $msg);
        die();
        break;
          
    case E_WARNING:
        mail('admin@example.com', 'Warning from Website', $msg);
        break;
    }
}

//set error handling to 0 because we will handle all error reporting and
//notify admin on warnings and fatal errors.
error_reporting(0);

//set the error handler to be used
set_error_handler('my_error_handler');

// Create the rest of your page here.
?>