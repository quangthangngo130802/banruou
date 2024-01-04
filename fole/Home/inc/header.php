
<?php
   
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Rượu Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>

        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <!-- <script src="public/js/main.js" type="text/javascript"></script> -->
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp" class="clearfix">
                    <div class="wp-inner" style="display: flex; justify-content: space-between; align-items: center;">
                        <a href="?mode=home" title="" id="logo" class="fl-left">RƯỢU</a>
                        <div>
                            <form action="" method="get">
                                <input type="text" name="timkiem">
                                <input type="submit" value="tìm kiếm sản phẩm" name="sub_timkiem">
                            </form>
                            <a href=""><?php
                                    if(isset($_GET["sub_timkiem"])){
                                        if(empty($_GET['timkiem'])){
                                            echo "<b style = 'color : red;'> Mời nhập thông tin tìm kiếm !</b>";
                                        }
                                    }
                                  
                            ?></a>
                        </div>
                        <!-- <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="false"></i></div> -->
                        <div id="cart-wp" class="fl-right">
                            <a href="?mode=cart&act=show" title="" id="btn-cart">
                                <span id="icon"><img src="public/images/icon-cart.png" alt=""></span>
                                <span id="num"><?php 
                                    
                                        $count = count_ctgiohang();
                                                   //$count = count($list_ds);
                                                   if($count > 0 ){
                                                        echo $count;
                                                   }else{
                                                        echo "";
                                                   }
                                                  
                                                ?>
                                </span>
                            </a>            
                            
                        </div>
                        <div style="display: flex;">
                               
                                <?php
                                    if(isset($_SESSION['ma_user'])){
                                 ?>
                                    <div style="margin-right: 15px ;">Xin chào : <b><?php echo $_SESSION['ten_user'] ?></b></div>
                                     <a href="login_logout/logout.php">Đăng xuất</a>
                                <?php 
                                    }else{
                                 ?>
                                        <a href="../Login/Login/login.php">Đăng nhập</a>
                                 <?php
                                    }
                                
                                ?>
                              
                            </div>
                    </div>
                </div>