/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : experimentos

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-10-21 20:45:25
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
  `Orden` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scrum_estados_de_historia
-- ----------------------------
INSERT INTO `scrum_estados_de_historia` VALUES ('1', 'Pendiente', '', '', '', '1');
INSERT INTO `scrum_estados_de_historia` VALUES ('2', 'En Proceso', '', '', '', '2');
INSERT INTO `scrum_estados_de_historia` VALUES ('3', 'Aprobar', '', '', '', '4');
INSERT INTO `scrum_estados_de_historia` VALUES ('4', 'Listo', '', '', '', '5');
INSERT INTO `scrum_estados_de_historia` VALUES ('5', 'En produccion', '', '', '', '6');
INSERT INTO `scrum_estados_de_historia` VALUES ('6', 'Revisar', '', '', '', '3');

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
  `como_probarlo` text,
  `estimado` int(11) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proyecto` (`fk_proyecto`),
  CONSTRAINT `proyecto` FOREIGN KEY (`fk_proyecto`) REFERENCES `scrum_proyectos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scrum_historias_de_usuario
-- ----------------------------
INSERT INTO `scrum_historias_de_usuario` VALUES ('9', 'Backlog', '1', '3', '1', '0', 'asdf', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('11', 'Manual como el de Extjs4 o el mismo si es posible.', '0', '4', '1', '0', '<br>', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('17', 'DSA', '3', '3', '0', '9', null, '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('24', 'Notificar al eliminar elementos, en comrportamiento grid y formulario', '25', '4', '0', '6', null, '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('26', 'Comportamiento Grid', '27', '4', '1', '6', 'al eliminar con Ã©xito, mostrar top message.<br><br><br>', '1', '', '0', '0');
INSERT INTO `scrum_historias_de_usuario` VALUES ('60', 'Tener un sistema de mensajes centralizado, que tenga presente los lenguajes humanos', '29', '4', '1', '0', '', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('61', 'al cerrar el modulo, preguntar si desea cerrar los procesos abiertos por el modulo, y cerrarlos cuando eso se decida', '28', '4', '1', '0', '', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('62', 'agregar combo icon a los comportamientos', '24', '4', '1', '0', '', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('95', 'gestionar historias de usuario', '5', '1', '0', '1', '<br>', '4', 'Menu Historias de usuario.', '10', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('98', 'quiero agregar estados a las historias', '4', '1', '0', '1', '<br>En el formulario:<br><ul><li><br></li></ul>En el grid:<br><ul><li><br></li></ul>Crear catalogo estados:<br><ul><li><br></li></ul>', '4', '', null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('99', 'quiero priorizar las historias...', '7', '1', '0', '1', 'Al crear una historia, asignar la prioridad mas baja<br>', '1', 'En el grid, se pueden mover las historias con las flechas que apuntan hacia arriba y hacia  abajo.', '2012', null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('100', 'reubicar historias', '11', '1', '0', '1', 'En el formulario:<br><ul><li>â€‹Agregar un combo para la ubicacion</li></ul>', '1', 'En el grid:\nBoton derecho, seleccionar una ubicacion en el combo, confirmar.', null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('101', 'Quiero agregar tareas a las historias', '12', '1', '0', '1', 'en el listado de historias, <br>mostrar las tareas usando el plugin del ext. <a href=\"http://localhost/ext-3.4.0/examples/grid/totals.html\">http://localhost/ext-3.4.0/examples/grid/totals.html</a><br><br>en el form:<br><br>a modo de card panel, switchear entre historia y tareas de la historia<br><br><br>', '2', '', '0', '0');
INSERT INTO `scrum_historias_de_usuario` VALUES ('103', 'Manejar los  roles de scrum asociados a usuarios del sistema', '-3', '1', '1', '0', 'Product Owner.<br>Scrum Manager.<br>Team Members.<br><br>Usuarios.<br>Otros interesados<br><br>', '1', '123', null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('104', 'organizar las historias en sprints y backlog', '10', '1', '0', '1', 'Cuando el listado de historias, tenga el filtro sprints, mostrar una columna <b>Sprint</b> con el nombre del sprint, ordenar por sprint<br><br>Cuando esta seleccionado sprints como ubicacion, mantener esa ubicacion al cambiar de proyecto.<br>', '1', '', null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('105', 'Reubicar menus arrastrando y soltando', '1', '4', '0', '6', '', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('107', 'Definir estandares para la creacion de modulos sobre coral APP.', '1', '4', '0', '6', 'crear omportamiento formulario y comportamiento grid<br><br>Al eliminar, el formulario debe quedar limpio, y se debe preguntar si cerrar.<br><br>El formulario debe notificar de cambios pendientes antes de cerrar.<br><br>agregar al comportamieno paginable, propiedad campos filtrables, para filtrar con la caja de busqueda<br><br>crear comportamiento ordenable<br><br>agregar combo icon a los comportamientos<br>', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('108', 'compotamiento formulario', '26', '4', '1', '0', '', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('109', 'Comportamiento Grid', '2', '4', '1', '0', '', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('110', 'Nueva Historia', '1', '4', '1', '0', '', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('111', 'Ver historiass en html', '1', '2', '1', '0', '', '1', null, null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('112', 'Quiero seleccionar un proyecto y mantener la seleccion entre sesiones', '6', '1', '0', '1', '<br><br>', '4', 'En el grid:\n\n     Se muestra una palomita al lado del proyecto default.\n     Se muestra un boton en el toolbar que establece como default al proyecto de la lista seleccionado.\n\nEn el formulario:\n\n    Hay un boton en el toolbar que sirve para establecer como default al proyecto abrierto.\n    Puede crear un proyecto nuevo establecido como default;\n\n', '0', '0');
INSERT INTO `scrum_historias_de_usuario` VALUES ('113', 'crear catalogo de estados ordenable, y mostrar en ese orden para todos los combos', '-1', '1', '1', '0', '', '1', '', '0', '0');
INSERT INTO `scrum_historias_de_usuario` VALUES ('114', 'Gestionar Proyectos', '5', '1', '0', '1', '', '4', 'En el menÃº, GestiÃ³n de proyectos, seleccionar la opciÃ³n proyectos, que abrirÃ¡ el catÃ¡logo proyectos, con la funcionalidad habitual.', null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('117', 'quiero imprimir un reporte de historias y de tareas', '1', '1', '1', '0', '', '1', '', '0', '0');
INSERT INTO `scrum_historias_de_usuario` VALUES ('118', 'quiero un reporte de los participantes y su actividad', '0', '1', '1', '0', '', '1', '', '0', '0');
INSERT INTO `scrum_historias_de_usuario` VALUES ('119', 'Editar Menus', '1', '4', '0', '6', '', '1', '', null, null);
INSERT INTO `scrum_historias_de_usuario` VALUES ('121', 'Estimar la duracion del proyecto y medir la duracion real', '0', '1', '1', '0', 'Usar unidades de tiempo para las mediciones y estimaciones<br><br>â€‹En el grid:<br><ul><li>Mostrar la sumatoria de la estimacion y la duracion.</li></ul>', '1', '', '1', '0');
INSERT INTO `scrum_historias_de_usuario` VALUES ('122', 'crear plugin,  labelLinkTab', '1', '4', '1', '0', '', '1', '', '0', '0');

-- ----------------------------
-- Table structure for `scrum_proyectos`
-- ----------------------------
DROP TABLE IF EXISTS `scrum_proyectos`;
CREATE TABLE `scrum_proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) NOT NULL,
  `descripcion` text,
  `predeterminado` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scrum_proyectos
-- ----------------------------
INSERT INTO `scrum_proyectos` VALUES ('1', 'Scrum', '<div style=\"text-align: center;\"><font size=\"5\">SCRUM</font><br><br></div><font size=\"4\">Â¿Que es?</font><br><ul><li><font size=\"3\">Es una manera de afrontar los sucesos cotidianos en la creacion del software.</font></li></ul><p><font size=\"4\">Â¿Que beneficion obtengo?</font></p><p><font size=\"4\"><font size=\"3\">Pues depende del papel que desempeÃ±es en el juego, los beneficion generales son:</font><br></font></p><ul><li><font size=\"3\">Creacion de productos que se adaptan a los requisitos cambiantes.</font></li><li><font size=\"3\">Enfoca el esfuerzo del equipo en conseguir los resultados.</font></li><li><font size=\"3\">Toma en cuenta la calidad de vida.</font></li><li><font size=\"3\">Maximiza la retribucion de la inversion.<br></font></li></ul><p><br></p><p><br></p><p><br></p><font size=\"4\">Â¿ Como se juega ?<br><br></font>Se integran los equipos.<br>se nombra un arbitro.<br>se nombra un product owner.<br><br><font style=\"font-family: arial;\" size=\"4\">Conceptos:<br><br></font><b>Historia de usuario</b>: Lo que un usuario haria o quiere hacer en el sistema, en texto simple y cotidiano, por lo general menos de 2 renglones en una hoja de cuaderno. Se sugiere la forma ROL - accion - Resultado. <br><br><ul><li>Ejemplo:&nbsp;</li></ul><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Como miembro del equipo, quiero chatear con el equipo (en grupo e individual) para coordinar las acciones.</p><br><b>Sprint: </b>es un periodo de trabajo con objetivo la creaciÃ³n de un entregale (una demo). <br>Contiene un numero de historias que se planea terminar en ese periodo.<br><br><b>pila de producto </b>(Backlog)<b>:</b> Es el lugar donde estan las historias que no han sido asignadas a un un sprint. Como cuando el proyecto todavia no inicia.<br><br><br><b>dueÃ±o </b>(Product Owner):<br><b>arbitro </b>(Scrum master):<br><b>Equipo</b>:<br><b>Tarea</b>:<br><span style=\"font-weight: bold;\">Kanban:</span><br><span style=\"font-weight: bold;\">Grafica BurnDown:</span><br><br>Idealmente\n las tareas han sido seleccionadas y estimadas pero&nbsp; pueden crearse al \nvuelo teniendo presente que en ese periodo debe producirse un \nentregable.', '1');
INSERT INTO `scrum_proyectos` VALUES ('2', 'Lego MVC', null, '0');
INSERT INTO `scrum_proyectos` VALUES ('3', 'Facturex', 'asf', '0');
INSERT INTO `scrum_proyectos` VALUES ('4', 'Coral App', '', '0');
INSERT INTO `scrum_proyectos` VALUES ('6', 'Eduplus', '', '0');
INSERT INTO `scrum_proyectos` VALUES ('7', 'Atica', '', '0');

-- ----------------------------
-- Table structure for `scrum_sprint`
-- ----------------------------
DROP TABLE IF EXISTS `scrum_sprint`;
CREATE TABLE `scrum_sprint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) NOT NULL,
  `fk_proyecto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scrum_sprint
-- ----------------------------
INSERT INTO `scrum_sprint` VALUES ('1', 'Sprint 1', '1');
INSERT INTO `scrum_sprint` VALUES ('3', 'Sprint  1', '2');
INSERT INTO `scrum_sprint` VALUES ('4', 'Sprint 2', '2');
INSERT INTO `scrum_sprint` VALUES ('5', 'C 1', '3');
INSERT INTO `scrum_sprint` VALUES ('6', 'SPRINT 1', '4');
INSERT INTO `scrum_sprint` VALUES ('8', 'dfa', '3');
INSERT INTO `scrum_sprint` VALUES ('9', 'qqqqqqqqqqqq', '3');

-- ----------------------------
-- Table structure for `scrum_tareas`
-- ----------------------------
DROP TABLE IF EXISTS `scrum_tareas`;
CREATE TABLE `scrum_tareas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` char(255) DEFAULT NULL,
  `prioridad` int(11) DEFAULT '0',
  `fk_historia` int(11) DEFAULT NULL,
  `detalles` text,
  `fk_estado` int(11) DEFAULT NULL,
  `estimado` int(11) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `historia` (`fk_historia`),
  CONSTRAINT `historia` FOREIGN KEY (`fk_historia`) REFERENCES `scrum_historias_de_usuario` (`id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scrum_tareas
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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sistema_menus
-- ----------------------------
INSERT INTO `sistema_menus` VALUES ('1', 'Inicio', '0', '', '', null);
INSERT INTO `sistema_menus` VALUES ('7', 'Sistema', '1', '', '/imagenes/Human-O2/16x16/categories/xfce-system.png', null);
INSERT INTO `sistema_menus` VALUES ('8', 'Usuarios', '7', 'gridUsuarios', '/imagenes/Human-O2/32x32/apps/system-users.png', null);
INSERT INTO `sistema_menus` VALUES ('15', 'Sistema: Pendientes', '7', 'gridPendientes', '/imagenes/Human-O2/16x16/apps/evolution-tasks.png', null);
INSERT INTO `sistema_menus` VALUES ('16', 'Menus (cat&aacutelogo)', '7', 'catMenus', '/imagenes/fatcow/16x16/menu.png', null);
INSERT INTO `sistema_menus` VALUES ('20', 'Bugs', '13', '', 'imagenes/Human-O2/16x16/apps/bug-buddy.png', null);
INSERT INTO `sistema_menus` VALUES ('23', 'Gestion de Proyectos', '1', '', '', null);
INSERT INTO `sistema_menus` VALUES ('34', 'Scrum', '23', 'Scrum', '/imagenes/fatcow/16x16/soil_layers.png', null);
INSERT INTO `sistema_menus` VALUES ('35', 'Proyectos', '23', 'gridProyectos', '/imagenes/fatcow/16x16/small_business.png', null);
INSERT INTO `sistema_menus` VALUES ('45', 'Historias de Usuario', '23', 'gridHistoriadeUsuario', '/imagenes/Human-O2/16x16/apps/stock_certificate.png', null);
INSERT INTO `sistema_menus` VALUES ('46', 'Sprints', '23', 'gridSprints', '/imagenes/Human-O2/16x16/apps/rclock.png', null);
INSERT INTO `sistema_menus` VALUES ('47', 'Backlog', '23', 'gridHistoriadeUsuario', '/imagenes/fatcow/16x16/viewstack.png', null);
INSERT INTO `sistema_menus` VALUES ('48', 'Participantes', '23', '', '/imagenes/fatcow/16x16/user_green.png', null);
INSERT INTO `sistema_menus` VALUES ('49', 'Kanban', '23', '', '/imagenes/Human-O2/16x16/apps/sticky-notes.png', null);
INSERT INTO `sistema_menus` VALUES ('50', 'Burn Down', '23', '', '/imagenes/fatcow/16x16/chart_stock.png', null);
INSERT INTO `sistema_menus` VALUES ('51', 'Tareas', '23', '', '/imagenes/Human-O2/16x16/actions/gtk-preferences.png', null);
INSERT INTO `sistema_menus` VALUES ('52', 'Estados', '23', '', '/imagenes/fatcow/16x16/traffic_lights.png', null);
INSERT INTO `sistema_menus` VALUES ('54', 'Bugs', '23', '', '/imagenes/Human-O2/16x16/apps/bug-buddy.png', null);
INSERT INTO `sistema_menus` VALUES ('55', 'Equipos', '23', '', '/imagenes/fatcow/16x16/reseller_programm.png', null);
INSERT INTO `sistema_menus` VALUES ('56', 'Historias y tareas', '23', 'listado_historias_y_tareas', '', null);

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
