-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2023 a las 00:41:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web2-2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `id_Vendedor` int(11) NOT NULL,
  `Vendedor` varchar(100) NOT NULL,
  `Zona` varchar(100) NOT NULL,
  `Comision` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id_Vendedor`, `Vendedor`, `Zona`, `Comision`) VALUES
(1, 'Jose Ignacio', 'Tandil', 0.2),
(2, 'Noelia Camila', 'CABA', 0.18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `Cliente` varchar(100) NOT NULL,
  `Factura` varchar(20) NOT NULL,
  `Fecha` date NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `Producto` varchar(100) NOT NULL,
  `Cantidad` int(15) NOT NULL,
  `P_Unitario` double NOT NULL,
  `Total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `Cliente`, `Factura`, `Fecha`, `id_vendedor`, `Producto`, `Cantidad`, `P_Unitario`, `Total`) VALUES
(18, 'ee', '2222', '2023-10-10', 2, 'rr', 2, 2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id_Vendedor`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_vendedor` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `id_vendedor` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedores` (`id_Vendedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
