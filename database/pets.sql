-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2021 at 07:50 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(200) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_mobile` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_mobile`, `admin_email`) VALUES
('9129d9208d5ee58235a74be75d2ef0f9cbb2f48d', 'System Administrator', '+254740847563', 'admin@pet.org');

-- --------------------------------------------------------

--
-- Table structure for table `ailment`
--

CREATE TABLE `ailment` (
  `ailment_id` varchar(200) NOT NULL,
  `ailment_name` varchar(200) NOT NULL,
  `ailment_desc` longtext NOT NULL,
  `ailment_signs` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ailment`
--

INSERT INTO `ailment` (`ailment_id`, `ailment_name`, `ailment_desc`, `ailment_signs`) VALUES
('37991a12586f1cf84561ff100003e22032e60afd95', 'Rubbies ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Porta lorem mollis aliquam ut porttitor leo a diam ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Porta lorem mollis aliquam ut porttitor leo a diam '),
('63acfcb53a0a9cad53e618788911aa9d6f1d6230b0', 'Test Ailment ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Porta lorem mollis aliquam ut porttitor leo a diam sollicitudin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Porta lorem mollis aliquam ut porttitor leo a diam sollicitudin'),
('91463dea4b14f62230e5e8ae191f348f5e07189284', 'Typhoid', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Porta lorem mollis aliquam ut porttitor leo a diam sollicitudin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Porta lorem mollis aliquam ut porttitor leo a diam sollicitudin');

-- --------------------------------------------------------

--
-- Table structure for table `category_ailments`
--

CREATE TABLE `category_ailments` (
  `category_ailment_id` varchar(200) NOT NULL,
  `category_ailment_category_id` varchar(200) NOT NULL,
  `category_ailment_ailment_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_ailments`
--

INSERT INTO `category_ailments` (`category_ailment_id`, `category_ailment_category_id`, `category_ailment_ailment_id`) VALUES
('5bc03785753b1de8daa18fd161e321d35007075c69', '4de0310773d082a0fe118dd455d88abc749d0f1039', '63acfcb53a0a9cad53e618788911aa9d6f1d6230b0'),
('6ec094d9a94dea0738574fbacde1d30c90397a4d72', 'd3158019daebf86ef296630248b51d58c6e00ff059', '91463dea4b14f62230e5e8ae191f348f5e07189284');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_visit`
--

CREATE TABLE `clinic_visit` (
  `visit_id` varchar(200) NOT NULL,
  `visit_date` varchar(200) DEFAULT NULL,
  `visit_customer_pet_id` varchar(200) DEFAULT NULL,
  `visit_ailment` varchar(200) DEFAULT NULL,
  `visit_specialist_id` varchar(200) DEFAULT NULL,
  `visit_report` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinic_visit`
--

INSERT INTO `clinic_visit` (`visit_id`, `visit_date`, `visit_customer_pet_id`, `visit_ailment`, `visit_specialist_id`, `visit_report`) VALUES
('0919432e0a17dea1fa52f7d40d8a413aba33a97076', '2021-08-17', '1add0cfda96e38b836c602446c70ade98036f92ea6', 'Rubbies ', '9724180d1175143d78a2e57aa89491dd2364f36f68', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Porta lorem mollis aliquam ut porttitor leo a diam sollicitudin. A diam sollicitudin tempor id. Ipsum nunc aliquet bibendum enim facilisis gravida. Gravida arcu ac tortor dignissim convallis aenean et. Turpis egestas maecenas pharetra convallis posuere. Vitae nunc sed velit dignissim sodales ut eu. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Pellentesque diam volutpat commodo sed egestas egestas fringilla. Habitasse platea dictumst quisque sagittis. Accumsan lacus vel facilisis volutpat est. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Enim ut tellus elementum sagittis vitae et leo duis ut. Est ante in nibh mauris cursus mattis molestie a iaculis.\r\n'),
('70ac8438f64c965c597722de91ea61c35cd96d4eb7', '2021-08-15', '7b2a4e3ba1db98dadcfd3bd35a722568c71dddd340', 'Rubbies ', '9724180d1175143d78a2e57aa89491dd2364f36f68', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Porta lorem mollis aliquam ut porttitor leo a diam sollicitudin. A diam sollicitudin tempor id. Ipsum nunc aliquet bibendum enim facilisis gravida. Gravida arcu ac tortor dignissim convallis aenean et. Turpis egestas maecenas pharetra convallis posuere. Vitae nunc sed velit dignissim sodales ut eu. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Pellentesque diam volutpat commodo sed egestas egestas fringilla. Habitasse platea dictumst quisque sagittis. Accumsan lacus vel facilisis volutpat est. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Enim ut tellus elementum sagittis vitae et leo duis ut. Est ante in nibh mauris cursus mattis molestie a iaculis.'),
('f72e1d662116f0aec64b2b36090a70ddd862e3844d', '2021-08-16', '04cd12a4095f280bac27a7d526166ce2cbb522df94', 'Rubbies ', '9724180d1175143d78a2e57aa89491dd2364f36f68', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Porta lorem mollis aliquam ut porttitor leo a diam sollicitudin. A diam sollicitudin tempor id. Ipsum nunc aliquet bibendum enim facilisis gravida. Gravida arcu ac tortor dignissim convallis aenean et. Turpis egestas maecenas pharetra convallis posuere. Vitae nunc sed velit dignissim sodales ut eu. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Pellentesque diam volutpat commodo sed egestas egestas fringilla. Habitasse platea dictumst quisque sagittis. Accumsan lacus vel facilisis volutpat est. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Enim ut tellus elementum sagittis vitae et leo duis ut. Est ante in nibh mauris cursus mattis molestie a iaculis.\r\n'),
('f8f8ed62c740b12a5d1555927b5de130afbcfae2a9', '2021-08-15', '7b2a4e3ba1db98dadcfd3bd35a722568c71dddd340', 'Rubbies ', '9724180d1175143d78a2e57aa89491dd2364f36f68', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Porta lorem mollis aliquam ut porttitor leo a diam sollicitudin. A diam sollicitudin tempor id. Ipsum nunc aliquet bibendum enim facilisis gravida. Gravida arcu ac tortor dignissim convallis aenean et. Turpis egestas maecenas pharetra convallis posuere. Vitae nunc sed velit dignissim sodales ut eu. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Pellentesque diam volutpat commodo sed egestas egestas fringilla. Habitasse platea dictumst quisque sagittis. Accumsan lacus vel facilisis volutpat est. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Enim ut tellus elementum sagittis vitae et leo duis ut. Est ante in nibh mauris cursus mattis molestie a iaculis.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(200) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_mobile` varchar(200) NOT NULL,
  `customer_major` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_mobile`, `customer_major`) VALUES
('198d1717a5a06262c7acab54c499d8c03fc87d8beb', 'James Doe', 'jamesdoe@mail.com', '+2549001904', 'Just another james doe major Updated'),
('61c868b53aaafc9155f892541192b377c82339a070', 'Martdevelopers Inc', 'hello@martdevelopers.inc', '0740847563', 'Software Engineer'),
('9ca124e164bf9570807967e895048c8e28c7db3b7d', 'Jane Doe', 'janedoe@mail.com', '0789065421', 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `customer_pets`
--

CREATE TABLE `customer_pets` (
  `customer_pet_id` varchar(200) NOT NULL,
  `customer_pet_customer_id` varchar(200) NOT NULL,
  `customer_pet_pet_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_pets`
--

INSERT INTO `customer_pets` (`customer_pet_id`, `customer_pet_customer_id`, `customer_pet_pet_id`) VALUES
('04cd12a4095f280bac27a7d526166ce2cbb522df94', '9ca124e164bf9570807967e895048c8e28c7db3b7d', 'd9d8afbada43f5d6ab77189c1b5d01d8c8f484e520'),
('1add0cfda96e38b836c602446c70ade98036f92ea6', '61c868b53aaafc9155f892541192b377c82339a070', '7b14db752dbbb2e8c96ba0d476df61787de54fe979'),
('7b2a4e3ba1db98dadcfd3bd35a722568c71dddd340', '198d1717a5a06262c7acab54c499d8c03fc87d8beb', '813409daf1bcc6404fdd42f66e1b8ea5c0bdd33ec5');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` varchar(200) NOT NULL,
  `login_username` varchar(200) NOT NULL,
  `login_password` varchar(200) NOT NULL,
  `login_rank` varchar(200) NOT NULL,
  `login_customer_id` varchar(200) DEFAULT NULL,
  `login_specialist_id` varchar(200) DEFAULT NULL,
  `login_admin_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_username`, `login_password`, `login_rank`, `login_customer_id`, `login_specialist_id`, `login_admin_id`) VALUES
('099dff1575e74241839fd71d3c6ba83991cc63ec5e', 'james_d_doe', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Specialist', NULL, '9724180d1175143d78a2e57aa89491dd2364f36f68', NULL),
('6fff9ff3b6445f26a85d8eabc95761ff4831042b4e', 'jane_doe', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Customer', '9ca124e164bf9570807967e895048c8e28c7db3b7d', NULL, NULL),
('8af305797ff244bf12ee81da9ea78808d0c1a86691', 'james_doe', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Customer', '198d1717a5a06262c7acab54c499d8c03fc87d8beb', NULL, NULL),
('9ee40476ceb22f16f3cdbf0fd0fcf2906d9adeec5a', 'Mart', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Customer', '61c868b53aaafc9155f892541192b377c82339a070', NULL, NULL),
('abf1fae4e9187673461a640b4c1bec432f03fb9d', 'System Admin', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Administrator', NULL, NULL, '9129d9208d5ee58235a74be75d2ef0f9cbb2f48d');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pet_id` varchar(200) NOT NULL,
  `pet_name` varchar(200) NOT NULL,
  `pet_category_id` varchar(200) NOT NULL,
  `pet_age` varchar(200) NOT NULL,
  `pet_sex` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `pet_name`, `pet_category_id`, `pet_age`, `pet_sex`) VALUES
('7b14db752dbbb2e8c96ba0d476df61787de54fe979', 'Morris', '4de0310773d082a0fe118dd455d88abc749d0f1039', '1 Year', 'Female'),
('813409daf1bcc6404fdd42f66e1b8ea5c0bdd33ec5', 'Jimmy', 'd3158019daebf86ef296630248b51d58c6e00ff059', '5 Months', 'Female'),
('d9d8afbada43f5d6ab77189c1b5d01d8c8f484e520', 'Bosco', 'd3158019daebf86ef296630248b51d58c6e00ff059', '1 Year', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `pets_categories`
--

CREATE TABLE `pets_categories` (
  `category_id` varchar(200) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `category_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets_categories`
--

INSERT INTO `pets_categories` (`category_id`, `category_name`, `category_desc`) VALUES
('4de0310773d082a0fe118dd455d88abc749d0f1039', 'Cat', 'Cat is another pet category'),
('d3158019daebf86ef296630248b51d58c6e00ff059', 'Dog', 'Dog is just a pet category ');

-- --------------------------------------------------------

--
-- Table structure for table `specialist`
--

CREATE TABLE `specialist` (
  `specialist_id` varchar(200) NOT NULL,
  `specialist_name` varchar(200) NOT NULL,
  `specialist_email` varchar(200) NOT NULL,
  `specialist_mobile` varchar(200) NOT NULL,
  `specialist_major` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialist`
--

INSERT INTO `specialist` (`specialist_id`, `specialist_name`, `specialist_email`, `specialist_mobile`, `specialist_major`) VALUES
('9724180d1175143d78a2e57aa89491dd2364f36f68', 'James D Doe', 'james@gmail.com', '071009824', 'Animal surgery ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ailment`
--
ALTER TABLE `ailment`
  ADD PRIMARY KEY (`ailment_id`);

--
-- Indexes for table `category_ailments`
--
ALTER TABLE `category_ailments`
  ADD PRIMARY KEY (`category_ailment_id`),
  ADD KEY `CategoryAilment` (`category_ailment_category_id`),
  ADD KEY `AilmentConstraint` (`category_ailment_ailment_id`);

--
-- Indexes for table `clinic_visit`
--
ALTER TABLE `clinic_visit`
  ADD PRIMARY KEY (`visit_id`),
  ADD KEY `VisitSpecialist` (`visit_specialist_id`),
  ADD KEY `VisitCustomerID` (`visit_customer_pet_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_pets`
--
ALTER TABLE `customer_pets`
  ADD PRIMARY KEY (`customer_pet_id`),
  ADD KEY `Pet` (`customer_pet_pet_id`),
  ADD KEY `CustomerPet` (`customer_pet_customer_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `Customer` (`login_customer_id`),
  ADD KEY `Specialist` (`login_specialist_id`),
  ADD KEY `Admin` (`login_admin_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `PetCategory` (`pet_category_id`);

--
-- Indexes for table `pets_categories`
--
ALTER TABLE `pets_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `specialist`
--
ALTER TABLE `specialist`
  ADD PRIMARY KEY (`specialist_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_ailments`
--
ALTER TABLE `category_ailments`
  ADD CONSTRAINT `AilmentConstraint` FOREIGN KEY (`category_ailment_ailment_id`) REFERENCES `ailment` (`ailment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `CategoryAilment` FOREIGN KEY (`category_ailment_category_id`) REFERENCES `pets_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clinic_visit`
--
ALTER TABLE `clinic_visit`
  ADD CONSTRAINT `VisitCustomerID` FOREIGN KEY (`visit_customer_pet_id`) REFERENCES `customer_pets` (`customer_pet_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `VisitSpecialist` FOREIGN KEY (`visit_specialist_id`) REFERENCES `specialist` (`specialist_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_pets`
--
ALTER TABLE `customer_pets`
  ADD CONSTRAINT `CustomerPet` FOREIGN KEY (`customer_pet_customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Pet` FOREIGN KEY (`customer_pet_pet_id`) REFERENCES `pets` (`pet_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `Admin` FOREIGN KEY (`login_admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Customer` FOREIGN KEY (`login_customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Specialist` FOREIGN KEY (`login_specialist_id`) REFERENCES `specialist` (`specialist_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `PetCategory` FOREIGN KEY (`pet_category_id`) REFERENCES `pets_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
