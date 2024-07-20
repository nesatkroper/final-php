-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2024 at 04:02 AM
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
-- Database: `finalass`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `gender`, `mobile`, `email`) VALUES
(1, 'devnun', 'Male', '564564564', 'phanunsuon@hotmail.com'),
(3, 'Ho Laiheang', 'Female', '10101010101', 'phanunsuon@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int NOT NULL,
  `pic` varchar(75) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mobile` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pob` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `pic`, `name`, `gender`, `mobile`, `email`, `dob`, `pob`) VALUES
(9, '669b2fee70114.jpg', 'Jack Sparow', 'Male', '546456', 'phanunsuon@hotmail.com', '2024-06-30', 'Siem Reap'),
(10, '669b302ad461b.jpg', 'nun', 'Male', '54564', 'phanunsuon@hotmail.com', '2024-07-13', 'Siem Reap'),
(11, '669b30939f7e9.jpg', 'admin', 'Male', '4987987', 'phanunsuon@hotmail.com', '2024-07-11', 'Siem Reap'),
(17, '669b309c6f13d.jpg', 'Suon Phanun', 'Male', '5435', 'phanunsuon@hotmail.com', '2024-07-02', 'Siem Reap'),
(18, '669b30a3cf0ce.jpg', 'devnun', 'Male', '5643', 'phanunsuon@hotmail.com', '2024-07-03', 'Siem Reap'),
(19, '669b30aaacaaa.jpg', 'Suon Phanun', 'Male', '54654', 'phanunsuon@hotmail.com', '2024-07-04', 'Siem Reap'),
(20, '669b30b68ab0f.jpg', 'devnun', 'Male', '4536435534', 'phanunsuon@hotmail.com', '2024-07-07', 'Siem Reap');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int NOT NULL,
  `user` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `user`, `pass`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
