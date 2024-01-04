<?php 
$sql = "SELECT COUNT(`$id`) AS total FROM `$tbl`";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_products = $row['total'];// tổng sản phẩm
$total_pages = ceil($total_products / $per_page); //tổng số trang

echo "<div class='pagination'>";
for ($i = 1; $i <= $total_pages; $i++) {
    echo "<a href='index.php?pg=$pg&page=$i' id='phantrang'>$i</a> ";
}
echo "</div>";
?>