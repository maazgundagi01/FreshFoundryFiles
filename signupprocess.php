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

// $image = $_FILES["image"]["name"];
// $target = "./uploads/";

$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$image = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $image;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["image"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            // $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$image."', NOW())");
            echo $image;
            if($image){
                $statusMsg = "The file ".$image. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;


if($prod_id === 'ff-fp-01'){
    $query = "INSERT INTO fresh_produce VALUES ('$sr_no','$goods','$g_id','$prod_id','$price','$image')";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->closeCursor();
}

if($prod_id === 'ff-ff-02'){
    $query = "INSERT INTO frozen_foods VALUES ('$sr_no','$goods','$g_id','$prod_id','$price','$image')";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->closeCursor();
}

if($prod_id === 'ff-xm-03'){
    $query = "INSERT INTO meat VALUES ('$sr_no','$goods','$g_id','$prod_id','$price','$image')";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->closeCursor();
}

if($prod_id === 'ff-xd-04'){
    $query = "INSERT INTO dairy VALUES ('$sr_no','$goods','$g_id','$prod_id','$price','$image')";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->closeCursor();
}

if($prod_id === 'ff-xs-05'){
    $query = "INSERT INTO spices VALUES ('$sr_no','$goods','$g_id','$prod_id','$price','$image')";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->closeCursor();
}

if($prod_id === 'ff-bg-06'){
    $query = "INSERT INTO baked_goods VALUES ('$sr_no','$goods','$g_id','$prod_id','$price','$image')";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->closeCursor();
}

if($prod_id === 'ff-xb-07'){
    $query = "INSERT INTO beverages VALUES ('$sr_no','$goods','$g_id','$prod_id','$price','$image')";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->closeCursor();
}



$query1 = 'SELECT * FROM fresh_produce';
$stmt = $db->prepare($query1);
$stmt->execute();
$row1 = $stmt->fetchALL(PDO::FETCH_ASSOC);
$stmt->closeCursor();
echo "<pre>";
var_dump($row1);
echo "</pre>";


$query2 = 'SELECT * FROM frozen_foods';
$stmt = $db->prepare($query2);
$stmt->execute();
$row2 = $stmt->fetchALL(PDO::FETCH_ASSOC);
$stmt->closeCursor();
echo "<pre>";
var_dump($row2);
echo "</pre>";


$query3 = 'SELECT * FROM meat';
$stmt = $db->prepare($query3);
$stmt->execute();
$row3 = $stmt->fetchALL(PDO::FETCH_ASSOC);
$stmt->closeCursor();
echo "<pre>";
var_dump($row3);
echo "</pre>";


$query4 = 'SELECT * FROM dairy';
$stmt = $db->prepare($query4);
$stmt->execute();
$row4 = $stmt->fetchALL(PDO::FETCH_ASSOC);
$stmt->closeCursor();
echo "<pre>";
var_dump($row4);
echo "</pre>";


$query5 = 'SELECT * FROM spices';
$stmt = $db->prepare($query5);
$stmt->execute();
$row5 = $stmt->fetchALL(PDO::FETCH_ASSOC);
$stmt->closeCursor();
echo "<pre>";
var_dump($row5);
echo "</pre>";


$query6 = 'SELECT * FROM baked_goods';
$stmt = $db->prepare($query6);
$stmt->execute();
$row6 = $stmt->fetchALL(PDO::FETCH_ASSOC);
$stmt->closeCursor();
echo "<pre>";
var_dump($row6);
echo "</pre>";


$query7 = 'SELECT * FROM beverages';
$stmt = $db->prepare($query7);
$stmt->execute();
$row7 = $stmt->fetchALL(PDO::FETCH_ASSOC);
$stmt->closeCursor();
echo "<pre>";
var_dump($row7);
echo "</pre>";

?>