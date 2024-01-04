<?php 
include('../../../conn/connect.php');
if(isset($_POST['luu'])){
    $masp = $_POST['masp'];
    $tensp = $_POST['tensp'];
    $maloai = $_POST['maloai'];
    $machatlieu = $_POST['machatlieu'];
    $mancc = $_POST['mancc'];
    $dongianhap = $_POST['dongianhap'];
    $dongiaban = $_POST['dongiaban'];
    $soluong = $_POST['soluong'];
    if($_POST['anh'] ==""){
        $anh = $_POST['anh1'];
    }else{
        $anh = $_POST['anh'];
    }
   
    $ghichu = $_POST['ghichu'];

    $update = "UPDATE tbl_sanpham SET tensp = '$tensp', maloai = '$maloai', machatlieu = '$machatlieu', mancc = '$mancc', dongianhap = '$dongianhap', dongiaban = '$dongiaban', soluong = '$soluong', anh = '$anh', ghichu = '$ghichu'
     WHERE masp = '$masp'";
    mysqli_query($conn, $update);
    
    header("Location: ../../index.php?pg=danhmucsanpham");
}
