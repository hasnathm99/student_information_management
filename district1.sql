-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2018 at 10:17 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`) VALUES
(1, 'Barguna '),
(2, 'Bhola'),
(3, ' Barisal '),
(4, 'Bagerhat'),
(5, 'Bogra '),
(6, 'Bandarban '),
(7, 'Brahmanbaria '),
(8, 'Chittagong '),
(9, 'Comilla '),
(10, 'Cox\'s Bazar'),
(11, 'Chandpur '),
(12, 'Chapainawabganj '),
(13, 'Chuadanga '),
(14, 'Dinajpur'),
(15, 'Dhaka'),
(16, ' Faridpur '),
(17, 'Feni '),
(18, 'Gazipur '),
(19, 'Gopalganj '),
(20, 'Gaibandha '),
(21, 'Habiganj '),
(22, 'Jhenaidah '),
(23, 'Jessore '),
(24, 'Jhalakathi '),
(25, 'Jamalpur '),
(26, 'Joypurhat'),
(27, 'Kurigram '),
(28, 'Khagrachari '),
(29, 'Kushtia '),
(30, 'Khulna'),
(31, ' Kishoreganj '),
(32, 'Lalmonirhat '),
(33, 'Laxmipur '),
(34, 'Mymensingh '),
(35, ' Maulvibazar '),
(36, 'Magura '),
(37, 'Meherpur '),
(38, 'Manikganj '),
(39, 'Munshiganj'),
(40, ' Madaripur '),
(41, 'Narayanganj '),
(42, 'Narsingdi '),
(43, 'Netrokona '),
(44, 'Nilphamari '),
(45, 'Narail '),
(46, 'Naogaon'),
(47, ' Natore '),
(48, 'Noakhali '),
(49, 'Pabna '),
(50, 'Patuakhali '),
(51, 'Panchagarh '),
(52, 'Pirojpur '),
(53, 'Rangpur '),
(54, 'Rajshahi '),
(55, 'Rangamati '),
(56, 'Rajbari  '),
(57, 'Sherpur'),
(58, ' Sunamganj '),
(59, 'Sylhet '),
(60, 'Satkhira '),
(61, 'Sirajganj '),
(62, 'Shariatpur '),
(63, 'Tangail '),
(64, 'Thakurgaon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
