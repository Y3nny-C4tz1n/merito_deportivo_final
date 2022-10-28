/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL
 Source Server Type    : MySQL
 Source Server Version : 100410
 Source Host           : localhost:3306
 Source Schema         : voto_merito

 Target Server Type    : MySQL
 Target Server Version : 100410
 File Encoding         : 65001

 Date: 26/10/2022 22:22:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cat_asociacion
-- ----------------------------
DROP TABLE IF EXISTS `cat_asociacion`;
CREATE TABLE `cat_asociacion`  (
  `pk_asociacion` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `estatus` tinyint(1) NULL DEFAULT 0,
  PRIMARY KEY (`pk_asociacion`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cat_asociacion
-- ----------------------------
INSERT INTO `cat_asociacion` VALUES (1, 'AJEDREZ', 1);
INSERT INTO `cat_asociacion` VALUES (2, 'ATLETISMO', 1);
INSERT INTO `cat_asociacion` VALUES (3, 'BASQUETBOL', 1);
INSERT INTO `cat_asociacion` VALUES (4, 'BEISBOL', 1);
INSERT INTO `cat_asociacion` VALUES (5, 'BOLICHE', 1);
INSERT INTO `cat_asociacion` VALUES (6, 'BOXEO', 1);
INSERT INTO `cat_asociacion` VALUES (7, 'CANOTAJE', 1);
INSERT INTO `cat_asociacion` VALUES (8, 'CICLISMO', 1);
INSERT INTO `cat_asociacion` VALUES (9, 'CIEGOS Y DÉBILES VISUALES', 1);
INSERT INTO `cat_asociacion` VALUES (10, 'DEPORTE SOBRE SILLA DE RUEDAS', 1);
INSERT INTO `cat_asociacion` VALUES (11, 'DEPORTISTAS CON DISCAPACIDAD AUDITIVA', 1);
INSERT INTO `cat_asociacion` VALUES (12, 'DEPORTISTAS CON DISCAPACIDAD INTELECTUAL', 1);
INSERT INTO `cat_asociacion` VALUES (13, 'DEPORTISTAS CON PARALISIS CEREBRAL', 1);
INSERT INTO `cat_asociacion` VALUES (14, 'DISCO VOLADOR ', 1);
INSERT INTO `cat_asociacion` VALUES (15, 'ESGRIMA', 1);
INSERT INTO `cat_asociacion` VALUES (16, 'FISICOCONSTRUCTIVISMO', 1);
INSERT INTO `cat_asociacion` VALUES (17, 'FUTBOL', 1);
INSERT INTO `cat_asociacion` VALUES (18, 'FUTBOL AMERICANO', 1);
INSERT INTO `cat_asociacion` VALUES (19, 'GIMNASIA', 1);
INSERT INTO `cat_asociacion` VALUES (20, 'HANDBALL', 1);
INSERT INTO `cat_asociacion` VALUES (21, 'HOCKEY', 1);
INSERT INTO `cat_asociacion` VALUES (22, 'JUDO', 1);
INSERT INTO `cat_asociacion` VALUES (23, 'JUEGOS Y DEPORTES AUTOCTONOS', 1);
INSERT INTO `cat_asociacion` VALUES (24, 'KARATE DO', 1);
INSERT INTO `cat_asociacion` VALUES (25, 'LEVANTAMIENTO DE PESAS', 1);
INSERT INTO `cat_asociacion` VALUES (26, 'LUCHAS ASOCIADAS', 1);
INSERT INTO `cat_asociacion` VALUES (27, 'NATACIÓN', 1);
INSERT INTO `cat_asociacion` VALUES (28, 'PATINES SOBRE RUEDAS', 1);
INSERT INTO `cat_asociacion` VALUES (29, 'PENTATLÓN', 1);
INSERT INTO `cat_asociacion` VALUES (30, 'REMO', 1);
INSERT INTO `cat_asociacion` VALUES (31, 'SOFTBOL', 1);
INSERT INTO `cat_asociacion` VALUES (32, 'TAE KWON DO', 1);
INSERT INTO `cat_asociacion` VALUES (33, 'TENIS', 1);
INSERT INTO `cat_asociacion` VALUES (34, 'TENIS DE MESA', 1);
INSERT INTO `cat_asociacion` VALUES (35, 'TIRO CON ARCO', 1);
INSERT INTO `cat_asociacion` VALUES (36, 'TIRO DEPORTIVO', 1);
INSERT INTO `cat_asociacion` VALUES (37, 'TRIATLON', 1);

-- ----------------------------
-- Table structure for cat_estatus
-- ----------------------------
DROP TABLE IF EXISTS `cat_estatus`;
CREATE TABLE `cat_estatus`  (
  `pk_estatus` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pk_estatus`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cat_estatus
-- ----------------------------
INSERT INTO `cat_estatus` VALUES (1, 'Activo');
INSERT INTO `cat_estatus` VALUES (2, 'Inactivo');

-- ----------------------------
-- Table structure for cat_modalidad
-- ----------------------------
DROP TABLE IF EXISTS `cat_modalidad`;
CREATE TABLE `cat_modalidad`  (
  `pk_modalidad` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`pk_modalidad`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cat_modalidad
-- ----------------------------
INSERT INTO `cat_modalidad` VALUES (1, 'DEPORTISTA INDIVIDUAL', 1);
INSERT INTO `cat_modalidad` VALUES (2, 'EQUIPO DEPORTES INDIVIDUAL', 1);
INSERT INTO `cat_modalidad` VALUES (3, 'DEPORTISTA DE CONJUNTO', 1);
INSERT INTO `cat_modalidad` VALUES (4, 'EQUIPO DEPORTES DE CONJUNTO', 1);
INSERT INTO `cat_modalidad` VALUES (5, 'DEPORTISTA PARALIMPICO', 1);
INSERT INTO `cat_modalidad` VALUES (6, 'EQUIPO PARALIMPICO', 1);
INSERT INTO `cat_modalidad` VALUES (7, 'DEPORTISTA MUNICIPIO', 1);

-- ----------------------------
-- Table structure for cat_perfil
-- ----------------------------
DROP TABLE IF EXISTS `cat_perfil`;
CREATE TABLE `cat_perfil`  (
  `pk_perfil` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `comentarios` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pk_perfil`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cat_perfil
-- ----------------------------
INSERT INTO `cat_perfil` VALUES (1, 'ADMINISTRADOR', 'ADMINISTRADOR DEL SISTEMA');
INSERT INTO `cat_perfil` VALUES (2, 'CAPTURISTA', 'CAPTURISTA DEL SISTEMA');
INSERT INTO `cat_perfil` VALUES (5, 'VOTANTE', 'ACCESO SOLO A VOTACIONES');

-- ----------------------------
-- Table structure for nominado
-- ----------------------------
DROP TABLE IF EXISTS `nominado`;
CREATE TABLE `nominado`  (
  `pk_nominado` int NOT NULL AUTO_INCREMENT,
  `nombre_nominado` varchar(130) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fk_asociacion` int NULL DEFAULT NULL,
  `fk_modalidad` int NULL DEFAULT NULL,
  `fk_usuario` int NULL DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT 1,
  `fecha_creacion` date NULL DEFAULT NULL,
  `fecha_modificacion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pk_nominado`) USING BTREE,
  INDEX `fk_asociacion`(`fk_asociacion`) USING BTREE,
  INDEX `fk_modalidad`(`fk_modalidad`) USING BTREE,
  INDEX `fk_usuario`(`fk_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of nominado
-- ----------------------------
INSERT INTO `nominado` VALUES (1, 'Rodrigo Jesús Aguila Lara', 9, 5, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (2, 'Karla Ivette Esquivel Chac', 9, 5, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (3, 'José de Jesus Flores Peniche', 9, 5, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (4, 'José Santiago Gío Ceballos', 21, 3, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (5, 'José Damián López Gamboa', 21, 3, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (6, 'Pascual Ricardo Vázquez Ek', 21, 3, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (7, 'Sion Radamantys Galaviz Medina', 1, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (8, 'Santiago Zacarías Rodriguez', 1, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (9, 'Enzo Alejandro Jean Cravero', 2, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (10, 'Yamile Guadalupe Rangel Aguilar', 2, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (11, 'Claudina Díaz Castro', 2, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (12, 'Roberto Esquivel Ortegon', 2, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (13, 'Ivanna Emire Villalobos Erosa', 5, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (14, 'Santiago Moreno Torres', 5, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (15, 'Lenadro Daniel Sauri May', 15, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (16, 'Rafael Gerardo Ramón Rojas Solís', 15, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (17, 'Santiago Alberto Delgado Fuentes', 15, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (18, 'Vanesa Yaresvi Maza Campos', 16, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (19, 'Ana Patricia Fonseca de la Rosa', 16, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (20, 'Patricia Cristina Núñez Pavón', 19, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (21, 'Adirem Tejeda Amaro', 19, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (22, 'Dalia de Jésus Alcocer Piña', 19, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (23, 'Esaul Ceballos Cervera', 19, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (24, 'Guido Habib Cuevas Aguilar', 22, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (25, 'Valeria Johana Espinosa Godoy', 22, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (26, 'Freddy Angel Llanes Dzul', 22, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (27, 'Jose Jassiel Espinosa Godoy', 22, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (28, 'Gabriel Vladimir Galaz Chacón', 24, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (29, 'Paloma Denis Gallareta', 24, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (30, 'Diana Esther Chay Dzul', 25, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (31, 'Josue Said Medina Andueza', 25, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (32, 'Mauricio Cristofer Canul Facundo', 25, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (33, 'Natalia Sofía Castillo Núñez ', 28, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (34, 'Constanza Sansores Méndez', 28, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (35, 'Enna Valeria Montejo Pérez', 28, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (36, 'Diego Hernández Abúndez', 30, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (37, 'Katherine Hernández Abúndez', 30, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (38, 'Lucero Valeria Arjona Pérez', 30, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (39, 'Hansel Alberto García Duarte', 37, 1, 1, 1, '2022-10-26', NULL);
INSERT INTO `nominado` VALUES (40, 'María José Reytor Molina', 37, 1, 1, 1, '2022-10-26', NULL);

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `pk_usuario` int NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT 'Usuario para logueo',
  `contrasena_usuario` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT 'Contraseña',
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT 'Nombre completo',
  `apellido1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellido2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `telefono_usuario` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Telefono oficina',
  `correo_usuario` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Correo electrónico',
  `fk_estatus` int NULL DEFAULT 1 COMMENT '1 -> Activo\r\n 2 -> Inactivo',
  `fecha_creacion` date NULL DEFAULT NULL,
  `fk_perfil` int NULL DEFAULT NULL COMMENT 'Para identificar con tbl_sistema_perfiles',
  `fecha_modificacion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `fechaUltimoAcceso` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`pk_usuario`) USING BTREE,
  INDEX `fk_perfil`(`fk_perfil`) USING BTREE,
  INDEX `fk_estatus`(`fk_estatus`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'Catalogo con la realación de usuarios que acceden a la plataforma' ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (1, 'alfredo.carmona', 'a7d579ba76398070eae654c30ff153a4c273272a', 'Alfredo Gualfre', 'Carmona', 'Irigoyen', '9994119483', 'acarmona@gmail.com', 1, '2022-07-13', 1, '2022-10-26 18:49:25', '2022-10-26 18:49:25');
INSERT INTO `usuario` VALUES (12, 'yeni.catzin', '7c222fb2927d828af22f592134e8932480637c0d', 'Yeni', 'Catzin', 'Puc', '', 'yeni@gmail.com', 1, '2022-10-26', 1, '2022-10-26 18:48:45', '2022-10-26 18:48:45');

-- ----------------------------
-- Table structure for voto
-- ----------------------------
DROP TABLE IF EXISTS `voto`;
CREATE TABLE `voto`  (
  `pk_voto` int NOT NULL AUTO_INCREMENT,
  `fk_usuario` int NULL DEFAULT NULL,
  `fk_nominado` int NULL DEFAULT NULL,
  `fk_modalidad` int NULL DEFAULT NULL,
  `fecha_creacion` date NULL DEFAULT NULL,
  `punto` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '1',
  PRIMARY KEY (`pk_voto`) USING BTREE,
  INDEX `fk_usuario`(`fk_usuario`) USING BTREE,
  INDEX `fk_nominado`(`fk_nominado`) USING BTREE,
  INDEX `fk_modalidad`(`fk_modalidad`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of voto
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
