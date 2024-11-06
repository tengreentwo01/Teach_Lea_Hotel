-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 05:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_build` int(11) NOT NULL,
  `room_floor` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_build`, `room_floor`, `room_no`, `checkin`, `checkout`, `status`) VALUES
(1, 1, 1, 1, '2024-11-03', '2024-11-06', '1'),
(2, 1, 1, 2, '2024-11-03', '2024-11-06', '1'),
(3, 1, 1, 3, '2024-11-03', '2024-11-06', '1'),
(4, 1, 1, 4, '2024-11-03', '2024-11-06', '1'),
(5, 1, 1, 5, '2024-11-03', '2024-11-06', '1'),
(6, 1, 1, 6, '2024-11-03', '2024-11-06', '1'),
(7, 1, 1, 7, '2024-11-03', '2024-11-06', '1'),
(8, 1, 1, 8, '2024-11-03', '2024-11-06', '1'),
(9, 1, 1, 9, '2024-11-03', '2024-11-06', '1'),
(10, 1, 1, 10, '2024-11-03', '2024-11-06', '1'),
(11, 1, 2, 1, '2024-11-03', '2024-11-06', '1'),
(12, 1, 2, 2, '2024-11-03', '2024-11-06', '1'),
(13, 1, 2, 3, '2024-11-03', '2024-11-06', '1'),
(14, 1, 2, 4, '2024-11-03', '2024-11-06', '1'),
(15, 1, 2, 5, '2024-11-03', '2024-11-06', '1'),
(16, 1, 2, 6, '2024-11-03', '2024-11-06', '1'),
(17, 1, 2, 7, '2024-11-03', '2024-11-06', '1'),
(18, 1, 2, 8, '2024-11-03', '2024-11-06', '1'),
(19, 1, 2, 9, '2024-11-03', '2024-11-06', '1'),
(20, 1, 2, 10, '2024-11-03', '2024-11-06', '1'),
(21, 1, 3, 1, '2024-11-03', '2024-11-06', '1'),
(22, 1, 3, 2, '2024-11-03', '2024-11-06', '1'),
(23, 1, 3, 3, '2024-11-03', '2024-11-06', '1'),
(24, 1, 3, 4, '2024-11-03', '2024-11-06', '1'),
(25, 1, 3, 5, '2024-11-03', '2024-11-06', '1'),
(26, 1, 3, 6, '2024-11-03', '2024-11-06', '1'),
(27, 1, 3, 7, '2024-11-03', '2024-11-06', '1'),
(28, 1, 3, 8, '2024-11-03', '2024-11-06', '1'),
(29, 1, 3, 9, '2024-11-03', '2024-11-06', '1'),
(30, 1, 3, 10, '2024-11-03', '2024-11-06', '1'),
(31, 1, 4, 1, '2024-11-03', '2024-11-06', '1'),
(32, 1, 4, 2, '2024-11-03', '2024-11-06', '1'),
(33, 1, 4, 3, '2024-11-03', '2024-11-06', '1'),
(34, 1, 4, 4, '2024-11-03', '2024-11-06', '1'),
(35, 1, 4, 5, '2024-11-03', '2024-11-06', '1'),
(36, 1, 4, 6, '2024-11-03', '2024-11-06', '1'),
(37, 1, 4, 7, '2024-11-03', '2024-11-06', '1'),
(38, 1, 4, 8, '2024-11-03', '2024-11-06', '1'),
(39, 1, 4, 9, '2024-11-03', '2024-11-06', '1'),
(40, 1, 4, 10, '2024-11-03', '2024-11-06', '1'),
(41, 1, 5, 1, '2024-11-03', '2024-11-06', '1'),
(42, 1, 5, 2, '2024-11-03', '2024-11-06', '1'),
(43, 1, 5, 3, '2024-11-03', '2024-11-06', '1'),
(44, 1, 5, 4, '2024-11-03', '2024-11-06', '1'),
(45, 1, 5, 5, '2024-11-03', '2024-11-06', '1'),
(46, 1, 5, 6, '2024-11-03', '2024-11-06', '1'),
(47, 1, 5, 7, '2024-11-03', '2024-11-06', '1'),
(48, 1, 5, 8, '2024-11-03', '2024-11-06', '1'),
(49, 1, 5, 9, '2024-11-03', '2024-11-06', '1'),
(50, 1, 5, 10, '2024-11-03', '2024-11-06', '1'),
(51, 1, 6, 1, '2024-11-03', '2024-11-06', '1'),
(52, 1, 6, 2, '2024-11-03', '2024-11-06', '1'),
(53, 1, 6, 3, '2024-11-03', '2024-11-06', '1'),
(54, 1, 6, 4, '2024-11-03', '2024-11-06', '1'),
(55, 1, 6, 5, '2024-11-03', '2024-11-06', '1'),
(56, 1, 6, 6, '2024-11-03', '2024-11-06', '1'),
(57, 1, 6, 7, '2024-11-03', '2024-11-06', '1'),
(58, 1, 6, 8, '2024-11-03', '2024-11-06', '1'),
(59, 1, 6, 9, '2024-11-03', '2024-11-06', '1'),
(60, 1, 6, 10, '2024-11-03', '2024-11-06', '1'),
(61, 1, 7, 1, '2024-11-03', '2024-11-06', '1'),
(62, 1, 7, 2, '2024-11-03', '2024-11-06', '1'),
(63, 1, 7, 3, '2024-11-03', '2024-11-06', '1'),
(64, 1, 7, 4, '2024-11-03', '2024-11-06', '1'),
(65, 1, 7, 5, '2024-11-03', '2024-11-06', '1'),
(66, 1, 7, 6, '2024-11-03', '2024-11-06', '1'),
(67, 1, 7, 7, '2024-11-03', '2024-11-06', '1'),
(68, 1, 7, 8, '2024-11-03', '2024-11-06', '1'),
(69, 1, 7, 9, '2024-11-03', '2024-11-06', '1'),
(70, 1, 7, 10, '2024-11-03', '2024-11-06', '1'),
(71, 1, 8, 1, '2024-11-03', '2024-11-06', '1'),
(72, 1, 8, 2, '2024-11-03', '2024-11-06', '1'),
(73, 1, 8, 3, '2024-11-03', '2024-11-06', '1'),
(74, 1, 8, 4, '2024-11-03', '2024-11-06', '1'),
(75, 1, 8, 5, '2024-11-03', '2024-11-06', '1'),
(76, 1, 8, 6, '2024-11-03', '2024-11-06', '1'),
(77, 1, 8, 7, '2024-11-03', '2024-11-06', '1'),
(78, 1, 8, 8, '2024-11-03', '2024-11-06', '1'),
(79, 1, 8, 9, '2024-11-03', '2024-11-06', '1'),
(80, 1, 8, 10, '2024-11-03', '2024-11-06', '1'),
(81, 1, 9, 1, '2024-11-03', '2024-11-06', '1'),
(82, 1, 9, 2, '2024-11-03', '2024-11-06', '1'),
(83, 1, 9, 3, '2024-11-03', '2024-11-06', '1'),
(84, 1, 9, 4, '2024-11-03', '2024-11-06', '1'),
(85, 1, 9, 5, '2024-11-03', '2024-11-06', '1'),
(86, 1, 9, 6, '2024-11-03', '2024-11-06', '1'),
(87, 1, 9, 7, '2024-11-03', '2024-11-06', '1'),
(88, 1, 9, 8, '2024-11-03', '2024-11-06', '1'),
(89, 1, 9, 9, '2024-11-03', '2024-11-06', '1'),
(90, 1, 9, 10, '2024-11-03', '2024-11-06', '1'),
(91, 1, 10, 1, '2024-11-03', '2024-11-06', '1'),
(92, 1, 10, 2, '2024-11-03', '2024-11-06', '1'),
(93, 1, 10, 3, '2024-11-03', '2024-11-06', '1'),
(94, 1, 10, 4, '2024-11-03', '2024-11-06', '1'),
(95, 1, 10, 5, '2024-11-03', '2024-11-06', '1'),
(96, 1, 10, 6, '2024-11-03', '2024-11-06', '1'),
(97, 1, 10, 7, '2024-11-03', '2024-11-06', '1'),
(98, 1, 10, 8, '2024-11-03', '2024-11-06', '1'),
(99, 1, 10, 9, '2024-11-03', '2024-11-06', '1'),
(100, 1, 10, 10, '2024-11-03', '2024-11-06', '1'),
(101, 2, 1, 1, '2024-11-03', '2024-11-06', '1'),
(102, 2, 1, 2, '2024-11-03', '2024-11-06', '1'),
(103, 2, 1, 3, '2024-11-03', '2024-11-06', '1'),
(104, 2, 1, 4, '2024-11-03', '2024-11-06', '1'),
(105, 2, 1, 5, '2024-11-03', '2024-11-06', '1'),
(106, 2, 1, 6, '2024-11-03', '2024-11-06', '1'),
(107, 2, 1, 7, '2024-11-03', '2024-11-06', '1'),
(108, 2, 1, 8, '2024-11-03', '2024-11-06', '1'),
(109, 2, 1, 9, '2024-11-03', '2024-11-06', '1'),
(110, 2, 1, 10, '2024-11-03', '2024-11-06', '1'),
(111, 2, 2, 1, '2024-11-03', '2024-11-06', '1'),
(112, 2, 2, 2, '2024-11-03', '2024-11-06', '1'),
(113, 2, 2, 3, '2024-11-03', '2024-11-06', '1'),
(114, 2, 2, 4, '2024-11-03', '2024-11-06', '1'),
(115, 2, 2, 5, '2024-11-03', '2024-11-06', '1'),
(116, 2, 2, 6, '2024-11-03', '2024-11-06', '1'),
(117, 2, 2, 7, '2024-11-03', '2024-11-06', '1'),
(118, 2, 2, 8, '2024-11-03', '2024-11-06', '1'),
(119, 2, 2, 9, '2024-11-03', '2024-11-06', '1'),
(120, 2, 2, 10, '2024-11-03', '2024-11-06', '1'),
(121, 2, 3, 1, '2024-11-03', '2024-11-06', '1'),
(122, 2, 3, 2, '2024-11-03', '2024-11-06', '1'),
(123, 2, 3, 3, '2024-11-03', '2024-11-06', '1'),
(124, 2, 3, 4, '2024-11-03', '2024-11-06', '1'),
(125, 2, 3, 5, '2024-11-03', '2024-11-06', '1'),
(126, 2, 3, 6, '2024-11-03', '2024-11-06', '1'),
(127, 2, 3, 7, '2024-11-03', '2024-11-06', '1'),
(128, 2, 3, 8, '2024-11-03', '2024-11-06', '1'),
(129, 2, 3, 9, '2024-11-03', '2024-11-06', '1'),
(130, 2, 3, 10, '2024-11-03', '2024-11-06', '1'),
(131, 2, 4, 1, '2024-11-03', '2024-11-06', '1'),
(132, 2, 4, 2, '2024-11-03', '2024-11-06', '1'),
(133, 2, 4, 3, '2024-11-03', '2024-11-06', '1'),
(134, 2, 4, 4, '2024-11-03', '2024-11-06', '1'),
(135, 2, 4, 5, '2024-11-03', '2024-11-06', '1'),
(136, 2, 4, 6, '2024-11-03', '2024-11-06', '1'),
(137, 2, 4, 7, '2024-11-03', '2024-11-06', '1'),
(138, 2, 4, 8, '2024-11-03', '2024-11-06', '1'),
(139, 2, 4, 9, '2024-11-03', '2024-11-06', '1'),
(140, 2, 4, 10, '2024-11-03', '2024-11-06', '1'),
(141, 2, 5, 1, '2024-11-03', '2024-11-06', '1'),
(142, 2, 5, 2, '2024-11-03', '2024-11-06', '1'),
(143, 2, 5, 3, '2024-11-03', '2024-11-06', '1'),
(144, 2, 5, 4, '2024-11-03', '2024-11-06', '1'),
(145, 2, 5, 5, '2024-11-03', '2024-11-06', '1'),
(146, 2, 5, 6, '2024-11-03', '2024-11-06', '1'),
(147, 2, 5, 7, '2024-11-03', '2024-11-06', '1'),
(148, 2, 5, 8, '2024-11-03', '2024-11-06', '1'),
(149, 2, 5, 9, '2024-11-03', '2024-11-06', '1'),
(150, 2, 5, 10, '2024-11-03', '2024-11-06', '1'),
(151, 2, 6, 1, '2024-11-03', '2024-11-06', '1'),
(152, 2, 6, 2, '2024-11-03', '2024-11-06', '1'),
(153, 2, 6, 3, '2024-11-03', '2024-11-06', '1'),
(154, 2, 6, 4, '2024-11-03', '2024-11-06', '1'),
(155, 2, 6, 5, '2024-11-03', '2024-11-06', '1'),
(156, 2, 6, 6, '2024-11-03', '2024-11-06', '1'),
(157, 2, 6, 7, '2024-11-03', '2024-11-06', '1'),
(158, 2, 6, 8, '2024-11-03', '2024-11-06', '1'),
(159, 2, 6, 9, '2024-11-03', '2024-11-06', '1'),
(160, 2, 6, 10, '2024-11-03', '2024-11-06', '1'),
(161, 2, 7, 1, '2024-11-03', '2024-11-06', '1'),
(162, 2, 7, 2, '2024-11-03', '2024-11-06', '1'),
(163, 2, 7, 3, '2024-11-03', '2024-11-06', '1'),
(164, 2, 7, 4, '2024-11-03', '2024-11-06', '1'),
(165, 2, 7, 5, '2024-11-03', '2024-11-06', '1'),
(166, 2, 7, 6, '2024-11-03', '2024-11-06', '1'),
(167, 2, 7, 7, '2024-11-03', '2024-11-06', '1'),
(168, 2, 7, 8, '2024-11-03', '2024-11-06', '1'),
(169, 2, 7, 9, '2024-11-03', '2024-11-06', '1'),
(170, 2, 7, 10, '2024-11-03', '2024-11-06', '1'),
(171, 2, 8, 1, '2024-11-03', '2024-11-06', '1'),
(172, 2, 8, 2, '2024-11-03', '2024-11-06', '1'),
(173, 2, 8, 3, '2024-11-03', '2024-11-06', '1'),
(174, 2, 8, 4, '2024-11-03', '2024-11-06', '1'),
(175, 2, 8, 5, '2024-11-03', '2024-11-06', '1'),
(176, 2, 8, 6, '2024-11-03', '2024-11-06', '1'),
(177, 2, 8, 7, '2024-11-03', '2024-11-06', '1'),
(178, 2, 8, 8, '2024-11-03', '2024-11-06', '1'),
(179, 2, 8, 9, '2024-11-03', '2024-11-06', '1'),
(180, 2, 8, 10, '2024-11-03', '2024-11-06', '1'),
(181, 2, 9, 1, '2024-11-03', '2024-11-06', '1'),
(182, 2, 9, 2, '2024-11-03', '2024-11-06', '1'),
(183, 2, 9, 3, '2024-11-03', '2024-11-06', '1'),
(184, 2, 9, 4, '2024-11-03', '2024-11-06', '1'),
(185, 2, 9, 5, '2024-11-03', '2024-11-06', '1'),
(186, 2, 9, 6, '2024-11-03', '2024-11-06', '1'),
(187, 2, 9, 7, '2024-11-03', '2024-11-06', '1'),
(188, 2, 9, 8, '2024-11-03', '2024-11-06', '1'),
(189, 2, 9, 9, '2024-11-03', '2024-11-06', '1'),
(190, 2, 9, 10, '2024-11-03', '2024-11-06', '1'),
(191, 2, 10, 1, '2024-11-03', '2024-11-06', '1'),
(192, 2, 10, 2, '2024-11-03', '2024-11-06', '1'),
(193, 2, 10, 3, '2024-11-03', '2024-11-06', '1'),
(194, 2, 10, 4, '2024-11-03', '2024-11-06', '1'),
(195, 2, 10, 5, '2024-11-03', '2024-11-06', '1'),
(196, 2, 10, 6, '2024-11-03', '2024-11-06', '1'),
(197, 2, 10, 7, '2024-11-03', '2024-11-06', '1'),
(198, 2, 10, 8, '2024-11-03', '2024-11-06', '1'),
(199, 2, 10, 9, '2024-11-03', '2024-11-06', '1'),
(200, 2, 10, 10, '2024-11-03', '2024-11-06', '1'),
(201, 3, 1, 1, '2024-11-03', '2024-11-06', '1'),
(202, 3, 1, 2, '2024-11-03', '2024-11-06', '1'),
(203, 3, 1, 3, '2024-11-03', '2024-11-06', '1'),
(204, 3, 1, 4, '2024-11-03', '2024-11-06', '1'),
(205, 3, 1, 5, '2024-11-03', '2024-11-06', '1'),
(206, 3, 1, 6, '2024-11-03', '2024-11-06', '1'),
(207, 3, 1, 7, '2024-11-03', '2024-11-06', '1'),
(208, 3, 1, 8, '2024-11-03', '2024-11-06', '1'),
(209, 3, 1, 9, '2024-11-03', '2024-11-06', '1'),
(210, 3, 1, 10, '2024-11-03', '2024-11-06', '1'),
(211, 3, 2, 1, '2024-11-03', '2024-11-06', '1'),
(212, 3, 2, 2, '2024-11-03', '2024-11-06', '1'),
(213, 3, 2, 3, '2024-11-03', '2024-11-06', '1'),
(214, 3, 2, 4, '2024-11-03', '2024-11-06', '1'),
(215, 3, 2, 5, '2024-11-03', '2024-11-06', '1'),
(216, 3, 2, 6, '2024-11-03', '2024-11-06', '1'),
(217, 3, 2, 7, '2024-11-03', '2024-11-06', '1'),
(218, 3, 2, 8, '2024-11-03', '2024-11-06', '1'),
(219, 3, 2, 9, '2024-11-03', '2024-11-06', '1'),
(220, 3, 2, 10, '2024-11-03', '2024-11-06', '1'),
(221, 3, 3, 1, '2024-11-03', '2024-11-06', '1'),
(222, 3, 3, 2, '2024-11-03', '2024-11-06', '1'),
(223, 3, 3, 3, '2024-11-03', '2024-11-06', '1'),
(224, 3, 3, 4, '2024-11-03', '2024-11-06', '1'),
(225, 3, 3, 5, '2024-11-03', '2024-11-06', '1'),
(226, 3, 3, 6, '2024-11-03', '2024-11-06', '1'),
(227, 3, 3, 7, '2024-11-03', '2024-11-06', '1'),
(228, 3, 3, 8, '2024-11-03', '2024-11-06', '1'),
(229, 3, 3, 9, '2024-11-03', '2024-11-06', '1'),
(230, 3, 3, 10, '2024-11-03', '2024-11-06', '1'),
(231, 3, 4, 1, '2024-11-03', '2024-11-06', '1'),
(232, 3, 4, 2, '2024-11-03', '2024-11-06', '1'),
(233, 3, 4, 3, '2024-11-03', '2024-11-06', '1'),
(234, 3, 4, 4, '2024-11-03', '2024-11-06', '1'),
(235, 3, 4, 5, '2024-11-03', '2024-11-06', '1'),
(236, 3, 4, 6, '2024-11-03', '2024-11-06', '1'),
(237, 3, 4, 7, '2024-11-03', '2024-11-06', '1'),
(238, 3, 4, 8, '2024-11-03', '2024-11-06', '1'),
(239, 3, 4, 9, '2024-11-03', '2024-11-06', '1'),
(240, 3, 4, 10, '2024-11-03', '2024-11-06', '1'),
(241, 3, 5, 1, '2024-11-03', '2024-11-06', '1'),
(242, 3, 5, 2, '2024-11-03', '2024-11-06', '1'),
(243, 3, 5, 3, '2024-11-03', '2024-11-06', '1'),
(244, 3, 5, 4, '2024-11-03', '2024-11-06', '1'),
(245, 3, 5, 5, '2024-11-03', '2024-11-06', '1'),
(246, 3, 5, 6, '2024-11-03', '2024-11-06', '1'),
(247, 3, 5, 7, '2024-11-03', '2024-11-06', '1'),
(248, 3, 5, 8, '2024-11-03', '2024-11-06', '1'),
(249, 3, 5, 9, '2024-11-03', '2024-11-06', '1'),
(250, 3, 5, 10, '2024-11-03', '2024-11-06', '1'),
(251, 3, 6, 1, '2024-11-03', '2024-11-06', '1'),
(252, 3, 6, 2, '2024-11-03', '2024-11-06', '1'),
(253, 3, 6, 3, '2024-11-03', '2024-11-06', '1'),
(254, 3, 6, 4, '2024-11-03', '2024-11-06', '1'),
(255, 3, 6, 5, '2024-11-03', '2024-11-06', '1'),
(256, 3, 6, 6, '2024-11-03', '2024-11-06', '1'),
(257, 3, 6, 7, '2024-11-03', '2024-11-06', '1'),
(258, 3, 6, 8, '2024-11-03', '2024-11-06', '1'),
(259, 3, 6, 9, '2024-11-03', '2024-11-06', '1'),
(260, 3, 6, 10, '2024-11-03', '2024-11-06', '1'),
(261, 3, 7, 1, '2024-11-03', '2024-11-06', '1'),
(262, 3, 7, 2, '2024-11-03', '2024-11-06', '1'),
(263, 3, 7, 3, '2024-11-03', '2024-11-06', '1'),
(264, 3, 7, 4, '2024-11-03', '2024-11-06', '1'),
(265, 3, 7, 5, '2024-11-03', '2024-11-06', '1'),
(266, 3, 7, 6, '2024-11-03', '2024-11-06', '1'),
(267, 3, 7, 7, '2024-11-03', '2024-11-06', '1'),
(268, 3, 7, 8, '2024-11-03', '2024-11-06', '1'),
(269, 3, 7, 9, '2024-11-03', '2024-11-06', '1'),
(270, 3, 7, 10, '2024-11-03', '2024-11-06', '1'),
(271, 3, 8, 1, '2024-11-03', '2024-11-06', '1'),
(272, 3, 8, 2, '2024-11-03', '2024-11-06', '1'),
(273, 3, 8, 3, '2024-11-03', '2024-11-06', '1'),
(274, 3, 8, 4, '2024-11-03', '2024-11-06', '1'),
(275, 3, 8, 5, '2024-11-03', '2024-11-06', '1'),
(276, 3, 8, 6, '2024-11-03', '2024-11-06', '1'),
(277, 3, 8, 7, '2024-11-03', '2024-11-06', '1'),
(278, 3, 8, 8, '2024-11-03', '2024-11-06', '1'),
(279, 3, 8, 9, '2024-11-03', '2024-11-06', '1'),
(280, 3, 8, 10, '2024-11-03', '2024-11-06', '1'),
(281, 3, 9, 1, '2024-11-03', '2024-11-06', '1'),
(282, 3, 9, 2, '2024-11-03', '2024-11-06', '1'),
(283, 3, 9, 3, '2024-11-03', '2024-11-06', '1'),
(284, 3, 9, 4, '2024-11-03', '2024-11-06', '1'),
(285, 3, 9, 5, '2024-11-03', '2024-11-06', '1'),
(286, 3, 9, 6, '2024-11-03', '2024-11-06', '1'),
(287, 3, 9, 7, '2024-11-03', '2024-11-06', '1'),
(288, 3, 9, 8, '2024-11-03', '2024-11-06', '1'),
(289, 3, 9, 9, '2024-11-03', '2024-11-06', '1'),
(290, 3, 9, 10, '2024-11-03', '2024-11-06', '1'),
(291, 3, 10, 1, '2024-11-03', '2024-11-06', '1'),
(292, 3, 10, 2, '2024-11-03', '2024-11-06', '1'),
(293, 3, 10, 3, '2024-11-03', '2024-11-06', '1'),
(294, 3, 10, 4, '2024-11-03', '2024-11-06', '1'),
(295, 3, 10, 5, '2024-11-03', '2024-11-06', '1'),
(296, 3, 10, 6, '2024-11-03', '2024-11-06', '1'),
(297, 3, 10, 7, '2024-11-03', '2024-11-06', '1'),
(298, 3, 10, 8, '2024-11-03', '2024-11-06', '1'),
(299, 3, 10, 9, '2024-11-03', '2024-11-06', '1'),
(300, 3, 10, 10, '2024-11-03', '2024-11-06', '1'),
(301, 4, 1, 1, '2024-11-03', '2024-11-06', '1'),
(302, 4, 1, 2, '2024-11-03', '2024-11-06', '1'),
(303, 4, 1, 3, '2024-11-03', '2024-11-06', '1'),
(304, 4, 1, 4, '2024-11-03', '2024-11-06', '1'),
(305, 4, 1, 5, '2024-11-03', '2024-11-06', '1'),
(306, 4, 1, 6, '2024-11-03', '2024-11-06', '1'),
(307, 4, 1, 7, '2024-11-03', '2024-11-06', '1'),
(308, 4, 1, 8, '2024-11-03', '2024-11-06', '1'),
(309, 4, 1, 9, '2024-11-03', '2024-11-06', '1'),
(310, 4, 1, 10, '2024-11-03', '2024-11-06', '1'),
(311, 4, 2, 1, '2024-11-03', '2024-11-06', '1'),
(312, 4, 2, 2, '2024-11-03', '2024-11-06', '1'),
(313, 4, 2, 3, '2024-11-03', '2024-11-06', '1'),
(314, 4, 2, 4, '2024-11-03', '2024-11-06', '1'),
(315, 4, 2, 5, '2024-11-03', '2024-11-06', '1'),
(316, 4, 2, 6, '2024-11-03', '2024-11-06', '1'),
(317, 4, 2, 7, '2024-11-03', '2024-11-06', '1'),
(318, 4, 2, 8, '2024-11-03', '2024-11-06', '1'),
(319, 4, 2, 9, '2024-11-03', '2024-11-06', '1'),
(320, 4, 2, 10, '2024-11-03', '2024-11-06', '1'),
(321, 4, 3, 1, '2024-11-03', '2024-11-06', '1'),
(322, 4, 3, 2, '2024-11-03', '2024-11-06', '1'),
(323, 4, 3, 3, '2024-11-03', '2024-11-06', '1'),
(324, 4, 3, 4, '2024-11-03', '2024-11-06', '1'),
(325, 4, 3, 5, '2024-11-03', '2024-11-06', '1'),
(326, 4, 3, 6, '2024-11-03', '2024-11-06', '1'),
(327, 4, 3, 7, '2024-11-03', '2024-11-06', '1'),
(328, 4, 3, 8, '2024-11-03', '2024-11-06', '1'),
(329, 4, 3, 9, '2024-11-03', '2024-11-06', '1'),
(330, 4, 3, 10, '2024-11-03', '2024-11-06', '1'),
(331, 4, 4, 1, '2024-11-03', '2024-11-06', '1'),
(332, 4, 4, 2, '2024-11-03', '2024-11-06', '1'),
(333, 4, 4, 3, '2024-11-03', '2024-11-06', '1'),
(334, 4, 4, 4, '2024-11-03', '2024-11-06', '1'),
(335, 4, 4, 5, '2024-11-03', '2024-11-06', '1'),
(336, 4, 4, 6, '2024-11-03', '2024-11-06', '1'),
(337, 4, 4, 7, '2024-11-03', '2024-11-06', '1'),
(338, 4, 4, 8, '2024-11-03', '2024-11-06', '1'),
(339, 4, 4, 9, '2024-11-03', '2024-11-06', '1'),
(340, 4, 4, 10, '2024-11-03', '2024-11-06', '1'),
(341, 4, 5, 1, '2024-11-03', '2024-11-06', '1'),
(342, 4, 5, 2, '2024-11-03', '2024-11-06', '1'),
(343, 4, 5, 3, '2024-11-03', '2024-11-06', '1'),
(344, 4, 5, 4, '2024-11-03', '2024-11-06', '1'),
(345, 4, 5, 5, '2024-11-03', '2024-11-06', '1'),
(346, 4, 5, 6, '2024-11-03', '2024-11-06', '1'),
(347, 4, 5, 7, '2024-11-03', '2024-11-06', '1'),
(348, 4, 5, 8, '2024-11-03', '2024-11-06', '1'),
(349, 4, 5, 9, '2024-11-03', '2024-11-06', '1'),
(350, 4, 5, 10, '2024-11-03', '2024-11-06', '1'),
(351, 4, 6, 1, '2024-11-03', '2024-11-06', '1'),
(352, 4, 6, 2, '2024-11-03', '2024-11-06', '1'),
(353, 4, 6, 3, '2024-11-03', '2024-11-06', '1'),
(354, 4, 6, 4, '2024-11-03', '2024-11-06', '1'),
(355, 4, 6, 5, '2024-11-03', '2024-11-06', '1'),
(356, 4, 6, 6, '2024-11-03', '2024-11-06', '1'),
(357, 4, 6, 7, '2024-11-03', '2024-11-06', '1'),
(358, 4, 6, 8, '2024-11-03', '2024-11-06', '1'),
(359, 4, 6, 9, '2024-11-03', '2024-11-06', '1'),
(360, 4, 6, 10, '2024-11-03', '2024-11-06', '1'),
(361, 4, 7, 1, '2024-11-03', '2024-11-06', '1'),
(362, 4, 7, 2, '2024-11-03', '2024-11-06', '1'),
(363, 4, 7, 3, '2024-11-03', '2024-11-06', '1'),
(364, 4, 7, 4, '2024-11-03', '2024-11-06', '1'),
(365, 4, 7, 5, '2024-11-03', '2024-11-06', '1'),
(366, 4, 7, 6, '2024-11-03', '2024-11-06', '1'),
(367, 4, 7, 7, '2024-11-03', '2024-11-06', '1'),
(368, 4, 7, 8, '2024-11-03', '2024-11-06', '1'),
(369, 4, 7, 9, '2024-11-03', '2024-11-06', '1'),
(370, 4, 7, 10, '2024-11-03', '2024-11-06', '1'),
(371, 4, 8, 1, '2024-11-03', '2024-11-06', '1'),
(372, 4, 8, 2, '2024-11-03', '2024-11-06', '1'),
(373, 4, 8, 3, '2024-11-03', '2024-11-06', '1'),
(374, 4, 8, 4, '2024-11-03', '2024-11-06', '1'),
(375, 4, 8, 5, '2024-11-03', '2024-11-06', '1'),
(376, 4, 8, 6, '2024-11-03', '2024-11-06', '1'),
(377, 4, 8, 7, '2024-11-03', '2024-11-06', '1'),
(378, 4, 8, 8, '2024-11-03', '2024-11-06', '1'),
(379, 4, 8, 9, '2024-11-03', '2024-11-06', '1'),
(380, 4, 8, 10, '2024-11-03', '2024-11-06', '1'),
(381, 4, 9, 1, '2024-11-03', '2024-11-06', '1'),
(382, 4, 9, 2, '2024-11-03', '2024-11-06', '1'),
(383, 4, 9, 3, '2024-11-03', '2024-11-06', '1'),
(384, 4, 9, 4, '2024-11-03', '2024-11-06', '1'),
(385, 4, 9, 5, '2024-11-03', '2024-11-06', '1'),
(386, 4, 9, 6, '2024-11-03', '2024-11-06', '1'),
(387, 4, 9, 7, '2024-11-03', '2024-11-06', '1'),
(388, 4, 9, 8, '2024-11-03', '2024-11-06', '1'),
(389, 4, 9, 9, '2024-11-03', '2024-11-06', '1'),
(390, 4, 9, 10, '2024-11-03', '2024-11-06', '1'),
(391, 4, 10, 1, '2024-11-03', '2024-11-06', '1'),
(392, 4, 10, 2, '2024-11-03', '2024-11-06', '1'),
(393, 4, 10, 3, '2024-11-03', '2024-11-06', '1'),
(394, 4, 10, 4, '2024-11-03', '2024-11-06', '1'),
(395, 4, 10, 5, '2024-11-03', '2024-11-06', '1'),
(396, 4, 10, 6, '2024-11-03', '2024-11-06', '1'),
(397, 4, 10, 7, '2024-11-03', '2024-11-06', '1'),
(398, 4, 10, 8, '2024-11-03', '2024-11-06', '1'),
(399, 4, 10, 9, '2024-11-03', '2024-11-06', '1'),
(400, 4, 10, 10, '2024-11-03', '2024-11-06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` char(50) NOT NULL DEFAULT '',
  `id` int(11) NOT NULL,
  `passing` char(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `name` char(50) DEFAULT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=tis620 COLLATE=tis620_thai_ci ROW_FORMAT=FIXED;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `id`, `passing`, `status`, `name`, `room_id`) VALUES
('admin2', 9, 'admin2', 1, 'admin2', 0),
('admin1', 8, 'admin1', 1, 'Chayothip Singhem', 0),
('admin', 6, 'admin', 2, 'addddmin', 0),
('sss', 11, 'sss', 0, 'ชโยธิป', 0),
('ssss', 12, 'ssss', 0, 'ssss', 0),
('asd', 13, 'asd', 0, 'asdf', 0),
('df', 14, 'df', 0, 'dfg', 0),
('asdfa', 15, 'asdfa', 0, 'asdfa', 0),
('234', 16, '234', 0, '234', 0),
('asdfg', 17, 'asdfg', 0, 'asdfg', 0),
('qwer', 18, 'qwer', 0, 'qwer', 0),
('qwerqwer', 19, 'qwerqwer', 0, 'qwerqwer', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
