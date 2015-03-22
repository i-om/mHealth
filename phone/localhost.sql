-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 01, 2011 at 01:50 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `login`
-- 
CREATE DATABASE `login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login`;

-- --------------------------------------------------------

-- 
-- Table structure for table `info`
-- 

CREATE TABLE `info` (
  `infoid` int(11) NOT NULL auto_increment,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  PRIMARY KEY  (`infoid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

-- 
-- Dumping data for table `info`
-- 

INSERT INTO `info` (`infoid`, `firstname`, `lastname`, `date`, `address`, `mobile`) VALUES 
(27, 'atul', 'bajpai', '16-02-2011', 'kp where 1', '+919960184355'),
(28, 'atul', 'bajpai', '28-02-2011', 'where 1 kp', '+919960184355'),
(29, 'atul', 'bajpai', '14-02-2011', 'where kp is 1', '+919960184355'),
(30, 'apoorv', 'dvd', '21-02-2011', 'sp', '2222'),
(31, 'om', 'Dwivedi', '22-02-2011', 'KP', '663536'),
(32, 'appy', 'goel', '08-02-2011', 'dpn', '55');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `userid` int(11) NOT NULL auto_increment,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`userid`, `username`, `password`) VALUES 
(1, 'om', 'om'),
(2, 'apoorv', 'appy'),
(3, 'd''souza', 'd''souza');
