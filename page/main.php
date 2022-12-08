
<div class = "below-container">
    <div class = "row row2">
        <h2>Sản phẩm nổi bật</h2>
    </div>
<?php

    $sql_pro = "SELECT * FROM db_sanpham ORDER BY id_sanpham ASC";
    $query_pro = mysqli_query($mysqli, $sql_pro);
    $row_title = mysqli_fetch_array($query_pro);
    

?>
<div class="col4">
    <ul class = "product">
        <li class="product1">
            <?php while($row_pro = mysqli_fetch_array($query_pro)){
                if($row_pro['noi_bat'] == 'Có'){
            ?>
           <div class="product2">
            <a href="#"><img src = "./../admin/modules/quanlisp/upload/<?php echo $row_pro['img_sanpham'] ?>"width="300" height="400" ></a>
            <h4><?php echo $row_pro['ten_sanpham'] ?></h4>
            <p><?php echo $row_pro['gia_sp'] ?></p>
            <span class = "buy"><a href="shoppingcart.html">Buy Now</span></a></div> 
            <?php 
        }   }
            ?>
        </li>  
        
    </ul>
</div>
</div>