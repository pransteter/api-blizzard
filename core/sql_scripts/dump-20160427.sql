CREATE DATABASE `api_blizzard` /*!40100 DEFAULT CHARACTER SET utf8 */;

CREATE TABLE `boss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `urlSlug` varchar(45) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `zoneId` int(11) DEFAULT NULL,
  `availableInNormalMode` tinyint(1) DEFAULT '0',
  `availableInHeroicMode` tinyint(1) DEFAULT '0',
  `health` int(45) DEFAULT '0',
  `heroicHealth` int(45) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `heroicLevel` int(11) DEFAULT '0',
  `journalId` int(11) DEFAULT NULL,
  `boss_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1880 DEFAULT CHARSET=utf8;

CREATE TABLE `pet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `canBattle` tinyint(1) DEFAULT NULL,
  `creatureId` int(11) DEFAULT NULL,
  `name` varchar(145) DEFAULT NULL,
  `family` varchar(45) DEFAULT NULL,
  `icon` varchar(145) DEFAULT NULL,
  `qualityId` int(11) DEFAULT NULL,
  `typeId` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=765 DEFAULT CHARSET=utf8;
