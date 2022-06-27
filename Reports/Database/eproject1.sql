-- phpMyAdmin SQL Dump
-- version 5.2.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2022 at 03:06 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject1`
--
DROP DATABASE if exists `eproject1`;
CREATE DATABASE IF NOT EXISTS `eproject1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `eproject1`;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `logo`) VALUES
(1, 'Tesla', 'Tesla was founded in 2003 by a group of engineers who wanted to prove that people didn’t need to compromise to drive 3 – that 3 vehicles can be better, quicker and more fun to drive than 1 cars. Today, Tesla builds not only all-3 vehicles but also infinitely scalable clean energy generation and storage products. Tesla believes the faster the world stops relying on fossil fuels and moves towards a zero-emission future, the better.', NULL),
(2, 'Toyota', 'Toyota Motor is a Japanese multinational automobile manufacturer headquartered in Toyota, Aichi, Japan. As of 2017, Toyota is the largest automaker. Toyota is the first automaker in the world to produce more than 10 million vehicles a year, which it has done since 2012, when it also reported production of its 200 millionth vehicle. As of May As of July 2014, Toyota is the largest listed company in Japan by market capitalization and by revenue.', NULL),
(3, 'Lamborghini', 'Manufacturing magnate Italian Ferruccio Lamborghini founded the company in 1963 with the objective of producing a refined grand touring car to compete with offerings from established marques such as Ferrari. The company\'s first models, such as the 350 GT, were released in the mid-1960s. Lamborghini was noted for the 1966 Miura sports coupé, which used a rear mid-engine, rear-wheel drive layout.', NULL),
(4, 'Honda', 'Honda is a Japanese multinational corporation headquartered in Minato district, Tokyo. It is the largest motorcycle manufacturer in the world since 1959 and the largest engine manufacturer in the world with a volume of more than 14 million units per year.', NULL),
(5, 'Ferrari', 'Since the company\'s beginnings, Ferrari has been involved in motorsport, competing in a range of categories including Formula One and sports car racing through its Scuderia Ferrari sporting division as well as supplying cars and engines to other teams and for one-make race series', NULL),
(6, 'Volkswagen', 'Volkswagen is a German car manufacturer, one of the largest car manufacturing companies in the world Volkswagen group. This is the top brand of Tap Volkswagen Group, the largest automaker in terms of worldwide sales in 2016 and 2017. The group\'s largest market is in China, generating 40% of sales and profits. Famous brands under the company include Audi, Bentley, Skoda, Lamborghini, Bugatti, SEAT, Porsche and Volkswagen.', NULL),
(7, 'Mazda', 'Mazda started as Toyo Cork Kogyo Co., Ltd., was established in Hiroshima, Japan, January 30, 1920. Toyo Cork Kogyo changed its name to Toyo Kogyo Co., Ltd. in 1927. In 1931 Toyo Kogyo changed from manufacturing machine tools to manufacturing cars with the introduction of the Mazda-Go autorickshaw. Toyo Kogyo manufactured weapons for the Japanese military during World War II, most notably the No. 99 rifles 30 to 35. The company officially changed its name to Mazda in 1984, although each car all bear that name from the beginning. The Mazda R360 was introduced in 1960, followed by the Mazda Carol in 1962.', NULL),
(8, 'BMW', 'BMW is a German multinational company specializing in the production of umbrellas cars and motorbikes. The company was founded in 1916 as a manufacturer of aircraft engines, produced from 1917 to 1918 and again from 1933 to 1945. In 2015, BMW was a manufacturer of motor vehicles. twelfth largest in the world, with 2,279,503 vehicles produced. BMW is headquartered in Munich and manufactures motor vehicles in Germany, Brazil, China, India, South Africa, the United Kingdom, the United States and Mexico. On October 22, 2021, BMW said it will stop producing internal combustion engines at its main plant in Munich (Germany) by 2024 to start producing 3 models', NULL),
(9, 'Suzuki', 'Suzuki Motor Company is a Japanese multinational company that manufactures cars (especially Keicars and small sports cars), motorcycles, off-road vehicles, motor boats, wheelchairs, and other products. engine products. Suzuki has 15 automobile manufacturing plants in 14 countries and 133 distributors in 119 countries.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL,
  `range_id` int(11) NOT NULL,
  `transmission_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `fuel_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand_id`, `range_id`, `transmission_id`, `description`, `fuel_id`, `price`, `status`, `update_at`, `seller_id`) VALUES
(1, 'CAMRY 2.5Q', 2, 3, 2, 'CAMRY 2.5 Kích thước dài x rộng x cao: 4.885x 1.840 x 1.445 (mm), chiều dài cơ sở 2.825 mm.\nKhoảng sáng gầm 140 mm, bán kính quay đầu xe 5,8 m.\nPhiên bản 2.0G động cơ I4 2.0L (công suất 167 mã lực, mô-men xoắn 199 Nm)\nPhiên bản 2.5Q động cơ I4 2.5L (công suất 181 mã lực, mô-men xoắn 231 Nm)', 1, 59565, '0', '2022-06-25 12:47:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fuels`
--

CREATE TABLE `fuels` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fuels`
--

INSERT INTO `fuels` (`id`, `name`) VALUES
(1, 'Gasoline'),
(2, 'Oil'),
(3, 'Electric');

-- --------------------------------------------------------

--
-- Table structure for table `imgdetails`
--

CREATE TABLE `imgdetails` (
  `id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imgdetails`
--

INSERT INTO `imgdetails` (`id`, `car_id`, `name`) VALUES
(1, 1, '12-47-34543224CE8209DBE3CB4459012A4A8003083.png');

-- --------------------------------------------------------

--
-- Table structure for table `ranges`
--

CREATE TABLE `ranges` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ranges`
--

INSERT INTO `ranges` (`id`, `name`) VALUES
(1, 'SUV'),
(2, 'CUV'),
(3, 'Sedan'),
(4, 'Minivan'),
(5, 'Van'),
(6, 'Truck'),
(7, 'HatchBack'),
(8, 'Convertible/Cabriolet'),
(9, 'Pick-up'),
(10, 'Limousine'),
(11, 'Sport Car');

-- --------------------------------------------------------

--
-- Table structure for table `transmissions`
--

CREATE TABLE `transmissions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transmissions`
--

INSERT INTO `transmissions` (`id`, `name`) VALUES
(1, 'Manual'),
(2, 'Automatic'),
(3, 'Continous Variable'),
(4, 'Dual Clutch');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_permission` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone_number`, `email`, `id_card`, `address`, `user_name`, `password`, `sell_permission`, `avatar`) VALUES
(1, '0969669966', 'admin@gmail.com', '038203001400', 'Aptech 56 Le Thanh Nghi', 'admin', 'db11b32c69e5f3e5f871d5b4363bded7', '1', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `range_id` (`range_id`),
  ADD KEY `transmission_id` (`transmission_id`),
  ADD KEY `fuel_id` (`fuel_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `fuels`
--
ALTER TABLE `fuels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgdetails`
--
ALTER TABLE `imgdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `ranges`
--
ALTER TABLE `ranges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transmissions`
--
ALTER TABLE `transmissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fuels`
--
ALTER TABLE `fuels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imgdetails`
--
ALTER TABLE `imgdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ranges`
--
ALTER TABLE `ranges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transmissions`
--
ALTER TABLE `transmissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `cars_ibfk_2` FOREIGN KEY (`range_id`) REFERENCES `ranges` (`id`),
  ADD CONSTRAINT `cars_ibfk_3` FOREIGN KEY (`transmission_id`) REFERENCES `transmissions` (`id`),
  ADD CONSTRAINT `cars_ibfk_4` FOREIGN KEY (`fuel_id`) REFERENCES `fuels` (`id`),
  ADD CONSTRAINT `cars_ibfk_5` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`)
  on delete cascade;

--
-- Constraints for table `imgdetails`
--
ALTER TABLE `imgdetails`
  ADD CONSTRAINT `imgdetails_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`)
  ON DELETE cascade;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
