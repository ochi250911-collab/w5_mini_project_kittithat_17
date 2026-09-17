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
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    
     <div class="login-overlay">
 
        <div class="fade-card" style="background:#fdfef5; border:4px solid #5a8f29; border-radius:16px; padding:35px 40px; box-shadow:0 8px 20px rgba(30,60,10,0.25); text-align:center; max-width:400px;">
 
            <h2>ออกจากระบบแล้ว</h2>
            <p class="message-text">ขอบคุณที่ใช้งานครับ แล้วพบกันใหม่</p>
 
            <a href="login.php" class="btn-link">กลับไปหน้า Login</a>
 
        </div>
 
    </div>

</body>
</html>