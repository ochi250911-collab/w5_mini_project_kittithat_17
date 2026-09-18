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
            <select name="plant_world" id="">
                <?php
                $sql_world = "SELECT * FROM worlds";
                $result_world = mysqli_query($con, $sql_world);
                foreach($result_world as $world){
                    ?>
                    <option value="<?= $world["world_id"] ?>"
                        <?= $world["world_id"] == $plant["plant_world"] ? "selected" : "" ?>>
                        <?= $world["world_name"] ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>

        <div>
             <label for="">อาหารเสริม</label>
            <input type="text" name="plant_food_effect" value="<?= $plant['plant_food_effect']?>">
        </div>

        <div>
             <label for="">ต้นทุนแสง</label>
            <input type="number" name="sun_cost" value="<?= $plant['sun_cost']?>">
        </div>

        <div>
             <label for="">ดามเจ</label>
            <input type="number" name="damage" value="<?= $plant['damage']?>">
        </div>

        <div>
             <label for="">ความเร็วรีชร์จ</label>
            <input type="number" name="recharge_speed" value="<?= $plant['recharge_speed']?>">
        </div>

        <div>
             <label for="">ความถึก</label>
            <input type="number" name="toughness" value="<?= $plant['toughness']?>">
        </div>

        <?php
        $sql_types = "SELECT * FROM types";
        $result_types = mysqli_query($con, $sql_types);
        ?>
        <div>
            <label for="">ประเภท</label>
            <select name="types_id" id="">
                <?php
                    foreach($result_types as $type){
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