-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2025 at 05:26 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horrormovies`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `name` varchar(50) NOT NULL,
  `id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`name`, `id`) VALUES
('slasher', 101),
('paranormal', 102),
('monster', 103),
('psychological', 104),
('found footage', 105),
('sci-fi', 106);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `title` varchar(50) NOT NULL,
  `movie_id` int NOT NULL,
  `length` int NOT NULL,
  `year` int NOT NULL,
  `genre_id` int NOT NULL,
  `rating` int NOT NULL,
  `director` varchar(50) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`title`, `movie_id`, `length`, `year`, `genre_id`, `rating`, `director`) VALUES
('Halloween', 1011, 91, 1978, 101, 4, 'John Carpenter'),
('The Thing', 1441, 109, 1982, 103, 4, 'John Carpenter'),
('Friday the 13th', 1003, 109, 1980, 101, 4, 'Sean S. Cunningham'),
('Friday the 13th Part 2', 1004, 87, 1981, 101, 4, 'Steve Miner'),
('Friday the 13th Part III', 1005, 95, 1982, 101, 4, 'Steve Miner'),
('Friday the 13th: The Final Chapter', 1006, 91, 1984, 101, 4, 'Joseph Zito'),
('ParaNorman', 1231, 105, 2012, 102, 2, 'Chris Butler, Sam Fell'),
('Halloween II', 1022, 91, 1981, 101, 4, 'Rick Rosenthal'),
('Halloween III: Season of the Witch', 1033, 96, 1982, 106, 4, 'Tommy Lee Wallace'),
('Halloween 4: The Return of Michael Myers', 1044, 92, 1988, 101, 4, 'Dwight H. Little'),
('A Nightmare on Elm Street', 1034, 91, 1984, 102, 4, 'Wes Craven'),
('A Nightmare on Elm Street 2: Freddys Revenge\r\n', 1045, 87, 1985, 102, 4, 'Jack Sholder'),
('A Nightmare on Elm Street 3: Dream Warriors', 1047, 95, 1987, 102, 4, 'Chuck Russell'),
('A Nightmare on Elm Street 4: The Dream Master', 1049, 99, 1988, 102, 4, 'Renny Harlin'),
('A Nightmare on Elm Street 5: The Dream Child', 1051, 89, 1989, 102, 4, 'Stephen Hopkins'),
('Freddys Dead: The Final Nightmare', 1052, 93, 1991, 102, 4, 'Rachel Talalay'),
('Wes Cravens New Nightmare', 1059, 112, 1994, 102, 4, 'Wes Craven'),
('Halloween 5: The Revenge of Michael Myers', 1055, 97, 1989, 102, 4, 'Dominique Othenin-Girard'),
('Halloween: The Curse of Michael Myers', 1066, 96, 1995, 102, 4, 'Joe Chappelle'),
('Halloween H20: 20 Years Later', 1077, 86, 1998, 102, 4, 'Steve Miner'),
('Halloween: Resurrection', 1088, 94, 2002, 102, 4, 'Rick Rosenthal'),
('Halloween Kills', 2001, 106, 2021, 102, 4, 'David Gordon Green'),
('Halloween Returns', 1099, 106, 2018, 102, 4, 'David Gordon Green'),
('Halloween Ends', 2002, 111, 2022, 102, 4, 'David Gordon Green'),
('M3GAN', 1555, 102, 2022, 106, 3, 'Gerard Johnstone');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `type` varchar(6) NOT NULL,
  `id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`type`, `id`) VALUES
('G', 1),
('PG', 2),
('PG-13', 3),
('R', 4),
('NA', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
