-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2013 at 03:06 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coigexg1`
--
CREATE DATABASE `coigexg1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `coigexg1`;

-- --------------------------------------------------------

--
-- Table structure for table `loginaccs`
--

CREATE TABLE IF NOT EXISTS `loginaccs` (
  `username` varchar(30) NOT NULL,
  `password1` varchar(12) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginaccs`
--

INSERT INTO `loginaccs` (`username`, `password1`) VALUES
('Admin', 'Admin123'),
('Gamer', 'GNTCR');

-- --------------------------------------------------------

--
-- Table structure for table `reg_members`
--

CREATE TABLE IF NOT EXISTS `reg_members` (
  `fname1` varchar(30) NOT NULL,
  `gender1` varchar(6) NOT NULL,
  `age1` int(3) NOT NULL,
  `raddr1` varchar(100) NOT NULL,
  `contact1` int(15) NOT NULL,
  `userna1` varchar(30) NOT NULL,
  `passwr1` varchar(12) NOT NULL,
  PRIMARY KEY (`userna1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_members`
--

