-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.31 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table tour_travel.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.blogs: 6 rows
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `title`, `description`, `content`, `image`, `category_id`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Camera Backpacks', 'What to look for', ' In the best camera backpacks, you can count on having a separate pocket to keep a laptop and some extra space to store other camera accessories like lenses, SD cards, cables, external hard drives, and so on. And of course, some personal essentials like documents, passport, your phone, and so on.', 'destinations/camera.jpg', 10, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(2, 'Avoid Getting Sick', 'Tips to reduce chances of sickness', ' As basic as this sounds, this is an essential component of preventing sickness. I’m sure you’ve seen countless PSA all over the world about washing your hands during Covid-19, and that is because washing your hands with water and soap for 20 seconds does help reduce the spread of germs that cause respiratory and diarrheal infections.', 'destinations/camera.jpg', 11, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(3, 'Travel with friends', 'It’s also nice to travel with friends', ' You’ll be able to work together to plan the trip, look out for each other on nights out, and create fantastic memories together. What’s important when planning a group trip with friends is to think about everyone in the group to make sure no one is left out or unhappy and to compromise where necessary.', 'destinations/friends.jpg', 13, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(4, 'Try Local Food', 'The local cuisine can be a big part of a destination and around the world you’ll find more variety than you could ever imagine', ' To make the most of your trip and a top tip is to try local dishes and delicacies, especially if it’s something you’ll be unlikely to get back home. To find local food you could do some research in advance on what you should try, or explore and try your luck, or even go on a dedicated food tour. ', 'destinations/food.jpg', 14, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(5, 'Carry Hand Sanitizer', 'Tips to reduce chances of sickness', ' Some destinations, even those that are well developed for tourists can have questionable cleanliness. This might be because they are so busy that they naturally get dirty very quickly. So, whenever you travel then keep yourself a little bottle of sanitiser in your bag and use it before eating, or other times where necessary. This is even more important now after the Coronavirus pandemic.', 'destinations/camera.jpg', 11, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(6, 'Make copies of your passport', 'Instances where you lose your passport', ' In the event that you lose your passport, you’d have to go to an embassy and get a replacement or temporary passport. To help prove who you are and to make the process easier then make copies of your passport. You could also consider saving this in a secure place online so that you can access it easily if you ever need to.', 'destinations/camera.jpg', 12, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping structure for table tour_travel.carts
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.carts: 0 rows
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;

-- Dumping structure for table tour_travel.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.categories: 14 rows
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Family travel', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(2, 'Weekend Getaway', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(3, 'Summer', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(4, 'Explore the wild', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(5, 'The Group Tour.', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(6, 'The Gap Year.', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(7, 'Road Trip.', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(8, 'Solo travel', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(9, 'Travel with friends', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(10, 'Photography', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(11, 'Health', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(12, 'Visas', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(13, 'Friends', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(14, 'Food', '2024-04-04 11:06:38', '2024-04-04 11:06:38');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table tour_travel.checkout
CREATE TABLE IF NOT EXISTS `checkout` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.checkout: 0 rows
/*!40000 ALTER TABLE `checkout` DISABLE KEYS */;
/*!40000 ALTER TABLE `checkout` ENABLE KEYS */;

