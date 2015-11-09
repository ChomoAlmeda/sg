CREATE DATABASE  IF NOT EXISTS `scalidad` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `scalidad`;
-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (i686)
--
-- Host: 127.0.0.1    Database: scalidad
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
  `IdArea` int(5) NOT NULL AUTO_INCREMENT,
  `IdSistema` int(5) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `PaginaWeb` varchar(70) NOT NULL,
  PRIMARY KEY (`IdArea`),
  KEY `IdSistemaAre` (`IdSistema`),
  CONSTRAINT `IdSistemaAre` FOREIGN KEY (`IdSistema`) REFERENCES `cd_sistemas` (`IdSistema`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ab_areas`
--

LOCK TABLES `ab_areas` WRITE;
/*!40000 ALTER TABLE `ab_areas` DISABLE KEYS */;
INSERT INTO `ab_areas` VALUES (1,1,'Contraloria General','1'),(2,1,'Coordinación de Obras','1'),(3,1,'Departamento de Compras','1'),(4,1,'Desarrollo de Sistemas','1'),(5,1,'Dirección de Desarrollo y Gestión de Recursos Huma','1'),(6,1,'Dirección de Planeación y Desarrollo Académico','1'),(7,1,'Dirección General de Administración','1'),(8,1,'Dirección de Servicios Escolares','1'),(9,2,'Sistema Bibliotecario','1'),(10,1,'Tesorería General','1'),(11,4,'Vinculación y Desarrollo Empresarial','1'),(12,1,'Coordinación de Calidad','1'),(13,1,'Invitado','0'),(14,1,'Rectoría','0'),(15,1,'Secretaría General','1'),(16,1,'Dirección Jurídica','1'),(17,1,'Coordinación de Relaciones Laborales','1'),(18,1,'Comunicación Social','1'),(19,1,'Dirección de Extensión y Servicios Universitarios','0'),(20,1,'Informática','1'),(21,1,'Sistema de Universidad Virtual','0'),(22,5,'Centro de Desarrollo Empresarial FECA','0'),(23,1,'Dirección de Difusión Cultural','0'),(24,1,'Radio Universidad','0'),(25,1,'Editorial UJED','0'),(26,1,'T.V. UJED','0'),(27,1,'CEDDU','0'),(28,1,'Museo Regional de Durango - UJED','0'),(29,1,'Coordinación de Relaciones Publicas','1'),(30,1,'Facultad de Ciencias Químicas Durango','0'),(31,1,'Facultad de Trabajo Social','0'),(32,1,'Facultad de Ciencias Forestales','0'),(33,1,'Laboratorio Humberto Garza Ulloa','0'),(34,1,'Direccion de Telecomunicaciones e Informatica','1'),(35,1,'Libreria UJED','');
/*!40000 ALTER TABLE `ab_areas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-09 13:05:43
