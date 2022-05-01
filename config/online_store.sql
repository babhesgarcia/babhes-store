-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 08:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_description` text NOT NULL,
  `product_price` double NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `img` text DEFAULT 'disches.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `date_created`, `img`) VALUES
(60, 'Kare-Kare', 'Kare-kare is a thick stew made from oxtail, vegetables, and a peanut sauce. It reminded us a bit of massaman curry from Thailand which makes sense as the word ‘kare’ is derived from the Filipino word for curry', 109, '2022-04-30', 'GARCIA_FOODSTORE-626e2143208ef1.57618911.jpg'),
(61, 'Tocino', 'Tocino is the Filipino version of bacon. It is pork belly cured in sugar, salt, and various other spices then fried – yum! It is served as part of a common Filipino breakfast called tosilog.', 99, '2022-04-30', 'GARCIA_FOODSTORE-626e21886bbeb3.58993497.jpg'),
(62, 'Hamburgers', 'Oh yes, oh yes, Hamburgers are the number 1 most popular foods in America. Surprised? I am not. I am slightly addicted to eating hamburgers.', 45.3, '2022-04-30', 'GARCIA_FOODSTORE-626e219b4ace29.25322929.jpg'),
(66, 'Potato Chips', 'It is not surprising to see that potato chips made the list. Everywhere I go, parties, etc. I see potato chips. At the supermarket, there are rows and rows of chips and several different flavors of potato chips.\r\n', 1000, '2022-04-30', 'GARCIA_FOODSTORE-626e2400712714.41396841.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
