-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 08:11 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `q-ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `birth_date` date NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE `cinemas` (
  `cinemaID` int(11) NOT NULL,
  `cinema_name` varchar(100) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`cinemaID`, `cinema_name`, `address`) VALUES
(1, 'The Breeze IMAX', 'Jln. Grand Boulevard BSD Green Office Park BSD City Lantai Dasar Tangerang Selatan 15310'),
(2, 'The Breeze Cinema', 'Jln. Grand Boulevard BSD Green Office Park BSD City Lantai Dasar Tangerang Selatan 15310');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `filmID` int(11) NOT NULL,
  `film_name` varchar(100) NOT NULL,
  `director` varchar(255) NOT NULL,
  `genre` text NOT NULL,
  `rating` enum('SU','A','BO-A','BO','BO-SU','R','D 17+','D 21+') NOT NULL,
  `duration` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `shows` enum('Now Showing','Coming Soon') NOT NULL,
  `synopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`filmID`, `film_name`, `director`, `genre`, `rating`, `duration`, `release_date`, `shows`, `synopsis`) VALUES
(1, 'John Wick: Chapter 3 - Parabellum', 'Chad Stahelski', 'Action, Thriller', 'D 17+', '2 jam 10 menit', '2019-05-17', 'Now Showing', 'Super-assassin John Wick returns with a $14 million price tag on his head and an army of bounty-hunting killers on his trail. After Killing a member of the shadowy international assassin''s guild, the High Table, John Wick is excommunicado, but the world''s most ruthless hit men and women await his every turn. '),
(2, 'Aladdin', 'Guy Ritchie', 'Adventure, Comedy, Family', 'R', '2 jam 8 menit', '2019-05-24', 'Now Showing', 'A kindhearted street urchin named Aladdin embarks on a magical adventure after finding a lamp that releases a wisecracking genie while a power-hungry Grand Vizier vies for the same lamp that has the power to make their deepest wishes come true.');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seatID` int(11) NOT NULL,
  `row` char(1) NOT NULL,
  `seat` varchar(2) NOT NULL,
  `studioID` int(11) NOT NULL,
  `cinemaID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `booked_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `showtimeID` int(11) NOT NULL,
  `studio_typeID` int(11) NOT NULL,
  `showtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`showtimeID`, `studio_typeID`, `showtime`) VALUES
(1, 1, '11:00:00'),
(2, 1, '11:15:00'),
(3, 1, '13:40:00'),
(4, 1, '13:55:00'),
(5, 1, '16:20:00'),
(6, 1, '16:35:00'),
(7, 1, '19:00:00'),
(8, 1, '19:15:00'),
(9, 1, '21:40:00'),
(10, 1, '21:55:00'),
(11, 2, '11:05:00'),
(12, 2, '13:45:00'),
(13, 2, '16:25:00'),
(14, 2, '19:05:00'),
(15, 2, '21:45:00'),
(16, 1, '13:15:00'),
(17, 1, '15:55:00'),
(18, 1, '18:35:00'),
(19, 1, '21:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `studioID` int(11) NOT NULL,
  `studio_name` enum('Studio 1','Studio 2','Studio 3') NOT NULL,
  `studio_typeID` int(11) NOT NULL,
  `showtimeID` int(11) NOT NULL,
  `cinemaID` int(11) NOT NULL,
  `filmID` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`studioID`, `studio_name`, `studio_typeID`, `showtimeID`, `cinemaID`, `filmID`, `price`) VALUES
