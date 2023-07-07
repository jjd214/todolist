-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 10:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todoapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todolist`
--

CREATE TABLE `tbl_todolist` (
  `id` int(250) NOT NULL,
  `item` varchar(80) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_completed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_todolist`
--

INSERT INTO `tbl_todolist` (`id`, `item`, `status`, `date_added`, `date_completed`) VALUES
(25, 'Play with friends', 'COMPLETED', '2023-02-10 20:03:51', '2023-02-10 20:04:39'),
(26, 'Study PDO', 'COMPLETED', '2023-02-20 19:50:49', '2023-03-17 18:14:49'),
(27, 'Play League of Legends', 'COMPLETED', '2023-03-17 17:50:23', '2023-03-17 18:14:50'),
(30, 'Take a rest', 'COMPLETED', '2023-03-17 18:17:44', '2023-03-17 18:22:09'),
(31, 'Workout', 'COMPLETED', '2023-03-17 18:22:12', '2023-03-17 18:22:17'),
(33, 'Sleep', 'COMPLETED', '2023-03-30 22:21:01', '2023-05-02 18:59:25'),
(34, 'Play Games', 'COMPLETED', '2023-04-30 11:49:43', '2023-04-30 12:06:03'),
(36, 'Study Angular.js', 'Pending', '2023-05-13 13:07:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_todolist`
--
ALTER TABLE `tbl_todolist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_todolist`
--
ALTER TABLE `tbl_todolist`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
