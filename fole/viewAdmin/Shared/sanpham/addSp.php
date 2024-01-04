
<?php
 include('../../../conn/connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tensp = $_POST['tensp'];
    $maloai = $_POST['maloai'];
    $machatlieu = $_POST['machatlieu'];
    $mancc = $_POST['mancc'];
    $dongianhap = $_POST['dongianhap'];
    $dongiaban = $_POST['dongiaban'];
    $soluong = $_POST['soluong'];
    $anh = $_POST['anh'];
    $ghichu = $_POST['ghichu'];
    
    $add = "INSERT INTO tbl_sanpham (tensp, maloai, machatlieu, dongianhap, dongiaban, mancc, soluong, anh, ghichu) 
    VALUES ('$tensp', '$maloai', '$machatlieu', '$dongianhap', '$dongiaban', '$mancc', '$soluong', '$anh', '$ghichu')";
    mysqli_query($conn, $add);
    header("Location: ../../index.php?pg=danhmucsanpham");
    
}
?>

