<?php

// Report all PHP errors
error_reporting(E_ALL);

// Force errors to be displayed on the screen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

    session_start();

    session_unset();

    session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    
    <div>

    <h2>ออกจากระบบแล้ว</h2>
        <p class="message-text">ขอบคุณที่ใช้งานครับ แล้วพบกันใหม่</p>
 
        <a href="login.php" class="btn-link">กลับไปหน้า Login</a>

    </div>

</body>
</html>