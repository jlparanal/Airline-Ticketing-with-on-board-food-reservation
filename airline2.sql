-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 09:24 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `airplane`
--

CREATE TABLE `airplane` (
  `ID` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `company` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airplane`
--

INSERT INTO `airplane` (`ID`, `type`, `company`) VALUES
('1170', 'B738', 'Boeing'),
('1201', 'A320', 'Airbus');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `code` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`code`, `name`, `city`, `state`, `country`) VALUES
('CBO', 'Cotabato Airport', 'Cotabato', 'philippines', 'philippines'),
('CEB', 'Mactan Cebu International Airport', 'Lapu-Lapu ', 'philippines', 'philippines'),
('CRK', 'Clark International Airport', 'Mabalacat, Pampanga', 'philippines', 'philippines'),
('DPL', 'Dipolog Airport', 'Dipolog', 'philippines', 'philippines'),
('DVO', 'Francisco Bangoy International Airport', 'Davao Region', 'philippines', 'philippines'),
('GES', 'General Santos International Airport', 'General Santos', 'philippines', 'philippines'),
('JOL', 'Jolo Airport', 'Sulu', 'philippines', 'philippines'),
('MNL', 'Ninoy Aquino International Airport', 'Manila', 'philippines', 'philippines'),
('SJI', 'San Jose Airport', 'Occidental Mindoro', 'philippines', 'philippines'),
('TUG', 'Tuguegarao Airport', 'Cagayan', 'philippines', 'philippines');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ID` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `date` date NOT NULL,
  `flightno` varchar(10) NOT NULL,
  `username` varchar(45) NOT NULL,
  `classtype` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `paid` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ID`, `time`, `date`, `flightno`, `username`, `classtype`, `rating`, `paid`) VALUES
(0, '2021-02-12 06:16:43', '2021-02-13', '0001', 'jlparanal', 'Business', 0, 1),
(0, '2021-02-12 06:19:22', '2021-02-13', '0004', 'jlparanal', 'Economy', 0, 1),
(0, '2021-02-12 06:04:34', '2021-02-20', '0006', 'jlparanal', 'Business', 0, 1),
(1, '2019-12-12 05:12:10', '2019-12-04', '0001', 'jlparanal', 'Business', 5, 1),
(2, '2019-12-11 07:24:40', '2019-12-25', '0004', 'sample01', 'Economy', 4, 1),
(3, '2019-12-16 13:21:21', '2019-12-24', '0005', 'Ternida', 'Business', 4, 1),
(4, '2019-12-14 10:23:22', '2019-12-02', '0001', 'sample01', 'Business', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `number` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`number`, `name`, `capacity`, `price`) VALUES
('0000', 'Business', 25, 8000),
('0000', 'Economy', 50, 4000),
('0001', 'Business', 25, 400),
('0004', 'Business', 2, 4),
('0004', 'Economy', 1, 2),
('0005', 'Business', 25, 5000),
('0005', 'Economy', 20, 2500),
('0006', 'Business', 10, 7000),
('0006', 'Economy', 15, 3500);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `number` varchar(20) NOT NULL,
  `airplane_id` varchar(10) NOT NULL,
  `departure` varchar(10) NOT NULL,
  `d_time` time NOT NULL,
  `arrival` varchar(10) NOT NULL,
  `a_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`number`, `airplane_id`, `departure`, `d_time`, `arrival`, `a_time`) VALUES
('0000', '1170', 'DVO', '19:00:00', 'CRK', '20:00:00'),
('0001', '1170', 'CRK', '09:00:00', 'CEB', '08:00:00'),
('0002', '1170', 'CRK', '09:00:00', 'CEB', '08:00:00'),
('0003', '1170', 'CRK', '10:00:00', 'DVO', '09:00:00'),
('0004', '1170', 'CEB', '03:00:00', 'DVO', '01:00:00'),
('0005', '1170', 'MNL', '20:00:00', 'SJI', '08:00:00'),
('0006', '1170', 'CBO', '12:00:00', 'CEB', '19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `frequency`
--

CREATE TABLE `frequency` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Dish` varchar(50) NOT NULL,
  `Rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frequency`
--

INSERT INTO `frequency` (`ID`, `Name`, `Dish`, `Rating`) VALUES
(1, 'john', 'Pork', 5),
(2, 'lloyd', 'Beef', 4),
(3, 'kenneth', 'Fish', 3),
(4, 'mark', 'Fish', 3),
(5, 'bryan', 'Fish', 4),
(6, 'tonton', 'Beef', 4),
(7, 'christian', 'Beef', 5),
(8, 'melvin', 'Pork', 3);

-- --------------------------------------------------------

--
-- Table structure for table `passanger`
--

CREATE TABLE `passanger` (
  `username` varchar(30) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cellphone` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passanger`
--

INSERT INTO `passanger` (`username`, `firstname`, `middlename`, `lastname`, `email`, `cellphone`, `gender`, `birthday`, `password`) VALUES
('jlparanal', 'john', 'lloyd', 'paranal', 'jlp8jhp@gmail.com', '096638941328', 'Male', '1999-05-14', 'Abcde12345'),
('sample01', 'john', 'mark', 'corsino', 'jm_corsino@gmail.com', '09263852488', 'male', '2019-11-08', 'password'),
('Ternida', 'kenneth', 'Salas', 'Ternida', 'ternida@gmail.com', '0912345678', 'Male', '2019-12-09', 'Kenneth123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airplane`
--
ALTER TABLE `airplane`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`,`flightno`),
  ADD KEY `username_idx` (`username`),
  ADD KEY `classname_idx` (`classtype`),
  ADD KEY `flightno_idx` (`flightno`,`classtype`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`number`,`name`),
  ADD KEY `number_idx` (`number`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`number`),
  ADD KEY `code_idx` (`departure`,`arrival`),
  ADD KEY `airplaneid_idx` (`airplane_id`),
  ADD KEY `arrival_idx` (`arrival`);

--
-- Indexes for table `frequency`
--
ALTER TABLE `frequency`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `passanger`
--
ALTER TABLE `passanger`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `flightno` FOREIGN KEY (`flightno`,`classtype`) REFERENCES `class` (`number`, `name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `passanger` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `number` FOREIGN KEY (`number`) REFERENCES `flight` (`number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `airplaneid` FOREIGN KEY (`airplane_id`) REFERENCES `airplane` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `arrival` FOREIGN KEY (`arrival`) REFERENCES `airport` (`code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `departure` FOREIGN KEY (`departure`) REFERENCES `airport` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
