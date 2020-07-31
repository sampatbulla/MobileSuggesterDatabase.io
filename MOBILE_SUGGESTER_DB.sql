-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2019 at 04:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MOBILE_SUGGESTER_DB`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SETCAMERA` (`NO` INT, `REAR` INT, `FRONT` INT)  BEGIN
INSERT INTO CAMERA(S_id,No_of_cameras,Rear_primary_camera,Front_camera) VALUES (@PROC,NO,REAR,FRONT);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `CAMERA`
--

CREATE TABLE `CAMERA` (
  `S_id` int(11) NOT NULL,
  `No_of_cameras` int(11) DEFAULT NULL,
  `Rear_primary_camera` int(11) DEFAULT NULL,
  `Front_camera` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CAMERA`
--

INSERT INTO `CAMERA` (`S_id`, `No_of_cameras`, `Rear_primary_camera`, `Front_camera`) VALUES
(1, 3, 12, 24),
(2, 4, 12, 24),
(3, 4, 12, 24),
(4, 3, 12, 20),
(5, 3, 12, 20),
(6, 2, 12, 20),
(7, 2, 12, 12),
(8, 1, 12, 12),
(9, 2, 12, 12),
(10, 2, 12, 12),
(11, 1, 12, 8),
(12, 1, 12, 8),
(13, 3, 40, 24),
(14, 2, 32, 20),
(15, 3, 32, 24),
(16, 2, 20, 12),
(17, 5, 48, 12),
(18, 2, 24, 10),
(19, 3, 40, 24),
(20, 2, 40, 20),
(21, 3, 48, 24),
(22, 3, 48, 12),
(23, 3, 48, 20),
(24, 2, 12, 8),
(25, 3, 12, 8),
(26, 1, 12, 8),
(27, 1, 12, 8),
(28, 1, 12, 8),
(29, 1, 12, 8),
(30, 2, 12, 8),
(31, 2, 12, 8),
(32, 1, 12, 8),
(33, 1, 8, 8),
(34, 1, 12, 8),
(35, 1, 8, 8),
(36, 1, 12, 8),
(37, 1, 8, 8),
(38, 1, 4, 8),
(39, 1, 4, 8),
(40, 1, 6, 8),
(41, 4, 48, 24),
(42, 3, 48, 16),
(43, 2, 48, 16),
(44, 3, 48, 16),
(45, 2, 24, 12),
(46, 2, 24, 12),
(47, 1, 20, 10),
(48, 1, 20, 10),
(49, 1, 16, 8),
(50, 1, 16, 8),
(51, 1, 24, 16),
(52, 1, 20, 16),
(53, 3, 48, 24),
(54, 2, 32, 24),
(55, 2, 24, 20),
(56, 3, 48, 24),
(57, 3, 48, 24),
(58, 2, 12, 12),
(59, 3, 48, 24),
(60, 4, 64, 24),
(61, 4, 24, 16),
(62, 4, 32, 16),
(63, 3, 24, 12),
(64, 3, 24, 12),
(65, 2, 12, 8),
(66, 2, 12, 8),
(67, 2, 16, 12),
(68, 1, 12, 16),
(69, 2, 48, 16),
(70, 1, 16, 10),
(71, 1, 24, 10),
(72, 1, 24, 12),
(73, 1, 32, 12),
(74, 2, 48, 24),
(75, 2, 48, 24),
(76, 1, 12, 8),
(77, 1, 8, 8),
(78, 1, 8, 6),
(79, 1, 12, 10),
(80, 2, 16, 12),
(81, 2, 16, 16),
(82, 3, 24, 24),
(83, 3, 24, 24),
(84, 3, 32, 32),
(85, 3, 48, 48),
(86, 2, 16, 10),
(87, 2, 16, 12),
(88, 3, 24, 24),
(89, 3, 32, 32),
(90, 3, 48, 32),
(91, 1, 12, 12),
(92, 2, 12, 16),
(93, 3, 24, 16),
(94, 3, 48, 32),
(95, 1, 8, 8),
(96, 1, 12, 8),
(97, 1, 12, 12),
(98, 1, 12, 16),
(99, 2, 16, 12),
(100, 2, 12, 8),
(101, 2, 16, 10),
(102, 2, 12, 8),
(103, 1, 12, 8),
(104, 1, 8, 8),
(105, 1, 8, 8),
(106, 1, 8, 8),
(107, 1, 12, 8),
(108, 1, 16, 10),
(109, 2, 16, 12),
(110, 3, 48, 24),
(111, 3, 24, 24),
(112, 2, 12, 12),
(113, 2, 16, 12),
(114, 2, 12, 10),
(115, 2, 24, 16),
(116, 2, 16, 12),
(117, 2, 12, 12),
(118, 2, 24, 16),
(119, 2, 16, 16),
(120, 2, 24, 24),
(121, 2, 24, 16),
(122, 1, 32, 24),
(123, 3, 32, 24),
(124, 3, 32, 24),
(125, 1, 8, 8),
(126, 2, 12, 12),
(127, 3, 48, 16),
(128, 2, 12, 12),
(129, 2, 8, 10),
(130, 1, 8, 8),
(131, 2, 16, 16),
(132, 2, 12, 12),
(133, 2, 16, 16),
(134, 2, 12, 12),
(135, 2, 24, 16),
(136, 2, 24, 16),
(137, 3, 32, 24),
(138, 2, 24, 16),
(139, 2, 32, 24),
(140, 1, 8, 8),
(141, 2, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `CONNECTIVITY`
--

CREATE TABLE `CONNECTIVITY` (
  `Cn_id` int(11) NOT NULL,
  `Wifi` int(11) DEFAULT 0,
  `Bluetooth` int(11) DEFAULT 0,
  `NFC` int(11) DEFAULT 0,
  `Fingerprint_scanner` int(11) DEFAULT 0,
  `Face_unlock` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CONNECTIVITY`
--

INSERT INTO `CONNECTIVITY` (`Cn_id`, `Wifi`, `Bluetooth`, `NFC`, `Fingerprint_scanner`, `Face_unlock`) VALUES
(7, 0, 0, 0, 0, 0),
(6, 1, 1, 0, 0, 1),
(4, 1, 1, 0, 1, 0),
(3, 1, 1, 0, 1, 1),
(2, 1, 1, 1, 0, 1),
(5, 1, 1, 1, 1, 0),
(1, 1, 1, 1, 1, 1);

--
-- Triggers `CONNECTIVITY`
--
DELIMITER $$
CREATE TRIGGER `DUPLICACY_TEST4` BEFORE INSERT ON `CONNECTIVITY` FOR EACH ROW BEGIN  SET @PROC = 0; SELECT Cn_id INTO @PROC FROM CONNECTIVITY WHERE  Wifi =  NEW.Wifi AND Bluetooth = NEW.Bluetooth AND NFC =  NEW.NFC AND Fingerprint_scanner = NEW.Fingerprint_scanner AND Face_unlock =  NEW.Face_unlock ;  END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `DISPLAY`
--

CREATE TABLE `DISPLAY` (
  `Disp_id` int(11) NOT NULL,
  `Size` decimal(2,1) DEFAULT NULL,
  `Type_of_Display` varchar(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DISPLAY`
--

INSERT INTO `DISPLAY` (`Disp_id`, `Size`, `Type_of_Display`) VALUES
(1, '4.8', 'LCD'),
(16, '5.0', 'LCD'),
(17, '5.0', 'OLED'),
(2, '5.2', 'OLED'),
(3, '5.4', 'LCD'),
(4, '5.4', 'OLED'),
(5, '5.5', 'LCD'),
(6, '5.5', 'OLED'),
(7, '5.6', 'LCD'),
(8, '5.7', 'LCD'),
(9, '5.8', 'AMOLED'),
(10, '5.8', 'LCD'),
(11, '5.8', 'OLED'),
(12, '5.8', 'RETINA'),
(13, '5.9', 'AMOLED'),
(14, '5.9', 'LCD'),
(15, '5.9', 'OLED'),
(26, '6.0', 'AMOLED'),
(27, '6.0', 'LCD'),
(28, '6.0', 'OLED'),
(29, '6.0', 'RETINA'),
(18, '6.2', 'AMOLED'),
(19, '6.2', 'LCD'),
(20, '6.2', 'OLED'),
(21, '6.4', 'AMOLED'),
(22, '6.4', 'LCD'),
(23, '6.4', 'OLED'),
(24, '6.5', 'AMOLED'),
(25, '6.7', 'AMOLED');

--
-- Triggers `DISPLAY`
--
DELIMITER $$
CREATE TRIGGER `DUPLICACY_TEST2` BEFORE INSERT ON `DISPLAY` FOR EACH ROW BEGIN  SET @PROC = 0; SELECT Disp_id INTO @PROC FROM DISPLAY WHERE Size = NEW.Size AND Type_of_Display = NEW.Type_of_Display;  END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `PROCESSORS`
--

CREATE TABLE `PROCESSORS` (
  `Processors_id` int(11) NOT NULL,
  `P_name` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `P_brand` varchar(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PROCESSORS`
--

INSERT INTO `PROCESSORS` (`Processors_id`, `P_name`, `P_brand`) VALUES
(12, '430', 'Snapdragon'),
(13, '439', 'Snapdragon'),
(33, '5433', 'Exynos'),
(14, '625', 'Snapdragon'),
(10, '632', 'Snapdragon'),
(8, '636', 'Snapdragon'),
(7, '660', 'Snapdragon'),
(11, '665', 'Snapdragon'),
(16, '670', 'Snapdragon'),
(9, '675', 'Snapdragon'),
(6, '710', 'Snapdragon'),
(5, '712', 'Snapdragon'),
(15, '730', 'Snapdragon'),
(17, '730G', 'Snapdragon'),
(30, '7420', 'Exynos'),
(35, '7570', 'Exynos'),
(34, '7580', 'Exynos'),
(32, '7870', 'Exynos'),
(29, '7872', 'Exynos'),
(31, '7880', 'Exynos'),
(27, '7885', 'Exynos'),
(28, '7904', 'Exynos'),
(1, '835', 'Snapdragon'),
(2, '845', 'Snapdragon'),
(18, '850', 'Snapdragon'),
(3, '855', 'Snapdragon'),
(4, '855+', 'Snapdragon'),
(23, '8890', 'Exynos'),
(22, '8895', 'Exynos'),
(26, '9609', 'Exynos'),
(25, '9610', 'Exynos'),
(24, '9611', 'Exynos'),
(21, '9810', 'Exynos'),
(20, '9820', 'Exynos'),
(19, '9825', 'Exynos'),
(53, 'a10', 'Apple'),
(50, 'a11', 'Apple'),
(51, 'a12', 'Apple'),
(52, 'a13', 'Apple'),
(46, 'a22', 'Mediatek'),
(55, 'a8', 'Apple'),
(54, 'a9', 'Apple'),
(36, 'g90t', 'Mediatek'),
(37, 'g90tx', 'Mediatek'),
(49, 'p10', 'Mediatek'),
(45, 'p20', 'Mediatek'),
(43, 'p22', 'Mediatek'),
(44, 'p25', 'Mediatek'),
(42, 'p60', 'Mediatek'),
(40, 'p65', 'Mediatek'),
(41, 'p70', 'Mediatek'),
(38, 'p90', 'Mediatek'),
(47, 'x23', 'Mediatek'),
(48, 'x25', 'Mediatek'),
(39, 'x30', 'Mediatek');

--
-- Triggers `PROCESSORS`
--
DELIMITER $$
CREATE TRIGGER `DUPLICACY_TEST1` BEFORE INSERT ON `PROCESSORS` FOR EACH ROW BEGIN  SET @PROC = 0; SET @PROC=( SELECT Processors_id FROM PROCESSORS WHERE `P_name` = NEW.`P_name` AND `P_brand` = NEW.`P_brand`);  END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `SMARTPHONE`
--

CREATE TABLE `SMARTPHONE` (
  `S_id` int(11) NOT NULL,
  `Smartphone_name` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Ram` int(11) DEFAULT NULL,
  `Storage` int(11) DEFAULT NULL,
  `Release_year` int(11) DEFAULT NULL,
  `Battery` int(11) DEFAULT NULL,
  `Processor_id` int(11) DEFAULT NULL,
  `Soft_id` int(11) DEFAULT NULL,
  `Cn_id` int(11) DEFAULT NULL,
  `Disp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SMARTPHONE`
--

INSERT INTO `SMARTPHONE` (`S_id`, `Smartphone_name`, `Price`, `Ram`, `Storage`, `Release_year`, `Battery`, `Processor_id`, `Soft_id`, `Cn_id`, `Disp_id`) VALUES
(24, 'APPLE 11', 64000, 6, 512, 2019, 2800, 52, 9, 2, 26),
(26, 'PIXEL 3', 54000, 6, 512, 2018, 3300, 2, 3, 1, 26),
(25, 'APPLE 11 PRO', 84000, 6, 512, 2019, 3400, 52, 9, 2, 21),
(39, 'APPLE 5', 25000, 2, 256, 2014, 2100, 55, 9, 5, 1),
(40, 'APPLE 5S', 28000, 2, 512, 2014, 2300, 55, 9, 5, 16),
(37, 'APPLE 6', 29000, 3, 256, 2015, 1900, 54, 9, 5, 17),
(38, 'APPLE 6S', 35000, 3, 256, 2015, 2200, 54, 9, 5, 2),
(35, 'APPLE 7', 35000, 4, 256, 2016, 2500, 53, 9, 5, 17),
(36, 'APPLE 7 PLUS', 39000, 4, 256, 2016, 2850, 53, 9, 5, 4),
(33, 'APPLE 8', 39000, 4, 256, 2017, 2700, 50, 9, 5, 6),
(34, 'APPLE 8 PLUS', 42000, 4, 256, 2017, 2900, 50, 9, 5, 15),
(141, 'APPLE X', 58000, 6, 512, 2018, 3300, 51, 9, 1, 12),
(32, 'APPLE XR', 44000, 4, 512, 2018, 2800, 51, 9, 2, 14),
(30, 'APPLE XS', 96000, 6, 512, 2018, 3200, 51, 9, 2, 12),
(31, 'APPLE XS MAX', 121000, 6, 512, 2018, 3400, 51, 9, 2, 29),
(41, 'HONOR 20 PRO', 64000, 8, 512, 2019, 4000, 2, 10, 1, 23),
(15, 'HUAWEI MATE 20 PRO', 59990, 8, 512, 2018, 4000, 2, 10, 1, 21),
(16, 'HUAWEI MATE10 PRO', 42999, 6, 256, 2017, 3700, 1, 10, 1, 18),
(14, 'HUAWEI P20 PRO', 49990, 8, 512, 2018, 4000, 2, 10, 1, 21),
(13, 'HUAWEI P30 PRO', 66990, 8, 512, 2019, 4000, 3, 10, 1, 25),
(99, 'LENOVO K10 NOTE ', 12000, 6, 64, 2019, 4500, 6, 1, 3, 27),
(100, 'LENOVO K10 POWER ', 10000, 6, 64, 2019, 4200, 7, 1, 3, 27),
(103, 'LENOVO K6 NOTE ', 11000, 6, 64, 2017, 4000, 13, 1, 3, 5),
(104, 'LENOVO K6 POWER', 9300, 6, 64, 2017, 4000, 12, 1, 3, 5),
(101, 'LENOVO K8 NOTE ', 11000, 6, 64, 2018, 4000, 7, 1, 3, 5),
(102, 'LENOVO K8 POWER ', 9900, 6, 64, 2018, 4000, 8, 1, 3, 5),
(55, 'MI 7', 29000, 8, 512, 2018, 3400, 1, 4, 1, 28),
(54, 'MI 8', 32000, 8, 512, 2019, 3700, 2, 4, 1, 20),
(53, 'MI 9', 35000, 8, 512, 2019, 4000, 3, 4, 1, 23),
(125, 'MI A1', 9000, 4, 128, 2017, 3300, 14, 3, 3, 27),
(126, 'MI A2', 10000, 6, 128, 2018, 3500, 8, 3, 3, 27),
(127, 'MI A3', 11000, 6, 128, 2019, 3700, 11, 3, 3, 22),
(106, 'MOTOROLA G4', 9999, 4, 64, 2016, 3300, 14, 3, 3, 3),
(105, 'MOTOROLA G4 PLUS', 12000, 4, 64, 2016, 3500, 10, 3, 3, 3),
(107, 'MOTOROLA G5', 9999, 4, 64, 2017, 3500, 14, 3, 3, 3),
(108, 'MOTOROLA G5 PLUS', 11000, 4, 64, 2017, 3700, 8, 3, 3, 7),
(109, 'MOTOROLA G5S PLUS', 12000, 4, 128, 2017, 4000, 7, 3, 3, 27),
(110, 'MOTOROLA ONE ACTION', 19999, 4, 128, 2019, 4000, 11, 3, 3, 22),
(112, 'MOTOROLA ONE MACRO', 12000, 8, 64, 2019, 4000, 8, 3, 3, 22),
(111, 'MOTOROLA ONE POWER', 16000, 4, 128, 2019, 5000, 7, 3, 3, 22),
(130, 'NOKIA 2', 6000, 4, 128, 2017, 3000, 43, 3, 3, 16),
(129, 'NOKIA 5', 7000, 6, 128, 2017, 3000, 44, 3, 3, 10),
(134, 'NOKIA 5.1', 10000, 6, 128, 2018, 4000, 42, 3, 3, 5),
(128, 'NOKIA 6', 8000, 6, 128, 2017, 3000, 42, 3, 3, 27),
(132, 'NOKIA 6.1', 9500, 6, 128, 2018, 4000, 41, 3, 3, 28),
(131, 'NOKIA 7', 12000, 6, 128, 2017, 4000, 41, 3, 3, 6),
(133, 'NOKIA 7.1', 11000, 6, 128, 2018, 4000, 38, 3, 3, 28),
(138, 'NOKIA 8', 16000, 8, 256, 2017, 4000, 7, 3, 3, 23),
(139, 'NOKIA 8.1', 19000, 8, 256, 2019, 4500, 15, 3, 3, 23),
(17, 'NOKIA PUREVIEW 9', 48799, 10, 512, 2019, 5000, 3, 3, 1, 25),
(49, 'ONEPLUS 3', 29000, 8, 512, 2017, 3000, 1, 2, 1, 26),
(50, 'ONEPLUS 3T', 32000, 8, 512, 2017, 3200, 1, 2, 1, 26),
(47, 'ONEPLUS 5', 32000, 8, 512, 2018, 3200, 1, 2, 1, 18),
(48, 'ONEPLUS 5T', 33000, 8, 512, 2018, 3400, 1, 2, 1, 18),
(45, 'ONEPLUS 6', 29000, 8, 512, 2018, 3400, 2, 2, 1, 21),
(46, 'ONEPLUS 6T', 32000, 8, 512, 2018, 3400, 2, 2, 1, 21),
(43, 'ONEPLUS 7', 34000, 8, 512, 2019, 3400, 3, 2, 1, 21),
(44, 'ONEPLUS 7 PRO', 54000, 8, 512, 2019, 4000, 3, 2, 1, 25),
(42, 'ONEPLUS 7T', 38000, 8, 512, 2019, 3900, 4, 2, 1, 25),
(117, 'OPPO F11', 18000, 8, 128, 2018, 3500, 7, 8, 3, 22),
(118, 'OPPO F11 PRO', 24000, 8, 128, 2018, 3900, 41, 8, 3, 22),
(20, 'OPPO FIND X', 57490, 8, 512, 2018, 4000, 2, 8, 1, 24),
(135, 'OPPO K1', 13000, 6, 128, 2018, 3300, 7, 8, 3, 10),
(136, 'OPPO K2', 14000, 6, 256, 2019, 3500, 7, 8, 3, 27),
(137, 'OPPO K3', 15000, 6, 256, 2019, 4000, 15, 8, 3, 23),
(119, 'OPPO R15', 19000, 8, 128, 2018, 3500, 7, 8, 3, 22),
(120, 'OPPO R15 PRO', 15000, 8, 128, 2018, 4000, 41, 8, 3, 22),
(29, 'PIXEL 2', 44000, 6, 512, 2017, 2700, 1, 3, 1, 9),
(28, 'PIXEL 2XL', 48000, 6, 512, 2017, 3000, 1, 3, 1, 26),
(52, 'PIXEL 3A', 29000, 6, 256, 2019, 2800, 9, 3, 1, 4),
(51, 'PIXEL 3A XL', 34000, 6, 256, 2019, 3200, 5, 3, 1, 11),
(27, 'PIXEL 3XL', 59999, 6, 512, 2018, 2800, 2, 3, 1, 18),
(58, 'POCO F1', 15000, 8, 512, 2018, 4000, 2, 4, 1, 19),
(62, 'REALM 5 PRO', 15000, 6, 128, 2019, 4000, 15, 5, 3, 27),
(66, 'REALME 1', 11000, 4, 64, 2018, 3000, 45, 5, 3, 27),
(65, 'REALME 2', 12000, 4, 64, 2018, 3000, 46, 5, 3, 19),
(63, 'REALME 3', 13000, 6, 128, 2019, 3700, 46, 5, 3, 19),
(64, 'REALME 3 PRO', 14000, 6, 128, 2019, 3900, 42, 5, 3, 22),
(61, 'REALME 5', 14000, 6, 128, 2019, 4000, 7, 5, 3, 22),
(67, 'REALME U1', 12000, 4, 64, 2018, 3500, 41, 5, 3, 27),
(59, 'REALME X', 15000, 6, 256, 2019, 4000, 5, 5, 3, 22),
(60, 'REALME XT', 16000, 6, 256, 2019, 4200, 5, 5, 3, 21),
(78, 'REDMI 5', 4500, 4, 32, 2018, 3200, 12, 4, 3, 3),
(77, 'REDMI 6', 5000, 4, 64, 2018, 3300, 12, 4, 3, 10),
(76, 'REDMI 7', 6000, 4, 64, 2019, 3500, 13, 4, 3, 27),
(140, 'REDMI GO', 4500, 3, 32, 2018, 3500, 12, 3, 6, 16),
(57, 'REDMI K20', 19999, 8, 512, 2019, 4000, 3, 4, 1, 21),
(56, 'REDMI K20 PRO', 28000, 8, 512, 2019, 4000, 3, 4, 1, 21),
(70, 'REDMI NOTE 5', 9999, 4, 128, 2017, 3300, 14, 4, 3, 10),
(72, 'REDMI NOTE 6', 11000, 4, 128, 2018, 3800, 8, 4, 3, 27),
(73, 'REDMI NOTE 6 PRO', 12000, 4, 128, 2018, 4000, 7, 4, 3, 19),
(74, 'REDMI NOTE 7', 12000, 6, 128, 2019, 3700, 7, 4, 3, 22),
(75, 'REDMI NOTE 7 PRO', 13000, 6, 128, 2019, 4000, 9, 4, 3, 22),
(71, 'REDMI NOTE5 PRO', 11000, 4, 128, 2017, 3700, 8, 4, 3, 27),
(68, 'REDMI Y2', 12000, 4, 64, 2018, 3700, 8, 4, 3, 10),
(69, 'REDMI Y3', 14000, 4, 64, 2019, 4000, 11, 4, 3, 19),
(79, 'SAMSUNG A10', 7900, 4, 32, 2019, 4000, 29, 6, 6, 22),
(86, 'SAMSUNG A10S', 8500, 4, 64, 2019, 4000, 29, 6, 3, 21),
(80, 'SAMSUNG A20', 11000, 4, 32, 2019, 4000, 28, 6, 3, 22),
(87, 'SAMSUNG A20S', 11500, 4, 64, 2019, 4000, 28, 6, 3, 21),
(81, 'SAMSUNG A30', 13000, 4, 64, 2019, 4000, 27, 6, 3, 21),
(88, 'SAMSUNG A30S', 14000, 4, 64, 2019, 4000, 25, 6, 3, 21),
(82, 'SAMSUNG A50', 17000, 4, 64, 2019, 4000, 25, 6, 3, 21),
(89, 'SAMSUNG A50S', 22000, 6, 128, 2019, 4000, 24, 6, 3, 21),
(83, 'SAMSUNG A60', 21000, 4, 64, 2019, 4050, 24, 6, 3, 21),
(84, 'SAMSUNG A70', 28000, 4, 128, 2019, 4500, 9, 6, 1, 25),
(90, 'SAMSUNG A70S', 29000, 6, 512, 2019, 4500, 17, 6, 3, 25),
(85, 'SAMSUNG A80', 44000, 4, 512, 2019, 4500, 15, 6, 1, 25),
(95, 'SAMSUNG J2', 8000, 4, 64, 2018, 3000, 43, 7, 6, 3),
(96, 'SAMSUNG J6', 12000, 4, 64, 2018, 3300, 44, 7, 3, 3),
(97, 'SAMSUNG J7 ', 14000, 4, 64, 2018, 3500, 8, 7, 3, 8),
(98, 'SAMSUNG J7 PRIME', 15000, 4, 128, 2018, 3700, 7, 7, 3, 10),
(91, 'SAMSUNG M10', 9000, 4, 64, 2019, 3500, 29, 6, 6, 22),
(92, 'SAMSUNG M20', 12000, 4, 64, 2019, 3700, 28, 6, 3, 22),
(93, 'SAMSUNG M30', 14000, 6, 64, 2019, 4000, 26, 6, 3, 21),
(94, 'SAMSUNG M30S', 16000, 6, 128, 2019, 6000, 24, 6, 3, 21),
(1, 'SAMSUNG NOTE 10', 69999, 8, 1024, 2019, 4000, 3, 6, 1, 21),
(3, 'SAMSUNG NOTE 10 5G', 92410, 8, 1024, 2019, 4700, 3, 6, 1, 25),
(2, 'SAMSUNG NOTE 10 PLUS', 79999, 8, 1024, 2019, 4300, 3, 6, 1, 25),
(8, 'SAMSUNG NOTE 8', 46900, 6, 512, 2017, 3500, 2, 6, 1, 21),
(7, 'SAMSUNG NOTE 9', 55990, 8, 512, 2018, 3700, 2, 6, 1, 21),
(4, 'SAMSUNG S10', 61900, 8, 512, 2019, 3700, 3, 6, 1, 21),
(5, 'SAMSUNG S10 PLUS', 69800, 8, 1024, 2019, 4000, 3, 6, 1, 21),
(6, 'SAMSUNG S10E', 48450, 8, 512, 2019, 3700, 3, 6, 1, 13),
(12, 'SAMSUNG S8 ', 26990, 6, 256, 2017, 3500, 1, 6, 1, 9),
(11, 'SAMSUNG S8 PLUS', 40810, 6, 256, 2017, 3700, 1, 6, 1, 18),
(10, 'SAMSUNG S9', 43999, 8, 512, 2018, 3700, 2, 6, 1, 21),
(9, 'SAMSUNG S9 PLUS', 46000, 8, 512, 2018, 4000, 2, 6, 1, 21),
(22, 'VIVO IQOO ', 31980, 8, 512, 2019, 4000, 3, 5, 1, 25),
(21, 'VIVO IQOO 5G', 37980, 8, 512, 2019, 4000, 3, 5, 1, 25),
(18, 'VIVO NEX ', 31000, 6, 256, 2018, 3700, 1, 5, 3, 24),
(19, 'VIVO NEX 2', 52080, 8, 512, 2019, 4000, 2, 5, 1, 21),
(23, 'VIVO NEX3', 39000, 8, 512, 2019, 4000, 3, 5, 1, 24),
(114, 'VIVO V11', 13000, 8, 128, 2018, 3500, 41, 5, 3, 22),
(113, 'VIVO V11 PRO', 16000, 8, 128, 2018, 4000, 7, 5, 3, 22),
(116, 'VIVO V15', 15000, 8, 128, 2019, 3500, 41, 5, 3, 22),
(115, 'VIVO V15 PRO', 17000, 8, 128, 2019, 4000, 7, 5, 3, 22),
(121, 'VIVO V17', 19000, 8, 128, 2019, 4000, 7, 5, 3, 22),
(122, 'VIVO V17 PRO', 28000, 8, 128, 2019, 4500, 9, 5, 3, 22),
(123, 'VIVO Z1 PRO', 14000, 6, 128, 2019, 5000, 5, 5, 3, 22),
(124, 'VIVO Z1X', 15000, 6, 128, 2019, 5000, 5, 5, 3, 22);

--
-- Triggers `SMARTPHONE`
--
DELIMITER $$
CREATE TRIGGER `DUPLICACY_TEST5` AFTER INSERT ON `SMARTPHONE` FOR EACH ROW BEGIN  SET @PROC = NEW.S_id;  END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `SOFTWARE`
--

CREATE TABLE `SOFTWARE` (
  `Soft_id` int(11) NOT NULL,
  `Ui` varchar(18) CHARACTER SET utf8 DEFAULT NULL,
  `Os` varchar(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SOFTWARE`
--

INSERT INTO `SOFTWARE` (`Soft_id`, `Ui`, `Os`) VALUES
(8, 'Color', 'Android'),
(10, 'Emui', 'Android'),
(5, 'Funtouch', 'Android'),
(9, 'Ios', 'Ios'),
(12, 'Lgux', 'Android'),
(4, 'Miui', 'Android'),
(14, 'Nubiaui', 'Android'),
(6, 'Oneui', 'Android'),
(2, 'Oxygen', 'Android'),
(7, 'Samsung Experience', 'Android'),
(11, 'Sense', 'Android'),
(3, 'Stock', 'Android'),
(13, 'Xperia', 'Android'),
(15, 'Zenui', 'Android'),
(1, 'Zui', 'Android');

--
-- Triggers `SOFTWARE`
--
DELIMITER $$
CREATE TRIGGER `DUPLICACY_TEST3` BEFORE INSERT ON `SOFTWARE` FOR EACH ROW BEGIN  SET @PROC = 0; SELECT Soft_id INTO @PROC FROM SOFTWARE WHERE  Ui=  NEW.Ui AND Os= NEW.Os;  END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CAMERA`
--
ALTER TABLE `CAMERA`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `CONNECTIVITY`
--
ALTER TABLE `CONNECTIVITY`
  ADD PRIMARY KEY (`Cn_id`),
  ADD UNIQUE KEY `Wifi` (`Wifi`,`Bluetooth`,`NFC`,`Fingerprint_scanner`,`Face_unlock`);

--
-- Indexes for table `DISPLAY`
--
ALTER TABLE `DISPLAY`
  ADD PRIMARY KEY (`Disp_id`),
  ADD UNIQUE KEY `Size` (`Size`,`Type_of_Display`);

--
-- Indexes for table `PROCESSORS`
--
ALTER TABLE `PROCESSORS`
  ADD PRIMARY KEY (`Processors_id`),
  ADD UNIQUE KEY `P_name` (`P_name`,`P_brand`);

--
-- Indexes for table `SMARTPHONE`
--
ALTER TABLE `SMARTPHONE`
  ADD PRIMARY KEY (`S_id`),
  ADD UNIQUE KEY `Smartphone_name` (`Smartphone_name`,`Price`,`Ram`,`Storage`,`Release_year`,`Battery`,`Processor_id`,`Soft_id`,`Cn_id`,`Disp_id`),
  ADD KEY `Soft_id` (`Soft_id`),
  ADD KEY `Cn_id` (`Cn_id`),
  ADD KEY `Processor_id` (`Processor_id`),
  ADD KEY `Disp_id` (`Disp_id`);

--
-- Indexes for table `SOFTWARE`
--
ALTER TABLE `SOFTWARE`
  ADD PRIMARY KEY (`Soft_id`),
  ADD UNIQUE KEY `Ui` (`Ui`,`Os`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CAMERA`
--
ALTER TABLE `CAMERA`
  MODIFY `S_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `CONNECTIVITY`
--
ALTER TABLE `CONNECTIVITY`
  MODIFY `Cn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `DISPLAY`
--
ALTER TABLE `DISPLAY`
  MODIFY `Disp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `PROCESSORS`
--
ALTER TABLE `PROCESSORS`
  MODIFY `Processors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `SMARTPHONE`
--
ALTER TABLE `SMARTPHONE`
  MODIFY `S_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `SOFTWARE`
--
ALTER TABLE `SOFTWARE`
  MODIFY `Soft_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CAMERA`
--
ALTER TABLE `CAMERA`
  ADD CONSTRAINT `CAMERA_ibfk_1` FOREIGN KEY (`S_id`) REFERENCES `SMARTPHONE` (`S_id`);

--
-- Constraints for table `SMARTPHONE`
--
ALTER TABLE `SMARTPHONE`
  ADD CONSTRAINT `SMARTPHONE_ibfk_1` FOREIGN KEY (`Soft_id`) REFERENCES `SOFTWARE` (`Soft_id`),
  ADD CONSTRAINT `SMARTPHONE_ibfk_2` FOREIGN KEY (`Cn_id`) REFERENCES `CONNECTIVITY` (`Cn_id`),
  ADD CONSTRAINT `SMARTPHONE_ibfk_3` FOREIGN KEY (`Processor_id`) REFERENCES `PROCESSORS` (`Processors_id`),
  ADD CONSTRAINT `SMARTPHONE_ibfk_4` FOREIGN KEY (`Disp_id`) REFERENCES `DISPLAY` (`Disp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
