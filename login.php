<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
        <div class="navigation-signup">
                <div class="navigation-list-signup">
                    <div class="logo">
                        <a href="index.php"><img src="assets/logo.png" width="100px" height="70px" alt=""></a>
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

            <div class="body-signup">
                <div class="form-container">
                    <div class="form-left">
                        <div class="header1">
                            <div class="haa">
                                <h1 style="padding-bottom: 10px;">Sign in</h1>
                                <hr width="90px">
                            </div>
                            <div class="arrow">
                                <a href="#"><img src="assets/windows.png"  alt=""></a>
                            </div>
                        </div>
                        <p style="padding-top: 10px; color: rgb(87, 79, 79);">Don't have an Account? <a href="sign-up.php" style="text-decoration: none; color: white; font-weight: 500;">Sign Up</a></p>
                    </div>
                    <div class="form-right">
                         <form action="" method="POST">
                
                             <p>Email</p>
                             <input type="email" name="email" required><br>
                             <p>Password</p>
                             <input type="password" name="password" required><br>
                             <p><a href="#" style="text-decoration: none; margin-top: 10px; color: rgb(216, 95, 14); font-weight: 500;">Forget Password?</a></p>
                             <div class="submitOptions">
                                    <input type="submit" value="Sign Up">
                             </div>
                         </form>       
                    </div>
                </div>
            </div>
    
</body>
</html>