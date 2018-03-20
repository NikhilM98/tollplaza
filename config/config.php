<?php

    // error_reporting(0);
    // ini_set('display_errors', 0);

    // define('base_url', 'http://localhost/toll-plaza/');
    // define('base_url_toll', 'http://localhost/toll-plaza/toll/');
    // define('base_url_user', 'http://localhost/toll-plaza/user/');


    define('base_url', 'http://localhost:3000/');
    define('base_url_toll', 'http://localhost:3000/toll/');
    define('base_url_user', 'http://localhost:3000/user/');

    $servername = "127.0.0.1";
    $username = "root";
    $password = "123456789";
    $dbname = "tollplaza";

    // $servername = "localhost";
    // $username = "root";
    // $password = "123456789";
    // $dbname = "tollplaza";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>