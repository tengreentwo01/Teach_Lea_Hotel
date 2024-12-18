-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2024 at 11:23 PM
-- Server version: 10.6.16-MariaDB-log
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watsawankh_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(50) NOT NULL,
  `username_account` varchar(40) DEFAULT NULL,
  `email_account` varchar(40) DEFAULT NULL,
  `password_account` varchar(97) DEFAULT NULL,
  `salt_account` varchar(256) DEFAULT NULL,
  `role_account` varchar(6) DEFAULT NULL,
  `images_account` varchar(50) DEFAULT NULL,
  `login_count_account` int(1) NOT NULL,
  `lock_account` int(1) NOT NULL,
  `ban_account` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `username_account`, `email_account`, `password_account`, `salt_account`, `role_account`, `images_account`, `login_count_account`, `lock_account`, `ban_account`) VALUES
(1, 'Admin', 'admin@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$YkdKZU9NRGNSNjE4S0szcQ$l2wSW9JM8a6AGlxVrlng9gvWpyaIBlQ8U3OgzfOw/30', '830ee90071ef8ee6fa9cb0b00d0d423bfb4bcb0e5e92812c2134e393537085a30dd92bcc2e3125f2fe6c2fa80ec61c7f1d5022574e3041ffcc8e775bbe64294dc12ab1935480bf599840a0c28a1a4216bf52d46708f3928bdd4bff27b50daa74085530ded4b9f83e62df8221ab959f9f80ae81cec925e37a00cd61da21a32afb', 'admin', 'default_images_account.jpg', 0, 0, '2021-12-15 04:22:28'),
(2, 'User', 'user@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$dWQzeDlteERSQWtsMTVaSw$KKJdXgHhM3BklqYlMlsKF5d+Aj6b4BVnD36m5iccLiI', '7389f70a89e279fcbee843ddf40e2f5b14cfbfbb17b7c9bcfc2bec184284a11b2d052f6e544e1b943ff6c89ce8fdde6c4cef7bcdaf2e3d1f21b2bd86708a450591632658bf0647a66b69f9b5ded127d7dac6e147f1e185b52ede51ba6fd3e544d08485be9353b2af67fdde', 'member', 'default_images_account.jpg', 0, 0, '0000-00-00 00:00:00'),
(3, 'Member', 'member@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$cHVMRHZiSHdyWGIvNzdsTA$lK2r3+QyT9nNarqrTQ+BvVJ8XeJE80eWgQ1hJXHYJ3Q', '1e31f098fbb6268ba41a2e8644abaa5388c530ba17462fd93d82e513ad67f1b3fcb66208f0e3ef9a573347c4fbfe28d5cffd9954391a3b5caa79f5807f6de0dbe92a6c8e322e7de81620e12437656eb3a6ea325e7259b18904c6ec2582b3855cb0fe859b36f6826b146e0468c0b854ad273ec4d9a0613fe29560eba93f', 'member', 'default_images_account.jpg', 0, 0, '2021-12-15 04:26:02'),
(4, 'Namida Kitsune', 'namida@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$bUNCMy8vc0RDaHBwZWQxbg$2dC3aFjIXJ5a3DyMSlhNcW2TIfljcqlkvWhdi8UERzw', 'c4f49ab1b3e983e98d2e05422c0c732c7f46e47057cb97e52046b97898ab972b0d3db69274e7045e8fd76fbcc660851a01725d6c5546dcb134d0c28d98e4e7e3a75be25e948d7e042342a1e54e65e79888abfd7d09affcf9d3c71fac584c70229a8658cbfbf171856cd33fed624dc6a61640', 'admin', 'default_images_account.jpg', 0, 0, '0000-00-00 00:00:00'),
(6, 'Namida Kitsune', 'namida1@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$bzNGeElJT1J4RWJTaDNGTA$de+7WvdQgvjhozj5kcVRqgMZY6V1ZMUWDDzNqbtbvkM', 'f3b62974cd76cee9d3ce407ff32832cbafe4ffb5c63596ec9683af39dbffa9ccdb1e053ac9174d3f790c47c8cd680e02397e418a8b797f0145c4b701a312a99480621fade74c1a90b6a68a742d4a319732ff2cef79877d365e9ac3c6a66a2a056675c3e6113c6e57c3cd8d1a2778440c856129788b9f3e', 'member', 'default_images_account.jpg', 0, 0, '0000-00-00 00:00:00'),
(8, 'aaa', 'a@navy.mi.th', '$argon2id$v=19$m=65536,t=4,p=1$cDZ5aC5HMFpnMkpmTG9iTQ$7bbugA/JsTvrGUZjlOAEBA5p7oxbu9aUOp1FMGt0p10', '1ee374b815cc0bea28b08e57b3a9b3b4f9d6485109aba46094d3d5a5ab4a0d03f523eddf4c8007b897da598741324a061090ee0440af2bbe46b34ced8436aea3a5b90ba1419cd68b7ba72c0e7e7be1f16681fbdc25b093a2a55ffd73a0c8cf0565c4ff7ba1c960e2a291fb6645e2', 'member', 'default_images_account.jpg', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `mission` varchar(255) DEFAULT NULL,
  `how_many` int(11) DEFAULT NULL,
  `date1` datetime DEFAULT NULL,
  `date2` datetime DEFAULT NULL,
  `name_responsible` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `type`, `mission`, `how_many`, `date1`, `date2`, `name_responsible`, `status`, `file`) VALUES
