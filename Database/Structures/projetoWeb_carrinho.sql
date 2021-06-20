CREATE DATABASE  IF NOT EXISTS `projetoWeb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projetoWeb`;


DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCarrinho` varchar(16) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `nProd` varchar(45) DEFAULT NULL,
  `qtdProd` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idCliente_idx` (`idCliente`),
  CONSTRAINT `idCliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



LOCK TABLES `carrinho` WRITE;
