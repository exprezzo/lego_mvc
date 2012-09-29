/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : experimentos

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-09-28 22:27:05
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
  `fk_proyecto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of colab_historias
-- ----------------------------
INSERT INTO `colab_historias` VALUES ('5', 'Programar Tab Manager', '<br><ul><li>Evitar abrir dos tabs con el mismo contenido<br></li></ul>', '100', '15', null);
INSERT INTO `colab_historias` VALUES ('6', 'Crear comportamiento Grid', '<br><br><br><ul><li>Filtrar resultados.</li><li>Notificar despues de borrar.</li><li>Mascara mientras recibe los datos<br></li></ul>', '50', '15', null);
INSERT INTO `colab_historias` VALUES ('7', 'Crear Comportamiento formulario', '<br><br><ul><li>Iniciar con los elementos desabilitados.</li><li>Antes de cerrar, notificar cuando existan cambios pendientes.</li><li>Actualizar el titulo de la pestaÃ±a despues de cada accion.</li><li>Cuando la informacion ha sido editada, agregar el signo * para indicar que los datos han sido modificados.</li><li>Limitar el tamaÃ±o del titulo.<br></li></ul>AcciÃ³n eliminar.<ul><li>Limpiar el formulario y desabilitar los elementos.<br></li></ul><p>Accion Nuevo.<br></p><ul><li>&nbsp;Habilitar los elementos del formulario y establecer el foco en el primerr elemento.</li></ul><p><br></p><p><br></p><p>Listo.</p><ul><li><font color=\"FF0000\">Los datos en el formulario se actualizan al guarda</font><span style=\"color: rgb(255, 0, 0);\">r</span>&nbsp; <span style=\"color: rgb(0, 0, 0);\">(no se esta revisando si el guardado fue exitoso</span>).<br></li></ul>', '100', '15', null);
INSERT INTO `colab_historias` VALUES ('10', 'Crear Login', '', '', '15', null);
INSERT INTO `colab_historias` VALUES ('11', 'Editor de menus', null, '0', '15', null);
INSERT INTO `colab_historias` VALUES ('12', 'Crear Comportamiento Tree Menu', '.<br><ul><li>mostrar iconos</li><li>Eliminar al ppresionar la tecla del en el arbol<br></li></ul>', '100', '15', null);
INSERT INTO `colab_historias` VALUES ('13', null, null, null, '15', null);
INSERT INTO `colab_historias` VALUES ('14', null, null, null, '15', null);
INSERT INTO `colab_historias` VALUES ('15', null, null, null, '15', null);
INSERT INTO `colab_historias` VALUES ('22', 'Crear Comportamiento para el Manejador Crud (Nucleo)', 'Crear catÃ¡logos CRUD a partir de una configuraciÃ³n. <br>Los catÃ¡logos CRUD deberÃ¡n servir para construir catÃ¡logos mÃ¡s complicados.<br><br><ul><li>Crear Pruebas Unitarias</li></ul><p><br></p><p>Listo:</p><ul><li>Al gutÃ¡ardar, devolver los datos guardados de manera que el form del extjss pueda recargar los datos de manera natural.</li></ul>', '0', '15', null);
INSERT INTO `colab_historias` VALUES ('23', 'Administrador', 'Crear un objeto respuesta que tenga los siguientes atributos:<br>&nbsp;success, titulo, mensaje, icono.<br><br><ul><li>â€‹Mensajes del sistema: info, error, notificaciones temporales.</li><li>Numberfields con con alineacion a la derecha, comas y redondeo a decimales o libre.<br></li></ul>', '0', '15', null);
INSERT INTO `colab_historias` VALUES ('24', 'catalogo usuarios', '<br><ul><li>generar contraseÃ±as.</li><li>Enviar&nbsp; correo al generar contraseÃ±a.</li><li>suspender usuarios.<br></li></ul>', '0', '15', null);
INSERT INTO `colab_historias` VALUES ('26', 'comportamiento catalogo', '<div align=\"left\"><br></div><ul><li>Permitir manejar icono para grid y otro para formulario.<br></li></ul>', '0', '15', null);
INSERT INTO `colab_historias` VALUES ('41', 'Primer Historia', '', '0', '29', null);
INSERT INTO `colab_historias` VALUES ('55', 'sadfsdf', '', '0', '29', null);
INSERT INTO `colab_historias` VALUES ('56', 're', '', '0', '29', null);
INSERT INTO `colab_historias` VALUES ('57', 'Crear un Catalogo Base', '<br><ul><li> un grid en ext designer con la configuracion basica ya establecida. </li><li>&nbsp;formulario en ext designer con la configuracion basica ya establecida.<br></li></ul>', '0', '15', null);
INSERT INTO `colab_historias` VALUES ('58', 'crear comportamiento maestro detalle', null, '0', '15', null);

-- ----------------------------
-- Table structure for `colab_tareas_de_historia`
-- ----------------------------
DROP TABLE IF EXISTS `colab_tareas_de_historia`;
CREATE TABLE `colab_tareas_de_historia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  `prioridad` char(255) DEFAULT NULL,
  `fk_historia` int(11) DEFAULT NULL,
  `dificultad` int(11) DEFAULT NULL,
  `tiempo_estimado` time DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `usuario_asignado` char(255) DEFAULT NULL,
  `fk_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of colab_tareas_de_historia
-- ----------------------------
INSERT INTO `colab_tareas_de_historia` VALUES ('1', 'asdf', null, '7', null, null, null, null, null);
INSERT INTO `colab_tareas_de_historia` VALUES ('2', 'Una Tarea', null, '7', null, null, null, null, null);
INSERT INTO `colab_tareas_de_historia` VALUES ('5', 'Otra Tarea', null, '7', null, null, null, null, null);
INSERT INTO `colab_tareas_de_historia` VALUES ('6', 'sds', null, '11', null, null, null, null, null);
INSERT INTO `colab_tareas_de_historia` VALUES ('7', '', null, '11', null, null, null, null, null);
INSERT INTO `colab_tareas_de_historia` VALUES ('8', 'aas', null, '11', null, null, null, null, null);
INSERT INTO `colab_tareas_de_historia` VALUES ('9', 'Una dtarea super facil', null, null, null, null, null, null, null);
INSERT INTO `colab_tareas_de_historia` VALUES ('10', 'Una tarea', null, '10', null, null, null, null, null);
INSERT INTO `colab_tareas_de_historia` VALUES ('11', 'Tarea', null, '22', null, null, null, null, null);
INSERT INTO `colab_tareas_de_historia` VALUES ('12', 'sdfgsd', null, '23', null, null, null, null, null);

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
-- Table structure for `scrum_estados_de_historia`
-- ----------------------------
DROP TABLE IF EXISTS `scrum_estados_de_historia`;
CREATE TABLE `scrum_estados_de_historia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) NOT NULL,
  `icon` char(255) NOT NULL DEFAULT '',
  `default` bit(1) NOT NULL DEFAULT b'0',
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scrum_estados_de_historia
-- ----------------------------
INSERT INTO `scrum_estados_de_historia` VALUES ('1', 'Pendiente', '', '', '');
INSERT INTO `scrum_estados_de_historia` VALUES ('2', 'En Proceso', '', '', '');
INSERT INTO `scrum_estados_de_historia` VALUES ('3', 'Aprobar', '', '', '');
INSERT INTO `scrum_estados_de_historia` VALUES ('4', 'Listo', '', '', '');
INSERT INTO `scrum_estados_de_historia` VALUES ('5', 'En produccion', '', '', '');

