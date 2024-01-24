-- --------------------------------------------------------
-- Máy chủ:                      127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Phiên bản:           12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for xxshop
DROP DATABASE IF EXISTS `xxshop`;
CREATE DATABASE IF NOT EXISTS `xxshop` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `xxshop`;

-- Dumping structure for table xxshop.binh_luan
DROP TABLE IF EXISTS `binh_luan`;
CREATE TABLE IF NOT EXISTS `binh_luan` (
  `ma_bl` int NOT NULL AUTO_INCREMENT,
  `noi_dung` varchar(225) NOT NULL,
  `ma_hh` int NOT NULL DEFAULT '0',
  `ngay_bl` date NOT NULL DEFAULT '2022-01-01',
  `ma_kh` int DEFAULT NULL,
  PRIMARY KEY (`ma_bl`),
  KEY `ma_hh` (`ma_hh`),
  KEY `FK_binh_luan_khach_hang` (`ma_kh`),
  CONSTRAINT `FK_binh_luan_khach_hang` FOREIGN KEY (`ma_kh`) REFERENCES `users` (`ma_kh`),
  CONSTRAINT `ma_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table xxshop.binh_luan: ~2 rows (approximately)
INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ngay_bl`, `ma_kh`) VALUES
	(1, '123123', 10, '2022-01-01', 7),
	(2, '123123', 10, '2022-01-01', 7),
	(3, '123123', 10, '2022-01-01', 7);

-- Dumping structure for table xxshop.chi_tiet_don_hang
DROP TABLE IF EXISTS `chi_tiet_don_hang`;
CREATE TABLE IF NOT EXISTS `chi_tiet_don_hang` (
  `ma_ctdh` int NOT NULL AUTO_INCREMENT,
  `giam_gia` double(10,2) NOT NULL DEFAULT '0.00',
  `don_gia` double(10,2) NOT NULL DEFAULT '0.00',
  `so_luong` int NOT NULL DEFAULT '0',
  `ma_hh` int NOT NULL DEFAULT '0',
  `ma_dh` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`ma_ctdh`),
  KEY `ma_hh1` (`ma_hh`),
  KEY `FK_chi_tiet_don_hang_don_hang` (`ma_dh`),
  CONSTRAINT `FK_chi_tiet_don_hang_don_hang` FOREIGN KEY (`ma_dh`) REFERENCES `don_hang` (`ma_dh`),
  CONSTRAINT `ma_hh1` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table xxshop.chi_tiet_don_hang: ~0 rows (approximately)

-- Dumping structure for table xxshop.danhmuc
DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table xxshop.danhmuc: ~2 rows (approximately)
INSERT INTO `danhmuc` (`id`, `name`) VALUES
	(5, 'trà xanh'),
	(10, 'vịt');

