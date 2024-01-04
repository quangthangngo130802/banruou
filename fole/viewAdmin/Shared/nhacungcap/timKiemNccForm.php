<?php

if(isset($_POST['iSearch'])){
    $iSearch = $_POST['iSearch'];
    $sql = "SELECT * FROM tbl_ncc WHERE (mancc LIKE '%$iSearch%') OR (tenncc LIKE '%$iSearch%')";
    $result = mysqli_query($conn, $sql);
    
}
?>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Nhà Cung Cấp</h6>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <form method="POST" action="index.php?pg=timkiemncc">
                    <div class="d-none d-md-flex ms-4 search-container">
                        <input name="iSearch" type="text" id="search-input" placeholder="Theo mã, tên NCC...">
                        <button name="btnSearch" class="btn btn-sm btn-primary">Tìm</button>
                    </div>
                </form>
                <a class="btn btn-sm btn-primary" href="index.php?pg=addNcc">Thêm Mới</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Mã NCC</th>
                        <th scope="col">Tên NCC</th>
                        <th scope="col">Địa Chỉ</th>
                        <th scope="col">SĐT</th>
                        <th scope="col">Ghi Chú</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><input class="form-check-input" type="checkbox" value="<?php echo $row['mancc'] ?>"></td>
                            <td><?php echo $row['mancc'] ?></td>
                            <td><?php echo $row['tenncc'] ?></td>
                            <td><?php echo $row['diachincc'] ?></td>
                            <td><?php echo $row['sdtncc'] ?></td>
                            <td><?php echo $row['ghichu'] ?></td>
                            <td><a class="btn btn-sm btn-primary" href="index.php?pg=updateNcc&mancc=<?php echo $row['mancc'] ?>">Sửa</a></td>
                        <?php
                    }
                        ?>


                        </tr>
                       
                </tbody>
            </table>
            <button class="btn btn-sm btn-primary" id="deletencc-button">Xóa</button>
            
        </div>

    </div>
</div>