-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2026 at 04:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dontono`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `categoria`, `stock`, `imagen`, `imagen2`) VALUES
(1, 'Martillo', 'Martillo de acero resistente', 10.50, 'Herramientas', 20, 'Hammer.png', NULL),
(2, 'Tornillo', 'Tornillo para madera', 0.25, 'Construcción', 200, 'screw.png', NULL),
(3, 'Llave Spanner', 'Llave ajustable', 15.00, 'Herramientas', 15, 'spanner.png', NULL),
(4, 'Woodburning Pen', 'Herramienta para grabado en madera', 25.00, 'Herramientas', 10, 'woodburning pen.png', NULL),
(5, 'Llave Wrench', 'Llave inglesa resistente', 18.00, 'Herramientas', 12, 'wrench.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sucursal`
--

CREATE TABLE `sucursal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `ubicacion` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sucursal`
--

INSERT INTO `sucursal` (`id`, `nombre`, `ubicacion`, `descripcion`, `imagen`) VALUES
(1, 'San Miguel', 'Sobre Ruta Militar y 2da Av Norte', 'Lorem Lorem Lorem Lorem Lorem', 'san miguel.png'),
(2, 'San Vicente', 'Sobre Ruta Militar y 2da Av Norte', 'Lorem Lorem Lorem Lorem Lorem', 'san vicente.png'),
(3, 'San Salvador', 'Sobre Ruta Militar y 2da Av Norte', 'Lorem Lorem Lorem Lorem Lorem', 'san salvador.png');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarioId` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('admin','usuario') DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuarioId`, `nombre`, `correo`, `password`, `rol`) VALUES
(7, 'Admin', 'admin@mail.com', '$2y$10$Ila9szUEu638Sp1cxlgWC.FLPNDSaNlUG0UxJ1ueIRjUxE.pWoDYy', 'admin'),
(8, 'carliros', 'carlos.romero2027@adoc.su', '$2y$10$lcPUVs4I2J92uye33DsDhOhYdK.Y8H1GMNpzxcBSV2L8x9HBX7KJy', 'usuario'),
(9, 'Car', '6369637@clases.edu.sv', '$2y$10$/0F0/k8jgti.PDVweaKa2uYjCkpCDXJ.XVhhpDlkPAoB7dvFlZaLS', 'usuario'),
(10, 'Rat', 'rabisfails@gmail.com', '$2y$10$pLQyiAuArW0nKXgDVPgnR.U8wsrZWuW12AkYrOblrOTGB2G1z6GA2', 'usuario'),
(12, 'carliros', 'admin@gmail.com', '$2y$10$k3Anf06Tv5jDOPjJvsAA1eCnE77sHdxuO.1s6ZcWOhNr8kcHhIboG', 'usuario'),
(14, 'carliros', 'admin@ggmail.com', '$2y$10$k3Anf06Tv5jDOPjJvsAA1eCnE77sHdxuO.1s6ZcWOhNr8kcHhIboG', 'admin'),
(15, 'Carlos Romero', '6369638@clases.edu.sv', '$2y$10$Y5MMAW9KTuJ2VjsbaEUjR.gbNbyq3hK86l9TISint.XukZ/Vz3ksS', 'usuario'),
(17, 'Carlos Romero', '6369638e@clases.edu.sv', '$2y$10$s8Xl2BRpmM6hrfQtPNYR3uUl9.6NwagJ8EbBNIgG7qU40k0OiORJK', 'usuario'),
(18, 'Carlos Romero', 'Admin@gmail.comm', '$2y$10$oqqJf6U7.Pn7LTkMdZcPT.cDC7vFbe.m/bd2wYaDr676aOJ8jA27W', 'usuario'),
(20, 'Carlos Romero', 'Admin@gmail.commm', '$2y$10$oqqJf6U7.Pn7LTkMdZcPT.cDC7vFbe.m/bd2wYaDr676aOJ8jA27W', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarioId`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
