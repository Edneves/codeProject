CREATE DATABASE  IF NOT EXISTS `projetoWeb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projetoWeb`;

DROP TABLE IF EXISTS `estoque`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estoque` (
  `idestoque` int(11) NOT NULL,
  `qtd` int(11) DEFAULT NULL,
  PRIMARY KEY (`idestoque`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--

LOCK TABLES `estoque` WRITE;
INSERT INTO `estoque` VALUES (1,2),(2,100),(3,100),(4,100),(5,100),(6,100),(7,100),(8,50),(9,100),(10,100),(11,100),(12,100),(13,100),(14,100),(15,100),(16,100),(17,100),(18,100),(19,100),(20,100),(21,100);
UNLOCK TABLES;
