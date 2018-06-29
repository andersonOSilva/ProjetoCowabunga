-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: dbprojetocowabunga
-- ------------------------------------------------------
-- Server version	5.7.10-log

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
-- Temporary view structure for view `produtofinal`
--

DROP TABLE IF EXISTS `produtofinal`;
/*!50001 DROP VIEW IF EXISTS `produtofinal`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `produtofinal` AS SELECT 
 1 AS `id_produto`,
 1 AS `nome`,
 1 AS `preco`,
 1 AS `subcategoria`,
 1 AS `telefone`,
 1 AS `latitude`,
 1 AS `longetude`,
 1 AS `imagem`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `tbl_categoria`
--

DROP TABLE IF EXISTS `tbl_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categoria`
--

LOCK TABLES `tbl_categoria` WRITE;
/*!40000 ALTER TABLE `tbl_categoria` DISABLE KEYS */;
INSERT INTO `tbl_categoria` VALUES (1,'Pizza Doce'),(2,'Pizza Salgada');
/*!40000 ALTER TABLE `tbl_categoria` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_curiosidades`
--

LOCK TABLES `tbl_curiosidades` WRITE;
/*!40000 ALTER TABLE `tbl_curiosidades` DISABLE KEYS */;
INSERT INTO `tbl_curiosidades` VALUES (1,'sdfvgsdhl','ds~hvisdf','vfsvgigasd'),(9,'minha curiosidade','as dasd as dsa','sa dasd asdasd');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_fale_conosco`
--

LOCK TABLES `tbl_fale_conosco` WRITE;
/*!40000 ALTER TABLE `tbl_fale_conosco` DISABLE KEYS */;
INSERT INTO `tbl_fale_conosco` VALUES (6,'asdas','000 9874-6547','000 96549-6654','asdasd@sdfs','F','ghjkghjkl','ljhklhglj','vjkghkjjk','kghjkgjk'),(7,'Marcel','011 4142-1473','011 94142-1473','marcel@gmail.com','F','sfddsf','sdfsdf','sdfdsf','sdfdsf'),(9,'EGEGEGWEGER','011 6541-6541','011 96541-6541','WEWEWEFWFW@FEE','F','WEFWEFWFWF','WFWFWFWFWE','FWFWFWEFW','WFWFWFWF');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_imagem_curiosidade`
--

