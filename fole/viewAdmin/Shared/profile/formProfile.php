<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">My Profile</h6>
                <table class="table table-dark">

                    <tbody>
                        <tr>
                            <td>Họ tên</td>
                            <td><?php echo $row['hoten']; ?></td>
                        </tr>
                        <?php
                        if ($row['nickname'] != '') {
                            echo '<tr>
                                    <td>Biệt danh</td>
                                    <td>' . $row['nickname'] . '</td>
                                </tr>';
                        }
                        ?>
                        <tr>
                            <td>Số diện thoại</td>
                            <td><?php echo $row['sdt']; ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?php echo $row['diachi']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Ảnh đại diện</td>
                            <td><img width="500px" height="auto" src="view/img/images/<?php echo $row['anh']; ?>" alt=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>