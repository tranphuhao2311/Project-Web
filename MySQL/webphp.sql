-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2017 lúc 07:04 SA
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cuahangdienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `MABINHLUAN` int(11) NOT NULL,
  `NGUOIBINHLUAN` text COLLATE utf8_unicode_ci,
  `NOIDUNG` text COLLATE utf8_unicode_ci,
  `NGAYGIO` text COLLATE utf8_unicode_ci,
  `NVTRALOI` text COLLATE utf8_unicode_ci,
  `MASP` char(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `MAHANGSANXUAT` int(11) NOT NULL,
  `TENHANGSANXUAT` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LOAISP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`MAHANGSANXUAT`, `TENHANGSANXUAT`, `LOAISP`) VALUES
(1, 'Apple', 1),
(2, 'Samsung', 1),
(3, 'Nokia', 1),
(4, 'Sony', 1),
(5, 'Huawei', 1),
(6, 'Oppo', 1),
(7, 'Htc', 1),
(8, 'Viettel', 1),
(9, 'Asus', 1),
(10, 'Masstel', 1),
(11, 'Lenovo', 1),
(12, 'Mobiistar', 1),
(13, 'WingCall', 1),
(14, 'Archos', 1),
(15, 'Massgo', 1),
(16, 'Microsoft', 1),
(17, 'Philips', 1),
(18, 'Vivo', 2),
(19, 'Asus', NULL),
(20, 'Dell', 2),
(21, 'Acer', 2),
(22, 'HP', 2),
(23, 'Masstel', 3),
(24, 'Apple', 3),
(25, 'Dell', 3),
(26, 'Samsung', 3),
(27, 'Huawei', 3),
(28, 'Asus', 3),
(29, 'Acer', 3),
(30, 'Lenovo', 3),
(31, 'Archos', 3),
(32, 'Apple', 2),
(33, 'Asus', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhslideshow`
--

CREATE TABLE `hinhslideshow` (
  `MAHINH` int(11) NOT NULL,
  `HINH` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphukien`
--

CREATE TABLE `loaiphukien` (
  `MALOAIPK` int(11) NOT NULL,
  `TENLOAIPK` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiphukien`
--

INSERT INTO `loaiphukien` (`MALOAIPK`, `TENLOAIPK`) VALUES
(1, 'Thẻ nhớ'),
(2, 'Tấm dán'),
(3, 'Bao da/Ốp lưng'),
(4, 'Loa'),
(5, 'Pin dự phòng'),
(6, 'Tay nghe'),
(7, 'Cáp/sạc'),
(8, 'USB'),
(9, 'Đế tản nhiệt'),
(10, 'Túi đựng laptop'),
(11, 'Ổ cứng di động'),
(12, 'Chuột'),
(13, 'Thiết bị mạng'),
(14, 'Dcom');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `MALOAI` int(11) NOT NULL,
  `TENLOAI` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`MALOAI`, `TENLOAI`) VALUES
(1, 'ĐIỆN THOẠI'),
(2, 'LAPTOP'),
(3, 'MÁY TÍNH BẢNG'),
(4, 'PHỤ KIỆN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitintuc`
--

CREATE TABLE `loaitintuc` (
  `MALOAI` int(11) NOT NULL,
  `TENLOAI` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitintuc`
--

INSERT INTO `loaitintuc` (`MALOAI`, `TENLOAI`) VALUES
(1, 'Tin khuyến mãi'),
(2, 'Mẹo công nghệ - Khai thác'),
(3, 'Mẹo công nghệ - Bảo quản'),
(4, 'Đánh giá công nghệ'),
(5, 'Tin công nghệ'),
(6, 'Bệnh viện công nghệ'),
(7, 'Ứng dụng hay'),
(8, 'Techfun TV'),
(9, 'Tin tuyển cụng'),
(10, 'Tin công ty');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `MAMAU` int(11) NOT NULL,
  `TENMAU` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`MAMAU`, `TENMAU`) VALUES
(1, 'BLACK'),
(2, 'WHITE'),
(3, 'SILVER'),
(4, 'GRAY'),
(5, 'GOLD'),
(6, 'ROSE GOLD'),
(7, 'BROWN'),
(8, 'CHROME'),
(9, 'WHITE RED'),
(10, 'ORANGE'),
(11, 'COPPER'),
(12, 'VANILLAWHILE'),
(13, 'MINT'),
(14, 'BLUE'),
(15, 'YELLOW'),
(16, 'PINK'),
(17, 'BLACK SILVER'),
(18, 'DARK BLUE'),
(19, 'WHITE GOLD'),
(20, 'WHITE BLUE'),
(21, 'PURPLE'),
(22, 'EMERALD'),
(23, 'NAVY'),
(24, 'RED'),
(25, 'GREEN'),
(26, 'BLUE BLACK'),
(27, 'COFFEE'),
(28, 'CYAN'),
(29, 'CHAMPAGNE'),
(30, 'DARK SILVER'),
(31, 'BLACKGOLD'),
(32, 'BRONZE'),
(33, 'SPACE GREY'),
(34, 'CORAL'),
(35, 'DARK GRAY'),
(36, 'BLACK RED');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausp`
--

CREATE TABLE `mausp` (
  `MAMAU` int(11) NOT NULL,
  `MASP` char(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mausp`
--

INSERT INTO `mausp` (`MAMAU`, `MASP`) VALUES
(3, 'SP1'),
(4, 'SP1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `STT` int(3) NOT NULL AUTO_INCREMENT,
  `MASP` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `TENSP` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MALOAISP` int(11) NOT NULL,
  `MANSX` int(11) DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT NULL,
  `GIA` double DEFAULT NULL,
  `HINHDAIDIEN` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINH1` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINH2` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINH3` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINH4` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINHTHUCTE1` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINHTHUCTE2` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINHTHUCTE3` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINHTHUCTE4` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINHTHUCTE5` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINHTHUCTE6` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TINHTRANGXOA` bit(1) NOT NULL
  	`SOLUONGBAN` int(3),
	`SOLUONGXEM` int(4),
	  PRIMARY KEY (`STT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `TENSP`, `MALOAISP`, `MANSX`, `TRANGTHAI`, `GIA`, `HINHDAIDIEN`, `HINH1`, `HINH2`, `HINH3`, `HINH4`, `HINHTHUCTE1`, `HINHTHUCTE2`, `HINHTHUCTE3`, `HINHTHUCTE4`, `HINHTHUCTE5`, `HINHTHUCTE6`, `TINHTRANGXOA`) VALUES
('SP1', 'iPhone 6S 16GB', 1, 1, 4, 15990000, 'SP1_0.JPG', 'SP1_1.JPG', 'SP1_2.JPG', 'SP1_3.JPG', 'SP1_4.JPG', 'SP1_5.JPG', 'SP1_6.JPG', 'SP1_7.JPG', 'SP1_8.JPG', 'SP1_9.JPG', 'SP1_10.JPG', b'0'),
('SP10', 'SamSung Galaxy Note5', 1, 2, 4, 13990000, 'SP10_1.JPG', 'SP10_1.JPG', 'SP10_2.JPG', 'SP10_3.JPG', 'SP10_4.JPG', 'SP10_5.JPG', 'SP10_6.JPG', 'SP10_7.JPG', 'SP10_8.JPG', 'SP10_9.JPG', 'SP10_10.JPG', b'0'),
('SP11', 'Laptop Asus F555LF - XX166D', 2, 33, 4, 11990000, 'SP11_0.JPG', 'SP11_1.JPG', 'SP11_2.JPG', 'SP11_3.JPG', 'SP11_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP12', 'Laptop Dell 5448 - RJNPG1', 2, 20, 5, 13990000, 'SP12_1.JPG', 'SP12_1.JPG', 'SP12_2.JPG', 'SP12_3.JPG', 'SP12_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP13', 'Laptop Dell INS3558 - 70062972', 2, 20, 2, 14990000, 'SP13_1.JPG', 'SP13_1.JPG', 'SP13_2.JPG', 'SP13_3.JPG', 'SP13_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP14', 'MacBook Air (2015) - MJVE2 - 70062972', 2, 32, 5, 22990000, 'SP14_1.JPG', 'SP14_1.JPG', 'SP14_2.JPG', 'SP14_3.JPG', 'SP14_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP15', 'Macbook Pro 15.4 512GB (Retina Display)', 2, 32, 3, 59990000, 'SP15_1.JPG', 'SP15_1.JPG', 'SP15_2.JPG', 'SP15_3.JPG', 'SP15_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP16', 'Ipad Air 2 4G 32GB', 3, 24, 4, 12490000, 'SP16_0.JPG', 'SP16_1.JPG', 'SP16_2.JPG', 'SP16_3.JPG', 'SP16_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP17', 'IPad mini 4 Cellular 16Gb 4G', 3, 24, 1, 11490000, 'SP17_1.JPG', 'SP17_1.JPG', 'SP17_2.JPG', 'SP17_3.JPG', 'SP17_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP18', 'IPad mini 4 Cellular 64GB 4G', 3, 24, 5, 13490000, 'SP18_1.JPG', 'SP18_1.JPG', 'SP18_2.JPG', 'SP18_3.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP19', 'IPad Pro Wi-Fi 4G 128GB 4G', 3, 24, 5, 10990000, 'SP19_1.JPG', 'SP19_1.JPG', 'SP19_2.JPG', 'SP19_3.JPG', 'SP19_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP2', 'iPhone 6S 64GB', 1, 1, 1, 17990000, 'SP2_1.JPG', 'SP2_1.JPG', 'SP2_2.JPG', 'SP2_3.JPG', 'SP2_4.JPG', 'SP2_5.JPG', 'SP2_6.JPG', 'SP2_7.JPG', 'SP2_8.JPG', 'SP2_9.JPG', 'SP2_10.JPG', b'0'),
('SP20', 'Samsung Tab T819', 3, 26, 5, 23990000, 'SP20_1.JPG', 'SP20_1.JPG', 'SP20_2.JPG', 'SP20_3.JPG', 'SP20_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP21', 'Bộ phát Wireless di động TP LINK M5250', 4, NULL, 5, 1280000, 'SP21_1.JPG', 'SP21_1.JPG', 'SP21_2.JPG', 'SP21_3.JPG', 'SP21_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP22', 'Gói dịch vụ giám sát trẻ em Kiddy (KID30)', 4, NULL, 5, 65000, 'SP22_1.JPG', 'SP22_1.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP23', 'Sạc dự phòng Xphone 5200mAh XPL5', 4, NULL, 5, 300000, 'SP23_1.JPG', 'SP23_1.JPG', 'SP23_2.JPG', 'SP23_3.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP24', 'Thẻ nhớ microSDHC Adata 8GB Class4', 4, NULL, 5, 100000, 'SP24_1.JPG', 'SP24_1.JPG', 'SP24_2.JPG', 'SP24_3.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP25', 'Thẻ nhớ Silicon Power Micro 8GB SDHC', 4, NULL, 5, 100000, 'SP25_1.JPG', 'SP25_1.JPG', 'SP25_2.JPG', 'SP25_3.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP26', 'HTC Desire 326G Dual Sim', 1, 7, 2, 1990000, 'SP26_1.JPG', 'SP26_1.JPG', 'SP26_2.JPG', 'SP26_3.JPG', 'SP26_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP27', 'HTC Desire Eye', 1, 7, 5, 5590000, 'SP27_1.JPG', 'SP27_1.JPG', 'SP27_2.JPG', 'SP27_3.JPG', 'SP27_4.JPG', 'SP27_5.JPG', 'SP27_6.JPG', 'SP27_7.JPG', 'SP27_8.JPG', 'SP27_9.JPG', 'SP27_10.JPG', b'0'),
('SP28', 'HTC One M8 Eye', 1, 7, 2, 5990000, 'SP28_1.JPG', 'SP28_1.JPG', 'SP28_2.JPG', 'SP28_3.JPG', 'SP28_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP29', 'Huawei Gr5', 1, 5, 5, 4490000, 'SP29_1.JPG', 'SP29_1.JPG', 'SP29_2.JPG', 'SP29_3.JPG', 'SP29_4.JPG', 'SP29_5.JPG', 'SP29_6.JPG', 'SP29_7.JPG', 'SP29_8.JPG', 'SP29_9.JPG', 'SP29_10.JPG', b'0'),
('SP3', 'iPhone 6S Plus 16GB', 1, 1, 1, 18990000, 'SP3_1.JPG', 'SP3_1.JPG', 'SP3_2.JPG', 'SP3_3.JPG', 'SP3_4.JPG', 'SP3_5.JPG', 'SP3_6.JPG', 'SP3_7.JPG', 'SP3_8.JPG', 'SP3_9.JPG', 'SP3_10.JPG', b'0'),
('SP30', 'Huawei Titan – Y6 Pro', 1, 5, 5, 2790000, 'SP30_1.JPG', 'SP30_1.JPG', 'SP30_2.JPG', 'SP30_3.JPG', 'SP30_4.JPG', 'SP30_5.JPG', 'SP30_6.JPG', 'SP30_7.JPG', 'SP30_8.JPG', 'SP30_9.JPG', 'SP30_10.JPG', b'0'),
('SP31', 'Huawei Ascend Y541-U02', 1, 5, 5, 1590000, 'SP31_1.JPG', 'SP31_1.JPG', 'SP31_2.JPG', 'SP31_3.JPG', 'SP31_4.JPG', 'SP31_5.JPG', 'SP31_6.JPG', 'SP31_7.JPG', 'SP31_8.JPG', 'SP31_9.JPG', 'SP31_10.JPG', b'0'),
('SP32', 'Microsoft Lumia 950 XL', 1, 16, 5, 6590000, 'SP32_1.JPG', 'SP32_1.JPG', 'SP32_2.JPG', 'SP32_3.JPG', 'SP32_4.JPG', 'SP32_5.JPG', 'SP32_6.JPG', 'SP32_7.JPG', 'SP32_8.JPG', 'SP32_9.JPG', 'SP32_10.JPG', b'0'),
('SP33', 'Nokia 230', 1, 3, 5, 1389000, 'SP33_1.JPG', 'SP33_1.JPG', 'SP33_2.JPG', 'SP33_3.JPG', 'SP33_4.JPG', 'SP33_5.JPG', 'SP33_6.JPG', 'SP33_7.JPG', 'SP33_8.JPG', 'SP33_9.JPG', 'SP33_10.JPG', b'0'),
('SP34', 'Nokia Lumia 730', 1, 3, 5, 2790000, 'SP34_1.JPG', 'SP34_1.JPG', 'SP34_2.JPG', 'SP34_3.JPG', 'SP34_4.JPG', 'SP34_5.JPG', 'SP34_6.JPG', 'SP34_7.JPG', 'SP34_8.JPG', 'SP34_9.JPG', 'SP34_10.JPG', b'0'),
('SP35', 'Oppo F1', 1, 6, 2, 4990000, 'SP35_1.JPG', 'SP35_1.JPG', 'SP35_2.JPG', 'SP35_3.JPG', 'SP35_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP36', 'Oppo F1S', 1, 6, 2, 5990000, 'SP36_1.JPG', 'SP36_1.JPG', 'SP36_2.JPG', 'SP36_3.JPG', 'SP36_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP37', 'Oppo Neo 7', 1, 6, 5, 3290000, 'SP37_1.JPG', 'SP37_1.JPG', 'SP37_2.JPG', 'SP37_3.JPG', 'SP37_4.JPG', 'SP37_5.JPG', 'SP37_6.JPG', 'SP37_7.JPG', 'SP37_8.JPG', 'SP37_9.JPG', 'SP37_10.JPG', b'0'),
('SP38', 'Sony Xperia C4 Dual', 1, 4, 1, 6190000, 'SP38_1.JPG', 'SP38_1.JPG', 'SP38_2.JPG', 'SP38_3.JPG', 'SP38_4.JPG', 'SP38_5.JPG', 'SP38_6.JPG', 'SP38_7.JPG', 'SP38_8.JPG', 'SP38_9.JPG', 'SP38_10.JPG', b'0'),
('SP39', 'Sony Xperia M5 Dual', 1, 4, 1, 8990000, 'SP39_1.JPG', 'SP39_1.JPG', 'SP39_2.JPG', 'SP39_3.JPG', 'SP39_4.JPG', 'SP39_5.JPG', 'SP39_6.JPG', 'SP39_7.JPG', 'SP39_8.JPG', 'SP39_9.JPG', 'SP39_10.JPG', b'0'),
('SP4', 'Samsung Galaxy A5 2016 (A510)', 1, 2, 5, 7990000, 'SP4_1.JPG', 'SP4_1.JPG', 'SP4_2.JPG', 'SP4_3.JPG', 'SP4_4.JPG', 'SP4_5.JPG', 'SP4_6.JPG', 'SP4_7.JPG', 'SP4_8.JPG', 'SP4_9.JPG', 'SP4_10.JPG', b'0'),
('SP40', 'Sony Xperia Z5 Dual', 1, 4, 5, 13990000, 'SP40_1.JPG', 'SP40_1.JPG', 'SP40_2.JPG', 'SP40_3.JPG', 'SP40_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP41', 'Laptop Dell N3459 - C3I51105', 2, 20, 5, 11990000, 'SP41_1.JPG', 'SP41_1.JPG', 'SP41_2.JPG', 'SP41_3.JPG', 'SP41_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP42', 'Macbook Pro 15.4 256GB (Retina Display)', 2, 32, 3, 47990000, 'SP42_1.JPG', 'SP42_1.JPG', 'SP42_2.JPG', 'SP42_3.JPG', 'SP42_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP43', 'Laptop Asus K555LD', 2, 33, 5, 11990000, 'SP43_1.JPG', 'SP43_1.JPG', 'SP43_2.JPG', 'SP43_3.JPG', 'SP43_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP44', 'Laptop Asus X555UJ_XX064D', 2, 33, 5, 12690000, 'SP44_1.JPG', 'SP44_1.JPG', 'SP44_2.JPG', 'SP44_3.JPG', 'SP44_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP45', 'Máy tính bảng Dell Venue 7 3740', 3, 25, 5, 3990000, 'SP45_1.JPG', 'SP45_1.JPG', 'SP45_2.JPG', 'SP45_3.JPG', 'SP45_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP46', 'ASUS ZenPad 7.0 (Z370CG)', 3, 28, 5, 3790000, 'SP46_1.JPG', 'SP46_1.JPG', 'SP46_2.JPG', 'SP46_3.JPG', 'SP46_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP47', 'Asus Zenpad 8 Z380 16GB', 3, 28, 5, 5790000, 'SP47_1.JPG', 'SP47_1.JPG', 'SP47_2.JPG', 'SP47_3.JPG', 'SP47_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP48', 'Tab Huawei T1 10.0', 3, 27, 5, 3990000, 'SP48_1.JPG', 'SP48_1.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP49', 'Thiết bị mạng DLINK3G_DWR730', 4, NULL, 5, 1800000, 'SP49_1.JPG', 'SP49_1.JPG', 'SP49_2.JPG', 'SP49_3.JPG', 'SP49_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP5', 'Samsung Galaxy J2', 1, 2, 5, 2990000, 'SP5_1.JPG', 'SP5_1.JPG', 'SP5_2.JPG', 'SP5_3.JPG', 'SP5_4.JPG', 'SP5_5.JPG', 'SP5_6.JPG', 'SP5_7.JPG', 'SP5_8.JPG', 'SP5_9.JPG', 'SP5_10.JPG', b'0'),
('SP50', 'Sạc nhanh Samsung Galaxy Note 5', 4, NULL, 5, 1190000, 'SP50_1.JPG', 'SP50_1.JPG', 'SP50_2.JPG', 'SP50_3.JPG', 'SP50_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP51', 'Bao da Sview Samsung Galaxy Note 5', 4, NULL, 5, 1290000, 'SP51_1.JPG', 'SP51_1.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP52', 'Thiết bị mạng DLINK DIR816L', 4, NULL, 5, 1300000, 'SP52_1.JPG', 'SP52_1.JPG', 'SP52_2.JPG', 'SP52_3.JPG', 'SP52_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP53', 'asdasd', 1, 1, 3, 21542, 'Szu-30.svg.png', 'Szu-30.svg.png', 'Szu-30.svg.png', 'Szu-30.svg.png', 'Szu-30.svg.png', NULL, NULL, NULL, NULL, NULL, NULL, b'0'),
('SP6', 'Samsung Galaxy J7 (2016)', 1, 2, 5, 5790000, 'SP6_1.JPG', 'SP6_1.JPG', 'SP6_2.JPG', 'SP6_3.JPG', 'SP6_4.JPG', 'SP6_5.JPG', 'SP6_6.JPG', 'SP6_7.JPG', 'SP6_8.JPG', 'SP6_9.JPG', 'SP6_10.JPG', b'0'),
('SP7', 'SamSung GalaxyJ5', 1, 2, 5, 3790000, 'SP7_1.JPG', 'SP7_1.JPG', 'SP7_2.JPG', 'SP7_3.JPG', 'SP7_4.JPG', 'SP7_5.JPG', 'SP7_6.JPG', 'SP7_7.JPG', 'SP7_8.JPG', 'SP7_9.JPG', 'SP7_10.JPG', b'0'),
('SP8', 'SamSung GalaxyJ7', 1, 2, 5, 4790000, 'SP8_1.JPG', 'SP8_1.JPG', 'SP8_2.JPG', 'SP8_3.JPG', 'SP8_4.JPG', 'SP8_5.JPG', 'SP8_6.JPG', 'SP8_7.JPG', 'SP8_8.JPG', 'SP8_9.JPG', 'SP8_10.JPG', b'0'),
('SP9', 'SamSung GalaxyJ7Prime', 1, 2, 3, 6290000, 'SP9_1.JPG', 'SP9_1.JPG', 'SP9_2.JPG', 'SP9_3.JPG', 'SP9_4.JPG', NULL, NULL, NULL, NULL, NULL, NULL, b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `MASLIDESHOW` int(11) NOT NULL,
  `TIEUDE` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVE` int(1) NOT NULL,
  `HINH` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`MASLIDESHOW`, `TIEUDE`, `ACTIVE`, `HINH`) VALUES
(1, 'Online Friday - ĐT, MTB giảm đến 49%', 1, 'SShow_1.jpg'),
(2, 'Mua Oppo trúng F1s mỗi ngày', 1, 'SShow_2.jpg'),
(3, 'Mua Samsung trúng Honda SH 2017', 1, 'SShow_3.jpg'),
(4, 'Lên đời Galaxy A Giảm Ngay 1 triệu', 1, 'SShow_4.jpg'),
(5, 'Chọn Sony Xperia trúng dàn loa mỗi ngày', 1, 'SShow_5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongsokythuatdienthoai`
--

CREATE TABLE `thongsokythuatdienthoai` (
  `MATHONGTINDIENTHOAI` int(11) NOT NULL,
  `MANHINH` text COLLATE utf8_unicode_ci,
  `CPU` text COLLATE utf8_unicode_ci,
  `RAMROM` text COLLATE utf8_unicode_ci,
  `CAMERA` text COLLATE utf8_unicode_ci,
  `PIN` text COLLATE utf8_unicode_ci,
  `MOTADAI` text COLLATE utf8_unicode_ci,
  `THONGSOKYTHUAT` text COLLATE utf8_unicode_ci,
  `CHITIETTHONGSO` text COLLATE utf8_unicode_ci,
  `MASP` char(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongsokythuatdienthoai`
--

INSERT INTO `thongsokythuatdienthoai` (`MATHONGTINDIENTHOAI`, `MANHINH`, `CPU`, `RAMROM`, `CAMERA`, `PIN`, `MOTADAI`, `THONGSOKYTHUAT`, `CHITIETTHONGSO`, `MASP`) VALUES
(1, 'Màn hình: 4.7 inch Retina HD with 3D touch', ' CPU: Apple A9 64-bit, Dual-core 1.84 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 12 MP/5 MP', ' Pin: 1715 mAh', NULL, NULL, NULL, 'SP1'),
(2, 'Màn hình: 4.7 inch Retina HD with 3D touch', ' CPU: Apple A9 64-bit, Dual-core 1.84 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 12 MP/5 MP', ' Pin: 1715 mAh', NULL, NULL, NULL, 'SP2'),
(3, 'Màn hình: 4.7 inch Retina HD with 3D touch', ' CPU: Apple A9 64-bit, Dual-core 1.84 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 12 MP/5 MP', ' Pin: 1715 mAh', NULL, NULL, NULL, 'SP3'),
(4, 'Màn hình: 4.7 inch Retina HD with 3D touch', ' CPU: Apple A9 64-bit, Dual-core 1.84 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 12 MP/5 MP', ' Pin: 1715 mAh', NULL, NULL, NULL, 'SP4'),
(5, 'Màn hình: 4.7 inch Retina HD with 3D touch', ' CPU: Apple A9 64-bit, Dual-core 1.84 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 12 MP/5 MP', ' Pin: 1715 mAh', NULL, NULL, NULL, 'SP5'),
(6, 'Màn hình: 4.7 inch Retina HD with 3D touch', ' CPU: Apple A9 64-bit, Dual-core 1.84 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 12 MP/5 MP', ' Pin: 1715 mAh', NULL, NULL, NULL, 'SP6'),
(7, 'Màn hình: 4.5", FWVGA', 'CPU: Spreadtrum, 4 nhân x 1.2 GHz', 'RAM/ROM: 1 GB', 'Camera: 8.0 MP', 'Pin: 2000mAh', NULL, NULL, NULL, 'SP26'),
(8, 'Màn hình: 5.2" IPS LCD', 'CPU: Qualcomm® Snapdragon™ 801, Quad-core 2.3 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 13 MP/13 MP', 'Pin: 2400 mAh', NULL, NULL, NULL, 'SP27'),
(9, 'Màn hình: 5.0" Full HD', 'CPU: Snapdragon™ 801 Quad core 2.3 Ghz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 13 MP/5 MP', 'Pin: 2600 mAh', NULL, NULL, NULL, 'SP28'),
(10, 'Màn hình: 5.5" IPS LCD', 'CPU: Qualcomm Snapdragon 616, Octa-Core', 'RAM/ROM: 2 GB/16 GB', 'Camera: 13 MP/5 MP', 'Pin: 3000 mAh', NULL, NULL, NULL, 'SP29'),
(11, 'Màn hình: 5" HD IPS', 'CPU: Mediatek MT6735P , Quad-core 1.3 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 13 MP/5 MP', 'Pin: 4000 mAh', NULL, NULL, NULL, 'SP30'),
(12, 'Màn hình: 4.5 inch LED-backlit IPS LCD', 'CPU: Speadtrum Quad-core 1.2 GHz', 'RAM/ROM: 1 GB/8 GB', 'Camera: 8 MP/2 MP', 'Pin: 1730 mAh', NULL, NULL, NULL, 'SP31'),
(13, 'Màn hình: 5" AMOLED 1280 x 720 pixels', 'CPU: Qualcomm Snapdragon 212, Quad-core 1.3GHz', 'RAM/ROM: 1 GB/16 GB', 'Camera: 8 MP/5 MP', 'Pin: 2000 mAh', NULL, NULL, NULL, 'SP32'),
(14, 'Màn hình: 2.8" TFT QVGA', '', '', 'Camera: 2 MP/2 MP', 'Pin: 1200 mAh', NULL, NULL, NULL, 'SP33'),
(15, 'Màn hình: 4.7 inch HD AMOLED', 'CPU: Qualcomm Snapdragon 400, Quad-core 1.2 GHz', 'RAM/ROM: 1 GB/8 GB', 'Camera: 6.7 MP/5 MP', 'Pin: 2220 mAh', NULL, NULL, NULL, 'SP34'),
(16, 'Màn hình: 5" HD IPS LCD', 'CPU: Qualcomm Snapdragon 616, Octa-core 1.5 GHz', 'RAM/ROM: 3 GB/16 GB', 'Camera: 13 MP/8 MP', 'Pin: 2500 mAh', NULL, NULL, NULL, 'SP35'),
(17, 'Màn hình: 5.5", IPS LCD, 720 x 1280 pixels', 'CPU: Mediatek MT6750, 8 nhân 1.5 GHz', 'RAM/ROM: 3 GB/32GB', 'Camera: 13 MP/16 MP', 'Pin: Lithium - Ion 3075 mAh', NULL, NULL, NULL, 'SP36'),
(18, 'Màn hình: 5 inch qHD IPS LCD', 'CPU: MT6582, Quad-core 1.3 GHz', 'RAM/ROM: 1 GB/16 GB', 'Camera: 8 MP/5 MP', 'Pin: 2420 mAh', NULL, NULL, NULL, 'SP37'),
(19, 'Màn hình: 5" HD IPS', 'CPU: Qualcomm Snapdragon 615 64-bit, Quad-core 1.5GHz & Quad-core 1.0GHz', 'RAM/ROM: 2 GB/8 GB', 'Camera: 13 MP/5 MP', 'Pin: 2400 mAh', NULL, NULL, NULL, 'SP38'),
(20, 'Màn hình: 5 inch Full HD IPS', 'CPU: MediaTek Helio X10, Octa-core 2.0 GHz', 'RAM/ROM: 3 GB/16 GB', 'Camera: 21.5 MP/13 MP', 'Pin: 2600 mAh', NULL, NULL, NULL, 'SP39'),
(21, 'Màn hình: 5.2 inch IPS LCD', 'CPU: Snapdragon 810, Quad-core 1.5 GHz + Quad-core 2.0 GHz', 'RAM/ROM: 3 GB/32 GB', 'Camera: 23 MP/5 MP', 'Li-Ion, 2900 mAh', NULL, NULL, NULL, 'SP40'),
(22, 'Màn hình: 4.7 inch Retina HD with 3D touch', ' CPU: Apple A9 64-bit, Dual-core 1.84 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 12 MP/5 MP', ' Pin: 1715 mAh', NULL, NULL, NULL, 'SP8'),
(23, 'Màn hình: 4.7 inch Retina HD with 3D touch', ' CPU: Apple A9 64-bit, Dual-core 1.84 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 12 MP/5 MP', ' Pin: 1715 mAh', NULL, NULL, NULL, 'SP10'),
(24, 'Màn hình: 4.7 inch Retina HD with 3D touch', ' CPU: Apple A9 64-bit, Dual-core 1.84 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 12 MP/5 MP', ' Pin: 1715 mAh', NULL, NULL, NULL, 'SP9'),
(25, 'Màn hình: 4.7 inch Retina HD with 3D touch', ' CPU: Apple A9 64-bit, Dual-core 1.84 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 12 MP/5 MP', ' Pin: 1715 mAh', NULL, NULL, NULL, 'SP7'),
(32, 'asd21sad21', 'a2sd1as2d1', 'a2sd1as2d1', 'a2sd1sa2d1', 'a2dsa2d1', '<p>sdasdasd</p>\r\n\r\n<p>asdsad</p>\r\n\r\n<p>asdsad</p>\r\n\r\n<p>addasdas</p>\r\n', '<table cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:100px">Chất liệu:</td>\r\n			<td>sdasads</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Thiết kế:</td>\r\n			<td>asdsad</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">M&agrave;n h&igrave;nh:</td>\r\n			<td>adasd</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">CPU:</td>\r\n			<td>adsad</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">RAM:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Camera ch&iacute;nh:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Camera phụ:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Bộ nhớ trong:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Thẻ nhớ:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Hỗ trợ đa sim:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Tin nhắn:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Hỗ trợ 3G:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Wifi:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Danh bạ:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Quay phim:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">K&iacute;ch cỡ:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Trọng lượng:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:180px">Pin:</td>\r\n			<td>--------------------------------------------------</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<div id="panel-cau-hinh" style="display:block">\r\n<table cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<div style="background-color:#f2f2f2; height:40px; line-height:40px; margin-bottom:-1px; margin-left:-20px; margin-right:-20px; margin-top:-1px; padding-left:20px"><strong>M&agrave;n h&igrave;nh</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại màn hình</td>\r\n			<td>asdasdsadsd</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Màu màn hình</td>\r\n			<td>adasdddsa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chu&acirc;̉n màn hình</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đ&ocirc;̣ ph&acirc;n giải</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kích thước m&agrave;n h&igrave;nh</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng ngh&ecirc;̣ cảm ứng</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">\r\n			<div style="background-color:#f2f2f2; height:40px; line-height:40px; margin-bottom:-1px; margin-left:-20px; margin-right:-20px; margin-top:-1px; padding-left:20px"><strong>CPU &amp; RAM</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chipset</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>S&ocirc;́ nh&acirc;n CPU</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chip đ&ocirc;̀ họa (GPU)</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RAM</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">\r\n			<div style="background-color:#f2f2f2; height:40px; line-height:40px; margin-bottom:-1px; margin-left:-20px; margin-right:-20px; margin-top:-1px; padding-left:20px"><strong>Hệ điều h&agrave;nh</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hệ điều h&agrave;nh</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">\r\n			<div style="background-color:#f2f2f2; height:40px; line-height:40px; margin-bottom:-1px; margin-left:-20px; margin-right:-20px; margin-top:-1px; padding-left:20px"><strong>Camera</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera ch&iacute;nh</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera phụ</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">\r\n			<div style="background-color:#f2f2f2; height:40px; line-height:40px; margin-bottom:-1px; margin-left:-20px; margin-right:-20px; margin-top:-1px; padding-left:20px"><strong>Bộ nhớ, Lưu trữ</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Danh bạ</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bộ nhớ trong</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thẻ nhớ ngo&agrave;i</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hỗ trợ thẻ nhớ tối đa</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">\r\n			<div style="background-color:#f2f2f2; height:40px; line-height:40px; margin-bottom:-1px; margin-left:-20px; margin-right:-20px; margin-top:-1px; padding-left:20px"><strong>SIM</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại Sim</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số khe cắm sim</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">\r\n			<div style="background-color:#f2f2f2; height:40px; line-height:40px; margin-bottom:-1px; margin-left:-20px; margin-right:-20px; margin-top:-1px; padding-left:20px"><strong>Kết nối</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2G</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3G</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4G</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Wifi</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GPS</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bluetooth</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GPRS/EDGE</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&ecirc;́t n&ocirc;́i USB</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">\r\n			<div style="background-color:#f2f2f2; height:40px; line-height:40px; margin-bottom:-1px; margin-left:-20px; margin-right:-20px; margin-top:-1px; padding-left:20px"><strong>Giải tr&iacute; &amp; Ứng dụng</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xem phim</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nghe nhạc</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ghi &acirc;m</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">\r\n			<div style="background-color:#f2f2f2; height:40px; line-height:40px; margin-bottom:-1px; margin-left:-20px; margin-right:-20px; margin-top:-1px; padding-left:20px"><strong>Kích thước</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kích thước</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">\r\n			<div style="background-color:#f2f2f2; height:40px; line-height:40px; margin-bottom:-1px; margin-left:-20px; margin-right:-20px; margin-top:-1px; padding-left:20px"><strong>Trọng lượng</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Trọng lượng</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">\r\n			<div style="background-color:#f2f2f2; height:40px; line-height:40px; margin-bottom:-1px; margin-left:-20px; margin-right:-20px; margin-top:-1px; padding-left:20px"><strong>Thời gian bảo hành</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo hành</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2">\r\n			<div style="background-color:#f2f2f2; height:40px; line-height:40px; margin-bottom:-1px; margin-left:-20px; margin-right:-20px; margin-top:-1px; padding-left:20px"><strong>PIN</strong></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dung lượng Pin</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại pin</td>\r\n			<td>Li-Ion-----------------------------------------</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n', 'SP53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongsokythuatlaptop`
--

CREATE TABLE `thongsokythuatlaptop` (
  `MATHONGTINLAPTOP` int(11) NOT NULL,
  `BOVIXULY` text COLLATE utf8_unicode_ci,
  `BONHO` text COLLATE utf8_unicode_ci,
  `MANHINH` text COLLATE utf8_unicode_ci,
  `OCUNG` text COLLATE utf8_unicode_ci,
  `CARDDOHOA` text COLLATE utf8_unicode_ci,
  `MOTADAI` text COLLATE utf8_unicode_ci,
  `THONGSOKYTHUAT` text COLLATE utf8_unicode_ci,
  `CHITIETTHONGSO` text COLLATE utf8_unicode_ci,
  `MASP` char(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongsokythuatlaptop`
--

INSERT INTO `thongsokythuatlaptop` (`MATHONGTINLAPTOP`, `BOVIXULY`, `BONHO`, `MANHINH`, `OCUNG`, `CARDDOHOA`, `MOTADAI`, `THONGSOKYTHUAT`, `CHITIETTHONGSO`, `MASP`) VALUES
(1, 'Bộ vi xử lý: Intel® Core™ i5 Broadwell-5200U ', 'Bộ nhớ: 4GB, DDR3L', 'Màn hình: 15.6", HD ', 'Ổ cứng: 500GB ', 'Card đồ họa: NVIDIA GT 930M, 2GB', NULL, NULL, NULL, 'SP11'),
(2, 'Bộ vi xử lý: Intel® Core™ i5-5200U', 'Bộ nhớ: 4GB, DDR3L', 'Màn hình: 14", HD LED', 'Ổ cứng: 500 GB, HDD', 'Card đồ họa: AMD Radeon R7 M265, 2 GB', NULL, NULL, NULL, 'SP12'),
(3, 'Bộ vi xử lý: Intel® Broadwell i5-5200U', 'Bộ nhớ: 4GB, DDR3', 'Màn hình: 15.6", HD LED', 'Ổ cứng: 500GB, HDD', 'Card đồ họa: NVIDIA GeForce 820M', NULL, NULL, NULL, 'SP13'),
(4, 'Bộ vi xử lý: Intel® Core™  i5 dual-core', 'Bộ nhớ:4GB, LPDDR3', 'Màn hình: 13.3", LED-backlit', 'Ổ cứng: 128 GB', 'Card đồ họa: VGA onboard, Intel HD Graphics 6000', NULL, NULL, NULL, 'SP14'),
(5, 'Bộ vi xử lý: Intel® Core™  i7', 'Bộ nhớ: 16 GB, DDR3L', 'Màn hình: 15.4", LED-backlit', 'Ổ cứng: 256 GB', 'Card đồ họa: Intel Iris Pro Graphics', NULL, NULL, NULL, 'SP15'),
(6, 'Bộ vi xử lý: Intel® Core™ i5 6200U', 'Bộ nhớ: 4 GB, DDR3L', 'Màn hình: 14" HD LED', 'Ổ cứng: 500 GB, HDD', 'Card đồ họa: Intel HD Graphics', NULL, NULL, NULL, 'SP41'),
(7, 'Bộ vi xử lý: Intel® Core™  i7', 'Bộ nhớ: 16 GB, DDR3L', 'Màn hình: 15.4", LED-backlit', 'Ổ cứng: 256 GB', 'Card đồ họa: Intel Iris Pro Graphics', NULL, NULL, NULL, 'SP42'),
(8, 'Bộ vi xử lý: Intel® Core™ i5 4210U', 'Bộ nhớ: 4GB, DDR3', 'Màn hình: 15.6", HD LED', 'Ổ cứng: 500 GB, HDD', 'Card đồ họa: Nividia Geforce GT820', NULL, NULL, NULL, 'SP43'),
(9, 'Bộ vi xử lý: Intel Core i5-6200U (3MB Cache, up to 2.8 GHz)', 'Bộ nhớ: 4GB, DDR3L, 1600MHz', 'Màn hình: 15.6", HD Glare, LED', 'Ổ cứng: HDD, 500GB, 5400rpm', 'Card đồ họa: NVIDIA Geforce 920M', NULL, NULL, NULL, 'SP44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongsokythuatmaytinhbang`
--

CREATE TABLE `thongsokythuatmaytinhbang` (
  `MATHONGTINMAYTINHBANG` int(11) NOT NULL,
  `MANHINH` text COLLATE utf8_unicode_ci,
  `CPU` text COLLATE utf8_unicode_ci,
  `RAMROM` text COLLATE utf8_unicode_ci,
  `CAMERA` text COLLATE utf8_unicode_ci,
  `PIN` text COLLATE utf8_unicode_ci,
  `MOTADAI` text COLLATE utf8_unicode_ci,
  `THONGSOKYTHUAT` text COLLATE utf8_unicode_ci,
  `CHITIETTHONGSO` text COLLATE utf8_unicode_ci,
  `MASP` char(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongsokythuatmaytinhbang`
--

INSERT INTO `thongsokythuatmaytinhbang` (`MATHONGTINMAYTINHBANG`, `MANHINH`, `CPU`, `RAMROM`, `CAMERA`, `PIN`, `MOTADAI`, `THONGSOKYTHUAT`, `CHITIETTHONGSO`, `MASP`) VALUES
(2, 'Màn hình: 9.7 inch Retina IPS', 'CPU: Apple A8X, Dual-core 1.5 GHz Cyclone (ARM v8-based)', 'RAM/ROM: 2 GB/32 GB', 'Camera: 8 MP/1.2 MP', 'Pin: 27.3 Wh', NULL, NULL, NULL, 'SP16'),
(3, 'Màn hình:7.9 inch IPS LED-backlit LCD', 'CPU: Apple A8, Dual-Core 1.5 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 8 MP/1.2 MP', 'Pin: 19.1 Wh (5162 mAh)', NULL, NULL, NULL, 'SP17'),
(4, 'Màn hình:7.9 inch IPS LED-backlit LCD', 'CPU: Apple A8, Dual-Core 1.5 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 8 MP/1.2 MP', 'Pin: 19.1 Wh (5162 mAh)', NULL, NULL, NULL, 'SP18'),
(5, 'Màn hình: 12.9" Retina LED-backlit LCD', 'CPU: Apple A9X, Dual-core 2.2 GHz', 'RAM/ROM: 4 GB/128 GB', 'Camera: 8 MP/1.2 MP', 'Pin: 38.5 Whrs', NULL, NULL, NULL, 'SP19'),
(6, 'Màn hình: 9.7", Super AMOLED, 2048 x 1536 pixels', 'CPU: Exynos 5433 Octa-core, Quad-core 1.9 GHz + Quad-core 1.3 GHz', 'RAM/ROM: 3 GB/32 GB', 'Camera: 8 MP/2.1 MP', 'Pin: Li-Ion, 5870 mAh', NULL, NULL, NULL, 'SP20'),
(7, 'Màn hình: 7 inch IPS LCD', 'CPU: Intel Atom Z3460, Dual-core 1.6 GHz', 'RAM/ROM: 1 GB/16 GB', 'Camera: 5 MP/0.9 MP', 'Pin: 4550 mAh', NULL, NULL, NULL, 'SP45'),
(8, 'Màn hình: 7 inch IPS LCD', 'CPU: Intel Atom x3-C3230, Quad-core 1.2 GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 8 MP/2 MP', 'Pin: Li-Poly, 3500 mAh', NULL, NULL, NULL, 'SP46'),
(9, 'Màn hình: 8" LED Backlight IPS', 'CPU: Qualcomm MSM8916, Quad-core 1.2GHz', 'RAM/ROM: 2 GB/16 GB', 'Camera: 8 MP/2 MP', 'Pin: 4108 mAh', NULL, NULL, NULL, 'SP47'),
(10, 'Màn hình: 9.6", IPS, 800 x 1280 pixels', 'CPU: Qualcomm MSM8916  Quad core 1.2GHz', 'RAM/ROM: 1 GB/8 GB', 'Camera: 5 MP/2 MP', 'Pin: Li-Po 4800 mAh', NULL, NULL, NULL, 'SP48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongsophukien`
--

CREATE TABLE `thongsophukien` (
  `MATHONGTINPHUKIEN` int(11) NOT NULL,
  `LOAIPK` int(11) NOT NULL,
  `MOTANGAN` text COLLATE utf8_unicode_ci,
  `MOTADAI` text COLLATE utf8_unicode_ci,
  `THONGSOKYTHUAT` text COLLATE utf8_unicode_ci NOT NULL,
  `MASP` char(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongsophukien`
--

INSERT INTO `thongsophukien` (`MATHONGTINPHUKIEN`, `LOAIPK`, `MOTANGAN`, `MOTADAI`, `THONGSOKYTHUAT`, `MASP`) VALUES
(1, 13, '• Tốc độ: tải xuống: 21.6 Mbps, tải lên: 5.76 Mbps</br>\r\n• Hỗ trợ SIM và thẻ nhớ</br>\r\n• Kích thước: 94 x 56.7 x 19.8 mm</br>\r\n• Trọng lượng: 92.5 g', NULL, '', 'SP21'),
(2, 13, '• Mức phí: 65.000đ (đã bao gồm cước 30 ngày đầu tiền)</br>\r\n• Cước thuê bao: 30.000đ/30 ngày</br>\r\n• Miễn phí: 100MB lưu lượng data', NULL, '', 'SP22'),
(3, 7, '• Dung Lượng: 15,000 mAh</br>\r\n• Cổng giao tiếp: USB</br>\r\n• Kích thước: 125 x 78 x 23 mm</br>\r\n• Trọng lượng: 290 g</br>\r\n• Bảo hành: 12 tháng', NULL, '', 'SP23'),
(4, 1, '• Dung lượng: 8 GB</br>\r\n• Tốc độ kết nối: 4 MB/s</br>\r\n• Bảo hành: 12 tháng', NULL, '', 'SP24'),
(5, 1, '• Dung lượng: 8 GB</br>\r\n• Tốc độ kết nối: 4 MB/s</br>\r\n• Bảo hành: 12 tháng', NULL, '', 'SP25'),
(6, 13, '• Giao hàng miễn phí (nếu cách Viettel Store dưới 10km)</br>\r\n• Bảo hành chính hãng', NULL, '', 'SP49'),
(7, 7, '• Áp dụng công nghệ sạc nhanh</br>\r\n• Trọng lượng: 145 g</br>\r\n• Độ dày: 9.8 mm</br>\r\n• Dung lượng: 5200 mA', NULL, '', 'SP50'),
(8, 3, '• Giao hàng miễn phí (nếu cách Viettel Store dưới 10km)</br>\r\n• Bảo hành chính hãng', NULL, '', 'SP51'),
(9, 13, '• Cổng kết nối: 4 cổng LAN 10/100Mbps, 1 cổng WAN 10/100Mbps</br>\r\n• Kích thước: 151.6 x 112 x 30.5 mm</br>\r\n• Trọng lượng: 204 g</br>\r\n• Bảo hành: 12 tháng', NULL, '', 'SP52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `MATIN` int(11) NOT NULL,
  `TIEUDE` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TOMTAT` text COLLATE utf8_unicode_ci,
  `NOIDUNG` text COLLATE utf8_unicode_ci,
  `NGAYDANG` datetime NOT NULL,
  `LOAITIN` int(11) NOT NULL,
  `HINH1` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINH2` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINH3` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINH4` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINH5` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINH6` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINH7` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINH8` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`MATIN`, `TIEUDE`, `TOMTAT`, `NOIDUNG`, `NGAYDANG`, `LOAITIN`, `HINH1`, `HINH2`, `HINH3`, `HINH4`, `HINH5`, `HINH6`, `HINH7`, `HINH8`) VALUES
(1, '8 điểm khiến Galaxy S8 trở nên hấp dẫn', 'Sau khi Galaxy Note 7 chính thức bị khai tử thì Galaxy S8 hoặc model nào có có tên gọi tương tự chính là sản phẩm tiếp theo được Samsung kì vọng sẽ trở thành “vị cứu tinh” của mình.', '\r\n                <p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Sau khi Galaxy Note 7 chính thức bị khai tử thì Galaxy S8 hoặc model nào có có tên gọi tương tự chính là sản phẩm tiếp theo được Samsung kì vọng sẽ trở thành “vị cứu tinh” của mình.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Có khá nhiều thông tin rò rỉ về sản phẩm này được rò rỉ trên các trang tin công nghệ, và dưới đây là tổng hợp 8 điểm khiến Galaxy S8 trở nên hấp dẫn với các các Samfan dựa trên các thông tin rò rỉ.&nbsp;</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Hai phiên bản màn hình khác nhau</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT1_1.jpg"></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Một model sẽ có màn hình 5,1 inch, bản còn lại dùng màn hình 5,5 inch, theo nguồn tin từ Korea Herald. Đây được xem là kích thước lý tưởng cho những chiếc smartphone cao cấp hiện nay.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Cả hai phiên bản đều sở hữu màn hình cong</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT1_2.jpg"></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Nguồn tin từ Korea Herald cũng khẳng định Samsung sẽ khai tử bản màn hình phẳng để tung ra 2 chiếc S8 màn hình cong. Nguyên nhân chủ yếu là doanh số của mẫu S7 edge màn hình cong tốt ngoài mong đợi trong khi bản S7 màn hình phẳng không tạo ra đủ sự phấn khích.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Có camera kép trên mặt lưng</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT1_3.jpg"></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">ET News cho rằng Galaxy S8 sẽ có camera kép, một độ phân giải 16 megapixel, một 8 megapixel. Hiện chưa rõ tính năng của hệ thống camera kép trên S8.<br>\r\nThông thường, mỗi camera đảm nhiệm vai trò khác nhau. LG dùng camera thứ 2 để chụp ảnh góc rộng, Huawei dùng để chụp ảnh đen trắng trong khi Apple dùng nó để tạo ảnh xóa phông chuyên nghiệp cũng như hỗ trợ zoom quang học.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Màn hình không viền</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT1_4.jpg"></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">ET News cũng cho biết S8 sẽ sở hữu viền màn hình siêu mỏng, đến mức có cảm giác như màn hình của máy phủ kín mặt trước. Khi đó, kích thước tổng thể của sản phẩm có thể sẽ giảm xuống, giúp người dùng cầm nắm thuận tiện hơn.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Nút Home có một chút khác biệt</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT1_5.jpg"></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Một số báo cáo cho rằng nút Home trên Samsung Galaxy S8 sẽ được tích hợp bên dưới mặt kính. Như vậy, Samsung có thể sẽ là nhà sản xuất tiếp theo "khai tử" nút Home vật lý trên flagship của mình sau Apple. Mới đây, Xiaomi Mi 5s (ảnh trên) cũng sử dụng thiết kế nút Home chìm tương tự tận dụng công nghệ siêu âm, giúp làm giảm tỉ lệ hỏng hóc của nút Home vật lý.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Chip xử lý mạnh mẽ</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT1_6.jpg"></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Với việc Apple cho phát hành con chip A10 cực mạnh mẽ trên bộ đôi iPhone mới, S8 chắc chắn không chịu kém cạnh. Chưa có thông tin cụ thể về dòng chip Exynos mới do hãng tự chế tạo, chỉ biết có thể nó mang tên gọi Exynos 8895. Trong khi đó, sẽ có một số phiên bản S8 sử dụng chip Qualcomm, có thể là Snapdragon 830.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>USB Type-C, loại bỏ giắc cắm tai nghe</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT1_7.jpg"></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Gần như chắc chắn Galaxy S8 sẽ sử dụng chuẩn kết nối mới là USB Type-C. Giao thức kết nối này được trang bị trên này một nhiều sản phẩm và trở thành xu hướng không thể xóa bỏ. Trong khi đó, việc loại bỏ giắc cắm tai nghe sẽ giúp hãng có nhiều không gian bên trong máy hơn để tăng dung lượng pin hoặc các chi tiết đặc biệt khác.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Ra mắt vào tháng 2, bán ra vào tháng 3</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT1_8.jpg"></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Mới đây, thư mời tham dự sự kiện Unpacked 2017 của Samsung đã bị hé lộ. Theo đó, máy có thể ra mắt vào 26/2. Liền sau đó, model này sẽ bán ra vào tháng 3. Những tin đồn trước đây cho rằng Samsung sẽ giới thiệu sớm S8 để bù cho khoảng trống của Note 7. Tuy nhiên, điều này khó xảy ra.</span></p>', '2016-10-17 09:00:00', 5, 'TT1_1.jpg', 'TT1_2.jpg', 'TT1_3.jpg', 'TT1_4.jpg', 'TT1_5.jpg', 'TT1_6.jpg', 'TT1_7.jpg', 'TT1_8.jpg'),
(2, 'Oppo sắp ra mắt Oppo R9s kế nhiệm F1 Plus', 'Oppo F1 Plus là smartphone của Oppo đạt được nhiều thành công sau khi ra mắt. Trong thời gian tới, hãng lại tiếp tục cho ra mắt phiên bản kế nhiệm có tên Oppo R9s.', '\r\n                <p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><a href="/dien-thoai/oppo-f1-plus-pid107943.html"><span style="color: #00b0f0; text-decoration: underline;"><strong>Oppo F1 Plus</strong></span></a> là <strong>smartphone của Oppo</strong> đạt được nhiều thành công sau khi ra mắt. Trong thời gian tới, hãng lại tiếp tục cho ra mắt phiên bản kế nhiệm có tên Oppo R9s.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"></span><img alt="" src="img/HinhTinTuc/TT2_1.jpg" style="text-align: center;"></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Cấu hình Oppo R9s cũng đã dần được lộ diện</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><em><strong>Cấu hình Oppo R9s</strong></em> tiếp tục được rò rỉ. Theo đó, Oppo tiết lộ thiết bị sẽ là một smartphone chuyên selfie như phiên bản tiền nhiệm trước đây. Hãng cũng đã gửi lời mời tham gia sự kiện ra mắt vào ngày 19/10 và sẵn sàng lên kệ vào cuối năm nay.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Cấu hình Oppo R9s</strong></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Theo kết quả thử nghiệm trên Geekbench, Oppo R9s dùng bộ vi xử lý Snapdragon 625 cho xung nhịp 2.02 GHz, dung lượng RAM 4GB. Qua bài chấm điểm hiệu suất đơn lõi và đa lõi cho thấy, Oppo R9s hoàn thành khá tốt với điểm số lần lượt là 848 và 3121.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Một điều đáng tiếc duy nhất chính là Oppo vẫn trang bị cho R9s chạy trên nền tảng Android 6.0.1. Hi vọng, sau khi ra mắt thời gian ngắn, hãng sẽ nâng cấp sớm cho thiết bị lên hệ điều hành Android 7.0 mới nhất hiện nay.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"></span><img alt="" src="img/HinhTinTuc/TT2_2.jpg" style="text-align: center;"></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Oppo R9s sở hữu một chiếc camera trước có độ phân giải lên đến 13MP. Camera chính 16MP có khẩu độ f/1.7 và được trang bị tính năng chống rung quang học cao cấp. Màn hình R9s có kích thước 5,5 inch cho độ phân giải Full HD. Pin dung lượng 3010 mAh, tích hợp công nghệ sạc nhanh Super VOOC độc quyền của hãng.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"></span><img alt="" src="img/HinhTinTuc/TT2_3.jpg" style="text-align: center;"></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Cảm biến chống rung quang học được chính Oppo tự tay phát triển</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Thiết kế Oppo R9s</strong></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Qua hình ảnh giới thiệu qua, ta vẫn còn quá ít thông tin chính xác. Tuy nhiên, thiết kế của Oppo R9s vẫn rất sang trọng với khung vỏ được làm từ kim loại nguyên khối với thân máy được thiết kế siêu mỏng.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"></span><img alt="" src="img/HinhTinTuc/TT2_4.jpg" style="text-align: center;"></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Oppo R9s vẫn giữ dáng vẻ sang trọng vốn có của mình</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Về phong cách thiết kế và màu sắc, Oppo vẫn trung thành với những đặc điểm nhận dạng thương hiệu trước đây của mình.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Giá bán dự kiến của Oppo R9s vào khoảng 1600NDT (5.4 triệu đồng). Sau khi ra mắt tại thị trường quê nhà, Oppo Việt Nam cũng sẽ nhanh chóng đưa thiết bị lên kệ ngay sau đó. <strong>Smartphone của Oppo</strong> vẫn được người dùng trẻ ưa chuộng vì thiết kế đẹp, tính năng phong phú nhưng có giá thành lại vô cùng hợp lý.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">&nbsp;</span></p>\r\n<p style="text-align: right;"><span style="font-size: 14px; font-family: Arial;"><br>\r\nNguồn: Tổng hợp</span></p>\r\n', '2016-10-19 04:51:00', 5, 'TT2_1.jpg', 'TT2_2.jpg', 'TT2_3.jpg', 'TT2_4.jpg', NULL, NULL, NULL, NULL),
(3, 'Vì sao iPhone 5S vẫn là smartphone đáng mua trong thời điểm này?', 'iPhone 5s kể từ khi ra mắt luôn là một smartphone đáng mua, được hầu hết người tiêu dùng ưa thích bởi một thiết kế tinh tế, màn hình hợp lý so với một smartphone và đặc biệt, máy vẫn đảm bảo hiệu năng sử dụng và trang bị cảm biến vân tay – một tính năng vốn được tích hợp lên nhiều smartphone cao cấp hiện nay.', '\r\n                <p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><a href="/dien-thoai/iphone-5s-16gb-pid34.html"><span style="text-decoration: underline; color: #00b0f0;"><strong>iPhone 5s</strong></span></a> kể từ khi ra mắt luôn là một <strong>smartphone đáng mua</strong>, được hầu hết người tiêu dùng ưa thích bởi một thiết kế tinh tế, màn hình hợp lý so với một smartphone và đặc biệt, máy vẫn đảm bảo hiệu năng sử dụng và trang bị cảm biến vân tay – một tính năng vốn được tích hợp lên nhiều smartphone cao cấp hiện nay.</span></p>\r\n<p style="text-align: center;"><em><span style="font-size: 14px;"><img alt="" src="img/HinhTinTuc/TT3_1.jpg" style="text-align: center;"></span></em></p>\r\n<p style="text-align: center;"><em><span style="font-size: 14px;">iPhone 5s là một trong những smartphone thành công nhất của Apple</span></em></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"> Cùng tìm hiểu, tại sao iPhone 5S vẫn là <strong>smartphone đáng mua</strong> trong thời điểm này, khi bạn có trong tay khoảng hơn 6 triệu đồng?</span></p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong style="font-size: 14px; font-family: Arial;">iPhone 5S sở hữu nhiều chuẩn mực của smartphone</strong></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><strong></strong>Thừa hưởng một thiết kế tinh tế với khung nhôm nguyên khối vốn có của iPhone 5, iPhone 5S ra đời đã làm đúng với bản sắc của Apple khi đảm nhận nhiệm vụ của phiên bản “S”. Thiết kế tinh xảo với các màu tùy chọn phong phú, iPhone 5S Gold được rất nhiều người lựa chọn, đặc biệt là phụ nữ.</span></p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong style="font-size: 14px; font-family: Arial;">Màn hình vừa đủ, thoải mái sử dụng bằng một tay</strong></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em><img alt="" src="img/HinhTinTuc/TT3_2.jpg" style="text-align: center;"></em></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>iPhone 5S là smartphone của Apple được mệnh danh là đẹp và thoải mái khi sử dụng bằng một tay</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><strong></strong>Màn hình 4 inch, mỏng 7,6 mm, nặng 112 gram - những thông số này cho thấy đây là chiếc smartphone duy nhất cho phép người dùng sử dụng thoải mái bằng một tay còn sót lại trên thị trường.</span></p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong style="font-size: 14px; font-family: Arial;">Trang bị các tính năng hấp dẫn</strong></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em><img alt="" src="img/HinhTinTuc/TT3_3.jpg" style="text-align: center;"></em></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>iPhone 5S là thiết bị đầu tiên của Apple sở hữu cảm biến vân tay cao cấp</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><strong></strong>Đưa ra một luật chơi cố định và buộc khách hàng phải tuân theo, iPhone 5s đã tạo được sự thành công lớn với Touch ID, công nghệ cảm biến vân tay tiện lợi được tích hợp lần đầu tiên lên sản phẩm của hãng, dung lượng pin tăng lên một chút và đặc biệt là camera có tốc độ chụp tăng cao và sáng hơn rất nhiều. Theo đó, iPhone 5S được ra đời với các phiên bản 16/32/64Gb.</span></p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong style="font-size: 14px; font-family: Arial;">Được cập nhật hệ điều hành của iPhone 7</strong></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><strong></strong>Nếu phải chọn một chiếc iPhone 5S (ra đời từ năm 2013) và một chiếc smartphone Android khác cùng tầm giá, &nbsp;không ít người sẽ nghiêng về sản phẩm của Apple.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em><img alt="" src="img/HinhTinTuc/TT3_4.jpg" style="text-align: center;"></em></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>iOS 10 là hệ điều hành mới nhất nhưng vẫn được Apple tích hợp lên iPhone 5S - sản phẩm đã ra mắt nhiều năm</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Trong khi một số hãng smartphone chậm cập nhật hệ điều hành cho smartphone thì iPhone 5s đã có thể nâng cấp lên iOS 10 giống với iPhone 7 và iPhone 7 Plus. Đây thực sự là một chính sách rất hay của Apple sau bán hàng khi vẫn còn hỗ trợ sản phẩm đã ra mắt kể từ năm 2013.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style="font-size: 14px; font-family: Arial;"><strong>Viettel Store bán iPhone 5S chỉ với 6.490.000 đồng?</strong></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Không chỉ sở hữu các tính năng kể trên, khi mua iPhone 5S tại Viettel Store trong thời gian này, quý khách hàng còn nhận được vô vàn ưu đãi, cụ thể:</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">- Ưu đãi trả góp lãi suất 0%, Kỳ hạn trả 6 tháng dành cho chủ thẻ tín dụng HSBC (Áp dụng từ 07/10 đến 31/12/2016)&nbsp;</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">- Giá bán: 6.490.000 đồng chỉ dành cho các khách hàng mua Online (Không áp dụng chung với các chương trình khuyến mại khác).</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><img alt="" src="img/HinhTinTuc/TT3_5.jpg" style="text-align: center;"></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Ngập tràn ưu đãi và quà tặng khi mua iPhone 5S tại Viettel Store</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">- Trả góp lãi 1% FE Credit, trả trước 0 đồng theo giá bán 6.990.000 đồng.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">- Trả góp lãi 0% Home Credit theo giá bán 6.990.000 đồng (Trả trước 30%, trả góp trong 4 tháng).</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">- Tặng Phiếu mua hàng Phụ kiện 100.000 đồng \' - Nhận ngay 5GB data/tháng trong 12 tháng, cước thuê bao 50.000 đồng/tháng, miễn phí cước tháng đầu tiên. (Áp dụng từ 07/10 đến 31/10/2016).</span></p>\r\n            ', '2016-10-19 03:01:00', 5, 'TT3_1.jpg', 'TT3_2.jpg', 'TT3_3.jpg', 'TT3_4.jpg', 'TT3_5.jpg', NULL, NULL, NULL),
(4, 'Mách bạn 6 smartphone màu hồng tặng “gấu” ngày 20/10', 'Món quà là một chiếc smartphone cũng thể hiện sự tinh tế và quan tâm đến một nửa yêu thương trong ngày phụ nữ Việt Nam 20/10. Bạn đã có sự lựa chọn nào chưa?', '  <p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Món quà là một chiếc smartphone cũng thể hiện sự tinh tế và quan tâm đến một nửa yêu thương trong ngày phụ nữ Việt Nam 20/10. Bạn đã có sự lựa chọn nào chưa? Dưới đây là 6 gợi ý cho bạn với những mẫu <strong>smartphone màu hồng</strong> và vàng hồng đặc biệt dành riêng cho phái nữ tuyệt đẹp, mời bạn đọc tham khảo.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>1. Samsung Galaxy S7 Edge Pink&nbsp;</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT4_1.jpg"></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Galaxy S7 Edge Pink có giá bán hiện tại của Viettel Store là 16.990.000 ₫</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><a href="http://viettelstore.vn/dien-thoai/samsung-galaxy-s7-edge-g935f--pink-pid108222.html"><span style="text-decoration: underline; color: #00b0f0;"><strong>Galaxy S7 Edge Pink Gold</strong></span></a> là bản nâng cấp về kích cỡ màn hình so với Galaxy S7. Máy đã đã tạo được ấn tượng rất tốt với giới công nghệ tại sự kiện Samsung Unpacked 2016 vừa qua bởi một màn hình 5,5 inch được tích hợp màn hình cong huyền diệu... Sản phẩm được đánh giá là sản phẩm cao cấp nhất của Samsung tính tới thời điểm hiện tại. Mặc dù có kiểu dáng không khác nhiều so với sản phẩm Galaxy S6 Edge tiền nhiệm nhưng Galaxy S7 Edge vẫn được giới công nghệ thốt lên những từ “lộng lẫy nhất”, “mạnh mẽ nhất”, “tinh tế nhất”.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Ưu điểm khác: Cấu hình mạnh mẽ nhất | Camera khả năng chụp thiếu sáng trên cảm biến 12MP | Khả năng chống nước.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>2. Apple iPhone SE&nbsp;</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT4_2.jpg"></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Ngôn ngữ thiết kế của <a href="http://viettelstore.vn/dien-thoai/iphone-se-16gb-pid107935.html"><span style="text-decoration: underline; color: #00b0f0;"><strong>iPhone SE</strong></span></a> được thừa hưởng trọn vẹn từ "tiền bối" iPhone 5s - vốn rất được lòng người dùng trong nhiều năm qua. Không những thế, iPhone SE còn có thêm phiên bản màu vàng hồng nhìn rất thời thượng. Còn hiệu năng thì mạnh mẽ hơn cả iPhone 6s.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Ưu điểm khác: Cảm biến vân tay | Camera sau 12 MP quay phim 4K | Được cập nhật hệ điều hành thường xuyên và mới nhất.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>3. Samsung Galaxy A7 2016&nbsp;</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT4_3.jpg"></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em> Galaxy A7 2016 có giá bán hiện tại của Viettel Store là 9.990.000 ₫</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><a href="http://viettelstore.vn/dien-thoai/samsung-galaxy-a7-2016-a710--pid101949.html"><span style="text-decoration: underline; color: #00b0f0;"><strong>Samsung Galaxy A7 2016</strong></span></a> là phiên bản nâng cấp của chiếc Galaxy A5 2016 khi sở hữu màn hình lớn hơn và nâng cấp chút về cấu hình. Với thiết kế nguyên khối và tinh tế trong từng đường nét, Samsung Galaxy A7 2016 là một sự lựa chọn cực kỳ đáng giá ở phân khúc cận cao cấp trên thị trường hiện nay.&nbsp;</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Ưu điểm khác: Cấu hình mạnh mẽ sử dụng chip Exynos | Chế độ chụp selfie thông minh bằng tay cùng khả năng chỉnh sửa ảnh độc đáo | Chế độ tiết kiệm pin thông minh.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>4. Oppo F1 Plus&nbsp;</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT4_4.jpg"></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Oppo F1 Plus có giá bán hiện tại của Viettel Store là 9.990.000 ₫</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><a href="http://viettelstore.vn/dien-thoai/oppo-f1-plus-pid107943.html"><span style="text-decoration: underline; color: #00b0f0;"><strong>Oppo F1 Plus</strong></span></a> là chiếc smartphone có kiểu dáng đẹp và sang trọng, nổi bật hơn khá nhiều so với các smartphone cùng phân khúc đang có trên thị trường. Chiếc máy gây ấn tượng mạnh với viền màn hình siêu mỏng chỉ 1,66 mm, cùng camera trước 16 “chấm”.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Ưu điểm khác: vi xử lý tám nhân MT6755 Octa – Core, Ram 4GB | Thiết kế phẳng với độ mỏng đầy ấn tượng | màn hình 5.5\'\' sử dụng công nghệ AMOLED.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>5. Sony Xperia XA &nbsp;</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT4_5.jpg"></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Sony Xperia XA có giá bán hiện tại của Viettel Store là 5.490.000 ₫</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><a href="http://viettelstore.vn/dien-thoai/sony-xperia-xa-pid108219.html"><span style="text-decoration: underline; color: #00b0f0;"><strong>Xperia XA</strong></span></a> có bốn màu, bao gồm đen khói, trắng hoặc hai màu vàng mới rất đẹp - vàng ánh kim và vàng hồng. Máy kết hợp hài hòa màu sắc ở cả mặt sau, mặt trước và màu màn hình của điện thoại. Cùng với đó là mặt kính được vát cong 2.5D và viền màn hình siêu mỏng nên nhìn máy rất "sexy".</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Ưu điểm khác: Chạy Android 6.0 Marshmallow | Camera trước 8 MP + camera sau 13 MP | Hỗ trợ 4G, NFC và OTG.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>6. Samsung Galaxy A3 2016&nbsp;</strong></span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT4_6.jpg"></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Galaxy A3 2016 có giá bán hiện tại của Viettel Store là 5.690.000 ₫</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><a href="http://viettelstore.vn/dien-thoai/samsung-galaxy-a3-2016-pid107072.html"><span style="text-decoration: underline; color: #00b0f0;"><strong>Galaxy A3 2016</strong></span></a> có thiết kế nhỏ gọn với màn hình 4.7 inch, rất thích hợp các bạn nữ vốn có đôi bàn tay nhỏ sử dụng. Bên cạnh đó, máy còn có nhiều phiên bản màu để bạn lựa chọn, nổi bật nhất vẫn là màu hồng và vàng đồng sang trọng.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Ưu điểm khác: Được cập nhật lên Android 6.0 Marshmallow | Camera trước 5 MP + camera sau 13 MP | Hỗ trợ 4G, NFC và OTG.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Hi vọng với 6 gợi ý <strong>smartphone màu hồng</strong> trong bài viết này sẽ giúp ích được cho bạn trong việc chọn một món quà thật ý nghĩa nhân ngày phụ nữ Việt Nam 20/10!</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">&nbsp;</span></p>\r\n<p style="text-align: right;"><span style="font-size: 14px; font-family: Arial;">Nguồn: Tổng hợp</span></p>', '2016-10-19 01:31:00', 5, 'TT4_1.jpg', 'TT4_2.jpg', 'TT4_3.jpg', 'TT4_4.jpg', 'TT4_5.jpg', 'TT4_6.jpg', NULL, NULL),
(5, 'Galaxy A5 2017 lộ diện với chipset mới và thiết kế siêu đẹp', 'Những thông tin rò rỉ về cấu hình Galaxy A5 2017 vừa được lộ diện. Theo đó, chiếc máy này sẽ mạnh mẽ hơn nhiều so với thế hệ tiền nhiệm.', ' <p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Những thông tin rò rỉ về <strong>cấu hình Galaxy A5 2017</strong> vừa được lộ diện. Theo đó, chiếc máy này sẽ mạnh mẽ hơn nhiều so với thế hệ tiền nhiệm.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"></span><img alt="" src="img/HinhTinTuc/TT5_1.jpg" style="text-align: center;"></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Cấu hình Galaxy A5 2017 mạnh mẽ với chip Exynos mới</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><strong>Cấu hình Galaxy A5 2017</strong> không chỉ bị lộ trên Geekbench mà những thiết kế đầu tiên của chiếc smartphone cũng vừa bị rò rỉ. Qua đó có thể hình dung ra chiếc máy này sẽ là phiên bản rút gọn của flagship <a href="/dien-thoai/samsung-galaxy-s7-pid102036.html"><span style="text-decoration: underline; color: #00b0f0;"><strong>Galaxy S7</strong></span></a> đình đám của nhà <a href="/samsung-mid3.html?categoryId=010001"><span style="text-decoration: underline; color: #00b0f0;"><strong>Samsung</strong></span></a>.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Cấu hình Galaxy A5 2017 sẽ rất đáng gờm</strong></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Mới đây, trên hệ thống Geekbench vừa xuất hiện những thông tin rò rỉ được cho là sản phẩm Galaxy A5 2017. Cụ thể, chiếc máy này có thể sẽ được trang bị chip Exynos 7880 mạnh hơn đáng kể so với Exynos 7580 trên <a href="/dien-thoai/samsung-galaxy-a5-2016-a510-pid101948.html"><span style="text-decoration: underline; color: #00b0f0;"><strong>Galaxy A5 2016</strong></span></a>. Đi cùng với chipset mới là GPU Mali T830 và RAM được nâng từ 2GB lên 3GB giúp A5 2017 chạy đa nhiệm và các tác vụ mượt hơn rất nhiều. Đặc biệt, Galaxy A5 2017 sẽ được tích hợp cổng kết nối USB Type-C mới giúp tăng tốc độ kết nối dữ liệu và sử dụng thuận tiện hơn.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"></span><img alt="" src="img/HinhTinTuc/TT5_2.jpg"  style="text-align: center;"></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Cấu hình rò rỉ của Galaxy A5 2017</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Nếu sức mạnh của CPU được cải tiến nhiều thì camera của A5 2017 có khá ít sự thay đổi. Máy sẽ có camera chính 16MP khẩu độ f/1.9 sẽ giúp cải thiện khả năng chụp ảnh trong môi trường thiếu sáng. Ngoài ra, viên pin của A5 dường như không thay đổi với dung lượng 2.900mAh tương tự như "đàn anh".&nbsp;</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"></span>\r\n</p><div style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT5_3.jpg"  style="text-align: center;"></div>\r\n<p></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Galaxy A5 2017 đạt chứng nhận Wifi, sẵn sàng ra mắt</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Gần đây nhất, Galaxy A5 2017 đã đạt chứng nhận Wifi với 2 tên mã là SM-A520F (1 SIM) và SM-A520F/DS (2 SIM). Trước đó, Galaxy A5 2017 đã bị phát hiện đang được thử nghiệm tại Ấn Độ và cũng với tên mã tương tự. Smartphone này sẽ chạy trên nền tảng Android 6.0 lúc ra mắt nhưng có thể sẽ được cập nhật sớm lên Android 7.0 Nougat mới nhất.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Thiết kế đẳng cấp như dòng Galaxy S</strong></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Theo những hình ảnh rò rỉ, thiết kế của A5 2017 có nét tương đồng với Galaxy S7 với cạnh dọc lưng máy được vê cong mép và màn hình 2,5D ở mặt trước. Điều này khá dễ hiểu khi Samsung thường đem thiết kế của flagship năm trước lên dòng máy tầm trung cận cao cấp của năm sau.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"></span><img alt="" src="img/HinhTinTuc/TT5_4.jpg"  style="text-align: center;"></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Bộ khung vỏ Galaxy A5 2017 bị rò rỉ</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Theo dự kiến, cuối năm nay Samsung sẽ chính thức giới thiệu Galaxy A5 2017 cùng các model dòng A series khác như A3, A7 và A8. Với thiết kế cao cấp hơn và <strong>cấu hình Galaxy A5 2017</strong> được nâng cấp, liệu chiếc máy này có làm hài lòng người dùng? Cùng chờ xem nhé!</span></p>', '2016-10-20 03:00:00', 5, 'TT5_1.jpg', 'TT5_2.jpg', 'TT5_3.jpg', 'TT5_4.jpg', NULL, NULL, NULL, NULL),
(6, 'Ưu đãi chưa từng có khi mua Galaxy S7 Edge màu “hường” tại Viettel Store', 'Galaxy S7 Edge Pink Gold kể từ khi ra mắt luôn là một smartphone rất đáng mua. Đáng mua không chỉ vì tính năng vượt trội, thiết kế tinh tế...,', ' <p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><a href="/dien-thoai/samsung-galaxy-s7-edge-g935f--pink-pid108222.html"><span style="text-decoration: underline; color: #00b0f0;"><strong>Galaxy S7 Edge Pink Gold</strong></span></a> kể từ khi ra mắt luôn là một smartphone rất đáng mua. Đáng mua không chỉ vì tính năng vượt trội, thiết kế tinh tế..., chiếc smartphone này còn được mệnh danh là một thứ <strong>quà tặng sang trọng</strong>, lịch sự dành riêng cho phái đẹp, nhất là trong dịp kỷ niệm ngày Phụ nữ Việt Nam 20/10 năm nay.</span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT6_1.jpg"></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">\r\nĐồng hành cùng ngày Phụ nữ Việt Nam 20/10, Viettel Store tung ra các chương trình ưu đãi đặc biệt đối với khách hàng mua Galaxy S7 Edge Pink Gold. Cùng tìm hiểu về tính năng, thông số kỹ thuật và những ưu đãi khi sở hữu món <strong>quà tặng sang trọng</strong> này trong “ngày của chị em” các bạn nhé...</span></p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong style="font-size: 14px; font-family: Arial;">Galaxy S7 Edge là một trong những smartphone màu vàng hồng đẹp nhất</strong></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Smartphone màu vàng hồng đang dần trở thành một trào lưu trong một vài năm trở lại đây khi bên cạnh những màu truyền thống, các nhà sản xuất thường có thêm một phiên bản màu này dành cho phái đẹp. Và để theo kịp trào lưu đó, mới đây <a href="/tim-kiem.html?keyword=samsung"><span style="text-decoration: underline; color: #00b0f0;"><strong>Samsung</strong></span></a> đã bổ sung phiên bản màu hồng vàng (Pink Gold Edition) đầy quyến rũ cho chiếc Galaxy S7 Edge để nhắm đến các nhóm khách hàng là phái nữ.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em><img alt="" src="img/HinhTinTuc/TT6_2.jpg"style="text-align: center;"></em></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Màu sắc nồng nàn, quyến rũ trên một tổng thể tinh tế</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">\r\nSo với những smartphone vàng hồng khác, di động của Samsung trông bóng bẩy và tinh tế hơn do được phủ một lớp kính cường lực bên ngoài. Kết hợp với những đường cong trên máy, Galaxy S7 Edge màu vàng hồng trông rất hấp dẫn khi được ánh sáng chiếu vào.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em><img alt="" src="img/HinhTinTuc/TT6_3.jpg" style="text-align: center;"></em></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Galaxy S7 Edge Pink Gold là một trong những smartphone có tổng thể đẹp và hiệu năng đẹp nhất hiện nay</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Toàn bộ khung máy cũng được phủ màu vàng hồng. Mọi chi tiết trên máy đều được giữ nguyên, Samsung chỉ thay đổi về màu sắc bên ngoài của máy</span></p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong style="font-size: 14px; font-family: Arial;">Cấu hình, trang bị cao cấp – Đáng để chị em trải nghiệm</strong></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><strong></strong>Ngoài màu sắc, Samsung Galaxy S7 Edge vàng hồng không có gì thay đổi về cấu hình và những trang bị đi kèm. Model này hiện vẫn nằm trong top những smartphone có cấu hình mạnh nhất hiện nay với màn hình Super AMOLED 5.1 inch độ phân giải Quad HD, chip Exynos 8890, RAM 4 GB. Máy hỗ trợ 2 sim, bộ nhớ trong 32 GB, kèm thẻ nhớ 200GB.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em><img alt="" src="img/HinhTinTuc/TT6_4.jpg" style="text-align: center;"></em></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Camera khẩu độ rộng cũng là ưu điểm rất lớn của Galaxy S7 Edge so với các smartphone khác trên thị trường</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Đặc biệt, máy cũng có khả năng chống bụi, chống nước theo tiêu chuẩn IP68. Ngoài ra, máy vẫn sở hữu bộ đôi camera có độ phân giải 12 MP/ 5 MP được trang bị công nghệ Dual Pixel, cùng với viên pin có dung lượng 3.600 mAh có hỗ trợ sạc nhanh có dây và không dây.</span></p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"></span><strong style="font-size: 14px; font-family: Arial;">Ưu đãi hấp dẫn chưa từng có khi mua Galaxy S7 Edge Pink Gold tại Viettel Store</strong></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Nhằm tạo điều kiện để chị em có dịp trải nghiệm siêu phẩm này một cách dễ dàng và giúp đấng mày râu tối ưu chi phí... Viettel Store triển khai chương trình ưu đãi đặc biệt cho khách hàng.&nbsp;</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em><img alt="" src="img/HinhTinTuc/TT6_5.jpg" style="text-align: center;"></em></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Trải nghiệm và sở hữu Galaxy S7 Edge Pink Gold chưa bao giờ hấp dẫn đến thế</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Cụ thể, khi mua sản phẩm Galaxy S7 Edge Pink Gold quý khách hàng sẽ được giảm ngay 1,5 triệu đồng (từ 18.490.000 đồng xuống còn 16.990.000 đồng) và tặng phiếu mua hàng phụ kiện trị giá 700.000 đồng trong ngày hôm nay (20/10).</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Quý khách hãy đến ngay Viettel Store để đặt hàng trực tiếp, đặt hàng online <a href="/dien-thoai/samsung-galaxy-s7-edge-g935f--pink-pid108222.html"><span style="text-decoration: underline; color: #00b0f0;"><strong>tại đây</strong></span></a> hoặc gọi đến tổng đài 18008123 để được tư vấn về chương trình.</span></p>', '2016-10-20 02:02:00', 5, 'TT6_1.jpg', 'TT6_2.jpg', 'TT6_3.jpg', 'TT6_4.jpg', 'TT6_5.jpg', NULL, NULL, NULL),
(7, 'Đúng 1 tuần nữa sẽ diễn ra sự kiện lớn ra mắt sản phẩm mới của Apple', 'Ngày 27/10 tới đây Apple sẽ tổ chức ra mắt sự kiện ra mắt MacBook Pro. Ngoài ra, MacBook Air cũng sẽ được nâng cấp.', '<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Ngày 27/10 tới đây <a href="/apple-mid1.html?categoryId=010002"><span style="color: #00b0f0; text-decoration: underline;"><strong>Apple</strong></span></a> sẽ tổ chức ra mắt sự kiện ra mắt MacBook Pro. Ngoài ra, MacBook Air cũng sẽ được nâng cấp.</span></p>\r\n<p style="text-align: center;"><img alt="" src="img/HinhTinTuc/TT7_1.jpg"></p>\r\n<p style="text-align: center;"><span style="font-family: Arial; font-size: 14px;"><em>Apple sẽ tổ chức sự kiện MacBook mới vào ngày 27/10 tại trụ sở Cupertino</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Apple cách đây ít giờ đã chính thức gửi đi thư mời cho sự kiện tiếp theo của mình trong năm 2016. Cụ thể, thư mời nêu rõ sự kiện sẽ được diễn ra vào ngày 27 tháng 10 (giờ địa phương) cùng thông điệp "hello again" và hình ảnh một trái táo cắn dở được cách điệu. Sự kiện này sẽ được tổ chức tại trụ sở Apple (số 1 Infinite Loop). Trụ sở phi thuyền Campus 2 dự kiến sẽ mở cửa vào đầu năm 2017. Do đó, đây có thể là sự kiện lớn cuối cùng được tổ chức tại trụ sở cũ của Apple.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Mùa thu năm ngoái, Apple chỉ tổ chức đúng một sự kiện sản phẩm duy nhất để giới thiệu toàn bộ những gì mình đang ấp ủ, từ iPhone cho tới iPad. Tuy nhiên, sự kiện diễn ra vào tháng 9 năm nay chỉ có tiêu điểm là chiếc iPhone 7/ 7 Plus và đồng hồ Apple Watch series 2. Người dùng vẫn chưa được đón nhận các thông tin liên quan tới máy tính Mac hay máy tính bảng iPad.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Thư mời này khẳng định những tin đồn trước đó, cho rằng Apple sẽ tái thiết kế mạnh mẽ dòng sản phẩm MacBook Pro.&nbsp;</span><span style="font-size: 14px; font-family: Arial;">Những thay đổi lớn trên dòng laptop cao cấp của Apple bao gồm dài touch bar OLED thay thế phím chức năng cũ. Tính năng này có thể được gọi là Control Strip.&nbsp;</span><span style="font-size: 14px; font-family: Arial;">Bên cạnh đó, đây có thể là dòng MacBook đầu tiên của Apple trang bị tính năng nhận diện vân tay Touch ID. Tích hợp tính năng này, MacBook Pro sẽ cung cấp giải pháp đăng nhập bảo mật hơn, đồng thời hỗ trợ thanh toán qua Apple Pay.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><img alt="" src="img/HinhTinTuc/TT7_2.jpg" style="text-align: center;"></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>MacBook Pro sẽ là tâm điểm của mọi sự chú ý trong sự kiện này</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Cuối cùng, MacBook Pro được cho là sẽ sử dụng cổng USB-C, khai tử hàng loạt chuẩn kết nối như USB-A, HDMI và đầu đọc thẻ nhớ SD.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Phiên bản MacBook Air 13 inch cũng sẽ được nâng cấp. Tuy nhiên, thay đổi trên dòng sản phẩm này có thể không lớn. Với việc MacBook Retina 12 inch đang là sản phẩm chủ lực của Apple, nhiều khả năng hãng sẽ khai tử dòng Air 11 inch.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Trước đây, Apple thường dùng sự kiện tháng 10 để giới thiệu iPad mới. Tuy nhiên, gần đây hãng có xu hướng chuyển sang mùa xuân. Như vậy, người dùng có thể phải đợi đến tháng 3 năm sau để chứng kiến bản nâng cấp của dòng iPad Pro cũng như iPad mini.</span></p>\r\n', '2016-10-20 11:00:00', 5, 'TT7_1.jpg', 'TT7_2.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Chính thức ra mắt LG V34 – Smartphone kế nhiệm LG V20', 'Được cho là sản phẩm kế nhiệm chiếc LG V20 đình đám ngày nào, LG V34 sở hữu nhiều tính năng cao cấp hơn cả LG V20, thậm chí là vượt trội hơn cả chiếc G5 -  flagship của LG ra mắt đầu năm nay.', '<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Được cho là sản phẩm kế nhiệm chiếc <a href="/tim-tin.html?keyword=lg%20v20"><span style="text-decoration: underline; color: #00b0f0;"><strong>LG V20</strong></span></a> đình đám ngày nào, LG V34 sở hữu nhiều tính năng cao cấp hơn cả LG V20, thậm chí là vượt trội hơn cả chiếc G5 - &nbsp;<strong>flagship của LG</strong> ra mắt đầu năm nay.<br>\r\n</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em><img alt=""  src="img/HinhTinTuc/TT8_1.jpg"  style="text-align: center;"></em></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>LG V34 là smartphone được bán độc quyền tại thị trường Nhật Bản</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">\r\nTên đầy đủ của sản phẩm là LG V34 isai Beat. Được biết đây không phải là flagship của <a href="/tim-tin.html?keyword=lg"><span style="text-decoration: underline; color: #00b0f0;"><strong>LG</strong></span></a> mà chỉ là sản phẩm phân phối độc quyền tại thị trường Nhật Bản. LG có tiền lệ cung cấp những smartphone chịu nước cho thị trường Nhật Bản – nơi mà khách hàng rất coi trọng tính năng này, V34 isai Beat là một sản phẩm như vậy.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Chống nước là điều kiện tiên quyết dành cho smartphone tại Nhật Bản</strong></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">LG V34 cao cấp&nbsp;</span><span style="font-size: 14px; font-family: Arial;">hơn V20 và G5 ở khả năng chịu nước theo chuẩn IP67 (chìm 1m nước trong 30 phút). Tính năng này đang được nhiều người coi là điều kiện kiên quyết để lựa chọn điện thoại, đặc biệt ở thị trường Nhật Bản.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><img alt=""   src="img/HinhTinTuc/TT8_2.jpg"  style="text-align: center;"></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Giống với nhiều smartphone Nhật Bản khác, LG V34 buộc phải có khả năng chống nước nếu muốn được người dân Nhật Bản đón nhận</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"></span><span style="font-size: 14px; font-family: Arial;">LG V34 sẽ là sự lựa chọn phù hợp hơn với những ai muốn có một chiếc smartphone màn hình 5,2 inch vừa phải, cấu trúc bền bỉ, hiệu năng cao, hỗ trợ giải trí đẳng cấp.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Tất nhiên, LG V34 chỉ được phát hành cho thị trường nội địa Nhật Bản và được độc quyền bởi Au Japan. Thiết bị này sẽ lên kệ vào giữa tháng Mười Một với tùy chọn màu Titan và vàng.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><br>\r\n<strong>Cấu hình LG V34 khác gì V20, G5?</strong></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Cũng như V20, V34 vẫn được LG trang bị màn hình 2K cỡ 5,2 inch, tấm nền IPS, màn hình phụ, vi xử lý Snapdragon 820, RAM 4GB, bộ nhớ trong 32GB kèm khe cắm thẻ nhớ. Các mô-đun khác cũng khá quen thuộc như chip QuadDAC, hệ thống âm thanh Bang &amp; Olufsen, camera kép 16MP/ 8MP ở phía sau và 8MP góc siêu rộng ở phía trước, cảm biến vân tay ở mặt lưng, pin 3.000mAh và cài sẵn Android 7.0 khi xuất xưởng.&nbsp;</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Theo tìm hiểu, có hai sự khác biệt cơ bản giữa LG V20 và LG V34. Thứ nhất, màn hình của LG V34 chỉ có kích thước 5.2 inch và độ phân giải 1440 x 2560 pixel. Thứ 2, LG V34 đáp ứng tiêu chuẩn IP67 cho khả năng kháng bụi, nước và đây là một nâng cấp đáng kể so với LG V20.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em><img alt=""   src="img/HinhTinTuc/TT8_3.jpg"  style="text-align: center;"></em></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Máy có cấu hình ở mức khá cao so với thời điểm hiện tại</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Với nhiều tính năng cao cấp và vượt trội hơn cả chiếc<strong> flagship của LG</strong>, hi vọng rằng V34 sẽ phục vụ tốt cho nhu cầu sử dụng thiết yếu của khách hàng tại xử sở Mặt trời mọc.</span></p>\r\n\r\n', '2016-10-19 10:00:00', 5, 'TT8_1.jpg', 'TT8_2.jpg', 'TT8_3.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tintuc` (`MATIN`, `TIEUDE`, `TOMTAT`, `NOIDUNG`, `NGAYDANG`, `LOAITIN`, `HINH1`, `HINH2`, `HINH3`, `HINH4`, `HINH5`, `HINH6`, `HINH7`, `HINH8`) VALUES
(9, 'Có phải Galaxy S8 là siêu phẩm duy nhất của Samsung trong năm 2017?', 'Có phải Galaxy S8 là siêu phẩm duy nhất của Samsung trong năm 2017?\r\nThông tin về Galaxy S8 những ngày qua cũng cho biết đây có thể là smartphone siêu phẩm duy nhất của Samsung sẽ ra mắt trong năm 2017. ', '   <p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Sau những gì trải qua về Galaxy Note 7, <a href="/tim-kiem.html?keyword=samsung"><span style="text-decoration: underline; color: #00b0f0;"><strong>Samsung</strong></span></a> đang nỗ lực tập trung vào một <strong>smartphone siêu phẩm</strong> trong năm 2017 – Galaxy S8.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em><img alt=""  src="img/HinhTinTuc/TT9_1.jpg" style="text-align: center;"></em></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Samsung muốn Galaxy S8 sẽ giúp hãng này lấy lại danh tiếng đã mất đi ít nhiều sau sự cố của Galaxy Note 7</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">\r\nThông tin về <a href="/tag/galaxy-s8.html?tagNameVN=galaxy%20s8"><span style="color: #00b0f0; text-decoration: underline;"><strong>Galaxy S8</strong></span></a> những ngày qua cũng cho biết đây có thể là <strong>smartphone siêu phẩm</strong> duy nhất của Samsung sẽ ra mắt trong năm 2017. Chính vì điều này nên ông lớn Hàn Quốc đang gấp rút sản xuất phần mềm và phần cứng và đảm bảo tiêu chuẩn để ra mắt thị trường.</span></p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong style="font-size: 14px; font-family: Arial;">Samsung tập trung mạnh vào smartphone cao cấp dòng S</strong></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Nhiều dự đoán mới đây cho rằng Samsung sẽ không chỉ ngừng sản xuất sản phẩm Note mới mà thậm chí còn cho ra đời một siêu phẩm duy nhất trong năm 2017: Galaxy S8.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Có lẽ, đây không phải là lần đầu tiên chúng ta nghe thấy thông tin về việc Samsung sẽ sẽ bỏ hẳn thương hiệu Note sau sự cố với chiếc Note 7. Tin đồn mới lần này, xuất phát từ trang Newis thậm chí còn khẳng định rằng Samsung đang chấn chỉnh lại toàn bộ chiến lược di động năm 2017 để đảm bảo chất lượng sản phẩm.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em><img alt=""  src="img/HinhTinTuc/TT9_2.jpg"  style="text-align: center;"></em></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Samsung sẽ tập trung mạnh mẽ vào smartphone dòng S để nối tiếp sự thành công của Galaxy S7 trước đó</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Ngoài ra, theo hãng tin Korea Herald, ban lãnh đạo Samsung đang cảnh báo toàn bộ nhân viên và cả các nhà cung cấp linh kiện ngăn chặn bất kỳ thông tin rò rỉ nào liên quan đến Galaxy S8. Trong một email nội bộ, Samsung đã yêu cầu nhân viên của mình đề cao các biện pháp an ninh, ngăn chặn rò rỉ bí mật hoạt động.</span></p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong style="font-size: 14px; font-family: Arial;">Samsung đang phát triển chip và phần mềm cho Galaxy S8</strong></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">SamMobile cho biết Samsung đang bắt đầu phát triển các bản ROM cho Galaxy S8, đầu tiên là các bản ROM nội địa của TQ, Pháp, Đức, ý, Hàn Quốc, Ba Lan, Anh và Mỹ, sau đó có thể sẽ đến các quốc gia khác. Thông tin Samsung đang bắt đầu phát triển ROM cho S8 khá quan trọng vì nó giúp chúng ta hình dung thời điểm máy sẽ được giới thiệu.&nbsp;</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em><img alt=""  src="img/HinhTinTuc/TT9_3.jpg"  style="text-align: center;"></em></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Chip 10nm dành cho chiếc Galaxy S8 đã được Samsung bắt tay vào sản xuất</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Cũng theo một nguồn tin khác, trong nỗ lực đẩy nhanh tiến độ ra mắt Galaxy S8 mới, hãng điện tử Hàn Quốc hôm nay cho biết đã khởi động dây chuyền sản xuất các sản phẩm SoC với công nghệ FinFet 10nm - sử dụng cho thế hệ điện thoại tiếp theo. Với quy trình sản xuất nhỏ hơn, các SoC 10nm được kì vọng sẽ nhanh hơn khoảng 27% và tiết kiệm điện hơn 40% so với thế hệ 14nm hiện nay.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Cùng chờ đợi những thông tin rò rỉ về chiếc <strong>smartphone siêu phẩm</strong> của Samsung được cập nhật liên tục tại Viettelstore.vn các bạn nhé.</span></p>\r\n\r\n\r\n', '2016-10-20 08:55:00', 5, 'TT9_1.jpg', 'TT9_2.jpg', 'TT9_3.jpg', NULL, NULL, NULL, NULL, NULL),
(10, 'Nokia sẽ trở lại cuộc chơi smartphone vào năm 2017', 'CEO Rajeev Suri đã xác nhận smartphone mới của Nokia sẽ sớm trở lại thị trường điện thoại 2017.\r\n', '         <p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">CEO Rajeev Suri đã xác nhận <strong>smartphone mới của Nokia</strong> sẽ sớm trở lại thị trường <em>điện thoại 2017</em>.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"></span><img alt=""  src="img/HinhTinTuc/TT10_1.jpg"  style="text-align: center;"></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Năm 2017 sẽ chào đón một chiếc smartphone mới của Nokia chạy Android</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;"><strong>Smartphone mới của Nokia</strong> dự định sẽ được ra mắt tại sự kiện triển lãm MWC 2017 tại Tây Ban Nha. Hiện tại, hãng cũng đã có những động thái rõ ràng khẳng định sẽ ra ít nhất 2 thiết bị chạy Android. Đây là một tin vui đối với những người dùng đã từng là Fan hâm mộ của Nokia.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Trở về quá khứ năm 2013, <a href="/tim-kiem.html?keyword=nokia"><span style="text-decoration: underline; color: #00b0f0;"><strong>Nokia</strong></span></a> đã bị <a href="/tim-kiem.html?keyword=microsoft"><span style="text-decoration: underline; color: #00b0f0;"><strong>Microsoft</strong></span></a> mua lại với giá 7,2 tỷ USD, trong đó có điều khoản ràng buộc cho đến tận bây giờ mới kết thúc về việc Nokia sản xuất smartphone. Điều đó đồng nghĩa với việc hãng sẽ trở lại mảng thiết bị di động trong năm nay, khi hợp đồng đó hết hiệu lực.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><img alt=""  src="img/HinhTinTuc/TT10_2.jpg"  style="text-align: center;"></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Nokia chắc chắn sẽ trở lại sau khi hợp đồng ràng buộc với Microsoft chấm dứt</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">CEO của Nokia – Ông Rajeev Suri từng tiết lộ, hãng đang có kế hoạch quay trở lại thị trường điện thoại cao cấp. Tuy nhiên, thông tin cấu hình và tính năng không được cung cấp gì thêm.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Một số thông tin rò rỉ gần đây cho biết, Nokia sẽ phát triển đến 2 chiếc smartphone mới với thiết kế kim loại nguyên khối cao cấp. Màn hình có kích thước dự đoán lần lượt là 5,2 và 5,5 inch, sử dụng màn hình OLED cho độ phân giải QHD. Máy còn có khả năng chống bụi, chống nước theo chuẩn IP68 cao nhất hiện nay.</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><img alt=""  src="img/HinhTinTuc/TT10_1.jpg"  style="text-align: center;"></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Smartphone Nokia sẽ có kiểu dáng hiện đại với những tính năng cao cấp</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Về hệ điều hành sử dụng trên 2 thiết bị sắp tới, khả năng lớn Nokia sẽ chọn Android 7.0 mới nhất được tùy biến giao diện Z Launcher thay vì tiếp tục trung thành với Windows Phone hay trở về với Symbian “cây nhà lá vườn”.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Đặc biệt hơn cả, Nokia sẽ giới thiệu một loại vật liệu mới có tên Graphene. Đây là loại vật liệu độc quyền của hãng được làm từ carbon nguyên chất, hỗ trợ cho tính năng cảm biến vân tay siêu nhạy.&nbsp;</span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><img alt=""  src="img/HinhTinTuc/TT10_4.jpg"  style="text-align: center;"></span></p>\r\n<p style="text-align: center;"><span style="font-size: 14px; font-family: Arial;"><em>Graphene là loại vật liệu mỏng nhất thế giới hiện nay</em></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">Điều mà Nokia cần làm hiện nay là tìm một đối tác để sản xuất phần cứng cho thiết bị. Hãng chỉ chịu trách nhiệm phần thiết kế và chất lượng sản phẩm, tương tự như cách làm với chiếc Tablet N1 trước đây. Bộ đôi <strong>smartphone mới của Nokia</strong> hiện vẫn chưa có tên chính thức.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 14px; font-family: Arial;">&nbsp;</span></p>\r\n<p style="text-align: right;"><span style="font-size: 14px; font-family: Arial;"><br>\r\nNguồn: Tổng hợp</span></p>\r\n', '2016-10-19 10:32:00', 5, 'TT10_1.jpg', 'TT10_2.jpg', 'TT10_3.jpg', 'TT10_4.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `traloibinhluan`
--

CREATE TABLE `traloibinhluan` (
  `MATRALOI` int(11) NOT NULL,
  `MANV` text COLLATE utf8_unicode_ci,
  `TENNV` text COLLATE utf8_unicode_ci,
  `NGAYGIO` text COLLATE utf8_unicode_ci,
  `NDTRALOI` text COLLATE utf8_unicode_ci,
  `MABL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `MATRANGTHAI` int(11) NOT NULL,
  `TENTRANGTHAI` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`MATRANGTHAI`, `TENTRANGTHAI`) VALUES
(1, 'TRẢ GÓP 0%'),
(2, 'BÁN CHẠY'),
(3, 'MỚI VỀ'),
(4, 'KHUYẾN MÃI'),
(5, 'BÌNH THƯỜNG');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MABINHLUAN`);

--
-- Chỉ mục cho bảng `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`MAHANGSANXUAT`);

--
-- Chỉ mục cho bảng `hinhslideshow`
--
ALTER TABLE `hinhslideshow`
  ADD PRIMARY KEY (`MAHINH`);

--
-- Chỉ mục cho bảng `loaiphukien`
--
ALTER TABLE `loaiphukien`
  ADD PRIMARY KEY (`MALOAIPK`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MALOAI`);

--
-- Chỉ mục cho bảng `loaitintuc`
--
ALTER TABLE `loaitintuc`
  ADD PRIMARY KEY (`MALOAI`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`MAMAU`);

--
-- Chỉ mục cho bảng `mausp`
--
ALTER TABLE `mausp`
  ADD PRIMARY KEY (`MAMAU`,`MASP`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`MASLIDESHOW`);

--
-- Chỉ mục cho bảng `thongsokythuatdienthoai`
--
ALTER TABLE `thongsokythuatdienthoai`
  ADD PRIMARY KEY (`MATHONGTINDIENTHOAI`);

--
-- Chỉ mục cho bảng `thongsokythuatlaptop`
--
ALTER TABLE `thongsokythuatlaptop`
  ADD PRIMARY KEY (`MATHONGTINLAPTOP`,`MASP`);

--
-- Chỉ mục cho bảng `thongsokythuatmaytinhbang`
--
ALTER TABLE `thongsokythuatmaytinhbang`
  ADD PRIMARY KEY (`MATHONGTINMAYTINHBANG`,`MASP`);

--
-- Chỉ mục cho bảng `thongsophukien`
--
ALTER TABLE `thongsophukien`
  ADD PRIMARY KEY (`MATHONGTINPHUKIEN`,`MASP`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MATIN`);

--
-- Chỉ mục cho bảng `traloibinhluan`
--
ALTER TABLE `traloibinhluan`
  ADD PRIMARY KEY (`MATRALOI`,`MABL`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`MATRANGTHAI`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MABINHLUAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  MODIFY `MAHANGSANXUAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT cho bảng `hinhslideshow`
--
ALTER TABLE `hinhslideshow`
  MODIFY `MAHINH` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `loaiphukien`
--
ALTER TABLE `loaiphukien`
  MODIFY `MALOAIPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `MALOAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `loaitintuc`
--
ALTER TABLE `loaitintuc`
  MODIFY `MALOAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `MAMAU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `MASLIDESHOW` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `thongsokythuatdienthoai`
--
ALTER TABLE `thongsokythuatdienthoai`
  MODIFY `MATHONGTINDIENTHOAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT cho bảng `thongsokythuatlaptop`
--
ALTER TABLE `thongsokythuatlaptop`
  MODIFY `MATHONGTINLAPTOP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `thongsokythuatmaytinhbang`
--
ALTER TABLE `thongsokythuatmaytinhbang`
  MODIFY `MATHONGTINMAYTINHBANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `thongsophukien`
--
ALTER TABLE `thongsophukien`
  MODIFY `MATHONGTINPHUKIEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `MATIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `traloibinhluan`
--
ALTER TABLE `traloibinhluan`
  MODIFY `MATRALOI` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `MATRANGTHAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
