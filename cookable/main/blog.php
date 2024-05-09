<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKABLE - BLOG</title>
    <link rel="stylesheet" href="../css/blog.css">
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
                    <span>DIỄN ĐÀN</span>
                </h2>
                <p>Nơi sẻ chia công thức và kinh nghiệm tâm đắc của bạn</p>
                <p>Học hỏi các bí quyết tuyệt vời của người khác</p>
                <button> Đăng bài </button>   
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
        
        <div id="wp-blogs">            
            
            <!--dang bai-->
            <h2>CHIA SẺ BÍ QUYẾT CỦA BẠN</h2>
            <div class="share">
                <form action="">
        
                    <label for="title">Tiêu đề</label>
                    <input type="text" id="title" name="title" placeholder="Nhập tiêu đề cho bài viết...">
        
                    <label for="content">Nội dung</label>
                    <textarea id="comment" name="comment" rows="10" cols="50"></textarea> 

                    <label for="image">Thêm hình ảnh</label>
                    <input type="file" id="image" name="image">
               
                    <input type="submit" value="Send">
                </form>
            </div><br>

            <h2>NHỮNG CHIA SẺ HAY HO</h2>


            <ul id="list-post">
                <div class="item">
                    <a href="blog_post.html">
                    <div class="image-container">
                        <img src="https://i.pinimg.com/564x/76/02/ad/7602ad62dc00890419658642f0aa462c.jpg" alt="Công thức ngon mà đơn giản cho cuối tuần nhàn hạ!">
                    </div>
                    <div class="name">Công thức ngon mà đơn giản cho cuối tuần nhàn hạ!</div>
                   </a>
                </div>
                <div class="item">
                    <a href="blog_post.html">
                    <div class="image-container">
                        <img src="https://i.pinimg.com/564x/b5/a0/93/b5a0937082208649ad89b5cacc3a2c75.jpg" alt="Món ăn ít calo cho giảm cân dễ chế biến.">
                    </div>
                    <div class="name">Món ăn ít calo cho giảm cân dễ chế biến.</div>
                    </a>
                </div>               
                 <div class="item">
                    <a href="blog_post.html">
                    <div class="image-container">
                    <img src="https://i.pinimg.com/564x/b6/f4/c9/b6f4c9fa4d279758fe56b987320b8268.jpg" alt="Các món dễ nấu với trứng."></div>
                    <div class="name">Các món dễ nấu với trứng.</div>
                    </a>
                </div>

                <div class="item">
                    <a href="blog_post.html">
                    <div class="image-container">
                        <img src="https://i.pinimg.com/564x/fe/aa/12/feaa12ed0e4195732ebccdb960cee559.jpg" alt="Chỉ còn trứng, nấu gì bây giờ!">
                    </div>
                    <div class="name">Chỉ còn trứng, nấu gì bây giờ!</div>
                    </a>
                </div>           
                    
            </ul>            
            <div class="list-page">
                <div class="item">
                    <a href="">1</a>
                </div>
                <div class="item">
                    <a href="">2</a>
                </div>
                <div class="item">
                    <a href="">3</a>
                </div>
                <div class="item">
                    <a href="">4</a>
                </div>
            </div><br>

            <h2>BÀI VIẾT CỦA BẠN</h2>
            <div>
                <p>Bạn chưa có bài đăng nào cả!</p>
            </div>
            
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