-- Dumping structure for table xxshop.danh_gia
DROP TABLE IF EXISTS `danh_gia`;
CREATE TABLE IF NOT EXISTS `danh_gia` (
  `ma_dg` int NOT NULL,
  `xep_hang` int NOT NULL,
  `noi_dung` text NOT NULL,
  `ma_hh` int NOT NULL DEFAULT '0',
  `ma_kh` int DEFAULT NULL,
  PRIMARY KEY (`ma_dg`),
  KEY `FK_danh_gia_hang_hoa` (`ma_hh`),
  KEY `FK_danh_gia_khach_hang` (`ma_kh`),
  CONSTRAINT `FK_danh_gia_hang_hoa` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  CONSTRAINT `FK_danh_gia_khach_hang` FOREIGN KEY (`ma_kh`) REFERENCES `users` (`ma_kh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table xxshop.danh_gia: ~0 rows (approximately)

-- Dumping structure for table xxshop.don_hang
DROP TABLE IF EXISTS `don_hang`;
CREATE TABLE IF NOT EXISTS `don_hang` (
  `ma_dh` int NOT NULL,
  `ghi_chu` varchar(50) NOT NULL DEFAULT '',
  `ngay_dat` date DEFAULT NULL,
  `tong_tien` double(10,2) NOT NULL DEFAULT '0.00',
  `dia_chi` varchar(50) NOT NULL DEFAULT '',
  `ma_tt` bit(1) NOT NULL DEFAULT b'0',
  `ma_kh` int DEFAULT NULL,
  PRIMARY KEY (`ma_dh`),
  KEY `FK_don_hang_khach_hang` (`ma_kh`),
  CONSTRAINT `FK_don_hang_khach_hang` FOREIGN KEY (`ma_kh`) REFERENCES `users` (`ma_kh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table xxshop.don_hang: ~0 rows (approximately)

-- Dumping structure for table xxshop.gio_hang
DROP TABLE IF EXISTS `gio_hang`;
CREATE TABLE IF NOT EXISTS `gio_hang` (
  `ma_gh` int NOT NULL,
  `so_luong` int DEFAULT NULL,
  `ma_hh` int DEFAULT NULL,
  `ma_kh` int DEFAULT NULL,
  PRIMARY KEY (`ma_gh`),
  KEY `FK_gio_hang_hang_hoa` (`ma_hh`),
  KEY `FK_gio_hang_khach_hang` (`ma_kh`),
  CONSTRAINT `FK_gio_hang_hang_hoa` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  CONSTRAINT `FK_gio_hang_khach_hang` FOREIGN KEY (`ma_kh`) REFERENCES `users` (`ma_kh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table xxshop.gio_hang: ~0 rows (approximately)

-- Dumping structure for table xxshop.hang_hoa
DROP TABLE IF EXISTS `hang_hoa`;
CREATE TABLE IF NOT EXISTS `hang_hoa` (
  `ma_hh` int NOT NULL AUTO_INCREMENT,
  `ten_hh` varchar(50) NOT NULL DEFAULT '0',
  `don_gia` double(10,2) NOT NULL DEFAULT '0.00',
  `giam_gia` double(10,2) DEFAULT '0.00',
  `hinh` varchar(50) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `mo_ta` text,
  `dac_biet` tinyint(1) NOT NULL DEFAULT '0',
  `luot_xem` int NOT NULL DEFAULT '0',
  `ma_loai` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`ma_hh`),
  KEY `FK_hang_hoa_loai_hang` (`ma_loai`),
  CONSTRAINT `FK_hang_hoa_loai_hang` FOREIGN KEY (`ma_loai`) REFERENCES `loai_hang` (`ma_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table xxshop.hang_hoa: ~3 rows (approximately)
INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `luot_xem`, `ma_loai`) VALUES
	(10, '123', 123.00, 123.00, 'ca1.jpg', '2123-03-12', '123', 0, 18, 39),
	(11, '123', 123.00, 123.00, 'test.jpg', '2123-03-12', '123', 0, 1, 39),
	(12, '123', 123.00, 123.00, 'ca1.jpg', '2123-03-12', '123', 0, 0, 39),
	(15, '1111', 32.00, 12.00, 'ca1.jpg', '2024-01-19', '12', 1, 19, 40);

-- Dumping structure for table xxshop.loai_hang
DROP TABLE IF EXISTS `loai_hang`;
CREATE TABLE IF NOT EXISTS `loai_hang` (
  `ma_loai` int NOT NULL AUTO_INCREMENT,
  `ten_loai` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ma_loai`),
  UNIQUE KEY `ten_loai` (`ten_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table xxshop.loai_hang: ~3 rows (approximately)
INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
	(39, '111'),
	(40, '1111'),
	(41, 'tesst');

-- Dumping structure for table xxshop.sanpham
DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(199) NOT NULL,
  `price` float DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  `mota` text,
  `luotxem` int NOT NULL DEFAULT '0',
  `id_danhmuc` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lk_sanpham_` (`id_danhmuc`),
  CONSTRAINT `lk_sanpham_` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table xxshop.sanpham: ~0 rows (approximately)
INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `id_danhmuc`) VALUES
	(11, 'vịt cỏ', 200, 'ali-morshedlou-WMD64tMfc4k-unsplash.jpg', 'to khỏe', 0, 10);

-- Dumping structure for table xxshop.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ma_kh` int NOT NULL AUTO_INCREMENT,
  `mat_khau` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `kich_hoat` tinyint(1) NOT NULL DEFAULT '0',
  `hinh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `vai_tro` tinyint(1) NOT NULL DEFAULT '0',
  `user_name` varchar(50) NOT NULL,
  PRIMARY KEY (`ma_kh`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table xxshop.users: ~5 rows (approximately)
INSERT INTO `users` (`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`, `user_name`) VALUES
	(1, '123123', 'hoanganh', 1, '0', 'anh@gmail.com', 1, 'anhhm'),
	(2, '123123', 'hoang', 1, '0', 'anh@gmail.com', 0, 'anhhm'),
	(7, 'Ánh', '123', 1, '', 'anhhmph46019@fpt.edu.vn', 0, 'Hoàng'),
	(11, 'a', 'tesst', 1, '', '123123@gmail.com', 1, '123123'),
	(12, 'Ánh', '123', 1, '', 'anhhmph46019@fpt.edu.vn', 0, 'Hoàng'),
	(13, 'Ánh', '123', 1, 'ca1.jpg', 'anhhmph46019@fpt.edu.vn', 1, 'Hoàng');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
