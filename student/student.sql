-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 09:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `stud_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `stud_name`, `password`, `dob`, `age`, `email`, `mobile`) VALUES
(1, 'Selva', 'Selva@12345', '2023-04-04', '21', 'tamilarasanc00@gmail.com', '7094592282'),
(2, 'tamil', 'Tamil@123456', '2023-04-05', '29', 'tt@gmail.com', '7094592282'),
(4, 'kishore', 'Kishore@12356', '2023-04-01', '21', 'kishore@gmail.com', '9086543211'),
(5, 'chithra', 'Sedrft@1234', '2023-04-05', '54', 'chithra@gmail.com', '7896541230'),
(6, 'sandy', 'Saedrf@123', '2023-04-12', '45', 'tt@gmail.com', '9874563210'),
(7, 'arun', 'Asewd@1234', '2023-04-20', '26', 'Swed@addfdf', '9874563210'),
(8, 'Wseaw', 'Sed@12344', '2023-03-28', '45', 'sdfe@wsef.com', '23456789090'),
(9, 'gytrg', 'Hrdgbn@12345', '2023-04-12', '32', 'wwusdusw@yvkjl .com', '234567890'),
(10, 'jjvjhvvhtsrt', 'Efvshgbs@12345', '2023-04-12', '43', 'asdfhhg@wsdegd.com', '1234567876'),
(11, 'Arun', 'Swefgb@12345', '2023-04-12', '98', 'sfdgsege@wwdw.com', '98856799767'),
(13, 'Selvaaa', 'Selva@1235566', '2023-04-05', '24', 'selva@gmail.com', '9874563210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
