
<?php

$magt =   get_magiohang_giohang();
//echo $magt;
$danhsach = danhsach_ctgiohang();
//show_data($danhsach);

$sohdb = get_so_hoadonban();
//show_data( $sohdb);
foreach ($danhsach as $key => $value) {

    $sql_add_cthdb = "INSERT INTO tbl_chitiethdb( masp, sohdb, soluongban, giaban) VALUE( '".$value['masp']."', '".$sohdb."', '".$value['soluong']."', '".$value['tongcong']."') ";
    mysqli_query($conn, $sql_add_cthdb); 
    # code...
}

$delete_sql = "DELETE FROM tbl_ctgiohang WHERE  magiohang = $magt ";
mysqli_query($conn, $delete_sql);




echo "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Đặt hàng thành công</h1>
        <a href="?mode=home"> Tiếp tục mua hàng</a>
    </div>  

<?php  ?>
</body>
</html>