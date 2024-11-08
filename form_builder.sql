-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 06:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `lead_type` varchar(100) DEFAULT NULL,
  `lead_source` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `anniversary_date` date DEFAULT NULL,
  `office_phone` varchar(15) DEFAULT NULL,
  `primary_email` varchar(100) DEFAULT NULL,
  `home_phone` varchar(15) DEFAULT NULL,
  `address_line1` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `first_name`, `last_name`, `lead_type`, `lead_source`, `dob`, `anniversary_date`, `office_phone`, `primary_email`, `home_phone`, `address_line1`, `city`, `zip`, `created_at`) VALUES
(13, 'AA', 'AA', 'AA', 'AA', '2024-11-05', '2024-11-05', '11', 'raj32024patel@gmail.com', '11', '43 Mia Driveee', 'Hamiltonnn', 'L9B 0J822', '2024-11-07 01:31:40'),
(14, 'AA', 'AA', 'AA', 'AA', '2024-11-05', '2024-11-05', '11', 'raj32024patel@gmail.com', '11', '43 Mia Driveee', 'Hamiltonnn', 'L9B 0J822', '2024-11-07 01:37:26'),
(15, 'AA', 'AA', 'AA', 'AA', '2024-11-05', '2024-11-05', '11', 'raj32024patel@gmail.com', '11', '43 Mia Driveee', 'Hamiltonnn', 'L9B 0J822', '2024-11-07 01:58:23'),
(16, 'ZZ', 'ZZ', 'zZ', 'ZZ', '2024-11-06', '2024-11-06', '33', 'rajp3204320@gmail.com', '3232', 'zz', 'zz', 'zz', '2024-11-07 03:46:12'),
(17, 'XX', 'Xx', 'xx', 'xx', '2024-11-05', '2024-11-05', '33', 'raj@gmail.com', '344', '434', 'fae', 'faefe', '2024-11-07 03:51:12'),
(18, 'Raj', 'Patel', 'Leader', 'Leader', '2024-11-01', '2024-11-01', '12345', '1234@gmail.com', '123456', '34 njvsnvjs', 'hifif', 'lb8 k8g', '2024-11-07 03:57:03'),
(19, 'ddd', 'ddcc', 'dddeeee', 'eeec', '2024-11-06', '2024-11-05', '41235235', 'raj32034patel@gmail.com', 'e232r32r', '43 Mia Drivecc', 'Hamiltonc', 'L9B 0J8c', '2024-11-07 04:08:26'),
(20, 'ddd', 'ddcc', 'dddeeee', 'eeec', '2024-11-06', '2024-11-05', '41235235', 'raj32034patel@gmail.com', 'e232r32r', '43 Mia Drivecc', 'Hamiltonc', 'L9B 0J8c', '2024-11-07 04:08:29'),
(21, 'Raj', 'Patel', 'NK', 'NK', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '2024-11-07 04:23:04'),
(22, 'Raj', 'Patel', 'NK', 'NK', '2024-11-02', '2024-11-02', '12344', '12342@yahoo.com', '12314', 'Hannknv', 'Hjbvbv', 'l9n 2h7', '2024-11-07 04:30:15'),
(23, 'Raj', 'RaJ', 'Raj', 'Raj', '2024-11-06', '2024-11-07', '1545', 'r@gmail.com', '465', 'jbsbc', 'bdsvs', 'vbsv', '2024-11-07 17:52:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
