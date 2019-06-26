-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 10:26 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_db`
--

CREATE TABLE `category_db` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_db`
--

INSERT INTO `category_db` (`category_id`, `category_name`) VALUES
(15, 'Beds'),
(16, 'Wardrobes'),
(17, 'Sofas');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `enquiry` varchar(255) NOT NULL,
  `deal_enquiry` varchar(255) NOT NULL,
  `completed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `full_name`, `email_id`, `telephone`, `enquiry`, `deal_enquiry`, `completed`) VALUES
(1, 'Ramesh Thapa Magar', 'rameshthapamagar@gmail.com', '98787867887', 'I want to buy new sofa!', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `furniture_db`
--

CREATE TABLE `furniture_db` (
  `furniture_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `display` varchar(255) NOT NULL,
  `product_detail` varchar(255) NOT NULL,
  `view_images` varchar(255) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture_db`
--

INSERT INTO `furniture_db` (`furniture_id`, `name`, `description`, `price`, `display`, `product_detail`, `view_images`, `categoryId`) VALUES
(1, 'Four Poster', 'A beautiful four poster double bed.', 999, 'show', 'new', 'product1.jpg', 15),
(2, 'Sofa', 'A beautiful sofa with black color.', 1000, 'show', 'second hand', 'product4.jpg', 17),
(3, 'Wardrobe', 'Wooden Wardrobe', 599, 'show', 'new', 'product5.jpg', 16),
(4, 'Bed', 'Used only once \r\nColor:white', 350, 'hide', 'second hand', 'product2.jpg', 15),
(5, 'Double Sofa', 'Beautiful white double sofa', 799, 'hide', 'new', 'product3.jpg', 17);

-- --------------------------------------------------------

--
-- Table structure for table `updates_db`
--

CREATE TABLE `updates_db` (
  `update_id` int(11) NOT NULL,
  `update_title` varchar(255) NOT NULL,
  `update_description` varchar(255) NOT NULL,
  `update_date` date NOT NULL,
  `update_end_date` date NOT NULL,
  `update_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates_db`
--

INSERT INTO `updates_db` (`update_id`, `update_title`, `update_description`, `update_date`, `update_end_date`, `update_image`) VALUES
(2, 'Special Offer 10% On Over $600 Purchase', 'Flash Sale', '2019-06-01', '2019-06-10', 'update2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$tKTDbdOtuwzev1cJO0L3JuA13Mf6X/L/03FcbQv4D.aWIaabayvQC', 'super'),
(2, 'staff01', '$2y$10$hNLxZnVt/RJZuoKnO19fKuDB5JxL6CDK4L21DYUpY5nH72sTYM1ke', 'admin'),
(5, 'staff2', '$2y$10$pyalK0ytYzmIK/mlzKgnK.sr2qWuG/f4vQ3i2fKoVUxL81qgSJ7OS', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_db`
--
ALTER TABLE `category_db`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_db`
--
ALTER TABLE `furniture_db`
  ADD PRIMARY KEY (`furniture_id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `updates_db`
--
ALTER TABLE `updates_db`
  ADD PRIMARY KEY (`update_id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_db`
--
ALTER TABLE `category_db`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `furniture_db`
--
ALTER TABLE `furniture_db`
  MODIFY `furniture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `updates_db`
--
ALTER TABLE `updates_db`
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `furniture_db`
--
ALTER TABLE `furniture_db`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`categoryId`) REFERENCES `category_db` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
