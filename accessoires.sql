-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 06:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accessoires`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `photo_url` varchar(255) DEFAULT NULL,
  `price` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `photo_url`, `price`) VALUES
(1, 'AirPods', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcR6Z8SQzZrEPBNXuxWeMOiGra_8HDaJGSZA6Py_-kbKVqaDTn3UNLSm7KlEcRAen8ql9Z_tL73mf7xrz65tVxlseLOCuV31bWQIXxMw-RJaUQMR9P_U8-_Uxg&usqp=CAE', 159.00),
(2, 'AirPods Pro', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSrMqB87TpcPj0o9oU73t2wj0gd8zivd18puX1H5wXf0lfloFndyamHlFNBJ_3fX3j23XbRdrwj-_b2YvIngijdUhfiic0wUqZFmB0v63H3gn4VA00PhnJoJw&usqp=CAE', 279.00),
(3, '8-pin charger', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTMjdo6qxregW11tv-Jqgu1tfoOwhSXySEcvdtqPZEp2sjx3D93w_3HkS1REqT_hleKyxwdtnoP4Io5TRmdg67WLPJiOR3bQoOZS8buYV5VkR13VhxfteUF&usqp=CAE', 9.99),
(4, 'USB-C charger', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRyPf5ykYb5eFrw80_gVLVCtDH6On3ZxXkqJcTJ66jhZMte1gvSEkJBrEl5JJFkiq64GcANuRdePhyjDNIDO9_5vh2yadUKA_L-5JgIzB2Vy4zohDPChu-I&usqp=CAE', 9.99),
(5, 'Charger head', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSYUwOZzVVn8ubpx9fYZI7_KAxXacXRi98ibJYPHefShVdIl1VVYGn_Di-exO52vvjRCcsOAfgqKSI0jwfo6-N7yd2J3Ypa9v9osw0KkMfJD_i7TTyGuVEv&usqp=CAE', 4.99),
(6, 'niggas', NULL, 1.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
