<?php
session_start();


if($_COOKIE["user_cookie"]) {

   $dsn = 'mysql:host=localhost;dbname=freshfoundry';
$username = 'root';
$password = 'abcd#1234';


    try {
        $db = new PDO($dsn,$username,$password);
        //echo "Connection made to database";
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }
    $cart_user = $_COOKIE["user_cookie"];

    $query1 = "CREATE TABLE IF NOT EXISTS $cart_user (sr_no INT(11) PRIMARY KEY AUTO_INCREMENT, good_name VARCHAR(64), good_price INT(11), good_image VARCHAR(255))";
    $stmt = $db->prepare($query1);
    $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    echo "created";
    $good_name = trim($_POST['good_name']);
    $good_price = trim($_POST['good_price']);
    $good_image = trim($_POST['good_image']);

        $query2 = "INSERT INTO $cart_user VALUES ('','$good_name','$good_price','$good_image')";
        $stmt = $db->prepare($query2);
        $stmt->execute();
        $stmt->closeCursor();
        echo "updated";
}
else {
    echo "<script>alert('Please login or signup to add item to cart');</script>";
    
    header('location:../login.php');
}

header('location:'.$_SESSION['server']);
?>