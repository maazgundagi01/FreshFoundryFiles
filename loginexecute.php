<?php

$user = trim(strtolower($_POST['username']));
$pass = trim($_POST['password']);

$user_cookie = $user;

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
};

$query = "SELECT username FROM users";
$stmt = $db->prepare($query);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($row as $r){
    if(in_array($user, $r)){
        echo 'username - '.$user.' found.'.'<br>';
        setcookie("user_cookie", $user, time()+86400,"/");
        header('location:indexloggedin.php');
        break;
    }
    else {
        $query_admin = "SELECT username FROM admin_users";
        $stmt = $db->prepare($query_admin);
        $stmt->execute();
        $row2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($row2 as $r2){
            if(in_array($user, $r2)){
                setcookie("user_cookie", $user, time()+86400,"/");
                header('location:indexloggedin.php');
                break;
            }

            else {
                echo "<script>alert('invalid login'); window.location.href = 'login.php';</script>";
            }
        }
    }
};
// setcookie("user_cookie", $user, time()+86400,"/");

// header('location:indexloggedin.php');

?>