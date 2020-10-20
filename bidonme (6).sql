-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 02:42 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bidonme`
--

-- --------------------------------------------------------

--
-- Table structure for table `adcategory`
--

CREATE TABLE `adcategory` (
  `AdCategoryId` int(11) NOT NULL,
  `CategoryName` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adcategory`
--

INSERT INTO `adcategory` (`AdCategoryId`, `CategoryName`) VALUES
(1, 'Vehicles'),
(3, 'Land');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserName` varchar(1000) NOT NULL,
  `Password` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserName`, `Password`) VALUES
('bidonme@gmail.com', 'bidonme');

-- --------------------------------------------------------

--
-- Table structure for table `advertiestment`
--

CREATE TABLE `advertiestment` (
  `AdvId` int(11) NOT NULL,
  `AdvTitle` varchar(500) NOT NULL,
  `Description` varchar(3000) NOT NULL,
  `Price` float NOT NULL,
  `Location` varchar(500) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `UserId` int(11) NOT NULL,
  `pdate` date DEFAULT NULL,
  `edate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `AwardTitle` varchar(500) NOT NULL,
  `Description` varchar(3000) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`AwardTitle`, `Description`, `UserId`) VALUES
('aa', '', 11),
('Student of the year', 'Student of the year Student of the yearStudent of the yearStudent of the yearStudent of the yearStudent of the year', 13),
('Best worker', 'Training Network assistant', 26);

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `BidId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(3000) NOT NULL,
  `vacancyId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`BidId`, `UserId`, `Price`, `Description`, `vacancyId`) VALUES
(9, 26, 34000, 'werrrrrr', 30),
(10, 26, 6785, 'I want a best carpenter', 32),
(11, 26, 8000, 'i can build a home', 34),
(8, 26, 15000, 'I am Expert.', 29);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryName`) VALUES
(1, 'software'),
(2, 'Land Properties'),
(3, 'Mobile Accessories'),
(4, 'PC Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `CerTitle` varchar(1000) NOT NULL,
  `CerResult` varchar(100) DEFAULT NULL,
  `UserId` int(11) NOT NULL,
  `InsName` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`CerTitle`, `CerResult`, `UserId`, `InsName`) VALUES
('Certificate in English', 'A', 26, 'Esoft');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `DegreeTitle` varchar(500) NOT NULL,
  `userId` int(11) NOT NULL,
  `DegreeLevel` varchar(400) DEFAULT NULL,
  `InsName` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`DegreeTitle`, `userId`, `DegreeLevel`, `InsName`) VALUES
