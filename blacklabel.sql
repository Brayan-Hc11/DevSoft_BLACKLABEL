-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-12-2023 a las 22:58:39
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(10) NOT NULL COMMENT 'Aquí se almacenara el identificador de la categoría.',
  `categoria` tinytext NOT NULL COMMENT 'Aquí se guarda el nombre de la categoría.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `documento`, `id_rol`) VALUES
(2, '111', 2),
(3, '111', 1),
(4, '222', 2),
(5, '333', 2),
(6, '444', 2),
(7, '555', 2),
(8, '666', 2),
(9, '777', 2),
(10, '888', 2),
(11, '222', 1),
(12, '333', 1),
(13, '444', 1),
(14, '555', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 'A8', 'iPhone 7', 1, '111', 1789000, 1),
(9, 'B1', 'Tablet Samsung', 2, '222', 717460, 1),
(10, 'B2', 'Tableta Ma11', 2, '222', 419419, 1),
(11, 'B3', 'Tableta Inteligente 10', 2, '222', 366272, 1),
(12, 'B4', 'Tableta Hd', 2, '222', 439941, 1),
(13, 'B5', 'Tableta Hd', 2, '222', 439941, 1),
(14, 'B6', 'Tableta Inteligente', 2, '222', 331963, 1),
(15, 'B7', 'Tableta Inch X11pro ', 2, '222', 298591, 1),
(16, 'B8', 'Tableta Inteligente Android 11', 2, '222', 320372, 1),
(17, 'C1', 'Portátil Asus X415EA', 3, '333', 298591, 1),
(18, 'C2', 'Portátil Lenovo IdeaPad', 3, '333', 1300000, 1),
(19, 'C3', 'Portátil Asus Vivobook', 3, '333', 2699800, 1),
(20, 'C4', 'Portátil Asus VivoBook Pro 15', 3, '333', 2599000, 1),
(21, 'C5', 'Portátil gamer Asus TUF', 3, '444', 3299000, 1),
(22, 'C6', 'Laptop Hp 14', 3, '444', 1299000, 1),
(23, 'C7', 'Portátil Asus VivoBook X543UA', 3, '444', 2020553, 1),
(24, 'C8', 'Portátil Gamer Acer Nitro 5', 3, '444', 2020553, 1),
(25, 'D1', 'Torre Cpu Gamer Athlon', 4, '555', 1282500, 1),
(26, 'D2', 'Torre Cpu Gamer Ryzen 5', 4, '555', 1949900, 1),
(27, 'D3', 'Torre Cpu Gamer Core I5', 4, '555', 1949900, 1),
(28, 'D4', 'Torre Cpu Gamer Ryzen 7', 4, '555', 1009900, 1),
(29, 'D5', 'Cpu Torre Core I5', 4, '555', 1949900, 1),
(30, 'D6', 'Cpu Torre+monitor 17', 4, '555', 1949900, 1),
(31, 'D7', 'Torre Cpu Intel Celeron G5925', 4, '555', 1450000, 1),
(32, 'D8', 'Cpu Torre Pc Gamer Amd', 4, '555', 3169900, 1),
(33, 'E1', 'Audífonos in-ear gamer', 5, '222', 1282500, 1),
(34, 'E2', 'Audífonos Logitech G', 5, '222', 579900, 1),
(35, 'E3', 'Audífonos inalámbricos Sony', 5, '222', 579900, 1),
(36, 'E4', 'Redmi Buds 4 Pro', 5, '222', 359000, 1),
(37, 'E5', 'Audífonos inalámbricos JBL', 5, '333', 185900, 1),
(38, 'E6', ' Lenovo LivePods LP6', 5, '333', 76282, 1),
(39, 'E7', 'Udífonos in-ear gamer inalámbr', 5, '333', 76282, 1),
(40, 'E8', 'Audífonos in-ear inalámbricos ', 5, '333', 33999, 1),
(41, 'F1', 'Monitor gamer curvo Samsung', 6, '444', 798619, 1),
(42, 'F2', 'Monitor gamer Samsung F24T35 l', 6, '444', 583178, 1),
(43, 'F3', 'Monitor Gamer LG 23.8', 6, '444', 583178, 1),
(44, 'F4', 'Monitor Gamer 22', 6, '444', 468000, 1),
(45, 'F5', 'Pantalla De Monitor Mini 3.5', 6, '555', 468000, 1),
(46, 'F6', 'Monitor Samsung M5', 6, '555', 468000, 1),
(47, 'F7', 'Monitor gamer LG 27UL500 led', 6, '555', 1536308, 1),
(48, 'F8', 'Monitor Gamer LG 27 Ultragear', 6, '555', 1117719, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(10) NOT NULL COMMENT 'Aquí se almacena el identificador del rol.',
  `rol` tinytext NOT NULL COMMENT 'Aquí se almacena el nombre de cada rol.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `documento`, `nombre_usuario`, `apellido_usuario`, `contraseña`, `correo`, `id_estado`) VALUES
(0, '111', 'Draco', 'Perez', '$2y$10$Ud6jIqWQO7wyExoezoxpMeQ7hEcCRPgaCnP66.sbNkLmECog5pQdu', 'dp@gmail.com', 2),
(1, '222', 'brayan', 'hernandez', '$2y$10$Zwsfb.WSasJoTtEr7F/C9OUuYcMHOMi.PXd9gh2BeDxxE6UnifBs.', 'bh@gmail.com', 1),
(2, '333', 'julian', 'rojas', '$2y$10$Ph4rF0OTyYQZxpAfC5ZXe.EBjJfiT2JCq2/yS2WGn66MQxtzWeiom', 'jr@gmail.com', 1),
(3, '444', 'jesus', 'cabezas', '$2y$10$cUueZVm/Wy9NVIRB55HSh.xoy1ZYQr9bOpllRaTqs92Y4rA.7fUmS', 'jc@gmail.com', 1),
(4, '555', 'esteban', 'salcedo', '$2y$10$mTIY.S8LciTUz.R2nweLDOzf94NEd5sYnzf3ltM4nZpu9Vlm3hWxi', 'es@gmail.com', 1),
(5, '666', 'juan', 'prieto', '$2y$10$mAYVCQSUD/NkoI9VWugSxuLjz6SZKUjW3eSp42LGlfp06E4xloBeC', 'jp@gmail.com', 1),
(6, '777', 'david', 'lopez', '$2y$10$l32jl9H.nRTzex2WNqfbFuKvwNIFMd18/c8w6wCmg6p.DMHByL0Va', 'dl@gmail.com', 1),
(7, '888', 'carlos', 'muñoz', '$2y$10$3dOjStO6Nn5GOZh2cJ.A7.zK5ALHh7kxywvZGwZIhfNpGLjIry18i', 'cm@gmail.com', 1);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Aquí se alojara el identificador del permiso.', AUTO_INCREMENT=15;

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
