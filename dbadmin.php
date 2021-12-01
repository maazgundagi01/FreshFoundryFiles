<?php

$dsn = 'mysql:host=localhost;dbname=freshfoundry';
$username = 'ff-admin';
$password = 'ff-admin@123';
try {
    $db = new PDO($dsn,$username,$password);
    //echo "Connection made to database";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}

?>