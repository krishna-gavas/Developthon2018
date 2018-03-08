-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2018 at 11:43 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `developthon`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `id` int(10) NOT NULL,
  `delivery_place` varchar(100) NOT NULL,
  `weight` int(10) NOT NULL,
  `gravida` int(11) NOT NULL,
  `mortality` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`id`, `delivery_place`, `weight`, `gravida`, `mortality`) VALUES
(0, 'Home', 12, 2, 'None'),
(789, 'Home', 5, 2, 'None'),
(999, 'Home', 54, 54, 'None'),
(4544, 'Home', 4, 4, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `engagement`
--

CREATE TABLE `engagement` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `high_risk` varchar(20) NOT NULL,
  `criteria` varchar(100) NOT NULL,
  `symptoms` varchar(200) NOT NULL,
  `time_spent` varchar(50) NOT NULL,
  `topic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engagement`
--

INSERT INTO `engagement` (`id`, `date`, `time`, `high_risk`, `criteria`, `symptoms`, `time_spent`, `topic`) VALUES
(6, '2018-02-03', '02:29:37am', 'yes', 'Below 40KG (Weight)', '						aa				\r\n											', '15 Mins', 'Registration with Anganwadi and Asha'),
(55, '2018-02-02', '10:49:25pm', 'yes', 'Below 40KG (Weight)', '										\r\n			4544								', '15 Mins', 'Registration with Anganwadi and Asha'),
(55, '2018-02-03', '01:43:54am', 'yes', 'Below 40KG (Weight)', '										\r\n											asd', '15 Mins', 'Registration with Anganwadi and Asha'),
(56, '2018-02-03', '01:43:30am', 'yes', 'Below 40KG (Weight)', '										\r\n		54454\r\n\r\n									', '15 Mins', 'Registration with Anganwadi and Asha'),
(102, '2018-02-03', '02:31:38am', 'yes', 'Below 40KG (Weight)', '										\r\n											', '15 Mins', 'Registration with Anganwadi and Asha'),
(544, '2018-02-03', '10:02:45am', 'yes', 'Below 40KG (Weight)', '										\r\n											', '15 Mins', 'Registration with Anganwadi and Asha'),
(545, '2018-02-03', '09:58:33am', 'yes', 'Below 40KG (Weight)', '						544\r\n\r\n				\r\n											', '15 Mins', 'Registration with Anganwadi and Asha'),
(777, '2018-02-03', '03:13:19am', 'yes', 'Below 40KG (Weight)', '										\r\n											', '15 Mins', 'Registration with Anganwadi and Asha'),
(888, '2018-02-03', '05:39:12am', 'yes', 'Below 40KG (Weight)', '				asdad						\r\n											', '15 Mins', 'Registration with Anganwadi and Asha'),
(4544, '2018-02-03', '05:29:04am', 'yes', 'Below 40KG (Weight)', '										\r\n											', '15 Mins', 'Registration with Anganwadi and Asha');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `clarity` int(11) NOT NULL,
  `usefullness` int(11) NOT NULL,
  `understanding` int(11) NOT NULL,
  `know_more` char(3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `clarity`, `usefullness`, `understanding`, `know_more`, `date`) VALUES
(6, 1, 1, 1, 'No', '2018-02-03'),
(55, 1, 1, 1, 'No', '2018-02-03'),
(56, 1, 1, 1, 'No', '2018-02-03'),
(102, 1, 1, 1, 'No', '2018-02-03'),
(544, 1, 1, 1, 'No', '2018-02-03'),
(545, 1, 1, 1, 'No', '2018-02-03'),
(777, 5, 1, 1, 'No', '2018-02-03'),
(888, 1, 1, 1, 'No', '2018-02-03'),
(999, 1, 1, 1, 'No', '2018-02-02'),
(4544, 1, 1, 1, 'No', '2018-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `email`, `password`) VALUES
(545, '', '$2y$10$Zloex07klN6XP5.HiSyFfuPMgDcTiBBxrfkFOQot083b3rx/5oJKu'),
(0, 'admin@admin.com', '$2y$10$OG1mL/9LV9dSFeS/FyDfEudEhNztEkT7ed4cDvnAhDXFXd1hpXxTW'),
(78, 'amar@amar.com', '$2y$10$dfCRXsb6zeAOXa2/beUz5.WpLhS4oZlP/CmdsfPpA6uvDrr5ff3EG'),
(54, 'hddh@sjsd.com', '$2y$10$A8vXh9SRi/otnFALIas1HemwIV62DOeLyl8Hrh4.VVwvAhW7gAX3m');

-- --------------------------------------------------------

--
-- Table structure for table `medical_info`
--

CREATE TABLE `medical_info` (
  `id` int(11) NOT NULL,
  `hb` float NOT NULL,
  `bp` varchar(200) NOT NULL,
  `weight` int(11) NOT NULL,
  `urine_test` varchar(3) NOT NULL,
  `first_scan` date NOT NULL,
  `sec_scan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_info`
--

INSERT INTO `medical_info` (`id`, `hb`, `bp`, `weight`, `urine_test`, `first_scan`, `sec_scan`) VALUES
(8, 45, '4545', 54, 'yes', '0005-05-05', '5555-05-05'),
(89, 45, '45', 54, 'yes', '0554-04-05', '0054-04-05'),
(102, 15, '40', 42, 'yes', '2018-02-23', '2018-02-12'),
(777, 45, '54', 55, 'yes', '2018-02-14', '2018-02-13'),
(789, 5454, '454', 454, 'yes', '0045-05-04', '0045-04-05'),
(999, 454, '4545', 45, 'yes', '5454-04-05', '0054-04-05'),
(4544, 454, '5', 65, '', '5214-04-05', '2541-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `other_info`
--

CREATE TABLE `other_info` (
  `id` int(11) NOT NULL,
  `location_lat` float NOT NULL,
  `location_long` float NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_info`
--

INSERT INTO `other_info` (`id`, `location_lat`, `location_long`, `user_name`, `remarks`) VALUES
(4544, 6556, 6556, 'Amar', '                                          '),
(888, 21, 5454, 'Amar', '                                          '),
(544, 15.359, 75.0518, 'Amar', '                                          ');

-- --------------------------------------------------------

--
-- Table structure for table `pregnant_details`
--

CREATE TABLE `pregnant_details` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `husband_name` varchar(200) NOT NULL,
  `kycimg` varchar(200) NOT NULL,
  `dod` date NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `image` varchar(200) NOT NULL,
  `taluka` varchar(25) NOT NULL,
  `cluster` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pregnant_details`
--

INSERT INTO `pregnant_details` (`ID`, `full_name`, `husband_name`, `kycimg`, `dod`, `age`, `phone`, `image`, `taluka`, `cluster`, `village`) VALUES
(7, '', '', '../images/kycimg/7.jpg', '0006-06-06', 6, '7406697321', '../images/image/7.jpg', '', '', ''),
(8, 'ad', 'asd', '../images/kycimg/8.jpg', '0002-02-05', 2, '', '../images/image/8.jpg', '', '', ''),
(55, 'Hajs', 'Hssh', '../images/kycimg/55.jpg', '2018-02-02', 8, '67', '../images/image/55.jpg', 'Shirahatti', 'Shirahatti', 'Mundaragi'),
(56, 'Hajs', 'Hssh', '../images/kycimg/56.jpg', '2018-02-02', 8, '67', '../images/image/56.jpg', 'Shirahatti', 'Shirahatti', 'Mundaragi'),
(89, 'ad', 'asd', '../images/kycimg/89.jpg', '0002-02-05', 2, '', '../images/image/89.jpg', '', '', ''),
(102, 'Hajs', 'Hssh', '../images/kycimg/102.jpg', '2018-02-17', 45, '8987373', '../images/image/102.jpg', 'Gadag', 'Shirahatti', 'Mundaragi'),
(544, '', '', '../images/kycimg/544.jpg', '0005-05-05', 544, '', '../images/image/544.jpg', '', '', ''),
(545, 'asd', 'asd', '../images/kycimg/6.jpg', '0006-06-06', 6, '', '../images/image/6.jpg', '', '', ''),
(588, 'abhishek', 'gghh', '../images/kycimg/588.jpg', '2018-02-03', 22, '9986171454', '../images/image/588.jpg', 'Shirahatti', 'Dambala', 'Benakoppa'),
(777, 'Katrina Lad', 'Abhishek Lad', '../images/kycimg/777.jpg', '2018-02-03', 22, '68685547', '../images/image/777.jpg', 'Gadag', 'Gadag', 'Shirahatti'),
(789, 'sdas', 'dasd', '../images/kycimg/789.jpg', '0006-06-06', 54, '7406697321', '../images/image/789.jpg', '', '', ''),
(888, '8', '8', '../images/kycimg/888.jpg', '0055-05-05', 5, '5', '../images/image/888.jpg', '', '', ''),
(999, 'asd', 'ads', '../images/kycimg/999.jpg', '0055-05-05', 5, '555', '../images/image/999.jpg', 'Gadag', 'Shirahatti', 'Gadag'),
(4544, 'asdasd', 'adasd', '../images/kycimg/4544.jpg', '0005-05-05', 544, '', '../images/image/4544.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `village` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `full_name`, `dob`, `gender`, `phone`, `village`, `photo`, `address`) VALUES
(54, 'Hdhd', '2018-02-02', '', '5679', 'Nagasamudra', '../images/54.jpg', 'Hdjdfj'),
(78, 'Amar', '0005-05-05', 'M', '555', 'Nagasamudra', '../images/user/78.jpg', 'asdas'),
(545, '', '5555-05-05', '', '', '', '../images/user/545.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `vacci_details`
--

CREATE TABLE `vacci_details` (
  `id` int(11) NOT NULL,
  `vacci3` int(11) NOT NULL,
  `vacci4` int(11) NOT NULL,
  `vacci5` int(11) NOT NULL,
  `inje_taken` varchar(200) NOT NULL,
  `fid` date NOT NULL,
  `sid` date NOT NULL,
  `boost` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacci_details`
--

INSERT INTO `vacci_details` (`id`, `vacci3`, `vacci4`, `vacci5`, `inje_taken`, `fid`, `sid`, `boost`) VALUES
(102, 12, 11, 10, 'yes', '2018-02-28', '2018-02-24', 'yes'),
(125, 12, 12, 12, 'yes', '2018-02-15', '2018-02-15', 'no'),
(777, 4, 5, 4, 'yes', '2018-02-13', '2018-02-06', 'yes'),
(789, 545, 54, 5445, 'yes', '2018-02-03', '2018-02-04', ''),
(999, 55, 55, 55, 'yes', '0066-06-06', '0066-06-06', 'yes'),
(4544, 5, 5, 5, '', '5555-05-05', '5555-05-05', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engagement`
--
ALTER TABLE `engagement`
  ADD PRIMARY KEY (`id`,`date`) USING BTREE;

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`,`date`) USING BTREE;

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `medical_info`
--
ALTER TABLE `medical_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pregnant_details`
--
ALTER TABLE `pregnant_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacci_details`
--
ALTER TABLE `vacci_details`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
