<?php

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

$query = "SELECT * FROM $cart_user";
$stmt = $db->prepare($query);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($row);
echo '</pre>';
echo '<div style=\'display:flex;flex-direction:row;\' class=\'view-items\'>';
foreach($row as $r){
    echo '<div class=\'flex-items\'><p>'.$r['good_name'].'</p><p>$'.$r['good_price'].'</p><p><img style=\'width:500px;height:200px;object-fit:contain;\' src=\'../uploads/'.$r['good_image'].'\'></div>';
}
echo '</div>';
?>