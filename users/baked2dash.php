<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../style/admin_style.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e7083138fd.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="../indexloggedin.php"><img src="../Assets/Images/FreshLogo0.3.png" alt=""></a>
        </div>
        <div class="shadow-box">
            <div class="searchbar">
                <input type="text">
                <a href="#"><button><i class="fas fa-search"></i></button></a>
            </div>
        </div>
        <div class="nav">
            <nav class="navbar">
                <ul>
                    <li><a href="#">Hi, <?php echo ucfirst($_COOKIE['user_cookie']);?></a></li>
                    <li><a href="../sessionend.php">Sign Out</a></li>    
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <!--DASHBOARD-->
        <div class="dashboard">
            <h1 class="dashhead">
            <a href="../lollipop.php">Dashboard</a>
            </h1>
            <!--Dashboard ITEM 1 - Inventory-->
            <div class="accordion accordion-flush">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <h2 class="accordion-button collapsed" style="cursor: pointer; margin: 0%;" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Inventory
                    </h2>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse custom-sidebar" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <a href="./a_fresh.php">Fresh Produce</a> <br/>
                        <a href="./a_frozen.php">Frozen Foods</a> <br/>
                        <a href="./a_meat.php">Meat</a> <br/>
                        <a href="./a_dairy.php">Dairy</a> <br/>
                        <a href="./a_spices.php">Spices</a> <br/>
                        <a href="./a_baked.php">Baked Goods</a> <br/>
                        <a href="./a_beverages.php">Beverages </a> <br/>
                    </div>
                     </div>
                </div>
              </div>
              <!--Dashboard ITEM 2 - Orders -->
              <h2 class="dashitem">
                  Orders
              </h2>
            <!--Dashboard ITEM 4 - Wallet -->
            <h2 class="dashitem">
                Wallet
            </h2>
        </div>

        <!-- Operations Area-------------------------------------------------------------------------------------------------->
        <div class="adminops">
            <div class="productpageitems">
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

$stmt = $db->prepare("SELECT * FROM baked_goods");
$stmt->execute(); 
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $row) {
    echo '<div class="cards_item">'.'<img src="../uploads/'. $row['image'].'"> <h3>'.$row['goods']."</h3><br /><h5>Price: $". $row['price']."</h5><br />".'<br />'.'<form action="insert2cart.php" method="post"><input name="good_name" value=" '.$row['goods'].'"style="display:none" >'.'<input name="good_price"  value="'.$row['price'].'" style="display:none">'.'<input name="good_image"  value="'.$row['image'].'" style="display:none">'.'<input name="submit" type="submit"></form></div>';
}
?>
</div>
</div>
</body>
</html>