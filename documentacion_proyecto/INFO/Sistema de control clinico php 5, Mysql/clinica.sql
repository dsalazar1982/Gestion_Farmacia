-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 25-02-2016 a las 23:27:15
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `clinica`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `administrador`
-- 

CREATE TABLE `administrador` (
  `CEDULA` int(15) unsigned NOT NULL,
  `NOMBRE` varchar(20) collate utf8_spanish_ci NOT NULL,
  `USER` varchar(20) collate utf8_spanish_ci NOT NULL,
  `PW` varchar(45) collate utf8_spanish_ci NOT NULL,
  `EMAIL` varchar(20) collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`CEDULA`),
  UNIQUE KEY `USER` (`USER`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `administrador`
-- 

INSERT INTO `administrador` VALUES (23134135, 'YONATHAN', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'jond_14@hotmail,com');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `evolucion`
-- 

CREATE TABLE `evolucion` (
  `cod_alu` varchar(10) NOT NULL,
  `fecha` datetime NOT NULL,
  `diacno` varchar(300) NOT NULL,
  `trat` varchar(300) NOT NULL,
  `id` int(4) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=111 ;

-- 
-- Volcar la base de datos para la tabla `evolucion`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `evolucionc`
-- 

CREATE TABLE `evolucionc` (
  `cod_alu` varchar(10) NOT NULL,
  `id` int(4) NOT NULL auto_increment,
  `fecha` varchar(10) NOT NULL,
  `servicio` varchar(20) NOT NULL,
  `evolucion` varchar(180) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

-- 
-- Volcar la base de datos para la tabla `evolucionc`
-- 

INSERT INTO `evolucionc` VALUES ('A0001', 56, '18-10-2014', '', 'cirugia');
INSERT INTO `evolucionc` VALUES ('A0001', 59, ' 14-10-18 ', 'dddd', 'asdsadsaasd');
INSERT INTO `evolucionc` VALUES ('A0002', 60, '18-10-2014', 'CIRUGIA', 'asdasdasdasd');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `fotos`
-- 

CREATE TABLE `fotos` (
  `id_foto` varchar(15) NOT NULL,
  `nombre` varchar(45) default NULL,
  `des` varchar(45) default NULL,
  PRIMARY KEY  (`id_foto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `fotos`
-- 

INSERT INTO `fotos` VALUES ('20141018174738', '', '');
INSERT INTO `fotos` VALUES ('20141019211331', '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `gasas`
-- 

CREATE TABLE `gasas` (
  `cod_alu` varchar(10) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `p_nom` varchar(30) NOT NULL,
  `t_i` varchar(30) NOT NULL,
  `ciru` varchar(60) NOT NULL,
  `p_a` varchar(60) NOT NULL,
  `s_a` varchar(60) NOT NULL,
  `aneste` varchar(30) NOT NULL,
  `instru` varchar(60) NOT NULL,
  `circu` varchar(30) NOT NULL,
  `compre` varchar(60) NOT NULL,
  `cantidad_c` varchar(60) NOT NULL,
  `gasas` varchar(60) NOT NULL,
  `cantidad_g` varchar(60) NOT NULL,
  `c_c` varchar(60) NOT NULL,
  `n_c` varchar(60) NOT NULL,
  `obser` varchar(60) NOT NULL,
  `biop` varchar(60) NOT NULL,
  `dren` varchar(60) NOT NULL,
  `recu` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `gasas`
-- 

INSERT INTO `gasas` VALUES ('A0003', '19-10-2014', 'ASDASDSAASASD', 'FDSDSFFSD', 'SDFDDSFFSDFDS', '', 'DFSDSFFDSFSD', 'DSFDSFFDSDSF', 'SDFDSFSDFDSF', 'SDFDSFSDFSDF', '', 'DSFDSFFDS', '', '', '', '', '', '', '', '');
INSERT INTO `gasas` VALUES ('A0004', '19-10-2014', 'ASSADSDA', 'DSAASDDSA', 'ASDDASASDDAS', '', 'SDASDAADS', 'SDAASDASDDAS', 'DASDSAASD', 'DSASDAASDSADSADSAD', '', '', '', '', '', 'SI', '', '', 'SI', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mov_pro`
-- 

CREATE TABLE `mov_pro` (
  `id` int(10) NOT NULL auto_increment,
  `tipo_pro` varchar(20) NOT NULL,
  `marca_pro` varchar(30) NOT NULL,
  `cantidad_pro` bigint(20) NOT NULL,
  `fecha_pro` varchar(40) NOT NULL,
  `descriccion_pro` varchar(50) NOT NULL,
  `usuario_pro` varchar(20) NOT NULL,
  `motivo` varchar(20) NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=137 ;

-- 
-- Volcar la base de datos para la tabla `mov_pro`
-- 

INSERT INTO `mov_pro` VALUES (134, 'Ingreso', '', 50, '2014-10-19 15:51:44', 'gasas', 'YONATHAN', 'compra', 50);
INSERT INTO `mov_pro` VALUES (135, 'Ingreso', '', 10, '2015-08-06 22:02:21', 'gasas', 'YONATHAN', 'ajuste', 10);
INSERT INTO `mov_pro` VALUES (136, 'Ingreso', '', 3, '2015-08-07 17:03:35', 'gasas', 'YONATHAN', 'agregar', 3);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pabellonp`
-- 

CREATE TABLE `pabellonp` (
  `servicio` varchar(30) NOT NULL,
  `cod_alu` varchar(10) NOT NULL,
  `p_ape` varchar(40) NOT NULL,
  `p_nom` varchar(40) NOT NULL,
  `p_sex` varchar(3) NOT NULL,
  `e_civil` varchar(20) NOT NULL,
  `ocupacion` varchar(40) NOT NULL,
  `l_nacimiento` varchar(40) NOT NULL,
  `f_nacimiento` varchar(30) NOT NULL,
  `nacio` varchar(40) NOT NULL,
  `direc_actual` varchar(50) NOT NULL,
  `f_ingreso` varchar(20) NOT NULL,
  `f_admi_ante` varchar(20) NOT NULL,
  `m_consul` varchar(120) NOT NULL,
  `e_actual` varchar(250) NOT NULL,
  `diacno_p` varchar(60) NOT NULL,
  `diac_p_f` varchar(60) NOT NULL,
  `d_anatomo` varchar(60) NOT NULL,
  `d_asoc` varchar(60) NOT NULL,
  `inter_p` varchar(60) NOT NULL,
  `inter_s` varchar(60) NOT NULL,
  `p_edad` varchar(3) NOT NULL,
  `avisara` varchar(30) NOT NULL,
  `parentesco` varchar(30) NOT NULL,
  `direc2` varchar(80) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `agre_c` varchar(30) NOT NULL,
  PRIMARY KEY  (`cod_alu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `pabellonp`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pacientep`
-- 

CREATE TABLE `pacientep` (
  `cod_alu` varchar(6) NOT NULL,
  `p_nom` varchar(25) NOT NULL,
  `p_ape` varchar(25) NOT NULL,
  `p_lugarn` varchar(40) NOT NULL,
  `direc` varchar(80) NOT NULL,
  `p_sex` varchar(15) NOT NULL,
  `p_edad` varchar(40) NOT NULL,
  `nmadre` varchar(25) NOT NULL,
  `edadm` int(2) NOT NULL,
  `profm` varchar(20) NOT NULL,
  `telm` varchar(20) NOT NULL,
  `npadre` varchar(25) NOT NULL,
  `edadp` varchar(2) NOT NULL,
  `profp` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `mc` varchar(120) NOT NULL,
  `ea` varchar(120) NOT NULL,
  `ant_p` varchar(120) NOT NULL,
  `ant_f` varchar(120) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `talla` varchar(10) NOT NULL,
  `pc` varchar(10) NOT NULL,
  `diacno` varchar(120) NOT NULL,
  `trat` varchar(120) NOT NULL,
  `fechac` datetime NOT NULL,
  `fecha` datetime NOT NULL,
  `f_nacimiento` varchar(20) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `edad2` int(2) NOT NULL,
  PRIMARY KEY  (`cod_alu`),
  FULLTEXT KEY `p_lugarn` (`p_lugarn`),
  FULLTEXT KEY `p_lugarn_2` (`p_lugarn`),
  FULLTEXT KEY `p_lugarn_3` (`p_lugarn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `pacientep`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `productos`
-- 

CREATE TABLE `productos` (
  `codigo` int(10) NOT NULL,
  `modelo` varchar(15) NOT NULL,
  `descriccion` varchar(40) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `precio_l` float NOT NULL,
  `cantidad` float NOT NULL,
  `p_base` float NOT NULL,
  `p_publico` float NOT NULL,
  `provedor` varchar(30) NOT NULL,
  `pvp` float NOT NULL,
  `porc_imp` float NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `productos`
-- 

INSERT INTO `productos` VALUES (1, 'insumos', 'gasas', '', 0, 63, 30, 33.6, 'yonathan', 0, 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `provedor`
-- 

CREATE TABLE `provedor` (
  `codigo` varchar(10) NOT NULL,
  `direccion` varchar(25) NOT NULL,
  `contacto` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `provedor`
-- 

INSERT INTO `provedor` VALUES ('23134135', 'la ortiza', 'carlos jim', 'yonathan');
