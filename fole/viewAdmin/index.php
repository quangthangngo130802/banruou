
            <?php

            include('../conn/connect.php');
            include('Shared/template/header.php');
            if (isset($_GET["pg"])) {
                $pg = $_GET["pg"];
                switch ($pg) {
                    case 'addsanpham':
                        include('Shared/sanpham/addSpForm.php');
                        break;
                    case 'updatesanpham':
                        include('Shared/sanpham/updateSpForm.php');
                        break;
                    case 'danhmucsanpham':
                        include('Shared/sanpham/danhMucSpForm.php');
                        break;
                    case 'timkiemsanpham':
                        include('Shared/sanpham/timKiemSpForm.php');
                        break;
                    case 'danhmucncc':
                        include('Shared/nhacungcap/danhMucNccForm.php');
                        break;
                    case 'addNcc':
                        include('Shared/nhacungcap/addNccForm.php');
                        break;
                    case 'updateNcc':
                        include('Shared/nhacungcap/updateNccForm.php');
                        break;
                    case 'timkiemncc':
                        include('Shared/nhacungcap/timKiemNccForm.php');
                        break;
                    case 'profile':
                        include('Shared/profile/formProfile.php');
                        break;
                    case 'bieudo':
                        include('Shared/baocao/bieuDo.php');
                        break;
                    case 'baocao':
                        include('Shared/baocao/baoCao.php');
                        break;
                    case 'donhang':
                        include('Shared/quanlydonhang/hoadonban.php');
                        break;
                    case 'ctHdb':
                        include('Shared/quanlydonhang/ctHdb.php');
                        break;
                    default:
                        include('Shared/template/home.php');
                        break;
                }
            } else {
                include('Shared/template/home.php');
            }
            include('Shared/template/footer.php');
            ?>
            