-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2017 at 09:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `adminEmail` varchar(255) NOT NULL,
  `adminPassword` char(60) NOT NULL,
  `adminFirstName` varchar(50) NOT NULL,
  `adminLastName` varchar(50) NOT NULL,
  `adminStreetAddress` varchar(100) NOT NULL,
  `adminStreetAddress2` varchar(100) NOT NULL,
  `adminCity` varchar(50) NOT NULL,
  `adminState` char(2) NOT NULL,
  `adminZip` char(5) NOT NULL,
  `adminPhone` varchar(10) NOT NULL,
  `adminDateJoined` datetime NOT NULL,
  `adminToken` varchar(255) NOT NULL,
  `adminActivated` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminEmail`, `adminPassword`, `adminFirstName`, `adminLastName`, `adminStreetAddress`, `adminStreetAddress2`, `adminCity`, `adminState`, `adminZip`, `adminPhone`, `adminDateJoined`, `adminToken`, `adminActivated`) VALUES
(1, 'nar@gmail.com', 'nar', 'Nick', 'Ricci', '261 Baview Avenue', '', 'Warwick', 'RI', '02818', '4016993928', '0000-00-00 00:00:00', '', '0'),
(2, 'joe@malley.com', '16a9a54ddf4259952e3c118c763138e83693d7fd', 'Joe', 'Malley', '38 Maple Avenue', 'Apartment 3A', 'West Warwick', 'RI', '94838', '8888888888', '2017-09-20 17:57:52', '89661149f1b62ff47dd5a6fe4f979c9f53f619b6', '0');

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

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`artistID`, `artistFirstName`, `artistLastName`, `artistDescription`, `artistCity`, `artistState`, `artistCountry`, `artistPhone`, `artistEmail`, `artistWebsite`) VALUES
(1, 'John', 'Mullaney', 'Engineer by day, glass blower by night.', 'Knoxville', 'TN', 'USA', '4018493928', 'johnnym@gmail.com', NULL),
(2, 'Stu', 'Kaplan', 'From Syracuse, NY.  Loves basketball...', 'Syracuse', 'NY', 'USA', '9382727642', 'stukap@aol.com', NULL),
(3, 'Kyle', 'Arruda', 'Avid skateboarder and filmmaker...He\'s 40 and still lives with his mother...', 'North Kingstown', 'RI', 'USA', '4017877388', 'karruda@gmail.com', NULL),
(4, 'Joseph', 'Malley', 'From Long Island, NY.  Die hard NY Rangers fan.  Loves RI.  University of RI alumni.', 'West Hampton', 'NY', 'USA', '5184653853', 'joemalley@yahoo.com', NULL),
(5, 'Dereck', 'Realejo', 'Lorem ipsum dolor sit amet, cum ubique erroribus te, ut sint vivendo omittantur vel. ', 'Warwick', 'RI', 'USA', '4017378392', 'drealejo@yahoo.com', NULL),
(6, 'Merissa', 'Ricci', 'Crazy Person...', 'Hoboken', 'NJ', 'USA', '4014981751', 'missy@aol.com', NULL);

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
-- Table structure for table `newsposts`
--

CREATE TABLE `newsposts` (
  `postID` int(11) NOT NULL,
  `postTitle` varchar(100) NOT NULL,
  `postWriter` varchar(100) NOT NULL,
  `postDate` datetime NOT NULL,
  `postContent` varchar(2000) NOT NULL,
  `postImageName` varchar(255) NOT NULL,
  `postImageExt` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsposts`
--

