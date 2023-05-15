-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 06:22 PM
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
-- Database: `phones`
--

-- --------------------------------------------------------

--
-- Table structure for table `phone_models`
--

CREATE TABLE `phone_models` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone_models`
--

INSERT INTO `phone_models` (`id`, `brand`, `model`, `price`, `image_url`) VALUES
(1, 'Iphone', '13', '923.00', 'https://www.swoop.nl/media/83/e1/a2/1657782555/iphone-13-mini-black.jpg'),
(2, 'Iphone', '13 mini', '809.00', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSZCCkusMTWEGw08BeH7RhACRaIghc7akMSSptaNYrCTS72A3a7twHpUpS2wfOnLQ5ZdvCU5fJ4GyMJZVWI5MfdW6yXl70OjLbm_PkQIKjt&usqp=CAE'),
(3, 'Iphone', '13 pro', '1159.00', 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQmb1buVfdeQWx64PKWAD3NQnzp062zEil8AUOwRV7v1u19TVSx_EL4q11YHi4wJFh61Zi64jQj6iBiNRvOujqNk4L2Br8lEg&usqp=CAE'),
(4, 'Iphone', '13 pro max', '1259.00', 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQmb1buVfdeQWx64PKWAD3NQnzp062zEil8AUOwRV7v1u19TVSx_EL4q11YHi4wJFh61Zi64jQj6iBiNRvOujqNk4L2Br8lEg&usqp=CAE'),
(5, 'Iphone', '14', '1019.00', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQuleuRWLdWUpgO04Ek0sIKHdEgNfjPXEJof1QLoiLRZzZX2reiywSRz0CEyXSQg5Dqb6MWwicYWrQJ8hxcJ4EP6BfAxLYd8Fe2CWi45S0&usqp=CAE'),
(6, 'Iphone', '14 pro', '1163.00', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTRTWWyFao0kmpxzlwXedEEMHeazpNbFHxRTl5xpj2wMnWPrO1fIMO63bwwDkc5l8BwF9xQs9qDxJ_QxwXI0wSH5WKU6TeklA&usqp=CAE'),
(7, 'Iphone', '14 pro max', '1425.00', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQHn97AM-f13AVgWT40ZcbL2hDpy5P6u8wmyX8-xJ4YWOKp3muSYx4ztakPXwhCL_vjtfQt91GRp8DOhTOCxpKTk0fKYQJS&usqp=CAE'),
(8, 'Samsung', 'Galaxy S22', '645.00', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTu-VuQZjfxqhfNo6nYZBX5uOpYsJXDNZDi-pIufg383BH9_tyOcfZCIhlkmmwoUNQhj9ZhYeGkorwGcQr2m7klwzqx6AQ2QRIYOlb5xUM&usqp=CAE'),
(9, 'Samsung', 'Galaxy S22 plus', '854.00', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTu-VuQZjfxqhfNo6nYZBX5uOpYsJXDNZDi-pIufg383BH9_tyOcfZCIhlkmmwoUNQhj9ZhYeGkorwGcQr2m7klwzqx6AQ2QRIYOlb5xUM&usqp=CAE'),
(10, 'Samsung', 'Galaxy S22 ultra', '1249.00', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTu-VuQZjfxqhfNo6nYZBX5uOpYsJXDNZDi-pIufg383BH9_tyOcfZCIhlkmmwoUNQhj9ZhYeGkorwGcQr2m7klwzqx6AQ2QRIYOlb5xUM&usqp=CAE'),
(11, 'Samsung', 'Galaxy S23', '840.00', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSX3YcEd6wf5xpEhsgvwD5IQZAlIFI3PESIltYaKqdUf_76CG9czx7GPuqaKJLDIKbxFMDBoGGQIiUvQHgR_gn2QYRwRvfeVVJ8lhKi6UDrayDT_zDSQ97B&usqp=CAE'),
(12, 'Samsung', 'Galaxy S23 plus', '1080.00', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSKnG66u9aaJMKamgfJ2KMTfe9pbhaitGS4XGWDLnWqWwcIjXi2y5YMCFXRJXNPjTpYxbupBgnc5QB_8EO6fS6RzQzX4_c8IHQS6VAP87w6&usqp=CAE'),
(13, 'Samsung', 'Galaxy S23 ultra', '1175.00', 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQcnUzWFx4EwYpEleRXCKIMDF7hsMYJYO_6suK91H_OZy2ynEnUp9NtjRgVPrqQ630OdaWVStAujwEeEsMjahpOueVtD69ZekCxoTtkz2aD&usqp=CAE'),
(14, 'Oneplus', '11', '810.00', 'https://fdn2.gsmarena.com/vv/bigpic/oneplus-11.jpg'),
(15, 'Oneplus', '10T', '565.00', 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTQB7bg6Lej78Si2zGnu4JTo8bwSSSBMNT3dgVRu7wGIGYW3LbTVyPua35xTlKQEsmOc47_iifjqfDA5Spst5cZ3EhgW0gRO8wRfcBPZ2or&usqp=CAE'),
(16, 'Oneplus', '10 Pro', '760.00', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQw_KJx1f-JTVOfwmir27vduNKag5tTGdPzt6ys331yDjlLYhRIQ5AIBVdYftJ87V5fXv72DqkVBbaD77D0trAsjt4TUKy0nUBeVi_XK2YGEQMdIuE5L2ukKQ&usqp=CAE'),
(17, 'Oneplus', 'Ace', '355.00', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcS6DbLnZwrTpwCbIBimInStX8cvqArLU6X4YH5G5e9EP9PSEvRrrpFe_71FGUbEQBVdG4Q1wlxHS_JlJ6lkUwOm9PdaegBBEYRYy3-tqedISzRTWL6jzG65Zw&usqp=CAE'),
(18, 'Oneplus', '9', '590.00', 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcR8FUS5vgE9iHbvMmNZr6jak_zmVTEEGlcOdQj03dWwp77TaRrnFnjyNYY46Gz-MXgwi1c_ivLDdJ8-MrgHsMD4_o530rdMWQ&usqp=CAE'),
(19, 'Oneplus', '9 Pro', '900.00', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTX6BaAgqBYo9AkEGlEiydQNh6qm_bagLh2j1XBSDxxxqApTdloVi1KIM3gWX1iRwOVlMRKrFGl-ULBLLCNiSlbynUlQLl-OQ&usqp=CAE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phone_models`
--
ALTER TABLE `phone_models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phone_models`
--
ALTER TABLE `phone_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
