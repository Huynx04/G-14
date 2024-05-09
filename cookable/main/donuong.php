<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKABLE</title>
    <link rel="stylesheet" href="../css/donuong.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <div id="wrapper">
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
                    <span>COOKABLE</span>
                </h2>
                <p>Chuyên cung cấp các món ăn đảm bảo dinh dưỡng
                    hợp vệ sinh đến người dùng,phục vụ người dùng 1 cái
                    hoàn hảo nhất</p>
                <button>Tìm hiểu </button>
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
    </div>
<!-- top -->
        <div id = "top">     
                <div class="fl">  <h1>Món nướng</h1></div>
                <div class="fr">
                    <form> 
                        <lable for = "s" >Search</lable> <br> 
                        <input type = "text" id="s" name ="s"> <br> 
                        <button class="bt" type="button" onclick="alert('học học nữa học mãi')">Submit</button><br>
                    </form> 
                </div>        
           </div>
        <!-- end top -->

        <div id="nl"> 
             <div class="container">
             <div class="eat"> 
                 <ul class="eat__list-food">
                     <li class="eat__item-food">
                         <a href="scr_nuong1.html" class="eat__item-food-link">
                             <img src="https://cdn.tgdd.vn/2021/07/CookProduct/0-1200x676-14.jpg" alt="sườn nướng chả" class="food-link-img">
                         </a>
                         <span class="food-link-text">
                            <bold>Sườn nướng chả trứng</bold>
                         </span>
                     </li>
                     <li class="eat__item-food">
                         <a href="scr_nuong2.html" class="eat__item-food-link">
                             <img src="https://cdn.tgdd.vn/Files/2017/11/30/1046081/cach-lam-tom-nuong-bo-toi-thom-ngon-beo-ngay-tai-nha-202206171518429091.jpeg" alt="tôm nướng bơ tỏi" class="food-link-img">
                         </a>
                         <span class="food-link-text">
                             <bold>Tôm nướng bơ tỏi</bold>
                         </span>
                     </li>
                     <li class="eat__item-food">
                         <a href="scr_nuong3.html" class="eat__item-food-link">
                             <img src="https://www.heoquayhungky.com/upload/product/52086-vit-quay-bac-kinh-670x446-3782.jpg" alt="vịt quay" class="food-link-img">
                         </a>
                         <span class="food-link-text">
                             <bold>Vịt quay bắc kinh</bold>
                         </span>
                     </li>
                 </ul>
             </div>
         </div>
        </div>
	
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
           
               
               