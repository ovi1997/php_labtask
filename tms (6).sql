-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 06:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(100) NOT NULL,
  `class_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`) VALUES
(1, 'Lars Leach'),
(2, 'Beatrice Howard'),
(3, 'dfgdfgd'),
(7, 'Shannon Schultz'),
(8, 'India Snyder'),
(9, 'Dale Parks'),
(10, 'Jonah Calderon'),
(11, 'Anjolie Morrow'),
(12, 'Anjolie Morrow'),
(13, 'MacKenzie Velasquez');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `institutionName` varchar(255) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `institutionAddress` varchar(255) DEFAULT NULL,
  `user_type` varchar(10) NOT NULL,
  `totalPayment` int(100) NOT NULL DEFAULT 0,
  `duePayment` int(100) NOT NULL DEFAULT 0,
  `lastPay` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `dob`, `gender`, `image`, `address`, `email`, `phone_no`, `password`, `institutionName`, `designation`, `institutionAddress`, `user_type`, `totalPayment`, `duePayment`, `lastPay`) VALUES
(3, 'Arifur Rahman Ovi', '2006-11-17', 'male', 'Screenshot (1).png', 'Aut autem iure susci', 'admin@gmail.com', '14852423574', '5f4dcc3b5aa765d61d8327deb882cf99', 'Nevada Mccoy', 'Zane Stone', 'Olivia Oconnor', 'admin', 0, 0, 0),
(25, 'Xantha sfsfsfsfsdff', '2020-06-11', 'male', NULL, 'Quo quia reiciendis ', 'tije@mailinator.com', '8', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'teacher', 0, 0, 0),
(26, 'Jamalia Cross', '1989-03-08', 'female', NULL, 'Ipsa nostrud exerci', 'pygugav@mailinator.com', '20', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'teacher', 0, 0, 0),
(27, 'Ima Gaines', '1983-03-08', 'female', NULL, 'Harum quam magna ess', 'maherobusy@mailinator.com', '35', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'teacher', 0, 0, 0),
(28, 'Gray Morrison', '1993-02-19', 'female', NULL, 'Odio harum possimus', 'qivytifa@mailinator.com', '83', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'teacher', 0, 0, 0),
(35, 'Cherokee lijbzcbzxljcbz7', '2019-09-02', 'female', NULL, 'Ex sit asperiores qu', 'foxi@mailinator.com', '73', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(36, 'Paki Olsen', '2016-06-14', 'female', NULL, 'Fuga Dolores modi r', 'lama@mailinator.com', '13', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(37, 'Kai Bernard', '1972-03-16', 'male', NULL, 'Dolores rerum id di', 'nohur@mailinator.com', '22', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(38, 'Aline Pollard', '2004-02-11', 'female', NULL, 'Temporibus dolore vo', 'sanufazoz@mailinator.com', '86', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(39, 'Derek Merritt', '1978-08-01', 'female', NULL, 'Libero reprehenderit', 'panazivato@mailinator.com', '29', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(41, 'Coby Holder', '1970-02-05', 'male', NULL, 'Velit a enim dolorem', 'nobitumin@mailinator.com', '5', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(42, 'Hanae Walker', '1978-09-03', 'male', NULL, 'In sit voluptas quae', 'gadamu@mailinator.com', '4', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(43, 'Ignatius Mccarty', '1974-02-28', 'female', NULL, 'Ut deserunt tenetur ', 'pyjucorel@mailinator.com', '3', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'teacher', 0, 0, 0),
(45, 'Orli Chapman', '2007-09-17', 'female', NULL, 'Sunt est incididunt ', 'tocuha@mailinator.com', '43', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(46, 'Kaitlin Gilbert', '2011-09-15', 'male', NULL, 'Facilis ad rerum ten', 'cigy@mailinator.com', '91', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(49, 'Jana Reilly', '1973-08-16', 'male', NULL, 'Qui dolor quia quia ', 'cahav@mailinator.com', '13', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'student', 0, 0, 10000),
(50, 'Maite Melton', '2004-01-20', 'male', NULL, 'In mollitia magni vo', 'xicuk@mailinator.com', '6', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'student', 0, 0, 10000),
(51, 'Isadora Jimenez', '1972-08-09', 'female', NULL, 'Necessitatibus offic', 'toricejek@mailinator.com', '25', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'student', 0, 0, 0),
(52, 'Ursula Russell', '1994-12-11', 'male', NULL, 'Provident id dolor ', 'kygyjebi@mailinator.com', '65', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'student', 0, 0, 0),
(53, 'Moses Bowman', '2003-06-10', 'male', NULL, 'Iste sed perferendis', 'wikitiko@mailinator.com', '38', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'student', 0, 0, 0),
(54, 'Dale Gibbs', '2021-04-01', 'male', NULL, 'Reprehenderit nostru', 'zeqixiduzo@mailinator.com', '81', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'teacher', 0, 0, 0),
(55, 'Calista Hayes', '1988-02-25', 'male', NULL, 'Consequuntur unde do', 'potazixu@mailinator.com', '10', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'student', 0, 0, 0),
(56, 'Donna Hickman', '2001-11-15', 'female', NULL, 'Eum elit rerum do d', 'warusi@mailinator.com', '37', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(57, 'Leonard Dickson', '1997-07-01', 'female', NULL, 'Sit quidem voluptas ', 'benogewogy@mailinator.com', '21', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(58, 'Shoshana Jennings', '1992-05-24', 'male', NULL, 'Voluptas aut perspic', 'jicadapuni@mailinator.com', '91', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(59, 'Rhonda Parks', '2018-02-04', 'female', NULL, 'Commodo ea dolorum s', 'kybufovel@mailinator.com', '48', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'student', 0, 0, 0),
(60, 'Matthew Winters', '2001-05-03', 'female', NULL, 'Eiusmod eius nulla h', 'fibuhybuju@mailinator.com', '5', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'accountant', 0, 0, 0),
(61, 'Madeson Williams', '2000-01-07', 'male', NULL, 'Illo distinctio Vel', 'hurido@mailinator.com', '85', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, 'teacher', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
