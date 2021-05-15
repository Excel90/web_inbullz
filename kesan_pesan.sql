-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 07:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inbullz`
--

-- --------------------------------------------------------

--
-- Table structure for table `kesan_pesan`
--

CREATE TABLE `kesan_pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kesan` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kesan_pesan`
--

INSERT INTO `kesan_pesan` (`id`, `nama`, `kesan`, `pesan`) VALUES
(5, 'kezia angeline', 'wakakakakwakakakakwakakakakwakakakakwakakakakwakakakakwakakakakwakakakak\r\nwokwokowokwokowokwokowokwokowokwokowokwokowokwokowokwokowokwokowokwokowokwokowokwokowokwoko', 'lalallalalalalallalalalalallalalalalallalalalalallalalalalallalalalalallalalalalallalalalalallalalalalallalalalalallalalalalallalala\r\nlilillilillilillilillilillilillilillilillilillilillilillilillilillilillilillilillilillilillilillilillilillilillilillilill'),
(6, 'yehezkiel', 'wallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaa\r\nwililliliwililliliwililliliwililliliwilillili\r\nwololowololowololowololowololowololowo', 'nononononononononononononononono\r\nnananananana\r\nxixiixiiiiiiiixxiixiixixxixixiixixixixiixixixixiixixiixixixixiix'),
(7, 'yehezkiel', 'wallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaa\r\nwililliliwililliliwililliliwililliliwilillili\r\nwololowololowololowololowololowololowo', 'nononononononononononononononono\r\nnananananana\r\nxixiixiiiiiiiixxiixiixixxixixiixixixixiixixixixiixixiixixixixiix'),
(8, 'yehezkiel', 'wallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaawallalalalaa\r\nwililliliwililliliwililliliwililliliwilillili\r\nwololowololowololowololowololowololowo', 'nononononononononononononononono\r\nnananananana\r\nxixiixiiiiiiiixxiixiixixxixixiixixixixiixixixixiixixiixixixixiix');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kesan_pesan`
--
ALTER TABLE `kesan_pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kesan_pesan`
--
ALTER TABLE `kesan_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
