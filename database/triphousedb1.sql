-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2024 at 05:27 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triphousedb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_dats`
--

CREATE TABLE `chi_tiet_don_dats` (
  `id` int NOT NULL,
  `don_dat_id` int NOT NULL,
  `phong_id` int NOT NULL,
  `don_gia` decimal(10,2) NOT NULL,
  `thanh_tien` decimal(10,2) NOT NULL,
  `so_ngay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chi_tiet_don_dats`
--

INSERT INTO `chi_tiet_don_dats` (`id`, `don_dat_id`, `phong_id`, `don_gia`, `thanh_tien`, `so_ngay`) VALUES
(1, 1, 1, '12345.00', '12345.00', '5');

-- --------------------------------------------------------

--
-- Table structure for table `chuc_vus`
--

CREATE TABLE `chuc_vus` (
  `id` int NOT NULL,
  `ten_chuc_vu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chuc_vus`
--

INSERT INTO `chuc_vus` (`id`, `ten_chuc_vu`) VALUES
(1, 'Admin'),
(2, 'Khách hàng ');

-- --------------------------------------------------------

--
-- Table structure for table `danh_gias`
--

CREATE TABLE `danh_gias` (
  `id` int NOT NULL,
  `tai_khoan_id` int NOT NULL,
  `ngay_danh_gia` date NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `phong_id` int NOT NULL,
  `trang_thai_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danh_gias`
--

INSERT INTO `danh_gias` (`id`, `tai_khoan_id`, `ngay_danh_gia`, `noi_dung`, `phong_id`, `trang_thai_id`) VALUES
(1, 20, '2024-11-12', 'Phong nay xin\r\n', 18, 1),
(2, 20, '2024-11-12', 'DEP', 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `don_dats`
--

CREATE TABLE `don_dats` (
  `id` int NOT NULL,
  `tai_khoan_id` int NOT NULL,
  `phong_id` int NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `trang_thai_id` int NOT NULL,
  `don_gia` decimal(10,2) NOT NULL,
  `phuong_thuc_id` int NOT NULL,
  `ghi_chu` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `don_dats`
--

INSERT INTO `don_dats` (`id`, `tai_khoan_id`, `phong_id`, `check_in`, `check_out`, `trang_thai_id`, `don_gia`, `phuong_thuc_id`, `ghi_chu`) VALUES
(25, 20, 59, '2024-12-04', '2024-12-06', 4, '1200.00', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kieu_phongs`
--

