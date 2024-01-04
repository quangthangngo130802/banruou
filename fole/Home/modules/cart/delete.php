<?php

    $id = $_GET['id'];
    echo $id;
    $list_giohang;
    $makh =  $_SESSION['ma_user'];
    $magiohang = magiohang_makh();
    $delete_sql = "DELETE FROM tbl_ctgiohang WHERE masp = $id  and magiohang = $magiohang ";
    mysqli_query($conn, $delete_sql);
    redirect("?mode=cart&act=show");

?>