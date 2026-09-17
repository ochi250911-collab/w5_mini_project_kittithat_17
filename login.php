<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Plant Management System</title>
</head>
<body>
    
<div class="bg-slide" id="bgSlide1"></div>
<div class="bg-slide" id="bgSlide2"></div>

<header class="site-header">
        <h1 class="site-title">🌻 Plant Management System <span>PvZ Edition</span></h1>
</header>

 <div class="login-overlay">
        

        <form action="checklogin.php" method="post">
 
             <?php if (isset($_GET['error'])) { ?>
                <div class="login-error">
                    ⚠️ ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง
                </div>
             <?php } ?>

            <div>
                <label for="">username</label>
                <input type="text" name="username">
            </div>
 
            <div>
                <label for="">password</label>
                <input type="password" name="password">
            </div>
 
            <button>Login</button>
 
        </form>
    </div>

   <script>
        // ===== รายชื่อไฟล์รูปพื้นหลัง =====
        // ให้ path ตรงกับโฟลเดอร์/ชื่อไฟล์จริงในเครื่องคุณ
        const bgImages = [
            "image/1.jpg",
            "image/2.jpg",
            "image/3.jpg",
            "image/4.jpg",
            "image/5.jpg",
            "image/6.jpg",
            "image/7.jpg",
            "image/8.jpg",
        ];
 
        const slide1 = document.getElementById("bgSlide1");
        const slide2 = document.getElementById("bgSlide2");
 
        // สุ่มรูปแรกทุกครั้งที่โหลด/รีเฟรชหน้า
        let currentIndex = Math.floor(Math.random() * bgImages.length);
        let showingSlide1 = true;
 
        slide1.style.backgroundImage = `url('${bgImages[currentIndex]}')`;
        slide1.style.opacity = 1;
 
        function nextImage() {
            // สุ่มรูปถัดไป (กันไม่ให้ซ้ำรูปเดิมติดกัน)
            let nextIndex;
            do {
                nextIndex = Math.floor(Math.random() * bgImages.length);
            } while (nextIndex === currentIndex && bgImages.length > 1);
            currentIndex = nextIndex;
 
            const nextUrl = `url('${bgImages[currentIndex]}')`;
 
            if (showingSlide1) {
                slide2.style.backgroundImage = nextUrl;
                slide2.style.opacity = 1;
                slide1.style.opacity = 0;
            } else {
                slide1.style.backgroundImage = nextUrl;
                slide1.style.opacity = 1;
                slide2.style.opacity = 0;
            }
            showingSlide1 = !showingSlide1;
        }
 
        // สลับรูปทุก 20 วินาที
        setInterval(nextImage, 20000);
    </script>

</body>
</html>