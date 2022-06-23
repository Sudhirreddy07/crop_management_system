-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 07:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crops`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmembers`
--

CREATE TABLE `cmembers` (
  `id` int(255) NOT NULL,
  `userid` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmembers`
--

INSERT INTO `cmembers` (`id`, `userid`, `fname`, `phonenumber`, `Address`, `mail`, `password`) VALUES
(2, 'sudhir', 'sudhir', '9986642192', '458 SRI HARAMMA COMPLEX,BAZAAR STREET,MANDYA', 'sudhir@gmail.com', '$2y$12$RP4ozeaX2yu.YWl8ow9/Fe2aML5hDs2RQj01eaDFrnC5Yq4j/TrYu'),
(3, 'varun', 'varun', '9986642192', 'mysore', 'varun@gmail.com', '$2y$12$t2eo4tc7xtD6wYff2foGaeWFKae2GYNEm7qv0/2R6RbywOKROGx3C');

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE `crop` (
  `id` int(255) NOT NULL,
  `cropid` varchar(50) NOT NULL,
  `userid` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `cdiscription` varchar(255) NOT NULL,
  `image` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`id`, `cropid`, `userid`, `name`, `sdate`, `edate`, `cdiscription`, `image`) VALUES
(9, '006', 'varun', 'bananna', '2022-01-01', '2023-01-01', 'will be grown in any time', 0x4162616e616e612e4a5047),
(10, '001', 'varun', 'paddy', '2022-01-01', '2023-01-01', 'will be grown in any time', 0x41726963652e4a5047),
(11, '001', 'sudhir', 'paddy', '2022-01-01', '2023-01-01', 'will be grown in any time', 0x63726f706261636b67726f756e642e6a7067),
(12, '001', 'sudhir', 'paddy', '2021-01-01', '2022-01-01', 'will be grown in any time', 0x70616464792e6a7067),
(13, '002', 'sudhir', 'mango', '2021-04-04', '2021-06-15', 'this crop is avalible for one and half month', 0x6d616e676f2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `userid`, `name`, `phonenumber`, `Address`, `image`) VALUES
(4, 'shreays', 'shreays', '1234567890', 'mysore', 'farmerbackground.png'),
(6, 'sudhir', 'varun simha', '1234567890', 'mysore', 'farmerbackground.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `userid` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`userid`, `name`, `mail`, `subject`) VALUES
('sudhir', 'sudhir', 'sudhir@gmail.com', 'This application is use full to sell our crops from one place to any other places by uploading the information to this application\r\n\r\nThank you'),
('varun', 'varun', 'varun@gmail.com', 'this application is good');

-- --------------------------------------------------------

--
-- Table structure for table `fmembers`
--

CREATE TABLE `fmembers` (
  `id` int(11) NOT NULL,
  `userid` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fmembers`
--

INSERT INTO `fmembers` (`id`, `userid`, `fname`, `phonenumber`, `Address`, `mail`, `password`) VALUES
(6, 'varun', 'varun', '2147483647', 'Shree Sai medical and general Store,Geetha road, r', 'varun@gmail.com', '$2y$12$JOQ4LFodZR4PWSHSN1Se6.p.eoZOCjNCE1Djyj8l09U8u4VanfvKW'),
(7, 'sudhir', 'sudhir', '2147483647', '458 SRI HARAMMA COMPLEX,BAZAAR STREET,MANDYA', 'sudhir@gmail.com', '$2y$12$tLce81WK5.GGonLgQZkMTOHU/AmG3waBm6QInUkznEihZ8ue9p/ee'),
(9, 'shreays', 'shreays', '9876543210', 'mysore', 'shreyas@gmail.com', '$2y$12$IGaL13QjP8axLV8htIcQQ.riwEezNjL9Hq7S26FrirxYzVHX7X9qq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmembers`
--
ALTER TABLE `cmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crop`
--
ALTER TABLE `crop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `fmembers`
--
ALTER TABLE `fmembers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmembers`
--
ALTER TABLE `cmembers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crop`
--
ALTER TABLE `crop`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fmembers`
--
ALTER TABLE `fmembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