CREATE TABLE `kieu_phongs` (
  `id` int NOT NULL,
  `ten_kieu_phong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kieu_phongs`
--

INSERT INTO `kieu_phongs` (`id`, `ten_kieu_phong`) VALUES
(1, 'Đơn'),
(2, 'Đôi');

-- --------------------------------------------------------

--
-- Table structure for table `loai_phongs`
--

CREATE TABLE `loai_phongs` (
  `id` int NOT NULL,
  `ten_loai` varchar(50) NOT NULL,
  `mo_ta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loai_phongs`
--

INSERT INTO `loai_phongs` (`id`, `ten_loai`, `mo_ta`) VALUES
(1, 'VIP', 'Phòng cao cấp'),
(2, 'NORMAL', 'Phòng thường ');

-- --------------------------------------------------------

--
-- Table structure for table `phongs`
--

CREATE TABLE `phongs` (
  `id` int NOT NULL,
  `ten_phong` varchar(50) NOT NULL,
  `loai_phong_id` int NOT NULL,
  `kieu_phong_id` int NOT NULL,
  `gia_phong` decimal(10,3) NOT NULL,
  `trang_thai_id` tinyint NOT NULL DEFAULT '1',
  `hinh_anh` text NOT NULL,
  `mo_ta` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phongs`
--

INSERT INTO `phongs` (`id`, `ten_phong`, `loai_phong_id`, `kieu_phong_id`, `gia_phong`, `trang_thai_id`, `hinh_anh`, `mo_ta`) VALUES
(18, 'PN101', 2, 1, '400.000', 1, 'https://media.istockphoto.com/id/1756553862/vi/anh/ph%C3%B2ng-kh%C3%A1ch-s%E1%BA%A1n-sang-tr%E1%BB%8Dng-hi%E1%BB%87n-%C4%91%E1%BA%A1i.jpg?s=612x612&w=0&k=20&c=OB_VV3l-yESr0bgd2KWH4hbTb2dNrNgWHpDkssFQzcw=', 'Phòng Normal là lựa chọn lý tưởng cho du khách yêu thích sự đơn giản. Không gian ấm cúng với giường đôi thoải mái, bàn làm việc nhỏ và TV màn hình phẳng. Wi-Fi miễn phí cùng điều hòa hiện đại giúp du khách tận hưởng kỳ nghỉ tiện nghi mà vẫn tiết kiệm.'),
(19, 'PN102', 2, 2, '400.000', 1, 'https://media.istockphoto.com/id/1370825295/vi/anh/ph%C3%B2ng-kh%C3%A1ch-s%E1%BA%A1n-hi%E1%BB%87n-%C4%91%E1%BA%A1i-v%E1%BB%9Bi-gi%C6%B0%E1%BB%9Dng-%C4%91%C3%B4i-b%C3%A0n-ng%E1%BB%A7-tv-v%C3%A0-c%E1%BA%A3nh-quan-th%C3%A0nh-ph%E1%BB%91-t%E1%BB%AB-c%E1%BB%ADa-s%E1%BB%95.jpg?s=612x612&w=0&k=20&c=jcsgCBhCdTxL9-6kPLyvnX_5W912s4eZ3UKuD8NYRuE=', 'Phòng Normal là lựa chọn lý tưởng cho du khách yêu thích sự đơn giản. Không gian ấm cúng với giường đôi thoải mái, bàn làm việc nhỏ và TV màn hình phẳng. Wi-Fi miễn phí cùng điều hòa hiện đại giúp du khách tận hưởng kỳ nghỉ tiện nghi mà vẫn tiết kiệm.'),
(20, 'PN103', 2, 1, '400.000', 1, 'https://media.istockphoto.com/id/905186016/vi/anh/lau-kh%C4%83n-t%E1%BA%AFm-tr%C3%AAn-gi%C6%B0%E1%BB%9Dng-t%E1%BA%A1i-ph%C3%B2ng-kh%C3%A1ch-s%E1%BA%A1n.jpg?s=612x612&w=0&k=20&c=JR5G2eHMClezSfSxQr_JennBWjtDHWhhY4uCxYwyoPc=', 'Phòng Normal là lựa chọn lý tưởng cho du khách yêu thích sự đơn giản. Không gian ấm cúng với giường đôi thoải mái, bàn làm việc nhỏ và TV màn hình phẳng. Wi-Fi miễn phí cùng điều hòa hiện đại giúp du khách tận hưởng kỳ nghỉ tiện nghi mà vẫn tiết kiệm.'),
(21, 'PN104', 2, 2, '400.000', 1, 'https://i.pinimg.com/control2/236x/3a/b4/83/3ab483136d2f1257b72e615d49e3e37b.jpg', 'Phòng Normal là lựa chọn lý tưởng cho du khách yêu thích sự đơn giản. Không gian ấm cúng với giường đôi thoải mái, bàn làm việc nhỏ và TV màn hình phẳng. Wi-Fi miễn phí cùng điều hòa hiện đại giúp du khách tận hưởng kỳ nghỉ tiện nghi mà vẫn tiết kiệm.'),
(22, 'PN105', 2, 1, '400.000', 1, 'https://media.istockphoto.com/id/1677784097/vi/anh/c%C4%83n-h%E1%BB%99-kh%C3%A1ch-s%E1%BA%A1n-hi%E1%BB%87n-%C4%91%E1%BA%A1i-c%C3%B3-ph%C3%B2ng-t%E1%BA%AFm.jpg?s=612x612&w=0&k=20&c=AIIG7PecSUg--38w_YsST16e7Z4gKjZPTiVTH99TDnI=', 'Phòng Normal là lựa chọn lý tưởng cho du khách yêu thích sự đơn giản. Không gian ấm cúng với giường đôi thoải mái, bàn làm việc nhỏ và TV màn hình phẳng. Wi-Fi miễn phí cùng điều hòa hiện đại giúp du khách tận hưởng kỳ nghỉ tiện nghi mà vẫn tiết kiệm.'),
(23, 'PV101', 1, 1, '600.000', 1, 'https://media.istockphoto.com/id/2021707621/vi/anh/c%E1%BA%A3nh-%C4%91%C3%AAm-ph%C3%B2ng-ng%E1%BB%A7-master-m%C3%A0u-%C4%91en-sang-tr%E1%BB%8Dng-theo-phong-c%C3%A1ch-hi%E1%BB%87n-%C4%91%E1%BA%A1i-v%E1%BB%9Bi-k%E1%BA%BFt-xu%E1%BA%A5t-3d-nh%C3%ACn-ra.jpg?s=612x612&w=0&k=20&c=9h1YijdNn54i1wMIlOmZPoLjnrMvY_yp0QYSuYNp6iI=', 'Phòng VIP mang đến không gian sang trọng với giường cỡ King, phòng khách riêng biệt và ban công lớn. Nội thất tinh tế được thiết kế với tông màu trầm ấm, trang bị đầy đủ tiện nghi cao cấp như máy pha cà phê, bồn tắm nằm, và hệ thống giải trí hiện đại, đem lại trải nghiệm nghỉ dưỡng thượng lưu.'),
(24, 'PV102', 1, 2, '600.000', 1, 'https://i.pinimg.com/control2/236x/53/f2/40/53f240b1941a4d5ecfd179c7091d7d1a.jpg', 'Phòng VIP mang đến không gian sang trọng với giường cỡ King, phòng khách riêng biệt và ban công lớn. Nội thất tinh tế được thiết kế với tông màu trầm ấm, trang bị đầy đủ tiện nghi cao cấp như máy pha cà phê, bồn tắm nằm, và hệ thống giải trí hiện đại, đem lại trải nghiệm nghỉ dưỡng thượng lưu.'),
(25, 'PV103', 1, 1, '600.000', 1, 'https://i.pinimg.com/control2/236x/b6/aa/91/b6aa915a8af1139561f0b9ec24a2e5af.jpg', 'Phòng VIP mang đến không gian sang trọng với giường cỡ King, phòng khách riêng biệt và ban công lớn. Nội thất tinh tế được thiết kế với tông màu trầm ấm, trang bị đầy đủ tiện nghi cao cấp như máy pha cà phê, bồn tắm nằm, và hệ thống giải trí hiện đại, đem lại trải nghiệm nghỉ dưỡng thượng lưu.'),
(26, 'PV104', 1, 2, '600.000', 1, 'https://i.pinimg.com/control2/236x/64/40/4f/64404fb92bfa2931fe33f388ce0daf54.jpg', 'Phòng VIP mang đến không gian sang trọng với giường cỡ King, phòng khách riêng biệt và ban công lớn. Nội thất tinh tế được thiết kế với tông màu trầm ấm, trang bị đầy đủ tiện nghi cao cấp như máy pha cà phê, bồn tắm nằm, và hệ thống giải trí hiện đại, đem lại trải nghiệm nghỉ dưỡng thượng lưu.'),
(27, 'PV105', 1, 1, '600.000', 1, 'https://i.pinimg.com/236x/b8/a3/09/b8a3098132680371cedd6afd55d8b803.jpg', 'Phòng VIP mang đến không gian sang trọng với giường cỡ King, phòng khách riêng biệt và ban công lớn. Nội thất tinh tế được thiết kế với tông màu trầm ấm, trang bị đầy đủ tiện nghi cao cấp như máy pha cà phê, bồn tắm nằm, và hệ thống giải trí hiện đại, đem lại trải nghiệm nghỉ dưỡng thượng lưu.'),
(28, 'PN201', 2, 1, '400.000', 1, 'https://i.pinimg.com/236x/00/84/c7/0084c7cdae19141fc244b1c49fcbee93.jpg', 'Với cửa sổ lớn nhìn ra thành phố, phòng Normal Hướng Phố mang đến sự thoải mái tối đa. Phòng được trang bị giường đôi mềm mại, tủ quần áo và đèn đọc sách tiện lợi, phù hợp cho chuyến công tác hoặc du lịch ngắn ngày.\n\n'),
(29, 'PN202', 2, 2, '400.000', 1, 'https://i.pinimg.com/control2/236x/63/20/e4/6320e4a0357c5a5df8425ac9de513721.jpg', 'Với cửa sổ lớn nhìn ra thành phố, phòng Normal Hướng Phố mang đến sự thoải mái tối đa. Phòng được trang bị giường đôi mềm mại, tủ quần áo và đèn đọc sách tiện lợi, phù hợp cho chuyến công tác hoặc du lịch ngắn ngày.'),
(30, 'PN203', 2, 1, '400.000', 1, 'https://i.pinimg.com/236x/21/27/cc/2127cc61d5bf94209801139bbda9c731.jpg', 'Với cửa sổ lớn nhìn ra thành phố, phòng Normal Hướng Phố mang đến sự thoải mái tối đa. Phòng được trang bị giường đôi mềm mại, tủ quần áo và đèn đọc sách tiện lợi, phù hợp cho chuyến công tác hoặc du lịch ngắn ngày.'),
(31, 'PN204', 2, 2, '400.000', 1, 'https://i.pinimg.com/control2/236x/c6/7b/8a/c67b8ad29be98505532fc5afeedc9c3f.jpg', 'Với cửa sổ lớn nhìn ra thành phố, phòng Normal Hướng Phố mang đến sự thoải mái tối đa. Phòng được trang bị giường đôi mềm mại, tủ quần áo và đèn đọc sách tiện lợi, phù hợp cho chuyến công tác hoặc du lịch ngắn ngày.'),
(32, 'PN205', 2, 2, '400.000', 1, 'https://i.pinimg.com/236x/53/a9/37/53a937cdf862da224a40f7c2cab72f75.jpg', 'Với cửa sổ lớn nhìn ra thành phố, phòng Normal Hướng Phố mang đến sự thoải mái tối đa. Phòng được trang bị giường đôi mềm mại, tủ quần áo và đèn đọc sách tiện lợi, phù hợp cho chuyến công tác hoặc du lịch ngắn ngày.'),
(33, 'PV201', 1, 1, '600.000', 1, 'https://i.pinimg.com/control2/236x/c6/7b/8a/c67b8ad29be98505532fc5afeedc9c3f.jpg', 'Phòng VIP Suite rộng rãi với thiết kế tinh xảo, bao gồm phòng ngủ riêng và phòng khách sang trọng. Ban công riêng mở ra tầm nhìn thành phố tuyệt đẹp. Phòng tắm lát đá cẩm thạch có bồn tắm massage và vòi sen riêng biệt, mang đến cảm giác thư thái tối đa.'),
(34, 'PV202', 1, 2, '600.000', 1, 'https://i.pinimg.com/236x/a2/e8/91/a2e891845b213cb950acb7e073461f9c.jpg', 'Phòng VIP Suite rộng rãi với thiết kế tinh xảo, bao gồm phòng ngủ riêng và phòng khách sang trọng. Ban công riêng mở ra tầm nhìn thành phố tuyệt đẹp. Phòng tắm lát đá cẩm thạch có bồn tắm massage và vòi sen riêng biệt, mang đến cảm giác thư thái tối đa.'),
(35, 'PV203', 1, 2, '600.000', 1, 'https://i.pinimg.com/control2/236x/f2/1f/3f/f21f3f9570315c8dc274390d93f04ab2.jpg', 'Phòng VIP Suite rộng rãi với thiết kế tinh xảo, bao gồm phòng ngủ riêng và phòng khách sang trọng. Ban công riêng mở ra tầm nhìn thành phố tuyệt đẹp. Phòng tắm lát đá cẩm thạch có bồn tắm massage và vòi sen riêng biệt, mang đến cảm giác thư thái tối đa.'),
(36, 'PV204', 1, 2, '600.000', 1, 'https://i.pinimg.com/control2/236x/82/94/af/8294affa7b616936776a07eb4390a19a.jpg', 'Phòng VIP Suite rộng rãi với thiết kế tinh xảo, bao gồm phòng ngủ riêng và phòng khách sang trọng. Ban công riêng mở ra tầm nhìn thành phố tuyệt đẹp. Phòng tắm lát đá cẩm thạch có bồn tắm massage và vòi sen riêng biệt, mang đến cảm giác thư thái tối đa.'),
(37, 'PV205', 1, 2, '600.000', 1, 'https://i.pinimg.com/control2/236x/be/02/eb/be02eb572f4f5a94828a40a9e986bc4e.jpg', 'Phòng VIP Suite rộng rãi với thiết kế tinh xảo, bao gồm phòng ngủ riêng và phòng khách sang trọng. Ban công riêng mở ra tầm nhìn thành phố tuyệt đẹp. Phòng tắm lát đá cẩm thạch có bồn tắm massage và vòi sen riêng biệt, mang đến cảm giác thư thái tối đa.'),
(38, 'PN301', 2, 2, '400.000', 1, 'https://plus.unsplash.com/premium_photo-1676968002767-1f6a09891350?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHJvb218ZW58MHx8MHx8fDA%3D', 'Với cửa sổ lớn nhìn ra thành phố, phòng Normal Hướng Phố mang đến sự thoải mái tối đa. Phòng được trang bị giường đôi mềm mại, tủ quần áo và đèn đọc sách tiện lợi, phù hợp cho chuyến công tác hoặc du lịch ngắn ngày.\n\n'),
(39, 'PN302', 2, 1, '400.000', 1, 'https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHJvb218ZW58MHx8MHx8fDA%3D', 'Với cửa sổ lớn nhìn ra thành phố, phòng Normal Hướng Phố mang đến sự thoải mái tối đa. Phòng được trang bị giường đôi mềm mại, tủ quần áo và đèn đọc sách tiện lợi, phù hợp cho chuyến công tác hoặc du lịch ngắn ngày.\n\n'),
(40, 'PN303', 2, 2, '400.000', 1, 'https://images.unsplash.com/photo-1523755231516-e43fd2e8dca5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHJvb218ZW58MHx8MHx8fDA%3D', 'Với cửa sổ lớn nhìn ra thành phố, phòng Normal Hướng Phố mang đến sự thoải mái tối đa. Phòng được trang bị giường đôi mềm mại, tủ quần áo và đèn đọc sách tiện lợi, phù hợp cho chuyến công tác hoặc du lịch ngắn ngày.\n\n'),
(41, 'PN304', 2, 1, '400.000', 1, 'https://plus.unsplash.com/premium_photo-1676320514018-ec119b57dbce?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fHJvb218ZW58MHx8MHx8fDA%3D', 'Với cửa sổ lớn nhìn ra thành phố, phòng Normal Hướng Phố mang đến sự thoải mái tối đa. Phòng được trang bị giường đôi mềm mại, tủ quần áo và đèn đọc sách tiện lợi, phù hợp cho chuyến công tác hoặc du lịch ngắn ngày.\n\n'),
(42, 'PN305', 2, 1, '400.000', 1, 'https://images.unsplash.com/photo-1515362778563-6a8d0e44bc0b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww', 'Với cửa sổ lớn nhìn ra thành phố, phòng Normal Hướng Phố mang đến sự thoải mái tối đa. Phòng được trang bị giường đôi mềm mại, tủ quần áo và đèn đọc sách tiện lợi, phù hợp cho chuyến công tác hoặc du lịch ngắn ngày.\n\n'),
(43, 'PV301', 1, 2, '600.000', 1, 'https://images.unsplash.com/photo-1568495248636-6432b97bd949?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww', 'Phòng VIP Executive được thiết kế dành riêng cho khách hàng yêu cầu sự riêng tư và tiện nghi cao cấp. Không gian rộng rãi, nội thất hiện đại với khu vực làm việc chuyên biệt, bồn tắm đôi và phòng khách riêng là điểm nhấn nổi bật.'),
(45, 'PV302', 1, 2, '600.000', 1, 'https://plus.unsplash.com/premium_photo-1661879252375-7c1db1932572?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww', 'Phòng VIP Executive được thiết kế dành riêng cho khách hàng yêu cầu sự riêng tư và tiện nghi cao cấp. Không gian rộng rãi, nội thất hiện đại với khu vực làm việc chuyên biệt, bồn tắm đôi và phòng khách riêng là điểm nhấn nổi bật.'),
(46, 'PV303', 1, 2, '600.000', 1, 'https://images.unsplash.com/photo-1660731513683-4cb0c9ac09b8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGhvdGVsJTIwcm9vbXxlbnwwfHwwfHx8MA%3D%3D', 'Phòng VIP Executive được thiết kế dành riêng cho khách hàng yêu cầu sự riêng tư và tiện nghi cao cấp. Không gian rộng rãi, nội thất hiện đại với khu vực làm việc chuyên biệt, bồn tắm đôi và phòng khách riêng là điểm nhấn nổi bật.'),
(48, 'PV304', 1, 2, '600.000', 1, 'https://images.unsplash.com/photo-1621891334762-e186f94d3a1d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGhvdGVsJTIwcm9vbXxlbnwwfHwwfHx8MA%3D%3D', 'Phòng VIP Executive được thiết kế dành riêng cho khách hàng yêu cầu sự riêng tư và tiện nghi cao cấp. Không gian rộng rãi, nội thất hiện đại với khu vực làm việc chuyên biệt, bồn tắm đôi và phòng khách riêng là điểm nhấn nổi bật.'),
(49, 'PV305', 1, 2, '600.000', 1, 'https://plus.unsplash.com/premium_photo-1674676471380-1258cb31b3ac?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGhvdGVsJTIwcm9vbXxlbnwwfHwwfHx8MA%3D%3D', 'Phòng VIP Executive được thiết kế dành riêng cho khách hàng yêu cầu sự riêng tư và tiện nghi cao cấp. Không gian rộng rãi, nội thất hiện đại với khu vực làm việc chuyên biệt, bồn tắm đôi và phòng khách riêng là điểm nhấn nổi bật.'),
(50, 'PN401', 2, 1, '400.000', 1, 'https://plus.unsplash.com/premium_photo-1675616563084-63d1f129623d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww', 'Phòng Normal Cozy mang đến cảm giác gần gũi, ấm cúng với giường đôi thoải mái, không gian gọn gàng và nội thất đơn giản. Phòng trang bị đầy đủ tiện ích như TV, điều hòa và Wi-Fi miễn phí.'),
(51, 'PN402', 2, 2, '400.000', 1, 'https://images.unsplash.com/photo-1549638441-b787d2e11f14?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww', 'Phòng Normal Cozy mang đến cảm giác gần gũi, ấm cúng với giường đôi thoải mái, không gian gọn gàng và nội thất đơn giản. Phòng trang bị đầy đủ tiện ích như TV, điều hòa và Wi-Fi miễn phí.'),
(52, 'PN403', 2, 1, '400.000', 1, 'https://images.unsplash.com/photo-1568495248636-6432b97bd949?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww', 'Phòng Normal Cozy mang đến cảm giác gần gũi, ấm cúng với giường đôi thoải mái, không gian gọn gàng và nội thất đơn giản. Phòng trang bị đầy đủ tiện ích như TV, điều hòa và Wi-Fi miễn phí.'),
(53, 'PN404', 2, 2, '400.000', 1, 'https://plus.unsplash.com/premium_photo-1689609949898-5f7a10649fef?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fGhvdGVsJTIwcm9vbXxlbnwwfHwwfHx8MA%3D%3D', 'Phòng Normal Cozy mang đến cảm giác gần gũi, ấm cúng với giường đôi thoải mái, không gian gọn gàng và nội thất đơn giản. Phòng trang bị đầy đủ tiện ích như TV, điều hòa và Wi-Fi miễn phí.'),
(54, 'PN405', 2, 2, '400.000', 1, 'https://plus.unsplash.com/premium_photo-1678297270385-ad5067126607?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fGhvdGVsJTIwcm9vbXxlbnwwfHwwfHx8MA%3D%3D', 'Phòng Normal Cozy mang đến cảm giác gần gũi, ấm cúng với giường đôi thoải mái, không gian gọn gàng và nội thất đơn giản. Phòng trang bị đầy đủ tiện ích như TV, điều hòa và Wi-Fi miễn phí.'),
(55, 'PV401', 1, 1, '600.000', 1, 'https://images.unsplash.com/photo-1631049035433-4409c68ca6cf?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTJ8fGhvdGVsJTIwcm9vbXxlbnwwfHwwfHx8MA%3D%3D', 'Trải nghiệm đỉnh cao của sự xa hoa tại phòng VIP Penthouse với tầm nhìn toàn cảnh thành phố. Không gian rộng lớn bao gồm khu vực phòng khách, bếp nhỏ và phòng ngủ chính. Phòng tắm cao cấp có cả bồn tắm đứng và nằm.'),
(56, 'PV402', 1, 2, '600.000', 1, 'https://images.unsplash.com/photo-1631048835049-b0b7ee4be40b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjB8fGhvdGVsJTIwcm9vbXxlbnwwfHwwfHx8MA%3D%3D', 'Trải nghiệm đỉnh cao của sự xa hoa tại phòng VIP Penthouse với tầm nhìn toàn cảnh thành phố. Không gian rộng lớn bao gồm khu vực phòng khách, bếp nhỏ và phòng ngủ chính. Phòng tắm cao cấp có cả bồn tắm đứng và nằm.'),
(57, 'PV403', 1, 1, '600.000', 1, 'https://images.unsplash.com/photo-1631049307567-d20d6d97f64a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjN8fGhvdGVsJTIwcm9vbXxlbnwwfHwwfHx8MA%3D%3D', 'Trải nghiệm đỉnh cao của sự xa hoa tại phòng VIP Penthouse với tầm nhìn toàn cảnh thành phố. Không gian rộng lớn bao gồm khu vực phòng khách, bếp nhỏ và phòng ngủ chính. Phòng tắm cao cấp có cả bồn tắm đứng và nằm.'),
(58, 'PV404', 1, 2, '600.000', 1, 'https://images.unsplash.com/photo-1631048730715-e780567325f6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjZ8fGhvdGVsJTIwcm9vbXxlbnwwfHwwfHx8MA%3D%3D', 'Trải nghiệm đỉnh cao của sự xa hoa tại phòng VIP Penthouse với tầm nhìn toàn cảnh thành phố. Không gian rộng lớn bao gồm khu vực phòng khách, bếp nhỏ và phòng ngủ chính. Phòng tắm cao cấp có cả bồn tắm đứng và nằm.'),
(59, 'PV405', 1, 1, '600.000', 2, 'https://images.unsplash.com/photo-1631049035257-02039c597992?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjJ8fGhvdGVsJTIwcm9vbXxlbnwwfHwwfHx8MA%3D%3D', 'Trải nghiệm đỉnh cao của sự xa hoa tại phòng VIP Penthouse với tầm nhìn toàn cảnh thành phố. Không gian rộng lớn bao gồm khu vực phòng khách, bếp nhỏ và phòng ngủ chính. Phòng tắm cao cấp có cả bồn tắm đứng và nằm.');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoans`
--

CREATE TABLE `tai_khoans` (
  `id` int NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dien_thoai` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `trang_thai_id` int NOT NULL DEFAULT '5',
  `chuc_vu_id` int NOT NULL,
  `avt_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tai_khoans`
--

INSERT INTO `tai_khoans` (`id`, `ho_ten`, `password`, `dien_thoai`, `email`, `trang_thai_id`, `chuc_vu_id`, `avt_link`) VALUES
(20, 'Minh Quân', '123456', '0364017978', 'hoangquan22022005@gmail.com', 2, 2, NULL),
(23, 'Tạ Minh Hòa', '123456', '0364017978', 'minhhoa05@gmail.com', 1, 1, NULL),
(24, 'Minh Quân Admin', '123456', '0364017978', 'hoangquan2202@gmail.com', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trang_thais`
--

CREATE TABLE `trang_thais` (
  `id` int NOT NULL,
  `ten_trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trang_thais`
--

INSERT INTO `trang_thais` (`id`, `ten_trang_thai`) VALUES
(1, 'Còn phòng'),
(2, 'Hết phòng'),
(3, 'Đã thanh toán'),
(4, 'Chưa thanh toán'),
(5, 'Đang hoạt động'),
(6, 'Bị khóa');

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai_don_dats`
--

CREATE TABLE `trang_thai_don_dats` (
  `id` int NOT NULL,
  `ten_trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trang_thai_don_dats`
--

INSERT INTO `trang_thai_don_dats` (`id`, `ten_trang_thai`) VALUES
(1, 'Đã thanh toán '),
(2, 'Chưa thanh toán');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_tiet_don_dats`
--
ALTER TABLE `chi_tiet_don_dats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chuc_vus`
--
ALTER TABLE `chuc_vus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danh_gias`
--
ALTER TABLE `danh_gias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `don_dats`
--
ALTER TABLE `don_dats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kieu_phongs`
--
ALTER TABLE `kieu_phongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loai_phongs`
--
ALTER TABLE `loai_phongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phongs`
--
ALTER TABLE `phongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tai_khoans`
--
ALTER TABLE `tai_khoans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trang_thais`
--
ALTER TABLE `trang_thais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trang_thai_don_dats`
--
ALTER TABLE `trang_thai_don_dats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chi_tiet_don_dats`
--
ALTER TABLE `chi_tiet_don_dats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chuc_vus`
--
ALTER TABLE `chuc_vus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `danh_gias`
--
ALTER TABLE `danh_gias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `don_dats`
--
ALTER TABLE `don_dats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kieu_phongs`
--
ALTER TABLE `kieu_phongs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loai_phongs`
--
ALTER TABLE `loai_phongs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `phongs`
--
ALTER TABLE `phongs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tai_khoans`
--
ALTER TABLE `tai_khoans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `trang_thais`
--
ALTER TABLE `trang_thais`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trang_thai_don_dats`
--
ALTER TABLE `trang_thai_don_dats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
