-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 12:36 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `songs_directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_table`
--

CREATE TABLE `album_table` (
  `album_id` int(25) NOT NULL,
  `album_name` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album_table`
--

INSERT INTO `album_table` (`album_id`, `album_name`) VALUES
(1, 'The Wild Places'),
(2, 'The Wild Places'),
(3, 'divine'),
(4, 'The Wild Places'),
(5, 'ishq');

-- --------------------------------------------------------

--
-- Table structure for table `artist_table`
--

CREATE TABLE `artist_table` (
  `Artist_id` int(23) NOT NULL,
  `Artist_name` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist_table`
--

INSERT INTO `artist_table` (`Artist_id`, `Artist_name`) VALUES
(1, 'Andy Warhol'),
(2, 'Andy Warhol'),
(4, 'Andy Warhol'),
(13, 'mishra ji'),
(14, 'mishra ji'),
(15, 'mishra ji'),
(16, 'mishra ji'),
(17, 'kk'),
(18, 'gupta ji'),
(19, 'gupta ji'),
(20, 'gupta ji'),
(21, 'mishra ji'),
(22, 'kailash kher');

-- --------------------------------------------------------

--
-- Table structure for table `song_table`
--

CREATE TABLE `song_table` (
  `Song_id` int(25) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `Song_artist` varchar(255) NOT NULL,
  `Song_album` varchar(255) NOT NULL,
  `Year_of_release` int(25) NOT NULL,
  `duration` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song_table`
--

INSERT INTO `song_table` (`Song_id`, `song_name`, `Song_artist`, `Song_album`, `Year_of_release`, `duration`) VALUES
(5, 'Machayenge', 'Emiway Bantai\r\n', 'By the Seaside', 2019, '50sec'),
(6, 'Peaches', 'Justin Bieber', 'The Wild Places', 2020, '220'),
(8, 'Faded', 'Faded', 'the black dress', 2020, '220'),
(9, ' Radhe Title Track', 'Sajid', 'radhe', 2020, '180'),
(10, 'kaam25', 'divine', 'gully gang', 2021, '50sec'),
(13, 'devil eye', 'Michelangelo', 'A Summer Spent Seaside', 2021, '50sec'),
(14, 'devil eye', 'Michelangelo', 'A Summer Spent Seaside', 2021, '50sec'),
(15, ' Firse Machayenge', 'Emiway Bantai', 'The Road Best Traveled', 2029, '55sec'),
(21, 'shiv tandav', 'kailash', 'shivam', 1998, '520'),
(22, 'shiv tandav', 'kailash', 'shivam', 1998, '520'),
(41, 'tere naam', 'mishra ji', 'The Wild Places', 2021, '290');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_table`
--
ALTER TABLE `album_table`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `artist_table`
--
ALTER TABLE `artist_table`
  ADD PRIMARY KEY (`Artist_id`);

--
-- Indexes for table `song_table`
--
ALTER TABLE `song_table`
  ADD PRIMARY KEY (`Song_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_table`
--
ALTER TABLE `album_table`
  MODIFY `album_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artist_table`
--
ALTER TABLE `artist_table`
  MODIFY `Artist_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `song_table`
--
ALTER TABLE `song_table`
  MODIFY `Song_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
