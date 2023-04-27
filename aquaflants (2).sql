-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 07:01 AM
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
-- Database: `aquaflants`
--

-- --------------------------------------------------------

--
-- Table structure for table `planttbl`
--

CREATE TABLE `planttbl` (
  `plantID` int(100) NOT NULL,
  `plantType` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantCategory` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gardenSize` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantName` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantDes` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantSoil` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantSun` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantWater` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Photo` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `planttbl`
--

INSERT INTO `planttbl` (`plantID`, `plantType`, `plantCategory`, `gardenSize`, `plantName`, `plantDes`, `plantSoil`, `plantSun`, `plantWater`, `Photo`) VALUES
(4, 'Angiosperms', 'Tree', 'Large Sized Garden', 'Narra (Pterocarpus indicus)', 'A large tree that produces reddish-brown wood, it is commonly used in furniture making.', 'well-drained soil', 'full sun', 'moderate watering, with good drainage ', '70530.jpg'),
(5, 'Angiosperms', 'Vine', 'Medium Sized Garden', 'Sampaguita (Jasminum sambac)', 'A fragrant flowering plant that is often used in making leis or garlands', 'well-draining, nutrient-rich soil', 'partial sun', 'moderate watering, with good drainage', '9646.jpg'),
(6, 'Angiosperms', 'Shrub', 'Medium Sized Garden', 'Kamantigue (Hibiscus rosa-sinensis)', 'A flowering shrub that produces large, showy blooms in a variety of colors.', 'well-draining, loamy soil', 'full sun', 'moderate watering, with good drainage', '65263.png'),
(7, 'Angiosperms', 'Shrub', 'Medium Sized Garden', 'Gumamela (Hibiscus cannabinus)', 'A shrub that produces large, colorful blooms.', 'well-draining, loamy soil', 'full sun', 'moderate watering, with good drainage', '83559.png'),
(8, 'Angiosperms', 'Shrub', 'Medium Sized Garden', 'Adelfa (Nerium oleander)', 'A flowering shrub that produces blooms in shades of pink, white, and red.', 'well-draining soil', 'full sun', 'moderate watering, with good drainage', '18661.png'),
(9, 'Angiosperms', 'Tree', 'Large Sized Garden', 'Ylang-ylang (Cananga odorata)', 'A tree that produces fragrant yellow flowers, it is commonly used in perfumes and aromatherapy.', 'well-draining soil', 'partial shade', 'moderate watering, with good drainage', '68053.png'),
(10, 'Angiosperms', 'Tree', 'Large Sized Garden', 'Kalachuchi (Plumeria rubra)', 'A tree that produces fragrant flowers in shades of pink, yellow, and white.', 'well-draining, nutrient-rich soil', 'full sun', 'moderate watering, with good drainage.', '2225.png'),
(11, 'Angiosperms', 'Tree', 'Large Sized Garden', 'Banaba (Lagerstroemia speciosa)', 'A tree that produces pink, purple, or white flowers, it is often used in traditional medicine.', 'well-draining soil', 'full sun', 'moderate watering, with good drainage', '59063.png'),
(12, 'Angiosperms', 'Tree', 'Large Sized Garden', 'Talisay (Terminalia catappa)', 'A large tree with a broad canopy, it produces edible nuts and is often used in landscaping.', 'well-draining soil', 'full sun', 'moderate watering, with good drainage', '96586.png'),
(13, 'Angiosperms', 'Tree', 'Medium Sized Garden', 'Balite (Ficus benjamina)', 'A tree that produces small, edible fruits, it is often used as an ornamental plant.', 'well-draining soil', 'full sun to partial shade', 'moderate watering, with good drainage', '91797.png'),
(14, 'Ferns', 'Epiphyte', 'Small Sized Garden', 'Staghorn Fern (Platycerium bifurcatum)', 'A unique fern that grows on trees or on rocks. It has two types of fronds - the basal fronds that are flat and strap-like, and the upper fronds that are antler-shaped.', 'well-draining soil that is rich in organic matter', 'partial shade', 'moderate watering, with high humidity', '71124.jpg'),
(15, 'Ferns', 'Epiphyte', 'Small Sized Garden', 'Bird\'s Nest Fern (Asplenium nidus)', 'A large fern that has a rosette of fronds that resemble a bird\'s nest. It has broad, flat fronds that are glossy green.', 'well-draining soil that is rich in organic matter', 'partial shade', 'moderate watering, with high humidity', '78636.jpg'),
(16, 'Ferns', 'Groundcover', 'Small Sized Garden', 'Maidenhair Fern (Adiantum philippense)', 'A delicate fern with dark, shiny stems and light green fronds that are divided into small leaflets.', 'well-draining soil that is rich in organic matter', 'frequent watering, with high humidity', 'partial to full shade', '30933.jpg'),
(17, 'Ferns', 'Groundcover', 'Small Sized Garden', 'Button Fern (Pellaea rotundifolia)', 'A small fern with rounded fronds that are bright green and glossy.', 'well-draining soil that is rich in organic matter', 'partial shade', 'moderate watering, with high humidity', '93433.jpg'),
(18, 'Ferns', 'Epiphyte', 'Small Sized Garden', 'Hare\'s Foot Fern (Davallia trichomanoides)', 'A fern with creeping rhizomes that are covered in reddish-brown hairs, giving it a furry appearance. Its fronds are light green and deeply lobed.', 'well-draining soil that is rich in organic matter', 'partial shade', 'frequent watering, with high humidity', '93798.jpg'),
(19, 'Ferns', 'Groundcover', 'Small Sized Garden', 'Ribbon Fern (Pteris cretica)', 'A fern with narrow, ribbon-like fronds that are a pale green color.', 'well-draining soil that is rich in organic matter', 'partial shade', 'moderate watering, with high humidity', '65516.jpg'),
(20, 'Ferns', 'Groundcover', 'Small Sized Garden', 'Sword Fern (Nephrolepis cordifolia)', 'A fern with long, narrow fronds that are dark green and arching. It is often used as a hanging plant.', 'well-draining soil that is rich in organic matter.', 'partial shade', 'frequent watering, with high humidity', '50780.jpg'),
(21, 'Ferns', 'Groundcover', 'Small Sized Garden', 'Kangaroo Paw Fern (Microsorum diversifolium)', 'A fern with fronds that are shaped like the paw of a kangaroo. It has a mottled green and brown coloration.', 'well-draining soil that is rich in organic matter.', 'partial shade', 'moderate watering, with high humidity', '79532.jpg'),
(22, 'Ferns', 'Vine', 'Medium Sized Garden', 'Japanese Climbing Fern (Lygodium japonicum)', 'A climbing fern that has long, twining fronds that can reach up to 30 feet in length. Its fronds are delicate and feathery.', 'well-draining soil that is rich in organic matter.', 'frequent watering, with high humidity.', 'partial to full shade', '5545.jpg'),
(23, 'Ferns', 'Groundcover', 'Small Sized Garden', 'Philippine Deer Fern (Hypolepis rugosula)', 'A small fern with delicate fronds that are light green and finely divided. It is named for the small, fuzzy brown scales that cover its fronds and resemble deer antlers.', 'well-draining soil that is rich in organic matter.', 'partial to full shade', 'moderate watering, with high humidity', '62561.jpg'),
(24, 'Succulents', 'Shrub', 'Small Sized Garden', 'Jade Plant (Crassula ovata)', 'A popular succulent with fleshy, oval-shaped leaves that are a glossy green color. It can grow up to 3 feet tall and is often used in bonsai.', 'well-draining soil that is slightly acidic', 'full sun to partial shade', 'infrequent watering, with dry periods between wate', '69199.jpg'),
(25, 'Succulents', 'Rosette', 'Small Sized Garden', 'Echeveria (Echeveria spp.)', 'A rosette-forming succulent with fleshy leaves that are often colored in shades of green, blue, pink, or purple. It can grow up to 12 inches tall and wide.', 'well-draining soil that is slightly acidic', 'full sun to partial shade', 'infrequent watering, with dry periods between wate', '15680.jpg'),
(26, 'Succulents', 'Vine', 'Small Sized Garden', 'String of Pearls (Senecio rowleyanus)', 'A trailing succulent with small, spherical leaves that resemble pearls. It can grow up to 3 feet long and is often grown in hanging baskets.', 'well-draining soil that is slightly acidic', 'partial shade', 'infrequent watering, with dry periods between wate', '9907.jpg'),
(27, 'Succulents', 'Epiphyte', 'Small Sized Garden', 'Christmas Cactus (Schlumbergera spp.)', 'A popular holiday plant with flat, segmented leaves that are often colored in shades of red, pink, or white. It blooms in the winter, producing large, showy flowers.', 'well-draining soil that is slightly acidic', 'partial shade', 'moderate watering, with dry periods between wateri', '45111.jpg'),
(28, 'Succulents', 'Rosette', 'Small Sized Garden', 'Zebra Plant (Haworthia fasciata)', 'A small succulent with rosettes of fleshy, pointed leaves that are striped in white bands. It can grow up to 6 inches tall and is often used in terrariums.', 'well-draining soil that is slightly acidic', 'partial shade', 'infrequent watering, with dry periods between wate', '44004.jpg'),
(29, 'Succulents', 'Shrub', 'Small Sized Garden', 'Crown of Thorns (Euphorbia milii)', 'A thorny succulent with small, oval-shaped leaves that are often colored in shades of green or red. It produces large, showy flowers in a range of colors.', 'well-draining soil that is slightly acidic', 'full sun to partial shade', 'infrequent watering, with dry periods between wate', '54010.jpg'),
(30, 'Succulents', 'Rosette', 'Small Sized Garden', 'Agave (Agave spp.)', 'A large, spiky succulent with rosettes of fleshy, pointed leaves that can grow up to 10 feet tall. It is often used in landscaping and can take several years to mature.', 'well-draining soil that is slightly acidic.', 'full sun.', 'infrequent watering, with dry periods between wate', '11042.jpg'),
(31, 'Succulents', 'Cactus', 'Small Sized Garden', 'Pincushion Cactus (Mammillaria spp.)', 'A small, spherical cactus with clusters of spines that resemble a pincushion. It produces bright, showy flowers in a range of colors.', 'well-draining soil that is slightly acidic.', 'full sun', 'infrequent watering, with dry periods between wate', '63815.jpg'),
(32, 'Succulents', 'Rosette', 'Small Sized Garden', 'Snake Plant (Sansevieria trifasciata)', 'A tall, upright succulent with long, pointed leaves that are colored in shades of green or yellow. It can grow up to 4 feet tall and is often used as a low-maintenance houseplant.', 'well-draining soil that is slightly alkaline', 'partial shade', 'infrequent watering, with dry periods between wate', '17938.jpg'),
(33, 'Succulents', 'Rosette', 'Small Sized Garden', 'Hens and Chicks (Sempervivum spp.)', 'A rosette-forming succulent with small, fleshy leaves that are often colored in shades of green or red. It produces offsets, or \"chicks,\" around the base of the mother plant.', 'well-draining soil that is slightly acidic.', 'infrequent watering, with dry periods between wate', 'full sun to partial shade.', '41996.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `userName` text NOT NULL,
  `email` text NOT NULL,
  `userPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `firstName`, `lastName`, `userName`, `email`, `userPassword`) VALUES
(2, 'Kayl', 'Kyle', 'Kayl', 'kyledelapena45@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `user_events`
--

CREATE TABLE `user_events` (
  `id` int(50) NOT NULL,
  `userID` int(50) NOT NULL,
  `eventTitle` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `event_start_date` datetime(6) NOT NULL,
  `event_end_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `planttbl`
--
ALTER TABLE `planttbl`
  ADD PRIMARY KEY (`plantID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_events`
--
ALTER TABLE `user_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `planttbl`
--
ALTER TABLE `planttbl`
  MODIFY `plantID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_events`
--
ALTER TABLE `user_events`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