-- Dumping structure for table tour_travel.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.contacts: 0 rows
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table tour_travel.customer_info
CREATE TABLE IF NOT EXISTS `customer_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `subject` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `message` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table tour_travel.customer_info: 0 rows
/*!40000 ALTER TABLE `customer_info` DISABLE KEYS */;
INSERT INTO `customer_info` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'vivek Raj', 'test@gmail.com', 'test', 'test', '2024-04-07 06:59:19', '2024-04-07 06:59:19'),
	(2, 'test', 'test100@gmail.com', 'test', 'test', '2024-04-07 07:00:39', '2024-04-07 07:00:39');
/*!40000 ALTER TABLE `customer_info` ENABLE KEYS */;

-- Dumping structure for table tour_travel.destinations
CREATE TABLE IF NOT EXISTS `destinations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pricing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.destinations: 9 rows
/*!40000 ALTER TABLE `destinations` DISABLE KEYS */;
INSERT INTO `destinations` (`id`, `pricing`, `title`, `description`, `content`, `image`, `category_id`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'RS 15000', 'Jaipur, Rajasthan', 'Jaipur, the vibrant capital of Rajasthan, India, seduces travelers with its rich history, colorful culture, and architectural wonders. Embark on a sensual journey through this majestic city where every corner whispers tales of royalty and romance.


As the sun caresses the pink-hued walls of the iconic Hawa Mahal, or Palace of Winds, its intricate latticework casts mesmerizing shadows, enticing lovers to explore its hidden chambers and secret passages.', 'Hawamahal.jpeg', 1, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(2, 'RS 30000', 'Goa', '\r\nNestled along the sun-kissed shores of the Arabian Sea, Goa beckons travelers with its intoxicating blend of pristine beaches, vibrant culture, and colonial charm. This coastal paradise, with its palm-fringed shores and azure waters, is a haven for those seeking relaxation, adventure, and a taste of laid-back luxury.', 'Picture-perfect beaches like Baga, Calangute, and Anjuna lure sun-seekers and water enthusiasts alike, offering endless opportunities for surfing, parasailing, or simply lounging beneath swaying palms.', 'destinations/2.jpeg', 2, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(3, 'RS 20000', 'Udaipur,Rjasthan', 'Nestled amidst the enchanting Aravalli hills in the heart of Rajasthan, Udaipur is a city straight out of a fairy tale. Known as the "City of Lakes" and the "Venice of the East," Udaipur captivates visitors with its timeless beauty, regal architecture, and serene lakes', 'At its heart lies the majestic Lake Pichola, where shimmering waters reflect the towering palaces and ancient temples that grace its shores. The iconic Lake Palace, seemingly floating on the lake\'s surface like a mirage, enchants travelers with its ethereal beauty and opulent splendor.', 'destinations/3.jpeg', 1, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(4, 'Rs 19000', 'Srinagar,Jammu Kashmir', 'Nestled in the northernmost region of India, Jammu and Kashmir is a land of breathtaking beauty and cultural diversity. From the snow-capped peaks of the Himalayas to the serene valleys of Kashmir and the vibrant city life of Jammu, this region offers a captivating tapestry of experiences', 'In the heart of the Kashmir Valley lies Srinagar, the summer capital, renowned for its shimmering Dal Lake, where traditional houseboats gently glide across the tranquil waters amidst a backdrop of majestic mountains. The Mughal Gardens, with their meticulously manicured lawns and vibrant flowerbeds, offer a glimpse into the region\'s rich architectural and horticultural heritage.', 'destinations/3.jpeg', 9, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(5, 'RS 25000', 'Rishikesh,Uttrakhand', 'Nestled along the banks of the sacred Ganges River in the foothills of the Himalayas, Rishikesh is a serene sanctuary for spiritual seekers and adventure enthusiasts alike. Known as the "Yoga Capital of the World," this tranquil town exudes an aura of spirituality, with ashrams and yoga centers offering solace and guidance to those on a quest for inner peace and self-discovery.', 'The iconic Laxman Jhula and Ram Jhula suspension bridges span the Ganges, connecting the bustling markets and ancient temples of Rishikesh with the serene ashrams and meditation centers that dot the riverbanks. Visitors can stroll along these bridges, soaking in panoramic views of the river and the surrounding hills, or delve into the labyrinthine alleys of the old town, where the aroma of incense mingles with the sounds of chanting and prayer.', 'destinations/3.jpeg', 9, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(6, 'RS 79000', 'Singapore', 'Small in size, the ‘Lion City’ offers big delights', ' This tiny island city-state is a study of fusions and contrasts bursting with wonders waiting to be explored. Tranquil parks abut futuristic skyscrapers and luxe shopping malls. A thriving street food scene and world-class restaurants offer countless ways to taste and sip your way through Singapore’s culinary melting pot. Your first trip to Singapore will prove that sometimes the best things come in small packages.', 'destinations/3.jpeg', 6, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(7, 'RS 89000', 'Barcelona', 'A dreamy destination straight out of a fairytale', ' Bustling markets, tree lined blocks, and fantastical architecture cozy up to one another in this dreamy Mediterranean beach town. Paella and pintxos bars, exceptional seafood, standout local wines, a world-class arts scene, and bumping nightlife, Barcelona effortlessly blends the history of its districts with a healthy appetite for the new.', 'destinations/3.jpeg', 8, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(8, 'RS 84000', 'London', 'A regal city surrounded by a rush of modern life', ' London is layered with history, where medieval and Victorian complement a rich and vibrant modern world. The Tower of London and Westminster neighbor local pubs and markets, and time-worn rituals like the changing of the guards take place as commuters rush to catch the Tube. It’s a place where travelers can time-hop through the city, and when they’re weary, do as Londoners do and grab a “cuppa” tea.', 'destinations/3.jpeg', 5, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL),
	(9, 'RS 100,000', 'Tokyo', 'A nonstop city of thrilling contrasts', ' With its futuristic skyscrapers, unrivaled food scene, and wild nightlife, Tokyo is a rush of pure adrenaline. This vast and multifaceted city is famously cutting edge, yet its ancient Buddhist temples, vintage teahouses, and peaceful gardens offer a serene escape — and a poignant reminder of the city’s long history. And for those who know where to look, Tokyo’s smaller pleasures (secret ramen spots, shopping alleys, chill record bars) are often hiding in plain sight.', 'destinations/3.jpeg', 7, NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38', NULL);
/*!40000 ALTER TABLE `destinations` ENABLE KEYS */;

-- Dumping structure for table tour_travel.destinations_tag
CREATE TABLE IF NOT EXISTS `destinations_tag` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `destinations_id` int NOT NULL,
  `tag_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.destinations_tag: 20 rows
/*!40000 ALTER TABLE `destinations_tag` DISABLE KEYS */;
INSERT INTO `destinations_tag` (`id`, `destinations_id`, `tag_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, NULL, NULL),
	(2, 1, 2, NULL, NULL),
	(3, 2, 4, NULL, NULL),
	(4, 2, 3, NULL, NULL),
	(5, 3, 1, NULL, NULL),
	(6, 3, 4, NULL, NULL),
	(7, 1, 3, NULL, NULL),
	(8, 1, 2, NULL, NULL),
	(9, 4, 8, NULL, NULL),
	(10, 4, 1, NULL, NULL),
	(11, 5, 7, NULL, NULL),
	(12, 5, 3, NULL, NULL),
	(13, 6, 6, NULL, NULL),
	(14, 6, 8, NULL, NULL),
	(15, 7, 5, NULL, NULL),
	(16, 7, 6, NULL, NULL),
	(17, 8, 4, NULL, NULL),
	(18, 8, 8, NULL, NULL),
	(19, 9, 7, NULL, NULL),
	(20, 9, 4, NULL, NULL);
/*!40000 ALTER TABLE `destinations_tag` ENABLE KEYS */;

-- Dumping structure for table tour_travel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.failed_jobs: 0 rows
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table tour_travel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.migrations: 14 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_07_15_062452_create_destinations_table', 1),
	(5, '2020_07_15_062524_create_categories_table', 1),
	(6, '2020_07_20_115618_add_soft_deletes_to_destinations_table', 1),
	(7, '2020_07_30_053014_create_tags_table', 1),
	(8, '2020_07_30_065005_create_destinations_tag_table', 1),
	(9, '2020_09_09_135537_create_blogs_table', 1),
	(10, '2020_09_09_144805_add_soft_deletes_to_blogs_table', 1),
	(11, '2020_09_21_140407_create_payments_table', 1),
	(12, '2020_09_24_092225_create_checkout_table', 1),
	(13, '2020_09_24_094744_create_contacts_table', 1),
	(14, '2020_09_24_105229_create_carts_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table tour_travel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.password_resets: 0 rows
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table tour_travel.payments
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.payments: 0 rows
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;

-- Dumping structure for table tour_travel.recent_post
CREATE TABLE IF NOT EXISTS `recent_post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table tour_travel.recent_post: 0 rows
/*!40000 ALTER TABLE `recent_post` DISABLE KEYS */;
INSERT INTO `recent_post` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
	(1, 'Which seat to Choose on Delhi Paro Flight for Best Views', ' If you are like me you love looking out of the window of a plane. You also constantly wonder on which side of the plane are the gorgeous views. I was curious about my Delhi Paro Druk Air flight and randomly choose my seat and I was rewarded but let me ta', '2024-04-07 11:49:38', '2024-04-07 11:49:39'),
	(2, 'Youth Historical Foundation, Maharashtra- In quest of Identity through Heritage and Culture', 'had the pleasure of interacting with Ilaan Garware, a class 12th student with IB board. Along with his schoolmates, he has launched the Youth Historical Foundation Maharashtra, a body aimed at kindling a profound appreciation for Maharashtra’s rich herita', '2024-04-07 11:50:26', '2024-04-07 11:50:27'),
	(3, 'High Tea at the Rambagh Palace, Jaipur', 'It turned out to be a long break from blogging! All my breaks are unintentional though. Before I start on my fabulous experience of having a high tea at the Rambagh Palace, Jaipur I need to get two things out of the way, actually three. One I need to make', '2024-04-07 11:50:48', '2024-04-07 11:50:49');
/*!40000 ALTER TABLE `recent_post` ENABLE KEYS */;

-- Dumping structure for table tour_travel.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.tags: 8 rows
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Travel', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(2, 'Cruise', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(3, 'Beach', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(4, 'Adventure', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(5, 'Sunset', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(6, 'Travelphotography', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(7, 'Nature', '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(8, 'Wanderlust', '2024-04-04 11:06:38', '2024-04-04 11:06:38');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping structure for table tour_travel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('employee','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'employee',
  `about` text COLLATE utf8mb4_unicode_ci,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tour_travel.users: 3 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `role`, `about`, `username`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Sam Tea', 'samadmin@gmail.com', 'admin', NULL, NULL, NULL, NULL, '$2y$10$5O0s24YBdyKddOD62pfBz.hlLFCDRYSoWSjN4eJBcZPYdU8IkiIae', NULL, '2024-04-04 11:06:38', '2024-04-04 11:06:38'),
	(2, 'vinayak', 'vinayaksen2448@gmail.com', 'admin', NULL, NULL, NULL, NULL, '$2y$10$Cpq4/lCVF8Xp.xxiN0NDf.nH6aGu1KfSek7GISR4Y6eS37hNtLRRy', NULL, '2024-04-04 13:42:25', '2024-04-05 11:59:14'),
	(3, 'vikram', 'vikramkumar91182@gmail.com', 'employee', NULL, NULL, NULL, NULL, '$2y$10$oxNFsQ/X1cDokCUIqO.tueNb3d/OdzWChaILJEIbxeqh7eUuqfORO', NULL, '2024-04-05 13:38:51', '2024-04-05 13:38:51'),
	(4, 'vivek raj', 'viv.ahs@gmail.com', 'employee', NULL, NULL, NULL, NULL, '$2y$10$GxwzTMeVmkwHU4.T.UpWmOAtwE8qbDcemPmsx3k0jK/dA3zE4KTUi', NULL, '2024-04-07 04:08:22', '2024-04-07 04:08:22'),
	(5, 'tests', 'sales_staff@gmail.com', 'employee', NULL, NULL, NULL, NULL, '$2y$10$fgqaJk92Py389fVeLM92rOIImY9Gbcq.o6eZg.nvsYH6vdbtKMGgq', NULL, '2024-04-07 04:11:43', '2024-04-07 04:11:43'),
	(6, 'tests', 'sales_stafdf@gmail.com', 'employee', NULL, NULL, NULL, NULL, '$2y$10$R/CelUvy0Hpz2a67f7hdfu52swWI6EqpiodamsriAx4xmtFTuMas2', NULL, '2024-04-07 04:15:47', '2024-04-07 04:15:47');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
