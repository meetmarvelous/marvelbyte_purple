-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 02:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marvelbyte`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `twitter_link` varchar(100) NOT NULL,
  `facebook_link` varchar(100) NOT NULL,
  `linkedin_link` varchar(100) NOT NULL,
  `youtube_link` varchar(100) NOT NULL,
  `github_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `title`, `short_content`, `content`, `image`, `twitter_link`, `facebook_link`, `linkedin_link`, `youtube_link`, `github_link`) VALUES
(1, '', '<b>Marvelbyte</b> helps professionals build better businesses.In specific terms, the company does unique branding, modern websites designs, smarter marketing, and powerful e-commerce solutions designed to be as easy and affordable as possible. We can get started today. ', '<b>Marvelbyte</b> helps professionals build better businesses.In specific terms, the company does unique branding, modern websites designs, smarter marketing, and powerful e-commerce solutions designed to be as easy and affordable as possible. We can get started today. ', 'about.png', 'https://twitter.com/marvelbyte', 'https://www.facebook.com/meetmarvelous', 'https://www.linkedin.com/in/marvelbyte/', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`admin_id`, `username`, `password`, `fullname`) VALUES
(1, 'Marvel', '12345678', 'Marvelous Ayomide');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `fullname`, `email`, `phone_no`, `message`, `date_time`) VALUES
(2, 'Marvelous Adegbiji', 'marvel1698@gmail.com', '08154755551', 'aaaaaaaaaaaaaaaaaaaaaaa', '2021-04-27 05:24:56'),
(4, 'Marvelous Adegbiji Ayomide', 'marvel1698@gmail.com', '08102667603', 'Marvelous Ayomide is a boy.  ', '2021-06-19 15:54:09'),
(5, 'Precious', 'preciousadegbiji@gmail.com', '0815475551', 'I am a girl. I want to join your class.', '2022-05-11 19:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE `icon` (
  `wd` varchar(100) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `dm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icon`
--

INSERT INTO `icon` (`wd`, `ad`, `dm`) VALUES
('wd.png', 'ad.png', 'dm.png');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletter_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`newsletter_id`, `email`) VALUES
(1, 'marvel@gmail.com'),
(2, 'marvel1698@gmail.com'),
(4, 'ayomide@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `site_id` int(11) NOT NULL,
  `webname` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `wa_link` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `office_time` varchar(50) NOT NULL,
  `office_date` varchar(50) NOT NULL,
  `header_logo` varchar(50) NOT NULL,
  `footer_logo` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`site_id`, `webname`, `phone_no`, `phone`, `wa_link`, `email`, `about`, `office_time`, `office_date`, `header_logo`, `footer_logo`, `icon`, `location`) VALUES
(1, 'Marvelbyte', '+2348154755551', ' +234 815 475 555 1', 'https://api.whatsapp.com/send?phone=2348154755551&text=Hello%20Marvelbyte', 'meetmarvelous@gmail.com', 'Marvelbyte helps professionals build better businesses. In specific terms, the company does unique branding, modern website designs, smarter marketing, and powerful e-commerce solutions designed to be as easy and affordable as possible. We can get started today.', '9:00AM - 6:00PM', 'Monday - Saturday', '', '', 'logo2.png', ' Ibadan, Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `picture` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `title`, `content`, `picture`, `status`, `datereg`) VALUES
(1, 'WE CREATE <span>WEBSITES</span> THAT BUILD MOMENTUM', 'Your website is your digital first impression. That\'s why you need a responsive and conversion-oriented site, matched with great user experience and world-class design.\r\n', 'website.png', '1', '2021-04-24 04:11:32'),
(2, 'WE HELP YOU TO MAKE BETTER <span>SOFTWARE</span>', 'From the initial design to the final development stage, your dedicated team of specialists will build your application to reflect your business goals and user needs.', 'app.png', '1', '2021-04-24 04:11:39'),
(3, 'DIGITAL <span>MARKETING</span>', 'We’ll leverage our marketing-savvy skills to provide you with a winning strategy. Do you want to scale up your business? Need more leads and more customers? We can help with that.', 'digital.png', '1', '2021-04-24 04:49:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsletter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_info`
--
ALTER TABLE `site_info`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
