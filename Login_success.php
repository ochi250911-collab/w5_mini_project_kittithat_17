<?php

session_start();

// กันคนพิมพ์ URL นี้ตรงๆ โดยไม่ได้ login จริง
if( !isset($_SESSION["fname"]) ){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success - Plant Management System</title>
</head>
<body>

    <div class="login-overlay">
        <div class="fade-card login-success-box">
            <div class="login-success-icon">✅</div>
            <h2>เข้าสู่ระบบสำเร็จ</h2>
            <p class="message-text">สวัสดีครับ คุณ<?= $_SESSION["fname"] ?></p>
        </div>
    </div>

    <script>
        setTimeout(() => {
            window.location.href = "index.php";
        }, 2000);
    </script>

</body>
</html>