SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `itvet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(7) NOT NULL,
  `session` varchar(9) DEFAULT NULL,
  `campus` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `father_name` text DEFAULT NULL,
  `mother_name` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `shift` text DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `parent_phone_1` text DEFAULT NULL,
  `parent_phone_2` text DEFAULT NULL,
  `guardian_name` text DEFAULT NULL,
  `guardian_rel` text DEFAULT NULL,
  `std_phone` text DEFAULT NULL,
  `blood_group` varchar(20) DEFAULT NULL,
  `ssc_roll` int(6) DEFAULT NULL,
  `ssc_reg` int(10) DEFAULT NULL,
  `ssc_board` text DEFAULT NULL,
  `ssc_dpt` text DEFAULT NULL,
  `ssc_gpa` float DEFAULT NULL,
  `ssc_pass` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `session`, `campus`, `department`, `name`, `father_name`, `mother_name`, `photo`, `shift`, `date_of_birth`, `parent_phone_1`, `parent_phone_2`, `guardian_name`, `guardian_rel`, `std_phone`, `blood_group`, `ssc_roll`, `ssc_reg`, `ssc_board`, `ssc_dpt`, `ssc_gpa`, `ssc_pass`) VALUES
(3536409, '2022-2023', 'KW', 'Computer', 'MD Tamim Iqbal', 'Ohab', 'Firoza', '', 'morning', '2022-12-22', '01772308710', '01772308710', 'NA', '', '01772308710', 'O Positive', 202045, 175148484, 'Mymensingh', 'Commerce_BS', 2.35, 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);
COMMIT;

