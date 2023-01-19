-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 06:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinityconsultancy.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_stastics`
--

CREATE TABLE `basic_stastics` (
  `id` int(11) NOT NULL,
  `happy_customer` int(11) NOT NULL,
  `successful_deals` int(11) NOT NULL,
  `awards` int(11) NOT NULL,
  `picture` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_stastics`
--

INSERT INTO `basic_stastics` (`id`, `happy_customer`, `successful_deals`, `awards`, `picture`, `status`, `date`, `title`) VALUES
(1, 10, 200, 100, 'img-021.png', 1, '2022-07-06 17:08:45', 'Basic Stastics');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `slug` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `logo` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`slug`, `name`, `logo`, `status`, `date`) VALUES
('cvemalawi', 'Cash Value Enterprices', 'cvemalawi.png', 1, '2022-05-28 16:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `shortname` varchar(200) NOT NULL,
  `fullname` text NOT NULL,
  `background` text NOT NULL,
  `mission` text NOT NULL,
  `vision` text NOT NULL,
  `core_values` text NOT NULL,
  `address` text NOT NULL,
  `cell` text NOT NULL,
  `email` text NOT NULL,
  `logo` text NOT NULL,
  `location` text NOT NULL,
  `facebook_link` text NOT NULL,
  `twitter_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`shortname`, `fullname`, `background`, `mission`, `vision`, `core_values`, `address`, `cell`, `email`, `logo`, `location`, `facebook_link`, `twitter_link`) VALUES
('INFINITY CONSULTANCY', 'INFINITY CONSULTANCY LIMITED', 'Infinity Consultancy was founded in 2019 in Lilongwe, Malawi. It is a profit-oriented partnership consultancy firm which was established after seeing the gap in the consulting industry ranging from lack of consistency, not being customer centered and lack of being results based. It came into existence to be the “One Stop Consultancy” where one can find all the advisory consulting services at one place. It aims at providing various lasting consulting solutions to both Public and Private Companies as well as NGOs in Malawi. The name ‘Infinity Consultancy’ comes considering the broader services being provided and its multi-sectorial operations in nature. <br>To achieve the “One Stop Consulting Services”, we have well experienced expertise in the fields of Research, Social Governance, Socio-Economic Development, Project Management, Data management, Business Development and Management as well as Economists.<br><br /><br /><br />\r\n', 'Our mission is to provide excellent services to the clients in a professionally, transparent, and organized manner while focusing on the full satisfaction of our customers’ needs and wants.', 'To be the leading provider of first-class consulting services in the fields of; Qualitative and Quantitative Research, Data Management, Project Management, Project monitoring and Evaluation, in all sectors of Agriculture, Education, Health, Legal, Climate Change Management, Marketing and Finance.', '1. Respect for all clients<br>2. Effective, Efficiency and time conscious<br>3. Outcome or Results based.<br>4. Integrity<br>5. Honesty<br>6. Confidentiality<br>7. Accuracy and Competency<br>', 'P.O BOX 4544, <br>LILONGWE, MALAWI', '+265 881 281 026', 'infinity@nfinityconsultancy.com', 'Infinity_Consultancy_Logo_transparentpng1.png', 'Lilongwe, Malawi', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `slug` varchar(500) NOT NULL,
  `title` varchar(400) NOT NULL,
  `content` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `picture` text NOT NULL,
  `location` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`slug`, `title`, `content`, `datetime`, `picture`, `location`, `status`, `date`) VALUES
('', '', '', '2022-07-06 12:32:42', 'esau.jpg', '', 0, '0000-00-00'),
('news_1', 'STATA Classes At Bunda Campus', 'We had an SPSS training at bunda college a few weeks ago. The least we would say about the training would still excite you. We provided certificates at the of the training', '2022-07-06 11:34:22', 'bunda1.jpg', 'Lilongwe, Malawi', 1, '0000-00-00'),
('news_2', 'SPSS Classes at Polytechnic', '<p>We had an SPSS training at bunda college a few weeks ago.The least we <br>would say about the training would still excite you. We provided certificates at the of the training</p>', '2022-07-21 09:33:04', 'poly1.jpg', 'Blantyre', 1, '2022-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `slug` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `picture` text DEFAULT NULL,
  `short_description` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`slug`, `title`, `picture`, `short_description`, `icon`, `status`, `date`, `content`) VALUES
('business_options', 'Business options', '#', 'We do trainings in business management and how to raise capital for your organizations for business startups. and You organization should not overspend. We do budgetary reviews and forecasting expected expenditures, incomes and many more.', 'fa fa-line-chart ', 1, '2022-06-19 07:17:49', 'We do trainings in business management and how to raise capital for your organizations for business startups. and You organization should not overspend. We do budgetary reviews and forecasting expected expenditures, incomes and many more.'),
('computer_trainings', 'Computer Literacy Trainings', '#', 'We conduct trainings to either students or individual business in introduction and advanced computer operations.', 'fa fa-trophy', 1, '2022-06-19 07:17:57', 'We conduct trainings to either students or individual business in introduction and advanced computer operations.'),
('conducting_surveys', 'Conducting Surveys ', '', 'It involves carrying out Surveys in all types of research; Quantitative and Qualitative be it a Cross-sectional Study or Longitudinal Study using different methods such as Computer Assisted Interviews, Focus Group Discussions and many more', 'fa fa-trophy', 1, '2022-06-19 07:18:25', 'It involves carrying out Surveys in all types of research; Quantitative and Qualitative be it a Cross-sectional Study or Longitudinal Study using different methods such as Computer Assisted Interviews, Focus Group Discussions and many more'),
('financial_auditing', 'Financial Auditing', '#', 'We do trainings in auditing financial institutions', 'fa fa-line-chart', 1, '2022-06-19 07:18:33', 'We do trainings in auditing financial institutions'),
('funding_and_research_proposal_development_and_writing', 'Funding and Research', 'picture.jpg', 'In this service, we have expertise in developing and writing proposals aimed at sourcing funds for various projects in the communities. We also develop and write proposals relating to academic research for both undergraduate and post graduate students', 'fa fa-balance-scale', 1, '2022-06-19 07:18:41', 'In this service, we have expertise in developing and writing proposals aimed at sourcing funds for various projects in the communities. We also develop and write proposals relating to academic research for both undergraduate and post graduate students'),
('guidance', 'Career guidance', '#', 'We do career guidance related trainings.', 'fa fa-trophy', 1, '2022-06-19 07:18:50', 'We do career guidance related trainings.'),
('oppurture_trainers', 'Opportune Trainers', '#', 'Training individuals and SMEs as well as organizations and governments departments on the various opportunities available for optimization of their businesses and services being delivered.', 'fa fa-balance-scale', 1, '2022-06-19 07:18:58', 'Training individuals and SMEs as well as organizations and governments departments on the various opportunities available for optimization of their businesses and services being delivered.'),
('research_designing_in_any_field', 'Research designing in any field', 'picture.jpg', 'We have expertise in designing research both Qualitative and Quantitative in both Cross-sectional and longitudinal study designs.', 'fa fa-line-chart', 1, '2022-06-19 07:19:05', 'We have expertise in designing research both Qualitative and Quantitative in both Cross-sectional and longitudinal study designs.'),
('taxation_issues', 'Taxation issues', '#', 'Offering trainings to individual business and SMEs on how to fill tax return forms and offer advisory services on how to remain tax compliant.', 'fa fa-balance-scale', 1, '2022-06-19 07:19:12', 'Offering trainings to individual business and SMEs on how to fill tax return forms and offer advisory services on how to remain tax compliant.'),
('trainings', 'Conducting Trainings ', NULL, 'We conduct trainings in, Statistical software packages e.g. STATA, SPSS, R, ODK, CSPro, and Microsoft Excel in both Data Entry and Data Analysis.', 'fa fa-balance-scale', 1, '2022-07-06 14:50:36', '<span style=\"color: rgb(81, 81, 81); font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">We conduct trainings in, Statistical software packages e.g. STATA, SPSS, R, ODK, CSPro, and Microsoft Excel in both Data Entry and Data Analysis. We also do trainings in Data Base management in both Excel and Microsoft Access, creating dashboards for easy data visualization, report writing management in both word and power points and many more as per your organizations need. Also, we do conduct trainings in financial software such as Oracle Financials Cloud, Sage intact, QuickBooks, Xero and many more for your employees to be equipped with good finance management skills. We also do trainings in financial models’ development and management.</span>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slug` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slug`, `title`, `description`, `picture`, `position`, `status`, `date`) VALUES
('motto', 'Five star service', 'Our mission is to provide excellent services to the clients in a professionally, transparent, and organized manner while focusing on the full satisfaction of our customers’ needs and wants.', 'untitled-114241359_(1).jpg', 0, 1, '2022-07-21 13:11:30'),
('vision', 'Five star service', 'To be the leading provider of first-class consulting services in the fields of; Qualitative and Quantitative Research, Data Management, Project Management, Project monitoring and Evaluation, in all sectors of Agriculture, Education, Health, Legal, Climate Change Management, Marketing and Finance.', 'untitled-114241359_(1)1.jpg', 0, 1, '2022-07-21 13:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `position` text NOT NULL,
  `email` text NOT NULL,
  `twitter_link` text NOT NULL,
  `facebook_link` text NOT NULL,
  `profession` varchar(100) NOT NULL,
  `picture` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `fullname`, `position`, `email`, `twitter_link`, `facebook_link`, `profession`, `picture`, `status`, `date`) VALUES
(1, 'Mr. Esau Nickson Phiri', 'Chief Executive Officer (C.E.O)', 'esaw.nickson@infinityconsultancy.com', '#', '#', '', 'esau.jpg', 1, '2022-07-06 12:34:06'),
(2, 'Mr. Isaiah Ramsey Sikamba', 'The Human Resource Manager', 'isikamba@infinityconsultancy.co', 'http://twitter.com/isikamba', 'https://www.facebook.com/isaiah.sikamba.1', '', 'sikamba.png', 1, '2022-07-06 12:35:51'),
(3, 'Joyson Binali', 'Statistician', 'joyson.binali@infirnitityconsultancy.co', '#', '#', 'Statistician', 'binali.jpeg', 1, '2022-06-18 11:52:00'),
(5, '', '', '', '', '', '', '', 0, '2022-07-06 15:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `fname`, `status`) VALUES
('infinity@infinityconsultancy.co', '56c321f513a6f9c8af56cac131bce06b50b40da0', 'Infinity Consultancy', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_stastics`
--
ALTER TABLE `basic_stastics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`shortname`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_stastics`
--
ALTER TABLE `basic_stastics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
