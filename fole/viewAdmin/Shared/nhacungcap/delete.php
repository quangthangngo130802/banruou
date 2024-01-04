<?php
include('../../../conn/connect.php');
if (isset($_POST['product_ids'])) {
    $productIds = $_POST['product_ids'];

  
    // Duyệt qua mảng các ID sản phẩm và xóa từng sản phẩm
    foreach ($productIds as $productId) {
        $delete = "DELETE FROM tbl_ncc WHERE mancc = '$productId'";
        mysqli_query($conn, $delete);
    }
} 

?>