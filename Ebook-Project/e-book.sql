-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 06:48 PM
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
-- Database: `e-book`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `pdf` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `image`, `pdf`, `category_id`) VALUES
(202, 'PHP', '../../pics_pdf/pic/php.png', '../../pics_pdf/pdf/php.pdf', 1),
(203, 'Angular', '../../pics_pdf/pic/angular.png', '../../pics_pdf/pdf/angular.pdf', 1),
(204, 'Js', '../../pics_pdf/pic/js.jpg', '../../pics_pdf/pdf/Javascript.pdf', 1),
(205, 'HTML / CSS', '../../pics_pdf/pic/html_css.jpg', '../../pics_pdf/pdf/HTML5_CSS3.pdf', 1),
(206, 'Python', '../../pics_pdf/pic/python.png', '../../pics_pdf/pdf/Python_g_janelidze.pdf', 1),
(207, 'Java', '../../pics_pdf/pic/java.jpg', '../../pics_pdf/pdf/java.pdf', 1),
(208, 'C++', '../../pics_pdf/pic/c++.jpg', '../../pics_pdf/pdf/Samxaraze_C++.pdf', 1),
(209, 'C#', '../../pics_pdf/pic/C3.jpg', '../../pics_pdf/pdf/c.pdf', 1),
(210, 'SQL server', '../../pics_pdf/pic/sql.jpg', '../../pics_pdf/pdf/SQL_Serveri_1.pdf', 1),
(211, 'Archicad', '../../pics_pdf/pic/archicad.png', '../../pics_pdf/pdf/archicad.pdf', 2),
(212, 'Autocad', '../../pics_pdf/pic/auto.jpg', '../../pics_pdf/pdf/autocad.pdf', 2),
(213, 'Management', '../../pics_pdf/pic/menegment.png', '../../pics_pdf/pdf/menagment.pdf', 2),
(214, 'Vehicle', '../../pics_pdf/pic/amwe.jpg', '../../pics_pdf/pdf/amwe.jpg', 2),
(215, 'Architecture', '../../pics_pdf/pic/msh-safudzvlebi.jpg', '../../pics_pdf/pdf/msh,martvis.safudzvlebi.pdf', 2),
(216, 'Railways', '../../pics_pdf/pic/rail.jpg', '../../pics_pdf/pdf/liandagi.mowyoba.yrilis.ferdobi.pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Information Technology'),
(2, 'Architecture'),
(3, 'Energy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `password`, `mail`, `phone`) VALUES
(65, 'name1', 'sarname1', '$2y$10$mz01WGx7nnkOMUO55fwCFupljOvKTfU5SkFR/gRrXuFueDAX/fsQS', 'user@gmail.com', '599145236'),
(66, 'name2', 'surname2', '$2y$10$ugtjBmfP60W2hm.KuvwSJ.0LyMm339YLjGCAzsP4gpr1c.C2VEicS', 'user2@gmail.com', '555789654'),
(67, 'name3', 'surname3', '$2y$10$HQ.A6E71ArJza5uObRD7/uHf/BhYAsD6ImvffcC4tGjIoVbKpYJdK', 'user3@gmail.com', '514259639'),
(68, 'name4', 'surname4', '$2y$10$Z5D1cI6HuHLYVMlnMtX2Du3TbUGK0HVMZIW/6E6vy.nSOfjckk8t6', 'user4@gmail.com', '574269874'),
(69, 'name5', 'surname5', '$2y$10$QcUdIdKNgS9l5S3FkqvVI.lUdMVlVB1VY76nYwuU2NJcTuZ6hZ58W', 'user5@gmail.com', '555369874');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
