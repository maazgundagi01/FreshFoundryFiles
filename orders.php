
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e7083138fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/admin_style.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
<header>
    <div class="logo">
        <a href="./indexloggedin.php"><img src="./Assets/Images/FreshLogo0.3.png" alt=""></a>
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
                    <li><a href="./orders.php">Orders</a></li>
                    <li><a href="./users/chulbul.php">My Cart</a></li>
                <li><a href="./sessionend.php">Sign Out</a></li>
            </ul>
        </nav>
    </div>
</header>
    
<main>
    <!--DASHBOARD-->
    <div class="dashboard">
        <h1 class="dashhead">
        <a>Categories</a>
        </h1>
        <!--Dashboard ITEM 1 - Inventory-->
            <div class="accordion-body" style="text-decoration:none;">
                <a  href="./users/fresh.php">Fresh Produce</a><br/>
                <a href="./users/frozen.php">Frozen Foods</a><br/>
                <a href="./users/meat.php">Meat</a><br/>
                <a href="./users/dairy.php">Dairy</a><br/>
                <a href="./users/spices.php">Spices</a><br/>
                <a href="./users/baked.php">Baked Goods</a><br/>
                <a href="./users/beverages.php">Beverages </a><br/>
            </div>
        </h2>
    </div>

    <!-- Operations Area-------------------------------------------------------------------------------------------------->
    <div class="adminops">
        <div class="productpageitems">
            <?php

                @include"db.php";

                $cart_user = $_COOKIE["user_cookie"]."orders";

                $query = "SHOW TABLES LIKE '%orders%'";
                $stmt = $db->prepare($query);
                $stmt->execute();
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                $newarray = array();

                foreach($row as $r) {
                    $newarray[] = $r['Tables_in_freshfoundry (%orders%)'];
                };

                if(in_array($cart_user,$newarray)){
                    $query = "SELECT * FROM $cart_user";
                    $stmt = $db->prepare($query);
                    $stmt->execute();
                    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    echo '<div class=\'order-page\'>';
                    echo '<h1 style="margin-bottom:1.75rem;" class=\'orders-head\'>My orders</h1><table> <tr><th>Products</th><th></th><th>Price</th></tr>';
                    foreach($row as $r){
                        echo '<tr><td><img style=\'width: 200px; height: 200px; object-fit:contain;\' src=\'./uploads/'.$r['good_image'].'\'></td>';
                        echo '<td>'.$r['good_name'].'</td>';
                        echo '<td>$'.$r['good_price'].'</td>';
                    };
                    echo '</table></br>';
                    echo '<table><tr><th>Delivering To : '.$r['user_address'].'</th></tr></table>';
                    echo '</div>';
                }
                else {
                    echo 'You have not placed any orders recently,&nbsp;<span><a href=\'indexloggedin.php\'>Click Here</a><span> to shop.';
                }
                
            ?>
        </div>
    </div>
</main>
</body>
</html>