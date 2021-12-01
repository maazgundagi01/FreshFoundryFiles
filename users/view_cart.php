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

$cart_user = $_COOKIE["user_cookie"];

$query = "SELECT * FROM $cart_user";
$stmt = $db->prepare($query);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($row);
echo '</pre>';

foreach($row as $r){
    echo '<div style=\'\' class=\'view-items\'>';
    echo '<p>'.$r['good_name'].'</p><p>$'.$r['good_price'].'</p><p><img style=\'width:200px;height:200px;object-fit:contain;\' src=\'../uploads/'.$r['good_image'].'\'>';
    echo '</div>';
}
?>
