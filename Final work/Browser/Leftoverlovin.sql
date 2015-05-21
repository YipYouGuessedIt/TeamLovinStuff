-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2015 at 08:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leftoverlovin`
--
CREATE DATABASE IF NOT EXISTS `leftoverlovin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `leftoverlovin`;

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE IF NOT EXISTS `fav` (
`ID` int(11) NOT NULL,
  `RecipeID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fav`
--

INSERT INTO `fav` (`ID`, `RecipeID`) VALUES
(2, 2),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE IF NOT EXISTS `ingredients` (
`ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Qtype` varchar(25) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ID`, `Name`, `Qtype`, `Quantity`) VALUES
(1, 'Salad', 'Grams', 7800),
(3, 'Lemon', 'Grams', 907),
(4, 'Flour', 'Grams', 90),
(5, 'Beef', 'Grams', 900),
(6, 'Cheese', 'Grams', 90),
(7, 'Egg', 'Grams', 10),
(8, 'Pasta', 'Grams', 6800),
(9, 'Salami', 'Grams', 300),
(12, 'oil', 'Millilitres', 100),
(15, 'Mutton', 'Grams', 100),
(16, 'Jam', 'Grams', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
`ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `MealTime` varchar(500) NOT NULL,
  `Ingredients` varchar(500) NOT NULL,
  `Prep` varchar(500) NOT NULL,
  `score` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  `ImageLink` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`ID`, `Name`, `Description`, `MealTime`, `Ingredients`, `Prep`, `score`, `votes`, `ImageLink`) VALUES
(1, 'Grilled Chicken and Pasta Salad', 'Seasoned chicken strips highlight this pasta salad tossed with tomatoes, chopped lettuce, mozzarella, and onion. Feel free to add your favorite garnishes', 'Supper', 'Chicken$Grams$200,Pasta$Grams$200,Salad$Grams$200', 'Cook Chicken and pasta,add salad,mix', 192, 60, '874033.jpg'),
(2, 'Tasty Mutton, Pea and Potato Curry', 'This is a quick and easy way to make a mild curry for family and friends.', 'Breakfast', 'Onion$Grams$100,Oil$Milliliters$100,CurryPowder$Grams$100,Mutton$Grams$100,Pea$Grams$100,Potato$Grams$100', 'catch lamb bunnies,Laugh at the funnies,Eat the muttons!', 249, 20, 'Tasty Mutton_30_1.1.131_326X580_30_1.1.131_326X580.Jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fav`
--
ALTER TABLE `fav`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fav`
--
ALTER TABLE `fav`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
