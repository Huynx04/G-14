<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKABLE - TÍNH CALO</title>
    <link rel="stylesheet" href="../css/calo.css">
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
                    <span>TÍNH CALO</span>
                </h2>
                <P>Bạn không biết bao nhiêu calo là đủ?</P>
                <p>Bạn gặp khó khăn với việc chọn món ăn đúng với lượng calo cần thiết?</p>
                <p>Hãy để chúng tôi giúp bạn!</p>
                <button>Let's go</button>   
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
        
        <div id="wp-calo">
            <h2>BAO NHIÊU CALO LÀ ĐỦ VỚI BẠN!</h2>
        </div>
    </div>

    

    <!--tinh calo-->
    <div class="calo">
        <form action="">            
            
            <label for="height">Chiều cao</label>
            <input type="number" id="height" name="height" placeholder="Nhập chiều cao của bạn(cm)..." min="0" max="300">
     
            <label for="weight">Cân nặng</label>
            <input type="number" id="weight" name="weight" placeholder="Nhập cân nặng của bạn(kg)..." min="0" max="300">            
            
            <div class="gd">
                <label for="male">Nam</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="female">Nữ</label>
                <input type="radio" id="female" name="gender" value="female">
            </div>
     
            <label for="age">Tuổi tác</label>
            <input type="number" id="age" name="age" placeholder="Nhập tuổi của bạn..." min="0" max="150">

            <div class="op">
            <label for="demand">Nhu cầu của bạn</label>
            <select id="demand" name="demand">
                <option value="muscle">Tăng cơ</option>
                <option value="loseweight">Giảm cân</option>
                <option value="healthy">Khỏe mạnh</option>
            </select>
            </div>
            
            <input type="submit" value="Tính toán">
        </form>

        <div id="result-print">
            <input type="text" id="result" readonly placeholder="Kết quả của bạn là...">
        </div>

    </div>
        <!--ket qua-->
        <div class="results">
            <h2>THEO TÍNH TOÁN CỦA CHÚNG TÔI, BẠN CẦN NHỮNG THỨ NÀY!</h2>
            
            <!--bua sang-->
            <h3>Bữa sáng của bạn đây rồi</h3>
            <ul id="list-post">
                <div class="item">
                    <a href="blog_post.html">
                    <div class="image-container">
                        <img src="https://i.pinimg.com/564x/76/02/ad/7602ad62dc00890419658642f0aa462c.jpg" alt="Gỏi cuốn - Tưởng khó nhưng dễ">
                    </div>
                    <div class="name">Gỏi cuốn - Tưởng khó nhưng dễ</div>
                    <div class="name">Lượng Calo: 415Kcal</div>
                </a>
                </div>
                <div class="item">
                    <a href="blog_post.html">
                    <div class="image-container">
                        <img src="https://i.pinimg.com/564x/b5/a0/93/b5a0937082208649ad89b5cacc3a2c75.jpg" alt="Salad trái cây healthy">
                    </div>
                    <div class="name">Salad trái cây healthy</div>
                    <div class="name">Lượng Calo: 375Kcal</div>
                </a>
                </div>               
                 <div class="item">
                    <a href="blog_post.html">
                    <div class="image-container">
                    <img src="https://i.pinimg.com/564x/b6/f4/c9/b6f4c9fa4d279758fe56b987320b8268.jpg" alt="Trứng luộc - Dinh dưỡng và đơn giản"></div>
                    <div class="name">Trứng luộc - Dinh dưỡng và đơn giản</div>
                    <div class="name">Lượng Calo: 457Kcal</div>
                </a>
                </div>
                <div class="item">
                    <a href="blog_post.html">
                    <div class="image-container">
                        <img src="https://i.pinimg.com/564x/08/19/cc/0819cc97c3ecc49ea4de5bba067086d5.jpg" alt="Bánh trứng ai cũng thích">
                    </div>
                    <div class="name">Bánh trứng ai cũng thích</div>
                    <div class="name">Lượng Calo: 358Kcal</div>
                </a>
                </div>                   
            </ul>            
            
            <!--bua trua-->
            <h3>Bữa trưa quan trọng lắm đấy</h3>
            <ul id="list-post">
                <div class="item">
                    <a href="blog_post.html"></a>
                    <div class="image-container">
                        <img src="https://i.pinimg.com/564x/76/02/ad/7602ad62dc00890419658642f0aa462c.jpg" alt="Gỏi cuốn - Nhỏ nhưng có võ">
                    </div>
                    <div class="name">Gỏi cuốn - Nhỏ nhưng có võ</div>
                    <div class="name">Lượng Calo: 653Kcal</div>
                </div>
                <div class="item">
                    <a href="blog_post.html"></a>
                    <div class="image-container">
                        <img src="https://i.pinimg.com/736x/32/57/d1/3257d17b16ec0e7a938eb9a26f22280c.jpg" alt="Mỳ ý - Mới lạ và độc đáo">
                    </div>
                    <div class="name">Mỳ ý - Mới lạ và độc đáo</div>
                    <div class="name">Lượng Calo: 612Kcal</div>
                </div>               
                 <div class="item">
                    <a href="blog_post.html"></a>
                    <div class="image-container">
                    <img src="https://i.pinimg.com/564x/b6/f4/c9/b6f4c9fa4d279758fe56b987320b8268.jpg" alt="Trứng kho - Hương vị quê hương"></div>
                    <div class="name">Trứng kho - Hương vị quê hương</div>
                    <div class="name">Lượng Calo: 598Kcal</div>
                </div>
                <div class="item">
                    <a href="blog_post.html"></a>
                    <div class="image-container">
                        <img src="https://i.pinimg.com/564x/fe/aa/12/feaa12ed0e4195732ebccdb960cee559.jpg" alt="Trứng chiên mix - Đầy đủ năng lượng">
                    </div>
                    <div class="name">Trứng chiên mix - Đầy đủ năng lượng</div>
                    <div class="name">Lượng Calo: 572Kcal</div>
                </div>                  
            </ul>            

            <!--bua toi-->
            <h3>Bữa tối chỉ cần như này thôi</h3>
            <ul id="list-post">
                <div class="item">
                    <a href="blog_post.html">
                    <div class="image-container">
                        <img src="https://i.pinimg.com/564x/76/02/ad/7602ad62dc00890419658642f0aa462c.jpg" alt="Gỏi cuốn tôm thịt bổ dưỡng">
                    </div>
                    <div class="name">Gỏi cuốn tôm thịt bổ dưỡng</div>
                    <div class="name">Lượng Calo: 622Kcal</div>
                </a>
                </div>
                <div class="item">
                    <a href="blog_post.html">
                    <div class="image-container">
                        <img src="https://i.pinimg.com/736x/32/57/d1/3257d17b16ec0e7a938eb9a26f22280c.jpg" alt="Mỳ trộn rau củ - Màu sắc của tự nhiên">
                    </div>
                    <div class="name">Mỳ trộn rau củ - Màu sắc của tự nhiên</div>
                    <div class="name">Lượng Calo: 588Kcal</div>
                </a>
                </div>               
                 <div class="item">
                    <a href="blog_post.html">
                    <div class="image-container">
                    <img src="https://i.pinimg.com/564x/0b/36/34/0b3634ddd6673d964800c82f52435724.jpg" alt="Canh sườn non ngũ sắc - Ngọt từ xương"></div>
                    <div class="name">Canh sườn non ngũ sắc - Ngọt từ xương</div>
                    <div class="name">Lượng Calo: 615Kcal</div>
                </a>
                </div>
                <div class="item">
                    <a href="blog_post.html">
                    <div class="image-container">
                        <img src="https://i.pinimg.com/564x/39/a6/e6/39a6e6898547e7ab32b7070c7b0818b3.jpg" alt="Cơm cuộn gạo lức - Amazing">
                    </div>
                    <div class="name">Cơm cuộn gạo lức - Amazing</div>
                    <div class="name">Lượng Calo: 613Kcal</div>
                </a>
                </div>                  
            </ul>            

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