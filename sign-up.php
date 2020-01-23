<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
        <?php require_once 'connect.php'; ?>
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
                                <h1 style="padding-bottom: 10px;">Sign Up</h1>
                                <hr width="90px">
                            </div>
                            <div class="arrow">
                                <a href="#"><img src="assets/windows.png"  alt=""></a>
                            </div>
                        </div>
                        <p style="padding-top: 10px; color: rgb(87, 79, 79);">Have an Account? <a href="login.php" style="text-decoration: none; color: white; font-weight: 500;">Login</a></p>
                    </div>
                    <div class="form-right">
                    <?php require_once 'connect.php' ?>
                         <form action="connect.php" method="POST">
                                 <p>First Name</p>
                             <input type="text" name="fname" required ><br>
                             <p>Last Name</p>
                             <input type="text" name="lname" required><br>
                             <p>Email</p>
                             <input type="email" name="email" required><br>
                            <div class="gender">
                                <span style="font-size: 18px; font-weight: 400;">Gender: </span>
                                <div class="genderValues">
                                        Male <input type="radio" name="gender" required> Female <input type="radio" name="gender" required>
                                </div> 
                            </div>
                             <p>Password</p>
                             <input type="password" name="password" required><br>
                             <p>Confirm Password</p>
                             <input type="password" name="cpassword" required><br>
                             <div class="submitOptions">
                                    <input type="submit" value="Sign Up" name="button">
                                    <input type="reset" value="Clear">
                             </div>
                         </form>       
                    </div>
                </div>
            </div>
    
</body>
</html>