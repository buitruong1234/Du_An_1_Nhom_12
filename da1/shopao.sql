-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 05:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopao`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(200) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `ngaybinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `id_sanpham`, `id_taikhoan`, `ngaybinhluan`) VALUES
(16, 'cccc', 19, 11, '2024-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `slogan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten`, `slogan`) VALUES
(18, 'Áo thun', 'Chất vãi mát, dễ chịu'),
(19, 'Áo Phông', 'ddddddddđ'),
(23, 'Quần', 'Thời thượng, sang trọng, thanh lịch, phá cách');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `ten_nguoinhan` varchar(50) NOT NULL,
  `email_nguoinhan` varchar(50) DEFAULT NULL,
  `sdt_nguoinhan` varchar(13) NOT NULL,
  `diachi_nguoinhan` varchar(255) NOT NULL,
  `id_pttt` tinyint(1) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `tongtien_dathanhtoan` int(11) NOT NULL DEFAULT 0,
  `ngaydat` date NOT NULL DEFAULT current_timestamp(),
  `ghichu` varchar(200) NOT NULL,
  `id_trangthai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `id_taikhoan`, `ten_nguoinhan`, `email_nguoinhan`, `sdt_nguoinhan`, `diachi_nguoinhan`, `id_pttt`, `tongtien`, `tongtien_dathanhtoan`, `ngaydat`, `ghichu`, `id_trangthai`) VALUES
(295, 11, 'hoang', 'hoang123@gmail.com', '012345', 'ddđ', 1, 33333333, 0, '2024-08-06', 'fffffffffffffff', 1),
(302, 12, 'minhhieuvn123', 'VNexpress24h@yahoo.com', '0877272498', 'thiếu khanh', 2, 360, 0, '2024-08-08', 'abc', 1),
(303, 12, 'minhhieuvn123', 'VNexpress24h@yahoo.com', '012345678', 'Vinh Phuc', 1, 240, 0, '2024-08-08', 'abc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `id` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `id_sanpham` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`id`, `id_donhang`, `soluong`, `gia`, `id_sanpham`) VALUES
(207, 295, 1, 12, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `id_sanpham` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id`, `soluong`, `id_taikhoan`, `id_sanpham`) VALUES
(150, 1, 11, NULL),
(154, 1, 11, 19),
(155, 2, 12, 19);

-- --------------------------------------------------------

--
-- Table structure for table `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `id` tinyint(1) NOT NULL,
  `pttt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phuongthucthanhtoan`
--

INSERT INTO `phuongthucthanhtoan` (`id`, `pttt`) VALUES
(1, 'Thanh toán khi giao hàng'),
(2, 'Thanh toán bằng VNPay');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `gia` float NOT NULL,
  `hinh` varchar(200) DEFAULT NULL,
  `xuatxu` varchar(50) DEFAULT NULL,
  `phongcach` varchar(50) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `iddm` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `gia`, `hinh`, `xuatxu`, `phongcach`, `mota`, `iddm`, `soluong`) VALUES
(2, 'Áo 4', 200, 'ao-thun-raglan-nam-nu-local-brand-form-rong-1.webp', 'VN', 'Cá Tính, lịch lãm', 'Nước hoa Dior Homme Sport NHD1 là sự kết hợp hoàn hảo giữa sự tươi mới và tinh tế. Hương thơm độc đáo với nốt hương cam bergamot, gừng nồng, và cây lúa mi, tạo nên bức tranh hương năng động, phóng khoáng và lịch lãm, phản ánh tinh thần thể thao và sang trọng.', 18, 5),
(3, 'Áo 5', 200, 'tải xuống (1).jfif', 'VN', 'Gợi cảm, quyến rũ', 'Nước hoa Dior Pure Poison Eau De Parfum là biểu tượng của sự quyến rũ và nữ tính. Hương thơm tinh tế, hòa quyện giữa hoa trắng, vani và hổ phách, tạo nên một bản hòa âm nồng nàn, quyến rũ, làm nổi bật vẻ đẹp thuần khiết và sang trọng của phụ nữ.', 18, 3),
(4, 'Áo 6', 30, 'tải xuống (2).jfif', 'VN', 'Huyền bí , lâu phai', 'Nước hoa Miss Dior Eau De Parfum là biểu tượng của sự quyến rũ và tinh tế. Hương thơm ngọt ngào, nữ tính, kết hợp nốt hương hoa hồng và quả mâm xôi, tạo nên sức cuốn hút độc đáo, là biểu tượng của sự lãng mạn và phong cách đẳng cấp.', 19, 2),
(5, 'Áo 7', 3333, 'tải xuống.jfif', 'VN', 'Ngọt ngào, lâu phai', 'Nước hoa Dior Hypnotic Poison Eau De Parfum là sự kết hợp quyến rũ giữa hương vani, hạt hạnh nhân và hoa ngọc lan tây. Hương thơm ấn tượng và gợi cảm, tạo nên bản hòa âm nồng nàn và độc đáo, đánh bại mọi giới hạn, tạo ra một vẻ quyến rũ khó cưỡng.', 18, 2),
(19, 'PC', 120, 'tải xuống (1).jfif', 'VN', 'Đẹp', 'quá đẹp', 18, 2),
(20, 'quần jean', 256990000, '04.jpg', 'Hà Nội', 'Thời thượng, lịch lãm ', 'Trọng lượng: 55 Kg / 121.3 Lbs\r\nChiều cao: 169 cm / 66.5 in\r\nNgực: 85 cm / 33.5 in\r\nkích thước vòng eo: 61 cm / 24.0 in\r\nkích cỡ hông: 81 cm / 31.9 in\r\nphù hợp với tổng thể: Đúng với kích thướcMàu sắc: Rửa nhẹkích thước: XS\r\nAbsolutely stunning. These are my favorite pair of jeans already, true to size; go by the store’s measurements !!! I was scared they wouldn’t fit me, but they are perfect! If you’re 5’5 ur 5’6 and up, these will look beautiful on you! The denim isn’t a hard material, so it’s not really stiff, meaning it stands beautifully. It’s perfect!', 23, 2),
(21, 'Áo 7', 120, 'ao-thun-local-brand-nam-nu-mau-den-davies-6.webp', 'VN', 'trẻ trung, hiện đại', 'Đẹp', 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(13) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `capbac` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `hoten`, `email`, `sdt`, `matkhau`, `diachi`, `capbac`) VALUES
(9, 'hietm1', 'hieutm10000@gmail.com', '0877272498', '123456', 'Thiếu Khanh', 1),
(11, 'hoang', 'hoang@fpt.edu.vn', '', '123', NULL, 0),
(12, 'minhhieuvn123', 'VNexpress24h@yahoo.com', '', '12345', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trangthaidonhang`
--

CREATE TABLE `trangthaidonhang` (
  `id` tinyint(1) NOT NULL,
  `trangthai_dh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trangthaidonhang`
--

INSERT INTO `trangthaidonhang` (`id`, `trangthai_dh`) VALUES
(1, 'Chờ xử lý'),
(2, 'Đã xác nhận'),
(3, 'Đang vận chuyển'),
(4, 'Đã hoàn thành'),
(5, 'Đã hủy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_taikhoan` (`id_taikhoan`),
  ADD KEY `id_pttt` (`id_pttt`),
  ADD KEY `id_trangthai` (`id_trangthai`);

--
-- Indexes for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_donhang` (`id_donhang`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Indexes for table `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`id_pttt`) REFERENCES `phuongthucthanhtoan` (`id`),
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`id_trangthai`) REFERENCES `trangthaidonhang` (`id`);

--
-- Constraints for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `donhangchitiet_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_3` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
