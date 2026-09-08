<?php

$con = mysqli_connect("localhost", "root", "", "pvz2_db");

$username = $_POST['username'];
$password = $_POST['password'];

session_start();

$q = "SELECT * FROM users
        WHERE username = '$username'
        AND password = '$password' ";

$result = mysqli_query($con, $q);

// login ถูก 
if( mysqli_num_rows($result) > 0 ){

    $user = mysqli_fetch_assoc($result);
    $_SESSION["fname"] = $user["fname"];
    header("location: index.php");
    exit;

}else{
    // login ผิด
    header("location: login.php");
    exit;

}
