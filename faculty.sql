-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2019 at 04:46 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `department`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `dept`, `subject`) VALUES
(1, 'rama', 'cse', 'system software'),
(2, 'laxmi', 'cse', 'web technology'),
(3, 'iwin', 'cse', 'java'),
(4, 'bright', 'cse', 'c++'),
(5, 'kumudha', 'cse', 'c'),
(6, 'sharan', 'cse', 'cryptography'),
(7, 'sara', 'cse', 'compiler'),
(8, 'shaji', 'cse', 'data structure-I'),
(9, 'leah', 'cse', 'toc'),
(10, 'ashimol', 'cse', 'case tools'),
(11, 'abiya', 'eee', 'basic electrical engineering'),
(12, 'elizabeth', 'eee', 'electrical circuit'),
(13, 'abraham', 'eee', 'electrical machines'),
(14, 'priya', 'eee', 'power system'),
(15, 'jose', 'eee', 'electromagnetic field'),
(16, 'manu', 'eee', 'electrical measurement'),
(17, 'shiney', 'eee', 'basic electronic devices '),
(18, 'prabha', 'eee', 'switching theory'),
(19, 'prabhakar', 'eee', 'logic design'),
(20, 'allen', 'eee', 'electrical engineering'),
(21, 'kevin', 'mech', 'basic mechanical '),
(22, 'jimmy', 'mech', 'mechnaical engineering'),
(23, 'simon', 'mech', 'strength of materials'),
(24, 'shan', 'mech', 'design of machine'),
(25, 'anna', 'mech', 'machine elements'),
(26, 'shain', 'mech', 'fluid mechanics'),
(27, 'mariam', 'mech', 'thermodynamics-I'),
(28, 'ryan', 'mech', 'thermodynamics-II'),
(29, 'geogy', 'mech', 'theory of machines'),
(30, 'georgy', 'mech', 'heat and mass transfer'),
(31, 'roshni', 'civil', 'badic civil engineering'),
(32, 'thanka', 'civil', 'surveying land'),
(33, 'anitha', 'civil', 'material science'),
(34, 'iwin', 'civil', 'coastal engineering'),
(35, 'shaani', 'civil', 'construction  engineering'),
(36, 'leya', 'civil', 'building technology'),
(37, 'lanciya', 'civil', 'structural analysis'),
(38, 'glen', 'civil', 'structural design'),
(39, 'godwin', 'civil', 'hydraulic structure'),
(40, 'thomas', 'civil', 'town planning');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