(1, 'Studio 2', 1, 1, 2, 2, 35000),
(2, 'Studio 2', 1, 2, 2, 2, 35000),
(3, 'Studio 2', 1, 3, 2, 2, 35000),
(4, 'Studio 2', 1, 4, 2, 2, 35000),
(5, 'Studio 2', 1, 5, 2, 2, 35000),
(6, 'Studio 2', 1, 6, 2, 2, 35000),
(7, 'Studio 2', 1, 7, 2, 2, 35000),
(8, 'Studio 2', 1, 8, 2, 2, 35000),
(9, 'Studio 2', 1, 9, 2, 2, 35000),
(10, 'Studio 2', 1, 10, 2, 2, 35000),
(11, 'Studio 1', 2, 11, 1, 2, 35000),
(12, 'Studio 1', 2, 12, 1, 2, 35000),
(13, 'Studio 1', 2, 13, 1, 2, 35000),
(14, 'Studio 1', 2, 14, 1, 2, 35000),
(15, 'Studio 1', 2, 15, 1, 2, 35000),
(16, 'Studio 3', 1, 16, 2, 1, 35000),
(17, 'Studio 3', 1, 17, 2, 1, 35000),
(18, 'Studio 3', 1, 18, 2, 1, 35000),
(19, 'Studio 3', 1, 19, 2, 1, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `studio_type`
--

CREATE TABLE `studio_type` (
  `studio_typeID` int(11) NOT NULL,
  `studio_type` enum('Regular','IMAX') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio_type`
--

INSERT INTO `studio_type` (`studio_typeID`, `studio_type`) VALUES
(1, 'Regular'),
(2, 'IMAX');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_tickets`
--

CREATE TABLE `upcoming_tickets` (
  `upcomID` int(11) NOT NULL,
  `filmID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `cinemaID` int(11) NOT NULL,
  `showtimeID` int(11) NOT NULL,
  `studio_typeID` int(11) NOT NULL,
  `seatID` int(11) NOT NULL,
  `booked_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `birth_date` date NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `balance` float NOT NULL DEFAULT '35000',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `password`, `fullname`, `address`, `gender`, `birth_date`, `phone_number`, `balance`, `created_at`) VALUES
(1, 'aqillatas33@gmail.com', '$2y$10$ZONzwvAd0Vmd85mJgDAkuuM8.AM6DkpVr4CS9Sn/Q7jkPKFqi/OhC', 'Muhammad Agil', 'Perumahan Batan Indah Blok K-74, RT 17, RW 04, Kademangan, Setu, Tangerang Selatan, Banten', 'Male', '2000-08-01', '082213156608', 0, '2019-05-28 14:03:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`cinemaID`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`filmID`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seatID`),
  ADD KEY `studioID` (`studioID`),
  ADD KEY `cinemaID` (`cinemaID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`showtimeID`),
  ADD KEY `studio_typeID` (`studio_typeID`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`studioID`),
  ADD KEY `studio_typeID` (`studio_typeID`),
  ADD KEY `showtimeID` (`showtimeID`),
  ADD KEY `cinemaID` (`cinemaID`),
  ADD KEY `filmID` (`filmID`);

--
-- Indexes for table `studio_type`
--
ALTER TABLE `studio_type`
  ADD PRIMARY KEY (`studio_typeID`);

--
-- Indexes for table `upcoming_tickets`
--
ALTER TABLE `upcoming_tickets`
  ADD PRIMARY KEY (`upcomID`),
  ADD KEY `filmID` (`filmID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `cinemaID` (`cinemaID`),
  ADD KEY `showtimeID` (`showtimeID`),
  ADD KEY `studio_typeID` (`studio_typeID`),
  ADD KEY `seatID` (`seatID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `cinemaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `filmID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seatID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `showtime`
--
ALTER TABLE `showtime`
  MODIFY `showtimeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `studioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `studio_type`
--
ALTER TABLE `studio_type`
  MODIFY `studio_typeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `upcoming_tickets`
--
ALTER TABLE `upcoming_tickets`
  MODIFY `upcomID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seats_ibfk_2` FOREIGN KEY (`studioID`) REFERENCES `studio` (`studioID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seats_ibfk_3` FOREIGN KEY (`cinemaID`) REFERENCES `cinemas` (`cinemaID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `showtime`
--
ALTER TABLE `showtime`
  ADD CONSTRAINT `showtime_ibfk_1` FOREIGN KEY (`studio_typeID`) REFERENCES `studio_type` (`studio_typeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studio`
--
ALTER TABLE `studio`
  ADD CONSTRAINT `studio_ibfk_1` FOREIGN KEY (`cinemaID`) REFERENCES `cinemas` (`cinemaID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studio_ibfk_2` FOREIGN KEY (`filmID`) REFERENCES `films` (`filmID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studio_ibfk_3` FOREIGN KEY (`showtimeID`) REFERENCES `showtime` (`showtimeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studio_ibfk_4` FOREIGN KEY (`studio_typeID`) REFERENCES `studio_type` (`studio_typeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upcoming_tickets`
--
ALTER TABLE `upcoming_tickets`
  ADD CONSTRAINT `upcoming_tickets_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upcoming_tickets_ibfk_2` FOREIGN KEY (`filmID`) REFERENCES `films` (`filmID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upcoming_tickets_ibfk_3` FOREIGN KEY (`cinemaID`) REFERENCES `cinemas` (`cinemaID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upcoming_tickets_ibfk_4` FOREIGN KEY (`showtimeID`) REFERENCES `showtime` (`showtimeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upcoming_tickets_ibfk_5` FOREIGN KEY (`studio_typeID`) REFERENCES `studio_type` (`studio_typeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upcoming_tickets_ibfk_6` FOREIGN KEY (`seatID`) REFERENCES `seats` (`seatID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
