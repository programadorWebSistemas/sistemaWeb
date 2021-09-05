-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-08-2021 a las 15:12:09
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_tramite`
--
CREATE DATABASE IF NOT EXISTS `bd_tramite` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_tramite`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `area_cod` int(11) NOT NULL COMMENT 'Codigo auto-incrementado del movimiento del area',
  `area_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre del area',
  `area_fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'fecha del registro del movimiento',
  `area_estado` enum('ACTIVO','INACTIVO') COLLATE utf8_unicode_ci NOT NULL COMMENT 'estado del area'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Entidad Area';

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`area_cod`, `area_nombre`, `area_fecha_registro`, `area_estado`) VALUES
(1, 'SECRETARIADO', '2018-11-21 07:54:25', 'ACTIVO'),
(2, 'DIRECCION', '2018-11-21 08:41:19', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantones`
--

CREATE TABLE `cantones` (
  `id` int(4) NOT NULL,
  `idProv` int(4) NOT NULL,
  `nombreCanton` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cantones`
--

INSERT INTO `cantones` (`id`, `idProv`, `nombreCanton`) VALUES
(1, 1, 'CUENCA'),
(2, 1, 'GIRON'),
(3, 1, 'GUALACEO'),
(4, 1, 'NABON'),
(5, 1, 'PAUTE'),
(6, 1, 'PUCARA'),
(7, 1, 'SAN FERNANDO'),
(8, 1, 'SANTA ISABEL'),
(9, 1, 'SIGSIG'),
(10, 1, 'OÑA'),
(11, 1, 'CHORDELEG'),
(12, 1, 'EL PAN'),
(13, 1, ' SEVILLA DE ORO'),
(14, 1, ' GUACHAPALA'),
(15, 1, 'CAMILO PONCE ENRIQUE'),
(16, 2, 'CALUMA'),
(17, 2, 'CHILLANES'),
(18, 2, 'CHIMBO'),
(19, 2, 'ECHEADÍA'),
(20, 2, 'GUARANDA'),
(21, 2, 'LAS NAVES'),
(22, 2, 'SAN MIGUEL'),
(23, 3, 'AZOGUEZ'),
(24, 3, 'BIBLIÁN'),
(25, 3, 'CANAR'),
(26, 3, 'DÉLEG'),
(27, 3, 'EL TAMBO'),
(28, 3, 'LA TRONCAL'),
(29, 3, 'SUSCAL'),
(30, 4, 'BOLÍVAR'),
(31, 4, 'ESPEJO'),
(32, 4, 'MIRA'),
(33, 4, 'MONTÚFAR'),
(34, 4, 'SAN PEDRO DE HUANCA'),
(35, 4, 'TULCÁN'),
(36, 5, 'ALAUSÍ'),
(37, 5, 'CHAMBO'),
(38, 5, 'CHUNCHI'),
(39, 5, 'COLTA'),
(40, 5, 'CUMANDÁ'),
(41, 5, 'GUAMOTE'),
(42, 5, 'GUANO'),
(43, 5, 'PALLATANGA'),
(44, 5, 'PENIPE'),
(45, 5, 'RIOBAMBA'),
(46, 6, 'LA MANÁ'),
(47, 6, 'LATACUNGA'),
(48, 6, 'PANGUA'),
(49, 6, 'PUJILÍ'),
(50, 6, 'SALCEDO'),
(51, 6, 'SAQUISILÍ'),
(52, 6, 'SIGCHOS'),
(53, 7, 'ARENILLAS'),
(54, 7, 'ATAHUALPA'),
(55, 7, 'BALSAS'),
(56, 7, 'CHILLA'),
(57, 7, 'EL GUABO'),
(58, 7, 'HUAQUILLAS'),
(59, 7, 'LAS LAJAS'),
(60, 7, 'MACHALA'),
(61, 7, 'MARCABELI'),
(62, 7, 'PASAJE'),
(63, 7, 'PIÑAS'),
(64, 7, 'PORTOVELO'),
(65, 7, 'SANTA ROSA'),
(66, 7, 'ZARUMA'),
(67, 8, 'ATACAMES'),
(69, 8, 'ELOY ALFARO'),
(70, 8, 'ESMERALDAS'),
(71, 8, 'LA CONCORDIA'),
(72, 8, 'MUISNE'),
(73, 8, 'QUININDE'),
(74, 8, 'RIOVERDE'),
(75, 8, 'SAN LORENZO'),
(76, 9, 'ISABELA'),
(77, 9, 'SAN CRISTÓBAL'),
(78, 9, 'SANTA CRUZ'),
(79, 10, 'ALFREDO BAQUERIZO MO'),
(80, 10, 'BALAO'),
(81, 10, 'BALZAR'),
(82, 10, 'COLIMES'),
(83, 10, 'DAULE'),
(84, 10, 'DURÁN'),
(85, 10, 'EL TRIUNFO'),
(86, 10, 'EMPALME'),
(87, 10, 'GNRAL. ANTONIO ELIZA'),
(88, 10, 'GUAYAQUIL'),
(89, 10, 'ISIDRO AYORA'),
(90, 10, 'LOMAS DE SARGENTILLO'),
(91, 10, 'MARCELINO MARIDUEÑA'),
(92, 10, 'MILAGRO'),
(93, 10, 'NARANJAL'),
(94, 10, 'NARANJITO'),
(95, 10, 'NOBOL'),
(96, 10, 'PALESTINA'),
(97, 10, 'PEDRO CARBO'),
(98, 10, 'PLAYAS'),
(99, 10, 'SALITRE'),
(100, 10, 'SAMBORONDÓN'),
(101, 10, 'SAN JACINTO DE YAGUA'),
(102, 10, 'SANTA  LUCÍA'),
(103, 10, 'SIMÓN BOLÍVAR'),
(104, 11, 'ANTONIO ANTE'),
(105, 11, 'COTACACHI'),
(106, 11, 'IBARRA'),
(107, 11, 'OTAVALO'),
(108, 11, 'PIMAMPIRO'),
(109, 11, 'SAN MIGUEL DE URCUQU'),
(110, 12, 'CALVAS'),
(111, 12, 'CATAMAYO'),
(112, 12, 'CELICA'),
(113, 12, 'CHAGUARPAMBA'),
(114, 12, 'ESPÍNDOLA'),
(115, 12, 'GONZANAMÁ'),
(116, 12, 'LOJA'),
(117, 12, 'MACARÁ'),
(118, 12, 'OLMEDO'),
(119, 12, 'PALTAS'),
(120, 12, 'PINDAL'),
(121, 12, 'PUYANGO'),
(122, 12, 'QUILANGA'),
(123, 12, 'SARAGURO'),
(124, 12, 'SOZORANGA'),
(125, 12, 'ZAPOTILLO'),
(126, 13, 'BABA'),
(127, 13, 'BAHOYO'),
(128, 13, 'BUENA FE'),
(129, 13, 'MOCACHE'),
(130, 13, 'MONTALVO'),
(131, 13, 'PALENQUE'),
(132, 13, 'PUEBLOVIEJO'),
(133, 13, 'QUEVEDO'),
(134, 13, 'QUINSALOMA'),
(135, 13, 'URDANETA'),
(136, 13, 'VALENCIA'),
(137, 13, 'VENTANAS'),
(138, 13, 'VINCES'),
(139, 14, '24 DE MAYO'),
(140, 14, 'BOLÍVAR'),
(141, 14, 'CHONE'),
(142, 14, 'EL CARMEN'),
(143, 14, 'FLAVIO ALFARO'),
(144, 14, 'JAMA'),
(145, 14, 'JARAMIJÓ'),
(146, 14, 'JIPIJAPA'),
(147, 14, 'JUNÍN'),
(148, 14, 'MANTA'),
(149, 14, 'MONTECRISTI'),
(150, 14, 'OLMEDO'),
(151, 14, 'PAJÁN'),
(152, 14, 'PEDERNALES'),
(153, 14, 'PICHINCHA'),
(154, 14, 'PORTOVIEJO'),
(155, 14, 'PUERTO LÓPEZ'),
(156, 14, 'ROCAFUERTE'),
(157, 14, 'SAN VICENTE'),
(158, 14, 'SANTA ANA'),
(159, 14, 'SUCRE'),
(160, 14, 'TOSAGUA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudadano`
--

CREATE TABLE `ciudadano` (
  `ciudadano_cod` int(11) NOT NULL,
  `ciud_nombres` varchar(100) NOT NULL,
  `ciud_apellidoPate` varchar(50) NOT NULL,
  `ciud_apellidoMate` varchar(50) NOT NULL,
  `ciud_dni` char(8) NOT NULL,
  `ciud_sexo` char(1) NOT NULL,
  `ciud_fechaNacimiento` date NOT NULL,
  `ciud_direccion` varchar(250) NOT NULL,
  `ciud_telefono` char(9) NOT NULL,
  `ciud_movil` char(9) NOT NULL,
  `ciud_email` varchar(80) NOT NULL,
  `ciud_fecharegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `ciud_estado` enum('ACTIVO','INACTIVO') NOT NULL,
  `ciud_tipo` enum('NATURAL','JURIDICA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudadano`
--

INSERT INTO `ciudadano` (`ciudadano_cod`, `ciud_nombres`, `ciud_apellidoPate`, `ciud_apellidoMate`, `ciud_dni`, `ciud_sexo`, `ciud_fechaNacimiento`, `ciud_direccion`, `ciud_telefono`, `ciud_movil`, `ciud_email`, `ciud_fecharegistro`, `ciud_estado`, `ciud_tipo`) VALUES
(4, 'PIERO', 'AVILA', 'MERCADO', '7334017', 'M', '2018-11-21', 'MI CASA', '222', '9292', 'sjjs@gmail.com', '2018-11-21 06:54:46', 'ACTIVO', 'JURIDICA'),
(5, 'sddsds', 'sdds', 'hghsh', '237236', 'M', '2018-11-12', 'hgsghgshd', '3232', '2332', 'weew', '2018-11-21 07:10:04', 'ACTIVO', 'JURIDICA'),
(6, 'sdsd', 'sfsd', 'sdsd', '3232', 'M', '2016-12-22', 'sdas', '22', '3232', 'sdsd@gmail.com', '2018-11-21 07:11:24', 'ACTIVO', 'JURIDICA'),
(7, 'sdds', 'jwejewj', 'jjewj', '238328', 'M', '2018-11-12', 'jewjewj', '23', '32232323', 'sds', '2018-11-21 07:13:09', 'ACTIVO', 'JURIDICA'),
(8, 'jhhdf', 'jsjh', 'kjjhdsjh', '87238732', 'M', '2018-11-19', 'jhsjjhshjd', '434', '3443', 'sdsdds', '2018-11-21 07:15:21', 'ACTIVO', 'JURIDICA'),
(9, 'YASMIN', 'YASMIN', 'YASMIN', '222', 'F', '2017-10-21', 'YASMIN', '23', '23', 'sdds', '2018-11-21 07:41:23', 'ACTIVO', 'NATURAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ciudadano`
--

CREATE TABLE `detalle_ciudadano` (
  `detalleciudadano_cod` int(11) NOT NULL,
  `ciudadano_cod` int(11) NOT NULL,
  `documento_cod` char(13) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_ciudadano`
--

INSERT INTO `detalle_ciudadano` (`detalleciudadano_cod`, `ciudadano_cod`, `documento_cod`) VALUES
(28, 9, 'DOC-000001'),
(29, 9, 'DOC-000002'),
(30, 5, 'DOC-000003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_institucion`
--

CREATE TABLE `detalle_institucion` (
  `detalleinstitucion_cod` int(11) NOT NULL,
  `institucion_cod` int(11) NOT NULL,
  `documento_cod` char(13) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `documento_cod` char(13) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Codigo auto-incrementado del documento',
  `doc_asunto` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Asunto del documento',
  `doc_fecha_recepcion` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'fecha del registro del documento',
  `tipoDocumento_cod` int(11) NOT NULL COMMENT 'codigo del tipo de documentos',
  `area_cod` int(11) NOT NULL COMMENT 'Destino del documento',
  `usu_cod` int(11) NOT NULL COMMENT 'Codigo de Usuario',
  `doc_estado` enum('PENDIENTE','ACEPTADO','RECHAZADO') COLLATE utf8_unicode_ci NOT NULL COMMENT 'estado del documento',
  `doc_tipo` enum('I','C') COLLATE utf8_unicode_ci NOT NULL,
  `doc_documento` varchar(350) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Entidad Documento';

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`documento_cod`, `doc_asunto`, `doc_fecha_recepcion`, `tipoDocumento_cod`, `area_cod`, `usu_cod`, `doc_estado`, `doc_tipo`, `doc_documento`) VALUES
('DOC-000001', 'HFGHFGHTGH', '2021-08-19 06:36:10', 1, 2, 1, 'PENDIENTE', 'C', 'Archivo/611dfbda3c8d3-ANEXO 1_SOLICITUD PARA AUDIENCIA DE MEDIACIOìN.pdf'),
('DOC-000002', 'FGHFGHFGHGHFGH', '2021-08-19 06:46:35', 3, 2, 1, 'PENDIENTE', 'C', 'Archivo/611dfe4b4c5bc-CASOS SUJETOS A MEDIACIOìN (1).docx'),
('DOC-000003', 'KKKKK', '2021-08-19 06:49:51', 4, 2, 1, 'PENDIENTE', 'C', 'Archivo/611dff0f79d7b-CASOS SUJETOS A MEDIACIOìN (1).docx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `id` int(4) NOT NULL,
  `idM` int(4) NOT NULL,
  `materia1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`id`, `idM`, `materia1`) VALUES
(1, 1, 'FIJACIÓN, AUMENTO O DISMINUCIÓN DE PENSIONES ALIME'),
(2, 1, 'ALIMENTOS CONGRUOS'),
(3, 1, 'RÉGIMEN DE VISITAS'),
(4, 1, 'ALIMENTOS PARA MUJER EMBARAZADA'),
(5, 1, 'FÓRMULA DE PAGO DE LIQUIDACIÓN DE ALIMENTOS'),
(6, 1, 'TENENCIA (POR DERIVACIÓN JUDICIAL  Y CON INFORMES '),
(7, 2, 'DEMARCACIÓN DE LINDEROS'),
(8, 2, 'COBRO DE DEUDAS'),
(9, 2, 'INCUMPLIMIENTO DE CONTRATO'),
(10, 2, 'INDEMNIZACIÓN POR DAÑOS Y PERJUICIOS'),
(11, 2, 'SERVIDUMBRES'),
(12, 3, 'PRESCRIPCIÓN ADQUISITIVA DE DOMINIO'),
(13, 3, 'AMPARO POSESORIO'),
(14, 3, 'ACCIÓN REIVINDICATORIA'),
(15, 3, 'LIQUIDACIÓN DE SOCIEDAD CONYUGAL'),
(16, 3, 'AMPARO POSESORIO'),
(17, 3, 'DAÑO MORAL'),
(18, 4, 'PAGO DE CÁNONES DE ARRENDAMIENTOS ATRASADOS'),
(19, 4, 'DESOCUPACIÓN DEL INMUEBLE'),
(20, 4, 'DEVOLUCIÓN DE GARANTÍA'),
(21, 4, 'INCUMPLIMIENTO DE CONTRATO DE ARRENDAMIENTO'),
(22, 5, 'FORMA DE PAGO DE LIQUIDACIÓN LABORAL'),
(23, 5, 'FORMA DE PAGO DE JUBILACIÓN PATRONAL'),
(24, 5, 'PAGO DE SUELDOS ATRASADOS'),
(25, 6, 'FÓRMULA DE PAGO DE ALÍCUOTAS ATRASADAS'),
(26, 6, 'USO DE ÁREAS COMUNALES'),
(27, 6, 'RESPETO DE NORMAS DE CONVIVENCIA COMUNITARIA (ESTA'),
(28, 6, 'DAÑOS Y PERJUICIOS DE ÍNFIMA CUANTÍA'),
(29, 7, 'PAGO DE SERVICIOS BÁSICOS'),
(30, 7, 'RECLAMOS SOBRE CALIDAD DE BIENES'),
(31, 7, 'RECLAMOS POR PUBLICIDAD ENGAÑOSA'),
(32, 7, 'RECLAMOS POR MALA CALIDAD DE SERVICIOS'),
(33, 8, '(POR REMISIÓN)'),
(34, 9, '(DERIVACIONES DE PROCESOS DE ADOLESCENTES INFRACTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `institucion_cod` int(11) NOT NULL,
  `inst_nombre` varchar(150) NOT NULL,
  `inst_tipoinstitucion` varchar(50) NOT NULL,
  `inst_estado` enum('ACTIVO','INACTIVO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`institucion_cod`, `inst_nombre`, `inst_tipoinstitucion`, `inst_estado`) VALUES
(1, 'BITEC', 'INSTITUTO', 'ACTIVO'),
(2, 'SAN PEDRO', 'UNIVERSIDAD', 'INACTIVO'),
(3, 'CESAR VALLEJO', 'UNIVERSIDAD', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `nombreMat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `nombreMat`) VALUES
(1, 'FAMILIA\r\n'),
(2, 'CIVIL\r\n'),
(3, 'SOLO POR DERIVACIÓN JUDICIAL\r\n'),
(4, 'INQUILINATO\r\n'),
(5, 'LABORAL\r\n \r\n'),
(6, 'CONVIVENCIA SOCIAL O VECINAL\r\n'),
(7, 'DERECHOS DE CONSUMIDORES Y USUARIOS\r\n'),
(8, 'TRÁNSITO \r\n'),
(9, 'ADOLESCENTES INFRACTORES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `personal_cod` int(11) NOT NULL,
  `pers_nombres` varchar(100) NOT NULL,
  `pers_apellidoPate` varchar(50) NOT NULL,
  `pers_apellidoMate` varchar(50) NOT NULL,
  `pers_dni` char(8) NOT NULL,
  `pers_sexo` char(1) NOT NULL,
  `pers_fechaNacimiento` date NOT NULL,
  `pers_direccion` varchar(250) NOT NULL,
  `pers_telefono` char(9) NOT NULL,
  `pers_movil` char(9) NOT NULL,
  `pers_email` varchar(80) NOT NULL,
  `pers_fecharegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `pers_estado` enum('ACTIVO','INACTIVO') NOT NULL,
  `usuario_cod` int(11) NOT NULL,
  `pers_puesto` enum('DIRECTOR','SECRETARIA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`personal_cod`, `pers_nombres`, `pers_apellidoPate`, `pers_apellidoMate`, `pers_dni`, `pers_sexo`, `pers_fechaNacimiento`, `pers_direccion`, `pers_telefono`, `pers_movil`, `pers_email`, `pers_fecharegistro`, `pers_estado`, `usuario_cod`, `pers_puesto`) VALUES
(1, 'MAYK', 'DE', 'LA CRUZ', '7777', 'M', '1996-01-29', 'MI CASA', '111111', '982255930', 'janiro_avila@gmail.com', '2018-11-14 07:27:52', 'ACTIVO', 1, 'DIRECTOR'),
(8, 'MAYK', 'ASISTENTE', 'ASISTENTE', '73340318', 'M', '1996-07-04', 'NI IDEA', '982255930', '043506219', 'SUCASI@GMAIL.COM', '2018-11-23 11:22:20', 'ACTIVO', 10, 'SECRETARIA'),
(9, 'ESTALIN ', 'ALVARADO', 'VACA', '07043078', 'M', '1982-02-18', 'BOLIVAR Y COLON', '', '097852258', 'estalinalvarado@gmail.com', '2021-08-18 05:48:19', 'ACTIVO', 11, 'DIRECTOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(4) NOT NULL,
  `NombreProv` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `NombreProv`) VALUES
(1, 'AZUAY'),
(2, 'BOLÍVAR'),
(3, 'CAÑAR'),
(4, 'CARCHI'),
(5, 'CHIMBORAZO'),
(6, 'COTOPAXI'),
(7, 'EL ORO'),
(8, 'ESMERALDAS'),
(9, 'GALÁPAGOS'),
(10, 'GUAYAS'),
(11, 'IMBABURA'),
(12, 'LOJA'),
(13, 'LOS RÍOS'),
(14, 'MANABÍ'),
(15, 'MORONA SANTIAGO'),
(16, 'NAPO'),
(17, 'ORELLANA'),
(18, 'PASTAZA'),
(19, 'PICHINCHA'),
(20, 'SANTA ELENA'),
(21, 'SANTO DOMINGO DE LOS'),
(22, 'SUCUMBÍOS'),
(23, 'TUNGURAHUA'),
(24, 'ZAMORA CHINCHIPE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id` int(4) NOT NULL,
  `cedula` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id`, `cedula`) VALUES
(11, '1236456'),
(12, '0704307842');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_mediacion`
--

CREATE TABLE `solicitud_mediacion` (
  `id` int(4) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `numeroTelfC` varchar(20) NOT NULL,
  `telfCasa` varchar(20) NOT NULL,
  `provinciasUsu` varchar(50) NOT NULL,
  `cantones` varchar(50) NOT NULL,
  `parroquia` varchar(100) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `grupoEtnico` varchar(100) NOT NULL,
  `atencionPrioritaria` varchar(50) NOT NULL,
  `personaJuridica` varchar(50) NOT NULL,
  `repLegal` varchar(50) NOT NULL,
  `nombreAbo` varchar(100) NOT NULL,
  `telfOficinaAb` varchar(20) NOT NULL,
  `telfCelularAb` varchar(20) NOT NULL,
  `casilla` varchar(50) NOT NULL,
  `cuantia` varchar(50) NOT NULL,
  `cedulaIn` varchar(15) NOT NULL,
  `nombresIn` varchar(50) NOT NULL,
  `apellidosIn` varchar(50) NOT NULL,
  `correoIn` varchar(50) NOT NULL,
  `numeroTelfCIn` varchar(15) NOT NULL,
  `telfCasaIn` varchar(20) NOT NULL,
  `provinciasIn` varchar(50) NOT NULL,
  `cantonesIn` varchar(50) NOT NULL,
  `parroquiaIn` varchar(100) NOT NULL,
  `direccioDomIn` varchar(50) NOT NULL,
  `generoIn` varchar(50) NOT NULL,
  `nacionalidadIn` varchar(15) NOT NULL,
  `etnicoIn` varchar(50) NOT NULL,
  `atencionPrioritariaIn` varchar(50) NOT NULL,
  `personaJuridicaIn` varchar(50) NOT NULL,
  `repLegalIn` varchar(50) NOT NULL,
  `nombreAboIn` varchar(100) NOT NULL,
  `telefOficinaInAb` varchar(20) NOT NULL,
  `telfCelularInAb` varchar(20) NOT NULL,
  `casillaIn` varchar(20) NOT NULL,
  `cuantiaIn` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `materia1` varchar(150) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `numeroEpxSolicitud` varchar(100) NOT NULL,
  `conflictoBreveDes` varchar(2000) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `numJuicio` varchar(100) NOT NULL,
  `opcion1` varchar(20) NOT NULL,
  `exaEsp` varchar(20) NOT NULL,
  `opcion2` varchar(20) NOT NULL,
  `nroPrcArv` varchar(50) NOT NULL,
  `actaMediacion` varchar(50) NOT NULL,
  `año` varchar(10) NOT NULL,
  `nroActa` varchar(20) NOT NULL,
  `nroExp` varchar(20) NOT NULL,
  `conocioMediacion` varchar(100) NOT NULL,
  `codExpSol` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud_mediacion`
--

INSERT INTO `solicitud_mediacion` (`id`, `cedula`, `nombres`, `apellidos`, `correo`, `numeroTelfC`, `telfCasa`, `provinciasUsu`, `cantones`, `parroquia`, `domicilio`, `genero`, `nacionalidad`, `grupoEtnico`, `atencionPrioritaria`, `personaJuridica`, `repLegal`, `nombreAbo`, `telfOficinaAb`, `telfCelularAb`, `casilla`, `cuantia`, `cedulaIn`, `nombresIn`, `apellidosIn`, `correoIn`, `numeroTelfCIn`, `telfCasaIn`, `provinciasIn`, `cantonesIn`, `parroquiaIn`, `direccioDomIn`, `generoIn`, `nacionalidadIn`, `etnicoIn`, `atencionPrioritariaIn`, `personaJuridicaIn`, `repLegalIn`, `nombreAboIn`, `telefOficinaInAb`, `telfCelularInAb`, `casillaIn`, `cuantiaIn`, `materia`, `materia1`, `fecha`, `numeroEpxSolicitud`, `conflictoBreveDes`, `opcion`, `numJuicio`, `opcion1`, `exaEsp`, `opcion2`, `nroPrcArv`, `actaMediacion`, `año`, `nroActa`, `nroExp`, `conocioMediacion`, `codExpSol`) VALUES
(639, '0704307842', 'Maria Elizabeth', 'Contreras Caiminagua', 'contreras@gmail.com', '097528741', '072852410', '7', 'PASAJE', 'Ochoa Leon', 'Bolivar y Colon', 'Femenino', 'ecuatoriana', 'MESTIZO', 'NINGUNAS DE LAS OPCIONES', 'no', 'no', 'Ab. Angel Nagua', '072852451', '0939918569', 'no', 'no', '0704307842', 'Estalin Fernando', 'Alvarado Vaca', 'estalinalvarado@gmail.com', '098520147', '0939918569', '7', '62', 'Ochoa Leon', 'Bolivar y Colon', 'Masculino', 'ecuatoriana', 'MESTIZO', 'NINGUNAS DE LAS OPCIONES', 'no', 'no', 'Ab. Carlos Cajamarca', '072741852', '095410258', 'no', 'no', '1', 'FIJACIÓN, AUMENTO O DISMINUCIÓN DE PENSIONES ALIME', '2021-08-15', '2021-2540', 'La mediación es un procedimiento de solución de conflictos, por el cual las partes asistidas por un tercero neutral llamado mediador, procuran un acuerdo voluntario de beneficio mutuo que verse sobre materia transigible, de carácter extrajudicial y definitivo, que ponga fin al conflicto, con la misma validez que la sentencia de un juez o jueza, sin la necesidad de acudir a instancias judiciales.', 'Si Unidad Judicial', '2111', 'Si o Auditoria', '5444', 'Si', '5444', 'Si Centro de Mediacion', '2020', '5666', '855', 'TELEVISION, RADIO,PRENSA', 'COIP-CM-WBF-07-00425');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `tipodocumento_cod` int(11) NOT NULL COMMENT 'Codigo auto-incrementado del tipo documento',
  `tipodo_descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Descripcion del  tipo documento',
  `tipodo_estado` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'estado del tipo de documento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Entidad Documento';

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`tipodocumento_cod`, `tipodo_descripcion`, `tipodo_estado`) VALUES
(1, 'TIPO UNO', 'ACTIVO'),
(2, 'TIPO 2', 'ACTIVO'),
(3, 'SD', 'ACTIVO'),
(4, 'SDGDFGF', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `cod_tipousuario` int(11) NOT NULL,
  `tipusu_descripcion` varchar(40) NOT NULL,
  `tipusu_estado` enum('ACTIVO','INACTIVO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`cod_tipousuario`, `tipusu_descripcion`, `tipusu_estado`) VALUES
(1, 'ADMINISTRADOR', 'ACTIVO'),
(2, 'ASISTENTE', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos`
--

CREATE TABLE `titulos` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `expediente` varchar(20) NOT NULL,
  `yo` varchar(50) NOT NULL,
  `solicitar` varchar(100) NOT NULL,
  `señor` varchar(50) NOT NULL,
  `finalidad` varchar(100) NOT NULL,
  `breve` varchar(50) NOT NULL,
  `mate1` varchar(10) NOT NULL,
  `mate2` varchar(10) NOT NULL,
  `porLoQ` varchar(20) NOT NULL,
  `solicitante` varchar(10) NOT NULL,
  `nombreSoli` varchar(20) NOT NULL,
  `perJur` varchar(20) NOT NULL,
  `repLeg` varchar(20) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `geneRo` varchar(20) NOT NULL,
  `etnicoG` varchar(20) NOT NULL,
  `prioritaria` varchar(20) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `domicilio` varchar(20) NOT NULL,
  `parroquia` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `abogado` varchar(20) NOT NULL,
  `telefAbogado` varchar(20) NOT NULL,
  `casilleroAbCorreo` varchar(20) NOT NULL,
  `informo1` varchar(100) NOT NULL,
  `si` varchar(20) NOT NULL,
  `no` varchar(10) NOT NULL,
  `numjuicio` varchar(20) NOT NULL,
  `informo2` varchar(100) NOT NULL,
  `sis` varchar(10) NOT NULL,
  `noo` varchar(20) NOT NULL,
  `exaEsp` varchar(20) NOT NULL,
  `informo3` varchar(100) NOT NULL,
  `sii` varchar(10) NOT NULL,
  `nos` varchar(20) NOT NULL,
  `nroProcesoArb` varchar(20) NOT NULL,
  `informo4` varchar(100) NOT NULL,
  `siMediacion` varchar(100) NOT NULL,
  `nossss` varchar(15) NOT NULL,
  `año/nroActa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `titulos`
--

INSERT INTO `titulos` (`id`, `ciudad`, `fecha`, `expediente`, `yo`, `solicitar`, `señor`, `finalidad`, `breve`, `mate1`, `mate2`, `porLoQ`, `solicitante`, `nombreSoli`, `perJur`, `repLeg`, `nacionalidad`, `geneRo`, `etnicoG`, `prioritaria`, `cedula`, `domicilio`, `parroquia`, `telefono`, `correo`, `abogado`, `telefAbogado`, `casilleroAbCorreo`, `informo1`, `si`, `no`, `numjuicio`, `informo2`, `sis`, `noo`, `exaEsp`, `informo3`, `sii`, `nos`, `nroProcesoArb`, `informo4`, `siMediacion`, `nossss`, `año/nroActa`) VALUES
(1, 'Datos del Solicitante:', 'Fecha:', 'Expediente  No:', 'Yo:', ',solicito una mediacion con el/la', 'señor/a:', ', con la finalidad de \r\nllegar a un acuerdo en: ', ' (breve determinación del conflicto): ', 'Materia:', 'Casos suje', 'Por lo que a continu', 'SOLICITANT', 'Nombres:', 'Juridica Empresa', 'Representante Legal:', 'Nacionalidad:', 'Género:', 'Grupo Étnico:', 'Grupo de Atención  P', 'No. de cédula / pasa', 'Dirección domiciliar', 'Parroquia:', 'Teléfonos:', 'Correo electrónico:', 'Nombre del abogado: ', 'Teléfonos: ', 'Casilla Judicial /  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `usu_nombre` varchar(30) NOT NULL,
  `usu_clave` varchar(30) NOT NULL,
  `usu_estado` enum('ACTIVO','INACTIVO') DEFAULT NULL,
  `cod_tipousuario` int(11) NOT NULL,
  `usu_foto` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `usu_nombre`, `usu_clave`, `usu_estado`, `cod_tipousuario`, `usu_foto`) VALUES
(1, 'admin', '2356', 'ACTIVO', 1, 'Fotos/admin.png'),
(10, 'asistente', '1234567', 'ACTIVO', 2, 'Fotos/admin.png'),
(11, 'Estalin', '123', 'ACTIVO', 1, 'Fotos/admin.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_cod`),
  ADD UNIQUE KEY `unico` (`area_nombre`);

--
-- Indices de la tabla `cantones`
--
ALTER TABLE `cantones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
  ADD PRIMARY KEY (`ciudadano_cod`),
  ADD KEY `cod_ciudona` (`ciud_nombres`);

--
-- Indices de la tabla `detalle_ciudadano`
--
ALTER TABLE `detalle_ciudadano`
  ADD PRIMARY KEY (`detalleciudadano_cod`),
  ADD KEY `ciudadano_cod` (`ciudadano_cod`),
  ADD KEY `fd` (`documento_cod`);

--
-- Indices de la tabla `detalle_institucion`
--
ALTER TABLE `detalle_institucion`
  ADD PRIMARY KEY (`detalleinstitucion_cod`),
  ADD KEY `institucion_cod` (`institucion_cod`),
  ADD KEY `sd` (`documento_cod`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`documento_cod`),
  ADD KEY `area_cod` (`area_cod`),
  ADD KEY `tipoDocumento_cod` (`tipoDocumento_cod`),
  ADD KEY `usu_cod` (`usu_cod`);

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`institucion_cod`),
  ADD UNIQUE KEY `unico` (`inst_nombre`) USING BTREE;

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`personal_cod`),
  ADD KEY `cod_persona` (`pers_nombres`),
  ADD KEY `personal_ibfk_1` (`usuario_cod`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`tipodocumento_cod`),
  ADD UNIQUE KEY `IU_COD_TIPDOCUMENTO` (`tipodocumento_cod`) USING BTREE COMMENT 'EL CODIGO SERA UNICO',
  ADD KEY `IX_NOMBRE` (`tipodo_descripcion`) USING BTREE COMMENT 'SE ORDENARA LOS DATOS POR LA DESCRIPCION';

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`cod_tipousuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`),
  ADD KEY `cod_tipousuario` (`cod_tipousuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `area_cod` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo auto-incrementado del movimiento del area', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
  MODIFY `ciudadano_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `detalle_ciudadano`
--
ALTER TABLE `detalle_ciudadano`
  MODIFY `detalleciudadano_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `detalle_institucion`
--
ALTER TABLE `detalle_institucion`
  MODIFY `detalleinstitucion_cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `institucion_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `personal_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `tipodocumento_cod` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Codigo auto-incrementado del tipo documento', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `cod_tipousuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_ciudadano`
--
ALTER TABLE `detalle_ciudadano`
  ADD CONSTRAINT `detalle_ciudadano_ibfk_1` FOREIGN KEY (`ciudadano_cod`) REFERENCES `ciudadano` (`ciudadano_cod`),
  ADD CONSTRAINT `detalle_ciudadano_ibfk_2` FOREIGN KEY (`documento_cod`) REFERENCES `documento` (`documento_cod`);

--
-- Filtros para la tabla `detalle_institucion`
--
ALTER TABLE `detalle_institucion`
  ADD CONSTRAINT `detalle_institucion_ibfk_1` FOREIGN KEY (`institucion_cod`) REFERENCES `institucion` (`institucion_cod`),
  ADD CONSTRAINT `detalle_institucion_ibfk_2` FOREIGN KEY (`documento_cod`) REFERENCES `documento` (`documento_cod`);

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`area_cod`) REFERENCES `area` (`area_cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `documento_ibfk_2` FOREIGN KEY (`tipoDocumento_cod`) REFERENCES `tipo_documento` (`tipodocumento_cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `documento_ibfk_3` FOREIGN KEY (`usu_cod`) REFERENCES `usuario` (`cod_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`usuario_cod`) REFERENCES `usuario` (`cod_usuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cod_tipousuario`) REFERENCES `tipo_usuario` (`cod_tipousuario`);
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"bd_tramite\",\"table\":\"solicitud_mediacion\"},{\"db\":\"bd_tramite\",\"table\":\"registrodeusuario\"},{\"db\":\"bd_tramite\",\"table\":\"prueba\"},{\"db\":\"bd_tramite\",\"table\":\"cantones\"},{\"db\":\"bd_tramite\",\"table\":\"provincias\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-07-31 02:49:43', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"es\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `sistema`
--
CREATE DATABASE IF NOT EXISTS `sistema` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sistema`;
--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
