CREATE DATABASE  IF NOT EXISTS `projetoWeb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projetoWeb`;
-- MySQL dump 10.13  Distrib 5.7.34, for Linux (x86_64)

--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE `compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) NOT NULL,
  `nomeCartao` varchar(45) NOT NULL,
  `numeroCartao` varchar(45) NOT NULL,
  `vencCartao` varchar(45) NOT NULL,
  `cvvCartao` varchar(3) NOT NULL,
  `valorCompra` varchar(10) NOT NULL,
  `diaCompra` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;


LOCK TABLES `compra` WRITE;
UNLOCK TABLES;