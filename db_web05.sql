-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 06:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web05`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutpages`
--

CREATE TABLE `aboutpages` (
  `IdPage` int(11) NOT NULL,
  `AboutName` varchar(30) NOT NULL,
  `Text1` text NOT NULL,
  `Text2` text NOT NULL,
  `Text3` text NOT NULL,
  `Text4` text NOT NULL,
  `Img` varchar(30) NOT NULL,
  `CreatedAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutpages`
--

INSERT INTO `aboutpages` (`IdPage`, `AboutName`, `Text1`, `Text2`, `Text3`, `Text4`, `Img`, `CreatedAt`) VALUES
(1, 'More About Us!', 'Safe, Reliable And Express Logistic & Transport Solutions That Saves Your Time!', 'Logisti Group is a representative logistics operator providing full range of service in the sphere of customs clearance and transport worldwide for any type of cargo.', 'We pride ourselves on providing the best transport and shipping services available allover the world. Our skilled personnel, utilising the latest communications, tracking and processing software, combined with decades of experience! Through integrated supply chain solutions, Logisti drives sustainable competitive advantages to some of Australia\'s largest companies.', '', '3.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `branchs`
--

CREATE TABLE `branchs` (
  `IdBranch` int(11) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Address` text NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Hours` varchar(20) NOT NULL,
  `UpdatedAt` date NOT NULL,
  `UpdatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branchs`
--

INSERT INTO `branchs` (`IdBranch`, `Branch`, `Phone`, `Mail`, `Address`, `Location`, `Hours`, `UpdatedAt`, `UpdatedBy`) VALUES
(1, 'London Office', '002 010123456789', 'Logisti@7oroof.com', '2307 Beverley Rd Brooklyn, NY', '', 'Mon-Fri: 8am – 7pm', '0000-00-00', 0),
(2, 'Berlin Office', '002 010123456789', 'Logisti@7oroof.com', '2307 Beverley Rd Brooklyn, NY', '', 'Mon-Fri: 8am – 7pm', '0000-00-00', 0),
(3, 'Manchester Office', '002 010123456789', 'Logisti@7oroof.com', '2307 Beverley Rd Brooklyn, NY', '', 'Mon-Fri: 8am – 7pm', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `IdClient` int(11) NOT NULL,
  `ClienName` varchar(30) NOT NULL,
  `Img` varchar(30) NOT NULL,
  `CreatedAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`IdClient`, `ClienName`, `Img`, `CreatedAt`) VALUES
(1, 'A', '1.jpg', '0000-00-00'),
(2, 'B', '2.jpg', '0000-00-00'),
(3, 'C', '3.jpg', '0000-00-00'),
(4, 'D', '4.jpg', '0000-00-00'),
(5, 'E', '5.jpg', '0000-00-00'),
(6, 'F', '6.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `IdGallery` int(11) NOT NULL,
  `Img` varchar(30) NOT NULL,
  `CreatedAt` date NOT NULL,
  `CreatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`IdGallery`, `Img`, `CreatedAt`, `CreatedBy`) VALUES
(1, '1.jpg', '0000-00-00', 0),
(2, '2.jpg', '0000-00-00', 0),
(3, '3.jpg', '0000-00-00', 0),
(4, '4.jpg', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `IdMenu` int(11) NOT NULL,
  `MenuName` varchar(30) NOT NULL,
  `ParentId` int(11) NOT NULL,
  `CreatedAt` date NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`IdMenu`, `MenuName`, `ParentId`, `CreatedAt`, `Status`) VALUES
(1, 'Home', 0, '0000-00-00', 0),
(2, 'Company', 0, '0000-00-00', 0),
(3, 'Services', 0, '0000-00-00', 0),
(4, 'Project', 0, '0000-00-00', 0),
(5, 'Contact Us', 0, '0000-00-00', 0),
(6, 'About Us', 2, '0000-00-00', 0),
(7, 'Gallery', 2, '0000-00-00', 0),
(8, 'Company Profile', 2, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `IdProject` int(11) NOT NULL,
  `ProjectTitle` varchar(30) NOT NULL,
  `Content` text NOT NULL,
  `Img` varchar(30) NOT NULL,
  `Slug` varchar(30) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `UpdatedAt` date NOT NULL,
  `UpdatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`IdProject`, `ProjectTitle`, `Content`, `Img`, `Slug`, `Status`, `UpdatedAt`, `UpdatedBy`) VALUES
(1, 'Lane Pairing Analysis', 'We understand that data is the greatest asset when it comes to analyzing and optimizing your supply chain performance.', '1.jpg', 'lane-pairing-analysis', 1, '0000-00-00', 0),
(2, 'Warehouse Hand Inventory', 'We understand that data is the greatest asset when it comes to analyzing and optimizing your supply chain performance.', '2.jpg', 'warehouse-hand-inventory', 1, '0000-00-00', 0),
(3, 'Minimize Cost Manufacturing', 'Cost savings is crucial, innovative technology minimizes your overall spend by utilizing an extensive.', '3.jpg', 'minimize-cost-manufacturing', 1, '0000-00-00', 0),
(4, 'Regulatory Compliance', 'We understand that data is the greatest asset when it comes to analyzing and optimizing your supply chain performance.', '4.jpg', 'regulatory-compliance', 1, '0000-00-00', 0),
(5, 'Documents dan Electronic Data', 'We understand that data is the greatest asset when it comes to analyzing and optimizing your supply chain performance.', '5.jpg', 'documents-dan-electronic-data', 1, '0000-00-00', 0),
(6, 'Role of the Importer', 'Cost savings is crucial, innovative technology minimizes your overall spend by utilizing an extensive.', '6.jpg', 'role-of-the-importer', 1, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reasons`
--

CREATE TABLE `reasons` (
  `IdReason` int(11) NOT NULL,
  `Reason` varchar(50) NOT NULL,
  `Content` text NOT NULL,
  `Icon` varchar(30) NOT NULL,
  `CreatedAt` date NOT NULL,
  `UpdatedAt` date NOT NULL,
  `UpdatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reasons`
--

INSERT INTO `reasons` (`IdReason`, `Reason`, `Content`, `Icon`, `CreatedAt`, `UpdatedAt`, `UpdatedBy`) VALUES
(1, 'Transparent Pricing', 'The world of international supply chains involves a myriad of unknown risks\r\n                  and challenging regulations.', 'icon-credit-cards', '0000-00-00', '0000-00-00', 0),
(2, 'Real-Time Tracking', 'We ensure our customers’ supply chains are fully compliant by our\r\n                  comprehensive practices and programs.', 'icon-search-worldwide', '0000-00-00', '0000-00-00', 0),
(3, 'Warehousing', '<p>Depending on your product, needs and requirements, we provide professional warehouse activities.</p>\r\n', 'icon-boxes', '0000-00-00', '2021-06-13', 0),
(4, 'Security For Cargo', 'Our facilities meet high security requirements and are certified to the\r\n                  highest local standards.', 'icon-balance', '0000-00-00', '0000-00-00', 0),
(5, 'Easy Payment Methods', 'You can make use the easy convenient payment options, listed below, that are available in your country.', 'icon-target', '0000-00-00', '0000-00-00', 0),
(6, '24/7 Hours Support', 'We enhance our logistics operations by relieving you of the worries associated\r\n                  with freight forwarding.', 'icon-telephone-1', '0000-00-00', '0000-00-00', 0),
(7, 'Fast & Efficient Delivery', 'We enhance our logistics operations by relieving you of the worries associated\r\n                  with freight forwarding.', 'icon-delivery-delay', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `servicepages`
--

CREATE TABLE `servicepages` (
  `IdPage` int(11) NOT NULL,
  `PageName` varchar(100) NOT NULL,
  `Text1` text NOT NULL,
  `Text2` text NOT NULL,
  `Text3` text NOT NULL,
  `Text4` text NOT NULL,
  `UpdatedAt` date NOT NULL,
  `UpdatedBy` int(11) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicepages`
--

INSERT INTO `servicepages` (`IdPage`, `PageName`, `Text1`, `Text2`, `Text3`, `Text4`, `UpdatedAt`, `UpdatedBy`, `Status`) VALUES
(1, 'Services We Offer', 'We Manage Lead Logistics For World’s Multinational Companies.', 'Our global logistics expertise, advanced supply chain technology & customized logistics solutions will help you analyze, develop and implement successful supply chain management strategies.', '', '', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `IdService` int(11) NOT NULL,
  `ServiceName` varchar(20) NOT NULL,
  `Content` text NOT NULL,
  `Img` varchar(20) NOT NULL,
  `Slug` varchar(30) NOT NULL,
  `Icon` varchar(20) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `UpdatedAt` date NOT NULL,
  `UpdatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`IdService`, `ServiceName`, `Content`, `Img`, `Slug`, `Icon`, `Status`, `UpdatedAt`, `UpdatedBy`) VALUES
(1, 'Warehousing', 'Our airfreight staff attaches great importance to customizing the booking process for our customers. That’s why we strive to find the air freight solution that best suits your needs. We’ll ask you when the freight is available, what the required delivery date is, and if there’s potential to save on time or cost. Your answers to these and other questions help us decide if you should book the air freight as direct. We\'ll also see if our sea-air service is a better solution for\r\n\r\nWe have more than twenty years of experience. During that time, we’ve become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world. Ongoing negotiations ensure that we always have the cargo space we need and the ability to offer you competitive rates - even during the high season.\r\n\r\nWhere possible, we’ll erect and dismantle Unit Load Devices (ULDs), reducing significantly the risk of damage to your shipment and saving you time and expense. We can do this because many of our freight stations have their own ground transportation at or around the airport.', '2.jpg', 'warehousing', 'icon-elevator', 1, '0000-00-00', 0),
(2, 'Air Freight', 'Our airfreight staff attaches great importance to customizing the booking process for our customers. That’s why we strive to find the air freight solution that best suits your needs. We’ll ask you when the freight is available, what the required delivery date is, and if there’s potential to save on time or cost. Your answers to these and other questions help us decide if you should book the air freight as direct. We\'ll also see if our sea-air service is a better solution for\r\n\r\nWe have more than twenty years of experience. During that time, we’ve become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world. Ongoing negotiations ensure that we always have the cargo space we need and the ability to offer you competitive rates - even during the high season.\r\n\r\nWhere possible, we’ll erect and dismantle Unit Load Devices (ULDs), reducing significantly the risk of damage to your shipment and saving you time and expense. We can do this because many of our freight stations have their own ground transportation at or around the airport.', '3.jpg', 'air-freight', 'icon-airplane', 1, '0000-00-00', 0),
(3, 'Ocean Freight', 'Our airfreight staff attaches great importance to customizing the booking process for our customers. That’s why we strive to find the air freight solution that best suits your needs. We’ll ask you when the freight is available, what the required delivery date is, and if there’s potential to save on time or cost. Your answers to these and other questions help us decide if you should book the air freight as direct. We\'ll also see if our sea-air service is a better solution for\r\n\r\nWe have more than twenty years of experience. During that time, we’ve become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world. Ongoing negotiations ensure that we always have the cargo space we need and the ability to offer you competitive rates - even during the high season.\r\n\r\nWhere possible, we’ll erect and dismantle Unit Load Devices (ULDs), reducing significantly the risk of damage to your shipment and saving you time and expense. We can do this because many of our freight stations have their own ground transportation at or around the airport.', '5.jpg', 'ocean-freight', 'icon-ship', 1, '0000-00-00', 0),
(4, 'Road Freight', 'Our airfreight staff attaches great importance to customizing the booking process for our customers. That’s why we strive to find the air freight solution that best suits your needs. We’ll ask you when the freight is available, what the required delivery date is, and if there’s potential to save on time or cost. Your answers to these and other questions help us decide if you should book the air freight as direct. We\'ll also see if our sea-air service is a better solution for\r\n\r\nWe have more than twenty years of experience. During that time, we’ve become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world. Ongoing negotiations ensure that we always have the cargo space we need and the ability to offer you competitive rates - even during the high season.\r\n\r\nWhere possible, we’ll erect and dismantle Unit Load Devices (ULDs), reducing significantly the risk of damage to your shipment and saving you time and expense. We can do this because many of our freight stations have their own ground transportation at or around the airport.', '7.jpg', 'road-freight', 'icon-truck', 1, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `IdSlide` int(11) NOT NULL,
  `Content` varchar(30) NOT NULL,
  `Img` varchar(30) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`IdSlide`, `Content`, `Img`, `Status`) VALUES
(1, 'slide1', 'slide1.jpg', 0),
(2, 'slide2', 'slide2.jpg', 0),
(3, 'slide3', 'n-a1.jpg', 0),
(4, 'slide4', 'slide4.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `IdSosmed` int(11) NOT NULL,
  `Youtube` varchar(50) NOT NULL,
  `Instagram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`IdSosmed`, `Youtube`, `Instagram`) VALUES
(1, 'https://www.youtube.com/', 'https://www.instagram.com/');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `IdTestimonial` int(11) NOT NULL,
  `CustomerName` varchar(20) NOT NULL,
  `Company` varchar(20) NOT NULL,
  `Review` text NOT NULL,
  `UpdatedAt` date NOT NULL,
  `UpdatedBy` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`IdTestimonial`, `CustomerName`, `Company`, `Review`, `UpdatedAt`, `UpdatedBy`) VALUES
(1, 'Sami Wade', 'WhiteMov', 'Logisti team is the best of the best, and expertly trained team members who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global environment.', '0000-00-00', 0),
(2, 'John Peter', 'Mov Inc', 'Logisti team is the best of the best, and expertly trained team members who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global environment.', '0000-00-00', 0),
(3, 'Martin Hope', 'ProMov', 'Logisti team is the best of the best, and expertly trained team members who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver innovative and dynamic solutions to our customers to fit the needs of a rapidly c', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Nip` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `NickName` varchar(15) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CreatedAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Nip`, `UserName`, `NickName`, `Password`, `Email`, `CreatedAt`) VALUES
(123, 'admin', 'admin', '$2y$10$dNiVR2BBf7GYx9tifrj6POnMGKGyKFb81WPh0IrtUSoI.NLh/HR6a', 'admin@admin.com', '2021-06-13'),
(1234, 'user', 'user', '$2y$10$b6syPcSMeUOVFQVL9EgJWOAmCYu0CvWj0bgJbrMv5AId3qBAdicHe', 'admin@admin.com', '2021-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `IdVisiMisi` int(11) NOT NULL,
  `Visi` text NOT NULL,
  `Misi` text NOT NULL,
  `UpdatedAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`IdVisiMisi`, `Visi`, `Misi`, `UpdatedAt`) VALUES
(1, '<p>The best possible service in the sphere of optimized route of cargo &amp; transportation wordwide.</p>\r\n', '<p>Utilising latest communications, tracking processing software, and decades of experience.</p>\r\n', '2021-06-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutpages`
--
ALTER TABLE `aboutpages`
  ADD PRIMARY KEY (`IdPage`);

--
-- Indexes for table `branchs`
--
ALTER TABLE `branchs`
  ADD PRIMARY KEY (`IdBranch`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`IdClient`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`IdGallery`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`IdMenu`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`IdProject`);

--
-- Indexes for table `reasons`
--
ALTER TABLE `reasons`
  ADD PRIMARY KEY (`IdReason`);

--
-- Indexes for table `servicepages`
--
ALTER TABLE `servicepages`
  ADD PRIMARY KEY (`IdPage`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`IdService`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`IdSlide`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`IdSosmed`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`IdTestimonial`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Nip`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`IdVisiMisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutpages`
--
ALTER TABLE `aboutpages`
  MODIFY `IdPage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branchs`
--
ALTER TABLE `branchs`
  MODIFY `IdBranch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `IdClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `IdGallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `IdMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `IdProject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reasons`
--
ALTER TABLE `reasons`
  MODIFY `IdReason` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `servicepages`
--
ALTER TABLE `servicepages`
  MODIFY `IdPage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `IdService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `IdSlide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `IdSosmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `IdTestimonial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `IdVisiMisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
