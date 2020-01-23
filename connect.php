


<?php 
$mysql = new mysqli('localhost', 'root', '', 'buyme_online_shopping') or die (mysqli_error($mysqli));

if(isset($_POST["button"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $mysql->query("INSERT INTO customer (cust_fname, cust_lname, cust_email, cust_gender, cust_password) 
    VALUES ('$fname', '$lname', '$email', '$gender', '$password' )") or die (mysqli_error($mysql));
}