<?php

session_start();

$dsn = 'mysql:host=localhost;dbname=testdb';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn,$username,$password);
    //echo "Connection made to database";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
};

$input = $_POST['random'];

$query = "INSERT INTO testvalue VALUES ('',$input)";
$stmt = $db->prepare($query);
$stmt->execute();

header('location:'.$_SESSION['server']);
?>