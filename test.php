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
            <input type="text" name="random">
            <button type="submit" name="submit"> Add to cart</button>
        </form>
    </div>

<?php

$dsn = "mysql:host=localhost;dbname=testdb";
$username = 'root';
$password = '';

$db = new PDO($dsn,$username,$password);
$query = "SELECT * FROM testvalue";
$stmt = $db->prepare($query);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($row);

?>
</body>
</html>

