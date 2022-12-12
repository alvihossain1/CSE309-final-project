-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 02:15 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theatre_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `shows_t`
--

CREATE TABLE `shows_t` (
  `showID` bigint(20) NOT NULL,
  `showName` varchar(50) DEFAULT NULL,
  `showGenre` varchar(50) DEFAULT NULL,
  `showDate` varchar(30) DEFAULT NULL,
  `showTime` varchar(30) DEFAULT NULL,
  `showUrl` varchar(5000) DEFAULT NULL,
  `showDescription` varchar(10000) DEFAULT NULL,
  `showVenue` varchar(50) DEFAULT NULL,
  `showVenueDetails` varchar(50) DEFAULT NULL,
  `showTicketPrice` int(11) DEFAULT NULL,
  `hallName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shows_t`
--

INSERT INTO `shows_t` (`showID`, `showName`, `showGenre`, `showDate`, `showTime`, `showUrl`, `showDescription`, `showVenue`, `showVenueDetails`, `showTicketPrice`, `hallName`) VALUES
(55057111, 'Man La Mancha', 'Act', '2022-12-12', '16:30', 'https://i.pinimg.com/564x/9e/30/7f/9e307fb190f45327703606c2446fda1d.jpg', 'Toys is a 1992 American fantasy comedy film directed by Barry Levinson, co-written by Levinson and Valerie Curtin, and starring Robin Williams, Michael Gambon, Joan Cusack, Robin Wright, LL Cool J, and Jamie Foxx in his feature film debut.', 'Dhaka', 'PanthaPath', 350, 'Hall - 6'),
(55082746, 'Classic Comic', 'Comedy', '2022-12-12', '16:30', 'https://img.freepik.com/free-vector/vintage-colored-theatre-advertising-poster_1284-39338.jpg?w=2000', 'A case of mistaken identity forces a bumbling entrepreneur to team up with a notorious assassin in hopes of staying alive.', 'Dhaka', 'PanthaPath', 250, 'Hall - 2'),
(55099093, 'Legally Blonde', 'Act', '2022-12-12', '16:30', 'https://c8.alamy.com/comp/B7ECDW/broadway-theater-billboard-sign-times-square-new-york-city-usa-B7ECDW.jpg', 'Toys is a 1992 American fantasy comedy film directed by Barry Levinson, co-written by Levinson and Valerie Curtin, and starring Robin Williams, Michael Gambon, Joan Cusack, Robin Wright, LL Cool J, and Jamie Foxx in his feature film debut.', 'Dhaka', 'PanthaPath', 450, 'Hall - 6'),
(55753285, '80s Big Banner', 'Performance', '2022-12-12', '16:30', 'https://retrographik.com/wp-content/uploads/2014/12/The-BIG-Banner-Show-the-Girl-From-Paris-Vintage-Theater-Poster-585x909.jpg', 'Any movie lover knows how much the text on a Netflix blurb matters when trying to choose something new to watch. A podcast description works in a similar way - it gives potential listeners a peek at what to expect from your podcast before tuning in. ', 'Dhaka', 'PanthaPath', 300, 'Hall - 1'),
(55755212, 'Titanic Act Show', 'Act', '2022-12-12', '16:30', 'https://www.subplotstudio.com/wp-content/themes/x-child/images/popular-titanic.jpg', 'Seventeen-year-old Rose hails from an aristocratic family and is set to be married. When she boards the Titanic, she meets Jack Dawson, an artist, and falls in love with him.', 'Dhaka', 'PanthaPath', 350, 'Hall - 4'),
(55769085, 'AIDA Show', 'Act', '2022-12-12', '16:30', 'https://www.subplotstudio.com/resources/images/productions/193/7974/art.overview.437.jpg', 'Any movie lover knows how much the text on a Netflix blurb matters when trying to choose something new to watch. A podcast description works in a similar way - it gives potential listeners a peek at what to expect from your podcast before tuning in. ', 'Dhaka', 'PanthaPath', 300, 'Hall - 2'),
(55852232, 'The Talent Show', 'Comedy', '2022-12-12', '16:30', 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/talent-show-flyer-design-template-0028b94014f5cee6adca046438bc5a5e_screen.jpg?ts=1636991394', 'A case of mistaken identity forces a bumbling entrepreneur to team up with a notorious assassin in hopes of staying alive.', 'Dhaka', 'PanthaPath', 400, 'Hall - 3');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `sub_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comments` varchar(260) DEFAULT NULL,
  `submission_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_purchase_t`
--

CREATE TABLE `user_purchase_t` (
  `purchaseID` bigint(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `showID` bigint(20) DEFAULT NULL,
  `showName` varchar(50) DEFAULT NULL,
  `showUrl` varchar(5000) DEFAULT NULL,
  `showTicketPrice` int(11) DEFAULT NULL,
  `showAmount` int(11) DEFAULT NULL,
  `showDate` date DEFAULT NULL,
  `showTime` varchar(20) DEFAULT NULL,
  `venueSelection` varchar(50) DEFAULT NULL,
  `paymentMethod` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_purchase_t`
--

INSERT INTO `user_purchase_t` (`purchaseID`, `email`, `showID`, `showName`, `showUrl`, `showTicketPrice`, `showAmount`, `showDate`, `showTime`, `venueSelection`, `paymentMethod`) VALUES
(11, 'admin@yahoo.com', 55099093, 'Legally Blonde', 'https://c8.alamy.com/comp/B7ECDW/broadway-theater-billboard-sign-times-square-new-york-city-usa-B7ECDW.jpg', 450, 900, '2022-12-12', '16:30', 'Sylhet', 'Bkash'),
(12, 'admin@yahoo.com', 55057111, 'Man La Mancha', 'https://i.pinimg.com/564x/9e/30/7f/9e307fb190f45327703606c2446fda1d.jpg', 350, 1050, '2022-12-12', '16:30', 'Sylhet', 'Nagad');

-- --------------------------------------------------------

--
-- Table structure for table `user_t`
--

CREATE TABLE `user_t` (
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `addr` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_t`
--

INSERT INTO `user_t` (`fname`, `lname`, `addr`, `city`, `zip`, `gender`, `email`, `pass`) VALUES
('Alvi', 'Hossain', '5 SegunBagicha, Concord', 'Dhaka', '1000', 'male', 'admin@yahoo.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shows_t`
--
ALTER TABLE `shows_t`
  ADD PRIMARY KEY (`showID`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user_purchase_t`
--
ALTER TABLE `user_purchase_t`
  ADD PRIMARY KEY (`purchaseID`),
  ADD KEY `email_fk` (`email`),
  ADD KEY `showID_fk` (`showID`);

--
-- Indexes for table `user_t`
--
ALTER TABLE `user_t`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_purchase_t`
--
ALTER TABLE `user_purchase_t`
  MODIFY `purchaseID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_purchase_t`
--
ALTER TABLE `user_purchase_t`
  ADD CONSTRAINT `email_fk` FOREIGN KEY (`email`) REFERENCES `user_t` (`email`),
  ADD CONSTRAINT `showID_fk` FOREIGN KEY (`showID`) REFERENCES `shows_t` (`showID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
