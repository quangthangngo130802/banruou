<?php

if (isset($_POST['iSearch'])) {
    $iSearch = $_POST['iSearch'];
    $sql = "SELECT * FROM tbl_sanpham WHERE (masp LIKE '%$iSearch%') or (tensp LIKE '%$iSearch%')";
    $result = mysqli_query($conn, $sql);
}
?>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Danh Sách Sản Phẩm</h6>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <form method="POST" action="index.php?pg=timkiemsanpham">
                    <div class="d-none d-md-flex ms-4 search-container" >
                        <input name="iSearch" type="text" id="search-input" placeholder="Theo mã, tên hàng...">
                        <button name="btnSearch" class="btn btn-sm btn-primary">Tìm</button>
                    </div>
                </form>
                <a class="btn btn-sm btn-primary" href="index.php?pg=addsanpham">Thêm Mới</a>
            </div>

        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"></th>
                        <th scope="col">ID</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Mã loại</th>
                        <th scope="col">Mã chất liệu</th>
                        <th scope="col">Mã NCC</th>
                        <th scope="col">Đơn giá nhập</th>
                        <th scope="col">Đơn giá bán</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Ghi chú</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {

                    ?>
                            <tr id="danhsach">
                                <td><input class="form-check-input" type="checkbox" value="<?php echo $row['masp'] ?>"></td>
                                <td><?php echo $row['masp'] ?></td>
                                <td><?php echo $row['tensp'] ?></td>
                                <td><?php echo $row['maloai'] ?></td>
                                <td><?php echo $row['machatlieu'] ?></td>
                                <td><?php echo $row['mancc'] ?></td>
                                <td><?php echo $row['dongianhap'] ?></td>
                                <td><?php echo $row['dongiaban'] ?></td>
                                <td><?php echo $row['soluong'] ?></td>
                                <td><img src="view/img/images/<?php echo $row['anh'] ?>" alt=""></td>
                                <td><?php echo $row['ghichu'] ?></td>
                                <td><a class="btn btn-sm btn-primary" href="index.php?pg=updatesanpham&masp=<?php echo $row['masp']; ?>">Sửa</a></td>
                            </tr>
                    <?php

                        }
                    }
                    ?>


                </tbody>


            </table>
            <!-- Tạo phân trang -->
            
            <button class="btn btn-sm btn-primary" id="delete-button">Xóa</button>

        </div>
    </div>
</div>

<!-- Recent Sales End -->