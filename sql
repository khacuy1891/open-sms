-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 06, 2019 at 07:20 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tests`
--

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(11) NOT NULL,
  `sms_to` int(11) UNSIGNED NOT NULL,
  `sent_status` int(2) UNSIGNED NOT NULL,
  `msg_response` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `sms_to`, `sent_status`, `msg_response`, `created_at`) VALUES
(5, 349566795, 1, 'Sent successfuly', '2019-04-06 10:23:32'),
(6, 349566795, 1, 'Sent successfuly', '2019-04-06 10:23:32'),
(7, 349566795, 1, 'Sent successfuly', '2019-04-06 10:23:32'),
(8, 349566795, 1, 'Sent successfuly', '2019-04-06 10:23:32'),
(9, 349566795, 0, 'Sent failure', '2019-04-06 10:25:31'),
(10, 349566795, 1, 'Sent successfuly', '2019-04-06 10:25:31'),
(11, 349566795, 0, 'Sent failure', '2019-04-06 10:31:13'),
(12, 349566795, 1, 'Sent successfuly', '2019-04-06 10:31:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
