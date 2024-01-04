<?php
$masp = $_GET['masp'];
$sql = "SELECT * FROM tbl_sanpham WHERE masp = '$masp'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
// echo $row['maloai'];
?>

<form action="Shared/sanpham/updateSp.php" method="POST">
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="bg-light rounded h-100 p-4">

                <h3 class="mb-4">Sửa Sản Phẩm</h3>
                <div class="form-floating mb-4">
                    <input type="text" readonlys class="form-control" readonly id="floatingInput" name="masp" value="<?php echo $row['masp']; ?>">
                    <label for="floatingInput">Mã Sản Phẩm</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput" name="tensp" value="<?php echo $row['tensp']; ?>">
                    <label for="floatingInput">Tên Sản Phẩm</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="maloai" ">
                        <?php
                        while ($rowLoai = mysqli_fetch_array($resultMaloai)) {
                            echo '<option value="' . $rowLoai['maloai'] . '"';
                            if ($rowLoai['maloai'] == $row['maloai']) {
                                echo ' selected="selected"';
                            }
                            echo '>' . $rowLoai['tenloai'] . '</option>';
                        }
                        ?>
                    </select>
                    <label for=" floatingSelect">Loại Sản Phẩm</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="machatlieu" ">
                    <?php
                    while ($rowChatlieu = mysqli_fetch_array($resultMachatlieu)) {
                        echo '<option value="' . $rowChatlieu['machatlieu'] . '"';
                        if ($rowChatlieu['machatlieu'] == $row['machatlieu']) {
                            echo 'selected = "selected"';
                        }
                        echo '>' . $rowChatlieu['tenchatlieu'] . '</option>';
                    }
                    ?>
                    </select>
                    <label for=" floatingSelect">Chất Liệu</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="mancc" ">
                    <?php
                    while ($rowNcc = mysqli_fetch_array($resultMancc)) {
                        echo '<option value="' . $rowNcc['mancc'] . '"';
                        if ($rowNcc['mancc'] == $row['mancc']) {
                            echo 'selected = "selected"';
                        }
                        echo '>' . $rowNcc['tenncc'] . '</option>';
                    }
                    ?>
                    </select>
                    <label for=" floatingSelect">Nhà Cung Cấp</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="dongianhap" value="<?php echo $row['dongianhap']; ?>">
                    <label for="floatingInput">Giá Nhập</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="dongiaban" value="<?php echo $row['dongiaban']; ?>">
                    <label for="floatingInput">Giá Bán</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput" name="soluong" value="<?php echo $row['soluong']; ?>">
                    <label for="floatingInput">Số Lượng</label>
                </div>
                <!-- ẢNH -->
                <div class="form-floating mb-4">
                    <input class="form-control form-control-lg" id="formFileLg" type="file" name="anh">
                    <br><img src="view/img/images/<?php echo $row['anh']; ?>" alt="">
                    <input type="hidden" name="anh1" value="<?php echo $row['anh']; ?>">
                    <label for="floatingInput">Hình Ảnh</label>
                </div>

                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput" name="ghichu" value="<?php echo $row['ghichu']; ?>">
                    <label for="floatingInput">Ghi chú</label>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <button type="submit" class="btn btn-primary ms-2" name="luu">Lưu</button>
                </div>

            </div>

        </div>
    </div>
</form>