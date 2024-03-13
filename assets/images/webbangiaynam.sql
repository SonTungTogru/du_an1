-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3308:3308
-- Thời gian đã tạo: Th10 27, 2023 lúc 04:24 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbangiaynam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Thanh toán trực tiếp \r\n1.Chuyển khoản\r\n2.Thanh toán online',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Đơn hàng mới\r\n1.Đang xử lý\r\n2.Đang giao hàng\r\n3.Đã giao '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`) VALUES
(44, 4, 'Ngô Ngọc Luật', 'Hà Nội, Việt Nam', '0768955786', 'ngocluatngo5@gmai.com', 0, '09:28:36pm 24/11/2023', 9000000, 0),
(45, 4, 'Ngô Ngọc Luật', 'Hà Nội, Việt Nam', '0768955786', 'ngocluatngo5@gmai.com', 0, '09:29:26pm 24/11/2023', 9000000, 0),
(46, 4, 'Ngô Ngọc Luật', 'Hà Nội, Việt Nam', '0768955786', 'ngocluatngo5@gmai.com', 0, '06:37:36am 25/11/2023', 66800000, 0),
(48, 4, 'Ngô Ngọc Luật', 'Hà Nội, Việt Nam', '0768955786', 'ngocluatngo5@gmai.com', 0, '01:24:28am 26/11/2023', 1060000, 0),
(49, 4, 'Ngô Ngọc Luật', 'Hà Nội, Việt Nam', '0768955786', 'ngocluatngo5@gmai.com', 0, '01:46:40am 26/11/2023', 35000000, 0),
(50, 4, 'Ngô Ngọc Luật', 'Hà Nội, Việt Nam', '0768955786', 'ngocluatngo5@gmai.com', 0, '02:11:44am 26/11/2023', 50000000, 0),
(51, 4, 'Ngô Ngọc Luật', 'Hà Nội, Việt Nam', '0768955786', 'ngocluatngo5@gmai.com', 0, '06:38:54pm 26/11/2023', 25000000, 0),
(52, 4, 'Ngô Ngọc Luật', 'Hà Nội, Việt Nam', '0768955786', 'ngocluatngo5@gmai.com', 0, '09:00:52pm 26/11/2023', 20000000, 0),
(53, 4, 'Ngô Ngọc Luật', 'Hà Nội, Việt Nam', '0768955786', 'ngocluatngo5@gmai.com', 0, '09:48:20pm 26/11/2023', 23600000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idspbt` int(11) NOT NULL,
  `status_bl` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `ngaybinhluan`, `iduser`, `idspbt`, `status_bl`) VALUES
