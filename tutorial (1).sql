-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2017 at 05:18 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicName` varchar(50) NOT NULL,
  `prodDescrip` varchar(1000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL DEFAULT '0.00',
  `prodQuantity` int(4) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicName`, `prodDescrip`, `prodPrice`, `prodQuantity`) VALUES
(1, 'Super Food Family Classics', 'img2.jpg', 'Expand your recipe repertoire and freshen up your family favourites with new nutritious, tasty meals. Make your weekly menu something to shout about. Sneak in extra veg with squash mac''n''cheese and enjoy a no-arguments family dinner with chicken fajitas, smoky dressed aubergines & peppers. Every recipe has clear and easy-to-understand nutritional information on the page and there''s a bumper back-section packed with valuable advice on everything from cooking with kids and tackling fussy eaters, to good gut health, the importance of fibre, budgeting and of course, getting more of the good stuff into your family''s diet.\r\n\r\n', '12.99', 100),
(2, 'Fifty Shades Of Grey ', 'img1.jpg', 'Romantic, liberating and totally addictive, Fifty Shades of Grey is a novel that will obsess you, possess you, and stay with you for ever. When literature student Anastasia Steele interviews successful entrepreneur Christian Grey , she finds him very attractive and deeply intimidating. Convinced that their meeting went badly, she tries to put him out of her mind until he turns up at the store where she works part-time, and invites her out. Unworldly and innocent, Ana is shocked to find she wants this man. And, when he warns her to keep her distance, it only makes her want him more. But Grey is tormented by inner demons, and consumed by the need to control. As they embark on a passionate love affair, Ana discovers more about her own desires, as well as the dark secrets Grey keeps hidden away from public view', '3.99', 100),
(5, 'Cop Under Fire', 'img3.jpg', 'America has become increasingly divided and polarized in recent years. With growing racial tension, animosity toward law enforcement professionals, government corruption, and disregard for the constitutional process, there seems to be no easy answer in sight. But Milwaukee County Sheriff David Clarke knows where we must begin: we must stop blaming others; look at our problems with open eyes; take ownership of our family, community, and country; and turn to God for solutions. Deeply rooted in Sheriff Clarke''s personal life story, this book is not a dry recitation of what has gone wrong in America with regard to race. It''s about the issues that deeply affect us today both personally and politically and how we can rise above our current troubles to once again be a truly great people in pursuit of liberty and justice for all.', '13.90', 100),
(6, 'Hidden Figures', 'img4.jpg', 'The phenomenal true story of the black female mathematicians at NASA whose calculations helped fuel some of America’s greatest achievements in space. Soon to be a major motion picture starring Taraji P. Henson, Octavia Spencer, Janelle Monae, Kirsten Dunst, and Kevin Costner.\r\n\r\nBefore John Glenn orbited the earth, or Neil Armstrong walked on the moon, a group of dedicated female mathematicians known as “human computers” used pencils, slide rules and adding machines to calculate the numbers that would launch rockets, and astronauts, into space.', '9.21', 100),
(9, 'Hillbilly Elegy', 'img5.jpg', 'Hillbilly Elegy is a passionate and personal analysis of a culture in crisis—that of white working-class Americans. The decline of this group, a demographic of our country that has been slowly disintegrating over forty years, has been reported on with growing frequency and alarm, but has never before been written about as searingly from the inside. J. D. Vance tells the true story of what a social, regional, and class decline feels like when you were born with it hung around your neck.', '56.00', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(4) NOT NULL,
  `UsersType` varchar(45) DEFAULT NULL,
  `UsersFName` varchar(45) DEFAULT NULL,
  `UsersLName` varchar(45) DEFAULT NULL,
  `UsersAddress` varchar(45) DEFAULT NULL,
  `UsersPostCode` varchar(8) DEFAULT NULL,
  `UsersTelNo` int(11) DEFAULT NULL,
  `UsersEmail` varchar(45) DEFAULT NULL,
  `UsersPassword` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userId` (`userId`),
  ADD UNIQUE KEY `UsersEmail` (`UsersEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
