-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 01:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shakticomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Adminid` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `PhoneNo` decimal(10,0) DEFAULT NULL,
  `Photo` varchar(500) DEFAULT NULL,
  `Regdate` datetime DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Passcode` varchar(20) DEFAULT NULL,
  `st` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Adminid`, `FirstName`, `LastName`, `Email`, `PhoneNo`, `Photo`, `Regdate`, `Username`, `Passcode`, `st`) VALUES
(1, 'varun', 'prajapati', 'varunprj1909@gmail.c', '9327293724', '../../images/admin4.jpg', '2022-02-23 14:17:50', 'varun', 'admin', 1),
(2, 'Raju', 'Solanki', 'raju@gamil.om', '939434292', '../../images/admin3.jpg', '2022-02-19 07:29:18', 'raju', 'admin', 1),
(3, 'Hiren', 'Gandhi', 'hirengandhi@gmail.co', '9999999999', '../../images/admin2.jpg', '2022-02-19 07:29:18', 'hiren', 'admin', 1),
(12, 'Pavan', 'Prajapati', 'pavan@gmail.com', '9329492934', '../../images/admin3.jpg', '2022-03-24 06:01:18', 'pavan', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `advice`
--

CREATE TABLE `advice` (
  `AdviceId` int(11) NOT NULL,
  `Technicianid` int(11) DEFAULT NULL,
  `Advice` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `BillId` int(11) NOT NULL,
  `ProblemId` int(11) DEFAULT NULL,
  `TechnicianId` int(11) DEFAULT NULL,
  `CustomerId` int(11) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`BillId`, `ProblemId`, `TechnicianId`, `CustomerId`, `Amount`, `Date`) VALUES
(1, 2, 1, 1, 2334, '2022-03-01'),
(2, 4, 1, 2, 2450, '2022-03-18'),
(3, 3, 1, 2, 1200, '2022-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `BrandId` int(11) NOT NULL,
  `BrandName` varchar(20) DEFAULT NULL,
  `BrandLogo` mediumtext DEFAULT NULL,
  `DOJ` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`BrandId`, `BrandName`, `BrandLogo`, `DOJ`) VALUES
(1, 'Samsung', '../../images/samsung.jpeg', '22-02-2022'),
(2, 'Dell', '../../images/dell1.jpg', '2022-02-22'),
(3, 'HP', '../../images/download.png', '24-02-2019'),
(4, 'asus', '../../images/asus.jpg', '19-09-2021');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryName`) VALUES
(1, 'Ram'),
(2, 'keyboard'),
(3, 'Refurbished computer'),
(4, 'Graphic Card');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Complaintid` int(11) NOT NULL,
  `Customerid` int(11) DEFAULT NULL,
  `Complaintdesc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Complaintid`, `Customerid`, `Complaintdesc`) VALUES
(1, 1, 'WE are having problem in screen setting and you man don\'t fix it.'),
(2, 2, 'wegfhgngb\r\n'),
(4, 1, 'wfdsgdgnfhgnmn\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Pincode` int(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Birthdate` text DEFAULT NULL,
  `Gender` varchar(5) DEFAULT NULL,
  `Phone` decimal(10,0) DEFAULT NULL,
  `Photo` mediumtext DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `st` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `FirstName`, `LastName`, `Address`, `Pincode`, `Email`, `Birthdate`, `Gender`, `Phone`, `Photo`, `Username`, `Password`, `st`) VALUES
(1, 'varun', 'Prajapati', 'sundaram nagar society,gotri ,vadodara', 390021, 'varun@gmail.com', '2000-09-19', 'male', '9327293723', '../../images/user1.jpg', 'varun', 'varun', '1'),
(2, 'varun', 'patel', 'Gotri Vadodara', 390021, 'varun@gmial.com', '2000-02-19 ', 'male', '3209430009', '../../images/user6.jpeg', 'varun123', 'varun123', '1'),
(3, 'varun', 'varun', 'cvarun', 2332, '3vdvs22@gmai.com', '2022-02-19 07:29:18', 'male', '9327293621', '../../images/user3.jpeg', 'varun456', 'varun456', '1'),
(4, 'raju', 'solanki', 'sama', 390008, 'raju@gmail.com', '2022-02-19 07:29:18', 'male', '9327293729', '../../images/user4.jpg', 'raju', 'user', '0');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MessageId` int(11) NOT NULL,
  `TechnicianId` int(11) DEFAULT NULL,
  `CustomerId` int(11) DEFAULT NULL,
  `CMessage` varchar(50) DEFAULT NULL,
  `TMessage` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MessageId`, `TechnicianId`, `CustomerId`, `CMessage`, `TMessage`, `Date`) VALUES
(49, 1, 1, 'hi', 'hello', '2022-04-12'),
(62, 1, 1, 'what can i get from you', 'hi we will contact you as soon as possible', '2022-04-12'),
(63, NULL, 1, 'what is the rate of hardware', NULL, '2022-04-12'),
(64, NULL, 1, 'hi', NULL, '2022-04-12'),
(65, NULL, 1, 'hi', NULL, '2022-04-12'),
(66, NULL, 1, 'hi', NULL, '2022-04-12'),
(67, NULL, 1, 'hi', NULL, '2022-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `ProblemId` int(11) NOT NULL,
  `ProblemDesc` mediumtext DEFAULT NULL,
  `Audio` varchar(200) DEFAULT NULL,
  `TechnicianId` int(11) DEFAULT NULL,
  `CustomerId` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`ProblemId`, `ProblemDesc`, `Audio`, `TechnicianId`, `CustomerId`, `Status`) VALUES
(1, 'When it comes to hardware, some techs may have trouble assessing what steps to take to figure out what’s wrong and how to repair it. Which component is having the issue? Should you just replace the component? Should you try to troubleshoot the software first? ', NULL, 1, 1, 3),
(2, 'hi i am having problems in the software like ms office\r\njust like windows', NULL, 1, 2, 3),
(3, 'Hi  I am having problem in the using wifi in my laptop', NULL, 1, 2, 1),
(4, 'Hi  I am having problem in the using wifi in my laptop', NULL, NULL, 2, NULL),
(5, 'fdklfjf', NULL, NULL, 1, NULL),
(29, 'hi i am having start up problem.', NULL, NULL, 1, NULL),
(32, 'efefjkegsrdthfjfhfdssgfdhghfjfjjghgfds', NULL, NULL, 1, NULL),
(33, NULL, '../../audio/68da1b63-f0ae-48e0-952d-e31c9b00f40d.mp3', 1, 1, 1),
(34, NULL, '../../audio/95db2ec6-3fdb-4d5d-a537-465f11bdc52a.mp3', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` int(11) NOT NULL,
  `ProductName` varchar(50) DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `BrandId` int(11) DEFAULT NULL,
  `BrandName` varchar(50) DEFAULT NULL,
  `Photo` mediumtext DEFAULT NULL,
  `DOJ` text DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `CategoryId`, `BrandId`, `BrandName`, `Photo`, `DOJ`, `Price`) VALUES
