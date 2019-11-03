-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2019 at 09:43 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin000kamal`
--

CREATE TABLE IF NOT EXISTS `admin000kamal` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `document` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kamal000rawat`
--

CREATE TABLE IF NOT EXISTS `kamal000rawat` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `document` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kamal000rawat@gmail.com`
--

CREATE TABLE IF NOT EXISTS `kamal000rawat@gmail.com` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `document` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kamal000singh`
--

CREATE TABLE IF NOT EXISTS `kamal000singh` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `document` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kamalrawat123`
--

CREATE TABLE IF NOT EXISTS `kamalrawat123` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `document` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_record`
--

CREATE TABLE IF NOT EXISTS `user_record` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `username` varchar(40) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fathername` varchar(35) NOT NULL,
  `mothername` varchar(35) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `profile_pic` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_record`
--

INSERT INTO `user_record` (`id`, `fname`, `lname`, `username`, `dob`, `password`, `fathername`, `mothername`, `gender`, `profile_pic`) VALUES
(3, 'kamal ', 'singh', 'kamal000singh', '1996-12-10', 'kamal000singh', 'chander singh rawat', 'shobha devi', 'Male', 'profile/admin.jpg'),
(4, 'kamal', 'rawat', 'admin000kamal', '1996-08-10', 'kamal000', 'chander singh', 'shobha devi', 'Male', 'profile/admin.jpg'),
(5, 'kamal', 'rawat', 'kamal000rawat', '10-08-1996', 'kamal000', 'chander singh', 'shobha devi', 'Male', 'profile/IMG_5771.JPG'),
(6, 'kamal singh', 'rawat', 'kamalrawat123', '10-08-1996', 'kamalrawat123', 'chander singh rawat', 'shobha devi', 'Male', 'profile/IMG_20190503_083936.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
