CREATE DATABASE  IF NOT EXISTS `formulario-ellos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `formulario-ellos`;
-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: formulario-ellos
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `mensagem` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Thiago','thiagodesousarocha1311@gmail.com','21995112602','Esta é uma mensagem'),(2,'Thiago','thiagodesousarocha1311@gmail.com','21995112602','Esta é minha mensagem!'),(3,'Teste','Teste@gmail.com','219999999','Este texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste tex'),(4,'Teste','Teste@gmail.com','219999999','Este texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste tex'),(5,'Teste','Teste@gmail.com','219999999','Este texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste tex'),(6,'Teste','Teste@gmail.com','219999999','Este texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste tex'),(7,'Teste','Teste@gmail.com','219999999','Este texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste tex'),(8,'Teste','Teste@gmail.com','219999999','Este texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste tex'),(9,'Teste','Teste@gmail.com','219999999','Este texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste tex'),(10,'Teste','Teste@gmail.com','219999999','Este texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste texto é muito longoEste tex'),(26,'dsadsa','thiagodesousarocha1311@gmail.com','dsdasfasf','dsadsadsad'),(27,'dsadsa','thiagodesousarocha1311@gmail.com','dsdasfasf','dsadsadsad'),(28,'dsadsa','thiagodesousarocha1311@gmail.com','dsdasfasf','dsadsadsad'),(29,'dsadsa','thiagodesousarocha1311@gmail.com','dsdasfasf','dsadsadsad'),(30,'dsadsa','thiagodesousarocha1311@gmail.com','dsdasfasf','dsadsadsad'),(31,'dsadsa','thiagodesousarocha1311@gmail.com','dsdasfasf','dsadsadsad'),(32,'dsadsa','thiagodesousarocha1311@gmail.com','dsdasfasf','dsadsadsad'),(33,'dsadsa','thiagodesousarocha1311@gmail.com','dsdasfasf','dsadsadsad'),(34,'Thiago','thiagodesousarocha1311@gmail.com','21995112602','Teste'),(35,'Thiago','thiagodesousarocha1311@gmail.com','sdsad','teste'),(36,'Thiago','thiagodesousarocha1311@gmail.com','21995112602','Teste js'),(37,'Thiago','thiagodesousarocha1311@gmail.com','21995112602','Teste js'),(38,'Thiago','thiagodesousarocha1311@gmail.com','21995112602','Teste js'),(39,'Thiago','thiagodesousarocha1311@gmail.com','21995112602','Teste js'),(40,'Thiago','thiagodesousarocha1311@gmail.com','21995112602','Teste js'),(41,'Thiago','thiagodesousarocha1311@gmail.com','21995112602','Teste js'),(42,'Thiago','thiagodesousarocha1311@gmail.com','21995112602','Teste js'),(43,'Thiago','thiagodesousarocha1311@gmail.com','21995112602','Está é uma mensagem');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-22 19:35:38