LOCK TABLES `tbl_imagem_curiosidade` WRITE;
/*!40000 ALTER TABLE `tbl_imagem_curiosidade` DISABLE KEYS */;
INSERT INTO `tbl_imagem_curiosidade` VALUES (1,1,'arquivos/534e353617c60845e90a38246c82532a.jpg'),(2,2,'arquivos/a87ff679a2f3e71d9181a67b7542122c.jpg'),(4,1,'arquivos/cb795e98a7b28fdeda8214d1df44cd24.jpg'),(5,1,'arquivos/e4da3b7fbbce2345d7772b0674a318d5.png'),(6,1,'arquivos/eccbc87e4b5ce2fe28308fd9f2a7baf3.jpg'),(8,1,'arquivos/ce08becc73195df12d99d761bfbba68d.jpg'),(9,1,'arquivos/a87ff679a2f3e71d9181a67b7542122c.jpg'),(10,1,'arquivos/c20ad4d76fe97759aa27a0c99bff6710.jpg'),(11,1,'arquivos/23eb5a8964b909966b5161e0b7a51849.jpg');
/*!40000 ALTER TABLE `tbl_imagem_curiosidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_imagens_produto`
--

DROP TABLE IF EXISTS `tbl_imagens_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_imagens_produto` (
  `id_imagens_produto` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` text NOT NULL,
  `id_produto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_imagens_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_imagens_produto`
--

LOCK TABLES `tbl_imagens_produto` WRITE;
/*!40000 ALTER TABLE `tbl_imagens_produto` DISABLE KEYS */;
INSERT INTO `tbl_imagens_produto` VALUES (13,'cms/arquivos/95b1d9ff34f492254929c049e5a129b3.png',53),(16,'cms/arquivos/55096af6ec94acc9afb0eb81f74cb729.png',60);
/*!40000 ALTER TABLE `tbl_imagens_produto` ENABLE KEYS */;
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
  `id_produto` int(11) DEFAULT NULL,
  PRIMARY KEY (`idl_inf_nutr`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_inf_nutr`
--

LOCK TABLES `tbl_inf_nutr` WRITE;
/*!40000 ALTER TABLE `tbl_inf_nutr` DISABLE KEYS */;
INSERT INTO `tbl_inf_nutr` VALUES (1,'dsfvdsv','vfdsvds',NULL,'vdsfvdsv',42),(2,'teste','teste',NULL,'teste',45),(3,'ascac','acasc',NULL,'ascasc',47),(4,'csca','scasc','ascasc','ascsc',53),(5,'csca','scasc','ascasc','ascsc',53),(6,'csca','scasc','ascasc','ascsc',53),(7,'csca','scasc','ascasc','ascsc',53),(8,'csca','scasc','ascasc','ascsc',53),(9,'csca','scasc','ascasc','ascsc',53),(10,'teste','teste','teste','teste',60),(11,'teste','teste','teste','teste',60);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ingredientes`
--

LOCK TABLES `tbl_ingredientes` WRITE;
/*!40000 ALTER TABLE `tbl_ingredientes` DISABLE KEYS */;
INSERT INTO `tbl_ingredientes` VALUES (1,'cadsc',53),(2,'cadsc',53),(3,'cadsc',53),(4,'teste',60),(5,'cacacascasc         ',60);
/*!40000 ALTER TABLE `tbl_ingredientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nosso_ambiente`
--

DROP TABLE IF EXISTS `tbl_nosso_ambiente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_nosso_ambiente` (
  `id_nosso_ambiente` int(11) NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(100) NOT NULL,
  `telefone1` varchar(100) NOT NULL,
  `telefone2` varchar(100) DEFAULT NULL,
  `telefone3` varchar(100) DEFAULT NULL,
  `infadd` text,
  `latitude` varchar(45) DEFAULT NULL,
  `longetitude` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_nosso_ambiente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nosso_ambiente`
--

LOCK TABLES `tbl_nosso_ambiente` WRITE;
/*!40000 ALTER TABLE `tbl_nosso_ambiente` DISABLE KEYS */;
INSERT INTO `tbl_nosso_ambiente` VALUES (1,'jnvfkjshv','646516','651651651','651651','dfdsvssd','40.7143528','-74.0059731'),(2,'jnvfkjshv','646516','651651651','651651','dfdsvssd','40.7143528','-74.0059731');
/*!40000 ALTER TABLE `tbl_nosso_ambiente` ENABLE KEYS */;
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
  `preco` varchar(6) NOT NULL,
  `destaque` varchar(1) DEFAULT NULL,
  `id_sub_categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produtos`
--

LOCK TABLES `tbl_produtos` WRITE;
/*!40000 ALTER TABLE `tbl_produtos` DISABLE KEYS */;
INSERT INTO `tbl_produtos` VALUES (60,'Brazza','000,12',NULL,'1');
/*!40000 ALTER TABLE `tbl_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sub_categoria`
--

DROP TABLE IF EXISTS `tbl_sub_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sub_categoria` (
  `id_sub_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `subcategoria` varchar(45) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sub_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sub_categoria`
--

LOCK TABLES `tbl_sub_categoria` WRITE;
/*!40000 ALTER TABLE `tbl_sub_categoria` DISABLE KEYS */;
INSERT INTO `tbl_sub_categoria` VALUES (1,'vegetariana',2),(2,'sabores de peixe',2),(3,'sabores de carne',2),(4,'sabores de chocolate',1),(5,'sabores com frutas',1),(6,'sabores gelados',1),(9,'acascasc',NULL);
/*!40000 ALTER TABLE `tbl_sub_categoria` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (24,'jogaram queresone','quequeu','123',1),(25,'gbhdgdfg','dsfgdsfgdfs','fdsgdfgds',2),(26,'gbhdgdfg','dsfgdsfgdfs','fdsgdfgds',2),(27,'gbhdgdfg','dsfgdsfgdfs','fdsgdfgds',2),(28,'gbhdgdfg','dsfgdsfgdfs','fdsgdfgds',2),(30,'Marcel','marcelnt','123',1);
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `produtofinal`
--

/*!50001 DROP VIEW IF EXISTS `produtofinal`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `produtofinal` AS select `p`.`id_produto` AS `id_produto`,`p`.`nome` AS `nome`,`p`.`preco` AS `preco`,`sc`.`subcategoria` AS `subcategoria`,`a`.`telefone1` AS `telefone`,`a`.`latitude` AS `latitude`,`a`.`longetitude` AS `longetude`,`img`.`imagem` AS `imagem` from ((`tbl_produtos` `p` join `tbl_sub_categoria` `sc`) join (`tbl_categoria` `c` join (`tbl_nosso_ambiente` `a` join `tbl_imagens_produto` `img`))) where (`p`.`id_sub_categoria` = `sc`.`id_sub_categoria`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-05 11:18:44
