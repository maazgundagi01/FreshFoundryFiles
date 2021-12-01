<?php

$dsn = 'mysql:host=localhost;dbname=freshfoundry';
$username = 'root';
$password = '';


try {
    $db = new PDO($dsn,$username,$password);
    //echo "Connection made to database";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}

$good_name = trim($_POST['good_name']);
$good_price = trim($_POST['good_price']);
$good_image = trim($_POST['good_image']);

$query = "INSERT INTO user_cart VALUES ('','$good_name','$good_price','$good_image')";
$stmt = $db->prepare($query);
$stmt->execute();
$stmt->closeCursor();
echo "updated";
?>