<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./Style/admin_style.css">
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e7083138fd.js" crossorigin="anonymous"></script>
    </script>
    <script src="./Javascript/validate.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="./Assets/Images/FreshLogo0.3.png" alt=""></a>
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
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">My Cart</a></li>
                    <li><a href="#"><img class="cart-png" src="./Assets/Images/shopping-cart-svg-png-icon-download-28.png" alt=""></a></li>
                </ul>
            </nav>
        </div>
    </header>
   <!--LOGIN FORM-->
   <form class="formlog" action="loginexecute.php" method="POST">
      <label for="validationCustomUsername" class="form-label">Username</label>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" name="username" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      </div>
    </div>
    <div class="col-md-12" style="padding-top: 15px;">
      <label for="validationCustom03" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="validationCustom03" required>
    </div>
    <div class="row g-3">
      <div class="col-12 login-btn col" style="padding-top: 15px;">
        <button class="btn btn-primary" type="submit" name="login">Log In</button>
      </div>
      <div class="col">
        <p>New to Fresh Foundry? <a href="./signup.html" class="signup-link">Sign up here!</a></p>
      </div>
    </div>
  </form>
</body>
<script src="./Javascript/script.js"></script>
</html>