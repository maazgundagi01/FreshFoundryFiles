<?php

@include'dbuser.php';


try {
    $db = new PDO($dsn,$username,$password);
    //echo "Connection made to database";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$email = trim($_POST['email']);

$query = "INSERT INTO users VALUES ('','$first_name','$last_name','$username','$password','$email')";
$stmt = $db->prepare($query);
$stmt->execute();
$stmt->closeCursor();

header('location:login.php');
?>