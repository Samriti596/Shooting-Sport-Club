-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 07:13 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `entry_register_tournament`
--

CREATE TABLE `entry_register_tournament` (
  `r_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `game_name` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `apply_date` varchar(50) NOT NULL,
  `team_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry_register_tournament`
--

INSERT INTO `entry_register_tournament` (`r_id`, `user_id`, `game_name`, `name`, `email`, `contact`, `address`, `apply_date`, `team_name`) VALUES
(1, 2, 'shooting', 'ritu', 'ritu@gmail.com', '0123456789', 'Panipat', '29-12-2021', 'Team A'),
(13, 4, 'Shooting', 'samriti', 'samriti@gmail.com', '1234567890', 'HP', '30-12-2021', 'Team A');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `view` varchar(50) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `num` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `view`, `comments`, `name`, `email`, `num`) VALUES
(3, 'excellent', 'good', 'ritu', 'ritu23@gmail.com', 213456987),
(4, 'good', 'nice', 'payal', 'payal1@gmail.com', 1234567899);

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `img_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `login_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_otp` int(6) NOT NULL,
  `last_activity` datetime NOT NULL,
  `login_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`login_id`, `user_id`, `login_otp`, `last_activity`, `login_datetime`) VALUES
(13, 28, 596584, '2017-01-22 09:43:51', '2022-01-17 08:43:51'),
(14, 28, 707997, '2017-01-22 09:46:02', '2022-01-17 08:46:02'),
(15, 28, 139269, '2017-01-22 09:49:51', '2022-01-17 08:49:51'),
(16, 28, 319925, '2017-01-22 10:08:54', '2022-01-17 09:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `player_detail`
--

CREATE TABLE `player_detail` (
  `p_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `player_name` varchar(250) NOT NULL,
  `p_designation` varchar(50) NOT NULL,
  `p_type` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `p_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_detail`
--

INSERT INTO `player_detail` (`p_id`, `user_id`, `player_name`, `p_designation`, `p_type`, `contact`, `team_name`, `p_image`) VALUES
(3, 1, 'ritu', 'shooter', 'team-member', '5666564566', 'Team A', ''),
(5, 3, 'samriti', 'Shooter', 'team-member', '545454545', 'Team A', '');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `register_user_id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_age` varchar(250) NOT NULL,
  `user_contact` varchar(250) NOT NULL,
  `user_address` varchar(250) NOT NULL,
  `user_date` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  `user_otp` int(11) NOT NULL,
  `user_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`register_user_id`, `user_name`, `user_email`, `user_password`, `user_age`, `user_contact`, `user_address`, `user_date`, `user_activation_code`, `user_email_status`, `user_otp`, `user_datetime`, `user_avatar`) VALUES
(28, 'ritu', 'ritulohra2946@gmail.com', '$2y$10$/5jloOQWucmyQAkoGxpUGuC6iJbA9Vp0CHHcolvOiFWnk08micCfi', '15', '1234567890', 'Panipat\r\nHaryana', '2022-01-17', 'd83e8734cb55c191a73e0d03d2d99e45', 'not verified', 606777, '2022-01-17 08:41:25', ''),
(29, 'ritu', 'ritulohra21462@gmail.com', '$2y$10$VSbhdmPI11onnZRoOqqTZeVBXwzqJ.Dv9ODQDB8bnk0OlFyFPC/cG', '18', '0123654789', 'panipat', '2022-01-17', '0b3704f4938d16cb189d09d670402ba0', 'not verified', 484812, '2022-01-17 09:10:34', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `s_id` int(11) NOT NULL,
  `s_date` date NOT NULL,
  `s_time` varchar(50) NOT NULL,
  `groupA_team_name` varchar(50) NOT NULL,
  `groupB_team_name` varchar(50) NOT NULL,
  `game_name` varchar(50) NOT NULL,
  `place` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`s_id`, `s_date`, `s_time`, `groupA_team_name`, `groupB_team_name`, `game_name`, `place`) VALUES
(2, '2022-01-12', '2pm', 'Team A', 'Team B', 'Shooting', 'Rohtak');

-- --------------------------------------------------------

--
-- Table structure for table `team_detail`
--

CREATE TABLE `team_detail` (
  `team_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_captian` varchar(50) NOT NULL,
  `total_player` int(50) NOT NULL,
  `participate_player` int(50) NOT NULL,
  `extra_player` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_detail`
--

INSERT INTO `team_detail` (`team_id`, `user_id`, `team_name`, `team_captian`, `total_player`, `participate_player`, `extra_player`) VALUES
(1, 1, 'Team A', 'Ritu', 15, 11, 4),
(2, 3, 'TeamB', 'Samriti', 15, 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `t_id` int(11) NOT NULL,
  `game_name` varchar(250) NOT NULL,
  `game_type` varchar(50) NOT NULL,
  `player_size` int(50) NOT NULL,
  `total_player` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `place` varchar(250) NOT NULL,
  `entry_fees` double(9,2) NOT NULL,
  `wining_price` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`t_id`, `game_name`, `game_type`, `player_size`, `total_player`, `start_date`, `end_date`, `place`, `entry_fees`, `wining_price`) VALUES
(1, 'shooting', 'Outdoor', 11, '15', '2021-12-31', '2022-01-06', 'Rohtak', 3000.00, 21000.00),
(3, 'shooting', 'Indoor', 1, '5', '2022-01-04', '2022-01-10', 'Rohtak', 1000.00, 5000.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_address` varchar(250) NOT NULL,
  `register_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `age`, `user_contact`, `user_address`, `register_date`) VALUES
(3, 'ritu', 'ritu@gmail.com', '123', 15, '1234567890', 'Panipat							\r\n								', '25-12-2021'),
(4, 'samriti', 'samriti@gmail.com', '1234', 18, '1234567890', 'HP							\r\n								', '25-12-2021'),
(5, 'rakhi', 'rakhi@gmail.com', '1234', 14, '0213654789', 'Panipat		\r\n								', '25-01-2022'),
(6, 'payal', 'payal@gmail.com', '123', 0, '0213654789', 'Panchkula									\r\n								', '2022-01-11'),
(7, 'rakhi', 'rakhi12@gmail.com', '123', 14, '0123654789', '									\r\n		Panipat						', '2022-01-11'),
(8, 'lata', 'latadevi@gmail.com', '1234', 17, '0321456987', 'Himachal Pardesh							', '2022-01-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `entry_register_tournament`
--
ALTER TABLE `entry_register_tournament`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `player_detail`
--
ALTER TABLE `player_detail`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`register_user_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `team_detail`
--
ALTER TABLE `team_detail`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `entry_register_tournament`
--
ALTER TABLE `entry_register_tournament`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `player_detail`
--
ALTER TABLE `player_detail`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `register_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team_detail`
--
ALTER TABLE `team_detail`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
