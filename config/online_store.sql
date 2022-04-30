-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 05:50 PM
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
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `date_created`) VALUES
(17, 'Potato Chips', 'It is not surprising to see that potato chips made the list. Everywhere I go, parties, etc. I see potato chips. At the supermarket, there are rows and rows of chips and several different flavors of potato chips.', 499, '2022-04-30'),
(18, 'Donuts/Doughnuts', 'Whether you spell them donuts or doughnuts, it doesn’t matter, these tasty pastries are number 9 on this the most popular foods in America list.', 567, '2022-04-30'),
(19, 'Ice Cream', 'Coming in at number 8 is ice cream. Another childhood favorite of mine. I have fond memories of going to the Thrifty store and getting a scoop of Thrifty brand ice cream with my family. My favorite flavor back then was Chocolate Malted Crunch.', 100, '2022-04-30'),
(20, ' Chicken Tenders', 'Next up on the list number 7, chicken tenders. Whether you get McDonald’s chicken McNuggets, Chick-fil-A nuggets, or many other varieties, Americans love their chicken tenders.', 200, '2022-04-30'),
(21, ' Soft Drinks/Soda', 'An all too common phrase we have grown accustomed to here in the United States and many other places around the world. Coming in at the number 6 spot for the most popular foods in America is Soda.', 600, '2022-04-30'),
(22, 'Pizza', 'Up next is the wildly popular food, pizza. I can see why it ranks number 5 of the top 10 most popular foods in America.', 799, '2022-04-30'),
(23, 'Oreo Cookies', 'At number 4 on the most popular foods in America list we have Oreo cookies. These versatile sandwich cookies are simply amazing', 599, '2022-04-30'),
(25, 'Hot Dogs', 'And coming in at number 2 on the list are hot dogs! Yes! I knew these would be on the list when I was doing my research. I actually eat quite a few of these each year. Some weeks I eat one every day for lunch.', 200, '2022-04-30'),
(44, 'Hamburgers', 'Oh yes, oh yes, Hamburgers are the number 1 most popular foods in America. Surprised? I am not. I am slightly addicted to eating hamburgers. If I had it my way, I would probably eat one every day', 45, '2022-04-30'),
(51, 'Tocino', 'Tocino is the Filipino version of bacon. It is pork belly cured in sugar, salt, and various other spices then fried – yum! It is served as part of a common Filipino breakfast called tosilog. The name is a combination of its 3 parts: tocino, sinangag (garlic fried rice), and pritong itlog  (fried egg).', 99, '2022-04-30'),
(52, 'Kinilaw', 'Kinilaw is a delicious seafood dish served up all over the Philippines. It consists of slices of raw fish marinated in vinegar along with other ingredients like calamansi juice, salt, pepper, and chili peppers. The name kinilaw literally means “eaten raw”.  Very similar to ceviche, the main difference is that Kinilaw relies on vinegar rather than lime juice to “cook” the fish.', 399, '2022-04-30'),
(53, 'Kare-Kare', 'Kare-kare is a thick stew made from oxtail, vegetables, and a peanut sauce. It reminded us a bit of massaman curry from Thailand which makes sense as the word ‘kare’ is derived from the Filipino word for curry.  Supposedly the best kare-kare comes from Pampanga which is just north of Manila, but you’ll find this dish served all over the Philippines.', 109, '2022-04-30'),
(54, 'Adobo', 'Adobo is often called the national dish of the Philippines and it’s certainly the most famous Filipino dish. The flavor is created using vinegar, soy sauce, garlic, bay leaves, and black pepper. Also chili peppers are sometimes added to give it a little spice.', 46, '2022-04-30'),
(55, 'Humba', 'Humba is very similar to adobo, but also includes banana blossoms and tausi (fermented black bean paste). This gives humba a sweeter taste than adobo and results in an amazing spicy/salty/sweet flavor. Whereas you can find the adobo flavor applied to all types of meat and vegetable dishes, humba is almost always made with pork.', 58, '2022-04-30'),
(56, 'Lechon', 'Lechon is a broad term that refers to a suckling pig that has been seasoned, skewered on a bamboo pole, and roasted whole over charcoal. It is particularly famous on the island of Cebu and you’ll see lots of shops along the roads with whole roast pigs in the window. On his trip to the Philippines Anthony Boudain asserted that the lechon on Cebu Island was “the best pig ever!”', 60, '2022-04-30');

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
