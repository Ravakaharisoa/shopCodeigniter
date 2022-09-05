-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 29 mars 2022 à 14:52
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_uname` varchar(255) NOT NULL,
  `admin_pwd` varchar(255) NOT NULL,
  `admin_type` int(10) NOT NULL,
  `admin_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_uname`, `admin_pwd`, `admin_type`, `admin_photo`) VALUES
(1, 'Annah', 'e00020b3408ce0689fd0482c98e5d4db', 1, 'avatar2.png');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`) VALUES
(1, 'CLOTHES', 'Clothes Category'),
(2, 'ELECTRONICS', 'Electronics Category'),
(3, 'FOOD AND BEVERAGES', 'Food and Beverages Category'),
(4, 'HEALTH AND BEAUTY', 'Health and beauty Category'),
(5, 'SPORTS AND LEISURES', 'Sports and leisure Category'),
(6, 'FASHION', 'Fashion Category'),
(7, 'PETS', 'Pets Category'),
(8, 'TEST', 'Test');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_type` int(2) NOT NULL,
  `product_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`product_id`, `cat_id`, `product_name`, `product_image`, `product_price`, `product_desc`, `product_type`, `product_time`) VALUES
(1, 2, 'camera', '1.jpg', 100, '14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).', 1, '2022-01-15 20:55:31'),
(2, 2, 'memory', '6.jpg', 50, '', 1, '2022-01-15 20:55:31'),
(3, 1, 'shoe', 'b3.jpg', 150, '', 1, '2022-01-15 20:57:17'),
(4, 2, 'pendrive', '7.jpg', 110, '', 1, '2022-01-15 20:55:31'),
(5, 1, 'shoe 1', 'b1.jpg', 150, '', 2, '2022-01-15 20:57:17'),
(6, 1, 'shoe 2', 'b2.jpg', 150, '', 2, '2022-01-15 20:57:17'),
(7, 1, 'shoe 3', 'b3.jpg', 150, '', 2, '2022-01-15 20:57:17'),
(8, 1, 'shoe 4', 'b4.jpg', 150, '', 2, '2022-01-15 20:57:17'),
(9, 2, 'memory', '6.jpg', 50, '', 3, '2022-01-15 20:55:31'),
(10, 2, 'pendrive', '7.jpg', 110, '', 3, '2022-01-15 20:55:31'),
(11, 2, 'memory 16G', '8.jpg', 90, '', 3, '2022-01-15 20:55:31'),
(12, 2, 'camera pro', '9.jpg', 120, '14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).', 3, '2022-01-15 20:55:31'),
(13, 1, 'shoe', 'b2.jpg', 150, '', 3, '2022-01-15 20:57:17'),
(14, 2, 'camera', '11.jpg', 100, '14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).', 3, '2022-01-15 20:55:31');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `USER_ID` bigint(20) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `FIRSTNAME` varchar(255) NOT NULL,
  `LASTNAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `MOBILE` int(10) NOT NULL,
  `IP` varchar(255) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`USER_ID`, `USERNAME`, `FIRSTNAME`, `LASTNAME`, `EMAIL`, `PASSWORD`, `MOBILE`, `IP`, `DATE`) VALUES
(1, 'Michel', 'Jean', 'Michel', 'michel@gmail.com', 'fc6a81ff8f478146123860fb35b0b0a9', 926352613, '127.0.0.1', '2022-01-15 10:25:24');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
