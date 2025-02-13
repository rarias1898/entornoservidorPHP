-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 10-02-2025 a las 22:45:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cerveceria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `denominacion` varchar(255) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `formato` varchar(100) DEFAULT NULL,
  `tamaño` varchar(50) DEFAULT NULL,
  `alergenos` text DEFAULT NULL,
  `fecha_consumo` date DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL CHECK (`precio` >= 0),
  `imagen` varchar(255) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `denominacion`, `marca`, `tipo`, `formato`, `tamaño`, `alergenos`, `fecha_consumo`, `precio`, `imagen`, `observaciones`, `created_at`, `updated_at`) VALUES
(9, 'Pilsner Urquell', 'Pilsner Urquell', 'Pilsner', 'Botellin', '0', 'Cereales', '2025-01-24', 2.00, '../uploads/1738200513_cv2.png', 'adgadgadg', '2025-01-30 01:28:33', '2025-02-10 21:38:44'),
(10, 'Heineken', 'Heineken', 'Lager', 'Lata', '1/2', 'Cereales', '2025-02-22', 1.80, '../uploads/1738463644_heineken-lata-5-33cl.jpg', 'Cerveza refrescante y suave.', '2025-02-02 02:34:04', '2025-02-02 02:34:04'),
(12, 'Mahou', 'Mahou', 'Lager', 'Lata', '1/2', 'Cereales', '2025-03-02', 1.75, '../uploads/1739223507_mahou-clasica.jpg', ' Sabor equilibrado con un ligero toque amargo.', '2025-02-10 21:38:27', '2025-02-10 21:38:27'),
(13, 'DAMM', 'damm', 'Lager', 'Botellin', '1/3', 'Cereales', '2025-03-07', 1.85, '../uploads/1739223655_606223.jpg', 'Cerveza mediterránea con un toque suave y refrescante.', '2025-02-10 21:40:55', '2025-02-10 21:40:55'),
(14, 'Estrella Galicia', 'Estrella Galicia', 'Lager', 'Botellin', '1/3', 'Cereales', '2025-02-22', 1.90, '../uploads/1739223721_ic_estrella_galicia.png', 'Sabor más intenso con un amargor característico.', '2025-02-10 21:42:01', '2025-02-10 21:42:01'),
(15, 'Alhambra', 'Alhambra', 'Lager', 'Lata', '1/2', 'Cereales', '2025-03-07', 2.00, '../uploads/1739223792_cerveza-alhambra-lata-33cl.jpg', 'Cerveza con cuerpo, ideal para paladares exigentes.', '2025-02-10 21:43:12', '2025-02-10 21:43:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL CHECK (`age` >= 0),
  `role` enum('normal','admin') NOT NULL DEFAULT 'normal',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `name`, `password`, `age`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'Angel', '$2y$10$C8NXJ/h0r1g.xL3W9UwYhuEJhA15DST4OMiB9A8C0T7LGfNUK2s/2', 28, 'admin', '2025-01-29 21:47:32', '2025-02-02 22:37:13'),
(2, 'usuario@usuario.com', 'Antonio', '$2y$10$2afG0FNHVblA7XPAM5GTJOEvM0cFoGo7Udvs72CZWRyVIDq.XwFES', 18, '', '2025-01-29 21:54:39', '2025-02-09 23:44:02'),
(3, 'prueba@prueba.com', 'Prueba', '$2y$10$BKFwVLbIuenRjXlUoAE9u.Av3HZ2hr4DhmW.3CxrnrQ0vYmt0sK7i', 19, '', '2025-02-09 09:31:40', '2025-02-09 09:31:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
