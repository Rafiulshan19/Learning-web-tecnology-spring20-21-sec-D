-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 05:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`) VALUES
(80, 'Fruits'),
(91, 'Fish'),
(95, 'Vegetable');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(400) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `message`, `status`) VALUES
(1, 'shan', 'I face some problem when i try to login.', 'fixed'),
(2, 'salim', 'My account is dedactive can you please activated is.', 'fixed');

-- --------------------------------------------------------

--
-- Table structure for table `medicalinformation`
--

CREATE TABLE `medicalinformation` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `diseases` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicalinformation`
--

INSERT INTO `medicalinformation` (`id`, `name`, `diseases`, `location`) VALUES
(1, 'Mango', 'Bacterial canker', 'Agriculture Institute Dhaka'),
(2, 'Litchi ', 'Fruit rot', 'Agriculture Institute Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalPrice` int(30) NOT NULL,
  `img` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `purchaseDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `productName`, `quantity`, `totalPrice`, `img`, `address`, `phone`, `purchaseDate`) VALUES
(1, 'rafiul', 'Mango', 12, 500, 'mango.jpg', 'uttra,dhaka', 161742216, '21-04-2021'),
(2, 'habib', 'pump', 2, 8000, 'pump.png', 'Dhandomdi,Dhaka', 1879133907, '21-04-2021'),
(3, 'rakib', 'Litchi', 12, 330, 'Litchi.jpg', 'Raipur,Laxmipr', 1617544321, '25-04-2021');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `username`) VALUES
(1, 'Md.Habibur Rahman', 'anik26'),
(2, 'anik', 'anik 26');

-- --------------------------------------------------------

--
-- Table structure for table `prepare`
--

CREATE TABLE `prepare` (
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(122) NOT NULL,
  `quantity` int(120) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `quantity`, `picture`) VALUES
(214, 'Mango', 'Mango, Mangifera indica, is an evergreen tree in the family Anacardiaceae grown for its edible fruit', 500, 15, 'Mango.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `price` int(120) NOT NULL,
  `description` varchar(600) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `name`, `price`, `description`, `img`) VALUES
(7, 'Tractor', 920000, 'This tractor made in japan. Its 6000 hp', '1618104440.png'),
(28, 'Pump', 4000, 'This pump is made in japan. this is avail to pump water under 600ft.', '1619502074.png');

-- --------------------------------------------------------

--
-- Table structure for table `upcomingproducts`
--

CREATE TABLE `upcomingproducts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcomingproducts`
--

INSERT INTO `upcomingproducts` (`id`, `name`, `description`) VALUES
(5, 'fda545454546', 'fads546456');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(120) NOT NULL,
  `type` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `type`, `image`, `active`) VALUES
(3, 'Habibur Rahman', 'habibur', 'habib264521@gmail.com', 'Habib$12', 'admin', '1618998346.jpg', 1),
(46, 'Abs salim', 'salim', 'salim@gmail.com', 'Salim$123', 'farmer', '', 1),
(47, 'rakibul hasan', 'rakib', 'rakib@gmail.com', 'Rakib$123', 'buyer', '', 1),
(48, 'Rafiul shan', 'shan', 'shan@gmail.com', 'Shan$12', 'worker', '', 1),
(91, 'anik', 'anik', 'anik@gmail.com', 'Anik$11', 'worker', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `task` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `period` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `salery` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `username`, `task`, `email`, `period`, `location`, `salery`) VALUES
(4, 'rafiulshan1121', 'crop cutting', 'sami@mega.com', '2021-03-30', 'khulna', '1200'),
(5, 'rafiulshan1121', 'Machine crop cutting', '18-38321-2@student.aiub.edu', '2021-04-22', 'Rangpur', '5000'),
(7, 'rafiulshan1121', 'Machine Cutting Of Crops	', 'bravoarmy11@gmail.com', '2021-04-22', 'khulna', '3000'),
(11, 'Rat', 'Planting Crops', 'new@yahoo.com', '2021-04-10', 'Bogra', '700'),
(12, 'rafiulshan1121', 'Machine crop cutting', '18-38321-2@student.aiub.edu', '2021-03-31', 'Rangpur', '5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalinformation`
--
ALTER TABLE `medicalinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcomingproducts`
--
ALTER TABLE `upcomingproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `upcomingproducts`
--
ALTER TABLE `upcomingproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
