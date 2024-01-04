<?php 
if(isset($_SESSION['ma_user'])){
        $id = $_GET['id'];
        echo $id;
        $ngay = date("d");
        $thang = date("m");
        $nam = date("Y");
        $thoigian =  $nam.'-'.$thang.'-'.$ngay;
        //$list_giohang;
       // show_data($list_giohang);
         
        if(!kiemtra_makh_giohang()){
                $sql_add_cart = "INSERT INTO tbl_giohang( makhachhang, ngaytao) VALUE( '".$_SESSION['ma_user']."', '".$thoigian."')";
                mysqli_query($conn, $sql_add_cart); 
                redirect("?mode=cart&act=add&id=$id");  
                
        }else{
                redirect("?mode=cart&act=add_ctgiohang&id=$id");
        }
}else{
        header("Location: ../Login/Login/login.php");
}
        