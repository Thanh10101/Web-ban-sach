-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 31, 2022 lúc 08:05 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bansach2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `iddathang` int(11) NOT NULL,
  `idnguoidung` int(11) NOT NULL,
  `tong` int(11) NOT NULL,
  `ngay` datetime DEFAULT NULL,
  `trangthai` text NOT NULL,
  `nguoinhan` text NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`iddathang`, `idnguoidung`, `tong`, `ngay`, `trangthai`, `nguoinhan`, `diachi`, `sodienthoai`) VALUES
(70, 11, 650000, '2022-05-31 12:12:43', 'Đang xử lý', 'Nguyễn Trịnh Thành', 'Số 6,đường 67,ấp Giữa ,huyện Củ CHi,tp Hồ Chí Minh', 909090909),
(71, 11, 650000, '2022-05-31 12:14:59', 'Đang xử lý', 'Nguyễn Trịnh Thành', 'Số 6,đường 67,ấp Giữa ,huyện Củ CHi,tp Hồ Chí Minh', 909090909),
(72, 11, 1150000, '2022-05-31 12:16:42', 'Đang xử lý', 'Nguyễn Trịnh Thành', 'Số 6,đường 67,ấp Giữa ,huyện Củ CHi,tp Hồ Chí Minh', 909090909),
(73, 10, 40000, '2022-05-31 12:22:04', 'Đang xử lý', 'Nguyễn Trịnh Thành', 'thanh nha o', 909090909),
(74, 11, 40000, '2022-05-31 12:22:55', 'Đang xử lý', 'Nguyễn Trịnh Thành', 'Số 6,đường 67,ấp Giữa ,huyện Củ CHi,tp Hồ Chí Minh', 909090909),
(75, 11, 300000, '2022-05-31 12:27:21', 'Đang xử lý', 'Nguyễn Trịnh Thành 123', 'Số 6,đường 67,ấp Giữa ,huyện Củ CHi,tp Hồ Chí Minh ,Củ Chi', 909090908),
(76, 11, 90000, '2022-05-31 12:45:24', 'Đang xử lý', 'Nguyễn Trịnh Thành', 'Số 6,đường 67,ấp Giữa ,huyện Củ CHi,tp Hồ Chí Minh', 909090909);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `iddathang` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `tong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `iddathang`, `idsanpham`, `soluong`, `gia`, `tong`) VALUES
(86, 70, 2, 9, 50000, 450000),
(87, 70, 26, 5, 40000, 200000),
(88, 71, 2, 9, 50000, 450000),
(89, 71, 26, 5, 40000, 200000),
(90, 72, 29, 5, 230000, 1150000),
(91, 73, 27, 1, 40000, 40000),
(92, 74, 26, 1, 40000, 40000),
(93, 75, 4, 5, 60000, 300000),
(94, 76, 2, 1, 50000, 50000),
(95, 76, 27, 1, 40000, 40000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `idnguoidung` int(11) NOT NULL,
  `hoten` text NOT NULL,
  `email` text NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `diachi` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`idnguoidung`, `hoten`, `email`, `sodienthoai`, `username`, `password`, `diachi`, `role`) VALUES
(7, 'Nguyễn Trịnh Thành', 'trinhthanh2002@gmai.com', 909090909, 'admin', '$2y$10$G/VEQyG.5iGs8xToEDVdROJSzSg9xdJdZaSxvME9JIi397zMJeOvO', 'Số 6,đường 67,ấp Giữa ,huyện Củ CHi,tp Hồ Chí Minh', 0),
(10, 'Nguyễn Trịnh Thành', 'trinhthanh20022@gmai.com', 909090909, 'Thanh1', '$2y$10$L8YmlmpdoOae/C1hf/9Td.nLtoFaXvCAXu1lIVMTlFEUsTfTFM/Jm', 'thanh nha o', 1),
(11, 'Nguyễn Trịnh Thành', '2thanhvy2002@gmail.com', 909090909, 'Thanh12', '$2y$10$jF5v3oTSOis6Eaee/j9lE.ru4o/qsgZAyeyB44fEMvRfjTBHH3MQi', 'Số 6,đường 67,ấp Giữa ,huyện Củ CHi,tp Hồ Chí Minh', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsanpham` int(11) NOT NULL,
  `tensanpham` text NOT NULL,
  `anh` text NOT NULL,
  `gia` int(11) NOT NULL,
  `idtheloai` int(11) NOT NULL,
  `lanmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `tensanpham`, `anh`, `gia`, `idtheloai`, `lanmua`) VALUES
(2, 'Tổng Bí Thư Trường Trinh sự nghiệp và cuộc đời cách mạng', 'public/images/anh1_2.jpg', 50000, 4, 78),
(3, 'Những trận đánh lịch sử của Quân đội nhân dân Việt Nam', 'public/images/anh1.jpg', 50000, 3, 7),
(4, 'Phạm Văn Đồng và những chặng đường lịch sử', 'public/images/anh1.jpg', 60000, 3, 151),
(26, 'Luyện viết tiếng anh', 'public/images/AnhSanPham1105010122052.jpg', 40000, 5, 435),
(27, 'Trí tuệ của doanh nhân', 'public/images/AnhSanPham1115010237281.jpg', 40000, 5, 285),
(28, 'Tiểu sử Võ Nguyên Giáp', 'public/images/anhVoNguyenGiap.jpg', 50000, 3, 112),
(29, 'lịch sử', 'public/images/anh1_3.jpg', 230000, 5, 461);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `idtheloai` int(11) NOT NULL,
  `tentheloai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`idtheloai`, `tentheloai`) VALUES
(1, 'Hành động'),
(2, 'Trinh thám'),
(3, 'Lịch sử'),
(4, 'Giải trí'),
(5, 'Khoa học');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`iddathang`),
  ADD KEY `dathang_ibfk_1` (`idnguoidung`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddathang` (`iddathang`),
  ADD KEY `giohang_ibfk_2` (`idsanpham`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`idnguoidung`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsanpham`),
  ADD KEY `idtheloai` (`idtheloai`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idtheloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `iddathang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `idnguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idtheloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`idnguoidung`) REFERENCES `nguoidung` (`idnguoidung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`iddathang`) REFERENCES `dathang` (`iddathang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`idsanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idtheloai`) REFERENCES `theloai` (`idtheloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
