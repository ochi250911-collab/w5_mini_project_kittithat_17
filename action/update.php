<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

$plant_id = $_POST['plant_id'];
$plant_img = $_POST['plant_img'];
$plant_name = $_POST['plant_name'];
$plant_world = $_POST['plant_world'];
$plant_food_effect = $_POST['plant_food_effect'];
$sun_cost = $_POST['sun_cost'];
$damage = $_POST['damage'];
$recharge_speed = $_POST['recharge_speed'];
$toughness = $_POST['toughness'];
$types_id = $_POST['types_id'];


include 'connect_pvz.php';

$sql = "UPDATE `plant` SET 
`plant_id`='$plant_id',
`plant_img`='$plant_img',
`plant_name`='$plant_name',
`plant_world`='$plant_world',
`plant_food_effect`='$plant_food_effect',
`sun_cost`='$sun_cost',
`damage`='$damage',
`recharge_speed`='$recharge_speed',
`toughness`='$toughness',
`types_id`='$types_id' 
WHERE plant_id = '$plant_id'";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "error";
}else{
    header("location: ../manage.php");
    exit;
}