-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 04:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wicars`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccountID` int(11) NOT NULL,
  `Firstname` varchar(10) NOT NULL,
  `Lastname` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccountID`, `Firstname`, `Lastname`, `email`, `pass`) VALUES
(2, 'Islam', 'Birouk', 'islam.birouk.2004@gmail.com', '12345AZER'),
(3, 'Fateh', 'BAHA', 'bh.fateh.777@gmail.com', '1234567'),
(4, 'walid', 'moussaoui', 'walid.moussaoui@email.com', 'azerty12'),
(5, 'rida', 'mokh', 'mokh.rida@gmail.com', 'AZERTY'),
(6, 'oussama', 'hadj', 'oussama@gmail.com', 'AQW12ZSX'),
(12, 'yassine ', 'krika', 'yassine@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `IDV` int(11) NOT NULL,
  `Nom et Prenom` varchar(255) NOT NULL,
  `Numero telephone` int(11) NOT NULL,
  `Marque` varchar(30) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  `Moteur` varchar(15) NOT NULL,
  `Carateristique` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`IDV`, `Nom et Prenom`, `Numero telephone`, `Marque`, `Nom`, `prix`, `Moteur`, `Carateristique`, `Description`, `img1`, `img2`, `img3`) VALUES
(33, 'Islam Birouk', 561436098, 'Ford', 'ford fiasta', 3000000, 'essence', '1.8 diesel 100 cheuvaut', '100,000km et rouge', 'ford_fiesta_facelift_091.jpg', 'ford_fiesta_facelift_093.jpg', 'ford_fiesta_facelift_098.jpg'),
(35, 'walid moussaoui', 555555555, 'peugeot', 'peugot 2008', 290000, 'essence', '1.6 essence 120ch', 'rouge 2022', 'peugeot_2008_review_50.jpg', 'peugeot_2008_review_52.jpg', 'peugeot_2008_review_54.jpg'),
(37, 'Rida Mokhtar', 666666666, 'Fiat', 'Fiat 500', 2380000, 'hybrid', '1.0 hybrid 86 ch ', '3 port blanc', 'fiat500_107.jpg', 'fiat500_101.jpg', 'fiat500_102.jpg'),
(38, 'Houssam Niboucha', 555555555, 'Kia', 'Kia Rio', 3500000, 'essence', '1.6 essence 120ch ', 'gris 5 port 2019 30000KM', 'rio.jpg', 'rio2.jpg', 'rio3.jpg'),
(40, 'oussama el hadj', 542686700, 'SUZUKI', 'SUZUKI SWIFT', 3500000, 'essence', '1.2 essence 86 ch ', 'neuf 0 km  2023 ROUGE', 'suzukiswift_02.jpg', 'suzukiswift_06.jpg', 'suzukiswift_10.jpg'),
(42, 'Akram Rida', 1111111111, 'peugeot', 'peugeot 308', 6000000, 'essence', '1.2 PureTech 110 ch / 81 kW', 'vert 5 port 2022 neuf 0KM', 'peugeot_308.jpg', 'peugeot_308_back.jpg', 'peugeot_308_054.jpg'),
(48, 'baha fateh', 2147483647, 'hyundai', 'hyundai grand i10', 2000000, 'essence', '1.2 essence 86 ch ', '60,000KM blue 2017', '2I10.jpg', '3I10.jpg', 'I10.jpg'),
(49, 'zaki menad', 222222222, 'DACIA', 'DACIA SANDERO', 4000000, 'essence', '1.4 80CH ', 'blue 2022 0KM', '489546-dacia-sandero-stepway-2021-l-entree-de-gamme-a-la-francaise.jpeg', 'sandero_2021_04.jpg', 'sandero_2021_35.jpg'),
(50, 'walid moussaoui', 699999999, 'FORD', 'FORD FIESTA', 2900000, 'diesel', '1.2 essence 86 ch ', '100,000km et bleu', 'ford-fiestaMCA-eu-ST_02_B479_Fiesta_Ext_Front_3_4_Dynamic_V5.0-16x9-2160x1215-gt3.jpg.renditions.extra-large.jpeg', 'peugeot_308_051.jpg', 'ford_fiesta_facelift_098.jpg'),
(51, 'yassine', 788909887, 'peugeot', 'peugot 2008', 12300000, 'essence', 'WHITE', 'GREAT', 'fiat500_101.jpg', '3I10.jpg', '3I10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `numM` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`numM`, `Nom`, `Email`, `Message`) VALUES
(8, 'islam', 'islam.birouk.2004@gmail.com', 'qsdqdqsdghe'),
(16, 'dfsghsf', 'sdgsdg@email.com', 'sdfsdfqq'),
(18, 'akram', 'volix.033@gmail.com', 'hsdfmoijsqmf'),
(19, 'mokhtar', 'mokh.rida@email.com', 'blablablmab'),
(28, 'fhfh', 'islam.birouk.2004@gmail.com', 'dwfhfghf'),
(29, 'fhfh', 'islam.birouk.2004@gmail.com', 'dwfhfghf'),
(30, 'fhfh', 'islam.birouk.2004@gmail.com', 'dwfhfghf'),
(31, 'walid', 'walid.moussaoui@email.com', 'ROH TKGRAW'),
(32, 'walid', 'walid.moussaoui@email.com', 'ROH TKGRAW'),
(33, 'walid', 'walid.moussaoui@email.com', 'ROH TKGRAW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountID`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`IDV`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`numM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `AccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `IDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `numM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
