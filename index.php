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
        <a href="index.php"><img src="./Assets/Images/FreshLogo0.3.png" alt=""></a>
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
                <li><a href="./Login.php">Login</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="./users/chulbul.php">My Cart</a></li>
                <li><a href="#"><img class="cart-png" src="./Assets/Images/shopping-cart-svg-png-icon-download-28.png" alt=""></a></li>
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
            <a href="./users/fresh.php">
                <div class="goods">
                    <img src="./Assets/Images/category_icons/fresh.png" alt="">
                    <p>Fresh Produce</p>
                </div>
            </a>
            <a href="./users/frozen.php">
                <div class="goods">
                    <img src="./Assets/Images/category_icons/frozen.png" alt="">
                    <p>Frozen Foods</p>
                </div>
            </a>
            <a href="./users/meat.php">
                <div class="goods">
                    <img src="./Assets/Images/category_icons/meat.png" alt="">
                    <p>Meat</p>
                </div>
            </a>
            <a href="./users/dairy.php">
                <div class="goods">
                    <img src="./Assets/Images/category_icons/dairy.png" alt="">
                    <p>Dairy</p>
                </div>
            </a>
            <a href="./users/spices.php">
                <div class="goods">
                    <img src="./Assets/Images/category_icons/spices.png" alt="">
                    <p>Spices</p>
                </div>
            </a>
            <a href="./users/baked.php">
                <div class="goods">
                    <img src="././Assets/Images/category_icons/baked.png" alt="">
                    <p>Baked Goods</p>
                </div>
            </a>
            <a href="./users/beverages.php">
                <div class="goods">
                    <img src="./Assets/Images/category_icons/beverages.png" alt="">
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
<script>
    var adminBtn = document.getElementById('admin-btn');
    adminBtn.style.display = "none";
</script>
</body>
</html>