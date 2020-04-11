-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 04:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookorders`
--

CREATE TABLE `bookorders` (
  `id` int(99) NOT NULL,
  `username` varchar(45) NOT NULL,
  `bookId` int(99) NOT NULL,
  `bookName` varchar(55) NOT NULL,
  `price` double NOT NULL,
  `paytype` varchar(20) NOT NULL,
  `purDate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookorders`
--

INSERT INTO `bookorders` (`id`, `username`, `bookId`, `bookName`, `price`, `paytype`, `purDate`) VALUES
(1, 'kim', 1, 'A Golden Age', 500, 'Dbbl', '2020-04-11'),
(2, 'kim', 4, 'Obonil', 500, 'Dbbl', '2020-04-11'),
(3, 'kim', 6, 'Tales of the Sky', 300, 'Dbbl', '2020-04-11'),
(4, 'jim', 3, 'The Storm', 500, 'Credit', '2020-04-11'),
(5, 'jim', 4, 'Obonil', 500, 'Credit', '2020-04-11'),
(6, 'jim', 2, 'Sultana\'s Dream', 500, 'Credit', '2020-04-11'),
(7, 'jim', 1, 'A Golden Age', 500, 'Bkash', '2020-04-11'),
(8, 'tim', 1, 'A Golden Age', 500, 'Credit', '2020-04-11'),
(9, 'tim', 3, 'The Storm', 500, 'Credit', '2020-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(99) NOT NULL,
  `bookName` varchar(66) NOT NULL,
  `price` double NOT NULL DEFAULT '500',
  `category` varchar(55) NOT NULL,
  `description` varchar(500) NOT NULL,
  `authorName` varchar(55) NOT NULL,
  `authorInfo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookName`, `price`, `category`, `description`, `authorName`, `authorInfo`) VALUES
(1, 'A Golden Age', 500, 'Culture', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Tahmima Anam', 'Hailing from a prosperous literary background, Tahmima Anam was born on October 08, 1975 in Dhaka, Bangladesh. She is known as a novelist, columnist and a writer.'),
(2, 'Sultana\'s Dream', 500, 'Fiction', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Roquia Sakhawat Hussain', 'Begum Roquia Sakhawat Hussain, popularly known as Begum Rokeya, was born in 1880 in the village of Pairabondh, Mithapukur, Rangpur, in what was then the British Indian Empire and is now Bangladesh.'),
(3, 'The Storm', 500, 'History', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Arif Anwar', 'Arif Anwar was born in Chittagong, Bangladesh, just miles from the Bay of Bengal. He previously worked for BRAC, one of the worlds largest non-governmental organizations, on issues of poverty alleviation, and for UNICEF Myanmar on public health issues. Arif has a PhD in education from the University of Toronto.'),
(4, 'Obonil', 500, 'Sci-fi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Muhammed Zafar Iqbal', 'Muhammed Zafar Iqbal is the most famous Bangladeshi author of Science-Fiction and Children\'s Literature ever to grace the Bengali literary community since the country\'s independence in 1971. He is a professor of Computer Science & Engineering at Shahjalal University of Science and Technology (SUST).'),
(5, 'The Hunt', 400, 'Fiction', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Jarin Hosan', 'Lorem Ipsum'),
(6, 'Tales of the Sky', 300, 'Fiction', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Muhammed Farhan Haseen', 'A fine writer is born in Bangladeshi. Author of Science-Fiction and Children\'s Literature ever to grace the Bengali literary community since the country\'s independence in 1971. He is a professor of Computer Science & Engineering at Shahjalal University of Science and Technology (SUST).');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cartId` int(99) NOT NULL,
  `bookId` int(99) NOT NULL,
  `bookName` varchar(55) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(99) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `phone` int(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `phone`, `address`, `type`) VALUES
(1, 'far', '123', 'faruk ahmed', 1923645126, 'NoaKhali', 'admin'),
(2, 'jim', '123', 'Jimmy Mathar', 172254645, 'Comilla', 'customer'),
(3, 'kim', '123', 'Kim Long', 192121, 'Tangail', 'customer'),
(4, 'dom', '123', 'Dominic hri', 192333, 'Hatir Jhil', 'customer'),
(5, 'tim', '123', 'Pammy Tim', 1921213451, 'Tangail', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookorders`
--
ALTER TABLE `bookorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookorders`
--
ALTER TABLE `bookorders`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cartId` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
