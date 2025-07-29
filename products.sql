-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 10:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `granite_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `common_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `dimensions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `common_name`, `description`, `image`, `price`, `dimensions`) VALUES
(1, '', 'Amba White', 'A stunning white granite with subtle grey and black flecks.', 'images/amba-white.jpg', '₹22,500 per sq meter', '120x60 cm'),
(2, '', 'Matrix – Leather', 'A luxurious leather-textured granite ideal for modern spaces.', 'images/matrix-leather.jpg', '₹26,250 per sq meter', '120x60 cm'),
(3, '', 'Absolute Black', 'Deep, rich black granite perfect for elegant designs.', 'images/absolute-black.jpg', '₹30,000 per sq meter', '120x60 cm'),
(4, '', 'Amadeus Blue', 'A captivating blue granite featuring striking patterns.', 'images/amadeus-blue.jpg', '₹33,750 per sq meter', '120x60 cm'),
(5, '', 'Astoria', 'A warm, earthy granite with beautiful beige and brown hues.', 'images/astoria.jpg', '₹28,500 per sq meter', '120x60 cm'),
(6, '', 'Bross Blue', 'A vibrant blue granite with a mix of subtle white veining.', 'images/bross-blue.jpg', '₹31,500 per sq meter', '120x60 cm'),
(7, '', 'Black Galaxy', 'A stunning black granite adorned with golden specks.', 'images/black-galaxy.jpg', '₹35,000 per sq meter', '120x60 cm'),
(8, '', 'Blue Oceano', 'A serene blue granite reminiscent of ocean waves.', 'images/blue-oceano.jpg', '₹34,500 per sq meter', '120x60 cm'),
(9, '', 'Blue Pearl', 'A dazzling blue granite with silver and white highlights.', 'images/blue-pearl.jpg', '₹32,000 per sq meter', '120x60 cm'),
(10, '', 'Bianco Antico', 'A beautiful blend of whites, greys, and browns with a polished finish.', 'images/bianco-antico.jpg', '₹29,000 per sq meter', '120x60 cm'),
(11, '', 'Black Pearl', 'Elegant black granite featuring deep metallic flecks.', 'images/black-pearl.jpg', '₹31,000 per sq meter', '120x60 cm'),
(12, '', 'Bengal White', 'A striking white granite with subtle grey patterns.', 'images/bengal-white.jpg', '₹23,500 per sq meter', '120x60 cm'),
(13, '', 'Colonial Cream', 'A warm, creamy granite with light beige tones.', 'images/colonial-cream.jpg', '₹27,000 per sq meter', '120x60 cm'),
(14, '', 'Coffee Brown', 'A rich brown granite ideal for traditional settings.', 'images/coffee-brown.jpg', '₹24,500 per sq meter', '120x60 cm'),
(15, '', 'Copper Red', 'A vibrant red granite with copper and gold accents.', 'images/copper-red.jpg', '₹29,500 per sq meter', '120x60 cm'),
(16, '', 'Colonial White', 'A clean, crisp white granite with subtle grey veining.', 'images/colonial-white.jpg', '₹22,000 per sq meter', '120x60 cm'),
(17, '', 'Imperial Cream', 'A luxurious cream granite with light brown flecks.', 'images/imperial-cream.jpg', '₹28,500 per sq meter', '120x60 cm'),
(18, '', 'Imperial Gold', 'Elegant golden granite featuring striking brown and grey patterns.', 'images/imperial-gold.jpg', '₹32,500 per sq meter', '120x60 cm'),
(19, '', 'Kashmir Gold', 'A stunning blend of gold and cream tones with intricate patterns.', 'images/kashmir-gold.jpg', '₹30,000 per sq meter', '120x60 cm'),
(20, '', 'Kashmir White', 'A beautiful white granite with delicate grey veining.', 'images/kashmir-white.jpg', '₹24,000 per sq meter', '120x60 cm'),
(21, '', 'Bianco Tiffone', 'A premium white granite with grey and beige speckles.', 'images/bianco-tiffone.jpg', '₹25,500 per sq meter', '120x60 cm'),
(22, '', 'Mist Black', 'A deep black granite with subtle grey tones.', 'images/mist-black.jpg', '₹29,000 per sq meter', '120x60 cm'),
(23, '', 'Multi Color', 'A vibrant granite featuring a blend of various colors.', 'images/multi-color.jpg', '₹35,000 per sq meter', '120x60 cm'),
(24, '', 'Ivory Brown', 'A soft brown granite with ivory and cream tones.', 'images/ivory-brown.jpg', '₹23,500 per sq meter', '120x60 cm'),
(25, '', 'Parana Bordeaux', 'A rich, dark granite with reddish and purple hues.', 'images/parana-bordeaux.jpg', '₹32,000 per sq meter', '120x60 cm'),
(26, '', 'Pebble White', 'A beautiful white granite with soft grey speckles.', 'images/pebble-white.jpg', '₹22,500 per sq meter', '120x60 cm'),
(27, '', 'Imperial White', 'A pure white granite with light grey veining.', 'images/imperial-white.jpg', '₹24,000 per sq meter', '120x60 cm'),
(28, '', 'New Imperial Red', 'A stunning red granite with intricate patterns.', 'images/new-imperial-red.jpg', '₹30,500 per sq meter', '120x60 cm'),
(29, '', 'New Kashmir White', 'A modern take on the classic Kashmir White granite.', 'images/new-kashmir-white.jpg', '₹25,000 per sq meter', '120x60 cm'),
(30, '', 'Royal Ivory', 'A luxurious ivory granite with subtle beige flecks.', 'images/royal-ivory.jpg', '₹28,000 per sq meter', '120x60 cm'),
(31, '', 'River White', 'A soft white granite with grey and brown veining.', 'images/river-white.jpg', '₹22,000 per sq meter', '120x60 cm'),
(32, '', 'New Kashmir Cream', 'A fresh, creamy granite ideal for contemporary designs.', 'images/new-kashmir-cream.jpg', '₹27,000 per sq meter', '120x60 cm'),
(33, '', 'Tan Brown', 'A rich brown granite with warm beige tones.', 'images/tan-brown.jpg', '₹26,500 per sq meter', '120x60 cm'),
(34, '', 'Thunder Cloud', 'A dramatic granite with dark grey and black swirling patterns.', 'images/thunder-cloud.jpg', '₹32,500 per sq meter', '120x60 cm'),
(35, '', 'New Multi Colour', 'A vibrant and dynamic granite featuring multiple colors.', 'images/new-multi-color.jpg', '₹34,000 per sq meter', '120x60 cm'),
(36, '', 'Colonial Dream', 'A dreamy blend of cream and light brown tones.', 'images/colonial-dream.jpg', '₹29,500 per sq meter', '120x60 cm'),
(37, '', 'Aviva White', 'A pure white granite with minimal veining.', 'images/aviva-white.jpg', '₹23,500 per sq meter', '120x60 cm'),
(38, '', 'Regal Black', 'An elegant black granite with subtle metallic flecks.', 'images/regal-black.jpg', '₹30,000 per sq meter', '120x60 cm'),
(39, '', 'Steel Grey', 'A sophisticated grey granite with a polished finish.', 'images/steel-grey.jpg', '₹28,500 per sq meter', '120x60 cm'),
(40, '', 'Sapphire Blue', 'A bright blue granite with sparkling effects.', 'images/sapphire-blue.jpg', '₹31,000 per sq meter', '120x60 cm'),
(41, '', 'New Meera White', 'A clean white granite with a polished finish.', 'images/new-meera-white.jpg', '₹24,500 per sq meter', '120x60 cm'),
(42, '', 'Meera White', 'A classic white granite with delicate grey veining.', 'images/meera-white.jpg', '₹23,000 per sq meter', '120x60 cm'),
(43, '', 'Kuppam Green', 'A rich green granite featuring subtle brown and grey flecks.', 'images/kuppam-green.jpg', '₹26,000 per sq meter', '120x60 cm'),
(44, '', 'Kashmir Cream', 'A creamy granite with soft beige and grey patterns.', 'images/kashmir-cream.jpg', '₹25,500 per sq meter', '120x60 cm'),
(45, '', 'Prada Gold', 'A luxurious golden granite with intricate veining.', 'images/prada-gold.jpg', '₹34,500 per sq meter', '120x60 cm'),
(46, '', 'Emerald Pearl HQ', 'A striking green granite with shimmering effects.', 'images/emerald-pearl.jpg', '₹32,000 per sq meter', '120x60 cm'),
(47, '', 'Thunder White', 'A beautiful white granite with grey swirls.', 'images/thunder-white.jpg', '₹23,500 per sq meter', '120x60 cm'),
(48, '', 'Vizag Blue', 'A unique blue granite with subtle patterns.', 'images/vizag-blue.jpg', '₹30,500 per sq meter', '120x60 cm'),
(49, '', 'Viscount Waves', 'A dynamic granite with beautiful wave-like patterns.', 'images/viscount-waves.jpg', '₹29,000 per sq meter', '120x60 cm'),
(50, '', 'Spice Black', 'A bold black granite featuring specks of gold and white.', 'images/spice-black.jpg', '₹32,500 per sq meter', '120x60 cm'),
(51, '', 'Paradiso Bash', 'A stunning blend of rich browns and greys.', 'images/paradiso-bash.jpg', '₹28,500 per sq meter', '120x60 cm'),
(52, '', 'Indian Juparana', 'A beautiful brown granite with intricate patterns.', 'images/indian-juparana.jpg', '₹25,000 per sq meter', '120x60 cm'),
(53, '', 'Colombo Juprana', 'A classic brown granite featuring rich color variations.', 'images/colombo-juprana.jpg', '₹24,500 per sq meter', '120x60 cm'),
(54, '', 'Colonial Gold', 'A luxurious golden granite with elegant patterns.', 'images/colonial-gold.jpg', '₹33,000 per sq meter', '120x60 cm'),
(55, '', 'Hassan Green', 'A vibrant green granite with subtle grey flecks.', 'images/hassan-green.jpg', '₹26,000 per sq meter', '120x60 cm'),
(56, '', 'Himalayan Blue', 'A stunning blue granite reminiscent of the sky.', 'images/himalayan-blue.jpg', '₹34,000 per sq meter', '120x60 cm'),
(57, '', 'Indian Aurora', 'A beautiful blend of blues and whites.', 'images/indian-aurora.jpg', '₹30,000 per sq meter', '120x60 cm'),
(58, '', 'Black Forest', 'A deep black granite with white and grey patterns.', 'images/black-forest.jpg', '₹29,500 per sq meter', '120x60 cm'),
(59, '', 'Bengal Black', 'A rich black granite featuring striking patterns.', 'images/bengal-black.jpg', '₹30,000 per sq meter', '120x60 cm'),
(60, '', 'Andromeda White', 'A luxurious white granite with delicate veining.', 'images/andromeda-white.jpg', '₹23,500 per sq meter', '120x60 cm'),
(61, '', 'Moon White', 'A soft white granite with subtle grey speckles.', 'images/moon-white.jpg', '₹22,000 per sq meter', '120x60 cm'),
(62, '', 'Paradiso Classic', 'A timeless granite featuring rich, warm tones.', 'images/paradiso-classic.jpg', '₹31,000 per sq meter', '120x60 cm'),
(63, '', 'Black Titanium', 'An elegant black granite with unique patterns.', 'images/black-titanium.jpg', '₹32,500 per sq meter', '120x60 cm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
