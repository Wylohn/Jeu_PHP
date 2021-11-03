-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Oct 29, 2021 at 03:42 PM
-- Server version: 10.6.4-MariaDB-1:10.6.4+maria~focal
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `player`
--

-- --------------------------------------------------------

--
-- Table structure for table `perso`
--

CREATE TABLE `perso` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `idrole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perso`
--

INSERT INTO `perso` (`id`, `name`, `idrole`) VALUES
(1, 'Roger', 2),
(2, 'Jose', 1),
(4, 'Raphael', 1),
(6, 'Raphael', 1),
(9, 'Amin', 2),
(10, 'Raph', 2),
(12, 'Raph', 2),
(14, 'Raphael', 1),
(16, 'Raphael', 1),
(18, 'Raph', 1),
(20, 'a', 1),
(22, 'a', 1),
(25, 'SSS', 2),
(26, 'a', 1),
(29, 'SSS', 2),
(30, 'a', 1),
(33, 'SSS', 2),
(34, 'Salut', 2),
(37, 'Salut', 2),
(38, 'Raphael', 1),
(41, 'Raphael', 1),
(42, 'fichier', 2),
(45, 'fichier', 2),
(46, 'michel', 1),
(49, 'michel', 1),
(50, 'Roger', 1),
(51, 'Roger', 1),
(52, 'Amin', 1),
(53, 'zlekfjs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL,
  `nameRole` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idrole`, `nameRole`) VALUES
(1, 'Magicien'),
(2, 'Guerrier');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `vie` int(11) NOT NULL,
  `force` int(11) NOT NULL,
  `defense` int(11) NOT NULL,
  `mana` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`vie`, `force`, `defense`, `mana`, `id`) VALUES
(100, 5, 50, 10, 1),
(100, 24, 14, 1, 18),
(100, 26, 16, 1, 20),
(100, 28, 14, 1, 22),
(100, 34, 12, 1, 26),
(100, 10, 0, 0, 29),
(100, 28, 16, 1, 30),
(100, 8, 0, 0, 33),
(100, 23, 14, 1, 34),
(100, 8, 0, 0, 37),
(100, 33, 16, 1, 38),
(100, 10, 0, 0, 41),
(100, 20, 15, 1, 42),
(100, 9, 0, 0, 45),
(100, 21, 12, 1, 46),
(100, 9, 0, 0, 49);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perso`
--
ALTER TABLE `perso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRole` (`idrole`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perso`
--
ALTER TABLE `perso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perso`
--
ALTER TABLE `perso`
  ADD CONSTRAINT `idRole` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `perso` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
