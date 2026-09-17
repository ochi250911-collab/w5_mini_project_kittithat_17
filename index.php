<?php

// Report all PHP errors
error_reporting(E_ALL);

// Force errors to be displayed on the screen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

        session_start();

        if( !isset($_SESSION["fname"]) ){
            header("location: login.php");
            exit;
        }

        include 'action/connect_pvz.php';

        $sql = "SELECT * FROM plant";

        $result = mysqli_query($con, $sql);   
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - Plant Management System</title>
    </head>
    <body>

<header class="site-header">
    <h1 class="site-title">🌻 Plant Management System <span>PvZ Edition</span></h1>
</header>

<div class="welcome-modal" id="welcomeModal">
    <div class="welcome-modal-box">
        ยินดีต้อนรับสู่ Plant Management System: PvZ Edition
    </div>
</div>

<script>
    window.addEventListener("load", () => {
        const modal = document.getElementById("welcomeModal");
        // เฟดขึ้นมา
        setTimeout(() => modal.classList.add("show"), 100);
        // เฟดหายไปหลัง 3 วิ
        setTimeout(() => modal.classList.remove("show"), 3000);
    });
</script>

        <div>
            <h2>สวัดดีครับ คุณ<?= $_SESSION["fname"] ?></h2>
            <a href="index.php">Home</a>
            <a href="add_plant.php">Add Plant</a>
            <a href="manage.php">Manage Plants</a>
            <a href="plant_type.php">Plant Types</a>
            <a href="logout.php">logout</a>
        </div>

        <div class="container">

            <table border=1>

                <Thead>
                    <th>ID</th>
                    <th>รูป</th>
                    <th>ชื่อ</th>
                    <th>โลกของพืช</th>
                    <th>อาหารเสริม</th>
                    <th>ต้นทุนพืช</th>
                    <th>ดาเมจ</th>
                    <th>ความเร็วรีชาร์จ</th>
                    <th>ความถึกทน</th>
                    <th>ประเภทตระกูล</th>
                </Thead>
            
            <tbody>
            <?php
            
            foreach($result as $plant){
                ?>
                <tr>
                    <td> <?= $plant["plant_id"] ?></td>
                    <td> <img src="<?= $plant["plant_img"] ?>" 
                    style="width: 150px"> </td>
                    <td> <?= $plant["plant_name"] ?></td>
                    <td> <?= $plant["plant_world"] ?></td>
                    <td> <?= $plant["plant_food_effect"] ?></td>
                    <td> <?= $plant["sun_cost"] ?></td>
                    <td> <?= $plant["damage"] ?></td>
                    <td> <?= $plant["recharge_speed"] ?></td>
                    <td> <?= $plant["toughness"] ?></td>
                    <td> <?= $plant["types_id"] ?></td>
                    
                </tr>
                <?php

            }

            ?>
            </tbody>
            </table>

        </div>

    </body>
    </html>
    