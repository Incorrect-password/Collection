# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: Collection
# Generation Time: 2019-09-26 15:17:47 +0000
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
  `image` varchar(255) DEFAULT NULL,
  `Latin Name` varchar(30) NOT NULL DEFAULT '',
  `Common Name` varchar(30) NOT NULL DEFAULT '',
  `Height(cm)` int(2) NOT NULL,
  `Cap Width(cm)` int(2) NOT NULL,
  `Deadly` char(3) NOT NULL DEFAULT '',
  `Deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `latin name` (`Latin Name`),
  UNIQUE KEY `common name` (`Common Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Collection` WRITE;
/*!40000 ALTER TABLE `Collection` DISABLE KEYS */;

INSERT INTO `Collection` (`id`, `image`, `Latin Name`, `Common Name`, `Height(cm)`, `Cap Width(cm)`, `Deadly`, `Deleted`)
VALUES
	(1,'pics/porcini.jpg','Boletus edulis','Porcini',25,35,'no',0),
	(2,'pics/flyagaric.jpg','Amanita muscaria','Fly agaric',20,20,'no',0),
	(3,'pics/Amonita phallodes.jpg','Amanita phalloides','Death cap',15,15,'yes',0),
	(4,'pics/agaricus_bisporus_04.jpg','Agaricus bisporus','Common Mushroom',10,6,'no',0),
	(6,'pics/rubroboletus-satanas2.jpg','Rubroboletus satanas','Devils Bolete',30,25,'yes',0),
	(20,'pics/coprinellus-disseminatus3.jpg','dan','danny',6,6,'No',0);

/*!40000 ALTER TABLE `Collection` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
