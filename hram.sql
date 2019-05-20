-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 01:22 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hram`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(40) NOT NULL,
  `firstname` varchar(124) NOT NULL,
  `login` varchar(126) DEFAULT NULL,
  `password` varchar(126) DEFAULT NULL,
  `usertype` varchar(16) NOT NULL,
  `Login_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `firstname`, `login`, `password`, `usertype`, `Login_time`) VALUES
(12, 'Rondo', 'Clintmassey', '03b677a1859e8ef45cdea6bb0bfad40c', 'admin', '0000-00-00'),
(666, 'MC', 'MarieC', '5033d411cbbacde89bf66e19cdd815a8', 'admin', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `gebruikersnaam` varchar(40) NOT NULL,
  `wachtwoord` varchar(40) NOT NULL,
  `gebruikersid` int(40) NOT NULL,
  `permission` varchar(40) NOT NULL,
  `geboortedatum` date DEFAULT NULL,
  `pasgeldig` date DEFAULT NULL,
  `pasnr` varchar(25) DEFAULT NULL,
  `reknr` varchar(64) DEFAULT NULL,
  `huidigepincode` int(11) DEFAULT NULL,
  `nieuwepin` int(6) DEFAULT NULL,
  `tweedenieuwepin` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`gebruikersnaam`, `wachtwoord`, `gebruikersid`, `permission`, `geboortedatum`, `pasgeldig`, `pasnr`, `reknr`, `huidigepincode`, `nieuwepin`, `tweedenieuwepin`) VALUES
('bbb', 'bbb', 13, 'klant', '2019-02-12', '2019-01-29', '5665626565855', 'NL91 INGB 0794 34 14 70', NULL, NULL, NULL),
('aaaaaa', 'aaaaaaa', 14, 'klant', '2019-02-08', '0000-00-00', '123', 'NL INGB5 234234234', 1111, 2222, 3333);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `medewerker` varchar(50) NOT NULL,
  `klant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD PRIMARY KEY (`gebruikersid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logindetails`
--
ALTER TABLE `logindetails`
  MODIFY `gebruikersid` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
