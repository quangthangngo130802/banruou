<?php
if ($_GET['bc']) {
    $bc = $_GET['bc'];
    if ($bc == 'day') {
        $time = 'Ngày';
    }
    if ($bc == 'week') {
        $time = 'Tuần';
    }
    if ($bc == 'month') {
        $time = 'Tháng';
    }
}
?>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Báo cáo bán hàng theo <?php echo $time; ?>  🌻 </h6>
            <div class="d-flex align-items-center justify-content-between mb-4">

                <form action="Shared/baocao/export.php" method="POST">
                    <input type="hidden" value="<?php echo $bc; ?>" name="hong">
                    <button style="margin-right: 10px;" class="btn btn-sm btn-primary" name="xuat">Xuất file Excel</button>
                </form>
                <a class="btn btn-sm btn-primary" href="index.php?pg=bieudo&bd=<?php echo $bc; ?>">Biểu đồ</a>
            </div>

        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">Thời gian</th>
                        <th scope="col">Doanh thu</th>
                        <th scope="col">Đơn vị</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($bc == 'day') {
                        foreach ($dataDay as $row) {
                    ?>
                            <tr id="danhsach">
                                <td><?php echo $row['day']; ?></td>
                                <td><?php echo $row['total_revenue_day']; ?></td>
                                <td> 🌻 </td>
                            </tr>
                        <?php
                        }
                    } else if ($bc == 'week') {
                        foreach ($dataWeek as $row) {
                        ?>
                            <tr id="danhsach">
                                <td>Tuần <?php echo $row['week']; ?></td>
                                <td><?php echo $row['total_revenue_week']; ?></td>
                                <td> 🌻 </td>
                            </tr>
                        <?php
                        }
                    } else if ($bc == 'month') {
                        foreach ($dataMonth as $row) {
                        ?>
                            <tr id="danhsach">
                                <td>Tháng <?php echo $row['month']; ?></td>
                                <td><?php echo $row['total_revenue_month']; ?></td>
                                <td> 🌻 </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>