-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 02:29 PM
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
-- Database: `company2`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `emp_no` varchar(20) DEFAULT NULL,
  `emp_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_no`, `emp_name`) VALUES
(1, '1001', 'Rinkal Gadhiya'),
(2, '1002', 'Parv Gadhiya'),
(3, '1003', 'Nidhi Gadhiya'),
(4, '1004', 'Neha Fanatinya'),
(6, '1005', 'Parth Gadhiya'),
(8, '1006', 'Dikshit Solanki'),
(9, '1007', 'Bhavyta Solanki'),
(11, '1008', 'Hiren Jadav'),
(12, '1009', 'Rohan Gadhiya'),
(13, '1010', 'Vyoma Thakar'),
(16, 'Yu8586', 'Yuvraj Khavad Update'),
(18, '53', 'Amiraj Khavad 2');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `task_name` varchar(50) NOT NULL,
  `assign_date` date DEFAULT NULL,
  `deadline_date` date DEFAULT NULL,
  `stat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `emp_id`, `task_name`, `assign_date`, `deadline_date`, `stat`) VALUES
(37, 8, 'Loop Excersice', '2024-09-26', '2024-09-27', 'complete'),
(90, 16, 'Write Blog for Z Index Website', '2024-09-26', '2024-09-30', 'complete'),
(97, 8, 'CSS Basic', '2024-09-27', '2024-10-01', 'pending'),
(98, 3, 'CSS Basic 2', '2024-09-27', '2024-10-02', 'pending'),
(99, 18, 'Do Website QA', '2024-09-27', '2024-10-02', 'pending'),
(100, 2, 'Typing Practice', '2024-09-28', '2024-10-02', 'complete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
