-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 07:28 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dropdown`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id_request` int(11) NOT NULL,
  `nama_request` varchar(30) NOT NULL,
  `request_dari` varchar(20) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id_request`, `nama_request`, `request_dari`, `tanggal_request`, `pic`) VALUES
(64, 'HP Ketinggalan', 'Kiek', '2019-02-28 08:16:06', 'Rachmad Syahrul');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id_response` int(11) NOT NULL,
  `response` text NOT NULL,
  `tanggal_response` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL,
  `id_request` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id_response`, `response`, `tanggal_response`, `status`, `id_request`) VALUES
(3, 'Sedang Aman', '2019-02-28 08:54:16', 'Pending', 64),
(4, 'Ada Pohon Tumbang', '2019-02-28 09:36:49', 'Pending', 64),
(5, 'Sedang Dicarikan                            ', '2019-02-28 09:39:57', 'Open', 64);

-- --------------------------------------------------------

--
-- Stand-in structure for view `semua`
-- (See below for the actual view)
--
CREATE TABLE `semua` (
`id_request` int(11)
,`nama_request` varchar(30)
,`request_dari` varchar(20)
,`tanggal_request` timestamp
,`pic` varchar(20)
,`id_response` int(11)
,`response` text
,`tanggal_response` timestamp
,`status` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `ukuran_file` int(20) NOT NULL,
  `id_request` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id_file`, `nama_file`, `ukuran_file`, `id_request`) VALUES
(8, '2110161028_Rifki Dwi Achsani T.pdf', 123341, 64),
(14, '2110161028_Rifki Dwi Achsani T.pdf', 139060, 64);

-- --------------------------------------------------------

--
-- Structure for view `semua`
--
DROP TABLE IF EXISTS `semua`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `semua`  AS  select `biodata`.`id_request` AS `id_request`,`biodata`.`nama_request` AS `nama_request`,`biodata`.`request_dari` AS `request_dari`,`biodata`.`tanggal_request` AS `tanggal_request`,`biodata`.`pic` AS `pic`,`response`.`id_response` AS `id_response`,`response`.`response` AS `response`,`response`.`tanggal_response` AS `tanggal_response`,`response`.`status` AS `status` from (`biodata` join `response`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id_response`),
  ADD KEY `id_request` (`id_request`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `id_request` (`id_request`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id_response` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `response`
--
ALTER TABLE `response`
  ADD CONSTRAINT `response_ibfk_1` FOREIGN KEY (`id_request`) REFERENCES `biodata` (`id_request`);

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`id_request`) REFERENCES `biodata` (`id_request`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
