-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 05:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selecao`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `sidetitle` varchar(300) NOT NULL,
  `sidesubtitle` varchar(300) NOT NULL,
  `title` varchar(500) NOT NULL,
  `point1` varchar(500) NOT NULL,
  `point2` varchar(500) NOT NULL,
  `point3` varchar(500) NOT NULL,
  `description` longtext NOT NULL,
  `buttontitle` varchar(300) NOT NULL,
  `learnmore` longtext NOT NULL,
  `actiontitle` varchar(300) NOT NULL,
  `actioncontent` longtext NOT NULL,
  `actionbtntitle` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `sidetitle`, `sidesubtitle`, `title`, `point1`, `point2`, `point3`, `description`, `buttontitle`, `learnmore`, `actiontitle`, `actioncontent`, `actionbtntitle`) VALUES
(1, 'About', 'Who we are', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat', 'Duis aute irure dolor in reprehenderit in voluptate velit', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'Learn More', 'Ullamco laboris nisi uts aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Call To Action', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Call To Action');

-- --------------------------------------------------------

--
-- Table structure for table `aboutusbtn`
--

CREATE TABLE `aboutusbtn` (
  `id` int(11) NOT NULL,
  `btntitle` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `para1` longtext NOT NULL,
  `para2` longtext NOT NULL,
  `point1` varchar(500) NOT NULL,
  `point2` varchar(500) NOT NULL,
  `point3` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutusbtn`
--

