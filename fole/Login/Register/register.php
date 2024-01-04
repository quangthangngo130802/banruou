<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Đăng ký</title>
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
        $error = array();
        $data = array();

        if (!empty($_POST['dangky'])) {
            $data['hovaten'] = isset($_POST['hovaten']) ? $_POST['hovaten'] : '';
            $data['tendangnhap'] = isset($_POST['tendangnhap']) ? $_POST['tendangnhap'] : '';
            $data['matkhau'] = isset($_POST['matkhau']) ? $_POST['matkhau'] : '';
            $data['nhaplaimatkhau'] = isset($_POST['nhaplaimatkhau']) ? $_POST['nhaplaimatkhau'] : '';
            $data['diachi'] = isset($_POST['diachi']) ? $_POST['diachi'] : '';
            $data['sodienthoai'] = isset($_POST['sodienthoai']) ? $_POST['sodienthoai'] : '';
            $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';

            if (empty($data['hovaten'])) {
                $error['hovaten'] = '<span style="color: red;">Bạn chưa nhập họ và tên</span>';
            }

            if (empty($data['tendangnhap'])) {
                $error['tendangnhap'] = '<span style="color: red;">Bạn chưa nhập tên đăng nhập</span>';
            }

            if (empty($data['matkhau'])) {
                $error['matkhau'] = '<span style="color: red;">Bạn chưa nhập mật khẩu</span>';
            }elseif (strlen($data['matkhau']) < 6) {
                $error['matkhau'] = '<span style="color: red;">Mật khẩu phải có ít nhất 6 ký tự</span>';
            }

            if (empty($data['email'])) {
                $error['email'] = '<span style="color: red;">Bạn chưa nhập email</span>';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $error['email'] = '<span style="color: red;">Email không hợp lệ</span>';
            }
        
            if (empty($data['nhaplaimatkhau'])) {
                $error['nhaplaimatkhau'] = '<span style="color: red;">Bạn chưa nhập lại mật khẩu</span>';
            } elseif ($data['matkhau'] !== $data['nhaplaimatkhau']) {
                $error['nhaplaimatkhau'] = '<span style="color: red;">Mật khẩu không trùng khớp</span>';
            }
        
            if (empty($data['diachi'])) {
                $error['diachi'] = '<span style="color: red;">Bạn chưa nhập địa chỉ</span>';
            }
        
            if (empty($data['sodienthoai'])) {
                $error['sodienthoai'] = '<span style="color: red;">Bạn chưa nhập số điện thoại</span>';
            } elseif (!preg_match('/^\d{10,11}$/', $data['sodienthoai'])) {
                $error['sodienthoai'] = '<span style="color: red;">Số điện thoại không hợp lệ</span>';
            }

            if (empty($error)) {
                require 'xulyDangky.php';
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


        <!-- Sign up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h4>Đăng ký</h4>
                        </div>
                        <form action="register.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Họ và tên" name="hovaten"
                                value="<?php echo isset($data['hovaten']) ? $data['hovaten'] : ''; ?>">
                                <label for="floatingInput">Họ và tên</label>
                                <?php echo isset($error['hovaten']) ? $error['hovaten'] : ''; ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Tên đăng nhập" name="tendangnhap"
                                value="<?php echo isset($data['tendangnhap']) ? $data['tendangnhap'] : ''; ?>">
                                <label for="floatingInput">Tên đăng nhập</label>
                                <?php echo isset($error['tendangnhap']) ? $error['tendangnhap'] : ''; ?>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email"
                                value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
                                <label for="floatingInput">Email</label>
                                <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Mật khẩu" name="matkhau"
                                value="<?php echo isset($data['tendangnhap']) ? $data['tendangnhap'] : ''; ?>">
                                <label for="floatingPassword">Mật khẩu</label>
                                <?php echo isset($error['matkhau']) ? $error['matkhau'] : ''; ?>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingInput" placeholder="Nhập lại mật khẩu" name="nhaplaimatkhau"
                                value="<?php echo isset($data['nhaplaimatkhau']) ? $data['nhaplaimatkhau'] : ''; ?>">
                                <label for="floatingInput">Nhập lại mật khẩu</label>
                                <?php echo isset($error['nhaplaimatkhau']) ? $error['nhaplaimatkhau'] : ''; ?>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Địa chỉ" name="diachi"
                                value="<?php echo isset($data['diachi']) ? $data['diachi'] : ''; ?>">
                                <label for="floatingInput">Địa chỉ</label>
                                <?php echo isset($error['diachi']) ? $error['diachi'] : ''; ?>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Số điện thoại" name="sodienthoai"
                                value="<?php echo isset($data['sodienthoai']) ? $data['sodienthoai'] : ''; ?>">
                                <label for="floatingInput">Số điện thoại</label>
                                <?php echo isset($error['sodienthoai']) ? $error['sodienthoai'] : ''; ?>
                            </div>
                            <?php
                                if (isset($_SESSION['validationMessages'])) {
                                    foreach ($_SESSION['validationMessages'] as $message) {
                                        echo $message; 
                                    }
                                    unset($_SESSION['validationMessages']);
                                }
                            ?>
                            <input type="submit" class="btn btn-primary py-3 w-100 mb-4" name="dangky" value="Đăng ký">
                            <p class="text-center mb-0">Bạn đã có tài khoản? <a href="../Login/login.php">Đăng nhập</a></p>
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