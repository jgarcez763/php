CREATE DATABASE  IF NOT EXISTS `projeto_dinfo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `projeto_dinfo`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projeto_dinfo
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

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
-- Table structure for table `tabela_atividades_projeto`
--

DROP TABLE IF EXISTS `tabela_atividades_projeto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabela_atividades_projeto` (
  `ID_Ativ_Projeto` int(11) NOT NULL AUTO_INCREMENT,
  `FK_ID_Projeto` int(11) DEFAULT NULL,
  `Fk_ID_Usuario` int(11) DEFAULT NULL,
  `Nome_Ativ` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `dtConcPrev` timestamp NOT NULL DEFAULT current_timestamp(),
  `dtConcEfet` timestamp NULL DEFAULT NULL,
  `executor` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_Ativ_Projeto`),
  KEY `FK_ID_Projeto` (`FK_ID_Projeto`),
  KEY `Fk_ID_Usuario` (`Fk_ID_Usuario`),
  CONSTRAINT `tabela_atividades_projeto_ibfk_1` FOREIGN KEY (`FK_ID_Projeto`) REFERENCES `tabela_projetos` (`ID_Projeto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tabela_atividades_projeto_ibfk_2` FOREIGN KEY (`Fk_ID_Usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabela_atividades_projeto`
--

LOCK TABLES `tabela_atividades_projeto` WRITE;
/*!40000 ALTER TABLE `tabela_atividades_projeto` DISABLE KEYS */;
INSERT INTO `tabela_atividades_projeto` VALUES (1,1,2,'teste','2021-02-18 03:00:00','2021-02-02 23:50:53',''),(2,1,2,'teste 02','2021-04-30 03:00:00','2021-02-02 23:51:23',''),(3,4,2,'teste de atividade','2021-02-01 03:00:00','2021-02-02 23:59:34',''),(10,14,2,'Teste 000000000000','2021-02-12 03:00:00','2021-02-07 13:51:51',''),(11,14,2,'Teste 0000000055555','2021-02-19 03:00:00','2021-02-07 13:56:51',''),(12,14,2,'Teste 00000000555556666','2021-02-25 03:00:00','2021-02-07 18:39:32',''),(13,14,2,'Teste 1158','2021-02-25 03:00:00','2021-02-07 18:39:58',''),(14,14,2,'variavel de teste','2021-02-25 03:00:00','2021-02-07 18:42:47',''),(15,1,2,'variavel de teste','2021-02-24 03:00:00','2021-02-07 18:53:55',''),(16,1,2,'variavel de teste 02','2021-02-24 03:00:00','2021-02-07 18:54:22',''),(17,1,2,'Teste 1158','2021-02-09 03:00:00','2021-02-07 18:55:02',''),(18,1,2,'Teste 000000000000','2021-02-19 03:00:00','2021-02-07 18:55:50',''),(19,1,2,'variavel de teste','2021-02-10 03:00:00','2021-02-07 19:01:47',''),(20,14,4,'Teste 000000000000','2021-02-24 03:00:00',NULL,''),(21,46,4,'Teste 01','2021-04-07 03:00:00','2021-02-08 16:46:18',''),(22,4,4,'Teste 1158','2021-02-20 03:00:00','2021-02-08 16:23:07','');
/*!40000 ALTER TABLE `tabela_atividades_projeto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-08 11:49:30
