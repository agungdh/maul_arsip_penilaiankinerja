-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: 127.0.0.1	Database: maul
-- ------------------------------------------------------
-- Server version 	5.5.5-10.1.35-MariaDB
-- Date: Fri, 22 Feb 2019 10:11:18 +0700

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
-- Table structure for table `detail_template_perilaku_kerja`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_template_perilaku_kerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_template_perilaku_kerja` int(11) NOT NULL,
  `perilaku_kerja` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_template_perilaku_kerja`
--

LOCK TABLES `detail_template_perilaku_kerja` WRITE;
/*!40000 ALTER TABLE `detail_template_perilaku_kerja` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `detail_template_perilaku_kerja` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `detail_template_perilaku_kerja` with 0 row(s)
--

--
-- Table structure for table `hari_libur`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hari_libur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `keterangan` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tanggal` (`tanggal`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hari_libur`
--

LOCK TABLES `hari_libur` WRITE;
/*!40000 ALTER TABLE `hari_libur` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `hari_libur` VALUES (13,'2019-02-21','d hdfh'),(14,'2019-02-01',NULL),(15,'2019-02-22',NULL),(16,'2019-02-23',NULL);
/*!40000 ALTER TABLE `hari_libur` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `hari_libur` with 4 row(s)
--

--
-- Table structure for table `jabatan`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatan`
--

LOCK TABLES `jabatan` WRITE;
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `jabatan` VALUES (5,'Pimpinan'),(6,'Pegawai');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `jabatan` with 2 row(s)
--

--
-- Table structure for table `output_tugas_pokok`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `output_tugas_pokok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `output` varchar(191) NOT NULL,
  `alias` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `output_tugas_pokok`
--

LOCK TABLES `output_tugas_pokok` WRITE;
/*!40000 ALTER TABLE `output_tugas_pokok` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `output_tugas_pokok` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `output_tugas_pokok` with 0 row(s)
--

--
-- Table structure for table `pangkat`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pangkat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `golongan` varchar(191) NOT NULL,
  `ruang` varchar(191) NOT NULL,
  `pangkat` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pangkat`
--

LOCK TABLES `pangkat` WRITE;
/*!40000 ALTER TABLE `pangkat` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `pangkat` VALUES (1,'I','a','Juru Muda'),(2,'I','b','Juru Muda Tingkat 1'),(3,'I','c','Juru'),(4,'I','d','Juru Tingkat 1'),(5,'II','a','Pengatur Muda'),(6,'II','b','Pengatur Muda Tingat 1'),(7,'II','c','Pengatur'),(8,'II','d','Pengatur Tingkat 1'),(9,'III','a','Penata Muda'),(10,'III','b','Penata Muda Tingkat 1'),(11,'III','c','Penata'),(12,'III','d','Penata Tingkat 1'),(13,'IV','a','Pembina'),(14,'IV','b','Pembina Tingkat 1'),(15,'IV','c','Pembina Utama Muda'),(16,'IV','d','Pembina Utama Madya'),(17,'IV','e','Pembina Utama');
/*!40000 ALTER TABLE `pangkat` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `pangkat` with 17 row(s)
--

--
-- Table structure for table `pegawai`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) NOT NULL,
  `nip` varchar(191) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_pangkat` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jabatan` (`id_jabatan`),
  KEY `id_pangkat` (`id_pangkat`),
  KEY `id_unit` (`id_unit`),
  CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`),
  CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`id_pangkat`) REFERENCES `pangkat` (`id`),
  CONSTRAINT `pegawai_ibfk_3` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegawai`
--

LOCK TABLES `pegawai` WRITE;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `pegawai` VALUES (2,'1234','1234',5,3,2),(3,'1234','12344',5,3,2);
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `pegawai` with 2 row(s)
--

--
-- Table structure for table `penilaian_prestasi`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penilaian_prestasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` year(4) NOT NULL,
  `id_pegawai_dinilai` int(11) NOT NULL,
  `id_pegawai_penilai` int(11) NOT NULL,
  `id_pegawai_atasan_penilai` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pegawai_atasan_penilai` (`id_pegawai_atasan_penilai`),
  KEY `id_pegawai_dinilai` (`id_pegawai_dinilai`),
  KEY `id_pegawai_penilai` (`id_pegawai_penilai`),
  CONSTRAINT `penilaian_prestasi_ibfk_1` FOREIGN KEY (`id_pegawai_atasan_penilai`) REFERENCES `pegawai` (`id`),
  CONSTRAINT `penilaian_prestasi_ibfk_2` FOREIGN KEY (`id_pegawai_dinilai`) REFERENCES `pegawai` (`id`),
  CONSTRAINT `penilaian_prestasi_ibfk_3` FOREIGN KEY (`id_pegawai_penilai`) REFERENCES `pegawai` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penilaian_prestasi`
--

LOCK TABLES `penilaian_prestasi` WRITE;
/*!40000 ALTER TABLE `penilaian_prestasi` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `penilaian_prestasi` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `penilaian_prestasi` with 0 row(s)
--

--
-- Table structure for table `perilaku_kerja`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perilaku_kerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_unsur_penilaian` int(11) NOT NULL,
  `perilaku_kerja` varchar(191) NOT NULL,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_unsur_penilaian` (`id_unsur_penilaian`),
  CONSTRAINT `perilaku_kerja_ibfk_1` FOREIGN KEY (`id_unsur_penilaian`) REFERENCES `unsur_penilaian` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perilaku_kerja`
--

LOCK TABLES `perilaku_kerja` WRITE;
/*!40000 ALTER TABLE `perilaku_kerja` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `perilaku_kerja` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `perilaku_kerja` with 0 row(s)
--

--
-- Table structure for table `satuan_waktu`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satuan_waktu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `satuan_waktu` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satuan_waktu`
--

LOCK TABLES `satuan_waktu` WRITE;
/*!40000 ALTER TABLE `satuan_waktu` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `satuan_waktu` VALUES (1,'Hari'),(2,'Minggu'),(3,'Bulan'),(4,'Tahun'),(6,'Jam'),(7,'Menit'),(8,'Detik');
/*!40000 ALTER TABLE `satuan_waktu` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `satuan_waktu` with 7 row(s)
--

--
-- Table structure for table `skp`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` year(4) NOT NULL,
  `id_pegawai_penilai` int(11) NOT NULL,
  `id_pegawai_dinilai` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pegawai_dinilai` (`id_pegawai_dinilai`),
  KEY `id_pegawai_penilai` (`id_pegawai_penilai`),
  CONSTRAINT `skp_ibfk_1` FOREIGN KEY (`id_pegawai_dinilai`) REFERENCES `pegawai` (`id`),
  CONSTRAINT `skp_ibfk_2` FOREIGN KEY (`id_pegawai_penilai`) REFERENCES `pegawai` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skp`
--

LOCK TABLES `skp` WRITE;
/*!40000 ALTER TABLE `skp` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `skp` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `skp` with 0 row(s)
--

--
-- Table structure for table `template_perilaku_kerja`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `template_perilaku_kerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `template_perilaku_kerja`
--

LOCK TABLES `template_perilaku_kerja` WRITE;
/*!40000 ALTER TABLE `template_perilaku_kerja` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `template_perilaku_kerja` VALUES (2,'Standar 2019'),(3,'Test 123');
/*!40000 ALTER TABLE `template_perilaku_kerja` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `template_perilaku_kerja` with 2 row(s)
--

--
-- Table structure for table `tugas_pokok`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tugas_pokok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_skp` int(11) NOT NULL,
  `tugas_pokok` text NOT NULL,
  `ak` varchar(191) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `id_output_tugas_pokok` int(11) NOT NULL,
  `kualitas_mutu` int(11) NOT NULL,
  `nilai_waktu` int(11) NOT NULL,
  `id_satuan_waktu` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_output_tugas_pokok` (`id_output_tugas_pokok`),
  KEY `id_satuan_waktu` (`id_satuan_waktu`),
  KEY `id_skp` (`id_skp`),
  CONSTRAINT `tugas_pokok_ibfk_1` FOREIGN KEY (`id_output_tugas_pokok`) REFERENCES `output_tugas_pokok` (`id`),
  CONSTRAINT `tugas_pokok_ibfk_2` FOREIGN KEY (`id_satuan_waktu`) REFERENCES `satuan_waktu` (`id`),
  CONSTRAINT `tugas_pokok_ibfk_3` FOREIGN KEY (`id_skp`) REFERENCES `skp` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tugas_pokok`
--

LOCK TABLES `tugas_pokok` WRITE;
/*!40000 ALTER TABLE `tugas_pokok` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `tugas_pokok` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tugas_pokok` with 0 row(s)
--

--
-- Table structure for table `unit`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit`
--

LOCK TABLES `unit` WRITE;
/*!40000 ALTER TABLE `unit` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `unit` VALUES (2,'test 2');
/*!40000 ALTER TABLE `unit` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `unit` with 1 row(s)
--

--
-- Table structure for table `unsur_penilaian`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unsur_penilaian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_penilaian_prestasi` int(11) NOT NULL,
  `sasaran_kerja` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_penilaian_prestasi` (`id_penilaian_prestasi`),
  CONSTRAINT `unsur_penilaian_ibfk_1` FOREIGN KEY (`id_penilaian_prestasi`) REFERENCES `penilaian_prestasi` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unsur_penilaian`
--

LOCK TABLES `unsur_penilaian` WRITE;
/*!40000 ALTER TABLE `unsur_penilaian` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `unsur_penilaian` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `unsur_penilaian` with 0 row(s)
--

--
-- Table structure for table `user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `level` enum('k','p') NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pegawai` (`id_pegawai`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `user` with 0 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Fri, 22 Feb 2019 10:11:18 +0700
