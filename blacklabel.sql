-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2023 a las 17:45:13
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blacklabel_p`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(10) NOT NULL COMMENT 'Aquí se alojará el identificador del estado.',
  `estado` tinytext NOT NULL COMMENT 'Aquí se almacenará la palabra activo o inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(10) NOT NULL COMMENT 'Aquí se alojara el identificador del permiso.',
  `documento` varchar(30) NOT NULL COMMENT '	Aquí se alojara en numero del documento de quien posee el permiso.',
  `id_rol` int(10) DEFAULT NULL COMMENT '	Aquí se alojara el identificador numérico del permiso.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) NOT NULL COMMENT '	Aquí de alojara el codigo con el orden en el que ingrese el producto',
  `codigo_producto` varchar(30) NOT NULL COMMENT 'Aqui se alojara el un identificador alfanumerico del producto que ingrese',
  `nombre_producto` varchar(30) NOT NULL COMMENT '	Aquí se alojara el nombre de los productos.',
  `id_categoria` int(10) NOT NULL COMMENT '	Aquí se alojara el identificador numerico de la categoria',
  `documento_creador` varchar(30) NOT NULL COMMENT 'Aquí se alojara en documento del creador del producto.	',
  `precio_producto` double NOT NULL COMMENT 'Aquí se guardara el precio del prodcuto seleccionado.',
  `id_estado` int(10) NOT NULL COMMENT '	Aqui se almacenara el estado del producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(10) NOT NULL COMMENT 'Aquí se almacena el identificador del rol.',
  `rol` tinytext NOT NULL COMMENT 'Aquí se almacena el nombre de cada rol.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL COMMENT 'Aquí se le asignara un numero auto-incrementado por codigo a cada usuario.',
  `documento` varchar(30) NOT NULL COMMENT 'Aquí se almacenará el documento del usuario.',
  `nombre_usuario` tinytext NOT NULL COMMENT '	Aquí se almacenará el nombre del usuario.',
  `apellido_usuario` tinytext NOT NULL COMMENT '	Aquí se almacenará el apellido del usuario.',
  `contraseña` varchar(20) NOT NULL COMMENT 'Aquí se almacenará la contraseña del usuario.',
  `correo` varchar(30) NOT NULL COMMENT '	Aquí se almacenará el correo electrónico del usuario.',
  `id_estado` int(10) NOT NULL COMMENT 'Aquí se almacenará el estado del usuario(activo o inactivo).'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id_categoria` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se almacenara el identificador de la categoría.';

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se alojará el identificador del estado.';

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se alojara el identificador del permiso.';

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se almacena el identificador del rol.';

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