('Network Enginnering', 26, '2nd Upper', 'Uva wellassa');

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE `diploma` (
  `DipTitle` varchar(500) NOT NULL,
  `userId` int(11) NOT NULL,
  `DipResult` varchar(500) DEFAULT NULL,
  `InsName` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diploma`
--

INSERT INTO `diploma` (`DipTitle`, `userId`, `DipResult`, `InsName`) VALUES
('Network Engineering', 26, 'A', 'Esoft');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `UserId`) VALUES
(32, 'twitter (3).png', 0),
(31, '1498847830957.jpg', 0),
(48, '1.JPG', 18),
(49, '1.JPG', 24);

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `InsName` varchar(500) NOT NULL,
  `InsEmail` varchar(1000) DEFAULT NULL,
  `InsOfficeNo` varchar(200) DEFAULT NULL,
  `InsMobileNo` varchar(200) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `InsAddressL1` varchar(500) DEFAULT NULL,
  `InsAddressL2` varchar(500) DEFAULT NULL,
  `InsAddressL3` varchar(500) DEFAULT NULL,
  `InsWebLink` varchar(1000) DEFAULT NULL,
  `InsFBLink` varchar(1000) DEFAULT NULL,
  `InsTwitterLink` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobtitle`
--

CREATE TABLE `jobtitle` (
  `JobTitleId` int(11) NOT NULL,
  `JobTitle` varchar(500) NOT NULL,
  `CategoryId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reporteduser`
--

CREATE TABLE `reporteduser` (
  `UserId1` int(11) NOT NULL,
  `userId2` int(11) NOT NULL,
  `Reported` tinyint(1) DEFAULT NULL,
  `Description` varchar(3000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporteduser`
--

INSERT INTO `reporteduser` (`UserId1`, `userId2`, `Reported`, `Description`) VALUES
(13, 3, 1, 'Reported user');

-- --------------------------------------------------------

--
-- Table structure for table `reportedvacancy`
--

CREATE TABLE `reportedvacancy` (
  `ReportedVacancyId` int(11) NOT NULL,
  `vacancyId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `Description` varchar(3000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reportedvacancy`
--

INSERT INTO `reportedvacancy` (`ReportedVacancyId`, `vacancyId`, `userId`, `Description`) VALUES
(3, 34, 26, 'wertyuiop');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `UserId` varchar(50) NOT NULL,
  `ReviewRate` varchar(100) NOT NULL,
  `Description` varchar(3000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `SkillTitle` varchar(500) NOT NULL,
  `userId` int(11) NOT NULL,
  `skillLevel` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`SkillTitle`, `userId`, `skillLevel`) VALUES
('Communication', 26, 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Password` varchar(3000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Email`, `Password`) VALUES
(27, 'mravishani7@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(26, 'sandunimabarana@gmail.com', 'ca673114c38a6dcf8f827fc5d7f055f4');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `UserProId` int(11) NOT NULL,
  `FirstName` varchar(500) DEFAULT NULL,
  `LastName` varchar(500) DEFAULT NULL,
  `Initials` varchar(500) DEFAULT NULL,
  `CurrentJob` varchar(500) DEFAULT NULL,
  `NIC` varchar(500) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Nationality` varchar(500) DEFAULT NULL,
  `CivilStatus` varchar(500) DEFAULT NULL,
  `TpNo` varchar(500) DEFAULT NULL,
  `AltTpNo` varchar(500) DEFAULT NULL,
  `AddressL1` varchar(500) DEFAULT NULL,
  `AddressL2` varchar(500) DEFAULT NULL,
  `AddressL3` varchar(500) DEFAULT NULL,
  `PostalCode` varchar(500) DEFAULT NULL,
  `OlIndexNo` varchar(500) DEFAULT NULL,
  `OlEnglish` varchar(500) DEFAULT NULL,
  `OlMaths` varchar(500) DEFAULT NULL,
  `OlScience` varchar(500) DEFAULT NULL,
  `OlResult` varchar(500) DEFAULT NULL,
  `AlIndexNo` varchar(500) DEFAULT NULL,
  `AlSub1` varchar(500) DEFAULT NULL,
  `Alsub1Result` varchar(500) DEFAULT NULL,
  `AlSub2` varchar(500) DEFAULT NULL,
  `Alsub2Result` varchar(500) DEFAULT NULL,
  `AlSub3` varchar(500) DEFAULT NULL,
  `Alsub3Result` varchar(500) DEFAULT NULL,
  `AlEnglishResult` varchar(500) DEFAULT NULL,
  `FbLink` varchar(500) DEFAULT NULL,
  `GithubLink` varchar(500) DEFAULT NULL,
  `LinkedinLink` varchar(500) DEFAULT NULL,
  `TwitterLink` varchar(500) DEFAULT NULL,
  `WebLink` varchar(500) DEFAULT NULL,
  `OverView` varchar(500) DEFAULT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`UserProId`, `FirstName`, `LastName`, `Initials`, `CurrentJob`, `NIC`, `Gender`, `DOB`, `Nationality`, `CivilStatus`, `TpNo`, `AltTpNo`, `AddressL1`, `AddressL2`, `AddressL3`, `PostalCode`, `OlIndexNo`, `OlEnglish`, `OlMaths`, `OlScience`, `OlResult`, `AlIndexNo`, `AlSub1`, `Alsub1Result`, `AlSub2`, `Alsub2Result`, `AlSub3`, `Alsub3Result`, `AlEnglishResult`, `FbLink`, `GithubLink`, `LinkedinLink`, `TwitterLink`, `WebLink`, `OverView`, `UserId`) VALUES
(90, 'Sanduni', 'Irushika', 'Mabarana', 'Student', '957940412v', 'female', '1995-08-07', 'Sri lankan', 'Single', '94702868378', '94712253110', 'Kethaki', 'Gamunu RD', 'Badulla', '4563', '4567', 'A', 'A', 'A', 'A-9', '1236', 'Biology', 'A', 'Chemistry', 'A', 'Physics', 'A', 'A', 'https://mail.google.com/mail/u/0/bnn', '', '', '', '', 'I am university Student.', 26);

-- --------------------------------------------------------

--
-- Table structure for table `user_awards`
--

CREATE TABLE `user_awards` (
  `userId` int(11) NOT NULL,
  `AwardTitle` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `vacancyId` int(11) NOT NULL,
  `vacancyTitle` varchar(500) NOT NULL,
  `Description` varchar(3000) DEFAULT NULL,
  `MinBudget` float DEFAULT NULL,
  `MaxBudget` float DEFAULT NULL,
  `Location` varchar(500) DEFAULT NULL,
  `UserId` int(11) NOT NULL,
  `CategoryId` varchar(500) NOT NULL,
  `VacancyType` varchar(100) NOT NULL,
  `pdate` date DEFAULT NULL,
  `edate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`vacancyId`, `vacancyTitle`, `Description`, `MinBudget`, `MaxBudget`, `Location`, `UserId`, `CategoryId`, `VacancyType`, `pdate`, `edate`) VALUES
(34, 'i want a build a home', 'i want a build a homei want a build a homei want a build a homei want a build a home', 7000, 10000, 'colombo', 27, 'Metal and Light Engineering', 'PartTime Job', '2019-02-21', '2019-03-14'),
(30, 'Need Experienced Software Engineer', 'Need a software Engenner.', 34000, 40000, 'galle', 27, 'Information Communication and Multimedia Technology', 'Tempory Job', NULL, NULL),
(29, 'Need Experienced Accountant', 'I need a Experienced Acountant to Esoft company.', 14000, 17000, 'Colombo', 26, 'fiat', 'Tempory Job', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workingxp`
--

CREATE TABLE `workingxp` (
  `WoXId` int(11) NOT NULL,
  `Company` varchar(1000) NOT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Location` varchar(500) DEFAULT NULL,
  `Description` varchar(3000) DEFAULT NULL,
  `UserId` int(11) NOT NULL,
  `JobTitle` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workingxp`
--

INSERT INTO `workingxp` (`WoXId`, `Company`, `StartDate`, `EndDate`, `Location`, `Description`, `UserId`, `JobTitle`) VALUES
(22, 'Slitt', '2018-09-09', '2018-12-12', 'Colombo', 'Training Network assistant', 26, 'Training Slitt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adcategory`
--
ALTER TABLE `adcategory`
  ADD PRIMARY KEY (`AdCategoryId`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `advertiestment`
--
ALTER TABLE `advertiestment`
  ADD PRIMARY KEY (`AdvId`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`AwardTitle`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `UserId_2` (`UserId`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`BidId`,`vacancyId`,`UserId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `vacancyId` (`vacancyId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`CerTitle`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`DegreeTitle`,`userId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `diploma`
--
ALTER TABLE `diploma`
  ADD PRIMARY KEY (`DipTitle`,`userId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`InsName`);

--
-- Indexes for table `jobtitle`
--
ALTER TABLE `jobtitle`
  ADD PRIMARY KEY (`JobTitleId`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `reporteduser`
--
ALTER TABLE `reporteduser`
  ADD PRIMARY KEY (`UserId1`,`userId2`),
  ADD KEY `userId2` (`userId2`);

--
-- Indexes for table `reportedvacancy`
--
ALTER TABLE `reportedvacancy`
  ADD PRIMARY KEY (`ReportedVacancyId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`SkillTitle`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`UserProId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `user_awards`
--
ALTER TABLE `user_awards`
  ADD PRIMARY KEY (`userId`,`AwardTitle`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`vacancyId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `workingxp`
--
ALTER TABLE `workingxp`
  ADD PRIMARY KEY (`WoXId`),
  ADD KEY `UserId` (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adcategory`
--
ALTER TABLE `adcategory`
  MODIFY `AdCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `advertiestment`
--
ALTER TABLE `advertiestment`
  MODIFY `AdvId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `BidId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `jobtitle`
--
ALTER TABLE `jobtitle`
  MODIFY `JobTitleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reportedvacancy`
--
ALTER TABLE `reportedvacancy`
  MODIFY `ReportedVacancyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `UserProId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `vacancyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `workingxp`
--
ALTER TABLE `workingxp`
  MODIFY `WoXId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
