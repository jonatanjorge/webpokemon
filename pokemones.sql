/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : pokemones

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2016-10-23 15:23:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for entrenadores
-- ----------------------------
DROP TABLE IF EXISTS `entrenadores`;
CREATE TABLE `entrenadores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `sexos_id` tinyint(1) unsigned NOT NULL,
  `edad` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `sexos_id` (`sexos_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of entrenadores
-- ----------------------------
INSERT INTO `entrenadores` VALUES ('1', 'ash', '3', '21', null, null);
INSERT INTO `entrenadores` VALUES ('2', 'brock', '3', '22', null, null);
INSERT INTO `entrenadores` VALUES ('3', 'gary Oak', '3', '25', null, null);
INSERT INTO `entrenadores` VALUES ('4', 'misty', '4', '18', null, null);
INSERT INTO `entrenadores` VALUES ('5', 'may', '4', '15', null, null);

-- ----------------------------
-- Table structure for entrenadores_pokemones
-- ----------------------------
DROP TABLE IF EXISTS `entrenadores_pokemones`;
CREATE TABLE `entrenadores_pokemones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pokemones_id` int(10) unsigned NOT NULL,
  `entrenadores_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE,
  KEY `pokemones_id` (`pokemones_id`) USING BTREE,
  KEY `entrenadores_id` (`entrenadores_id`) USING BTREE,
  CONSTRAINT `fk_entrenadores_pokemones` FOREIGN KEY (`entrenadores_id`) REFERENCES `entrenadores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_pokemones` FOREIGN KEY (`pokemones_id`) REFERENCES `pokemones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of entrenadores_pokemones
-- ----------------------------
INSERT INTO `entrenadores_pokemones` VALUES ('1', '4', '1', null, null);
INSERT INTO `entrenadores_pokemones` VALUES ('2', '5', '1', null, null);
INSERT INTO `entrenadores_pokemones` VALUES ('3', '6', '3', null, null);
INSERT INTO `entrenadores_pokemones` VALUES ('4', '7', '3', null, null);
INSERT INTO `entrenadores_pokemones` VALUES ('5', '8', '5', null, null);
INSERT INTO `entrenadores_pokemones` VALUES ('6', '10', '4', null, null);
INSERT INTO `entrenadores_pokemones` VALUES ('7', '11', '4', null, null);
INSERT INTO `entrenadores_pokemones` VALUES ('8', '5', '4', null, null);

-- ----------------------------
-- Table structure for especies
-- ----------------------------
DROP TABLE IF EXISTS `especies`;
CREATE TABLE `especies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of especies
-- ----------------------------
INSERT INTO `especies` VALUES ('1', 'bulbasaur', null, null);
INSERT INTO `especies` VALUES ('2', 'squartle', null, null);
INSERT INTO `especies` VALUES ('3', 'charmander', null, null);
INSERT INTO `especies` VALUES ('4', 'charmeleon', null, null);
INSERT INTO `especies` VALUES ('5', 'charizard', null, null);
INSERT INTO `especies` VALUES ('6', 'kakuna', null, null);
INSERT INTO `especies` VALUES ('7', 'metapod', null, null);

-- ----------------------------
-- Table structure for especies_tipos
-- ----------------------------
DROP TABLE IF EXISTS `especies_tipos`;
CREATE TABLE `especies_tipos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `especies_id` int(10) unsigned DEFAULT NULL,
  `tipos_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE,
  KEY `especies_id` (`especies_id`) USING BTREE,
  KEY `tipos_id` (`tipos_id`) USING BTREE,
  CONSTRAINT `fk_especies_tipos` FOREIGN KEY (`especies_id`) REFERENCES `especies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tipos_especies` FOREIGN KEY (`tipos_id`) REFERENCES `tipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of especies_tipos
