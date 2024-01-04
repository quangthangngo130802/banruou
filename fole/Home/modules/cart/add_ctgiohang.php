<?php 
if(isset($_SESSION['ma_user'])){

    $id = $_GET['id'];
//echo $id;
$product = get_product_by_id($id);
show_data($product);

$makh = get_makh_giohang( );

$magiohang = get_magiohang_giohang( );

$result = result($id, $makh);
   
    

if(kiemtra($id, $makh)){
        $solg = 1;
        $item =  $result['soluong'];
        $count = $item + $solg;
        
        $update = "UPDATE tbl_ctgiohang SET soluong ='". $count."',tongcong ='". $count * $product['dongiaban']."'   WHERE masp = '".$id."' and magiohang = '".$magiohang."'  ";
        mysqli_query($conn, $update);
        echo "update";
        redirect("?mode=cart&act=show");
}
else{
     $id = $_GET['id'];
     echo $id;
     $tt = "chờ";
     $solg = 1;
     $product = get_product_by_id($id);
     $magiohang = magiohang_makh();
        $sql_add_cart = "INSERT INTO tbl_ctgiohang( magiohang, masp, soluong, gia, tongcong, trangthai) VALUE( '".$magiohang."', '".$id."', '".$solg."', '".$product['dongiaban']."', '".$solg* $product['dongiaban']."', '".$tt."' ) ";
        mysqli_query($conn, $sql_add_cart);  
    echo "them ";
    redirect("?mode=cart&act=show");
}

}
else{
    header("Location: ../Login/Login/login.php");
}





?>