
<?php 
$sql = "SELECT * FROM tbl_hdb, tbl_khachhang WHERE tbl_hdb.makhachhang = tbl_khachhang.makhachhang ORDER BY `tbl_hdb`.`sohdb` ASC";
$result = mysqli_query($conn, $sql);

?>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Danh Sách Hóa Đơn  🌻 </h6>
            <div class="d-flex align-items-center justify-content-between mb-4">
                
            </div>

        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        
                        <th scope="col">STT</th>
                        <th scope="col">Mã hóa đơn</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">SĐT</th>
                        <th scope="col">Ngày bán</th>
                        <th scope="col">Quản lý</th>
                        
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
                                <td><?php echo $row['sohdb']; ?></td>
                                <td><?php echo $row['tenkhachhang']; ?></td>
                                <td><?php echo $row['diachi']; ?></td>
                                <td><?php echo $row['sdt']; ?></td>
                                <td><?php echo $row['ngayban']; ?></td>
                                <td><a href="index.php?pg=ctHdb&sohdb=<?php echo $row['sohdb']; ?>">xem đơn hàng</a></td>
                               
                               
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
