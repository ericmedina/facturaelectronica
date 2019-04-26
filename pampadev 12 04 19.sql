-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2019 a las 15:45:44
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pampadev`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01actividades`
--

CREATE TABLE `01actividades` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tipo_usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actividad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01actividades`
--

INSERT INTO `01actividades` (`id`, `usuario_id`, `tipo_usuario`, `actividad`, `created_at`, `updated_at`) VALUES
(1, 17, 'Empresa', 'Inicio el ticket iygviyg', '2019-03-05 23:37:59', '2019-03-05 23:37:59'),
(2, 1, 'Contador', 'Inicio sesion', '2019-03-06 23:37:53', '2019-03-06 23:37:53'),
(3, 17, 'Empresa', 'Genero un nuevo comprobante: B00000012', '2019-03-07 04:42:12', '2019-03-07 04:42:12'),
(4, 17, 'Empresa', 'Agrego un nuevo comprobante: B00000012', '2019-03-07 04:42:13', '2019-03-07 04:42:13'),
(5, 17, 'Empresa', 'Visualizó el comprobante: B00000012', '2019-03-07 04:42:16', '2019-03-07 04:42:16'),
(6, 1, 'Contador', 'Cerro sesion', '2019-03-08 21:49:06', '2019-03-08 21:49:06'),
(7, 17, 'Empresa', 'Inicio el ticket kmn km', '2019-03-11 22:57:37', '2019-03-11 22:57:37'),
(8, 1, 'Contador', 'Inicio sesion de la ip: 127.0.0.1', '2019-03-11 23:08:26', '2019-03-11 23:08:26'),
(9, 1, 'contador', 'Inicio el ticket faadfsasdf', '2019-03-11 23:08:48', '2019-03-11 23:08:48'),
(10, 1, 'contador', 'Inicio el ticket faadfsasdf', '2019-03-11 23:09:51', '2019-03-11 23:09:51'),
(11, 1, 'Contador', 'Cerro sesion', '2019-03-11 23:10:14', '2019-03-11 23:10:14'),
(12, 1, 'Contador', 'Inicio sesion de la ip: 127.0.0.1', '2019-03-13 23:33:21', '2019-03-13 23:33:21'),
(13, 1, 'Contador', 'Inicio sesion de la ip: 127.0.0.1', '2019-03-14 00:30:31', '2019-03-14 00:30:31'),
(14, 9, 'Empresa', 'Visualizó el comprobante: B00000018', '2019-03-19 20:37:37', '2019-03-19 20:37:37'),
(15, 17, 'Empresa', 'Agrego el producto sdasdasd', '2019-03-19 21:11:12', '2019-03-19 21:11:12'),
(16, 1, 'Contador', 'Inicio sesion de la ip: 127.0.0.1', '2019-03-19 21:28:53', '2019-03-19 21:28:53'),
(17, 1, 'Contador', 'Inicio sesion de la ip: 127.0.0.1', '2019-03-19 21:43:10', '2019-03-19 21:43:10'),
(18, 1, 'Contador', 'Inicio sesion de la ip: 192.168.0.105', '2019-03-19 21:57:22', '2019-03-19 21:57:22'),
(19, 1, 'Contador', 'Inicio sesion de la ip: 192.168.0.100', '2019-03-19 22:00:27', '2019-03-19 22:00:27'),
(20, 17, 'Empresa', 'Genero un nuevo comprobante: B00000013', '2019-03-20 00:43:11', '2019-03-20 00:43:11'),
(21, 17, 'Empresa', 'Agrego un nuevo comprobante: B00000013', '2019-03-20 00:43:15', '2019-03-20 00:43:15'),
(22, 1, 'Contador', 'Inicio sesion de la ip: 127.0.0.1', '2019-03-21 00:09:34', '2019-03-21 00:09:34'),
(23, 1, 'Contador', 'Cerro sesion', '2019-03-21 02:32:45', '2019-03-21 02:32:45'),
(24, 1, 'Contador', 'Inicio sesion de la ip: 127.0.0.1', '2019-03-26 02:10:06', '2019-03-26 02:10:06'),
(25, 17, 'Empresa', 'Genero un nuevo comprobante: B00000014', '2019-03-29 00:28:57', '2019-03-29 00:28:57'),
(26, 17, 'Empresa', 'Agrego un nuevo comprobante: B00000014', '2019-03-29 00:29:00', '2019-03-29 00:29:00'),
(27, 17, 'Empresa', 'Genero un nuevo comprobante: B00000015', '2019-03-29 00:31:33', '2019-03-29 00:31:33'),
(28, 17, 'Empresa', 'Agrego un nuevo comprobante: B00000015', '2019-03-29 00:31:33', '2019-03-29 00:31:33'),
(29, 17, 'Empresa', 'Genero un nuevo comprobante: B00000016', '2019-03-29 00:33:01', '2019-03-29 00:33:01'),
(30, 17, 'Empresa', 'Agrego un nuevo comprobante: B00000016', '2019-03-29 00:33:01', '2019-03-29 00:33:01'),
(31, 17, 'Empresa', 'Genero un nuevo comprobante: B00000017', '2019-03-29 00:33:53', '2019-03-29 00:33:53'),
(32, 17, 'Empresa', 'Agrego un nuevo comprobante: B00000017', '2019-03-29 00:33:54', '2019-03-29 00:33:54'),
(33, 17, 'Empresa', 'Genero un nuevo comprobante: B00000018', '2019-03-29 00:34:32', '2019-03-29 00:34:32'),
(34, 17, 'Empresa', 'Agrego un nuevo comprobante: B00000018', '2019-03-29 00:34:33', '2019-03-29 00:34:33'),
(35, 17, 'Empresa', 'Genero un nuevo comprobante: B00000019', '2019-03-29 00:35:22', '2019-03-29 00:35:22'),
(36, 17, 'Empresa', 'Agrego un nuevo comprobante: B00000019', '2019-03-29 00:35:23', '2019-03-29 00:35:23'),
(37, 17, 'Empresa', 'Genero un nuevo comprobante: B00000020', '2019-03-29 00:39:24', '2019-03-29 00:39:24'),
(38, 17, 'Empresa', 'Agrego un nuevo comprobante: B00000020', '2019-03-29 00:39:25', '2019-03-29 00:39:25'),
(39, 17, 'Empresa', 'Genero un nuevo comprobante: R00000001', '2019-04-04 23:34:52', '2019-04-04 23:34:52'),
(40, 17, 'Empresa', 'Agrego un nuevo comprobante: R00000001', '2019-04-04 23:34:54', '2019-04-04 23:34:54'),
(41, 17, 'Empresa', 'Visualizó el comprobante: R00000001', '2019-04-04 23:35:12', '2019-04-04 23:35:12'),
(42, 17, 'Empresa', 'Agrego la marca sin marca', '2019-04-04 23:45:21', '2019-04-04 23:45:21'),
(43, 17, 'Empresa', 'Elimino la marca sin marca', '2019-04-04 23:45:28', '2019-04-04 23:45:28'),
(44, 17, 'Empresa', 'Visualizó el comprobante: A00000001', '2019-04-07 01:13:07', '2019-04-07 01:13:07'),
(45, 17, 'Empresa', 'Edito un datos del cliente: Eric Medina', '2019-04-07 02:45:50', '2019-04-07 02:45:50'),
(46, 17, 'Empresa', 'Fue rechazado su comprobante: B00000021', '2019-04-07 02:46:46', '2019-04-07 02:46:46'),
(47, 17, 'Empresa', 'Edito un datos del cliente: Eric Medina', '2019-04-07 02:47:28', '2019-04-07 02:47:28'),
(48, 17, 'Empresa', 'Fue rechazado su comprobante: B00000021', '2019-04-07 02:48:09', '2019-04-07 02:48:09'),
(49, 17, 'Empresa', 'Fue rechazado su comprobante: B00000021', '2019-04-07 02:48:22', '2019-04-07 02:48:22'),
(50, 17, 'Empresa', 'Edito un datos del cliente: Daniel Medina', '2019-04-07 02:50:02', '2019-04-07 02:50:02'),
(51, 17, 'Empresa', 'Genero un nuevo comprobante: A00000001', '2019-04-07 02:50:25', '2019-04-07 02:50:25'),
(52, 17, 'Empresa', 'Agrego un nuevo comprobante: A00000001', '2019-04-07 02:50:27', '2019-04-07 02:50:27'),
(53, 17, 'Empresa', 'Elimino al cliente: Daniel Medina', '2019-04-07 02:51:35', '2019-04-07 02:51:35'),
(54, 17, 'Empresa', 'Genero un nuevo comprobante: A00000002', '2019-04-07 02:54:41', '2019-04-07 02:54:41'),
(55, 17, 'Empresa', 'Agrego un nuevo comprobante: A00000002', '2019-04-07 02:54:42', '2019-04-07 02:54:42'),
(56, 17, 'Empresa', 'Visualizó el comprobante: A00000002', '2019-04-07 02:54:48', '2019-04-07 02:54:48'),
(57, 17, 'Empresa', 'Genero un nuevo comprobante: B00000021', '2019-04-07 03:04:29', '2019-04-07 03:04:29'),
(58, 17, 'Empresa', 'Agrego un nuevo comprobante: B00000021', '2019-04-07 03:04:30', '2019-04-07 03:04:30'),
(59, 17, 'Empresa', 'Edito un datos del cliente: Eric Medina', '2019-04-07 03:27:42', '2019-04-07 03:27:42'),
(60, 17, 'Empresa', 'Genero un nuevo comprobante: A00000003', '2019-04-07 03:29:44', '2019-04-07 03:29:44'),
(61, 17, 'Empresa', 'Agrego un nuevo comprobante: A00000003', '2019-04-07 03:29:45', '2019-04-07 03:29:45'),
(62, 17, 'Empresa', 'Visualizó el comprobante: A00000003', '2019-04-07 03:29:53', '2019-04-07 03:29:53'),
(63, 17, 'Empresa', 'Agrego el servicio Mantenimiento software', '2019-04-10 00:20:24', '2019-04-10 00:20:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01administradores`
--

CREATE TABLE `01administradores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `01administradores`
--

INSERT INTO `01administradores` (`id`, `nombre`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eric Medina', 'administración@pampadev.com.ar', '$2y$10$Rx3uytnPI4RLWeYgHyxA7.2L1UhP1nhHGv3bsanRupoVqxpbggdZi', 'OnozYoSjZPv4HUJW0FU5lPIc82o67aPPrgusRZJ64F8c3yWHSZQNokqV9UT1', '2018-05-23 17:30:09', '2018-05-23 17:30:09'),
(2, 'Eric Medina', 'administracion@pampadev.com.ar', '$2y$10$Xe8zDBOXACGXMgu9t8w1beFMdvPk.zoyxMcSLHOQORhBWP5g1MbNO', NULL, '2018-07-18 17:17:47', '2018-07-18 17:17:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01categorias`
--

CREATE TABLE `01categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01categorias`
--

