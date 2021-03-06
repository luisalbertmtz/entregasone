-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2022 a las 16:19:46
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
-- Base de datos: `inventariosone`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `producto` datetime DEFAULT NULL COMMENT 'Create Time',
  `cantidad` datetime DEFAULT NULL COMMENT 'Update Time',
  `fecha` varchar(255) DEFAULT NULL COMMENT 'content'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='newTable';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `idBitacora` int(7) NOT NULL COMMENT 'Clave primaria',
  `idUsuario` int(7) DEFAULT NULL COMMENT 'Id Usuario',
  `idProducto` int(11) DEFAULT NULL,
  `accion` varchar(100) NOT NULL COMMENT 'Acción Realizada',
  `fechaCreacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Bitácora de Eventos';

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`idBitacora`, `idUsuario`, `idProducto`, `accion`, `fechaCreacion`) VALUES
(1, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 13:07:22'),
(2, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 13:07:52'),
(3, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 13:40:28'),
(4, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 15:36:38'),
(5, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 15:39:24'),
(6, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 15:46:09'),
(7, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 16:04:19'),
(8, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 16:07:03'),
(9, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 16:43:52'),
(10, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 16:46:19'),
(11, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 17:41:05'),
(12, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 17:41:25'),
(13, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 17:42:43'),
(14, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 17:43:14'),
(15, 1, NULL, 'Nuevo acceso al sistema', '2022-06-07 18:01:17'),
(16, 1, NULL, 'Nuevo acceso al sistema', '2022-06-08 10:59:13'),
(17, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 08:50:07'),
(18, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 08:54:35'),
(19, 1, 1, 'Entrega de articulos', '2022-06-13 12:07:31'),
(20, 1, 2, 'Recepci?n de articulos', '2022-06-13 12:08:02'),
(21, 1, 3, 'Entrega de articulos', '2022-06-13 12:09:07'),
(22, 1, 4, 'Recepci?n de articulos', '2022-06-13 12:09:33'),
(23, 1, 5, 'Entrega de articulos', '2022-06-13 12:14:26'),
(24, 1, 6, 'Recepci?n de articulos', '2022-06-13 12:15:00'),
(25, 1, NULL, 'Cierre de sesi?n', '2022-06-13 12:17:24'),
(26, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 12:19:13'),
(27, 1, NULL, 'Cierre de sesi?n', '2022-06-13 12:19:36'),
(28, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 12:21:43'),
(29, 1, NULL, 'Cierre de sesi?n', '2022-06-13 12:21:49'),
(30, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 12:21:59'),
(31, 1, NULL, 'Cierre de sesi?n', '2022-06-13 12:22:03'),
(32, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 12:22:13'),
(33, 1, NULL, 'Cierre de sesi?n', '2022-06-13 12:22:21'),
(34, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 12:22:47'),
(35, 1, NULL, 'Cierre de sesi?n', '2022-06-13 12:22:51'),
(36, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 12:23:05'),
(37, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 13:38:50'),
(38, 1, NULL, 'Cierre de sesi?n', '2022-06-13 14:21:26'),
(39, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 14:21:34'),
(40, 1, NULL, 'Cierre de sesi?n', '2022-06-13 14:24:09'),
(41, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 14:24:19'),
(42, 1, 7, 'Recepci?n de articulos', '2022-06-13 14:26:36'),
(43, 1, 8, 'Entrega de articulos', '2022-06-13 14:27:14'),
(44, 1, 9, 'Recepci?n de articulos', '2022-06-13 14:27:37'),
(45, 1, 10, 'Recepci?n de articulos', '2022-06-13 14:28:15'),
(46, 1, 11, 'Entrega de articulos', '2022-06-13 14:38:42'),
(47, 1, 12, 'Recepci?n de articulos', '2022-06-13 14:39:43'),
(48, 1, 13, 'Recepci?n de articulos', '2022-06-13 14:40:38'),
(49, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 15:19:57'),
(50, 1, 14, 'Entrega de articulos', '2022-06-13 15:37:33'),
(51, 1, NULL, 'Cierre de sesi?n', '2022-06-13 15:47:59'),
(52, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 15:48:05'),
(53, 1, NULL, 'Cierre de sesi?n', '2022-06-13 15:48:26'),
(54, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 15:48:33'),
(55, 1, NULL, 'Cierre de sesi?n', '2022-06-13 15:48:48'),
(56, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 15:48:54'),
(57, 1, 15, 'Entrega de articulos', '2022-06-13 16:07:25'),
(58, 1, 16, 'Recepci?n de articulos', '2022-06-13 16:07:48'),
(59, 1, 17, 'Entrega de articulos', '2022-06-13 16:08:27'),
(60, 1, 18, 'Recepci?n de articulos', '2022-06-13 16:09:05'),
(61, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 17:22:44'),
(62, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 17:52:20'),
(63, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 17:52:58'),
(64, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 18:09:12'),
(65, 1, NULL, 'Cierre de sesi?n', '2022-06-13 18:20:38'),
(66, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 18:21:16'),
(67, 1, 19, 'Recepci?n de articulos', '2022-06-13 18:21:52'),
(68, 1, 20, 'Recepci?n de articulos', '2022-06-13 18:23:10'),
(69, 1, NULL, 'Cierre de sesi?n', '2022-06-13 20:29:16'),
(70, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 20:29:43'),
(71, 1, NULL, 'Cierre de sesi?n', '2022-06-13 22:33:20'),
(72, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 22:33:28'),
(73, 1, NULL, 'Nuevo acceso al sistema', '2022-06-13 22:49:00'),
(74, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 00:35:15'),
(75, 1, 21, 'Entrega de articulos', '2022-06-14 00:35:26'),
(76, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 02:17:56'),
(77, 1, NULL, 'Cierre de sesi?n', '2022-06-14 02:19:13'),
(78, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 02:19:53'),
(79, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 07:06:40'),
(80, 1, 22, 'Entrega de articulos', '2022-06-14 07:06:59'),
(81, 1, 23, 'Recepci?n de articulos', '2022-06-14 07:07:36'),
(82, 1, 24, 'Recepci?n de articulos', '2022-06-14 07:08:36'),
(83, 1, 25, 'Recepci?n de articulos', '2022-06-14 07:14:25'),
(84, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 07:16:06'),
(85, 1, NULL, 'Cierre de sesi?n', '2022-06-14 07:16:50'),
(86, 1, NULL, 'Cierre de sesi?n', '2022-06-14 10:08:12'),
(87, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 10:11:59'),
(88, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 10:59:31'),
(89, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 11:03:01'),
(90, 1, 26, 'Entrega de articulos', '2022-06-14 11:03:41'),
(91, 1, 27, 'Recepci?n de articulos', '2022-06-14 11:04:30'),
(92, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 11:53:48'),
(93, 1, NULL, 'Cierre de sesi?n', '2022-06-14 12:33:08'),
(94, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 12:33:45'),
(95, 1, 28, 'Entrega de articulos', '2022-06-14 12:38:07'),
(96, 1, 29, 'Recepci?n de articulos', '2022-06-14 12:42:49'),
(97, 1, 30, 'Entrega de articulos', '2022-06-14 12:43:55'),
(98, 1, 31, 'Recepci?n de articulos', '2022-06-14 12:45:12'),
(99, 1, 32, 'Recepci?n de articulos', '2022-06-14 12:47:59'),
(100, 1, 33, 'Recepci?n de articulos', '2022-06-14 12:48:23'),
(101, 1, NULL, 'Cierre de sesi?n', '2022-06-14 12:49:37'),
(102, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 12:50:15'),
(103, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 12:56:24'),
(104, 1, NULL, 'Cierre de sesi?n', '2022-06-14 13:51:51'),
(105, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 13:51:58'),
(106, 1, NULL, 'Cierre de sesi?n', '2022-06-14 14:33:14'),
(107, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 14:33:46'),
(108, 1, NULL, 'Cierre de sesi?n', '2022-06-14 16:03:13'),
(109, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 16:03:21'),
(110, 1, NULL, 'Cierre de sesi?n', '2022-06-14 16:29:13'),
(111, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 16:37:42'),
(112, 1, NULL, 'Cierre de sesi?n', '2022-06-14 16:38:41'),
(113, 4, NULL, 'Nuevo acceso al sistema', '2022-06-14 16:38:49'),
(114, 4, NULL, 'Cierre de sesi?n', '2022-06-14 16:39:22'),
(115, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 16:39:29'),
(116, 1, NULL, 'Cierre de sesi?n', '2022-06-14 16:45:28'),
(117, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 17:05:49'),
(118, 1, NULL, 'Cierre de sesi?n', '2022-06-14 17:21:15'),
(119, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 17:24:57'),
(120, 1, 34, 'Entrega de articulos', '2022-06-14 17:26:54'),
(121, 1, 35, 'Recepci?n de articulos', '2022-06-14 17:30:58'),
(122, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 17:49:54'),
(123, 1, 36, 'Entrega de articulos', '2022-06-14 17:50:37'),
(124, 1, 37, 'Recepci?n de articulos', '2022-06-14 17:51:24'),
(125, 1, NULL, 'Cierre de sesi?n', '2022-06-14 17:54:55'),
(126, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 18:09:47'),
(127, 1, NULL, 'Cierre de sesi?n', '2022-06-14 19:12:22'),
(128, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 19:12:33'),
(129, 1, NULL, 'Cierre de sesi?n', '2022-06-14 19:17:53'),
(130, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 19:29:15'),
(131, 1, NULL, 'Cierre de sesi?n', '2022-06-14 19:29:24'),
(132, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 19:29:31'),
(133, 1, NULL, 'Cierre de sesi?n', '2022-06-14 19:36:20'),
(134, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 19:42:22'),
(135, 1, NULL, 'Cierre de sesi?n', '2022-06-14 22:58:06'),
(136, 1, NULL, 'Nuevo acceso al sistema', '2022-06-14 23:03:45'),
(137, 1, NULL, 'Cierre de sesi?n', '2022-06-14 23:05:13'),
(138, 1, NULL, 'Nuevo acceso al sistema', '2022-06-15 08:30:21'),
(139, 1, NULL, 'Cierre de sesi?n', '2022-06-15 08:30:34'),
(140, 1, NULL, 'Nuevo acceso al sistema', '2022-06-15 09:09:23'),
(141, 1, NULL, 'Cierre de sesi?n', '2022-06-15 09:09:35'),
(142, 1, NULL, 'Nuevo acceso al sistema', '2022-06-15 09:32:54'),
(143, 1, 38, 'Entrega de articulos', '2022-06-15 09:34:14'),
(144, 1, 39, 'Recepci?n de articulos', '2022-06-15 09:36:28'),
(145, 1, 40, 'Recepci?n de articulos', '2022-06-15 10:16:31'),
(146, 1, NULL, 'Nuevo acceso al sistema', '2022-06-15 11:02:20'),
(147, 1, 41, 'Entrega de articulos', '2022-06-15 11:02:38'),
(148, 1, NULL, 'Cierre de sesi?n', '2022-06-15 11:02:53'),
(149, 1, NULL, 'Nuevo acceso al sistema', '2022-06-15 16:32:29'),
(150, 1, 42, 'Recepci?n de articulos', '2022-06-15 18:58:44'),
(151, 1, NULL, 'Nuevo acceso al sistema', '2022-06-15 19:17:40'),
(152, 1, 43, 'Entrega de articulos', '2022-06-15 19:20:27'),
(153, 1, 44, 'Recepci?n de articulos', '2022-06-15 19:21:09'),
(154, 1, NULL, 'Nuevo acceso al sistema', '2022-06-15 20:52:07'),
(155, 1, NULL, 'Nuevo acceso al sistema', '2022-06-16 09:56:19'),
(156, 1, NULL, 'Cierre de sesi?n', '2022-06-16 12:13:32'),
(157, 1, NULL, 'Nuevo acceso al sistema', '2022-06-16 12:27:55'),
(158, 1, NULL, 'Nuevo acceso al sistema', '2022-06-16 13:39:17'),
(159, 1, NULL, 'Cierre de sesi?n', '2022-06-16 13:40:02'),
(160, 1, NULL, 'Nuevo acceso al sistema', '2022-06-16 16:36:17'),
(161, 1, NULL, 'Nuevo acceso al sistema', '2022-06-16 22:52:18'),
(162, 1, NULL, 'Cierre de sesi?n', '2022-06-17 02:38:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(7) NOT NULL COMMENT 'Clave primaria',
  `Nombre` varchar(50) NOT NULL COMMENT 'Categoría',
  `activo` bit(1) DEFAULT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  `fechaActualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Categorias de Producto';

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `Nombre`, `activo`, `fechaCreacion`, `fechaActualizacion`) VALUES
(1, 'Felpa', b'1', '2022-06-13 11:36:29', '2022-06-13 11:36:29'),
(2, 'Blancos', b'1', '2022-06-13 11:37:55', '2022-06-13 11:37:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `idInventario` int(7) NOT NULL COMMENT 'Clave primaria',
  `idUsuario` int(7) NOT NULL COMMENT 'Id Usuario',
  `idProducto` int(7) NOT NULL COMMENT 'Id Producto',
  `Comentario` varchar(130) NOT NULL COMMENT 'Comentario',
  `cantidad` int(7) DEFAULT NULL,
  `inventario` int(7) DEFAULT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  `idProveedor` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Bitácora de Eventos';

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`idInventario`, `idUsuario`, `idProducto`, `Comentario`, `cantidad`, `inventario`, `fechaCreacion`, `idProveedor`) VALUES
(1, 1, 1, 'prueba', -10, 1, '2022-06-13 12:07:31', NULL),
(2, 1, 1, 'prueba recepcion', 5, 2, '2022-06-13 12:08:02', NULL),
(3, 1, 1, 'prueba 2', -20, 1, '2022-06-13 12:09:07', NULL),
(4, 1, 1, 'prueba 2 recepcion', 15, 2, '2022-06-13 12:09:33', NULL),
(5, 1, 1, 'prueba de entrega 3', -20, 1, '2022-06-13 12:14:26', NULL),
(6, 1, 1, 'prueba de entrega 3', 10, 2, '2022-06-13 12:15:00', NULL),
(7, 1, 1, 'prueba 4', 20, 2, '2022-06-13 14:26:36', NULL),
(8, 1, 1, 'prueba 5', -10, 1, '2022-06-13 14:27:14', NULL),
(9, 1, 1, 'prueba 4', 5, 2, '2022-06-13 14:27:37', NULL),
(10, 1, 1, 'entrega pendiente', 5, 2, '2022-06-13 14:28:15', NULL),
(11, 1, 1, 'prueba 5', -10, 1, '2022-06-13 14:38:42', NULL),
(12, 1, 1, 'prueba 5', 5, 2, '2022-06-13 14:39:43', NULL),
(13, 1, 1, '', 5, 2, '2022-06-13 14:40:38', NULL),
(14, 1, 1, 'prueba6', -10, 1, '2022-06-13 15:37:33', NULL),
(15, 1, 2, 'prueba 6', -20, 1, '2022-06-13 16:07:24', NULL),
(16, 1, 2, '', 10, 2, '2022-06-13 16:07:48', NULL),
(17, 1, 5, 'prueba 7', -20, 1, '2022-06-13 16:08:27', NULL),
(18, 1, 5, 'prueba 7', 5, 2, '2022-06-13 16:09:05', NULL),
(19, 1, 5, 'prueba7', 14, 2, '2022-06-13 18:21:51', NULL),
(20, 1, 1, 'prueaba 7', 5, 2, '2022-06-13 18:23:10', NULL),
(21, 1, 1, '', -10, 1, '2022-06-14 00:35:26', '2'),
(22, 1, 1, '', -10, 1, '2022-06-14 07:06:59', '2'),
(23, 1, 1, '', 5, 2, '2022-06-14 07:07:36', '1'),
(24, 1, 1, '', 5, 2, '2022-06-14 07:08:36', '2'),
(25, 1, 1, '', 15, 2, '2022-06-14 07:14:25', '2'),
(26, 1, 4, 'Se entrega toalla manchadas ', -10, 1, '2022-06-14 11:03:41', '1'),
(27, 1, 4, 'Limpias', 10, 2, '2022-06-14 11:04:30', '1'),
(28, 1, 1, 'prueba 1', -10, 1, '2022-06-14 12:38:07', '1'),
(29, 1, 1, 'prueba', 5, 2, '2022-06-14 12:42:49', '1'),
(30, 1, 2, 'entrego a el proveedor', -20, 1, '2022-06-14 12:43:55', '1'),
(31, 1, 2, 'se entrega a one', 10, 2, '2022-06-14 12:45:12', '1'),
(32, 1, 2, '', 10, 2, '2022-06-14 12:47:59', '2'),
(33, 1, 2, 'regresaron', 10, 2, '2022-06-14 12:48:23', '1'),
(34, 1, 1, 'prueba1', -10, 1, '2022-06-14 17:26:54', '2'),
(35, 1, 1, 'bhnjnjnjh', 5, 2, '2022-06-14 17:30:58', '2'),
(36, 1, 17, 'Se reciben con mal olor, ', -23, 1, '2022-06-14 17:50:37', '1'),
(37, 1, 17, '', 22, 2, '2022-06-14 17:51:24', '2'),
(38, 1, 1, 'toalla desilachada', -10, 1, '2022-06-15 09:34:14', '1'),
(39, 1, 1, '', 10, 2, '2022-06-15 09:36:28', '1'),
(40, 1, 17, '', 23, 2, '2022-06-15 10:16:31', '1'),
(41, 1, 1, 'ffhf', -10, 1, '2022-06-15 11:02:37', '1'),
(42, 1, 1, '', 10, 2, '2022-06-15 18:58:43', '1'),
(43, 1, 2, 'Ghhhhh', -10, 1, '2022-06-15 19:20:27', '1'),
(44, 1, 2, 'Hhhhh', 5, 2, '2022-06-15 19:21:09', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(7) NOT NULL COMMENT 'Clave primaria',
  `Nombre` varchar(200) NOT NULL COMMENT 'Nombre del Prodocuto',
  `idCategoria` int(7) DEFAULT NULL,
  `activo` bit(1) DEFAULT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  `fechaActualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Productos';

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `Nombre`, `idCategoria`, `activo`, `fechaCreacion`, `fechaActualizacion`) VALUES
(1, 'Toalla de baño', 2, b'1', '2022-06-13 12:05:20', '2022-06-13 12:05:20'),
(2, 'Toalla de mano', 2, b'1', '2022-06-13 12:25:22', '2022-06-13 12:25:22'),
(3, 'Toalla tapete', 2, b'1', '2022-06-13 12:25:55', '2022-06-13 12:25:55'),
(4, 'Toalla color', 2, b'1', '2022-06-13 12:26:20', '2022-06-13 12:26:20'),
(5, 'Sabana queen', 2, b'1', '2022-06-13 12:27:15', '2022-06-13 12:27:15'),
(7, 'Sabana twin', 2, b'1', '2022-06-13 12:52:40', '2022-06-13 12:52:40'),
(8, 'Funda', 2, b'1', '2022-06-13 12:53:19', '2022-06-13 12:53:19'),
(9, 'Wafle queen', 2, b'1', '2022-06-13 12:53:39', '2022-06-13 12:53:39'),
(10, 'Wafle twin', 2, b'1', '2022-06-13 12:54:16', '2022-06-13 12:54:16'),
(11, 'Pie de cama', 1, b'1', '2022-06-13 12:55:14', '2022-06-13 12:55:14'),
(12, 'Cobertor', 1, b'1', '2022-06-13 12:55:40', '2022-06-13 12:55:40'),
(13, 'Cubre colchon', 2, b'1', '2022-06-13 12:56:12', '2022-06-13 12:56:12'),
(15, 'Cobertor de bebe', 2, b'1', '2022-06-13 13:02:58', '2022-06-13 13:02:58'),
(16, 'Sabana de bebe', 2, b'1', '2022-06-13 13:03:21', '2022-06-13 13:03:21'),
(17, 'Almohadas', 2, b'1', '2022-06-13 13:06:47', '2022-06-13 13:06:47'),
(18, 'Fundas para garrafon', 1, b'1', '2022-06-13 13:07:16', '2022-06-13 13:07:16'),
(19, 'Rodapie', 1, b'1', '2022-06-13 13:07:33', '2022-06-13 13:07:33'),
(20, 'Mop', 1, b'1', '2022-06-13 13:07:49', '2022-06-13 13:07:49'),
(21, 'Limpion', 1, b'1', '2022-06-13 13:08:02', '2022-06-13 13:08:02'),
(22, 'Protector de almohada', 2, b'1', '2022-06-13 13:11:13', '2022-06-13 13:11:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(7) NOT NULL COMMENT 'Clave primaria',
  `Nombre` varchar(80) NOT NULL COMMENT 'Nombre',
  `email` varchar(50) NOT NULL COMMENT 'E-mail',
  `telefono` varchar(50) NOT NULL COMMENT 'Telefono',
  `activo` bit(1) DEFAULT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  `fechaActualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Roles';

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idProveedor`, `Nombre`, `email`, `telefono`, `activo`, `fechaCreacion`, `fechaActualizacion`) VALUES
(1, 'Super Nova lavanderia industrial', 'nova@correo.com', '9620000000', b'1', '2022-06-13 12:02:09', '2022-06-13 12:02:09'),
(2, 'Hotel One', 'One@one.com', '9620000001', b'1', '2022-06-13 12:03:58', '2022-06-13 12:03:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(7) NOT NULL COMMENT 'Clave primaria',
  `Nombre` varchar(80) NOT NULL COMMENT 'Nombre',
  `activo` bit(1) DEFAULT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  `fechaActualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Roles';

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `Nombre`, `activo`, `fechaCreacion`, `fechaActualizacion`) VALUES
(1, 'Sistemas', b'1', '2022-06-14 15:15:39', '2022-06-14 15:15:39'),
(2, 'Administrador', b'1', '2022-06-14 15:15:39', '2022-06-14 15:15:39'),
(3, 'Supervisor', b'1', '2022-06-14 15:15:39', '2022-06-14 15:15:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(7) NOT NULL COMMENT 'Clave primaria',
  `username` varchar(50) NOT NULL COMMENT 'Nombre de Usuario',
  `nombreCompleto` varchar(80) NOT NULL COMMENT 'Nombre Completo',
  `password` varchar(50) NOT NULL COMMENT 'Password',
  `email` varchar(50) NOT NULL COMMENT 'E-mail',
  `telefono` varchar(50) NOT NULL COMMENT 'Telefono',
  `idRol` int(7) DEFAULT NULL COMMENT 'Id Rol',
  `activo` bit(1) DEFAULT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  `fechaActualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Usuarios';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `username`, `nombreCompleto`, `password`, `email`, `telefono`, `idRol`, `activo`, `fechaCreacion`, `fechaActualizacion`) VALUES
(1, 'admin', 'Administrador', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'mail@mail.com', '7771365478', 1, b'1', '2022-07-06 12:43:00', '2022-07-06 12:43:00'),
(4, 'ama', 'Ama de llaves', '69714b92e2ff2caff1dd520f12727aaaea914430', 'ama@ama.com', '9620000000', 3, b'1', '2022-06-14 16:38:33', '2022-06-14 16:38:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`idBitacora`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`idInventario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idBitacora` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria', AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `idInventario` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria', AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria', AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
