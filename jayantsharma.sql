-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 11:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jayantsharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `birthdate` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `birthdate`, `email`, `password`, `image`, `status`) VALUES
(5, 'Jayant Sharma', 2147483647, '', 'sharma.iitian@gmail.com', 'sharma9784', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(11, 'Santosh', 'sharma.iitian@gmail.com', '7870166448', 'how can i contact you?', '2020-07-24 22:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `text1`, `text2`, `text3`) VALUES
(1, 'profile social icons', 'github||twitter||whatsapp||linkedin', 'https://github.com/sharma9784|| https://twitter.com||https://api.whatsapp.com/send?phone=917728081684||https://linkedin.com', '<i class=\"fab fa-2x fa-github\"></i>||<i class=\"fab fa-2x fa-twitter\"></i>||<i class=\"fab fa-2x fa-whatsapp\"></i>||<i class=\"fab fa-2x fa-linkedin-in\"></i>'),
(4, 'profile contact', 'email||mobile||city', '<a href=\"mailto:\">sharma97.jayant@gmail.com</a> || <a href=\"callto:\">+91 7728081684</a>||<address>Jaipur,Rajasthan</address>', '<i class=\"fa fa-envelope\"></i>||<i class=\"fa fa-phone\"></i>||<i class=\"fa fa-map-marker\"></i>');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `project_category` varchar(255) NOT NULL,
  `used_element` varchar(255) NOT NULL,
  `type` text NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `project_date` varchar(255) NOT NULL,
  `site` text NOT NULL,
  `github` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `project_category`, `used_element`, `type`, `image`, `status`, `project_date`, `site`, `github`) VALUES
(14, 'E-commerce Website', 'php', 'html,css,jquery,ajax,php', '<strong>Counterpick</strong> is hero picking web application for the game League of Legends. It combines enemy counter picking with team synergy to help you draft better. The primary focus is to provide as much information as possible so that you can decide what to pick from a smaller number of heroes.', 'Screenshot (172).png', 1, '2020-07-13 00:00:00', 'https://google.com', 'https://github.com'),
(15, 'Food Ordering Website', 'wordpress', 'php,jquery,ajax', 'PineStem is a project management tool which has unique feature of Artificial intelligence to identify the most suitable resource from your team for a given task. It’s made for helping and doing things efficiently.', 'Screenshot (158).png', 1, '0000-00-00 00:00:00', '', ''),
(16, 'design', 'codeigniter', 'php,jquery,ajax', '<strong>Counterpick</strong> is hero picking web application for the game League of Legends. It combines enemy counter picking with team synergy to help you draft better. The primary focus is to provide as much information as possible so that you can decide what to pick from a smaller number of heroes.', 'Screenshot (2).png', 1, '2020-07-21 00:00:00', '', ''),
(17, 'Jayant Sharma', 'wordpress', 'html,css,javascript,ajax', '<strong>Counterpick</strong> is hero picking web application for the game League of Legends. It combines enemy counter picking with team synergy to help you draft better. The primary focus is to provide as much information as possible so that you can decide what to pick from a smaller number of heroes.', 'Screenshot (163).png', 1, '2020-07-18', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `project_category`
--

CREATE TABLE `project_category` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_category`
--

INSERT INTO `project_category` (`id`, `name`, `status`) VALUES
(5, 'php', 1),
(6, 'codeigniter', 1),
(7, 'design', 1),
(8, 'wordpress', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `html` text NOT NULL,
  `skill_category` varchar(50) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `html`, `skill_category`, `status`) VALUES
(8, 'css', '<i class=\"devicon-css3-plain colored\"></i>', 'design', 1),
(9, 'php', '<i class=\"devicon-php-plain colored\"></i>', 'development', 1),
(11, 'html', '<i class=\"devicon-html5-plain-wordmark colored\"></i>', 'design', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills_category`
--

CREATE TABLE `skills_category` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills_category`
--

INSERT INTO `skills_category` (`id`, `name`, `status`) VALUES
(5, 'design', 1),
(6, 'development', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_category`
--
ALTER TABLE `project_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills_category`
--
ALTER TABLE `skills_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `project_category`
--
ALTER TABLE `project_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `skills_category`
--
ALTER TABLE `skills_category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