INSERT INTO `newsposts` (`postID`, `postTitle`, `postWriter`, `postDate`, `postContent`, `postImageName`, `postImageExt`) VALUES
(16, 'Glass Sale!  One Day Only!', 'Jack', '2017-09-21 23:04:59', '<p>Everything is 30% off!&nbsp; Tell your friends to come on down.&nbsp; 58 Main Street East Greenwich, located on the 2nd floor level.</p>', '283677255d5436357d0d46fded45cdccb1c56102', 'png'),
(17, 'NEW JARS ARE HERE!!!!!!', 'John', '2017-09-22 00:30:04', '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>\r\n<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>\r\n<p>&nbsp;</p>', '8bb2f0d2a27a5685fa1aa84922afd438ff66f9e5', 'png'),
(18, 'Awesome new pieces from Jen from Oregon', 'Nick', '2017-09-22 01:23:55', '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>', 'c889df49d8329cb0aab1df828f1a49a3c1a7df44', 'jpg'),
(19, 'New Pieces from PubZ Glass just came!  Grab one while they last!', 'John', '2017-09-22 01:26:11', '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>', '087072ea977bbe9dd3f3f41b3da419c85f57b626', 'jpg'),
(20, 'Introducing Local Artist Dan Logden', 'John', '2017-09-22 01:31:07', '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>\r\n<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>\r\n<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>', '2c9d136f7097e659d6518e17e6e325f02d840165', 'jpg'),
(21, 'Grand Opening Party on September 30 @ 3PM', 'John', '2017-09-22 01:32:20', '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>\r\n<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>', 'b3e76350b07ae5c16ed5dd57e922c71b82981089', 'jpg'),
(22, 'Fresh batch of short pipes just arrived...', 'Nick', '2017-09-22 01:34:01', '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>', 'c128a7bce49b32e9a79603bcee4d0224063fc112', 'jpg'),
(23, 'GET SOME!', 'John', '2017-09-22 01:36:39', '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>\r\n<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>', 'f221149c5de2f1827c96e6379858e268fd7363e1', 'jpg');

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
  `productImage` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `productImageExt` varchar(5) NOT NULL,
  `productArtist` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productPrice`, `productQuantity`, `productCategoryID`, `productShortDescription`, `productLongDescription`, `productImage`, `productImageExt`, `productArtist`) VALUES
(4, 'Lobster Claw', '500.00', 1, 2, '<p>Lorem ipsum dolor sit amet, usu ut quod essent nominati, an graece iudicabit qui. Ea mel eleifend interesset. Vix id homero periculis consequat. At est erant affert, his illud novum vulputate eu. Sed eu noster vocent, eirmod dolorem persecuti vel ', '<p>Lorem ipsum dolor sit amet, usu ut quod essent nominati, an graece iudicabit qui. Ea mel eleifend interesset. Vix id homero periculis consequat. At est erant affert, his illud novum vulputate eu. Sed eu noster vocent, eirmod dolorem persecuti vel ex, ut vim rebum pericula.<br /><br />Et mei simul debitis officiis. At sea meis soluta, ex mel nobis propriae. At sea summo errem forensibus. Cu duo mucius vivendum lobortis, natum summo percipitur ad mea.</p>', 'd8faa6a445c84fc803686e04c18120b0c660e5f7', 'jpg', 'Merissa Ricci'),
(5, 'The Eye', '700.00', 2, 6, '<p>Ut qui prima ipsum rationibus, at duo facete consetetur mediocritatem. Porro instructior ad nam, per primis nominati ne, aliquid menandri vis no. Facete docendi at sed. Phaedrum invenire evertitur cu eos. Explicari persecuti argumentum ea vix.</p>', '<p>Ut qui prima ipsum rationibus, at duo facete consetetur mediocritatem. Porro instructior ad nam, per primis nominati ne, aliquid menandri vis no. Facete docendi at sed. Phaedrum invenire evertitur cu eos. Explicari persecuti argumentum ea vix.</p>\r\n<p>Ut qui prima ipsum rationibus, at duo facete consetetur mediocritatem. Porro instructior ad nam, per primis nominati ne, aliquid menandri vis no. Facete docendi at sed. Phaedrum invenire evertitur cu eos. Explicari persecuti argumentum ea vix.</p>', '9f0953aa24f4d43ca8200fdeae20597fe32c6f53', 'jpg', 'John Mullaney'),
(6, 'Coral Piece', '500.00', 1, 6, '<p>Te quando platonem cum, debet choro est an. Ludus consetetur est ei. Sit ad posse zril tollit, ea nisl vivendo contentiones mei, et nam rebum tibique. Et sed quem everti, eam ad nulla ridens veritus, eu meis deserunt pro. Ex conceptam temporibus e', '<p>Te quando platonem cum, debet choro est an. Ludus consetetur est ei. Sit ad posse zril tollit, ea nisl vivendo contentiones mei, et nam rebum tibique. Et sed quem everti, eam ad nulla ridens veritus, eu meis deserunt pro. Ex conceptam temporibus est, esse dicat ullamcorper usu ei, pri ex facete quaestio definitiones. Labitur maiestatis te his. Malorum offendit fabellas at sea, cu ius rebum assum.</p>\r\n<p>Te quando platonem cum, debet choro est an. Ludus consetetur est ei. Sit ad posse zril tollit, ea nisl vivendo contentiones mei, et nam rebum tibique. Et sed quem everti, eam ad nulla ridens veritus, eu meis deserunt pro. Ex conceptam temporibus est, esse dicat ullamcorper usu ei, pri ex facete quaestio definitiones. Labitur maiestatis te his. Malorum offendit fabellas at sea, cu ius rebum assum.</p>', '736655959121dd66c010db77369258c91e3db92a', 'jpg', 'John Mullaney'),
(7, 'The Glower', '600.00', 1, 5, '<p>In tollit hendrerit duo, graeco facilisis evertitur vis in. Mel no cetero salutandi expetenda, agam minim mel ne. Pri ne alii signiferumque, ex vix veniam prodesset. Ius summo aeque maiorum id, quo legendos rationibus philosophia ne, at causae mod', '<p>In tollit hendrerit duo, graeco facilisis evertitur vis in. Mel no cetero salutandi expetenda, agam minim mel ne. Pri ne alii signiferumque, ex vix veniam prodesset. Ius summo aeque maiorum id, quo legendos rationibus philosophia ne, at causae moderatius mel. Ad nulla feugiat mentitum vix.</p>\r\n<p><br />In tollit hendrerit duo, graeco facilisis evertitur vis in. Mel no cetero salutandi expetenda, agam minim mel ne. Pri ne alii signiferumque, ex vix veniam prodesset. Ius summo aeque maiorum id, quo legendos rationibus philosophia ne, at causae moderatius mel. Ad nulla feugiat mentitum vix.</p>', 'f8cb697c345c19e26d6cf6568fd97d7f4532fa38', 'jpg', 'Dereck Realejo'),
(8, 'The Potatoe Heads', '75.00', 2, 7, '<p>In tollit hendrerit duo, graeco facilisis evertitur vis in. Mel no cetero salutandi expetenda, agam minim mel ne. Pri ne alii signiferumque, ex vix veniam prodesset. Ius summo aeque maiorum id, quo legendos rationibus philosophia ne, at causae mod', '<p>In tollit hendrerit duo, graeco facilisis evertitur vis in. Mel no cetero salutandi expetenda, agam minim mel ne. Pri ne alii signiferumque, ex vix veniam prodesset. Ius summo aeque maiorum id, quo legendos rationibus philosophia ne, at causae moderatius mel. Ad nulla feugiat mentitum vix.</p>\r\n<p><br />In tollit hendrerit duo, graeco facilisis evertitur vis in. Mel no cetero salutandi expetenda, agam minim mel ne. Pri ne alii signiferumque, ex vix veniam prodesset. Ius summo aeque maiorum id, quo legendos rationibus philosophia ne, at causae moderatius mel. Ad nulla feugiat mentitum vix.</p>', 'a13df0ba6971e4390b3f259cc58cb999095e9dbb', 'jpg', 'Dereck Realejo'),
(9, 'Light Blues', '350.00', 1, 5, '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Script', '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>\r\n<p>Ei habemus repudiare prodesset nam, malorum legimus usu et, dico adolescens dissentias ius at. Ut pri natum liber everti, libris diceret sententiae cum in. Eum quando referrentur neglegentur ad, et illud deterruisset pro. Ex est abhorreant assueverit, eum et tantas appetere voluptatibus, cu erat graeco sit.</p>', 'e33b6c4741a097309ea4e6a5a658103713345b03', 'jpg', 'Kyle Arruda'),
(10, 'Clear Piece', '475.00', 1, 5, '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Script', '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>', '4e2d55c08a4ead2648b98c316b8b2a456228b21d', 'jpg', 'Joe Malley'),
(12, 'Eye Bowls', '350.00', 2, 2, '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Script', '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>\r\n<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>', 'f73fc942925adf9087f1188bfd4e49602f944857', 'jpg', 'John Mullaney'),
(13, 'Bug Spoon', '250.00', 1, 2, '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Script', '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>', 'ed512134dfb839e4b8b112e43ef88fc756dd0b7b', 'jpg', 'John Mullaney'),
(14, 'Puffco Vape Pen', '350.00', 5, 9, '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Script', '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>\r\n<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Scriptorem scribentur nam id. Ne stet graeco expetenda eos, munere euismod vix ut.</p>', 'c0afc5e1129258df3acafc96391981e9498f1c35', 'jpg', ''),
(15, 'Grinders', '40.00', 15, 9, '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Script', '', 'f221149c5de2f1827c96e6379858e268fd7363e1', 'jpg', ''),
(16, 'Black Pipe', '400.00', 1, 5, '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Script', '', 'c5560b14494378af5f020482e8c00d6f37fb9699', 'jpg', 'Merissa Ricci'),
(17, 'Piggy', '50.00', 2, 7, '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Script', '', '561c8d67d5f9398661f9f351a70b0a3582940e3a', 'jpg', 'Dereck Realejo'),
(18, 'Dead Head Spoon', '200.00', 1, 2, '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Script', '', '88d4e2ba0ce5e2c8cc4e058015dbe5f1f76c03e8', 'jpg', ''),
(19, '2-Tone Water Pipe', '425.00', 1, 6, '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Script', '', '3cffc09d3bb1bb0671a743ca6e055f44c5c6557b', 'jpg', ''),
(20, 'Red/Clear Coral Piece', '500.00', 1, 6, '<p>Lorem ipsum dolor sit amet, graece nostrud necessitatibus at est, vim ex dicta postea dissentiet, mea id paulo noluisse temporibus. Sea at eripuit probatus principes, tamquam iuvaret ne est, no per summo bonorum. Eu atomorum rationibus quo. Script', '', 'bba93ff28657421bc4d5f42e909b19e9848ea7f7', 'jpg', 'Joe Malley'),
(21, 'Purple Bowls', '375.00', 2, 2, '<p>Blandit accusamus vituperata duo ea. At duo nominavi definitionem, has ne quodsi sensibus. Eu per quem stet adipiscing, ex cum quando accusam consetetur. Quaestio platonem qualisque cu sit. Debet officiis usu at, te dicit virtute theophrastus vel,', '', '19b4df4b82e37273c7d027b4f89c0d3a6a8d65bb', 'jpg', ''),
(22, 'The Funky One', '600.00', 1, 5, '<p>Blandit accusamus vituperata duo ea. At duo nominavi definitionem, has ne quodsi sensibus. Eu per quem stet adipiscing, ex cum quando accusam consetetur. Quaestio platonem qualisque cu sit. Debet officiis usu at, te dicit virtute theophrastus vel,', '', '5c59f61b3b137a7d49e424229ba69604e090e4e2', 'jpg', 'Kyle Arruda');

-- --------------------------------------------------------

--
-- Table structure for table `requestitems`
--

CREATE TABLE `requestitems` (
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
  `userEmail` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `userFirstName` varchar(50) NOT NULL,
  `userLastName` varchar(50) NOT NULL,
  `userStreetAddress` varchar(100) NOT NULL,
  `userStreetAddress2` varchar(100) DEFAULT NULL,
  `userCity` varchar(50) NOT NULL,
  `userState` char(2) NOT NULL,
  `userZip` char(5) NOT NULL,
  `userCountry` varchar(50) NOT NULL,
  `userPhone` varchar(10) NOT NULL,
  `userDateJoined` datetime NOT NULL,
  `userToken` varchar(255) NOT NULL,
  `userActivated` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userEmail`, `userPassword`, `userFirstName`, `userLastName`, `userStreetAddress`, `userStreetAddress2`, `userCity`, `userState`, `userZip`, `userCountry`, `userPhone`, `userDateJoined`, `userToken`, `userActivated`) VALUES
