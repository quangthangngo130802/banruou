
<?php 
    session_start();
    ob_start();
    require '../conn/connect.php';
    require 'config/send_email.php';
    require 'lib/template.php';
    require 'lib/mysql_sanpham.php';
    require 'lib/product.php';
    require 'lib/showdata.php';
    require 'lib/cart.php';
    require 'lib/url.php';
    require 'lib/validate.php';
    
    
    $list_loaisp = list_danhsach($query_lietke_loaisanpham); 
    $list_sanpham = list_danhsach($query_lietke_sanpham); 
    $list_chatlieu = list_danhsach($query_lietke_chatlieu);
    $list_ncc = list_danhsach($query_lietke_ncc);
    $list_giohang = list_danhsach($query_lietke_giohang );
    $list_ctgiohang = list_danhsach($query_lietke_ctgiohang );
    $list_khachhang = list_danhsach($query_lietke_khachhang );
    $list_cthdb = list_danhsach( $query_lietke_cthdb );
    $list_hdb = list_danhsach($query_lietke_hdb );
   

?>
<style>
    .section-title{
        display: block;
    }
    .list-item img{
        width: 190px;
        height: 255px;
    }
</style>
<?php

$mode = !empty($_GET['mode'])?$_GET['mode']:'home';
$act = !empty($_GET['act'])?$_GET['act']:'main';
$path = "modules/{$mode}/{$act}.php";
    if(file_exists($path)){      
        require $path;
    }else{
        require "modules/home/main.php";
    }
  
?>