-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2024 at 09:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(3) NOT NULL,
  `trackin_number` int(15) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `method` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `product_weight` varchar(50) DEFAULT NULL,
  `total_shipment` int(10) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `departure_location` varchar(250) DEFAULT NULL,
  `departure_date` varchar(50) DEFAULT NULL,
  `departure_time` varchar(15) DEFAULT NULL,
  `pickup_location` varchar(250) DEFAULT NULL,
  `pickup_date` varchar(50) DEFAULT NULL,
  `pickup_time` varchar(15) DEFAULT NULL,
  `current_location` varchar(50) DEFAULT NULL,
  `currentt_date` varchar(50) DEFAULT NULL,
  `currentt_time` varchar(15) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `reason_status` varchar(50) DEFAULT NULL,
  `sender_name` varchar(50) DEFAULT NULL,
  `sender_email` varchar(50) DEFAULT NULL,
  `sender_contact` varchar(25) DEFAULT NULL,
  `sender_number` varchar(25) DEFAULT NULL,
  `sender_street` varchar(50) DEFAULT NULL,
  `sender_city` varchar(50) DEFAULT NULL,
  `sender_country` varchar(50) DEFAULT NULL,
  `receiver_name` varchar(100) DEFAULT NULL,
  `receiver_email` varchar(25) DEFAULT NULL,
  `receiver_city` varchar(50) DEFAULT NULL,
  `receiver_country` varchar(50) DEFAULT NULL,
  `receiver_contact` varchar(50) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `receiver_hphone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `trackin_number`, `title`, `method`, `category`, `product_weight`, `total_shipment`, `description`, `departure_location`, `departure_date`, `departure_time`, `pickup_location`, `pickup_date`, `pickup_time`, `current_location`, `currentt_date`, `currentt_time`, `status`, `reason_status`, `sender_name`, `sender_email`, `sender_contact`, `sender_number`, `sender_street`, `sender_city`, `sender_country`, `receiver_name`, `receiver_email`, `receiver_city`, `receiver_country`, `receiver_contact`, `product_name`, `receiver_hphone`) VALUES
(6523, 975212811, 'Florida Package ', 'LAND', 'Special Care', '28', 1, 'DISCREET PACKAGE                                         ', '6000 N Terminal Pkwy Suite 4000, Atlanta, GA 30320, United States', 'January 23 2024', '10:57am', 'Fort Myers, 11000 Terminal Access Rd, Fort Myers, FL 33913, United States', 'January  25 2024', '08:00am', '6000 N Terminal Pkwy Suite 4000, Atlanta, GA 30320', 'January 24 2024', '03:10pm', 'HOLD', 'Delivery is on Hold.\r\nPlease check your email. ', 'Exoticpharm', 'Exoticpharm@gmail.com', '(646) 494-3176', NULL, '1705 46th ave Vero Beach, FL 32966', 'California ', 'United States of America', 'Jason Woodward', 'Reddihayward@gmail.com', 'Florida ', 'United States of America', '3862159099', 'DISCREET PACKAGE ', '1705'),
(6524, 437090268, 'Romania Package ', 'AIR', 'Vehicles', '30', 1, 'Fragile                                         ', '2400 Aviation Dr, Dallas, TX 75261, United States', 'January 25 2024', '03:30pm', 'Șoseaua București-Ploiești 40, București, Romania', 'January  27  2024', '10:00am', '1300 Schwechat, Austria', 'January 26 2024', '04:40pm', 'HOLD', 'Package On Hold please check email. ', 'William Mac', 'Williammac@gmail.com', '(978)709-1253', NULL, '.str. Ciresului 24 Brasov Romania', 'Dallas Texas ', 'United States of America', 'Andrei Cristian', '...herr.brasov@gmail.com', 'Romania ', 'Romania', '0040733691862', 'Wheels ', '24'),
(6525, 667731088, 'GEORGE UTAH PACKAGE ', 'TRANSIT', 'Special Care', '08', 1, 'DISCREET SHIPMENT                                                                                                                         ', '8500 Peña Blvd, Denver, CO 80249, United States', 'January 26 2024', '07: 00am', '4550 S Airport Pkwy, St. George, UT 84790, United States', 'January  27  2024', '08:00am', '1 Saarinen Cir, Dulles, VA 20166, United States', 'January 27 2024', '05:04am', 'HOLD', 'Package on hold ', 'Austin Bryant', 'Austinbryant@gmail.com', '(978)709-1256', NULL, '333 S 1000 E Apt H2 St George Utah 84770', 'Denver Colorado', 'United States of America', 'David Creighton', 'Dave.ken.cr8on@gmail.com', 'George Utah', 'United States of America', '(435) 772-4771', 'DISCREET PACKAGE ', '333'),
(6526, 861394679, 'North Carolina Package ', 'LAND', 'Special Care', '08', 1, 'Package in Transit                                                        ', '8500 Peña Blvd, Denver, CO 80249, United States', 'January 26 2024', '1:40pm', '200 Terminal Dr, New Bern, NC 28560, United States', 'January  27  2024', '08:00am', '1 Richard E Byrd Terminal Dr, Richmond, VA 23250, ', 'January 26 2024', '11:30am', 'TRANSIT', 'Schedule Delivery. ', 'Jason Schurr', 'jasonshurr191@gmail.com', '3038354838', NULL, '1307 Ashley Park Rd, New Bern NC 28562', 'Denver Colorado', 'United States of America', 'Payton Queen    ', 'Flipzqueen@gmail.com', 'North Carolina ', 'United States of America', '704-530-1128', 'Discreet Package ', '1307'),
(6527, 185705523, 'Arizona Package ', 'LAND', 'Pets', '12', 1, 'Fragile ', '806 W Airport Rd, Payson, AZ 85541, United States', 'January 27 2024', '03:30pm', '762 E Riviera Dr, Chandler, AZ 85249, USA', 'January  27 2024', '09: 50am', '806 W Airport Rd, Payson, AZ 85541, United States', 'January 27 2024', '09:12am', 'ACTIVE', 'Package Registered. ', 'Bernice Moore', 'Puppiesadoption59@gmail.com', '(281) 310-1426', NULL, '762 East Riviera Dr. Chandler AZ 85249', 'Clay Springs, AZ', 'United States', 'Jen Sacco-Carnabuci', 'Jensacco@aol.com', 'Arizona', 'United States', '(480)3187032', 'Chihuahua puppy ', '762'),
(6528, 961829289, 'Florida Package ', 'LAND', 'Pets', '10', 1, 'Fragile                                         ', '1 World Way, Los Angeles, CA 90045, United States', 'January 28 2024', '09:14am', '11812 Scarecrow Ln, Orlando, FL 32821, USA', 'January  28 2024', '05:00pm', '1 World Way, Los Angeles, CA 90045, United States', 'January 28 2024', '09:14am', 'PENDING', 'Package registered. ', 'Sofia Cuevas  ', 'yorkieskennel98@gmail.com', '4158431585', NULL, '11812 Scarecrow Ln Orlando FL 32821', '6080 Newcomb St San Bernardino CA 92404', 'United States of America', 'Mauricio Guardado', 'caliguy455@yahoo.com', 'Florida ', 'United States of America', '(213) 797-2702', 'MiniSchnauzers', '11812'),
(6529, 565313574, 'PENNSYLVANIA PACKAGE ', 'LAND', 'Special Care', '40', 1, 'Fragile                                         ', '100 CWA Dr, Mosinee, WI 54455, United States', 'January 29 2024', '12:45pm', '1 Terminal Dr, Middletown, PA 17057, United States', 'January  30  2024', '02:00pm', '2160 W Case Rd, Columbus, OH 43235, United States', 'January 29 2024', '12:25pm', 'HOLD', 'PACKAGE ONHOLD, CHECK EMAIL. ', 'William Finney', 'automobile90087@gmail.com', '(414) 810-7164', NULL, '608 Cribbs rd poyntelle pa 18454', '411 E court St, elkhorn, WI', 'United States of America', 'Jeremy Raymond noble', 'Jnoble8193@gmail.com', 'Pennsylvania ', 'United States of America', '570-335-1293', '2009 skidoo 120 track', '608'),
(6530, 589160289, 'NEW JERSEY PACKAGE. ', 'LAND', 'Household', '28', 1, 'Fragile                                         ', '1 World Way, Los Angeles, CA 90045, United States', 'January 30, 2024', '09:17am', '3 Brewster Rd, Newark, NJ 07114, United States', 'January  31, 2024', '01:20pm', '5757 Wayne Newton Blvd, Las Vegas, NV 89119, Unite', 'January 30, 2024', '06:31am', 'HOLD', 'PACKAGE SUCCESSFULLY REGISTERED. ', 'Thomas kimps     ', 'thomaskimp@gmail.com', '(619) 722-9543', NULL, '7 Monterey Drive Wayne NJ 07470', '502 S Cleveland Unit Oceanside, San Diego County, ', 'United States of America', 'Artur Zajac       ', 'arturblazen@gmail.com', 'California ', 'United States of America', '9733561159', 'Black diamond cobra', '7'),
(6531, 826601488, 'CALIFORNIA PACKAGE ', 'LAND', 'Special Care', '30', 1, 'FRAGILE                                         ', '11300 S Airport Dr, Columbia, MO 65201, United States', 'January, 31 2024', '09:30am', '1 World Way, Los Angeles, CA 90045, United States', 'February, 01 2024', '10:00am', '2 Kansas City Boulevard, Kansas City, MO, USA', 'January,31 2024', '11:14am', 'HOLD', 'PACKAGE SUCCESSFULLY REGISTERED. ', 'Paul Garret   ', 'Paulgarret@gmail.com', '(619) 722-9543', NULL, '2604 Fallsview Rd.  San Marcos, CA 92078-0911', '1930 Hilton Head Dr, Missouri City, TX 77459.', 'United States of America', 'Mark Havasusecret     ', 'midnightmark57@icloud.com', 'California ', 'United States of America', '(562)714-3112', 'Corbin Seat', '2604'),
(6532, 710878318, 'AUSTRALIA PACKAGE ', 'LAND', 'Special Care', '40', 1, 'FRAGILE                                         ', 'Perth Airport (PER), 32 Boud Ave, Perth Airport WA 6105, Australia', 'February 01 2024', '09:07pm', '7D Bungana Drive, Murray Bridge East SA, Australia', 'February 02 2024', '10:00am', 'Perth Airport (PER), 32 Boud Ave, Perth Airport WA', 'February 01 2024', '09:09pm', 'HOLD', 'Package on hold please check your email. ', 'mac mills ', 'macmills@gmail.com', '0622266182', NULL, '7D Bungana Drive Murray Bridge East', 'Perth Australia ', 'Australia', 'Allan lunnay ', 'allan.lunnay@gmail.com', 'Australia ', 'Australia', '0408855159', 'Backrest and carrier ', '7D'),
(6533, 261415239, 'AUSTRALIA PACKAGE ', 'AIR', 'Special Care', '30', 2, 'FRAGILE                                                                                 ', '1 World Way, Los Angeles, CA 90045, United States', 'February 2, 2024', '09:20am', 'Perth Airport (PER), 32 Boud Ave, Perth Airport WA 6105, Australia', 'February 10, 2024', '10:00am', 'Soekarno-Hatta International Airport, Pajang, Tang', 'February 5, 2024', '03:05pm', 'HOLD', 'PACKAGE ON HOLD.', 'Exoticpharm', 'Exoticpharm@gmail.com', '(646) 494-3176', NULL, '6 Bulgo lane Helensburgh New South Wales 2508 Aust', 'California ', 'United States of America', 'Ryan Gordon', 'ryangordon6@hotmail.com', '6 Bulgo lane Helensburgh New South Wales 2508 Aust', 'Australia', '0417784787', 'DISCREET PACKAGE ', '6');

-- --------------------------------------------------------

--
-- Table structure for table `shipment_process`
--

CREATE TABLE `shipment_process` (
  `id` int(11) NOT NULL,
  `trakin_number` varchar(15) DEFAULT NULL,
  `current_location` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `time` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipment_process`
