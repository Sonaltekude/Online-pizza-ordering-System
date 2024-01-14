-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 04:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soprt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblslider2`
--

CREATE TABLE `tblslider2` (
  `idslider` int(10) NOT NULL,
  `sliderdata` varchar(500) NOT NULL,
  `sliderimage` varchar(500) NOT NULL,
  `insertdatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblslider2`
--

INSERT INTO `tblslider2` (`idslider`, `sliderdata`, `sliderimage`, `insertdatetime`) VALUES
(13, 'Suryakumar Yadav', '2023-03-24 09-13-0021.jpg', '2023-03-24 09:13:00'),
(14, 'Team', '2023-03-24 09-13-3322.jpg', '2023-03-24 09:13:33'),
(15, 'Football', '2023-03-24 09-14-0123.jpg', '2023-03-24 09:14:01'),
(17, 'welcome', '2023-03-24 07-07-4504.jpg', '2023-03-24 07:07:45'),
(18, 'fghjkl;', '2023-04-09 07-28-2503.jpg', '2023-04-09 07:28:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblslider2`
--
ALTER TABLE `tblslider2`
  ADD PRIMARY KEY (`idslider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblslider2`
--
ALTER TABLE `tblslider2`
  MODIFY `idslider` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
