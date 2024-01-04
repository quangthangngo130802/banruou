<?php 
$per_page = 9; // Số sản phẩm trên mỗi trang
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại
 
$offset = ($page - 1) * $per_page;

$danhsachsql = "SELECT * FROM `$tbl` LIMIT $per_page OFFSET $offset";
$result = mysqli_query($conn, $danhsachsql);
?>

