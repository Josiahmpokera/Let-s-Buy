

<?php

session_start();
$mysql = new mysqli('localhost', 'root', '', 'buyme_new') or die (mysqli_error($mysqli));

if(isset($_POST["button"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $mysql->query("INSERT INTO customer (cust_fname, cust_lname, cust_email, cust_gender, cust_password) 
    VALUES ('$fname', '$lname', '$email', '$gender', '$password' )") or die (mysqli_error($mysql));


//Session Creating here
$_SESSION['cust_email'] = $email;
$_SESSION['cust_fname'] = $fname;
$_SESSION['success'] = "You're now Logged in ";
header('location: index.php'); //This Redirect the Page into INDEX.PHP
}


//Login Session here

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(count(mysqli_error($mysql)) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM customer WHERE cust_email='$email' AND password='$password'";
        $result = mysql_query($mysql, $query);
        if(mysql_num_rows($result) == 1) {
            $_SESSION['cust_email'] = $email;
            $_SESSION['success'] = "You're now Logged in";
            header('location: index.php'); 
        } else {
            array_push($error, "The Username/ Password Invalid");
            //header('location: login.php');
        }
    }
}


//Logout Statement
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['fname']);
    header('location: login.php');
}

?>