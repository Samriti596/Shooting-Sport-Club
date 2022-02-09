-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 03:08 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `game_name` varchar(250) NOT NULL,
  `game_type` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `apply_date` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry_register_tournament`
--

INSERT INTO `entry_register_tournament` (`r_id`, `game_name`, `game_type`, `name`, `email`, `contact`, `apply_date`, `description`) VALUES
(1, 'cricket', 'outdoor', 'prabhat', 'prabhat@gmail.com', '7067573957', '20-09-2019', 'else'),
(3, 'hockey', 'outdoor', 'amit', 'amit@gmail.com', '784575784', '23-04-2019', 'for hockey'),
(4, 'hockey', 'outdoor', 'amit', 'amit@gmail.com', '784575784', '23-04-2019', 'for hockey');

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
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `game_name` varchar(250) NOT NULL,
  `game_type` varchar(50) NOT NULL,
  `player_size` int(20) NOT NULL,
  `total_player` int(20) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `player_detail`
--

CREATE TABLE `player_detail` (
  `p_id` int(11) NOT NULL,
  `player_name` varchar(250) NOT NULL,
  `participate_game` varchar(250) NOT NULL,
  `p_designation` varchar(50) NOT NULL,
  `p_type` varchar(50) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `p_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_detail`
--

INSERT INTO `player_detail` (`p_id`, `player_name`, `participate_game`, `p_designation`, `p_type`, `team_name`, `p_image`) VALUES
(1, 'raj', 'cricket', 'feilder', 'inteam', 'tigers', 'Youth.jpg');

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
  `game_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_detail`
--

CREATE TABLE `team_detail` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_captian` varchar(50) NOT NULL,
  `total_player` int(50) NOT NULL,
  `participate_player` int(50) NOT NULL,
  `extra_player` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'cricket', 'Outdoor', 11, '15', '2019-09-04', '2019-09-27', 'bhopal', 3000.00, 21000.00),
(3, 'badminton', 'Indoor', 1, '5', '2019-08-26', '2019-09-06', 'indore', 1000.00, 5000.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_address` varchar(250) NOT NULL,
  `register_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_contact`, `user_address`, `register_date`) VALUES
(1, 'prabhat', 'prabhat@gmail.com', 'prabhat123', '7067573957', 'bhopal', '27-09-2019');

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
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_detail`
--
ALTER TABLE `player_detail`
  ADD PRIMARY KEY (`p_id`);

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
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player_detail`
--
ALTER TABLE `player_detail`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_detail`
--
ALTER TABLE `team_detail`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
