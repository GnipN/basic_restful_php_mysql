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
        } elseif ($request_uri == '/test') {
            require '../api/test.php';
        } else {
            echo "404 Not Found - The resource requested could not be found on this server.";
        }
        break;
    case 'PUT':
        // require '../api/update.php';
        echo "404 Not Found - The resource requested could not be found on this server.";
        break;
    case 'DELETE':
        require '../api/delete.php';
        break;
    default:
        // header("HTTP/1.0 405 Method Not Allowed");
        echo "404 Not Found - The resource requested could not be found on this server.";
        break;
}
?>