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
$username = 'testadmin';
$password = 'testadmin';

$db = new PDO($dsn,$username,$password);
$query = "SELECT * FROM testvalue";
$stmt = $db->prepare($query);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($row);

?>
<?php
// $dsn = 'mysql:host=localhost;dbname=freshfoundry';
// $username = 'root';
// $password = '';


// try {
//     $db = new PDO($dsn,$username,$password);
//     //echo "Connection made to database";
// } catch (PDOException $e) {
//     $error_message = $e->getMessage();
//     echo $error_message;
//     exit();
// }

// $stmt = $db->prepare("SELECT * FROM baked_goods");
// $stmt->execute(); 
// $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo '<div class="card_wrapper">';
// foreach ($data as $row) {
//     echo '<div class="cards_item">'.'<img src="../uploads/'. $row['image'].'"> <h3>'.$row['goods']."</h3><br /><h5>Price: $". $row['price']."</h5><br />".'<br />'.'<form action="insert2cart.php" method="post"><input name="good_name" value=" '.$row['goods'].'"style="display:none" >'.'<input name="good_price"  value="'.$row['price'].'" style="display:none">'.'<input name="good_image"  value="'.$row['image'].'" style="display:none">'.'<input name="submit" type="submit"></form></div>';
// }
// echo '</div>';
?>
</body>
</html>

