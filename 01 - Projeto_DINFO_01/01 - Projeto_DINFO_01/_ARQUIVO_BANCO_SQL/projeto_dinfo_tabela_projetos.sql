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
-- Table structure for table `tabela_projetos`
--

DROP TABLE IF EXISTS `tabela_projetos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabela_projetos` (
  `ID_Projeto` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProjeto` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `dtAbertura` timestamp NOT NULL DEFAULT current_timestamp(),
  `responsavel` int(11) NOT NULL,
  `dtConclusao` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID_Projeto`),
  KEY `fk_id_responsavel` (`responsavel`),
  CONSTRAINT `fk_id_responsavel` FOREIGN KEY (`responsavel`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabela_projetos`
--

LOCK TABLES `tabela_projetos` WRITE;
/*!40000 ALTER TABLE `tabela_projetos` DISABLE KEYS */;
INSERT INTO `tabela_projetos` VALUES (1,'Projeto DINFO 01','Conversão de dados','2020-12-10 17:08:14',2,'2021-02-07 19:28:11'),(3,'Projeto DINFO 01','Conversão de dados','2021-02-02 21:01:11',2,NULL),(4,'Projeto DINFO 03','Conversão de dados 03','2021-02-02 21:08:26',2,'2021-02-02 21:18:20'),(5,'Projeto DINFO 05','Conversão de dados 04','2021-02-02 22:08:41',2,NULL),(6,'Projeto DINFO 06','Conversão de dados 07','2021-02-02 22:17:26',2,NULL),(7,'Projeto DINFO 05','Conversão de dados 05','2021-02-02 22:17:35',2,'2021-02-02 22:17:46'),(8,'Projeto DINFO 02','Conversão de dados 00000 0000 00000000 000000 00000000000000 0000000000003','2021-02-02 22:21:06',2,NULL),(9,'Projeto DINFO 04','Conversão de dados 07 dsds asda sad','2021-02-02 22:28:51',2,NULL),(10,'Projeto DINFO 07','Conversão de dados 07','2021-02-03 00:02:20',2,NULL),(11,'Projeto DINFO 08','Conversão de dados 08','2021-02-03 00:02:47',2,NULL),(12,'Projeto DINFO 040','Conversão de dados 070','2021-02-03 00:16:36',4,NULL),(13,'Projeto DINFO 01','','2021-02-03 01:01:59',4,'2021-02-08 05:34:28'),(14,'Teste de projeto 025468','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishin','2021-02-07 13:01:03',2,NULL),(46,'Teste de projeto 2259','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishin','2021-02-08 01:58:38',4,NULL);
/*!40000 ALTER TABLE `tabela_projetos` ENABLE KEYS */;
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
