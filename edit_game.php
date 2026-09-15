<?php
        $id = $_GET['id'];

        include 'action/connect.php';

        $sql = "SELECT * FROM plant WHERE plant_id = '$id' ";

        $result = mysqli_query($con, $sql);

        $game = mysqli_fetch_assoc($result);

        //var_dump($game);
    ?>