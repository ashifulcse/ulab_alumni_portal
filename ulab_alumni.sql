-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 08:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ulab_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `decs` text NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `category`, `decs`, `status`, `create_at`) VALUES
(1, 'MySQL Data base', 'React Developer', ' MySQL database. So assuming you have access to root user', NULL, '2022-12-18 16:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `decs` text NOT NULL,
  `uploadfile` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `decs`, `uploadfile`, `status`, `create_at`) VALUES
(8, 'City Lights in New York', ' The PHP code is for the uploading images, the file name is saved ', 'WhatsApp Image 2022-12-15 at 14.28.51.jpg', NULL, '2022-12-18 17:43:34'),
(9, 'another name as you prefer', 'Now we are working on the PHP code for the transfer of the ', 'WhatsApp Image 2022-12-15 at 14.28.51.jpg', NULL, '2022-12-18 17:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `description`, `create_at`) VALUES
(1, 'Demo Notice', ' sdafdas asdf ased sdF WDSFD Sfgvsd fvd', '2022-12-18 16:12:33'),
(2, 'This tutorial demonstrates', 'Before enter into the code part, You would need special privileges to create or to delete a MySQL database. So assuming you have access to root user, you can create any database using mysql mysqladmin binary.', '2022-12-18 16:24:44'),
(4, 'Board Scholarship Fall 2022 Notice', 'Undergraduate Students Of Batch 223 who got Board scholarship on merit/general category, are advised to send the following documents to Ms. Nasrin Saroar, Senior officer  at nasrin.saroar@ulab.edu.bd by November 24,2022.\n\nSk.Habibur Rahman \nJoint Register', '2022-12-18 17:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `blood`, `create_at`, `phone`) VALUES
(1, 'Ashiful', 'ashiful@gmail.com', '123456', 'O+', '2022-12-18 05:50:33', '01611223344'),
(11, 'Abir Shykat', 'shykat@gmail.com', '123456', 'AB-', '2022-12-18 08:35:05', '01616498901'),
(12, 'Shakil Ahmad', 'shakil@gmail.com', '12345678', 'O-', '2022-12-18 08:51:43', '0123456789'),
(13, 'Rezwan ', 'rezwan@gmail.com', '123456', 'A-', '2022-12-18 15:11:00', '01756455433');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
