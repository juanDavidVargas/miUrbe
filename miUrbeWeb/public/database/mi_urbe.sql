-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2019 a las 21:48:22
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi_urbe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utb_accesousuario`
--

CREATE TABLE `utb_accesousuario` (
  `IdUsuario` int(11) NOT NULL,
  `IdUrbanizacion` int(11) NOT NULL,
  `IdAccesoUsuario` int(11) NOT NULL,
  `IdTipoUsuario` int(11) NOT NULL,
  `IdEstadoUsuario` int(11) NOT NULL,
  `NumeroApartamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utb_administrador`
--

CREATE TABLE `utb_administrador` (
  `IdAdministrador` int(11) NOT NULL,
  `NombreAdministrador` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Clave` varchar(100) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `FechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FechaModificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utb_estadousuario`
--

CREATE TABLE `utb_estadousuario` (
  `IdEstadoUsuario` int(11) NOT NULL,
  `EstadoUsuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `utb_estadousuario`
--

INSERT INTO `utb_estadousuario` (`IdEstadoUsuario`, `EstadoUsuario`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utb_log`
--

CREATE TABLE `utb_log` (
  `IdLog` int(11) NOT NULL,
  `IdAccesoUsuario` int(11) NOT NULL,
  `IdAdministrador` int(11) NOT NULL,
  `IdUrbanizacion` int(11) NOT NULL,
  `IdMensaje` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Accion` varchar(255) NOT NULL,
  `IP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utb_mensaje`
--

CREATE TABLE `utb_mensaje` (
  `IdMensaje` int(11) NOT NULL,
  `IdAccesoUsuario` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IdTipoMensaje` int(11) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Mensaje` varchar(255) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `FechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utb_tipoautenticacion`
--

CREATE TABLE `utb_tipoautenticacion` (
  `IdTipoAutenticacion` int(11) NOT NULL,
  `TipoAutenticacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utb_tipomensaje`
--

CREATE TABLE `utb_tipomensaje` (
  `IdTipoMensaje` int(11) NOT NULL,
  `TipoMensaje` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utb_tipousuario`
--

CREATE TABLE `utb_tipousuario` (
  `IdTipoUsuario` int(11) NOT NULL,
  `TipoUsuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utb_urbanizacion`
--

CREATE TABLE `utb_urbanizacion` (
  `IdUrbanizacion` int(11) NOT NULL,
  `NombreUrbanizacion` varchar(50) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `NumeroApartamentos` int(11) NOT NULL,
  `FechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `EstadoUrbanizacion` varchar(20) NOT NULL,
  `ImagenLogo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utb_usuario`
--

CREATE TABLE `utb_usuario` (
  `IdUsuario` int(11) NOT NULL,
  `NombreUsuario` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Clave` varchar(255) NOT NULL,
  `idTipoAutenticacion` int(11) NOT NULL,
  `Imagen` varchar(255) DEFAULT NULL,
  `FechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FechaModificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `utb_accesousuario`
--
ALTER TABLE `utb_accesousuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `UTBAccesoUsuario_IdUrbanizacion` (`IdUrbanizacion`),
  ADD KEY `UTBAccesoUsuario_IdAccesoUsuario` (`IdAccesoUsuario`),
  ADD KEY `UTBAccesoUsuario_IdTipoUsuario` (`IdTipoUsuario`),
  ADD KEY `UTBAccesoUsuario_IdEstadoUsuario` (`IdEstadoUsuario`);

--
-- Indices de la tabla `utb_administrador`
--
ALTER TABLE `utb_administrador`
  ADD PRIMARY KEY (`IdAdministrador`);

--
-- Indices de la tabla `utb_estadousuario`
--
ALTER TABLE `utb_estadousuario`
  ADD PRIMARY KEY (`IdEstadoUsuario`);

--
-- Indices de la tabla `utb_log`
--
ALTER TABLE `utb_log`
  ADD PRIMARY KEY (`IdLog`),
  ADD KEY `UTBLog_IdAccesoUsuario` (`IdAccesoUsuario`),
  ADD KEY `UTBLog_IdAdministrador` (`IdAdministrador`),
  ADD KEY `UTBLog_IdUrbanizacion` (`IdUrbanizacion`),
  ADD KEY `UTBLog_IdMensaje` (`IdMensaje`);

--
-- Indices de la tabla `utb_mensaje`
--
ALTER TABLE `utb_mensaje`
  ADD PRIMARY KEY (`IdMensaje`),
  ADD KEY `UTBMensaje_IdAccesoUsuario` (`IdAccesoUsuario`),
  ADD KEY `UTBMensaje_IdTipoMensaje` (`IdTipoMensaje`);

--
-- Indices de la tabla `utb_tipoautenticacion`
--
ALTER TABLE `utb_tipoautenticacion`
  ADD PRIMARY KEY (`IdTipoAutenticacion`);

--
-- Indices de la tabla `utb_tipomensaje`
--
ALTER TABLE `utb_tipomensaje`
  ADD PRIMARY KEY (`IdTipoMensaje`);

--
-- Indices de la tabla `utb_tipousuario`
--
ALTER TABLE `utb_tipousuario`
  ADD PRIMARY KEY (`IdTipoUsuario`);

--
-- Indices de la tabla `utb_urbanizacion`
--
ALTER TABLE `utb_urbanizacion`
  ADD PRIMARY KEY (`IdUrbanizacion`);

--
-- Indices de la tabla `utb_usuario`
--
ALTER TABLE `utb_usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `idTipoAutenticacion_UTB_Usuario` (`idTipoAutenticacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `utb_accesousuario`
--
ALTER TABLE `utb_accesousuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `utb_administrador`
--
ALTER TABLE `utb_administrador`
  MODIFY `IdAdministrador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `utb_estadousuario`
--
ALTER TABLE `utb_estadousuario`
  MODIFY `IdEstadoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `utb_log`
--
ALTER TABLE `utb_log`
  MODIFY `IdLog` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `utb_mensaje`
--
ALTER TABLE `utb_mensaje`
  MODIFY `IdMensaje` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `utb_tipoautenticacion`
--
ALTER TABLE `utb_tipoautenticacion`
  MODIFY `IdTipoAutenticacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `utb_tipomensaje`
--
ALTER TABLE `utb_tipomensaje`
  MODIFY `IdTipoMensaje` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `utb_tipousuario`
--
ALTER TABLE `utb_tipousuario`
  MODIFY `IdTipoUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `utb_urbanizacion`
--
ALTER TABLE `utb_urbanizacion`
  MODIFY `IdUrbanizacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `utb_usuario`
--
ALTER TABLE `utb_usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `utb_accesousuario`
--
ALTER TABLE `utb_accesousuario`
  ADD CONSTRAINT `utb_accesousuario_ibfk_1` FOREIGN KEY (`IdAccesoUsuario`) REFERENCES `utb_usuario` (`IdUsuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `utb_accesousuario_ibfk_2` FOREIGN KEY (`IdTipoUsuario`) REFERENCES `utb_tipousuario` (`IdTipoUsuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `utb_accesousuario_ibfk_3` FOREIGN KEY (`IdEstadoUsuario`) REFERENCES `utb_estadousuario` (`IdEstadoUsuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `utb_accesousuario_ibfk_4` FOREIGN KEY (`IdUrbanizacion`) REFERENCES `utb_urbanizacion` (`IdUrbanizacion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `utb_log`
--
ALTER TABLE `utb_log`
  ADD CONSTRAINT `utb_log_ibfk_1` FOREIGN KEY (`IdAccesoUsuario`) REFERENCES `utb_accesousuario` (`IdAccesoUsuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `utb_log_ibfk_2` FOREIGN KEY (`IdUrbanizacion`) REFERENCES `utb_urbanizacion` (`IdUrbanizacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `utb_log_ibfk_3` FOREIGN KEY (`IdAdministrador`) REFERENCES `utb_administrador` (`IdAdministrador`) ON UPDATE CASCADE,
  ADD CONSTRAINT `utb_log_ibfk_4` FOREIGN KEY (`IdMensaje`) REFERENCES `utb_mensaje` (`IdMensaje`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `utb_mensaje`
--
ALTER TABLE `utb_mensaje`
  ADD CONSTRAINT `utb_mensaje_ibfk_1` FOREIGN KEY (`IdTipoMensaje`) REFERENCES `utb_tipomensaje` (`IdTipoMensaje`) ON UPDATE CASCADE,
  ADD CONSTRAINT `utb_mensaje_ibfk_2` FOREIGN KEY (`IdAccesoUsuario`) REFERENCES `utb_accesousuario` (`IdAccesoUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `utb_usuario`
--
ALTER TABLE `utb_usuario`
  ADD CONSTRAINT `utb_usuario_ibfk_1` FOREIGN KEY (`idTipoAutenticacion`) REFERENCES `utb_tipoautenticacion` (`IdTipoAutenticacion`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
