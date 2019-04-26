-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2019 a las 00:46:38
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `01facturas_sistema`
--
ALTER TABLE `01facturas_sistema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `01facturas_sistema_contrato_id_foreign` (`contrato_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `01facturas_sistema`
--
ALTER TABLE `01facturas_sistema`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `01facturas_sistema`
--
ALTER TABLE `01facturas_sistema`
  ADD CONSTRAINT `01facturas_sistema_contrato_id_foreign` FOREIGN KEY (`contrato_id`) REFERENCES `01contratos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
