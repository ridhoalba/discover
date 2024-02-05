-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: discover
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `suku`
--

DROP TABLE IF EXISTS `suku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `suku` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usersId` int NOT NULL,
  `namaSuku` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambarSuku` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsiSuku` text COLLATE utf8mb4_general_ci NOT NULL,
  `asalSuku` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlahPenduduk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namaMakananAdat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambarMakananAdat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsiMakanan` text COLLATE utf8mb4_general_ci NOT NULL,
  `namaPakaianAdat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambarPakaianAdat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsiPakaianAdat` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idUserDanSuku` (`usersId`),
  CONSTRAINT `idUserDanSuku` FOREIGN KEY (`usersId`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suku`
--

LOCK TABLES `suku` WRITE;
/*!40000 ALTER TABLE `suku` DISABLE KEYS */;
/*!40000 ALTER TABLE `suku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uniqueId` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-05  0:44:44
