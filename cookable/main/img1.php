<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH FOOD</title>
    <link rel="stylesheet" href="../css/img1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div id="wrapper">
        <div id="header">
            <a href="index.html" class="logo">
                <i class="fa-solid fa-truck-fast"></i>
            </a>
            <div class="black-box">
                <h2><i style="color: #c2c2c2; " >FIND WITH YOUR INGREDIENTS </i></h2>
                    <div class="fontbox">
                    <label for="nguyenlieu">Điền tên loại nguyên liệu :</label>
                    <input type="text" id="nguyenlieu" name="nguyenlieu" required placeholder="Nhập nguyên liệu(viết thường)...">
            
                    <label for="soluong">Nhập số lượng bạn có :</label>
                    <input type="number" id="soluong" name="soluong" required placeholder="Nhập số lượng (đơn vị gam)...">                    
    
                    <input type="submit" value="SEARCH">
                </div>
            </div>
</body>
</html>