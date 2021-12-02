
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e7083138fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/admin_style.css">
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
            <!-- <form class="actionForm" action="execute.php" method="POST">
                <h1 class="formHead">Add Products</h1> -->
                <!--Name Input-->
                <!-- <div class="row">
                    <div class="mb-3 col">
                        <label for="nameField" class="form-label opsFormIp1">Name</label>
                        <input type="text" name="product_name" class="form-control" id="nameInput" placeholder="Example input placeholder">
                    </div> -->
                <!--Price-->
                <!-- <div class="row">
                    <div class=" col">
                        <label for="priceField" class="form-label opsFormIp1">Price</label>
                        <input type="text" name="product_price" class="form-control" id="nameInput" placeholder="Example input placeholder">
                    </div> -->
                <!--Image Input-->
                    <!-- <div class=" col ">
                        <label for="formFile" class="form-label opsFormIp3">Image</label>
                        <input class="form-control"  name="Image" type="file" id="formFile">
                    </div>

                    <div class="mb-3 custom-margin-15">
                        <label for="descriptionInput" class="form-label opsFormIp4">Example textarea</label>
                        <textarea name="product_desc" class="form-control" id="descriptionInput" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn-primary mb-5" style=" width:10vh; margin-left:1rem ; padding: 5px; border-radius: 5px;" >Submit</button>
            </form> -->
            <!-- <div>
                <div class="welcome-admin" style="text-align: center;margin-top: 2em;">
                    <h1>Welcome <span><?php //echo ucfirst($_COOKIE['user_cookie']);?></span> to the Dashboard</h1><br>
                    <p>Please select a category on the left to begin updating!</p>
                </div>
                <div class="system-updates" style="text-align: center; position: relative; top: 40vh;">
                    <h1>What's new!</h1><br>
                    <p>All updates to our system will show here...</p>
                </div>
            </div> -->

            <?php
            
            @include"../db.php";
            
            $query = "SHOW TABLES LIKE '%orders%'";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // echo '<pre>';
            // var_dump($row);
            // echo '</pre>';

            $orderby = array();

            foreach($row as $r){
                $orderby[] = $r['Tables_in_freshfoundry (%orders%)'];
            }

            // var_dump($orderby);
            
            echo '<div><table>';
            echo '<tr style=\'font-weight:bold;font-size:1.2em;\'><td>Pending Orders</td>';
            echo '<td style="text-align:center">Actions</td></tr>';
            foreach($row as $r){
                echo '<form action=\'vieworder.php\' method=\'POST\'><tr><input type=\'hidden\' name=\'table_name\' value=\''.$r['Tables_in_freshfoundry (%orders%)'].'\'><td>'.$r['Tables_in_freshfoundry (%orders%)'].'</td><td style="text-align:center;"><input style="margin:0 2em 0 5em;padding:5px 15px;border:none;border-radius:10px;box-shadow:2px 2px 4px rgba(0,0,0,0.3)" type="submit" name="vieworder" value="View Order"><input style="margin:0 2em;padding: 5px 15px;border:none;border-radius:10px;box-shadow:2px 2px 4px rgba(0,0,0,0.3)" type="submit" name="completeorder" value="Order Completed"></td></tr></form>';
            }
            echo '</table><div>';

            
            // echo '<td><input type=\'submit\' value=\'Open Order\' name=\'orderview\'></td>';

            ?>
        </div>
    </main>
</body>
</html>
