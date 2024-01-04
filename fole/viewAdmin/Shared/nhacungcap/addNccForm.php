
<form action="Shared/nhacungcap/addNcc.php" method="POST">
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="bg-light rounded h-100 p-4">

                <h3 class="mb-4">Thêm Nhà Cung Cấp</h3>

                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput" name="tenncc">
<!-- validate -->   <span class="error" id="tenncc_error"></span>  
                    <label for="floatingInput">Tên nhà cung cấp</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput" name="diachincc">
                    <span class="error" id="diachincc_error"></span>
                    <label for="floatingInput">Địa chỉ</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput" name="sdtncc">
                    <span class="error" id="sdtncc_error"></span>
                    <label for="floatingInput">SĐT</label>
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
<script src="view/lib/hongjs/validateNcc.js"></script>