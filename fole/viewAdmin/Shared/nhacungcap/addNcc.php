<?php
include('../../../conn/connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $tenncc = $_POST['tenncc'];
        $diachincc = $_POST['diachincc'];
        $sdtncc = $_POST['sdtncc'];
        $ghichu = $_POST['ghichu'];

        $sql = "INSERT INTO tbl_ncc (tenncc, diachincc, sdtncc, ghichu)
        VALUES ('$tenncc','$diachincc','$sdtncc','$ghichu')";

        mysqli_query($conn, $sql);
        header("Location: ../../index.php?pg=danhmucncc");
    
}