INSERT INTO `01categorias` (`id`, `categoria`, `precio`, `created_at`, `updated_at`) VALUES
(1, 'Basico', 300.00, NULL, NULL),
(2, 'Intermedio', 450.00, NULL, NULL),
(3, 'Avanzado', 600.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01contadores`
--

CREATE TABLE `01contadores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01contadores`
--

INSERT INTO `01contadores` (`id`, `nombre`, `dni`, `email`, `password`, `matricula`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eric Medina', '20371763644', 'eriic.eme@hotmail.com', '$2y$10$sESf6UV8/vdW.AaKK3StcOOD/F2qEiIp9rbMRIjkZ0rWP4pQ052Be', '123546', '2IPdVN7zhmWtxmHOt4sLs98I8GGcE8IueGHABJZbzJfMeLOqFsmfRBfuYFN7', '2019-02-27 20:51:31', '2019-02-27 20:51:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01contratos`
--

CREATE TABLE `01contratos` (
  `id` int(10) UNSIGNED NOT NULL,
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `licencia_id` int(10) UNSIGNED NOT NULL,
  `periodo_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01contratos`
--

INSERT INTO `01contratos` (`id`, `empresa_id`, `licencia_id`, `periodo_id`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 4, NULL, NULL),
(2, 9, 1, 4, NULL, NULL),
(3, 17, 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01conversacion`
--

CREATE TABLE `01conversacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `tipo_user` enum('empresa','contador','administrador') COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01conversacion`
--

INSERT INTO `01conversacion` (`id`, `ticket_id`, `tipo_user`, `mensaje`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'empresa', 'nk', 17, '2019-03-11 22:57:37', '2019-03-11 22:57:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01conversacion_contador`
--

CREATE TABLE `01conversacion_contador` (
  `id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `tipo_user` enum('contador','administrador') COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01conversacion_contador`
--

INSERT INTO `01conversacion_contador` (`id`, `ticket_id`, `tipo_user`, `mensaje`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'contador', 'asdfasdfsfsdf', 1, '2019-03-11 23:09:51', '2019-03-11 23:09:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01empresas`
--

CREATE TABLE `01empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `razon_social` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_fantasia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_actividad` enum('productos','servicios','productos y servicios') COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsabilidad_iva_id` int(10) UNSIGNED NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` enum('activa','suspendida manualmente','suspendida automaticamente') COLLATE utf8mb4_unicode_ci NOT NULL,
  `facturable` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01empresas`
--

INSERT INTO `01empresas` (`id`, `razon_social`, `cuit`, `nombre_fantasia`, `direccion`, `localidad`, `provincia`, `telefono`, `email`, `password`, `tipo_actividad`, `responsabilidad_iva_id`, `categoria_id`, `remember_token`, `created_at`, `updated_at`, `confirmed`, `confirmation_code`, `estado`, `facturable`) VALUES
(7, 'Abel Osvaldo Medina', '20177307352', NULL, 'Constituyentes 2452', 'Santa Rosa', NULL, '(02954) 439050', 'abel_medina@gmail.com', '$2y$10$krVVzGSXSNpOsfr86Qn0w.xBAdrkpeH8AEsCmugujVClbc4PKy57q', 'productos y servicios', 1, 1, 'bGGkE8SNBcCGRBAEKftWNbaF8hSt7klR0jhDjrcAqSkWZXoIMYO6HvAdb1XR', '2018-03-22 03:54:27', '2018-03-22 03:54:27', 1, NULL, 'activa', 0),
(9, 'Daniel Edgardo Medina', '23204217599', 'Taller mecánico diesel \"Medina\"', 'Constituyentes 2452', 'Santa Rosa', 'La Pampa', '(02954) 439050', 'tallermedina@cpenet.com.ar', '$2y$10$2JRsRnVhjDBEeCsUSQKrceTU6ewq/U7NnC7vjcVXAMAvj1/LV8Llm', 'productos y servicios', 1, 3, 'kImkmkH9r0YeoO07EjLt4KWu2JQEkD2UkzA1Y4bZWJP6GXEUHO1ZZi9laLE1', '2018-03-27 00:23:24', '2018-03-27 00:23:24', 1, NULL, 'activa', 0),
(16, 'Eric Medina', '20371763644', 'PampaDev', 'Constituyentes 2442', 'Santa Rosa', 'La Pampa', '15589992', 'eriic.eme@hotmail.com', '$2y$10$1NMqrih.ZbgSt78g0wS12.2dav087b9Whz.TnYwtWN9N/d3tOkMY2', 'productos', 2, 1, 'X4hO7empt805JpRlLRdGzXf2WJyey588rz8zJXyZpAtZGXjTwpIVFTiapJdd', '2018-07-17 23:10:16', '2018-07-17 23:11:07', 1, NULL, 'activa', 1),
(17, 'Prueba', '20371763644', 'Tu empresa', 'Constituyentes 2442', 'Santa Rosa', 'La Pampa', '23213224', 'prueba@prueba.com', '$2y$10$twaap2uGUlWZYZXcku71suyElliBDfC7/mVNHI9Huu8hiaSpvM/pm', 'productos y servicios', 1, 3, 'qCf6vK5QWkAV97VXJou12Dynke8d8DrexU4BcWTQjBkP2LRW3NcVGB0M8ULe', '2019-01-22 21:51:16', '2019-01-22 21:51:16', 1, NULL, 'activa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01empresas_contadores`
--

CREATE TABLE `01empresas_contadores` (
  `id` int(10) UNSIGNED NOT NULL,
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `contador_id` int(10) UNSIGNED NOT NULL,
  `estado` enum('pendiente','aprobado','rechazado') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pendiente',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01empresas_contadores`
--

INSERT INTO `01empresas_contadores` (`id`, `empresa_id`, `contador_id`, `estado`, `created_at`, `updated_at`) VALUES
(2, 9, 1, 'aprobado', '2019-02-27 20:52:12', '2019-02-27 20:52:12'),
(3, 7, 1, 'pendiente', '2019-02-27 21:25:30', '2019-02-27 21:25:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01facturas_sistema`
--

CREATE TABLE `01facturas_sistema` (
  `id` int(10) UNSIGNED NOT NULL,
  `contrato_id` int(10) UNSIGNED NOT NULL,
  `total` double(8,2) NOT NULL,
  `fecha` date NOT NULL,
  `external_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('Pendiente','Pago','Vencido','Cancelado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01fiscal`
--

CREATE TABLE `01fiscal` (
  `id` int(10) UNSIGNED NOT NULL,
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `punto_venta` int(11) DEFAULT NULL,
  `inicio_actividades` date DEFAULT NULL,
  `ingresos_brutos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actividad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` enum('Pendiente','Tramitado','Listo') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01fiscal`
--

INSERT INTO `01fiscal` (`id`, `empresa_id`, `punto_venta`, `inicio_actividades`, `ingresos_brutos`, `certificado`, `actividad`, `created_at`, `updated_at`, `estado`) VALUES
(1, 7, 4, '2011-02-01', '208455-8', '20177307352', NULL, '2018-03-22 03:54:28', '2018-03-23 01:59:39', 'Listo'),
(3, 9, 4, '1994-06-01', '163167/0', '23204217599', NULL, '2018-03-27 00:23:32', '2018-03-27 16:31:01', 'Listo'),
(8, 16, NULL, NULL, NULL, NULL, NULL, '2018-07-17 23:10:22', '2018-07-19 22:16:18', 'Tramitado'),
(9, 17, 1, '2019-01-22', '1232213/0', '20371763644', NULL, '2019-01-22 21:51:20', '2019-01-22 21:51:20', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01iva`
--

CREATE TABLE `01iva` (
  `id` int(11) NOT NULL,
  `alicuota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01iva`
--

INSERT INTO `01iva` (`id`, `alicuota`, `valor`, `created_at`, `updated_at`) VALUES
(1, 'No Gravado', 0.00, NULL, NULL),
(2, 'Exento', 0.00, NULL, NULL),
(3, '0%', 0.00, NULL, NULL),
(4, '10.5%', 1.10, NULL, NULL),
(5, '21%', 1.21, NULL, NULL),
(6, '27%', 1.27, NULL, NULL),
(8, '5%', 1.05, NULL, NULL),
(9, '2.5%', 1.02, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01licencias`
--

CREATE TABLE `01licencias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01licencias`
--

INSERT INTO `01licencias` (`id`, `nombre`, `precio`, `created_at`, `updated_at`) VALUES
(1, 'Gratis', 0.00, '2019-03-25 13:14:43', NULL),
(2, 'Basico', 300.00, '2019-03-25 13:14:43', NULL),
(3, 'Intermedio', 450.00, '2019-03-25 13:14:43', NULL),
(4, 'Avanzado', 600.00, '2019-03-25 13:14:43', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01periodos`
--

CREATE TABLE `01periodos` (
  `id` int(10) UNSIGNED NOT NULL,
  `dias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descuento` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01periodos`
--

INSERT INTO `01periodos` (`id`, `dias`, `descuento`, `created_at`, `updated_at`) VALUES
(1, 'Mensual', 0.00, '2019-03-25 13:14:43', NULL),
(2, 'Trimestral', 0.00, '2019-03-25 13:14:43', NULL),
(3, 'Semestral', 0.00, '2019-03-25 13:14:43', NULL),
(4, 'Anual', 0.00, '2019-03-25 13:14:43', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01registroips`
--

CREATE TABLE `01registroips` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tipo_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mac` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01registroips`
--

INSERT INTO `01registroips` (`id`, `usuario_id`, `tipo_user`, `ip`, `mac`, `created_at`, `updated_at`) VALUES
(1, 1, 'Contador', '127.0.0.1', 'D0-50-99-55-9C-D0', '2019-03-11 23:08:25', '2019-03-11 23:08:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01responsabilidades_iva`
--

CREATE TABLE `01responsabilidades_iva` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01responsabilidades_iva`
--

INSERT INTO `01responsabilidades_iva` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'IVA Responsable Inscripto', NULL, NULL),
(2, 'Responsable Monotributo', NULL, NULL),
(3, 'Consumidor Final', NULL, NULL),
(4, 'IVA Sujeto Exento', NULL, NULL),
(5, 'Monotributista Social', NULL, NULL),
(6, 'IVA Responsable No Inscripto', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01tickets_contador`
--

CREATE TABLE `01tickets_contador` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tipo_user` enum('contador','administrador') COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('consulta','respuesta','cerrado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `leido` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01tickets_empresa`
--

CREATE TABLE `01tickets_empresa` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tipo_user` enum('empresa','administrador') COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('consulta','respuesta','cerrado','no leido') COLLATE utf8mb4_unicode_ci NOT NULL,
  `leido` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `01tickets_empresa`
--

INSERT INTO `01tickets_empresa` (`id`, `user_id`, `tipo_user`, `asunto`, `estado`, `leido`, `created_at`, `updated_at`) VALUES
(1, 17, 'empresa', 'kmn km', 'consulta', 0, '2019-03-11 22:57:37', '2019-03-11 22:57:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_alicuotas`
--

CREATE TABLE `abel_osvaldo_medina_alicuotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_venta` int(11) NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `alicuota` int(11) NOT NULL,
  `importe_iva` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_categorias_productos`
--

CREATE TABLE `abel_osvaldo_medina_categorias_productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abel_osvaldo_medina_categorias_productos`
--

INSERT INTO `abel_osvaldo_medina_categorias_productos` (`id`, `categoria`, `created_at`, `updated_at`) VALUES
(1, 'Sin categoria', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_clientes`
--

CREATE TABLE `abel_osvaldo_medina_clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsabilidades_iva_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abel_osvaldo_medina_clientes`
--

INSERT INTO `abel_osvaldo_medina_clientes` (`id`, `nombre`, `cuit`, `direccion`, `localidad`, `provincia`, `telefono`, `email`, `responsabilidades_iva_id`, `created_at`, `updated_at`) VALUES
(1, 'CONSUMIDOR FINAL', '0', NULL, NULL, '', NULL, NULL, 3, NULL, NULL),
(2, 'Eric Medina', '37176364', 'Constituyentes 2442', 'Santa Rosa', '', '15589992', 'eriic.eme@hotmail.com', 3, '2018-03-23 02:09:20', '2018-03-23 02:09:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_compras`
--

CREATE TABLE `abel_osvaldo_medina_compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `proveedor_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `pagado` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_credito_a`
--

CREATE TABLE `abel_osvaldo_medina_credito_a` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_credito_b`
--

CREATE TABLE `abel_osvaldo_medina_credito_b` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_detalles`
--

CREATE TABLE `abel_osvaldo_medina_detalles` (
  `id` int(10) UNSIGNED NOT NULL,
  `venta_id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` double(8,2) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abel_osvaldo_medina_detalles`
--

INSERT INTO `abel_osvaldo_medina_detalles` (`id`, `venta_id`, `descripcion`, `cantidad`, `precio`, `total`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Filtro de aire', 1.00, 100.00, 100.00, '', '2018-03-23 03:41:20', '2018-03-23 03:41:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_detalle_compras`
--

CREATE TABLE `abel_osvaldo_medina_detalle_compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `compra_id` int(10) UNSIGNED NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `cantidad` double(8,2) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_factura_a`
--

CREATE TABLE `abel_osvaldo_medina_factura_a` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forma_pago` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_factura_b`
--

CREATE TABLE `abel_osvaldo_medina_factura_b` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forma_pago` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abel_osvaldo_medina_factura_b`
--

INSERT INTO `abel_osvaldo_medina_factura_b` (`id`, `fecha`, `total`, `cliente_id`, `cae`, `fecha_vencimiento`, `estado`, `forma_pago`, `created_at`, `updated_at`, `tipo_doc`, `nro_doc`, `cliente`, `importe_neto`, `percepcion_no_categorizados`, `operaciones_exentas`, `impuestos_nacionales`, `ingresos_brutos`, `impuestos_municipales`, `impuestos_internos`, `codigo_moneda`, `tipo_cambio`, `cantidad_alicuotas`, `codigo_operacion`, `otros_tributos`) VALUES
(1, '2018-03-22', 100.00, 2, '-38088125', '2018-04-01', '', '', '2018-03-23 03:41:20', '2018-03-23 03:41:20', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', '', 0, '', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_gastos`
--

CREATE TABLE `abel_osvaldo_medina_gastos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_marcas`
--

CREATE TABLE `abel_osvaldo_medina_marcas` (
  `id` int(10) UNSIGNED NOT NULL,
  `marca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarco` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abel_osvaldo_medina_marcas`
--

INSERT INTO `abel_osvaldo_medina_marcas` (`id`, `marca`, `remarco`, `created_at`, `updated_at`) VALUES
(1, 'Sin marca', 0.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_movimientos`
--

CREATE TABLE `abel_osvaldo_medina_movimientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `movimiento_id` int(11) NOT NULL,
  `movimiento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abel_osvaldo_medina_movimientos`
--

INSERT INTO `abel_osvaldo_medina_movimientos` (`id`, `movimiento_id`, `movimiento`, `saldo`, `created_at`, `updated_at`) VALUES
(1, 0, 'SALDO INICIAL', 0.00, NULL, NULL),
(2, 1, 'VENTA', 100.00, '2018-03-23 03:41:20', '2018-03-23 03:41:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_pagos`
--

CREATE TABLE `abel_osvaldo_medina_pagos` (
  `id` int(10) UNSIGNED NOT NULL,
  `proveedor_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `pago` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_presupuestos`
--

CREATE TABLE `abel_osvaldo_medina_presupuestos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abel_osvaldo_medina_presupuestos`
--

INSERT INTO `abel_osvaldo_medina_presupuestos` (`id`, `fecha`, `total`, `cliente_id`, `created_at`, `updated_at`) VALUES
(1, '2018-03-22', 400.00, 2, '2018-03-23 02:17:51', '2018-03-23 02:17:51'),
(2, '2018-03-22', 400.00, 2, '2018-03-23 02:50:54', '2018-03-23 02:50:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_productos`
--

CREATE TABLE `abel_osvaldo_medina_productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` double(8,2) NOT NULL,
  `stock_minimo` double(8,2) DEFAULT NULL,
  `precio_compra` double(8,2) NOT NULL,
  `precio_venta` double(8,2) NOT NULL,
  `iva_id` int(10) UNSIGNED NOT NULL,
  `proveedor_id` int(10) UNSIGNED NOT NULL,
  `categoria_producto_id` int(10) UNSIGNED NOT NULL,
  `marca_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abel_osvaldo_medina_productos`
--

INSERT INTO `abel_osvaldo_medina_productos` (`id`, `codigo`, `producto`, `stock`, `stock_minimo`, `precio_compra`, `precio_venta`, `iva_id`, `proveedor_id`, `categoria_producto_id`, `marca_id`, `created_at`, `updated_at`) VALUES
(1, '21321', 'Filtro de aire', 1.00, 0.00, 200.00, 400.00, 5, 1, 1, 1, '2018-03-22 03:56:41', '2018-03-22 03:56:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_proveedores`
--

CREATE TABLE `abel_osvaldo_medina_proveedores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deuda` double(8,2) NOT NULL DEFAULT '0.00',
  `observaciones` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abel_osvaldo_medina_proveedores`
--

INSERT INTO `abel_osvaldo_medina_proveedores` (`id`, `nombre`, `cuit`, `telefono`, `email`, `deuda`, `observaciones`, `created_at`, `updated_at`) VALUES
(1, 'Sin Proveedor', NULL, NULL, NULL, 0.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_registro_actividad`
--

CREATE TABLE `abel_osvaldo_medina_registro_actividad` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_reg_ventas_alic`
--

CREATE TABLE `abel_osvaldo_medina_reg_ventas_alic` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_venta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alicuota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_iva` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_reg_ventas_cbte`
--

CREATE TABLE `abel_osvaldo_medina_reg_ventas_cbte` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_venta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante_hasta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percepcion_no_categorizados` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operaciones_exentas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuestos_nacionales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingresos_brutos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuestos_municipales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuestos_internos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_remitos`
--

CREATE TABLE `abel_osvaldo_medina_remitos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_resumen_cuenta`
--

CREATE TABLE `abel_osvaldo_medina_resumen_cuenta` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_saldo_favor`
--

CREATE TABLE `abel_osvaldo_medina_saldo_favor` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_saldo_pendiente`
--

CREATE TABLE `abel_osvaldo_medina_saldo_pendiente` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_servicios`
--

CREATE TABLE `abel_osvaldo_medina_servicios` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `iva_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abel_osvaldo_medina_ventas`
--

CREATE TABLE `abel_osvaldo_medina_ventas` (
  `id` int(10) UNSIGNED NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` enum('Pago','Pendiente','Cancelado') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abel_osvaldo_medina_ventas`
--

INSERT INTO `abel_osvaldo_medina_ventas` (`id`, `cliente_id`, `fecha`, `tipo_comprobante`, `num_comprobante`, `total`, `created_at`, `updated_at`, `estado`) VALUES
(1, 2, '2018-03-22', 'B', 1, 100.00, '2018-03-23 03:41:20', '2018-03-23 03:41:20', 'Pago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_alicuotas`
--

CREATE TABLE `daniel_edgardo_medina_alicuotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_venta` int(11) NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `alicuota` int(11) NOT NULL,
  `importe_iva` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_alicuotas`
--

INSERT INTO `daniel_edgardo_medina_alicuotas` (`id`, `tipo_comprobante`, `punto_venta`, `num_comprobante`, `importe_neto`, `alicuota`, `importe_iva`, `created_at`, `updated_at`) VALUES
(1, 'A', 4, 1, 4264.46, 5, 895.54, '2018-04-21 17:10:37', '2018-04-21 17:10:37'),
(2, 'A', 4, 2, 4090.91, 5, 859.09, '2018-04-21 18:26:56', '2018-04-21 18:26:56'),
(3, 'B', 4, 1, 3553.72, 5, 746.28, '2018-05-14 16:41:45', '2018-05-14 16:41:45'),
(4, 'B', 4, 2, 4793.39, 5, 1006.61, '2018-05-16 18:14:18', '2018-05-16 18:14:18'),
(5, 'A', 4, 3, 17768.60, 5, 3731.40, '2018-05-18 14:15:27', '2018-05-18 14:15:27'),
(6, 'A', 4, 4, 3471.07, 5, 728.93, '2018-05-21 14:12:47', '2018-05-21 14:12:47'),
(7, 'B', 4, 3, 9876.03, 5, 2073.97, '2018-05-28 14:07:12', '2018-05-28 14:07:12'),
(8, 'A', 4, 5, 7851.24, 5, 1648.76, '2018-05-28 14:14:18', '2018-05-28 14:14:18'),
(9, 'A', 4, 6, 13636.36, 5, 2863.64, '2018-05-29 17:57:58', '2018-05-29 17:57:58'),
(10, 'A', 4, 7, 2892.56, 5, 607.44, '2018-06-02 17:28:04', '2018-06-02 17:28:04'),
(11, 'NCA', 4, 1, 2892.56, 5, 607.44, '2018-06-07 22:31:55', '2018-06-07 22:31:55'),
(12, 'A', 4, 8, 3719.01, 5, 780.99, '2018-07-12 04:32:00', '2018-07-12 04:32:00'),
(13, 'A', 4, 9, 6198.35, 5, 1301.65, '2018-07-12 04:37:01', '2018-07-12 04:37:01'),
(14, 'B', 4, 4, 3500.00, 5, 0.00, '2018-07-12 04:47:33', '2018-07-12 04:47:33'),
(15, 'NCA', 4, 2, 6198.35, 5, 1301.65, '2018-07-12 16:14:58', '2018-07-12 16:14:58'),
(16, 'A', 4, 10, 6198.35, 5, 1301.65, '2018-07-12 16:16:36', '2018-07-12 16:16:36'),
(17, 'B', 4, 5, 82.67, 5, 0.00, '2018-07-26 02:08:07', '2018-07-26 02:08:07'),
(18, 'B', 4, 6, 9654.55, 5, 2027.45, '2018-07-26 03:01:03', '2018-07-26 03:01:03'),
(19, 'NCB', 4, 1, 9654.55, 5, 2027.45, '2018-07-30 20:45:58', '2018-07-30 20:45:58'),
(20, 'A', 4, 11, 4958.68, 5, 0.00, '2018-07-31 01:31:09', '2018-07-31 01:31:09'),
(21, 'B', 4, 7, 10165.29, 5, 2134.71, '2018-08-06 16:05:29', '2018-08-06 16:05:29'),
(22, 'A', 4, 12, 1570.25, 5, 329.75, '2018-08-06 16:15:54', '2018-08-06 16:15:54'),
(23, 'A', 4, 13, 16115.70, 5, 3384.30, '2018-08-08 14:23:57', '2018-08-08 14:23:57'),
(24, 'B', 4, 8, 991.74, 5, 208.26, '2018-08-09 16:19:51', '2018-08-09 16:19:51'),
(25, 'NCB', 4, 2, 991.74, 5, 208.26, '2018-08-09 16:23:04', '2018-08-09 16:23:04'),
(26, 'B', 4, 9, 743.80, 5, 156.20, '2018-08-09 16:24:22', '2018-08-09 16:24:22'),
(27, 'A', 4, 14, 6033.06, 5, 1266.94, '2018-08-09 17:54:11', '2018-08-09 17:54:11'),
(28, 'B', 4, 10, 495.87, 5, 104.13, '2018-08-10 16:30:02', '2018-08-10 16:30:02'),
(29, 'NCB', 4, 3, 743.80, 5, 156.20, '2018-08-15 21:43:52', '2018-08-15 21:43:52'),
(30, 'B', 4, 11, 2231.40, 5, 468.60, '2018-08-15 21:47:19', '2018-08-15 21:47:19'),
(31, 'A', 4, 15, 7355.37, 5, 1544.63, '2018-08-15 21:54:41', '2018-08-15 21:54:41'),
(32, 'A', 4, 16, 10165.29, 5, 2134.71, '2018-08-18 15:51:17', '2018-08-18 15:51:17'),
(33, 'A', 4, 17, 6322.31, 5, 1327.69, '2018-08-22 01:53:03', '2018-08-22 01:53:03'),
(34, 'A', 4, 18, 1652.89, 5, 347.11, '2018-08-24 01:20:17', '2018-08-24 01:20:17'),
(35, 'A', 4, 19, 10743.80, 5, 2256.20, '2018-08-24 21:49:20', '2018-08-24 21:49:20'),
(36, 'A', 4, 20, 5743.80, 5, 1206.20, '2018-08-27 22:24:34', '2018-08-27 22:24:34'),
(37, 'A', 4, 21, 4462.81, 5, 937.19, '2018-08-27 23:11:27', '2018-08-27 23:11:27'),
(38, 'A', 4, 22, 5743.80, 5, 1206.20, '2018-08-28 21:40:45', '2018-08-28 21:40:45'),
(39, 'A', 4, 23, 15454.55, 5, 3245.45, '2018-08-29 21:43:16', '2018-08-29 21:43:16'),
(40, 'A', 4, 24, 2479.34, 5, 520.66, '2018-08-30 22:23:04', '2018-08-30 22:23:04'),
(41, 'A', 4, 25, 7975.21, 5, 1674.79, '2018-08-31 16:17:20', '2018-08-31 16:17:20'),
(42, 'A', 4, 26, 3466.12, 5, 727.88, '2018-08-31 17:17:22', '2018-08-31 17:17:22'),
(43, 'A', 4, 27, 14710.74, 5, 3089.26, '2018-09-01 18:24:59', '2018-09-01 18:24:59'),
(44, 'A', 4, 28, 7727.27, 5, 1622.73, '2018-09-06 18:39:40', '2018-09-06 18:39:40'),
(45, 'A', 4, 29, 6446.28, 5, 1353.72, '2018-09-13 02:31:00', '2018-09-13 02:31:00'),
(46, 'A', 4, 30, 2975.21, 5, 624.79, '2018-09-18 14:10:18', '2018-09-18 14:10:18'),
(47, 'B', 4, 12, 4545.45, 5, 954.55, '2018-09-18 22:08:19', '2018-09-18 22:08:19'),
(48, 'B', 4, 13, 5371.90, 5, 1128.10, '2018-09-21 01:05:37', '2018-09-21 01:05:37'),
(49, 'A', 4, 31, 7975.21, 5, 1674.79, '2018-09-21 01:59:34', '2018-09-21 01:59:34'),
(50, 'A', 4, 32, 5454.55, 5, 1145.45, '2018-09-24 18:11:51', '2018-09-24 18:11:51'),
(51, 'A', 4, 33, 21900.83, 5, 4599.17, '2018-09-28 15:04:24', '2018-09-28 15:04:24'),
(52, 'A', 4, 34, 7851.24, 5, 1648.76, '2018-10-02 18:18:18', '2018-10-02 18:18:18'),
(53, 'B', 4, 14, 2066.12, 5, 433.88, '2018-10-10 01:32:23', '2018-10-10 01:32:23'),
(54, 'A', 4, 35, 8099.17, 5, 1700.83, '2018-10-11 22:52:00', '2018-10-11 22:52:00'),
(55, 'A', 4, 36, 7272.73, 5, 1527.27, '2018-10-16 18:22:52', '2018-10-16 18:22:52'),
(56, 'A', 4, 37, 7603.31, 5, 1596.69, '2018-10-23 01:40:25', '2018-10-23 01:40:25'),
(57, 'A', 4, 38, 13553.72, 5, 2846.28, '2018-10-25 16:49:09', '2018-10-25 16:49:09'),
(58, 'A', 4, 39, 26942.15, 5, 5657.85, '2018-10-26 14:56:40', '2018-10-26 14:56:40'),
(59, 'A', 4, 40, 7024.79, 5, 1475.21, '2018-11-07 18:35:16', '2018-11-07 18:35:16'),
(60, 'A', 4, 41, 7024.79, 5, 1475.21, '2018-11-07 21:46:48', '2018-11-07 21:46:48'),
(61, 'A', 4, 42, 32396.69, 5, 6803.31, '2018-11-12 18:14:37', '2018-11-12 18:14:37'),
(62, 'A', 4, 43, 7851.24, 5, 1648.76, '2018-11-15 17:46:20', '2018-11-15 17:46:20'),
(63, 'A', 4, 44, 10909.09, 5, 2290.91, '2018-11-22 14:08:40', '2018-11-22 14:08:40'),
(64, 'A', 4, 45, 3719.01, 5, 780.99, '2018-11-29 17:49:40', '2018-11-29 17:49:40'),
(65, 'B', 4, 15, 5950.41, 5, 1249.59, '2018-11-30 17:06:43', '2018-11-30 17:06:43'),
(66, 'A', 4, 46, 6198.35, 5, 1301.65, '2018-12-03 17:35:13', '2018-12-03 17:35:13'),
(67, 'A', 4, 47, 23258.68, 5, 4884.32, '2018-12-04 17:54:48', '2018-12-04 17:54:48'),
(68, 'A', 4, 48, 6198.35, 5, 1301.65, '2018-12-04 18:05:47', '2018-12-04 18:05:47'),
(69, 'A', 4, 49, 8000.00, 5, 1680.00, '2018-12-07 15:56:37', '2018-12-07 15:56:37'),
(70, 'A', 4, 50, 3719.01, 5, 780.99, '2018-12-10 14:32:44', '2018-12-10 14:32:44'),
(71, 'A', 4, 51, 4008.26, 5, 841.74, '2018-12-11 00:44:55', '2018-12-11 00:44:55'),
(72, 'B', 4, 16, 3719.01, 5, 780.99, '2018-12-12 00:34:09', '2018-12-12 00:34:09'),
(73, 'A', 4, 52, 8016.53, 5, 1683.47, '2018-12-13 16:35:02', '2018-12-13 16:35:02'),
(74, 'A', 4, 53, 8429.75, 5, 1770.25, '2018-12-17 17:35:21', '2018-12-17 17:35:21'),
(75, 'A', 4, 54, 800.00, 5, 168.00, '2018-12-19 01:09:12', '2018-12-19 01:09:12'),
(76, 'A', 4, 55, 5785.12, 5, 1214.88, '2018-12-20 22:15:55', '2018-12-20 22:15:55'),
(77, 'B', 4, 17, 4545.45, 5, 954.55, '2018-12-21 00:14:05', '2018-12-21 00:14:05'),
(78, 'A', 4, 56, 11000.00, 5, 2310.00, '2018-12-21 16:04:22', '2018-12-21 16:04:22'),
(79, 'A', 4, 57, 1950.41, 5, 409.59, '2018-12-22 17:45:20', '2018-12-22 17:45:20'),
(80, 'A', 4, 58, 14462.81, 5, 3037.19, '2018-12-26 17:51:38', '2018-12-26 17:51:38'),
(81, 'A', 4, 59, 20388.43, 5, 4281.57, '2018-12-28 15:01:25', '2018-12-28 15:01:25'),
(82, 'A', 4, 60, 11322.31, 5, 2377.69, '2019-01-05 14:43:20', '2019-01-05 14:43:20'),
(83, 'A', 4, 61, 7520.66, 5, 1579.34, '2019-01-16 02:20:39', '2019-01-16 02:20:39'),
(84, 'A', 4, 62, 7520.66, 5, 1579.34, '2019-01-16 02:25:26', '2019-01-16 02:25:26'),
(85, 'NCA', 4, 3, 7520.66, 5, 1579.34, '2019-01-16 22:21:47', '2019-01-16 22:21:47'),
(86, 'A', 4, 63, 13652.89, 5, 2867.11, '2019-01-17 01:23:49', '2019-01-17 01:23:49'),
(87, 'A', 4, 64, 3801.65, 5, 798.35, '2019-01-17 18:08:32', '2019-01-17 18:08:32'),
(88, 'A', 4, 65, 12036.20, 4, 1263.80, '2019-01-22 02:33:35', '2019-01-22 02:33:35'),
(89, 'B', 4, 18, 7190.08, 5, 1509.92, '2019-01-22 15:16:29', '2019-01-22 15:16:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_categorias_productos`
--

CREATE TABLE `daniel_edgardo_medina_categorias_productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_categorias_productos`
--

INSERT INTO `daniel_edgardo_medina_categorias_productos` (`id`, `categoria`, `created_at`, `updated_at`) VALUES
(1, 'Sin categoria', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_clientes`
--

CREATE TABLE `daniel_edgardo_medina_clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsabilidades_iva_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_clientes`
--

INSERT INTO `daniel_edgardo_medina_clientes` (`id`, `nombre`, `cuit`, `direccion`, `localidad`, `provincia`, `telefono`, `email`, `responsabilidades_iva_id`, `created_at`, `updated_at`) VALUES
(1, 'CONSUMIDOR FINAL', '0', NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(2, 'SZELIGA HECTOR', '20073628971', '9 DE JULIO  98', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-04-21 17:10:37', '2018-04-21 17:10:37'),
(3, 'LA SEGUNDA  C LSG', '30500017704', 'ROSAS 957', 'ROSARIO', NULL, NULL, NULL, 1, '2018-04-21 18:26:56', '2018-04-21 18:26:56'),
(4, 'AFIP-DGI', '33693450239', NULL, NULL, NULL, NULL, NULL, 3, '2018-05-14 16:41:45', '2018-05-14 16:41:45'),
(5, 'EL CHARABON SRL', '30709664820', 'AV URUGUAY 736', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-05-18 14:15:27', '2018-05-18 14:15:27'),
(6, 'FERNANDEZ JOSE A', '20073689571', 'EDISON 843', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-05-21 14:12:47', '2018-05-21 14:12:47'),
(7, 'SERVICIO MEDICO PREVISONAL', '30616500593', 'AV ROCA 129', 'SANTA ROSA', NULL, NULL, NULL, 4, '2018-05-28 14:07:12', '2018-05-28 14:07:12'),
(8, 'BANCO DE LA PAMPA S.E.M', '30500012516', 'PELLEGRINI 255', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-05-28 14:14:18', '2018-05-28 14:14:18'),
(9, 'SEMILLERIA LOS AMIGOS', '30693577612', 'EDISON 1062', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-05-29 17:57:58', '2018-05-29 17:57:58'),
(10, 'LUCIANO MARQUES', '20224902779', 'HORNERO 5020', 'TOAY', NULL, NULL, NULL, 1, '2018-06-16 18:10:34', '2018-06-16 18:10:34'),
(11, 'MAFFEO DANIEL', '20239720936', NULL, 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-06-27 23:21:07', '2018-06-27 23:21:07'),
(12, 'weigun griselda', '27201083015', 'san pablo 230', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-07-06 18:13:50', '2018-07-06 18:13:50'),
(13, 'FUNDACION NUESTROS PIBES', '33671658499', 'SANTA OSA', NULL, NULL, NULL, NULL, 4, '2018-07-26 03:01:03', '2018-07-26 03:01:03'),
(14, 'SMATA', '30531025799', 'AUTONOMISTA', 'SANTA ROSA', NULL, NULL, NULL, 4, '2018-08-06 16:05:29', '2018-08-06 16:05:29'),
(15, 'MANCINELLI HECTOR JULIO', '20167090169', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-08-06 16:15:54', '2018-08-06 16:15:54'),
(16, 'ANTONELLA CANALIS', '27362569481', NULL, NULL, NULL, NULL, NULL, 1, '2018-08-08 14:23:57', '2018-08-08 14:23:57'),
(17, 'ALVAREZ GRACIELA', '27109196504', 'M ROSAS 180', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-08-09 17:54:11', '2018-08-09 17:54:11'),
(18, 'FERNANDEZ ROBERTO', '23126990979', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-08-18 15:51:17', '2018-08-18 15:51:17'),
(19, 'GENTE DE LA PAMPA S.A', '30581320589', 'CATRILO', 'CATRILO LA PAMPA', NULL, NULL, NULL, 1, '2018-08-22 01:53:03', '2018-08-22 01:53:03'),
(20, 'MARTIN NESTOR', '20083678322', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-08-24 01:20:17', '2018-08-24 01:20:17'),
(21, 'ROSTON JOSE LUIS', '20143415423', NULL, NULL, NULL, NULL, NULL, 1, '2018-08-24 21:49:20', '2018-08-24 21:49:20'),
(22, 'HUALDE HARALDO Y HUGO', '30710341431', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-08-27 22:24:34', '2018-08-27 22:24:34'),
(23, 'ROLDAN OSCAR A', '20132256900', 'URIBURU', 'URIBURU', NULL, NULL, NULL, 1, '2018-08-27 23:11:27', '2018-08-27 23:11:27'),
(24, 'COLOMBATTO FAVIO', '20177309444', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-08-28 21:40:45', '2018-08-28 21:40:45'),
(25, 'ANDRES SOUTO S.A', '30558655646', 'QUINTANA 135 PISO 1 OF 2', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-08-29 21:43:16', '2018-08-29 21:43:16'),
(26, 'seitz jorge', '23116917459', 'aligieri 1238', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-08-30 22:23:04', '2018-08-30 22:23:04'),
(27, 'secretaria de cultura', '30671686027', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-08-31 16:17:20', '2018-08-31 16:17:20'),
(28, 'sucecion RIO JUANA', '27098744164', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-08-31 17:17:22', '2018-08-31 17:17:22'),
(29, 'MARCELO OTIÑANO', '20139564759', 'MANSILLA 76', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-09-13 02:30:59', '2018-09-13 02:30:59'),
(30, 'ORGALES MERCEDES', '27039044663', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-09-18 14:10:18', '2018-09-18 14:10:18'),
(31, 'CONSORCIO GEMELLUS', '30628898231', 'AV SAN MARTIN Y URQUIZA', 'SANTA ROSA', NULL, NULL, NULL, 3, '2018-09-18 22:08:19', '2018-09-18 22:08:19'),
(32, 'GUSTAVO LOPEZ', '22490019', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 3, '2018-09-21 01:05:37', '2018-09-21 01:05:37'),
(33, 'gonzales nancy', '27179990666', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-09-24 18:11:51', '2018-09-24 18:11:51'),
(34, 'ZUAZO OMAR Y HECTOR', '30693572114', 'QUEHUE', 'QUEHUE LA PAMPA', NULL, NULL, NULL, 1, '2018-09-28 15:04:24', '2018-09-28 15:04:24'),
(35, 'adema maria', '16873018', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 3, '2018-10-10 01:32:23', '2018-10-10 01:32:23'),
(36, 'MASSERA CARLOS D', '20139564821', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-10-11 22:52:00', '2018-10-11 22:52:00'),
(37, 'LA AURELIA SRL', '30709832995', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-10-16 18:22:52', '2018-10-16 18:22:52'),
(38, 'PEREZ CRISTIAN', '20247435051', 'M PASCUAL 1063', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-10-25 16:49:09', '2018-10-25 16:49:09'),
(39, 'ANTON ELBA', '23037633534', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-10-26 14:56:40', '2018-10-26 14:56:40'),
(40, 'MONEO RAMIRO', '23239721869', 'CHINGOLO 881', 'TOAY', NULL, NULL, NULL, 1, '2018-11-07 18:35:16', '2018-11-07 18:35:16'),
(41, 'MUNICIPALIDAD DE URIBURU', '30999113571', 'URIBURU', 'URIBURU LA PAMPA', NULL, NULL, NULL, 4, '2018-11-30 17:06:43', '2018-11-30 17:06:43'),
(42, 'ROFRAN SRL', '30711979073', 'CIRC SUR 2078', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-12-04 17:54:48', '2018-12-04 17:54:48'),
(43, 'SCHEUBEL JUAN', '20184189969', 'OLIVER 365', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-12-04 18:05:47', '2018-12-04 18:05:47'),
(44, 'EL JABALI SA', '30629763704', 'QUINTANA 135 PISO 1 OF 2', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-12-07 15:56:37', '2018-12-07 15:56:37'),
(45, 'MAYER MARCELO', '20245179074', 'VICTORIA 274', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-12-10 14:32:44', '2018-12-10 14:32:44'),
(46, 'RIGLESA SRL', '30650623408', '1 DE MAYO 426', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-12-13 16:35:02', '2018-12-13 16:35:02'),
(47, 'ITALSOL AGROPECUARIA S.A', '30709331880', 'MITRE 97', 'ADELIA MARIA CBA', NULL, NULL, NULL, 1, '2018-12-19 01:09:12', '2018-12-19 01:09:12'),
(48, 'CAYRON HUGO', '20143417167', 'BUENOS AIRES 114', 'ATALIVA ROCA LP', NULL, NULL, NULL, 1, '2018-12-21 16:04:22', '2018-12-21 16:04:22'),
(49, 'KIN ANALIA', '27171716476', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-12-22 17:45:20', '2018-12-22 17:45:20'),
(50, 'DE LA IGLESIA ESTELA FABIANA', '23215042634', 'SALTA 335', 'SANTA ROSA', NULL, NULL, NULL, 1, '2018-12-28 15:01:24', '2018-12-28 15:01:24'),
(51, 'BOITARD CARLOS', '20102278926', 'AV SGO MARZO 1450', 'SANTA ROSA', NULL, NULL, NULL, 1, '2019-01-05 14:43:20', '2019-01-05 14:43:20'),
(52, 'VIAL A S.A.', '33555193489', 'SANTA ROSA', NULL, NULL, NULL, NULL, 1, '2019-01-16 02:20:39', '2019-01-16 22:20:00'),
(53, 'JOSE MIGUEL CAMACHO Y Cia  S.C.', '30656267890', 'SANTA ROSA', 'SANTA ROSA', NULL, NULL, NULL, 1, '2019-01-17 01:23:49', '2019-01-17 01:23:49'),
(54, 'GRACIA NESTOR JOSE', '23108369779', 'AV SAN MARTIN 567', 'SANTA ROSA', NULL, NULL, NULL, 1, '2019-01-22 02:33:35', '2019-01-22 02:33:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_compras`
--

CREATE TABLE `daniel_edgardo_medina_compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `proveedor_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `pagado` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_credito_a`
--

CREATE TABLE `daniel_edgardo_medina_credito_a` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_credito_a`
--

INSERT INTO `daniel_edgardo_medina_credito_a` (`id`, `fecha`, `total`, `cliente_id`, `cae`, `fecha_vencimiento`, `created_at`, `updated_at`, `tipo_doc`, `nro_doc`, `cliente`, `importe_neto`, `percepcion_no_categorizados`, `operaciones_exentas`, `impuestos_nacionales`, `ingresos_brutos`, `impuestos_municipales`, `impuestos_internos`, `codigo_moneda`, `tipo_cambio`, `cantidad_alicuotas`, `codigo_operacion`, `otros_tributos`) VALUES
(1, '2018-06-07', 3500.00, 7, '68239218401825', '2018-07-06', '2018-06-07 22:31:55', '2018-06-07 22:31:55', '80', '30616500593', 'SERVICIO MEDICO PREVISONAL', 2892.56, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(2, '2018-07-12', 7500.00, 11, '68289999886371', '2018-08-10', '2018-07-12 16:14:58', '2018-07-12 16:14:58', '80', '20239720936', 'MAFFEO DANIEL', 6198.35, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(3, '2019-01-16', 9100.00, 52, '69039649649695', '2019-02-14', '2019-01-16 22:21:46', '2019-01-16 22:21:46', '80', '33555193489', 'VIAL S.A.', 7520.66, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_credito_b`
--

CREATE TABLE `daniel_edgardo_medina_credito_b` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_credito_b`
--

INSERT INTO `daniel_edgardo_medina_credito_b` (`id`, `fecha`, `total`, `cliente_id`, `cae`, `fecha_vencimiento`, `created_at`, `updated_at`, `tipo_doc`, `nro_doc`, `cliente`, `importe_neto`, `percepcion_no_categorizados`, `operaciones_exentas`, `impuestos_nacionales`, `ingresos_brutos`, `impuestos_municipales`, `impuestos_internos`, `codigo_moneda`, `tipo_cambio`, `cantidad_alicuotas`, `codigo_operacion`, `otros_tributos`) VALUES
(1, '2018-07-30', 11682.00, 13, '68319438309032', '2018-08-28', '2018-07-30 20:45:58', '2018-07-30 20:45:58', '80', '33671658499', 'FUNDACION NUESTROS PIBES', 9654.55, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(2, '2018-08-09', 1200.00, 4, '68329690673531', '2018-09-07', '2018-08-09 16:23:04', '2018-08-09 16:23:04', '80', '33693450239', 'AFIP-DGI', 991.74, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(3, '2018-08-15', 900.00, 4, '68339824401178', '2018-09-13', '2018-08-15 21:43:52', '2018-08-15 21:43:52', '80', '33693450239', 'AFIP-DGI', 743.80, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_detalles`
--

CREATE TABLE `daniel_edgardo_medina_detalles` (
  `id` int(10) UNSIGNED NOT NULL,
  `venta_id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` double(8,2) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_detalles`
--

INSERT INTO `daniel_edgardo_medina_detalles` (`id`, `venta_id`, `descripcion`, `cantidad`, `precio`, `total`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 1, 'SERVICIO COMPLETO RANGER 3.2', 1.00, 5160.00, 5160.00, 'servicio', '2018-04-21 17:10:37', '2018-04-21 17:10:37'),
(2, 2, 'SERVICIO COMPLETO DODGE RAM ', 1.00, 4950.00, 4950.00, 'servicio', '2018-04-21 18:26:56', '2018-04-21 18:26:56'),
(3, 3, 'SERVICIO COMPLETO RANGER 3.0 KHD-952 (188.000)', 1.00, 4300.00, 4300.00, 'servicio', '2018-05-14 16:41:45', '2018-05-14 16:41:45'),
(4, 4, 'SERVICIO COMPLETO 90.000 KM RANGER 3.2 NUB-486', 1.00, 5800.00, 5800.00, 'servicio', '2018-05-16 18:14:18', '2018-05-16 18:14:18'),
(5, 5, 'SERVICIO COMPLETO TOYOTA HILUX 4X4', 1.00, 4300.00, 4300.00, 'servicio', '2018-05-18 14:15:27', '2018-05-18 14:15:27'),
(6, 5, 'SERVICIO COMPLETO TOYOTA HILUX 2.8 4X4,CABIAR CRUZETAS CARDAN Y RODAMIENTO CENTRAL CARDAN,REPARAR SISTEMA DE CALENTAMIENTO', 1.00, 10820.00, 10820.00, 'servicio', '2018-05-18 14:15:27', '2018-05-18 14:15:27'),
(7, 5, 'SERVICIIO COMLETO SILVERADO MAXION,CAMBIO MANGUERA ADMISION  Y BASE FILTRO GAS OIL', 1.00, 6380.00, 6380.00, 'servicio', '2018-05-18 14:15:27', '2018-05-18 14:15:27'),
(8, 6, 'SERVICIO COMPLETO MERCEDES BENZ SPRINTER 311', 1.00, 4200.00, 4200.00, 'servicio', '2018-05-21 14:12:47', '2018-05-21 14:12:47'),
(9, 7, 'CAMBIAR MAZA PORTAVENTILADOR Y LIQUIDO REFRIGERANTE IVECO 3.0 AMBULANCIA', 1.00, 11950.00, 11950.00, 'servicio', '2018-05-28 14:07:12', '2018-05-28 14:07:12'),
(10, 8, 'REVICION GENERADOR DE EMERGENCIA AGENCIA INT ALVEAR POR FALLAS EN SISTEMA DE ARRANQUE', 1.00, 9500.00, 9500.00, 'servicio', '2018-05-28 14:14:18', '2018-05-28 14:14:18'),
(11, 9, 'CAMBIAR KIT EMBRAGUE RENAUT MASTER 2.5 DCI', 1.00, 16500.00, 16500.00, 'servicio', '2018-05-29 17:57:58', '2018-05-29 17:57:58'),
(12, 10, 'CAMBIAR KIT CORREAS AUXILIARES IVECO 3.0 AMBULANCIA', 1.00, 3500.00, 3500.00, 'servicio', '2018-06-02 17:28:04', '2018-06-02 17:28:04'),
(13, 11, 'CAMBIAR KIT CORREAS AUXILIARES IVECO 3.0 AMBULANCIA', 1.00, 3500.00, 3500.00, 'servicio', '2018-06-07 22:31:55', '2018-06-07 22:31:55'),
(14, 12, 'SERVICIO COMPLETO TOYOTA HILUX 4X4', 1.00, 4500.00, 4500.00, 'servicio', '2018-07-12 04:32:00', '2018-07-12 04:32:00'),
(15, 13, 'SERVICIO COMPLETO VW AMAROK 2.0 4X4', 1.00, 7500.00, 7500.00, 'servicio', '2018-07-12 04:37:01', '2018-07-12 04:37:01'),
(16, 14, 'CAMBIAR KIT CORREAS AUXILIARES IVECO 3.0 AMBULANCIA', 1.00, 3500.00, 3500.00, 'servicio', '2018-07-12 04:47:33', '2018-07-12 04:47:33'),
(17, 15, 'SERVICIO COMPLETO VW AMAROK 2.0 4X4', 1.00, 7500.00, 7500.00, 'servicio', '2018-07-12 16:14:58', '2018-07-12 16:14:58'),
(18, 16, 'SERVICIO COMPLETO VW AMAROK 2.0 4X4', 1.00, 7500.00, 7500.00, 'servicio', '2018-07-12 16:16:36', '2018-07-12 16:16:36'),
(19, 17, 'FAROS H4', 1.00, 82.64, 82.64, 'servicio', '2018-07-26 02:08:07', '2018-07-26 02:08:07'),
(20, 18, 'SERVICIO COMPLETO CAMBIAR TENSOR CORREA POLY V, BIELETAS DE SUSPENCION DE RANGER 3.0 TDI 4X4 DOMINIO HOO-953', 1.00, 11682.00, 11682.00, 'servicio', '2018-07-26 03:01:03', '2018-07-26 03:01:03'),
(21, 19, 'SERVICIO COMPLETO CAMBIAR TENSOR CORREA POLY V, BIELETAS DE SUSPENCION DE RANGER 3.0 TDI 4X4 DOMINIO HOO-953', 1.00, 11682.00, 11682.00, 'producto', '2018-07-30 20:45:58', '2018-07-30 20:45:58'),
(22, 20, 'SERVICIO COMPLETO TOYOTA HILUX 2.5', 1.00, 6000.00, 6000.00, 'servicio', '2018-07-31 01:31:10', '2018-07-31 01:31:10'),
(23, 21, 'CAMBIAR TUBO ENTRADA INTERCOOLER FOCUS DIESEL', 1.00, 12300.00, 12300.00, 'servicio', '2018-08-06 16:05:29', '2018-08-06 16:05:29'),
(24, 22, 'CAMBIAR RETEN PALIER F100', 1.00, 1900.00, 1900.00, 'servicio', '2018-08-06 16:15:54', '2018-08-06 16:15:54'),
(25, 23, 'CAMBIAR KIT EMBRAGUE S.10 MWM 4X4 , RODAMIENTO PILOTO Y RETEN CAJA', 1.00, 19500.00, 19500.00, 'servicio', '2018-08-08 14:23:57', '2018-08-08 14:23:57'),
(26, 24, 'reparar tuberia lavaparabrisas ranger 3.0 khd-952', 1.00, 1200.00, 1200.00, 'servicio', '2018-08-09 16:19:51', '2018-08-09 16:19:51'),
(27, 25, 'reparar tuberia lavaparabrisas', 1.00, 1200.00, 1200.00, 'servicio', '2018-08-09 16:23:04', '2018-08-09 16:23:04'),
(28, 26, 'reparar tuberia lavaparabrisas', 1.00, 900.00, 900.00, 'servicio', '2018-08-09 16:24:22', '2018-08-09 16:24:22'),
(29, 27, 'SERVICIO COMPLETO VW AMAROK', 1.00, 7300.00, 7300.00, 'servicio', '2018-08-09 17:54:11', '2018-08-09 17:54:11'),
(30, 28, 'reparar cubierta ford ranger nub-486', 1.00, 600.00, 600.00, 'servicio', '2018-08-10 16:30:02', '2018-08-10 16:30:02'),
(31, 29, 'reparar tuberia lavaparabrisas', 1.00, 900.00, 900.00, 'servicio', '2018-08-15 21:43:52', '2018-08-15 21:43:52'),
(32, 30, 'reparar tuberia lavaparabrisas y cambiar rodamiento polea tensora de correa multicanal ranger 3.0 khd 952', 1.00, 2700.00, 2700.00, 'servicio', '2018-08-15 21:47:19', '2018-08-15 21:47:19'),
(33, 31, 'servicio completo vw amarok 2.0 4x4 tdi', 1.00, 8900.00, 8900.00, 'servicio', '2018-08-15 21:54:42', '2018-08-15 21:54:42'),
(34, 31, '', 1.00, 0.00, 0.00, 'servicio', '2018-08-15 21:54:42', '2018-08-15 21:54:42'),
(35, 32, 'SERVICIOS COMPLETOS S.10 Y F100 DUTY', 1.00, 12300.00, 12300.00, 'servicio', '2018-08-18 15:51:17', '2018-08-18 15:51:17'),
(36, 33, 'SERVICIO COMPLETO TOYOTA HILUX 2.4,AGREGAR ACEITE DIFERENCIAL Y REVISAR PASTILLAS DE FRENO', 1.00, 7650.00, 7650.00, 'servicio', '2018-08-22 01:53:03', '2018-08-22 01:53:03'),
(37, 34, 'CONTROLAR EQUIPO VIGIA DEUTZ 120', 1.00, 2000.00, 2000.00, 'servicio', '2018-08-24 01:20:17', '2018-08-24 01:20:17'),
(38, 35, 'CAMBIAR INYECTOR S.10 MWM', 1.00, 13000.00, 13000.00, 'servicio', '2018-08-24 21:49:20', '2018-08-24 21:49:20'),
(39, 36, 'SERVICIO COMPLETO Y CAMBIAR PASTILLAS DE FRENO TOYOTA HILUX 2.5', 1.00, 6950.00, 6950.00, 'servicio', '2018-08-27 22:24:34', '2018-08-27 22:24:34'),
(40, 37, 'SERVICIO COMPLETO HILUX 2.5', 1.00, 5400.00, 5400.00, 'servicio', '2018-08-27 23:11:27', '2018-08-27 23:11:27'),
(41, 38, 'SERVICIO COMPLETO VW AMAROK 2.0 TDI', 1.00, 6950.00, 6950.00, 'servicio', '2018-08-28 21:40:45', '2018-08-28 21:40:45'),
(42, 39, 'REPARACION COMPLETA CAJA DE VELOCIDADES DE TOYOTA HILUX 4X4', 1.00, 18700.00, 18700.00, 'servicio', '2018-08-29 21:43:16', '2018-08-29 21:43:16'),
(43, 40, 'servicio completo ranger 3.0', 1.00, 3000.00, 3000.00, 'servicio', '2018-08-30 22:23:04', '2018-08-30 22:23:04'),
(44, 41, 'servicio completo y quitar perdidas aceite motor de mercedes benz sprinter 310', 1.00, 9650.00, 9650.00, 'servicio', '2018-08-31 16:17:20', '2018-08-31 16:17:20'),
(45, 42, 'SERVICIO COMPLETO F1000', 1.00, 4194.00, 4194.00, 'servicio', '2018-08-31 17:17:22', '2018-08-31 17:17:22'),
(46, 43, 'cambiar bomba de direccion asistida vw amarok 2.0', 1.00, 17800.00, 17800.00, 'servicio', '2018-09-01 18:24:59', '2018-09-01 18:24:59'),
(47, 44, 'SERVICIO COMPLETO TOYOTA HILUX 4X4 2016', 1.00, 9350.00, 9350.00, 'servicio', '2018-09-06 18:39:40', '2018-09-06 18:39:40'),
(48, 45, 'SERVICIO COMPLETO VW BORA 1.9 TDI', 1.00, 7800.00, 7800.00, 'servicio', '2018-09-13 02:31:00', '2018-09-13 02:31:00'),
(49, 46, 'REPARAR SISTEMA COMBUSTIBLE F100', 1.00, 3600.00, 3600.00, 'servicio', '2018-09-18 14:10:18', '2018-09-18 14:10:18'),
(50, 47, 'CAMBIAR FILTROS DE COMBUSTIBLE GENERADOR DE EMERGENCIA', 1.00, 5500.00, 5500.00, 'servicio', '2018-09-18 22:08:19', '2018-09-18 22:08:19'),
(51, 48, 'SERVICIO COMPLETO HILUX SW4', 1.00, 6500.00, 6500.00, 'servicio', '2018-09-21 01:05:37', '2018-09-21 01:05:37'),
(52, 49, 'servicio completo y cambiar ventilador hilux 4x4', 1.00, 9650.00, 9650.00, 'servicio', '2018-09-21 01:59:34', '2018-09-21 01:59:34'),
(53, 50, 'servicio completo boxer 2.3', 1.00, 6600.00, 6600.00, 'servicio', '2018-09-24 18:11:51', '2018-09-24 18:11:51'),
(54, 51, 'SERVICIO COMPLETO Y CAMBIO KIT DISTRIBUCION S.10 2.8', 1.00, 26500.00, 26500.00, 'servicio', '2018-09-28 15:04:24', '2018-09-28 15:04:24'),
(55, 52, 'servicio completo vw amarok', 1.00, 9500.00, 9500.00, 'servicio', '2018-10-02 18:18:18', '2018-10-02 18:18:18'),
(56, 53, 'servicio completo vw vento', 1.00, 2500.00, 2500.00, 'servicio', '2018-10-10 01:32:23', '2018-10-10 01:32:23'),
(57, 54, 'SERVICIO COMPLETO S.10 MWM 4X4', 1.00, 9800.00, 9800.00, 'servicio', '2018-10-11 22:52:00', '2018-10-11 22:52:00'),
(58, 55, 'SERVICIO COMPLETO VW AMAROK 2.0 4X4', 1.00, 8800.00, 8800.00, 'servicio', '2018-10-16 18:22:52', '2018-10-16 18:22:52'),
(59, 56, 'cambiar tensor y correa multicanal s.10 2.8 4x4', 1.00, 9200.00, 9200.00, 'servicio', '2018-10-23 01:40:25', '2018-10-23 01:40:25'),
(60, 57, 'SERVICIO COMPLETO,CAMBIAR TENSORES Y KIT DISTRIBUCION TRAFIC 1.9 D ', 1.00, 16400.00, 16400.00, 'servicio', '2018-10-25 16:49:09', '2018-10-25 16:49:09'),
(61, 58, '', 1.00, 0.00, 0.00, 'servicio', '2018-10-26 14:56:40', '2018-10-26 14:56:40'),
(62, 58, 'SERVICIO COMPLETO Y CAMBIAR KIT DISTRIBUCION S.10 MWM 2.8', 1.00, 32600.00, 32600.00, 'servicio', '2018-10-26 14:56:40', '2018-10-26 14:56:40'),
(63, 59, 'SERVICIO COMPLETO HILUX 2.8 ', 1.00, 8500.00, 8500.00, 'servicio', '2018-11-07 18:35:16', '2018-11-07 18:35:16'),
(64, 60, 'SERVICIO COMPLETO TOYOTA HILUX 4X4 LIMPIEZA DE RADIADORES', 1.00, 8500.00, 8500.00, 'servicio', '2018-11-07 21:46:48', '2018-11-07 21:46:48'),
(65, 61, 'SERVICIO COMPLETO Y CAMBIAR EMBRAGUE TOYOTA 2.5 4X4', 1.00, 39200.00, 39200.00, 'servicio', '2018-11-12 18:14:38', '2018-11-12 18:14:38'),
(66, 62, 'SERVICIO COMPLETO VW AMAROK', 1.00, 9500.00, 9500.00, 'servicio', '2018-11-15 17:46:20', '2018-11-15 17:46:20'),
(67, 63, 'SERVICIO COMPLETO TOYOTA HILUX 2016 4X4 Y CAMBIO DE CORREA POLY-V', 1.00, 13200.00, 13200.00, 'servicio', '2018-11-22 14:08:40', '2018-11-22 14:08:40'),
(68, 64, 'cambiar bateria toyota 2.8', 1.00, 4500.00, 4500.00, 'servicio', '2018-11-29 17:49:40', '2018-11-29 17:49:40'),
(69, 65, 'SERVICIO COMPLETO S.10 2.8 4X2', 1.00, 7200.00, 7200.00, 'servicio', '2018-11-30 17:06:43', '2018-11-30 17:06:43'),
(70, 66, 'servicio completo fiat ducato 2.3', 1.00, 7500.00, 7500.00, 'servicio', '2018-12-03 17:35:13', '2018-12-03 17:35:13'),
(71, 67, 'CAMBIAR JUNTA TAPA DE CILINDROS TOYOTA 2.4', 1.00, 28143.00, 28143.00, 'servicio', '2018-12-04 17:54:48', '2018-12-04 17:54:48'),
(72, 68, 'SERVICIO COMPLETO S.10 2.8', 1.00, 7500.00, 7500.00, 'servicio', '2018-12-04 18:05:47', '2018-12-04 18:05:47'),
(73, 69, 'CAMBIAR EMBRAGUE HILUX 2.8', 1.00, 9680.00, 9680.00, 'servicio', '2018-12-07 15:56:37', '2018-12-07 15:56:37'),
(74, 70, 'SACAR Y COLOCAR ALTERNADOR CAPTIVA DIESEL', 1.00, 4500.00, 4500.00, 'servicio', '2018-12-10 14:32:44', '2018-12-10 14:32:44'),
(75, 71, 'LIMPIEZA Y CALIBRADO DE SISTEMA ALTA PRESION DE COMBUSTIBLE SPRINTE 313', 1.00, 4850.00, 4850.00, 'servicio', '2018-12-11 00:44:56', '2018-12-11 00:44:56'),
(76, 72, 'CAMBIAR INYECTORES FOCUS 1.8 TDCI', 1.00, 4500.00, 4500.00, 'servicio', '2018-12-12 00:34:09', '2018-12-12 00:34:09'),
(77, 73, 'SERVICIO COMPLETO MASTER 2.3 TDI', 1.00, 9700.00, 9700.00, 'servicio', '2018-12-13 16:35:02', '2018-12-13 16:35:02'),
(78, 74, 'SERVICIO COMPLETO VW AMAROK 2.0 TD', 1.00, 10200.00, 10200.00, 'servicio', '2018-12-17 17:35:21', '2018-12-17 17:35:21'),
(79, 75, 'SERVICIO AMAROK', 1.00, 968.00, 968.00, 'servicio', '2018-12-19 01:09:12', '2018-12-19 01:09:12'),
(80, 76, 'SERVICIO MEGANE', 1.00, 7000.00, 7000.00, 'servicio', '2018-12-20 22:15:55', '2018-12-20 22:15:55'),
(81, 77, 'SERVICIO COMPLETO CITROEN BERLINGO 1.6 N ', 1.00, 5500.00, 5500.00, 'servicio', '2018-12-21 00:14:05', '2018-12-21 00:14:05'),
(82, 78, 'SERVICIO COMPLETO S.10', 1.00, 13310.00, 13310.00, 'servicio', '2018-12-21 16:04:22', '2018-12-21 16:04:22'),
(83, 79, 'SERVICIO RANGER', 1.00, 2360.00, 2360.00, 'servicio', '2018-12-22 17:45:20', '2018-12-22 17:45:20'),
(84, 80, 'SERVICIO COMPLETO Y CAMBIO POLEA ALTERNADOR AMAROK 2.0', 1.00, 17500.00, 17500.00, 'servicio', '2018-12-26 17:51:39', '2018-12-26 17:51:39'),
(85, 81, 'CAMBIAR VOLANTE MOTOR S.10 MWM', 1.00, 24670.00, 24670.00, 'servicio', '2018-12-28 15:01:25', '2018-12-28 15:01:25'),
(86, 82, 'COLOCAR EQUIPO VIGIA TOYOTA 3.0', 1.00, 13700.00, 13700.00, 'servicio', '2019-01-05 14:43:20', '2019-01-05 14:43:20'),
(87, 83, 'SERVICIO DE RUTINA, CAMBIO DE RODAMIENTO VENTILADOR Y CORREA', 1.00, 9100.00, 9100.00, 'producto', '2019-01-16 02:20:39', '2019-01-16 02:20:39'),
(88, 84, 'SERVICIO DE RUTINA Y CAMBIO RODAMIENTO Y CORREA VENTILADOR', 1.00, 9100.00, 9100.00, 'producto', '2019-01-16 02:25:26', '2019-01-16 02:25:26'),
(89, 85, 'SERVICIO DE RUTINA, CAMBIO DE RODAMIENTO VENTILADOR Y CORREA', 1.00, 9100.00, 9100.00, 'producto', '2019-01-16 22:21:47', '2019-01-16 22:21:47'),
(90, 86, 'CAMBIO DE CORREA DISTRIBUCION AMAROK', 1.00, 0.00, 0.00, 'producto', '2019-01-17 01:23:49', '2019-01-17 01:23:49'),
(91, 87, 'servicio amarok', 1.00, 4600.00, 4600.00, 'servicio', '2019-01-17 18:08:32', '2019-01-17 18:08:32'),
(92, 88, 'COLOCAR EQUIPO VIGIA TOYOTA', 1.00, 13300.00, 13300.00, 'descripcion', '2019-01-22 02:33:35', '2019-01-22 02:33:35'),
(93, 89, 'SERVICIO DE RUTINA FORD RANGER 3.2 NUB-486', 1.00, 8700.00, 8700.00, 'descripcion', '2019-01-22 15:16:29', '2019-01-22 15:16:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_detalle_compras`
--

CREATE TABLE `daniel_edgardo_medina_detalle_compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `compra_id` int(10) UNSIGNED NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `cantidad` double(8,2) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_factura_a`
--

CREATE TABLE `daniel_edgardo_medina_factura_a` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forma_pago` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_factura_a`
--

INSERT INTO `daniel_edgardo_medina_factura_a` (`id`, `fecha`, `total`, `cliente_id`, `cae`, `fecha_vencimiento`, `estado`, `forma_pago`, `created_at`, `updated_at`, `tipo_doc`, `nro_doc`, `cliente`, `importe_neto`, `percepcion_no_categorizados`, `operaciones_exentas`, `impuestos_nacionales`, `ingresos_brutos`, `impuestos_municipales`, `impuestos_internos`, `codigo_moneda`, `tipo_cambio`, `cantidad_alicuotas`, `codigo_operacion`, `otros_tributos`) VALUES
(1, '2018-04-21', 5160.00, 2, '68169091349472', '2018-05-20', 'pago', '', '2018-04-21 17:10:37', '2018-04-21 17:10:37', '80', '20073628971', 'SZELIGA HECTOR', 4264.46, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(2, '2018-04-21', 4950.00, 3, '68169092615853', '2018-05-20', 'pago', '', '2018-04-21 18:26:56', '2018-04-21 18:26:56', '80', '30500017704', 'LA SEGUNDA  C LSG', 4090.91, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(3, '2018-05-18', 21500.00, 5, '68209705175801', '2018-06-16', 'pago', '', '2018-05-18 14:15:27', '2018-05-18 14:15:27', '80', '30709664820', 'EL CHARABON SRL', 17768.60, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(4, '2018-05-21', 4200.00, 6, '68219759004100', '2018-06-19', 'pago', '', '2018-05-21 14:12:47', '2018-05-21 14:12:47', '80', '20073689571', 'FERNANDEZ JOSE A', 3471.07, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(5, '2018-05-28', 9500.00, 8, '68229919547473', '2018-06-26', 'pago', '', '2018-05-28 14:14:18', '2018-05-28 14:14:18', '80', '30500012516', 'BANCO DE LA PAMPA S.E.M', 7851.24, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(6, '2018-05-29', 16500.00, 9, '68229970960921', '2018-06-27', 'pago', '', '2018-05-29 17:57:58', '2018-05-29 17:57:58', '80', '30693577612', 'SEMILLERIA LOS AMIGOS', 13636.36, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(7, '2018-06-02', 3500.00, 7, '68229097244675', '2018-07-01', 'pago', '', '2018-06-02 17:28:04', '2018-06-02 17:28:04', '80', '30616500593', 'SERVICIO MEDICO PREVISONAL', 2892.56, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(8, '2018-06-16', 4500.00, 10, '68249404578500', '2018-06-26', 'pago', 'contado', '2018-07-12 04:32:00', '2018-07-12 04:32:00', '80', '20224902779', 'LUCIANO MARQUES', 3719.01, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(9, '2018-06-27', 7500.00, 11, '68269657731060', '2018-07-07', 'pago', 'contado', '2018-07-12 04:37:01', '2018-07-12 04:37:01', '80', '20239720936', 'MAFFEO DANIEL', 6198.35, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(10, '2018-07-12', 7500.00, 11, '68289999939059', '2018-08-10', 'pago', 'contado', '2018-07-12 16:16:36', '2018-07-12 16:16:36', '80', '20239720936', 'MAFFEO DANIEL', 6198.35, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(11, '2018-07-06', 6000.00, 1, '68279909775827', '2018-07-16', 'pago', 'contado', '2018-07-31 01:31:09', '2018-07-31 01:31:09', '99', '', 'GRISELDA WEIGUN', 4958.68, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(12, '2018-08-06', 1900.00, 15, '68329607803329', '2018-09-04', 'pago', 'contado', '2018-08-06 16:15:54', '2018-08-06 16:15:54', '80', '20167090169', 'MANCINELLI HECTOR JULIO', 1570.25, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(13, '2018-08-08', 19500.00, 16, '68329658661513', '2018-09-06', 'pago', 'contado', '2018-08-08 14:23:57', '2018-08-08 14:23:57', '80', '27362569481', 'ANTONELLA CANALIS', 16115.70, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(14, '2018-08-09', 7300.00, 17, '68329695321567', '2018-09-07', 'pago', 'contado', '2018-08-09 17:54:11', '2018-08-09 17:54:11', '80', '27109196504', 'ALVAREZ GRACIELA', 6033.06, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(15, '2018-08-15', 8900.00, 11, '68339824896039', '2018-09-13', 'pago', 'contado', '2018-08-15 21:54:41', '2018-08-15 21:54:41', '80', '20239720936', 'MAFFEO DANIEL', 7355.37, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(16, '2018-08-18', 12300.00, 18, '68339894171403', '2018-09-16', 'pago', 'contado', '2018-08-18 15:51:17', '2018-08-18 15:51:17', '80', '23126990979', 'FERNANDEZ ROBERTO', 10165.29, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(17, '2018-08-21', 7650.00, 19, '68349955690192', '2018-09-19', 'pago', 'contado', '2018-08-22 01:53:03', '2018-08-22 01:53:03', '80', '30581320589', 'GENTE DE LA PAMPA S.A', 6322.31, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(18, '2018-08-23', 2000.00, 20, '68349027448891', '2018-09-21', 'pago', 'contado', '2018-08-24 01:20:17', '2018-08-24 01:20:17', '80', '20083678322', 'MARTIN NESTOR', 1652.89, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(19, '2018-08-24', 13000.00, 21, '68349052749034', '2018-09-22', 'pago', 'contado', '2018-08-24 21:49:20', '2018-08-24 21:49:20', '80', '20143415423', 'ROSTON JOSE LUIS', 10743.80, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(20, '2018-08-27', 6950.00, 22, '68359108524498', '2018-09-25', 'pago', 'contado', '2018-08-27 22:24:34', '2018-08-27 22:24:34', '80', '30710341431', 'HUALDE HARALDO Y HUGO', 5743.80, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(21, '2018-08-27', 5400.00, 23, '68359110961183', '2018-09-25', 'pago', 'contado', '2018-08-27 23:11:27', '2018-08-27 23:11:27', '80', '20132256900', 'ROLDAN OSCAR A', 4462.81, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(22, '2018-08-28', 6950.00, 24, '68359136723287', '2018-09-26', 'pago', 'contado', '2018-08-28 21:40:45', '2018-08-28 21:40:45', '80', '20177309444', 'COLOMBATTO FAVIO', 5743.80, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(23, '2018-08-29', 18700.00, 25, '68359166116832', '2018-09-27', 'pago', 'contado', '2018-08-29 21:43:16', '2018-08-29 21:43:16', '80', '30558655646', 'ANDRES SOUTO S.A', 15454.55, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(24, '2018-08-30', 3000.00, 26, '68359192282141', '2018-09-28', 'pago', 'contado', '2018-08-30 22:23:04', '2018-08-30 22:23:04', '80', '23116917459', 'seitz jorge', 2479.34, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(25, '2018-08-31', 9650.00, 27, '68359208419361', '2018-09-29', 'pago', 'contado', '2018-08-31 16:17:20', '2018-08-31 16:17:20', '80', '30671686027', 'secretaria de cultura', 7975.21, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(26, '2018-08-31', 4194.00, 28, '68359212126822', '2018-09-29', 'pago', 'contado', '2018-08-31 17:17:22', '2018-08-31 17:17:22', '80', '27098744164', 'sucecion RIO JUANA', 3466.12, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(27, '2018-09-01', 17800.00, 11, '68359248328170', '2018-09-30', 'pago', 'contado', '2018-09-01 18:24:59', '2018-09-01 18:24:59', '80', '20239720936', 'MAFFEO DANIEL', 14710.74, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(28, '2018-09-06', 9350.00, 25, '68369378261617', '2018-10-05', 'pago', 'contado', '2018-09-06 18:39:40', '2018-09-06 18:39:40', '80', '30558655646', 'ANDRES SOUTO S.A', 7727.27, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(29, '2018-09-12', 7800.00, 29, '68379507597600', '2018-10-11', 'pago', 'contado', '2018-09-13 02:30:59', '2018-09-13 02:30:59', '80', '20139564759', 'MARCELO OTIÑANO', 6446.28, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(30, '2018-09-18', 3600.00, 30, '68389613942517', '2018-10-17', 'pago', 'contado', '2018-09-18 14:10:18', '2018-09-18 14:10:18', '80', '27039044663', 'ORGALES MERCEDES', 2975.21, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(31, '2018-09-20', 9650.00, 10, '68389707725220', '2018-10-19', 'pago', 'contado', '2018-09-21 01:59:34', '2018-09-21 01:59:34', '80', '20224902779', 'marques luciano', 7975.21, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(32, '2018-09-24', 6600.00, 33, '68399772139663', '2018-10-23', 'pago', 'contado', '2018-09-24 18:11:51', '2018-09-24 18:11:51', '80', '27179990666', 'gonzales nancy', 5454.55, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(33, '2018-09-28', 26500.00, 34, '68399895715625', '2018-10-27', 'pago', 'contado', '2018-09-28 15:04:24', '2018-09-28 15:04:24', '80', '30693572114', 'ZUAZO OMAR Y HECTOR', 21900.83, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(34, '2018-10-02', 9500.00, 11, '68409009197529', '2018-10-31', 'pago', 'contado', '2018-10-02 18:18:18', '2018-10-02 18:18:18', '80', '20239720936', 'MAFFEO DANIEL', 7851.24, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(35, '2018-10-11', 9800.00, 36, '68419230884639', '2018-11-09', 'pago', 'contado', '2018-10-11 22:52:00', '2018-10-11 22:52:00', '80', '20139564821', 'MASSERA CARLOS D', 8099.17, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(36, '2018-10-16', 8800.00, 37, '68429316028844', '2018-11-14', 'pago', 'contado', '2018-10-16 18:22:52', '2018-10-16 18:22:52', '80', '30709832995', 'LA AURELIA SRL', 7272.73, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(37, '2018-10-22', 9200.00, 34, '68439476755320', '2018-11-20', 'pago', 'contado', '2018-10-23 01:40:25', '2018-10-23 01:40:25', '80', '30693572114', 'ZUAZO OMAR Y HECTOR', 7603.31, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(38, '2018-10-25', 16400.00, 38, '68439560419044', '2018-11-23', 'pago', 'contado', '2018-10-25 16:49:09', '2018-10-25 16:49:09', '80', '20247435051', 'PEREZ CRISTIAN', 13553.72, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(39, '2018-10-26', 32600.00, 39, '68439589576142', '2018-11-24', 'pago', 'contado', '2018-10-26 14:56:40', '2018-10-26 14:56:40', '80', '23037633534', 'ANTON ELBA', 26942.15, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(40, '2018-11-07', 8500.00, 40, '68459915580605', '2018-12-06', 'pago', 'contado', '2018-11-07 18:35:16', '2018-11-07 18:35:16', '80', '23239721869', 'MONEO RAMIRO', 7024.79, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(41, '2018-11-07', 8500.00, 25, '68459923671608', '2018-12-06', 'pago', 'contado', '2018-11-07 21:46:48', '2018-11-07 21:46:48', '80', '30558655646', 'ANDRES SOUTO S.A', 7024.79, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(42, '2018-11-12', 39200.00, 5, '68469012148898', '2018-12-11', 'pago', 'contado', '2018-11-12 18:14:37', '2018-11-12 18:14:37', '80', '30709664820', 'EL CHARABON SRL', 32396.69, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(43, '2018-11-15', 9500.00, 11, '68469097556907', '2018-12-14', 'pago', 'contado', '2018-11-15 17:46:20', '2018-11-15 17:46:20', '80', '20239720936', 'MAFFEO DANIEL', 7851.24, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(44, '2018-11-22', 13200.00, 25, '68479263501925', '2018-12-21', 'pago', 'contado', '2018-11-22 14:08:40', '2018-11-22 14:08:40', '80', '30558655646', 'ANDRES SOUTO S.A', 10909.09, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(45, '2018-11-29', 4500.00, 40, '68489466572382', '2018-12-28', 'pago', 'contado', '2018-11-29 17:49:39', '2018-11-29 17:49:39', '80', '23239721869', 'MONEO RAMIRO', 3719.01, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(46, '2018-12-03', 7500.00, 33, '68499549957185', '2019-01-01', 'pago', 'contado', '2018-12-03 17:35:13', '2018-12-03 17:35:13', '80', '27179990666', 'gonzales nancy', 6198.35, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(47, '2018-12-04', 28143.00, 42, '68499592827734', '2019-01-02', 'pago', 'contado', '2018-12-04 17:54:48', '2018-12-04 17:54:48', '80', '30711979073', 'ROFRAN SRL', 23258.68, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(48, '2018-12-04', 7500.00, 43, '68499593450328', '2019-01-02', 'pago', 'contado', '2018-12-04 18:05:47', '2018-12-04 18:05:47', '80', '20184189969', 'SCHEUBEL JUAN', 6198.35, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(49, '2018-12-07', 9680.00, 44, '68499696677330', '2019-01-05', 'pago', 'contado', '2018-12-07 15:56:37', '2018-12-07 15:56:37', '80', '30629763704', 'EL JABALI SA', 8000.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(50, '2018-12-10', 4500.00, 45, '68509739434749', '2019-01-08', 'pago', 'contado', '2018-12-10 14:32:44', '2018-12-10 14:32:44', '80', '20245179074', 'MAYER MARCELO', 3719.01, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(51, '2018-12-10', 4850.00, 6, '68509764456006', '2019-01-08', 'pago', 'contado', '2018-12-11 00:44:55', '2018-12-11 00:44:55', '80', '20073689571', 'FERNANDEZ JOSE A', 4008.26, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(52, '2018-12-13', 9700.00, 46, '68509829085445', '2019-01-11', 'pago', 'contado', '2018-12-13 16:35:02', '2018-12-13 16:35:02', '80', '30650623408', 'RIGLESA SRL', 8016.53, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(53, '2018-12-17', 10200.00, 11, '68519916554151', '2019-01-15', 'pago', 'contado', '2018-12-17 17:35:21', '2018-12-17 17:35:21', '80', '20239720936', 'MAFFEO DANIEL', 8429.75, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(54, '2018-12-18', 968.00, 47, '68519958972773', '2019-01-16', 'pago', 'contado', '2018-12-19 01:09:12', '2018-12-19 01:09:12', '80', '30709331880', 'ITALSOL AGROPECUARIA S.A', 800.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(55, '2018-12-20', 7000.00, 24, '68519037468538', '2019-01-18', 'pago', 'contado', '2018-12-20 22:15:55', '2018-12-20 22:15:55', '80', '20177309444', 'COLOMBATTO FAVIO', 5785.12, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(56, '2018-12-21', 13310.00, 48, '68519057535627', '2019-01-19', 'pago', 'contado', '2018-12-21 16:04:22', '2018-12-21 16:04:22', '80', '20143417167', 'CAYRON HUGO', 11000.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(57, '2018-12-22', 2360.00, 49, '68519099931327', '2019-01-20', 'pago', 'contado', '2018-12-22 17:45:20', '2018-12-22 17:45:20', '80', '27171716476', 'KIN ANALIA', 1950.41, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(58, '2018-12-26', 17500.00, 17, '68529149610842', '2019-01-24', 'pago', 'contado', '2018-12-26 17:51:38', '2018-12-26 17:51:38', '80', '27109196504', 'ALVAREZ GRACIELA', 14462.81, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(59, '2018-12-28', 24670.00, 50, '68529220356381', '2019-01-26', 'pago', 'contado', '2018-12-28 15:01:24', '2018-12-28 15:01:24', '80', '23215042634', 'DE LA IGLESIA ESTELA FABIANA', 20388.43, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(60, '2019-01-05', 13700.00, 51, '69019401146239', '2019-02-03', 'pago', 'contado', '2019-01-05 14:43:20', '2019-01-05 14:43:20', '80', '20102278926', 'BOITARD CARLOS', 11322.31, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(61, '2019-01-15', 9100.00, 52, '69039624568680', '2019-02-13', 'pago', 'contado', '2019-01-16 02:20:39', '2019-01-16 02:20:39', '80', '33555193489', 'VIAL S.A.', 7520.66, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(62, '2019-01-15', 9100.00, 52, '69039624613802', '2019-02-13', 'pago', 'contado', '2019-01-16 02:25:26', '2019-01-16 02:25:26', '80', '33555193489', 'VIAL A S.A.', 7520.66, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(63, '2019-01-16', 16520.00, 53, '69039658714207', '2019-02-14', 'pago', 'contado', '2019-01-17 01:23:49', '2019-01-17 01:23:49', '80', '30656267890', 'JOSE MIGUEL CAMACHO Y Cia  S.C.', 13652.89, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(64, '2019-01-17', 4600.00, 11, '69039668775183', '2019-02-15', 'pago', 'contado', '2019-01-17 18:08:32', '2019-01-17 18:08:32', '80', '20239720936', 'MAFFEO DANIEL', 3801.65, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(65, '2019-01-21', 13300.00, 54, '69039764355294', '2019-02-19', 'pago', 'contado', '2019-01-22 02:33:35', '2019-01-22 02:33:35', '80', '23108369779', 'GRACIA NESTOR JOSE', 12036.20, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_factura_b`
--

CREATE TABLE `daniel_edgardo_medina_factura_b` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forma_pago` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_factura_b`
--

INSERT INTO `daniel_edgardo_medina_factura_b` (`id`, `fecha`, `total`, `cliente_id`, `cae`, `fecha_vencimiento`, `estado`, `forma_pago`, `created_at`, `updated_at`, `tipo_doc`, `nro_doc`, `cliente`, `importe_neto`, `percepcion_no_categorizados`, `operaciones_exentas`, `impuestos_nacionales`, `ingresos_brutos`, `impuestos_municipales`, `impuestos_internos`, `codigo_moneda`, `tipo_cambio`, `cantidad_alicuotas`, `codigo_operacion`, `otros_tributos`) VALUES
(1, '2018-05-14', 4300.00, 4, '68209591731693', '2018-06-12', 'pago', '', '2018-05-14 16:41:45', '2018-05-14 16:41:45', '80', '33693450239', 'AFIP-DGI', 3553.72, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(2, '2018-05-16', 5800.00, 4, '68209665701752', '2018-06-14', 'pago', '', '2018-05-16 18:14:18', '2018-05-16 18:14:18', '80', '33693450239', 'AFIP-DGI', 4793.39, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(3, '2018-05-28', 11950.00, 7, '68229919440408', '2018-06-26', 'pago', '', '2018-05-28 14:07:12', '2018-05-28 14:07:12', '80', '30616500593', 'SERVICIO MEDICO PREVISONAL', 9876.03, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(4, '2018-06-07', 3500.00, 7, '68239218519548', '2018-06-17', 'pago', 'contado', '2018-07-12 04:56:51', '2018-07-12 04:56:51', '80', '30616500593', 'SERVICIO MEDICO PREVISONAL', 3500.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(5, '2018-07-10', 82.64, 1, '68149662090777', '2018-07-20', 'pago', 'contado', '2018-07-26 02:08:07', '2018-07-26 02:08:07', '99', '', 'Nerina Roldan', 82.67, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(6, '2018-07-25', 11682.00, 13, '68309344458320', '2018-08-23', 'pago', 'contado', '2018-07-26 03:01:03', '2018-07-26 03:01:03', '80', '33671658499', 'FUNDACION NUESTROS PIBES', 9654.55, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(7, '2018-08-06', 12300.00, 14, '68329607406379', '2018-09-04', 'pago', 'contado', '2018-08-06 16:05:29', '2018-08-06 16:05:29', '80', '30531025799', 'SMATA', 10165.29, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(8, '2018-08-09', 1200.00, 4, '68329690439311', '2018-09-07', 'pago', 'contado', '2018-08-09 16:19:51', '2018-08-09 16:19:51', '80', '33693450239', 'AFIP-DGI', 991.74, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(9, '2018-08-09', 900.00, 4, '68329690743458', '2018-09-07', 'pago', 'contado', '2018-08-09 16:24:22', '2018-08-09 16:24:22', '80', '33693450239', 'AFIP-DGI', 743.80, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(10, '2018-08-10', 600.00, 4, '68329717985716', '2018-09-08', 'pago', 'contado', '2018-08-10 16:30:02', '2018-08-10 16:30:02', '80', '33693450239', 'AFIP-DGI', 495.87, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(11, '2018-08-15', 2700.00, 4, '68339824558038', '2018-09-13', 'pago', 'contado', '2018-08-15 21:47:19', '2018-08-15 21:47:19', '80', '33693450239', 'AFIP-DGI', 2231.40, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(12, '2018-09-18', 5500.00, 31, '68389631708366', '2018-10-17', 'pago', 'contado', '2018-09-18 22:08:19', '2018-09-18 22:08:19', '80', '30628898231', 'CONSORCIO GEMELLUS', 4545.45, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(13, '2018-09-20', 6500.00, 32, '68389707016619', '2018-10-19', 'pago', 'contado', '2018-09-21 01:05:37', '2018-09-21 01:05:37', '96', '22490019', 'GUSTAVO LOPEZ', 5371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(14, '2018-10-09', 2500.00, 35, '68419186171652', '2018-11-07', 'pago', 'contado', '2018-10-10 01:32:23', '2018-10-10 01:32:23', '96', '16873018', 'adema maria', 2066.12, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(15, '2018-11-30', 7200.00, 41, '68489495162021', '2018-12-29', 'pago', 'contado', '2018-11-30 17:06:43', '2018-11-30 17:06:43', '80', '30999113571', 'MUNICIPALIDAD DE URIBURU', 5950.41, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(16, '2018-12-11', 4500.00, 14, '68509791218185', '2019-01-09', 'pago', 'contado', '2018-12-12 00:34:09', '2018-12-12 00:34:09', '80', '30531025799', 'SMATA', 3719.01, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(17, '2018-12-20', 5500.00, 4, '68519044287578', '2019-01-18', 'pago', 'contado', '2018-12-21 00:14:05', '2018-12-21 00:14:05', '80', '33693450239', 'AFIP-DGI', 4545.45, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00),
(18, '2019-01-22', 8700.00, 4, '69049771579515', '2019-02-20', 'pago', 'contado', '2019-01-22 15:16:29', '2019-01-22 15:16:29', '80', '33693450239', 'AFIP-DGI', 7190.08, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_gastos`
--

CREATE TABLE `daniel_edgardo_medina_gastos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_marcas`
--

CREATE TABLE `daniel_edgardo_medina_marcas` (
  `id` int(10) UNSIGNED NOT NULL,
  `marca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarco` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_marcas`
--

INSERT INTO `daniel_edgardo_medina_marcas` (`id`, `marca`, `remarco`, `created_at`, `updated_at`) VALUES
(1, 'Sin marca', 0.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_movimientos`
--

CREATE TABLE `daniel_edgardo_medina_movimientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `movimiento_id` int(11) NOT NULL,
  `movimiento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_movimientos`
--

INSERT INTO `daniel_edgardo_medina_movimientos` (`id`, `movimiento_id`, `movimiento`, `saldo`, `created_at`, `updated_at`) VALUES
(1, 0, 'SALDO INICIAL', 0.00, NULL, NULL),
(2, 1, 'VENTA', 5160.00, '2018-04-21 17:10:37', '2018-04-21 17:10:37'),
(3, 2, 'VENTA', 10110.00, '2018-04-21 18:26:56', '2018-04-21 18:26:56'),
(4, 3, 'VENTA', 14410.00, '2018-05-14 16:41:45', '2018-05-14 16:41:45'),
(5, 4, 'VENTA', 20210.00, '2018-05-16 18:14:18', '2018-05-16 18:14:18'),
(6, 5, 'VENTA', 41710.00, '2018-05-18 14:15:27', '2018-05-18 14:15:27'),
(7, 6, 'VENTA', 45910.00, '2018-05-21 14:12:47', '2018-05-21 14:12:47'),
(8, 7, 'VENTA', 57860.00, '2018-05-28 14:07:12', '2018-05-28 14:07:12'),
(9, 8, 'VENTA', 67360.00, '2018-05-28 14:14:18', '2018-05-28 14:14:18'),
(10, 9, 'VENTA', 83860.00, '2018-05-29 17:57:58', '2018-05-29 17:57:58'),
(11, 10, 'VENTA', 87360.00, '2018-06-02 17:28:04', '2018-06-02 17:28:04'),
(12, 11, 'VENTA', 90860.00, '2018-06-07 22:31:55', '2018-06-07 22:31:55'),
(13, 12, 'VENTA', 95360.00, '2018-07-12 04:32:00', '2018-07-12 04:32:00'),
(14, 13, 'VENTA', 102860.00, '2018-07-12 04:37:01', '2018-07-12 04:37:01'),
(15, 14, 'VENTA', 106360.00, '2018-07-12 04:47:33', '2018-07-12 04:47:33'),
(16, 15, 'VENTA', 113860.00, '2018-07-12 16:14:58', '2018-07-12 16:14:58'),
(17, 16, 'VENTA', 121360.00, '2018-07-12 16:16:36', '2018-07-12 16:16:36'),
(18, 17, 'VENTA', 121442.64, '2018-07-26 02:08:07', '2018-07-26 02:08:07'),
(19, 18, 'VENTA', 133124.64, '2018-07-26 03:01:03', '2018-07-26 03:01:03'),
(20, 19, 'VENTA', 144806.64, '2018-07-30 20:45:58', '2018-07-30 20:45:58'),
(21, 20, 'VENTA', 150806.64, '2018-07-31 01:31:10', '2018-07-31 01:31:10'),
(22, 21, 'VENTA', 163106.64, '2018-08-06 16:05:29', '2018-08-06 16:05:29'),
(23, 22, 'VENTA', 165006.64, '2018-08-06 16:15:54', '2018-08-06 16:15:54'),
(24, 23, 'VENTA', 184506.64, '2018-08-08 14:23:57', '2018-08-08 14:23:57'),
(25, 24, 'VENTA', 185706.64, '2018-08-09 16:19:51', '2018-08-09 16:19:51'),
(26, 25, 'VENTA', 186906.64, '2018-08-09 16:23:04', '2018-08-09 16:23:04'),
(27, 26, 'VENTA', 187806.64, '2018-08-09 16:24:22', '2018-08-09 16:24:22'),
(28, 27, 'VENTA', 195106.64, '2018-08-09 17:54:11', '2018-08-09 17:54:11'),
(29, 28, 'VENTA', 195706.64, '2018-08-10 16:30:02', '2018-08-10 16:30:02'),
(30, 29, 'VENTA', 196606.64, '2018-08-15 21:43:52', '2018-08-15 21:43:52'),
(31, 30, 'VENTA', 199306.64, '2018-08-15 21:47:19', '2018-08-15 21:47:19'),
(32, 31, 'VENTA', 208206.64, '2018-08-15 21:54:42', '2018-08-15 21:54:42'),
(33, 32, 'VENTA', 220506.64, '2018-08-18 15:51:17', '2018-08-18 15:51:17'),
(34, 33, 'VENTA', 228156.64, '2018-08-22 01:53:03', '2018-08-22 01:53:03'),
(35, 34, 'VENTA', 230156.64, '2018-08-24 01:20:17', '2018-08-24 01:20:17'),
(36, 35, 'VENTA', 243156.64, '2018-08-24 21:49:20', '2018-08-24 21:49:20'),
(37, 36, 'VENTA', 250106.64, '2018-08-27 22:24:34', '2018-08-27 22:24:34'),
(38, 37, 'VENTA', 255506.64, '2018-08-27 23:11:27', '2018-08-27 23:11:27'),
(39, 38, 'VENTA', 262456.64, '2018-08-28 21:40:45', '2018-08-28 21:40:45'),
(40, 39, 'VENTA', 281156.64, '2018-08-29 21:43:16', '2018-08-29 21:43:16'),
(41, 40, 'VENTA', 284156.64, '2018-08-30 22:23:04', '2018-08-30 22:23:04'),
(42, 41, 'VENTA', 293806.64, '2018-08-31 16:17:20', '2018-08-31 16:17:20'),
(43, 42, 'VENTA', 298000.64, '2018-08-31 17:17:22', '2018-08-31 17:17:22'),
(44, 43, 'VENTA', 315800.64, '2018-09-01 18:24:59', '2018-09-01 18:24:59'),
(45, 44, 'VENTA', 325150.64, '2018-09-06 18:39:40', '2018-09-06 18:39:40'),
(46, 45, 'VENTA', 332950.64, '2018-09-13 02:31:00', '2018-09-13 02:31:00'),
(47, 46, 'VENTA', 336550.64, '2018-09-18 14:10:18', '2018-09-18 14:10:18'),
(48, 47, 'VENTA', 342050.64, '2018-09-18 22:08:19', '2018-09-18 22:08:19'),
(49, 48, 'VENTA', 348550.64, '2018-09-21 01:05:37', '2018-09-21 01:05:37'),
(50, 49, 'VENTA', 358200.64, '2018-09-21 01:59:34', '2018-09-21 01:59:34'),
(51, 50, 'VENTA', 364800.64, '2018-09-24 18:11:51', '2018-09-24 18:11:51'),
(52, 51, 'VENTA', 391300.64, '2018-09-28 15:04:24', '2018-09-28 15:04:24'),
(53, 52, 'VENTA', 400800.64, '2018-10-02 18:18:18', '2018-10-02 18:18:18'),
(54, 53, 'VENTA', 403300.64, '2018-10-10 01:32:23', '2018-10-10 01:32:23'),
(55, 54, 'VENTA', 413100.64, '2018-10-11 22:52:00', '2018-10-11 22:52:00'),
(56, 55, 'VENTA', 421900.64, '2018-10-16 18:22:52', '2018-10-16 18:22:52'),
(57, 56, 'VENTA', 431100.64, '2018-10-23 01:40:25', '2018-10-23 01:40:25'),
(58, 57, 'VENTA', 447500.64, '2018-10-25 16:49:09', '2018-10-25 16:49:09'),
(59, 58, 'VENTA', 480100.64, '2018-10-26 14:56:40', '2018-10-26 14:56:40'),
(60, 59, 'VENTA', 488600.64, '2018-11-07 18:35:16', '2018-11-07 18:35:16'),
(61, 60, 'VENTA', 497100.64, '2018-11-07 21:46:48', '2018-11-07 21:46:48'),
(62, 61, 'VENTA', 536300.64, '2018-11-12 18:14:38', '2018-11-12 18:14:38'),
(63, 62, 'VENTA', 545800.64, '2018-11-15 17:46:20', '2018-11-15 17:46:20'),
(64, 63, 'VENTA', 559000.64, '2018-11-22 14:08:40', '2018-11-22 14:08:40'),
(65, 64, 'VENTA', 563500.64, '2018-11-29 17:49:40', '2018-11-29 17:49:40'),
(66, 65, 'VENTA', 570700.64, '2018-11-30 17:06:43', '2018-11-30 17:06:43'),
(67, 66, 'VENTA', 578200.64, '2018-12-03 17:35:13', '2018-12-03 17:35:13'),
(68, 67, 'VENTA', 606343.64, '2018-12-04 17:54:48', '2018-12-04 17:54:48'),
(69, 68, 'VENTA', 613843.64, '2018-12-04 18:05:47', '2018-12-04 18:05:47'),
(70, 69, 'VENTA', 623523.64, '2018-12-07 15:56:37', '2018-12-07 15:56:37'),
(71, 70, 'VENTA', 628023.64, '2018-12-10 14:32:44', '2018-12-10 14:32:44'),
(72, 71, 'VENTA', 632873.64, '2018-12-11 00:44:55', '2018-12-11 00:44:55'),
(73, 72, 'VENTA', 637373.64, '2018-12-12 00:34:09', '2018-12-12 00:34:09'),
(74, 73, 'VENTA', 647073.64, '2018-12-13 16:35:02', '2018-12-13 16:35:02'),
(75, 74, 'VENTA', 657273.64, '2018-12-17 17:35:21', '2018-12-17 17:35:21'),
(76, 75, 'VENTA', 658241.64, '2018-12-19 01:09:12', '2018-12-19 01:09:12'),
(77, 76, 'VENTA', 665241.64, '2018-12-20 22:15:55', '2018-12-20 22:15:55'),
(78, 77, 'VENTA', 670741.64, '2018-12-21 00:14:05', '2018-12-21 00:14:05'),
(79, 78, 'VENTA', 684051.64, '2018-12-21 16:04:22', '2018-12-21 16:04:22'),
(80, 79, 'VENTA', 686411.64, '2018-12-22 17:45:20', '2018-12-22 17:45:20'),
(81, 80, 'VENTA', 703911.64, '2018-12-26 17:51:39', '2018-12-26 17:51:39'),
(82, 81, 'VENTA', 728581.64, '2018-12-28 15:01:25', '2018-12-28 15:01:25'),
(83, 82, 'VENTA', 742281.64, '2019-01-05 14:43:20', '2019-01-05 14:43:20'),
(84, 83, 'VENTA', 751381.64, '2019-01-16 02:20:39', '2019-01-16 02:20:39'),
(85, 84, 'VENTA', 760481.64, '2019-01-16 02:25:26', '2019-01-16 02:25:26'),
(86, 85, 'VENTA', 769581.64, '2019-01-16 22:21:47', '2019-01-16 22:21:47'),
(87, 86, 'VENTA', 786101.64, '2019-01-17 01:23:49', '2019-01-17 01:23:49'),
(88, 87, 'VENTA', 790701.64, '2019-01-17 18:08:32', '2019-01-17 18:08:32'),
(89, 88, 'VENTA', 804001.64, '2019-01-22 02:33:35', '2019-01-22 02:33:35'),
(90, 89, 'VENTA', 812701.64, '2019-01-22 15:16:29', '2019-01-22 15:16:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_pagos`
--

CREATE TABLE `daniel_edgardo_medina_pagos` (
  `id` int(10) UNSIGNED NOT NULL,
  `proveedor_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `pago` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_presupuestos`
--

CREATE TABLE `daniel_edgardo_medina_presupuestos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_presupuestos`
--

INSERT INTO `daniel_edgardo_medina_presupuestos` (`id`, `fecha`, `total`, `cliente_id`, `created_at`, `updated_at`) VALUES
(1, '2018-04-26', 23.00, 2, '2018-04-26 15:20:08', '2018-04-26 15:20:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_productos`
--

CREATE TABLE `daniel_edgardo_medina_productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` double(8,2) NOT NULL,
  `stock_minimo` double(8,2) DEFAULT NULL,
  `precio_compra` double(8,2) NOT NULL,
  `precio_venta` double(8,2) NOT NULL,
  `iva_id` int(10) UNSIGNED NOT NULL,
  `proveedor_id` int(10) UNSIGNED NOT NULL,
  `categoria_producto_id` int(10) UNSIGNED NOT NULL,
  `marca_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_proveedores`
--

CREATE TABLE `daniel_edgardo_medina_proveedores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deuda` double(8,2) NOT NULL DEFAULT '0.00',
  `observaciones` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_proveedores`
--

INSERT INTO `daniel_edgardo_medina_proveedores` (`id`, `nombre`, `cuit`, `telefono`, `email`, `deuda`, `observaciones`, `created_at`, `updated_at`) VALUES
(1, 'Sin Proveedor', NULL, NULL, NULL, 0.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_registro_actividad`
--

CREATE TABLE `daniel_edgardo_medina_registro_actividad` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_reg_ventas_alic`
--

CREATE TABLE `daniel_edgardo_medina_reg_ventas_alic` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_venta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alicuota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_iva` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_reg_ventas_alic`
--

INSERT INTO `daniel_edgardo_medina_reg_ventas_alic` (`id`, `tipo_comprobante`, `punto_venta`, `num_comprobante`, `importe_neto`, `alicuota`, `importe_iva`, `created_at`, `updated_at`) VALUES
(1, '001', '00004', '00000000000000000001', '000000000426446', ' 21%', '000000000089554', '2018-04-21 17:10:37', '2018-04-21 17:10:37'),
(2, '001', '00004', '00000000000000000002', '000000000409091', ' 21%', '000000000085909', '2018-04-21 18:26:56', '2018-04-21 18:26:56'),
(3, '006', '00004', '00000000000000000001', '000000000355372', ' 21%', '000000000074628', '2018-05-14 16:41:45', '2018-05-14 16:41:45'),
(4, '006', '00004', '00000000000000000002', '000000000479339', ' 21%', '000000000100661', '2018-05-16 18:14:18', '2018-05-16 18:14:18'),
(5, '001', '00004', '00000000000000000003', '000000001776860', ' 21%', '000000000373140', '2018-05-18 14:15:27', '2018-05-18 14:15:27'),
(6, '001', '00004', '00000000000000000004', '000000000347107', ' 21%', '000000000072893', '2018-05-21 14:12:47', '2018-05-21 14:12:47'),
(7, '006', '00004', '00000000000000000003', '000000000987603', ' 21%', '000000000207397', '2018-05-28 14:07:12', '2018-05-28 14:07:12'),
(8, '001', '00004', '00000000000000000005', '000000000785124', ' 21%', '000000000164876', '2018-05-28 14:14:18', '2018-05-28 14:14:18'),
(9, '001', '00004', '00000000000000000006', '000000001363636', ' 21%', '000000000286364', '2018-05-29 17:57:58', '2018-05-29 17:57:58'),
(10, '001', '00004', '00000000000000000007', '000000000289256', ' 21%', '000000000060744', '2018-06-02 17:28:04', '2018-06-02 17:28:04'),
(11, '003', '00004', '00000000000000000001', '000000000289256', ' 21%', '000000000060744', '2018-06-07 22:31:55', '2018-06-07 22:31:55'),
(12, '001', '00004', '00000000000000000008', '000000000371901', ' 21%', '000000000078099', '2018-07-12 04:32:00', '2018-07-12 04:32:00'),
(13, '001', '00004', '00000000000000000009', '000000000619835', ' 21%', '000000000130165', '2018-07-12 04:37:01', '2018-07-12 04:37:01'),
(14, '006', '00004', '00000000000000000004', '000000000003500', ' 21%', '000000000000000', '2018-07-12 04:47:33', '2018-07-12 04:47:33'),
(15, '003', '00004', '00000000000000000002', '000000000619835', ' 21%', '000000000130165', '2018-07-12 16:14:58', '2018-07-12 16:14:58'),
(16, '001', '00004', '00000000000000000010', '000000000619835', ' 21%', '000000000130165', '2018-07-12 16:16:36', '2018-07-12 16:16:36'),
(17, '006', '00004', '00000000000000000005', '000000000008267', ' 21%', '000000000000000', '2018-07-26 02:08:07', '2018-07-26 02:08:07'),
(18, '006', '00004', '00000000000000000006', '000000000965455', ' 21%', '000000000202745', '2018-07-26 03:01:03', '2018-07-26 03:01:03'),
(19, '008', '00004', '00000000000000000001', '000000000965455', ' 21%', '000000000202745', '2018-07-30 20:45:58', '2018-07-30 20:45:58'),
(20, '006', '00004', '00000000000000000011', '000000000495868', ' 21%', '000000000000000', '2018-07-31 01:31:10', '2018-07-31 01:31:10'),
(21, '006', '00004', '00000000000000000007', '000000001016529', ' 21%', '000000000213471', '2018-08-06 16:05:29', '2018-08-06 16:05:29'),
(22, '001', '00004', '00000000000000000012', '000000000157025', ' 21%', '000000000032975', '2018-08-06 16:15:54', '2018-08-06 16:15:54'),
(23, '001', '00004', '00000000000000000013', '000000001611570', ' 21%', '000000000338430', '2018-08-08 14:23:57', '2018-08-08 14:23:57'),
(24, '006', '00004', '00000000000000000008', '000000000099174', ' 21%', '000000000020826', '2018-08-09 16:19:51', '2018-08-09 16:19:51'),
(25, '008', '00004', '00000000000000000002', '000000000099174', ' 21%', '000000000020826', '2018-08-09 16:23:04', '2018-08-09 16:23:04'),
(26, '006', '00004', '00000000000000000009', '000000000074380', ' 21%', '000000000015620', '2018-08-09 16:24:22', '2018-08-09 16:24:22'),
(27, '001', '00004', '00000000000000000014', '000000000603306', ' 21%', '000000000126694', '2018-08-09 17:54:11', '2018-08-09 17:54:11'),
(28, '006', '00004', '00000000000000000010', '000000000049587', ' 21%', '000000000010413', '2018-08-10 16:30:02', '2018-08-10 16:30:02'),
(29, '008', '00004', '00000000000000000003', '000000000074380', ' 21%', '000000000015620', '2018-08-15 21:43:52', '2018-08-15 21:43:52'),
(30, '006', '00004', '00000000000000000011', '000000000223140', ' 21%', '000000000046860', '2018-08-15 21:47:19', '2018-08-15 21:47:19'),
(31, '001', '00004', '00000000000000000015', '000000000735537', ' 21%', '000000000154463', '2018-08-15 21:54:42', '2018-08-15 21:54:42'),
(32, '001', '00004', '00000000000000000016', '000000001016529', ' 21%', '000000000213471', '2018-08-18 15:51:17', '2018-08-18 15:51:17'),
(33, '001', '00004', '00000000000000000017', '000000000632231', ' 21%', '000000000132769', '2018-08-22 01:53:03', '2018-08-22 01:53:03'),
(34, '001', '00004', '00000000000000000018', '000000000165289', ' 21%', '000000000034711', '2018-08-24 01:20:17', '2018-08-24 01:20:17'),
(35, '001', '00004', '00000000000000000019', '000000001074380', ' 21%', '000000000225620', '2018-08-24 21:49:20', '2018-08-24 21:49:20'),
(36, '001', '00004', '00000000000000000020', '000000000574380', ' 21%', '000000000120620', '2018-08-27 22:24:34', '2018-08-27 22:24:34'),
(37, '001', '00004', '00000000000000000021', '000000000446281', ' 21%', '000000000093719', '2018-08-27 23:11:27', '2018-08-27 23:11:27'),
(38, '001', '00004', '00000000000000000022', '000000000574380', ' 21%', '000000000120620', '2018-08-28 21:40:45', '2018-08-28 21:40:45'),
(39, '001', '00004', '00000000000000000023', '000000001545455', ' 21%', '000000000324545', '2018-08-29 21:43:16', '2018-08-29 21:43:16'),
(40, '001', '00004', '00000000000000000024', '000000000247934', ' 21%', '000000000052066', '2018-08-30 22:23:04', '2018-08-30 22:23:04'),
(41, '001', '00004', '00000000000000000025', '000000000797521', ' 21%', '000000000167479', '2018-08-31 16:17:20', '2018-08-31 16:17:20'),
(42, '001', '00004', '00000000000000000026', '000000000346612', ' 21%', '000000000072788', '2018-08-31 17:17:22', '2018-08-31 17:17:22'),
(43, '001', '00004', '00000000000000000027', '000000001471074', ' 21%', '000000000308926', '2018-09-01 18:24:59', '2018-09-01 18:24:59'),
(44, '001', '00004', '00000000000000000028', '000000000772727', ' 21%', '000000000162273', '2018-09-06 18:39:40', '2018-09-06 18:39:40'),
(45, '001', '00004', '00000000000000000029', '000000000644628', ' 21%', '000000000135372', '2018-09-13 02:31:00', '2018-09-13 02:31:00'),
(46, '001', '00004', '00000000000000000030', '000000000297521', ' 21%', '000000000062479', '2018-09-18 14:10:18', '2018-09-18 14:10:18'),
(47, '006', '00004', '00000000000000000012', '000000000454545', ' 21%', '000000000095455', '2018-09-18 22:08:19', '2018-09-18 22:08:19'),
(48, '006', '00004', '00000000000000000013', '000000000537190', ' 21%', '000000000112810', '2018-09-21 01:05:37', '2018-09-21 01:05:37'),
(49, '001', '00004', '00000000000000000031', '000000000797521', ' 21%', '000000000167479', '2018-09-21 01:59:34', '2018-09-21 01:59:34'),
(50, '001', '00004', '00000000000000000032', '000000000545455', ' 21%', '000000000114545', '2018-09-24 18:11:51', '2018-09-24 18:11:51'),
(51, '001', '00004', '00000000000000000033', '000000002190083', ' 21%', '000000000459917', '2018-09-28 15:04:24', '2018-09-28 15:04:24'),
(52, '001', '00004', '00000000000000000034', '000000000785124', ' 21%', '000000000164876', '2018-10-02 18:18:18', '2018-10-02 18:18:18'),
(53, '006', '00004', '00000000000000000014', '000000000206612', ' 21%', '000000000043388', '2018-10-10 01:32:23', '2018-10-10 01:32:23'),
(54, '001', '00004', '00000000000000000035', '000000000809917', ' 21%', '000000000170083', '2018-10-11 22:52:00', '2018-10-11 22:52:00'),
(55, '001', '00004', '00000000000000000036', '000000000727273', ' 21%', '000000000152727', '2018-10-16 18:22:52', '2018-10-16 18:22:52'),
(56, '001', '00004', '00000000000000000037', '000000000760331', ' 21%', '000000000159669', '2018-10-23 01:40:25', '2018-10-23 01:40:25'),
(57, '001', '00004', '00000000000000000038', '000000001355372', ' 21%', '000000000284628', '2018-10-25 16:49:09', '2018-10-25 16:49:09'),
(58, '001', '00004', '00000000000000000039', '000000002694215', ' 21%', '000000000565785', '2018-10-26 14:56:40', '2018-10-26 14:56:40'),
(59, '001', '00004', '00000000000000000040', '000000000702479', ' 21%', '000000000147521', '2018-11-07 18:35:16', '2018-11-07 18:35:16'),
(60, '001', '00004', '00000000000000000041', '000000000702479', ' 21%', '000000000147521', '2018-11-07 21:46:48', '2018-11-07 21:46:48'),
(61, '001', '00004', '00000000000000000042', '000000003239669', ' 21%', '000000000680331', '2018-11-12 18:14:37', '2018-11-12 18:14:37'),
(62, '001', '00004', '00000000000000000043', '000000000785124', ' 21%', '000000000164876', '2018-11-15 17:46:20', '2018-11-15 17:46:20'),
(63, '001', '00004', '00000000000000000044', '000000001090909', ' 21%', '000000000229091', '2018-11-22 14:08:40', '2018-11-22 14:08:40'),
(64, '001', '00004', '00000000000000000045', '000000000371901', ' 21%', '000000000078099', '2018-11-29 17:49:40', '2018-11-29 17:49:40'),
(65, '006', '00004', '00000000000000000015', '000000000595041', ' 21%', '000000000124959', '2018-11-30 17:06:43', '2018-11-30 17:06:43'),
(66, '001', '00004', '00000000000000000046', '000000000619835', ' 21%', '000000000130165', '2018-12-03 17:35:13', '2018-12-03 17:35:13'),
(67, '001', '00004', '00000000000000000047', '000000002325868', ' 21%', '000000000488432', '2018-12-04 17:54:48', '2018-12-04 17:54:48'),
(68, '001', '00004', '00000000000000000048', '000000000619835', ' 21%', '000000000130165', '2018-12-04 18:05:47', '2018-12-04 18:05:47'),
(69, '001', '00004', '00000000000000000049', '000000000800000', ' 21%', '000000000168000', '2018-12-07 15:56:37', '2018-12-07 15:56:37'),
(70, '001', '00004', '00000000000000000050', '000000000371901', ' 21%', '000000000078099', '2018-12-10 14:32:44', '2018-12-10 14:32:44'),
(71, '001', '00004', '00000000000000000051', '000000000400826', ' 21%', '000000000084174', '2018-12-11 00:44:55', '2018-12-11 00:44:55'),
(72, '006', '00004', '00000000000000000016', '000000000371901', ' 21%', '000000000078099', '2018-12-12 00:34:09', '2018-12-12 00:34:09'),
(73, '001', '00004', '00000000000000000052', '000000000801653', ' 21%', '000000000168347', '2018-12-13 16:35:02', '2018-12-13 16:35:02'),
(74, '001', '00004', '00000000000000000053', '000000000842975', ' 21%', '000000000177025', '2018-12-17 17:35:21', '2018-12-17 17:35:21'),
(75, '001', '00004', '00000000000000000054', '000000000080000', ' 21%', '000000000016800', '2018-12-19 01:09:12', '2018-12-19 01:09:12'),
(76, '001', '00004', '00000000000000000055', '000000000578512', ' 21%', '000000000121488', '2018-12-20 22:15:55', '2018-12-20 22:15:55'),
(77, '006', '00004', '00000000000000000017', '000000000454545', ' 21%', '000000000095455', '2018-12-21 00:14:05', '2018-12-21 00:14:05'),
(78, '001', '00004', '00000000000000000056', '000000001100000', ' 21%', '000000000231000', '2018-12-21 16:04:22', '2018-12-21 16:04:22'),
(79, '001', '00004', '00000000000000000057', '000000000195041', ' 21%', '000000000040959', '2018-12-22 17:45:20', '2018-12-22 17:45:20'),
(80, '001', '00004', '00000000000000000058', '000000001446281', ' 21%', '000000000303719', '2018-12-26 17:51:39', '2018-12-26 17:51:39'),
(81, '001', '00004', '00000000000000000059', '000000002038843', ' 21%', '000000000428157', '2018-12-28 15:01:25', '2018-12-28 15:01:25'),
(82, '001', '00004', '00000000000000000060', '000000001132231', ' 21%', '000000000237769', '2019-01-05 14:43:20', '2019-01-05 14:43:20'),
(83, '001', '00004', '00000000000000000061', '000000000752066', ' 21%', '000000000157934', '2019-01-16 02:20:39', '2019-01-16 02:20:39'),
(84, '001', '00004', '00000000000000000062', '000000000752066', ' 21%', '000000000157934', '2019-01-16 02:25:26', '2019-01-16 02:25:26'),
(85, '003', '00004', '00000000000000000003', '000000000752066', ' 21%', '000000000157934', '2019-01-16 22:21:47', '2019-01-16 22:21:47'),
(86, '001', '00004', '00000000000000000063', '000000001365289', ' 21%', '000000000286711', '2019-01-17 01:23:49', '2019-01-17 01:23:49'),
(87, '001', '00004', '00000000000000000064', '000000000380165', ' 21%', '000000000079835', '2019-01-17 18:08:32', '2019-01-17 18:08:32'),
(88, '001', '00004', '00000000000000000065', '000000001203620', '10.5%', '000000000126380', '2019-01-22 02:33:35', '2019-01-22 02:33:35'),
(89, '006', '00004', '00000000000000000018', '000000000719008', ' 21%', '000000000150992', '2019-01-22 15:16:29', '2019-01-22 15:16:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_reg_ventas_cbte`
--

CREATE TABLE `daniel_edgardo_medina_reg_ventas_cbte` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_venta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante_hasta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percepcion_no_categorizados` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operaciones_exentas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuestos_nacionales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingresos_brutos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuestos_municipales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuestos_internos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_reg_ventas_cbte`
--

INSERT INTO `daniel_edgardo_medina_reg_ventas_cbte` (`id`, `fecha`, `tipo_comprobante`, `punto_venta`, `num_comprobante`, `num_comprobante_hasta`, `tipo_doc`, `nro_doc`, `cliente`, `total`, `importe_neto`, `percepcion_no_categorizados`, `operaciones_exentas`, `impuestos_nacionales`, `ingresos_brutos`, `impuestos_municipales`, `impuestos_internos`, `codigo_moneda`, `tipo_cambio`, `cantidad_alicuotas`, `codigo_operacion`, `otros_tributos`, `created_at`, `updated_at`) VALUES
(1, '20180421', '001', '00004', '00000000000000000001', '00000000000000000001', '80', '         20073628971', 'SZELIGA HECTOR                ', '000000000005160', '000000000426446', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-04-21 17:10:37', '2018-04-21 17:10:37'),
(2, '20180421', '001', '00004', '00000000000000000002', '00000000000000000002', '80', '         30500017704', 'LA SEGUNDA  C LSG             ', '000000000004950', '000000000409091', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-04-21 18:26:56', '2018-04-21 18:26:56'),
(3, '20180514', '006', '00004', '00000000000000000001', '00000000000000000001', '80', '         33693450239', 'AFIP-DGI                      ', '000000000004300', '000000000355372', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-05-14 16:41:45', '2018-05-14 16:41:45'),
(4, '20180516', '006', '00004', '00000000000000000002', '00000000000000000002', '80', '         33693450239', 'AFIP-DGI                      ', '000000000005800', '000000000479339', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-05-16 18:14:18', '2018-05-16 18:14:18'),
(5, '20180518', '001', '00004', '00000000000000000003', '00000000000000000003', '80', '         30709664820', 'EL CHARABON SRL               ', '000000000021500', '000000001776860', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-05-18 14:15:27', '2018-05-18 14:15:27'),
(6, '20180521', '001', '00004', '00000000000000000004', '00000000000000000004', '80', '         20073689571', 'FERNANDEZ JOSE A              ', '000000000004200', '000000000347107', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-05-21 14:12:47', '2018-05-21 14:12:47'),
(7, '20180528', '006', '00004', '00000000000000000003', '00000000000000000003', '80', '         30616500593', 'SERVICIO MEDICO PREVISONAL    ', '000000000011950', '000000000987603', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-05-28 14:07:12', '2018-05-28 14:07:12'),
(8, '20180528', '001', '00004', '00000000000000000005', '00000000000000000005', '80', '         30500012516', 'BANCO DE LA PAMPA S.E.M       ', '000000000009500', '000000000785124', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-05-28 14:14:18', '2018-05-28 14:14:18'),
(9, '20180529', '001', '00004', '00000000000000000006', '00000000000000000006', '80', '         30693577612', 'SEMILLERIA LOS AMIGOS         ', '000000000016500', '000000001363636', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-05-29 17:57:58', '2018-05-29 17:57:58'),
(10, '20180602', '001', '00004', '00000000000000000007', '00000000000000000007', '80', '         30616500593', 'SERVICIO MEDICO PREVISONAL    ', '000000000003500', '000000000289256', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-06-02 17:28:04', '2018-06-02 17:28:04'),
(11, '20180607', '003', '00004', '00000000000000000001', '00000000000000000001', '80', '         30616500593', 'SERVICIO MEDICO PREVISONAL    ', '000000000003500', '000000000289256', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-06-07 22:31:55', '2018-06-07 22:31:55'),
(12, '20180616', '001', '00004', '00000000000000000008', '00000000000000000008', '80', '         20224902779', 'LUCIANO MARQUES               ', '000000000004500', '000000000371901', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-07-12 04:32:00', '2018-07-12 04:32:00'),
(13, '20180627', '001', '00004', '00000000000000000009', '00000000000000000009', '80', '         20239720936', 'MAFFEO DANIEL                 ', '000000000007500', '000000000619835', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-07-12 04:37:01', '2018-07-12 04:37:01'),
(14, '20180607', '006', '00004', '00000000000000000004', '00000000000000000004', '80', '         30616500593', 'SERVICIO MEDICO PREVISONAL    ', '000000000003500', '000000000003500', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-07-12 04:47:33', '2018-07-12 04:47:33'),
(15, '20180712', '003', '00004', '00000000000000000002', '00000000000000000002', '80', '         20239720936', 'MAFFEO DANIEL                 ', '000000000007500', '000000000619835', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-07-12 16:14:58', '2018-07-12 16:14:58'),
(16, '20180712', '001', '00004', '00000000000000000010', '00000000000000000010', '80', '         20239720936', 'MAFFEO DANIEL                 ', '000000000007500', '000000000619835', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-07-12 16:16:36', '2018-07-12 16:16:36'),
(17, '20180710', '006', '00004', '00000000000000000005', '00000000000000000005', '99', '                    ', 'Nerina Roldan                 ', '000000000008264', '000000000008267', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-07-26 02:08:07', '2018-07-26 02:08:07'),
(18, '20180725', '006', '00004', '00000000000000000006', '00000000000000000006', '80', '         33671658499', 'FUNDACION NUESTROS PIBES      ', '000000000011682', '000000000965455', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-07-26 03:01:03', '2018-07-26 03:01:03'),
(19, '20180730', '008', '00004', '00000000000000000001', '00000000000000000001', '80', '         33671658499', 'FUNDACION NUESTROS PIBES      ', '000000000011682', '000000000965455', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-07-30 20:45:58', '2018-07-30 20:45:58'),
(20, '20180706', '006', '00004', '00000000000000000011', '00000000000000000011', '99', '                    ', 'GRISELDA WEIGUN               ', '000000000006000', '000000000495868', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-07-31 01:31:10', '2018-07-31 01:31:10'),
(21, '20180806', '006', '00004', '00000000000000000007', '00000000000000000007', '80', '         30531025799', 'SMATA                         ', '000000000012300', '000000001016529', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-06 16:05:29', '2018-08-06 16:05:29'),
(22, '20180806', '001', '00004', '00000000000000000012', '00000000000000000012', '80', '         20167090169', 'MANCINELLI HECTOR JULIO       ', '000000000001900', '000000000157025', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-06 16:15:54', '2018-08-06 16:15:54'),
(23, '20180808', '001', '00004', '00000000000000000013', '00000000000000000013', '80', '         27362569481', 'ANTONELLA CANALIS             ', '000000000019500', '000000001611570', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-08 14:23:57', '2018-08-08 14:23:57'),
(24, '20180809', '006', '00004', '00000000000000000008', '00000000000000000008', '80', '         33693450239', 'AFIP-DGI                      ', '000000000001200', '000000000099174', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-09 16:19:51', '2018-08-09 16:19:51'),
(25, '20180809', '008', '00004', '00000000000000000002', '00000000000000000002', '80', '         33693450239', 'AFIP-DGI                      ', '000000000001200', '000000000099174', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-09 16:23:04', '2018-08-09 16:23:04'),
(26, '20180809', '006', '00004', '00000000000000000009', '00000000000000000009', '80', '         33693450239', 'AFIP-DGI                      ', '000000000000900', '000000000074380', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-09 16:24:22', '2018-08-09 16:24:22'),
(27, '20180809', '001', '00004', '00000000000000000014', '00000000000000000014', '80', '         27109196504', 'ALVAREZ GRACIELA              ', '000000000007300', '000000000603306', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-09 17:54:11', '2018-08-09 17:54:11'),
(28, '20180810', '006', '00004', '00000000000000000010', '00000000000000000010', '80', '         33693450239', 'AFIP-DGI                      ', '000000000000600', '000000000049587', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-10 16:30:02', '2018-08-10 16:30:02'),
(29, '20180815', '008', '00004', '00000000000000000003', '00000000000000000003', '80', '         33693450239', 'AFIP-DGI                      ', '000000000000900', '000000000074380', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-15 21:43:52', '2018-08-15 21:43:52'),
(30, '20180815', '006', '00004', '00000000000000000011', '00000000000000000011', '80', '         33693450239', 'AFIP-DGI                      ', '000000000002700', '000000000223140', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-15 21:47:19', '2018-08-15 21:47:19'),
(31, '20180815', '001', '00004', '00000000000000000015', '00000000000000000015', '80', '         20239720936', 'MAFFEO DANIEL                 ', '000000000008900', '000000000735537', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-15 21:54:42', '2018-08-15 21:54:42'),
(32, '20180818', '001', '00004', '00000000000000000016', '00000000000000000016', '80', '         23126990979', 'FERNANDEZ ROBERTO             ', '000000000012300', '000000001016529', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-18 15:51:17', '2018-08-18 15:51:17'),
(33, '20180821', '001', '00004', '00000000000000000017', '00000000000000000017', '80', '         30581320589', 'GENTE DE LA PAMPA S.A         ', '000000000007650', '000000000632231', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-22 01:53:03', '2018-08-22 01:53:03'),
(34, '20180823', '001', '00004', '00000000000000000018', '00000000000000000018', '80', '         20083678322', 'MARTIN NESTOR                 ', '000000000002000', '000000000165289', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-24 01:20:17', '2018-08-24 01:20:17'),
(35, '20180824', '001', '00004', '00000000000000000019', '00000000000000000019', '80', '         20143415423', 'ROSTON JOSE LUIS              ', '000000000013000', '000000001074380', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-24 21:49:20', '2018-08-24 21:49:20'),
(36, '20180827', '001', '00004', '00000000000000000020', '00000000000000000020', '80', '         30710341431', 'HUALDE HARALDO Y HUGO         ', '000000000006950', '000000000574380', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-27 22:24:34', '2018-08-27 22:24:34'),
(37, '20180827', '001', '00004', '00000000000000000021', '00000000000000000021', '80', '         20132256900', 'ROLDAN OSCAR A                ', '000000000005400', '000000000446281', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-27 23:11:27', '2018-08-27 23:11:27'),
(38, '20180828', '001', '00004', '00000000000000000022', '00000000000000000022', '80', '         20177309444', 'COLOMBATTO FAVIO              ', '000000000006950', '000000000574380', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-28 21:40:45', '2018-08-28 21:40:45'),
(39, '20180829', '001', '00004', '00000000000000000023', '00000000000000000023', '80', '         30558655646', 'ANDRES SOUTO S.A              ', '000000000018700', '000000001545455', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-29 21:43:16', '2018-08-29 21:43:16'),
(40, '20180830', '001', '00004', '00000000000000000024', '00000000000000000024', '80', '         23116917459', 'seitz jorge                   ', '000000000003000', '000000000247934', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-30 22:23:04', '2018-08-30 22:23:04'),
(41, '20180831', '001', '00004', '00000000000000000025', '00000000000000000025', '80', '         30671686027', 'secretaria de cultura         ', '000000000009650', '000000000797521', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-31 16:17:20', '2018-08-31 16:17:20'),
(42, '20180831', '001', '00004', '00000000000000000026', '00000000000000000026', '80', '         27098744164', 'sucecion RIO JUANA            ', '000000000004194', '000000000346612', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-08-31 17:17:22', '2018-08-31 17:17:22'),
(43, '20180901', '001', '00004', '00000000000000000027', '00000000000000000027', '80', '         20239720936', 'MAFFEO DANIEL                 ', '000000000017800', '000000001471074', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-09-01 18:24:59', '2018-09-01 18:24:59'),
(44, '20180906', '001', '00004', '00000000000000000028', '00000000000000000028', '80', '         30558655646', 'ANDRES SOUTO S.A              ', '000000000009350', '000000000772727', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-09-06 18:39:40', '2018-09-06 18:39:40'),
(45, '20180912', '001', '00004', '00000000000000000029', '00000000000000000029', '80', '         20139564759', 'MARCELO OTIÑANO              ', '000000000007800', '000000000644628', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-09-13 02:31:00', '2018-09-13 02:31:00'),
(46, '20180918', '001', '00004', '00000000000000000030', '00000000000000000030', '80', '         27039044663', 'ORGALES MERCEDES              ', '000000000003600', '000000000297521', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-09-18 14:10:18', '2018-09-18 14:10:18'),
(47, '20180918', '006', '00004', '00000000000000000012', '00000000000000000012', '80', '         30628898231', 'CONSORCIO GEMELLUS            ', '000000000005500', '000000000454545', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-09-18 22:08:19', '2018-09-18 22:08:19'),
(48, '20180920', '006', '00004', '00000000000000000013', '00000000000000000013', '96', '            22490019', 'GUSTAVO LOPEZ                 ', '000000000006500', '000000000537190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-09-21 01:05:37', '2018-09-21 01:05:37'),
(49, '20180920', '001', '00004', '00000000000000000031', '00000000000000000031', '80', '         20224902779', 'marques luciano               ', '000000000009650', '000000000797521', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-09-21 01:59:34', '2018-09-21 01:59:34'),
(50, '20180924', '001', '00004', '00000000000000000032', '00000000000000000032', '80', '         27179990666', 'gonzales nancy                ', '000000000006600', '000000000545455', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-09-24 18:11:51', '2018-09-24 18:11:51'),
(51, '20180928', '001', '00004', '00000000000000000033', '00000000000000000033', '80', '         30693572114', 'ZUAZO OMAR Y HECTOR           ', '000000000026500', '000000002190083', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-09-28 15:04:24', '2018-09-28 15:04:24'),
(52, '20181002', '001', '00004', '00000000000000000034', '00000000000000000034', '80', '         20239720936', 'MAFFEO DANIEL                 ', '000000000009500', '000000000785124', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-10-02 18:18:18', '2018-10-02 18:18:18'),
(53, '20181009', '006', '00004', '00000000000000000014', '00000000000000000014', '96', '            16873018', 'adema maria                   ', '000000000002500', '000000000206612', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-10-10 01:32:23', '2018-10-10 01:32:23'),
(54, '20181011', '001', '00004', '00000000000000000035', '00000000000000000035', '80', '         20139564821', 'MASSERA CARLOS D              ', '000000000009800', '000000000809917', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-10-11 22:52:00', '2018-10-11 22:52:00'),
(55, '20181016', '001', '00004', '00000000000000000036', '00000000000000000036', '80', '         30709832995', 'LA AURELIA SRL                ', '000000000008800', '000000000727273', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-10-16 18:22:52', '2018-10-16 18:22:52'),
(56, '20181022', '001', '00004', '00000000000000000037', '00000000000000000037', '80', '         30693572114', 'ZUAZO OMAR Y HECTOR           ', '000000000009200', '000000000760331', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-10-23 01:40:25', '2018-10-23 01:40:25'),
(57, '20181025', '001', '00004', '00000000000000000038', '00000000000000000038', '80', '         20247435051', 'PEREZ CRISTIAN                ', '000000000016400', '000000001355372', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-10-25 16:49:09', '2018-10-25 16:49:09'),
(58, '20181026', '001', '00004', '00000000000000000039', '00000000000000000039', '80', '         23037633534', 'ANTON ELBA                    ', '000000000032600', '000000002694215', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-10-26 14:56:40', '2018-10-26 14:56:40'),
(59, '20181107', '001', '00004', '00000000000000000040', '00000000000000000040', '80', '         23239721869', 'MONEO RAMIRO                  ', '000000000008500', '000000000702479', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-11-07 18:35:16', '2018-11-07 18:35:16'),
(60, '20181107', '001', '00004', '00000000000000000041', '00000000000000000041', '80', '         30558655646', 'ANDRES SOUTO S.A              ', '000000000008500', '000000000702479', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-11-07 21:46:48', '2018-11-07 21:46:48'),
(61, '20181112', '001', '00004', '00000000000000000042', '00000000000000000042', '80', '         30709664820', 'EL CHARABON SRL               ', '000000000039200', '000000003239669', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-11-12 18:14:37', '2018-11-12 18:14:37'),
(62, '20181115', '001', '00004', '00000000000000000043', '00000000000000000043', '80', '         20239720936', 'MAFFEO DANIEL                 ', '000000000009500', '000000000785124', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-11-15 17:46:20', '2018-11-15 17:46:20'),
(63, '20181122', '001', '00004', '00000000000000000044', '00000000000000000044', '80', '         30558655646', 'ANDRES SOUTO S.A              ', '000000000013200', '000000001090909', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-11-22 14:08:40', '2018-11-22 14:08:40'),
(64, '20181129', '001', '00004', '00000000000000000045', '00000000000000000045', '80', '         23239721869', 'MONEO RAMIRO                  ', '000000000004500', '000000000371901', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-11-29 17:49:40', '2018-11-29 17:49:40'),
(65, '20181130', '006', '00004', '00000000000000000015', '00000000000000000015', '80', '         30999113571', 'MUNICIPALIDAD DE URIBURU      ', '000000000007200', '000000000595041', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-11-30 17:06:43', '2018-11-30 17:06:43'),
(66, '20181203', '001', '00004', '00000000000000000046', '00000000000000000046', '80', '         27179990666', 'gonzales nancy                ', '000000000007500', '000000000619835', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-03 17:35:13', '2018-12-03 17:35:13'),
(67, '20181204', '001', '00004', '00000000000000000047', '00000000000000000047', '80', '         30711979073', 'ROFRAN SRL                    ', '000000000028143', '000000002325868', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-04 17:54:48', '2018-12-04 17:54:48'),
(68, '20181204', '001', '00004', '00000000000000000048', '00000000000000000048', '80', '         20184189969', 'SCHEUBEL JUAN                 ', '000000000007500', '000000000619835', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-04 18:05:47', '2018-12-04 18:05:47'),
(69, '20181207', '001', '00004', '00000000000000000049', '00000000000000000049', '80', '         30629763704', 'EL JABALI SA                  ', '000000000009680', '000000000800000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-07 15:56:37', '2018-12-07 15:56:37'),
(70, '20181210', '001', '00004', '00000000000000000050', '00000000000000000050', '80', '         20245179074', 'MAYER MARCELO                 ', '000000000004500', '000000000371901', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-10 14:32:44', '2018-12-10 14:32:44'),
(71, '20181210', '001', '00004', '00000000000000000051', '00000000000000000051', '80', '         20073689571', 'FERNANDEZ JOSE A              ', '000000000004850', '000000000400826', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-11 00:44:55', '2018-12-11 00:44:55'),
(72, '20181211', '006', '00004', '00000000000000000016', '00000000000000000016', '80', '         30531025799', 'SMATA                         ', '000000000004500', '000000000371901', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-12 00:34:09', '2018-12-12 00:34:09'),
(73, '20181213', '001', '00004', '00000000000000000052', '00000000000000000052', '80', '         30650623408', 'RIGLESA SRL                   ', '000000000009700', '000000000801653', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-13 16:35:02', '2018-12-13 16:35:02'),
(74, '20181217', '001', '00004', '00000000000000000053', '00000000000000000053', '80', '         20239720936', 'MAFFEO DANIEL                 ', '000000000010200', '000000000842975', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-17 17:35:21', '2018-12-17 17:35:21'),
(75, '20181218', '001', '00004', '00000000000000000054', '00000000000000000054', '80', '         30709331880', 'ITALSOL AGROPECUARIA S.A      ', '000000000000968', '000000000080000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-19 01:09:12', '2018-12-19 01:09:12'),
(76, '20181220', '001', '00004', '00000000000000000055', '00000000000000000055', '80', '         20177309444', 'COLOMBATTO FAVIO              ', '000000000007000', '000000000578512', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-20 22:15:55', '2018-12-20 22:15:55'),
(77, '20181220', '006', '00004', '00000000000000000017', '00000000000000000017', '80', '         33693450239', 'AFIP-DGI                      ', '000000000005500', '000000000454545', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-21 00:14:05', '2018-12-21 00:14:05'),
(78, '20181221', '001', '00004', '00000000000000000056', '00000000000000000056', '80', '         20143417167', 'CAYRON HUGO                   ', '000000000013310', '000000001100000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-21 16:04:22', '2018-12-21 16:04:22'),
(79, '20181222', '001', '00004', '00000000000000000057', '00000000000000000057', '80', '         27171716476', 'KIN ANALIA                    ', '000000000002360', '000000000195041', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-22 17:45:20', '2018-12-22 17:45:20'),
(80, '20181226', '001', '00004', '00000000000000000058', '00000000000000000058', '80', '         27109196504', 'ALVAREZ GRACIELA              ', '000000000017500', '000000001446281', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-26 17:51:39', '2018-12-26 17:51:39'),
(81, '20181228', '001', '00004', '00000000000000000059', '00000000000000000059', '80', '         23215042634', 'DE LA IGLESIA ESTELA FABIANA  ', '000000000024670', '000000002038843', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2018-12-28 15:01:25', '2018-12-28 15:01:25'),
(82, '20190105', '001', '00004', '00000000000000000060', '00000000000000000060', '80', '         20102278926', 'BOITARD CARLOS                ', '000000000013700', '000000001132231', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-05 14:43:20', '2019-01-05 14:43:20'),
(83, '20190115', '001', '00004', '00000000000000000061', '00000000000000000061', '80', '         33555193489', 'VIAL S.A.                     ', '000000000009100', '000000000752066', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-16 02:20:39', '2019-01-16 02:20:39'),
(84, '20190115', '001', '00004', '00000000000000000062', '00000000000000000062', '80', '         33555193489', 'VIAL A S.A.                   ', '000000000009100', '000000000752066', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-16 02:25:26', '2019-01-16 02:25:26'),
(85, '20190116', '003', '00004', '00000000000000000003', '00000000000000000003', '80', '         33555193489', 'VIAL S.A.                     ', '000000000009100', '000000000752066', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-16 22:21:47', '2019-01-16 22:21:47'),
(86, '20190116', '001', '00004', '00000000000000000063', '00000000000000000063', '80', '         30656267890', 'JOSE MIGUEL CAMACHO Y Cia  S.C', '000000000016520', '000000001365289', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-17 01:23:49', '2019-01-17 01:23:49'),
(87, '20190117', '001', '00004', '00000000000000000064', '00000000000000000064', '80', '         20239720936', 'MAFFEO DANIEL                 ', '000000000004600', '000000000380165', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-17 18:08:32', '2019-01-17 18:08:32'),
(88, '20190121', '001', '00004', '00000000000000000065', '00000000000000000065', '80', '         23108369779', 'GRACIA NESTOR JOSE            ', '000000000013300', '000000001203620', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-22 02:33:35', '2019-01-22 02:33:35'),
(89, '20190122', '006', '00004', '00000000000000000018', '00000000000000000018', '80', '         33693450239', 'AFIP-DGI                      ', '000000000008700', '000000000719008', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-22 15:16:29', '2019-01-22 15:16:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_remitos`
--

CREATE TABLE `daniel_edgardo_medina_remitos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_resumen_cuenta`
--

CREATE TABLE `daniel_edgardo_medina_resumen_cuenta` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_saldo_favor`
--

CREATE TABLE `daniel_edgardo_medina_saldo_favor` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_saldo_pendiente`
--

CREATE TABLE `daniel_edgardo_medina_saldo_pendiente` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_servicios`
--

CREATE TABLE `daniel_edgardo_medina_servicios` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `iva_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_servicios`
--

INSERT INTO `daniel_edgardo_medina_servicios` (`id`, `descripcion`, `precio`, `iva_id`, `created_at`, `updated_at`) VALUES
(1, 'cambio de reten de rueda ford duty', 1900.00, 5, '2018-07-19 01:45:21', '2018-07-19 01:45:21'),
(2, 'cambio de reten de rueda ford duty', 1900.00, 5, '2018-07-19 01:45:22', '2018-07-19 01:45:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daniel_edgardo_medina_ventas`
--

CREATE TABLE `daniel_edgardo_medina_ventas` (
  `id` int(10) UNSIGNED NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` enum('Pago','Pendiente','Cancelado') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `daniel_edgardo_medina_ventas`
--

INSERT INTO `daniel_edgardo_medina_ventas` (`id`, `cliente_id`, `fecha`, `tipo_comprobante`, `num_comprobante`, `total`, `created_at`, `updated_at`, `estado`) VALUES
(1, 2, '2018-04-21', 'A', 1, 5160.00, '2018-04-21 17:10:37', '2018-04-21 17:10:37', 'Pago'),
(2, 3, '2018-04-21', 'A', 2, 4950.00, '2018-04-21 18:26:56', '2018-04-21 18:26:56', 'Pago'),
(3, 4, '2018-05-14', 'B', 1, 4300.00, '2018-05-14 16:41:45', '2018-05-14 16:41:45', 'Pago'),
(4, 4, '2018-05-16', 'B', 2, 5800.00, '2018-05-16 18:14:18', '2018-05-16 18:14:18', 'Pago'),
(5, 5, '2018-05-18', 'A', 3, 21500.00, '2018-05-18 14:15:27', '2018-05-18 14:15:27', 'Pago'),
(6, 6, '2018-05-21', 'A', 4, 4200.00, '2018-05-21 14:12:47', '2018-05-21 14:12:47', 'Pago'),
(7, 7, '2018-05-28', 'B', 3, 11950.00, '2018-05-28 14:07:12', '2018-05-28 14:07:12', 'Pago'),
(8, 8, '2018-05-28', 'A', 5, 9500.00, '2018-05-28 14:14:18', '2018-05-28 14:14:18', 'Pago'),
(9, 9, '2018-05-29', 'A', 6, 16500.00, '2018-05-29 17:57:58', '2018-05-29 17:57:58', 'Pago'),
(10, 7, '2018-06-02', 'A', 7, 3500.00, '2018-06-02 17:28:04', '2018-06-02 17:28:04', 'Pago'),
(11, 7, '2018-06-07', 'NCA', 1, 3500.00, '2018-06-07 22:31:55', '2018-06-07 22:31:55', 'Pago'),
(12, 10, '2018-06-16', 'A', 8, 4500.00, '2018-07-12 04:32:00', '2018-07-12 04:32:00', 'Pago'),
(13, 11, '2018-06-27', 'A', 9, 7500.00, '2018-07-12 04:37:01', '2018-07-12 04:37:01', 'Pago'),
(14, 7, '2018-06-07', 'B', 4, 3500.00, '2018-07-12 04:47:33', '2018-07-12 04:47:33', 'Pago'),
(15, 11, '2018-07-12', 'NCA', 2, 7500.00, '2018-07-12 16:14:58', '2018-07-12 16:14:58', 'Pago'),
(16, 11, '2018-07-12', 'A', 10, 7500.00, '2018-07-12 16:16:36', '2018-07-12 16:16:36', 'Pago'),
(17, 1, '2018-07-10', 'B', 5, 82.64, '2018-07-26 02:08:07', '2018-07-26 02:08:07', 'Pago'),
(18, 13, '2018-07-25', 'B', 6, 11682.00, '2018-07-26 03:01:03', '2018-07-26 03:01:03', 'Pago'),
(19, 13, '2018-07-30', 'NCB', 1, 11682.00, '2018-07-30 20:45:58', '2018-07-30 20:45:58', 'Pago'),
(20, 12, '2018-07-06', 'A', 11, 6000.00, '2018-07-31 01:31:09', '2018-07-31 01:31:09', 'Pago'),
(21, 14, '2018-08-06', 'B', 7, 12300.00, '2018-08-06 16:05:29', '2018-08-06 16:05:29', 'Pago'),
(22, 15, '2018-08-06', 'A', 12, 1900.00, '2018-08-06 16:15:54', '2018-08-06 16:15:54', 'Pago'),
(23, 16, '2018-08-08', 'A', 13, 19500.00, '2018-08-08 14:23:57', '2018-08-08 14:23:57', 'Pago'),
(24, 4, '2018-08-09', 'B', 8, 1200.00, '2018-08-09 16:19:51', '2018-08-09 16:19:51', 'Pago'),
(25, 4, '2018-08-09', 'NCB', 2, 1200.00, '2018-08-09 16:23:04', '2018-08-09 16:23:04', 'Pago'),
(26, 4, '2018-08-09', 'B', 9, 900.00, '2018-08-09 16:24:22', '2018-08-09 16:24:22', 'Pago'),
(27, 17, '2018-08-09', 'A', 14, 7300.00, '2018-08-09 17:54:11', '2018-08-09 17:54:11', 'Pago'),
(28, 4, '2018-08-10', 'B', 10, 600.00, '2018-08-10 16:30:02', '2018-08-10 16:30:02', 'Pago'),
(29, 4, '2018-08-15', 'NCB', 3, 900.00, '2018-08-15 21:43:52', '2018-08-15 21:43:52', 'Pago'),
(30, 4, '2018-08-15', 'B', 11, 2700.00, '2018-08-15 21:47:19', '2018-08-15 21:47:19', 'Pago'),
(31, 11, '2018-08-15', 'A', 15, 8900.00, '2018-08-15 21:54:41', '2018-08-15 21:54:41', 'Pago'),
(32, 18, '2018-08-18', 'A', 16, 12300.00, '2018-08-18 15:51:17', '2018-08-18 15:51:17', 'Pago'),
(33, 19, '2018-08-21', 'A', 17, 7650.00, '2018-08-22 01:53:03', '2018-08-22 01:53:03', 'Pago'),
(34, 20, '2018-08-23', 'A', 18, 2000.00, '2018-08-24 01:20:17', '2018-08-24 01:20:17', 'Pago'),
(35, 21, '2018-08-24', 'A', 19, 13000.00, '2018-08-24 21:49:20', '2018-08-24 21:49:20', 'Pago'),
(36, 22, '2018-08-27', 'A', 20, 6950.00, '2018-08-27 22:24:34', '2018-08-27 22:24:34', 'Pago'),
(37, 23, '2018-08-27', 'A', 21, 5400.00, '2018-08-27 23:11:27', '2018-08-27 23:11:27', 'Pago'),
(38, 24, '2018-08-28', 'A', 22, 6950.00, '2018-08-28 21:40:45', '2018-08-28 21:40:45', 'Pago'),
(39, 25, '2018-08-29', 'A', 23, 18700.00, '2018-08-29 21:43:16', '2018-08-29 21:43:16', 'Pago'),
(40, 26, '2018-08-30', 'A', 24, 3000.00, '2018-08-30 22:23:04', '2018-08-30 22:23:04', 'Pago'),
(41, 27, '2018-08-31', 'A', 25, 9650.00, '2018-08-31 16:17:20', '2018-08-31 16:17:20', 'Pago'),
(42, 28, '2018-08-31', 'A', 26, 4194.00, '2018-08-31 17:17:22', '2018-08-31 17:17:22', 'Pago'),
(43, 11, '2018-09-01', 'A', 27, 17800.00, '2018-09-01 18:24:59', '2018-09-01 18:24:59', 'Pago'),
(44, 25, '2018-09-06', 'A', 28, 9350.00, '2018-09-06 18:39:40', '2018-09-06 18:39:40', 'Pago'),
(45, 29, '2018-09-12', 'A', 29, 7800.00, '2018-09-13 02:30:59', '2018-09-13 02:30:59', 'Pago'),
(46, 30, '2018-09-18', 'A', 30, 3600.00, '2018-09-18 14:10:18', '2018-09-18 14:10:18', 'Pago'),
(47, 31, '2018-09-18', 'B', 12, 5500.00, '2018-09-18 22:08:19', '2018-09-18 22:08:19', 'Pago'),
(48, 32, '2018-09-20', 'B', 13, 6500.00, '2018-09-21 01:05:37', '2018-09-21 01:05:37', 'Pago'),
(49, 10, '2018-09-20', 'A', 31, 9650.00, '2018-09-21 01:59:34', '2018-09-21 01:59:34', 'Pago'),
(50, 33, '2018-09-24', 'A', 32, 6600.00, '2018-09-24 18:11:51', '2018-09-24 18:11:51', 'Pago'),
(51, 34, '2018-09-28', 'A', 33, 26500.00, '2018-09-28 15:04:24', '2018-09-28 15:04:24', 'Pago'),
(52, 11, '2018-10-02', 'A', 34, 9500.00, '2018-10-02 18:18:18', '2018-10-02 18:18:18', 'Pago'),
(53, 35, '2018-10-09', 'B', 14, 2500.00, '2018-10-10 01:32:23', '2018-10-10 01:32:23', 'Pago'),
(54, 36, '2018-10-11', 'A', 35, 9800.00, '2018-10-11 22:52:00', '2018-10-11 22:52:00', 'Pago'),
(55, 37, '2018-10-16', 'A', 36, 8800.00, '2018-10-16 18:22:52', '2018-10-16 18:22:52', 'Pago'),
(56, 34, '2018-10-22', 'A', 37, 9200.00, '2018-10-23 01:40:25', '2018-10-23 01:40:25', 'Pago'),
(57, 38, '2018-10-25', 'A', 38, 16400.00, '2018-10-25 16:49:09', '2018-10-25 16:49:09', 'Pago'),
(58, 39, '2018-10-26', 'A', 39, 32600.00, '2018-10-26 14:56:40', '2018-10-26 14:56:40', 'Pago'),
(59, 40, '2018-11-07', 'A', 40, 8500.00, '2018-11-07 18:35:16', '2018-11-07 18:35:16', 'Pago'),
(60, 25, '2018-11-07', 'A', 41, 8500.00, '2018-11-07 21:46:48', '2018-11-07 21:46:48', 'Pago'),
(61, 5, '2018-11-12', 'A', 42, 39200.00, '2018-11-12 18:14:37', '2018-11-12 18:14:37', 'Pago'),
(62, 11, '2018-11-15', 'A', 43, 9500.00, '2018-11-15 17:46:20', '2018-11-15 17:46:20', 'Pago'),
(63, 25, '2018-11-22', 'A', 44, 13200.00, '2018-11-22 14:08:40', '2018-11-22 14:08:40', 'Pago'),
(64, 40, '2018-11-29', 'A', 45, 4500.00, '2018-11-29 17:49:39', '2018-11-29 17:49:39', 'Pago'),
(65, 41, '2018-11-30', 'B', 15, 7200.00, '2018-11-30 17:06:43', '2018-11-30 17:06:43', 'Pago'),
(66, 33, '2018-12-03', 'A', 46, 7500.00, '2018-12-03 17:35:13', '2018-12-03 17:35:13', 'Pago'),
(67, 42, '2018-12-04', 'A', 47, 28143.00, '2018-12-04 17:54:48', '2018-12-04 17:54:48', 'Pago'),
(68, 43, '2018-12-04', 'A', 48, 7500.00, '2018-12-04 18:05:47', '2018-12-04 18:05:47', 'Pago'),
(69, 44, '2018-12-07', 'A', 49, 9680.00, '2018-12-07 15:56:37', '2018-12-07 15:56:37', 'Pago'),
(70, 45, '2018-12-10', 'A', 50, 4500.00, '2018-12-10 14:32:44', '2018-12-10 14:32:44', 'Pago'),
(71, 6, '2018-12-10', 'A', 51, 4850.00, '2018-12-11 00:44:55', '2018-12-11 00:44:55', 'Pago'),
(72, 14, '2018-12-11', 'B', 16, 4500.00, '2018-12-12 00:34:09', '2018-12-12 00:34:09', 'Pago'),
(73, 46, '2018-12-13', 'A', 52, 9700.00, '2018-12-13 16:35:02', '2018-12-13 16:35:02', 'Pago'),
(74, 11, '2018-12-17', 'A', 53, 10200.00, '2018-12-17 17:35:21', '2018-12-17 17:35:21', 'Pago'),
(75, 47, '2018-12-18', 'A', 54, 968.00, '2018-12-19 01:09:12', '2018-12-19 01:09:12', 'Pago'),
(76, 24, '2018-12-20', 'A', 55, 7000.00, '2018-12-20 22:15:55', '2018-12-20 22:15:55', 'Pago'),
(77, 4, '2018-12-20', 'B', 17, 5500.00, '2018-12-21 00:14:05', '2018-12-21 00:14:05', 'Pago'),
(78, 48, '2018-12-21', 'A', 56, 13310.00, '2018-12-21 16:04:22', '2018-12-21 16:04:22', 'Pago'),
(79, 49, '2018-12-22', 'A', 57, 2360.00, '2018-12-22 17:45:20', '2018-12-22 17:45:20', 'Pago'),
(80, 17, '2018-12-26', 'A', 58, 17500.00, '2018-12-26 17:51:38', '2018-12-26 17:51:38', 'Pago'),
(81, 50, '2018-12-28', 'A', 59, 24670.00, '2018-12-28 15:01:24', '2018-12-28 15:01:24', 'Pago'),
(82, 51, '2019-01-05', 'A', 60, 13700.00, '2019-01-05 14:43:20', '2019-01-05 14:43:20', 'Pago'),
(83, 52, '2019-01-15', 'A', 61, 9100.00, '2019-01-16 02:20:39', '2019-01-16 02:20:39', 'Pago'),
(84, 52, '2019-01-15', 'A', 62, 9100.00, '2019-01-16 02:25:26', '2019-01-16 02:25:26', 'Pago'),
(85, 52, '2019-01-16', 'NCA', 3, 9100.00, '2019-01-16 22:21:46', '2019-01-16 22:21:46', 'Pago'),
(86, 53, '2019-01-16', 'A', 63, 16520.00, '2019-01-17 01:23:49', '2019-01-17 01:23:49', 'Pago'),
(87, 11, '2019-01-17', 'A', 64, 4600.00, '2019-01-17 18:08:32', '2019-01-17 18:08:32', 'Pago'),
(88, 54, '2019-01-21', 'A', 65, 13300.00, '2019-01-22 02:33:35', '2019-01-22 02:33:35', 'Pago'),
(89, 4, '2019-01-22', 'B', 18, 8700.00, '2019-01-22 15:16:29', '2019-01-22 15:16:29', 'Pago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_alicuotas`
--

CREATE TABLE `eric_medina_alicuotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_venta` int(11) NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `alicuota` int(11) NOT NULL,
  `importe_iva` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_categorias_productos`
--

CREATE TABLE `eric_medina_categorias_productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eric_medina_categorias_productos`
--

INSERT INTO `eric_medina_categorias_productos` (`id`, `categoria`, `created_at`, `updated_at`) VALUES
(1, 'Sin categoria', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_clientes`
--

CREATE TABLE `eric_medina_clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsabilidades_iva_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eric_medina_clientes`
--

INSERT INTO `eric_medina_clientes` (`id`, `nombre`, `cuit`, `direccion`, `localidad`, `provincia`, `telefono`, `email`, `responsabilidades_iva_id`, `created_at`, `updated_at`) VALUES
(1, 'CONSUMIDOR FINAL', '0', NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_compras`
--

CREATE TABLE `eric_medina_compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `proveedor_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `pagado` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_credito_c`
--

CREATE TABLE `eric_medina_credito_c` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_detalles`
--

CREATE TABLE `eric_medina_detalles` (
  `id` int(10) UNSIGNED NOT NULL,
  `venta_id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` double(8,2) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_detalle_compras`
--

CREATE TABLE `eric_medina_detalle_compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `compra_id` int(10) UNSIGNED NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `cantidad` double(8,2) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_factura_c`
--

CREATE TABLE `eric_medina_factura_c` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `vencimiento` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `forma_pago` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `estado` enum('pago','pendiente','cancelado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_gastos`
--

CREATE TABLE `eric_medina_gastos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_marcas`
--

CREATE TABLE `eric_medina_marcas` (
  `id` int(10) UNSIGNED NOT NULL,
  `marca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarco` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eric_medina_marcas`
--

INSERT INTO `eric_medina_marcas` (`id`, `marca`, `remarco`, `created_at`, `updated_at`) VALUES
(1, 'Sin marca', 0.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_movimientos`
--

CREATE TABLE `eric_medina_movimientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `movimiento_id` int(11) NOT NULL,
  `movimiento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eric_medina_movimientos`
--

INSERT INTO `eric_medina_movimientos` (`id`, `movimiento_id`, `movimiento`, `saldo`, `created_at`, `updated_at`) VALUES
(1, 0, 'SALDO INICIAL', 0.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_pagos`
--

CREATE TABLE `eric_medina_pagos` (
  `id` int(10) UNSIGNED NOT NULL,
  `proveedor_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `pago` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_presupuestos`
--

CREATE TABLE `eric_medina_presupuestos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_productos`
--

CREATE TABLE `eric_medina_productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` double(8,2) NOT NULL,
  `stock_minimo` double(8,2) DEFAULT NULL,
  `precio_compra` double(8,2) NOT NULL,
  `precio_venta` double(8,2) NOT NULL,
  `iva_id` int(10) UNSIGNED NOT NULL,
  `proveedor_id` int(10) UNSIGNED NOT NULL,
  `categoria_producto_id` int(10) UNSIGNED NOT NULL,
  `marca_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_proveedores`
--

CREATE TABLE `eric_medina_proveedores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deuda` double(8,2) NOT NULL DEFAULT '0.00',
  `observaciones` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eric_medina_proveedores`
--

INSERT INTO `eric_medina_proveedores` (`id`, `nombre`, `cuit`, `telefono`, `email`, `deuda`, `observaciones`, `created_at`, `updated_at`) VALUES
(1, 'Sin Proveedor', NULL, NULL, NULL, 0.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_registro_actividad`
--

CREATE TABLE `eric_medina_registro_actividad` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_reg_ventas_alic`
--

CREATE TABLE `eric_medina_reg_ventas_alic` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_venta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alicuota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_iva` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_reg_ventas_cbte`
--

CREATE TABLE `eric_medina_reg_ventas_cbte` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_venta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante_hasta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percepcion_no_categorizados` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operaciones_exentas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuestos_nacionales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingresos_brutos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuestos_municipales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuestos_internos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_remitos`
--

CREATE TABLE `eric_medina_remitos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_resumen_cuenta`
--

CREATE TABLE `eric_medina_resumen_cuenta` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_saldo_favor`
--

CREATE TABLE `eric_medina_saldo_favor` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_saldo_pendiente`
--

CREATE TABLE `eric_medina_saldo_pendiente` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_servicios`
--

CREATE TABLE `eric_medina_servicios` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `iva_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eric_medina_ventas`
--

CREATE TABLE `eric_medina_ventas` (
  `id` int(10) UNSIGNED NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` enum('Pago','Pendiente','Cancelado','') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_22_193244_Categoria', 1),
(4, '2017_12_22_193538_Responsabilidades_iva', 1),
(5, '2017_12_22_193658_IVA', 1),
(6, '2017_12_22_194134_Empresas', 1),
(8, '2018_03_22_005242_Fiscal', 2),
(9, '2019_01_24_215704_TipoNotaTable', 3),
(10, '2019_01_24_215808_create_notas_table', 3),
(11, '2019_02_20_222419_create_contadors_table', 3),
(12, '2019_02_26_205427_create_empresa_contadores', 3),
(13, '2019_02_27_210213_create_actividads_table', 4),
(14, '2019_02_27_192232_create_actividads_table', 5),
(22, '2019_02_28_210116_ticket_empresa', 6),
(23, '2019_02_28_210129_ticket_contador', 6),
(24, '2019_02_28_213335_conversacion', 7),
(25, '2019_03_07_234758_create_registroips_table', 7),
(26, '2019_03_08_211332_conversacion_contador', 8),
(39, '2019_03_15_155710_create_licencias_table', 9),
(40, '2019_03_20_211954_create_periodos_table', 9),
(41, '2020_03_15_160316_create_contratos_table', 9),
(42, '2020_12_22_195118_facturas_sistema', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_alicuotas`
--

CREATE TABLE `prueba_alicuotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_venta` int(11) NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `alicuota` int(11) NOT NULL,
  `importe_iva` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_alicuotas`
--

INSERT INTO `prueba_alicuotas` (`id`, `tipo_comprobante`, `punto_venta`, `num_comprobante`, `importe_neto`, `alicuota`, `importe_iva`, `created_at`, `updated_at`) VALUES
(1, 'B', 1, 1, 101.65, 5, 21.35, '2019-01-22 22:37:36', '2019-01-22 22:37:36'),
(2, 'B', 1, 2, 1084.30, 5, 227.70, '2019-01-23 17:48:56', '2019-01-23 17:48:56'),
(3, 'B', 1, 3, 371.90, 5, 78.10, '2019-01-23 17:50:54', '2019-01-23 17:50:54'),
(4, 'B', 1, 4, 18.18, 5, 3.82, '2019-01-25 07:30:30', '2019-01-25 07:30:30'),
(5, 'B', 1, 5, 371.90, 5, 78.10, '2019-01-30 16:36:41', '2019-01-30 16:36:41'),
(6, 'B', 1, 6, 966.94, 5, 203.06, '2019-02-20 01:02:41', '2019-02-20 01:02:41'),
(7, 'B', 1, 7, 8264.46, 5, 1735.54, '2019-02-20 01:04:18', '2019-02-20 01:04:18'),
(8, 'B', 1, 8, 371.90, 5, 78.10, '2019-02-27 01:40:45', '2019-02-27 01:40:45'),
(9, 'B', 1, 9, 371.90, 5, 78.10, '2019-02-27 01:46:35', '2019-02-27 01:46:35'),
(10, 'B', 1, 10, 371.90, 5, 78.10, '2019-02-27 02:04:13', '2019-02-27 02:04:13'),
(11, 'B', 1, 11, 4090.91, 5, 859.09, '2019-03-06 23:47:15', '2019-03-06 23:47:15'),
(12, 'B', 1, 12, 371.90, 5, 78.10, '2019-03-07 04:42:13', '2019-03-07 04:42:13'),
(13, 'B', 1, 13, 371.90, 5, 78.10, '2019-03-20 00:43:15', '2019-03-20 00:43:15'),
(14, 'B', 1, 14, 371.90, 5, 78.10, '2019-03-29 00:29:00', '2019-03-29 00:29:00'),
(15, 'B', 1, 15, 371.90, 5, 78.10, '2019-03-29 00:31:33', '2019-03-29 00:31:33'),
(16, 'B', 1, 16, 371.90, 5, 78.10, '2019-03-29 00:33:01', '2019-03-29 00:33:01'),
(17, 'B', 1, 17, 371.90, 5, 78.10, '2019-03-29 00:33:54', '2019-03-29 00:33:54'),
(18, 'B', 1, 18, 371.90, 5, 78.10, '2019-03-29 00:34:33', '2019-03-29 00:34:33'),
(19, 'B', 1, 19, 371.90, 5, 78.10, '2019-03-29 00:35:23', '2019-03-29 00:35:23'),
(20, 'B', 1, 20, 371.90, 5, 78.10, '2019-03-29 00:39:25', '2019-03-29 00:39:25'),
(21, 'A', 1, 1, 371.90, 5, 78.10, '2019-04-07 02:50:26', '2019-04-07 02:50:26'),
(22, 'A', 1, 2, 1413.22, 5, 296.78, '2019-04-07 02:54:42', '2019-04-07 02:54:42'),
(23, 'B', 1, 21, 942.15, 5, 197.85, '2019-04-07 03:04:30', '2019-04-07 03:04:30'),
(24, 'A', 1, 3, 1884.30, 5, 395.70, '2019-04-07 03:29:45', '2019-04-07 03:29:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_categorias_productos`
--

CREATE TABLE `prueba_categorias_productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_categorias_productos`
--

INSERT INTO `prueba_categorias_productos` (`id`, `categoria`, `created_at`, `updated_at`) VALUES
(1, 'Sin categoria', NULL, NULL),
(2, 'Insumos', '2019-02-19 21:03:59', '2019-02-19 21:03:59'),
(3, 'Celulares', '2019-02-19 21:05:42', '2019-02-19 21:05:42'),
(4, 'Apple', '2019-02-19 21:06:34', '2019-02-19 21:06:34'),
(5, 'perifericos PC', '2019-02-19 21:08:42', '2019-02-19 21:08:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_clientes`
--

CREATE TABLE `prueba_clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsabilidades_iva_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_clientes`
--

INSERT INTO `prueba_clientes` (`id`, `nombre`, `cuit`, `direccion`, `localidad`, `provincia`, `telefono`, `email`, `responsabilidades_iva_id`, `created_at`, `updated_at`) VALUES
(1, 'CONSUMIDOR FINAL', '0', NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(2, 'Eric Medina', '23-20421759-9', 'Mariano Pascual 756', 'Santa Rosa', 'La Pampa', '15589992', 'eriic.eme@gmail.com', 1, '2019-02-19 21:18:58', '2019-04-07 03:27:42'),
(3, 'CONSUMIDOR FINAL', '37176364', NULL, NULL, NULL, NULL, NULL, 3, '2019-02-20 01:04:18', '2019-02-20 01:04:18'),
(5, 'Daniel Medina', '23-20421759-9', 'Mariano Pascual 756', 'Santa Rosa', NULL, NULL, NULL, 1, '2019-04-07 02:54:42', '2019-04-07 02:54:42'),
(6, 'Daniel Medina', '23-20421759-9', 'Mariano Pascual 756', 'Santa Rosa', NULL, NULL, NULL, 1, '2019-04-07 03:29:45', '2019-04-07 03:29:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_compras`
--

CREATE TABLE `prueba_compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `proveedor_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `pagado` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_compras`
--

INSERT INTO `prueba_compras` (`id`, `proveedor_id`, `fecha`, `tipo_comprobante`, `num_comprobante`, `total`, `pagado`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-02-19', 'B', 1, 5700.00, 5700.00, '2019-02-19 20:54:06', '2019-02-19 20:54:06'),
(2, 2, '2019-02-19', 'C', 1, 1200.00, 1200.00, '2019-02-19 21:00:47', '2019-02-19 21:00:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_credito_a`
--

CREATE TABLE `prueba_credito_a` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_credito_b`
--

CREATE TABLE `prueba_credito_b` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_detalles`
--

CREATE TABLE `prueba_detalles` (
  `id` int(10) UNSIGNED NOT NULL,
  `venta_id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` double(8,2) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_detalles`
--

INSERT INTO `prueba_detalles` (`id`, `venta_id`, `descripcion`, `cantidad`, `precio`, `total`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 1, 'asddsa', 1.00, 123.00, 123.00, 'producto', '2019-01-22 22:37:36', '2019-01-22 22:37:36'),
(2, 2, 'asdasdasd', 1.00, 1312.00, 1312.00, 'producto', '2019-01-23 17:48:56', '2019-01-23 17:48:56'),
(3, 3, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-01-23 17:50:54', '2019-01-23 17:50:54'),
(4, 4, 'Nxkdbdj', 1.00, 22.00, 22.00, 'producto', '2019-01-25 07:30:30', '2019-01-25 07:30:30'),
(5, 5, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-01-30 16:36:42', '2019-01-30 16:36:42'),
(6, 6, 'iphone X 56 GB', 1.00, 600.00, 600.00, 'producto', '2019-02-20 01:02:41', '2019-02-20 01:02:41'),
(7, 6, 'Teclado Genius', 1.00, 570.00, 570.00, 'producto', '2019-02-20 01:02:41', '2019-02-20 01:02:41'),
(8, 7, 'iphone X 56 GB', 1.00, 10000.00, 10000.00, 'producto', '2019-02-20 01:04:18', '2019-02-20 01:04:18'),
(9, 8, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-02-27 01:40:45', '2019-02-27 01:40:45'),
(10, 9, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-02-27 01:46:35', '2019-02-27 01:46:35'),
(11, 10, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-02-27 02:04:13', '2019-02-27 02:04:13'),
(12, 11, 'algo', 11.00, 450.00, 4950.00, 'producto', '2019-03-06 23:47:15', '2019-03-06 23:47:15'),
(13, 12, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-03-07 04:42:13', '2019-03-07 04:42:13'),
(14, 13, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-03-20 00:43:15', '2019-03-20 00:43:15'),
(15, 14, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-03-29 00:29:00', '2019-03-29 00:29:00'),
(16, 15, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-03-29 00:31:33', '2019-03-29 00:31:33'),
(17, 16, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-03-29 00:33:01', '2019-03-29 00:33:01'),
(18, 17, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-03-29 00:33:54', '2019-03-29 00:33:54'),
(19, 18, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-03-29 00:34:33', '2019-03-29 00:34:33'),
(20, 19, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-03-29 00:35:23', '2019-03-29 00:35:23'),
(21, 20, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-03-29 00:39:25', '2019-03-29 00:39:25'),
(22, 21, 'Teclado Genius', 1.00, 570.00, 570.00, 'producto', '2019-04-04 23:34:54', '2019-04-04 23:34:54'),
(23, 21, 'Cartuchos Epson X231XX', 1.00, 100.00, 100.00, 'producto', '2019-04-04 23:34:54', '2019-04-04 23:34:54'),
(24, 22, 'algo', 1.00, 450.00, 450.00, 'producto', '2019-04-07 02:50:27', '2019-04-07 02:50:27'),
(25, 23, 'Teclado Genius', 3.00, 570.00, 1710.00, 'producto', '2019-04-07 02:54:42', '2019-04-07 02:54:42'),
(26, 24, 'Teclado Genius', 1.00, 570.00, 570.00, 'producto', '2019-04-07 03:04:30', '2019-04-07 03:04:30'),
(27, 24, 'Teclado Genius', 1.00, 570.00, 570.00, 'producto', '2019-04-07 03:04:30', '2019-04-07 03:04:30'),
(28, 25, 'Teclado Genius', 4.00, 570.00, 2280.00, 'producto', '2019-04-07 03:29:45', '2019-04-07 03:29:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_detalle_compras`
--

CREATE TABLE `prueba_detalle_compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `compra_id` int(10) UNSIGNED NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `cantidad` double(8,2) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_detalle_compras`
--

INSERT INTO `prueba_detalle_compras` (`id`, `compra_id`, `producto_id`, `cantidad`, `precio`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 19.00, 300.00, 5700.00, '2019-02-19 20:54:06', '2019-02-19 20:54:06'),
(2, 2, 1, 4.00, 300.00, 1200.00, '2019-02-19 21:00:47', '2019-02-19 21:00:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_factura_a`
--

CREATE TABLE `prueba_factura_a` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `vencimiento` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `forma_pago` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL,
  `estado` enum('pago','pendiente','cancelado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_factura_a`
--

INSERT INTO `prueba_factura_a` (`id`, `fecha`, `vencimiento`, `total`, `cliente_id`, `forma_pago`, `cae`, `fecha_vencimiento`, `tipo_doc`, `nro_doc`, `cliente`, `importe_neto`, `percepcion_no_categorizados`, `operaciones_exentas`, `impuestos_nacionales`, `ingresos_brutos`, `impuestos_municipales`, `impuestos_internos`, `codigo_moneda`, `tipo_cambio`, `cantidad_alicuotas`, `codigo_operacion`, `otros_tributos`, `estado`, `created_at`, `updated_at`) VALUES
(1, '2019-04-06', '2019-05-06', 450.00, 4, 'contado', '69144738394354', '2019-05-05', '80', '23204217599', 'Daniel Medina', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-04-07 02:50:26', '2019-04-07 02:50:26'),
(2, '2019-04-06', '2019-05-06', 1710.00, 5, 'contado', '69144738394427', '2019-05-05', '80', '23204217599', 'Daniel Medina', 1413.22, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-04-07 02:54:42', '2019-04-07 02:54:42'),
(3, '2019-04-07', '2019-05-07', 2280.00, 6, 'contado', '69144738394825', '2019-05-06', '80', '23204217599', 'Daniel Medina', 1884.30, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-04-07 03:29:45', '2019-04-07 03:29:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_factura_b`
--

CREATE TABLE `prueba_factura_b` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `vencimiento` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `forma_pago` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` double(8,2) NOT NULL,
  `percepcion_no_categorizados` double(8,2) NOT NULL,
  `operaciones_exentas` double(8,2) NOT NULL,
  `impuestos_nacionales` double(8,2) NOT NULL,
  `ingresos_brutos` double(8,2) NOT NULL,
  `impuestos_municipales` double(8,2) NOT NULL,
  `impuestos_internos` double(8,2) NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` int(11) NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` double(8,2) NOT NULL,
  `estado` enum('pago','pendiente','cancelado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_factura_b`
--

INSERT INTO `prueba_factura_b` (`id`, `fecha`, `vencimiento`, `total`, `cliente_id`, `forma_pago`, `cae`, `fecha_vencimiento`, `tipo_doc`, `nro_doc`, `cliente`, `importe_neto`, `percepcion_no_categorizados`, `operaciones_exentas`, `impuestos_nacionales`, `ingresos_brutos`, `impuestos_municipales`, `impuestos_internos`, `codigo_moneda`, `tipo_cambio`, `cantidad_alicuotas`, `codigo_operacion`, `otros_tributos`, `estado`, `created_at`, `updated_at`) VALUES
(1, '2019-01-22', '2019-02-22', 123.00, 1, 'contado', '69044722591739', '2019-02-20', '99', '', 'CONSUMIDOR FINAL', 101.65, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-01-22 22:37:36', '2019-01-22 22:37:36'),
(2, '2019-01-23', '2019-02-23', 1312.00, 1, 'contado', '69044722871496', '2019-02-21', '99', '', 'CONSUMIDOR FINAL', 1084.30, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-01-23 17:48:56', '2019-01-23 17:48:56'),
(3, '2019-01-23', '2019-02-23', 450.00, 1, 'contado', '69044722874533', '2019-02-21', '99', '', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-01-23 17:50:54', '2019-01-23 17:50:54'),
(4, '2019-01-25', '2019-02-25', 22.00, 1, 'contado', '69044723543902', '2019-02-23', '99', '', 'CONSUMIDOR FINAL', 18.18, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-01-25 07:30:30', '2019-01-25 07:30:30'),
(5, '2019-01-30', '2019-03-02', 450.00, 1, 'contado', '69054725007645', '2019-02-28', '99', '', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-01-30 16:36:41', '2019-01-30 16:36:41'),
(6, '2019-02-19', '2019-03-19', 1170.00, 1, 'contado', '69084728663114', '2019-03-20', '99', '', 'CONSUMIDOR FINAL', 966.94, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-02-20 01:02:41', '2019-02-20 01:02:41'),
(7, '2019-02-19', '2019-03-19', 10000.00, 3, 'contado', '69084728663290', '2019-03-20', '96', '37176364', 'CONSUMIDOR FINAL', 8264.46, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-02-20 01:04:18', '2019-02-20 01:04:18'),
(8, '2019-02-26', '2019-03-26', 450.00, 1, 'contado', '69094729585708', '2019-03-27', '99', '0', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-02-27 01:40:45', '2019-02-27 01:40:45'),
(9, '2019-02-26', '2019-03-26', 450.00, 1, 'contado', '69094729587491', '2019-03-27', '99', '', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-02-27 01:46:35', '2019-02-27 01:46:35'),
(10, '2019-02-26', '2019-03-26', 450.00, 1, 'contado', '69094729591095', '2019-03-27', '99', '', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-02-27 02:04:13', '2019-02-27 02:04:13'),
(11, '2019-03-06', '2019-04-06', 4950.00, 1, 'contado', '69104731901108', '2019-04-04', '99', '', 'CONSUMIDOR FINAL', 4090.91, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-03-06 23:47:14', '2019-03-06 23:47:14'),
(12, '2019-03-07', '2019-04-07', 450.00, 1, 'contado', '69104731943699', '2019-04-05', '99', '', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-03-07 04:42:13', '2019-03-07 04:42:13'),
(13, '2019-03-19', '2019-04-19', 450.00, 1, 'contado', '69124733615165', '2019-04-17', '99', '0', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-03-20 00:43:15', '2019-03-20 00:43:15'),
(14, '2019-03-28', '2019-04-28', 450.00, 1, 'contado', '69134736820197', '2019-04-26', '99', '', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-03-29 00:29:00', '2019-03-29 00:29:00'),
(15, '2019-03-28', '2019-04-28', 450.00, 1, 'contado', '69134736823323', '2019-04-26', '99', '', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-03-29 00:31:33', '2019-03-29 00:31:33'),
(16, '2019-03-28', '2019-04-28', 450.00, 1, 'contado', '69134736823763', '2019-04-26', '99', '', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-03-29 00:33:01', '2019-03-29 00:33:01'),
(17, '2019-03-28', '2019-04-28', 450.00, 1, 'contado', '69134736823983', '2019-04-26', '99', '', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-03-29 00:33:54', '2019-03-29 00:33:54'),
(18, '2019-03-28', '2019-04-28', 450.00, 1, 'contado', '69134736824159', '2019-04-26', '99', '', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-03-29 00:34:33', '2019-03-29 00:34:33'),
(19, '2019-03-28', '2019-04-28', 450.00, 1, 'contado', '69134736824442', '2019-04-26', '99', '', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-03-29 00:35:23', '2019-03-29 00:35:23'),
(20, '2019-03-28', '2019-04-28', 450.00, 1, 'contado', '69134736825647', '2019-04-26', '99', '', 'CONSUMIDOR FINAL', 371.90, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-03-29 00:39:25', '2019-03-29 00:39:25'),
(21, '2019-04-07', '2019-05-07', 1140.00, 1, 'contado', '69144738394574', '2019-05-06', '99', '', 'CONSUMIDOR FINAL', 942.15, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'PES', '1', 1, ' ', 0.00, 'pago', '2019-04-07 03:04:30', '2019-04-07 03:04:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_gastos`
--

CREATE TABLE `prueba_gastos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_gastos`
--

INSERT INTO `prueba_gastos` (`id`, `descripcion`, `fecha`, `total`, `created_at`, `updated_at`) VALUES
(1, 'Alquiler', '2019-02-19', 9000.00, '2019-02-19 21:02:05', '2019-02-19 21:02:05'),
(2, 'Alquiler', '2019-02-19', 9000.00, '2019-02-19 21:02:10', '2019-02-19 21:02:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_marcas`
--

CREATE TABLE `prueba_marcas` (
  `id` int(10) UNSIGNED NOT NULL,
  `marca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarco` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_marcas`
--

INSERT INTO `prueba_marcas` (`id`, `marca`, `remarco`, `created_at`, `updated_at`) VALUES
(1, 'Sin marca', 0.00, NULL, NULL),
(2, 'Genius', 10.00, '2019-02-19 21:11:09', '2019-02-19 21:11:09'),
(3, 'Epson', 12.00, '2019-02-19 21:11:40', '2019-02-19 21:11:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_movimientos`
--

CREATE TABLE `prueba_movimientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `movimiento_id` int(11) NOT NULL,
  `movimiento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_movimientos`
--

INSERT INTO `prueba_movimientos` (`id`, `movimiento_id`, `movimiento`, `saldo`, `created_at`, `updated_at`) VALUES
(1, 0, 'SALDO INICIAL', 0.00, NULL, NULL),
(2, 1, 'VENTA', 123.00, '2019-01-22 22:37:36', '2019-01-22 22:37:36'),
(3, 2, 'VENTA', 1435.00, '2019-01-23 17:48:56', '2019-01-23 17:48:56'),
(4, 3, 'VENTA', 1885.00, '2019-01-23 17:50:54', '2019-01-23 17:50:54'),
(5, 4, 'VENTA', 1907.00, '2019-01-25 07:30:30', '2019-01-25 07:30:30'),
(6, 5, 'VENTA', 2357.00, '2019-01-30 16:36:42', '2019-01-30 16:36:42'),
(7, 1, 'COMPRA', -3343.00, '2019-02-19 20:54:06', '2019-02-19 20:54:06'),
(8, 2, 'COMPRA', -4543.00, '2019-02-19 21:00:47', '2019-02-19 21:00:47'),
(9, 1, 'GASTO', -9000.00, '2019-02-19 21:02:05', '2019-02-19 21:02:05'),
(10, 2, 'GASTO', -9000.00, '2019-02-19 21:02:10', '2019-02-19 21:02:10'),
(11, 6, 'VENTA', -7830.00, '2019-02-20 01:02:41', '2019-02-20 01:02:41'),
(12, 7, 'VENTA', 2170.00, '2019-02-20 01:04:18', '2019-02-20 01:04:18'),
(13, 8, 'VENTA', 2620.00, '2019-02-27 01:40:45', '2019-02-27 01:40:45'),
(14, 9, 'VENTA', 3070.00, '2019-02-27 01:46:35', '2019-02-27 01:46:35'),
(15, 10, 'VENTA', 3520.00, '2019-02-27 02:04:13', '2019-02-27 02:04:13'),
(16, 11, 'VENTA', 8470.00, '2019-03-06 23:47:15', '2019-03-06 23:47:15'),
(17, 12, 'VENTA', 8920.00, '2019-03-07 04:42:13', '2019-03-07 04:42:13'),
(18, 13, 'VENTA', 9370.00, '2019-03-20 00:43:15', '2019-03-20 00:43:15'),
(19, 14, 'VENTA', 9820.00, '2019-03-29 00:29:00', '2019-03-29 00:29:00'),
(20, 15, 'VENTA', 10270.00, '2019-03-29 00:31:33', '2019-03-29 00:31:33'),
(21, 16, 'VENTA', 10720.00, '2019-03-29 00:33:01', '2019-03-29 00:33:01'),
(22, 17, 'VENTA', 11170.00, '2019-03-29 00:33:54', '2019-03-29 00:33:54'),
(23, 18, 'VENTA', 11620.00, '2019-03-29 00:34:33', '2019-03-29 00:34:33'),
(24, 19, 'VENTA', 12070.00, '2019-03-29 00:35:23', '2019-03-29 00:35:23'),
(25, 20, 'VENTA', 12520.00, '2019-03-29 00:39:25', '2019-03-29 00:39:25'),
(26, 21, 'VENTA', 13190.00, '2019-04-04 23:34:54', '2019-04-04 23:34:54'),
(27, 22, 'VENTA', 13640.00, '2019-04-07 02:50:26', '2019-04-07 02:50:26'),
(28, 23, 'VENTA', 15350.00, '2019-04-07 02:54:42', '2019-04-07 02:54:42'),
(29, 24, 'VENTA', 16490.00, '2019-04-07 03:04:30', '2019-04-07 03:04:30'),
(30, 25, 'VENTA', 18770.00, '2019-04-07 03:29:45', '2019-04-07 03:29:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_pagos`
--

CREATE TABLE `prueba_pagos` (
  `id` int(10) UNSIGNED NOT NULL,
  `proveedor_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `pago` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_presupuestos`
--

CREATE TABLE `prueba_presupuestos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_productos`
--

CREATE TABLE `prueba_productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` double(8,2) NOT NULL,
  `stock_minimo` double(8,2) DEFAULT NULL,
  `precio_compra` double(8,2) NOT NULL,
  `precio_venta` double(8,2) NOT NULL,
  `iva_id` int(10) UNSIGNED NOT NULL,
  `proveedor_id` int(10) UNSIGNED NOT NULL,
  `categoria_producto_id` int(10) UNSIGNED NOT NULL,
  `marca_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_productos`
--

INSERT INTO `prueba_productos` (`id`, `codigo`, `producto`, `stock`, `stock_minimo`, `precio_compra`, `precio_venta`, `iva_id`, `proveedor_id`, `categoria_producto_id`, `marca_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'algo', -2.00, 0.00, 300.00, 450.00, 5, 1, 1, 1, '2019-01-23 17:50:26', '2019-04-07 02:50:27'),
(2, '2', 'Cartuchos Epson X231XX', 9.00, 0.00, 0.00, 0.00, 5, 2, 1, 1, '2019-02-19 21:03:41', '2019-04-04 23:34:54'),
(3, '3', 'Teclado Genius', -1.00, 1.00, 500.00, 570.00, 5, 2, 5, 2, '2019-02-19 21:07:30', '2019-04-07 03:29:45'),
(4, '10', 'iphone X 56 GB', 13.00, 0.00, 0.00, 0.00, 5, 2, 4, 1, '2019-02-19 21:08:20', '2019-02-20 01:04:18'),
(5, '4', 'Mouse', 10.00, 1.00, 120.00, 150.00, 5, 2, 5, 2, '2019-02-19 21:13:47', '2019-02-19 21:13:47'),
(6, NULL, 'sdasdasd', 1.00, 0.00, 0.00, 0.00, 5, 2, 4, 3, '2019-03-19 21:11:12', '2019-03-19 21:11:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_proveedores`
--

CREATE TABLE `prueba_proveedores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deuda` double(8,2) NOT NULL DEFAULT '0.00',
  `observaciones` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_proveedores`
--

INSERT INTO `prueba_proveedores` (`id`, `nombre`, `cuit`, `telefono`, `email`, `deuda`, `observaciones`, `created_at`, `updated_at`) VALUES
(1, 'Sin Proveedor', NULL, NULL, NULL, 0.00, NULL, NULL, '2019-02-19 20:54:06'),
(2, 'Lautaro Alvarez', '20-37397199-6', '2954363688', 't_agu10@hotmail.com', 0.00, 'insumos de impresoras', '2019-02-19 20:59:50', '2019-02-19 21:00:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_registro_actividad`
--

CREATE TABLE `prueba_registro_actividad` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_reg_ventas_alic`
--

CREATE TABLE `prueba_reg_ventas_alic` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_venta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alicuota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_iva` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_reg_ventas_alic`
--

INSERT INTO `prueba_reg_ventas_alic` (`id`, `tipo_comprobante`, `punto_venta`, `num_comprobante`, `importe_neto`, `alicuota`, `importe_iva`, `created_at`, `updated_at`) VALUES
(1, '006', '00001', '00000000000000000001', '000000000010165', ' 21%', '000000000002135', '2019-01-22 22:37:36', '2019-01-22 22:37:36'),
(2, '006', '00001', '00000000000000000002', '000000000108430', ' 21%', '000000000022770', '2019-01-23 17:48:56', '2019-01-23 17:48:56'),
(3, '006', '00001', '00000000000000000003', '000000000037190', ' 21%', '000000000007810', '2019-01-23 17:50:54', '2019-01-23 17:50:54'),
(4, '006', '00001', '00000000000000000004', '000000000001818', ' 21%', '000000000000382', '2019-01-25 07:30:30', '2019-01-25 07:30:30'),
(5, '006', '00001', '00000000000000000005', '000000000037190', ' 21%', '000000000007810', '2019-01-30 16:36:41', '2019-01-30 16:36:41'),
(6, '006', '00001', '00000000000000000006', '000000000096694', ' 21%', '000000000020306', '2019-02-20 01:02:41', '2019-02-20 01:02:41'),
(7, '006', '00001', '00000000000000000007', '000000000826446', ' 21%', '000000000173554', '2019-02-20 01:04:18', '2019-02-20 01:04:18'),
(8, '006', '00001', '00000000000000000008', '000000000037190', ' 21%', '000000000007810', '2019-02-27 01:40:45', '2019-02-27 01:40:45'),
(9, '006', '00001', '00000000000000000009', '000000000037190', ' 21%', '000000000007810', '2019-02-27 01:46:35', '2019-02-27 01:46:35'),
(10, '006', '00001', '00000000000000000010', '000000000037190', ' 21%', '000000000007810', '2019-02-27 02:04:13', '2019-02-27 02:04:13'),
(11, '006', '00001', '00000000000000000011', '000000000409091', ' 21%', '000000000085909', '2019-03-06 23:47:15', '2019-03-06 23:47:15'),
(12, '006', '00001', '00000000000000000012', '000000000037190', ' 21%', '000000000007810', '2019-03-07 04:42:13', '2019-03-07 04:42:13'),
(13, '006', '00001', '00000000000000000013', '000000000037190', ' 21%', '000000000007810', '2019-03-20 00:43:15', '2019-03-20 00:43:15'),
(14, '006', '00001', '00000000000000000014', '000000000037190', ' 21%', '000000000007810', '2019-03-29 00:29:00', '2019-03-29 00:29:00'),
(15, '006', '00001', '00000000000000000015', '000000000037190', ' 21%', '000000000007810', '2019-03-29 00:31:33', '2019-03-29 00:31:33'),
(16, '006', '00001', '00000000000000000016', '000000000037190', ' 21%', '000000000007810', '2019-03-29 00:33:01', '2019-03-29 00:33:01'),
(17, '006', '00001', '00000000000000000017', '000000000037190', ' 21%', '000000000007810', '2019-03-29 00:33:54', '2019-03-29 00:33:54'),
(18, '006', '00001', '00000000000000000018', '000000000037190', ' 21%', '000000000007810', '2019-03-29 00:34:33', '2019-03-29 00:34:33'),
(19, '006', '00001', '00000000000000000019', '000000000037190', ' 21%', '000000000007810', '2019-03-29 00:35:23', '2019-03-29 00:35:23'),
(20, '006', '00001', '00000000000000000020', '000000000037190', ' 21%', '000000000007810', '2019-03-29 00:39:25', '2019-03-29 00:39:25'),
(21, '001', '00001', '00000000000000000001', '000000000037190', ' 21%', '000000000007810', '2019-04-07 02:50:26', '2019-04-07 02:50:26'),
(22, '001', '00001', '00000000000000000002', '000000000141322', ' 21%', '000000000029678', '2019-04-07 02:54:42', '2019-04-07 02:54:42'),
(23, '006', '00001', '00000000000000000021', '000000000094215', ' 21%', '000000000019785', '2019-04-07 03:04:30', '2019-04-07 03:04:30'),
(24, '001', '00001', '00000000000000000003', '000000000188430', ' 21%', '000000000039570', '2019-04-07 03:29:45', '2019-04-07 03:29:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_reg_ventas_cbte`
--

CREATE TABLE `prueba_reg_ventas_cbte` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_venta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante_hasta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe_neto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percepcion_no_categorizados` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operaciones_exentas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuestos_nacionales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingresos_brutos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuestos_municipales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impuestos_internos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_alicuotas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_operacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_tributos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_reg_ventas_cbte`
--

INSERT INTO `prueba_reg_ventas_cbte` (`id`, `fecha`, `tipo_comprobante`, `punto_venta`, `num_comprobante`, `num_comprobante_hasta`, `tipo_doc`, `nro_doc`, `cliente`, `total`, `importe_neto`, `percepcion_no_categorizados`, `operaciones_exentas`, `impuestos_nacionales`, `ingresos_brutos`, `impuestos_municipales`, `impuestos_internos`, `codigo_moneda`, `tipo_cambio`, `cantidad_alicuotas`, `codigo_operacion`, `otros_tributos`, `created_at`, `updated_at`) VALUES
(1, '20190122', '006', '00001', '00000000000000000001', '00000000000000000001', '99', '                    ', 'CONSUMIDOR FINAL              ', '000000000000123', '000000000010165', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-22 22:37:36', '2019-01-22 22:37:36'),
(2, '20190123', '006', '00001', '00000000000000000002', '00000000000000000002', '99', '                    ', 'CONSUMIDOR FINAL              ', '000000000001312', '000000000108430', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-23 17:48:56', '2019-01-23 17:48:56'),
(3, '20190123', '006', '00001', '00000000000000000003', '00000000000000000003', '99', '                    ', 'CONSUMIDOR FINAL              ', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-23 17:50:54', '2019-01-23 17:50:54'),
(4, '20190125', '006', '00001', '00000000000000000004', '00000000000000000004', '99', '                    ', 'CONSUMIDOR FINAL              ', '000000000000022', '000000000001818', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-25 07:30:30', '2019-01-25 07:30:30'),
(5, '20190130', '006', '00001', '00000000000000000005', '00000000000000000005', '99', '                    ', 'CONSUMIDOR FINAL              ', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-01-30 16:36:41', '2019-01-30 16:36:41'),
(6, '20190219', '006', '00001', '00000000000000000006', '00000000000000000006', '99', '                    ', 'CONSUMIDOR FINAL              ', '000000000001170', '000000000096694', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-02-20 01:02:41', '2019-02-20 01:02:41'),
(7, '20190219', '006', '00001', '00000000000000000007', '00000000000000000007', '96', '            37176364', 'CONSUMIDOR FINAL              ', '000000000010000', '000000000826446', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-02-20 01:04:18', '2019-02-20 01:04:18'),
(8, '20190226', '006', '00001', '00000000000000000008', '00000000000000000008', '99', '                   0', 'CONSUMIDOR FINAL              ', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-02-27 01:40:45', '2019-02-27 01:40:45'),
(9, '20190226', '006', '00001', '00000000000000000009', '00000000000000000009', '99', '                    ', 'CONSUMIDOR FINAL              ', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-02-27 01:46:35', '2019-02-27 01:46:35'),
(10, '20190226', '006', '00001', '00000000000000000010', '00000000000000000010', '99', '                    ', 'CONSUMIDOR FINAL              ', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-02-27 02:04:13', '2019-02-27 02:04:13'),
(11, '20190306', '006', '00001', '00000000000000000011', '00000000000000000011', '99', '                    ', 'CONSUMIDOR FINAL              ', '000000000004950', '000000000409091', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-03-06 23:47:15', '2019-03-06 23:47:15'),
(12, '20190307', '006', '00001', '00000000000000000012', '00000000000000000012', '99', '                    ', 'CONSUMIDOR FINAL              ', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-03-07 04:42:13', '2019-03-07 04:42:13'),
(13, '20190319', '006', '00001', '00000000000000000013', '00000000000000000013', '99', '                   0', 'CONSUMIDOR FINAL              ', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-03-20 00:43:15', '2019-03-20 00:43:15'),
(14, '20190328', '006', '00001', '00000000000000000014', '00000000000000000014', '99', '                    ', '              CONSUMIDOR FINAL', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-03-29 00:29:00', '2019-03-29 00:29:00'),
(15, '20190328', '006', '00001', '00000000000000000015', '00000000000000000015', '99', '                    ', '              CONSUMIDOR FINAL', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-03-29 00:31:33', '2019-03-29 00:31:33'),
(16, '20190328', '006', '00001', '00000000000000000016', '00000000000000000016', '99', '                    ', '              CONSUMIDOR FINAL', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-03-29 00:33:01', '2019-03-29 00:33:01'),
(17, '20190328', '006', '00001', '00000000000000000017', '00000000000000000017', '99', '                    ', '              CONSUMIDOR FINAL', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-03-29 00:33:54', '2019-03-29 00:33:54'),
(18, '20190328', '006', '00001', '00000000000000000018', '00000000000000000018', '99', '                    ', '              CONSUMIDOR FINAL', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-03-29 00:34:33', '2019-03-29 00:34:33'),
(19, '20190328', '006', '00001', '00000000000000000019', '00000000000000000019', '99', '                    ', '              CONSUMIDOR FINAL', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-03-29 00:35:23', '2019-03-29 00:35:23'),
(20, '20190328', '006', '00001', '00000000000000000020', '00000000000000000020', '99', '                    ', '              CONSUMIDOR FINAL', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-03-29 00:39:25', '2019-03-29 00:39:25'),
(21, '20190406', '001', '00001', '00000000000000000001', '00000000000000000001', '80', '         23204217599', 'Daniel Medina                 ', '000000000000450', '000000000037190', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-04-07 02:50:26', '2019-04-07 02:50:26'),
(22, '20190406', '001', '00001', '00000000000000000002', '00000000000000000002', '80', '         23204217599', 'Daniel Medina                 ', '000000000001710', '000000000141322', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-04-07 02:54:42', '2019-04-07 02:54:42'),
(23, '20190407', '006', '00001', '00000000000000000021', '00000000000000000021', '99', '                    ', '              CONSUMIDOR FINAL', '000000000001140', '000000000094215', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-04-07 03:04:30', '2019-04-07 03:04:30'),
(24, '20190407', '001', '00001', '00000000000000000003', '00000000000000000003', '80', '         23204217599', 'Daniel Medina                 ', '000000000002280', '000000000188430', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', '000000000000000', 'PES', '000000000000100', '1', ' ', '000000000000000', '2019-04-07 03:29:45', '2019-04-07 03:29:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_remitos`
--

CREATE TABLE `prueba_remitos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_remitos`
--

INSERT INTO `prueba_remitos` (`id`, `fecha`, `total`, `cliente_id`, `created_at`, `updated_at`) VALUES
(1, '2019-04-04', 670.00, 2, '2019-04-04 23:34:54', '2019-04-04 23:34:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_resumen_cuenta`
--

CREATE TABLE `prueba_resumen_cuenta` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_saldo_favor`
--

CREATE TABLE `prueba_saldo_favor` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_saldo_pendiente`
--

CREATE TABLE `prueba_saldo_pendiente` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_servicios`
--

CREATE TABLE `prueba_servicios` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `iva_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_servicios`
--

INSERT INTO `prueba_servicios` (`id`, `descripcion`, `precio`, `iva_id`, `created_at`, `updated_at`) VALUES
(1, 'Mantenimiento software', 2000.00, 4, '2019-04-10 00:20:24', '2019-04-10 00:20:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_ventas`
--

CREATE TABLE `prueba_ventas` (
  `id` int(10) UNSIGNED NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `tipo_comprobante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `estado` enum('pago','pendiente','cancelado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_ventas`
--

INSERT INTO `prueba_ventas` (`id`, `cliente_id`, `fecha`, `tipo_comprobante`, `num_comprobante`, `total`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-01-22', 'B', 1, 123.00, 'pago', '2019-01-22 22:37:36', '2019-01-22 22:37:36'),
(2, 1, '2019-01-23', 'B', 2, 1312.00, 'pago', '2019-01-23 17:48:56', '2019-01-23 17:48:56'),
(3, 1, '2019-01-23', 'B', 3, 450.00, 'pago', '2019-01-23 17:50:54', '2019-01-23 17:50:54'),
(4, 1, '2019-01-25', 'B', 4, 22.00, 'pago', '2019-01-25 07:30:30', '2019-01-25 07:30:30'),
(5, 1, '2019-01-30', 'B', 5, 450.00, 'pago', '2019-01-30 16:36:41', '2019-01-30 16:36:41'),
(6, 1, '2019-02-19', 'B', 6, 1170.00, 'pago', '2019-02-20 01:02:41', '2019-02-20 01:02:41'),
(7, 3, '2019-02-19', 'B', 7, 10000.00, 'pago', '2019-02-20 01:04:18', '2019-02-20 01:04:18'),
(8, 1, '2019-02-26', 'B', 8, 450.00, 'pago', '2019-02-27 01:40:45', '2019-02-27 01:40:45'),
(9, 1, '2019-02-26', 'B', 9, 450.00, 'pago', '2019-02-27 01:46:35', '2019-02-27 01:46:35'),
(10, 1, '2019-02-26', 'B', 10, 450.00, 'pago', '2019-02-27 02:04:13', '2019-02-27 02:04:13'),
(11, 1, '2019-03-06', 'B', 11, 4950.00, 'pago', '2019-03-06 23:47:14', '2019-03-06 23:47:14'),
(12, 1, '2019-03-07', 'B', 12, 450.00, 'pago', '2019-03-07 04:42:13', '2019-03-07 04:42:13'),
(13, 1, '2019-03-19', 'B', 13, 450.00, 'pago', '2019-03-20 00:43:15', '2019-03-20 00:43:15'),
(14, 1, '2019-03-28', 'B', 14, 450.00, 'pago', '2019-03-29 00:29:00', '2019-03-29 00:29:00'),
(15, 1, '2019-03-28', 'B', 15, 450.00, 'pago', '2019-03-29 00:31:33', '2019-03-29 00:31:33'),
(16, 1, '2019-03-28', 'B', 16, 450.00, 'pago', '2019-03-29 00:33:01', '2019-03-29 00:33:01'),
(17, 1, '2019-03-28', 'B', 17, 450.00, 'pago', '2019-03-29 00:33:54', '2019-03-29 00:33:54'),
(18, 1, '2019-03-28', 'B', 18, 450.00, 'pago', '2019-03-29 00:34:33', '2019-03-29 00:34:33'),
(19, 1, '2019-03-28', 'B', 19, 450.00, 'pago', '2019-03-29 00:35:23', '2019-03-29 00:35:23'),
(20, 1, '2019-03-28', 'B', 20, 450.00, 'pago', '2019-03-29 00:39:25', '2019-03-29 00:39:25'),
(21, 2, '2019-04-04', 'A', 1, 670.00, 'pago', '2019-04-04 23:34:54', '2019-04-04 23:34:54'),
(22, 3, '2019-04-06', 'A', 1, 450.00, 'pago', '2019-04-07 02:50:26', '2019-04-07 02:50:26'),
(23, 5, '2019-04-06', 'A', 2, 1710.00, 'pago', '2019-04-07 02:54:42', '2019-04-07 02:54:42'),
(24, 1, '2019-04-07', 'B', 21, 1140.00, 'pago', '2019-04-07 03:04:30', '2019-04-07 03:04:30'),
(25, 6, '2019-04-07', 'A', 3, 2280.00, 'pago', '2019-04-07 03:29:45', '2019-04-07 03:29:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `01actividades`
--
ALTER TABLE `01actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `01administradores`
--
ALTER TABLE `01administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `01categorias`
--
ALTER TABLE `01categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `01contadores`
--
ALTER TABLE `01contadores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `01contadores_dni_unique` (`dni`),
  ADD UNIQUE KEY `01contadores_email_unique` (`email`);

--
-- Indices de la tabla `01contratos`
--
ALTER TABLE `01contratos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `01contratos_empresa_id_foreign` (`empresa_id`),
  ADD KEY `01contratos_licencia_id_foreign` (`licencia_id`),
  ADD KEY `01contratos_periodo_id_foreign` (`periodo_id`);

--
-- Indices de la tabla `01conversacion`
--
ALTER TABLE `01conversacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `01conversacion_ticket_id_foreign` (`ticket_id`);

--
-- Indices de la tabla `01conversacion_contador`
--
ALTER TABLE `01conversacion_contador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `01conversacion_contador_ticket_id_foreign` (`ticket_id`);

--
-- Indices de la tabla `01empresas`
--
ALTER TABLE `01empresas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresas_responsabilidad_iva_id_foreign` (`responsabilidad_iva_id`),
  ADD KEY `empresas_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `01empresas_contadores`
--
ALTER TABLE `01empresas_contadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `01empresas_contadores_empresa_id_foreign` (`empresa_id`),
  ADD KEY `01empresas_contadores_contador_id_foreign` (`contador_id`);

--
-- Indices de la tabla `01facturas_sistema`
--
ALTER TABLE `01facturas_sistema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `01facturas_sistema_contrato_id_foreign` (`contrato_id`);

--
-- Indices de la tabla `01fiscal`
--
ALTER TABLE `01fiscal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fiscal_empresa_id_foreign` (`empresa_id`);

--
-- Indices de la tabla `01licencias`
--
ALTER TABLE `01licencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `01periodos`
--
ALTER TABLE `01periodos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `01registroips`
--
ALTER TABLE `01registroips`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `01responsabilidades_iva`
--
ALTER TABLE `01responsabilidades_iva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `01tickets_contador`
--
ALTER TABLE `01tickets_contador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `01tickets_empresa`
--
ALTER TABLE `01tickets_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_alicuotas`
--
ALTER TABLE `abel_osvaldo_medina_alicuotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_categorias_productos`
--
ALTER TABLE `abel_osvaldo_medina_categorias_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_clientes`
--
ALTER TABLE `abel_osvaldo_medina_clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_clientes_responsabilidades_iva_id_foreign` (`responsabilidades_iva_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_compras`
--
ALTER TABLE `abel_osvaldo_medina_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_compras_proveedor_id_foreign` (`proveedor_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_credito_a`
--
ALTER TABLE `abel_osvaldo_medina_credito_a`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_credito_a_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_credito_b`
--
ALTER TABLE `abel_osvaldo_medina_credito_b`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_credito_b_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_detalles`
--
ALTER TABLE `abel_osvaldo_medina_detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_detalles_venta_id_foreign` (`venta_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_detalle_compras`
--
ALTER TABLE `abel_osvaldo_medina_detalle_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_detalle_compras_compra_id_foreign` (`compra_id`),
  ADD KEY `abel_osvaldo_medina_detalle_compras_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_factura_a`
--
ALTER TABLE `abel_osvaldo_medina_factura_a`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_factura_a_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_factura_b`
--
ALTER TABLE `abel_osvaldo_medina_factura_b`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_factura_b_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_gastos`
--
ALTER TABLE `abel_osvaldo_medina_gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_marcas`
--
ALTER TABLE `abel_osvaldo_medina_marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_movimientos`
--
ALTER TABLE `abel_osvaldo_medina_movimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_pagos`
--
ALTER TABLE `abel_osvaldo_medina_pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_pagos_proveedor_id_foreign` (`proveedor_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_presupuestos`
--
ALTER TABLE `abel_osvaldo_medina_presupuestos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_presupuestos_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_productos`
--
ALTER TABLE `abel_osvaldo_medina_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_productos_proveedor_id_foreign` (`proveedor_id`),
  ADD KEY `abel_osvaldo_medina_productos_categoria_producto_id_foreign` (`categoria_producto_id`),
  ADD KEY `abel_osvaldo_medina_productos_marca_id_foreign` (`marca_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_proveedores`
--
ALTER TABLE `abel_osvaldo_medina_proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_registro_actividad`
--
ALTER TABLE `abel_osvaldo_medina_registro_actividad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_reg_ventas_alic`
--
ALTER TABLE `abel_osvaldo_medina_reg_ventas_alic`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_reg_ventas_cbte`
--
ALTER TABLE `abel_osvaldo_medina_reg_ventas_cbte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_remitos`
--
ALTER TABLE `abel_osvaldo_medina_remitos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_remitos_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_resumen_cuenta`
--
ALTER TABLE `abel_osvaldo_medina_resumen_cuenta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_resumen_cuenta_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `abel_osvaldo_medina_saldo_favor`
--
ALTER TABLE `abel_osvaldo_medina_saldo_favor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_saldo_pendiente`
--
ALTER TABLE `abel_osvaldo_medina_saldo_pendiente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_servicios`
--
ALTER TABLE `abel_osvaldo_medina_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abel_osvaldo_medina_ventas`
--
ALTER TABLE `abel_osvaldo_medina_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abel_osvaldo_medina_ventas_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_alicuotas`
--
ALTER TABLE `daniel_edgardo_medina_alicuotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_categorias_productos`
--
ALTER TABLE `daniel_edgardo_medina_categorias_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_clientes`
--
ALTER TABLE `daniel_edgardo_medina_clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_clientes_responsabilidades_iva_id_foreign` (`responsabilidades_iva_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_compras`
--
ALTER TABLE `daniel_edgardo_medina_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_compras_proveedor_id_foreign` (`proveedor_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_credito_a`
--
ALTER TABLE `daniel_edgardo_medina_credito_a`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_credito_a_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_credito_b`
--
ALTER TABLE `daniel_edgardo_medina_credito_b`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_credito_b_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_detalles`
--
ALTER TABLE `daniel_edgardo_medina_detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_detalles_venta_id_foreign` (`venta_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_detalle_compras`
--
ALTER TABLE `daniel_edgardo_medina_detalle_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_detalle_compras_compra_id_foreign` (`compra_id`),
  ADD KEY `daniel_edgardo_medina_detalle_compras_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_factura_a`
--
ALTER TABLE `daniel_edgardo_medina_factura_a`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_factura_a_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_factura_b`
--
ALTER TABLE `daniel_edgardo_medina_factura_b`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_factura_b_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_gastos`
--
ALTER TABLE `daniel_edgardo_medina_gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_marcas`
--
ALTER TABLE `daniel_edgardo_medina_marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_movimientos`
--
ALTER TABLE `daniel_edgardo_medina_movimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_pagos`
--
ALTER TABLE `daniel_edgardo_medina_pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_pagos_proveedor_id_foreign` (`proveedor_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_presupuestos`
--
ALTER TABLE `daniel_edgardo_medina_presupuestos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_presupuestos_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_productos`
--
ALTER TABLE `daniel_edgardo_medina_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_productos_proveedor_id_foreign` (`proveedor_id`),
  ADD KEY `daniel_edgardo_medina_productos_categoria_producto_id_foreign` (`categoria_producto_id`),
  ADD KEY `daniel_edgardo_medina_productos_marca_id_foreign` (`marca_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_proveedores`
--
ALTER TABLE `daniel_edgardo_medina_proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_registro_actividad`
--
ALTER TABLE `daniel_edgardo_medina_registro_actividad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_reg_ventas_alic`
--
ALTER TABLE `daniel_edgardo_medina_reg_ventas_alic`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_reg_ventas_cbte`
--
ALTER TABLE `daniel_edgardo_medina_reg_ventas_cbte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_remitos`
--
ALTER TABLE `daniel_edgardo_medina_remitos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_remitos_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_resumen_cuenta`
--
ALTER TABLE `daniel_edgardo_medina_resumen_cuenta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_resumen_cuenta_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `daniel_edgardo_medina_saldo_favor`
--
ALTER TABLE `daniel_edgardo_medina_saldo_favor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_saldo_pendiente`
--
ALTER TABLE `daniel_edgardo_medina_saldo_pendiente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_servicios`
--
ALTER TABLE `daniel_edgardo_medina_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `daniel_edgardo_medina_ventas`
--
ALTER TABLE `daniel_edgardo_medina_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daniel_edgardo_medina_ventas_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `eric_medina_alicuotas`
--
ALTER TABLE `eric_medina_alicuotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eric_medina_categorias_productos`
--
ALTER TABLE `eric_medina_categorias_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eric_medina_clientes`
--
ALTER TABLE `eric_medina_clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eric_medina_clientes_responsabilidades_iva_id_foreign` (`responsabilidades_iva_id`);

--
-- Indices de la tabla `eric_medina_compras`
--
ALTER TABLE `eric_medina_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eric_medina_compras_proveedor_id_foreign` (`proveedor_id`);

--
-- Indices de la tabla `eric_medina_credito_c`
--
ALTER TABLE `eric_medina_credito_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eric_medina_credito_c_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `eric_medina_detalles`
--
ALTER TABLE `eric_medina_detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eric_medina_detalles_venta_id_foreign` (`venta_id`);

--
-- Indices de la tabla `eric_medina_detalle_compras`
--
ALTER TABLE `eric_medina_detalle_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eric_medina_detalle_compras_compra_id_foreign` (`compra_id`),
  ADD KEY `eric_medina_detalle_compras_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `eric_medina_factura_c`
--
ALTER TABLE `eric_medina_factura_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eric_medina_factura_c_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `eric_medina_gastos`
--
ALTER TABLE `eric_medina_gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eric_medina_marcas`
--
ALTER TABLE `eric_medina_marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eric_medina_movimientos`
--
ALTER TABLE `eric_medina_movimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eric_medina_pagos`
--
ALTER TABLE `eric_medina_pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eric_medina_pagos_proveedor_id_foreign` (`proveedor_id`);

--
-- Indices de la tabla `eric_medina_presupuestos`
--
ALTER TABLE `eric_medina_presupuestos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eric_medina_presupuestos_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `eric_medina_productos`
--
ALTER TABLE `eric_medina_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eric_medina_productos_proveedor_id_foreign` (`proveedor_id`),
  ADD KEY `eric_medina_productos_categoria_producto_id_foreign` (`categoria_producto_id`),
  ADD KEY `eric_medina_productos_marca_id_foreign` (`marca_id`);

--
-- Indices de la tabla `eric_medina_proveedores`
--
ALTER TABLE `eric_medina_proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eric_medina_registro_actividad`
--
ALTER TABLE `eric_medina_registro_actividad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eric_medina_reg_ventas_alic`
--
ALTER TABLE `eric_medina_reg_ventas_alic`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eric_medina_reg_ventas_cbte`
--
ALTER TABLE `eric_medina_reg_ventas_cbte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eric_medina_remitos`
--
ALTER TABLE `eric_medina_remitos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eric_medina_remitos_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `eric_medina_resumen_cuenta`
--
ALTER TABLE `eric_medina_resumen_cuenta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eric_medina_resumen_cuenta_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `eric_medina_saldo_favor`
--
ALTER TABLE `eric_medina_saldo_favor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eric_medina_saldo_pendiente`
--
ALTER TABLE `eric_medina_saldo_pendiente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eric_medina_servicios`
--
ALTER TABLE `eric_medina_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eric_medina_ventas`
--
ALTER TABLE `eric_medina_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eric_medina_ventas_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `prueba_alicuotas`
--
ALTER TABLE `prueba_alicuotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba_categorias_productos`
--
ALTER TABLE `prueba_categorias_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba_clientes`
--
ALTER TABLE `prueba_clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_clientes_responsabilidades_iva_id_foreign` (`responsabilidades_iva_id`);

--
-- Indices de la tabla `prueba_compras`
--
ALTER TABLE `prueba_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_compras_proveedor_id_foreign` (`proveedor_id`);

--
-- Indices de la tabla `prueba_credito_a`
--
ALTER TABLE `prueba_credito_a`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_credito_a_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `prueba_credito_b`
--
ALTER TABLE `prueba_credito_b`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_credito_b_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `prueba_detalles`
--
ALTER TABLE `prueba_detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_detalles_venta_id_foreign` (`venta_id`);

--
-- Indices de la tabla `prueba_detalle_compras`
--
ALTER TABLE `prueba_detalle_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_detalle_compras_compra_id_foreign` (`compra_id`),
  ADD KEY `prueba_detalle_compras_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `prueba_factura_a`
--
ALTER TABLE `prueba_factura_a`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_factura_a_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `prueba_factura_b`
--
ALTER TABLE `prueba_factura_b`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_factura_b_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `prueba_gastos`
--
ALTER TABLE `prueba_gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba_marcas`
--
ALTER TABLE `prueba_marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba_movimientos`
--
ALTER TABLE `prueba_movimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba_pagos`
--
ALTER TABLE `prueba_pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_pagos_proveedor_id_foreign` (`proveedor_id`);

--
-- Indices de la tabla `prueba_presupuestos`
--
ALTER TABLE `prueba_presupuestos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_presupuestos_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `prueba_productos`
--
ALTER TABLE `prueba_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_productos_proveedor_id_foreign` (`proveedor_id`),
  ADD KEY `prueba_productos_categoria_producto_id_foreign` (`categoria_producto_id`),
  ADD KEY `prueba_productos_marca_id_foreign` (`marca_id`);

--
-- Indices de la tabla `prueba_proveedores`
--
ALTER TABLE `prueba_proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba_registro_actividad`
--
ALTER TABLE `prueba_registro_actividad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba_reg_ventas_alic`
--
ALTER TABLE `prueba_reg_ventas_alic`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba_reg_ventas_cbte`
--
ALTER TABLE `prueba_reg_ventas_cbte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba_remitos`
--
ALTER TABLE `prueba_remitos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_remitos_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `prueba_resumen_cuenta`
--
ALTER TABLE `prueba_resumen_cuenta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_resumen_cuenta_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `prueba_saldo_favor`
--
ALTER TABLE `prueba_saldo_favor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba_saldo_pendiente`
--
ALTER TABLE `prueba_saldo_pendiente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba_servicios`
--
ALTER TABLE `prueba_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba_ventas`
--
ALTER TABLE `prueba_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_ventas_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `01actividades`
--
ALTER TABLE `01actividades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `01administradores`
--
ALTER TABLE `01administradores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `01categorias`
--
ALTER TABLE `01categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `01contadores`
--
ALTER TABLE `01contadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `01contratos`
--
ALTER TABLE `01contratos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `01conversacion`
--
ALTER TABLE `01conversacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `01conversacion_contador`
--
ALTER TABLE `01conversacion_contador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `01empresas`
--
ALTER TABLE `01empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `01empresas_contadores`
--
ALTER TABLE `01empresas_contadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `01facturas_sistema`
--
ALTER TABLE `01facturas_sistema`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `01fiscal`
--
ALTER TABLE `01fiscal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `01licencias`
--
ALTER TABLE `01licencias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `01periodos`
--
ALTER TABLE `01periodos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `01registroips`
--
ALTER TABLE `01registroips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `01responsabilidades_iva`
--
ALTER TABLE `01responsabilidades_iva`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `01tickets_contador`
--
ALTER TABLE `01tickets_contador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `01tickets_empresa`
--
ALTER TABLE `01tickets_empresa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_alicuotas`
--
ALTER TABLE `abel_osvaldo_medina_alicuotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_categorias_productos`
--
ALTER TABLE `abel_osvaldo_medina_categorias_productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_clientes`
--
ALTER TABLE `abel_osvaldo_medina_clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_compras`
--
ALTER TABLE `abel_osvaldo_medina_compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_credito_a`
--
ALTER TABLE `abel_osvaldo_medina_credito_a`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_credito_b`
--
ALTER TABLE `abel_osvaldo_medina_credito_b`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_detalles`
--
ALTER TABLE `abel_osvaldo_medina_detalles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_detalle_compras`
--
ALTER TABLE `abel_osvaldo_medina_detalle_compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_factura_a`
--
ALTER TABLE `abel_osvaldo_medina_factura_a`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_factura_b`
--
ALTER TABLE `abel_osvaldo_medina_factura_b`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_gastos`
--
ALTER TABLE `abel_osvaldo_medina_gastos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_marcas`
--
ALTER TABLE `abel_osvaldo_medina_marcas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_movimientos`
--
ALTER TABLE `abel_osvaldo_medina_movimientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_pagos`
--
ALTER TABLE `abel_osvaldo_medina_pagos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_presupuestos`
--
ALTER TABLE `abel_osvaldo_medina_presupuestos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_productos`
--
ALTER TABLE `abel_osvaldo_medina_productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_proveedores`
--
ALTER TABLE `abel_osvaldo_medina_proveedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_registro_actividad`
--
ALTER TABLE `abel_osvaldo_medina_registro_actividad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_reg_ventas_alic`
--
ALTER TABLE `abel_osvaldo_medina_reg_ventas_alic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_reg_ventas_cbte`
--
ALTER TABLE `abel_osvaldo_medina_reg_ventas_cbte`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_remitos`
--
ALTER TABLE `abel_osvaldo_medina_remitos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_resumen_cuenta`
--
ALTER TABLE `abel_osvaldo_medina_resumen_cuenta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_saldo_favor`
--
ALTER TABLE `abel_osvaldo_medina_saldo_favor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_saldo_pendiente`
--
ALTER TABLE `abel_osvaldo_medina_saldo_pendiente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_servicios`
--
ALTER TABLE `abel_osvaldo_medina_servicios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `abel_osvaldo_medina_ventas`
--
ALTER TABLE `abel_osvaldo_medina_ventas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_alicuotas`
--
ALTER TABLE `daniel_edgardo_medina_alicuotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_categorias_productos`
--
ALTER TABLE `daniel_edgardo_medina_categorias_productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_clientes`
--
ALTER TABLE `daniel_edgardo_medina_clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_compras`
--
ALTER TABLE `daniel_edgardo_medina_compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_credito_a`
--
ALTER TABLE `daniel_edgardo_medina_credito_a`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_credito_b`
--
ALTER TABLE `daniel_edgardo_medina_credito_b`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_detalles`
--
ALTER TABLE `daniel_edgardo_medina_detalles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_detalle_compras`
--
ALTER TABLE `daniel_edgardo_medina_detalle_compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_factura_a`
--
ALTER TABLE `daniel_edgardo_medina_factura_a`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_factura_b`
--
ALTER TABLE `daniel_edgardo_medina_factura_b`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_gastos`
--
ALTER TABLE `daniel_edgardo_medina_gastos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_marcas`
--
ALTER TABLE `daniel_edgardo_medina_marcas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_movimientos`
--
ALTER TABLE `daniel_edgardo_medina_movimientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_pagos`
--
ALTER TABLE `daniel_edgardo_medina_pagos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_presupuestos`
--
ALTER TABLE `daniel_edgardo_medina_presupuestos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_productos`
--
ALTER TABLE `daniel_edgardo_medina_productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_proveedores`
--
ALTER TABLE `daniel_edgardo_medina_proveedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_registro_actividad`
--
ALTER TABLE `daniel_edgardo_medina_registro_actividad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_reg_ventas_alic`
--
ALTER TABLE `daniel_edgardo_medina_reg_ventas_alic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_reg_ventas_cbte`
--
ALTER TABLE `daniel_edgardo_medina_reg_ventas_cbte`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_remitos`
--
ALTER TABLE `daniel_edgardo_medina_remitos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_resumen_cuenta`
--
ALTER TABLE `daniel_edgardo_medina_resumen_cuenta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_saldo_favor`
--
ALTER TABLE `daniel_edgardo_medina_saldo_favor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_saldo_pendiente`
--
ALTER TABLE `daniel_edgardo_medina_saldo_pendiente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_servicios`
--
ALTER TABLE `daniel_edgardo_medina_servicios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `daniel_edgardo_medina_ventas`
--
ALTER TABLE `daniel_edgardo_medina_ventas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `eric_medina_alicuotas`
--
ALTER TABLE `eric_medina_alicuotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_categorias_productos`
--
ALTER TABLE `eric_medina_categorias_productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eric_medina_clientes`
--
ALTER TABLE `eric_medina_clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eric_medina_compras`
--
ALTER TABLE `eric_medina_compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_credito_c`
--
ALTER TABLE `eric_medina_credito_c`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_detalles`
--
ALTER TABLE `eric_medina_detalles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_detalle_compras`
--
ALTER TABLE `eric_medina_detalle_compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_factura_c`
--
ALTER TABLE `eric_medina_factura_c`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_gastos`
--
ALTER TABLE `eric_medina_gastos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_marcas`
--
ALTER TABLE `eric_medina_marcas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eric_medina_movimientos`
--
ALTER TABLE `eric_medina_movimientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eric_medina_pagos`
--
ALTER TABLE `eric_medina_pagos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_presupuestos`
--
ALTER TABLE `eric_medina_presupuestos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_productos`
--
ALTER TABLE `eric_medina_productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_proveedores`
--
ALTER TABLE `eric_medina_proveedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eric_medina_registro_actividad`
--
ALTER TABLE `eric_medina_registro_actividad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_reg_ventas_alic`
--
ALTER TABLE `eric_medina_reg_ventas_alic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_reg_ventas_cbte`
--
ALTER TABLE `eric_medina_reg_ventas_cbte`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_remitos`
--
ALTER TABLE `eric_medina_remitos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_resumen_cuenta`
--
ALTER TABLE `eric_medina_resumen_cuenta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_saldo_favor`
--
ALTER TABLE `eric_medina_saldo_favor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_saldo_pendiente`
--
ALTER TABLE `eric_medina_saldo_pendiente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_servicios`
--
ALTER TABLE `eric_medina_servicios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eric_medina_ventas`
--
ALTER TABLE `eric_medina_ventas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prueba_alicuotas`
--
ALTER TABLE `prueba_alicuotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `prueba_categorias_productos`
--
ALTER TABLE `prueba_categorias_productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `prueba_clientes`
--
ALTER TABLE `prueba_clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `prueba_compras`
--
ALTER TABLE `prueba_compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prueba_credito_a`
--
ALTER TABLE `prueba_credito_a`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prueba_credito_b`
--
ALTER TABLE `prueba_credito_b`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prueba_detalles`
--
ALTER TABLE `prueba_detalles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `prueba_detalle_compras`
--
ALTER TABLE `prueba_detalle_compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prueba_factura_a`
--
ALTER TABLE `prueba_factura_a`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `prueba_factura_b`
--
ALTER TABLE `prueba_factura_b`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `prueba_gastos`
--
ALTER TABLE `prueba_gastos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prueba_marcas`
--
ALTER TABLE `prueba_marcas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `prueba_movimientos`
--
ALTER TABLE `prueba_movimientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `prueba_pagos`
--
ALTER TABLE `prueba_pagos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prueba_presupuestos`
--
ALTER TABLE `prueba_presupuestos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prueba_productos`
--
ALTER TABLE `prueba_productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `prueba_proveedores`
--
ALTER TABLE `prueba_proveedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prueba_registro_actividad`
--
ALTER TABLE `prueba_registro_actividad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prueba_reg_ventas_alic`
--
ALTER TABLE `prueba_reg_ventas_alic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `prueba_reg_ventas_cbte`
--
ALTER TABLE `prueba_reg_ventas_cbte`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `prueba_remitos`
--
ALTER TABLE `prueba_remitos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `prueba_resumen_cuenta`
--
ALTER TABLE `prueba_resumen_cuenta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prueba_saldo_favor`
--
ALTER TABLE `prueba_saldo_favor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prueba_saldo_pendiente`
--
ALTER TABLE `prueba_saldo_pendiente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prueba_servicios`
--
ALTER TABLE `prueba_servicios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `prueba_ventas`
--
ALTER TABLE `prueba_ventas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `01contratos`
--
ALTER TABLE `01contratos`
  ADD CONSTRAINT `01contratos_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `01empresas` (`id`),
  ADD CONSTRAINT `01contratos_licencia_id_foreign` FOREIGN KEY (`licencia_id`) REFERENCES `01licencias` (`id`),
  ADD CONSTRAINT `01contratos_periodo_id_foreign` FOREIGN KEY (`periodo_id`) REFERENCES `01periodos` (`id`);

--
-- Filtros para la tabla `01conversacion`
--
ALTER TABLE `01conversacion`
  ADD CONSTRAINT `01conversacion_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `01tickets_empresa` (`id`);

--
-- Filtros para la tabla `01conversacion_contador`
--
ALTER TABLE `01conversacion_contador`
  ADD CONSTRAINT `01conversacion_contador_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `01tickets_contador` (`id`);

--
-- Filtros para la tabla `01empresas`
--
ALTER TABLE `01empresas`
  ADD CONSTRAINT `empresas_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `01categorias` (`id`),
  ADD CONSTRAINT `empresas_responsabilidad_iva_id_foreign` FOREIGN KEY (`responsabilidad_iva_id`) REFERENCES `01responsabilidades_iva` (`id`);

--
-- Filtros para la tabla `01empresas_contadores`
--
ALTER TABLE `01empresas_contadores`
  ADD CONSTRAINT `01empresas_contadores_contador_id_foreign` FOREIGN KEY (`contador_id`) REFERENCES `01contadores` (`id`),
  ADD CONSTRAINT `01empresas_contadores_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `01empresas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `01facturas_sistema`
--
ALTER TABLE `01facturas_sistema`
  ADD CONSTRAINT `01facturas_sistema_contrato_id_foreign` FOREIGN KEY (`contrato_id`) REFERENCES `01contratos` (`id`);

--
-- Filtros para la tabla `01fiscal`
--
ALTER TABLE `01fiscal`
  ADD CONSTRAINT `fiscal_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `01empresas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `abel_osvaldo_medina_compras`
--
ALTER TABLE `abel_osvaldo_medina_compras`
  ADD CONSTRAINT `abel_osvaldo_medina_compras_proveedor_id_foreign` FOREIGN KEY (`proveedor_id`) REFERENCES `abel_osvaldo_medina_proveedores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
