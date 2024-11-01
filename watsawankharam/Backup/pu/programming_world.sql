-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 12:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `programming_world`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `username_account`, `email_account`, `password_account`, `salt_account`, `role_account`, `images_account`, `login_count_account`, `lock_account`, `ban_account`) VALUES
(1, 'Admin', 'admin@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$YkdKZU9NRGNSNjE4S0szcQ$l2wSW9JM8a6AGlxVrlng9gvWpyaIBlQ8U3OgzfOw/30', '830ee90071ef8ee6fa9cb0b00d0d423bfb4bcb0e5e92812c2134e393537085a30dd92bcc2e3125f2fe6c2fa80ec61c7f1d5022574e3041ffcc8e775bbe64294dc12ab1935480bf599840a0c28a1a4216bf52d46708f3928bdd4bff27b50daa74085530ded4b9f83e62df8221ab959f9f80ae81cec925e37a00cd61da21a32afb', 'admin', 'default_images_account.jpg', 0, 0, '2021-12-15 04:22:28'),
(2, 'User', 'user@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$dWQzeDlteERSQWtsMTVaSw$KKJdXgHhM3BklqYlMlsKF5d+Aj6b4BVnD36m5iccLiI', '7389f70a89e279fcbee843ddf40e2f5b14cfbfbb17b7c9bcfc2bec184284a11b2d052f6e544e1b943ff6c89ce8fdde6c4cef7bcdaf2e3d1f21b2bd86708a450591632658bf0647a66b69f9b5ded127d7dac6e147f1e185b52ede51ba6fd3e544d08485be9353b2af67fdde', 'member', 'default_images_account.jpg', 0, 0, '0000-00-00 00:00:00'),
(3, 'Member', 'member@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$cHVMRHZiSHdyWGIvNzdsTA$lK2r3+QyT9nNarqrTQ+BvVJ8XeJE80eWgQ1hJXHYJ3Q', '1e31f098fbb6268ba41a2e8644abaa5388c530ba17462fd93d82e513ad67f1b3fcb66208f0e3ef9a573347c4fbfe28d5cffd9954391a3b5caa79f5807f6de0dbe92a6c8e322e7de81620e12437656eb3a6ea325e7259b18904c6ec2582b3855cb0fe859b36f6826b146e0468c0b854ad273ec4d9a0613fe29560eba93f', 'member', 'default_images_account.jpg', 0, 0, '2021-12-15 04:26:02'),
(4, 'Namida Kitsune', 'namida@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$bUNCMy8vc0RDaHBwZWQxbg$2dC3aFjIXJ5a3DyMSlhNcW2TIfljcqlkvWhdi8UERzw', 'c4f49ab1b3e983e98d2e05422c0c732c7f46e47057cb97e52046b97898ab972b0d3db69274e7045e8fd76fbcc660851a01725d6c5546dcb134d0c28d98e4e7e3a75be25e948d7e042342a1e54e65e79888abfd7d09affcf9d3c71fac584c70229a8658cbfbf171856cd33fed624dc6a61640', 'admin', 'default_images_account.jpg', 0, 0, '0000-00-00 00:00:00'),
(6, 'Namida Kitsune', 'namida1@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$bzNGeElJT1J4RWJTaDNGTA$de+7WvdQgvjhozj5kcVRqgMZY6V1ZMUWDDzNqbtbvkM', 'f3b62974cd76cee9d3ce407ff32832cbafe4ffb5c63596ec9683af39dbffa9ccdb1e053ac9174d3f790c47c8cd680e02397e418a8b797f0145c4b701a312a99480621fade74c1a90b6a68a742d4a319732ff2cef79877d365e9ac3c6a66a2a056675c3e6113c6e57c3cd8d1a2778440c856129788b9f3e', 'member', 'default_images_account.jpg', 0, 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
