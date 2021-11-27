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

$query1 = 'SELECT * FROM fresh_produce';
$stmt = $db->prepare($query1);
$stmt->execute();
$stmt->closeCursor();
$row1 = $stmt->fetchALL(PDO::FETCH_ASSOC);
echo "<pre>";
echo $row1;
echo "</pre>";


$query2 = 'SELECT * FROM frozen_foods';
$stmt = $db->prepare($query2);
$stmt->execute();
$stmt->closeCursor();
$row2 = $stmt->fetchALL(PDO::FETCH_ASSOC);
echo "<pre>";
echo $row2;
echo "</pre>";


$query3 = 'SELECT * FROM meat';
$stmt = $db->prepare($query3);
$stmt->execute();
$stmt->closeCursor();
$row3 = $stmt->fetchALL(PDO::FETCH_ASSOC);
echo "<pre>";
echo $row3;
echo "</pre>";


$query4 = 'SELECT * FROM dairy';
$stmt = $db->prepare($query4);
$stmt->execute();
$stmt->closeCursor();
$row4 = $stmt->fetchALL(PDO::FETCH_ASSOC);
echo "<pre>";
echo $row4;
echo "</pre>";


$query5 = 'SELECT * FROM spices';
$stmt = $db->prepare($query5);
$stmt->execute();
$stmt->closeCursor();
$row5 = $stmt->fetchALL(PDO::FETCH_ASSOC);
echo "<pre>";
echo $row5;
echo "</pre>";


$query6 = 'SELECT * FROM baked_goods';
$stmt = $db->prepare($query6);
$stmt->execute();
$stmt->closeCursor();
$row6 = $stmt->fetchALL(PDO::FETCH_ASSOC);
echo "<pre>";
echo $row6;
echo "</pre>";


$query7 = 'SELECT * FROM beverages';
$stmt = $db->prepare($query7);
$stmt->execute();
$stmt->closeCursor();
$row7 = $stmt->fetchALL(PDO::FETCH_ASSOC);
echo "<pre>";
echo $row7;
echo "</pre>";