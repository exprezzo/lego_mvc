/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : experimentos

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-09-13 07:27:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `colab_grupo_para_historias`
-- ----------------------------
DROP TABLE IF EXISTS `colab_grupo_para_historias`;
CREATE TABLE `colab_grupo_para_historias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of colab_grupo_para_historias
-- ----------------------------

-- ----------------------------
-- Table structure for `colab_historias`
-- ----------------------------
DROP TABLE IF EXISTS `colab_historias`;
CREATE TABLE `colab_historias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  `descripcion` text,
  `prioridad` char(255) DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of colab_historias
-- ----------------------------
INSERT INTO `colab_historias` VALUES ('5', 'Programar Tab Manager', '<br><ul><li>Evitar abrir dos tabs con el mismo contenido<br></li></ul>', '100', '15');
INSERT INTO `colab_historias` VALUES ('6', 'Crear comportamiento Grid', '<br><br><br><ul><li>Filtrar resultados.</li><li>Notificar despues de borrar.</li><li>Mascara mientras recibe los datos<br></li></ul>', '50', '15');
INSERT INTO `colab_historias` VALUES ('7', 'Crear Comportamiento formulario', '<br><br><ul><li>Iniciar con los elementos desabilitados.</li><li>Antes de cerrar, notificar cuando existan cambios pendientes.</li><li>Actualizar el titulo de la pestaÃ±a despues de cada accion.</li><li>Cuando la informacion ha sido editada, agregar el signo * para indicar que los datos han sido modificados.</li><li>Limitar el tamaÃ±o del titulo.<br></li></ul>AcciÃ³n eliminar.<ul><li>Limpiar el formulario y desabilitar los elementos.<br></li></ul><p>Accion Nuevo.<br></p><ul><li>&nbsp;Habilitar los elementos del formulario y establecer el foco en el primerr elemento.</li></ul><p><br></p><p><br></p><p>Listo.</p><ul><li><font color=\"FF0000\">Los datos en el formulario se actualizan al guarda</font><span style=\"color: rgb(255, 0, 0);\">r</span>&nbsp; <span style=\"color: rgb(0, 0, 0);\">(no se esta revisando si el guardado fue exitoso</span>).<br></li></ul>', '100', '15');
INSERT INTO `colab_historias` VALUES ('10', 'Crear Login', '', '', '15');
INSERT INTO `colab_historias` VALUES ('11', 'Editor de menus', '<br><ul><li>Reubicar menus con drag &amp; drop.</li></ul>', '0', '15');
INSERT INTO `colab_historias` VALUES ('12', 'Crear Comportamiento Tree Menu', '<br><ul><li>mostrar iconos<br></li></ul>', '100', '15');
INSERT INTO `colab_historias` VALUES ('13', null, null, null, '15');
INSERT INTO `colab_historias` VALUES ('14', null, null, null, '15');
INSERT INTO `colab_historias` VALUES ('15', null, null, null, '15');
INSERT INTO `colab_historias` VALUES ('22', 'Crear Comportamiento para el Manejador Crud (Nucleo)', '<br><ul><li>Crear Pruebas Unitarias</li></ul><p><br></p><p>Listo:</p><ul><li>Al guardar, devolver los datos guardados de manera que el form del extjss pueda recargar los datos de manera natural.</li></ul>', '0', '15');
INSERT INTO `colab_historias` VALUES ('23', 'Administrador', 'Crear un objeto respuesta que tenga los siguientes atributos:<br>&nbsp;success, titulo, mensaje, icono.<br><br><ul><li>â€‹Mensajes del sistema: info, error, notificaciones temporales.</li><li>Numberfields con con alineacion a la derecha, comas y redondeo a decimales o libre.<br></li></ul>', '0', '15');
INSERT INTO `colab_historias` VALUES ('24', 'catalogo usuarios', '<br><ul><li>generar contraseÃ±as.</li><li>Enviar&nbsp; correo al generar contraseÃ±a.</li><li>suspender usuarios.<br></li></ul>', '0', '15');
INSERT INTO `colab_historias` VALUES ('26', 'comportamiento catalogo', '<br><ul><li>Permitir manejar icono para grid y otro para formulario.<br></li></ul>', '0', '15');
INSERT INTO `colab_historias` VALUES ('34', 'Crear catalogo de productos', '', '0', '25');
INSERT INTO `colab_historias` VALUES ('35', 'Catalogo', '<br><div style=\"text-align: left;\"><ul><li>Manejar estados (pendiente, en proceso, esperando aprovacion, rechazado, listo).</li><li>Agrear propiedad dificultad<br></li></ul></div><br>', '0', '26');
INSERT INTO `colab_historias` VALUES ('41', 'Primer Historia', '', '0', '29');
INSERT INTO `colab_historias` VALUES ('42', 'Historias del Sprint  1', '', '0', '30');
INSERT INTO `colab_historias` VALUES ('43', 'Historias del sprint 2', '', '0', '31');
INSERT INTO `colab_historias` VALUES ('55', 'sadfsdf', '', '0', '29');
INSERT INTO `colab_historias` VALUES ('56', 're', '', '0', '29');

-- ----------------------------
-- Table structure for `fak_concepto`
-- ----------------------------
DROP TABLE IF EXISTS `fak_concepto`;
CREATE TABLE `fak_concepto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` decimal(18,6) DEFAULT NULL,
  `unidad` int(11) DEFAULT NULL,
  `noIdentificacion` char(255) DEFAULT NULL,
  `descripcion` char(255) NOT NULL,
  `valorUnitario` decimal(18,2) DEFAULT NULL,
  `importe` decimal(18,2) DEFAULT NULL,
  `tieneInformacionAduanera` bit(1) DEFAULT NULL,
  `tieneCuentaPredial` bit(1) DEFAULT NULL,
  `tieneComplemento` bit(1) DEFAULT NULL,
  `tieneParte` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fak_concepto
