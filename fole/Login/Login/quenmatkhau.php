<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Quên mật khẩu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../View/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../View/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../View/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../View/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../View/css/style.css" rel="stylesheet">
</head>

<body>
<?php
session_start();
require_once("sendMail.php");
include('../../conn/connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = '';
    $email = '';

    // kiem tra email co ton tai va dung dinh dang
    if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
    } else {
        $error = "email";
    }

    if (empty($_POST['email'])) {
        $_SESSION['errors'] = "Hãy nhập email!";
        header("Location: quenmatkhau.php");
        exit();
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = "Địa chỉ email không tồn tại!";
        header("Location: quenmatkhau.php");
        exit();
    }

    if (empty($errors) && !empty($email)) {
        $sql = "SELECT makhachhang, tenkhachhang, tendangnhap, matkhau, email FROM tbl_khachhang WHERE email = '" . $email . "'";
        $result = $conn->query($sql);
        $account = mysqli_fetch_assoc($result);

        if (empty($account)) {
            $_SESSION["errors"] = "Địa chỉ email không tồn tại!";
            header("Location: quenmatkhau.php");
            exit();
        }

        $password = $account["matkhau"];
        $title = "Quen mat khau";
        $content = "<p>Mật khẩu của bạn là: </p><b>$password</b>";
        $sendmail = new SendMail();
        $sendStatus = $sendmail->send($title, $content, $account["tenkhachhang"], $account["email"]);

        if ($sendStatus) {
            $_SESSION['success'] = "Chúng tôi đã gửi cho bạn email chứa mật khẩu. Hãy kiểm tra nó";
            //header('Location: quenmatkhau.php');
        } else {
            $_SESSION['errors'] = 'Có lỗi xảy ra khi gửi mật khẩu!';
        }
        //header("Location: login.php");
        exit();
    }
}
?>


    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h4>Quên mật khẩu</h4>
                        </div>
                        <form action="quenmatkhau.php" method="POST">
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
                                <label for="floatingInput">Email</label>
                            </div>
                            <?php
                                if (isset($_SESSION['errors'])) {
                                    echo '<div style="color: red;">' . $_SESSION['errors'] . '</div>';
                                    unset($_SESSION['errors']);
                                }

                                if (isset($_SESSION['success'])) {
                                    echo '<div style="color: green;">' . $_SESSION['success'] . '</div>';
                                    unset($_SESSION['success']);
                                }
                            ?>
                            <input type="submit" class="btn btn-primary py-3 w-100 mb-4" name="guimatkhau" value="Gửi mật khẩu">
                            <p class="text-center mb-0">Bạn chưa có tài khoản? <a href="../Register/register.php">Đăng ký</a></p>
                            <p class="text-center mb-0">Bạn có tài khoản rồi? <a href="login.php">Đăng nhập</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../View/lib/chart/chart.min.js"></script>
    <script src="../View/lib/easing/easing.min.js"></script>
    <script src="../View/lib/waypoints/waypoints.min.js"></script>
    <script src="../View/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../View/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../View/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../View/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../View/js/main.js"></script>
</body>

</html>