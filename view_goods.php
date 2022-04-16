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