
<?php
if(isset($_SESSION['ma_user']))
{
 get_header() 
 
 ?>

<?php


    $list_danhsach = danhsach_ctgiohang();
    //show_data($list_danhsach);
    $solg = count($list_danhsach);
    $tongtien = tongtien();

?>
<style>
    thead tr td{
        color: blue !important ;
        font-weight: 700;
    }
</style>

<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <?php
            if( $solg >0){
                ?>
                <div class="section" id="info-cart-wp">
                    <div class="section-detail table-responsive">
                        <form action="?mode=cart&act=update" method="post">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>STT</td>
                                        <td>Mã sản phẩm</td>
                                        <td>Ảnh sản phẩm</td>
                                        <td>Tên sản phẩm</td>
                                        <td>Giá sản phẩm</td>
                                        <td>Số lượng</td>
                                        <td colspan="2">Thành tiền</td>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                        <?php 
                                            $dem = 0;                           
                                            foreach ($list_danhsach as $key => $value) {
                                                $product = get_product_by_id($value['masp']) ;
                                                $dem++;
                                        ?>
                                                    <tr>
                                                        <td style="color: red;"><?php echo $dem; ?></td>
                                                        <td><?php echo $value['masp'] ?></td>
                                                        <td>
                                                            <a href="" title="" class="thumb">
                                                                <img src="public/img_ruou/<?php echo $product['anh'] ?>" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="<?php
                                                                      
                                                                echo $product['url'];
                                                            ?>" title="" class="name-product"><?php echo $product['tensp'] ?></a>
                                                        </td>
                                                        <td><?php echo $product['dongiaban'] ?></td>
                                                        <td>
                                                            <input type="number"  name="solg[<?php echo $value['masp'] ?>]" min="1" max="100>" value="<?php echo $value['soluong'] ?>" class="num-order">
                                                        </td>
                                                        <td><?php echo $value['tongcong'] ?></td>
                                                        <td>
                                                            <a href="<?php 
    
                                                                echo $product['url_delete'];
                                                            ?>" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                    </tr>
                                        <?php         
                                            
                                        }
                                        ?>
                                        
                                
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <div class="clearfix">
                                                <p id="total-price" class="fl-right">Tổng giá: <span> <?php echo $tongtien ?></span></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">
                                            <div class="clearfix">
                                                <div class="fl-right">
                                                    <input type="submit" id="update-cart" name="btn_update_cart" value="Cập nhật giỏ hàng">
                                                    <a href="?mode=cart&act=check_out" title="" id="checkout-cart">Thanh toán</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="section" id="action-cart-wp">
                    <div class="section-detail">
                        <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                        <a href="?mode=home" title="" id="buy-more">Mua tiếp</a><br/>
                        <a href="?mode=cart&act=delete_all" title="" id="delete-cart">Xóa giỏ hàng</a>
                    </div>
                </div>

        <?php
            }
            else{
                echo "Không có giữ liệu <a href='?mode=home&act=main'> Quay lại trang chủ </a> ";
            }
        ?>
        
    </div>
</div>

<?php get_footer();
  
  }else{
    header("Location: ../Login/Login/login.php");
  }
?>