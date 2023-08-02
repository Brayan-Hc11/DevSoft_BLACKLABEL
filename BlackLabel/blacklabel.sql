-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2023 a las 14:34:26
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
-- Base de datos: `blacklabel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_producto` int(10) NOT NULL COMMENT 'Aquí se identificará el código del producto seleccionado.',
  `precio_producto` int(30) NOT NULL COMMENT 'Aquí se alojara el precio del producto.',
  `cantidad_producto` int(30) NOT NULL COMMENT 'podremos visualizar la cantidad de productos que hemos seleccionado.',
  `total_producto` int(30) NOT NULL COMMENT 'Aquí se guardaran el total de los productos seleccionados.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int(10) NOT NULL COMMENT 'Aquí se almacena el identificador de la categoría. ',
  `categoria` text NOT NULL COMMENT 'Aquí se guarda el nombre de la categoría. '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(10) NOT NULL COMMENT 'Aquí se alojará el identificador del estado (1 o 2).',
  `estado` text NOT NULL COMMENT 'Aquí se almacenará la palabra activo o inactivo. '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(10) NOT NULL COMMENT 'Aquí se alojara el identificador del permiso.',
  `documento` int(30) NOT NULL COMMENT 'Aquí se alojara en numero del documento del creador.',
  `id_rol` int(10) NOT NULL COMMENT 'Aquí se alojara el identificador numérico del permiso.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) NOT NULL COMMENT 'Aquí de alojara el codigo con el orden en el que ingrese el producto',
  `codigo_producto` varchar(30) NOT NULL COMMENT 'aqui se alojara el un identificador numérico del producto que ingrese ',
  `nombre_producto` varchar(30) NOT NULL COMMENT 'Aquí se alojara el nombre de los productos.',
  `id_catalogo` int(30) NOT NULL COMMENT 'Aquí se alojara el identificador numerico del catalogo.',
  `documento_creador` int(30) NOT NULL COMMENT 'Aquí se alojara en documento del creador del producto.',
  `precio_producto` int(30) NOT NULL COMMENT 'Aquí se guardara el precio del prodcuto seleccionado.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(10) NOT NULL COMMENT 'Aquí se almacena el identificado del rol.',
  `rol` text NOT NULL COMMENT 'Aquí se almacena el nombre del rol.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL COMMENT 'Aquí se le asignara un numero auto-incrementado a cada usuario.',
  `documento` int(30) NOT NULL COMMENT 'Aquí se almacenará el documento del usuario',
  `nombre_usuario` text NOT NULL COMMENT 'Aquí se almacenará el nombre del usuario.',
  `contraseña` varchar(20) NOT NULL COMMENT 'Aquí se almacenará la contraseña del usuario.',
  `correo` int(30) NOT NULL COMMENT 'Aquí se almacenará el correo electrónico del usuario. ',
  `id_estado` int(10) NOT NULL COMMENT 'Aquí se almacenará el estado del usuario(activo o inactivo).'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`precio_producto`),
  ADD UNIQUE KEY `Id_Producto` (`id_producto`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

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
  ADD UNIQUE KEY `Documento` (`documento`,`id_rol`),
  ADD KEY `Id_Rol` (`id_rol`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `Id_Catalogo` (`id_catalogo`,`documento_creador`),
  ADD UNIQUE KEY `Precio_producto` (`precio_producto`),
  ADD KEY `Documento_Creador` (`documento_creador`);

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
  ADD UNIQUE KEY `Id_Estado` (`id_estado`),
  ADD UNIQUE KEY `Id_Usuarios` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se identificará el código del producto seleccionado.';

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categorias` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se almacena el identificador de la categoría. ';

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se alojara el identificador del permiso.';

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí de alojara el codigo con el orden en el que ingrese el producto';

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se almacena el identificado del rol.';

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se le asignara un numero auto-incrementado a cada usuario.';

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`Precio_Producto`) REFERENCES `productos` (`Precio_producto`);

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`Id_Categorias`) REFERENCES `productos` (`Id_Catalogo`);

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`Documento`) REFERENCES `usuarios` (`Documento`),
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`Id_Rol`) REFERENCES `roles` (`Id_rol`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`documento_creador`) REFERENCES `usuarios` (`documento`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_Estado`) REFERENCES `estados` (`Id_Estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
