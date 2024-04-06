-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.34 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for medicarehospital_db
CREATE DATABASE IF NOT EXISTS `medicarehospital_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `medicarehospital_db`;

-- Dumping structure for table medicarehospital_db.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `adminEmail` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`adminEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table medicarehospital_db.admin: ~1 rows (approximately)
INSERT INTO `admin` (`adminEmail`, `password`) VALUES
	('admin@gmail.com', '12345');

-- Dumping structure for table medicarehospital_db.patient
CREATE TABLE IF NOT EXISTS `patient` (
  `Email` varchar(100) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'PENDING',
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table medicarehospital_db.patient: ~2 rows (approximately)
INSERT INTO `patient` (`Email`, `Name`, `Mobile`, `Address`, `Status`) VALUES
	('Amasha@gmail.com', 'Amasha', '0764213724', '40/6,A,  Bellanthara Road, Dehiwala', 'PENDING'),
	('sankaudeshika123@gmail.com', 'Sanka', '0764213724', '40/6 Bellanthara road, Dehiwala', 'DONE');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
