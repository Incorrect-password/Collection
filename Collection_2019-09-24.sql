# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: Collection
# Generation Time: 2019-09-24 09:08:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Collection
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Collection`;

CREATE TABLE `Collection` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Latin Name` varchar(30) NOT NULL DEFAULT '',
  `Common Name` varchar(30) DEFAULT NULL,
  `Height(cm)` int(2) NOT NULL,
  `Cap Width(cm)` int(2) NOT NULL,
  `Deadly?` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `latin name` (`Latin Name`),
  UNIQUE KEY `common name` (`Common Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Collection` WRITE;
/*!40000 ALTER TABLE `Collection` DISABLE KEYS */;

INSERT INTO `Collection` (`id`, `Latin Name`, `Common Name`, `Height(cm)`, `Cap Width(cm)`, `Deadly?`)
VALUES
	(1,'Boletus edulis','Porcini',25,35,'no'),
	(2,'Amanita muscaria','Fly agaric',20,20,'no'),
	(3,'Amanita phalloides','Death cap',15,15,'yes'),
	(4,'Agaricus bisporus','Common Mushroom',10,6,'no'),
	(5,'Cantharellus cibarius','Chantarelle',10,10,'no'),
	(6,'Rubroboletus satanas','Devils Bolete',30,25,'yes');

/*!40000 ALTER TABLE `Collection` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