(1, 'nicholasaricci@gmail.com', '1234567890', 'Nicholas', 'Ricci', '261 Bayview Avenue', 'nah', 'Warwick', 'RI', '02818', 'United States', '4016993928', '0000-00-00 00:00:00', '', '0'),
(3, 'jmalley@gmail.com', '23d6657655a5927337e2b6a1c93ea138', 'Joe', 'Malley', '271 Main Drive', '', 'West Hampton', 'NY', '83726', 'United States', '8888888888', '0000-00-00 00:00:00', '', '0'),
(4, 'jfriedalot@yahoo.com', 'fb17573a28658edafcd7e26ba176dd07', 'John', 'Fried', '87972 Pennsylvannia Avenue', '', 'Los Angeles', 'AL', '83829', 'United States', '4018984848', '0000-00-00 00:00:00', '', '0'),
(5, 'nicholasaricci@gmail.com', '251a221b5a3e6a52a4fd4382db14b0fc', 'Nick', 'Ricci', '35 Maple Avenue', '', 'West Warwick', 'RI', '02893', 'USA', '4018854548', '0000-00-00 00:00:00', '', '0'),
(6, 'nicholasaricci@gmail.com', '224063100aa7b20723acf57b43143b0eca635fc1', 'Nick', 'Ricci', '202 Meadow Brook Road', '', 'Westerly', 'RI', '93481', 'USA', '4028393932', '0000-00-00 00:00:00', '', '0'),
(7, 'captainjack@gmail.com', '99d2c5ac75952b30a7e7eb57936a58023397f09c', 'Jack', 'Daniels', '2532 North Main Street', '', 'Pawtucket', 'RI', '93733', 'USA', '4014834839', '0000-00-00 00:00:00', '', '0'),
(8, 'naricci@email.neit.edu', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'safdgasgagdsadg', 'wafasdfasdfd', 'asfdasfdasfdas', 'safsadfsdafasdf', 'Nowhere', 'Se', '09276', 'United States', '5555555555', '0000-00-00 00:00:00', '', '0'),
(9, 'speedemon1318@aol.com', '75ef9faee755c70589550b513ad881e5a603182c', 'Nick', 'Russel', '211 Rolling Rock Road', '', 'Quebec', 'CA', '83177', 'United States', '4429999988', '0000-00-00 00:00:00', '', '0'),
(10, 'nicholas_ricci@my.uri.edu', '2c6d680f5c570ba21d22697cd028f230e9f4cd56', 'Dave', 'England', '8383 Long Drive', 'Apartment 3', 'North Kingstown', 'RI', '08337', 'United States', '4018837373', '0000-00-00 00:00:00', '333584fc2850d1a1f97a0a7bf8c5a12e684856bf', '0');

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
-- Indexes for table `newsposts`
--
ALTER TABLE `newsposts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`) USING BTREE COMMENT 'PRIMARY KEY',
  ADD KEY `productCategoryID` (`productCategoryID`) USING BTREE COMMENT 'FOREIGN KEY';

--
-- Indexes for table `requestitems`
--
ALTER TABLE `requestitems`
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
  MODIFY `artistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `newsposts`
--
ALTER TABLE `newsposts`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`productCategoryID`) REFERENCES `categories` (`categoryID`);

--
-- Constraints for table `requestitems`
--
ALTER TABLE `requestitems`
  ADD CONSTRAINT `requestitems_ibfk_1` FOREIGN KEY (`itemRequestID`) REFERENCES `requests` (`requestID`),
  ADD CONSTRAINT `requestitems_ibfk_2` FOREIGN KEY (`itemID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`requestProductID`) REFERENCES `products` (`productID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
