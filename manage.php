 <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);

        include 'action/connect_pvz.php';

        $sql = "SELECT * FROM plant";

        $result = mysqli_query($con, $sql);
    ?>