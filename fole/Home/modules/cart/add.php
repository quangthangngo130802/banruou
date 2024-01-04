<?php
    if(isset($_SESSION['ma_user'])){
        $id = $_GET['id'];
        echo $id;
        $tt = "chờ";
        $solg = 1;
        $product = get_product_by_id($id);
        $magiohang = magiohang_makh();
       $sql_add_cart = "INSERT INTO tbl_ctgiohang( magiohang, masp, soluong, gia, tongcong, trangthai) VALUE( '".$magiohang."', '".$id."', '".$solg."', '".$product['dongiaban']."', '".$solg* $product['dongiaban']."', '".$tt."' ) ";
       mysqli_query($conn, $sql_add_cart);  
       redirect("?mode=cart&act=show");
    }else{
        header("Location: ../Login/Login/login.php");
    }
    

     
?>