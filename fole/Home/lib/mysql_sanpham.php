<?php

$sql_lietke_sanpham = "SELECT * FROM tbl_sanpham ";
$query_lietke_sanpham = mysqli_query($conn, $sql_lietke_sanpham);

$sql_lietke_loaisanpham = "SELECT * FROM tbl_loaisanpham ";
$query_lietke_loaisanpham = mysqli_query($conn, $sql_lietke_loaisanpham);

$sql_lietke_chatlieu = "SELECT * FROM  tbl_chatlieu";
$query_lietke_chatlieu = mysqli_query($conn, $sql_lietke_chatlieu);

$sql_lietke_ncc = "SELECT * FROM tbl_ncc ";
$query_lietke_ncc = mysqli_query($conn, $sql_lietke_ncc);


$sql_lietke_giohang = "SELECT * FROM tbl_giohang ";
$query_lietke_giohang = mysqli_query($conn, $sql_lietke_giohang);

$sql_lietke_ctgiohang = "SELECT * FROM tbl_ctgiohang ";
$query_lietke_ctgiohang = mysqli_query($conn, $sql_lietke_ctgiohang);

$sql_lietke_khachhang = "SELECT * FROM tbl_khachhang ";
$query_lietke_khachhang = mysqli_query($conn, $sql_lietke_khachhang);

$sql_lietke_hdb = "SELECT * FROM tbl_hdb ";
$query_lietke_hdb = mysqli_query($conn, $sql_lietke_hdb);

$sql_lietke_cthdb = "SELECT * FROM tbl_chitiethdb ";
$query_lietke_cthdb = mysqli_query($conn, $sql_lietke_cthdb);




function list_danhsach($query_lietke_sanpham){
    $list_danhsach= [];
    //global $query_lietke_sanpham;
    while($row_sanpham = mysqli_fetch_assoc($query_lietke_sanpham)){

            $list_danhsach[] = $row_sanpham;
              

    }
    return $list_danhsach;
}






?>