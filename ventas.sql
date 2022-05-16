-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2022 a las 03:57:38
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precioVenta` decimal(5,2) NOT NULL,
  `precioCompra` decimal(5,2) NOT NULL,
  `existencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `descripcion`, `precioVenta`, `precioCompra`, `existencia`) VALUES
(15, 'sabana twin', 'sososo', '20.00', '10.00', 140),
(16, 'sabana de bebe', 'ododododo', '20.00', '10.00', 159),
(17, 'funda', 'odododo', '20.00', '10.00', 150),
(18, 'funda de garrafon', 'odododo', '20.00', '10.00', 150),
(19, 'wafle queen', 'dfsdfddf', '20.00', '10.00', 150),
(20, 'wafle twin', 'slslslsll', '20.00', '10.00', 150),
(21, 'pie de cama', 'oaodoodod', '20.00', '10.00', 146),
(23, 'cobertor de bebe', 'odododod', '10.00', '10.00', 150),
(24, 'cubre colchon', 'idididididi', '20.00', '10.00', 150),
(25, 'protector de almohada', 'ksksksksk', '20.00', '10.00', 500),
(27, 'rodapie', 'dkmsdkllkm', '20.00', '10.00', 149),
(34, 'mop', 'osososososososososo', '0.00', '0.00', 151);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_vendidos`
--

CREATE TABLE `productos_vendidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL,
  `id_venta` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos_vendidos`
--

INSERT INTO `productos_vendidos` (`id`, `id_producto`, `cantidad`, `id_venta`) VALUES
(93, 16, 2, 85),
(95, 16, 1, 87),
(96, 16, 2, 88),
(98, 34, 4, 90),
(99, 34, 7, 91),
(100, 16, 1, 91),
(103, 34, 1, 93),
(104, 16, 2, 94),
(105, 16, 2, 95),
(106, 16, 2, 96),
(107, 34, 1, 97),
(108, 17, 2, 98),
(109, 17, 2, 99),
(110, 21, 1, 100),
(111, 34, 1, 102),
(112, 27, 1, 102),
(113, 34, 1, 103),
(114, 34, 1, 104),
(115, 34, 15, 105),
(116, 34, 1, 106),
(117, 34, 1, 107),
(118, 34, 1, 108),
(119, 34, 1, 109),
(120, 34, 2, 112),
(121, 34, 2, 113),
(122, 34, 1, 114),
(123, 34, 1, 115),
(124, 34, 1, 116),
(125, 34, 3, 117),
(126, 34, 2, 118),
(127, 34, 1, 119),
(128, 34, 1, 120),
(129, 34, 1, 121),
(130, 34, 1, 122),
(131, 34, 13, 123),
(132, 34, 12, 125),
(133, 34, 10, 126),
(134, 34, 1, 127),
(135, 21, 1, 128),
(136, 21, 1, 128),
(137, 21, 1, 128),
(138, 34, 2, 129),
(139, 34, 1, 130),
(140, 34, 1, 131);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `total`) VALUES
(5, '2022-04-23', '0.00'),
(6, '2022-04-23', '0.00'),
(7, '2022-04-23', '0.00'),
(8, '2022-04-23', '0.00'),
(17, '2022-04-25', '0.00'),
(19, '2022-04-27', '0.00'),
(22, '2022-04-28', '0.00'),
(27, '2022-04-28', '0.00'),
(31, '2022-04-29', '0.00'),
(33, '2022-04-29', '20.00'),
(34, '2022-04-29', '0.00'),
(39, '2022-04-29', '0.00'),
(40, '2022-04-29', '20.00'),
(41, '2022-04-29', '0.00'),
(42, '2022-04-29', '0.00'),
(43, '2022-04-29', '20.00'),
(45, '2022-04-29', '0.00'),
(46, '2022-04-29', '40.00'),
(47, '2022-04-29', '20.00'),
(48, '2022-04-29', '20.00'),
(49, '2022-04-29', '0.00'),
(50, '2022-04-29', '20.00'),
(51, '2022-04-29', '20.00'),
(52, '2022-04-29', '0.00'),
(53, '2022-04-29', '20.00'),
(54, '2022-04-29', '0.00'),
(55, '2022-04-29', '20.00'),
(56, '2022-04-29', '20.00'),
(57, '2022-04-29', '20.00'),
(58, '2022-04-29', '20.00'),
(59, '2022-04-29', '20.00'),
(60, '2022-04-29', '20.00'),
(61, '2022-04-29', '20.00'),
(62, '2022-04-29', '20.00'),
(63, '2022-04-29', '20.00'),
(64, '2022-04-29', '20.00'),
(65, '2022-04-29', '20.00'),
(66, '2022-04-29', '20.00'),
(67, '2022-04-29', '20.00'),
(68, '2022-04-29', '20.00'),
(71, '2022-04-29', '20.00'),
(72, '2022-04-29', '20.00'),
(73, '2022-04-29', '20.00'),
(74, '2022-04-29', '20.00'),
(75, '2022-04-29', '20.00'),
(76, '2022-04-29', '20.00'),
(77, '2022-04-29', '20.00'),
(78, '2022-04-29', '20.00'),
(79, '2022-04-29', '20.00'),
(80, '2022-04-29', '0.00'),
(81, '2022-05-04', '20.00'),
(82, '2022-05-04', '200.00'),
(83, '2022-05-04', '200.00'),
(84, '2022-05-04', '40.00'),
(85, '2022-05-05', '40.00'),
(87, '2022-05-05', '20.00'),
(88, '2022-05-05', '40.00'),
(90, '2022-05-05', '0.00'),
(91, '2022-05-05', '10.00'),
(92, '2022-05-05', '2.00'),
(93, '2022-05-05', '1.00'),
(94, '2022-05-05', '2.00'),
(95, '2022-05-05', '2.00'),
(96, '2022-05-05', '2.00'),
(97, '2022-05-05', '1.00'),
(98, '2022-05-05', '2.00'),
(99, '2022-05-05', '2.00'),
(100, '2022-05-05', '1.00'),
(101, '2022-05-05', '0.00'),
(102, '2022-05-05', '2.00'),
(103, '2022-05-05', '1.00'),
(104, '2022-05-05', '1.00'),
(105, '2022-05-05', '15.00'),
(106, '2022-05-05', '1.00'),
(107, '2022-05-05', '1.00'),
(108, '2022-05-05', '1.00'),
(109, '2022-05-05', '1.00'),
(110, '2022-05-11', '0.00'),
(111, '2022-05-11', '0.00'),
(112, '2022-05-11', '2.00'),
(113, '2022-05-11', '2.00'),
(114, '2022-05-11', '1.00'),
(115, '2022-05-11', '1.00'),
(116, '2022-05-11', '1.00'),
(117, '2022-05-12', '3.00'),
(118, '2022-05-12', '2.00'),
(119, '2022-05-12', '1.00'),
(120, '2022-05-12', '1.00'),
(121, '2022-05-12', '1.00'),
(122, '2022-05-12', '1.00'),
(123, '2022-05-12', '13.00'),
(124, '2022-05-12', '0.00'),
(125, '2022-05-12', '12.00'),
(126, '2022-05-12', '10.00'),
(127, '2022-05-12', '1.00'),
(128, '2022-05-12', '3.00'),
(129, '2022-05-15', '2.00'),
(130, '2022-05-15', '1.00'),
(131, '2022-05-15', '1.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD CONSTRAINT `productos_vendidos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_vendidos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
