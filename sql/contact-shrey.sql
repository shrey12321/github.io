-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2018 at 03:17 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id765132_shrey`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact-shrey`
--

CREATE TABLE `contact-shrey` (
  `id` int(250) NOT NULL,
  `name` varchar(41) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `company-name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact-shrey`
--

INSERT INTO `contact-shrey` (`id`, `name`, `email`, `company-name`, `phone`, `message`) VALUES
(2, 'Shrey Garg', 'shrey4625@gmail.com', 'beingyourself', '8871009875', '                  kyabhai'),
(3, 'Shrey Garg', 'shrey4625@gmail.com', 'beingyourself', '8871009875', '                  KYA BOLTI TU'),
(4, 'shrey', 'crazymeshrey@gmail.com', 'beingyourself', '8871009875', '                  '),
(5, 'shrey97', 'gargshrey15@gmail.com', 'bhai ', '8871009875', '                  yo'),
(6, 'shrey ', 'gargshrey15@gmail.com', 'bhai ', '8871009875', 'cv'),
(7, 'Shrey Garg', 'crazymeshrey@gmail.com', 'beingyourself', '8871009875', 'this is it '),
(8, 'Shrey Garg', 'crazymeshrey@gmail.com', 'beingyourself', '8871009875', 'this is it '),
(9, 'Shrey Garg', 'crazymeshrey@gmail.com', 'beingyourself', '8871009875', 'this is it '),
(10, 'shrey', 'shrey4625@gmail.com', 'beingyourself', '8871009875', 'this is for check purpose only\r\n'),
(11, 'shrey', 'shrey4625@gmail.com', 'beingyourself', '8871009875', 'this is for check purpose only\r\n'),
(12, 'm', 'shreygarg_di@srmuniv.edu.in', 'kjv', '8871009875', 'j'),
(13, 'hj', 'shrey4625@gmail.com', 'jbk', '8871009875', 'yhob'),
(14, 'Shrey Garg', 'shreygarg_di@srmuniv.edu.in', 'beingyourself', '8871009875', 'hi'),
(15, 'Shrey Garg', 'shreygarg_di@srmuniv.edu.in', 'beingyourself', '8871009875', 'dsmpooja'),
(16, 'Shrey Garg', 'shreygarg_di@srmuniv.edu.in', 'beingyourself', '8871009875', 'nalfnnld'),
(17, '', '', '', '', ''),
(18, 'Shrey Garg', 'shrey4625@gmail.com', 'beingyourself', '8871009875', 'sfd'),
(19, 'Shrey Garg', 'crazymeshrey@gmail.com', 'beingyourself', '8871009875', 'vcv'),
(20, 'Shrey Garg', 'crazymeshrey@gmail.com', 'beingyourself', '8871009875', 'testing'),
(21, 'Shrey Garg', 'crazymeshrey@gmail.com', 'beingyourself', '8871009875', 'testing'),
(22, 'Shrey Garg', 'crazymeshrey@gmail.com', 'beingyourself', '8871009875', 'shtety'),
(23, 'Shrey Garg', 'crazymeshrey@gmail.com', 'beingyourself', '8871009875', 'fa'),
(24, 'shrey ', 'shreygarg_di@srmuniv.edu.in', 'bhai ', '8871009875', 'hsh'),
(25, 'Kartik Jain', 'kartikjain_sureshjain@srmuniv.edu.in', 'Kartik ke jabaaz', '9962256008', 'Impressive bro  :-O'),
(26, 'JimmiNi', '', 'TLJyGAdkkFYkYtuk', '86600169677', 'JE6Sji http://www.FyLitCl7Pf7ojQdDUOLQOuaxTXbj5iNG.com'),
(27, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact-shrey`
--
ALTER TABLE `contact-shrey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact-shrey`
--
ALTER TABLE `contact-shrey`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
