-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 05:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webassignment_shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessory`
--

CREATE TABLE `accessory` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `image_path` mediumtext NOT NULL,
  `product_note` text NOT NULL,
  `product_subcategory` text NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accessory`
--

INSERT INTO `accessory` (`id`, `product_name`, `image_path`, `product_note`, `product_subcategory`, `product_price`) VALUES
(2, 'Nike ACG Aysén', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/e84d3ed7-c2e2-4f83-88b9-9c60f2df48ae/acg-aysen-day-pack-2XPr4k.png', 'Sustainable Materials', 'Bag ', 100),
(3, 'Nike NV07', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f60b7f7a-930e-40b3-90f9-b45ded140d1e/nv07-sunglasses-MZFFT1.png', '', 'Sunglasses', 100),
(4, 'Nike Club', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,b_rgb:f5f5f5/9c39ece2-e859-4821-b7fa-1aac80cd67cf/club-unstructured-jdi-cap-Xr7txF.png', 'Sustainable Materials', 'Unstructured JDI Hat', 28),
(5, 'Brasilia', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f22d080c-a3f1-4230-8587-7e06c92e4f6f/brasilia-insulated-fuel-pack-Pzq8B9.png', 'Back to School', 'Insulated Fuel Bag', 28),
(6, 'Premier League Academy', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,b_rgb:f5f5f5/48a07106-0db9-440c-94b6-0b10ea1e78ef/premier-league-academy-soccer-ball-NJR7L1.png', '', 'Soccer Ball', 37),
(7, 'Jordan Championship 8P', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,b_rgb:f5f5f5/888d46d8-7656-4552-9404-5835aa338c3c/jordan-championship-8p-basketball-LQQVHZ.png', '', 'Basketball', 75),
(8, 'Nike Apex', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,b_rgb:f5f5f5/5e96eabe-c882-4b94-b875-249416902e4b/apex-tie-dye-bucket-hat-NSq1Kd.png', 'Sustainable Materials', 'Tie Dye Bucket Hat', 36),
(9, 'Nike Dri-FIT Apex', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,b_rgb:f5f5f5/d87b7c2b-d31a-41aa-a834-2da304feb32f/dri-fit-apex-camo-print-bucket-hat-Cvk6bB.png', '', 'Camo Print Bucket Hat', 36);

-- --------------------------------------------------------

--
-- Table structure for table `clothing`
--

CREATE TABLE `clothing` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `image_path` mediumtext NOT NULL,
  `product_note` text NOT NULL,
  `product_subcategory` text NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clothing`
--

INSERT INTO `clothing` (`id`, `product_name`, `image_path`, `product_note`, `product_subcategory`, `product_price`) VALUES
(4, 'Nike ACG ', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/522a8b76-47b2-454d-aeff-eadfa2732699/acg-wolf-tree-polartec-mens-full-zip-top-DwxmXv.png', 'Sustainable Materials', 'Pullover Hoodie', 135),
(5, 'Nike ACG \"Cinder Cone\"', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/08b0ea87-9f9c-43c9-beb1-5e96bff90e39/acg-cinder-cone-mens-windshell-pants-D2qL9d.png', 'Sustainable Materials', 'Men\'s Windshell Pants', 0),
(6, 'Nike ACG \"Oregon Series\" Reissue', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a89d146a-3838-48bb-8317-ed6906bb60db/acg-oregon-series-reissue-mens-reversible-jacket-kJS6bb.png', 'Sustainable Materials', 'Men\'s Reversible Jacket', 193),
(8, 'Nike Sportswear Premium Essentials', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/01b0748e-2d19-4257-8f4f-51859f929039/sportswear-premium-essentials-mens-tie-dye-max90-t-shirt-WxWgmV.png', '', 'Men\'s Tie-Dye Max90 Tops', 50),
(9, 'Nike ACG \"Snowgrass\"', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/9c9e9169-4980-494e-83b5-6c7d1cb43d4a/acg-snowgrass-mens-cargo-shorts-DBGWD1.png', 'Sustainable Materials', 'Men\'s Cargo Shorts', 135),
(10, 'Nike SB Kearny', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/e946f9c7-a13d-4192-8d44-658cdcdf6d8a/sb-kearny-mens-cargo-skate-pants-lfqJ2t.png', '', 'Men\'s Cargo Skate Pants', 100),
(11, 'Nike Sportswear Tech Pack', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/73b1eaf7-03be-4817-8814-9aacbf6d77a8/sportswear-tech-pack-mens-woven-hooded-jacket-RpVXVK.png', 'Just In', 'Men\'s Woven Hooded Jacket', 230),
(12, 'Nike Sportswear Tech Fleece', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/b837f7d1-8450-441c-a22c-b6ab1eb6a130/sportswear-tech-fleece-mens-bomber-jacket-rXx6mF.png', 'Coming Soon', 'Men\'s Bomber Jacket', 155),
(13, 'Nike Everyday Plus', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/3aab5292-2ac5-4a74-baa6-c843761bb131/everyday-plus-slouchy-cushioned-crew-socks-1-pair-5vSTZm.png', '', 'Slouchy Cushioned Crew Socks (1 Pair)', 18),
(14, 'Nike Sportswear Phoenix Fleece', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/9206da4e-3c99-44b6-8725-f5887a3248a6/sportswear-phoenix-fleece-womens-over-oversized-crewneck-sweatshirt-Wj2Rd6.png', 'Best Seller', 'Women\'s Over-Oversized Crewneck Sweatshirt - Tops', 70),
(15, 'Nike Sportswear Phoenix Fleece', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/5b00cbac-f0f1-49c4-9f03-ac07b65cff87/sportswear-phoenix-fleece-womens-oversized-pullover-hoodie-bs372Q.png', 'Just In', 'Women\'s Oversized Pullover Hoodie', 75),
(16, 'Nike Multi', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/b6e77e69-443d-4476-bd11-0f979b7a01d3/multi-big-kids-boys-dri-fit-graphic-training-top-dFRNMp.png', 'Sustainable Materials', 'Big Kids\' (Boys\') Dri-FIT Graphic Training Tops', 30),
(17, 'Nike Sportswear', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/i1-af25497f-2123-4413-be41-52635f219c37/sportswear-t-shirt-zmMkxS.png', 'Essential', 'Men\'s Tops', 35);

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `image_path` mediumtext NOT NULL,
  `product_note` text NOT NULL,
  `product_subcategory` text NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `product_name`, `image_path`, `product_note`, `product_subcategory`, `product_price`) VALUES
(6, 'Nike Dunk Low Retro', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/67fcdb78-eda4-4aaa-885e-de5c585d729b/dunk-low-retro-shoes-bCzchX.png', 'Promo Exclusion', 'Men\'s Shoes', 110),
(13, 'Nike Alpha Menace Elite 3 ', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/59e7edb1-2d19-4148-865a-17cebf8dd118/alpha-menace-elite-3-travis-kelce-mens-football-cleats-6m4HNQ.png', 'Member Access', 'Football Cleats', 200),
(15, 'Nike Free Metcon 5', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/7542fe72-eae6-49a2-8918-28a17aaf2c4c/free-metcon-5-mens-workout-shoes-Vfsbpq.png', 'Best Seller', 'Training Shoes', 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clothing`
--
ALTER TABLE `clothing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessory`
--
ALTER TABLE `accessory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clothing`
--
ALTER TABLE `clothing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
