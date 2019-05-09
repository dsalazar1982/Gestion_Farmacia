-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2018 a las 01:17:08
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `id_token` int(11) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `pass`, `nombre`, `apellido`, `correo`, `id_token`, `nivel`) VALUES
(1, '123456', 'administrador', 'admin', 'admin@admin.com', 1, 0),
(5, '123', 'yonathan', 'sarez', 'y@y.com', 1, 1),
(6, '123', 'carlos', NULL, 'carlos@carlos.com', 2, 0),
(7, '123', 'luis', NULL, 'luisftp@gmail.com', 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id_catalogo` int(11) NOT NULL,
  `imgfondo` varchar(1000) NOT NULL,
  `imgprincipal` varchar(1000) NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `img2` varchar(1000) NOT NULL,
  `img3` varchar(1000) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` varchar(600) NOT NULL,
  `url` varchar(300) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id_catalogo`, `imgfondo`, `imgprincipal`, `img1`, `img2`, `img3`, `titulo`, `contenido`, `url`, `id_categoria`) VALUES
(1, 'fondo_Proyecto1bg1.jpg', 'perfil_Proyecto1img.jpg', '', '', 'transicion_2_Proyecto1dgale_Lighthouse_copia_copia.jpg', 'Proyecto 1d', ' ewdedeewd  dd', '', 1),
(2, 'fondo_aimg.jpg', 'perfil_abg3_copia.jpg', 'transicion_agame_of_thrones_movie_hd_wallpaper_1920x1200_1738.jpg', 'transicion_1_aescanear0001.jpg', 'transicion_2_aOtroitempaisajes_bonitos_de_verano_playa_paradisiaca_exotica_imagen_foto_wallpaper_7.jpg16principal.jpg', 'a', 'eddedde', '', 1),
(20, 'fondo_soccervinotinto_44.jpg', 'perfil_socceraaaqq.PNG', 'transicion_soccerAGROQUIMICOS.png', 'transicion_1_soccer17022291_1267462420004918_1086169891844401924_n.jpg', 'transicion_2_soccerKoala_copia.jpg', 'soccer', 'este es el contenido del cabeson', '', 0),
(27, 'fondo_titulodelaprimerasecciónsunsol_isla_caribe.jpg', 'perfil_titulodelaprimerasecciónDrew_Struzan_et.jpg', 'transicion_titulodelaprimeraseccióneeb81c93cbc5e5aff25fda3a1aa94aa1__round_eyeglasses_eyeglasses_for_women.jpg', 'transicion_1_titulodelaprimerasecciónd3a103b52e0cac6defd0e131e37b11e2__funky_glasses_girl_glasses.jpg', 'transicion_2_titulodelaprimerasecciónfff08d8ff2a6e82e6354a211b94ac66c__eyes_photos_beauty_women.jpg', 'titulo de la primera sección', 'estes es el contenido de la sección y toda esa paja loca , ya tu sabes .', '', 22),
(28, 'fondo_segundaseccion92A.jpg', 'perfil_segundaseccioncolores_de_micas_lentes_de_sol_Pinterest.jpg', 'transicion_segundaseccionlentes_de_sol_redondos_e1440091985521.jpg', 'transicion_1_segundaseccionLentes_De_Sol_Redondos_Estilo_Steampuk_Retro_20150909150928.jpg', 'transicion_2_segundaseccionlook.com.ua_36101.jpg', 'titulo', ' este es el contenido de prueba de la misma  ', '', 22),
(29, 'fondo_otroslentese_commerce_02_01.png', 'perfil_otroslentesfondo.jpg', 'transicion_otroslentesmaxresdefault_2_.jpg', 'transicion_1_otroslentes22365640_1751919701519242_4319636115650745204_n.jpg', 'transicion_2_otroslentes21270927_335107640267517_6794316451179366019_n.jpg', 'otros lentes', 'este es el contenido de es', '', 22),
(30, 'fondo_ropa22365640_1751919701519242_4319636115650745204_n.jpg', 'perfil_ropa21270953_1910180729303130_1040707030863393532_n.jpg', 'transicion_ropaBurano_italia_venecia_a.jpg', 'transicion_1_ropadiana.PNG', 'transicion_2_ropae_commerce_02_01.png', 'ropa', 'esta es la pagina', '', 23),
(31, 'fondo_datosprincipalesjoinn.png', 'perfil_datosprincipalesmaxresdefault_2_.jpg', 'transicion_datosprincipalesmariana.jpg', 'transicion_1_datosprincipalespopiss.PNG', 'transicion_2_datosprincipalesprestacionessociales.jpg', 'datos principales', 'este es el contenido ', '', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `idusuario`) VALUES
(1, 'proyectos', 5),
(2, 'asasasassax', 5),
(22, 'lentes', 1),
(23, 'sheyly xxx', 1),
(24, 'productos', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id_galeria` int(11) NOT NULL,
  `id_catalogo` int(11) NOT NULL,
  `tipoimg` int(11) NOT NULL,
  `nomimg` varchar(766) DEFAULT NULL,
  `des` varchar(50) NOT NULL COMMENT 'descripcion de la imagen',
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id_galeria`, `id_catalogo`, `tipoimg`, `nomimg`, `des`, `url`) VALUES
(1, 1, 1, 'gale_Proyecto1bg1.jpg', 'wswsws deddedeedde ', ''),
(2, 1, 1, 'gale_Proyecto1game_of_thrones_movie_hd_wallpaper_1920x1200_1738.jpg', ' r4r4r4  ', ''),
(3, 1, 1, 'gale_Proyecto1bg5.jpg', 'r44r4rr4 ', ''),
(4, 2, 1, 'gale_abg5.jpg', '', ''),
(5, 2, 1, 'gale_abg1.jpg', '', ''),
(6, 2, 1, 'gale_agame_of_thrones_movie_hd_wallpaper_1920x1200_1738.jpg', '', ''),
(7, 1, 2, 'https://www.youtube.com/watch?v=aDaOgu2CQtI&list=RDMMaDaOgu2CQtI', 'video', 'https://www.youtube.com/embed/aDaOgu2CQtI?list=RDMMaDaOgu2CQtI'),
(8, 2, 1, 'gale_alogo2.png', '', ''),
(9, 2, 1, 'gale_aescanear0001.jpg', '', ''),
(11, 2, 2, 'https://www.youtube.com/watch?v=9l4miC5UjdM&t=1510s', 'video', 'https://www.youtube.com/embed/VdAt4qWvz_8'),
(12, 2, 2, 'https://www.youtube.com/watch?v=aHWcN5YxuYc&list=RDaHWcN5YxuYc#t=1', '  video DEDE', 'https://www.youtube.com/embed/aHWcN5YxuYc?list=RDaHWcN5YxuYc#t=1'),
(13, 2, 2, 'https://www.youtube.com/watch?v=VdAt4qWvz_8', '  video ', 'https://www.youtube.com/embed/VdAt4qWvz_8'),
(24, 27, 1, 'gale_titulodelaprimerasección51dI2PMdZEL._UX522_.jpg', ' lentes modelo 1', ''),
(25, 27, 1, 'gale_titulodelaprimerasección519fXldIUrL._UX522_.jpg', ' lentes modelo 2 ', ''),
(26, 27, 1, 'gale_titulodelaprimerasección9023143_1.jpg', ' lentes modelo 3', ''),
(27, 27, 1, 'gale_titulodelaprimerasección9123613_1.jpg', ' el ultimo modelo', ''),
(28, 27, 2, 'https://www.youtube.com/watch?v=_8FSBMSeLxI', 'luisito comunica', 'https://www.youtube.com/embed/_8FSBMSeLxI'),
(29, 27, 1, 'gale_titulodelaprimerasecciónd3a103b52e0cac6defd0e131e37b11e2__funky_glasses_girl_glasses.jpg', '', ''),
(30, 27, 1, 'gale_titulodelaprimeraseccióneeb81c93cbc5e5aff25fda3a1aa94aa1__round_eyeglasses_eyeglasses_for_women.jpg', '', ''),
(31, 30, 1, 'gale_ropayoutube_footer.png', '', ''),
(32, 30, 1, 'gale_ropaimages.jpg', '', ''),
(33, 30, 1, 'gale_ropaeventbrite_error_page.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `id_pagina` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `portada` varchar(1000) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `face` varchar(100) NOT NULL,
  `twiter` varchar(100) NOT NULL,
  `footer` varchar(500) NOT NULL,
  `link` varchar(300) NOT NULL,
  `favicon` varchar(1000) NOT NULL,
  `fuente` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`id_pagina`, `idusuario`, `portada`, `titulo`, `descripcion`, `logo`, `face`, `twiter`, `footer`, `link`, `favicon`, `fuente`) VALUES
(8, 5, 'portada_zippittechbg1.jpg', 'zippittechdd', 'swswsw', '', 'https://www.facebook.com/zippyttech', 'https://twitter.com/zippyttech', 'swswssw', 'http://www.zippyttech.com/', 'favicon_zippittechlogo2.png', '2'),
(9, 1, 'portada_zippittechgame_of_thrones_movie_hd_wallpaper_1920x1200_1738.jpg', 'pagina de ejemplo', 'este es el contenido', 'logo_mayredrosmerygale_prip1.jpg', 'https://www.facebook.com/zippyttech', 'https://twitter.com/zippyttech', 'pie de pagina', 'http://www.zippyttech.com/', 'favicon_zippittechlogo2.png', '2'),
(10, 6, 'portada_paginadecarlosvinotinto_44.jpg', 'pagina de carlos', 'pues esta es la pagina de carlos', 'logo_paginadecarlosaaaqq.PNG', 'https://www.facebook.com/zippyttech', 'twitter', '045545', 'asdsadsad asdasd', 'favicon_paginadecarlosAGROQUIMICOS.png', ''),
(11, 7, 'portada_luisfondo1.png', 'luis', 'este es el conteido', 'logo_luislogopdf.png', '', 'twitter', '', '', 'favicon_luislogo_3_.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

CREATE TABLE `paquete` (
  `id_paquete` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `nombre_p` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`id_paquete`, `precio`, `nombre_p`) VALUES
(3, 15007, 'golden'),
(4, 15008, 'bronce'),
(5, 12345, 'platino'),
(6, 0, 'fddd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id_plan` int(11) NOT NULL,
  `fecha_i` date NOT NULL,
  `fehca_f` date NOT NULL,
  `idplan_idpaquete` int(11) NOT NULL,
  `idplan_idadmin` int(11) NOT NULL,
  `idolan_idtoken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`id_plan`, `fecha_i`, `fehca_f`, `idplan_idpaquete`, `idplan_idadmin`, `idolan_idtoken`) VALUES
(1, '2017-03-11', '2017-03-31', 1, 5, 1),
(2, '2017-03-02', '2017-03-11', 3, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `token`
--

CREATE TABLE `token` (
  `idtoken` int(11) NOT NULL,
  `token` varchar(1000) NOT NULL,
  `limite` int(11) NOT NULL,
  `idtoken_idpaquete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `token`
--

INSERT INTO `token` (`idtoken`, `token`, `limite`, `idtoken_idpaquete`) VALUES
(1, '23134135', 10, 3),
(2, 'm0s2w9', 2, 3),
(3, '9l3f1c', 6, 4),
(4, 'j4byzj', 4, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `id_token` (`id_token`);

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id_catalogo`),
  ADD KEY `id_ncata` (`id_categoria`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id_galeria`);

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id_pagina`);

--
-- Indices de la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD PRIMARY KEY (`id_paquete`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`idtoken`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id_catalogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id_galeria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id_pagina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `paquete`
--
ALTER TABLE `paquete`
  MODIFY `id_paquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `token`
--
ALTER TABLE `token`
  MODIFY `idtoken` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
