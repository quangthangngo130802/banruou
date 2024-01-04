<?php
    $sever ='localhost';
    $user = 'root';
    $pass = '';
    $database = 'test';

    $conn = new mysqli($sever, $user, $pass, $database);

    $maloai = "SELECT * FROM tbl_loaisanpham";
    $resultMaloai = mysqli_query($conn, $maloai);

    $machatlieu = "SELECT * FROM tbl_chatlieu";
    $resultMachatlieu = mysqli_query($conn, $machatlieu);

    $mancc = "SELECT * FROM tbl_ncc";
    $resultMancc = mysqli_query($conn, $mancc);

    //biểu đồ doanh thu theo ngày
    $hdbDay = "SELECT DATE(ngayban) AS day, SUM(tongtien) AS total_revenue_day FROM tbl_hdb GROUP BY DATE(ngayban)";
    $resultHdbDay = mysqli_query($conn, $hdbDay);
    $dataDay = array();
    while($row = mysqli_fetch_assoc($resultHdbDay)){
        $dataDay[] = $row;
    }
    $jsonDataDay = json_encode($dataDay);

    //biểu đồ doanh thu theo tuần
    $hdbWeek = "SELECT WEEK(ngayban) AS week, SUM(tongtien) AS total_revenue_week FROM tbl_hdb GROUP BY WEEK(ngayban)";
    $resultHdbWeek = mysqli_query($conn, $hdbWeek);
    $dataWeek = array();
    while($row = mysqli_fetch_assoc($resultHdbWeek)){
        $dataWeek[] = $row;
    }
    $jsonDataWeek = json_encode($dataWeek);

    //biểu đồ doanh thu theo tháng
    $hdbMonth = "SELECT MONTH(ngayban) AS month, SUM(tongtien) AS total_revenue_month FROM tbl_hdb GROUP BY MONTH(ngayban)";
    $resultHdbMonth = mysqli_query($conn, $hdbMonth);
    $dataMonth = array();
    while($row = mysqli_fetch_assoc($resultHdbMonth)){
        $dataMonth[] = $row;
    }
    $jsonDataMonth = json_encode($dataMonth);
?>