<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Plant - Plant Management System</title>
</head>
<body>
    
<header class="site-header">
    <h1 class="site-title">🌻 Plant Management System <span>PvZ Edition</span></h1>
</header>

<div>
        <a href="index.php">Home</a>
        <a href="add_plant.php">Add Plant</a>
        <a href="manage.php">Manage Plants</a>
        <a href="plant_type.php">Plant Types</a>
        <a href="logout.php">logout</a>
    </div>

<?php
        $plant_id = $_GET['plant_id'];

        include 'action/connect_pvz.php';

        $sql = "SELECT * FROM plant WHERE plant_id = '$plant_id' ";

        $result = mysqli_query($con, $sql);

        $plant = mysqli_fetch_assoc($result);

        //var_dump($game);
    ?>
    <div>
        <form action="action/update.php" method="post">

        <div>
             <label for="">รหัสพืช</label>
            <input type="text" name="plant_id" value="<?= $plant['plant_id']?>">
        </div>

        <div>
             <label for="">รูปภาพพืช</label>
            <input type="text" name="plant_img" value="<?= $plant['plant_img']?>">
        </div>

        <div>
             <label for="">ชื่อพืช</label>
            <input type="text" name="plant_name" value="<?= $plant['plant_name']?>">
        </div>

        <div>
             <label for="">โลกของพืช</label>
            <input type="text" name="plant_world" value="<?= $plant['plant_world']?>">
        </div>

        <div>
             <label for="">อาหารเสริม</label>
            <input type="text" name="plant_food_effect" value="<?= $plant['plant_food_effect']?>">
        </div>

        <div>
             <label for="">ต้นทุนแสง</label>
            <input type="text" name="sun_cost" value="<?= $plant['sun_cost']?>">
        </div>

        <div>
             <label for="">ดามเจ</label>
            <input type="text" name="damage" value="<?= $plant['damage']?>">
        </div>

        <div>
             <label for="">ความเร็วรีชร์จ</label>
            <input type="text" name="recharge_speed" value="<?= $plant['recharge_speed']?>">
        </div>

        <div>
             <label for="">ความถึก</label>
            <input type="text" name="toughness" value="<?= $plant['toughness']?>">
        </div>

        <div>
             <label for="">รหัสประเภท</label>
            <input type="text" name="types_id" value="<?= $plant['types_id']?>">
        </div>

        <?php
        include 'action/connect_pvz.php';

        $sql = "SELECT * FROM types";
        $result = mysqli_query($con, $sql);
        ?>
        <div>
            <label for="">ประเภท</label>
            <select name="types_id" id="">
                <?php
                    foreach($result as $type){
                        ?>
                            <option value="<?= $type["types_id"] ?>"
                                <?= $type["types_id"] == $plant["types_id"] ? "selected" : "" ?>
                                >
                                <?= $type["types_name"] ?>
                            </option>
                        <?php
                    }
                ?>
            </select>
        </div>

        <button>บันทึก</button>

        </form>
    </div>
</body>
</html>

