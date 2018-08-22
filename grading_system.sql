-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2018 at 05:24 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grading_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `prof_Id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `Math` int(3) UNSIGNED NOT NULL,
  `Science` int(3) UNSIGNED NOT NULL,
  `English` int(3) UNSIGNED NOT NULL,
  `Filipino` int(3) UNSIGNED NOT NULL,
  `Mapeh` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `prof_Id`, `first_name`, `last_name`, `Math`, `Science`, `English`, `Filipino`, `Mapeh`) VALUES
(1, 1, 'Naruto', 'Uzumaki', 99, 99, 99, 99, 50),
(3, 1, 'Sasuke', 'Uchiha', 0, 0, 0, 0, 0),
(4, 1, 'Recca', 'Hanabishi', 0, 0, 0, 0, 0),
(5, 1, 'Shinchan', 'Nohara', 0, 0, 0, 0, 0),
(6, 1, 'Mo', 'Jacko', 0, 0, 0, 0, 0),
(7, 1, 'Sakura', 'Haruno', 0, 0, 0, 0, 0),
(8, 1, 'Juan', 'de la Cruz', 0, 0, 0, 0, 0),
(24, 1, 'Big', 'Show', 0, 0, 0, 0, 0),
(25, 1, 'Lebron', 'Jameson', 0, 0, 0, 0, 0),
(26, 1, 'Ramona', 'Romano', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prof_id` (`prof_Id`),
  ADD KEY `math` (`Math`),
  ADD KEY `sci` (`Science`),
  ADD KEY `eng` (`English`),
  ADD KEY `fil` (`Filipino`),
  ADD KEY `pe` (`Mapeh`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`prof_Id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
