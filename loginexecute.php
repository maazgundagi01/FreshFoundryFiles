<?php

$user = trim(strtolower($_POST['username']));
$pass = trim($_POST['password']);

$user_cookie = $user;

@include'dbadmin.php';
@include'dbuser.php';

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
$row1 = $stmt->fetchAll(PDO::FETCH_ASSOC);

$newArray1 = array();

foreach($row1 as $r){
    $newArray1[] = $r['username'];
};

if(in_array($user,$newArray1)){
    setcookie("user_cookie", $user, time()+86400,"/");
    header('location:indexloggedin.php');
}

else {
    $query_admin = "SELECT username FROM admin_users";
    $stmt = $db->prepare($query_admin);
    $stmt->execute();
    $row2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $newArray2 = array();

    foreach($row2 as $r) {
        $newArray2[] = $r['username'];
    }

    if(in_array($user, $newArray2)){
        setcookie("user_cookie", $user, time()+86400,"/");
        header('location:indexloggedin.php');
    }
    else {
        echo "<script>alert('invalid login'); window.location.href = 'login.php';</script>";
    };
};