-- ----------------------------
INSERT INTO `especies_tipos` VALUES ('1', '1', '1', null, null);
INSERT INTO `especies_tipos` VALUES ('2', '2', '5', null, null);
INSERT INTO `especies_tipos` VALUES ('3', '3', '3', null, null);
INSERT INTO `especies_tipos` VALUES ('4', '4', '3', null, null);
INSERT INTO `especies_tipos` VALUES ('5', '5', '3', null, null);
INSERT INTO `especies_tipos` VALUES ('6', '6', '1', null, null);
INSERT INTO `especies_tipos` VALUES ('7', '7', '1', null, null);
INSERT INTO `especies_tipos` VALUES ('8', '7', '2', null, null);

-- ----------------------------
-- Table structure for imagenes
-- ----------------------------
DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `especies_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE,
  KEY `especies_id` (`especies_id`) USING BTREE,
  CONSTRAINT `fk_pespecies_imagenes` FOREIGN KEY (`especies_id`) REFERENCES `especies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imagenes
-- ----------------------------
INSERT INTO `imagenes` VALUES ('1', 'img/pokemons/2.png', '1', null, null);
INSERT INTO `imagenes` VALUES ('2', 'img/pokemons/1.png', '2', null, null);
INSERT INTO `imagenes` VALUES ('3', 'img/pokemons/4.png', '3', null, null);
INSERT INTO `imagenes` VALUES ('4', 'img/pokemons/5.png', '4', null, null);
INSERT INTO `imagenes` VALUES ('5', 'img/pokemons/6.png', '5', null, null);
INSERT INTO `imagenes` VALUES ('6', 'img/pokemons/9.png', '6', null, null);
INSERT INTO `imagenes` VALUES ('7', 'img/pokemons/11.png', '7', null, null);

-- ----------------------------
-- Table structure for pokemones
-- ----------------------------
DROP TABLE IF EXISTS `pokemones`;
CREATE TABLE `pokemones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `nivel` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `sexos_id` tinyint(1) unsigned NOT NULL,
  `especies_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE,
  KEY `sexos_id` (`sexos_id`) USING BTREE,
  KEY `especies_id` (`especies_id`) USING BTREE,
  CONSTRAINT `fk_especies_pokemones` FOREIGN KEY (`especies_id`) REFERENCES `especies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_sexos_pokemones` FOREIGN KEY (`sexos_id`) REFERENCES `sexos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pokemones
-- ----------------------------
INSERT INTO `pokemones` VALUES ('4', 'bulbasaur', '1', '1', '1', null, null);
INSERT INTO `pokemones` VALUES ('5', 'squartle', '1', '1', '2', null, null);
INSERT INTO `pokemones` VALUES ('6', 'char', '1', '2', '3', null, null);
INSERT INTO `pokemones` VALUES ('7', 'charme', '2', '1', '4', null, null);
INSERT INTO `pokemones` VALUES ('8', 'chari', '3', '2', '5', null, null);
INSERT INTO `pokemones` VALUES ('10', 'kakuna', '1', '1', '6', null, null);
INSERT INTO `pokemones` VALUES ('11', 'metapodas', '2', '2', '7', '2016-10-23 14:15:15', '2016-10-23 17:15:15');

-- ----------------------------
-- Table structure for sexos
-- ----------------------------
DROP TABLE IF EXISTS `sexos`;
CREATE TABLE `sexos` (
  `id` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `sexo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sexos
-- ----------------------------
INSERT INTO `sexos` VALUES ('1', 'macho', null, null);
INSERT INTO `sexos` VALUES ('2', 'hembra', null, null);
INSERT INTO `sexos` VALUES ('3', 'masculino', null, null);
INSERT INTO `sexos` VALUES ('4', 'femenino', null, null);

-- ----------------------------
-- Table structure for tipos
-- ----------------------------
DROP TABLE IF EXISTS `tipos`;
CREATE TABLE `tipos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipos
-- ----------------------------
INSERT INTO `tipos` VALUES ('1', 'bicho', null, null);
INSERT INTO `tipos` VALUES ('2', 'hierba', null, null);
INSERT INTO `tipos` VALUES ('3', 'fuego', null, null);
INSERT INTO `tipos` VALUES ('4', 'roca', null, null);
INSERT INTO `tipos` VALUES ('5', 'agua', null, null);
