-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 23, 2022 lúc 05:38 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `uploadfile`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datafile`
--

CREATE TABLE `datafile` (
  `id` int(50) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(20) NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `datafile`
--

INSERT INTO `datafile` (`id`, `username`, `sdt`, `email`, `content`, `filename`) VALUES
(35, 'Mai Ngọc Bé', 962957900, 'bexiu.lovely@yahoo.c', 'Liên quan vụ án trên, ngày 11-8-2021, Công an tỉnh Lào Cai đã khởi tố vụ án, khởi tố bị can, bắt tạm giam ông Nguyễn Mạnh Thừa, nguyên Giám đốc Công ty TNHH Xây dựng thương mại Lilama để điều tra những vi phạm trong việc thăm dò, khai thác khoáng sản trái phép trên địa bàn. Cơ quan công an xác định, bị can Thừa có trách nhiệm về vi phạm của Công ty Lilama khi tận thu quặng apatit tại xã Đồng Tuyển, thành phố Lào Cai.', 'qua-bo_evjj.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `datafile`
--
ALTER TABLE `datafile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `datafile`
--
ALTER TABLE `datafile`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
