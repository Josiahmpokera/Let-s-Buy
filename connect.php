<?php 
$mysql = new mysqli('localhost', 'root', '', 'buyme_online_shopping') or die (mysqli_error($mysqli));

if(isset($_POST["button"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
}