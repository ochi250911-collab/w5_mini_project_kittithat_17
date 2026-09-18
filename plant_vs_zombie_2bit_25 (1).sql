-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2026 at 07:00 AM
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
-- Database: `plant_vs_zombie_2bit_25`
--

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `plant_id` int(11) NOT NULL,
  `plant_img` varchar(255) NOT NULL DEFAULT 'https://i0.wp.com/www.madboxpc.com/wp-content/uploads/2013/08/pvz2logo.jpg?fit=618%2C372&ssl=1',
  `plant_name` varchar(50) NOT NULL,
  `plant_world` varchar(50) NOT NULL,
  `plant_food_effect` varchar(255) NOT NULL,
  `sun_cost` int(11) NOT NULL,
  `damage` int(11) NOT NULL,
  `recharge_speed` float NOT NULL,
  `toughness` int(11) NOT NULL,
  `types_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`plant_id`, `plant_img`, `plant_name`, `plant_world`, `plant_food_effect`, `sun_cost`, `damage`, `recharge_speed`, `toughness`, `types_id`) VALUES
(1, 'https://i.pinimg.com/1200x/95/5b/56/955b56ac355452e01ad36c98474d9d24.jpg', 'Peashoter', '2', 'When given Plant Food, Peashooter becomes a fast-shooting Gatling Pea, shooting 60 peas in two seconds', 100, 20, 5, 300, 1),
(2, 'https://i.pinimg.com/736x/61/f0/c8/61f0c8884974189547bbe5d013b0ae96.jpg', 'sunflower', 'Player\'s House', 'Immediately produces a large amount of sun.', 50, 0, 5, 300, 6),
(3, 'https://i.pinimg.com/1200x/86/4e/fd/864efdc14f6aecbc01b4c98928fcc629.jpg', 'Wall-nut', 'Player\'s House', 'Heals itself and gains a hard armor shell.', 50, 0, 0, 4000, 12),
(4, 'https://i.pinimg.com/1200x/9a/2f/fe/9a2ffecee39bdb36da1337d9ead6291b.jpg', 'Potato Mine', 'Player\'s House', 'Immediately arms and spawns multiple copies of itself.', 25, 1800, 20, 300, 3),
(5, 'https://i.pinimg.com/1200x/de/6f/54/de6f543b3bc4ed9e6debeff7340ee5e6.jpg', 'Cabbage-pult', '10', 'Launches multiple cabbages at every zombie, dealing heavy damage.', 100, 40, 5, 300, 2);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `types_id` int(11) NOT NULL,
  `types_name` varchar(50) NOT NULL,
  `family_buff` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `types_img` varchar(255) NOT NULL DEFAULT 'https://i0.wp.com/www.madboxpc.com/wp-content/uploads/2013/08/pvz2logo.jpg?fit=618%2C372&ssl=1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`types_id`, `types_name`, `family_buff`, `description`, `types_img`) VALUES
(1, 'Appease-mint', 'เพิ่มพลังโจมตีและความเร็วของพืชสายยิงกระสุนตรง', 'พืชสายยิงกระสุนวิถีตรง (เช่น Peashooter, Red Stinger)', 'https://i.postimg.cc/dZLh2DdM/Screenshot-2569-09-18-at-11-21-07.png'),
(2, 'Arma-mint', 'เพิ่มพลังทำลายล้างและความแม่นยำของพืชสายยิงย้อย (ขว้าง)', 'พืชสายขว้าง/เครื่องยิงข้ามสิ่งกีดขวาง (เช่น Cabbage-pult, Melon-pult)', 'https://i.postimg.cc/5Q6XBjzh/Screenshot-2569-09-18-at-11-20-56.png'),
(3, 'Bombard-mint', 'เพิ่มรัศมีและพลังทำลายล้างของพืชสายระเบิด', 'พืชสายระเบิดสร้างความเสียหายฉับพลัน (เช่น Cherry Bomb, Potato Mine)', 'https://i.postimg.cc/06njh7dT/Screenshot-2569-09-18-at-11-20-35.png'),
(4, 'Conceal-mint', 'กระตุ้นสถานะ Powered ให้พืชสายเงาพร้อมเพิ่มพลังโจมตี', 'พืชสายเงาที่จะเก่งขึ้นเมื่อปลูกติดกัน (เช่น Moonflower, Shadow Peashooter)', 'https://i.postimg.cc/wR71X3Nn/Screenshot-2569-09-18-at-11-21-02.png'),
(5, 'Enforce-mint', 'เพิ่มพลังโจมตีระยะประชิด พลังชีวิต และผลักซอมบี้ถอยหลัง', 'พืชสายต่อสู้ระยะประชิดและบดขยี้ (เช่น Bonk Choy, Squash)', 'https://i.postimg.cc/4HmY6ncq/Screenshot-2569-09-18-at-11-20-51.png'),
(6, 'Enlighten-mint', 'เพิ่มปริมาณและความเร็วในการผลิตดวงอาทิตย์ของพืชสายผลิตแสง', 'พืชสายผลิตทรัพยากรแสงอาทิตย์ (เช่น Sunflower, Twin Sunflower)', 'https://i.postimg.cc/SXdRHc7H/Screenshot-2569-09-18-at-11-20-22.png'),
(7, 'Enchant-mint', 'เพิ่มประสิทธิภาพของพืชสายเวทมนตร์ การสะกดจิต และการแปลงร่าง', 'พืชสายเวทมนตร์ สะกดจิต และเปลี่ยนซอมบี้ (เช่น Hypno-shroom, Caulipower)', 'https://i.postimg.cc/rRKD1z4v/Screenshot-2569-09-18-at-11-20-46.png'),
(8, 'Fila-mint', 'เพิ่มพลังทำลายล้างและการช็อตกระจายของพืชสายไฟฟ้า', 'พืชสายพลังงานไฟฟ้าและการช็อตกระจาย (เช่น Lightning Reed, Electric Reed)', 'https://i.postimg.cc/bGgr41HV/Screenshot-2569-09-18-at-11-20-08.png'),
(9, 'Ail-mint', 'เพิ่มความแรงพิษและระยะเวลาความเสียหายต่อเนื่องของพืชสายพิษ', 'พืชสายพิษ ก๊าซพิษ และทำความเสียหายต่อเนื่อง (เช่น Puff-shroom, Goo Peashooter)', 'https://i.postimg.cc/bSsZxdnC/Screenshot-2569-09-18-at-11-20-41.png'),
(10, 'Contain-mint', 'เพิ่มระยะเวลาการสตั้น การผลัก และการถ่วงเวลาซอมบี้', 'พืชสายควบคุมพื้นที่ ถ่วงเวลา และชะลอซอมบี้ (เช่น Stallia, Blover)', 'https://i.postimg.cc/RqLmdvdX/Screenshot-2569-09-18-at-11-31-59.png'),
(11, 'Pepper-mint', 'เพิ่มพลังทำลายของพืชสายไฟ และช่วยละลายความเย็นบนสนาม', 'พืชสายไฟ ความร้อน และการละลายน้ำแข็ง (เช่น Jalapeno, Fire Peashooter)', 'https://i.postimg.cc/jWc2ByQm/Screenshot-2569-09-18-at-11-20-15.png'),
(12, 'Reinforce-mint', 'เพิ่มพลังชีวิตสูงสุดและกระตุ้น Plant Food ให้พืชสายป้องกันทันที', 'พืชสายเกราะ ป้องกัน และพลังชีวิตสูง (เช่น Wall-nut, Tall-nut)', 'https://i.postimg.cc/SXdRHc7H/Screenshot-2569-09-18-at-11-20-22.png'),
(13, 'Spear-mint', 'เพิ่มพลังทำลายของพืชสายทิ่มแทง/เจาะเกราะ และสร้างหนามบนสนาม', 'พืชสายทิ่มแทง เจาะเกราะ และกับดักพื้น (เช่น Spikeweed, Laser Bean)', 'https://i.postimg.cc/fkfsCMCq/Screenshot-2569-09-18-at-11-32-22.png'),
(14, 'Winter-mint', 'เพิ่มระยะเวลาการแช่แข็ง และการสโลว์ซอมบี้ของพืชสายน้ำแข็ง', 'พืชสายน้ำแข็ง แช่แข็ง และการสโลว์ (เช่น Iceberg Lettuce, Snow Pea)', 'https://i.postimg.cc/RqLmdvdX/Screenshot-2569-09-18-at-11-31-59.png');

-- --------------------------------------------------------

--
-- Table structure for table `worlds`
--

CREATE TABLE `worlds` (
  `world_id` int(11) NOT NULL,
  `world_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worlds`
--

INSERT INTO `worlds` (`world_id`, `world_name`) VALUES
(1, 'Ancient Egypt'),
(2, 'Pirate Seas'),
(3, 'Wild West'),
(4, 'Far Future'),
(5, 'Dark Ages'),
(6, 'Big Wave Beach'),
(7, 'Frostbite Caves'),
(8, 'Lost City'),
(9, 'Jurassic Marsh'),
(10, 'Modern Day'),
(11, 'Neon Mixtape Tour');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`plant_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`types_id`);

--
-- Indexes for table `worlds`
--
ALTER TABLE `worlds`
  ADD PRIMARY KEY (`world_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `plant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `types_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `worlds`
--
ALTER TABLE `worlds`
  MODIFY `world_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
