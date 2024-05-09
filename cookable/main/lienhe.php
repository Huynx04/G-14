<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKABLE - LIÊN HỆ</title>
    <link rel="stylesheet" href="../css/lienhe.css">
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
                    <span>LIÊN HỆ</span>
                </h2>
                <p>Nếu có thắc mắc hay đóng góp ý kiến, xin hãy điền form bên dưới.</p>
                <p>Rất mong nhận được những lời góp ý từ các bạn.</p>
                <button> Góp ý </button>   
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
        
        <div id="wp-lienhe">
            <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
        </div>

    </div>

    <!--lien he-->
    <div class="contactus">
        <form action="">

            <label for="name">Họ và tên</label>
            <input type="text" id="name" name="name" placeholder="Nhập họ và tên...">
     
            <label for="mail">Email</label>
            <input type="email" id="mail" name="mail" placeholder="Nhập email...">
     
            <label for="phone">Số điện thoại</label>
            <input type="phone" id="phone" name="phone" placeholder="Nhập số điện thoại...">
     
            <label for="address">Địa chỉ</label>
            <input type="text" id="address" name="address" placeholder="Nhập địa chỉ...">

            <label for="comment">Nội dung</label>
            <textarea id="comment" name="comment" rows="10" cols="50"></textarea> 
       
            <input type="submit" value="Send">
        </form>
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