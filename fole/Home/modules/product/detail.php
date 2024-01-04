<?php 
    get_header();
    $id = (int)$_GET['id'];
    //echo $id;
    //show_data($list_ncc);
    $result = get_product($list_sanpham);
   
    $value = get_product_by_id($id);
   // show_data($value);
    $ten_ncc = get_by_ncc( $id);
    //echo $ncc;
    $ten_chatlieu =  get_by_chatlieu( $id);

    $ten_loaisp = get_by_loai($id);
   
   
?>
<style>
   .thumb img{
        width: 190px;
        height: 255px
   }
   
   .border_top{
    margin-top: 20px;
    border-top:  1px solid black;
   }
   .border_top h1{
        margin: 20px 0px;
        padding: 7px 8px;
        display: block;
        font-family: 'Roboto Medium';
        font-size: 18px;
        background: #cdcfc2;
   }
   th, td {
    width: 240px; /* Đặt độ rộng của các cột */
    padding: 10px; /* Đặt độ dày của phần padding trong ô */
    text-align: left; /* Căn chữ trong ô về bên trái */
    border: 1px solid;
    text-align: center;
    }
</style>
<div id="main-content-wp" class="detail-product-page clearfix">
    <div class="wp-inner clearfix">
    <?php get_sidebar() ?>
        <div id="content" class="fl-right">
                     
                    <div class='section' id='info-product-wp'>
                    <div class='section-detail clearfix'>
                        <div class='thumb fl-left'>
                            <img  src="public/img_ruou/<?php echo $value['anh'] ?>" alt=''>
                        </div>
                        <div class='detail fl-right'>
                            <h3 class='title'><?php echo $value['tensp'] ?></h3>
                            <p class='price'><?php echo $value['dongiaban'] ?></p>
                            <p class='product-code'>Mã sản phẩm: <span> <?php echo $value['masp']?></span></p>
                            <div class='desc-short'>
                                <h5>Mô tả sản phẩm:</h5>
                                <p>Hương vị : <?php echo $value['huongvi'] ?></p>
                            </div>
                            <div class='num-order-wp'>
                                <!-- <span>Số lượng:</span>
                                <input type='text' id='num-order' name='num-order' value='1'> -->
                                <a href="<?php echo $value['url_add_cart'] ?> "  title="" class="add-to-cart">Thêm giỏ hàng</a>
                            </div>
    
                        </div>
                    </div>
                </div>
                <div class='section' id='desc-wp'>
                    <div class='section-head'>
                        <h3 class='section-title'>Chi tiết sản phẩm</h3>
                        <table>
                            <tr>
                                <th>Loại rượu</th>
                                <th>Chất liệu</th>
                                <th>Nhà cung cấp</th>
                                <th>Hướng dẫn bảo quản</th>
                            </tr>
                            <tr>
                                <td><?php echo $ten_loaisp ?></td>
                                <td><?php echo $ten_chatlieu ?></td>
                                <td><?php echo $ten_ncc ?></td>
                                <td><?php echo $value['baoquan'] ?></td>
                            </tr>
                            
                        </table>
                    </div>
                   
                </div>
                

                <div class="section border_top list-cat" >
                    <div class="section-head">
                        <h1>Sản phẩm liên quan</h1>
                    </div>
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                        <?php
                        if(!empty($list_sanpham)){
                            foreach ($result as $key => $item) {
                                //echo $value['url'];
                                if($value['maloai'] == $item['maloai'] && $item['masp'] != $id){
                                    echo "
                                    <li>
                                        <a href='{$item['url']}' title='' class='thumb'>
                                            <img src='public/img_ruou/{$item['anh']}' alt=''>
                                        </a>
                                        <a href='{$item['url']}' title='' class='title'>{$item['tensp']}</a>
                                        <p class='price'>{$item['dongiaban']}</p>
                                    </li>
                                    ";
                                }
                            
                            }
                        }
                        
                        ?>
                        </ul>
                    </div>
                </div>
                    
           
        </div>
       
   
</div>

<?php 
    get_footer();
?>