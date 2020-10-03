-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 06:46 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leads`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor_reg`
--

CREATE TABLE `tbl_doctor_reg` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(100) NOT NULL,
  `doc_address` varchar(500) NOT NULL,
  `doc_email` varchar(100) NOT NULL,
  `doc_contact` bigint(20) NOT NULL,
  `doc_regNo` int(11) NOT NULL,
  `doc_regyear` int(11) NOT NULL,
  `doc_quali` varchar(250) NOT NULL,
  `doc_spec` varchar(100) NOT NULL,
  `doc_exp` varchar(10) NOT NULL,
  `doc_about` varchar(300) NOT NULL,
  `doc_image` varchar(100) DEFAULT NULL,
  `doc_username` varchar(100) NOT NULL,
  `doc_password` varchar(100) NOT NULL,
  `doc_regOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `doc_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_doctor_reg`
--

INSERT INTO `tbl_doctor_reg` (`doc_id`, `doc_name`, `doc_address`, `doc_email`, `doc_contact`, `doc_regNo`, `doc_regyear`, `doc_quali`, `doc_spec`, `doc_exp`, `doc_about`, `doc_image`, `doc_username`, `doc_password`, `doc_regOn`, `doc_status`) VALUES
(1, 'xxx', 'xxxxx', 'aa@gmail.com', 8898984834, 22, 233, 'fgfdgs', 'sfgsf', '43', 'xxxxx', NULL, '43', '123', '2018-02-16 09:01:38', 1),
(2, 'loremLikpsm', 'dskuhfubikgasfd sdifds hsihis', 'w@gmail.com', 8898984834, 22, 233, 'fgfdgs', 'sfgsf', '43', 'iuhhh uihiuiu huio hiouhuionkjnk njklnkl', NULL, '43', 'iuhhh uihiuiu huio hiouhuionkjnk njklnkl', '2018-03-23 08:12:48', 0),
(3, 'Lorem lipsm', 'likuiohb iuyg iyiyu', 'aasd@gmail.com', 8898984834, 22, 233, 'fgfdgs', 'sfgsf', '43', 'uiyyguihiuybre', '1521792869boy-1.jpg', '43', 'uiyyguihiuybre', '2018-03-23 08:14:29', 0),
(4, 'dd', 'dd', 'dd@gmail.com', 213213, 123123, 1111, '21312', '2132', '32', '1213', '15225189052 year.jpg', 'dd', 'dd', '2018-03-31 17:55:05', 1),
(5, 'ssss', 'jiiyiy', 'asd@gmail.com', 6969696969, 124578, 2011, 'degree', 'vetinary', '45', 'nhjfiugkhn', NULL, 'doc123', 'doc123', '2018-04-08 21:55:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doc_images`
--

