-- MySQL dump 10.16  Distrib 10.1.45-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: odoovali_db_validate1
-- ------------------------------------------------------
-- Server version	10.1.45-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `atentados`
--
DROP TABLE IF EXISTS `atentados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atentados` (
  `id` int(11) NOT NULL,
  `FechaMaquina` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FechaVence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FechaVenceNueva` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ClienteId` int(11) NOT NULL,
  `HashId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Exitoso` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locationhref` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atentados`
--

LOCK TABLES `atentados` WRITE;
/*!40000 ALTER TABLE `atentados` DISABLE KEYS */;
INSERT INTO `atentados` VALUES (91806,'2017/08/01','2050-12-31','2050-12-31',4,'eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==',1,'2017-08-01 13:02:04','2017-08-01 13:02:04','http://192.168.2.205/calendario/'),(91807,'2017/08/02','2050-12-31','2050-12-31',4,'eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==',1,'2017-08-02 13:02:51','2017-08-02 13:02:51','http://192.168.2.205/calendario/'),(91808,'2017/08/03','2050-12-31','2050-12-31',4,'eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==',1,'2017-08-03 14:35:56','2017-08-03 14:35:56','http://192.168.2.205/calendario/'),(91809,'2017/08/04','2050-12-31','2050-12-31',4,'eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==',1,'2017-08-04 14:36:22','2017-08-04 14:36:22','http://192.168.2.205/calendario/'),(91810,'2017/08/07','2050-12-31','2050-12-31',4,'eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==',1,'2017-08-07 09:09:55','2017-08-07 09:09:55','http://192.168.2.205/calendario/'),(91811,'2017/08/08','2050-12-31','2050-12-31',4,'eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==',1,'2017-08-08 09:56:47','2017-08-08 09:56:47','http://192.168.2.205/calendario/'),(91812,'2017/08/09','2050-12-31','2050-12-31',4,'eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==',1,'2017-08-09 10:00:24','2017-08-09 10:00:24','http://192.168.2.205/calendario/'),(91813,'2017/08/10','2050-12-31','2050-12-31',4,'eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==',1,'2017-08-10 16:13:47','2017-08-10 16:13:47','http://192.168.2.205/calendario/'),(91814,'2017/08/11','2050-12-31','2050-12-31',4,'eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==',1,'2017-08-11 16:14:34','2017-08-11 16:14:34','http://192.168.2.205/calendario/'),(91815,'2017/08/14','1999-01-01','2050-12-31',4,'eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==',0,'2017-08-14 07:55:40','2017-08-14 07:55:40','http://itsservers.dyndns.org:2010/?fullscreen=true'),(91816,'2017/08/15','2050-12-31','2050-12-31',4,'eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==',1,'2017-08-15 11:11:32','2017-08-15 11:11:32','http://192.168.2.205/calendario/'),(0,'2017/08/17','2050-12-31','2050-12-31',4,'eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==',0,'2017-08-17 13:18:47','2017-08-17 13:18:47','http://192.168.2.205/#');
/*!40000 ALTER TABLE `atentados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HashId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FechaVence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `HostURL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HashId2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (3,'Odoo Local Test V9','8095559999','edd@hot.com','eyJpdiI6InZ6STdqd1VwT3BNYlZDSTdVdk4zU1E9PSIsInZhbHVlIjoiVTk4NEZOdUFnUTFcL21WTXE3TXl5enh3bjRiVkNad0tZSlhwbk9kSml5R2M9IiwibWFjIjoiODQyYTMzZGI4MzFkMjNjNjA2YTA1MTg5NDM5ZjFlMzc2ODkyNTZjY2RmMDIxMzU4ZWQ1ZmNlNDRkZmI4YTI0NSJ9','2016-09-24','2016-05-09 17:20:12','2016-05-11 20:12:55','http://localhost:8001','eyJpdiI6IkRQcXpcL0UwazVJcVR5dkM1Yk1TVktRPT0iLCJ2YWx1ZSI6IjZkQXptcGZVWEJUajE3XC9PRFQ3M09TZ2p0OWVcL3FnRWlzTGxNMk9aTjBEUT0iLCJtYWMiOiI2YmRhZjY4YmE3MmJhM2FiNTlhNThmMjM0YmEyZjhiNjQ0OWI0MWFlOTdkMDQ3MjllZjdmOGU4ZTdjYWFlYzM3In0='),(1,'Odoo Local Test V8','809-520-8053','pedro@hotmail.com','eyJpdiI6Ilp6ZVcrZzM4NDVaK3R0TkRBN3FXNFE9PSIsInZhbHVlIjoia2FMOWd0VUc5a2tJcmY5c0JIZjRuakJSSXJZVERNZHV1Q3VSU1pmK2Erdz0iLCJtYWMiOiI4YzAyODBhOGM3NzE0ZDgyZjA2N2U0MzhlNjk2OGMyM2JkMDFmMTVmMmE1OGE1NWQxNTk3MTdjYjcwNzhlMDIyIn0=','2017-05-06','2016-05-06 03:15:41','2016-05-11 20:13:26','http://localhost:7069','eyJpdiI6InY3dSszcGg4RGF0OGRtb1hVRE4zdHc9PSIsInZhbHVlIjoibXdkYlZIQUJoc1kzdER0WmxYMFUwcEVJejlPTWk4VEVKZGphUjVOQk5DWT0iLCJtYWMiOiJhZTNiOGJjYjU1MmY0MzU5ZDdmM2JlYTVlMjEzM2I0MDNjMWQ0ZTYwNjQ4ZjdmZWM1ZThiNmRhZmNhZTViZDFlIn0='),(4,'Ivan Cabrera','(829) 714-9365','icabrera@its.com.do','eyJpdiI6ImgwSjlVd1ZcLzVsRFlTSTFpbDM4YWxnPT0iLCJ2YWx1ZSI6IjI5b0g3bE1NXC9JaEZja1lcL0xRVlhkTXBabitnV0M0RlwvOTZaNjNlazBcL0p3PSIsIm1hYyI6IjVhNjM2NTQzYmM3ZmZhMWY0ODJiMDU5MTUzY2FhNjdiOTJjYzA4YTBmOTA3YmE0ZjljMDI0OTE5MjhjNmRlMWUifQ==','2050-12-31','2016-06-14 15:13:52','2017-01-02 09:52:40','http://192.168.2.205','eyJpdiI6InhqVzNIMkhyVVl5TUpCaXY3SzhzYnc9PSIsInZhbHVlIjoiK3NNZHpvWDVPeDIrcDg1c0JXMGlmeU1vZEVnZE43QlJJNlNXN1p3NUhtaz0iLCJtYWMiOiI0NTEwOTk2NDNlMmM5YmZhMzU4YzBiZjk1M2I2ZTMzODU0OGRjOGQ4ZWNiMDMwZDg5YmNkZTQ3NWJmMjQ3YjRlIn0='),(2,'Pedro UAU','809-520-8053','pedro@oal.com','eyJpdiI6IlZBZ3hPMWVmOWxFbWpwSXdmWE4wOEE9PSIsInZhbHVlIjoiaHg2YzVZeHc0SnoxTHpkU0pLWGoyVWxQNW5BbE83UVJvdHpuSTl1ZVhyVT0iLCJtYWMiOiJjN2VlMDBjNTc5N2Q5ZTdhNDVmMzEzZjRmY2Y0ZmE1NmQ2YmY2ZThiZTFlMzUyODliNTdiMzRmNWU0NGYyNTcyIn0=','2020-01-01','2016-05-07 16:32:55','2016-05-09 11:57:32','http://localhost:8069','eyJpdiI6IjNFK2hseFNUTmRZeVY2b0lsU29mNEE9PSIsInZhbHVlIjoicHg5Q25RRlZESDBhc0tFMERDQkhhVVNqTmVTSjVRREVpcFc0V1VaZ0prST0iLCJtYWMiOiI4Yzk0ZDBlMjA3M2JiZTA2N2NlY2Q3MjkxMGM0NjdhNzk3YTBhMzZmYzc1NmIyNGRhZDk3ODQzZjc5OTgxN2ZmIn0=');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_05_05_180512_create_clientes_table',1),('2016_05_06_012857_create_atentados_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `email` (`email`),
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rolId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Edward Vinas','edwardvinas7@gmail.com','$2y$10$un0OJERYq0Jv9WwCgFk/2OekDCc2Ap8SBZRv0pYFjrZjIcrWb7o3i','OcajHMcHdjWJkm8XmT8aRif82LnLDIEX9caCA3SvlNEwETWTv0AgL116BHpt',200,'2016-05-06 04:07:18','2016-05-24 20:53:46'),(1,'Eduardo Amparo Santana Severino','eduardo_amparo@hotmail.com','$2y$10$4dlXyN/sUfxxJJSJphTrPO7AgW9qs4dDE/F4vVXg4e8DdIGMlMk2e','GhTneY8JRAGCxM9m52VpbvN5AX0TBBSi9FA7ouQ7B2BqM626vXAmGUB2hqqJ',100,'2016-05-06 02:28:48','2016-06-15 12:31:24');
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

-- Dump completed on 2020-08-02 20:45:50
