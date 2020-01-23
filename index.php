<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <div class="navigation">
        <div class="navigation-list">
            <div class="logo">
                <img src="assets/logo.png" width="100px" height="70px" alt="">
            </div>
            <div class="navigationItems">
                <ul>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Beauty</a></li>
                    <li><a href="#">Sport</a></li>
                    <li><a href="#">Child</a></li>
                    <li><a href="#">Collection</a></li>
                </ul>
            </div>

            <div class="righNavigation">
                <ul>
                    <li><a href="login.php" style="text-decoration: none; color: white; font-weight: bold;">Login</a></li>
                    <li style="font-weight: bold;"><a href="#" style="text-decoration: none; color: whitesmoke;">Cart</a></li>
                    <img src="assets/shopping_cart_big.png" width="40px" height="40px" alt="">
                </ul>
            </div>
        </div>
    </div>

    <!---Body Start here-->
    <div class="body">
        <div class="left-description">
            <h1>Buy Best Product with <br> 30% Discount Now</h1>
            <p style="font-size: 20px;font-family: Arial, Helvetica, sans-serif; color: aliceblue; padding: 30px;">Enjoy Buying the Product all around the World here </p>
            <div class="buttons">
                <div class="prod">
                    <a href="#end"><input id="button1" type="button" value="Products"></a>
                </div>
                <div class="account">
                    <a href="sign-up.php"><input id="button2" type="button" value="Signup"></a>
                </div>
            </div>
        </div>
        <div class="right-images">
            <div class="imageOne">
                <img src="assets/trending.png" width="250px" height="250px" alt="">
            </div>
            <div class="imageTwo">
                <img src="assets/background.png" width="400px" height="400px" alt="">
            </div>
        </div>
    </div>

    <div class="main_container">
        <div class="icon_down">
            <a href="#end"><img src="assets/arrowDown.png"  alt=""></a>
        </div>
    </div>

    <!---Items Collection Simple-->
    <div class="itemHeader">
        <div class="header">
            <p style="font-family: segoe UI; font-weight: 700; font-size: 24px; color: grey;">Newest Product</p>
        </div>
        <div class="all">
            <a href="#"><img src="assets/righ_arrow.png" width="34px" height="34px" alt=""></a>
        </div>
    </div>
    <div class="items">
        <div class="itemList">
            <div class="container">
                <img src="assets/trending.png" height="200px" width="200px" alt="">
            </div>
            <div class="container">
                <img src="assets/headphone.png" height="200px" width="200px" alt="">
            </div>
            <div class="container">
                <img src="assets/trending.png" height="200px" width="200px" alt="">
            </div>
            <div class="container">
                <img src="assets/trending.png" height="200px" width="200px" alt="">
            </div>
            <div class="container">
                <img src="assets/trending.png" height="200px" width="200px" alt="">
            </div>
        </div>
        <div id="end">aks</div>
    </div>
    
</body>
</html>