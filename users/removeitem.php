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
if(isset($_POST['delete'])){
    if($_COOKIE["user_cookie"]) {
        $cart_user = $_COOKIE["user_cookie"];
        
        $sr_no = $_POST['sr_no'];
        $query = "DELETE FROM $cart_user WHERE sr_no = '$sr_no'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->closeCursor();

        
        // echo "deleted";
        // header('location:chulbul.php');
        };
}
?>