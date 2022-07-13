-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2022 a las 21:18:33
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cimnav_usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `name`) VALUES
(1, 'Oficial'),
(2, 'Sub-Oficial'),
(3, 'Infantería'),
(4, 'Civil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

CREATE TABLE `componentes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`id`, `name`, `id_categoria`) VALUES
(1, 'Naval', 1),
(2, 'Infante de Marina', 1),
(3, 'Aeronaval', 1),
(4, 'Guardacostas', 1),
(5, 'No Aplica ', 4),
(6, 'Naval', 2),
(7, 'Infante de Marina', 2),
(8, 'Infante de Marina', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `titulo`, `description`, `iframe_code`, `created_at`) VALUES
(2, 'ven jesus', 'declaracion sadadasd', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mhjjtcliXJI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-12-06 15:50:40'),
(3, 'tecnologia', 'super buena', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Asij7V0hlPM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n      ', '2021-12-06 16:13:15'),
(4, 'Prueba de live', 'video de adoracion', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Asij7V0hlPM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n      ', '2021-12-06 16:19:50'),
(5, 'nuevo', 'super buena', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Asij7V0hlPM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n      ', '2021-12-06 16:20:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abrev` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_componente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id`, `name`, `abrev`, `id_componente`) VALUES
(1, 'Almirante', 'ALM', 1),
(2, 'Vicealmirante', 'VA', 1),
(3, 'Contralmirante', 'CA', 1),
(4, 'Capitán de Navío', 'CN', 1),
(5, 'Capitán de Fragata', 'CF', 1),
(6, 'Capitán de Corbeta', 'CC', 1),
(7, 'Teniente de Navío', 'TN', 1),
(8, 'Teniente de Fragata', 'TF', 1),
(9, 'Teniente de Corbeta', 'TK', 1),
(10, 'General', 'GRCIM', 2),
(11, 'Mayor General', 'MGCIM', 2),
(12, 'Brigadier General', 'BGCIM', 2),
(13, 'Coronel', 'CRCIM', 2),
(14, 'Teniente Coronel', 'TCCIM', 2),
(15, 'Mayor', 'MYCIM', 2),
(16, 'Capitán', 'CTCIM', 2),
(17, 'Teniente', 'TECIM', 2),
(18, 'Subteniente', 'STCIM', 2),
(19, 'Suboficial Jefe Técnico de Comando Conjunto', 'SJTCC', 6),
(20, 'Suboficial Jefe Técnico de Comando\r\n', 'SJTC', 6),
(21, 'Suboficial Jefe Técnico', 'SJT', 6),
(22, 'Suboficial Jefe', 'SJ', 6),
(23, 'Suboficial Primero', 'S1', 6),
(24, 'Suboficial Segundo', 'S2', 6),
(25, 'Suboficial Tercero', 'S3', 6),
(26, 'Marinero Primero', 'MA1', 6),
(27, 'Marinero Segundo\r\n', 'MA2', 6),
(28, 'Sargento Mayor de Comando Conjunto', 'SMCCCIM', 7),
(29, 'Sargento Mayor de Comando', 'SMCCIM', 7),
(30, 'Sargento Mayor', 'SMCIM', 7),
(31, 'Sargento Primero', 'SPCIM', 7),
(32, 'Sargento Viceprimero', 'SVCIM', 7),
(33, 'Sargento Segundo', 'SSCIM', 7),
(34, 'Cabo Primero', 'CPCIM', 7),
(35, 'Cabo Segundo', 'CSCIM', 7),
(36, 'Cabo Tercero', 'C3CIM', 7),
(37, 'Infante de Marina Profesional', 'IMP', 8),
(38, 'Infante de Marina Bachiller', 'IMB', 8),
(39, 'Infante de Marina Regular', 'IMR', 8),
(40, 'No Aplica ', 'N/A', 5),
(41, 'No Aplica', 'N/A', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abrev` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id`, `name`, `abrev`) VALUES
(1, 'Comando Armada Nacional ', 'CARMA'),
(2, 'Fuerza Naval del Caribe', 'FNC'),
(3, 'Fuerza Naval del Pacifico\r\n', 'FNP'),
(4, 'Fuerza Naval del Sur\r\n', 'FNS'),
(5, 'Fuerza Naval del Oriente\r\n', 'FNO'),
(6, 'No Aplica', 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `urls`
--

CREATE TABLE `urls` (
  `id` int(11) NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL DEFAULT '\'No hay directo\'',
  `titulo` text COLLATE utf8_unicode_ci NOT NULL DEFAULT 'SIN TITULO',
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL DEFAULT 'SIN DESCRIPCION'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `urls`
--

INSERT INTO `urls` (`id`, `url`, `titulo`, `descripcion`) VALUES
(14, '\r\n      <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gBfXjjhsl-o\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'curso', 'curso'),
(15, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Asij7V0hlPM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n      ', 'super', 'super buena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nombres` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cedula` varchar(100) DEFAULT NULL,
  `telefono` varchar(500) DEFAULT NULL,
  `especialidad` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_componente` int(11) DEFAULT NULL,
  `id_grado` int(11) DEFAULT NULL,
  `id_unidad` int(11) DEFAULT NULL,
  `fuerza` text DEFAULT NULL,
  `pais` text DEFAULT NULL,
  `tipo` int(2) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nombres`, `email`, `cedula`, `telefono`, `especialidad`, `id_categoria`, `id_componente`, `id_grado`, `id_unidad`, `fuerza`, `pais`, `tipo`, `created_at`) VALUES
(1, 'admin', '$2y$10$ILn4oI5zgFoCc3Fgq1mvOegzjo1ohRkTYFMId36tvENGgglu.P2j6', 'admin', 'soporte@system.com', '0000000', '0000000', 'none', 4, 5, 40, 6, 'fuerza', 'VENEZUELA', 1, '2021-12-05 19:12:50'),
(9, 'yordhis', '$2y$10$gHMJV5UQE5ib0NnWOS0/N.wfRJ/uzFGpYOikbpDUOpN0fr/cyeZh.', 'Yordhis Osuna', 'yordhis.10@gmail.com', '24823972', '4169733666', '', 1, 1, 1, 2, 'fuerza', 'VENEZUELA', 0, '2021-11-29 04:30:24'),
(10, 'Proinvesti', '$2y$10$hd2/.040/wzGPLHv6HcGS..YY/YNAbnUfjZWvC0q/HIYsREzaVytu', 'Carlos Aguilar', 'admin@proinvest.com', '27510253', '04165324679', '', 1, 1, 1, 2, 'fuerza', 'Colombia', 0, '2021-12-03 06:26:01'),
(11, 'juan', '$2y$10$hl74XztTLDGzr2OYSCa4UuvGXoBFen9nIZSfOQ0F/nuKe6p/T/2mO', 'Carlos Alberto Carvajal Dominguez', 'alfacapitals.pro@gmail.com', '27510231', '13134864', '', 3, 8, 37, 5, 'fuerza', 'Colombia', 0, '2021-12-03 16:05:46'),
(14, 'frank', '$2y$10$RY5KPQkKYoCPn2lQ2rqY0OzcgsIvXtrWwgdhLA1GFll7lmDNItQPC', 'Franklin Jose Heredia', 'heredia@gmail.com', '24823345345', '04125605869', 'Naval', 1, 1, 2, 1, 'fuerza', 'VENEZUELA', 0, '2022-07-13 15:09:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`id_categoria`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `componente` (`id_componente`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_componente` (`id_componente`),
  ADD KEY `id_grado` (`id_grado`),
  ADD KEY `id_unidad` (`id_unidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `componentes`
--
ALTER TABLE `componentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `urls`
--
ALTER TABLE `urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD CONSTRAINT `componentes_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grados`
--
ALTER TABLE `grados`
  ADD CONSTRAINT `grados_ibfk_1` FOREIGN KEY (`id_componente`) REFERENCES `componentes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_componente`) REFERENCES `componentes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_4` FOREIGN KEY (`id_unidad`) REFERENCES `unidades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
