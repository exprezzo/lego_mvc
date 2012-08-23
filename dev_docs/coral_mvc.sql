/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : coral_mvc

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-08-22 22:32:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `modelo_test`
-- ----------------------------
DROP TABLE IF EXISTS `modelo_test`;
CREATE TABLE `modelo_test` (
  `id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  `fecha_de_creacion` datetime DEFAULT NULL,
  `fecha_de_ultima_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_test
-- ----------------------------
INSERT INTO `modelo_test` VALUES ('1', 'Doctrine save test No 1', null, null);
INSERT INTO `modelo_test` VALUES ('2', 'Doctrine save test No 2', null, null);
INSERT INTO `modelo_test` VALUES ('3', 'Doctrine save test No 3', null, null);
INSERT INTO `modelo_test` VALUES ('4', 'Doctrine save test No 4', null, null);
INSERT INTO `modelo_test` VALUES ('5', 'Doctrine save test No 5', null, null);
INSERT INTO `modelo_test` VALUES ('6', 'Doctrine save test No 6', null, null);
INSERT INTO `modelo_test` VALUES ('7', 'Doctrine save test No 7', null, null);
INSERT INTO `modelo_test` VALUES ('8', 'Doctrine save test No 8', null, null);
INSERT INTO `modelo_test` VALUES ('9', 'Doctrine save test No 9', null, null);
INSERT INTO `modelo_test` VALUES ('10', 'Doctrine save test No 10', null, null);
INSERT INTO `modelo_test` VALUES ('11', 'Doctrine save test No 11', null, null);
INSERT INTO `modelo_test` VALUES ('12', 'Doctrine save test No 12', null, null);
INSERT INTO `modelo_test` VALUES ('13', 'Doctrine save test No 13', null, null);
INSERT INTO `modelo_test` VALUES ('14', 'Doctrine save test No 14', null, null);
INSERT INTO `modelo_test` VALUES ('15', 'Doctrine save test No 15', null, null);
INSERT INTO `modelo_test` VALUES ('16', 'Doctrine save test No 16', null, null);
INSERT INTO `modelo_test` VALUES ('17', 'Doctrine save test No 17', null, null);
INSERT INTO `modelo_test` VALUES ('18', 'Doctrine save test No 18', null, null);
INSERT INTO `modelo_test` VALUES ('19', 'Doctrine save test No 19', null, null);
INSERT INTO `modelo_test` VALUES ('20', 'Doctrine save test No 20', null, null);
INSERT INTO `modelo_test` VALUES ('21', 'Doctrine save test No 21', null, null);
INSERT INTO `modelo_test` VALUES ('22', 'Doctrine save test No 22', null, null);
INSERT INTO `modelo_test` VALUES ('23', 'Doctrine save test No 23', null, null);
INSERT INTO `modelo_test` VALUES ('24', 'Doctrine save test No 24', null, null);
INSERT INTO `modelo_test` VALUES ('25', 'Doctrine save test No 25', null, null);
INSERT INTO `modelo_test` VALUES ('26', 'Doctrine save test No 26', null, null);
INSERT INTO `modelo_test` VALUES ('27', 'Doctrine save test No 27', null, null);
INSERT INTO `modelo_test` VALUES ('28', 'Doctrine save test No 28', null, null);
INSERT INTO `modelo_test` VALUES ('29', 'Doctrine save test No 29', null, null);
INSERT INTO `modelo_test` VALUES ('30', 'Doctrine save test No 30', null, null);
INSERT INTO `modelo_test` VALUES ('31', 'Doctrine save test No 31', null, null);
INSERT INTO `modelo_test` VALUES ('32', 'Doctrine save test No 32', null, null);
INSERT INTO `modelo_test` VALUES ('33', 'Doctrine save test No 33', null, null);
INSERT INTO `modelo_test` VALUES ('34', 'Doctrine save test No 34', null, null);
INSERT INTO `modelo_test` VALUES ('35', 'Doctrine save test No 35', null, null);
INSERT INTO `modelo_test` VALUES ('36', 'Doctrine save test No 36', null, null);
INSERT INTO `modelo_test` VALUES ('37', 'Doctrine save test No 37', null, null);
INSERT INTO `modelo_test` VALUES ('38', 'Doctrine save test No 38', null, null);
INSERT INTO `modelo_test` VALUES ('39', 'Doctrine save test No 39', null, null);
INSERT INTO `modelo_test` VALUES ('40', 'Doctrine save test No 40', null, null);
INSERT INTO `modelo_test` VALUES ('41', 'Doctrine save test No 41', null, null);
INSERT INTO `modelo_test` VALUES ('42', 'Doctrine save test No 42', null, null);
INSERT INTO `modelo_test` VALUES ('43', 'Doctrine save test No 43', null, null);
INSERT INTO `modelo_test` VALUES ('44', 'Doctrine save test No 44', null, null);
INSERT INTO `modelo_test` VALUES ('45', 'Doctrine save test No 45', null, null);
INSERT INTO `modelo_test` VALUES ('46', 'Doctrine save test No 46', null, null);
INSERT INTO `modelo_test` VALUES ('47', 'Doctrine save test No 47', null, null);
INSERT INTO `modelo_test` VALUES ('48', 'Doctrine save test No 48', null, null);
INSERT INTO `modelo_test` VALUES ('49', 'Doctrine save test No 49', null, null);
INSERT INTO `modelo_test` VALUES ('50', 'Doctrine save test No 50', null, null);
INSERT INTO `modelo_test` VALUES ('51', 'Doctrine save test No 51', null, null);
INSERT INTO `modelo_test` VALUES ('52', 'Doctrine save test No 52', null, null);
INSERT INTO `modelo_test` VALUES ('53', 'Doctrine save test No 53', null, null);
INSERT INTO `modelo_test` VALUES ('54', 'Doctrine save test No 54', null, null);
INSERT INTO `modelo_test` VALUES ('55', 'Doctrine save test No 55', null, null);
INSERT INTO `modelo_test` VALUES ('56', 'Doctrine save test No 56', null, null);
INSERT INTO `modelo_test` VALUES ('57', 'Doctrine save test No 57', null, null);
INSERT INTO `modelo_test` VALUES ('58', 'Doctrine save test No 58', null, null);
INSERT INTO `modelo_test` VALUES ('59', 'Doctrine save test No 59', null, null);
INSERT INTO `modelo_test` VALUES ('60', 'Doctrine save test No 60', null, null);
INSERT INTO `modelo_test` VALUES ('61', 'Doctrine save test No 61', null, null);
INSERT INTO `modelo_test` VALUES ('62', 'Doctrine save test No 62', null, null);
INSERT INTO `modelo_test` VALUES ('63', 'Doctrine save test No 63', null, null);
INSERT INTO `modelo_test` VALUES ('64', 'Doctrine save test No 64', null, null);
INSERT INTO `modelo_test` VALUES ('65', 'Doctrine save test No 65', null, null);
INSERT INTO `modelo_test` VALUES ('66', 'Doctrine save test No 66', null, null);
INSERT INTO `modelo_test` VALUES ('67', 'Doctrine save test No 67', null, null);
INSERT INTO `modelo_test` VALUES ('68', 'Doctrine save test No 68', null, null);
INSERT INTO `modelo_test` VALUES ('69', 'Doctrine save test No 69', null, null);
INSERT INTO `modelo_test` VALUES ('70', 'Doctrine save test No 70', null, null);
INSERT INTO `modelo_test` VALUES ('71', 'Doctrine save test No 71', null, null);
INSERT INTO `modelo_test` VALUES ('72', 'Doctrine save test No 72', null, null);
INSERT INTO `modelo_test` VALUES ('73', 'Doctrine save test No 73', null, null);
INSERT INTO `modelo_test` VALUES ('74', 'Doctrine save test No 74', null, null);
INSERT INTO `modelo_test` VALUES ('75', 'Doctrine save test No 75', null, null);
INSERT INTO `modelo_test` VALUES ('76', 'Doctrine save test No 76', null, null);
INSERT INTO `modelo_test` VALUES ('77', 'Doctrine save test No 77', null, null);
INSERT INTO `modelo_test` VALUES ('78', 'Doctrine save test No 78', null, null);
INSERT INTO `modelo_test` VALUES ('79', 'Doctrine save test No 79', null, null);
INSERT INTO `modelo_test` VALUES ('80', 'Doctrine save test No 80', null, null);
INSERT INTO `modelo_test` VALUES ('81', 'Doctrine save test No 81', null, null);
INSERT INTO `modelo_test` VALUES ('82', 'Doctrine save test No 82', null, null);
INSERT INTO `modelo_test` VALUES ('83', 'Doctrine save test No 83', null, null);
INSERT INTO `modelo_test` VALUES ('84', 'Doctrine save test No 84', null, null);
INSERT INTO `modelo_test` VALUES ('85', 'Doctrine save test No 85', null, null);
INSERT INTO `modelo_test` VALUES ('86', 'Doctrine save test No 86', null, null);
INSERT INTO `modelo_test` VALUES ('87', 'Doctrine save test No 87', null, null);
INSERT INTO `modelo_test` VALUES ('88', 'Doctrine save test No 88', null, null);
INSERT INTO `modelo_test` VALUES ('89', 'Doctrine save test No 89', null, null);
INSERT INTO `modelo_test` VALUES ('90', 'Doctrine save test No 90', null, null);
INSERT INTO `modelo_test` VALUES ('91', 'Doctrine save test No 91', null, null);
INSERT INTO `modelo_test` VALUES ('92', 'Doctrine save test No 92', null, null);
INSERT INTO `modelo_test` VALUES ('93', 'Doctrine save test No 93', null, null);
INSERT INTO `modelo_test` VALUES ('94', 'Doctrine save test No 94', null, null);
INSERT INTO `modelo_test` VALUES ('95', 'Doctrine save test No 95', null, null);
INSERT INTO `modelo_test` VALUES ('96', 'Doctrine save test No 96', null, null);
INSERT INTO `modelo_test` VALUES ('97', 'Doctrine save test No 97', null, null);
INSERT INTO `modelo_test` VALUES ('98', 'Doctrine save test No 98', null, null);
INSERT INTO `modelo_test` VALUES ('100', 'Doctrine save test No 100', null, null);
INSERT INTO `modelo_test` VALUES ('101', '', null, null);
INSERT INTO `modelo_test` VALUES ('102', 'sadf', null, null);
INSERT INTO `modelo_test` VALUES ('103', 'sadf', null, null);

-- ----------------------------
-- Table structure for `modelo_test_copy`
-- ----------------------------
DROP TABLE IF EXISTS `modelo_test_copy`;
CREATE TABLE `modelo_test_copy` (
  `id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  `fecha_de_creacion` datetime DEFAULT NULL,
  `fecha_de_ultima_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_test_copy
-- ----------------------------
INSERT INTO `modelo_test_copy` VALUES ('1', 'Doctrine save test No 1', null, null);
INSERT INTO `modelo_test_copy` VALUES ('2', 'Doctrine save test No 2', null, null);
INSERT INTO `modelo_test_copy` VALUES ('3', 'Doctrine save test No 3', null, null);
INSERT INTO `modelo_test_copy` VALUES ('4', 'Doctrine save test No 4', null, null);
INSERT INTO `modelo_test_copy` VALUES ('5', 'Doctrine save test No 5', null, null);
INSERT INTO `modelo_test_copy` VALUES ('6', 'Doctrine save test No 6', null, null);
INSERT INTO `modelo_test_copy` VALUES ('7', 'Doctrine save test No 7', null, null);
INSERT INTO `modelo_test_copy` VALUES ('8', 'Doctrine save test No 8', null, null);
INSERT INTO `modelo_test_copy` VALUES ('9', 'Doctrine save test No 9', null, null);
INSERT INTO `modelo_test_copy` VALUES ('10', 'Doctrine save test No 10', null, null);
INSERT INTO `modelo_test_copy` VALUES ('11', 'Doctrine save test No 11', null, null);
INSERT INTO `modelo_test_copy` VALUES ('12', 'Doctrine save test No 12', null, null);
INSERT INTO `modelo_test_copy` VALUES ('13', 'Doctrine save test No 13', null, null);
INSERT INTO `modelo_test_copy` VALUES ('14', 'Doctrine save test No 14', null, null);
INSERT INTO `modelo_test_copy` VALUES ('15', 'Doctrine save test No 15', null, null);
INSERT INTO `modelo_test_copy` VALUES ('16', 'Doctrine save test No 16', null, null);
INSERT INTO `modelo_test_copy` VALUES ('17', 'Doctrine save test No 17', null, null);
INSERT INTO `modelo_test_copy` VALUES ('18', 'Doctrine save test No 18', null, null);
INSERT INTO `modelo_test_copy` VALUES ('19', 'Doctrine save test No 19', null, null);
INSERT INTO `modelo_test_copy` VALUES ('20', 'Doctrine save test No 20', null, null);
INSERT INTO `modelo_test_copy` VALUES ('21', 'Doctrine save test No 21', null, null);
INSERT INTO `modelo_test_copy` VALUES ('22', 'Doctrine save test No 22', null, null);
INSERT INTO `modelo_test_copy` VALUES ('23', 'Doctrine save test No 23', null, null);
INSERT INTO `modelo_test_copy` VALUES ('24', 'Doctrine save test No 24', null, null);
INSERT INTO `modelo_test_copy` VALUES ('25', 'Doctrine save test No 25', null, null);
INSERT INTO `modelo_test_copy` VALUES ('26', 'Doctrine save test No 26', null, null);
INSERT INTO `modelo_test_copy` VALUES ('27', 'Doctrine save test No 27', null, null);
INSERT INTO `modelo_test_copy` VALUES ('28', 'Doctrine save test No 28', null, null);
INSERT INTO `modelo_test_copy` VALUES ('29', 'Doctrine save test No 29', null, null);
INSERT INTO `modelo_test_copy` VALUES ('30', 'Doctrine save test No 30', null, null);
INSERT INTO `modelo_test_copy` VALUES ('31', 'Doctrine save test No 31', null, null);
INSERT INTO `modelo_test_copy` VALUES ('32', 'Doctrine save test No 32', null, null);
INSERT INTO `modelo_test_copy` VALUES ('33', 'Doctrine save test No 33', null, null);
INSERT INTO `modelo_test_copy` VALUES ('34', 'Doctrine save test No 34', null, null);
INSERT INTO `modelo_test_copy` VALUES ('35', 'Doctrine save test No 35', null, null);
INSERT INTO `modelo_test_copy` VALUES ('36', 'Doctrine save test No 36', null, null);
INSERT INTO `modelo_test_copy` VALUES ('37', 'Doctrine save test No 37', null, null);
INSERT INTO `modelo_test_copy` VALUES ('38', 'Doctrine save test No 38', null, null);
INSERT INTO `modelo_test_copy` VALUES ('39', 'Doctrine save test No 39', null, null);
INSERT INTO `modelo_test_copy` VALUES ('40', 'Doctrine save test No 40', null, null);
INSERT INTO `modelo_test_copy` VALUES ('41', 'Doctrine save test No 41', null, null);
INSERT INTO `modelo_test_copy` VALUES ('42', 'Doctrine save test No 42', null, null);
INSERT INTO `modelo_test_copy` VALUES ('43', 'Doctrine save test No 43', null, null);
INSERT INTO `modelo_test_copy` VALUES ('44', 'Doctrine save test No 44', null, null);
INSERT INTO `modelo_test_copy` VALUES ('45', 'Doctrine save test No 45', null, null);
INSERT INTO `modelo_test_copy` VALUES ('46', 'Doctrine save test No 46', null, null);
INSERT INTO `modelo_test_copy` VALUES ('47', 'Doctrine save test No 47', null, null);
INSERT INTO `modelo_test_copy` VALUES ('48', 'Doctrine save test No 48', null, null);
INSERT INTO `modelo_test_copy` VALUES ('49', 'Doctrine save test No 49', null, null);
INSERT INTO `modelo_test_copy` VALUES ('50', 'Doctrine save test No 50', null, null);
INSERT INTO `modelo_test_copy` VALUES ('51', 'Doctrine save test No 51', null, null);
INSERT INTO `modelo_test_copy` VALUES ('52', 'Doctrine save test No 52', null, null);
INSERT INTO `modelo_test_copy` VALUES ('53', 'Doctrine save test No 53', null, null);
INSERT INTO `modelo_test_copy` VALUES ('54', 'Doctrine save test No 54', null, null);
INSERT INTO `modelo_test_copy` VALUES ('55', 'Doctrine save test No 55', null, null);
INSERT INTO `modelo_test_copy` VALUES ('56', 'Doctrine save test No 56', null, null);
INSERT INTO `modelo_test_copy` VALUES ('57', 'Doctrine save test No 57', null, null);
INSERT INTO `modelo_test_copy` VALUES ('58', 'Doctrine save test No 58', null, null);
INSERT INTO `modelo_test_copy` VALUES ('59', 'Doctrine save test No 59', null, null);
INSERT INTO `modelo_test_copy` VALUES ('60', 'Doctrine save test No 60', null, null);
INSERT INTO `modelo_test_copy` VALUES ('61', 'Doctrine save test No 61', null, null);
INSERT INTO `modelo_test_copy` VALUES ('62', 'Doctrine save test No 62', null, null);
INSERT INTO `modelo_test_copy` VALUES ('63', 'Doctrine save test No 63', null, null);
INSERT INTO `modelo_test_copy` VALUES ('64', 'Doctrine save test No 64', null, null);
INSERT INTO `modelo_test_copy` VALUES ('65', 'Doctrine save test No 65', null, null);
INSERT INTO `modelo_test_copy` VALUES ('66', 'Doctrine save test No 66', null, null);
INSERT INTO `modelo_test_copy` VALUES ('67', 'Doctrine save test No 67', null, null);
INSERT INTO `modelo_test_copy` VALUES ('68', 'Doctrine save test No 68', null, null);
INSERT INTO `modelo_test_copy` VALUES ('69', 'Doctrine save test No 69', null, null);
INSERT INTO `modelo_test_copy` VALUES ('70', 'Doctrine save test No 70', null, null);
INSERT INTO `modelo_test_copy` VALUES ('71', 'Doctrine save test No 71', null, null);
INSERT INTO `modelo_test_copy` VALUES ('72', 'Doctrine save test No 72', null, null);
INSERT INTO `modelo_test_copy` VALUES ('73', 'Doctrine save test No 73', null, null);
INSERT INTO `modelo_test_copy` VALUES ('74', 'Doctrine save test No 74', null, null);
INSERT INTO `modelo_test_copy` VALUES ('75', 'Doctrine save test No 75', null, null);
INSERT INTO `modelo_test_copy` VALUES ('76', 'Doctrine save test No 76', null, null);
INSERT INTO `modelo_test_copy` VALUES ('77', 'Doctrine save test No 77', null, null);
INSERT INTO `modelo_test_copy` VALUES ('78', 'Doctrine save test No 78', null, null);
INSERT INTO `modelo_test_copy` VALUES ('79', 'Doctrine save test No 79', null, null);
INSERT INTO `modelo_test_copy` VALUES ('80', 'Doctrine save test No 80', null, null);
INSERT INTO `modelo_test_copy` VALUES ('81', 'Doctrine save test No 81', null, null);
INSERT INTO `modelo_test_copy` VALUES ('82', 'Doctrine save test No 82', null, null);
INSERT INTO `modelo_test_copy` VALUES ('83', 'Doctrine save test No 83', null, null);
INSERT INTO `modelo_test_copy` VALUES ('84', 'Doctrine save test No 84', null, null);
INSERT INTO `modelo_test_copy` VALUES ('85', 'Doctrine save test No 85', null, null);
INSERT INTO `modelo_test_copy` VALUES ('86', 'Doctrine save test No 86', null, null);
INSERT INTO `modelo_test_copy` VALUES ('87', 'Doctrine save test No 87', null, null);
INSERT INTO `modelo_test_copy` VALUES ('88', 'Doctrine save test No 88', null, null);
INSERT INTO `modelo_test_copy` VALUES ('89', 'Doctrine save test No 89', null, null);
INSERT INTO `modelo_test_copy` VALUES ('90', 'Doctrine save test No 90', null, null);
INSERT INTO `modelo_test_copy` VALUES ('91', 'Doctrine save test No 91', null, null);
INSERT INTO `modelo_test_copy` VALUES ('92', 'Doctrine save test No 92', null, null);
INSERT INTO `modelo_test_copy` VALUES ('93', 'Doctrine save test No 93', null, null);
INSERT INTO `modelo_test_copy` VALUES ('94', 'Doctrine save test No 94', null, null);
INSERT INTO `modelo_test_copy` VALUES ('95', 'Doctrine save test No 95', null, null);
INSERT INTO `modelo_test_copy` VALUES ('96', 'Doctrine save test No 96', null, null);
INSERT INTO `modelo_test_copy` VALUES ('97', 'Doctrine save test No 97', null, null);
INSERT INTO `modelo_test_copy` VALUES ('98', 'Doctrine save test No 98', null, null);
INSERT INTO `modelo_test_copy` VALUES ('100', 'Doctrine save test No 100', null, null);

-- ----------------------------
-- Table structure for `modelo_test_copy1`
-- ----------------------------
DROP TABLE IF EXISTS `modelo_test_copy1`;
CREATE TABLE `modelo_test_copy1` (
  `id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  `fecha_de_creacion` datetime DEFAULT NULL,
  `fecha_de_ultima_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_test_copy1
-- ----------------------------
INSERT INTO `modelo_test_copy1` VALUES ('1', 'Doctrine save test No 1', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('2', 'Doctrine save test No 2', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('3', 'Doctrine save test No 3', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('4', 'Doctrine save test No 4', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('5', 'Doctrine save test No 5', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('6', 'Doctrine save test No 6', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('7', 'Doctrine save test No 7', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('8', 'Doctrine save test No 8', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('9', 'Doctrine save test No 9', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('10', 'Doctrine save test No 10', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('11', 'Doctrine save test No 11', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('12', 'Doctrine save test No 12', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('13', 'Doctrine save test No 13', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('14', 'Doctrine save test No 14', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('15', 'Doctrine save test No 15', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('16', 'Doctrine save test No 16', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('17', 'Doctrine save test No 17', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('18', 'Doctrine save test No 18', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('19', 'Doctrine save test No 19', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('20', 'Doctrine save test No 20', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('21', 'Doctrine save test No 21', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('22', 'Doctrine save test No 22', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('23', 'Doctrine save test No 23', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('24', 'Doctrine save test No 24', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('25', 'Doctrine save test No 25', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('26', 'Doctrine save test No 26', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('27', 'Doctrine save test No 27', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('28', 'Doctrine save test No 28', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('29', 'Doctrine save test No 29', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('30', 'Doctrine save test No 30', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('31', 'Doctrine save test No 31', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('32', 'Doctrine save test No 32', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('33', 'Doctrine save test No 33', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('34', 'Doctrine save test No 34', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('35', 'Doctrine save test No 35', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('36', 'Doctrine save test No 36', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('37', 'Doctrine save test No 37', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('38', 'Doctrine save test No 38', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('39', 'Doctrine save test No 39', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('40', 'Doctrine save test No 40', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('41', 'Doctrine save test No 41', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('42', 'Doctrine save test No 42', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('43', 'Doctrine save test No 43', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('44', 'Doctrine save test No 44', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('45', 'Doctrine save test No 45', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('46', 'Doctrine save test No 46', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('47', 'Doctrine save test No 47', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('48', 'Doctrine save test No 48', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('49', 'Doctrine save test No 49', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('50', 'Doctrine save test No 50', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('51', 'Doctrine save test No 51', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('52', 'Doctrine save test No 52', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('53', 'Doctrine save test No 53', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('54', 'Doctrine save test No 54', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('55', 'Doctrine save test No 55', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('56', 'Doctrine save test No 56', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('57', 'Doctrine save test No 57', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('58', 'Doctrine save test No 58', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('59', 'Doctrine save test No 59', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('60', 'Doctrine save test No 60', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('61', 'Doctrine save test No 61', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('62', 'Doctrine save test No 62', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('63', 'Doctrine save test No 63', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('64', 'Doctrine save test No 64', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('65', 'Doctrine save test No 65', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('66', 'Doctrine save test No 66', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('67', 'Doctrine save test No 67', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('68', 'Doctrine save test No 68', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('69', 'Doctrine save test No 69', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('70', 'Doctrine save test No 70', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('71', 'Doctrine save test No 71', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('72', 'Doctrine save test No 72', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('73', 'Doctrine save test No 73', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('74', 'Doctrine save test No 74', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('75', 'Doctrine save test No 75', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('76', 'Doctrine save test No 76', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('77', 'Doctrine save test No 77', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('78', 'Doctrine save test No 78', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('79', 'Doctrine save test No 79', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('80', 'Doctrine save test No 80', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('81', 'Doctrine save test No 81', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('82', 'Doctrine save test No 82', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('83', 'Doctrine save test No 83', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('84', 'Doctrine save test No 84', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('85', 'Doctrine save test No 85', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('86', 'Doctrine save test No 86', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('87', 'Doctrine save test No 87', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('88', 'Doctrine save test No 88', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('89', 'Doctrine save test No 89', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('90', 'Doctrine save test No 90', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('91', 'Doctrine save test No 91', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('92', 'Doctrine save test No 92', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('93', 'Doctrine save test No 93', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('94', 'Doctrine save test No 94', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('95', 'Doctrine save test No 95', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('96', 'Doctrine save test No 96', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('97', 'Doctrine save test No 97', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('98', 'Doctrine save test No 98', null, null);
INSERT INTO `modelo_test_copy1` VALUES ('100', 'Doctrine save test No 100', null, null);

-- ----------------------------
-- Table structure for `pendientes`
-- ----------------------------
DROP TABLE IF EXISTS `pendientes`;
CREATE TABLE `pendientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pendientes
-- ----------------------------
INSERT INTO `pendientes` VALUES ('2', 'Crear Ayudante para crear catalogos en dos tres clicks', null);
INSERT INTO `pendientes` VALUES ('3', 'Crear Ayudante para crear catalogos en dos tres clicks', null);

-- ----------------------------
-- Table structure for `zapatos`
-- ----------------------------
DROP TABLE IF EXISTS `zapatos`;
CREATE TABLE `zapatos` (
  `id` int(11) NOT NULL,
  `modelo` char(255) DEFAULT NULL,
  `talla` char(255) DEFAULT NULL,
  `color` char(255) DEFAULT NULL,
  `marca` char(255) DEFAULT NULL,
  `seccion` char(255) DEFAULT NULL COMMENT 'adulto, niño, bebe, dama, dama',
  `tipo_de_calzado` char(255) DEFAULT NULL COMMENT 'noche, deportivo, casual, formal.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zapatos
-- ----------------------------
