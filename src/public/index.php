<?php
require '../config.php';

$request_method = $_SERVER["REQUEST_METHOD"];
$request_uri = $_SERVER["REQUEST_URI"];

// Debugging statements
// error_log("Request Method: " . $request_method);
// error_log("Request URI: " . $request_uri);

switch($request_method) {
    case 'GET':
        // require '../api/read.php';
        echo "404 Not Found - The resource requested could not be found on this server.";
        break;
    case 'POST':
        if ($request_uri == '/public/index.php/login') {
            require '../api/login.php';
        } elseif ($request_uri == '/public/index.php/register'){  
            require '../api/register.php';
        } else {
            echo "404 Not Found - The resource requested could not be found on this server.";
        }
        break;
    case 'PUT':
        // require '../api/update.php';
        echo "404 Not Found - The resource requested could not be found on this server.";
        break;
    case 'DELETE':
        // require '../api/delete.php';
        echo "404 Not Found - The resource requested could not be found on this server.";
        break;
    default:
        echo "404 Not Found - The resource requested could not be found on this server.";
        break;
}
?>