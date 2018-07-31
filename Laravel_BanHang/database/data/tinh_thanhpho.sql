-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2018 at 01:18 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_banHang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tinh_thanhpho`
--

CREATE TABLE IF NOT EXISTS `tinh_thanhpho` (
  `id` int(11) DEFAULT NULL,
  `ten` varchar(17) CHARACTER SET utf8 DEFAULT NULL,
  `tenkhongdau` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `donvi` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `tendaydu` varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  `code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinh_thanhpho`
--

INSERT INTO `tinh_thanhpho` (`id`, `ten`, `tenkhongdau`, `donvi`, `tendaydu`, `code`) VALUES
(89, 'An Giang', 'an-giang', 'tinh', 'Tỉnh An Giang', 89),
(62, 'Kon Tum', 'kon-tum', 'tinh', 'Tỉnh Kon Tum', 62),
(67, 'Đắk Nông', 'dak-nong', 'tinh', 'Tỉnh Đắk Nông', 67),
(94, 'Sóc Trăng', 'soc-trang', 'tinh', 'Tỉnh Sóc Trăng', 94),
(70, 'Bình Phước', 'binh-phuoc', 'tinh', 'Tỉnh Bình Phước', 70),
(33, 'Hưng Yên', 'hung-yen', 'tinh', 'Tỉnh Hưng Yên', 33),
(38, 'Thanh Hóa', 'thanh-hoa', 'tinh', 'Tỉnh Thanh Hóa', 38),
(45, 'Quảng Trị', 'quang-tri', 'tinh', 'Tỉnh Quảng Trị', 45),
(8, 'Tuyên Quang', 'tuyen-quang', 'tinh', 'Tỉnh Tuyên Quang', 8),
(51, 'Quảng Ngãi', 'quang-ngai', 'tinh', 'Tỉnh Quảng Ngãi', 51),
(1, 'Hà Nội', 'ha-noi', 'thanh-pho', 'Thành phố Hà Nội', 1),
(10, 'Lào Cai', 'lao-cai', 'tinh', 'Tỉnh Lào Cai', 10),
(86, 'Vĩnh Long', 'vinh-long', 'tinh', 'Tỉnh Vĩnh Long', 86),
(68, 'Lâm Đồng', 'lam-dong', 'tinh', 'Tỉnh Lâm Đồng', 68),
(52, 'Bình Định', 'binh-dinh', 'tinh', 'Tỉnh Bình Định', 52),
(40, 'Nghệ An', 'nghe-an', 'tinh', 'Tỉnh Nghệ An', 40),
(91, 'Kiên Giang', 'kien-giang', 'tinh', 'Tỉnh Kiên Giang', 91),
(2, 'Hà Giang', 'ha-giang', 'tinh', 'Tỉnh Hà Giang', 2),
(54, 'Phú Yên', 'phu-yen', 'tinh', 'Tỉnh Phú Yên', 54),
(20, 'Lạng Sơn', 'lang-son', 'tinh', 'Tỉnh Lạng Sơn', 20),
(48, 'Đà Nẵng', 'da-nang', 'thanh-pho', 'Thành phố Đà Nẵng', 48),
(14, 'Sơn La', 'son-la', 'tinh', 'Tỉnh Sơn La', 14),
(72, 'Tây Ninh', 'tay-ninh', 'tinh', 'Tỉnh Tây Ninh', 72),
(36, 'Nam Định', 'nam-dinh', 'tinh', 'Tỉnh Nam Định', 36),
(12, 'Lai Châu', 'lai-chau', 'tinh', 'Tỉnh Lai Châu', 12),
(83, 'Bến Tre', 'ben-tre', 'tinh', 'Tỉnh Bến Tre', 83),
(56, 'Khánh Hòa', 'khanh-hoa', 'tinh', 'Tỉnh Khánh Hòa', 56),
(60, 'Bình Thuận', 'binh-thuan', 'tinh', 'Tỉnh Bình Thuận', 60),
(4, 'Cao Bằng', 'cao-bang', 'tinh', 'Tỉnh Cao Bằng', 4),
(31, 'Hải Phòng', 'hai-phong', 'thanh-pho', 'Thành phố Hải Phòng', 31),
(37, 'Ninh Bình', 'ninh-binh', 'tinh', 'Tỉnh Ninh Bình', 37),
(15, 'Yên Bái', 'yen-bai', 'tinh', 'Tỉnh Yên Bái', 15),
(64, 'Gia Lai', 'gia-lai', 'tinh', 'Tỉnh Gia Lai', 64),
(17, 'Hoà Bình', 'hoa-binh', 'tinh', 'Tỉnh Hoà Bình', 17),
(77, 'Bà Rịa - Vũng Tàu', 'ba-ria-vung-tau', 'tinh', 'Tỉnh Bà Rịa - Vũng Tàu', 77),
(96, 'Cà Mau', 'ca-mau', 'tinh', 'Tỉnh Cà Mau', 96),
(74, 'Bình Dương', 'binh-duong', 'tinh', 'Tỉnh Bình Dương', 74),
(92, 'Cần Thơ', 'can-tho', 'thanh-pho', 'Thành phố Cần Thơ', 92),
(46, 'Thừa Thiên Huế', 'thua-thien-hue', 'tinh', 'Tỉnh Thừa Thiên Huế', 46),
(75, 'Đồng Nai', 'dong-nai', 'tinh', 'Tỉnh Đồng Nai', 75),
(82, 'Tiền Giang', 'tien-giang', 'tinh', 'Tỉnh Tiền Giang', 82),
(11, 'Điện Biên', 'dien-bien', 'tinh', 'Tỉnh Điện Biên', 11),
(26, 'Vĩnh Phúc', 'vinh-phuc', 'tinh', 'Tỉnh Vĩnh Phúc', 26),
(49, 'Quảng Nam', 'quang-nam', 'tinh', 'Tỉnh Quảng Nam', 49),
(66, 'Đắk Lắk', 'dak-lak', 'tinh', 'Tỉnh Đắk Lắk', 66),
(19, 'Thái Nguyên', 'thai-nguyen', 'tinh', 'Tỉnh Thái Nguyên', 19),
(30, 'Hải Dương', 'hai-duong', 'tinh', 'Tỉnh Hải Dương', 30),
(95, 'Bạc Liêu', 'bac-lieu', 'tinh', 'Tỉnh Bạc Liêu', 95),
(84, 'Trà Vinh', 'tra-vinh', 'tinh', 'Tỉnh Trà Vinh', 84),
(34, 'Thái Bình', 'thai-binh', 'tinh', 'Tỉnh Thái Bình', 34),
(42, 'Hà Tĩnh', 'ha-tinh', 'tinh', 'Tỉnh Hà Tĩnh', 42),
(58, 'Ninh Thuận', 'ninh-thuan', 'tinh', 'Tỉnh Ninh Thuận', 58),
(87, 'Đồng Tháp', 'dong-thap', 'tinh', 'Tỉnh Đồng Tháp', 87),
(80, 'Long An', 'long-an', 'tinh', 'Tỉnh Long An', 80),
(93, 'Hậu Giang', 'hau-giang', 'tinh', 'Tỉnh Hậu Giang', 93),
(22, 'Quảng Ninh', 'quang-ninh', 'tinh', 'Tỉnh Quảng Ninh', 22),
(25, 'Phú Thọ', 'phu-tho', 'tinh', 'Tỉnh Phú Thọ', 25),
(44, 'Quảng Bình', 'quang-binh', 'tinh', 'Tỉnh Quảng Bình', 44),
(79, 'Hồ Chí Minh', 'ho-chi-minh', 'thanh-pho', 'Thành phố Hồ Chí Minh', 79),
(35, 'Hà Nam', 'ha-nam', 'tinh', 'Tỉnh Hà Nam', 35),
(27, 'Bắc Ninh', 'bac-ninh', 'tinh', 'Tỉnh Bắc Ninh', 27),
(24, 'Bắc Giang', 'bac-giang', 'tinh', 'Tỉnh Bắc Giang', 24),
(6, 'Bắc Kạn', 'bac-kan', 'tinh', 'Tỉnh Bắc Kạn', 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
