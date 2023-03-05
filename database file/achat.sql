-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 03:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `achat`
--

-- --------------------------------------------------------

--
-- Table structure for table `allchat`
--

CREATE TABLE `allchat` (
  `id` int(111) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allchat`
--

INSERT INTO `allchat` (`id`, `sender`, `receiver`, `message`) VALUES
(5, '1', '1', 'Hey friend '),
(6, '1', '3', 'gggg'),
(7, '1', '4', 'ttt'),
(8, '1', '1', 'Hey friend '),
(9, '1', '1', 'Hey friend '),
(10, '1', '2', 'Hey friend '),
(11, '1', '2', 'Hey friend '),
(12, '1', '3', 'Hey friend '),
(13, '1', '3', 'Hey friend '),
(14, '1', '3', 'Hey friend '),
(15, '1', '2', 'saaaaaaaaa'),
(16, '1', '3', 'qqqqqqqqqqqqqqqqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(225) NOT NULL,
  `pic` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `password`, `pic`, `status`, `time`) VALUES
(1, 'sachin', 'verma', 'sachin@gmail.com', '123', 'uploads/1043463966.png', 'Hey i am new user sachin', '2023-03-05 13:58:24'),
(5, 'riya', 'singh', 'riya@gmail.com', '123', 'uploads/1672186513.jpg', 'Hey i am riya', '2023-03-05 14:00:19'),
(6, 'priya', 'verma', 'priya@gmail.com', '123', 'uploads/1968458293.jpg', 'Hey i am Priya Verma', '2023-03-05 14:01:31'),
(7, 'ankit', 'patel', 'ankit@gmail.com', '123', 'uploads/20086444.png', 'Hey i am Ankit Patel', '2023-03-05 14:02:15'),
(8, 'tina', 'verma', 'tina@gmail.com', '123', 'uploads/1235519654.png', 'Hey i am Tina', '2023-03-05 14:03:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allchat`
--
ALTER TABLE `allchat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allchat`
--
ALTER TABLE `allchat`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
