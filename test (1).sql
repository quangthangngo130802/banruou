-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2024 lúc 03:26 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `maadmin` int(10) NOT NULL,
  `tendangnhap` varchar(20) NOT NULL,
  `matkhau` varchar(20) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `sdt` int(10) NOT NULL,
  `diachi` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `anh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`maadmin`, `tendangnhap`, `matkhau`, `hoten`, `nickname`, `sdt`, `diachi`, `email`, `anh`) VALUES
(1, 'admin1', '123', 'Quang Thắng', 'Best Zata', 9871234, 'Thanh Ô', 'thangkhongthua123@gmail.com', 'thang.jpg'),
(2, 'admin2', '123', 'Việt Hồng', '', 372687318, 'Long Biên', 'Rhyder123@gmail.com', 'hong.jpg'),
(3, 'hong', 'hong', '', '', 0, '', '', ''),
(4, 'adminn', 'adminn', 'hong nguyen', '', 9999, 'Long Biên', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chatlieu`
--

CREATE TABLE `tbl_chatlieu` (
  `machatlieu` int(10) NOT NULL,
  `tenchatlieu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chatlieu`
--

INSERT INTO `tbl_chatlieu` (`machatlieu`, `tenchatlieu`) VALUES
(1, 'nho'),
(2, 'táo'),
(3, 'cam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitiethdb`
--

CREATE TABLE `tbl_chitiethdb` (
  `socthdb` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `sohdb` int(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `giamgia` int(10) NOT NULL,
  `giaban` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chitiethdb`
--

INSERT INTO `tbl_chitiethdb` (`socthdb`, `masp`, `sohdb`, `soluong`, `giamgia`, `giaban`) VALUES
(30, 1, 34, 2, 0, 20000000),
(31, 90, 34, 1, 0, 2500000),
(32, 60, 34, 3, 0, 6000000),
(33, 1, 35, 3, 0, 30000000),
(34, 78, 35, 3, 0, 7500000),
(35, 109, 36, 4, 0, 37600000),
(36, 1, 36, 2, 0, 20000000),
(37, 60, 37, 3, 0, 6000000),
(38, 1, 37, 4, 0, 40000000),
(39, 78, 37, 1, 0, 2500000),
(40, 90, 38, 6, 0, 15000000),
(41, 78, 38, 2, 0, 5000000),
(42, 84, 38, 2, 0, 5000000),
(43, 60, 38, 2, 0, 4000000),
(44, 79, 39, 4, 0, 12000000),
(45, 1, 39, 10, 0, 100000000),
(46, 83, 40, 4, 0, 8000000),
(47, 87, 40, 6, 0, 24000000),
(48, 1, 40, 3, 0, 30000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitiethdn`
--

CREATE TABLE `tbl_chitiethdn` (
  `socthdn` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `sohdn` int(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `gianhap` double NOT NULL,
  `tongtien` double NOT NULL,
  `giamgia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ctgiohang`
--

CREATE TABLE `tbl_ctgiohang` (
  `mactgiohang` int(10) NOT NULL,
  `magiohang` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `gia` double NOT NULL,
  `tongcong` int(11) NOT NULL,
  `trangthai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ctgiohang`
--

INSERT INTO `tbl_ctgiohang` (`mactgiohang`, `magiohang`, `masp`, `soluong`, `gia`, `tongcong`, `trangthai`) VALUES
(93, 16, 2, 3, 9000000, 27000000, 'chờ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhgia`
--

CREATE TABLE `tbl_danhgia` (
  `madanhgia` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `makhachhang` int(10) NOT NULL,
  `danhgia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `magiohang` int(10) NOT NULL,
  `makhachhang` int(20) NOT NULL,
  `ngaytao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`magiohang`, `makhachhang`, `ngaytao`) VALUES
(1, 2, '2023-11-09'),
(16, 4, '2023-11-09'),
(17, 6, '2023-11-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hdb`
--

CREATE TABLE `tbl_hdb` (
  `sohdb` int(10) NOT NULL,
  `makhachhang` int(10) NOT NULL,
  `diachi` varchar(30) NOT NULL,
  `sdt` varchar(30) NOT NULL,
  `ngayban` date NOT NULL,
  `tongtien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hdb`
--

INSERT INTO `tbl_hdb` (`sohdb`, `makhachhang`, `diachi`, `sdt`, `ngayban`, `tongtien`) VALUES
(34, 6, 'Hà Nội', '0982162796', '2023-11-12', 28500000),
(35, 2, 'Hà Nội', '0982162796', '2023-11-13', 37500000),
(36, 2, 'Hà Nội', '0982162796', '2023-11-13', 57600000),
(37, 2, 'Hà Nội', '0982162796', '2023-11-14', 48500000),
(38, 2, 'HN', '0982162796', '2023-12-17', 29000000),
(39, 4, 'Hà Nội', '0982162796', '2023-12-18', 112000000),
(40, 2, 'Hà Nội', '0982162796', '2023-12-19', 62000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hdn`
--

CREATE TABLE `tbl_hdn` (
  `sohdn` int(10) NOT NULL,
  `maadmin` int(10) NOT NULL,
  `mancc` varchar(10) NOT NULL,
  `ngaynhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `makhachhang` int(10) NOT NULL,
  `tendangnhap` varchar(30) NOT NULL,
  `tenkhachhang` varchar(100) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diachi` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(20) NOT NULL,
  `is_active` enum('0','1') DEFAULT '0',
  `active_token` varchar(40) NOT NULL,
  `tuoi` int(10) NOT NULL,
  `gioitinh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`makhachhang`, `tendangnhap`, `tenkhachhang`, `sdt`, `diachi`, `email`, `matkhau`, `is_active`, `active_token`, `tuoi`, `gioitinh`) VALUES
(2, 'user1', 'Việt Hồng', '0372687318', 'Long Biên', 'khachhang1@gmail.com', '123', '0', '', 21, 'male'),
(4, 'user2', 'Quang Thắng', '0982162796', 'Long Biên', 'khachhang2@gmail.com', '123', '0', '', 30, 'male'),
(6, 'user3', 'Thắng Ngô ', '0982111333', 'Thanh Oai', 'khachhang3@gmail.com', '123', '0', '', 20, 'male'),
(7, 'Khachhang1', 'Nguyễn Văn A', '0982122701', 'Hà Nội', 'khachhang4@gmail.com', '123', '0', '', 32, 'male'),
(8, 'Khachhang2', 'Nguyễn Văn B', '0982122702', 'Hà Nội', 'khachhang5@gmail.com', '123', '0', '', 33, 'female'),
(9, 'Khachhang3', 'Nguyễn Văn C', '0982122703', 'Hà Nội', 'khachhang6@gmail.com', '123', '0', '', 34, 'male'),
(10, 'Khachhang4', 'Nguyễn Văn D', '0982122704', 'Hà Nội', 'khachhang7@gmail.com', '123', '0', '', 35, 'female'),
(11, 'Khachhang5', 'Nguyễn Văn E', '0982122705', 'Hà Nội', 'khachhang8@gmail.com', '123', '0', '', 36, 'male'),
(12, 'Khachhang6', 'Nguyễn Văn F', '0982122706', 'Hà Nội', 'khachhang9@gmail.com', '123', '0', '', 37, 'female'),
(13, 'Khachhang7', 'Nguyễn Văn G', '0982122707', 'Hà Nội', 'khachhang10@gmail.com', '123', '0', '', 38, 'male'),
(14, 'Khachhang8', 'Nguyễn Văn H', '0982122709', 'Hà Nội', 'khachhang11@gmail.com', '123', '0', '', 39, 'female');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaisanpham`
--

CREATE TABLE `tbl_loaisanpham` (
  `maloai` int(10) NOT NULL,
  `tenloai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaisanpham`
--

INSERT INTO `tbl_loaisanpham` (`maloai`, `tenloai`) VALUES
(1, 'Rượu Whisky'),
(2, 'Rượu Rum'),
(3, 'Vodka'),
(4, 'Chivas'),
(5, 'Tequila');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ncc`
--

CREATE TABLE `tbl_ncc` (
  `mancc` int(10) NOT NULL,
  `tenncc` varchar(50) NOT NULL,
  `diachincc` varchar(20) NOT NULL,
  `sdtncc` varchar(10) NOT NULL,
  `ghichu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ncc`
--

INSERT INTO `tbl_ncc` (`mancc`, `tenncc`, `diachincc`, `sdtncc`, `ghichu`) VALUES
(1, 'Công ty TNHH Thương mại Thăng Long', 'Thăng Long', '0437186966', ''),
(2, 'Cty CP tạp phẩm và bảo hộ lao động', 'HN', '04 3846218', ''),
(6, 'Cty TNHH Hầm rượu Châu Á', 'Châu Á', '0437474883', 'uy tín đấy'),
(7, 'Cty TNHH Đại Việt', 'Đại Việt', '0438284538', 'bán đắt'),
(8, 'Cty CPTM sản xuất và xây dựng 405', 'Đống Đa, Hà Nội', '0466554167', ''),
(9, 'Cty CP Vườn Nho', 'quận 3, TPHCM', '0835208731', 'bán rượu nè'),
(10, 'Cty TNHH Nier', 'Hoàng Mai, TPHN', '0439744991', 'Vang của Công tyTNHH Nier\r\n\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `masp` int(10) NOT NULL,
  `tensp` varchar(30) NOT NULL,
  `maloai` int(20) DEFAULT NULL,
  `machatlieu` int(10) DEFAULT NULL,
  `dongianhap` double NOT NULL,
  `dongiaban` double NOT NULL,
  `mancc` int(10) DEFAULT NULL,
  `soluong` int(10) NOT NULL,
  `baoquan` varchar(100) NOT NULL,
  `nongdo` int(11) NOT NULL,
  `DungTich` varchar(10) NOT NULL,
  `huongvi` varchar(100) NOT NULL,
  `anh` varchar(30) NOT NULL,
  `ghichu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`masp`, `tensp`, `maloai`, `machatlieu`, `dongianhap`, `dongiaban`, `mancc`, `soluong`, `baoquan`, `nongdo`, `DungTich`, `huongvi`, `anh`, `ghichu`) VALUES
(1, 'Single Malt Irish Whisky 12', 1, 1, 5000000, 10000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a3.jpg', 'bbbc'),
(2, 'Rượu rum màu đen', 2, 2, 4000000, 9000000, 1, 19, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a5.jpg', 'o ze'),
(60, 'Whisky 1', 1, 1, 1000000, 2000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a1.jpg', 'ngon lắm nha'),
(78, 'Whisky 2', 1, 1, 1500000, 2500000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a2.jpg', 'ngon lắm nha 2'),
(79, 'Whisky 3', 1, 1, 2000000, 3000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a3.jpg', 'ngon lắm nha 3'),
(80, 'Whisky 4', 1, 1, 2500000, 3500000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a4.jpg', 'ngon lắm nha 4'),
(81, 'Whisky 5', 1, 1, 3000000, 4000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a5.jpg', 'ngon lắm nha 5'),
(82, 'Whisky 6', 1, 1, 3500000, 4500000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a6.jpg', 'ngon lắm nha 6'),
(83, 'Rum 1', 2, 2, 1000000, 2000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a9.jpg', 'ngon lắm nha 1'),
(84, 'Rum 2', 2, 2, 1500000, 2500000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a8.jpg', 'ngon lắm nha 2'),
(85, 'Rum 3', 2, 2, 2000000, 3000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a9.jpg', 'ngon lắm nha 3'),
(86, 'Rum 4', 2, 2, 2500000, 3500000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a10.jpg', 'ngon lắm nha 4'),
(87, 'Rum 5', 2, 2, 3000000, 4000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a11.jpg', 'ngon lắm nha 5'),
(88, 'Rum 6', 2, 2, 3500000, 4500000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a12.jpg', 'ngon lắm nha 6'),
(89, 'Vodka 1', 3, 3, 1000000, 2000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a13.jpg', 'ngon lắm nha 1'),
(90, 'Vodka 2', 3, 3, 1500000, 2500000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a14.jpg', 'ngon lắm nha 2'),
(91, 'Vodka 3', 3, 3, 2000000, 3000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a15.jpg', 'ngon lắm nha 3'),
(92, 'Vodka 4', 3, 3, 2500000, 3500000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a16.jpg', 'ngon lắm nha 4'),
(93, 'Vodka 5', 3, 3, 3000000, 4000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a17.jpg', 'ngon lắm nha 5'),
(94, 'Vodka 6', 3, 3, 3500000, 4500000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a18.jpg', 'ngon lắm nha 6'),
(95, 'Chivas 1', 4, 3, 1250000, 26000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a19.jpg', 'cũng ok đấy'),
(96, 'Chivas 2', 4, 3, 2250000, 36000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a20.jpg', 'cũng ok đấy'),
(97, 'Chivas 3', 4, 3, 3250000, 46000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a21.jpg', 'cũng ok đấy'),
(98, 'Chivas 4', 4, 3, 4250000, 56000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a22.jpg', 'cũng ok đấy'),
(99, 'Chivas 5', 4, 3, 5250000, 66000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a23.jpg', 'cũng ok đấy'),
(100, 'Tequila 1', 5, 2, 150000, 26000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a24.jpg', 'cũng ok đấy'),
(101, 'Tequila 2', 5, 2, 250000, 36000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a25.jpg', 'cũng ok đấy'),
(102, 'Tequila 3', 5, 2, 350000, 46000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a26.jpg', 'cũng ok đấy'),
(103, 'Tequila 4', 5, 2, 450000, 56000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a27.jpg', 'cũng ok đấy'),
(104, 'Tequila 5', 5, 2, 550000, 66000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a28.jpg', 'cũng ok đấy'),
(105, 'Tequila 1', 5, 2, 1234000, 9000000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a24.jpg', 'verygood'),
(106, 'Tequila 2', 5, 2, 1334000, 9100000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a25.jpg', 'verygood'),
(107, 'Tequila 3', 5, 2, 1434000, 9200000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a26.jpg', 'verygood'),
(108, 'Tequila 4', 5, 2, 1534000, 9300000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a27.jpg', 'verygood'),
(109, 'Tequila 5', 5, 2, 1634000, 9400000, 1, 100, 'bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời', 35, '1', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a28.jpg', 'verygood'),
(216, 'Single Malt Irish Whisky 12345', 1, 1, 1000000, 2200000, 1, 100, '', 16, '0', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a6.jpg', ''),
(217, 'Single Malt Irish Whisky 12345', 1, 1, 1000000, 2200000, 1, 99, '', 16, '2', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a7.jpg', ''),
(218, 'Single Malt Irish Whisky 12345', 1, 1, 1000000, 2200000, 1, 11, '', 16, '1,5', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a6.jpg', ''),
(219, 'Single Malt Irish Whisky 12348', 1, 1, 1000000, 2200000, 1, 99, '', 16, '1,2', 'Syrah thường mang đến hương vị của trái cây đen như anh đào, mâm xôi và việt quất, kèm theo nốt hươn', 'a7.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tinnhan`
--

CREATE TABLE `tbl_tinnhan` (
  `matinnhan` int(10) NOT NULL,
  `maadmin` int(10) NOT NULL,
  `makhachhang` int(10) NOT NULL,
  `noidung` varchar(100) NOT NULL,
  `thoigian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`maadmin`);

--
-- Chỉ mục cho bảng `tbl_chatlieu`
--
ALTER TABLE `tbl_chatlieu`
  ADD PRIMARY KEY (`machatlieu`);

--
-- Chỉ mục cho bảng `tbl_chitiethdb`
--
ALTER TABLE `tbl_chitiethdb`
  ADD PRIMARY KEY (`socthdb`),
  ADD KEY `FK_ctHDB_hanghoa` (`masp`),
  ADD KEY `FK_ctHDB_hdb` (`sohdb`);

--
-- Chỉ mục cho bảng `tbl_chitiethdn`
--
ALTER TABLE `tbl_chitiethdn`
  ADD PRIMARY KEY (`socthdn`),
  ADD KEY `FK_ctHDN_hanghoa` (`masp`),
  ADD KEY `FK_cthdn_hdn` (`sohdn`);

--
-- Chỉ mục cho bảng `tbl_ctgiohang`
--
ALTER TABLE `tbl_ctgiohang`
  ADD PRIMARY KEY (`mactgiohang`),
  ADD KEY `FK_ctgiohang_giohang` (`magiohang`),
  ADD KEY `FK_ctgiohang_sanpham` (`masp`);

--
-- Chỉ mục cho bảng `tbl_danhgia`
--
ALTER TABLE `tbl_danhgia`
  ADD PRIMARY KEY (`madanhgia`),
  ADD KEY `FK_danhgia_sanpham` (`masp`),
  ADD KEY `FK_danhgia_khachhang` (`makhachhang`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`magiohang`),
  ADD KEY `FK_giohang_khachhang` (`makhachhang`);

--
-- Chỉ mục cho bảng `tbl_hdb`
--
ALTER TABLE `tbl_hdb`
  ADD PRIMARY KEY (`sohdb`),
  ADD KEY `FK_hdb_khachhang` (`makhachhang`);

--
-- Chỉ mục cho bảng `tbl_hdn`
--
ALTER TABLE `tbl_hdn`
  ADD PRIMARY KEY (`sohdn`),
  ADD KEY `FK_hdn_admin` (`maadmin`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`makhachhang`);

--
-- Chỉ mục cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `tbl_ncc`
--
ALTER TABLE `tbl_ncc`
  ADD PRIMARY KEY (`mancc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `FK_sanpham_loaisanpham` (`maloai`),
  ADD KEY `FK_sanpham_chatlieu` (`machatlieu`),
  ADD KEY `FK_sanpham_ncc` (`mancc`);

--
-- Chỉ mục cho bảng `tbl_tinnhan`
--
ALTER TABLE `tbl_tinnhan`
  ADD PRIMARY KEY (`matinnhan`),
  ADD KEY `FK_tinnhan_adminn` (`maadmin`),
  ADD KEY `FK_tinnhan_khachhang` (`makhachhang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `maadmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_chatlieu`
--
ALTER TABLE `tbl_chatlieu`
  MODIFY `machatlieu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_chitiethdb`
--
ALTER TABLE `tbl_chitiethdb`
  MODIFY `socthdb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_ctgiohang`
--
ALTER TABLE `tbl_ctgiohang`
  MODIFY `mactgiohang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT cho bảng `tbl_danhgia`
--
ALTER TABLE `tbl_danhgia`
  MODIFY `madanhgia` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `magiohang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_hdb`
--
ALTER TABLE `tbl_hdb`
  MODIFY `sohdb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `makhachhang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  MODIFY `maloai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_ncc`
--
ALTER TABLE `tbl_ncc`
  MODIFY `mancc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `masp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT cho bảng `tbl_tinnhan`
--
ALTER TABLE `tbl_tinnhan`
  MODIFY `matinnhan` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_chitiethdb`
--
ALTER TABLE `tbl_chitiethdb`
  ADD CONSTRAINT `FK_ctHDB_hanghoa` FOREIGN KEY (`masp`) REFERENCES `tbl_sanpham` (`masp`),
  ADD CONSTRAINT `FK_ctHDB_hdb` FOREIGN KEY (`sohdb`) REFERENCES `tbl_hdb` (`sohdb`);

--
-- Các ràng buộc cho bảng `tbl_chitiethdn`
--
ALTER TABLE `tbl_chitiethdn`
  ADD CONSTRAINT `FK_ctHDN_hanghoa` FOREIGN KEY (`masp`) REFERENCES `tbl_sanpham` (`masp`),
  ADD CONSTRAINT `FK_cthdn_hdn` FOREIGN KEY (`sohdn`) REFERENCES `tbl_hdn` (`sohdn`);

--
-- Các ràng buộc cho bảng `tbl_ctgiohang`
--
ALTER TABLE `tbl_ctgiohang`
  ADD CONSTRAINT `FK_ctgiohang_giohang` FOREIGN KEY (`magiohang`) REFERENCES `tbl_giohang` (`magiohang`),
  ADD CONSTRAINT `FK_ctgiohang_sanpham` FOREIGN KEY (`masp`) REFERENCES `tbl_sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `tbl_danhgia`
--
ALTER TABLE `tbl_danhgia`
  ADD CONSTRAINT `FK_danhgia_khachhang` FOREIGN KEY (`makhachhang`) REFERENCES `tbl_khachhang` (`makhachhang`),
  ADD CONSTRAINT `FK_danhgia_sanpham` FOREIGN KEY (`masp`) REFERENCES `tbl_sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD CONSTRAINT `FK_giohang_khachhang` FOREIGN KEY (`makhachhang`) REFERENCES `tbl_khachhang` (`makhachhang`);

--
-- Các ràng buộc cho bảng `tbl_hdb`
--
ALTER TABLE `tbl_hdb`
  ADD CONSTRAINT `FK_hdb_khachhang` FOREIGN KEY (`makhachhang`) REFERENCES `tbl_khachhang` (`makhachhang`);

--
-- Các ràng buộc cho bảng `tbl_hdn`
--
ALTER TABLE `tbl_hdn`
  ADD CONSTRAINT `FK_hdn_admin` FOREIGN KEY (`maadmin`) REFERENCES `tbl_admin` (`maadmin`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `FK_sanpham_chatlieu` FOREIGN KEY (`machatlieu`) REFERENCES `tbl_chatlieu` (`machatlieu`),
  ADD CONSTRAINT `FK_sanpham_loaisanpham` FOREIGN KEY (`maloai`) REFERENCES `tbl_loaisanpham` (`maloai`),
  ADD CONSTRAINT `FK_sanpham_ncc` FOREIGN KEY (`mancc`) REFERENCES `tbl_ncc` (`mancc`);

--
-- Các ràng buộc cho bảng `tbl_tinnhan`
--
ALTER TABLE `tbl_tinnhan`
  ADD CONSTRAINT `FK_tinnhan_admin` FOREIGN KEY (`maadmin`) REFERENCES `tbl_admin` (`maadmin`),
  ADD CONSTRAINT `FK_tinnhan_khachhang` FOREIGN KEY (`makhachhang`) REFERENCES `tbl_khachhang` (`makhachhang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
