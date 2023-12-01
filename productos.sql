-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2023 a las 18:24:17
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_integrador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `nombre_producto` text NOT NULL,
  `descripcion_producto` text NOT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `precio_producto` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`nombre_producto`, `descripcion_producto`, `cantidad_producto`, `precio_producto`, `id_producto`) VALUES
('Té negro en hebras', 'Té negro hojas premium.', 8, 4000, 32),
('Té Mix Fresh', ' Té verde en hebras, lavanda, manzanilla, melissa, mandarina y limón.', 10, 4000, 33),
('Té Mix Floral', 'Rosa mosqueta, pétalos de rosa, arándano rojo, hibisco, sabor jazmín y frutilla.', 5, 4500, 34),
('Tetera de hierro 600mL', 'Tetera de hierro importada y enlozada en su interior. Con infusor incorporado.', 2, 30000, 35),
('Tetera de porcelana blanca 650mL', 'Tetera de porcelana blanca con manija de mimbre e infusor metálico incorporado.', 2, 20000, 36),
('Tetera de cerámica negra 750mL', 'Tetera de cerámica con infusor metálico incluido. Para preparar todo tipo de té.', 1, 25000, 37),
('Taza de vidrio', 'Taza chica de vidrio con plato bambú. Capacidad: 250cc', 9, 3000, 38),
('Taza de porcelana decorada', 'Taza chica porcelana importado blanca con detalles en dorado y plato. Capacidad: 200cc', 6, 4000, 39),
('Taza de porcelana blanca lisa', 'Taza chica porcelana importado blanca con plato bambú. Capacidad: 250cc', 12, 3000, 40),
('Infusor con cadena', 'Clásico infusor de acero inoxidable con cadena para todo tipo de tazas y teteras.', 10, 2000, 41),
('Infusor de pinza', 'Infusor de acero inoxidable con sistema de pinza para infusionar en una taza todo tipo de hebras.', 5, 2500, 42),
('Infusor canasta', 'Infusor de acero stick para té en hebras. El infusor es un elemento clave para lograr un té único.', 8, 3500, 43);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
