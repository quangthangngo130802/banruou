<?php
session_start();

include('../../conn/connect.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //global $conn;

    $tendangnhap = $_POST["tendangnhap"];
    $matkhau = $_POST["matkhau"];

    $hashedPassword = password_hash($matkhau, PASSWORD_DEFAULT);

    $query = "SELECT makhachhang, tenkhachhang, tendangnhap, matkhau FROM tbl_khachhang WHERE tendangnhap = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("s", $tendangnhap);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($makhachhang, $tenkhachhang, $tendangnhap, $matkhaukhachhang);  // nối với các cột tương ứng
            $stmt->fetch();
            if ($matkhau == $matkhaukhachhang) {
                $_SESSION['ma_user'] = $makhachhang;
                $_SESSION['user_login'] = true;
                $_SESSION['ten_user'] = $tenkhachhang;
                header("Location: ../../Home");
            }
        } 
    } 
  
        // Kiểm tra đăng nhập admin
        $stmt = $conn->prepare("SELECT maadmin, tendangnhap, matkhau FROM tbl_admin WHERE tendangnhap = ?");
        $stmt->bind_param("s", $tendangnhap);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($maadmin, $tendangnhap, $matkhauadmin);  // nối với các cột tương ứng
            $stmt->fetch();
            //admin đã tìm thấy, đặt phiên và chuyển hướng
            if ($matkhau == $matkhauadmin) {
                //if (password_verify($matkhauadmin, $matkhau)) {
                $_SESSION['maadmin'] = $maadmin;
                // echo $maadmin;
                header('Location: ../../viewAdmin/index.php');
            }
        } 
    
        $loginError = 'Sai tên đăng nhập hoặc mật khẩu.';
}
?>