(1, 'DDR4 8 GB', 1, 1, 'Samsung', '../../images/ram.jpg', '2022-02-22 03:41:24', 2300),
(2, 'NP300E4Z', 3, 1, 'Samsung', '../../images/np300.jpg', '2022-02-22', 1200),
(5, 'keyboard', 2, 2, 'Dell', '../../images/keyboard.jpg', '2022-02-27', 1200),
(7, 'Hard Disk', 2, 2, 'Dell', '../../images/harddisk.jpg', '2022-02-28', 2700),
(8, 'Graphic Card', 4, 2, 'Dell', '../../images/graphic1.jpg', '2022-03-07', 4500),
(9, 'graphic card', 4, 1, 'dsdfd', '../../images/graphic2.jpg', '2022-03-07', 345),
(10, 'Mouse', 2, 3, 'HP', '../../images/mouse.jpg', '2022-03-25', 399);

-- --------------------------------------------------------

--
-- Table structure for table `recordedsoloution`
--

CREATE TABLE `recordedsoloution` (
  `SolutionId` int(11) NOT NULL,
  `TechnicianId` int(11) DEFAULT NULL,
  `ProblemId` int(11) DEFAULT NULL,
  `ProblemSol` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recordedsoloution`
--

INSERT INTO `recordedsoloution` (`SolutionId`, `TechnicianId`, `ProblemId`, `ProblemSol`) VALUES
(1, 1, 1, 'In this article we’ll go over how to troubleshoot common PC hardware issues (seven of them, to be ex'),
(2, 3, 2, 'just restart your pc/laptop');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `ReplyId` int(11) NOT NULL,
  `ContactId` int(11) NOT NULL,
  `Reply` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`ReplyId`, `ContactId`, `Reply`) VALUES
(1, 3, 'Hi'),
(2, 1, 'HI varun'),
(3, 1, 'trdtfyghj\r\n\r\n'),
(4, 1, 'okay I will check and inform you whenever i got th');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `Orderid` int(11) NOT NULL,
  `Customerid` int(11) DEFAULT NULL,
  `ProductId` int(11) NOT NULL,
  `Productname` varchar(50) DEFAULT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 1,
  `Deliveryadd` varchar(100) DEFAULT NULL,
  `Pincode` int(11) DEFAULT NULL,
  `Orderdate` text DEFAULT NULL,
  `Totalamount` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`Orderid`, `Customerid`, `ProductId`, `Productname`, `Quantity`, `Deliveryadd`, `Pincode`, `Orderdate`, `Totalamount`, `status`) VALUES
(95, 1, 1, 'DDR4 8 GB', 2, 'gotri ,vadodara', 390021, '2022-03-24 01:10:37pm', '4600', 0),
(96, 1, 8, 'Graphic Card', 3, 'gotri ,vadodara', 390021, '2022-03-24 01:10:37pm', '13500', 0),
(97, 1, 9, 'graphic card', 6, 'gotri ,vadodara', 390021, '2022-03-24 01:10:37pm', '2070', 0);

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `TechnicianId` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Pincode` int(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` decimal(10,0) DEFAULT NULL,
  `Photo` mediumtext DEFAULT NULL,
  `Profession` varchar(50) NOT NULL DEFAULT 'Hardware Tester & Hardware Manager',
  `Salary` int(10) NOT NULL,
  `DOJ` text DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `st` tinytext DEFAULT NULL,
  `Rating` int(11) NOT NULL DEFAULT 8
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`TechnicianId`, `FirstName`, `LastName`, `Address`, `Pincode`, `Email`, `Phone`, `Photo`, `Profession`, `Salary`, `DOJ`, `Username`, `Password`, `st`, `Rating`) VALUES
(1, 'VARUN', 'Prajapati ', 'VARUN', 390021, 'varun@gmai.com', '9327292723', '../../images/tech.jpg', 'Hardware Tester & Hardware Manager', 20000, '2022-02-21 09:54:52', 'varun', 'varun', '1', 8),
(2, 'varun', 'Prajapati', 'varun', 390021, 'varun@gmail.com', '1983293283', '../../images/user5.jpg', 'Hardware Tester & Hardware Manager', 13000, '2022-02-19 07:29:18', 'varun', 'varunprj', '0', 7),
(3, 'Rajendra', 'Solanki', 'New Sama', 390024, 'morningstar2325@gmail.com', '7383708633', '../../images/user3.jpeg', 'Hardware Tester & Hardware Manager', 13000, '2022-02-22 08:13:36', 'rajendra', 'rajendra', '1', 7),
(4, 'Rutvik', 'bhatt', 'new sama', 390008, 'rutvik2@gmail.co', '9239224928', '../../images/user4.jpg', 'Hardware Tester & Hardware Manager', 12000, '2022-02-19 07:29:18', 'rutvik', 'rutvik', '1', 6),
(5, 'Pavan', 'Patel', 'gotri vadodara', 390021, 'pavan@gmail.com', '9782345158', '../../images/user1.jpg', 'Hardware Tester & Operating System Installer', 13000, '2022-02-24 04:03:20', 'pavan', 'admin', '1', 7),
(6, 'Deepak', 'Patel', 'Gotri Vadodara', 390021, 'deepak@gmial.com', '9999999999', '../../images/user5.jpg', 'Software Installer & Developer', 13000, '2022-03-04', 'deepak', 'deepak', '1', 7),
(7, 'Devesh', 'Patel', 'alkapuri,vadodara', 390002, 'devesh@gmail.com', '9429459234', '../../images/user8.jpg', 'Delivery Boy', 14000, '2022-03-08', 'devesh', 'devesh', '1', 8);

-- --------------------------------------------------------

--
-- Table structure for table `t_contact`
--

CREATE TABLE `t_contact` (
  `ContactId` int(11) NOT NULL,
  `TechnicianId` int(10) DEFAULT NULL,
  `Query` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_contact`
--

INSERT INTO `t_contact` (`ContactId`, `TechnicianId`, `Query`) VALUES
(1, 1, 'I am having login Problem'),
(2, 1, 'hello'),
(3, 1, 'hello\r\n'),
(20, 1, ''),
(21, 1, ''),
(22, 1, ''),
(23, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `workreport`
--

CREATE TABLE `workreport` (
  `Workreportid` int(11) NOT NULL,
  `TechnicianId` int(11) DEFAULT NULL,
  `Workhours` text DEFAULT NULL,
  `Date` text DEFAULT NULL,
  `ProblemId` int(11) DEFAULT NULL,
  `Problemsol` varchar(50) DEFAULT '--------',
  `Audio` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workreport`
--

INSERT INTO `workreport` (`Workreportid`, `TechnicianId`, `Workhours`, `Date`, `ProblemId`, `Problemsol`, `Audio`) VALUES
(1, 5, '3', '19-02-2021', 1, 'Just Restart Your PC', NULL),
(2, 3, '1', '2022-02-26', 2, 'solution', NULL),
(3, 1, '3', '2022-03-09', 4, 'Just reset the network card is the solution of thi', NULL),
(41, 1, '4', '2022-04-04', 2, '-----------', '../../audio/2c3e9a9f-0e56-4615-9238-05d0c5cd5f1f.mp3'),
(42, 1, '4', '2022-04-04', 5, '---------', '../../audio/df0a5f53-b47e-43f5-bed1-026f72300fbb.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Adminid`);

--
-- Indexes for table `advice`
--
ALTER TABLE `advice`
  ADD PRIMARY KEY (`AdviceId`),
  ADD KEY `Technicianid` (`Technicianid`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`BillId`),
  ADD KEY `TechnicianId` (`TechnicianId`),
  ADD KEY `ProblemId` (`ProblemId`),
  ADD KEY `CustomerId` (`CustomerId`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BrandId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CustomerId` (`CustomerId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`Complaintid`),
  ADD KEY `Customerid` (`Customerid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`MessageId`),
  ADD KEY `TechnicianId` (`TechnicianId`),
  ADD KEY `CustomerId` (`CustomerId`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`ProblemId`),
  ADD KEY `TechnicianId` (`TechnicianId`),
  ADD KEY `CustomerId` (`CustomerId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `BrandId` (`BrandId`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `recordedsoloution`
--
ALTER TABLE `recordedsoloution`
  ADD PRIMARY KEY (`SolutionId`),
  ADD KEY `TechnicianId` (`TechnicianId`),
  ADD KEY `ProblemId` (`ProblemId`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`ReplyId`),
  ADD UNIQUE KEY `ReplyId` (`ReplyId`),
  ADD KEY `ContactId` (`ContactId`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`Orderid`),
  ADD KEY `Customerid` (`Customerid`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`TechnicianId`);

--
-- Indexes for table `t_contact`
--
ALTER TABLE `t_contact`
  ADD PRIMARY KEY (`ContactId`),
  ADD KEY `TechnicianId` (`TechnicianId`);

--
-- Indexes for table `workreport`
--
ALTER TABLE `workreport`
  ADD PRIMARY KEY (`Workreportid`),
  ADD KEY `ProblemId` (`ProblemId`),
  ADD KEY `TechnicianId` (`TechnicianId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `advice`
--
ALTER TABLE `advice`
  MODIFY `AdviceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `BillId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `BrandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Complaintid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MessageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `ProblemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recordedsoloution`
--
ALTER TABLE `recordedsoloution`
  MODIFY `SolutionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `ReplyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `Orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `TechnicianId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t_contact`
--
ALTER TABLE `t_contact`
  MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `workreport`
--
ALTER TABLE `workreport`
  MODIFY `Workreportid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advice`
--
ALTER TABLE `advice`
  ADD CONSTRAINT `advice_ibfk_1` FOREIGN KEY (`Technicianid`) REFERENCES `technician` (`TechnicianId`);

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`TechnicianId`) REFERENCES `technician` (`TechnicianId`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`ProblemId`) REFERENCES `problem` (`ProblemId`),
  ADD CONSTRAINT `bill_ibfk_3` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`);

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`Customerid`) REFERENCES `customer` (`CustomerId`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`TechnicianId`) REFERENCES `technician` (`TechnicianId`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`);

--
-- Constraints for table `problem`
--
ALTER TABLE `problem`
  ADD CONSTRAINT `problem_ibfk_1` FOREIGN KEY (`TechnicianId`) REFERENCES `technician` (`TechnicianId`),
  ADD CONSTRAINT `problem_ibfk_2` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`BrandId`) REFERENCES `brand` (`BrandId`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`CategoryId`);

--
-- Constraints for table `recordedsoloution`
--
ALTER TABLE `recordedsoloution`
  ADD CONSTRAINT `recordedsoloution_ibfk_1` FOREIGN KEY (`TechnicianId`) REFERENCES `technician` (`TechnicianId`),
  ADD CONSTRAINT `recordedsoloution_ibfk_2` FOREIGN KEY (`ProblemId`) REFERENCES `problem` (`ProblemId`);

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`ContactId`) REFERENCES `t_contact` (`ContactId`);

--
-- Constraints for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD CONSTRAINT `tblorder_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`);

--
-- Constraints for table `t_contact`
--
ALTER TABLE `t_contact`
  ADD CONSTRAINT `t_contact_ibfk_1` FOREIGN KEY (`TechnicianId`) REFERENCES `technician` (`TechnicianId`);

--
-- Constraints for table `workreport`
--
ALTER TABLE `workreport`
  ADD CONSTRAINT `workreport_ibfk_1` FOREIGN KEY (`ProblemId`) REFERENCES `problem` (`ProblemId`),
  ADD CONSTRAINT `workreport_ibfk_2` FOREIGN KEY (`TechnicianId`) REFERENCES `technician` (`TechnicianId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