(12, 'Sản phẩm đẹp', '22/11/2023', 4, 18, b'01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idspbt` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `namepro` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `mau` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idspbt`, `img`, `namepro`, `price`, `mau`, `size`, `soluong`, `thanhtien`, `idbill`) VALUES
(105, 4, 19, 'giay-mlb-liner-mid-monogram-ny.png', 'Giày MLB Liner Mid Monogram NY', 1800000, 'black', 38, 5, 9000000, 45),
(106, 4, 15, 'adidas-superstar-adifom-trang.png', 'Giày Adidas Superstar Adifom Trắng Siêu Cấp', 900000, 'red', 38, 2, 66800000, 46),
(107, 4, 16, '126.png', 'Giày Nike Air Jordan 1 Retro High Dior Like Auth 99%', 5000000, 'Green', 38, 13, 66800000, 46),
(108, 4, 25, 'giay-converse-chuck-taylor-all-star-1970s-white-high-trang-co-cao-1.png', 'Giày Converse Chuck Taylor All Star 1970s White – High Trắng Cổ Cao', 530000, 'yellow', 38, 2, 1060000, 48),
(109, 4, 16, '126.png', 'Giày Nike Air Jordan 1 Retro High Dior Like Auth 99%', 5000000, 'Green', 38, 7, 35000000, 49),
(110, 4, 16, '126.png', 'Giày Nike Air Jordan 1 Retro High Dior Like Auth 99%', 5000000, 'Green', 38, 10, 50000000, 50),
(111, 4, 16, '126.png', 'Giày Nike Air Jordan 1 Retro High Dior Like Auth 99%', 5000000, 'Green', 38, 5, 25000000, 51),
(112, 4, 16, '126.png', 'Giày Nike Air Jordan 1 Retro High Dior Like Auth 99%', 5000000, 'Green', 38, 4, 20000000, 52),
(113, 4, 25, 'giay-converse-chuck-taylor-all-star-1970s-white-high-trang-co-cao-1.png', 'Giày Converse Chuck Taylor All Star 1970s White – High Trắng Cổ Cao', 530000, 'yellow', 38, 5, 23600000, 53),
(114, 4, 23, '91.png', 'Giày MLB Bigball Chunky Boston Red Sox Màu Trắng Rep 1:1', 950000, 'red', 39, 1, 23600000, 53),
(115, 4, 16, '126.png', 'Giày Nike Air Jordan 1 Retro High Dior Like Auth 99%', 5000000, 'Green', 38, 4, 23600000, 53);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `namedm` varchar(255) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `namedm`, `status`) VALUES
(18, 'Giày Nike', b'1'),
(19, 'Giày Converse', b'1'),
(20, 'Giày MLB', b'1'),
(21, 'Giày Adidas', b'1'),
(22, 'Giày Vans', b'1'),
(23, 'Giày GUCCI', b'1'),
(24, 'Giày LV', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausp`
--

CREATE TABLE `mausp` (
  `id` int(10) NOT NULL,
  `mau` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mausp`
--

INSERT INTO `mausp` (`id`, `mau`) VALUES
(1, 'Green'),
(2, 'yellow'),
(3, 'black'),
(4, 'red');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `namepro` varchar(255) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `discount` int(11) NOT NULL DEFAULT 0,
  `img` varchar(255) NOT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `status` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `namepro`, `price`, `discount`, `img`, `mota`, `luotxem`, `iddm`, `status`) VALUES
(37, 'Giày Adidas Superstar Adifom Đen Siêu Cấp', 850000, 900000, 'adidas-superstar-adifom-den.png', 'Giày Adidas Superstar Adifom Đen Siêu Cấp với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.', 0, 21, b'01'),
(38, 'Giày Adidas Superstar Adifom Trắng Siêu Cấp', 880000, 900000, 'adidas-superstar-adifom-trang.png', 'Giày Adidas Superstar Adifom Trắng Siêu Cấp với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.', 4, 21, b'01'),
(39, 'Giày Nike Air Jordan 1 Retro High Dior Like Auth 99%', 2500000, 5000000, '126.png', 'Giày Nike Air Jordan 1 Retro High Dior Like Auth 99% với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.', 12, 18, b'01'),
(40, 'Giày MLB Liner Mid Monogram NY', 860000, 1800000, 'giay-mlb-liner-mid-monogram-ny.png', 'Giày MLB Liner Mid Monogram NY với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.', 24, 20, b'01'),
(42, 'Giày Louis Vuitton LV Trainer Monogram Denim White Blue', 900000, 2000000, 'giay-louis-vuitton-lv-trainer-monogram-denim-white-blue.png', 'Giày Louis Vuitton LV Trainer Monogram Denim White Blue với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.', 1, 24, b'01'),
(43, ' Giày LV Trainer Monogram Denim Đen Trắng Siêu Cấp Like Auth', 900000, 2000000, '1-1.png', 'Giày LV Trainer Monogram Denim Đen Trắng với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.', 0, 24, b'01'),
(44, 'Giày Louis Vuitton LV Trainer Sneaker 1A9JHD Màu Trắng Vàng', 900000, 2000000, 'louis-vuitton-lv-trainer-sneaker-1a9jhd-mau-trang-vang.png', 'Giày Louis Vuitton LV Trainer Sneaker 1A9JHD Màu Trắng Vàng với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.', 2, 24, b'01'),
(45, 'Giày MLB Bigball Chunky Boston Red Sox Màu Trắng Rep 1:1', 950000, 0, '91.png', 'Giày MLB Bigball Chunky Boston Red Sox Màu Trắng Rep 1:1 với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.', 10, 20, b'01'),
(46, 'Giày Converse Chuck Taylor All Star 1970s White – High Trắng Cổ Cao', 530000, 0, 'giay-converse-chuck-taylor-all-star-1970s-white-high-trang-co-cao-1.png', 'Giày Converse Chuck Taylor All Star 1970s White – High Trắng Cổ cao với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.', 11, 19, b'01'),
(47, 'Giày Converse Chuck Taylor All Star 1970s White – High Trắng Cổ Cao', 820000, 1600000, 'giay-af1-x-louis-vuitton-white-brown.png', 'Giày AF1 x Louis Vuitton White Brown là phiên bản độc lạ hiện nay ở Việt Nam ít ai có. Shop nhập về được số lượng ít, giá cực tốt cho mọi người trải nghiệm.', 0, 23, b'01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id` int(10) NOT NULL,
  `size` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `size`) VALUES
