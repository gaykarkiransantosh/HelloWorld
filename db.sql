-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 07:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bajirao_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `message` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `message`, `created_date`) VALUES
('kiran', 'kiran.gaykar@somaiya.edu', 'good', '2022-01-17'),
('kiran', 'kiran.gaykar@somaiya.edu', 'good', '2022-01-17'),
('javaparameterized', 'admin@gmail.com', 'good', '2022-01-17'),
('kiran', 'kiran.gaykar@somaiya.edu', 'good', '2022-01-17'),
('HelloWorld', 'kiran.gaykar@somaiya.edu', 'goooooooooooo', '2022-01-17'),
('exp7', 'abc@gmail.com', 'goood', '2022-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `Details` text NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `price`, `Details`, `Image`) VALUES
(17, 'uploaded_on', 78.00, 'good', '2021-07-19 (16).png'),
(18, 'kiran santosh gaykar', 900.00, 'good', '2021-07-19 (9).png'),
(19, 'uploaded_on', 78.00, 'good', '2021-07-19 (16).png'),
(20, 't shirt', 1200.00, 'good cloth ............', '2021-07-19 (13).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_image`
--

CREATE TABLE `tbl_product_image` (
  `id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_image`
--

INSERT INTO `tbl_product_image` (`id`, `Image`, `uploaded_on`) VALUES
(1, 'gallery/preview1.jpeg', '2022-01-24 23:14:12'),
(2, 'gallery/preview2.jpeg', '2022-01-24 23:14:12'),
(3, 'gallery/preview3.jpeg', '2022-01-24 23:14:12'),
(4, 'gallery/preview1.jpeg', '2022-01-24 23:14:12'),
(5, 'gallery/preview2.jpeg', '2022-01-24 23:14:12'),
(6, 'gallery/preview3.jpeg', '2022-01-24 23:14:12'),
(7, '2021-07-19 (9).png', '2022-01-24 23:17:02'),
(8, '2021-07-19 (10).png', '2022-01-24 23:17:02'),
(9, '2021-07-19 (13).png', '2022-01-24 23:17:02'),
(10, '2021-07-19 (14).png', '2022-01-24 23:17:02'),
(11, 'Screenshot (438).png', '2022-01-24 23:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `date`) VALUES
('kiran.gaykar@somaiya.edu', '$2y$10$WVA32CYTqVPOtJLAb6nA2OK..cPUqoM.LK66s71NQ7gAGka6nwa/S', '2022-01-17'),
('kiran.gaykar@somaiya.edu', 'kiran', '2022-01-17'),
('john@gmail.com', 'john', '2022-01-18'),
('john@gmail.com', 'admin', '2022-01-18'),
('abc@gmail.com', 'abc', '2022-01-18'),
('hitesh@gmail.com', 'hitesh', '2022-01-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_image`
--
ALTER TABLE `tbl_product_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_product_image`
--
ALTER TABLE `tbl_product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
