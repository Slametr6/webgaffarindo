-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 05:11 PM
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
-- Database: `u1475655_website`
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
(1, 'More About Us!', 'Safe, Reliable And Express Logistic & Transport Solutions That Saves Your Time!', 'Simply your logistics', 'We are a team of logistics & transportation management professionals who you can  trust and really on to effectively manage your transportation service requirements. We provide our customers with cost effective transportation solutions. Our commitment to investment in state-of-the-art business intelligence, visibility and tracking technology and taking pride in being a total solutions service provider is what sets us apart from your typical transportation company', '', '3.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `bgpages`
--

CREATE TABLE `bgpages` (
  `IdBg` int(11) NOT NULL,
  `BgAbout` varchar(50) NOT NULL,
  `BgGallery` varchar(50) NOT NULL,
  `BgService` varchar(50) NOT NULL,
  `BgContact` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpages`
--

INSERT INTO `bgpages` (`IdBg`, `BgAbout`, `BgGallery`, `BgService`, `BgContact`) VALUES
(1, 'slide1.jpg', 'slide2.jpg', 'slide4.jpg', 'slide3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `branchs`
--

CREATE TABLE `branchs` (
  `IdBranch` int(11) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Phone2` varchar(20) NOT NULL,
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

INSERT INTO `branchs` (`IdBranch`, `Branch`, `Phone`, `Phone2`, `Mail`, `Address`, `Location`, `Hours`, `UpdatedAt`, `UpdatedBy`) VALUES
(1, 'Jakarta Office', '+62 21 82758384', '+62 21 8475372', 'pt.gsl@gaffarindo.com', 'Gapura Office Rukan, \nJl. Rose Garden 1 No.52 Jakasetia Bekasi <p>Jawa Barat - Indonesia 17248', '', 'Mon-Fri: 8am – 7pm', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `IdClient` int(11) NOT NULL,
  `ClientName` varchar(50) NOT NULL,
  `Img` varchar(30) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `CreatedAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`IdClient`, `ClientName`, `Img`, `Status`, `CreatedAt`) VALUES
(1, 'A', 'a.png', 0, '0000-00-00'),
(2, 'B', 'b.png', 0, '0000-00-00'),
(3, 'C', 'c.png', 0, '0000-00-00'),
(4, 'D', 'd.png', 0, '0000-00-00'),
(5, 'PT PUTRA PRATAMA GEMILANG', 'e.png', 0, '0000-00-00'),
(6, 'SHERA', 'f.png', 0, '0000-00-00'),
(9, 'PT ATU', 'pt-atu.png', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `IdGallery` int(11) NOT NULL,
  `Img` varchar(100) NOT NULL,
  `CreatedAt` date NOT NULL,
  `CreatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`IdGallery`, `Img`, `CreatedAt`, `CreatedBy`) VALUES
(45, 'n-a.jpeg', '0000-00-00', 0),
(46, 'n-a1.jpeg', '0000-00-00', 0);

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
(4, 'Project', 0, '0000-00-00', 1),
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
(5, 'Documents Electronic Data', '<p>We understand that data is the greatest asset when it comes to analyzing and optimizing your supply chain performance.</p>\r\n', '5.jpg', 'documents-electronic-data', 1, '0000-00-00', 0),
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
(1, 'People', 'Our reputation was build on Our People\r\nour team is dedicated, highly motivated, highly professional\r\nand market aware, They are our strength and their skill and \r\nknowledge are taking key to delivering our customers', 'icon-credit-cards', '0000-00-00', '0000-00-00', 0),
(2, 'Knowledge', 'We know our business. We seek to understand our customers business. We seek to our experience to shape and refine our service offer.', 'icon-search-worldwide', '0000-00-00', '0000-00-00', 0),
(3, 'Customer-Focused', '<p>We seek to undertand our customers current needs so we can predict more accuately their future requirment</p>\r\n', 'icon-boxes', '0000-00-00', '2021-06-17', 0),
(4, 'Values', '<p>At the heart of our company is our value system and ethics. we always behave in a socially responsible manner with intergrity, honesty and loyalty</p>\r\n', 'icon-balance', '0000-00-00', '2021-06-15', 0),
(5, 'Reputation', 'Our repotutation has been bult over time, consistently eceeding customer epectations and demonstrating our responsiveness and reliability in all our business transactions', 'icon-target', '0000-00-00', '0000-00-00', 0);

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
(1, 'Who We Are?', '<h3>Simply Your Logistics</h3>\r\n', '<p>We are a team of logistics &amp; transportation management professionals who you can trust and rely on to effectively manage your transportation service requirements. We provide our customers with cost effective transportation solutions. Our commitment to investment in state of the art business intelligence, visibility and tracking technology and taking pride in being a total solution service provide is what sets us apart from your typical transportation company.</p>\r\n', '', '', '2021-06-17', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `IdService` int(11) NOT NULL,
  `ServiceName` varchar(50) NOT NULL,
  `Content` text NOT NULL,
  `Img` varchar(20) NOT NULL,
  `Slug` varchar(50) NOT NULL,
  `Icon` varchar(50) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `UpdatedAt` date NOT NULL,
  `UpdatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`IdService`, `ServiceName`, `Content`, `Img`, `Slug`, `Icon`, `Status`, `UpdatedAt`, `UpdatedBy`) VALUES
(2, 'FTL Cargo / Full Charter Truck by Land Transport', 'Our airfreight staff attaches great importance to customizing the booking process for our customers. That&rsquo;s why we strive to find the air freight solution that best suits your needs. We&rsquo;ll ask you when the freight is available, what the required delivery date is, and if there&rsquo;s potential to save on time or cost. Your answers to these and other questions help us decide if you should book the air freight as direct. We&#39;ll also see if our sea-air service is a better solution for We have more than twenty years of experience. During that time, we&rsquo;ve become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world. Ongoing negotiations ensure that we always have the cargo space we need and the ability to offer you competitive rates - even during the high season. Where possible, we&rsquo;ll erect and dismantle Unit Load Devices (ULDs), reducing significantly the risk of damage to your shipment and saving you time and expense. We can do this because many of our freight stations have their own ground transportation at or around the airport.\r\n', '10.jpg', 'ftl-cargo-full-charter-truck-by-land-transport', 'icon-boxes', 1, '0000-00-00', 0),
(4, 'LCL Cargo by Air & Sea Transport', 'Our airfreight staff attaches great importance to customizing the booking process for our customers. That&rsquo;s why we strive to find the air freight solution that best suits your needs. We&rsquo;ll ask you when the freight is available, what the required delivery date is, and if there&rsquo;s potential to save on time or cost. Your answers to these and other questions help us decide if you should book the air freight as direct. We&#39;ll also see if our sea-air service is a better solution for We have more than twenty years of experience. During that time, we&rsquo;ve become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world. Ongoing negotiations ensure that we always have the cargo space we need and the ability to offer you competitive rates - even during the high season. Where possible, we&rsquo;ll erect and dismantle Unit Load Devices (ULDs), reducing significantly the risk of damage to your shipment and saving you time and expense. We can do this because many of our freight stations have their own ground transportation at or around the airport.\r\n', '8.jpg', 'lcl-cargo-by-air-sea-transport', 'icon-package', 1, '0000-00-00', 0),
(7, 'FCL Cargo by Sea Transport', 'Our airfreight staff attaches great importance to customizing the booking process for our customers. That&rsquo;s why we strive to find the air freight solution that best suits your needs. We&rsquo;ll ask you when the freight is available, what the required delivery date is, and if there&rsquo;s potential to save on time or cost. Your answers to these and other questions help us decide if you should book the air freight as direct. We&#39;ll also see if our sea-air service is a better solution for We have more than twenty years of experience. During that time, we&rsquo;ve become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world. Ongoing negotiations ensure that we always have the cargo space we need and the ability to offer you competitive rates - even during the high season. Where possible, we&rsquo;ll erect and dismantle Unit Load Devices (ULDs), reducing significantly the risk of damage to your shipment and saving you time and expense. We can do this because many of our freight stations have their own ground transportation at or around the airport.\r\n', '5.jpg', 'fcl-cargo-by-sea-transport', 'icon-truck', 1, '0000-00-00', 0),
(8, 'Export & Import', 'Our airfreight staff attaches great importance to customizing the booking process for our customers. That&rsquo;s why we strive to find the air freight solution that best suits your needs. We&rsquo;ll ask you when the freight is available, what the required delivery date is, and if there&rsquo;s potential to save on time or cost. Your answers to these and other questions help us decide if you should book the air freight as direct. We&#39;ll also see if our sea-air service is a better solution for We have more than twenty years of experience. During that time, we&rsquo;ve become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world. Ongoing negotiations ensure that we always have the cargo space we need and the ability to offer you competitive rates - even during the high season. Where possible, we&rsquo;ll erect and dismantle Unit Load Devices (ULDs), reducing significantly the risk of damage to your shipment and saving you time and expense. We can do this because many of our freight stations have their own ground transportation at or around the airport.\r\n', '6.jpg', 'export-import', 'icon-truck-delay', 1, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `IdSlide` int(11) NOT NULL,
  `Content` varchar(30) NOT NULL,
  `Img` varchar(30) NOT NULL,
  `slide_title` varchar(50) NOT NULL,
  `slide_desc` varchar(100) NOT NULL,
  `link` varchar(50) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`IdSlide`, `Content`, `Img`, `slide_title`, `slide_desc`, `link`, `Status`) VALUES
(1, 'slide1', 'slide1.jpg', 'Safe & Reliable Cargo Solutions!', 'Providing flexibile, improved service levels, and accelerated                     delivery.', 'https://www.youtube.com/watch?v=nrJtHemSPW4', 1),
(2, 'slide2', 'slide2.jpg', 'Fast, Certified & Felxible Solutions.', 'Providing flexibile, improved service levels, and accelerated delivery.', 'https://www.youtube.com/watch?v=nrJtHemSPW4', 1),
(3, 'slide3', 'n-a1.jpg', 'Safe & Reliable Cargo Solutions!', 'Providing flexibile, improved service levels, and accelerated                     delivery.', 'https://www.youtube.com/watch?v=nrJtHemSPW4', 1),
(4, 'slide4', 'slide4.jpg', 'Fast, Certified & Felxible Solutions.', 'Providing flexibile, improved service levels, and accelerated delivery.', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `IdSosmed` int(11) NOT NULL,
  `Youtube` varchar(200) NOT NULL,
  `Instagram` varchar(200) NOT NULL,
  `Facebook` varchar(200) NOT NULL,
  `Whatsapp` varchar(20) NOT NULL,
  `Twitter` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`IdSosmed`, `Youtube`, `Instagram`, `Facebook`, `Whatsapp`, `Twitter`) VALUES
(1, 'https://www.youtube.com/', 'https://instagram.com/', 'https://www.facebook.com/', '', 'https://twitter.com/gaffarindo?s=08');

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
  `IdUser` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `NickName` varchar(15) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CreatedAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`IdUser`, `UserName`, `NickName`, `Password`, `Email`, `CreatedAt`) VALUES
(123, 'admin', 'admin', '$2y$10$dNiVR2BBf7GYx9tifrj6POnMGKGyKFb81WPh0IrtUSoI.NLh/HR6a', 'admin@admin.com', '2021-06-13'),
(1234, 'slamet', 'user', '$2y$10$OrbazV33rbPqgAx7m65yBex4aQvnv2AAaH075K.OzRAso3MyoS65C', 'admin@admin.com', '2021-06-13');

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
(1, '<p>Our aim is to act as an indispensable partner to our clients&nbsp; by helping them build and maixmize sustainable competitive advantages. we do this by helping them get their products to market quickly, efficiently, adn safely. In addition to our expertly crafted and reliably delivered logistics solutions, our clients can rest assured that every interaction will be driven by integrity and respect, the fundamental principles of our business.</p>\r\n', '<p>Our mission is to dliver positive, reliable experience to each and every one of our clients while offering exceptional value in the marketplace and setting the standard for professionalism in the logistic solutions we provide.In addition to operating our business profitably, we strive to operate it responsibly both for our clients and our employees, for whom our goal is to provide a safe and secure work environment.</p>\r\n', '2021-06-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutpages`
--
ALTER TABLE `aboutpages`
  ADD PRIMARY KEY (`IdPage`);

--
-- Indexes for table `bgpages`
--
ALTER TABLE `bgpages`
  ADD PRIMARY KEY (`IdBg`);

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
  ADD PRIMARY KEY (`IdUser`);

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
-- AUTO_INCREMENT for table `bgpages`
--
ALTER TABLE `bgpages`
  MODIFY `IdBg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branchs`
--
ALTER TABLE `branchs`
  MODIFY `IdBranch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `IdClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `IdGallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `IdService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
