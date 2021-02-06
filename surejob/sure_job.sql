-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 08:45 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sure-job`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_job`
--

CREATE TABLE IF NOT EXISTS `add_job` (
`id` int(11) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `jobcategory` varchar(100) NOT NULL,
  `companyurl` varchar(100) NOT NULL,
  `filelogo` varchar(100) NOT NULL,
  `companylocation` varchar(100) NOT NULL,
  `otherinfo` varchar(100) NOT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_job`
--

INSERT INTO `add_job` (`id`, `jobtitle`, `companyname`, `jobcategory`, `companyurl`, `filelogo`, `companylocation`, `otherinfo`, `date_added`) VALUES
(53, 'Software Engineer', 'own', 'Accounting', 'own', '', 'own', '', '2020-03-17'),
(54, 'Software Engineer', 'own', 'IT and Telecommunication', 'own', '', 'own', '', '2020-03-09'),
(56, 'Graphics Designer', 'Bitmap I.T. Solution Pvt. Ltd.', 'IT and Telecommunication', 'https://www.bitmapitsolution.com', 'logo.png', 'Belchowk', '', '2020-03-17'),
(57, 'Software Engineer', 'Bitmap I.T. Solution Pvt. Ltd.', 'Customer Services', 'https://www.bitmapitsolution.com', 'Capture.PNG', 'Belchowk', '', '2020-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_education`
--

CREATE TABLE IF NOT EXISTS `tbl_education` (
`id` int(11) NOT NULL,
  `education_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_education`
--

INSERT INTO `tbl_education` (`id`, `education_name`) VALUES
(7, 'hachuwa'),
(9, 'kn kjnb jhbb wjkfbsncjkahkqnqioancnaioch');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_field`
--

CREATE TABLE IF NOT EXISTS `tbl_job_field` (
`id` int(11) NOT NULL,
  `job_field` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job_field`
--

INSERT INTO `tbl_job_field` (`id`, `job_field`) VALUES
(1, 'IT and Telecommunication');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_location`
--

CREATE TABLE IF NOT EXISTS `tbl_job_location` (
`id` int(11) NOT NULL,
  `job_location` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job_location`
--

INSERT INTO `tbl_job_location` (`id`, `job_location`) VALUES
(1, 'Bharatpur'),
(2, 'Butwal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
`id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `userid`, `password`, `email`) VALUES
(8, '1', 'Surejob@123*#', 'surejob@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
`id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phonenum` int(20) NOT NULL,
  `education` varchar(50) NOT NULL,
  `joblocation` varchar(50) NOT NULL,
  `jobfield` varchar(50) NOT NULL,
  `vehicle` varchar(20) NOT NULL,
  `license` varchar(20) NOT NULL,
  `files` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fullname`, `location`, `phonenum`, `education`, `joblocation`, `jobfield`, `vehicle`, `license`, `files`, `email`, `gender`, `status`) VALUES
(1, 'pallavi', '', 0, 'Basketball', 'Nawalpur', 'Nawalpur', '', '', '', 'sure', '', ''),
(2, 'kamal', 'bharatpur', 2147483647, 'Basketball', 'Chitwan', 'Chitwan', 'yesvehicle', 'yeslicense', '', 'sure', 'male', ''),
(3, 'sfsdfs', '', 0, 'Basketball', 'Nawalpur', 'Nawalpur', '', '', '', 'sure', '', ''),
(4, 'pallavi', 'bharatpur', 1234567890, 'Softball', 'Chitwan', 'Chitwan', 'yesvehicle', 'yeslicense', '', 'sure', 'female', ''),
(5, 'pallavi', '', 0, 'Basketball', 'Nawalpur', 'Nawalpur', '', '', '', 'hello@gmail.com', '', ''),
(6, 'Sudip Parajuli', 'sdlkjf', 0, 'Basketball', 'Nawalpur', 'Nawalpur', '', '', '', 'sudip@gmil.com', '', ''),
(7, 'Sudip Parajuli', 'lsdfj', 0, 'Basketball', 'Nawalpur', 'Nawalpur', '', '', '', 'sudip@gmail.com', '', ''),
(8, 'Sudip Parajuli', 'bharatpur', 0, 'Football', 'Nawalpur', 'Butwal', '', '', '', 's@gmail.com', '', ''),
(9, 'dfghjvfgh', '', 0, 'Football', 'Narayani', 'Butwal', '', '', '', 'pallavi@gmail.com', '', ''),
(10, 'pallavi', 'kawasoti', 0, 'Basketball', 'Butwal', 'Nawalpur', '', '', '', 'sss@gmail.com', '', ''),
(11, 'Rabindra', 'daldale', 2147483647, 'Basketball', 'Nawalpur', 'Nawalpur', '', '', '', 'rabindra@gmail.com', '', ''),
(12, 'roshan', 'sldkjf', 0, 'Basketball', 'Nawalpur', 'Nawalpur', 'yesvehicle', 'yeslicense', '', 'roshan@gmail.com', 'male', ''),
(13, 'sujata', 'sldjflj', 0, 'Basketball', 'Nawalpur', 'Nawalpur', 'novehicle', 'yeslicense', '', 'sujata@gmail.com', 'female', ''),
(14, 'sujata', 'lsdjfl', 0, 'Basketball', 'Nawalpur', 'Nawalpur', 'yesvehicle', 'yeslicense', '', 'sujataa@gmail.com', 'male', ''),
(15, 'Rabindra', 'kawasoti', 2147483647, 'Basketball', 'Chitwan', 'Chitwan', 'yesvehicle', 'yeslicense', '', 'rr@gmail.com', 'male', ''),
(16, 'sdtyu', 'cvb', 2147483647, 'Baseball', 'Chitwan', 'Narayani', 'yesvehicle', 'nolicense', '', 'p@gmail.com', '', ''),
(17, 'Rabindra Sapkota', 'nawal', 2147483647, 'Softball', 'Nawalpur', 'Nawalpur', 'yesvehicle', 'yeslicense', '', 'innaterabindra2017@gmail.com', 'male', ''),
(18, 'Rabindra Sapkota', 'nawalpur', 2147483647, 'Basketball', 'Butwal', 'Nawalpur', 'yesvehicle', 'yeslicense', '', 'workwithrabindra@gmail.com', 'male', ''),
(19, 'Rabindra Sapkota', 'bharatpur', 2147483647, 'Basketball', 'Nawalpur', 'Nawalpur', 'yesvehicle', 'yeslicense', '', 'rrr@gmail.com', 'male', ''),
(20, 'Rabindra Sapkota', 'nawalpur', 0, 'Softball', 'Nawalpur', 'Butwal', 'yesvehicle', 'yeslicense', '', '12345@gmail.com', 'male', ''),
(21, 'Rabindra Sapkota', 'cnsknfkwnf', 0, 'Basketball', 'Nawalpur', 'Chitwan', 'yesvehicle', 'yeslicense', '', 'rabindra@gmail.com', 'male', 'pending'),
(22, 'Rabindra Sapkota', 'bharatpur', 0, 'Basketball', 'Nawalpur', 'Butwal', 'yesvehicle', 'yeslicense', 'invoice-1550790222.pdf', 'rabindra@gmail.com', 'male', 'denied'),
(23, 'pallu', 'nawal', 0, 'Basketball', 'Nawalpur', 'Nawalpur', 'yesvehicle', 'yeslicense', 'Secretary Report.pdf', 'innaterabindra2017@gmail.com', 'male', 'denied'),
(24, 'Rabindra Sapkota', 'nawalpur', 0, 'Baseball', 'Butwal', 'Chitwan', 'yesvehicle', 'yeslicense', '', 'innaterabindra2017@gmail.com', 'male', 'denied'),
(25, 'Rabindra Sapkota', 'nawalpur', 2147483647, 'Basketball', 'Nawalpur', 'Butwal', 'yesvehicle', 'yeslicense', '', 'sudhankandel03@gmail.com', 'male', 'denied'),
(26, 'Rabindra Sapkota', 'nm kn j nb  mn', 0, 'Softball', 'Nawalpur', 'Chitwan', 'yesvehicle', 'yeslicense', '', 'workwithrabindra@gmail.com', 'male', 'denied'),
(27, 'Rabindra Sapkota', 'wsnvwnf', 0, 'Basketball', 'Butwal', 'Chitwan', 'yesvehicle', 'yeslicense', 'invoice-1550790222.pdf', 'innaterabindra2017@gmail.com', 'male', 'denied'),
(28, 'pallavi', 'noisbcn iwobs', 2147483647, 'Baseball', 'Chitwan', 'Chitwan', 'yesvehicle', 'yeslicense', 'Secretary Report.pdf', 'email@email.com', 'female', 'denied'),
(29, 'Rabindra Sapkota', 'nm kn j nb  mn', 0, 'Basketball', 'Chitwan', 'Chitwan', 'yesvehicle', 'yeslicense', 'invoice-1550790222.pdf', 'rabindra@gmail.com', 'male', 'pending'),
(30, 'Sudip Parajuli', 'Bharatpur', 98550119, 'hachuwa', 'Bharatpur', 'IT and Telecommunication', 'yesvehicle', 'yeslicense', 'Capture.PNG', 'Sudip@gmail.com', 'male', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_job`
--
ALTER TABLE `add_job`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_education`
--
ALTER TABLE `tbl_education`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_field`
--
ALTER TABLE `tbl_job_field`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_location`
--
ALTER TABLE `tbl_job_location`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_job`
--
ALTER TABLE `add_job`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_education`
--
ALTER TABLE `tbl_education`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_job_field`
--
ALTER TABLE `tbl_job_field`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_job_location`
--
ALTER TABLE `tbl_job_location`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
