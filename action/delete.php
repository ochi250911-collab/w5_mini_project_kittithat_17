<?php

    // แสดง error ในกรณีที่เกิดปัญหา
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

$plant_id = $_GET['plant_id'];

include 'connect_pvz.php';

    $sql = "DELETE FROM plant WHERE plant_id = '$plant_id' ";
   
    $result = mysqli_query($con, $sql);
    
if(!$result){
    echo "error";
}else{
    header("location: ../manage_plant.php");
    exit;
}