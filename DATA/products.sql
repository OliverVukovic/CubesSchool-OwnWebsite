-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 07:04 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` char(50) NOT NULL,
  `description` text NOT NULL,
  `price` double(7,2) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT '0',
  `category` varchar(30) NOT NULL,
  `sticker` varchar(30) DEFAULT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `discount`, `category`, `sticker`, `priority`) VALUES
(4, 'Voda', 'Sa izvora prirode', 45.00, 7, 'Pice', NULL, 11),
(5, 'Sok organski kruska', 'Opis organski kruska+jabuka 0.75l', 434.00, 5, 'Pice', NULL, 1),
(6, 'Coca Cola Zero 1l', 'Sok Coca Cola Zero 1lCoca Cola Zero 1lCoca Cola Zero 1lCoca Cola Zero 1lCoca Cola Zero 1lCoca Cola Zero 1l', 90.00, 0, 'Pice', NULL, 2),
(7, 'Fanta 0,5l', 'Fanta 0,5lFanta 0,5lFanta 0,5lFanta 0,5lFanta 0,5lFanta 0,5lFanta 0,5lFanta 0,5l', 70.00, 2, 'Pice', NULL, 5),
(8, 'Smoki Megahrsker 50g', 'Smoki Megahrsker 50gSmoki Megahrsker 50gSmoki Megahrsker 50gSmoki Megahrsker 50gSmoki Megahrsker 50g', 30.00, 3, 'Hrana', NULL, 6),
(9, 'Biskvit Barni choco 30g', 'Biskvit Barni choco 30gBiskvit Barni choco 30gBiskvit Barni choco 30gBiskvit Barni choco 30gBiskvit Barni choco 30g', 15.00, 0, 'Hrana', 'Za decu', 4),
(10, 'Kroasan 7Days coko kakao 60g', 'Kroasan 7Days coko kakao 60gKroasan 7Days coko kakao 60gKroasan 7Days coko kakao 60gKroasan 7Days coko kakao 60gKroasan 7Days coko kakao 60g', 75.00, 0, 'Hrana', 'Za decu', 7),
(11, 'Ace Power Gel Fresh 750ml', 'Ace Power Gel Fresh 750mlAce Power Gel Fresh 750ml', 345.00, 10, 'Hemija', 'Akcija', 8),
(12, 'PURE komplet Cari proleca 250ml', 'PURE komplet Cari proleca 250mlPURE komplet Cari proleca 250mlPURE komplet Cari proleca 250mlPURE komplet Cari proleca 250ml', 500.00, 0, 'Hemija', 'Akcija', 9),
(13, 'Casa providna 0,05l 20/1 Dopla', 'Casa providna 0,05l 20/1 DoplaCasa providna 0,05l 20/1 DoplaCasa providna 0,05l 20/1 DoplaCasa providna 0,05l 20/1 Dopla', 230.00, 2, 'Domacinstvo', NULL, 10),
(14, 'Energetski napitak Booster 0,25l', 'Energetski napitak Booster 0,25lEnergetski napitak Booster 0,25lEnergetski napitak Booster 0,25lEnergetski napitak Booster 0,25lEnergetski napitak Booster 0,25l', 90.00, 0, 'Pice', NULL, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
