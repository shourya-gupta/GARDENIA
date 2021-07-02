--
-- Database: `gardenia`
--

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `name` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `landmark` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `descrip` varchar(250) NOT NULL,
  `date1` varchar(250) NOT NULL,
  `time1` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`descrip`, `date1`, `time1`) VALUES
('', '2021-07-09', '2'),
('i am sad', '2021-08-05', '3'),
('12', '2021-07-21', '1');

-- --------------------------------------------------------

--
-- Table structure for table `plant_data`
--

CREATE TABLE `plant_data` (
  `plant_id` varchar(5) NOT NULL,
  `plant_name` varchar(20) DEFAULT NULL,
  `area_req` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant_data`
--

INSERT INTO `plant_data` (`plant_id`, `plant_name`, `area_req`) VALUES
('P1', 'MANGO', '100.00'),
('P10', 'ORANGES', '36.00'),
('P11', 'LEMONS', '15.00'),
('P12', 'MINT', '0.25'),
('P13', 'CURRY LEAVES', '0.25'),
('P14', 'NEEM', '0.50'),
('P15', 'TOMATO', '2.00'),
('P2', 'APPLE', '16.00'),
('P3', 'BANANA', '3.24'),
('P4', 'PAPAYA', '3.24'),
('P5', 'ROSE', '1.00'),
('P6', 'TULSI', '0.50'),
('P7', 'MARIGOLD', '0.50'),
('P8', 'GUAVA', '36.00'),
('P9', 'POMEGRANATE', '30.00');

-- --------------------------------------------------------

--
-- Table structure for table `plant_soil_region`
--

CREATE TABLE `plant_soil_region` (
  `SL_NO` int(11) NOT NULL,
  `plant_id` varchar(5) DEFAULT NULL,
  `soil_id` varchar(5) DEFAULT NULL,
  `region_id` varchar(5) DEFAULT NULL,
  `SELECTED_PLANTS` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant_soil_region`
--

INSERT INTO `plant_soil_region` (`SL_NO`, `plant_id`, `soil_id`, `region_id`, `SELECTED_PLANTS`) VALUES
(1, 'P1', 'S1', 'R2', 0),
(2, 'P1', 'S1', 'R7', 0),
(3, 'P1', 'S4', 'R1', 0),
(4, 'P1', 'S4', 'R2', 0),
(5, 'P1', 'S4', 'R6', 0),
(6, 'P1', 'S4', 'R7', 0),
(7, 'P1', 'S7', 'R1', 0),
(8, 'P1', 'S7', 'R2', 0),
(9, 'P1', 'S7', 'R3', 0),
(10, 'P1', 'S7', 'R6', 0),
(11, 'P1', 'S7', 'R7', 0),
(12, 'P1', 'S8', 'R3', 0),
(13, 'P1', 'S8', 'R5', 0),
(14, 'P1', 'S8', 'R4', 0),
(15, 'P2', 'S7', 'R1', 0),
(16, 'P2', 'S7', 'R2', 0),
(17, 'P2', 'S7', 'R6', 0),
(18, 'P2', 'S7', 'R3', 0),
(19, 'P3', 'S7', 'R3', 0),
(20, 'P3', 'S7', 'R1', 0),
(21, 'P3', 'S7', 'R2', 0),
(22, 'P3', 'S7', 'R6', 0),
(23, 'P4', 'S7', 'R3', 0),
(24, 'P4', 'S7', 'R1', 0),
(25, 'P4', 'S7', 'R2', 0),
(26, 'P4', 'S7', 'R6', 0),
(27, 'P5', 'S4', 'R1', 0),
(28, 'P5', 'S4', 'R2', 0),
(29, 'P5', 'S4', 'R6', 0),
(30, 'P5', 'S4', 'R7', 0),
(31, 'P5', 'S7', 'R1', 0),
(32, 'P5', 'S7', 'R2', 0),
(33, 'P5', 'S7', 'R3', 0),
(34, 'P5', 'S7', 'R6', 0),
(35, 'P6', 'S7', 'R1', 0),
(36, 'P6', 'S7', 'R2', 0),
(37, 'P6', 'S7', 'R3', 0),
(38, 'P6', 'S7', 'R6', 0),
(39, 'P7', 'S7', 'R1', 0),
(40, 'P7', 'S7', 'R2', 0),
(41, 'P7', 'S7', 'R3', 0),
(42, 'P7', 'S7', 'R6', 0),
(43, 'P7', 'S4', 'R1', 0),
(44, 'P7', 'S4', 'R2', 0),
(45, 'P7', 'S4', 'R6', 0),
(46, 'P7', 'S4', 'R7', 0),
(47, 'P8', 'S3', 'R5', 0),
(48, 'P8', 'S4', 'R7', 0),
(49, 'P8', 'S7', 'R7', 0),
(50, 'P8', 'S4', 'R1', 0),
(51, 'P8', 'S7', 'R1', 0),
(52, 'P8', 'S4', 'R2', 0),
(53, 'P8', 'S7', 'R2', 0),
(54, 'P8', 'S4', 'R6', 0),
(55, 'P8', 'S7', 'R6', 0),
(56, 'P9', 'S7', 'R1', 0),
(57, 'P9', 'S7', 'R2', 0),
(58, 'P9', 'S7', 'R3', 0),
(59, 'P9', 'S7', 'R6', 0),
(60, 'P10', 'S5', 'R7', 0),
(61, 'P10', 'S5', 'R3', 0),
(62, 'P10', 'S3', 'R5', 0),
(63, 'P10', 'S3', 'R7', 0),
(64, 'P10', 'S7', 'R2', 0),
(65, 'P10', 'S7', 'R7', 0),
(66, 'P10', 'S1', 'R2', 0),
(67, 'P10', 'S1', 'R7', 0),
(68, 'P10', 'S4', 'R7', 0),
(69, 'P10', 'S4', 'R6', 0),
(70, 'P10', 'S2', 'R5', 0),
(71, 'P10', 'S2', 'R7', 0),
(72, 'P11', 'S5', 'R7', 0),
(73, 'P11', 'S5', 'R3', 0),
(74, 'P11', 'S3', 'R5', 0),
(75, 'P11', 'S3', 'R7', 0),
(76, 'P11', 'S7', 'R2', 0),
(77, 'P11', 'S7', 'R7', 0),
(78, 'P11', 'S1', 'R2', 0),
(79, 'P11', 'S1', 'R7', 0),
(80, 'P11', 'S4', 'R7', 0),
(81, 'P11', 'S4', 'R6', 0),
(82, 'P11', 'S2', 'R5', 0),
(83, 'P11', 'S2', 'R7', 0),
(84, 'P12', 'S1', 'R2', 0),
(85, 'P12', 'S1', 'R4', 0),
(86, 'P12', 'S1', 'R7', 0),
(87, 'P12', 'S4', 'R1', 0),
(88, 'P12', 'S4', 'R2', 0),
(89, 'P12', 'S4', 'R6', 0),
(90, 'P12', 'S4', 'R7', 0),
(91, 'P12', 'S7', 'R1', 0),
(92, 'P12', 'S7', 'R2', 0),
(93, 'P12', 'S7', 'R6', 0),
(94, 'P12', 'S7', 'R7', 0),
(95, 'P13', 'S1', 'R2', 0),
(96, 'P13', 'S1', 'R4', 0),
(97, 'P13', 'S1', 'R7', 0),
(98, 'P13', 'S4', 'R1', 0),
(99, 'P13', 'S4', 'R2', 0),
(100, 'P13', 'S4', 'R6', 0),
(101, 'P13', 'S4', 'R7', 0),
(102, 'P13', 'S7', 'R1', 0),
(103, 'P13', 'S7', 'R2', 0),
(104, 'P13', 'S7', 'R6', 0),
(105, 'P13', 'S7', 'R7', 0),
(106, 'P14', 'S5', 'R3', 0),
(107, 'P14', 'S5', 'R7', 0),
(108, 'P14', 'S3', 'R7', 0),
(109, 'P14', 'S3', 'R5', 0),
(110, 'P14', 'S1', 'R2', 0),
(111, 'P14', 'S1', 'R4', 0),
(112, 'P14', 'S1', 'R7', 0),
(113, 'P15', 'S1', 'R2', 0),
(114, 'P15', 'S1', 'R4', 0),
(115, 'P15', 'S1', 'R7', 0),
(116, 'P15', 'S2', 'R3', 0),
(117, 'P15', 'S2', 'R5', 0),
(118, 'P15', 'S2', 'R7', 0),
(119, 'P15', 'S3', 'R5', 0),
(120, 'P15', 'S3', 'R7', 0),
(121, 'P13', 'S7', 'R1', 0),
(122, 'P13', 'S7', 'R2', 0),
(123, 'P13', 'S7', 'R6', 0),
(124, 'P13', 'S7', 'R7', 0),
(125, 'P15', 'S8', 'R5', 0),
(126, 'P15', 'S8', 'R3', 0),
(127, 'P15', 'S8', 'R4', 0),
(128, 'P15', 'S8', 'R5', 0),
(129, 'P15', 'S6', 'R1', 0),
(130, 'P15', 'S6', 'R5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `region_data`
--

CREATE TABLE `region_data` (
  `region_id` varchar(5) NOT NULL,
  `region` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region_data`
--

INSERT INTO `region_data` (`region_id`, `region`) VALUES
('R1', 'DELHI'),
('R2', 'MUMBAI'),
('R3', 'BANGALURU'),
('R4', 'KOLKATA'),
('R5', 'PUNE'),
('R6', 'CHANDIGARH'),
('R7', 'NAGPUR');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `full_name` varchar(250) NOT NULL,
  `mob_no` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`full_name`, `mob_no`, `address`, `email`, `pass`) VALUES
('Ridhika', '6003501683', 'Madhya Pradesh', 'ridhika@gmail.com', 'Ridhi@123'),
('Sunrit', '9876767676', 'Assam', 'sunrit@gmail.com', 'Sunrit@1234'),
('Ritik vashist', '9911330906', 'XYZ', 'ritikvashist0109@gmail.com', 'R123123v@'),
('Ritik vashist', '9911330906', 'XYZ', 'ritikvashist0109@gmail.com', 'R123123v@'),
('Ritik vashist', '9911330906', 'XYZ', 'ritikvashist0109@gmail.com', 'R123123v@'),
('Rishabh', '9911330906', 'XYZ', 'r123@gmail.com', 'R123123v@'),
('Ritik vashist', '9911330906', 'XYZ', 'rishabhvashist0109@gmail.com', 'R123123v@'),
('Ritik vashist', '9911330906', 'XYZ', 'rishabhvashist0109@gmail.com', 'R123123v@'),
('Ritik vashist', '9911330906', 'XYZ', 'rishabhvashist0109@gmail.com', 'R123123v@'),
('Ritik vashist', '9911330906', 'XYZ', '0109@gmail.com', 'R123123v@'),
('Ritik vashist', '9911330906', 'XYZ', '109@gmail.com', 'R123123v@');

-- --------------------------------------------------------

--
-- Table structure for table `soil_data`
--

CREATE TABLE `soil_data` (
  `soil_id` varchar(5) NOT NULL,
  `soil_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soil_data`
--

INSERT INTO `soil_data` (`soil_id`, `soil_name`) VALUES
('S1', 'ALLUVIAL'),
('S2', 'RED'),
('S3', 'BLACK'),
('S4', 'SANDY'),
('S5', 'CLAYEY'),
('S6', 'SILTY'),
('S7', 'LOAMY'),
('S8', 'LATERITE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plant_data`
--
ALTER TABLE `plant_data`
  ADD PRIMARY KEY (`plant_id`);

--
-- Indexes for table `plant_soil_region`
--
ALTER TABLE `plant_soil_region`
  ADD PRIMARY KEY (`SL_NO`),
  ADD KEY `plant_id` (`plant_id`),
  ADD KEY `soil_id` (`soil_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `region_data`
--
ALTER TABLE `region_data`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `soil_data`
--
ALTER TABLE `soil_data`
  ADD PRIMARY KEY (`soil_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plant_soil_region`
--
ALTER TABLE `plant_soil_region`
  ADD CONSTRAINT `plant_soil_region_ibfk_1` FOREIGN KEY (`plant_id`) REFERENCES `plant_data` (`plant_id`),
  ADD CONSTRAINT `plant_soil_region_ibfk_2` FOREIGN KEY (`soil_id`) REFERENCES `soil_data` (`soil_id`),
  ADD CONSTRAINT `plant_soil_region_ibfk_3` FOREIGN KEY (`region_id`) REFERENCES `region_data` (`region_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
