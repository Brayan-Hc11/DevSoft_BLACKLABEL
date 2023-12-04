-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 19:01:20
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blacklabel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_producto` int(10) NOT NULL COMMENT 'Aquí se identificará el id del producto.',
  `codigo_producto` varchar(30) NOT NULL COMMENT 'Aquí se alojara el codigo del producto.	',
  `precio_producto` double NOT NULL COMMENT 'Aquí se alojara el precio del producto.	',
  `cantidad_producto` int(30) NOT NULL COMMENT 'podremos visualizar la cantidad de productos que se compraron.',
  `total_producto` int(30) NOT NULL COMMENT 'Aquí se guardaran el total de los productos seleccionados.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(10) NOT NULL COMMENT 'Aquí se almacenara el identificador de la categoría.',
  `categoria` tinytext NOT NULL COMMENT 'Aquí se guarda el nombre de la categoría.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`) VALUES
(1, 'Smartphones'),
(2, 'Tabletas'),
(3, 'Laptops'),
(4, 'Ordenadores'),
(5, 'Auriculares'),
(6, 'Monitores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(10) NOT NULL COMMENT 'Aquí se alojará el identificador del estado.',
  `estado` tinytext NOT NULL COMMENT 'Aquí se almacenará la palabra activo o inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `estado`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(10) NOT NULL COMMENT 'Aquí se alojara el identificador del permiso.',
  `documento` varchar(30) NOT NULL COMMENT '	Aquí se alojara en numero del documento de quien posee el permiso.',
  `id_rol` int(10) DEFAULT NULL COMMENT '	Aquí se alojara el identificador numérico del permiso.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `documento`, `id_rol`) VALUES
(2, '111', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) NOT NULL COMMENT '	Aquí de alojara el codigo con el orden en el que ingrese el producto',
  `codigo_producto` varchar(30) NOT NULL COMMENT 'Aqui se alojara el un identificador alfanumerico del producto que ingrese',
  `nombre_producto` varchar(30) NOT NULL COMMENT ' Aquí se alojara el nombre de los productos.',
  `id_categoria` int(10) NOT NULL COMMENT '	Aquí se alojara el identificador numerico de la categoria',
  `documento_creador` varchar(30) NOT NULL COMMENT 'Aquí se alojara en documento del creador del producto.	',
  `precio_producto` double NOT NULL COMMENT 'Aquí se guardara el precio del prodcuto seleccionado.',
  `id_estado` int(10) NOT NULL COMMENT '	Aqui se almacenara el estado del producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo_producto`, `nombre_producto`, `id_categoria`, `documento_creador`, `precio_producto`, `id_estado`) VALUES
(1, 'A1', 'Xiaomi redmi 9A', 1, '111', 389, 1),
(2, 'A2', 'Xiaomi 12', 1, '111', 1769900, 1),
(3, 'A3', 'Umidigi A11 Pro Max', 1, '111', 419900, 1),
(4, 'A4', 'Smartphone Tecno Pop', 1, '111', 315499, 1),
(5, 'A5', 'Doogee S98', 1, '111', 2349990, 1),
(6, 'A6', 'Umidigi A11s', 1, '111', 319900, 1),
(7, 'A7', 'Xiaomi Redmi Note 10', 1, '111', 801900, 1),
(8, 'A8', 'iPhone 7', 1, '111', 1789000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(10) NOT NULL COMMENT 'Aquí se almacena el identificador del rol.',
  `rol` tinytext NOT NULL COMMENT 'Aquí se almacena el nombre de cada rol.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL COMMENT 'Aquí se le asignara un numero auto-incrementado por codigo a cada usuario.',
  `documento` varchar(30) NOT NULL COMMENT 'Aquí se almacenará el documento del usuario.',
  `nombre_usuario` tinytext NOT NULL COMMENT '	Aquí se almacenará el nombre del usuario.',
  `apellido_usuario` tinytext NOT NULL COMMENT '	Aquí se almacenará el apellido del usuario.',
  `contraseña` varchar(500) NOT NULL COMMENT 'Aquí se almacenará la contraseña del usuario.',
  `correo` varchar(30) NOT NULL COMMENT '	Aquí se almacenará el correo electrónico del usuario.',
  `id_estado` int(10) NOT NULL COMMENT 'Aquí se almacenará el estado del usuario(activo o inactivo).'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `documento`, `nombre_usuario`, `apellido_usuario`, `contraseña`, `correo`, `id_estado`) VALUES
(0, '111', 'Draco', 'Perez', '$2y$10$Ud6jIqWQO7wyExoezoxpMeQ7hEcCRPgaCnP66.sbNkLmECog5pQdu', 'dp@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `documento` (`documento`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo_producto`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `documento_creador` (`documento_creador`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `id_estado` (`id_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se almacenara el identificador de la categoría.', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se alojará el identificador del estado.', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se alojara el identificador del permiso.', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se almacena el identificador del rol.', AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`codigo_producto`) REFERENCES `productos` (`codigo_producto`);

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`),
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`documento`) REFERENCES `usuarios` (`documento`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`documento_creador`) REFERENCES `usuarios` (`documento`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
