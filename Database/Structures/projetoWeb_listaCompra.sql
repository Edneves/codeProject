CREATE DATABASE  IF NOT EXISTS `projetoWeb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projetoWeb`;


--
--

DROP TABLE IF EXISTS `listaCompra`;
CREATE TABLE `listaCompra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) NOT NULL,
  `idProd` int(11) DEFAULT NULL,
  `nProd` varchar(45) DEFAULT NULL,
  `nCategoria` varchar(45) DEFAULT NULL,
  `qtdProd` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



LOCK TABLES `listaCompra` WRITE;
UNLOCK TABLES;
