-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-11-2021 a las 19:14:07
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
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comentario` varchar(70) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_team` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `pais` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id`, `pais`) VALUES
(1, 'Argentina'),
(2, 'Brasil'),
(3, 'Uruguay'),
(4, 'Paraguay'),
(5, 'Ecuador'),
(6, 'Colombia'),
(7, 'Chile');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `nombre_equipo` varchar(70) NOT NULL,
  `cantidad_libertadores` int(11) NOT NULL,
  `cantidad_sudamericana` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `teams`
--

INSERT INTO `teams` (`id`, `nombre_equipo`, `cantidad_libertadores`, `cantidad_sudamericana`, `id_pais`) VALUES
(1, 'Boca Juniors', 6, 2, 1),
(2, 'River Plate', 4, 1, 1),
(3, 'Independiente', 7, 2, 1),
(5, 'Velez Sarsfield', 1, 0, 1),
(6, 'Racing', 1, 0, 1),
(8, 'Santos', 3, 0, 2),
(9, 'Gremio', 3, 0, 2),
(10, 'Sao Pablo', 3, 1, 2),
(11, 'Palmeiras', 2, 0, 2),
(12, 'Chapecoense', 3, 1, 2),
(13, 'Colo-Colo', 1, 0, 7),
(16, 'Nacional', 3, 0, 3),
(17, 'Atletico Nacional', 2, 0, 6),
(19, 'Olimpia', 3, 0, 4),
(21, 'Ind. Del Valle', 0, 1, 5),
(26, 'Argentinos Juniors', 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `rol`) VALUES
(2, 'lautarovg147@gmail.com', '$2a$12$.ZGfx7G3caZeW3RT9aYlj.OHPxa6Glj1GZKTjKPCeng6kXiqnFRg6', 'admin'),
(4, 'santireyes4.sr@gmail.com', '$2a$12$1fuHWajJJTTY3RkYu0qgPuHZu1G.11o834adSAsrO.c8EDcePbMUe', 'admin'),
(18, 'pirulito@gmail.com', '$2y$10$MYtdDFxef9wcqhJsYKNkWOUr9hhgHDAjknR3KhLi6YlcEbx1ZT/rC', 'user'),
(20, 'pepe@gmail.com', '$2y$10$6JX630XKEiIaPiManERyH.idHjPAG9iDRR8DaCn4fct2QTHoDcm7S', 'user'),
(21, 'pepe2@gmail.com', '$2y$10$tRUVeyws9uZJ298O2ez9N.nFoHc2GlYB/4HZLP8wkdDaoIIsETfC.', 'user'),
(22, 'senioragallo@gmail.com', '$2y$10$0k76wqgAq7QJgW1sGoGW6eIjSvid/mwn5gJfGLnBc1QeUMNlPbryy', 'user'),
(23, 'lolito@gmail.com', '$2y$10$MW9pjRehTA2gLMMrUODc0uanWqCsOV/Opwx7Ds3C.jwGUbDhm9kU.', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_user` (`id_user`),
  ADD KEY `fk_id_team` (`id_team`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_team`) REFERENCES `teams` (`id`);

--
-- Filtros para la tabla `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
