-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 08:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_admin`
--

CREATE TABLE `s_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_admin`
--

INSERT INTO `s_admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Satish Chauhan', 'superadmin@gmail.com', '100');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gender` int(2) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `terms` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `mobile`, `gender`, `dob`, `password`, `terms`) VALUES
(1, 'Satish', 'Chauhan', 'satish@gmail.com', '983-937-6844', 1, '1995-03-08', '89668d97bc2281951a871d2170f5149d', ''),
(2, 'krishna', 'bhardwaj', 'krishna@gmail.com', '941-123-1234', 1, '2022-10-06', '3490a1f38e0ad046caad4b30914a2f88', ''),
(3, 'Ram', 'Chauhan', 'ramch@gmail.com', '987-987-1345', 1, '2022-09-08', 'b04d6c7efa125fc28ece9ebc04967a8c', ''),
(4, 'Satyam', 'Chauhan', 'satyam@gmail.com', '123-123-1234', 1, '2022-09-15', '5335859dddad285ee6087874a9a1862f', ''),
(5, 'Rajan', 'Kumar', 'rajan@gmail.com', '987-146-9876', 1, '2022-09-08', '583bfd2f12eb2f0f61ba6ad818fb58ca', ''),
(6, 'Rajan', 'Kumar', 'rajan@gmail.com', '987-146-9876', 1, '2022-09-08', '583bfd2f12eb2f0f61ba6ad818fb58ca', ''),
(7, 'Rajan', 'Kumar', 'rajan@gmail.com', '987-146-9876', 1, '2022-09-08', '583bfd2f12eb2f0f61ba6ad818fb58ca', ''),
(8, 'Sarosj', 'Chauhan', 'saroj@gmail.com', '987-986-8756', 1, '2022-09-07', 'be8bd76a4208bb669541fb204e41628e', ''),
(9, 'Rajan', 'Chauhan', 'rajan123@gmail.com', '123-123-1234', 1, '2022-08-05', '583bfd2f12eb2f0f61ba6ad818fb58ca', ''),
(10, 'Aman', 'Chauhan', 'aman@gmail.com', '987-677-7865', 1, '2022-09-14', '73b25522615dac9cfd289ee35faef4ef', ''),
(11, 'Rajan', 'Chauhan', 'rajan23@gmail.com', '987-098-9879', 1, '2022-09-15', '583bfd2f12eb2f0f61ba6ad818fb58ca', ''),
(12, 'rajan', 'Kumar', 'rajan566@gmail.com', '987-098-4568', 1, '2022-09-07', '73b25522615dac9cfd289ee35faef4ef', ''),
(13, 'Ramnayan', 'Chauhan', 'ramanayan@gmail.com', '987-986-9876', 1, '2022-09-08', '6f5a580525d1d5d7273be803a14925c9', ''),
(14, 'sundar', 'yadav', 'sunadar@gmail.com', '987-678-6789', 1, '2022-09-08', '57317fcc2b718d0ad99ae07ffdfacbc8', ''),
(15, 'dinkar', 'chauhan', 'dinkar@gmail.com', '123-123-1238', 1, '2022-11-11', 'b2426bb1355267be2452773bd3cb4c78', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_admin`
--
ALTER TABLE `s_admin`
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
-- AUTO_INCREMENT for table `s_admin`
--
ALTER TABLE `s_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
