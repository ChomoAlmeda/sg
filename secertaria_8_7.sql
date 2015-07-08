CREATE DATABASE  IF NOT EXISTS `secretaria` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `secretaria`;
-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (i686)
--
-- Host: 127.0.0.1    Database: secretaria
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `ab_areas`
--

DROP TABLE IF EXISTS `ab_areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ab_areas` (
  `IdAreas` int(11) NOT NULL AUTO_INCREMENT,
  `Encargado` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `Correo` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`IdAreas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ab_areas`
--

LOCK TABLES `ab_areas` WRITE;
/*!40000 ALTER TABLE `ab_areas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ab_areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ab_usuarios`
--

DROP TABLE IF EXISTS `ab_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ab_usuarios` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Contra` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Tipo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ab_usuarios`
--

LOCK TABLES `ab_usuarios` WRITE;
/*!40000 ALTER TABLE `ab_usuarios` DISABLE KEYS */;
INSERT INTO `ab_usuarios` VALUES (1,'admin','abc','0'),(2,'consultaA','123','1'),(3,'consultaE','toda','2');
/*!40000 ALTER TABLE `ab_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ag_agenda`
--

DROP TABLE IF EXISTS `ag_agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ag_agenda` (
  `IdAgenda` int(11) NOT NULL AUTO_INCREMENT,
  `Evento` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `Lugar` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `FechaSis` datetime NOT NULL,
  PRIMARY KEY (`IdAgenda`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ag_agenda`
--

LOCK TABLES `ag_agenda` WRITE;
/*!40000 ALTER TABLE `ag_agenda` DISABLE KEYS */;
INSERT INTO `ag_agenda` VALUES (19,'Ceremonia de Clausura','Ciencias Quimicas','2015-06-23','10:00','0000-00-00 00:00:00'),(20,'Ceremonia de Clausura','Ciencias Quimicas','2015-06-23','10:00','0000-00-00 00:00:00'),(21,'Clausura de Ciclo escolar','Facultad de ciencias Forestales','2015-06-25','10:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `ag_agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_documentos`
--

DROP TABLE IF EXISTS `bc_documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_documentos` (
  `IdDocumentos` int(11) NOT NULL AUTO_INCREMENT,
  `IdArea` int(11) NOT NULL,
  `Hora` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Tramite` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `Observacion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `Quien` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`IdDocumentos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_documentos`
--

LOCK TABLES `bc_documentos` WRITE;
/*!40000 ALTER TABLE `bc_documentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `bc_documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `us_accesos`
--

DROP TABLE IF EXISTS `us_accesos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `us_accesos` (
  `IdAcceso` int(11) NOT NULL AUTO_INCREMENT,
  `IdUsuario` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `us_accesoscol` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdAcceso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `us_accesos`
--

LOCK TABLES `us_accesos` WRITE;
/*!40000 ALTER TABLE `us_accesos` DISABLE KEYS */;
/*!40000 ALTER TABLE `us_accesos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-08 13:25:45
