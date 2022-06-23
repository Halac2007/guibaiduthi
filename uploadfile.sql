-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 21, 2022 lúc 11:59 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

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
  `sdt` int(50) NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `datafile`
--

INSERT INTO `datafile` (`id`, `username`, `sdt`, `filename`) VALUES
(10, 'Mai Ngọc Bé', 962957900, 'bao-cao-hieu-qua-tang-truong-website-thong-qua-cms.docx'),
(11, 'Be Mai', 12345678, 'ĐỀ ÁN XÂY DỰNG GIAO DIỆN PLO TIVI.docx'),
(13, 'dgdsg', 0, 'demo-thi-truong-tieu-dung.pdf'),
(14, 'abc', 2147483647, 'final-1.pdf'),
(15, 'abc', 2147483647, 'final-1.pdf'),
(16, 'vxcvcx', 343543543, 'final-1.pdf'),
(17, 'Mai Ngọc ', 5465464, 'ATT00001.pdf'),
(18, 'êre', 4546546, 'final-1.pdf'),
(19, 'fdgdfgf', 2147483647, 'Phan-cong-Le-Tong-ket-Fair-Play-2020.pdf'),
(20, 'ểwr', 56456546, 'final-1.pdf');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
