-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2017 at 04:00 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dongho`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(11) NOT NULL,
  `id_hoadon` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `id_hoadon`, `id_sp`, `soluong`) VALUES
(1, 1, 28, 1),
(2, 1, 27, 1),
(3, 1, 26, 2),
(17, 2, 14, 1),
(18, 2, 15, 3),
(19, 2, 24, 1),
(20, 2, 19, 1),
(21, 3, 25, 1),
(22, 3, 24, 2),
(23, 3, 19, 1),
(24, 4, 23, 1),
(25, 4, 16, 1),
(26, 4, 15, 1),
(27, 5, 15, 1),
(28, 5, 14, 1),
(29, 5, 23, 1),
(30, 6, 22, 1),
(31, 6, 24, 1),
(32, 6, 19, 1),
(33, 7, 22, 2),
(34, 8, 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hangsx`
--

CREATE TABLE `hangsx` (
  `id` int(11) NOT NULL,
  `tenhsx` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hangsx`
--

INSERT INTO `hangsx` (`id`, `tenhsx`) VALUES
(1, 'Orient'),
(2, 'BERING'),
(3, 'FESTINA'),
(4, 'ROMANSON'),
(5, 'FREDERIQUE'),
(6, 'ALPINA'),
(7, 'BREITLING');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_thanhtoan` int(11) NOT NULL,
  `tonggia` int(11) NOT NULL,
  `diachi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thongtinthem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(50) DEFAULT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `id_users`, `created_at`, `updated_at`, `id_thanhtoan`, `tonggia`, `diachi`, `thongtinthem`, `email`, `name`, `sodienthoai`, `trangthai`) VALUES
(1, 1, '2017-01-21 15:34:47', '2017-01-21 10:20:54', 3, 213370000, 'nguyen van linh', NULL, NULL, NULL, NULL, 1),
(2, 4, '2017-01-21 15:38:03', '2017-01-21 10:25:41', 2, 75730000, 'Nguyễn Văn Linh', NULL, 'le_trong_tim_9x@yahoo.com.vn', 'nguyễn xuân thanh', '12345678', 0),
(3, 1, '2017-01-21 15:40:47', '2017-01-21 15:40:47', 3, 23670000, 'nguyen van linh', NULL, NULL, NULL, NULL, 0),
(4, 1, '2017-01-21 15:42:58', '2017-01-21 10:29:38', 3, 84930000, 'nguyen van linh', NULL, NULL, NULL, NULL, 0),
(5, 1, '2017-01-21 17:26:19', '2017-01-21 10:29:23', 3, 66830000, 'nguyen van linh', NULL, NULL, NULL, NULL, 1),
(6, 4, '2017-01-21 17:28:02', '2017-01-21 10:29:17', 3, 22370000, 'Nguyễn Văn Linh', NULL, 'langtuc7@yahoo.com.vn', 'nguyễn xuân thanh', '12345678', 1),
(7, 1, '2017-01-23 20:47:41', '2017-01-23 20:47:41', 3, 10980000, 'nguyen van linh', 'thanh', NULL, NULL, NULL, 0),
(8, 4, '2017-01-23 20:48:52', '2017-01-23 20:48:52', 3, 6020000, 'da nang', 'test', 'nxthanh94@gmail.com', 'nguyen xuan thanh', '0962853212', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(11) NOT NULL,
  `tenloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id`, `tenloai`) VALUES
(1, 'Mới'),
(2, 'Ưa thích'),
(3, 'Khuyến mãi');

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanhoi`
--

INSERT INTO `phanhoi` (`id`, `name`, `email`, `diachi`, `dienthoai`, `noidung`, `created_at`, `updated_at`) VALUES
(1, 'xuan thanh', 'nxthanh94@gmail.com', 'luu quang vu', '12345678', 'sfdfsfs', '2016-06-01 09:10:42', '2016-12-24 15:32:41'),
(2, 'Thanh', 'xuanthanh@gmail.com', 'Luu Quang Vu', '0962853212', 'âsasa', '2016-06-15 16:09:58', '2016-12-24 15:32:41'),
(3, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', NULL, '096283212', 'test noi dung phan hoi trang web', '2017-01-04 16:46:44', '2017-01-04 16:46:44'),
(4, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', NULL, '096283212', 'test noi dung phan hoi trang web test noi dung phan hoi trang web', '2017-01-04 16:48:03', '2017-01-04 16:48:03'),
(5, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', NULL, '12345678', NULL, '2017-01-07 14:39:48', '2017-01-07 14:39:48'),
(6, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', NULL, '096283212', NULL, '2017-01-07 14:42:32', '2017-01-07 14:42:32'),
(7, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-07 14:45:13', '2017-01-07 14:45:13'),
(8, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 22:59:24', '2017-01-07 22:59:24'),
(9, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:00:13', '2017-01-07 23:00:13'),
(10, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:13:48', '2017-01-07 23:13:48'),
(11, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:20:26', '2017-01-07 23:20:26'),
(12, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:23:20', '2017-01-07 23:23:20'),
(13, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:24:53', '2017-01-07 23:24:53'),
(14, 'nguyễn xuân thanh1', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:25:35', '2017-01-07 23:25:35'),
(15, 'nguyễn xuân thanh12', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:26:14', '2017-01-07 23:26:14'),
(16, 'nguyễn xuân thanh12', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:30:02', '2017-01-07 23:30:02'),
(17, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:33:12', '2017-01-07 23:33:12'),
(18, 'nguyễn xuân thanh', 'nxthanh94@gmail.com', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:35:21', '2017-01-07 23:35:21'),
(19, 'nguyễn xuân thanh12', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:37:10', '2017-01-07 23:37:10'),
(20, 'nguyễn xuân thanh', 'nxthanh94@gmail.com', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:39:31', '2017-01-07 23:39:31'),
(21, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:40:27', '2017-01-07 23:40:27'),
(22, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:45:47', '2017-01-07 23:45:47'),
(23, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-07 23:46:30', '2017-01-07 23:46:30'),
(24, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-08 00:11:26', '2017-01-08 00:11:26'),
(25, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 00:17:18', '2017-01-08 00:17:18'),
(26, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 00:23:53', '2017-01-08 00:23:53'),
(27, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-08 00:27:16', '2017-01-08 00:27:16'),
(28, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 00:41:35', '2017-01-08 00:41:35'),
(29, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-08 00:53:52', '2017-01-08 00:53:52'),
(30, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 01:07:57', '2017-01-08 01:07:57'),
(31, 'Nguyen xuan thanh12', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 01:13:57', '2017-01-08 01:13:57'),
(32, 'Nguyen xuan thanh12', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 01:18:27', '2017-01-08 01:18:27'),
(33, 'Nguyen xuan thanh12', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 01:19:32', '2017-01-08 01:19:32'),
(34, 'Nguyen xuan thanh12', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 01:31:22', '2017-01-08 01:31:22'),
(35, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 01:38:01', '2017-01-08 01:38:01'),
(36, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 01:39:37', '2017-01-08 01:39:37'),
(37, 'Nguyen xuan thanh9', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 01:44:04', '2017-01-08 01:44:04'),
(38, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-08 01:48:57', '2017-01-08 01:48:57'),
(39, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-08 01:49:05', '2017-01-08 01:49:05'),
(40, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', 'fdfdf', NULL, '2017-01-08 01:51:20', '2017-01-08 01:51:20'),
(41, 'Nguyen xuan thanh9', 'nxthanh94@gmail.com', 'fffgfg', '096283212', NULL, '2017-01-08 01:51:43', '2017-01-08 01:51:43'),
(42, 'Nguyen xuan thanh9', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 01:56:14', '2017-01-08 01:56:14'),
(43, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 02:03:43', '2017-01-08 02:03:43'),
(44, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 02:03:55', '2017-01-08 02:03:55'),
(45, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dsd', '096283212', NULL, '2017-01-08 02:04:23', '2017-01-08 02:04:23'),
(46, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', 'fdfdf', NULL, '2017-01-08 02:05:51', '2017-01-08 02:05:51'),
(47, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', 'fdfdf', NULL, '2017-01-08 02:06:33', '2017-01-08 02:06:33'),
(48, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', 'fdfdf', NULL, '2017-01-08 02:07:12', '2017-01-08 02:07:12'),
(49, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 02:08:22', '2017-01-08 02:08:22'),
(50, 'Nguyen xuan thanh12', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 02:09:57', '2017-01-08 02:09:57'),
(51, 'Nguyen xuan thanh12', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 02:12:40', '2017-01-08 02:12:40'),
(52, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 02:13:53', '2017-01-08 02:13:53'),
(53, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', 'fdfdf', NULL, '2017-01-08 02:17:49', '2017-01-08 02:17:49'),
(54, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', 'fdfdf', NULL, '2017-01-08 02:20:01', '2017-01-08 02:20:01'),
(55, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', 'fdfdf', NULL, '2017-01-08 02:24:07', '2017-01-08 02:24:07'),
(56, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 02:24:45', '2017-01-08 02:24:45'),
(57, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 02:27:27', '2017-01-08 02:27:27'),
(58, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 03:49:35', '2017-01-08 03:49:35'),
(59, 'Nguyen xuan thanh', 'gdfdf', 'nguyen van linh', '096283212', NULL, '2017-01-08 03:52:20', '2017-01-08 03:52:20'),
(60, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 08:07:10', '2017-01-08 08:07:10'),
(61, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:25:03', '2017-01-08 08:25:03'),
(62, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:25:48', '2017-01-08 08:25:48'),
(63, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:27:47', '2017-01-08 08:27:47'),
(64, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:30:04', '2017-01-08 08:30:04'),
(65, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:30:50', '2017-01-08 08:30:50'),
(66, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:31:09', '2017-01-08 08:31:09'),
(67, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:32:14', '2017-01-08 08:32:14'),
(68, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:37:53', '2017-01-08 08:37:53'),
(69, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:38:35', '2017-01-08 08:38:35'),
(70, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:39:04', '2017-01-08 08:39:04'),
(71, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:40:54', '2017-01-08 08:40:54'),
(72, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:41:46', '2017-01-08 08:41:46'),
(73, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:42:17', '2017-01-08 08:42:17'),
(74, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:42:55', '2017-01-08 08:42:55'),
(75, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:43:27', '2017-01-08 08:43:27'),
(76, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'dfdfd', '096283212', NULL, '2017-01-08 08:45:21', '2017-01-08 08:45:21'),
(77, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 08:46:10', '2017-01-08 08:46:10'),
(78, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 08:46:37', '2017-01-08 08:46:37'),
(79, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 08:48:11', '2017-01-08 08:48:11'),
(80, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 08:50:31', '2017-01-08 08:50:31'),
(81, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 08:52:14', '2017-01-08 08:52:14'),
(82, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 09:05:32', '2017-01-08 09:05:32'),
(83, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 09:24:07', '2017-01-08 09:24:07'),
(84, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 09:28:41', '2017-01-08 09:28:41'),
(85, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 09:43:49', '2017-01-08 09:43:49'),
(86, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 09:52:57', '2017-01-08 09:52:57'),
(87, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 09:58:00', '2017-01-08 09:58:00'),
(88, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 09:59:38', '2017-01-08 09:59:38'),
(89, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 10:02:21', '2017-01-08 10:02:21'),
(90, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 10:03:44', '2017-01-08 10:03:44'),
(91, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 10:05:13', '2017-01-08 10:05:13'),
(92, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 10:33:58', '2017-01-08 10:33:58'),
(93, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 10:37:53', '2017-01-08 10:37:53'),
(94, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 11:20:00', '2017-01-08 11:20:00'),
(95, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 11:22:06', '2017-01-08 11:22:06'),
(96, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', NULL, '096283212', 'jhgfds', '2017-01-08 05:20:47', '2017-01-08 05:20:47'),
(97, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 12:31:34', '2017-01-08 12:31:34'),
(98, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-08 15:09:42', '2017-01-08 15:09:42'),
(99, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 15:13:46', '2017-01-08 15:13:46'),
(100, 'nguyễn xuân thanh', 'nxthanh94@gmail.com', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-08 15:16:32', '2017-01-08 15:16:32'),
(101, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 15:18:52', '2017-01-08 15:18:52'),
(102, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', NULL, '096283212', '<p><img alt="" src="/storage/app/files/images/12%20(2).jpg" style="height:200px; width:200px" />vao jkklfghjkfcghjkljhghjkjhjjhjhjfdfjhtyuiuytrfjihjgfdssdfghjhgfdsdfghj</p>\r\n', '2017-01-08 09:10:35', '2017-01-08 09:10:35'),
(103, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh123', '12345678', NULL, '2017-01-08 17:35:29', '2017-01-08 17:35:29'),
(104, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh123', '12345678', NULL, '2017-01-08 17:39:13', '2017-01-08 17:39:13'),
(105, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-08 17:39:35', '2017-01-08 17:39:35'),
(106, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh12', '12345678', NULL, '2017-01-08 17:41:20', '2017-01-08 17:41:20'),
(107, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 17:43:33', '2017-01-08 17:43:33'),
(108, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-08 17:46:55', '2017-01-08 17:46:55'),
(109, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-08 18:08:56', '2017-01-08 18:08:56'),
(110, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-08 18:10:02', '2017-01-08 18:10:02'),
(111, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-09 13:23:06', '2017-01-09 13:23:06'),
(112, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-09 13:24:59', '2017-01-09 13:24:59'),
(113, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-09 13:25:34', '2017-01-09 13:25:34'),
(114, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-09 13:26:06', '2017-01-09 13:26:06'),
(115, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-09 13:26:35', '2017-01-09 13:26:35'),
(116, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-09 13:28:02', '2017-01-09 13:28:02'),
(117, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-09 13:28:50', '2017-01-09 13:28:50'),
(118, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-09 13:30:55', '2017-01-09 13:30:55'),
(119, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-09 13:50:31', '2017-01-09 13:50:31'),
(120, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-09 13:51:48', '2017-01-09 13:51:48'),
(121, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', 'ssas', NULL, '2017-01-09 13:52:30', '2017-01-09 13:52:30'),
(122, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '12345', NULL, '2017-01-09 21:54:07', '2017-01-09 21:54:07'),
(123, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '12345', NULL, '2017-01-09 21:56:48', '2017-01-09 21:56:48'),
(124, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '12345', NULL, '2017-01-09 21:56:58', '2017-01-09 21:56:58'),
(125, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '12345', NULL, '2017-01-09 21:57:03', '2017-01-09 21:57:03'),
(126, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-09 21:57:29', '2017-01-09 21:57:29'),
(127, 'nguyen van a', 'rieng@gmail.com', 'nguyen van linh-haicchau', '12456789', NULL, '2017-01-10 16:03:01', '2017-01-10 16:03:01'),
(128, 'thanh nguyen', 'ri123eng@gmail.com', 'nguyen van linh-haicchau', '096283212', NULL, '2017-01-10 16:34:56', '2017-01-10 16:34:56'),
(129, 'thanh nguyen', 'ri123eng@gmail.com', 'nguyen van linh-haicchau', '096283212', NULL, '2017-01-10 17:04:40', '2017-01-10 17:04:40'),
(130, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-10 17:16:30', '2017-01-10 17:16:30'),
(131, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-10 17:17:49', '2017-01-10 17:17:49'),
(132, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', 'nguyen van linh', '096283212', NULL, '2017-01-10 17:19:42', '2017-01-10 17:19:42'),
(133, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-11 11:16:02', '2017-01-11 11:16:02'),
(134, 'Nguyen xuan thanh', 'nxthanh94@gmail.com', NULL, '096283212', '<p>gdgd</p>\r\n', '2017-01-11 08:47:43', '2017-01-11 08:47:43'),
(135, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-13 15:40:29', '2017-01-13 15:40:29'),
(136, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-18 19:15:57', '2017-01-18 19:15:57'),
(137, 'nguyễn xuân thanh', 'nxthanh94@gmail.com', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-18 19:30:08', '2017-01-18 19:30:08'),
(138, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-21 15:37:57', '2017-01-21 15:37:57'),
(139, 'nguyễn xuân thanh', 'langtuc7@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-21 17:27:54', '2017-01-21 17:27:54'),
(140, 'nguyen xuan thanh', 'nxthanh94@gmail.com', 'da nang', '0962853212', NULL, '2017-01-23 20:48:37', '2017-01-23 20:48:37'),
(141, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-23 21:11:06', '2017-01-23 21:11:06'),
(142, 'nguyễn xuân thanh', 'le_trong_tim_9x@yahoo.com.vn', 'Nguyễn Văn Linh', '12345678', NULL, '2017-01-23 21:12:04', '2017-01-23 21:12:04'),
(143, 'nguyễn xuân thanh', 'nxthanh941@gmail.com', 'Nguyễn Văn Linh', '0962853212', NULL, '2017-01-23 21:14:20', '2017-01-23 21:14:20'),
(144, 'nguyễn xuân thanh', 'nxthanh941@gmail.com', 'Nguyễn Văn Linh', '0962853212', NULL, '2017-01-23 21:15:23', '2017-01-23 21:15:23'),
(145, 'nguyễn xuân thanh', 'nxthanh94@gmail.com1', 'Nguyễn Văn Linh', '0962853212', NULL, '2017-01-23 21:25:14', '2017-01-23 21:25:14'),
(146, 'nguyễn xuân thanh', 'nxthanh941@gmail.com', 'Nguyễn Văn Linh', '0962853212', NULL, '2017-01-23 21:25:47', '2017-01-23 21:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` int(11) NOT NULL,
  `tenpq` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `tenpq`) VALUES
(1, 'Admin'),
(2, 'Mod'),
(3, 'Thành viên'),
(4, 'Khách vãng lai');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_hangsx` int(11) NOT NULL,
  `id_loaisp` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `hinhanh` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `kieudang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `matkinh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `duongkinh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dochiunuoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `id_hangsx`, `id_loaisp`, `gia`, `hinhanh`, `mota`, `soluong`, `kieudang`, `vo`, `day`, `matkinh`, `duongkinh`, `dochiunuoc`) VALUES
(1, 'Bering 32139-702', 2, 1, 10000, '151e56c459970230807b8ee2ca247ffc.png', 'Đồng hồ Bering 32139-702 với xuất xứ Đan Mạch, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 10, 'Nam', 'Thép không gỉ', 'Ceremic', 'Sapphire', '39 mm', '5 atm'),
(2, 'Bering 32430-742', 2, 2, 9280000, '151e56c459970230807b8ee2ca247ffc.png', 'Đồng hồ Bering 32430-742 với xuất xứ Đan Mạch, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 9, 'Nữ', 'Thép không gỉ', 'Ceramic', 'Sapphire', '30 mm', '5 atm'),
(3, 'Frederique Constant FC-200S5S36', 5, 2, 11630000, 'c8c9961955a5bc0a2a2300024997abfc.png', 'Đồng hồ Frederique Constant FC-200S5S36 với xuất xứ Thụy Sỹ, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 15, 'Nam', 'Thép không gỉ', 'Dây da', 'Sapphire', '39 mm', '3 atm'),
(4, 'Festina F6851/2', 3, 2, 7490000, '8141c52ab419618f3f6ed3071fd02781.png', 'Đồng hồ Festina F6851/2 với xuất xứ Tây Ban Nha, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 20, 'Nam', 'Thép không gỉ', 'Dây da', 'Kính cứng', '40 x 7 mm', '3 atm'),
(5, 'Festina F6840/4', 3, 1, 2910000, '19d890da0dd5b187b558910904f1c8d7.png', 'Đồng hồ Festina F6840/4  với xuất xứ Tây Ban Nha, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 17, 'Nam', 'Thép không gỉ', 'Dây da', 'Kính cứng', '40 x 7 mm', '3 atm'),
(6, 'Festina F6843/2', 3, 1, 4380000, 'a90a83865cafeef2610fe63142430ad1.png', 'Đồng hồ Festina F6843/2  với xuất xứ Tây Ban Nha, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 19, 'Nam', 'Thép không gỉ', 'Thép không gỉ', 'Kính cứng', '44 mm', '10 atm'),
(7, 'Festina F16860/3', 3, 2, 5060000, 'c8c9961955a5bc0a2a2300024997abfc.png', 'Đồng hồ Festina F16860/3 với xuất xứ Tây Ban Nha, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 23, 'Nam', 'Thép không gỉ', 'Dây da', 'Kính cứng', '44 x 12 mm', '10 atm'),
(8, 'Romanson CL5A10MGWH+CL5A10L', 4, 1, 10990000, '8141c52ab419618f3f6ed3071fd02781.png', 'Đồng hồ đôi Romanson CL5A10MGWH+CL5A10LGWH với xuất xứ Hàn Quốc, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 15, 'Nam + Nữ', 'Thép không gỉ', 'Dây Da', 'Sapphire', '40-32 mm', '5 atm'),
(9, 'Romanson CM5A11MGWH+CM5A11L', 4, 3, 13130000, '19d890da0dd5b187b558910904f1c8d7.png', 'Đồng hồ đôi Romanson CM5A11MGWH+CM5A11LGWH với xuất xứ Hàn Quốc, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 16, 'Nam + Nữ', 'Thép không gỉ / mạ vàng PVD', 'Thép không gỉ / mạ vàng PVD', 'Sapphire', '38-28 mm', '5 atm'),
(10, 'Romanson DL9782MWBK+DL9782L', 4, 3, 12900000, 'a90a83865cafeef2610fe63142430ad1.png', 'Đồng hồ đôi Romanson DL9782MWBK+DL9782LWBK với xuất xứ Hàn Quốc, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 4, ' Nam + Nữ', 'Thép không gỉ', 'Dây da', 'Cứng', '37-26 mm', '3 atm'),
(11, 'Romanson TM4225MWWH+TM4225L', 4, 2, 8060000, 'd07f775275f4090f243a41b3b3b3af3f.png', 'Đồng hồ đôi Romanson TM4225MWWH+TM4225LWWH với xuất xứ Hàn Quốc, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 4, 'Nam + Nữ', 'Thép không gỉ', 'Thép không gỉ', 'Cứng', '38-28 mm', '3 atm'),
(12, 'Romanson TM4259MWBK+TM4259L', 4, 2, 7820000, 'd07f775275f4090f243a41b3b3b3af3f.png', 'Đồng hồ đôi Romanson TM4259MWBK+TM4259LWBK với xuất xứ Hàn Quốc, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 8, 'Nam + Nữ', 'Thép không gỉ', 'Thép không gỉ', 'Cứng', '40-28 mm', '3 atm'),
(13, 'ALPINA AL-525S4E6', 6, 2, 2990000, 'c8c9961955a5bc0a2a2300024997abfc.png', 'Đồng hồ ALPINA AL-525S4E6 với xuất Thụy \r\nSỹ, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 12, 'Nam', 'Thép không gỉ', 'Da', 'Sapphire', '41.5 mm ', '5 atm'),
(14, 'ALPINA AL-750VG4E6', 6, 1, 4190000, '8141c52ab419618f3f6ed3071fd02781.png', 'Đồng hồ ALPINA AL-750VG4E6 với xuất xứ Thụy Sỹ, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 16, 'Nam', 'Thép không gỉ', 'Da', 'Sapphire', '41.5 mm ', '5 atm'),
(15, 'ALPINA AL-280NS4S6', 6, 1, 19490000, '1e69ed7c0438d4dea75f1706602fd11e.png', 'Đồng hồ ALPINA AL-280NS4S6 với xuất xứ Thụy Sỹ, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 8, 'Nam', 'Thép không gỉ', 'Da', 'Sapphire', '44 mm ', '10 atm'),
(16, 'ALPINA AL-280NS4S6B', 6, 3, 22290000, 'c8c9961955a5bc0a2a2300024997abfc.png', 'Đồng hồ ALPINA AL-280NS4S6B với xuất xứ Thụy Sỹ, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 21, 'Nam', 'Thép không gỉ', 'Thép không gỉ', 'Sapphire', '44 mm', '10 atm'),
(17, 'Orient SDB09002B0', 1, 2, 3990000, '151e56c459970230807b8ee2ca247ffc.png', 'Đồng hồ Orient SDB09002B0 với xuất xứ Nhật Bản, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 16, 'Nam', 'Thép không gỉ', 'Thép không gỉ', 'Kính sapphire', '40 mm x 12 mm', '10 atm'),
(18, 'Orient FAC00007W0', 1, 3, 4990000, 'd07f775275f4090f243a41b3b3b3af3f.png', 'Đồng hồ Orient FAC00007W0 với xuất xứ Nhật Bản, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 23, 'Nam', 'Thép không gỉ', 'Dây da', 'Kính lồi', ' 40 x 12 mm', '5 atm'),
(19, 'Orient FUY03002W0', 1, 2, 4990000, '151e56c459970230807b8ee2ca247ffc.png', 'Đồng hồ Orient FUY03002W0 với xuất xứ Nhật Bản, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 4, 'Nam', 'Thép không gỉ', 'Thép không gỉ', 'Cứng', '43 mm', '5 atm'),
(20, 'Hoàng Sa, Trường Sa C4471/P', 4, 3, 8800000, 'd07f775275f4090f243a41b3b3b3af3f.png', 'Đồng hồ phiên bản Hoàng Sa, Trường Sa C4471/P kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 14, 'Nam', 'Thép không gỉ', 'Dây da', 'Sapphire', '40,5 mm', '5 atm'),
(21, 'Romanson Special', 4, 3, 4500000, 'a90a83865cafeef2610fe63142430ad1.png', 'Đồng hồ Romanson Special Edition 2015 với xuất xứ Hàn Quốc, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng', 23, 'Nam', 'Thép không gỉ', 'Da thật', 'Sapphire', '40 mm', '5 atm'),
(22, 'Festina F6850/1', 3, 1, 5490000, 'd07f775275f4090f243a41b3b3b3af3f.png', 'Đồng hồ Festina F6850/1 với xuất xứ Tây Ban Nha, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng', 7, 'Nam', 'Thép không gỉ', 'Thép không gỉ', 'Kính cứng', '42 x 13 mm', '10 atm'),
(23, 'ALPINA AL-525LB4V36B', 6, 1, 43150000, '19d890da0dd5b187b558910904f1c8d7.png', 'Đồng hồ ALPINA AL-525LB4V36B với xuất xứ Thụy Sỹ , kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng', 24, 'Nam', 'Thép không gỉ', 'Thép không gỉ', 'Sapphire', '44 mm ', '30 atm'),
(24, 'Orient FFD0J001W0', 1, 2, 8080000, '151e56c459970230807b8ee2ca247ffc.png', 'Đồng hồ Orient nam FFD0J001W0 với xuất xứ Nhật Bản, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 22, 'Nam', 'Thép không gỉ', 'Da thật', 'Kính cứng', '40 x 7 mm', '3 atm'),
(25, 'Orient FUNE7005W0', 1, 2, 2520000, '1e69ed7c0438d4dea75f1706602fd11e.png', 'Đồng hồ Orient nam FUNE7005W0 với xuất xứ Nhật Bản, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 0, 'Nam', 'Thép không gỉ', 'Thép không gỉ', 'Kính cứng', 'VGA (0.3 Mpx)', '3 atm'),
(26, 'Bering 14531', 2, 2, 6020000, '8141c52ab419618f3f6ed3071fd02781.png', 'Đồng hồ Bering 14531-402 với xuất xứ Đan Mạch, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 16, 'Nữ', 'Thép không gỉ', 'Da thật', 'Sapphire', '31 mm', '5 atm'),
(27, 'Breitling W1331012', 7, 3, 197340000, '151e56c459970230807b8ee2ca247ffc.png', 'Đồng hồ Breitling W1331012/BD92/385A với xuất xứ Thụy Sỹ, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 26, 'Nam', 'Thép không gỉ', 'Thép không gỉ', 'Sapphire', '38 mm / Độ dày : 14.8 mm', '10 atm'),
(28, 'Breitling A4531012', 7, 3, 3990000, '19d890da0dd5b187b558910904f1c8d7.png', 'Đồng hồ Breitling A4531012/G751/437X/A20BA.1 với xuất xứ Thụy Sỹ, kiểu dáng trẻ trung năng động, mang lại sự lịch lãm cho người sử dụng.', 23, 'Nam', 'Thép không gỉ', 'Da', 'Sapphire', '43 mm / Độ dày : 12.8 mm', '10 atm');

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id` int(11) NOT NULL,
  `loaithanhtoan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thanhtoan`
--

INSERT INTO `thanhtoan` (`id`, `loaithanhtoan`) VALUES
(1, 'Ngân lượng'),
(2, 'Tiền mặt'),
(3, 'ATM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_phanquyen` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `id_phanquyen`, `email`, `diachi`, `dienthoai`) VALUES
(1, 'admin', 'admin', '$2y$10$sjNjL2NxiR.y8yWyi376z.VXYc6n7N4m0duIVFse4Ogelq5/qOh/m', 1, 'nxthanh94@gmail.com', 'nguyen van linh', '0962853212'),
(2, 'Nguyen xuan thanh', 'xthanh', '$2y$10$NRYHfe7jgrWcD16AdMRQeemV/0g7KHG.Vw001yxzENk.L31Jz9bne', 3, 'nxthanh94@gmail.com', 'nguyen van linh', '0962853212'),
(3, 'xuan thanh', 'thanh1', '$2y$10$sjNjL2NxiR.y8yWyi376z.VXYc6n7N4m0duIVFse4Ogelq5/qOh/m', 2, 'nxthanh94@gmail.com', 'nguyen van linh', '1234567890'),
(4, 'Khách vãng lai', 'Khách vãng lai', '123456', 4, 'khachvanglai@gmail.com', 'Khách vãng lai', '12345678'),
(5, 'Nguyen xuan thanh', 'thanh123', '$2y$10$BnEXFrNIPoHF37jQwnnpcON0p/6UftNfoLhhORbW9T01Zgj3MCHIa', 3, 'nxthanh94@gmail.com', 'nguyen van linh', '0962853212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hoadon` (`id_hoadon`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `hangsx`
--
ALTER TABLE `hangsx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_thanhtoan` (`id_thanhtoan`),
  ADD KEY `id_users_2` (`id_users`),
  ADD KEY `created_at` (`created_at`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hangsx` (`id_hangsx`),
  ADD KEY `id_loaisp` (`id_loaisp`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phanquyen` (`id_phanquyen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `hangsx`
--
ALTER TABLE `hangsx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`id_hoadon`) REFERENCES `hoadon` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`id_thanhtoan`) REFERENCES `thanhtoan` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_loaisp`) REFERENCES `loaisp` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`id_hangsx`) REFERENCES `hangsx` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_phanquyen`) REFERENCES `phanquyen` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