(1, 'sss', 'หิวข้าว', 5, '2024-10-07 10:52:41', '2024-10-07 10:52:41', 'คนใจดีตัวดำ', 0, './upload/sdas.pdf'),
(2, 'sss', 'หิวข้าว', 5, '2024-10-07 10:52:41', '2024-10-07 10:52:41', 'คนใจดีตัวดำ', 1, NULL),
(3, 'เธงเธดเธเธขเธธ VHF', 'เธเธถเธเธเธฐ', 2, '2024-10-07 00:00:00', '2024-10-08 00:00:00', '42134123', 1, NULL),
(4, 'เธงเธดเธเธขเธธ VHF', 'เธเธเธชเธญเธ', 2, '2024-10-07 00:00:00', '2024-10-07 00:00:00', '0', 1, NULL),
(5, 'วิทยุ VHF', 'ฝึกงะ', 2, '2024-10-07 00:00:00', '2024-10-08 13:46:29', '0', 1, NULL),
(6, 'วิทยุ VHF', 'ฝึกงะsssss', 10, '2024-10-25 00:00:00', '2024-10-25 00:00:00', '0', 1, NULL),
(7, 'วิทยุ VHF', 'ฝึกงะsaadasdas', 6, '2024-10-25 00:00:00', '2024-11-30 00:00:00', '0', 1, NULL),
(9, 'วิทยุ VHF', 'ฝึกงะ', 2, '2024-10-08 00:00:00', '2024-11-09 00:00:00', 'ชโย', 1, '67050223daea38.47384589.png'),
(10, 'วิทยุ VHF', 'yjyt,k.ljkhgftde', 3, '2024-10-08 00:00:00', '2024-11-09 00:00:00', 'ชโย', 0, '6705029139fba2.72909500.png'),
(11, 'วิทยุ VHF', 'ฝึกงะ', 1, '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'ชโย', 1, '6705035313b531.50751534.png'),
(14, 'วิทยุ VHF', 's', 3, '2024-10-08 00:00:00', '2024-11-02 00:00:00', 'ชโยasdasdas', 1, '670503ec814bd2.22556478.png'),
(15, 'วิทยุ VHF', 's', 3, '2024-10-08 00:00:00', '2024-11-09 00:00:00', 'ชโยasdasdas', 0, '67050ad5917d98.60707260.pdf'),
(17, 'วิทยุ VHF', 'ฝึกงะ', 10, '2024-10-10 00:00:00', '2024-10-19 00:00:00', 'ชโยasdasdas', 0, '6707a603a9cd28.04535421.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `create_datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `eventsid` int(11) NOT NULL,
  `eventsname` text NOT NULL,
  `eventsHead` text NOT NULL,
  `eventsmsg` text NOT NULL,
  `type` enum('0','1','2') NOT NULL,
  `eventspicH` text NOT NULL,
  `eventspicS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`eventsid`, `eventsname`, `eventsHead`, `eventsmsg`, `type`, `eventspicH`, `eventspicS`) VALUES
(3, 'งานบ้านรอง', 'งานบ้านหลัก', 'งานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้าน', '2', 'http://localhost/watsawankharam/public_html/uploads/img/10012024/H1', 'http://localhost/watsawankharam/public_html/uploads/img/10012024/S1'),
(8, 'งานบ้านรอง', 'งานบ้านหลัก', 'งานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้าน', '2', 'http://localhost/watsawankharam/public_html/uploads/img/10012024/H1', 'http://localhost/watsawankharam/public_html/uploads/img/10012024/S1'),
(9, 'งานบ้านรอง', 'งานบ้านหลัก', 'งานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้าน', '2', 'http://localhost/watsawankharam/public_html/uploads/img/10012024/H1', 'http://localhost/watsawankharam/public_html/uploads/img/10012024/S1'),
(10, 'งานบ้านรอง', 'งานบ้านหลัก', 'งานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้านงานบ้าน', '2', 'http://localhost/watsawankharam/public_html/uploads/img/10012024/H1', 'http://localhost/watsawankharam/public_html/uploads/img/10012024/S1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_heros`
--

CREATE TABLE `tbl_heros` (
  `heroid` int(11) NOT NULL,
  `heroheader` varchar(255) NOT NULL,
  `heroimg` varchar(255) NOT NULL,
  `herocontain` varchar(255) NOT NULL,
  `herocontainimg` varchar(255) NOT NULL,
  `type` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_type` enum('0','1','2','3') NOT NULL,
  `news_category` text NOT NULL,
  `news_group` enum('0','1','2','3') NOT NULL,
  `news_title` text NOT NULL,
  `description` text NOT NULL,
  `image_path` text NOT NULL,
  `publish_date_start` date NOT NULL,
  `publish_date_end` date NOT NULL,
  `publish_flag` text NOT NULL,
  `pin_flag` text NOT NULL,
  `deletion_flag` text NOT NULL,
  `create_Datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_people`
--

CREATE TABLE `tbl_people` (
  `people_id` int(11) NOT NULL,
  `people_type` enum('0','1','2','3') NOT NULL,
  `sort_oder` enum('0','1','2','3') NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `people_image` text NOT NULL,
  `publish_date_start` date NOT NULL,
  `publish_date_end` date NOT NULL,
  `publish_flag` text NOT NULL,
  `pin_flag` text NOT NULL,
  `deletion_flag` text NOT NULL,
  `create_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_person`
--

CREATE TABLE `tbl_person` (
  `personid` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `ser_id` int(11) NOT NULL,
  `ser_type` enum('0','1','2','3') NOT NULL,
  `ser_category` text NOT NULL,
  `ser_group` enum('0','1','2','3') NOT NULL,
  `sort_order` int(11) NOT NULL,
  `ser_title` text NOT NULL,
  `description` text NOT NULL,
  `ser_image` text NOT NULL,
  `publish_date_start` date NOT NULL,
  `publish_date_end` date NOT NULL,
  `publish_flag` text NOT NULL,
  `pin_flag` text NOT NULL,
  `deletion_flag` varchar(255) NOT NULL,
  `create_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usr`
--

CREATE TABLE `tbl_usr` (
  `userid` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `type` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_usr`
--

INSERT INTO `tbl_usr` (`userid`, `username`, `password`, `type`) VALUES
(1, 'watsawankharam', 'f1887d3f9e6ee7a32fe5e76f4ab80d63', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` char(50) NOT NULL DEFAULT '',
  `id` int(11) NOT NULL,
  `passing` char(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `name` char(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=tis620 COLLATE=tis620_thai_ci ROW_FORMAT=FIXED;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `id`, `passing`, `status`, `name`) VALUES
('admin2', 9, 'admin2', 1, 'admin2'),
('admin1', 8, 'admin1', 1, 'Chayothip Singhem'),
('admin', 6, 'admin', 1, 'addddmin');

-- --------------------------------------------------------

--
-- Table structure for table `uuuuu`
--

CREATE TABLE `uuuuu` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `uuuuu`
--

INSERT INTO `uuuuu` (`id`, `username`, `password`) VALUES
(1, 'testuser', '*350D5A9DE6F565C6D690F9BCBF42C8DF6747A78B'),
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `ans`
--
ALTER TABLE `ans`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`eventsid`);

--
-- Indexes for table `tbl_heros`
--
ALTER TABLE `tbl_heros`
  ADD PRIMARY KEY (`heroid`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_people`
--
ALTER TABLE `tbl_people`
  ADD PRIMARY KEY (`people_id`);

--
-- Indexes for table `tbl_person`
--
ALTER TABLE `tbl_person`
  ADD PRIMARY KEY (`personid`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`ser_id`);

--
-- Indexes for table `tbl_usr`
--
ALTER TABLE `tbl_usr`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uuuuu`
--
ALTER TABLE `uuuuu`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `eventsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_heros`
--
ALTER TABLE `tbl_heros`
  MODIFY `heroid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_people`
--
ALTER TABLE `tbl_people`
  MODIFY `people_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_person`
--
ALTER TABLE `tbl_person`
  MODIFY `personid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_usr`
--
ALTER TABLE `tbl_usr`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `uuuuu`
--
ALTER TABLE `uuuuu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
