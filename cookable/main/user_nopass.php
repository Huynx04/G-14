<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKABLE - USER - Quên mật khẩu</title>
    <link rel="stylesheet" href="../css/user-shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div id="wrapper">
        <!--header-->
        <div id="header">
            <a href="" class="logo">
                <i class="fa-solid fa-truck-fast"></i>
            </a>
            <div id="menu">
                <div class="item">
                    <a href="">Trang chủ</a>
                </div>
                <div class="item">
                    <a href="">Sản phẩm</a>
                </div>
                <div class="item">
                    <a href="">Blog</a>
                </div>
                <div class="item">
                    <a href="">Liên hệ</a>
                </div>
                <div class="item">
                    <a href="">Tính calo</a>
                </div><div class="item">
                    <a href="">Công thức nấu ăn</a>
                </div>
            </div>
            <div id="actions">
                <div class="item">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="item">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </div>
        </div>
        
        <div id="banner">
            <div class="box-left">
                <h2>
                    <span>USER - QUÊN MẬT KHẨU</span>
                </h2>
                <p>Bỗng nhiên bạn nhớ lại mật khẩu đã quên!</p>
                <p>Bạn không cần đổi mật khẩu nữa!</p>
                <p>Hãy đăng nhập ngay!</p>
            <a href="user_login.php">
                <button> Đăng nhập </button>   
            </a>
            </div>
            <div class="box-right">
                <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/img_1.png?raw=true" alt="">
                <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/img_2.png?raw=true" alt="">
                <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/img_3.png?raw=true" alt="">
            </div>
            <div class="to-bottom">
                <a href="">
                    <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/to_bottom.png?raw=true" alt="">
                </a>
            </div>
        </div>
        
        <div id="wp-user">

            <!--quen mat khau-->
            <h2>LẤY MÃ QUA EMAIL</h2>
            <div class="user-form">
                <form action="">      
                    <label for="username">Tên người dùng</label>
                    <input type="text" id="username" name="username" required placeholder="Nhập tên người dùng...">           
                    
                    <label for="year">Năm sinh</label>
                    <input type="number" id="year" name="year" placeholder="Nhập năm sinh..." min="1900" max="2024">
            
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Nhập email...">

                    <input type="submit" value="Lấy mã">
                </form>
            </div><br>           
            
            <!--nhap ma-->
            <div class="user-form">
                <form action="">              
                    
                    <label for="code">Kiểm tra hòm thư và nhập mã bảo mật</label>
                    <input type="text" id="code" name="code" placeholder="Nhập mã đã nhận...">

                    <input type="submit" value="Nhập mã">
                    <script>
                            // Chỗ này xử lý mã gủi qua email, kiểm tra mã được nhập
                            // Nếu mã đúng, chuyển trang window.location.href = 'user_changepass.html';
                    </script>
                </form>
            </div><br>

        </div>
    
        <!--footer-->
        <div id="footer">
    <div class="box">
        <div class="logo">
            <img src="assets/logo.png" alt="">
        </div>
        <p>Cung cấp sản phẩm với chất lượng an toàn cho quý khách</p>
    </div>
    <div class="box">
        <h3>NỘI DUNG</h3>
        <ul class="quick-menu">
            <div class="item">
                <a href="">Trang chủ</a>
            </div>
            <div class="item">
                <a href="">Sản phẩm</a>
            </div>
            <div class="item">
                <a href="">Blog</a>
            </div>
            <div class="item">
                <a href="">Liên hệ</a>
            </div>
            <div class="item">
                <a href="">Tính calo</a>
            </div>
            <div class="item"> 
                <a href=""> Công thức nấu ăn</a>
            </div>
        </ul>
    </div>
    <div class="box">
        <h3>LIÊN HỆ</h3>
        <form action="">
            <input type="text" placeholder="Địa chỉ email">
            <button>Nhận tin</button>
        </form>
    </div>
    </div>
    </div>
    <!-- Thêm vào cuối tệp index.html -->
    <div id="chatbot-circle" onclick="toggleChat()">
    <p> 
    <i class="fa-solid fa-robot"></i>
    </p>
    </div>
    
    <div id="chatbot-interface" style="display: none;">
    <div id="chatbot-messages"></div>
    <input id="chatbot-input" type="text" placeholder="Type your message here" />
    </div>
    
    <script>
    function toggleChat() {
    var chatInterface = document.getElementById('chatbot-interface');
    if (chatInterface.style.display === "none") {
    chatInterface.style.display = "block";
    } 
    else {
    chatInterface.style.display = "none";
    }
    }
    </script>

</body>
</html>