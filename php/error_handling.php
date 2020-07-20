<?php

/**
 * Document info: Scandina PHP File
 *     File name: error_handling.php
 *        Author: Vladimir Maric
 *   
 *   Description: PHP functions for error handling and logging.
 *
 *     Copyright: © 2020 Scandina
 */

error_reporting(0);
ob_start();

// Handles all types of errors, except fatal errors
set_error_handler("all_errors_function", E_ALL);

function all_errors_function($errNr, $errStr, $errFile, $errLine ) {
    $date = date("d-m-Y H:i");
    $errorMessage = $date." ".$errNr." ".$errStr." ".$errFile." ".$errLine."\r\n";
    
    // Logs error message to the file log.txt that is on the server
    error_log($errorMessage, 3, "errorLog.txt");
}

// Handels fatal errors that terminate the running system
register_shutdown_function("fatal_errors_function");

function fatal_errors_function() {
    $lastError = error_get_last();
    
    // Checks if the last error was fatal
    if ($lastError["type"] == E_ERROR) {
        $date = date("d-m-Y H:i");
        $errorMessage = $date." FATAL ERROR: ".$lastError["type"]." ";
        $errorMessage .= $lastError["message"]." ".$lastError["file"]."\r\n";
        
        error_log($errorMessage, 3, "C:\xampp\htdocs\Scandina\errorLog.txt");
        header("location:error.html"); // redirects to given file
        ob_flush();
    }
}

?>

