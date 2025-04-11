-- MySQL dump 10.13  Distrib 8.0.40, for Linux (x86_64)
--
-- Host: localhost    Database: projetweb
-- ------------------------------------------------------
-- Server version	8.0.40-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bike_parkings`
--

DROP TABLE IF EXISTS `bike_parkings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bike_parkings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_spots` int NOT NULL,
  `available_spots` int NOT NULL,
  `is_open` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bike_parkings`
--

LOCK TABLES `bike_parkings` WRITE;
/*!40000 ALTER TABLE `bike_parkings` DISABLE KEYS */;
INSERT INTO `bike_parkings` VALUES (1,'Parking Vélos',30,21,1,'2025-04-10 11:54:41','2025-04-10 11:54:41');
/*!40000 ALTER TABLE `bike_parkings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cameras`
--

DROP TABLE IF EXISTS `cameras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cameras` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_on` tinyint(1) NOT NULL DEFAULT '0',
  `battery_level` int NOT NULL DEFAULT '100',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cameras`
--

LOCK TABLES `cameras` WRITE;
/*!40000 ALTER TABLE `cameras` DISABLE KEYS */;
INSERT INTO `cameras` VALUES (1,'Caméra PAU E109','PAU E109',0,72,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(2,'Caméra PAU E209','PAU E209',0,69,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(3,'Caméra PAU E309','PAU E309',0,64,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(4,'Caméra PAU E409','PAU E409',0,65,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(5,'Caméra PAU E509','PAU E509',0,84,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(6,'Caméra Bureau FASSI DIEUDONNE','Bureau FASSI DIEUDONNE',0,51,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(7,'Caméra Bureau DECOURCHELLE INES','Bureau DECOURCHELLE INES',0,78,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(8,'Caméra Hall Principal','Hall Principal',0,34,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(9,'Caméra Salle des Associations','Salle des Associations',0,97,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(10,'Caméra Cafétéria','Cafétéria',0,66,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(11,'Caméra Bibliothèque','Bibliothèque',0,69,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(12,'Caméra Laboratoire de Sciences','Laboratoire de Sciences',0,79,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(13,'Caméra Salle Informatique','Salle Informatique',0,61,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(14,'Caméra Gymnase','Gymnase',0,22,'2025-04-10 11:54:41','2025-04-10 11:54:41');
/*!40000 ALTER TABLE `cameras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coffee_machines`
--

DROP TABLE IF EXISTS `coffee_machines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coffee_machines` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_on` tinyint(1) NOT NULL DEFAULT '1',
  `products` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coffee_machines`
--

LOCK TABLES `coffee_machines` WRITE;
/*!40000 ALTER TABLE `coffee_machines` DISABLE KEYS */;
INSERT INTO `coffee_machines` VALUES (1,'Distributeur Hall Principal 1','Hall Principal',1,'{\"expresso\": {\"price\": 1, \"quantity\": 91}, \"cafe_latte\": {\"price\": 1.8, \"quantity\": 69}, \"cafe_caramel\": {\"price\": 2, \"quantity\": 84}, \"cafe_noisette\": {\"price\": 1.2, \"quantity\": 100}, \"double_expresso\": {\"price\": 1.5, \"quantity\": 62}}','2025-04-10 11:54:41','2025-04-10 11:54:41'),(2,'Distributeur Hall Principal 2','Hall Principal',1,'{\"expresso\": {\"price\": 1, \"quantity\": 72}, \"cafe_latte\": {\"price\": 1.8, \"quantity\": 91}, \"cafe_caramel\": {\"price\": 2, \"quantity\": 60}, \"cafe_noisette\": {\"price\": 1.2, \"quantity\": 94}, \"double_expresso\": {\"price\": 1.5, \"quantity\": 80}}','2025-04-10 11:54:41','2025-04-10 11:54:41');
/*!40000 ALTER TABLE `coffee_machines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'PAU E109','TD','ING1 GM Pau S2 Promo','Stat Inf TD S2',NULL,'2025-04-14 08:00:00','2025-04-14 09:30:00','2025-04-10 11:54:41','2025-04-10 11:54:41'),(2,'PAU E109','TD','ING1 GM Pau S2 Promo','Gestion de l\'entreprise',NULL,'2025-04-14 08:00:00','2025-04-14 09:30:00','2025-04-10 11:54:41','2025-04-10 11:54:41'),(3,'PAU E109','TD','ING1 GM Pau S2 Groupe 1','Ana Num CM S2',NULL,'2025-04-14 09:45:00','2025-04-14 11:15:00','2025-04-10 11:54:41','2025-04-10 11:54:41'),(4,'PAU E109','Java','DECOURCHELLE INES','41p',NULL,'2025-04-14 08:00:00','2025-04-14 11:15:00','2025-04-10 11:54:41','2025-04-10 11:54:41'),(5,'PAU E209','TD','ING1 GM Pau S2 Promo','LV1',NULL,'2025-04-14 14:15:00','2025-04-14 15:45:00','2025-04-10 11:54:41','2025-04-10 11:54:41'),(6,'PAU E209','TD','ING1 GM Pau S2 Promo','Dev Web S2','FASSI DIEUDONNE','2025-04-14 14:15:00','2025-04-14 17:30:00','2025-04-10 11:54:41','2025-04-10 11:54:41');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `display_panels`
--

DROP TABLE IF EXISTS `display_panels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `display_panels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `display_panels`
--

LOCK TABLES `display_panels` WRITE;
/*!40000 ALTER TABLE `display_panels` DISABLE KEYS */;
INSERT INTO `display_panels` VALUES (1,'Panneau PAU E109','PAU E109','off','Bienvenue dans la salle PAU E109','2025-04-10 11:54:41','2025-04-10 11:54:41'),(2,'Panneau PAU E209','PAU E209','off','Bienvenue dans la salle PAU E209','2025-04-10 11:54:41','2025-04-10 11:54:41'),(3,'Panneau PAU E309','PAU E309','off','Bienvenue dans la salle PAU E309','2025-04-10 11:54:41','2025-04-10 11:54:41'),(4,'Panneau PAU E409','PAU E409','off','Bienvenue dans la salle PAU E409','2025-04-10 11:54:41','2025-04-10 11:54:41'),(5,'Panneau PAU E509','PAU E509','off','Bienvenue dans la salle PAU E509','2025-04-10 11:54:41','2025-04-10 11:54:41'),(6,'Panneau Bureau FASSI DIEUDONNE','Bureau FASSI DIEUDONNE','off','Bienvenue dans la salle Bureau FASSI DIEUDONNE','2025-04-10 11:54:41','2025-04-10 11:54:41'),(7,'Panneau Bureau DECOURCHELLE INES','Bureau DECOURCHELLE INES','off','Bienvenue dans la salle Bureau DECOURCHELLE INES','2025-04-10 11:54:41','2025-04-10 11:54:41'),(8,'Panneau Hall Principal','Hall Principal','off','Bienvenue dans la salle Hall Principal','2025-04-10 11:54:41','2025-04-10 11:54:41'),(9,'Panneau Salle des Associations','Salle des Associations','off','Bienvenue dans la salle Salle des Associations','2025-04-10 11:54:41','2025-04-10 11:54:41'),(10,'Panneau Cafétéria','Cafétéria','off','Bienvenue dans la salle Cafétéria','2025-04-10 11:54:41','2025-04-10 11:54:41'),(11,'Panneau Bibliothèque','Bibliothèque','off','Bienvenue dans la salle Bibliothèque','2025-04-10 11:54:41','2025-04-10 11:54:41'),(12,'Panneau Laboratoire de Sciences','Laboratoire de Sciences','off','Bienvenue dans la salle Laboratoire de Sciences','2025-04-10 11:54:41','2025-04-10 11:54:41'),(13,'Panneau Salle Informatique','Salle Informatique','off','Bienvenue dans la salle Salle Informatique','2025-04-10 11:54:41','2025-04-10 11:54:41'),(14,'Panneau Gymnase','Gymnase','off','Bienvenue dans la salle Gymnase','2025-04-10 11:54:41','2025-04-10 11:54:41');
/*!40000 ALTER TABLE `display_panels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `heaters`
--

DROP TABLE IF EXISTS `heaters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `heaters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_on` tinyint(1) NOT NULL DEFAULT '0',
  `current_temperature` double NOT NULL DEFAULT '20',
  `target_temperature` double NOT NULL DEFAULT '21',
  `mode` enum('chauffage','climatisation') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'chauffage',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `heaters`
--

LOCK TABLES `heaters` WRITE;
/*!40000 ALTER TABLE `heaters` DISABLE KEYS */;
INSERT INTO `heaters` VALUES (1,'Chauffage Central','Chauffage Central',0,20,21,'chauffage','2025-04-10 11:54:41','2025-04-10 11:54:41');
/*!40000 ALTER TABLE `heaters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lights`
--

DROP TABLE IF EXISTS `lights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lights` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_on` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lights`
--

LOCK TABLES `lights` WRITE;
/*!40000 ALTER TABLE `lights` DISABLE KEYS */;
INSERT INTO `lights` VALUES (1,'Lumière PAU E109','PAU E109',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(2,'Lumière PAU E209','PAU E209',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(3,'Lumière PAU E309','PAU E309',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(4,'Lumière PAU E409','PAU E409',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(5,'Lumière PAU E509','PAU E509',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(6,'Lumière Bureau FASSI DIEUDONNE','Bureau FASSI DIEUDONNE',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(7,'Lumière Bureau DECOURCHELLE INES','Bureau DECOURCHELLE INES',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(8,'Lumière Hall Principal','Hall Principal',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(9,'Lumière Salle des Associations','Salle des Associations',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(10,'Lumière Cafétéria','Cafétéria',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(11,'Lumière Bibliothèque','Bibliothèque',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(12,'Lumière Laboratoire de Sciences','Laboratoire de Sciences',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(13,'Lumière Salle Informatique','Salle Informatique',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(14,'Lumière Gymnase','Gymnase',0,'2025-04-10 11:54:41','2025-04-10 11:54:41');
/*!40000 ALTER TABLE `lights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_04_05_084227_create_heaters_table',1),(5,'2024_04_05_084327_create_courses_table',1),(6,'2024_04_05_create_bike_parkings_table',1),(7,'2024_04_05_create_parkings_table',1),(8,'2024_04_06_create_display_panels_table',1),(9,'2024_04_06_create_projectors_table',1),(10,'2024_04_06_create_smoke_detectors_table',1),(11,'2025_04_04_145109_create_shutters_table',1),(12,'2025_04_05_083952_create_lights_table',1),(13,'2025_04_05_083957_create_room_occupancies_table',1),(14,'2025_04_05_085627_create_room_reservations_table',1),(15,'2025_04_10_rename_room_column_in_lights',1),(16,'2025_04_11_create_cameras_table',1),(17,'2025_04_11_create_coffee_machines_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parkings`
--

DROP TABLE IF EXISTS `parkings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parkings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_spots` int NOT NULL,
  `handicap_spots` int NOT NULL,
  `available_spots` int NOT NULL,
  `available_handicap_spots` int NOT NULL,
  `is_open` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parkings`
--

LOCK TABLES `parkings` WRITE;
/*!40000 ALTER TABLE `parkings` DISABLE KEYS */;
INSERT INTO `parkings` VALUES (1,'Parking Principal',50,4,4,0,1,'2025-04-10 11:54:41','2025-04-10 12:25:00');
/*!40000 ALTER TABLE `parkings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projectors`
--

DROP TABLE IF EXISTS `projectors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projectors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_on` tinyint(1) NOT NULL DEFAULT '0',
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'HDMI1',
  `brightness` int NOT NULL DEFAULT '50',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projectors`
--

LOCK TABLES `projectors` WRITE;
/*!40000 ALTER TABLE `projectors` DISABLE KEYS */;
INSERT INTO `projectors` VALUES (1,'Projecteur PAU E109','PAU E109',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(2,'Projecteur PAU E209','PAU E209',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(3,'Projecteur PAU E309','PAU E309',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(4,'Projecteur PAU E409','PAU E409',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(5,'Projecteur PAU E509','PAU E509',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(6,'Projecteur Bureau FASSI DIEUDONNE','Bureau FASSI DIEUDONNE',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(7,'Projecteur Bureau DECOURCHELLE INES','Bureau DECOURCHELLE INES',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(8,'Projecteur Hall Principal','Hall Principal',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(9,'Projecteur Salle des Associations','Salle des Associations',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(10,'Projecteur Cafétéria','Cafétéria',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(11,'Projecteur Bibliothèque','Bibliothèque',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(12,'Projecteur Laboratoire de Sciences','Laboratoire de Sciences',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(13,'Projecteur Salle Informatique','Salle Informatique',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(14,'Projecteur Gymnase','Gymnase',0,'HDMI1',50,'2025-04-10 11:54:41','2025-04-10 11:54:41');
/*!40000 ALTER TABLE `projectors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_occupancies`
--

DROP TABLE IF EXISTS `room_occupancies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_occupancies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'classroom',
  `people_count` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_occupancies`
--

LOCK TABLES `room_occupancies` WRITE;
/*!40000 ALTER TABLE `room_occupancies` DISABLE KEYS */;
INSERT INTO `room_occupancies` VALUES (1,'PAU E109','Salle de classe',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(2,'PAU E209','Salle de classe',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(3,'PAU E309','Salle de classe',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(4,'PAU E409','Salle de classe',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(5,'PAU E509','Salle de classe',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(6,'Bureau FASSI DIEUDONNE','Bureau',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(7,'Bureau DECOURCHELLE INES','Bureau',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(8,'Hall Principal','Espace commun',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(9,'Salle des Associations','Espace commun',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(10,'Cafétéria','Espace commun',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(11,'Bibliothèque','Espace commun',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(12,'Laboratoire de Sciences','Laboratoire',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(13,'Salle Informatique','Salle spécialisée',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(14,'Gymnase','Salle de sport',0,'2025-04-10 11:54:41','2025-04-10 11:54:41');
/*!40000 ALTER TABLE `room_occupancies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_reservations`
--

DROP TABLE IF EXISTS `room_reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_reservations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reserved_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_reservations`
--

LOCK TABLES `room_reservations` WRITE;
/*!40000 ALTER TABLE `room_reservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `room_reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shutters`
--

DROP TABLE IF EXISTS `shutters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shutters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_open` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shutters`
--

LOCK TABLES `shutters` WRITE;
/*!40000 ALTER TABLE `shutters` DISABLE KEYS */;
INSERT INTO `shutters` VALUES (1,'Volet PAU E109','PAU E109',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(2,'Volet PAU E209','PAU E209',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(3,'Volet PAU E309','PAU E309',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(4,'Volet PAU E409','PAU E409',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(5,'Volet PAU E509','PAU E509',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(6,'Volet Bureau FASSI DIEUDONNE','Bureau FASSI DIEUDONNE',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(7,'Volet Bureau DECOURCHELLE INES','Bureau DECOURCHELLE INES',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(8,'Volet Hall Principal','Hall Principal',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(9,'Volet Salle des Associations','Salle des Associations',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(10,'Volet Cafétéria','Cafétéria',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(11,'Volet Bibliothèque','Bibliothèque',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(12,'Volet Laboratoire de Sciences','Laboratoire de Sciences',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(13,'Volet Salle Informatique','Salle Informatique',0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(14,'Volet Gymnase','Gymnase',0,'2025-04-10 11:54:41','2025-04-10 11:54:41');
/*!40000 ALTER TABLE `shutters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smoke_detectors`
--

DROP TABLE IF EXISTS `smoke_detectors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `smoke_detectors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `smoke_detected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smoke_detectors`
--

LOCK TABLES `smoke_detectors` WRITE;
/*!40000 ALTER TABLE `smoke_detectors` DISABLE KEYS */;
INSERT INTO `smoke_detectors` VALUES (1,'Détecteur PAU E109','PAU E109',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(2,'Détecteur PAU E209','PAU E209',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(3,'Détecteur PAU E309','PAU E309',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(4,'Détecteur PAU E409','PAU E409',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(5,'Détecteur PAU E509','PAU E509',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(6,'Détecteur Bureau FASSI DIEUDONNE','Bureau FASSI DIEUDONNE',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(7,'Détecteur Bureau DECOURCHELLE INES','Bureau DECOURCHELLE INES',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(8,'Détecteur Hall Principal','Hall Principal',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(9,'Détecteur Salle des Associations','Salle des Associations',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(10,'Détecteur Cafétéria','Cafétéria',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(11,'Détecteur Bibliothèque','Bibliothèque',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(12,'Détecteur Laboratoire de Sciences','Laboratoire de Sciences',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(13,'Détecteur Salle Informatique','Salle Informatique',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41'),(14,'Détecteur Gymnase','Gymnase',1,0,'2025-04-10 11:54:41','2025-04-10 11:54:41');
/*!40000 ALTER TABLE `smoke_detectors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'etudiant',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@cytech.fr',NULL,'$2y$12$wPHDsAD66J5o6j4CV6vRROiRFuJKuZUkqXQW8q5GZsGF.jvyStqCy','admin',NULL,'2025-04-10 11:54:39','2025-04-10 11:54:39'),(2,'Étudiant','etudiant@cytech.fr',NULL,'$2y$12$zvBvqyCSFJo/.HD9bi0SAO3LoRuzHAGAHUePDK3LBNgv7QkKyJw1q','etudiant','qfoINJfkI09CoJGVm7vg8iNN9zt1CLhzEdtsKHSYEVx1yD3OmbhUySyVSo1g','2025-04-10 11:54:40','2025-04-10 11:54:40'),(3,'Étudiant Association','asso@cytech.fr',NULL,'$2y$12$0QJrOBxUavM8wD6qfN1B4.t0C4jbIRspDW.5Xs8pkvceoK4LEsJLu','etudiant_asso',NULL,'2025-04-10 11:54:40','2025-04-10 11:54:40'),(4,'Étudiant Handicapé','handicape@cytech.fr',NULL,'$2y$12$RLoZyzYM/KWgbaFO0EZNh.8Kl5WuIzGhJ/9xbI5IJwc7ZfrUDmWdq','etudiant_handicape',NULL,'2025-04-10 11:54:40','2025-04-10 11:54:40'),(5,'Professeur','prof@cytech.fr',NULL,'$2y$12$Vf8Z5JCOeKkKEWooTOaI7.p5ydA8MUqpPWjPjIHq29C8biSJMF/AO','professeur',NULL,'2025-04-10 11:54:40','2025-04-10 11:54:40'),(6,'Sécurité','securite@cytech.fr',NULL,'$2y$12$cjWdCGXHA0QFIqrUG5Nf8eimCWPQiv0vtr6BfWKFw9r2Bwijfd5Sa','securite',NULL,'2025-04-10 11:54:40','2025-04-10 11:54:40'),(7,'Administration','administration@cytech.fr',NULL,'$2y$12$5X4jQCbIu/AY9CsArOAkSOd6FXunZBMsFrp6wHij8vF3FBurIKdLC','administration',NULL,'2025-04-10 11:54:41','2025-04-10 11:54:41');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-04-11 14:41:05
