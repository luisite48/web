-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2025 a las 04:59:56
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
-- Base de datos: `dulceria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_saida`
--

CREATE TABLE `entrada_saida` (
  `id_registro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `hora_salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_inventario`
--

CREATE TABLE `tabla_inventario` (
  `id_producto` int(11) NOT NULL,
  `producto` varchar(200) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `precio` float NOT NULL,
  `preciou` float NOT NULL,
  `cd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_inventario`
--

INSERT INTO `tabla_inventario` (`id_producto`, `producto`, `marca`, `descripcion`, `categoria`, `precio`, `preciou`, `cd`) VALUES
(1, 'bomba', 'Vero', 'paleta tarrito', 'dulce', 10, 3, 100),
(2, 'minipastel', 'Ferrero', 'Pastel de c', 'chocolate', 110, 17, 10),
(3, 'Zumba', 'vero', 'Dulce encjilado sabor sandia', 'enchilado', 56, 3, 100),
(4, 'Mango', 'De la rosa', 'Gomita de mango enchilado ', 'enchilado', 100, 5, 60),
(5, 'Cremino', 'Ricolino', 'Chocolate doble avellana ', 'chocolate', 70, 5, 20),
(10, 'sandia', 'chilerito', 'dulce asidulado', 'acido', 1, 55, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_ventas`
--

CREATE TABLE `tabla_ventas` (
  `id_ventas` int(11) NOT NULL,
  `precio_producto` float NOT NULL,
  `fecha_venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'luis', '2707', 'Luis'),
(2, 'laura', '1628', 'Laura'),
(3, 'alicia', '2005', 'Alicia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrada_saida`
--
ALTER TABLE `entrada_saida`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `tabla_inventario`
--
ALTER TABLE `tabla_inventario`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tabla_ventas`
--
ALTER TABLE `tabla_ventas`
  ADD PRIMARY KEY (`id_ventas`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrada_saida`
--
ALTER TABLE `entrada_saida`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_inventario`
--
ALTER TABLE `tabla_inventario`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tabla_ventas`
--
ALTER TABLE `tabla_ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrada_saida`
--
ALTER TABLE `entrada_saida`
  ADD CONSTRAINT `entrada_saida_ibfk_1` FOREIGN KEY (`id_registro`) REFERENCES `tabla_usuarios` (`id_username`);

--
-- Filtros para la tabla `tabla_ventas`
--
ALTER TABLE `tabla_ventas`
  ADD CONSTRAINT `tabla_ventas_ibfk_1` FOREIGN KEY (`id_ventas`) REFERENCES `tabla_inventario` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
