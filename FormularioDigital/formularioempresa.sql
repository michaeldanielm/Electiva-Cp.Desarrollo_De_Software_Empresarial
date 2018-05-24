-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2017 a las 01:18:28
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formularioempresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabladatos`
--

CREATE TABLE `tabladatos` (
  `IdDato` int(10) NOT NULL,
  `CodEmpleado` int(11) NOT NULL,
  `IdIndicador` int(11) NOT NULL,
  `FechaReg` varchar(10) NOT NULL,
  `DatoIndicador` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabladatos`
--

INSERT INTO `tabladatos` (`IdDato`, `CodEmpleado`, `IdIndicador`, `FechaReg`, `DatoIndicador`) VALUES
(5, 1234, 5, '17/01/2018', 6),
(6, 34567, 6, '18/01/2018', 10),
(7, 34567, 6, '20/01/2018', 5),
(8, 1234, 5, '17/02/2018', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabladependencias`
--

CREATE TABLE `tabladependencias` (
  `IdDependencia` int(10) NOT NULL,
  `NitEmpresa` int(10) NOT NULL,
  `DepDescripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabladependencias`
--

INSERT INTO `tabladependencias` (`IdDependencia`, `NitEmpresa`, `DepDescripcion`) VALUES
(4, 1234, 'Ingenieria'),
(5, 1234, 'Comunicacion'),
(6, 1234, 'Contaduria'),
(7, 12345, 'Administracion'),
(8, 12345, 'Arquitectura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaempleados`
--

CREATE TABLE `tablaempleados` (
  `IdEmpleado` int(10) NOT NULL,
  `CodigoEmpleado` int(10) NOT NULL,
  `NombreEmpleado` varchar(30) NOT NULL,
  `ApellidoEmpleado` varchar(30) NOT NULL,
  `DireccionEmpleado` varchar(30) NOT NULL,
  `TelefonoEmpleado` int(20) NOT NULL,
  `EmailEmpleado` varchar(30) NOT NULL,
  `IdDep` int(11) NOT NULL,
  `NitEmpresa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tablaempleados`
--

INSERT INTO `tablaempleados` (`IdEmpleado`, `CodigoEmpleado`, `NombreEmpleado`, `ApellidoEmpleado`, `DireccionEmpleado`, `TelefonoEmpleado`, `EmailEmpleado`, `IdDep`, `NitEmpresa`) VALUES
(8, 1234, 'Juan', 'Cardenas ', 'Cll 80', 456789, 'juan@gmail.com', 5, 1234),
(9, 34567, 'Jose', 'Martinez', 'Crr 5 #35', 456789, 'paper@uni.com', 7, 12345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaempresas`
--

CREATE TABLE `tablaempresas` (
  `Id` int(11) NOT NULL,
  `Nit` varchar(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(25) NOT NULL,
  `Telefono` varchar(16) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tablaempresas`
--

INSERT INTO `tablaempresas` (`Id`, `Nit`, `Nombre`, `Direccion`, `Telefono`, `Email`) VALUES
(35, '1234', 'Digital Binary', 'Crr 8 e 16', '3456', 'digital@gmail.com'),
(36, '12345', 'Paper', 'Cll 80 # 90', '45678', 'paper@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaestrategias`
--

CREATE TABLE `tablaestrategias` (
  `IdEstrategia` int(11) NOT NULL,
  `NitEmpresa` int(11) NOT NULL,
  `Estrategia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tablaestrategias`
--

INSERT INTO `tablaestrategias` (`IdEstrategia`, `NitEmpresa`, `Estrategia`) VALUES
(5, 1234, 'Nuevos productos.'),
(6, 12345, 'Nuevos metodos de trabajo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaindicadores`
--

CREATE TABLE `tablaindicadores` (
  `IdIndicador` int(10) NOT NULL,
  `IdObj` int(11) NOT NULL,
  `IdEst` int(11) NOT NULL,
  `IndNombre` varchar(200) NOT NULL,
  `IndTipo` varchar(15) NOT NULL,
  `IndCategoria` varchar(15) NOT NULL,
  `IndPeriodicidad` varchar(15) NOT NULL,
  `IndInicio` varchar(15) NOT NULL,
  `IndFin` varchar(15) NOT NULL,
  `IndMinimo` int(3) NOT NULL,
  `IndMedio` int(3) NOT NULL,
  `IndMeta` int(3) NOT NULL,
  `EmpCodigo` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tablaindicadores`
--

INSERT INTO `tablaindicadores` (`IdIndicador`, `IdObj`, `IdEst`, `IndNombre`, `IndTipo`, `IndCategoria`, `IndPeriodicidad`, `IndInicio`, `IndFin`, `IndMinimo`, `IndMedio`, `IndMeta`, `EmpCodigo`) VALUES
(5, 6, 5, 'Reportes', 'Eficiencia', 'Estrategico', 'Semanal', '15/10/2017', '15/12/2018', 4, 8, 12, 1234),
(6, 7, 6, 'Docentes capacitados', 'Eficiencia', 'Estrategico', 'Semanal', '15/10/2017', '15/12/2019', 4, 8, 12, 34567);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablametas`
--

CREATE TABLE `tablametas` (
  `IdMetas` int(11) NOT NULL,
  `NitEmpresa` int(11) NOT NULL,
  `Meta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tablametas`
--

INSERT INTO `tablametas` (`IdMetas`, `NitEmpresa`, `Meta`) VALUES
(5, 1234, 'Productos de calidad.'),
(6, 12345, 'Productos a buenos precios.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablamision`
--

CREATE TABLE `tablamision` (
  `IdMision` int(11) NOT NULL,
  `NitEmpresa` int(11) NOT NULL,
  `Mision` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tablamision`
--

INSERT INTO `tablamision` (`IdMision`, `NitEmpresa`, `Mision`) VALUES
(1, 1234, 'Productos seguros.'),
(2, 12345, 'Productos variados.\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaobjetivos`
--

CREATE TABLE `tablaobjetivos` (
  `IdObjetivos` int(11) NOT NULL,
  `NitEmpresa` int(11) NOT NULL,
  `Objetivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tablaobjetivos`
--

INSERT INTO `tablaobjetivos` (`IdObjetivos`, `NitEmpresa`, `Objetivo`) VALUES
(6, 1234, 'Liderar el mercado.'),
(7, 12345, 'Industrializar la empresa.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablatacticas`
--

CREATE TABLE `tablatacticas` (
  `IdTacticas` int(11) NOT NULL,
  `NitEmpresa` int(11) NOT NULL,
  `Tactica` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tablatacticas`
--

INSERT INTO `tablatacticas` (`IdTacticas`, `NitEmpresa`, `Tactica`) VALUES
(5, 1234, 'Ser una empresa consolidada en el mercado.'),
(6, 12345, 'Extender la marca por el pai­s.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablavision`
--

CREATE TABLE `tablavision` (
  `IdVision` int(11) NOT NULL,
  `NitEmpresa` int(11) NOT NULL,
  `Vision` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tablavision`
--

INSERT INTO `tablavision` (`IdVision`, `NitEmpresa`, `Vision`) VALUES
(1, 1234, 'Competir con otras empresas.'),
(2, 12345, 'Producir a nivel nacional.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabladatos`
--
ALTER TABLE `tabladatos`
  ADD PRIMARY KEY (`IdDato`);

--
-- Indices de la tabla `tabladependencias`
--
ALTER TABLE `tabladependencias`
  ADD PRIMARY KEY (`IdDependencia`);

--
-- Indices de la tabla `tablaempleados`
--
ALTER TABLE `tablaempleados`
  ADD PRIMARY KEY (`IdEmpleado`);

--
-- Indices de la tabla `tablaempresas`
--
ALTER TABLE `tablaempresas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tablaestrategias`
--
ALTER TABLE `tablaestrategias`
  ADD PRIMARY KEY (`IdEstrategia`);

--
-- Indices de la tabla `tablaindicadores`
--
ALTER TABLE `tablaindicadores`
  ADD PRIMARY KEY (`IdIndicador`);

--
-- Indices de la tabla `tablametas`
--
ALTER TABLE `tablametas`
  ADD PRIMARY KEY (`IdMetas`);

--
-- Indices de la tabla `tablamision`
--
ALTER TABLE `tablamision`
  ADD PRIMARY KEY (`IdMision`);

--
-- Indices de la tabla `tablaobjetivos`
--
ALTER TABLE `tablaobjetivos`
  ADD PRIMARY KEY (`IdObjetivos`);

--
-- Indices de la tabla `tablatacticas`
--
ALTER TABLE `tablatacticas`
  ADD PRIMARY KEY (`IdTacticas`);

--
-- Indices de la tabla `tablavision`
--
ALTER TABLE `tablavision`
  ADD PRIMARY KEY (`IdVision`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabladatos`
--
ALTER TABLE `tabladatos`
  MODIFY `IdDato` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tabladependencias`
--
ALTER TABLE `tabladependencias`
  MODIFY `IdDependencia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tablaempleados`
--
ALTER TABLE `tablaempleados`
  MODIFY `IdEmpleado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tablaempresas`
--
ALTER TABLE `tablaempresas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `tablaestrategias`
--
ALTER TABLE `tablaestrategias`
  MODIFY `IdEstrategia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tablaindicadores`
--
ALTER TABLE `tablaindicadores`
  MODIFY `IdIndicador` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tablametas`
--
ALTER TABLE `tablametas`
  MODIFY `IdMetas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tablamision`
--
ALTER TABLE `tablamision`
  MODIFY `IdMision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tablaobjetivos`
--
ALTER TABLE `tablaobjetivos`
  MODIFY `IdObjetivos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tablatacticas`
--
ALTER TABLE `tablatacticas`
  MODIFY `IdTacticas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tablavision`
--
ALTER TABLE `tablavision`
  MODIFY `IdVision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
