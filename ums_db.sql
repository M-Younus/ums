-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2016 at 08:41 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ums_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('create-employee', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('create-branch', 1, 'create branches', NULL, NULL, NULL, NULL),
('create-employee', 1, 'create employees', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`) VALUES
(1, 'se'),
(2, 'cs'),
(3, 'mba'),
(4, 'phy'),
(5, 'chem'),
(6, 'math'),
(7, 'history'),
(8, 'pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `cour_emp`
--

CREATE TABLE `cour_emp` (
  `c_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cour_emp`
--

INSERT INTO `cour_emp` (`c_id`, `e_id`) VALUES
(1, 20),
(2, 19),
(2, 20),
(4, 18);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(32) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `full_name`, `user_name`, `email`, `phone`) VALUES
(2, NULL, 'Muhammad SAdiq', 'sadiq', 's@fdf.com', '543760'),
(3, NULL, 'sajad ur rehman', 'sajad', 'sad@fdf.com', '545'),
(4, NULL, 'asghar ali', 'asgar', 'as@jf.dgg', '35454'),
(5, NULL, 'asghar ali', 'asgar', 'as@jf.dgg', '35454'),
(6, NULL, 'asghar ali', 'asgar', 'as@jf.dgg', '35454'),
(7, NULL, 'asghar ali', 'asgar', 'as@jf.dgg', '543760'),
(8, NULL, 'usama imran', 'usama', 'us@fdf.df', '34242'),
(9, NULL, 'haris zafar', 'haris', 'w@dfdf.csf', '3435'),
(10, NULL, 'afzal al', 'afzal', 'ad@dfd.fd', '34'),
(11, NULL, 'aftab khaleel', 'aftab', 's@fdf.com', '543760'),
(12, NULL, 'hasssan hasan', 'hasan', 'ha@fdf.fd', '34'),
(13, NULL, 'kashfi baasi', 'kahif', 's@fdf.com', '543760'),
(14, NULL, 'umer ahmed', 'umer', 's@fdf.com', '543760'),
(15, NULL, 'umer ahmed', 'umer', 's@fdf.com', '543760'),
(16, NULL, 'umer ahmed', 'umer', 's@fdf.com', '543760'),
(17, NULL, 'umer ahmed', 'umer', 's@fdf.com', '543760'),
(18, NULL, 'umer ahmed', 'umer', 's@fdf.com', '543760'),
(19, NULL, 'naveed ahmad', 'naveed', 's@fdf.com', '35454'),
(20, NULL, 'ahsan shah', 'ahsah', 's@fdf.com', '543760'),
(21, 12, 'asharaf haji', 'ashraf', 's@fdf.com', '543760'),
(22, 14, 'arshad pasha', 'arshad', 's@fdf.com', '543760');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(32) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `full_name`, `user_name`, `email`, `phone`, `c_id`) VALUES
(1, NULL, 'Muhammad Younas', 'younas', 'you@gfjg.cd', '47856', 1),
(2, NULL, 'adnan sadiq', 'adnan', 'as@fdf.com', '543569', 2),
(3, NULL, 'Muhammad Yousaf', 'yousaf', 'y@gf.com', '345', 1),
(4, NULL, 'Hammad ur rehman', 'rehman', 'reh@fdf.com', '454352', 1),
(5, NULL, 'shafiq rehman', 'shafiq', 'y@gf.com', '345', 4),
(6, 13, 'mudassar dbi', 'mudasir', 'hdlhsh', '345', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` varchar(32) DEFAULT NULL,
  `username` varchar(22) DEFAULT NULL,
  `password` varchar(22) DEFAULT NULL,
  `authkey` char(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `username`, `password`, `authkey`) VALUES
(1, 'admin', 'admin', 'admin', ''),
(2, 'student', 'younas', 'younas', NULL),
(3, 'student', 'yousaf', 'yousaf', NULL),
(4, 'employee', 'sadiq', 'sadiq', NULL),
(5, 'student', 'rehman', 'rehman', NULL),
(6, 'employee', 'sajad', 'sajad', NULL),
(7, 'employee', 'hasan', 'hasan', NULL),
(8, 'employee', 'umer', 'umer', NULL),
(9, 'employee', 'naveed', 'naveed', NULL),
(10, 'employee', 'ahsah', 'ahsah', NULL),
(11, 'student', 'shafiq', 'shafiq', NULL),
(12, 'employee', 'ashraf', 'ashraf', NULL),
(13, 'student', 'mudasir', 'mudasir', NULL),
(14, 'employee', 'arshad', 'arshad', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cour_emp`
--
ALTER TABLE `cour_emp`
  ADD PRIMARY KEY (`c_id`,`e_id`),
  ADD KEY `e_cour_emp_FK` (`e_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `toUsersFK` (`user_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instu` (`c_id`),
  ADD KEY `toUsersFK` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cour_emp`
--
ALTER TABLE `cour_emp`
  ADD CONSTRAINT `c_cour_emp_FK` FOREIGN KEY (`c_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `e_cour_emp_FK` FOREIGN KEY (`e_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `emp_users_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `cour_stu_FK` FOREIGN KEY (`c_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `stu_users_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