-- ----------------------------
-- Table structure for `scrum_historias_de_usuario`
-- ----------------------------
DROP TABLE IF EXISTS `scrum_historias_de_usuario`;
CREATE TABLE `scrum_historias_de_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` char(255) DEFAULT NULL,
  `prioridad` int(11) DEFAULT '0',
  `fk_proyecto` int(11) DEFAULT NULL,
  `es_backlog` tinyint(1) NOT NULL,
  `fk_sprint` int(11) DEFAULT NULL,
  `detalles` text,
  `fk_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scrum_historias_de_usuario
-- ----------------------------
INSERT INTO `scrum_historias_de_usuario` VALUES ('1', 'ROOT', '0', '0', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('9', 'Backlog', '1', '3', '1', '0', 'asdf', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('11', 'Manual como el de Extjs4 o el mismo si es posible.', '1', '4', '1', '0', '<br>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('17', 'DSA', '1', '3', '0', '9', null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('18', 'Mover historias de usuario entre sprints y backlog', '0', '1', '0', '1', '<br><span style=\"background-color: rgb(0, 0, 255);\">Recargar el combo con la lista de sprints y el backlog en primer lugar, omitiendo la ubicacion actual</span>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('19', 'maxlenght:250mmaxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxlenght:250maxaxlenght:250', '2', '0', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('24', 'Notificar al eliminar elementos, en comrportamiento grid y formulario', '4', '4', '0', '0', null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('26', 'Comportamiento Grid', '7', '4', '0', '6', 'al eliminar con Ã©xito, mostrar top message<br><ul><li>filtrar resultados</li><li><br></li></ul>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('27', 'Al cambiar de proyecto, refrescar el tab activo', '-1', '1', '1', '0', '', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('28', 'General', '86', '1', '1', '0', '<br>crear combo Status<br>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('29', 'quiero crear Historias de usuario y gestionarlas', '1', '1', '0', '1', '<span style=\"color: rgb(51, 153, 102);\">crear catalogo de historias de usuario.<br><br><br></span><br>quiero que el listado de historias de usuario diga <br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Backlog</b>:&nbsp; Historia X Ã³&nbsp; <br><span style=\"font-weight: bold;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sprint X</span>: historia Y<br><br>quiero priorizar las historias, moviendolas.<br><br>agregar categorias (sin subcategorias) al formulario y agregar filtro al\n grid, permitir multiseleccion para cambiar prioridad por grupo<br><br>agregar campos de historia adicionales de manera configurable (Â¿por proyecto?)<br><ul><li>Componentes</li><li>Solicitante</li><li>Bug tracking ID<br></li></ul>dividir historia<br><br>quiero agregar estados a las historias y filtrar los resultados por esos estados, agregar explicacion para cada estado:<br><ul><li>terminada</li><li>lista</li><li>en espera</li><li>en proceso<br></li></ul>quiero que todos puedan crear historias, pero que solo el dueÃ±o de producto pueda agregarlas al backlog y al sprint.<br><br>quiero que las tareas notifiquen a los participantes del proyecto, de cambios (de estado principalmente), de creacion y de eliminacion.<br><br>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('30', 'Comportamiento Formulario', '11', '4', '0', '6', 'Al eliminar, el formulario debe quedar limpio, y se debe preguntar si cerrar.<br><br>El formulario debe notificar de cambios pendientes antes de cerrar.<br>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('35', 'quiero gestionar varios proyectos', '4', '1', '0', '1', '<br style=\"color: rgb(0, 0, 255);\"><span style=\"color: rgb(0, 128, 128);\"><span style=\"color: rgb(0, 0, 255);\">crear catalogo proyecto</span><br style=\"color: rgb(0, 0, 255);\"><br style=\"color: rgb(0, 0, 255);\"><span style=\"color: rgb(0, 0, 255);\">agregar combo para seleccionar proyecto y que el label del combo abra el catalogo de proyectos, que se seleccione por default el primer proyecto en caso</span><br style=\"color: rgb(0, 0, 255);\"><span style=\"color: rgb(0, 0, 255);\">de no existir en sesion.</span><br><br></span><font color=\"FF0000\">en el grid, el boton eliminar no funciona<br><br>el combo no se selecciona por defaul, aparece un cero<br><br></font>Refrescar el tab activo al seleccionar proyecto<br><br>en caso de no existir un prroyecto seleccionado, todos los modulos lanzan un mensaje de error notificando de la situacion, <br><br>poder configurar un proyecto default<br><br>mostrar en el calendario, las fechas de los sprint s de diferentes proyectos<br><br>al cambiar de proyecto, cerrar todos los tabs del scrum, menos el backlog<br>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('36', 'que los usuarios puedan comentar acerca de las historias y tareas', '87', '1', '1', '0', '', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('37', 'Implementar roles de Scrum', '88', '1', '1', '0', '<br><font color=\"003366\" size=\"6\">Roles de Scrum.</font><br><br><b>DueÃ±o de producto:</b><br><br><b>Arbitro Scrum:</b><br><br><b>equipo de scrum:</b><br><br>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('38', 'Implementar Reuniones de EstimaciÃ³n', '99', '1', '1', '0', '<br>â€‹permitir reuniones sincronas y asincronas<br>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('39', 'quiero crear tareas, y gestionarlas', '15', '1', '0', '1', 'crear catalogo de tareas, <br>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('41', 'quiero crear Sprints y gestionarlos', '3', '1', '0', '1', '<br>agregar duracion del sprint<br><br>agregar fecha de inicio y fin<br><br>los sprints con fecha de inicio y fin se mostraran en el calendario<br><br><font color=\"FF0000\">en el catalogo no se borran los sprints</font><br><br>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('42', 'Registrar las excepciones y el \"estack trace\"', '21', '2', '1', '0', '', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('44', 'quiero priorizar las historias.', '2', '1', '0', '1', '<br>En el formulario, permitir agregar una cantidad numÃ©rica, <br><ul><li>impedir repetir la importancia a las historias del mismo padre, <br></li><li>establecer una prioridad por default (la mas baja)</li></ul><br>En el grid:<br><ul style=\"background-color: rgb(255, 255, 255);\"><li><font color=\"0000FF\">moverlas con flechas up-down;</font></li></ul><ul><li>â€‹mantener seleccionada la historia, porque al moverla se selecciona siempre el primer elemento.</li></ul>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('45', 'SCRUM', '100', '1', '1', '0', '<br>Scrum es un comportamiento, para los involucrados en la creaciÃ³n de software.<br><br>EstÃ¡ Enfocado a resultados rÃ¡pidos y periÃ³dicos. <br><br>Establece reglas generales y roles, como en los juegos deportivos.<br><br><br><br>Un Sprint es un periodo de trabajo, recomendado entre 20 y 40 dias (confirmar).<br><br>En ese periodo de trabajo, se realizan tareas por el equipo de desarrollo.<br><br>Idealmente\n las tareas han sido seleccionadas y estimadas pero&nbsp; pueden crearse al \nvuelo teniendo presente que en ese periodo debe producirse un \nentregable.<br>', '2');
INSERT INTO `scrum_historias_de_usuario` VALUES ('47', 'el controlador debe manejar excepciones generales y propias del sistema.', '0', '2', '1', '0', '', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('48', 'el controlador debe reconocer cuando responder con ajax y cuando con html', '0', '2', '1', '0', '', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('55', 'en el panel principal, quiero mostrar un resumen del estado de las historias, tanto el backlog como en los sprints.', '0', '1', '1', '0', 'Al nodo backlog y a cada nodo de sprint, agregar un subnodo por cada estado, indicando el numero de tareas que se encuentran en ese estado.<br><br>Al darle click a un nodo, abrir el grid de historias de usuario filtrando por ese status.<br>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('56', 'quiero agregar estados a las historias', '20', '1', '0', '1', 'form:<br><ul><li>Agregar combo estado en el toolbar, desabilitado en nuevo con estado por defaul seleccionado (desde configuracion)<br></li></ul><br>grid:<br><ul><li>agregar filtro por estados<br></li></ul><br><ul><li>crear catalogo estados, <span style=\"font-weight: bold;\">nombre </span>estado, <span style=\"font-weight: bold;\">icono </span>(caja de texto para escribir ruta),&nbsp; <span style=\"font-weight: bold;\">descripcion </span>(para mostrar como ayuda talvez en tooltip), <span style=\"font-weight: bold;\">default </span>(boton togle en el toolbar, cuando no hay uno default, seleccionar automaticamente, cuando ya existe default, no presionar)<br></li></ul><br>Grid Estado:<br><ul><li>Basico.<br></li></ul>Form Estado:<br><ul><li>configurar un estado por default.</li></ul><br><br>', '3');
INSERT INTO `scrum_historias_de_usuario` VALUES ('57', 'Sprint 2', '0', '2', '0', '3', '', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('58', 'manejar modulos', '0', '2', '1', '0', '<br><br><font face=\"tahoma, arial, helvetica, sans-serif\"><span style=\"font-size: 12px;\">â€‹crear carpeta modulos, dentro de alli cada modulo con sus respectivos controladores, modelos y vistas.</span></font><br><font face=\"tahoma, arial, helvetica, sans-serif\"><span style=\"font-size: 12px;\">cada modulo tendria la estructura de la carpeta mvc, enconces las peticiones tendrian la forma:</span></font><br><br><b style=\"color: rgb(0, 0, 0); font-family: tahoma, arial, helvetica, sans-serif; font-size: 12px; \">MODULO/controlador/accion</b><br><br><ul><li><font face=\"tahoma, arial, helvetica, sans-serif\"><span style=\"font-size: 12px;\">crear pruebas unitarias</span></font></li></ul>', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('59', 'crear pruenas unitarias', '30', '1', '1', '0', '', null);

-- ----------------------------
-- Table structure for `scrum_proyectos`
-- ----------------------------
DROP TABLE IF EXISTS `scrum_proyectos`;
CREATE TABLE `scrum_proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scrum_proyectos
-- ----------------------------
INSERT INTO `scrum_proyectos` VALUES ('1', 'Scrum', null);
INSERT INTO `scrum_proyectos` VALUES ('2', 'Lego MVC', null);
INSERT INTO `scrum_proyectos` VALUES ('3', 'Facturacion', null);
INSERT INTO `scrum_proyectos` VALUES ('4', 'Coral App', null);
INSERT INTO `scrum_proyectos` VALUES ('5', 'asd', null);

