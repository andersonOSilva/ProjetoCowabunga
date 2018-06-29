-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: dbprojetocowabunga
-- ------------------------------------------------------
-- Server version	5.6.10-log

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
-- Table structure for table `tbl_imagens_produto`
--

DROP TABLE IF EXISTS `tbl_imagens_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_imagens_produto` (
  `id_imagens_produto` int(11) NOT NULL,
  `id_produto` varchar(45) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_imagens_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_imagens_produto`
--

LOCK TABLES `tbl_imagens_produto` WRITE;
/*!40000 ALTER TABLE `tbl_imagens_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_imagens_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_curiosidades`
--

DROP TABLE IF EXISTS `tbl_curiosidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_curiosidades` (
  `id_curiosidades` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(45) DEFAULT NULL,
  `introdução` text,
  `conteudo` text,
  PRIMARY KEY (`id_curiosidades`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_curiosidades`
--

LOCK TABLES `tbl_curiosidades` WRITE;
/*!40000 ALTER TABLE `tbl_curiosidades` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_curiosidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_fale_conosco`
--

DROP TABLE IF EXISTS `tbl_fale_conosco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_fale_conosco` (
  `id_fale_conosco` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `sugestoes` text NOT NULL,
  `informacoesProdutos` varchar(45) NOT NULL,
  `profissao` varchar(45) NOT NULL,
  `linkFacebook` varchar(45) NOT NULL,
  PRIMARY KEY (`id_fale_conosco`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_fale_conosco`
--

LOCK TABLES `tbl_fale_conosco` WRITE;
/*!40000 ALTER TABLE `tbl_fale_conosco` DISABLE KEYS */;
INSERT INTO `tbl_fale_conosco` VALUES (6,'asdas','000 9874-6547','000 96549-6654','asdasd@sdfs','F','ghjkghjkl','ljhklhglj','vjkghkjjk','kghjkgjk'),(7,'asdas','000 9874-6547','000 96549-6654','asdasd@sdfs','F','ghjkghjkl','ljhklhglj','vjkghkjjk','kghjkgjk');
/*!40000 ALTER TABLE `tbl_fale_conosco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_imagem_curiosidade`
--

DROP TABLE IF EXISTS `tbl_imagem_curiosidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_imagem_curiosidade` (
  `id_imagem_curiosidade` int(11) NOT NULL AUTO_INCREMENT,
  `id_curiosidade` int(11) DEFAULT NULL,
  `imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`id_imagem_curiosidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_imagem_curiosidade`
--

LOCK TABLES `tbl_imagem_curiosidade` WRITE;
/*!40000 ALTER TABLE `tbl_imagem_curiosidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_imagem_curiosidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_inf_nutr`
--

DROP TABLE IF EXISTS `tbl_inf_nutr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_inf_nutr` (
  `idl_inf_nutr` int(11) NOT NULL AUTO_INCREMENT,
  `calorias` varchar(45) DEFAULT NULL,
  `gordura` varchar(45) DEFAULT NULL,
  `carboidratos` varchar(45) DEFAULT NULL,
  `proteina` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idl_inf_nutr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_inf_nutr`
--

LOCK TABLES `tbl_inf_nutr` WRITE;
/*!40000 ALTER TABLE `tbl_inf_nutr` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_inf_nutr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ingredientes`
--

DROP TABLE IF EXISTS `tbl_ingredientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ingredientes` (
  `id_ingr` int(11) NOT NULL AUTO_INCREMENT,
  `receita` text NOT NULL,
  `id_prod` int(11) NOT NULL,
  PRIMARY KEY (`id_ingr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ingredientes`
--

LOCK TABLES `tbl_ingredientes` WRITE;
/*!40000 ALTER TABLE `tbl_ingredientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_ingredientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_prioridade`
--

DROP TABLE IF EXISTS `tbl_prioridade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_prioridade` (
  `id_prioridade` int(11) NOT NULL AUTO_INCREMENT,
  `prioridade` varchar(100) NOT NULL,
  PRIMARY KEY (`id_prioridade`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_prioridade`
--

LOCK TABLES `tbl_prioridade` WRITE;
/*!40000 ALTER TABLE `tbl_prioridade` DISABLE KEYS */;
INSERT INTO `tbl_prioridade` VALUES (1,'Administrador do sistema'),(2,'Nível Operador básico'),(3,'Nível Cataloguista');
/*!40000 ALTER TABLE `tbl_prioridade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produtos`
--

DROP TABLE IF EXISTS `tbl_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_produtos` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  `id_ingr` int(11) NOT NULL,
  `id_inf_n` int(11) NOT NULL,
  `id_prom` int(11) NOT NULL,
  `destaque` varchar(1) NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produtos`
--

LOCK TABLES `tbl_produtos` WRITE;
/*!40000 ALTER TABLE `tbl_produtos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuarios` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `loggin` varchar(40) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `id_prioridade` int(11) NOT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (1,'asbjha','vdlajcv','asd',1),(2,'asbjha','vdlajcv','asd',1),(3,'asdas','vdlajcv','add',1),(4,'asdas','vdlajcv','add',1),(5,'asdas','vdlajcv','add',1),(6,'asdas','vdlajcv','add',1),(7,'asdas','vdlajcv','add',1),(8,'asdas','vdlajcv','add',1),(9,'asdas','vdlajcv','add',1),(10,'asdas','vdlajcv','add',1),(11,'asdas','vdlajcv','add',1),(12,'asdas','vdlajcv','add',1),(13,'asdas','vdlajcv','add',1);
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-19 11:14:31