INSERT INTO `aboutusbtn` (`id`, `btntitle`, `title`, `para1`, `para2`, `point1`, `point2`, `point3`, `img`) VALUES
(1, 'Modi sit est dela pireda nest', 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.', '../images/features-1.png'),
(2, 'Unde praesenti mara setra le', 'Neque exercitationem debitis soluta quos debitis quo mollitia officia est', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.', '../images/features-2.png'),
(3, 'Pariatur explica nitro dela', 'Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.', '../images/features-3.png'),
(4, 'Nostrum qui dile node', 'Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.', '../images/features-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `id` int(11) NOT NULL,
  `sidetitle` varchar(300) NOT NULL,
  `maintitle` varchar(300) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`id`, `sidetitle`, `maintitle`, `content`) VALUES
(1, 'Events', 'What we have done', 'Odisha Preschool Association professional audit teams have conducted independent and unbiased audits that have to provide new perspectives through quality indicators that sustain and maintain program standards in the following schools and institutes:');

-- --------------------------------------------------------

--
-- Table structure for table `auditschools`
--

CREATE TABLE `auditschools` (
  `id` int(11) NOT NULL,
  `schoolname` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auditschools`
--

INSERT INTO `auditschools` (`id`, `schoolname`, `address`) VALUES
(1, 'The little Company', 'C-8/1 & 2, Godrej Hill Side Colony, LBS Marg,Vikhroli West, Mumbai 400079'),
(2, 'Cambridge Sparkling  Stars', 'Cambridge International Foundation School, Urban Estate Phase-1 Jalandhar'),
(3, 'Lab School, Department of Human Development, SNDT Women University', 'SNDT Women University, Sir Vithaldas Vidyavihar, Juhu Tara Road, Santacruz West, Mumbai 400049'),
(4, 'Sundherji Nursery School', 'Vrindvan Society, Bldg No. 8, Behind Mira Society, Off Shankerseth Road, Pune 411037');

-- --------------------------------------------------------

--
-- Table structure for table `contacttable`
--

CREATE TABLE `contacttable` (
  `id` int(11) NOT NULL,
  `crd` varchar(300) NOT NULL,
  `nrd` varchar(300) NOT NULL,
  `srd` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacttable`
--

INSERT INTO `contacttable` (`id`, `crd`, `nrd`, `srd`) VALUES
(1, 'Cuttack', 'Sambalpur', 'Ganjam'),
(2, 'Jagatsinghpur', 'Bargath', 'Gajapati'),
(3, 'Kendrapara', 'Jharsuguda', 'Kandharral'),
(4, 'Jaipur', 'Debagarh', 'Boudh'),
(5, 'Puri', 'Balangar', 'Kalaharidi'),
(6, 'Cuttack', 'Sambalpur', 'Ganjam'),
(7, 'Nayagarh', 'Dhenkanal', 'Koraput'),
(8, 'Balasore', 'Angul', 'Rayagada'),
(9, 'Bhadrak', 'Kendujhar', 'Nabarangpur'),
(10, 'Mayurbhanj', 'Sundargarh', 'Makangir');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `sidetitle` varchar(300) NOT NULL,
  `subtitle` varchar(300) NOT NULL,
  `maintitle` varchar(300) NOT NULL,
  `location` varchar(500) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `districttitle` varchar(300) NOT NULL,
  `title1` varchar(300) NOT NULL,
  `title2` varchar(300) NOT NULL,
  `title3` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `sidetitle`, `subtitle`, `maintitle`, `location`, `email`, `phone`, `districttitle`, `title1`, `title2`, `title3`) VALUES
(1, 'Contact', 'Contact Us', 'Odisha Preschool Association', 'Model-7 Shanti Vihar, Baramunda Housing Board Colony, Baramunda, Bhubaneshwar, Khordha, Odisha', 'odpsa2021@gmail.com', '+91 986-114-8735', 'Our Dynamic District Heads', 'Central Revenue Division (HQ: Cuttack)', 'Northern Revenue Division (HQ: Sambalpur)', 'Southern Revenue Division (HQ: Berhampur)');

-- --------------------------------------------------------

--
-- Table structure for table `districtheads`
--

CREATE TABLE `districtheads` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `district` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districtheads`
--

INSERT INTO `districtheads` (`id`, `name`, `district`) VALUES
(1, 'Swapnil Limaye', 'Karnataka'),
(2, 'Vaidehi Arun', 'Karnataka'),
(3, 'Ruchika Bhasin Abrol', 'Dehradun'),
(4, 'Shoban Soi', 'Ludhiana'),
(5, 'Manobi Deka', 'Guwahati'),
(6, 'Supriya Singh', 'Bhopal'),
(7, 'Vanita Singh', 'Goa'),
(8, 'Ankit Vora', 'Jabalpur'),
(9, 'Parvani Dawar', 'Indore'),
(10, 'Smita Sachdeva', 'Lucknow'),
(11, 'Karan Bajwa', 'Chandigarh'),
(12, 'Ayesha Baig', 'Belgaum'),
(13, 'Monica Jouhal', 'Jalandar'),
(14, 'Pallavi Chandra', 'Kanpur'),
(15, 'Seema Tanwar', 'Pune'),
(16, 'Pooja Jeswani', 'Pune'),
(17, 'Ms. Mamta Shukla', 'Chattisgarh'),
(18, 'Ms. Sneha Gupta', 'Aurangabad'),
(19, 'Mr. Pathik Shah', 'Gujarat'),
(20, 'Hetal Rathod', 'Gujarat'),
(21, 'Kinjal Bhatt/Fatnani', 'Bhavnagar'),
(22, 'Pooja Jayswal', 'Bhavnagar'),
(23, 'Ms. Sushma Nalapat', 'Kerala'),
(24, 'Seema Sathe', 'Navi Mumbai'),
(25, 'Events', 'What we have done');

-- --------------------------------------------------------

--
-- Table structure for table `eventdetails`
--

CREATE TABLE `eventdetails` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `subtitle` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventdetails`
--

INSERT INTO `eventdetails` (`id`, `title`, `subtitle`, `image`) VALUES
(1, 'App 1', 'App', '../assets/img/portfolio/portfolio-1.jpg'),
(2, 'Web 3', 'Web', '../assets/img/portfolio/portfolio-2.jpg'),
(3, 'App 2', 'App', '../assets/img/portfolio/portfolio-3.jpg'),
(4, 'Card 2', 'Card', '../assets/img/portfolio/portfolio-4.jpg'),
(5, 'Web 2', 'Web', '../assets/img/portfolio/portfolio-5.jpg'),
(6, 'App 3', 'App', '../assets/img/portfolio/portfolio-6.jpg'),
(7, 'Card 1', 'Card', '../assets/img/portfolio/portfolio-7.jpg'),
(8, 'Card 3', 'Card', '../assets/img/portfolio/portfolio-8.jpg'),
(9, 'Web-3', 'Web', '../assets/img/portfolio/portfolio-9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `sidetitle` varchar(300) NOT NULL,
  `maintitle` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `sidetitle`, `maintitle`) VALUES
(1, 'Events', 'What we have done');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `title` varchar(400) NOT NULL,
  `content` varchar(500) NOT NULL,
  `copyright` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `title`, `content`, `copyright`) VALUES
(1, 'Selecao', 'Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.', 'Copyright Selecao. All Rights Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `slide1img` varchar(500) NOT NULL,
  `slide2img` varchar(500) NOT NULL,
  `slide3img` varchar(500) NOT NULL,
  `slide4img` varchar(500) NOT NULL,
  `slide5img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `slide1img`, `slide2img`, `slide3img`, `slide4img`, `slide5img`) VALUES
(1, 'images/slide-1.jpg', 'images/slide-2.jpg', 'images/slide-3.jpg', 'images/slide-4.jpg', 'images/slide-5.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `sidetitle` varchar(300) NOT NULL,
  `title1` varchar(500) NOT NULL,
  `title2` varchar(500) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `sidetitle`, `title1`, `title2`, `content`) VALUES
(1, 'Members', 'Members of our', ' core committee', 'We have a dedicated and passionate team of hardworking members, whose devotion towards durableCore Committee Preschool education is dedicated and durable.');

-- --------------------------------------------------------

--
-- Table structure for table `membersdetail`
--

CREATE TABLE `membersdetail` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `position` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membersdetail`
--

INSERT INTO `membersdetail` (`id`, `name`, `image`, `position`) VALUES
(1, 'Dr. Swati Popat Vats', '../assets/img/team/team-1.jpg', 'President'),
(2, 'Ms. Farzana Dohadwala', '../assets/img/team/team-2.jpg', 'Principal Ambassador'),
(3, 'Ms. Binaifer Chhoga', '../assets/img/team/team-3.jpg', 'Executive Member'),
(4, 'Dr. Swati Popat Vats', '../assets/img/team/team-1.jpg', 'President'),
(5, 'Ms. Farzana Dohadwala', '../assets/img/team/team-2.jpg', 'Principal Ambassador'),
(6, 'Ms. Binaifer Chhoga', '../assets/img/team/team-3.jpg', 'Executive Member'),
(7, 'Dr. Swati Popat Vats', '../assets/img/team/team-1.jpg', 'President'),
(8, 'Ms. Farzana Dohadwala', '../assets/img/team/team-2.jpg', 'Principal Ambassador'),
(9, 'Ms. Binaifer Chhoga', '../assets/img/team/team-3.jpg', 'Executive Member'),
(10, 'Dr. Swati Popat Vats', '../assets/img/team/team-1.jpg', 'President'),
(11, 'Ms. Farzana Dohadwala', '../assets/img/team/team-2.jpg', 'Principal Ambassador'),
(12, 'Ms. Binaifer Chhoga', '../assets/img/team/team-3.jpg', 'Executive Member'),
(13, 'Dr. Swati Popat Vats', '../assets/img/team/team-1.jpg', 'President'),
(14, 'Ms. Farzana Dohadwala', '../assets/img/team/team-2.jpg', 'Principal Ambassador'),
(15, 'Ms. Binaifer Chhoga', '../assets/img/team/team-3.jpg', 'Executive Member'),
(16, 'Dr. Swati Popat Vats', '../assets/img/team/team-1.jpg', 'President'),
(17, 'Ms. Farzana Dohadwala', '../assets/img/team/team-2.jpg', 'Principal Ambassador'),
(18, 'Ms. Binaifer Chhoga', '../assets/img/team/team-3.jpg', 'Executive Member');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `sidetitle` varchar(300) NOT NULL,
  `maintitle` varchar(300) NOT NULL,
  `invite` varchar(500) NOT NULL,
  `subtitle` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `buttontitle` varchar(300) NOT NULL,
  `infotitle` varchar(300) NOT NULL,
  `info1` longtext NOT NULL,
  `info2` longtext NOT NULL,
  `info3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `sidetitle`, `maintitle`, `invite`, `subtitle`, `description`, `buttontitle`, `infotitle`, `info1`, `info2`, `info3`) VALUES
(1, 'know more about', 'Odisha Preschool Association Membership', 'We Invite you to join us at the Odisha Preschool Association as its member so that its activities can reach out and be shaped and sharpened by all of us who have endeavoured for a Preschool', 'ODPS Association - Membership', 'The application for membeship in the Association is initiated by submission of an appropriate application for admission to the Management Board.', 'Download Application Form', 'Who can become member of Odisha Preschool Association ?', 'Members of the Association are all of the founders as well as any other legal person or legally responsible individual accepted as member in accordance with these statutes.', 'Any preschool Owner, Principal and Coordinator within Odisha are eligible to be a member in the Association as long as said member remains in “good standing”. A member is in “good standing” when the member pays his/her annual membership dues when required. A member is no longer in “good standing” when the member fails to pay his/her annual membership dues when required. The members under this clause shall be “Full Members”. The annual membership fee shall be Rs. 1500/-', 'The annual membership fee entitles you to membership in the Association for the current calendar year. The Membership date is considered as of the first of the month following approval by the Management Board and payment of your Membership dues. New members are sent letters of acceptance. Applicants for membership are kindly requested to make payment upon receipt of the formal letter of acceptance. Membership becomes effective after payment of the initial membership fees. Membership Fees can be transferred to Bank Account provided in the Membership form.');

-- --------------------------------------------------------

--
-- Table structure for table `membershipcard`
--

CREATE TABLE `membershipcard` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `benefits` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membershipcard`
--

INSERT INTO `membershipcard` (`id`, `title`, `benefits`) VALUES
(1, 'Benefits of being a Member of Association', 'Annually Membership Certificate.'),
(2, '', '25% off on all Workshops, Seminars and Events (except conferences).'),
(3, '', 'Whatsapp Group.'),
(4, '', 'Monthly Newsletter (soft copy)'),
(5, '', 'Annually Audit.'),
(6, '', 'Monthly Group Meeting and many more.');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `item1` varchar(300) NOT NULL,
  `item2` varchar(300) NOT NULL,
  `item3` varchar(300) NOT NULL,
  `item4` varchar(300) NOT NULL,
  `item5` varchar(300) NOT NULL,
  `item6` varchar(300) NOT NULL,
  `item7` varchar(300) NOT NULL,
  `item8` varchar(300) NOT NULL,
  `item9` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `title`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`, `item7`, `item8`, `item9`) VALUES
(1, 'Selecao', 'Home', 'About Us', 'Events', 'Audit', 'Forum', 'Membership', 'Recognized Preschools', 'Members', 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `recogpreschools`
--

CREATE TABLE `recogpreschools` (
  `id` int(11) NOT NULL,
  `maintitle` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recogpreschools`
--

INSERT INTO `recogpreschools` (`id`, `maintitle`) VALUES
(1, 'Recognised Preschools');

-- --------------------------------------------------------

--
-- Table structure for table `recogpreschoolsimg`
--

CREATE TABLE `recogpreschoolsimg` (
  `id` int(11) NOT NULL,
  `schoolimg` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recogpreschoolsimg`
--

INSERT INTO `recogpreschoolsimg` (`id`, `schoolimg`) VALUES
(1, '../assets/img/Recognised/Mine.png'),
(2, '../assets/img/Recognised/Kidzee.png'),
(3, '../assets/img/Recognised/EuroKids.png'),
(4, '../assets/img/Recognised/Mine.png'),
(5, '../assets/img/Recognised/Kidzee.png'),
(6, '../assets/img/Recognised/EuroKids.png'),
(7, '../assets/img/Recognised/Mine.png'),
(8, '../assets/img/Recognised/Kidzee.png'),
(9, '../assets/img/Recognised/EuroKids.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'admin', 'admin@gmail.com', '123', 'admin'),
(2, 'user', 'user@gmail.com', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutusbtn`
--
ALTER TABLE `aboutusbtn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auditschools`
--
ALTER TABLE `auditschools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacttable`
--
ALTER TABLE `contacttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districtheads`
--
ALTER TABLE `districtheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventdetails`
--
ALTER TABLE `eventdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membersdetail`
--
ALTER TABLE `membersdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membershipcard`
--
ALTER TABLE `membershipcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recogpreschools`
--
ALTER TABLE `recogpreschools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recogpreschoolsimg`
--
ALTER TABLE `recogpreschoolsimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aboutusbtn`
--
ALTER TABLE `aboutusbtn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auditschools`
--
ALTER TABLE `auditschools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacttable`
--
ALTER TABLE `contacttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districtheads`
--
ALTER TABLE `districtheads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `eventdetails`
--
ALTER TABLE `eventdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membersdetail`
--
ALTER TABLE `membersdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membershipcard`
--
ALTER TABLE `membershipcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recogpreschools`
--
ALTER TABLE `recogpreschools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recogpreschoolsimg`
--
ALTER TABLE `recogpreschoolsimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
