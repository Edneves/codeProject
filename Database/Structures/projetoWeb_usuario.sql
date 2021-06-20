CREATE DATABASE  IF NOT EXISTS `projetoWeb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projetoWeb`;
--


DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(35) NOT NULL,
  `matricula` varchar(35) NOT NULL,
  `senha` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `permissaoUser` varchar(35) DEFAULT NULL,
  `endereco` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;




