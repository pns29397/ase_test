-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 12:28 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ase_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`name`, `mobile`, `email`, `subject`, `message`, `time`) VALUES
('Pranjal Srivastava', '07881121994', 'Math', 'pns29397@gmail.com', 'Hello', '2023-08-17 09:51:32'),
('Pranjal Srivastava', '07881121994', 'pns29397@gmail.com', 'Math', 'Hello', '2023-08-17 09:51:32'),
('Harshit', '424254266', 'sfbabkkbja@gmail.com', 'zbcbkc', 'sskbcs', '2023-08-17 09:51:32'),
('Pranjal Srivastava', '07881121994', 'pns29397@gmail.com', 'Bio', 'Hello', '2023-08-17 09:51:32'),
('Pranjal Srivastava', '07881121994', 'pns29397@gmail.com', 'Bio', 'Hello', '2023-08-17 09:51:32'),
('Pranjal Srivastava', '07881121994', 'pns29397@gmail.com', 'Math', 'Hello', '2023-08-17 09:51:32'),
('', '1231231232', 'pns29397@gmail.com', 'Math', 'ascsac', '2023-08-17 10:19:53'),
('', '7881121994', 'pns29397@gmail.com', 'Math', 'csac', '2023-08-17 10:21:07'),
('Pranjal Srivastava', '1234567589', 'pns29397@gmail.com', 'cscs', 'sccsa', '2023-08-17 10:26:15'),
('', '1211111111', 'pns29397@gmail.com', 'scsa', 'sccs', '2023-08-17 10:26:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
