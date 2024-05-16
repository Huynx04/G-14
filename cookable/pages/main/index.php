<?php
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIt 25";
$query_pro = mysqli_query($mysqli, $sql_pro);


?>
<h3 style="margin: 3%;">Sản phẩm mới nhất</h3>
               <ul class="product_list">
                <?php
                while ($row = mysqli_fetch_assoc($query_pro)){
                ?>
                     <li class="product_items">
                        <a href="sanpham.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product_item">
                            <img src="../admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                            <p class="title_product text_edit1"> <?php echo $row['tensanpham'] ?></p>
                            <p class="price_product text_edit1"><?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></p>
                            <!-- <p><?php echo $row['tendanhmuc'] ?></p> -->

                        </a>
                     </li>
                  <?php 
                } 
                  ?>
               </ul>
