-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 06:29 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `post_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `post_publish_date` date NOT NULL,
  `post_publish_time` time NOT NULL,
  `post_img_url` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `post_title`, `post_desc`, `post_publish_date`, `post_publish_time`, `post_img_url`, `user_id`, `user_name`) VALUES
(20, 'Animals Around The World.', 'Animals are multicellular eukaryotic organisms that form the biological kingdom Animalia. With few exceptions, animals consume organic material, breathe oxygen, are able to move, can reproduce sexually, and grow from a hollow sphere of cells, the blastula, during embryonic development.', '2019-10-25', '05:03:46', '', 37, 'smith'),
(21, 'Facebook, Inc.', 'Facebook, Inc. is an American online social media and social networking service company based in Menlo Park, California. It was founded by Mark Zuckerberg, along with fellow Harvard College students and roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes.', '2019-10-25', '05:05:25', 'http://[::1]/codeIgniter_task/assets/posts_imgs/download.jpg', 38, 'john'),
(22, 'SAVANNA', 'A savanna or savannah is a mixed woodland-grassland ecosystem characterised by the trees being sufficiently widely spaced so that the canopy does not close. The open canopy allows sufficient light to reach the ground to support an unbroken herbaceous layer consisting primarily of grasses.', '2019-10-25', '05:06:39', '', 38, 'john'),
(23, 'CodeIgniter Web Framework', 'CodeIgniter is an open-source software rapid development web framework, for use in building dynamic web sites with PHP.', '2019-10-25', '05:07:30', '', 39, 'sara'),
(24, 'Netflix', 'Netflix, Inc. is an American media-services provider and production company headquartered in Los Gatos, California, founded in 1997 by Reed Hastings and Marc Randolph in Scotts Valley, California.', '2019-10-25', '05:08:56', 'http://[::1]/codeIgniter_task/assets/posts_imgs/download_(1).jpg', 39, 'sara'),
(25, 'Land Rover', 'Land Rover is a British brand of four-wheel drive cars, that exclusively offers premium and luxury sport utility vehicles.', '2019-10-25', '05:10:51', 'http://[::1]/codeIgniter_task/assets/posts_imgs/download_(2).jpg', 40, 'tom'),
(26, 'Udemy', 'What is Udemy?\r\nWorld\'s Largest Education Site\r\nImproving Lives Through Learning', '2019-10-25', '05:11:59', '', 40, 'tom'),
(27, 'Apple New Product (iPhone 11 pro)', 'Meet iPhone 11. All-new dual-camera system with Ultra Wide and Night mode.', '2019-10-25', '05:13:35', 'http://[::1]/codeIgniter_task/assets/posts_imgs/download_(3).jpg', 40, 'tom'),
(28, 'Petra', 'Petra is a famous archaeological site in Jordan\'s southwestern desert. Dating to around 300 B.C., it was the capital of the Nabatean Kingdom. Accessed via a narrow canyon called Al Siq, it contains tombs and temples carved into pink sandstone cliffs, earning its nickname, the \"Rose City.\" Perhaps its most famous structure is 45m-high Al Khazneh, a temple with an ornate, Greek-style facade, and known as The Treasury.', '2019-10-25', '05:15:48', 'http://[::1]/codeIgniter_task/assets/posts_imgs/download_(4).jpg', 41, 'emily'),
(29, 'Fortnite', 'Fortnite is always free', '2019-10-25', '05:16:40', '', 41, 'emily'),
(30, 'KFC', 'KFC, also known as Kentucky Fried Chicken, is an American fast food restaurant chain headquartered in Louisville, Kentucky, that specializes in fried chicken. It is the world\'s second-largest restaurant chain after McDonald\'s, with 22,621 locations globally in 136 countries as of December 2018', '2019-10-25', '05:18:06', 'http://[::1]/codeIgniter_task/assets/posts_imgs/download.png', 41, 'emily'),
(31, 'Dwayne Johnson', 'Dwayne Douglas Johnson, also known by his ring name The Rock, is an American-Canadian actor', '2019-10-25', '05:20:41', 'http://[::1]/codeIgniter_task/assets/posts_imgs/download_(5).jpg', 42, 'jack'),
(32, 'Venom 2019', 'Check out the superhero movie\r\nTom Hardy proves that he’s more than equipped to play the sentient symbiote, but this film is concerned mainly with stomping from one plot point to the next, at the cost of character development.', '2019-10-25', '05:22:44', 'http://[::1]/codeIgniter_task/assets/posts_imgs/images.jpg', 42, 'jack');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_address`) VALUES
(35, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '362541659', 'admin new St'),
(37, 'smith', 'smith@smith.com', 'a66e44736e753d4533746ced572ca821', '625321654', 'smith New ST'),
(38, 'john', 'john@john.com', '527bd5b5d689e2c32ae974c6229ff785', '8794521656', 'john New STR Wal'),
(39, 'sara', 'sara@sara.com', '5bd537fc3789b5482e4936968f0fde95', '943618753', 'sara SS downtTwn'),
(40, 'tom', 'tom@tom.com', '34b7da764b21d298ef307d04d8152dc5', '487965351', 'TOM DDSTR MEW'),
(41, 'emily', 'emily@emily.com', 'b02ae5aaefe3f7090668df034b0f2324', '985259915', 'emily New Str'),
(42, 'jack', 'jack@jack.com', '4ff9fc6e4e5d5f590c4f2134a8cc96d1', '379462854', 'jack Home New ST');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
