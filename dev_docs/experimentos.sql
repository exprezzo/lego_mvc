/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : experimentos

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-09-10 06:55:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `pendientes`
-- ----------------------------
DROP TABLE IF EXISTS `pendientes`;
CREATE TABLE `pendientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  `descripcion` text,
  `prioridad` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pendientes
-- ----------------------------
INSERT INTO `pendientes` VALUES ('5', 'Programar Tab Manager', '<br><ul><li>Evitar abrir dos tabs con el mismo contenido<br></li></ul>', '100');
INSERT INTO `pendientes` VALUES ('6', 'Crear comportamiento Grid', '<br><br><ul><li>Filtrar resultados.</li><li>Notificar despues de borrar.<br></li></ul>', '50');
INSERT INTO `pendientes` VALUES ('7', 'Crear Comportamiento formulario', '<br>Pendiente<br><ul><li>Eliminar.</li><li>Antes de cerrar, notificar cuando existan cambios pendientes.<br></li></ul><p>Listo<br></p><ul><li>Actualiza los datos del formulario al guardar.</li></ul>', '100');
INSERT INTO `pendientes` VALUES ('10', 'Crear Login', '', null);
INSERT INTO `pendientes` VALUES ('11', 'Crear editor de menus', '', '');
INSERT INTO `pendientes` VALUES ('12', 'Crear Comportamiento Tree Menu', '<br><ul><li>mostrar iconos<br></li></ul>', '100');
INSERT INTO `pendientes` VALUES ('13', null, null, null);
INSERT INTO `pendientes` VALUES ('14', null, null, null);
INSERT INTO `pendientes` VALUES ('15', null, null, null);
INSERT INTO `pendientes` VALUES ('22', 'Crear Comportamiento para el Manejador Crud (Nucleo)', '<br><ul><li>Al guardar, devolver los datos guardados de manera que el form del extjss pueda recargar los datos de manera natural.</li></ul><ul><li>Crear Pruebas Unitarias<br></li></ul>', '');
INSERT INTO `pendientes` VALUES ('23', 'Administrador', 'Crear un objeto respuesta que tenga los siguientes atributos:<br>&nbsp;success, titulo, mensaje, icono.<br><br><ul><li>â€‹Mensajes del sistema: info, error, notificaciones temporales.<br></li></ul>', '');
INSERT INTO `pendientes` VALUES ('24', 'catalogo usuarios', '<br><ul><li>generar contraseÃ±as.</li><li>Enviar&nbsp; correo al generar contraseÃ±a.</li><li>suspender usuarios.<br></li></ul>', '0');

-- ----------------------------
-- Table structure for `sistema_menus`
-- ----------------------------
DROP TABLE IF EXISTS `sistema_menus`;
CREATE TABLE `sistema_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) NOT NULL,
  `padre` int(11) DEFAULT NULL,
  `xtype` char(255) DEFAULT NULL,
  `icon` char(255) DEFAULT NULL,
  `orden` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistema_menus
-- ----------------------------
INSERT INTO `sistema_menus` VALUES ('7', 'Sistema', '0', '', null, null);
INSERT INTO `sistema_menus` VALUES ('8', 'Usuarios', '7', 'gridUsuarios', '', null);
INSERT INTO `sistema_menus` VALUES ('15', 'Pendientes', '7', 'gridPendientes', null, null);
INSERT INTO `sistema_menus` VALUES ('16', 'Menus (cat&aacutelogo)', '7', 'catMenus', null, '0');

-- ----------------------------
-- Table structure for `sistema_usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `sistema_usuarios`;
CREATE TABLE `sistema_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `pass` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistema_usuarios
-- ----------------------------
INSERT INTO `sistema_usuarios` VALUES ('8', 'zesar', 'zbibriesca@hotmail.com', null);
