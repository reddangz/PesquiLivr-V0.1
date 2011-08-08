-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-08-2011 a las 17:44:23
-- Versión del servidor: 5.5.9
-- Versión de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(128) NOT NULL,
  `isbn` int(10) NOT NULL,
  `autor` varchar(128) NOT NULL,
  `data` int(11) NOT NULL,
  `idioma` varchar(128) NOT NULL,
  `lugar` varchar(128) NOT NULL,
  `estado` enum('prestado','livre') NOT NULL,
  `extension` char(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `titulo` (`titulo`,`isbn`,`autor`),
  KEY `data` (`data`),
  KEY `lugar` (`lugar`),
  KEY `idioma` (`idioma`),
  KEY `estado` (`estado`),
  KEY `extension` (`extension`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `libros`
--

