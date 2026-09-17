<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Plant - Plant Management System</title>
</head>
<body>
    
<header class="site-header">
    <h1 class="site-title">🌻    Plant Management System <span>PvZ Edition</span></h1>
</header>

    <div>
        <a href="index.php">Home</a>
        <a href="add_plant.php">Add Plant</a>
        <a href="manage.php">Manage Plants</a>
        <a href="plant_type.php">Plant Types</a>
        <a href="logout.php">logout</a>
    </div>

    <div>

        <form action="action/insert_pvz.php" method ="post">
            
            <div>
                <label for="">ID</label>
                <input type="text" name="plant_id">
            </div>

            <div>
                <label for="">Plant Image</label>
                <input type="text" name="plant_img">
            </div>

            <div>
                <label for="">Plant Name</label>
                <input type="text" name="plant_name">
            </div>

            <div>
                <label for="">Plant World</label>
                <input type="text" name="plant_world">
            </div>

            <div>
                <label for="">Food Effect</label>
                <input type="text" name="plant_food_effect">
            </div>

            <div>
                <label for="">Sun Cost</label>
                <input type="text" name="sun_cost">
            </div>

            <div>
                <label for="">Damage</label>
                <input type="text" name="damage">
            </div>

            <div>
                <label for="">Recharge Speed</label>
                <input type="text" name="recharge_speed">
            </div>

            <div>
                <label for="">Toughness</label>
                <input type="text" name="toughness">
            </div>

            <div>
                <label for="">Family Buff</label>
                <input type="text" name="family_buff">
            </div>

        <?php 
            include 'action/connect_pvz.php';

            $sql = "SELECT * FROM types";
            $result = mysqli_query($con, $sql);
            ?>
            <label for="">ประเภท</label>
            <select name="types_id" id="">
            <?php
            foreach($result as $types){
                ?>
                <option value="<?= $types["types_id"] ?>"><?= $types["types_name"] ?>></option>
        <?php
    }
    ?>
</select>

        <button>บันทึก</button>
        </form>

    </div>

   

</body>
</html>