-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2022 at 08:07 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senior`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8mb3_unicode_ci NOT NULL,
  `cond` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8mb3_unicode_ci NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `cond`, `category`, `location`, `description`, `image`) VALUES
(1, '2008 Jayco Sterling Caravan', '34990', 'New', 'Vehicle', 'Kilburn, SA', 'Poptop Caravan with Ensuite\r\n\r\nTare: 1679kg\r\nATM: 2154kg\r\nBall: 159kg\r\n\r\nEXTERIOR FEATURES:\r\n4 Inch chassis\r\nLeaf Spring Suspension\r\n14 Inch Wheels\r\n50mm Ball coupling\r\nFront tunnel boot storage\r\nRollout awning, new\r\n2 x Water Tank\r\n2 x 9kg gas bottle\r\n160w solar panel with charger\r\n1 x AGM Deep Cycle Battery\r\nGas HWS\r\n\r\nINTERIOR FEATURES:\r\nCombo Ensuite\r\nDouble bed\r\nL shape Lounge\r\nHerron 3.0 Air conditioner\r\nDometic 3 Way 150lt Fridge\r\nThetford Stovetop and Mini Grill, new\r\nStereo\r\nLG Microwave\r\nWater and battery gauge\r\n\r\nA full hectare in size we now present the largest and most diverse caravan dealership in the nation. We have more brands & more undercover space with a modern and properly equipped service center to help with warranty & insurance repairs and has great technical experts in place. We also offer financing options & insurance through a range of companies. All towing needs can be handled on site and a range of aftermarket products and extended warranties are available. Representing these famous and long standing manufacturers selected from the best in their fields ensures ongoing support and instills a good deal of confidence when purchasing from DBC. Our neighbour sharing our building is Cara-rest, a caravan repair and parts company some 40 years in business. The result is a HUGE one stop Caravan mega store where customers can browse for hours in comfort.\r\nIt’s just like a caravan show that never ends! ', ''),
(2, '2004 ROMA SOUTHLINER CARAVAN', '21995', 'New', 'Vehicle', 'Klemzig SA', 'STOCK 4s\r\n* 2004 ROMA SOUTHLINER SEMI OFF ROAD CARAVAN\r\n* REDUCED FROM $25995 to $21995!\r\n* ATM 1600 * TARE 1300 * LENGTH 5440 mm * HEIGHT 2990 mm\r\n* ISLAND BED & INNER SPRING MATTRESS\r\n* 2 SEATER LOUNGE / DINING\r\n* HERON 3.0 R/C AIR CONDITIONING\r\n* 4 x GAS BURNER / GRILL / HOB\r\n* FULL OVEN\r\n* BUILT IN MICROWAVE\r\n* 90 LTR 3 WAY FRIDGE\r\n* S/S SINK WITH MAINS & HAND PUMP\r\n* SONY RADIO /CD PLAYER\r\n* SWIVEL BRACKET FOR TV\r\n* SLIDE OUT PANTRY\r\n* FOUR SEASONS HATCH\r\n* HOUSE BATTERY\r\n* ROLL OUT AWNING\r\n* TWIN 9kg GAS BOTTLE HOLDERS\r\n* FRESH WATER TANK\r\n* 16\' TYRES\r\n* INDEPENDENT SUSPENSION\r\n\r\n*EVERY VAN IS FULLY CHECKED AND SERVICED BY US IN OUR ON SITE WORKSHOP\r\n*WE WILL TRADE or CONSIGN CARAVANS, CARS AND BOATS* FINANCE AVAILABLE\r\n*We offer a Large Range and Excellent Selection of Caravans from which to choose - OFF-ROAD, SLIDE OUTS, POP-TOPS, CAMPER VANS.... Many of our vans feature SHOWER/TOILET facilities with a variety of formats including QUEEN, DOUBLE, BUNK and SINGLE BED layouts.\r\n*We also have a limited range of HIGH QUALITY USED WAGONS and 4WD TOWING VEHICLES in Stock for your Perusal and Convenience. ', ''),
(3, 'Blackwolf Turbo 300 Twin Tent (3 rooms large porch) family tent', '850', 'Used', 'Furniture', 'Parkside SA', 'Parkside Pickup for a Blackwolf Turbo 300 Twin Tent (3 rooms large porch) \r\nGreat size for a family tent and sun protection out front with porch. Waterproof floor. Raised edging at doorway to provide protection against any rain. Front and rear porches.', ''),
(4, 'Set of 2 Portable Folding Camping Armchair', '106', 'New', 'Furniture', 'Adelaide CBD SA', 'Set of 2 Portable Folding Camping Arm Chair - Grey\r\n\r\n\r\nThe chairs are made from powder coated high tensile steel frame and is suitable for both indoors and outdoors. It is lightweight but can carry up to 120kg worth of weight. The 600D oxford fabric is built to be resistant.\r\n\r\n\r\nFeatures:\r\n\r\n* High padded back and wide armrests\r\n\r\n* Powder-coated high tensile steel frame\r\n\r\n* Cross-braced on all legs\r\n\r\n* Durable 600D Oxford fabric\r\n\r\n* Double-layer padded construction\r\n\r\n* Portable\r\n\r\n* Foldable for easy storage\r\n\r\n* Attached drink holder and side organiser pouch\r\n\r\n* Hemmed edges and seamless stitching\r\n\r\n* 120kg weight capacity per chair\r\n\r\n* Bonus carry bag\r\n\r\n* No assembly required\r\n\r\n\r\nSpecifications:\r\n\r\n* Colour: Grey\r\n\r\n* Weight capacity: 120KG per chair\r\n\r\n* Pole material: Steel\r\n\r\n* Fabric material: 600D Oxford PVC coated\r\n\r\n* Dimensions: 61 x 61 x 106CM\r\n\r\n\r\nPackage Content:\r\n\r\n2 x Camping Chair', ''),
(5, 'Camping Folding Tables, Folding Stool, Gas Lantern, Gas Radiator', '70', 'Used', 'Furniture', 'Coromandel Valley', '1 x Folding Table with glass/bottle pockets and carry bag. $20\r\n\r\n\r\n1 x Small folding table/stool with carry bag. $10\r\n\r\n\r\n1 xNomad Folding stool with carry bag. $10\r\n\r\n\r\n1 x Companion Gas Lantern. $10\r\n\r\n\r\n1 x Companion Gas Radiator. $20\r\n', ''),
(6, 'Camping Fire Pit BBQ 2-in-1 Grill Smoker Outdoor', '93', 'New', 'Supplies', 'Bedford Park', 'With our Grillz 2-in-1 Portable Fire Pit BBQ, you can expect some genuine all-season enjoyment all round. First, as a fire pit, it is simply great sitting around a nice warm fire with friends and family to chat the day or night away.\r\n\r\n\r\nOur goal is to provide you with an optimum user-friendly shopping experience\r\n\r\n\r\nSo that you can feel like you’re shopping in a departmental store.\r\n\r\n\r\nWith over ten thousand products in stock at the moment\r\n\r\n\r\nWith our Grillz 2-in-1 Portable Fire Pit BBQ, you can expect some genuine all-season enjoyment all round. First, as a fire pit, it is simply great sitting around a nice warm fire with friends and family to chat the day or night away.\r\n\r\n\r\nAnd should you decide to up the ante and have a sumptuous BBQ instead, just load on the food for some great feastings. Both the body and grill parts are made of food-grade stainless steel, meaning they are completely safe for cooking, and strong and durable too.\r\n\r\n\r\nThe base is sturdy and stable and comes with an ashtray to collect all the burnt materials. Plus, the heavy-duty charcoal bed allows charcoal or beads to be neatly placed without creating any additional mess while in use.\r\n\r\n\r\nThe grill rack is height-adjustable to two levels so that you can cater to large groups and always have the perfect amount of heat for whatever is cooking.\r\n\r\n\r\nAnd for a consistent good fire, the fire pit BBQ is designed with ample ventilation to let air flow through easily. Best of all, it folds flat for easy storage and transportation so that you can set it up on your lawn, deck and patio or even in caravan parks and camping sites.\r\n\r\n\r\nA bonus carry bag is also included for effortless, one-handed carryin', ''),
(7, 'Spinifex Drifter Sleeping Bag', '49.99', 'New', 'Supplies', 'Marion SA', '\r\n\r\nThe Spinifex Drifter is a great hooded sleeping bag with a 0° comfort rating. Comfortable, lightweight and a great price, this sleeping bag has a hollow fibre fill that traps heat in the bag - keeping you warm and comfortable. Great for home, school camps or general camping, make sure you take this on your next camping adventure!\r\n\r\nFeatures\r\n    400gsm hollow fibre-fill to trap the air to keep you warm\r\n    Great for school camps, home use and general camping\r\n\r\n', ''),
(8, 'Spinifex School Camp Hike Emergency 6 Piece Kit', '29.99', 'New', 'Supplies', 'Elizabeth SA', 'Tackle any outdoor adventure with the Spinifex School Camp Hike Emergency 6 Piece Kit, coming complete with an orienteering compass, headlamp, whistle, emergency poncho and blanket conveniently packed into a heavy-duty clear waterproof carry case. Be prepared for anything and keep the essentials on hand when you head out on your next bushwalk, overnight hike or school camp!', ''),
(9, '6-Day Eyre Peninsula & Flinders Ranges Adventure Tour', '1295', 'New', 'Services', 'Eyre Peninsula SA', 'Escape from it all on this back-to-nature 6-day camping trip from Adelaide and discover the beautiful beaches and wild forests of the Eyre Peninsula. Your action-packed itinerary includes the chance to try sandboarding at the Lake Newland dunes; spot kangaroos, wombats and emus on a nocturnal nature walk. Adrenaline junkies can even brave a shark cage dive (extra cost). This small-group tour has a maximum of 20 people and includes camping accommodation and all meals. 6-day Eyre Peninsula camping tour from Adelaide Explore the southern Flinders Ranges Go sandboarding down massive sand dunes Learn to surf on a pristine Eyre Peninsula beach Spend the night in swag hut on a real Aussie outback farm Cage dive with the great white sharks (own expense) Small-group tour limited to 18 people ensures a personalized experience with your guide.', ''),
(10, 'Morialta Wilderness and Wildlife Hike', '118', 'New', 'Services', 'Morialta', 'Walk through the Australian bush at Morialta Conservation Park while learning about the native flora and fauna from your guide. During this 4.5-hour excursion, youll see seasonal waterfalls, deep gorges, and sheer rock faces. Pickup and drop-off in Adelaide included. Learn about the native flora and fauna from your guide See koalas, kangaroos, echidna, and many bird species Round-trip transportation from Adelaide hotels Small-group tour limited to eight participants for a personalized experience', ''),
(11, 'DeWalt DXL3010-04 Fiberglass Stepladder, 4-Feet, Black', '272.86', 'Used', 'supplies', 'Grange', 'STURDY AND STRONG: With its 300-Pound capacity, elegant design and smooth finish, you won’t find a more durable, reliable ladder\r\nSAFETY AND COMFORT: Extra wide steps that provide 25% more standing surface\r\nWORK STATION KEEPS YOUR TOOLS AT HAND: Exclusive WORK STATION system has plenty of features to improve performance when working electrical, construction, and residential jobs. It includes a magnet tray, hardware tray, curved front, drill and tool slots, paint bucket holder, and pipe or 2x4 holder\r\nSAFE AND STABLE with double rivet step construction, and semi tubular steel rivets', 0x37317145784d45752b354c2e5f41435f534c313530305f2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES
(1, 'User 1', 'Password123', 'user1@email.com'),
(2, 'Admin', 'testing123', 'admin@admin.com'),
(3, 'User 2', 'thisismypassword', 'user2@testing.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
