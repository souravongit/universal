-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2013 at 10:27 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `universal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `login_type` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `email_id`, `login_type`, `last_login`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'photo_upload', ''),
(2, 'admin_notice', 'admin', 'admin_notice@gmail.com', 'notice_upload', ''),
(3, 'admin_product', 'admin', 'admin_notice@gmail.com', 'product_manage', '');

-- --------------------------------------------------------

--
-- Table structure for table `header_photo_upload`
--

CREATE TABLE IF NOT EXISTS `header_photo_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `details` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `header_photo_upload`
--


-- --------------------------------------------------------

--
-- Table structure for table `manage_product`
--

CREATE TABLE IF NOT EXISTS `manage_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_details` text NOT NULL,
  `product_type` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `product_title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `manage_product`
--

INSERT INTO `manage_product` (`id`, `product_name`, `product_details`, `product_type`, `date`, `product_title`) VALUES
(1, '1364743783ace cutout .jpg', '<p style="text-align: left;"><em><strong>Auto Climate Iechnology </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>AUIO Humid UOHUOI </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>On/Off Timer With Advanced Start-Up </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Powerful Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Kaimin Cool Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Asymmetric Louver Movement </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Filter Clean Indicator </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Koukin Filter </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Defrostinq Sensor </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Suoercool Function </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Auto Fan Speed </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Selectable Fan Speeds </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Digilock</strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>My Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Auto Power Save Mode Auto Restart </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>4-Way Air Swing</strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Dry Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Lower Pull Down Time </strong></em><br /><em><strong></strong></em></p>\r\n<p style="text-align: left;"><em><strong>Low Derating </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Silent Cooling </strong></em><br /><em><strong> </strong></em></p>\r\n<p style="text-align: left;"><em><strong>Preooated Aluminium Fins </strong></em><br /><em><strong></strong></em></p>\r\n<p style="text-align: left;"><em><strong>Wireless LCD Remote </strong></em></p>', 'universal_sales', '2013-04-27', 'ACE CUTOUT'),
(2, '1364744053ace followme.JPG', '<p><em><strong>Auto Climate Technology </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Humid Control </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>On/Off Timer With Advanced Start-Up </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Powerful Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Kaimin </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Asymmetric Louver Movement </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Auto Restart </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Filter Clean Indicator </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Koukin Filter </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Defrosting Sensor </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Superoool Function </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Auto Fan Speed </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Selectable Fan Speeds </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Digilock </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>My Mode </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Dry Mode </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Auto Power Save Mode </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Lower Pull Down Time </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Low Derating </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Silent Cooling </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>4-Way Air Swing </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Preooated Aluminium Fins </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Wireless LCD Remote </strong></em></p>', 'universal_sales', '2013-04-27', 'ACE FOLLOWME'),
(3, '1364745005i clean.jpg', '<p><em><strong>Auto Clean Function </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Clean Indicator </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Stainless Steel Plated Filter </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Auto Humid Control </strong></em><em><strong></strong></em></p>\r\n<p><em><strong>Auto Climate Technology </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>On/Off Timer With Advanced Start-Up </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Powerful Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Kaimin </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>4-Way Air Swing </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Supercool Function </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Fan Speed </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Selectable Fan Speeds </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Digilook </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>My Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Power Save Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Restart </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Defrosting Sensor </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Lower Pull Down Time </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Low Derating </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Dry Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Silent Cooling </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Precoated Aluminium Fins </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Wireless LCD Remote </strong></em></p>', 'universal_sales', '2013-04-27', 'I Clean'),
(4, '1364745054kampa.jpg', '<p><em><strong>On/Off Timer With Advanced Start-Up </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Fan Speed </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Filter Clean Indicator </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Koukin Filter </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Defrosting Sensor </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Cool Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Low Derating </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Lower Pull Down Time </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Dry Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Silent Cooling </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Power Save Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Selectable Fan Speeds </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Restart </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Precoated Aluminium Fins </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Wireless LCD Remote </strong></em></p>', 'universal_sales', '2013-04-27', 'Kampa'),
(5, '1364745132kaze.jpg', '<p><em><strong>Auto Climate Technology </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Humid Control </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>On/Off Timer With Advanced Start-Up </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Powerful Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Kaimin </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Cooi Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Asymmetric Louver Movement </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Filter Clean Indicator </strong></em><em><strong></strong></em></p>\r\n<p><em><strong>Koukin Filter </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Defrosting Sensor </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Superoool Function </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Fan Speed </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Selectable Fan Speeds </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Digiloc </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Power Save Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Restart </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>4-Way Air Swing </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Dry Mode </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Lower Pull Down Time </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Low Derating </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Silent Cooling </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Preooated Aluminium Fins </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Wireless LCD Remote </strong></em></p>', 'universal_sales', '2013-04-27', 'KAZE PLUS'),
(6, '1364745171star.jpg', '<p><strong><em>Auto Climate Technology </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Auto l-lumid Control </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>On/Off Timer With Advanced Start-Up </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Powerful Mode </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Kaimin </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Cool Mode </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Asymmetric Louver Movement </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Filter Clean Indicator </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Koukin Filter </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Defrosting Sensor </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Supercool Function </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Auto Fan Speed </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Selectable Fan Speeds </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Digilock </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>My Mode </em></strong><strong><em></em></strong></p>\r\n<p><strong><em>Auto Power Save Mode </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Auto Restart </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>4-Way Air Swing </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Dry Mode </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Lower Pull Down Time </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Low Derating </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Silent Cooling </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Preooated Aluminium Fins </em></strong><br /><strong><em> </em></strong></p>\r\n<p><strong><em>Wireless LCD Remote </em></strong></p>', 'universal_sales', '2013-04-27', 'STAR'),
(7, '1364745224SUMMERqc..jpg', '<p><em><strong>Twin Turbo Technology </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Climate Technology </strong></em><em><strong>&nbsp; </strong></em></p>\r\n<p><em><strong>On/Off Timer With Advanced Start-Up </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Powerful Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Kaimin </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Koukin Filter </strong></em><em><strong>&nbsp; </strong></em></p>\r\n<p><em><strong>Supercool Function </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Fan Speed </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Filter Clean Indicator </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Digilock </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>My Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Power Save Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Restart </strong></em><br /><em><strong></strong></em></p>\r\n<p><em><strong>Alarm Function </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Dry Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Power Index </strong></em><br /><em><strong>&nbsp;</strong></em></p>\r\n<p><em><strong>Extra Heat Exchanger </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Selectable Fan Speeds </strong></em><br /><em><strong>&nbsp;</strong></em></p>\r\n<p><em><strong>Uniform Air Distribution </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Cool Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Lower Pull Down Time </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Low Derating </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Silent Cooling </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Preooated Aluminium Fins </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Wireless LCD Remote </strong></em></p>', 'universal_sales', '2013-04-27', 'SUMMER QC'),
(8, '1364745264summerTM..jpg', '<p><em><strong>Twin Motor Technology </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Twin Turbo Technology </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Climate Technology </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>On/Off Timer With Advanced Start-Up </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Powerful Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Kaimin </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Koukin Filter </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Supercool Function </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Fan Speed </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Filter Clean Indicator </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Digilock </strong></em><em><strong>&nbsp; </strong></em></p>\r\n<p><em><strong>My Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Power Save Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Auto Restart </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Alarm Function </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Dry Mode Power Index </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Extra Heat Exchanger </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Selectable Fan Speeds </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Uniform Air Distribution </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Cool Mode </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Lower Pull Down Time </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Low Derating Silent Cooling </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Preooated Aluminium Fins </strong></em><br /><em><strong> </strong></em></p>\r\n<p><em><strong>Wireless LCD Remote </strong></em></p>', 'universal_sales', '2013-04-27', 'SUMMER TM'),
(12, '136579118305.jpg', '<p><strong><span style="text-decoration: underline;">Salient Features:</span></strong></p>\r\n<ul>\r\n<li>Machines are equipped with totally independent working circuits, leading to reduced starting currents, back-up D.G. set and increased reliability.</li>\r\n<li>Each circuit has an independent compressor, evaporator and condenser resulting in unmatched reliability.</li>\r\n<li>Star Delta starter for lower starting currents.</li>\r\n<li>Direct Driven Compressors at low speed of 2900 rpm, thereby lower maintenance costs.</li>\r\n<li>Direct Expansion Evaporator for less refrigerant quantity; good oil return to compressor &amp; better efficiency at part loads as compared to Flooded Evaporators.</li>\r\n<li>Evaporator can operate even a very low water pressure drops</li>\r\n<li>The Chillers are equipped with economizer which increases cooling capacity and improves the Energy Efficiency Ratio (EER), thereby resulting in Energy Savings.</li>\r\n<li>The machines are equipped with Electronic Expansion Valve for increased overall efficiencies.</li>\r\n<li>The Controller is equipped with latest generation microprocessor which can be used with any building management system; ergonomic &amp; user friendly display having:\r\n<ul>\r\n<li>Open Protocol for communication.</li>\r\n<li>Fault Management.</li>\r\n<li>Two Set Points.</li>\r\n<li>Compressor Run hour Balancing.</li>\r\n<li>Time programming.</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>Online Monitoring.</p>', 'universal_sales_projects', '2013-04-27', 'AIR COOLED SCREW CHILLER '),
(13, '136579109409.jpg', '<p><strong>Energy Management With CRISTOPIA&rsquo;s STL</strong><br /><strong>&bull; Reduce</strong> <br />&ndash; chiller size by 30 to 70%<br /> &ndash; use of refrigerant by 50 to 80%<br /> &ndash; heat rejection plant<br /> &ndash; electrical supply &amp; distribution<br /> &ndash; plant room space<br /> &ndash; maintenance<br /> &ndash; running cost<br /><strong>&bull; Increase</strong> <br /> &ndash; cooling capacity from existing plant<br /> &ndash; electrical &amp; plant utilisation<br /> &ndash; equipment life<br /> &ndash; efficiency and reliability<br /> &ndash; system control<br /><strong>&bull; Additional benefits</strong><br /> &ndash; avail yourself to a back-up system<br /> &ndash; shift cooling load from peak hours to off-peak period<br /> &ndash; energy savings</p>', 'universal_sales_projects', '2013-04-27', 'THERMAL ENERGY STORAGE SYSTEM'),
(14, '136579060017.jpg', '', 'universal_sales_projects', '2013-04-12', 'THERMAL ENERGY STORAGE SYSTEM'),
(16, '136663463017.jpg', '<p><em><strong>Comfortable Airflow </strong></em></p>\r\n<p><em><strong>Comfort Control </strong></em></p>\r\n<p><em><strong>Lifestyle Convenience </strong></em></p>\r\n<p><em><strong>Cleanliness </strong></em></p>\r\n<p><em><strong>Timers </strong></em></p>\r\n<p><em><strong>Auto Restart after power failure </strong></em></p>\r\n<p><em><strong>Self diagnosis with digital display </strong></em></p>\r\n<p><em><strong>Anti-corrosion Treatment</strong> </em></p>', 'universal_energy_solutions', '2013-04-27', 'Wall Mounted Type (Cooling & Heat Pump)'),
(17, '136663456404.jpg', '<p><em><strong>Auto Swing </strong></em></p>\r\n<p><em><strong>Swing pattern selection </strong></em></p>\r\n<p><em><strong>Switchable fan speed </strong></em></p>\r\n<p><em><strong>Program &lsquo;Dry&rsquo; High ceiling application </strong></em></p>\r\n<p><em><strong>Two selectable thermo-sensors </strong></em></p>\r\n<p><em><strong>Year-round cooling applicable </strong></em></p>\r\n<p><em><strong>Time Selector</strong></em></p>', 'universal_energy_solutions', '2013-04-27', 'Ceiling Suspended Cassette Type '),
(18, '136706864503 (27).jpg', '<p><span style="font-family: Arial,Helvetica; font-size: small;"><span style="color: #000000;"><strong>Energy Savings</strong></span></span></p>\r\n<p><span style="font-family: Arial,Helvetica; font-size: small;"><span style="color: #000000;"><strong><br /></strong></span>The Daikin McQuay Magnitude&reg;&nbsp;chiller is the most energy efficient chiller in its size range with part load performance as low as .311 kW/ton IPLV.</span></p>\r\n<p><span style="font-family: Arial,Helvetica; font-size: small;">And it''s up to 40% more energy efficient than standard centrifugal chillers, <strong>saving more than $2 million</strong> over the life of the unit.</span></p>\r\n<p><span style="font-family: Arial,Helvetica; font-size: small;"><span style="font-family: Arial,Helvetica; font-size: small;"><span style="color: #000000;"><strong>Quiet<br /></strong></span>The Daikin McQuay Magnitudechiller is the quietest chiller in its size range with sound pressure ratings as low as 76 dBA per AHRI 575. It''s ideal for sound sensitive environments such as schools, performance halls, museums, condominiums and libraries.</span></span></p>\r\n<p><span style="font-family: Arial,Helvetica; font-size: small;"><span style="font-family: Arial,Helvetica; font-size: small;"><strong><span style="color: #000000; font-family: Arial,Helvetica; font-size: small;">Ideal for Retrofit and Replacement</span></strong></span></span></p>\r\n<p><span style="font-family: Arial,Helvetica; font-size: small;"><span style="font-family: Arial,Helvetica; font-size: small;"><strong><span style="color: #000000; font-family: Arial,Helvetica; font-size: small;"><br /></span></strong>The compact size of the Magnitude&nbsp;chiller makes it ideal for retrofit and replacement installations. Some models can even fit through a standard 36-inch door without dissassembling the shells.</span></span></p>', 'universal_energy_solutions', '2013-04-27', 'McQuay Chillers ( DAIKIN)'),
(19, '136706880303 (28).jpg', '<div class="txtBox">\r\n<h3>Product features</h3>\r\n<ul>\r\n<li>Energy saving ventilation by recovery of indoor unit heat/cold</li>\r\n<li>Ideal solution for shops, restaurants or offices requiring maximum floor space for furniture, decorations and fittings</li>\r\n<li>Free cooling when outdoor temperature is below indoor temperature (eg. during night time)</li>\r\n<li>Low energy consumption thanks to DC inverter fans</li>\r\n<li>Prevent energy losses from over-ventilation while maintaining indoor air quality with CO2 sensor (optional)</li>\r\n<li>Can be used as stand alone unit or integrated in the VRV system</li>\r\n<li>Wide range of units: air flow rate from 150 up to 2,000 m&sup3;/h</li>\r\n<li>High efficiency filters available in F6 ,F7, F8 grades</li>\r\n<li>Specially developed heat exchange element with High Efficiency Paper (HEP)</li>\r\n<li>No drain piping needed</li>\r\n<li>Can operate in over- and under pressure</li>\r\n</ul>\r\n</div>', 'universal_energy_solutions', '2013-04-27', 'VAM'),
(20, '1367235817Untitled.jpg', '<h2><span style="font-family: arial black,avant garde;">&nbsp;</span><em><strong><span style="text-decoration: underline;">BRIEF DESCRIPTION</span></strong></em></h2>\r\n<p><span style="font-family: arial black,avant garde;">&nbsp; Centralized Chilled Water/ brine System</span></p>\r\n<p><span style="font-family: arial black,avant garde;">&nbsp; Out door unit with required Indoor Units</span></p>\r\n<p><span style="font-family: arial black,avant garde;">&nbsp; Cooling through Chilled Water/ brine</span></p>\r\n<p><span style="font-family: arial black,avant garde;">&nbsp; Copper&nbsp; tubes -outdoor</span></p>\r\n<p><span style="font-family: arial black,avant garde;">&nbsp; Non Metallic Pipes &ndash; Indoor</span></p>\r\n<p><span style="font-family: arial black,avant garde;">&nbsp; Equipped with thermal energy storage</span></p>\r\n<div><span style="font-family: arial black,avant garde;">&nbsp; Hot water generation</span></div>\r\n<div><span style="font-family: arial black,avant garde;"><br /></span></div>\r\n<h2><span style="font-family: arial black,avant garde;"><span style="text-decoration: underline;">KRISCOOLmini</span><span style="text-decoration: underline;"> System Benefits</span></span></h2>\r\n<pre><span style="font-family: arial black,avant garde;">Non Stop Cooling.</span><span style="font-family: arial black,avant garde;"><br />Shifting of Electrical loads to non peak hours.</span><span style="font-family: arial black,avant garde;"><br />Energy efficient.</span><span style="font-family: arial black,avant garde;"><br />Reduction in Electrical installation.<br /></span><span style="font-family: arial black,avant garde;">Centralized FREE HOT Water Generation.</span><span style="font-family: arial black,avant garde;"><br />Innovative Space Design.</span></pre>\r\n<p><span style="font-family: arial black,avant garde;"><span style="text-decoration: underline;"><br /></span></span></p>', 'universal_sales_projects', '2013-04-29', 'Mini Chiller'),
(21, '1367237146VRV.jpg.gif', '<p>Total Air-Conditioning system with DAIKIN</p>', 'universal_energy_solutions', '2013-04-29', 'DAIKIN System');

-- --------------------------------------------------------

--
-- Table structure for table `news_upload`
--

CREATE TABLE IF NOT EXISTS `news_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) NOT NULL,
  `news_details` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news_upload`
--

INSERT INTO `news_upload` (`id`, `news_title`, `news_details`, `date`) VALUES
(1, 'NOTICE Board', 'Coming Soon', '2013-01-15'),
(2, 'Recruitment News', 'Comming Soon', '2013-01-15'),
(5, 'Message of the Day', 'The method to finish a weakness is to be detached from it.', '2013-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery_upload`
--

