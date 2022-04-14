-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 11:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_hunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `customer_mobile` varchar(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `product_name` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`customer_mobile`, `product_id`, `product_name`, `product_image`, `product_price`) VALUES
('9999999999', 1685670754, 'indian thali', 'indian-thali.png', 140),
('9999999999', 345146023, 'Special Lunch', 'lunch-dish.jpg', 90),
('9999999999', 2124393466, 'strawberry icecream', 'strawberry icecream.png', 80);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `admin_name`, `admin_pwd`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `customer_id` int(50) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_mobile` text NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`customer_id`, `customer_name`, `customer_mobile`, `customer_email`, `customer_password`) VALUES
(61224575, 'Rohit Patil', '9999999999', 'sm123@gmail.com', '123'),
(572981696, 'Rohit Patil', '6754654353', 'rohitpatil2992001@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

CREATE TABLE `massage` (
  `customer_name` text NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `subject` text DEFAULT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(30) NOT NULL,
  `menu_category` text NOT NULL,
  `menu_name` text NOT NULL,
  `menu_image` text NOT NULL,
  `menu_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_category`, `menu_name`, `menu_image`, `menu_price`) VALUES
(75649999, 'dinner', 'festival special', 'festival-special.jpg', 130),
(345146023, 'lunch', 'Special Lunch', 'lunch-dish.jpg', 90),
(418931856, 'break-fast', 'Special omlet', 'omlet.jpg', 50),
(954527545, 'dinner', 'Chicken Lolipop', 'chicken-lolipop.jpg', 120),
(1105409653, 'break-fast', 'Edali sambar', 'Edali sambar.png', 80),
(1180703811, 'break-fast', 'special breakfast', 'breakfast.jpg', 60),
(1239705948, 'break-fast', 'burger', 'breakfast-burger.jpg', 70),
(1252253626, 'dinner', 'Full Indian Dinner', 'indian-full-dinner.jpg', 160),
(1311719353, 'dinner', 'kabab', 'kabab.jpg', 100),
(1535064878, 'lunch', 'Crispy Dosa With Chatani', 'crispy-dosa.jpg', 130),
(1583924565, 'lunch', 'Mashroom With Broculie', 'Mashroom With Broculie.jpg', 120),
(1685670754, 'lunch', 'indian thali', 'indian-thali.png', 140),
(1837613520, 'break-fast', 'Suasess', 'breakfast-sauses.jpg', 70),
(1878502763, 'lunch', 'Mashroom Rise', 'mashroom-rice.jpg', 150),
(1963481407, 'dinner', 'Gujrati Thali', 'gujrati-thali.jpg', 200);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `customer_phone` varchar(20) NOT NULL,
  `product_id` varchar(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`customer_phone`, `product_id`, `product_name`, `product_image`, `product_price`, `Qty`, `address`) VALUES
('9999999999', '305287423', 'Supreme Pizza', 'Supreme Pizza.png', 76, 1, 'at post bhaur'),
('9999999999', '1818212321', 'Trio Cheese', 'Trio Cheese.png', 67, 1, 'at post bhaur'),
('9999999999', '83904401', 'Apricot Chicken', 'Apricot Chicken.png', 80, 1, 'at post bhaur'),
('9999999999', '305287423', '', '', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(30) NOT NULL,
  `product_category` text DEFAULT NULL,
  `product_name` text NOT NULL,
  `product_image` varchar(1000) NOT NULL,
  `product_price` int(20) NOT NULL,
  `product_ratting` decimal(10,1) DEFAULT NULL,
  `product_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_category`, `product_name`, `product_image`, `product_price`, `product_ratting`, `product_description`) VALUES
(83904401, 'pizza', 'Apricot Chicken', 'Apricot Chicken.png', 80, '4.5', 'Crispy bacon, tasty ham, pineapple, onion and stretchy mozzarella, finished..'),
(305287423, 'pizza', 'Supreme Pizza', 'Supreme Pizza.png', 76, '4.3', 'Ricotta, sun dried tomatoes, garlic, mozzarella cheese, topped with lightly..'),
(514658255, 'burger', 'Bacon Burger', 'Bacon Burger.png', 90, '4.1', 'A mighty meaty double helping of all the reasons\r\n                                            you love our burger.'),
(529857443, 'desert', 'Chocolate Muffin', 'Chocolate Muffin.png', 90, '5.0', 'Chocolate crème cake with cherries,\r\nchocolate mousse and triple sec, whip cream frosting and\r\nchocolate crumbles on the sides.\r\n'),
(605767379, 'burger', 'Checken Burger', 'Checken Burger.png', 90, '4.4', 'These flavourful burgers are jam-packed with nutritious goodies like flax and oats. '),
(811189695, 'desert', 'Chocolate cake', 'Chocolate cake.png', 70, '5.0', 'Chocolate chiffon cake filled twice with whipped\r\ncream garnished with chocolate shavings.'),
(904482164, 'burger', 'Maharaja', 'Maharaja.png', 55, '4.2', 'Maharaja with extra chees and extra mouth watering  flavors.'),
(1004408089, 'cold-drinks', 'Kiwi juice', 'kiwi juice.png', 90, '4.0', 'This kiwi juice is healthy and testy .'),
(1143819252, 'pizza', 'Vegge lovers', 'Vegge lovers.png', 50, '4.3', 'Extra-virgin olive oil, garlic, mozzarella\r\n                                            cheese, onions, mushrooms, green olives, black olives'),
(1280710984, 'burger', 'Chees butter', 'Cheese Butter.png', 120, '4.4', 'A mighty meaty double helping of all the reasons\r\n                                            you love our burger.'),
(1334663211, 'non-veg', 'Kabab', 'kabab.jpg', 70, '4.0', 'The best kabab with special  with less oily and testy..'),
(1480265586, 'desert', 'Blueberry Shake', 'Blueberry Shake.png', 80, '5.0', 'View great tasting  Blueberry Shake  and cold Drink Products.'),
(1618541328, 'cold-drinks', 'Iced coffee', 'iced coffee.png', 80, '3.4', 'The best iced coffee for you with different flavor and with extra cheries'),
(1818212321, 'pizza', 'Trio Cheese', 'Trio Cheese.png', 67, '4.3', 'Mouth watering pepperoni, cabanossi, mushroom,\r\n                                            capsicum, black olives and stretchy mozzarella,'),
(1904870669, 'non-veg', 'Chicken Hawaii', 'Chicken Hawaii.png', 120, '5.0', 'chicken Hawaii is content neutritious ingrediants and tasty .'),
(1992381672, 'cold-drinks', 'Fresh lime', 'lemon juice.png', 50, '3.4', 'Get a fresh and testy fruit juices for summer and stay mentaly and physicaly cool'),
(2028185243, 'non-veg', 'BBQ chicken breast', 'BBQ chicken breast.png', 140, '4.4', 'Best BBQ chicken breast you have never tried '),
(2039601561, 'non-veg', 'Chicken handi', 'Chicken handi.png', 140, '4.2', 'The best chicken recipe here is chicken handi with extra gravy.'),
(2124393466, 'desert', 'strawberry icecream', 'strawberry icecream.png', 80, '4.1', 'best ice cream in summer to cool your body and mind ...');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `customer_mobile` varchar(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`customer_mobile`, `product_id`, `product_name`, `product_image`, `product_price`) VALUES
('9999999999', 2028185243, 'BBQ chicken breast', 'BBQ chicken breast.png', 140);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `admin_name` (`admin_name`),
  ADD UNIQUE KEY `admin_pwd` (`admin_pwd`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`),
  ADD UNIQUE KEY `customer_mobile` (`customer_mobile`) USING HASH;

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
