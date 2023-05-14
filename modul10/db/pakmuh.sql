-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pakmuh
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `buku_tamu`
--

DROP TABLE IF EXISTS `buku_tamu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buku_tamu` (
  `ID_BT` int(10) NOT NULL,
  `NAMA` char(200) DEFAULT NULL,
  `EMAIL` char(50) DEFAULT NULL,
  `ISI` text DEFAULT NULL,
  PRIMARY KEY (`ID_BT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku_tamu`
--

LOCK TABLES `buku_tamu` WRITE;
/*!40000 ALTER TABLE `buku_tamu` DISABLE KEYS */;
INSERT INTO `buku_tamu` VALUES (1,'DIMAS UKIN','dimasukin@gmail.com','selamat atas pernikahannya'),(2,'DIMAS PONOROGO','dimpon@gmail.com','semoga berbahagia');
/*!40000 ALTER TABLE `buku_tamu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formlogin`
--

DROP TABLE IF EXISTS `formlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formlogin` (
  `username` char(20) DEFAULT NULL,
  `password` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formlogin`
--

LOCK TABLES `formlogin` WRITE;
/*!40000 ALTER TABLE `formlogin` DISABLE KEYS */;
INSERT INTO `formlogin` VALUES ('alifbudiman','123456alif');
/*!40000 ALTER TABLE `formlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liga`
--

DROP TABLE IF EXISTS `liga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `liga` (
  `Kode` text NOT NULL,
  `Negara` text NOT NULL,
  `Champion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liga`
--

LOCK TABLES `liga` WRITE;
/*!40000 ALTER TABLE `liga` DISABLE KEYS */;
INSERT INTO `liga` VALUES ('Jer','Jerman',4),('Spa','Spanyol',3),('Eng','English',3);
/*!40000 ALTER TABLE `liga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mydata`
--

DROP TABLE IF EXISTS `mydata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mydata` (
  `Id` int(4) DEFAULT NULL,
  `Nama` char(30) DEFAULT NULL,
  `Jkel` char(30) DEFAULT NULL,
  `Email` char(40) DEFAULT NULL,
  `Alamat` char(50) DEFAULT NULL,
  `Kota` char(20) DEFAULT NULL,
  `Pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mydata`
--

LOCK TABLES `mydata` WRITE;
/*!40000 ALTER TABLE `mydata` DISABLE KEYS */;
INSERT INTO `mydata` VALUES (1,'Alif Budiman','Laki-Laki','alifbudiman@gmail.com','JL. Jatirawang','Kota Padang','ga tau capek, mau beli truck aja'),(2,'Fajar kurnia','Laki-laki','fajarjerokun@tuludun.com','JL. Menuju akherat','Kota Bawah Tahanh','Saya seorang kapiten');
/*!40000 ALTER TABLE `mydata` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-13 15:23:46
