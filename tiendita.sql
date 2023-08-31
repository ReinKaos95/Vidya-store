-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-08-2023 a las 21:47:52
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Consolas`
--

CREATE TABLE `Consolas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Consolas`
--

INSERT INTO `Consolas` (`id`, `nombre`, `imagen`, `descripcion`, `precio`) VALUES
(2, 'PlayStation Mini', 'img/61HJeA6L-SS.jpg', 'Version Mini del PS1', 120),
(3, 'Nintendo Gamecube', 'img/GameCube-Console-Set.png', 'Consola de Nintendo de la 6ta Generacion', 100),
(4, 'PlayStation 2', 'img/IEW2FZCWBBG5TCWR6K7JNAWUIY.jpg', 'Consola de Sony de la 6ta Generacion', 75),
(5, 'PSP', 'img/1200px-Sony-PSP-1000-Body.png', 'Consola portable de Sony', 60),
(6, 'NIntendo DS', 'img/Nintendo-DS-Lite-Black-Open.jpg', 'Consola portable de nINTENDO', 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Juegos`
--

CREATE TABLE `Juegos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `fecha_salida` date NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Juegos`
--

INSERT INTO `Juegos` (`id`, `nombre`, `marca`, `fecha_salida`, `imagen`, `precio`) VALUES
(1, 'Tales of Symphonia', 'Bandai Namco', '2003-08-29', 'img/Tales_of_Symphonia_case_cover.jpg', 10),
(2, 'F-Zero GX', 'Amusement Vision', '2003-07-25', 'img/F-Zero_GX_box_artwork.png', 10),
(3, 'Super Smash Bros. Melee', 'HAL Laboratory', '2001-07-25', 'img/Super_Smash_Bros_Melee_box_art.png', 12),
(4, 'Animal Crossing', 'Nintendo', '2001-04-14', 'img/Animal_Crossing_Coverart.png', 10),
(5, 'Super Mario Sunshine', 'Nintendo', '2002-07-19', 'img/Super_mario_sunshine.jpg', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_usuario`
--

CREATE TABLE `roles_usuario` (
  `id` int(11) NOT NULL,
  `rol_tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles_usuario`
--

INSERT INTO `roles_usuario` (`id`, `rol_tipo`) VALUES
(1, 'Superadministrador'),
(2, 'Moderador'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `imagen`, `titulo`) VALUES
(1, 'img/image.png', 'Tales Of Synphonia'),
(2, 'img/image3.png', 'F-Zero GX'),
(3, 'img/image2.png', 'Super Smash Bros. Melee'),
(4, 'img/image4.png', 'Animal Crossing'),
(5, 'img/image5.png', 'Super Mario Sunshine');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Consolas`
--
ALTER TABLE `Consolas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Juegos`
--
ALTER TABLE `Juegos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles_usuario`
--
ALTER TABLE `roles_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Consolas`
--
ALTER TABLE `Consolas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `Juegos`
--
ALTER TABLE `Juegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roles_usuario`
--
ALTER TABLE `roles_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