CREATE TABLE IF NOT EXISTS `photo_gallery_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `details` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `photo_gallery_upload`
--

INSERT INTO `photo_gallery_upload` (`id`, `photo_name`, `date`, `details`, `title`) VALUES
(68, '13647901391362126379Group Photo.jpg', '2013-04-01', 'universal group', 'universal group'),
(69, '1367924467125.jpg', '2013-05-07', 'Motivation Tour 2012', 'Manager of the Year ( Project Engineer)'),
(70, '1367924512124.jpg', '2013-05-07', 'Motivation Tour 2012', 'Performer of the Year VRV Sales'),
(71, '1367924603123.jpg', '2013-05-07', 'Motivation Tour 2012', 'Performer of the Year ( Ductable )'),
(72, '1367924681122.jpg', '2013-05-07', 'Motivation Tour 2012', 'Administrative Manager of the Year '),
(73, '1367924778121.jpg', '2013-05-07', 'Motivation Tour 2012', 'Engineer of the Yar ( Project)'),
(74, '1367924904119.jpg', '2013-05-07', 'Motivation Tour 2012', 'Highest Care Revenue Collecter of the Year'),
(75, '1367924975118.jpg', '2013-05-07', 'Motivation Tour 2012', 'Best Customer Relation'),
(89, '1367932540137.jpg', '2013-05-07', 'Motivation Tour 2012', 'Our Respected Directors'),
(77, '1367925402108.jpg', '2013-05-07', 'Motivation Tour 2012', 'AMC Support of the Year'),
(78, '1367925516112.jpg', '2013-05-07', 'Motivation Tour 2012', 'Supervisor of the Year ( Chiller Services)'),
(80, '1367926058146.jpg', '2013-05-07', 'Motivation Tour 2012', 'Our Sales Team'),
(81, '1367926768147.jpg', '2013-05-07', 'Motivation Tour 2012', 'Group Picture'),
(83, '1367927609Untitled-1.jpg', '2013-05-07', '1350 HP Daikin VRV', 'Diamond Prestige'),
(84, '1367927765DSC06095.JPG', '2013-05-07', '1300 TR Chiller ', 'Diamong Plaza'),
(85, '1367927979IMG_0391.jpg', '2013-05-07', 'VRV Sales', 'Award from DAIKIN at Delhi'),
(86, '1367928116DSC07111.JPG', '2013-05-07', 'DAIKIN VRV', 'Ongoing Work at Vedik Village'),
(87, '1367928401DSC06919.JPG', '2013-05-07', 'We have a dream', 'We have a dream');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
