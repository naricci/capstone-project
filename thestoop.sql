-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2017 at 02:45 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thestoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminUserName` varchar(50) NOT NULL,
  `adminPassword` char(60) NOT NULL,
  `adminFirstName` varchar(50) NOT NULL,
  `adminLastName` varchar(50) NOT NULL,
  `adminDOB` date NOT NULL,
  `adminStreetAddress` varchar(100) NOT NULL,
  `adminStreetAddress2` varchar(100) NOT NULL,
  `adminCity` varchar(50) NOT NULL,
  `adminState` char(2) NOT NULL,
  `adminZip` char(5) NOT NULL,
  `adminCountry` varchar(50) NOT NULL,
  `adminPhone` varchar(10) NOT NULL,
  `adminEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminUserName`, `adminPassword`, `adminFirstName`, `adminLastName`, `adminDOB`, `adminStreetAddress`, `adminStreetAddress2`, `adminCity`, `adminState`, `adminZip`, `adminCountry`, `adminPhone`, `adminEmail`) VALUES
(1, 'naricci', '', 'Nick', 'Ricci', '1990-09-16', '261 Bayview Avenue', '', 'East Greenwich', 'RI', '02818', 'United States', '4016993928', 'nicholasaricci@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `artistID` int(11) NOT NULL,
  `artistFirstName` varchar(50) NOT NULL,
  `artistLastName` varchar(50) NOT NULL,
  `artistDescription` varchar(1000) DEFAULT NULL,
  `artistCity` varchar(50) DEFAULT NULL,
  `artistState` char(2) DEFAULT NULL,
  `artistCountry` varchar(50) DEFAULT NULL,
  `artistPhone` varchar(10) NOT NULL,
  `artistEmail` varchar(100) NOT NULL,
  `artistWebsite` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `categoryDescription` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `categoryDescription`) VALUES
(1, 'Chillums', 'Chillums, or hand pipes, are the most basic shape of glass pipe available. They are small, simple glass tubes. Users pack smoking material into the end, apply flame and inhale. This simplicity, however, has drawbacks. There is no carburetor, so the smoke is not easily cleared, and they are suitable only for small amounts of tobacco or herb blends.'),
(2, 'Spoons', 'Spoon pipes are slightly more sophisticated than chillums because they possess a carburetor. After it is produced, smoke becomes stale in a matter of seconds. Carburetors on glass pipes, much like the carburetor on early automobiles, allow additional air to be drawn in. On a spoon pipe, the carburetor is a simple hole. When the hole is covered with a finger or thumb, incoming air is drawn trough the bowl and burning material. This draws smoke into the glass pipe. '),
(3, 'Steamrollers', 'Steamrollers have bowls or glass on glass fittings on one side of the pipe. Both ends of the pipe are open, and the open end near the bowl functions as the carburetor. Some steamrollers have chambers between the bowl and the mouthpiece that allow smoke to be \"rolled\" to enhance cooling. Steamrollers have a reputation for hard, hot, rips but with practice, they are wonderful smoking pipes. Steamrollers are not recommended for novice smokers.'),
(4, 'Sherlock Pipes', 'Sherlock or Gandalf pipes are named after the iconic pipes smoked by those literary figures. The classic Sherlock pipe has a large bowl with a gracefully arching stem. The bottom of the bowl is often flattened to allow the pipe to stand freely when not being held.'),
(5, 'Bubblers', 'The harsh taste of the tars and resins is filtered out through the use of bubbler pipes. Bubbler pipes diffuse the smoke through water before it is inhaled. This removes tar and resin and causes the smoke to taste smoother. The chamber is sometimes filled with hot water, but cold water is the standard. Hot water adds water vapor to the smoke and opens up airways to facilitate smoking. '),
(6, 'Bongs', NULL),
(7, 'Jars', NULL),
(8, 'Cleaning Tools', NULL),
(9, 'Other', 'All other product types...');

-- --------------------------------------------------------

--
-- Table structure for table `newsPosts`
--

CREATE TABLE `newsPosts` (
  `postID` int(11) NOT NULL,
  `postTitle` varchar(100) NOT NULL,
  `postWriter` varchar(100) NOT NULL,
  `postDate` date NOT NULL,
  `postImageName` varchar(100) NOT NULL,
  `postAdminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(100) CHARACTER SET utf8 NOT NULL,
  `productPrice` decimal(15,2) NOT NULL,
  `productQuantity` int(4) DEFAULT NULL,
  `productCategoryID` int(11) NOT NULL,
  `productShortDescription` varchar(250) CHARACTER SET utf8 NOT NULL,
  `productLongDescription` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `productImage` varchar(100) CHARACTER SET utf8 NOT NULL,
  `productArtistID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestItems`
