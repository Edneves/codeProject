CREATE DATABASE  IF NOT EXISTS `projetoWeb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projetoWeb`;
-
DROP TABLE IF EXISTS `avaliacao`;
CREATE TABLE `avaliacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCompra` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  `qtd_estrela` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idCompra_idx` (`idCompra`),
  CONSTRAINT `idCompra` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



LOCK TABLES `avaliacao` WRITE;