-- ----------------------------
-- Table structure for `scrum_sprint`
-- ----------------------------
DROP TABLE IF EXISTS `scrum_sprint`;
CREATE TABLE `scrum_sprint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) NOT NULL,
  `fk_proyecto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scrum_sprint
-- ----------------------------
INSERT INTO `scrum_sprint` VALUES ('1', 'A Sprint 1', '1');
INSERT INTO `scrum_sprint` VALUES ('3', 'Sprint  1', '2');
INSERT INTO `scrum_sprint` VALUES ('4', 'Sprint 2', '2');
INSERT INTO `scrum_sprint` VALUES ('5', 'C 1', '3');
INSERT INTO `scrum_sprint` VALUES ('6', 'SPRINT 1', '4');
INSERT INTO `scrum_sprint` VALUES ('8', 'dfa', '3');
INSERT INTO `scrum_sprint` VALUES ('9', 'qqqqqqqqqqqq', '3');
INSERT INTO `scrum_sprint` VALUES ('10', 'TESTS Priorizar', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistema_menus
-- ----------------------------
INSERT INTO `sistema_menus` VALUES ('1', 'Inicio', '0', '', '', null);
INSERT INTO `sistema_menus` VALUES ('7', 'Sistema', '1', '', '/imagenes/Human-O2/16x16/categories/xfce-system.png', null);
INSERT INTO `sistema_menus` VALUES ('8', 'Usuarios', '7', 'gridUsuarios', '/imagenes/fatcow/16x16/attribution.png', null);
INSERT INTO `sistema_menus` VALUES ('15', 'Sistema: Pendientes', '7', 'gridPendientes', '/imagenes/Human-O2/16x16/apps/evolution-tasks.png', null);
INSERT INTO `sistema_menus` VALUES ('16', 'Menus (cat&aacutelogo)', '7', 'catMenus', '/imagenes/fatcow/16x16/menu.png', null);
INSERT INTO `sistema_menus` VALUES ('20', 'Bugs', '13', '', 'imagenes/Human-O2/16x16/apps/bug-buddy.png', null);
INSERT INTO `sistema_menus` VALUES ('23', 'Scrum', '1', '', '', null);
INSERT INTO `sistema_menus` VALUES ('34', 'Historias de usuario', '23', 'Scrum', '', null);
INSERT INTO `sistema_menus` VALUES ('35', 'Proyectos', '23', 'gridProyectos', '/imagenes/Human-O2/16x16/actions/gtk-preferences.png', null);
INSERT INTO `sistema_menus` VALUES ('43', 'Modulos', '7', 'gridTareas', '', null);
INSERT INTO `sistema_menus` VALUES ('44', 'Coral Framework', '1', '', '', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistema_usuarios
-- ----------------------------
INSERT INTO `sistema_usuarios` VALUES ('8', 'zesar o', 'zbibriesca@hotmail.com', null);
INSERT INTO `sistema_usuarios` VALUES ('9', 'asdf', 'asd@asd.asd', null);
