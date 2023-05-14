-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 09:55 PM
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
-- Database: `cases`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoesjes`
--

CREATE TABLE `hoesjes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoesjes`
--

INSERT INTO `hoesjes` (`id`, `name`, `image_url`, `price`) VALUES
(1, 'Iphone 13', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQ-mmlmZd0dF1K2AKUfDJBj4bXPxKrobWtQFX8M7k2pVRR9hCXiin-uw0JjSSmoqK0hWA2QADkSSljHx0GmvLhXInt0fxkLFkZr-39tBzsD&usqp=CAE', '14.99'),
(2, 'Iphone 13 mini', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQthAk0Gcer7w-M1MN-IcGs4v7mW0bSjWNIiOh7lrN5q2_3rUVcmAgAbM33xJD1-t7-xFW1h-gd_XRSLZmwo7m1YYRVvEUY_X1bDzzqUP8Ioqmjbdrk_fIG&usqp=CAE', '14.99'),
(3, 'Iphone 13 pro', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRQFttynxmHvKtqaTdnIZ5p8ijrtye8jKLbDP9DQFxRbUUFn4x2t3dDtwGC_s4d3qoZkrFsXneaSYgeJgsHdYuejQR-BoGRBjv3lwfknaKlxFB1BFe_PsdO&usqp=CAE', '14.99'),
(4, 'Iphone 13 pro max', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQg_Cib6j5_lJYwSo5482pp6D5B5ApEM_RB6SjD7TZysb_NlwaPkQuds5dCCMrlvKrAwdGRDZcUoqxTH0_iMTTAcIQhzTuhm9XhDXenxf2xkejnzVMCfrHj&usqp=CAE', '14.99'),
(5, 'Iphone 14', 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcR_R6NMk2sdCGNO9MJgT4cI68O_tkumnV0-4FaAEifKbPEMI_ZMl_EDcJe7io-xkoaFRYvB8cwAeJYda4le-3krbCgQoKEgpJm21ycFlNuTesW3ksIgLqmC&usqp=CAE', '14.99'),
(6, 'Iphone 14 pro', 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcR_R6NMk2sdCGNO9MJgT4cI68O_tkumnV0-4FaAEifKbPEMI_ZMl_EDcJe7io-xkoaFRYvB8cwAeJYda4le-3krbCgQoKEgpJm21ycFlNuTesW3ksIgLqmC&usqp=CAE', '14.99'),
(7, 'Iphone 14 pro max', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTyekyJUeXaLdHxcaJYv6W8oxLswOovLSy01yuGQVRiMo-zUySdPWqciyxMzx-tybQIamS6zFE2oTMGwXCizRsxddTVmayr2iTOhzJmIQ1wPdjIDoEnPzzP&usqp=CAE', '14.99'),
(8, 'Samsung Galaxy S22', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSMoynmqSaqcOQDyPnxghAV7OHv_d5cxglELbFUGbrk4ZOKz809JM7y0lT4pKgyhmckV0Fs-HftTpYFTmonRBQh1B9pGpYj2Cs9_9Tsb3PpkIav58GVeZCa&usqp=CAE', '14.99'),
(9, 'Samsung Galaxy S22 plus', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSrvNXFvL7P9bGPgOx-2wEak4f31scZm-Israr1U5x0s0cCPDYkQBhPosPsvazBtoRUFUqiiruhwZ1ICDO1b3KIDDlpLzWxp3kRx4IoSaQ&usqp=CAE', '14.99'),
(10, 'Samsung Galaxy S22 ultra', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQL3iNWk8U2dnHA1SyQWejteu5ykbFUEHRkCRPAzbWMx01jPKoNSNBs7x1UHnyo7G84jtWCLh2lTws_kAdjO73U-6gxLSJ2RjHhpwJIv7RG&usqp=CAE', '14.99'),
(11, 'Samsung Galaxy S23', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTtcAcdcRuW2dnKfnbxwYxnWZY3vBkgYlrTyT3sCbUlkO9b1mQjAQ8EOva1jqK0BzMssPLIS2JBShFOpOfS9ViwVUM2_dSJgb46BWdILjOK&usqp=CAE', '14.99'),
(12, 'Samsung Galaxy S23 plus', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTtcAcdcRuW2dnKfnbxwYxnWZY3vBkgYlrTyT3sCbUlkO9b1mQjAQ8EOva1jqK0BzMssPLIS2JBShFOpOfS9ViwVUM2_dSJgb46BWdILjOK&usqp=CAE', '14.99'),
(13, 'Samsung Galaxy S23 ultra', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRiDAv6OAe7ff8pI-QKkhT5rZOOIi7oJW9wWQ6REj0Y3Bt0layyfVXzYj9vhPq-Q_AtvaZZq7PSa05Bfl2yNgL0B7zzOSI23DnClDgtIZz9&usqp=CAE', '14.99'),
(14, 'Oneplus 11', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcT5JLIo8Aw7Wrt65WodK463ogQoSn56m5FeW3MXcSeWzl1GBL3IOjeoWV3pTDP5HS576QdG2CPt7BJ8RUNARaNyjsbuBwu3vuKm37UhI5PAvTFH9OaRVb0o&usqp=CAE', '14.99'),
(15, 'Oneplus 10t', 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSH6_OGRhmYr-oZZjSGX2Y0ojHXLfitdl8528PUBoXwxVjOdcXl8dsGb4lMEgOeTZHvafwbZV-mPfnzD-0ZqIHlh80s2CQr0HTzroM3oNQy&usqp=CAE', '14.99'),
(16, 'Oneplus 10 pro', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRuGmkMovlR3Gue5TJl7yYhpJHft-UHZoJshTylE71o4ObkEMs0Ap186Yh7tvxrkbTOVVm48shEPN8puk6EQc73yQLs8t5KHj1nhoUH4-Y&usqp=CAE', '14.99'),
(17, 'Oneplus ace', 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTrygDKitoAhtU7v15jilvDg6B94BtorGp5KrR0Xycve3QE5V4eE-HSkDhiqWBHZcWc5qT2MlJ-jbRtlj-pkLpXHZHjHjRkLHO2FGN5Uvku&usqp=CAE', '14.99'),
(18, 'Oneplus 9', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRgeKkrr7waJttp7emvZxCJ6ZuShwy_LfH6ocsQwa3cQkN6bN6PTEMwLDMQHvzSIcZUMq0-v-QYy-cs2G9LEBleYnty1o8TXE0OwroLH_b4&usqp=CAE', '14.99'),
(19, 'Oneplus 9 pro', 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQYUa-xKubdMCzZI7GkMD7lbknXpWU0Fm__9SbKwN0C7vxAHbkj8QVr83rByLg4zOanHjpb2uD9v8X1IqabLKFKe1M8KbB7ai-kNrA4ojE&usqp=CAE', '14.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoesjes`
--
ALTER TABLE `hoesjes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoesjes`
--
ALTER TABLE `hoesjes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
