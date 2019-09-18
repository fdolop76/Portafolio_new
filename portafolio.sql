-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2019 a las 01:50:22
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portafolio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionalizacion`
--

CREATE TABLE `profesionalizacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `matricula` int(10) NOT NULL,
  `mision` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `cosmo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `autodiag` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `poralumno` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `porcoordinador` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `porcolegas` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `objetivos` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `asignacion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `programas` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `planes` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `contratos` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `asistencia` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `productos` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `material` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `instrumentos` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `bibliografia` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `cuantitativos` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `cualitativos` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `anexos` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `c1` text COLLATE utf8_spanish_ci NOT NULL,
  `c2` text COLLATE utf8_spanish_ci NOT NULL,
  `c3` text COLLATE utf8_spanish_ci NOT NULL,
  `c4` text COLLATE utf8_spanish_ci NOT NULL,
  `c5` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesionalizacion`
--

INSERT INTO `profesionalizacion` (`id`, `nombre`, `matricula`, `mision`, `cosmo`, `autodiag`, `poralumno`, `porcoordinador`, `porcolegas`, `objetivos`, `asignacion`, `programas`, `planes`, `contratos`, `asistencia`, `productos`, `material`, `instrumentos`, `bibliografia`, `cuantitativos`, `cualitativos`, `anexos`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(5, 'Alejandra', 1160087, 'gema 1.jpg', '', '6.jpg', '', '', '', 'IMG-20190724-WA0009.jpg', '', '', '', '', '', '', '', '', '', '', '', '', 'dfgdfg', 'gdfgfdg', 'dfgfd', 'gdfgdfgdf', 'gdfgdf'),
(6, 'Francisco', 1190200, '_1.jpg', '1.jpg', '4.1.jpg', '4.jpg', '5.jpg', '6_.jpg', '6_-01.jpg', '', '', '', '', '', '', '', '', '', '', '', '', 'khjk', 'hjkhj', 'khjkhj', 'hjkhj', 'hkhjk');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `profesionalizacion`
--
ALTER TABLE `profesionalizacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `profesionalizacion`
--
ALTER TABLE `profesionalizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
