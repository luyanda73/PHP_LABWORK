-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2026 at 07:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `country_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` varchar(2) DEFAULT NULL,
  `country_name` varchar(40) DEFAULT NULL,
  `region_id` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `region_id`) VALUES
('US', 'United States', NULL),
('IN', 'India', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `job_id` varchar(20) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `commission_pct` decimal(5,2) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `first_name`, `last_name`, `email`, `phone_number`, `hire_date`, `job_id`, `salary`, `commission_pct`, `manager_id`, `department_id`) VALUES
(100, 'Steven', 'King', 'not available', '515.123.4567', '1987-06-17', 'AD_PRES', '24000.00', '0.00', 0, 90),
(101, 'Neena', 'Kochhar', 'not available', '515.123.4568', '1987-06-18', 'AD_VP', '17000.00', '0.00', 100, 90),
(102, 'Lex', 'De Haan', 'not available', '515.123.4569', '1987-06-19', 'AD_VP', '17000.00', '0.00', 100, 90),
(103, 'Alexander', 'Hunold', 'not available', '590.423.4567', '1987-06-20', 'IT_PROG', '9000.00', '0.00', 102, 60),
(104, 'Bruce', 'Ernst', 'not available', '590.423.4568', '1987-06-21', 'IT_PROG', '6000.00', '0.00', 103, 60),
(105, 'David', 'Austin', 'not available', '590.423.4569', '1987-06-22', 'IT_PROG', '8000.00', '0.00', 103, 60),
(106, 'Valli', 'Pataballa', 'not available', '590.423.4560', '1987-06-23', 'IT_PROG', '4800.00', '0.00', 103, 60),
(107, 'Diana', 'Lorentz', 'not available', '590.423.5567', '1987-06-24', 'IT_PROG', '4200.00', '0.00', 103, 60),
(108, 'Nancy', 'Greenberg', 'not available', '515.124.4569', '1987-06-25', 'FI_MGR', '12000.00', '0.00', 101, 100),
(206, 'William', 'Gietz', 'not available', '515.123.8181', '1987-10-01', 'AC_ACCOUNT', '8300.00', '0.00', 205, 110);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
