<?php 

$magt =   get_magiohang_giohang();
echo $magt;


$delete_sql = "DELETE FROM tbl_ctgiohang WHERE  magiohang = $magt ";
mysqli_query($conn, $delete_sql);

redirect("?mode=home&act=main");

?>