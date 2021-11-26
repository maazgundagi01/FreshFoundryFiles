
<?php

$dsn = 'mysql:host=localhost;dbname=freshfoundry';
$username = 'ff-admin';
$password = '';


try {
    $db = new PDO($dsn,$username,$password);
    //echo "Connection made to database";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}

$sr_no = trim($_POST['sr_no']);
$name = trim($_POST['product_name']);
$desc = trim($_POST['product_desc']);

$query = "INSERT INTO categories VALUES ('$sr_no','$name','','$desc')";
$stmt = $db->prepare($query);
$stmt->execute();
$stmt->closerCursor();

?>