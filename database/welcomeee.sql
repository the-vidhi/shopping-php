-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 10:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `welcomeee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(11) NOT NULL,
  `admin_photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_photo`) VALUES
(4, 'vasu', 'vasu@gmail.com', 'Vasu@123', 'admin_images/admin_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `agetb`
--

CREATE TABLE `agetb` (
  `age_id` int(11) NOT NULL,
  `age_ratio` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agetb`
--

INSERT INTO `agetb` (`age_id`, `age_ratio`) VALUES
(1, '0-1'),
(2, '1-2'),
(3, '3-5'),
(4, '6-8'),
(5, '9+');

-- --------------------------------------------------------

--
-- Table structure for table `billtb`
--

CREATE TABLE `billtb` (
  `bill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `bill_email` varchar(35) NOT NULL,
  `bill_contact` bigint(20) NOT NULL,
  `bill_zip` varchar(8) NOT NULL,
  `order_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `bill_street` text NOT NULL,
  `bill_appartment` text NOT NULL,
  `order_notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billtb`
--

INSERT INTO `billtb` (`bill_id`, `user_id`, `user_name`, `bill_email`, `bill_contact`, `bill_zip`, `order_id`, `state_id`, `city_id`, `bill_street`, `bill_appartment`, `order_notes`) VALUES
(1, 9002, 'Hardik', 'hardik@gmail.com', 919797979797, '123456', 1, 15, 72, 'B-202,Krishna', '', ''),
(2, 9004, 'Pinal', 'pinal@gmail.com', 916565656564, '123456', 2, 1, 3, 'C-100,Bhagu', '', ''),
(3, 9004, 'Pinal', 'pinal@gmail.com', 916565656564, '123456', 3, 1, 3, 'C-100,Bhagunagr', '', ''),
(4, 9004, 'Pinal', 'pinal@gmail.com', 916565656564, '123456', 4, 1, 3, 'C-100,Bhagu', '', ''),
(5, 9004, 'Pinal', 'pinal@gmail.com', 916565656564, '123456', 5, 1, 3, 'C-100,Bhagu', '', ''),
(6, 9002, 'Hardik', 'hardik@gmail.com', 919797979797, '123456', 6, 15, 72, 'B-202,Krishna', '', ''),
(7, 9002, 'Hardik', 'hardik@gmail.com', 919797979797, '123456', 7, 15, 72, 'B-202,Krishna', '', ''),
(8, 9002, 'Hardik', 'hardik@gmail.com', 919797979797, '123456', 8, 17, 79, 'B-202,Krishna', '', ''),
(9, 9002, 'Hardik', 'hardik@gmail.com', 919797979797, '123456', 9, 15, 72, 'B-202,Krishna', '', ''),
(10, 9002, 'Hardik', 'hardik@gmail.com', 919797979797, '123456', 10, 15, 72, 'B-202,Krishna', '', ''),
(11, 9002, 'Hardik', 'hardik@gmail.com', 919797979797, '123456', 11, 15, 72, 'B-202,Krishna', '', ''),
(12, 9002, 'Hardik', 'hardik@gmail.com', 919797979797, '123456', 12, 15, 72, 'B-202,Krishna', '', ''),
(13, 9001, 'Vishal', 'vishal@gmail.com', 919898989898, '123456', 13, 1, 3, 'A-101,Sangrilla', '', ''),
(14, 9001, 'Vishal', 'vishal@gmail.com', 919898989898, '123456', 14, 1, 3, 'A-101,Sangrilla', '', ''),
(15, 9008, 'Hinal', 'hinal@gmail.com', 918080808080, '202020', 15, 23, 98, 'Bardoli', '', ''),
(16, 9008, 'Hinal', 'hinal@gmail.com', 918080808080, '202020', 16, 23, 98, 'Bardoli', '', ''),
(17, 9002, 'Hardik', 'hardik@gmail.com', 919797979797, '123456', 17, 15, 72, 'B-202,Krishna', '', ''),
(18, 9002, 'Hardik', 'hardik@gmail.com', 919797979797, '123456', 18, 15, 72, 'B-202,Krishna', '', ''),
(19, 9004, 'Pinal', 'pinal@gmail.com', 916565656564, '123456', 19, 1, 3, 'C-100,Bhagu', '', ''),
(20, 9009, 'Pankti', 'pankti@gmail.com', 917080708070, '333555', 20, 18, 82, '404,', '', ''),
(21, 9009, 'Pankti', 'pankti@gmail.com', 917080708070, '333555', 21, 18, 82, '404,', '', ''),
(22, 9002, 'Hardik', 'hardik@gmail.com', 919797979797, '123456', 22, 15, 72, 'B-202,Krishna', 'UG Street', ''),
(23, 9002, 'Hardik', 'hardik@gmail.com', 919797979797, '123456', 23, 15, 72, 'B-202,Krishna', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `brandtb`
--

CREATE TABLE `brandtb` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `brand_logo` varchar(500) NOT NULL,
  `brand_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brandtb`
--

INSERT INTO `brandtb` (`brand_id`, `brand_name`, `brand_logo`, `brand_description`) VALUES
(1, 'Shop Name', '../brand_logo/logo_1.jpg', 'Heavy'),
(5, 'Retroge', '../brand_logo/logo_5.jpg', 'Substantial'),
(6, 'Designers', '../brand_logo/logo_6.jpg', 'Styllist'),
(7, 'Oceandor', '../brand_logo/logo_7.jpg', 'Heavyyyy'),
(8, 'Photograph', '../brand_logo/logo_8.jpg', 'Amazing'),
(16, 'Other', '../brand_logo/logo_16.JPG', 'No Descriptin');

-- --------------------------------------------------------

--
-- Table structure for table `careertb`
--

CREATE TABLE `careertb` (
  `career_id` int(11) NOT NULL,
  `career_name` varchar(30) NOT NULL,
  `career_email` varchar(50) NOT NULL,
  `career_phone` varchar(15) NOT NULL,
  `career_resume` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careertb`
--

INSERT INTO `careertb` (`career_id`, `career_name`, `career_email`, `career_phone`, `career_resume`, `user_id`) VALUES
(5, 'Vishal', 'vishal@gmail.com', '+918888888888', '../resume/resume_5.txt', 9001),
(6, 'Pankti', 'pankti@gmail.com', '+917777999988', '../resume/resume_6.txt', 9009),
(7, 'Dharmik', 'hardik@gmail.com', '+918888888888', '../resume/resume_7.txt', 9002);

-- --------------------------------------------------------

--
-- Table structure for table `carttb`
--

CREATE TABLE `carttb` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carttb`
--

INSERT INTO `carttb` (`cart_id`, `user_id`, `product_id`, `qty`) VALUES
(112, 9001, 39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_itemtb`
--

CREATE TABLE `cart_itemtb` (
  `cart_item_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_itemtb`
--

INSERT INTO `cart_itemtb` (`cart_item_id`, `product_id`, `product_qty`, `cart_id`) VALUES
(55, 13, 3, 40),
(56, 2, 1, 40),
(58, 2, 1, 42),
(59, 13, 2, 43),
(60, 13, 1, 45),
(61, 13, 1, 47),
(62, 31, 1, 81);

-- --------------------------------------------------------

--
-- Table structure for table `citytb`
--

CREATE TABLE `citytb` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citytb`
--

INSERT INTO `citytb` (`city_id`, `city_name`, `state_id`) VALUES
(3, 'Vadodara', 1),
(4, 'Rajkot', 1),
(7, 'Velloor', 2),
(9, 'Mumbai', 7),
(26, 'Ahemdabad', 1),
(27, 'Surat', 1),
(28, 'Junagadh', 1),
(29, 'Gandhi Nagar', 1),
(30, 'Chennai', 2),
(31, 'Madurai', 2),
(32, 'Coimbatore', 2),
(33, 'Ooty', 2),
(34, 'Rameshwaram', 2),
(35, 'Kanya Kumari', 2),
(36, 'Bangaluru', 5),
(37, 'Mangalore', 5),
(38, 'Belgaum', 5),
(39, 'Mysuru', 5),
(40, 'Kolkata', 6),
(41, 'Durgapur', 6),
(42, 'Howrah', 6),
(43, 'Darjeeling', 6),
(44, 'Hooghly', 6),
(45, 'Pune', 7),
(46, 'Nagpur', 7),
(47, 'Amravati', 7),
(48, 'Thane', 7),
(49, 'Kalyaan', 7),
(50, 'Jaipur', 9),
(51, 'Ajmer', 9),
(52, 'Jodhpur', 9),
(53, 'Kota', 9),
(54, 'Udaipur', 9),
(55, 'Agra', 10),
(56, 'Lucknow', 10),
(57, 'Kanpur', 10),
(58, 'Bareilly', 10),
(59, 'Allahabad', 10),
(60, 'Bhojpur', 11),
(61, 'Gaya', 11),
(62, 'Patna', 11),
(63, 'Anantapur', 12),
(64, 'Kurnool', 12),
(65, 'Darrang', 13),
(66, 'Chirang', 13),
(67, 'Dispur', 13),
(68, 'Guwahati', 13),
(69, 'Raipur', 14),
(70, 'Ratanpur', 14),
(71, 'Bilashpur', 14),
(72, 'Panji', 15),
(73, 'Ponda', 15),
(74, 'Gurugram', 16),
(75, 'Faridabad', 16),
(76, 'Simla', 17),
(77, 'Manali', 17),
(78, 'Dharmshala', 17),
(79, 'Dalhousie', 17),
(80, 'Mandi', 17),
(81, 'Tiruvananthapuram', 18),
(82, 'Kochi', 18),
(83, 'Kollam', 18),
(84, 'Bhuvneshwaram', 19),
(85, 'Puri', 19),
(86, 'Cuttak', 19),
(87, 'Amritsar', 20),
(88, 'Jalandhar', 20),
(89, 'Ludhiyana', 20),
(90, 'Patiyala', 20),
(91, 'Bhathinda', 20),
(92, 'Pathankot', 20),
(93, 'Gangtok', 21),
(94, 'Namchi', 21),
(95, 'Hydrabad', 22),
(96, 'Warangal', 22),
(97, 'Karimnagar', 22),
(98, 'Dehradun', 23),
(99, 'Haridwar', 23),
(100, 'Rishikesh', 23),
(101, 'Nainital', 23),
(102, 'Masoorie', 23),
(103, 'Roorkee', 23),
(104, 'Bhopal', 24),
(105, 'Indore', 24),
(106, 'Jabalpur', 24),
(107, 'Ujjain', 24),
(108, 'Gwalior', 24);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_tb`
--

CREATE TABLE `contact_us_tb` (
  `contact_us_id` int(11) NOT NULL,
  `contact_us_name` varchar(30) NOT NULL,
  `contact_us_email` varchar(50) NOT NULL,
  `contact_us_subject` varchar(100) NOT NULL,
  `contact_us_message` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us_tb`
--

INSERT INTO `contact_us_tb` (`contact_us_id`, `contact_us_name`, `contact_us_email`, `contact_us_subject`, `contact_us_message`, `user_id`) VALUES
(1, 'Vishal', 'vishal@gmail.com', 'Related to Product Delivery', 'I Have not received my product Yet', 9001),
(2, 'Pankti', 'pankti@gmail.com', 'Regarding to career', 'I had sent you my resume Do needful,\r\nI like your system , I want to work with you', 9009);

-- --------------------------------------------------------

--
-- Table structure for table `ordertb`
--

CREATE TABLE `ordertb` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `order_amount` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deliver_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cart_id` int(11) NOT NULL,
  `is_paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertb`
--

INSERT INTO `ordertb` (`order_id`, `user_id`, `order_status`, `payment_type_id`, `order_amount`, `order_date`, `deliver_date`, `cart_id`, `is_paid`) VALUES
(16, 9008, 'Delivered', 2013, 2000, '2020-06-10 07:13:24', '2020-06-10 07:13:24', 9008, 1),
(17, 9002, 'Confirm', 2014, 1200, '2020-06-10 19:07:01', '2020-06-10 19:07:01', 9002, 1),
(18, 9002, 'Delivered', 2014, 50, '2020-06-10 19:07:41', '2020-06-10 19:07:41', 9002, 1),
(19, 9004, 'Confirm', 2013, 150, '2020-06-10 19:10:59', '2020-06-10 19:10:59', 9004, 0),
(20, 9009, 'Confirm', 2013, 1100, '2020-06-10 19:36:36', '2020-06-10 19:36:36', 9009, 0),
(21, 9009, 'Shipped', 2014, 100, '2020-06-10 20:01:33', '2020-06-10 20:01:33', 9009, 1),
(22, 9002, 'Confirm', 2013, 2000, '2020-06-11 04:58:26', '2020-06-11 04:58:26', 117, 0),
(23, 9002, 'Confirm', 2014, 680, '2020-06-12 07:32:07', '2020-06-12 07:32:07', 9002, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_producttb`
--

CREATE TABLE `order_producttb` (
  `order_product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_producttb`
--

INSERT INTO `order_producttb` (`order_product_id`, `order_id`, `product_id`, `qty`, `price`) VALUES
(31, 16, 38, 1, 2000),
(32, 17, 107, 1, 1200),
(33, 18, 13, 1, 50),
(34, 19, 12, 1, 150),
(35, 20, 66, 1, 1000),
(36, 20, 85, 1, 100),
(37, 21, 34, 1, 100),
(38, 22, 2, 1, 1000),
(39, 22, 39, 1, 1000),
(40, 23, 102, 1, 680);

-- --------------------------------------------------------

--
-- Table structure for table `payment_typetb`
--

CREATE TABLE `payment_typetb` (
  `payment_type_id` int(11) NOT NULL,
  `payment_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_typetb`
--

INSERT INTO `payment_typetb` (`payment_type_id`, `payment_type`) VALUES
(2013, 'COD'),
(2014, 'PAY PAL');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_colour` varchar(30) NOT NULL,
  `age_id` varchar(6) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `product_price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`product_id`, `product_name`, `product_colour`, `age_id`, `gender`, `product_price`, `category_id`, `brand_id`, `product_description`, `vendor_id`, `status`, `image`) VALUES
(2, 'Toy Car', 'Red', '5', 'Female', 1000, 112, 1, 'Remote Control Red Car', 202, 'Available', '../product_main_images/product_2.jpg'),
(4, 'Cycle', 'Yellow', '1', 'Both', 2000, 129, 1, 'Easy to ride with amazing Look', 202, 'Available', '../product_main_images/product_4.webp'),
(12, 'Barbie_Doll', 'White', '1', 'Female', 150, 114, 1, 'Beautiful With Attractive Appearance', 202, 'Out Of Stock', '../product_main_images/product_12.webp'),
(13, 'Ball', 'White', '1', 'Male', 50, 101, 1, 'Soft Ball Big Multicolour', 202, 'Out Of Stock', '../product_main_images/product_13.jpg'),
(21, 'Barbie house', 'Pink', '2', 'Female', 500, 114, 1, 'Amazing Kit With all Accessories Of Barbie Doll', 202, 'Available', '../product_main_images/product_21.webp'),
(24, 'Safari Dreams', 'White', '2', 'Both', 2000, 123, 1, 'Safari Dreams and Music & Gym', 229, 'Available', '../product_main_images/product_24.jpg'),
(25, 'Electronic Cradle', 'White', '5', 'Both', 3000, 128, 5, 'Beautiful Cradle with Electronic Controls', 228, 'Available', '../product_main_images/product_25.webp'),
(26, 'Teddy Doremon', 'White', '3', 'Female', 200, 127, 8, 'Cartoon - Doremon Shape Toy\r\n\r\n', 229, 'Available', '../product_main_images/product_26.webp'),
(27, 'Baby Strollers', 'Black', '3', 'Both', 5000, 124, 6, 'Cosy Cosmo Stroller', 229, 'Available', '../product_main_images/product_27.jpg'),
(28, 'Bath Tube', 'Blue', '2', 'Both', 2000, 125, 6, 'Baby Bath Toy', 229, 'Available', '../product_main_images/product_28.jpg'),
(29, 'Water Pillow', 'Green', '1', 'Both', 100, 113, 7, 'Baby Bath Toy With Green Finishing', 229, 'Available', '../product_main_images/product_29.jpg'),
(30, 'Board', 'Red', '1', 'Both', 500, 113, 7, 'Alphabet Sequencer', 229, 'Available', '../product_main_images/product_30.jpg'),
(31, 'Ball', 'White', '3', 'Male', 50, 101, 7, 'Multicolour Ball', 229, 'Available', '../product_main_images/product_31.jpg'),
(32, 'Easy Chair', 'White', '3', 'Both', 500, 130, 16, 'Chair with Desk', 228, 'Available', '../product_main_images/product_32.webp'),
(33, 'Corn poper', 'White', '1', 'Both', 1000, 115, 8, 'Toy With Blue Finisher', 202, 'Available', '../product_main_images/product_33.jpg'),
(34, 'Badminton Kit', 'White', '4', 'Both', 100, 119, 16, 'Soft And Heavy Badminton Kit', 228, 'Out Of Stock', '../product_main_images/product_34.webp'),
(35, 'Baby Cradle', 'Black', '1', 'Both', 1000, 128, 5, 'Cradle With Black', 228, 'Available', '../product_main_images/product_35.webp'),
(36, 'Video Game', 'Red', '5', 'Male', 500, 120, 16, 'Easy to Play with This Video game', 228, 'Available', '../product_main_images/product_36.webp'),
(37, 'Teddy Bear', 'White', '3', 'Both', 100, 122, 17, 'Soft And Beautiful ', 228, 'Available', '../product_main_images/product_37.webp'),
(38, 'BabyPink Cradle', 'Pink', '1', 'Female', 2000, 128, 17, 'Heavy Mettle Body With Funny Look', 228, 'Out Of Stock', '../product_main_images/product_38.webp'),
(39, 'Rider Car', 'Yellow', '1', 'Both', 1000, 112, 1, 'Easy To Ride With Sunflower Look', 202, 'Available', '../product_main_images/product_39.jpg'),
(40, 'Baby Cradles', 'Black', '2', 'Both', 1000, 128, 1, 'Babyhug Active Baby 2 in 1 Playpen Cum Cot With Mosquito Net - Black', 229, 'Available', '../product_main_images/product_40.webp'),
(41, 'Play Net', 'White', '1', 'Both', 200, 115, 16, 'Smooth and soft with easy and hygienic stones', 229, 'Available', '../product_main_images/product_41.webp'),
(42, 'Teddy Pillow', 'White', '2', 'Both', 100, 122, 6, 'Soft And Beautiful With Fairy Material', 229, 'Available', '../product_main_images/product_42.webp'),
(43, 'Doll House', 'Yellow', '3', 'Female', 500, 114, 7, 'Heavy With Beautiful Look ', 229, 'Available', '../product_main_images/product_43.webp'),
(44, 'Soft Car', 'Red', '2', 'Male', 100, 122, 16, 'Toy Car in Soft Material specially for Babies', 229, 'Available', '../product_main_images/product_44.webp'),
(45, 'Doll', 'Pink', '3', 'Female', 200, 114, 6, 'Soft Dolls with Pink Colour', 229, 'Available', '../product_main_images/product_45.webp'),
(46, 'Elephant Teddy', 'Red', '2', 'Both', 500, 122, 1, 'Soft Teddy with Elephant Shape , It can be Amazing Ride', 229, 'Available', '../product_main_images/product_46.webp'),
(47, 'Tricycle', 'Green', '1', 'Both', 800, 129, 16, 'Easy to drive for babies they can enjoy in the homes and streets to', 231, 'Available', '../product_main_images/product_47.webp'),
(48, 'Bicycle', 'Black', '3', 'Both', 1000, 129, 7, 'Easy to maintain For Support there are side Wheels also', 231, 'Available', '../product_main_images/product_48.webp'),
(49, 'Traditional cradles', 'Green', '2', 'Both', 1500, 128, 5, 'Heavy With Traditional Look of Wooden', 231, 'Available', '../product_main_images/product_49.webp'),
(50, 'Baby Cradle', 'Pink', '2', 'Female', 2000, 128, 1, 'Cradle With Beautiful Look Of PINK', 231, 'Available', '../product_main_images/product_50.webp'),
(51, 'Cricket Kit', 'Yellow', '4', 'Male', 100, 119, 16, 'Cricket Kit For Baby to increase interest in Sports', 231, 'Available', '../product_main_images/product_51.webp'),
(52, 'Badminton Kit', 'Yellow', '4', 'Female', 100, 119, 16, 'Maintain Interest In Sports with this Badminton Kit', 231, 'Available', '../product_main_images/product_52.webp'),
(53, 'Doll House', 'Pink', '2', 'Female', 300, 114, 6, 'Easy to Carry Here and There for Beauties', 202, 'Available', '../product_main_images/product_53.webp'),
(54, 'Desk and Chair', 'Blue', '3', 'Both', 300, 130, 1, 'Colourful Desk with Chair', 229, 'Available', '../product_main_images/product_54.webp'),
(55, 'Teddybear', 'Orange', '2', 'Female', 200, 122, 1, 'Teddy with the shape of bear', 229, 'Available', '../product_main_images/product_55.webp'),
(56, 'Baby Bath', 'White', '1', 'Both', 200, 125, 1, 'Flexible Bath Tub ', 229, 'Available', '../product_main_images/product_56.webp'),
(57, 'Monster Truck', 'Yellow', '2', 'Male', 100, 129, 1, 'Hot Wheels Die Cast Monster Truck', 229, 'Available', '../product_main_images/product_57.webp'),
(58, 'Black Bike', 'Black', '2', 'Male', 2000, 129, 5, 'Centy Pull Back Black Bike', 229, 'Available', '../product_main_images/product_58.webp'),
(59, 'Cycle', 'Orange', '1', 'Both', 1000, 129, 5, 'Cosy Ride with Orange Outlook', 229, 'Available', '../product_main_images/product_59.webp'),
(60, 'Water Tube', 'Blue', '1', 'Both', 500, 125, 5, 'Amazing Water Ride', 228, 'Available', '../product_main_images/product_60.jpg'),
(61, 'Water Toy', 'White', '1', 'Both', 500, 125, 5, 'Water Tube ', 228, 'Available', '../product_main_images/product_61.jpg'),
(62, 'Floor Bed', 'White', '1', 'Both', 1000, 115, 5, 'Floor Bed With Musicle Panel', 228, 'Available', '../product_main_images/product_62.jpg'),
(63, 'Soft Rider', 'White', '2', 'Both', 300, 115, 6, 'Washable Soft Toy with House Shape', 228, 'Available', '../product_main_images/product_63.jpg'),
(64, 'Water Tube', 'Blue', '1', 'Both', 300, 125, 6, 'Water Tub with Water Bed', 228, 'Available', '../product_main_images/product_64.jpg'),
(65, 'car', 'White', '3', 'Male', 500, 112, 7, 'Remote Control Black and White Car', 206, 'Available', '../product_main_images/product_65.webp'),
(66, 'Multiplay Track', 'Yellow', '3', 'Male', 1000, 112, 7, 'Multiplay Race Track', 206, 'Out Of Stock', '../product_main_images/product_66.webp'),
(67, 'Train set', 'Yellow', '3', 'Both', 1000, 112, 7, 'Webby Battery Operated train Set', 206, 'Available', '../product_main_images/product_67.webp'),
(68, 'Black car', 'Black', '3', 'Male', 1000, 112, 7, 'Hot Wheels car', 206, 'Available', '../product_main_images/product_68.webp'),
(69, 'Cycle', 'White', '4', 'Both', 1000, 101, 1, 'Amazing', 202, 'Available', '../product_main_images/product_69.webp'),
(70, 'Table desk', 'Blue', '4', 'Both', 500, 130, 1, 'Heavy with beautiful look', 202, 'Available', '../product_main_images/product_70.webp'),
(71, 'Playhouse tent', 'Red', '3', 'Male', 700, 115, 1, 'Marvel Spiderman playhouse Pipe Tent', 202, 'Available', '../product_main_images/product_71.webp'),
(72, 'Drawer', 'White', '5', 'Both', 300, 130, 5, 'Heavy with cartoon characters on surface', 202, 'Available', '../product_main_images/product_72.webp'),
(73, 'Basket', 'Black', '5', 'Both', 100, 130, 16, 'Wide Storage area in small basket', 202, 'Available', '../product_main_images/product_73.webp'),
(74, 'Play tent house', 'Blue', '3', 'Both', 500, 115, 5, 'Toyshine Foldable play Tent House with Multicolour\r\n', 202, 'Available', '../product_main_images/product_74.webp'),
(75, 'Football board', 'Green', '5', 'Both', 1000, 119, 5, 'Toyshine Mid-sized Football With 6-Rods', 202, 'Available', '../product_main_images/product_75.webp'),
(76, 'Soft Rider', 'Pink', '3', 'Female', 300, 122, 5, 'Soft Ride with amazing looks', 206, 'Available', '../product_main_images/product_76.webp'),
(77, 'Table hockey', 'White', '4', 'Both', 1000, 119, 6, 'Toy shine Tabletop Air Hockey Game set - White Brown', 206, 'Available', '../product_main_images/product_77.webp'),
(78, 'Boxing set', 'Pink', '5', 'Male', 200, 119, 6, 'Kids Boxing Set Dragon Print', 206, 'Available', '../product_main_images/product_78.webp'),
(79, 'White Drawer', 'White', '3', 'Both', 200, 130, 6, 'White Drawer', 206, 'Available', '../product_main_images/product_79.webp'),
(80, 'Chair', 'Yellow', '2', 'Both', 100, 130, 6, 'Confortable Chair With Yellowsh', 206, 'Available', '../product_main_images/product_80.webp'),
(81, 'Green chair', 'Green', '2', 'Both', 100, 130, 6, 'Confortable Chair With Green Colour', 206, 'Available', '../product_main_images/product_81.webp'),
(82, 'Study Table', 'Blue', '4', 'Both', 500, 130, 7, 'Study Table with Small Toys', 206, 'Available', '../product_main_images/product_82.webp'),
(83, 'Pinball', 'Green', '4', 'Both', 500, 116, 7, 'Pinball Football Toy With Music Arcade Game', 206, 'Available', '../product_main_images/product_83.webp'),
(84, 'Castle tent ', 'Pink', '4', 'Female', 1000, 115, 7, 'Pinky Castle Tent House', 206, 'Available', '../product_main_images/product_84.webp'),
(85, 'Chair', 'Green', '2', 'Both', 100, 130, 16, 'Green Chair', 206, 'Out Of Stock', '../product_main_images/product_85.webp'),
(86, 'Starred tent', 'Pink', '3', 'Female', 500, 115, 7, 'Star Printed Play Tent Pink', 206, 'Available', '../product_main_images/product_86.webp'),
(87, 'Tunnel Tent', 'Green', '3', 'Both', 1000, 115, 8, 'Portable Kid\'s Play Tent House With Tunnel - Multicolour', 228, 'Available', '../product_main_images/product_87.webp'),
(88, 'Table Hockey ', 'Brown', '5', 'Both', 1000, 116, 8, 'Table Top Air Hockey Game-Set White Brown', 228, 'Available', '../product_main_images/product_88.webp'),
(89, 'Soft Rider', 'Blue', '2', 'Both', 500, 122, 8, 'Soft Toys With Ride', 228, 'Available', '../product_main_images/product_89.webp'),
(90, 'Blue Tent', 'Blue', '4', 'Both', 1500, 115, 8, 'Blue Tent With Colourful Wall Art', 231, 'Available', '../product_main_images/product_90.webp'),
(91, 'Store Drawer', 'White', '5', 'Female', 300, 130, 16, 'Wide Storage Area ', 231, 'Available', '../product_main_images/product_91.webp'),
(92, 'Pink Chair', 'Pink', '1', 'Female', 100, 130, 16, 'Pink Chair', 231, 'Available', '../product_main_images/product_92.webp'),
(93, 'Castle Tent', 'Blue', '3', 'Male', 1000, 115, 8, 'Play House Castle Tent With Portable Carry Bag', 231, 'Available', '../product_main_images/product_93.webp'),
(94, 'Dart board', 'Black', '5', 'Both', 100, 116, 16, 'Dual Sided Dart Board With 4 - Dart Needles - Black Red', 231, 'Available', '../product_main_images/product_94.webp'),
(95, 'Boxing set', 'Green', '5', 'Male', 300, 119, 16, 'Boxing Set With Green And Red Shade', 231, 'Available', '../product_main_images/product_95.webp'),
(96, 'Castle tent', 'Pink', '4', 'Female', 1500, 115, 8, 'Castle Tent House', 231, 'Available', '../product_main_images/product_96.webp'),
(97, 'Ship tent', 'Red', '3', 'Both', 1500, 115, 8, 'Amazing Look of Ship and Space', 231, 'Available', '../product_main_images/product_97.webp'),
(98, 'Pool board', 'Green', '4', 'Both', 1000, 116, 8, 'Table Top Billiards Game Multicolour', 231, 'Available', '../product_main_images/product_98.webp'),
(99, 'Car playhouse', 'Blue', '3', 'Male', 1000, 115, 8, 'Portable Pop Up Car Play House', 233, 'Available', '../product_main_images/product_99.webp'),
(100, 'Little Genius Wooden Hammer ', 'Brown', '2', 'Both', 470, 121, 7, 'The stand has six pegs and a hammer. Allow children to hammer away happily at the pegs. Once all the pegs have been hammered down, turn the stand over and let children start hammering again. Ideal for development of eye-hand co-ordination as it develops young muscles and dispenses excessive energy.', 233, 'Available', '../product_main_images/product_100.jpg'),
(101, 'Smartcraft Activity House Shap', 'Red', '2', 'Both', 2124, 121, 7, 'Smartcraft presents colorful shape sorter toy with 11 3D blocks and 22 animal sound effects, specially designed for your little ones to have fun learning time. It helps to develop fine motor skills, visual recognition, listening skills and tactile development. Fun and attractive colors, shapes and sounds, keep the child occupied for hours.', 233, 'Available', '../product_main_images/product_101.jpg'),
(102, 'LCD Writing Tablet Scrib', 'Red', '4', 'Both', 680, 121, 7, 'for daily needs. Easy to carry and taken out, writing, drawing, doodling, learning and working whenever inspiration strikes. Unlike modern paper board writing pad, this writing tablet with scratch resistant and durable ABS material and smart flexible LCD screen, can be used for a long time and erased with the touch of a button at any time.', 233, 'Available', '../product_main_images/product_102.jpg'),
(103, 'Webby Pinball Pounding Bench With Hammer ', 'Blue', '2', 'Both', 741, 121, 7, 'Webby presents this Pinball pounding table with hammer for kids! Pound the balls through the openings on top of the pounding bench With the hammer to make them disappear. Hammer strikes with funny sounds that will make your baby chuckle and laugh while he/she strikes the balls.', 233, 'Available', '../product_main_images/product_103.jpg'),
(104, 'Webby Wooden Educational Mathematical ', 'Brown', '2', 'Both', 300, 121, 7, 'Let baby recognize numbers and understand the relationship between number and quantity.It makes learning fun and enriches the child imagination.This wooden \"calculator\" helps teach math skills and color recognition.', 233, 'Available', '../product_main_images/product_104.jpg'),
(105, 'Magnetic Little Master Board', 'Yellow', '3', 'Both', 1270, 121, 7, 'This educational toy from Avis is a magnetic board from one side that comes with 50 magnetic alphabets and numbers in capitals. With a white board and so many numerical shapes, your kids can play to their heart\'s content which gradually enhances their knowledge.', 233, 'Available', '../product_main_images/product_105.jpg'),
(106, 'Little Genius Wooden Abacus Toy', 'Brown', '4', 'Both', 660, 121, 7, 'Introduce your toddler to a world of mathematics with this classic Abacus. Watch your child become a professional in maths as he/she counts the colourful beads on every rod in the frame. Designed to enable the child to play and calculate with it in an upright position.', 233, 'Available', '../product_main_images/product_106.jpg'),
(107, 'Little Beetle Educational Toy With Music', 'Orange', '2', 'Both', 1200, 121, 7, 'Exploration and fun is around every corner. This Beetle toy is perfect for your baby to learn alphabets, numbers and colors. This toy stimulates the development of the baby. Bright colors to attract your baby\'s attention. ', 233, 'Out Of Stock', '../product_main_images/product_107.jpg'),
(108, 'Webby Wooden Early Educational Shape Sorting Toy ', 'Green', '1', 'Both', 500, 121, 7, 'Wooden Teaching clocklearn to tell the time. With this shape sorter clocks, children can learn shapes. As the Minute and hour hands rotate, learn to tell the time. With this shape sorter clocks.Teaches fine motor skills, numbers, colors, shapes, and concepts of time.', 233, 'Available', '../product_main_images/product_108.jpg'),
(109, 'Baby Straller', 'White', '1', 'Both', 1500, 124, 8, 'Easy to travell with this straller', 235, 'Available', '../product_main_images/product_109.webp');

-- --------------------------------------------------------

--
-- Table structure for table `product_categorytb`
--

CREATE TABLE `product_categorytb` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categorytb`
--

INSERT INTO `product_categorytb` (`category_id`, `category_name`) VALUES
(101, 'Creative'),
(109, 'Puzzle'),
(112, 'Remote control'),
(113, 'Arts and crafts'),
(114, 'Dolls'),
(115, 'Floor gyms'),
(116, 'Activity boards'),
(117, 'Basic science kits'),
(118, 'Construction sets'),
(119, 'Sports equipments'),
(120, 'Electronic toys'),
(121, 'Educational toys'),
(122, 'Soft toys'),
(123, 'Musical'),
(124, 'Travelling kits'),
(125, 'Water tubs'),
(126, 'Robotics toys'),
(127, 'Cartoon character'),
(128, 'Cradles'),
(129, 'Rider'),
(130, 'Kids furniture');

-- --------------------------------------------------------

--
-- Table structure for table `product_imagetb`
--

CREATE TABLE `product_imagetb` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_imagetb`
--

INSERT INTO `product_imagetb` (`image_id`, `product_id`, `product_image`) VALUES
(10013, 5, '../product_images/product_10013.jpg'),
(10018, 12, '../product_images/product_10018.webp'),
(10023, 1, '../product_images/product_10023.jpg'),
(10048, 33, '../product_images/product_10048.jpg'),
(10049, 33, '../product_images/product_10049.jpg'),
(10050, 33, '../product_images/product_10050.jpg'),
(10051, 33, '../product_images/product_10051.jpg'),
(10052, 24, '../product_images/product_10052.jpg'),
(10053, 24, '../product_images/product_10053.jpg'),
(10054, 24, '../product_images/product_10054.jpg'),
(10055, 24, '../product_images/product_10055.jpg'),
(10056, 26, '../product_images/product_10056.webp'),
(10057, 26, '../product_images/product_10057.webp'),
(10058, 26, '../product_images/product_10058.webp'),
(10060, 40, '../product_images/product_10060.webp'),
(10061, 40, '../product_images/product_10061.webp'),
(10062, 40, '../product_images/product_10062.webp'),
(10063, 40, '../product_images/product_10063.webp'),
(10064, 40, '../product_images/product_10064.webp'),
(10065, 41, '../product_images/product_10065.webp'),
(10066, 41, '../product_images/product_10066.webp'),
(10067, 41, '../product_images/product_10067.webp'),
(10068, 42, '../product_images/product_10068.webp'),
(10069, 42, '../product_images/product_10069.webp'),
(10070, 42, '../product_images/product_10070.webp'),
(10071, 43, '../product_images/product_10071.webp'),
(10072, 43, '../product_images/product_10072.webp'),
(10073, 43, '../product_images/product_10073.webp'),
(10074, 44, '../product_images/product_10074.webp'),
(10075, 44, '../product_images/product_10075.webp'),
(10076, 45, '../product_images/product_10076.webp'),
(10077, 45, '../product_images/product_10077.webp'),
(10078, 45, '../product_images/product_10078.webp'),
(10079, 45, '../product_images/product_10079.webp'),
(10080, 46, '../product_images/product_10080.webp'),
(10081, 46, '../product_images/product_10081.webp'),
(10082, 46, '../product_images/product_10082.webp'),
(10083, 47, '../product_images/product_10083.webp'),
(10084, 47, '../product_images/product_10084.webp'),
(10085, 47, '../product_images/product_10085.webp'),
(10086, 49, '../product_images/product_10086.webp'),
(10087, 49, '../product_images/product_10087.webp'),
(10088, 50, '../product_images/product_10088.webp'),
(10090, 51, '../product_images/product_10090.webp'),
(10091, 51, '../product_images/product_10091.webp'),
(10092, 51, '../product_images/product_10092.webp'),
(10093, 51, '../product_images/product_10093.webp'),
(10094, 52, '../product_images/product_10094.webp'),
(10095, 52, '../product_images/product_10095.webp'),
(10096, 12, '../product_images/product_10096.webp'),
(10097, 21, '../product_images/product_10097.webp'),
(10098, 21, '../product_images/product_10098.webp'),
(10099, 21, '../product_images/product_10099.webp'),
(10100, 21, '../product_images/product_10100.webp'),
(10101, 21, '../product_images/product_10101.webp'),
(10102, 21, '../product_images/product_10102.webp'),
(10103, 53, '../product_images/product_10103.webp'),
(10104, 53, '../product_images/product_10104.webp'),
(10105, 53, '../product_images/product_10105.webp'),
(10106, 25, '../product_images/product_10106.webp'),
(10107, 25, '../product_images/product_10107.webp'),
(10108, 25, '../product_images/product_10108.webp'),
(10109, 25, '../product_images/product_10109.webp'),
(10110, 25, '../product_images/product_10110.webp'),
(10111, 25, '../product_images/product_10111.webp'),
(10112, 32, '../product_images/product_10112.webp'),
(10113, 32, '../product_images/product_10113.webp'),
(10114, 32, '../product_images/product_10114.webp'),
(10115, 32, '../product_images/product_10115.webp'),
(10116, 34, '../product_images/product_10116.webp'),
(10117, 35, '../product_images/product_10117.webp'),
(10118, 35, '../product_images/product_10118.webp'),
(10119, 36, '../product_images/product_10119.webp'),
(10120, 36, '../product_images/product_10120.webp'),
(10121, 36, '../product_images/product_10121.webp'),
(10122, 36, '../product_images/product_10122.webp'),
(10123, 36, '../product_images/product_10123.webp'),
(10124, 37, '../product_images/product_10124.webp'),
(10125, 37, '../product_images/product_10125.webp'),
(10126, 37, '../product_images/product_10126.webp'),
(10127, 38, '../product_images/product_10127.webp'),
(10128, 38, '../product_images/product_10128.webp'),
(10129, 4, '../product_images/product_10129.webp'),
(10131, 13, '../product_images/product_10131.jpg'),
(10133, 27, '../product_images/product_10133.jpg'),
(10134, 28, '../product_images/product_10134.jpg'),
(10135, 29, '../product_images/product_10135.jpg'),
(10136, 30, '../product_images/product_10136.jpg'),
(10137, 31, '../product_images/product_10137.jpg'),
(10138, 48, '../product_images/product_10138.webp'),
(10139, 50, '../product_images/product_10139.webp'),
(10140, 50, '../product_images/product_10140.webp'),
(10141, 2, '../product_images/product_10141.jpg'),
(10142, 2, '../product_images/product_10142.jpg'),
(10143, 2, '../product_images/product_10143.jpg'),
(10144, 2, '../product_images/product_10144.jpg'),
(10145, 39, '../product_images/product_10145.jpg'),
(10146, 39, '../product_images/product_10146.jpg'),
(10147, 39, '../product_images/product_10147.jpg'),
(10148, 39, '../product_images/product_10148.jpg'),
(10150, 54, '../product_images/product_10150.webp'),
(10151, 54, '../product_images/product_10151.webp'),
(10152, 54, '../product_images/product_10152.webp'),
(10153, 54, '../product_images/product_10153.webp'),
(10154, 54, '../product_images/product_10154.webp'),
(10155, 55, '../product_images/product_10155.webp'),
(10156, 55, '../product_images/product_10156.webp'),
(10157, 55, '../product_images/product_10157.webp'),
(10158, 56, '../product_images/product_10158.webp'),
(10159, 57, '../product_images/product_10159.webp'),
(10160, 57, '../product_images/product_10160.webp'),
(10161, 57, '../product_images/product_10161.webp'),
(10162, 57, '../product_images/product_10162.webp'),
(10163, 58, '../product_images/product_10163.webp'),
(10164, 58, '../product_images/product_10164.webp'),
(10165, 59, '../product_images/product_10165.webp'),
(10166, 59, '../product_images/product_10166.webp'),
(10167, 59, '../product_images/product_10167.webp'),
(10168, 59, '../product_images/product_10168.webp'),
(10169, 60, '../product_images/product_10169.jpg'),
(10170, 61, '../product_images/product_10170.jpg'),
(10171, 62, '../product_images/product_10171.jpg'),
(10172, 62, '../product_images/product_10172.jpg'),
(10173, 62, '../product_images/product_10173.jpg'),
(10174, 62, '../product_images/product_10174.jpg'),
(10175, 62, '../product_images/product_10175.jpg'),
(10176, 63, '../product_images/product_10176.jpg'),
(10177, 63, '../product_images/product_10177.jpg'),
(10178, 63, '../product_images/product_10178.jpg'),
(10179, 64, '../product_images/product_10179.jpg'),
(10180, 65, '../product_images/product_10180.webp'),
(10181, 65, '../product_images/product_10181.webp'),
(10182, 65, '../product_images/product_10182.webp'),
(10183, 65, '../product_images/product_10183.webp'),
(10184, 66, '../product_images/product_10184.webp'),
(10185, 66, '../product_images/product_10185.webp'),
(10186, 66, '../product_images/product_10186.webp'),
(10187, 67, '../product_images/product_10187.webp'),
(10188, 67, '../product_images/product_10188.webp'),
(10189, 67, '../product_images/product_10189.webp'),
(10190, 67, '../product_images/product_10190.webp'),
(10191, 68, '../product_images/product_10191.webp'),
(10192, 68, '../product_images/product_10192.webp'),
(10193, 68, '../product_images/product_10193.webp'),
(10194, 69, '../product_images/product_10194.webp'),
(10195, 69, '../product_images/product_10195.webp'),
(10196, 69, '../product_images/product_10196.webp'),
(10197, 70, '../product_images/product_10197.webp'),
(10198, 70, '../product_images/product_10198.webp'),
(10199, 70, '../product_images/product_10199.webp'),
(10200, 70, '../product_images/product_10200.webp'),
(10201, 71, '../product_images/product_10201.webp'),
(10202, 71, '../product_images/product_10202.webp'),
(10203, 71, '../product_images/product_10203.webp'),
(10204, 71, '../product_images/product_10204.webp'),
(10205, 72, '../product_images/product_10205.webp'),
(10206, 72, '../product_images/product_10206.webp'),
(10207, 72, '../product_images/product_10207.webp'),
(10208, 73, '../product_images/product_10208.webp'),
(10209, 73, '../product_images/product_10209.webp'),
(10210, 73, '../product_images/product_10210.webp'),
(10211, 74, '../product_images/product_10211.webp'),
(10212, 74, '../product_images/product_10212.webp'),
(10213, 74, '../product_images/product_10213.webp'),
(10214, 75, '../product_images/product_10214.webp'),
(10215, 75, '../product_images/product_10215.webp'),
(10216, 75, '../product_images/product_10216.webp'),
(10217, 76, '../product_images/product_10217.webp'),
(10218, 76, '../product_images/product_10218.webp'),
(10219, 77, '../product_images/product_10219.webp'),
(10220, 77, '../product_images/product_10220.webp'),
(10221, 77, '../product_images/product_10221.webp'),
(10222, 77, '../product_images/product_10222.webp'),
(10223, 78, '../product_images/product_10223.webp'),
(10224, 78, '../product_images/product_10224.webp'),
(10225, 78, '../product_images/product_10225.webp'),
(10226, 78, '../product_images/product_10226.webp'),
(10227, 79, '../product_images/product_10227.webp'),
(10228, 79, '../product_images/product_10228.webp'),
(10229, 79, '../product_images/product_10229.webp'),
(10230, 79, '../product_images/product_10230.webp'),
(10231, 80, '../product_images/product_10231.webp'),
(10232, 80, '../product_images/product_10232.webp'),
(10233, 80, '../product_images/product_10233.webp'),
(10234, 81, '../product_images/product_10234.webp'),
(10235, 81, '../product_images/product_10235.webp'),
(10236, 81, '../product_images/product_10236.webp'),
(10237, 82, '../product_images/product_10237.webp'),
(10238, 82, '../product_images/product_10238.webp'),
(10239, 82, '../product_images/product_10239.webp'),
(10240, 82, '../product_images/product_10240.webp'),
(10241, 82, '../product_images/product_10241.webp'),
(10242, 83, '../product_images/product_10242.webp'),
(10243, 83, '../product_images/product_10243.webp'),
(10244, 83, '../product_images/product_10244.webp'),
(10245, 84, '../product_images/product_10245.webp'),
(10246, 84, '../product_images/product_10246.webp'),
(10247, 84, '../product_images/product_10247.webp'),
(10248, 84, '../product_images/product_10248.webp'),
(10249, 85, '../product_images/product_10249.webp'),
(10250, 85, '../product_images/product_10250.webp'),
(10251, 85, '../product_images/product_10251.webp'),
(10252, 86, '../product_images/product_10252.webp'),
(10253, 86, '../product_images/product_10253.webp'),
(10254, 86, '../product_images/product_10254.webp'),
(10255, 87, '../product_images/product_10255.webp'),
(10256, 87, '../product_images/product_10256.webp'),
(10257, 87, '../product_images/product_10257.webp'),
(10258, 88, '../product_images/product_10258.webp'),
(10259, 88, '../product_images/product_10259.webp'),
(10260, 88, '../product_images/product_10260.webp'),
(10261, 89, '../product_images/product_10261.webp'),
(10262, 89, '../product_images/product_10262.webp'),
(10263, 90, '../product_images/product_10263.webp'),
(10264, 90, '../product_images/product_10264.webp'),
(10265, 90, '../product_images/product_10265.webp'),
(10266, 90, '../product_images/product_10266.webp'),
(10267, 90, '../product_images/product_10267.webp'),
(10268, 91, '../product_images/product_10268.webp'),
(10269, 91, '../product_images/product_10269.webp'),
(10270, 91, '../product_images/product_10270.webp'),
(10271, 91, '../product_images/product_10271.webp'),
(10272, 92, '../product_images/product_10272.webp'),
(10273, 92, '../product_images/product_10273.webp'),
(10274, 92, '../product_images/product_10274.webp'),
(10275, 93, '../product_images/product_10275.webp'),
(10276, 93, '../product_images/product_10276.webp'),
(10277, 93, '../product_images/product_10277.webp'),
(10278, 94, '../product_images/product_10278.webp'),
(10279, 94, '../product_images/product_10279.webp'),
(10280, 94, '../product_images/product_10280.webp'),
(10281, 95, '../product_images/product_10281.webp'),
(10282, 96, '../product_images/product_10282.webp'),
(10283, 96, '../product_images/product_10283.webp'),
(10284, 96, '../product_images/product_10284.webp'),
(10285, 97, '../product_images/product_10285.webp'),
(10286, 97, '../product_images/product_10286.webp'),
(10287, 97, '../product_images/product_10287.webp'),
(10288, 98, '../product_images/product_10288.webp'),
(10289, 98, '../product_images/product_10289.webp'),
(10290, 98, '../product_images/product_10290.webp'),
(10291, 99, '../product_images/product_10291.webp'),
(10292, 99, '../product_images/product_10292.webp'),
(10293, 100, '../product_images/product_10293.jpg'),
(10294, 100, '../product_images/product_10294.jpg'),
(10295, 100, '../product_images/product_10295.jpg'),
(10296, 100, '../product_images/product_10296.jpg'),
(10297, 101, '../product_images/product_10297.jpg'),
(10298, 101, '../product_images/product_10298.jpg'),
(10299, 101, '../product_images/product_10299.jpg'),
(10300, 101, '../product_images/product_10300.jpg'),
(10301, 102, '../product_images/product_10301.jpg'),
(10302, 102, '../product_images/product_10302.jpg'),
(10303, 102, '../product_images/product_10303.jpg'),
(10304, 102, '../product_images/product_10304.jpg'),
(10305, 103, '../product_images/product_10305.jpg'),
(10306, 103, '../product_images/product_10306.jpg'),
(10307, 103, '../product_images/product_10307.jpg'),
(10308, 103, '../product_images/product_10308.jpg'),
(10309, 104, '../product_images/product_10309.jpg'),
(10310, 104, '../product_images/product_10310.jpg'),
(10311, 104, '../product_images/product_10311.jpg'),
(10312, 104, '../product_images/product_10312.jpg'),
(10313, 104, '../product_images/product_10313.jpg'),
(10314, 105, '../product_images/product_10314.jpg'),
(10315, 105, '../product_images/product_10315.jpg'),
(10316, 105, '../product_images/product_10316.jpg'),
(10317, 105, '../product_images/product_10317.jpg'),
(10318, 105, '../product_images/product_10318.jpg'),
(10319, 105, '../product_images/product_10319.jpg'),
(10320, 106, '../product_images/product_10320.jpg'),
(10321, 106, '../product_images/product_10321.jpg'),
(10322, 106, '../product_images/product_10322.jpg'),
(10323, 106, '../product_images/product_10323.jpg'),
(10324, 107, '../product_images/product_10324.jpg'),
(10325, 107, '../product_images/product_10325.jpg'),
(10326, 107, '../product_images/product_10326.jpg'),
(10327, 107, '../product_images/product_10327.jpg'),
(10328, 107, '../product_images/product_10328.jpg'),
(10329, 107, '../product_images/product_10329.jpg'),
(10330, 108, '../product_images/product_10330.jpg'),
(10331, 108, '../product_images/product_10331.jpg'),
(10332, 108, '../product_images/product_10332.jpg'),
(10333, 108, '../product_images/product_10333.jpg'),
(10334, 108, '../product_images/product_10334.jpg'),
(10335, 109, '../product_images/product_10335.webp');

-- --------------------------------------------------------

--
-- Table structure for table `reviewtb`
--

CREATE TABLE `reviewtb` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `review_title` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewtb`
--

INSERT INTO `reviewtb` (`review_id`, `user_id`, `vendor_id`, `review_title`, `review`, `user_name`, `product_id`) VALUES
(9, 9008, 202, 'About Good Qualities', 'Amazing Ride with this car I\'m happy to deal with you\r\n', 'Hinal ', 2),
(10, 9002, 202, 'About Good Qualities', 'Amazing Water Ride I\'m Happy to deal with you\r\n', 'Hardik', 13),
(11, 9003, 229, 'About Look', 'Water Ride with Good Appereance in that toy which i buy from you , It\'s nice to deal with you', 'Vaishali', 28),
(12, 9008, 202, 'About Looks', 'Appereance is attracts to play with that toy which you give me in affordable price, thanks to you', 'Hinal', 12),
(14, 9002, 229, 'About Looks', 'Looking Amazing with craziness enjoy that toy gives to my child , Its really good to buy from you', 'Hardik', 28),
(15, 9008, 202, 'About Looks', 'Multicolour Ball is really amazing , Thank you so much', 'Hinal ', 13),
(16, 9002, 228, 'About Looks', 'Cosy Look with brown touch Its amazed my child It\'s really nice to deal with you', 'Hardik', 88),
(17, 9004, 228, 'Looks wise', 'Superb Rackets with soft Balls My little girl is really very happy with it', 'Pinal', 34),
(18, 9004, 223, 'About Good Qualities', 'That Toy is really cool Thank you for give me in affordable price', 'pinal', 107);

-- --------------------------------------------------------

--
-- Table structure for table `statetb`
--

CREATE TABLE `statetb` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statetb`
--

INSERT INTO `statetb` (`state_id`, `state_name`) VALUES
(1, 'Gujarat'),
(2, 'Tamilnadu'),
(5, 'Karnataka'),
(6, 'West Bengal'),
(7, 'Maharashtra'),
(9, 'Rajashtan'),
(10, 'Uttar Pradesh'),
(11, 'Bihar'),
(12, 'Andhra Pradesh'),
(13, 'Assam'),
(14, 'Chattisgarh'),
(15, 'Goa'),
(16, 'Haryana'),
(17, 'Himachal Pradesh'),
(18, 'Kerala'),
(19, 'Odisha'),
(20, 'Punjab'),
(21, 'Sikkim'),
(22, 'Telangana'),
(23, 'Uttarakhand'),
(24, 'Madhya Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` text NOT NULL,
  `user_contact` varchar(20) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `user_address` varchar(60) NOT NULL,
  `pincode` int(6) NOT NULL,
  `user_image` varchar(500) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_id`, `user_name`, `user_email`, `user_password`, `user_contact`, `city_id`, `state_id`, `user_address`, `pincode`, `user_image`, `is_active`) VALUES
(9001, 'Vishal', 'vishal@gmail.com', '3dd1091411fa11e16a050a0845f6477ccf7e1fd05d9089bbee2185fef017c81df27ac88080dc2cbf1b27142ce113829af91e67452de3f2668dda48529ef8e599', '+919898989898', 3, 1, 'A-101,Sangrilla Heights', 123456, '../user_images/user_9001.jpg', 1),
(9002, 'Hardik', 'hardik@gmail.com', 'N7DRLeiz', '+919797979797', 72, 15, 'B-202,Krishna Town', 123456, '../user_images/user_9002.jpg', 1),
(9004, 'Pinal Thkkar', 'pinal@gmail.com', '29ba0f794af9b504a469ece6b4c8b916545782089b237ed98b93a6d1656efbd7927962c5a01452391f12d289986527d3063341e7b95a9698ed01d05b6496754d', '+916565656564', 3, 1, 'C-100,Bhagu Nagar', 123456, '../user_images/user_9004.jpg', 1),
(9007, 'Vidhi', 'vidhi@gmail.com', '822628883e9c76e76548387c5655039c8713ff11b00e7e874a68494db77c75dbd755aeeae378f99c564b7b483e75d7e1f79c57687fa3a2c0dcdda0d3ef290463', '+919696969696', 7, 2, '34,Shaligram heights', 222333, '../user_images/user_9007.jpg', 1),
(9008, 'Hinal', 'hinal@gmail.com', '3ba41e223f020593fd05433d54a6fb81d00fa6ca5fa38d93d9a985f7d4f3351baddab7001342abe1dee14c698bec5e0dcdf6db1f44ccc0f8c54645e76d20674d', '+918080808080', 98, 23, 'Bardoli B336', 202020, '../user_images/user_9008.jpg', 1),
(9009, 'Pankti', 'pankti@gmail.com', 'a9a5bdf5745b136b4a5af41afd286fe5c54e9d2e2470da43dfe048f3676a38176d0ca747f3ff937a2034f5a59102d23e0b43562c0ac0e0844a1a4f4765fb14b3', '+917080708070', 82, 18, '404, Jhansi', 333555, '../user_images/user_9009.jpg', 1),
(9010, 'Dharmik', 'dharmik@gmail.com', '8ed4e5d9615d69c1be1d379424c7fde0b0809878ac1d076c4f2c0deba5ca16a4e96911c9a02430848b1c3bdc9818b74290addeddc9d9d0fd3211198648b70adf', '+918060806080', 9, 7, '701 , shantaclose', 444333, '../user_images/user_9010.jpg', 1),
(9011, 'Manik', 'manik@gmail.com', 'aa8f9c6fa6ce32a48e2deedc68cae68b860fa096684793bff0d5b4856f29a0da694113de1347fa4a0990702bc2cc4202ad16b557c911f2f1f1f7c15b0301ac63', '+919080908090', 95, 22, '808 , Juhu', 666999, '../user_images/user_9011.jpg', 1),
(9012, 'Dixit', 'dixit@gmail.com', '011c1add0e667819734c55b0279608540adf0791307c380643a6fd0c2f9c58dd6b38ffebd858752777c3c2a602f67c2485a47962c0f8fe0a950e421b56bca295', '+919696969696', 30, 2, '23 , Malad', 230411, '../user_images/user_9012.jpg', 1),
(9013, 'aryan', 'aryan@gmail.com', '49bc9dcb257d63115d3b84cdbb0eade441fff362785610fcb855a2631df26779d7e2657b3069c1d366018552a624be398310822958618c0cee54373152c70056', '+919181918191', 87, 20, 'A3 Cruse cross', 303030, '../user_images/user_9013.jpg', 1),
(9014, 'Hayat', 'hayat@gmail.com', 'd77db3ab93e5aaf18d20fa29f8305c945ad02cde93eb745feab7cec50ad73cd59d2b635c54b0a0b0543bd9bd5670776d8d5421809165444e59e375958cb7011f', '+916060606060', 40, 6, '80 , Racecouse', 313131, '../user_images/user_9014.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_reg`
--

CREATE TABLE `vendor_reg` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(30) NOT NULL,
  `vendor_address` varchar(80) NOT NULL,
  `vendor_pincode` varchar(7) NOT NULL,
  `vendor_contact` varchar(20) NOT NULL,
  `vendor_email` varchar(30) NOT NULL,
  `vendor_password` text NOT NULL,
  `is_active` int(20) NOT NULL,
  `contact_visible` int(10) NOT NULL,
  `is_approved` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `vendor_photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_reg`
--

INSERT INTO `vendor_reg` (`vendor_id`, `vendor_name`, `vendor_address`, `vendor_pincode`, `vendor_contact`, `vendor_email`, `vendor_password`, `is_active`, `contact_visible`, `is_approved`, `state_id`, `city_id`, `vendor_photo`) VALUES
(202, 'Yashvi', '  Radhe Krishna', '111-222', '80-8080808080', 'yashvi@gmail.com', '36e793f4393667a9ac3c8801440bca69de5072a30c9f69cb5af1875497d0bc2c545a3a8c7efd7ea449b29e83b2d29bac7d038cc08f75bbe472f3de9d8dab803d', 1, 1, 1, 23, 98, '../vendor_images/vendor_202.png'),
(206, 'Shreya', 'SG Highway', '111-111', '91-9090909090', 'shreya@gmail.com', '1fcccac4f9d986abf888acc34c39c3a113783c651859f9cd41e3358d6e580e656aa3bab8012eed181b139637f4be7fa65167b5efeeb4ec80395c6e340ca5cb68', 1, 0, 1, 1, 26, '../vendor_images/vendor_206.jpg'),
(228, 'Prity', '101 ,  Velenkni Soc , Althan', '333-666', '91-9022222290', 'prity@gmail.com', '9ef30c51324f5efdbffde875338eccebc400c68665343af7383b35d618ac08ef084cd6445d5e5199f094a9d3e2ceff3f811a9c1857338d035f62cb10ddca49bc', 1, 1, 1, 1, 4, '../vendor_images/vendor_228.png'),
(229, 'vidhi', 'Vesu', '111-333', '91-9999999999', 'vidhi@gmail.com', '822628883e9c76e76548387c5655039c8713ff11b00e7e874a68494db77c75dbd755aeeae378f99c564b7b483e75d7e1f79c57687fa3a2c0dcdda0d3ef290463', 1, 1, 1, 2, 7, '../vendor_images/vendor_229.png'),
(231, 'Pooja', 'Althan', '666-666', '91-8181818181', 'pooja@gmail.com', '1bec6a0db899a4f8c090556ec93ec6f2fb8353c6a707fa673fa8fb8b39c837658f7d3a75917ddd077f6af8b5c32697c09071ffd976f6a9e4b9c65080f28867a8', 1, 1, 1, 1, 4, '../vendor_images/vendor_231.jpg\r\n'),
(233, 'Brinda', 'Utran', '222-222', '99-9999999999', 'brinda@gmail.com', '7fd5517894bc34cc63cbb1928a84d3dd7d2091c7fbf423a54f67f62ecc259644e2559412324aac1fd10e0a7d391f365701f8bb81217e584f61ad192e12800390', 1, 0, 1, 1, 26, '../vendor_images/vendor_233.jpg'),
(234, 'Pankti', ' Saiyadpura', '444-444', '91-8888444422', 'pankti@gmail.com', 'a9a5bdf5745b136b4a5af41afd286fe5c54e9d2e2470da43dfe048f3676a38176d0ca747f3ff937a2034f5a59102d23e0b43562c0ac0e0844a1a4f4765fb14b3', 1, 1, 1, 24, 105, '../vendor_images/vendor_234.jpg'),
(235, 'Yesha', 'D-707 , Race-course', '333-555', '91-7070707071', 'yesha@gmail.com', 'fda7a93b323bdd98f0c70f792818e1d883a724b0f7d427fa97e18e6d0531ff3c8a4541dda02ecb4193c2cf0242dc49f6f84b62546a0aff23ee346b863c0d9e04', 1, 0, 0, 20, 90, '../vendor_images/vendor_235.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agetb`
--
ALTER TABLE `agetb`
  ADD PRIMARY KEY (`age_id`);

--
-- Indexes for table `billtb`
--
ALTER TABLE `billtb`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `brandtb`
--
ALTER TABLE `brandtb`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `careertb`
--
ALTER TABLE `careertb`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `carttb`
--
ALTER TABLE `carttb`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart_itemtb`
--
ALTER TABLE `cart_itemtb`
  ADD PRIMARY KEY (`cart_item_id`);

--
-- Indexes for table `citytb`
--
ALTER TABLE `citytb`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contact_us_tb`
--
ALTER TABLE `contact_us_tb`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `ordertb`
--
ALTER TABLE `ordertb`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_producttb`
--
ALTER TABLE `order_producttb`
  ADD PRIMARY KEY (`order_product_id`);

--
-- Indexes for table `payment_typetb`
--
ALTER TABLE `payment_typetb`
  ADD PRIMARY KEY (`payment_type_id`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categorytb`
--
ALTER TABLE `product_categorytb`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product_imagetb`
--
ALTER TABLE `product_imagetb`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `reviewtb`
--
ALTER TABLE `reviewtb`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `statetb`
--
ALTER TABLE `statetb`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor_reg`
--
ALTER TABLE `vendor_reg`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `agetb`
--
ALTER TABLE `agetb`
  MODIFY `age_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `billtb`
--
ALTER TABLE `billtb`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `brandtb`
--
ALTER TABLE `brandtb`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `careertb`
--
ALTER TABLE `careertb`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `carttb`
--
ALTER TABLE `carttb`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `cart_itemtb`
--
ALTER TABLE `cart_itemtb`
  MODIFY `cart_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `citytb`
--
ALTER TABLE `citytb`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `contact_us_tb`
--
ALTER TABLE `contact_us_tb`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordertb`
--
ALTER TABLE `ordertb`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_producttb`
--
ALTER TABLE `order_producttb`
  MODIFY `order_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `payment_typetb`
--
ALTER TABLE `payment_typetb`
  MODIFY `payment_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2015;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `product_categorytb`
--
ALTER TABLE `product_categorytb`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `product_imagetb`
--
ALTER TABLE `product_imagetb`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10336;

--
-- AUTO_INCREMENT for table `reviewtb`
--
ALTER TABLE `reviewtb`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `statetb`
--
ALTER TABLE `statetb`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9015;

--
-- AUTO_INCREMENT for table `vendor_reg`
--
ALTER TABLE `vendor_reg`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
