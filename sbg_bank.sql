-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 08:58 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbg_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Shailesh Godghase', 'Shreyas Shirsath', 480, '2021-07-09 00:00:00'),
(2, 'Jay Lokhande', 'Rajwardhan Jadhav', 640, '2021-07-09 20:44:53'),
(3, 'Atharv Nidhonkar', 'Parikshit Chavan', 3000, '2021-07-09 14:45:45'),
(12, 'Shreyas Shirsath', 'Shailesh Godghase', 6000, '2021-07-09 14:47:51'),
(13, 'Raj Jadhav', 'Jay Lokhande', 5500, '2021-07-09 14:47:51'),
(14, 'Parikshit Chavan', 'Atharv Nidhonkar', 6000, '2021-07-09 14:49:08'),
(15, 'Varad Deshpande', 'Sugumaran Narayan', 5000, '2021-07-09 14:49:08'),
(16, 'Shubham Anande', 'Pawan Talekar', 7500, '2021-07-09 14:50:22'),
(17, 'Sugumaran Narayan', 'Varad Deshpande', 5400, '2021-07-09 14:50:22'),
(18, 'Pawan Talekar', 'Shubham Anande', 6000, '2021-07-09 14:51:12'),
(19, 'Shailesh Godghase', 'Shreyas Shirsath', 2000, '2021-07-09 14:59:28'),
(20, 'Shailesh Godghase', 'Jay Lokhande', 500, '2021-07-09 15:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(2, 'Shailesh Godghase', 'shaileshgodghase19@gmail.com', 27500),
(11, 'Jay Lokhande', 'jaylokhande@gmail.com', 25500),
(12, 'Raj Jadhav', 'rajjadhav@gmail.com', 20000),
(13, 'Atharv Nidhonkar', 'atharvnidhonkar@gmail.com', 30000),
(14, 'Shreyas Shirsath', 'shreyasshirsath@gmail.com', 52000),
(15, 'Shubham Anande', 'shubhamanande@gmail.com', 25000),
(17, 'Parikshit Chavan', 'parikshitchavan@gmail.com', 32000),
(18, 'Varad Deshpande', 'varaddeshpande@gmail.com', 23000),
(19, 'Sugumaran Narayan', 'sugumarannarayan@gmail.com', 30000),
(20, 'Pawan Talekar', 'pawantalekar@gmail.com', 33000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
