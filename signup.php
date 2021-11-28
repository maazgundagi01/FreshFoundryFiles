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
    <script src="./Javascript/script.js"> </script>
    <script src="./Javascript/validate.js"> </script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.html"><img src="./Assets/Images/FreshLogo0.3.png" alt=""></a>
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
   <!--SIGNUP FORM-->
    <form class="row g-3 formlog" action="signupprocess.php" method="POST">
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">First name</label>
          <input name="first_name" type="text" class="form-control" id="validationCustom01" value="" required>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Last name</label>
          <input name="last_name" type="text" class="form-control" id="validationCustom02" value="" required>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Username</label>
          <div class="input-group has-validation">
            <span class="username" id="validationCustom02">@</span>
            <input name="username" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-6" style="padding-top: 10px;">
          <label for="password" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="password" required>
        </div>
        <div class="col-md-4">
          <label for="email" class="form-label">Email</label>
          <input name="email" type="text" class="form-control" id="email" value="" required>
        </div>
        <div class="col-md-6" style="padding-top: 10px;">
          <label for="validationCustom04" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="validationCustom04" required>
        </div>
        <div class="col-12 style="padding-top: 10px;>
          <input type="submit" name="submit" value="submit"></input>
        </div>
    </form>
    </div>
</body>
</script>
</html>