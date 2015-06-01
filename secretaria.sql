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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ab_usuarios`
--

LOCK TABLES `ab_usuarios` WRITE;
/*!40000 ALTER TABLE `ab_usuarios` DISABLE KEYS */;
INSERT INTO `ab_usuarios` VALUES (1,'Chomo','ninguna','0');
/*!40000 ALTER TABLE `ab_usuarios` ENABLE KEYS */;
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
  `Folio` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Asunto` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `Turnado` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `Estado` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
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

-- Dump completed on 2015-06-01 14:46:27
