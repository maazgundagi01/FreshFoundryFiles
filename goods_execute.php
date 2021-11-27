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

$sr_no = trim($_POST['sr_no']);
$goods = trim($_POST['goods_name']);
$g_id = trim($_POST['goods_id']);
$prod = trim(strtolower($_POST['prod_name']));

if($prod === 'fresh produce'){
    $prod_id = "ff-fp-01";
}
else if($prod === 'frozen foods'){
    $prod_id = "ff-ff-02";
}
else if($prod === 'meat'){
    $prod_id = "ff-xm-03";
}
else if($prod === 'dairy'){
    $prod_id = "ff-xd-04";
}
else if($prod === 'spices'){
    $prod_id = "ff-xs-05";
}
else if($prod === 'baked goods'){
    $prod_id = "ff-bg-06";
}
else if($prod === 'beverages'){
    $prod_id = "ff-xb-07";
};

$price = trim($_POST['price']);
$target = "uploads/";
$image = $_FILES["image"]["name"];
$targetPath = $target.$image;

// echo $image;
// echo $prod_id;
?>