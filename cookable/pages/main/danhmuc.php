<body class="">
<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>

<h1 style="margin-top: 8%; margin-bottom: 5%; text-align: center; font-size:45px">Danh mục món ăn: <?php echo $row_title['tendanhmuc'] ?> </h1>
<ul class="product_list">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
    ?> 
        <li class="product_items">
        <a href="sanpham.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product_item">
                <img src="../admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="" ;>
                <p class="title_product text_edit1"> <?php echo $row_pro['tensanpham'] ?></p>
                <p class="price_product text_edit1"><?php echo number_format($row_pro['giasp'], 0, ',', '.') . 'vnđ' ?></p>
            </a>
            <button class="addCart">
                 Mua
            </button>
        </li>
    <?php
    }
    ?>
</ul>

<div class="cartTab">
                  <h1>giỏ hàng</h1>
                  <div class="listCart">
                     <div class="item">
                        <div class="image">
                        </div>
                        <div class="name">
                        </div>
                        <div class="totalPrice">
                        </div>
                        <div class="quantity">
                          
                        </div>
                     </div>

                  </div>
                  <div class="btn">
                     <button class="close"> Đóng </button>
                     <button class="Check"> Tính tiền </button>

                  </div>
               </div>
       <script src="sanpham.js"></script>

</body>
