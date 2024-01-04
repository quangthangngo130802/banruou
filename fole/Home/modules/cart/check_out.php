<?php 
    get_header();
   $list_buy = danhsach_ctgiohang();
   // show_array($list_buy);

   $total = tongtien();
    
?>

<?php
        
       if(isset($_POST['checkout'])){
        $error = array();
        $url ;
            //show_data($_POST);

            if(!empty($_POST['fullname'])){
                    if(is_fullname($_POST['fullname'])){
                        $fullname = $_POST['fullname'];
                    }else{
                        $error['fullname'] = " Chưa đúng định dạng ";
                    }
            }else{
                $error['fullname'] = " Không được để trống ";
            }


            if(!empty($_POST['email'])){
                if(is_email($_POST['email'])){
                    $email = $_POST['email'];
                }else{
                    $error['email'] = " Chưa đúng định dạng ";
                }
            }else{
                $error['email'] = " Không được để trống ";
            }


            if(!empty($_POST['address'])){
                        if(is_address($_POST['address'])){
                            $address = $_POST['address'];
                        }else{
                            $error['address'] = " Chưa đúng định dạng ";
                        }
            }else{
                    $error['address'] = " Không được để trống ";
            }

            if(!empty($_POST['tel'])){
                if(is_number($_POST['tel'])){
                    $tel = $_POST['tel'];
                }else{
                    $error['tel'] = " Chưa đúng định dạng ";
                }
            }else{
                    $error['tel'] = " Không được để trống ";
            }

           if(empty($error)){
            require "add_hdb.php";
                
           }
        
       } 
      

?>
<style>
    p.font{
        color: red;
    }
</style>
<div id="main-content-wp" class="checkout-page ">
    <div class="wp-inner clearfix">
    <?php get_sidebar()  ?>
        <div id="content" class="fl-right">
            <div class="section" id="checkout-wp">
                <div class="section-head">
                    <h3 class="section-title">Thanh toán</h3>
                </div>
                
                <div class="section-detail">
                    <div class="wrap clearfix">
                        <form method="POST" action=" ">   
                       
                            <div id="custom-info-wp" class="fl-left">
                                <h3 class="title">Thông tin khách hàng</h3>
                                <div class="detail">
                                    <div class="field-wp">
                                        <label>Họ tên</label>
                                        <input type="text" name="fullname" id="fullname" value="<?php if(!empty($fullname)) echo $fullname ?>" >
                                        <p class="font"><?php if(isset($_POST['checkout'])) if(!empty($error['fullname'])) echo $error['fullname'] ?></p>
                                    </div>
                                    <div class="field-wp">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" value="<?php if(!empty($email)) echo $email ?>">
                                        <p class="font"><?php if(isset($_POST['checkout'])) if(!empty($error['email'])) echo $error['email'] ?></p>
                                    </div>
                                    <div class="field-wp">
                                        <label>Địa chỉ nhận hàng</label>
                                        <input type="text" name="address" id="address" value="<?php if(!empty($address)) echo $address ?>">
                                        <p class="font"><?php if(isset($_POST['checkout'])) if(!empty($error['address'])) echo $error['address'] ?></p>
                                    </div>
                                    <div class="field-wp">
                                        <label>Số điện thoại</label>
                                        <input type="tel" name="tel" id="tel" value="<?php if(!empty($tel)) echo $tel ?>">
                                        <p class="font"><?php if(isset($_POST['checkout'])) if(!empty($error['tel'])) echo $error['tel'] ?></p>
                                    </div>
                                    <div class="field-full-wp">
                                        <label>Ghi chú</label>
                                        <textarea name="note"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div id="order-review-wp" class="fl-right">
                                <h3 class="title">Thông tin đơn hàng</h3>
                                <div class="detail">
                                    <table class="shop-table">
                                        <thead>
                                            <tr>
                                                <td>Sản phẩm(1)</td>
                                                <td>Tổng</td>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                      
                                           <?php
                                                foreach ($list_buy as $key => $value) {
                                                    # code... 
                                                   $item =  get_product_by_id($value['masp']);    
                                            ?>
                                                <tr class="cart-item">
                                                    <td class="product-name"><?php echo $item['tensp'] ?> <strong class="product-quantity">x <?php echo $value['soluong'] ?></strong></td>
                                                    <td class="product-total"><?php echo $value['tongcong'] ?></td>
                                                </tr>
                                            <?php         
                                                }
                                            ?>
                                        
                                        </tbody>
                                        
                                        <tfoot>
                                            <tr class="order-total">
                                                <td>Tổng đơn hàng:</td>
                                                <td><strong class="total-price"><?php echo $total ?></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div id="payment-checkout-wp">
                                        <ul id="payment_methods">
                                            
                                            <li>
                                                <input type="radio" checked="checked" id="payment-home" name="payment-method" value="payment-home">
                                                <label for="payment-home">Thanh toán tại nhà</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="place-order-wp clearfix">
                                        <button type="submit" name="checkout">Đặt hàng</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    get_footer();
?>