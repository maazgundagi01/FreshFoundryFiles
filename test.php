<?php
session_start();
$_SESSION['server'] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="testexecute.php" method="POST">
            <button type="button" id="minus" name="minus" value="-" onclick="decreaseValue()">-</button>
            <input type="text" name="random" id="number" value="">
            <button type="button" id="plus" name="plus" value="+" onclick="increaseValue()">+</button><br><br>
            <button type="submit" name="submit"> Add to cart</button>
        </form>
    </div><br><br>

<?php

$dsn = "mysql:host=localhost;dbname=testdb";
$username = 'testadmin';
$password = 'testadmin';

$db = new PDO($dsn,$username,$password);
$query = "SELECT * FROM testvalue";
$stmt = $db->prepare($query);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($row);
echo '</pre>';
?>
<script src="test.js"></script>
</body>
</html>

