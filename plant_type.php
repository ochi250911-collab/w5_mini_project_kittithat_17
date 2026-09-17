

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Types - Plant Management System</title>
</head>
<body>
    
<header class="site-header">
    <h1 class="site-title">🌻 Plant Management System <span>PvZ Edition</span></h1>
</header>

    <?php
        include 'action/connect_pvz.php';

        $sql = "SELECT * FROM types";

        $result = mysqli_query($con, $sql);

        // Report all PHP errors
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
    ?>

    <div>
        <a href="index.php">Home</a>
        <a href="add_plant.php">Add Plant</a>
        <a href="manage.php">Manage Plants</a>
        <a href="plant_type.php">Plant Types</a>
        <a href="logout.php">logout</a>
    </div>

    <table border=1>
        <thead>
            <th>รหัสพืช</th>
            <th>รุปภาพ</th>
            <th>ชื่อตระกูล</th>
        </thead>

        <?php
            foreach($result as $type){
                ?>
                <tr>
                    <td> <?= $type["types_id"] ?> </td>
                    <td> <img src="<?= $type["types_img"] ?>" 
                    style="width: 150px"> </td>
                    <td> <?= $type["types_name"] ?> </td>
                </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>