-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-10-2021 a las 18:54:39
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_equipos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `nombre_equipo` varchar(70) NOT NULL,
  `cantidad_libertadores` int(11) NOT NULL,
  `cantidad_sudamericanas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre_equipo`, `cantidad_libertadores`, `cantidad_sudamericanas`) VALUES
(1, 'Boca Juniors', 6, 2),
(2, 'River Plate', 4, 1),
(3, 'Independiente', 7, 2),
(4, 'Estudiantes', 4, 1),
(5, 'Velez Sarsfield', 1, 0),
(6, 'Racing', 1, 0),
(7, 'Flamengo', 2, 0),
(8, 'Santos ', 3, 0),
(9, 'Gremio', 3, 0),
(10, 'Sao Pablo', 3, 1),
(11, 'Palmeiras', 2, 0),
(12, 'Chapecoense', 0, 1),
(13, 'Colo-Colo', 1, 0),
(14, 'Universidad de Chile', 0, 1),
(15, 'Peñarol', 5, 0),
(16, 'Nacional', 3, 0),
(21, 'Atletico Nacional', 2, 0),
(22, 'Once Caldas', 1, 0),
(23, 'Olimpia', 3, 0),
(24, 'Liga U. de Quito', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(11) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `id_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `pais`, `id_equipo`) VALUES
(1, 'Argentina', 1),
(2, 'Brasil', 2),
(3, 'Uruguay', 3),
(4, 'Paraguay', 4),
(5, 'Ecuador', 5),
(6, 'Colombia', 6),
(7, 'Chile', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `paises`
--
ALTER TABLE `paises`
  ADD CONSTRAINT `paises_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
