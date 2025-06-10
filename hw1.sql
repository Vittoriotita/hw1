-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2025 at 07:27 PM
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
-- Database: `hw1`
--

-- --------------------------------------------------------

--
-- Table structure for table `airpods`
--

CREATE TABLE `airpods` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `prezzo` decimal(10,2) DEFAULT NULL,
  `immagine` varchar(255) DEFAULT NULL,
  `link_pagina` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airpods`
--

INSERT INTO `airpods` (`id`, `nome`, `prezzo`, `immagine`, `link_pagina`) VALUES
(1, 'Airpods 4', 149.00, 'https://www.apple.com/v/airpods/shared/compare/e/images/compare/compare_airpods_4__fy4e25bzx1u2_large.png', ''),
(2, 'Airpods 4 Noise Cancellation', 199.00, 'https://www.apple.com/v/airpods/shared/compare/e/images/compare/compare_airpods_4_noise_cancellation__fnt5kzpmite2_large.png', ''),
(3, 'Airpods Pro 2', 279.00, 'https://www.apple.com/v/airpods/shared/compare/e/images/compare/compare_airpods_pro_2__c3r137ebxwae_large.png', ''),
(4, 'Airpods Max', 579.00, 'https://www.apple.com/v/airpods/shared/compare/e/images/compare/compare_airpods_max__b14s2x6q07rm_large.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `carrello`
--

CREATE TABLE `carrello` (
  `id` int(11) NOT NULL,
  `prezzo_totale` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carrello`
--

INSERT INTO `carrello` (`id`, `prezzo_totale`) VALUES
(1, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `carrello_articoli`
--

CREATE TABLE `carrello_articoli` (
  `carrello_id` int(11) NOT NULL,
  `prodotto` varchar(255) NOT NULL,
  `quantita` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodotti`
--

CREATE TABLE `prodotti` (
  `nome` varchar(255) DEFAULT NULL,
  `prezzo` decimal(10,2) DEFAULT NULL,
  `link_pagina` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodotti`
--

INSERT INTO `prodotti` (`nome`, `prezzo`, `link_pagina`) VALUES
('iPhone 16', 1199.00, 'iPhone16.php'),
('iPhone 16 Plus', 1299.00, 'iPhone16.php'),
('iPhone 16 Pro', 1399.00, 'iPhone16pro.php'),
('iPhone 16 Pro Max', 1499.00, 'iPhone16pro.php'),
('iPhone 16e', 999.00, 'iPhone16e.php'),
('iPhone 15', 1099.00, ''),
('iPhone 15 Plus', 1199.00, ''),
('iPhone 15 Pro', 1299.00, ''),
('iPhone 15 Pro Max', 1399.00, ''),
('Airpods 4', 149.00, ''),
('Airpods 4 Noise Cancellation', 199.00, ''),
('Airpods Pro 2', 279.00, ''),
('Airpods Max', 579.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `telefoni`
--

CREATE TABLE `telefoni` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `prezzo` decimal(10,2) DEFAULT NULL,
  `rata_mensile` decimal(10,2) DEFAULT NULL,
  `immagine` varchar(255) DEFAULT NULL,
  `link_pagina` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `telefoni`
--

INSERT INTO `telefoni` (`id`, `nome`, `prezzo`, `rata_mensile`, `immagine`, `link_pagina`) VALUES
(1, 'iPhone 16', 1199.00, 50.00, 'https://www.apple.com/v/iphone/compare/ai/images/overview/compare_iphone16_black__ck6xpqbw7fma_large.jpg', 'iPhone16.php'),
(2, 'iPhone 16 Plus', 1299.00, 54.00, 'https://www.apple.com/v/iphone/compare/ai/images/overview/compare_iphone16_plus_black__fe6t5ddlwsq6_large.jpg', 'iPhone16.php'),
(3, 'iPhone 16 Pro', 1399.00, 58.00, 'https://www.apple.com/v/iphone/compare/ai/images/overview/compare_iphone16_pro_black_titanium__bifcs0f1p0z6_large.jpg', 'iPhone16pro.php'),
(4, 'iPhone 16 Pro Max', 1499.00, 62.00, 'https://www.apple.com/v/iphone/compare/ai/images/overview/compare_iphone16_pro_max_black_titanium__etrij8y98ga6_large.jpg', 'iPhone16pro.php'),
(5, 'iPhone 16e', 999.00, 42.00, 'https://www.apple.com/v/iphone/compare/ai/images/overview/compare_iphone16e_black__cwfsksm6qjqu_large.jpg', 'iPhone16e.php'),
(6, 'iPhone 15', 1099.00, 46.00, 'https://www.apple.com/v/iphone/compare/ai/images/overview/compare_iphone15_black__eyskuqjt4mye_large.jpg', ''),
(7, 'iPhone 15 Plus', 1199.00, 50.00, 'https://www.apple.com/v/iphone/compare/ai/images/overview/compare_iphone15_plus_black__gjieq6acuweq_large.jpg', ''),
(8, 'iPhone 15 Pro', 1299.00, 54.00, 'https://www.apple.com/v/iphone/compare/ai/images/overview/compare_iphone15_pro_black_titanium__dqzmw1urzswi_large.jpg', ''),
(9, 'iPhone 15 Pro Max', 1399.00, 58.00, 'https://www.apple.com/v/iphone/compare/ai/images/overview/compare_iphone15_pro_max_black_titanium__dek1z0fhosom_large.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `utente`
--

CREATE TABLE `utente` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utente`
--

INSERT INTO `utente` (`id`, `name`, `surname`, `username`, `email`, `password`) VALUES
(1, 'Alfio', 'Paninaro', 'Alfio_Paninaro', 'alfio.paninaro@gmail.com', '$2y$10$KBkfKr5LkI9MJ2Cj.bI5vOb4IQyTzq.jtWW6zilV/hqydFvtRbfoa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airpods`
--
ALTER TABLE `airpods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrello_articoli`
--
ALTER TABLE `carrello_articoli`
  ADD PRIMARY KEY (`carrello_id`,`prodotto`);

--
-- Indexes for table `telefoni`
--
ALTER TABLE `telefoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airpods`
--
ALTER TABLE `airpods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `telefoni`
--
ALTER TABLE `telefoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `utente`
--
ALTER TABLE `utente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
