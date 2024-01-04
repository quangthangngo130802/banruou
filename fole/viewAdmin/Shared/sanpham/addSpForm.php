
<form action="Shared/sanpham/addSp.php" method="POST">
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="bg-light rounded h-100 p-4">

                <h3 class="mb-4">Thêm Sản Phẩm</h3>

                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput" name="tensp">
                    <span class="error" id="tensp_error"></span>
                    <label for="floatingInput">Tên Sản Phẩm</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="maloai">
                        <option value=""></option>
                        <?php
                        while ($row = mysqli_fetch_assoc($resultMaloai)) {
                            echo "<option value='" . $row['maloai'] . "'>" . $row['tenloai'] . "</option>";
                        }
                        ?>
                    </select>
                    <span class="error" id="maloai_error"></span>
                    <label for="floatingSelect">Loại Sản Phẩm</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="machatlieu">
                        <option value=""></option>
                        <?php
                        while ($row = mysqli_fetch_assoc($resultMachatlieu)) {
                            echo "<option value='" . $row['machatlieu'] . "'>" . $row['tenchatlieu'] . "</option>";
                        }
                        ?>
                    </select>
                    <span class="error" id="machatlieu_error"></span>
                    <label for="floatingSelect">Chất Liệu</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="mancc">
                        <option value=""></option>
                        <?php
                        while ($row = mysqli_fetch_assoc($resultMancc)) {
                            echo "<option value='" . $row['mancc'] . "'>" . $row['tenncc'] . "</option>";
                        }
                        ?>
                    </select>
                    <span class="error" id="mancc_error"></span>
                    <label for="floatingSelect">Nhà Cung Cấp</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="dongianhap" value="0">
                    <label for="floatingInput">Giá Nhập</label>
                    <span class="error" id="dongianhap_error"></span>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="dongiaban" value="0">
                    <label for="floatingInput">Giá Bán</label>
                    <span class="error" id="dongiaban_error"></span>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput" name="soluong" value="0">
                    <label for="floatingInput">Số Lượng</label>
                    <span class="error" id="soluong_error"></span>
                </div>
                <div class="form-floating mb-4">
                    <input class="form-control form-control-lg" id="formFileLg" type="file" name="anh">
                    <label for="floatingInput">Hình Ảnh</label>
                </div>

                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;" name="ghichu"></textarea>
                    <label for="floatingTextarea">Ghi Chú</label>
                </div>
                
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <button type="submit" class="btn btn-primary ms-2" name="luu">Lưu</button>
                </div>

            </div>

        </div>
    </div>
</form>
<script src="view/lib/hongjs/validateSanpham.js"></script>