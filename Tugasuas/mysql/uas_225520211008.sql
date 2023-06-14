-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: uas_225520211008
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
-- Table structure for table `daftar_anggota`
--

DROP TABLE IF EXISTS `daftar_anggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daftar_anggota` (
  `id` int(11) DEFAULT NULL,
  `id_agt` char(10) NOT NULL,
  `nama` char(100) DEFAULT NULL,
  `status` enum('active','unactive') DEFAULT NULL,
  PRIMARY KEY (`id_agt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_anggota`
--

LOCK TABLES `daftar_anggota` WRITE;
/*!40000 ALTER TABLE `daftar_anggota` DISABLE KEYS */;
INSERT INTO `daftar_anggota` VALUES (1,'A001','Ali Baba','active'),(2,'A002','Fatimah','active'),(3,'A003','Zulkarnain','active'),(4,'A004','Alif budiman','unactive');
/*!40000 ALTER TABLE `daftar_anggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laporan_pinjaman`
--

DROP TABLE IF EXISTS `laporan_pinjaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laporan_pinjaman` (
  `id` int(11) NOT NULL,
  `no_bukti` char(10) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `id_agt` char(10) DEFAULT NULL,
  `nama` char(100) DEFAULT NULL,
  `jumlah_pinjaman` int(11) DEFAULT NULL,
  `lama_pinjaman` int(11) DEFAULT NULL,
  `bunga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laporan_pinjaman`
--

LOCK TABLES `laporan_pinjaman` WRITE;
/*!40000 ALTER TABLE `laporan_pinjaman` DISABLE KEYS */;
INSERT INTO `laporan_pinjaman` VALUES (1,'P001','2023-12-01','A001','ali baba',10000000,36,10),(2,'P002','2023-12-01','A002','Fatimah',50000000,48,9),(3,'P003','2023-12-01','A003','Zulkarnain',120000000,90,8);
/*!40000 ALTER TABLE `laporan_pinjaman` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-10 20:49:01
