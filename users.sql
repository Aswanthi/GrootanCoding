-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 02:14 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user` text NOT NULL,
  `first` text NOT NULL,
  `last` text NOT NULL,
  `age` int(2) NOT NULL,
  `dob` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user`, `first`, `last`, `age`, `dob`, `password`, `address`, `phone`) VALUES
('Ashu_10', 'Aswanthi', 'D S', 21, '10/12/1999', 'Ashu@123', 'M G Nagar', '8778362854'),
('Tharu_08', 'Tharani', 'S', 20, '08/11/2000', 'Tharu@123', 'K P Colony', '9791754422'),
('Prici_28', 'Angelin Pricila', 'S A', 20, '28/06/2001', 'Prici@123', 'Y M R Patti', '6369301122'),
('Sheelu_18', 'Sheela', 'X', 20, '18/06/2001', 'Sheelu@123', 'Muthalagupatti', '6369192533');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
