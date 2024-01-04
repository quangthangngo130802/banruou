<?php 
$sohdb = $_GET['sohdb'];
$sql = "SELECT * FROM tbl_chitiethdb, tbl_sanpham WHERE tbl_chitiethdb.masp = tbl_sanpham.masp AND tbl_chitiethdb.sohdb = $sohdb";
$result = mysqli_query($conn, $sql);
?>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Chi Tiết Hóa Đơn  🌻 </h6>
            <div class="d-flex align-items-center justify-content-between mb-4">
                
               
            </div>

        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        
                        <th scope="col">STT</th>
                        <th scope="col">Mã hóa đơn</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Thành tiền</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                            <tr id="danhsach">
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['sohdb'] ?></td>
                                <td><?php echo $row['tensp'] ?></td>
                                <td><?php echo $row['soluongban']; ?></td>
                                <td><?php echo $row['dongiaban'] ?></td>
                                <td><?php echo $row['giaban'] ?>🌻</td>   
                               
                            </tr> 
                    <?php
                        $i++;
                        }
                    }
                    ?>
                </tbody>
            </table>
           

        </div>
    </div>
</div>
