<?php
session_start();
include('../../conn/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $conn;

    $hovaten = $_POST["hovaten"];
    $tendangnhap = $_POST["tendangnhap"];
    $matkhau = $_POST["matkhau"];
    $nhaplaimatkhau = $_POST["nhaplaimatkhau"];
    $diachi = $_POST["diachi"];
    $sodienthoai = $_POST["sodienthoai"];
    $email = $_POST["email"];

    $validationMessages = array();

    $checkUserQuery = "SELECT * FROM tbl_khachhang WHERE tendangnhap = ?";
    $checkUserStmt = $conn->prepare($checkUserQuery);
    $checkUserStmt->bind_param("s", $tendangnhap);
    $checkUserStmt->execute();
    $checkUserResult = $checkUserStmt->get_result();

    if ($checkUserResult->num_rows > 0) {
        $validationMessages[] = "Tài khoản đã tồn tại. Vui lòng chọn tên đăng nhập khác.";
    }

    if ($matkhau !== $nhaplaimatkhau) {
        $validationMessages[] = "Mật khẩu không trùng khớp. Vui lòng nhập lại mật khẩu.";
    }

    $checkAdminQuery = "SELECT * FROM tbl_admin WHERE tendangnhap = ?";
    $checkAdminStmt = $conn->prepare($checkAdminQuery);
    $checkAdminStmt->bind_param("s", $tendangnhap);
    $checkAdminStmt->execute();
    $checkAdminResult = $checkAdminStmt->get_result();

    if ($checkAdminResult->num_rows > 0) {
        $validationMessages[] = "Không thể đăng ký tài khoản với tên đăng nhập này, vì tên đăng nhập đã được sử dụng bởi admin.";
    }

    if (empty($validationMessages)) {
        //$hashedPassword = password_hash($matkhau, PASSWORD_DEFAULT);

        $insertQuery = "INSERT INTO tbl_khachhang (tenkhachhang, tendangnhap, sdt, diachi, matkhau, email) VALUES (?, ?, ?, ?, ?, ?)";
        $insertStmt = $conn->prepare($insertQuery);
        $insertStmt->bind_param("ssssss", $hovaten, $tendangnhap, $sodienthoai, $diachi, $matkhau, $email);

        if ($insertStmt->execute()) {
            $validationMessages[] = "Đăng ký thành công";
        } else {
            $validationMessages[] = "Đăng ký không thành công vui lòng kiểm tra lại thông tin";
        }
    }
    $_SESSION['validationMessages'] = $validationMessages;
}
?>