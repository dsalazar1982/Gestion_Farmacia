-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2017 a las 02:02:40
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `f1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `apellido` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `nivel` int(11) NOT NULL,
  `pw` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nombre`, `apellido`, `correo`, `nivel`, `pw`) VALUES
(1, 'yonathán', 'suarez', 'y@y.com', 1, '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id_galeria` int(11) NOT NULL,
  `nombre` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slider` int(11) NOT NULL,
  `idioma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id_galeria`, `nombre`, `titulo`, `slider`, `idioma`) VALUES
(5, 'Lamborghini', 'galeria_huracan-coupe-facebook-og.jpg', 2, 1),
(6, 'Ferrari', 'galeria_6873.jpg', 1, 1),
(7, 'ferrari', 'galeria_gale_internacar002.png', 2, 2),
(8, 'lamburginy', 'galeria_gale_internahuracan_coupe_facebook_og.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `id_idiona` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`id_idiona`, `codigo`, `nombre`) VALUES
(1, 1, 'español'),
(2, 2, 'ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id_modulo` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `fondo` varchar(500) NOT NULL,
  `idioma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id_modulo`, `nombre`, `fondo`, `idioma`) VALUES
(42, 'Marcas', 'fondo_Marcasciudad_de_noche,_calle_156926.jpg', 1),
(44, ' Marks', 'fondo_Marksfondo_Patrocinadoresequipos_de_formula_1_en_la_temporada_2017.jpg', 2),
(45, 'Vehiculos', 'fondo_Autoshuracan_coupe_facebook_og.jpg', 1),
(47, 'vehicles', 'fondo_Buceo-min.jpg', 2),
(48, 'Corridors', 'fondo_submodulo_qwebg1.jpg', 2),
(49, 'Corredores', 'fondo_Patrocinadoresequipos_de_formula_1_en_la_temporada_2017.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `id_pagina` int(11) NOT NULL,
  `portada` varchar(1000) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `face` varchar(100) NOT NULL,
  `twiter` varchar(100) NOT NULL,
  `footer` varchar(500) NOT NULL,
  `link` varchar(300) NOT NULL,
  `favicon` varchar(1000) NOT NULL,
  `fuente` varchar(400) NOT NULL,
  `instagran` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `direccion` varchar(350) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `color_contenido` varchar(300) NOT NULL COMMENT 'color de las letras del contenido',
  `color_boton` varchar(500) NOT NULL COMMENT 'color general de botones',
  `titulo` varchar(500) NOT NULL COMMENT 'titulo de la pagina',
  `color_titulo` varchar(500) NOT NULL COMMENT 'color de titulos de session',
  `colorf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`id_pagina`, `portada`, `logo`, `face`, `twiter`, `footer`, `link`, `favicon`, `fuente`, `instagran`, `correo`, `direccion`, `telefono`, `color_contenido`, `color_boton`, `titulo`, `color_titulo`, `colorf`) VALUES
(12, 'portada_portada_portada_portada_portada.jpgbg1.jpgportada.jpgfotos_panoramicas_1.jpgHrHUYeW.jpg', 'logo_logo_logo_logo_logo_logo_portada.jpgfondo.jpgimages.jpgescanear0001.jpglogo.pngedit.pnglogo_ferrari_lamborghini.png', 'https://www.facebook.com/yonathan.suarez.583', 'https://twitter.com/jond_14', '<span>Diseñado y Desarrollado por ©<a href=\"https://www.youtube.com/channel/UCbLCjrhCC1jl68lxNbSHw0g\">Yonathan Suarez</a>, C. A. 2017 Rif. J-40661105-0.</span>', '', 'favicon_favicon_favicon.jpgb0c11211680233.560fbb37b726e.jpglogo_ferrari_lamborghini.png', '2', '00000000', 'jond_14@hotmail.com', 'san cristobal, venezuela', '000000000', '#ffffff', '#cc0000', 'Yonathan Suarez', '#c0c0c0', '#202020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessiones`
--

CREATE TABLE `sessiones` (
  `id_sessiones` int(11) NOT NULL,
  `title_sessiones` varchar(500) NOT NULL,
  `contenido` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `posicion_y` int(11) NOT NULL,
  `fondo` varchar(500) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `style` int(11) DEFAULT NULL,
  `posicion_x` int(11) DEFAULT NULL,
  `idioma` int(11) NOT NULL,
  `imagenf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sessiones`
--

INSERT INTO `sessiones` (`id_sessiones`, `title_sessiones`, `contenido`, `link`, `posicion_y`, `fondo`, `imagen`, `style`, `posicion_x`, `idioma`, `imagenf`) VALUES
(8, 'Autos', ' Ingresamos a las profundidades de cada problema para hallar una solución y así satisfacer a cada uno de nuestros clientes.  ', 'servicios', 0, '', 'buzo.png', 1, 1, 1, ''),
(9, '', 'Deseamos más personal capacitado en el mundo del buceo industrial y científico, necesario para suplir con los requerimientos continuos exigidos por nuestros clientes.', 'servicios', 1, 'blue', 'buzo-con-luz.png', 1, 2, 1, ''),
(10, 'Precios', 'La calidad y la excelencia de nuestros servicios se visualizan en cada uno de los testimonios de nuestros exclusivos clientes.', 'proyectos', 2, 'video', 'terra.mp4', 1, 1, 1, 'terra.mp4'),
(11, 'Modelos', 'Existen circunstancias en las cuales no se debe arriesgar a nuestro personal; es por ello que poseemos equipos de última tecnología para resguardar la seguridad de nuestros buzos.', 'servicios', 3, NULL, 'rov.png', 1, 3, 1, ''),
(12, '', ' Contamos con los mejores profesionales en el área, capacitados y dispuestos a garantizar los resultados.  ', 'empresa', 4, NULL, 'submarinoconluces.png', 3, 3, 1, 'coral.png'),
(15, 'AUTOS', 'Content in english', '#', 0, '', 'buzo.png', 1, 1, 2, ''),
(16, '', 'Content in englishclientes.  ', '#', 1, 'blue', 'buzo-con-luz.png', 1, 2, 2, ''),
(17, 'PROYECTOS ingles', ' Content in english', '#', 2, 'video', 'terra.mp4', 1, 1, 2, 'terra.mp4'),
(18, 'EQUIPOS ingles', 'Content in english', '#', 3, NULL, 'rov.png', 1, 3, 2, ''),
(19, '', '  Content in english', '#', 4, NULL, 'subarinosinluces.png', 3, 3, 2, 'coral.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subgaleria`
--

CREATE TABLE `subgaleria` (
  `id_subgaleria` int(11) NOT NULL,
  `nombre_img` varchar(1000) NOT NULL,
  `id_subgaleria_id_subcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subgaleria`
--

INSERT INTO `subgaleria` (`id_subgaleria`, `nombre_img`, `id_subgaleria_id_subcategoria`) VALUES
(5, 'gale_internafondo_4.jpg', 17),
(6, 'gale_internafondo_3.jpg', 17),
(16, 'gale_internacar002.png', 46),
(17, 'gale_internacar20.png', 46),
(18, 'gale_internahuracan_coupe_facebook_og.jpg', 31),
(19, 'gale_internaspecial.png', 31),
(20, 'gale_internagale_internacar20.png', 29),
(21, 'gale_internagale_internacar002.png', 29),
(22, 'gale_internagaleria_6873.jpg', 29),
(23, 'gale_internagale_internahuracan_coupe_facebook_og.jpg', 35),
(24, 'gale_internagaleria_6873.jpg', 35),
(25, 'gale_internasubmodulo_redbullOeXi9avz.png', 38),
(26, 'gale_internagale_internacar002.png', 38);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `submodulos`
--

CREATE TABLE `submodulos` (
  `id_submodulos` int(11) NOT NULL,
  `titulo_sub` varchar(500) NOT NULL,
  `icono` varchar(500) NOT NULL,
  `contenido` varchar(1000) NOT NULL,
  `imagen_sub` varchar(500) NOT NULL,
  `id_modulos_id_sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `submodulos`
--

INSERT INTO `submodulos` (`id_submodulos`, `titulo_sub`, `icono`, `contenido`, `imagen_sub`, `id_modulos_id_sub`) VALUES
(17, 'Chevrolet', '', 'marca reconocida', 'submodulo_Chevroletchevrolet_logo.gif', 42),
(29, 'chevrolet', '', 'This is the content in English', 'submodulo_chevroletsubmodulo_submodulo_Chevroletchevrolet_logo.gif', 44),
(31, 'Lamborghini', '', 'este es el contenido', 'submodulo_LamborghiniLamborghini_logo.jpg', 45),
(35, 'lamburgini', '', 'This is the content in English', 'submodulo_lamburginisubmodulo_LamborghiniLamborghini_logo.jpg', 47),
(38, 'red bull', '', 'This is the content in English', 'submodulo_redbullsubmodulo_redbullOeXi9avz.png', 48),
(46, 'red bull', '', 'marca mundial mente reconocida', 'submodulo_redbullOeXi9avz.png', 49);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptores`
--

CREATE TABLE `suscriptores` (
  `id_suscriptores` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suscriptores`
--

INSERT INTO `suscriptores` (`id_suscriptores`, `nombre`, `apellido`, `telefono`, `correo`, `fecha`) VALUES
(1, 'yonathan', 'suarez', '+58426873476', 'yond_14@ff.com', '2017-04-18 00:00:00'),
(2, 'CARLOS', 'JIMENEZ', '01541214', 'C@C.COM', '2017-04-19 00:00:00'),
(7, 'qwe', 'qwe', 'qwe', 'qweqw', '2017-04-19 20:04:34'),
(8, 'rew', 'rew', 'rew', 'rew', '2017-04-19 20:04:29'),
(11, '123456', '123456', '123456', '123456', '2017-04-19 20:04:15'),
(13, '123po', 'po213', 'po123', 'qwe.com', '2017-04-19 20:04:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id_galeria`),
  ADD KEY `idioma` (`idioma`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id_idiona`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id_modulo`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `idioma` (`idioma`);

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id_pagina`);

--
-- Indices de la tabla `sessiones`
--
ALTER TABLE `sessiones`
  ADD PRIMARY KEY (`id_sessiones`),
  ADD KEY `idioma` (`idioma`);

--
-- Indices de la tabla `subgaleria`
--
ALTER TABLE `subgaleria`
  ADD PRIMARY KEY (`id_subgaleria`),
  ADD KEY `id_subgaleria_id_subcategoria` (`id_subgaleria_id_subcategoria`);

--
-- Indices de la tabla `submodulos`
--
ALTER TABLE `submodulos`
  ADD PRIMARY KEY (`id_submodulos`),
  ADD KEY `id_modulos_id_sub` (`id_modulos_id_sub`);

--
-- Indices de la tabla `suscriptores`
--
ALTER TABLE `suscriptores`
  ADD PRIMARY KEY (`id_suscriptores`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id_galeria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id_idiona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id_pagina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `sessiones`
--
ALTER TABLE `sessiones`
  MODIFY `id_sessiones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `subgaleria`
--
ALTER TABLE `subgaleria`
  MODIFY `id_subgaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `submodulos`
--
ALTER TABLE `submodulos`
  MODIFY `id_submodulos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `suscriptores`
--
ALTER TABLE `suscriptores`
  MODIFY `id_suscriptores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`idioma`) REFERENCES `idioma` (`id_idiona`);

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_ibfk_1` FOREIGN KEY (`idioma`) REFERENCES `idioma` (`id_idiona`);

--
-- Filtros para la tabla `sessiones`
--
ALTER TABLE `sessiones`
  ADD CONSTRAINT `sessiones_ibfk_1` FOREIGN KEY (`idioma`) REFERENCES `idioma` (`id_idiona`);

--
-- Filtros para la tabla `subgaleria`
--
ALTER TABLE `subgaleria`
  ADD CONSTRAINT `subgaleria_ibfk_1` FOREIGN KEY (`id_subgaleria_id_subcategoria`) REFERENCES `submodulos` (`id_submodulos`);

--
-- Filtros para la tabla `submodulos`
--
ALTER TABLE `submodulos`
  ADD CONSTRAINT `submodulos_ibfk_1` FOREIGN KEY (`id_modulos_id_sub`) REFERENCES `modulos` (`id_modulo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
