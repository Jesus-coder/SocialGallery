-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2019 a las 20:37:19
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_galeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_imagenes`
--

CREATE TABLE `tbl_imagenes` (
  `id_imagen` int(11) NOT NULL COMMENT 'Clave primaria',
  `nombre_imagen` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre',
  `fecha` date NOT NULL COMMENT 'fecha',
  `ruta` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ruta',
  `size` float(2,2) NOT NULL COMMENT 'tamaño',
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_imagenes`
--

INSERT INTO `tbl_imagenes` (`id_imagen`, `nombre_imagen`, `fecha`, `ruta`, `size`, `id_user`) VALUES
(31, 'T-Rex', '2019-10-25', 'imagenes/test/58.jpg', 0.10, 2),
(32, 'Oveja', '2019-10-25', 'imagenes/test/be.jpg', 0.07, 2),
(33, 'Leon', '2019-10-25', 'imagenes/test/lion.jpg', 0.01, 2),
(34, 'Barca sobre mar', '2019-10-25', 'imagenes/user2/maxresdefault.jpg', 0.07, 3),
(35, 'Perro cuqui', '2019-10-25', 'imagenes/user2/boo-perro-mas-bonito-1548235035870.jpg', 0.07, 3),
(36, 'Boscazo', '2019-10-25', 'imagenes/user2/Written By Bang Windu on Wednesday February 6 2013 1121 PM.jpeg', 0.36, 3),
(37, 'Leopardo', '2019-10-25', 'imagenes/user2/trophy-hunting.jpg', 0.06, 3),
(38, 'Pavo real', '2019-10-25', 'imagenes/test/pavo.jpg', 0.99, 2),
(39, 'T-Rex', '2019-10-25', 'imagenes/user2/58.jpg', 0.10, 3),
(40, 'prueba', '2019-10-25', 'imagenes/user2/testvef2.jpg', 0.09, 3),
(41, 'Tree', '2019-10-27', 'imagenes/test/Written By Bang Windu on Wednesday February 6 2013 1121 PM.jpeg', 0.36, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_db`
--

CREATE TABLE `users_db` (
  `id` int(11) NOT NULL,
  `user` varchar(15) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users_db`
--

INSERT INTO `users_db` (`id`, `user`, `password`) VALUES
(2, 'test', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'user2', 'd93591bdf7860e1e4ee2fca799911215');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_imagenes`
--
ALTER TABLE `tbl_imagenes`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `FK_user_imagenes` (`id_user`);

--
-- Indices de la tabla `users_db`
--
ALTER TABLE `users_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_imagenes`
--
ALTER TABLE `tbl_imagenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria', AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `users_db`
--
ALTER TABLE `users_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_imagenes`
--
ALTER TABLE `tbl_imagenes`
  ADD CONSTRAINT `FK_user_imagenes` FOREIGN KEY (`id_user`) REFERENCES `users_db` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
