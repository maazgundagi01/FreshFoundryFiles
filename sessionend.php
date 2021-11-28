<?php
$user = $_COOKIE["user_cookie"];
setcookie("user_cookie", $user, time()-90000,"/");

header('location:login.php');

// if($_COOKIE['user_cookie'] == false) {
//     header('location:login.php');
// }
// else {
//     echo 'chal chutiye kaam kar';
// }

?>