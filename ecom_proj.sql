-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 10:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Chocolate Delight', 250, '1.jpg.jfif', 'Creamy chocolate milkshake topped with whipped cream.'),
(3, 'Vanilla Dream', 220, '2.jpg.jfif', 'Smooth vanilla milkshake with a hint of caramel.'),
(4, 'Strawberry Bliss', 200, '3.jpg.jfif', 'Fresh strawberry milkshake with a strawberry garnish.'),
(5, 'Banana Cream', 230, '4.jpg.jfif', 'Creamy banana milkshake with a sprinkle of cinnamon.'),
(6, 'Caramel Crunch', 260, '5.jpg.jfif', 'Rich caramel milkshake with crunchy caramel toppings.'),
(7, 'Minty Fresh', 240, '6.jpg.jfif', 'Cool mint-flavored milkshake with chocolate shavings.'),
(8, 'Nutty Delight', 270, '7.jpg.jfif', 'Nutty milkshake with a mix of almonds, walnuts, and pistachios.'),
(9, 'Berry Burst', 210, '8.jpg.jfif', 'Mixed berry milkshake bursting with fruity flavors.'),
(10, 'Peanut Butter Passion', 280, '9.jpg.jfif', 'Creamy peanut butter milkshake for peanut lovers.'),
(11, 'Coffee Infusion', 260, '10.jpg.jfif', 'Milkshake infused with rich coffee and chocolate flavors.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `purchases` varchar(500) NOT NULL,
  `total_bill` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `card_cvc` int(11) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `card_number` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cust_name`, `purchases`, `total_bill`, `email`, `phone`, `card_cvc`, `bank_name`, `address`, `card_number`) VALUES
(1, 'John Mohn', 'Banana Cream * 5 : $1150,\nPeanut Butter Passion * 2 : $560,\n:Total: $1710', 1710, 'papa@papa.com', '87752015', 245, 'Everest', 'jhasdkjhkjas', '1245784211'),
(2, 'papa', 'Banana Cream * 5 : $1150,\r\n:Total: $1150', 1150, 'papa@papa.com', '555666', 7, 'Everest', 'jhasdkjhkjas', '1245784211'),
(3, 'ghgfh', 'Minty Fresh * 4 : $960,\r\nChocolate Delight * 2 : $500,\r\n:Total: $1460', 1460, 'p@p.com', '5758', NULL, NULL, 'hehe', NULL),
(4, 'ghgfh', 'Strawberry Bliss * 4 : $800,\r\n:Total: $800', 800, 'papa@papa.com', '555666', -2, 'Everest', 'jhasdkjhkjas', '1245784211'),
(5, 'ghgfh', 'Berry Burst * 4 : $840,\r\n:Total: $840', 840, 'jjj@fa', '555666', NULL, NULL, 'mnjk', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
