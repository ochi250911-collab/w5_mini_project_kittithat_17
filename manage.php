 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);

        include 'action/connect_pvz.php';

        $sql = "SELECT * FROM plant";

        $result = mysqli_query($con, $sql);
    ?>

    <div>
        <a href="index.php">Home</a>
        <a href="add_plant.php">Add Plant</a>
        <a href="manage.php">Manage Plants</a>
        <a href="plant_type.php">Plant Types</a>
        <a href="login.php">logout</a>
    </div>

    <div>
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
                    <td>
                         <a href="edit_plant.php?plant_id=<?= $plant['plant_id'] ?>">แก้ไข</a>
                        <a href="action/delete.php?plant_id=<?= $plant['plant_id'] ?>" 
                        onclick="return confirm('ยืนยันการลบ?')">ลบ</a>
                    </td>
                </tr>
                <?php

            }

            ?>
            </tbody>
            </table>

    </div>

 </body>
 </html>
 
 