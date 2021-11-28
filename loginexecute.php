<?php

$user = trim(strtolower($_POST['username']));
$pass = trim($_POST['password']);

$user_cookie = $user;

setcookie("user_cookie", $user, time()+86400,"/");

// echo '<pre>';
// var_dump($row);
// echo '</pre>';

// var_dump($_COOKIE["user_cookie"]);

header('location:indexloggedin.php');

// if($_COOKIE["user_cookie"]) {
//     header('location:indexloggedin.php');
// }
// else {
//     echo 'chal na mc';
// }

?>