--

INSERT INTO `shipment_process` (`id`, `trakin_number`, `current_location`, `status`, `reason`, `date`, `time`) VALUES
(86, '264938556', 'Long Beach, California, USA', 'PENDING', 'Package under review ', 'January 15 2024', '09:43am'),
(87, '440991238', 'Dallas, TX, USA', 'REGISTERED', 'Package under review ', 'January 15 2024', '12:30pm'),
(88, '177854973', 'Dallas, TX, USA', 'REGISTERED', 'Package Successfully registered. ', 'January 16 2024', '10:44am'),
(89, '763062157', '3161 Old Bridgeport Way, San Diego, CA 92111, USA', 'REGISTERED', 'Package under review ', 'January 16 2024', '09:40am'),
(90, '949167181', 'Los Angeles, CA, USA', 'REGISTERED', 'Package Registered. \r\nTHANKS FOR USING OUR SERVICE', 'January 18 2024', '09:00pm'),
(91, '393359299', 'Denver, CO, USA', 'PENDING', 'Please check your email. ', 'January 18 2024', '11:37pm'),
(92, '393359299', 'Denver, CO, USA', 'HOLD', 'Please check your email. ', 'January 18 2024', '11:37pm'),
(93, '443845887', 'Louisville, Kentucky, USA', 'REGISTERED', 'Package Registered. \r\nTHANKS FOR USING OUR SERVICE', 'January 18 2024', '04:06pm'),
(94, '242633052', 'San Diego, CA, USA', 'ACTIVE', 'THANKS FOR USING OUR SERVICE ', 'January 19 2024', '11:47am'),
(95, '724616952', '150 Michigan Avenue, Chicago, IL 60601, USA', 'PROCESSING', 'payment', 'january 14 2024', '6:00 am'),
(96, '141518204', 'Us FAA, 100 Terminal Rd, Avoca, PA 18641, USA', 'REGISTERED', 'PACKAGE UNDER REVIEW. ', 'January 20 2024', '11:26am'),
(97, '983224802', 'Us FAA, 100 Terminal Rd, Avoca, PA 18641, USA', 'REGISTERED', 'PACKAGE UNDER REVIEW ', 'January 20 2024', '11:54am'),
(98, '432276702', '1 Terminal Dr, Middletown, PA 17057, United States', 'REGISTERED', 'PACKAGE UNDER REVIEW ', 'January 20 2024', '12:05pm'),
(99, '975212811', '4100 Donald Douglas Dr, Long Beach, CA 90808, Unit', 'ACTIVE', 'Package Registered.  Delivery is scheduled ', 'January 23 2024', '11:00am'),
(100, '437090268', '2400 Aviation Dr, Dallas, TX 75261, United States', 'ACTIVE', 'Package Registered FOR Delivery. ', 'January 25 2024', '03:10pm'),
(101, '667731088', '8500 Peña Blvd, Denver, CO 80249, United States', 'ACTIVE', 'PACKAGE SUCCESSFULLY REGISTERED. \r\nPLEASE ALWAYS C', 'January 26 2024', '06:55am'),
(102, '861394679', '8500 Peña Blvd, Denver, CO 80249, United States', 'ACTIVE', 'Review Completed. ', 'January 26 2024', '01:40pm'),
(103, '185705523', '806 W Airport Rd, Payson, AZ 85541, United States', 'ACTIVE', 'Package Registered. ', 'January 27 2024', '09:12am'),
(104, '961829289', '1 World Way, Los Angeles, CA 90045, United States', 'ACTIVE', 'Package registered. ', 'January 28 2024', '09:14am'),
(105, '565313574', '100 CWA Dr, Mosinee, WI 54455, United States', 'ACTIVE', 'PACKAGE SUCCESSFULLY REGISTERED. ', 'January 29 2024', '12:50pm'),
(106, '589160289', '1 World Way, Los Angeles, CA 90045, United States', 'ACTIVE', 'PACKAGE SUCCESSFULLY REGISTERED. ', 'January 30, 2024', '09:20am'),
(107, '826601488', '11300 S Airport Dr, Columbia, MO 65201, United Sta', 'ACTIVE', 'PACKAGE SUCCESSFULLY REGISTERED. ', 'January,31 2024', '09:00am'),
(108, '710878318', 'Perth Airport (PER), 32 Boud Ave, Perth Airport WA', 'ACTIVE', 'PACKAGE SUCCESSFULLY REGISTERED ', 'February 01 2024', '09:09pm'),
(109, '261415239', 'Aeropuerto Internacional de Los Ángeles (LAX), 1 W', 'ACTIVE', 'PACKAGE SUCCESSFULLY REGISTERED. ', 'February 2, 2024', '09:10am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'marcelo', 'Selehbo00260', 'info@emexlog.com', '2023-05-01 02:02:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment_process`
--
ALTER TABLE `shipment_process`
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
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6534;

--
-- AUTO_INCREMENT for table `shipment_process`
--
ALTER TABLE `shipment_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
