<?php 
include('../../../conn/connect.php');
if(isset($_POST['luu'])){
    $mancc = $_POST['mancc'];
    $tenncc = $_POST['tenncc'];
    $diachincc = $_POST['diachincc'];
    $sdtncc = $_POST['sdtncc'];
    $ghichu = $_POST['ghichu'];

    $sql = "UPDATE tbl_ncc SET tenncc = '$tenncc', diachincc = '$diachincc', sdtncc = '$sdtncc', ghichu = '$ghichu' WHERE mancc = '$mancc'";
    mysqli_query($conn, $sql);
    header("Location: ../../index.php?pg=danhmucncc");
}
?>