CREATE TABLE `tbl_doc_images` (
  `img_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `img_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_farmer_reg`
--

CREATE TABLE `tbl_farmer_reg` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Quali` varchar(50) NOT NULL,
  `Spce` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `About` varchar(500) NOT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Redate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_farmer_reg`
--

INSERT INTO `tbl_farmer_reg` (`id`, `Name`, `Address`, `Email`, `Contact`, `Quali`, `Spce`, `Area`, `About`, `dob`, `sex`, `photo`, `Username`, `Password`, `Redate`, `status`) VALUES
(1, 'xxx', 'xxxxxxxxxxxx', 'aa@gmail.com', 8898984834, 'fgfdgs', 'sfgsf', '43', 'xxxxxxxxxxxx', NULL, NULL, NULL, '43', 'xxx', '2018-02-17 09:03:13', 1),
(2, 'Lorem lipsm', 'Lorem lipsmv\r\nLorem lipsm\r\nLorem lipsm\r\n\r\nLorem lipsm', 'aasd@gmail.com', 8898984834, 'fgfdgs', 'sfgsf', '43', 'Lorem lipsmLorem lipsmLorem lipsmLorem lipsmLorem lipsm', '2003-01-02', 'Male', '1521792321atr.jpg', '43', 'Lorem lipsmLorem lipsmLorem lipsmLorem lipsmLorem lipsm', '2018-03-23 08:05:21', 1),
(3, 'tgest', 'rgijhoiu', 'aa@gmail.com', 8898984834, 'fgfdgs', 'sfgsf', '43', '.,kln dkjgn kjdn f lfgn dxlnlk', '1980-12-21', 'Male', '1521793214boy-2.jpg', 'test', 'test', '2018-03-23 08:20:14', 1),
(4, 'ff', 'ff', 'ff@gmail.com', 324, '234', '23432', '234', '324', '2018-03-31', 'Male', '1522519084Sus_scrofa_-Whipsnade_Zoo,_Bedfordshire,_England_-adult_female-8a.jpg', 'ff', 'ff', '2018-03-31 17:58:04', 1),
(5, '1', '1', '1@gmail.com', 123123213, 'qw', 'qw', '12', '12', '2018-04-27', 'Male', '1523120311carrots.jpg', '1', '1', '2018-04-07 16:58:31', 1),
(6, 'devu', 'adddr', 'dev@gmail.com', 9699856984, 'qual', 'spe', 'tot', 'abt', '2018-04-12', 'Male', '1523224197Devipass.jpg', 'usr', 'pass', '2018-04-08 21:49:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallary`
--

CREATE TABLE `tbl_gallary` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `caption` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallary`
--

INSERT INTO `tbl_gallary` (`id`, `userId`, `caption`, `description`, `image`, `status`) VALUES
(1, 1, 'my gallary', 'lorem lipsm', '1522135919br.jpg', 0),
(3, 1, 'test', 'vnn n gfnf', '1522136841bt.jpg', 0),
(4, 1, 'fhhd', 'gfdhgdhgf', '1522137046chr.jpg', 0),
(5, 4, '1', 'sasdsad', '15225194600tbjUoN.jpg', 0),
(6, 4, '2', 'ewrewr', '15225194704674909926_9b81df35c1.jpg', 0),
(7, 4, '6', 'sdfds', NULL, 0),
(8, 5, 'ddd', 'asdsad', '1523120381chilli.jpg', 0),
(9, 6, 'cap', 'des', '1523224303DS-190951.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ActRate` float NOT NULL,
  `DisRate` float NOT NULL,
  `Warranty` varchar(100) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `AddedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `UserId`, `ProductName`, `ActRate`, `DisRate`, `Warranty`, `Description`, `image`, `AddedOn`, `status`) VALUES
(2, 1, 'Book', 20, 15, '1', 'gyusgiuyssfdskfds skghs hfdjk jgshhgjkfdshdfkjs fkds gskdfu hgfdkh skg hkfd hsh gfdsg shkudf', '15192949116.png', '2018-02-22 10:21:51', 1),
(3, 5, 'dsfds', 43, 43, '4', 'rewr', '1523120436greenblender.jpg', '2018-04-07 17:00:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_remedy`
--

CREATE TABLE `tbl_remedy` (
  `id` int(11) NOT NULL,
  `DoctorId` int(11) NOT NULL,
  `Issue` varchar(200) DEFAULT NULL,
  `Solution` varchar(500) DEFAULT NULL,
  `DoctorDescription` varchar(500) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `regOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `docName` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_remedy`
--

INSERT INTO `tbl_remedy` (`id`, `DoctorId`, `Issue`, `Solution`, `DoctorDescription`, `image`, `regOn`, `docName`, `status`) VALUES
(1, 1, 'rtwretr', 'rewretewtrew', 'wtetwrewtwtrwre', '15192835153.jpg', '2018-02-22 07:11:55', NULL, 0),
(3, 1, 'dfds', 'sdsf', 'dfdsfafdsafds', '1522137507bnr.jpg', '2018-03-27 07:58:27', 'xxx', 0),
(4, 4, '1', 'sdfdsf', 'sdfdsfds', '1522519562banana_root_borer01.jpg', '2018-03-31 18:06:02', 'dd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ttbl_desease`
--

CREATE TABLE `ttbl_desease` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `Desease` varchar(100) NOT NULL,
  `AffectedArea` varchar(100) NOT NULL,
  `symtm` varchar(100) NOT NULL,
  `Doctor` varchar(50) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `thumb` varchar(100) DEFAULT NULL,
  `doctorFeedback` varchar(1000) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttbl_desease`
--

INSERT INTO `ttbl_desease` (`id`, `userid`, `Desease`, `AffectedArea`, `symtm`, `Doctor`, `Description`, `image`, `thumb`, `doctorFeedback`, `date`, `status`) VALUES
(12, 1, 'hgfdh', 'dghd', 'ghdghd', '1', 'fdgfdsgsdfs', '15192011755.png', '15192011755.png', 'fdssafdafda dsfafafd fgssa fsgfasf rdsafs', '2018-02-21 08:19:35', 1),
(10, 1, 'rgrgs', 'sgf', 'sgfgs', '1', 'sfgfsgfd', '15191979744.png', '15191979744.png', NULL, '2018-02-21 07:26:14', 0),
(13, 1, 'frfff', 'dssdfds', 'dsdsfsdfddsfdsfds', '1', 'sdfdssdfdsdsf', '15195441672.jpg', '15195441672.jpg', 'fhshfidhfia iuufguifafiuas', '2018-02-25 07:36:07', 1),
(14, 5, 'ddd', 'ddd', 'dd', '1', 'dsad', '1523120418onion.JPG', '1523120418onion.JPG', NULL, '2018-04-07 17:00:18', 0),
(15, 5, 'asd', 'asd', 'asd', '4', 'asd', '1523120518potato.jpg', '1523120518potato.jpg', 'adasddasdasd', '2018-04-07 17:01:58', 1),
(16, 6, 'dis', 'affare', 'sym', '1', 'desc', '1523224354Capture.PNG', '1523224354Capture.PNG', NULL, '2018-04-08 21:52:34', 0),
(17, 6, 'chori', 'jycguid', 'dffdf', '5', 'dsfdsd', '1523224698Capture2.PNG', '1523224698Capture2.PNG', 'fxxfgdbcxdshhdffv\r\nsorry', '2018-04-08 21:58:18', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_doctor_reg`
--
ALTER TABLE `tbl_doctor_reg`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `tbl_doc_images`
--
ALTER TABLE `tbl_doc_images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tbl_farmer_reg`
--
ALTER TABLE `tbl_farmer_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_remedy`
--
ALTER TABLE `tbl_remedy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ttbl_desease`
--
ALTER TABLE `ttbl_desease`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_doctor_reg`
--
ALTER TABLE `tbl_doctor_reg`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_doc_images`
--
ALTER TABLE `tbl_doc_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_farmer_reg`
--
ALTER TABLE `tbl_farmer_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_remedy`
--
ALTER TABLE `tbl_remedy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ttbl_desease`
--
ALTER TABLE `ttbl_desease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
