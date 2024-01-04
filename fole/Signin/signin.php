<?php
include('../conn/connect.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tendangnhap = $_POST["tendangnhap"];
    $matkhau = $_POST["matkhau"];

    // Kiểm tra admin
    $query = "SELECT maadmin, tendangnhap, matkhau FROM tbl_admin WHERE tendangnhap = ?";
    if ($stmt = $conn->prepare($query)) { //chuẩn bị câu truy vấn
        $stmt->bind_param("s", $tendangnhap); // gán biến vào tham số thay thế 
        $stmt->execute();  // thực thi câu lệnh và lưu kq vào stmt
        $stmt->store_result(); //lưu kq vào bộ nhớ để có thể truy cập và xử lý kq sau đó

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($maadmin, $tendangnhap, $hashed_password);  // nối với các cột tương ứng
            $stmt->fetch();  // gán giá trị

            //if (password_verify($matkhau, $hashed_password))  // Đéo hiểu sao check kiểu này ko chạy
            if ($matkhau == $hashed_password) {
                $_SESSION["maadmin"] = $maadmin;

                header("location: ../viewAdmin/index.php");
            }
        } else {
            echo "Sai tên đăng nhập hoặc mật khẩu.";
        }


        $stmt->close();
    }
    //ktra khách hàng
    $query = "SELECT makhachhang, tenkhachhang, tendangnhap, matkhau FROM tbl_khachhang WHERE tendangnhap = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("s", $tendangnhap);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($makhachhang, $tenkhachhang, $tendangnhap, $hashed_password);  // nối với các cột tương ứng
            $stmt->fetch();
            $_SESSION['ma_user'] = $makhachhang;
            $_SESSION['user_login'] = true;
            $_SESSION['ten_user'] = $tenkhachhang;
            header("Location: ../Home");
        } else {
            echo "sai";
        }
    }
}
