-- phpMyAdmin SQL Dump
-- version 4.1.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2018 at 10:54 AM
-- Server version: 5.1.62
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student-hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `lastname` varchar(35) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `middlename` varchar(35) NOT NULL,
  `gender` varchar(35) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `nationality` varchar(35) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(35) NOT NULL,
  `guardian_address` varchar(100) NOT NULL,
  `guardian_contact_number` varchar(35) NOT NULL,
  `guardian_office_address` varchar(100) NOT NULL,
  `guardian_office_contact_number` varchar(35) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `alternate_guardian_name` varchar(100) NOT NULL,
  `alternate_guardian_contact_number` varchar(35) NOT NULL,
  `elder_sibling_name` varchar(100) NOT NULL,
  `elder_sibling_cys` varchar(35) NOT NULL,
  `elder_sibling_name_2` varchar(100) NOT NULL,
  `elder_sibling_cys_2` varchar(35) NOT NULL,
  `elder_sibling_name_3` varchar(100) NOT NULL,
  `elder_sibling_cys_3` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`lastname`, `firstname`, `middlename`, `gender`, `birthdate`, `age`, `nationality`, `address`, `contact_number`, `guardian_address`, `guardian_contact_number`, `guardian_office_address`, `guardian_office_contact_number`, `guardian_name`, `alternate_guardian_name`, `alternate_guardian_contact_number`, `elder_sibling_name`, `elder_sibling_cys`, `elder_sibling_name_2`, `elder_sibling_cys_2`, `elder_sibling_name_3`, `elder_sibling_cys_3`) VALUES
('Doe', 'John', 'Smith', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Doe', 'John', 'Smith', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Bobihis', 'Reynell', 'Cortiguierra', 'male', '0000-00-00', 21, 'Filipino', 'Hssjsjs', '09956605955', 'Gshsjsj', '09363936331', 'Gsjsjsk', '628282', 'Tessie Bobihis', 'Gsjskaka', '267282', 'Gshskks', '6271818', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