-- ----------------------------

-- ----------------------------
-- Table structure for `fak_conceptos_de_factura`
-- ----------------------------
DROP TABLE IF EXISTS `fak_conceptos_de_factura`;
CREATE TABLE `fak_conceptos_de_factura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` decimal(18,6) NOT NULL,
  `unidad` int(11) DEFAULT NULL,
  `noIdentificacion` char(255) DEFAULT NULL,
  `descripcion` char(255) NOT NULL,
  `valorUnitario` decimal(18,2) DEFAULT NULL,
  `importe` decimal(18,2) DEFAULT NULL,
  `tieneInformacionAduanera` bit(1) DEFAULT NULL,
  `tieneCuentaPredial` bit(1) DEFAULT NULL,
  `tieneComplemento` bit(1) DEFAULT NULL,
  `tieneParte` bit(1) DEFAULT NULL,
  `tipoCuentaPredial` int(11) DEFAULT NULL,
  `cuentaPredial` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fak_conceptos_de_factura
-- ----------------------------

-- ----------------------------
-- Table structure for `fak_factura`
-- ----------------------------
DROP TABLE IF EXISTS `fak_factura`;
CREATE TABLE `fak_factura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version` char(255) DEFAULT NULL,
  `serie` char(255) DEFAULT NULL,
  `folio` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `sello` text,
  `noAprovacion` int(11) DEFAULT NULL,
  `anioAprovacion` int(11) DEFAULT NULL,
  `certificado` char(255) DEFAULT NULL COMMENT 'numero del certificado usado para generar sello.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fak_factura
-- ----------------------------

-- ----------------------------
-- Table structure for `fak_informacion_aduanera`
-- ----------------------------
DROP TABLE IF EXISTS `fak_informacion_aduanera`;
CREATE TABLE `fak_informacion_aduanera` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` char(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `aduana` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fak_informacion_aduanera
-- ----------------------------

-- ----------------------------
-- Table structure for `fak_informacion_aduanera_de_parte`
-- ----------------------------
DROP TABLE IF EXISTS `fak_informacion_aduanera_de_parte`;
CREATE TABLE `fak_informacion_aduanera_de_parte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` char(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `aduana` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fak_informacion_aduanera_de_parte
-- ----------------------------

-- ----------------------------
-- Table structure for `fak_parte_de_concepto`
-- ----------------------------
DROP TABLE IF EXISTS `fak_parte_de_concepto`;
CREATE TABLE `fak_parte_de_concepto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` decimal(18,6) NOT NULL,
  `unidad` int(11) DEFAULT NULL,
  `noIdentificacion` char(255) DEFAULT NULL,
  `descripcion` char(255) NOT NULL,
  `valorUnitario` decimal(18,2) DEFAULT NULL,
  `importe` decimal(18,2) DEFAULT NULL,
  `tieneInformacionAduanera` bit(1) DEFAULT NULL,
  `tieneCuentaPredial` bit(1) DEFAULT NULL,
  `tieneComplemento` bit(1) DEFAULT NULL,
  `tieneParte` bit(1) DEFAULT NULL,
  `tipoCuentaPredial` int(11) DEFAULT NULL,
  `cuentaPredial` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fak_parte_de_concepto
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistema_menus
-- ----------------------------
INSERT INTO `sistema_menus` VALUES ('1', 'Inicio', '0', '', '', null);
INSERT INTO `sistema_menus` VALUES ('7', 'Sistema', '1', '', '/imagenes/Human-O2/16x16/categories/xfce-system.png', null);
INSERT INTO `sistema_menus` VALUES ('8', 'Usuarios', '7', 'gridUsuarios', '/imagenes/fatcow/16x16/attribution.png', null);
INSERT INTO `sistema_menus` VALUES ('15', 'Sistema: Pendientes', '7', 'gridPendientes', '/imagenes/Human-O2/16x16/apps/evolution-tasks.png', null);
INSERT INTO `sistema_menus` VALUES ('16', 'Menus (cat&aacutelogo)', '7', 'catMenus', '/imagenes/fatcow/16x16/menu.png', null);
INSERT INTO `sistema_menus` VALUES ('20', 'Bugs', '13', '', 'imagenes/Human-O2/16x16/apps/bug-buddy.png', null);
INSERT INTO `sistema_menus` VALUES ('21', 'en proceso', '1', '', '', null);
INSERT INTO `sistema_menus` VALUES ('23', 'Colab', '1', '', '', null);
INSERT INTO `sistema_menus` VALUES ('24', 'dufazt', '1', '', '', null);
INSERT INTO `sistema_menus` VALUES ('25', 'Dufazt: Pendientes.', '24', 'gridPendientes', '/imagenes/Human-O2/16x16/apps/evolution-tasks.png', null);
INSERT INTO `sistema_menus` VALUES ('26', 'Colab: Pendientes', '23', 'gridPendientes', '/imagenes/Human-O2/16x16/apps/evolution-tasks.png', null);
INSERT INTO `sistema_menus` VALUES ('27', 'Proyecto', '1', '', '', null);
INSERT INTO `sistema_menus` VALUES ('29', 'Backlog', '27', 'gridPendientes', '', null);
INSERT INTO `sistema_menus` VALUES ('30', 'Sprint 1', '29', 'gridPendientes', '', null);
INSERT INTO `sistema_menus` VALUES ('31', 'Sprint 2', '29', 'gridPendientes', '', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistema_usuarios
-- ----------------------------
INSERT INTO `sistema_usuarios` VALUES ('8', 'zesar o', 'zbibriesca@hotmail.com', null);
