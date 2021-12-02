<?php
    @include'../dbadmin.php';
    session_start();
?>

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
                <a style="text-decoration: none;color: black;" href="./allorders.php">Orders</a>
            </h2>
            <!--Dashboard ITEM 3 - Users -->
            <h2 class="dashitem">
                <a style="text-decoration: none;color: black;" href="./users.php">Users</a>
            </h2>
            <!--Dashboard ITEM 4 - Queries -->
            <h2 class="dashitem">
                <a style="text-decoration: none;color: black;" href="./cxqueries.php">Queries</a>
            </h2>
            <!--Dashboard ITEM 5 - Wallet -->
            <h2 class="dashitem">
                Wallet
            </h2>
        </div>

        <!-- Operations Area-------------------------------------------------------------------------------------------------->
        <div class="adminops">
            <!--Form Action => execute.php method POST-->
            <form action="goods_execute.php" method="POST" enctype="multipart/form-data">
                <h1 class="formHead">Add Products - Spices</h1>
                <!--Name Input-->
                <div class="row">
                    <div class="mb-3 col">
                        <label for="nameField" class="form-label opsFormIp1">Name</label>
                        <input type="text" name="goods_name" class="form-control" id="nameInput" placeholder="Example input placeholder">
                    </div>
                <!--Price-->
                    <div class=" col">
                        <label for="priceField" class="form-label opsFormIp1">Price</label>
                        <input type="text" name="price" class="form-control" id="nameInput" placeholder="Example input placeholder">
                    </div>
                <!--Goods Id -->
                <div class="row">
                    <div class=" col">
                        <label for="priceField" class="form-label opsFormIp1">Goods ID</label>
                        <input type="text" name="goods_id" class="form-control" id="nameInput" placeholder="Example input placeholder">
                    </div>
                <!--Image Input-->
                    <div class=" col ">
                        <label for="formFile" class="form-label opsFormIp3">Image</label>
                        <input class="form-control"  name="image" type="file" id="formFile"><br/>
                    </div>
                <!--Product-->
                <input  type="hidden" name="prod_name" id="" value="spices"/>
                <div><button type="submit" class="submit" style="border-radius:10px; border:none; box-shadow: 2px 2px 5px rgba(0,0,0,0.3); padding: 0.5em 1em;" >Add product</button><div>
                </div>
            </form>
        </div>
        <div class="prods">
            <?php

                $query = "SELECT * FROM spices";
                $stmt = $db->prepare($query);
                $stmt->execute();
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                echo '<div style=\'margin-top:2em;text-align:center\'><form action=\'editprods.php\' method=\'POST\'><table>';
                echo '<tr style=\'font-weight:bold;\'><td>Good\'s Name</td><td>Good\'s ID</td><td>Product ID</td><td>Prices</td><td>Image</td><td>Action</td></tr>';
                foreach($row as $r){
                    echo '<tr><input type=\'hidden\' name=\'goods_name\' value=\''.$r['goods'].'\'><td>'.$r['goods'].'</td><td>'.$r['goods_id'].'</td><input type=\'hidden\' name=\'prod_id\' value=\''.$r['prod_id'].'\'><td>'.$r['prod_id'].'</td><td>'.$r['price'].'</td><input type=\'hidden\' name=\'image\' value=\''.$r['image'].'\'><td><img style=\'width:100px;height:100px;object-fit:contain\' src=\'../uploads/'.$r['image'].'\'></td><td><input style=\'margin:1em;padding:.8em;border-radius:10px;border:none;box-shadow: 2px 2px 5px rgba(0,0,0,0.3);\' type=\'submit\' name=\'delete\' value=\'Delete entry\'></td></tr>';
                }
                echo '</table></form></div>';
            ?>
        </div>
    </main>
</body>
</html>