--

CREATE TABLE `requestItems` (
  `itemID` int(11) NOT NULL,
  `itemRequestID` int(11) NOT NULL,
  `requestMessage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `requestID` int(11) NOT NULL,
  `requestUserID` int(11) NOT NULL,
  `requestDate` date NOT NULL,
  `requestProductID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userFirstName` varchar(50) NOT NULL,
  `userLastName` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userStreetAddress` varchar(100) NOT NULL,
  `userStreetAddress2` varchar(100) DEFAULT NULL,
  `userCity` varchar(50) NOT NULL,
  `userState` char(2) NOT NULL,
  `userZip` char(5) NOT NULL,
  `userCountry` varchar(50) NOT NULL,
  `userPhone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userFirstName`, `userLastName`, `userName`, `userPassword`, `userEmail`, `userStreetAddress`, `userStreetAddress2`, `userCity`, `userState`, `userZip`, `userCountry`, `userPhone`) VALUES
(1, 'Nicholas', 'Ricci', 'nick', '1234567890', 'nicholasaricci@gmail.com', '261 Bayview Avenue', 'nah', 'Warwick', 'RI', '02818', 'United States', '4016993928'),
(3, 'Joe', 'Malley', 'jmals8381', '23d6657655a5927337e2b6a1c93ea138', 'jmalley@gmail.com', '271 Main Drive', '', 'West Hampton', 'NY', '83726', 'United States', '8888888888'),
(4, 'John', 'Fried', 'jfriedalot', 'fb17573a28658edafcd7e26ba176dd07', 'jfriedalot@yahoo.com', '87972 Pennsylvannia Avenue', '', 'Los Angeles', 'AL', '83829', 'United States', '4018984848'),
(5, 'Nick', 'Ricci', 'naricci', '251a221b5a3e6a52a4fd4382db14b0fc', 'nicholasaricci@gmail.com', '35 Maple Avenue', '', 'West Warwick', 'RI', '02893', 'USA', '4018854548');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`artistID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `newsPosts`
--
ALTER TABLE `newsPosts`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `postAdminID` (`postAdminID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`) USING BTREE COMMENT 'PRIMARY KEY',
  ADD KEY `productCategoryID` (`productCategoryID`) USING BTREE COMMENT 'FOREIGN KEY',
  ADD KEY `productArtistID` (`productArtistID`) USING BTREE COMMENT 'FOREIGN KEY';

--
-- Indexes for table `requestItems`
--
ALTER TABLE `requestItems`
  ADD PRIMARY KEY (`itemID`),
  ADD KEY `itemOrderID` (`itemRequestID`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`requestID`),
  ADD KEY `requestProductID` (`requestProductID`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `artistID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `newsPosts`
--
ALTER TABLE `newsPosts`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `artists`
--
ALTER TABLE `artists`
  ADD CONSTRAINT `artists_ibfk_1` FOREIGN KEY (`artistID`) REFERENCES `products` (`productArtistID`);

--
-- Constraints for table `newsPosts`
--
ALTER TABLE `newsPosts`
  ADD CONSTRAINT `newsposts_ibfk_1` FOREIGN KEY (`postAdminID`) REFERENCES `admin` (`adminID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`productCategoryID`) REFERENCES `categories` (`categoryID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`productArtistID`) REFERENCES `artists` (`artistID`);

--
-- Constraints for table `requestItems`
--
ALTER TABLE `requestItems`
  ADD CONSTRAINT `requestitems_ibfk_1` FOREIGN KEY (`itemRequestID`) REFERENCES `requests` (`requestID`),
  ADD CONSTRAINT `requestitems_ibfk_2` FOREIGN KEY (`itemID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`requestProductID`) REFERENCES `products` (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
