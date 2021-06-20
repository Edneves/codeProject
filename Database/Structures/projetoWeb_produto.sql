CREATE DATABASE  IF NOT EXISTS `projetoWeb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projetoWeb`;


DROP TABLE IF EXISTS `produto`;
CREATE TABLE `produto` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `preco` float NOT NULL,
  `imagem` varchar(45) NOT NULL,
  `nomeCategoria` varchar(45) NOT NULL,
  `idQtd` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `idQtd_idx` (`idQtd`),
  CONSTRAINT `idQtd` FOREIGN KEY (`idQtd`) REFERENCES `estoque` (`idestoque`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
--

LOCK TABLES `produto` WRITE;
INSERT INTO `produto` VALUES (1,'Desodorante',5,'desodorante.jfif','Higiene',1),(2,'Escova de Dente',13.89,'escova.png','Higiene',2),(3,'Protetor solar ',49.89,'filtrosolar.jpg','Higiene',3),(4,'Fio dental 100m',8.99,'fiodental.jfif','Higiene',4),(5,'Whisky Red Label 1LT',69.9,'redlabel.jpg','Bebidas',5),(6,'Whisky Black Label 1LT',112.9,'blacklabel.jpg','Bebidas',6),(7,'Coca Cola 2LT',6,'cocacola2lt.jpg','Bebidas',7),(8,'Coca Cola Zero',3.15,'cocazero.jpg','Bebidas',8),(9,'Pão Francês kg',4.99,'paofrances.jpeg','Padaria',9),(10,'Brioche',5.9,'brioche.jpg','Padaria',10),(11,'Mini Salgados Diversos kg',19.9,'miniSalgados.jpg','Padaria',11),(12,'Pão de forma Pullman',4.89,'paodeformapullman.jpg','Padaria',12),(13,'Picanha Bovina kg',78.9,'picanha.png','Carnes',13),(14,'Filé Especial kg',42.6,'fileespecial.png','Carnes',14),(15,'Filé Frango Seara kg',13.09,'frango.jpg','Carnes',15),(16,'Frango inteiro kg',7.99,'frangointeiro.png','Carnes',16),(17,'Alface',1.89,'alface.png','Hortfruti',17),(18,'Batata Inglesa kg',0.89,'batata.jpeg','Hortfruti',18),(19,'Cebola roxa',4.69,'cebola_roxa.png','Hortfruti',19),(20,'Cebola branca kg',2.99,'cebola.jpeg','Hortfruti',20),(21,'Cebola branca kg',2.99,'cebola.jpeg','Hortfruti',21);
UNLOCK TABLES;
