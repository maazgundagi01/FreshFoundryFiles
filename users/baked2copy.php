<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Foundry</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/e7083138fd.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="logo">
            <a href="../index.php"><img src="../Assets/Images/FreshLogo0.3.png" alt=""></a>
        </div>
        <div class="shadow-box">
            <div class="searchbar">
                <input type="text" placeholder="Search a fresh product!">
                <a href="#"><button><i class="fas fa-search"></i></button></a>
            </div>
        </div>
        <div class="nav">
            <nav class="navbar">
                <ul>
                    <li><a href="../Login.php">Login</a></li>
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">My Cart</a></li>
                    <li><a href="#"><img class="cart-png"
                                src="../Assets/Images/shopping-cart-svg-png-icon-download-28.png" alt=""></a></li>
                </ul>
            </nav>
        </div>
    </header>
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

$stmt = $db->prepare("SELECT * FROM baked_goods");
$stmt->execute(); 
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<div class="card_wrapper">';
foreach ($data as $row) {
    echo '<div class="cards_item">'.'<img src="../uploads/'. $row['image'].'"> <h3>'.$row['goods']."</h3><br /><h5>Price: $". $row['price']."</h5><br />".'<br />'.'<form action="insert2cart.php" method="post"><input name="good_name" value=" '.$row['goods'].'"style="display:none" >'.'<input name="good_price"  value="'.$row['price'].'" style="display:none">'.'<input name="good_image"  value="'.$row['image'].'" style="display:none">'.'<input name="submit" type="submit"></form></div>';
}
echo '</div>';
?>
</body>

</html>