(1, 38),
(2, 39),
(3, 41),
(4, 42);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spbt`
--

CREATE TABLE `spbt` (
  `id` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `idmau` int(10) NOT NULL,
  `idsize` int(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `status` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `spbt`
--

INSERT INTO `spbt` (`id`, `idpro`, `idmau`, `idsize`, `soluong`, `status`) VALUES
(4, 37, 2, 1, 4, b'01'),
(5, 37, 2, 3, 5, b'01'),
(6, 37, 3, 3, 3, b'01'),
(7, 37, 3, 1, 1, b'01'),
(8, 37, 3, 2, 1, b'01'),
(9, 37, 2, 1, 2, b'01'),
(10, 37, 2, 1, 2, b'01'),
(11, 37, 1, 1, 2, b'01'),
(12, 37, 4, 2, 1, b'01'),
(13, 37, 1, 2, 2, b'01'),
(14, 37, 2, 1, 2, b'01'),
(15, 38, 4, 1, 22, b'01'),
(16, 39, 1, 1, 12, b'01'),
(17, 37, 4, 1, 43, b'01'),
(18, 38, 3, 1, 30, b'01'),
(19, 40, 3, 1, 10, b'01'),
(20, 38, 1, 2, 1, b'01'),
(21, 40, 2, 3, 20, b'01'),
(22, 44, 2, 2, 5, b'01'),
(23, 45, 4, 2, 20, b'01'),
(24, 43, 3, 2, 10, b'01'),
(25, 46, 2, 1, 3, b'01'),
(26, 42, 1, 2, 10, b'01'),
(27, 47, 3, 2, 10, b'01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `username`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(4, 'Ngô Ngọc Luật', '123456', 'ngocluatngo5@gmai.com', 'Hà Nội, Việt Nam', '0768955786', 0),
(5, 'Nguyễn Thành Nam', '123456', 'namnt@gmai.com', 'Hà Giang, Việt Nam', '0938429832', 0),
(6, 'Nguyễn Thành An', '123456', 'annt@gmai.com', 'Vincent, Italia', '0932452944', 0),
(7, 'Nguyễn Thành Đông', '123456', 'dong07@gmai.com', 'Đà Nẵng, Việt Nam', '0768955786', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_bill_taikhoan` (`iduser`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_binhluan_taikhoan` (`iduser`),
  ADD KEY `lk_binhluan_spbt` (`idspbt`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_cart_taikhoan` (`iduser`),
  ADD KEY `lk_cart_bill` (`idbill`),
  ADD KEY `lk_cart_spbt` (`idspbt`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mausp`
--
ALTER TABLE `mausp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `spbt`
--
ALTER TABLE `spbt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_spbt_sanpham` (`idpro`),
  ADD KEY `lk_spbt_mau` (`idmau`),
  ADD KEY `lk_spbt_size` (`idsize`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `mausp`
--
ALTER TABLE `mausp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `spbt`
--
ALTER TABLE `spbt`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `lk_bill_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_binhluan_spbt` FOREIGN KEY (`idspbt`) REFERENCES `spbt` (`id`),
  ADD CONSTRAINT `lk_binhluan_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_cart_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `lk_cart_spbt` FOREIGN KEY (`idspbt`) REFERENCES `spbt` (`id`),
  ADD CONSTRAINT `lk_cart_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);

--
-- Các ràng buộc cho bảng `spbt`
--
ALTER TABLE `spbt`
  ADD CONSTRAINT `lk_spbt_mau` FOREIGN KEY (`idmau`) REFERENCES `mausp` (`id`),
  ADD CONSTRAINT `lk_spbt_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `lk_spbt_size` FOREIGN KEY (`idsize`) REFERENCES `size` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
