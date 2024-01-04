<?php 

$mancc = $_GET['mancc'];
$sql = "SELECT * FROM tbl_ncc WHERE mancc = '$mancc'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<form action="Shared/nhacungcap/updateNcc.php" method="POST">
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="bg-light rounded h-100 p-4">

                <h3 class="mb-4">Sửa Nhà Cung Cấp</h3>
                <div class="form-floating mb-4">
                    <input type="text" readonly class="form-control" id="floatingInput" name="mancc" value="<?php echo $row['mancc']; ?>">
                    <label for="floatingInput">Mã nhà cung cấp</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput" name="tenncc" value="<?php echo $row['tenncc']; ?>">
                    <label for="floatingInput">Tên nhà cung cấp</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput" name="diachincc" value="<?php echo $row['diachincc']; ?>">
                    <label for="floatingInput">Địa chỉ</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="number" class="form-control" id="floatingInput" name="sdtncc" value="<?php echo $row['sdtncc']; ?>">
                    <label for="floatingInput">SĐT</label>
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