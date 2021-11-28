<?php

$dsn = 'mysql:host=localhost;dbname=freshfoundry';
$username = 'root';
$password = '';

// echo $user;
// echo $pass;

try {
    $db = new PDO($dsn,$username,$password);
    //echo "Connection made to database";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
};

$query = "SELECT username FROM users";
$stmt = $db->prepare($query);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Foundry</title>
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e7083138fd.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="logo">
        <a href="#"><img src="./Assets/Images/FreshLogo0.3.png" alt=""></a>
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
                <li><a href="#">Hi, <?php echo ucfirst($_COOKIE['user_cookie']); ?></a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">My Cart</a></li>
                <!-- <li><a href="#"><img class="cart-png" src="./Assets/Images/shopping-cart-svg-png-icon-download-28.png" alt=""></a></li> -->
                <li><a href="./sessionend.php">Sign Out</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="adminaccessbutton" id="admin-btn"><a href="./lollipop.php">A</a></div>
<div class="content">
    <section class="main-carousel">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="products">
            <a href="./User/fresh.php">
                <div class="goods">
                    <img src="./Assets/Images/heart.png" alt="">
                    <p>Fresh Produce</p>
                </div>
            </a>
            <a href="./User/frozen.php">
                <div class="goods">
                    <img src="./Assets/Images/heart.png" alt="">
                    <p>Frozen Foods</p>
                </div>
            </a>
            <a href="./User/meat.php">
                <div class="goods">
                    <img src="./Assets/Images/heart.png" alt="">
                    <p>Meat</p>
                </div>
            </a>
            <a href="./User/dairy.php">
                <div class="goods">
                    <img src="./Assets/Images/heart.png" alt="">
                    <p>Dairy</p>
                </div>
            </a>
            <a href="./User/spices.php">
                <div class="goods">
                    <img src="./Assets/Images/heart.png" alt="">
                    <p>Spices</p>
                </div>
            </a>
            <a href="./User/baked.php">
                <div class="goods">
                    <img src="./Assets/Images/heart.png" alt="">
                    <p>Baked Goods</p>
                </div>
            </a>
            <a href="./User/beverages.php">
                <div class="goods">
                    <img src="./Assets/Images/heart.png" alt="">
                    <p>Beverages</p>
                </div>
            </a>
        </div>
    </section>
    <section>
        <div class="searchbar-bottom">
            <p>Search</p>
            <input type="text" placeholder="Type here to search a fresh product!">
            <a href=""><button><i class="fas fa-search"></i></button></a>
        </div>
    </section>
</div>

<footer>

</footer>
<?php
if(in_array($_COOKIE['user_cookie'], $row[0])){
    echo '<script src="./Javascript/adminview.js"></script>';
}
?>
</body>
</html>
