-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 17, 2021 lúc 11:01 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dangkiDB`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Chitiet`
--

CREATE TABLE `Chitiet` (
  `IDCT` int(10) NOT NULL,
  `IDtnv` int(10) NOT NULL,
  `Sohk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `Chitiet`
--

INSERT INTO `Chitiet` (`IDCT`, `IDtnv`, `Sohk`) VALUES
(111, 143, 101),
(112, 144, 102),
(113, 145, 103),
(114, 146, 104),
(115, 147, 105),
(116, 148, 106),
(117, 148, 107);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangkiDB1`
--

CREATE TABLE `dangkiDB1` (
  `ID` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dangkiDB1`
--

INSERT INTO `dangkiDB1` (`ID`, `username`, `password`, `email`) VALUES
(1, 'ngocha', '123456', 'ha@gmail.com'),
(2, 'ngocha', '123456', 'ha@gmail.com'),
(7, 'Nguyễn ngọc hà', '123456', 'ha@gmail.com'),
(8, 'Nguyễn ngọc hà', '123456', 'ha@gmail.com'),
(9, '1', '1', 'ngo0cha@gmail.com'),
(10, '1', '1', 'ngo0cha@gmail.com'),
(11, '1', '1', 'ha@gmail.com'),
(12, '1', '1', 'ha@gmail.com'),
(13, '1', '1', 'ha@gmail.com'),
(14, '1', '1', 'ha@gmail.com'),
(15, '1', '1', 'ha1@gmail.com'),
(16, '1', '1', 'ha1@gmail.com'),
(17, '2', '1', '2@gmail.com'),
(18, '2', '1', '2@gmail.com'),
(19, '2', '6', '2@gmail.com'),
(20, 'hangoc', '566', '2@gmail.com'),
(21, 'hadeptrai', '1', 'ha2@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nnDB`
--

CREATE TABLE `nnDB` (
  `Sohk` int(255) NOT NULL,
  `Ten1` varchar(255) NOT NULL,
  `Diachi` varchar(255) NOT NULL,
  `Sdt` varchar(255) NOT NULL,
  `Mucdo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nnDB`
--

INSERT INTO `nnDB` (`Sohk`, `Ten1`, `Diachi`, `Sdt`, `Mucdo`) VALUES
(101, 'Huỳnh Tấn Trí', 'Thôn 1, Hoà Tiến, Hoà Vang', '0237583233', 'MD01'),
(102, 'Phan Thế Sanh', 'Thôn 3, Đại Cường, Hoà Vang', '0169517789', 'MD02'),
(103, 'Hồ Thị Như Quỳnh', 'Thôn 6, Hoà Tiến, Hoà Vang', '036578943', 'MD03'),
(104, 'Phạm Huỳnh Hải', 'Thôn 4, Hoà Trung, Hoà Vang', '098767891', 'MD03'),
(105, 'Đặng Công Vương', 'Thôn 1, Hoà Trung, Hoà Vang', '056432461', 'MD02'),
(106, 'Nguyễn Văn Lành', 'Thôn 4, Hoà Hải, Hoà Vang', '0987554332', 'MD01'),
(107, 'Nguyễn Văn Cường', 'Thôn 1, Hoà Hải, Hoà Vang', '039512456', 'MD02'),
(108, 'Lương Đức Tài', 'Thôn 1, Đại Cường, Hoà Vang', '0395121417', 'MD01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo', 'Avda. de la Construction 2222', 'Mexico D.F.', '5021', 'Mexico'),
(3, 'Antonio Moreno', 'Mataderos 2312', 'Mexico D.F.', '5023', 'Mexico'),
(4, 'Thomas Hardy', '120 Hanover Sq.', 'London', 'WA1 1DP', 'UK'),
(5, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(6, 'Wolski Zbyszek', 'ul. Filtrowa 68', 'Walla', '01-012', 'Poland'),
(7, 'Matti Karttunen', 'Keskuskatu 45', 'Helsinki', '21240', 'Finland'),
(8, 'Karl Jablonski', '305 - 14th Ave. S. Suite 3B', 'Seattle', '98128', 'USA'),
(9, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(10, 'Pirkko Koskitalo', 'Torikatu 38', 'Oulu', '90110', 'Finland');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tnvDB`
--

CREATE TABLE `tnvDB` (
  `IDtnv` int(11) NOT NULL,
  `Tentnv` varchar(255) NOT NULL,
  `Diachi` varchar(255) NOT NULL,
  `Sdt_tnv` varchar(255) NOT NULL,
  `Phuongtien` varchar(255) NOT NULL,
  `Thoigian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tnvDB`
--

INSERT INTO `tnvDB` (`IDtnv`, `Tentnv`, `Diachi`, `Sdt_tnv`, `Phuongtien`, `Thoigian`) VALUES
(143, 'Nguyễn Ngọc Hả', 'Nghệ An', '0395121517', 'có xe máy', 'full'),
(144, 'Nguyễn Ngọc Anh', 'Hà Nội', '0975714313', 'có xe oto', 'full'),
(145, 'Nguyễn Thế Trọng', 'Quảng Trị', '097612332', 'không có xe', 'full'),
(146, 'Nguyễn Bình Nguyên', 'Đại Lộc', '057412378', 'có cano', 'full'),
(147, 'Đinh Văn Hải', 'nghệ an', '033656743', 'có xe máy', '12h, 15h30'),
(148, 'Phan Thanh Huy', 'Con Cuông', '034512234', 'có xe máy', 'full'),
(149, 'Nguyễn Văn Cường', 'nghệ an', '0395247679', 'có xe máy', 'full'),
(150, 'Nguyễn Thế Trọng', 'Triệu phong, Quảng Trị', '03445525', 'có xe Máy', 'full time'),
(151, 'Nguyễn Bình Nguyên', 'TT Ái Nghĩa, đại lộc', '0976554332', 'có cano', 'full time'),
(152, 'Lương Đức Tài', 'Đại Cường, Đại Lộc', '067543267', 'có xe Bán tải', 'full time');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `uhDB`
--

CREATE TABLE `uhDB` (
  `ID` int(10) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `Diachi` varchar(255) NOT NULL,
  `Sdt` varchar(255) NOT NULL,
  `Vatpham` varchar(255) NOT NULL,
  `Ghichu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `uhDB`
--

INSERT INTO `uhDB` (`ID`, `Ten`, `Diachi`, `Sdt`, `Vatpham`, `Ghichu`) VALUES
(1, 'Nguyễn Ngọc Hả', 'Xóm 5, khía sơn, anh sơn, nghệ an', '0395121517', '100 mì tôm', 'hàng dễ vỡ'),
(3, 'Hồ Văn Nhật', 'Xóm 6, Quảng Trạch Quảng Tri', '094517345', '100 mì tôm, 2 triệu tiền mặt', 'hàng dễ vỡ'),
(4, 'Huỳnh Tấn Trí', 'Chư sê , gia lai', '0126823465', '100 áo mưa, 50 mì tôm', 'hàng nhẹ'),
(5, 'Nguyễn Bình Nguyên', 'TT Ái Nghĩa, Đại Lộc', '0976554332', '100 mì tôm , 10 triệu đồng tiền mặt', 'hàng dễ vỡ'),
(6, 'Lương Đức Tài', 'Đại Cường, Đại Lộc', '067543267', '10 thùng mì tôm, 10 bao gạo ', 'hàng dễ ướt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userDB`
--

CREATE TABLE `userDB` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `userDB`
--

INSERT INTO `userDB` (`ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `Password`) VALUES
(16, 'Nguyễn Ngọc Hà', '0395121517', 'Male', 'ngocha17.1999@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(40, 'Nguyễn Ngọc Anh', '123456789', 'Male', 'anh@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(70, 'Huỳnh tấn trí', '12344', 'Nam', 'tri1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(71, 'Đinh Văn Tin', '065744532', 'Nam', 'tin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(72, 'Nguyễn Thế Trọng', '0354667542', 'Nam', 'trong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(73, 'Nguyễn Bình Nguyên', '0976554332', 'Nam', 'nguyenkali@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(74, 'Lương Đức Tài', '067543267', 'Nam', 'tainhot@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Chitiet`
--
ALTER TABLE `Chitiet`
  ADD PRIMARY KEY (`IDCT`),
  ADD KEY `IDtnv` (`IDtnv`),
  ADD KEY `Sohk` (`Sohk`);

--
-- Chỉ mục cho bảng `dangkiDB1`
--
ALTER TABLE `dangkiDB1`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nnDB`
--
ALTER TABLE `nnDB`
  ADD PRIMARY KEY (`Sohk`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Chỉ mục cho bảng `tnvDB`
--
ALTER TABLE `tnvDB`
  ADD PRIMARY KEY (`IDtnv`);

--
-- Chỉ mục cho bảng `uhDB`
--
ALTER TABLE `uhDB`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `userDB`
--
ALTER TABLE `userDB`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Chitiet`
--
ALTER TABLE `Chitiet`
  MODIFY `IDCT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT cho bảng `dangkiDB1`
--
ALTER TABLE `dangkiDB1`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `nnDB`
--
ALTER TABLE `nnDB`
  MODIFY `Sohk` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tnvDB`
--
ALTER TABLE `tnvDB`
  MODIFY `IDtnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT cho bảng `uhDB`
--
ALTER TABLE `uhDB`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `userDB`
--
ALTER TABLE `userDB`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `Chitiet`
--
ALTER TABLE `Chitiet`
  ADD CONSTRAINT `chitiet_ibfk_1` FOREIGN KEY (`IDtnv`) REFERENCES `tnvDB` (`IDtnv`),
  ADD CONSTRAINT `chitiet_ibfk_2` FOREIGN KEY (`Sohk`) REFERENCES `nnDB` (`Sohk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
