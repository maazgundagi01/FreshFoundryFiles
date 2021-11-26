<?php

$dsn = 'mysql:host=localhost;dbname=a4';
$username = 'ff-admin';
$password = '';


try {
    $db = new PDO($dsn,$username,$password);
    // echo "Connection made to database";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}