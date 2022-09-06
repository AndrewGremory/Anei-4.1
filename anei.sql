-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2022 a las 20:53:31
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
-- Base de datos: `anei`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ahorro`
--

CREATE TABLE `ahorro` (
  `cedula_ahorro` bigint(20) NOT NULL,
  `valor_ahorro` bigint(20) NOT NULL,
  `fecha_ahorro` date NOT NULL,
  `hora_ahorro` time NOT NULL,
  `nombre_ahorro` varchar(40) NOT NULL,
  `codigo_ahorro` varchar(40) NOT NULL,
  `kilos_ahorro` bigint(20) NOT NULL,
  `cantidad_ahorro` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisisfisico`
--

CREATE TABLE `analisisfisico` (
  `codigo_analisisfisico` varchar(40) NOT NULL,
  `fecha_analisisfisico` date NOT NULL,
  `almendra_total` float(10,1) NOT NULL,
  `almendra_sana` float(10,1) NOT NULL,
  `broca` float(10,1) NOT NULL,
  `broca_punto` float(10,1) NOT NULL,
  `negro` float(10,1) NOT NULL,
  `vinagre` float(10,1) NOT NULL,
  `humedad` float(10,1) NOT NULL,
  `factor` float(10,1) NOT NULL,
  `observaciones_analisisfisico` varchar(40) NOT NULL,
  `almendra_sana1` float(10,1) NOT NULL,
  `almendra_total1` float(10,1) NOT NULL,
  `broca1` float(10,1) NOT NULL,
  `broca_punto1` float(10,1) NOT NULL,
  `negro1` float(10,1) NOT NULL,
  `vinagre1` float(10,1) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_analisisfisico` varchar(40) NOT NULL,
  `evaluado` varchar(40) NOT NULL,
  `destare` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisissensorial`
--

CREATE TABLE `analisissensorial` (
  `codigo_sensorial` varchar(40) NOT NULL,
  `fecha_sensorial` date NOT NULL,
  `puntaje_scaa` float(10,1) NOT NULL,
  `acidez` varchar(40) NOT NULL,
  `notas` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_sensorial` varchar(40) NOT NULL,
  `cedula_sensorial` bigint(20) NOT NULL,
  `evaluado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociados`
--

CREATE TABLE `asociados` (
  `nombre_usuario` varchar(40) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `vereda` varchar(40) NOT NULL,
  `finca` varchar(40) NOT NULL,
  `fecha_registro` date NOT NULL,
  `cedula_usuario` bigint(20) NOT NULL,
  `codigo_up` varchar(40) NOT NULL,
  `estatus` varchar(40) NOT NULL,
  `contacto` bigint(20) NOT NULL,
  `cupo_cafe` bigint(20) NOT NULL,
  `tipo_vinculacion` varchar(40) NOT NULL,
  `cupo_cacao` bigint(20) NOT NULL,
  `numero` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asociados`
--

INSERT INTO `asociados` (`nombre_usuario`, `municipio`, `vereda`, `finca`, `fecha_registro`, `cedula_usuario`, `codigo_up`, `estatus`, `contacto`, `cupo_cafe`, `tipo_vinculacion`, `cupo_cacao`, `numero`) VALUES
('test', 'Valledupar', 'Valledupar', 'No sé ', '2022-09-06', 123123, '123123', 'estandar', 1231, 0, 'estandar', 0, 45),
('keterine', 'san diego', 'ceiva', 'la esperanza', '2022-09-04', 234234, '234234', 'estandar', 4324, 0, 'estandar', 0, 44),
('adriana', 'valledupar', 'ceiva', 'la esperanza', '2022-08-31', 34234234, '34234234', 'organico', 24123432, 5000, 'estandar', 0, 43);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `cedula` bigint(20) NOT NULL,
  `producto` varchar(40) NOT NULL,
  `unidad` varchar(10) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `numero_estopas` bigint(20) NOT NULL,
  `estado_estopas` varchar(40) NOT NULL,
  `numero_sacos` bigint(20) NOT NULL,
  `estado_sacos` varchar(40) NOT NULL,
  `observaciones` varchar(40) NOT NULL,
  `fecha_compra` date NOT NULL,
  `kilos_brutos` bigint(20) NOT NULL,
  `kilos_netos` bigint(20) NOT NULL,
  `municipio_compra` varchar(40) NOT NULL,
  `tipo_grano` varchar(40) NOT NULL,
  `latas_compra` bigint(20) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_compra` varchar(40) NOT NULL,
  `evaluado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlsecadora`
--

CREATE TABLE `controlsecadora` (
  `cod_secadora` bigint(20) NOT NULL,
  `fecha_secadora` date NOT NULL,
  `hora_secadora` time NOT NULL,
  `municipio` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fijar`
--

CREATE TABLE `fijar` (
  `nombre` varchar(40) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `cantidad` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `anio` year(4) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `clave` bigint(20) NOT NULL,
  `producto` varchar(40) NOT NULL,
  `estatus` varchar(40) NOT NULL,
  `precio` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidacion`
--

CREATE TABLE `liquidacion` (
  `codigo_liquidacion` varchar(40) NOT NULL,
  `precio_dia` bigint(20) NOT NULL,
  `rendimiento` bigint(20) NOT NULL,
  `bonificacion` bigint(20) NOT NULL,
  `prima` bigint(20) NOT NULL,
  `precio_final` bigint(20) NOT NULL,
  `subtotal` bigint(20) NOT NULL,
  `fecha_liquidacion` date NOT NULL,
  `hora_liquidacion` time NOT NULL,
  `politica` varchar(40) NOT NULL,
  `observaciones_liquidacion` varchar(40) NOT NULL,
  `dian` float(20,1) NOT NULL,
  `asociados` bigint(20) NOT NULL,
  `neto_pagar` bigint(20) NOT NULL,
  `ahorro` bigint(20) NOT NULL,
  `total_ahorro` bigint(20) NOT NULL,
  `kilos_liquidacion` bigint(20) NOT NULL,
  `cedula_liquidacion` bigint(20) NOT NULL,
  `aporte` bigint(20) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_liquidacion` varchar(40) NOT NULL,
  `producto_liquidacion` varchar(40) NOT NULL,
  `descuento_secado` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noasociados`
--

CREATE TABLE `noasociados` (
  `cedula_noasociados` bigint(20) NOT NULL,
  `centro_acopio` varchar(40) NOT NULL,
  `fecha_noasociado` date NOT NULL,
  `nombres_completos` varchar(60) NOT NULL,
  `contacto_noasociado` bigint(20) NOT NULL,
  `tipo_cliente` varchar(40) NOT NULL,
  `municipio_noasociado` varchar(40) NOT NULL,
  `vereda_noasociado` varchar(40) NOT NULL,
  `finca_noasociado` varchar(40) NOT NULL,
  `producion_noasociado` float(10,1) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `tipo` varchar(40) NOT NULL,
  `precio` bigint(20) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `prima_producto` bigint(20) NOT NULL,
  `politica` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`tipo`, `precio`, `descripcion`, `prima_producto`, `politica`, `nombre`, `numero`) VALUES
('estandar', 16000, 'café regular', 0, 'politica1', 'cafe pergamino seco', 11),
('organico', 20000, 'el mejor', 1500, 'politica1', 'cafe pergamino seco', 12),
('estandar', 13000, 'cafe regular', 0, 'politica1', 'cafe mojado', 13),
('organico', 13000, 'cafe mojado tipo organico', 1500, 'politica1', 'cafe mojado', 14),
('estandar', 7500, 'cacao seco tipo estandar\n', 0, 'politica1', 'cacao seco', 15),
('organico', 21000, 'cafe pergamino seco tipo organico', 1000, 'politica2', 'cafe pergamino seco', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultadosecado`
--

CREATE TABLE `resultadosecado` (
  `codigo_resultado` varchar(40) NOT NULL,
  `fecha_resultado` date NOT NULL,
  `cantidad_resultado` bigint(20) NOT NULL,
  `costo_resultado` bigint(20) NOT NULL,
  `costo_total_resultado` bigint(20) NOT NULL,
  `observaciones_resultado` varchar(40) NOT NULL,
  `tipo_pago` varchar(40) NOT NULL,
  `tipograno_resultado` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_resultado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiro`
--

CREATE TABLE `retiro` (
  `cedula_retiro` bigint(20) NOT NULL,
  `fecha_retiro` date NOT NULL,
  `hora_retiro` time NOT NULL,
  `valor_retiro` bigint(20) NOT NULL,
  `nombre_retiro` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secado`
--

CREATE TABLE `secado` (
  `producto_secado` varchar(40) NOT NULL,
  `numero_latas` bigint(20) NOT NULL,
  `fecha_secado` date NOT NULL,
  `tipo_usuario` varchar(40) NOT NULL,
  `observaciones_secado` varchar(40) NOT NULL,
  `humedad_secado` varchar(40) NOT NULL,
  `codigo_secado` varchar(40) NOT NULL,
  `cedula_secado` bigint(20) NOT NULL,
  `municipio_secado` varchar(40) NOT NULL,
  `tiposecado_resultado` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_secado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secadora`
--

CREATE TABLE `secadora` (
  `codigo_secadora` bigint(20) NOT NULL,
  `codigo_producto` varchar(40) NOT NULL,
  `cantidad_secadora` bigint(20) NOT NULL,
  `lote` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secadora`
--

INSERT INTO `secadora` (`codigo_secadora`, `codigo_producto`, `cantidad_secadora`, `lote`) VALUES
(0, 'FDFSD', 344, 'LOTE - valledupar - 2022-09-05 - 0'),
(145, 'FDFSD', 343, 'LOTE - valledupar - 2022-09-05 - 1'),
(145, 'wqwqwq', 1232, 'LOTE - valledupar - 2022-09-05 - 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `cedula_turno` bigint(20) NOT NULL,
  `municipio_turno` varchar(40) NOT NULL,
  `fecha_turno` date NOT NULL,
  `hora_turno` time NOT NULL,
  `turno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombres` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `rol` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombres`, `correo`, `telefono`, `municipio`, `cedula`, `usuario`, `clave`, `rol`) VALUES
('Jorge', 'jorge@gerente.com', 123, 'valledupar', 13, 'gerente', '123', 'gerente'),
('angie', 'angie@liquidadora.com', 123, 'codazzi', 123, 'liquidador', '123', 'liquidador'),
('rafa', 'rafa@gmail.com', 123, 'valledupar', 1234, 'analista', '123', 'analista'),
('Analisis sensorial', 'analista@gmail.com', 132, 'pueblo bello', 12345, 'sensorial', '123', 'analista sensorial'),
('pedro', 'maria@gmail.com', 25345, 'valledupar', 23432, '123', '123', 'administrador'),
('Analista fisico', 'fisico@gmail.com', 123, 'pueblo bello', 123456, 'fisico', '123', 'analista fisico'),
('Andres Amaya', 'andresamayap123123@gmai.com', 3125724379, 'valledupar', 1003376525, 'admin', '123', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ahorro`
--
ALTER TABLE `ahorro`
  ADD PRIMARY KEY (`codigo_ahorro`);

--
-- Indices de la tabla `analisisfisico`
--
ALTER TABLE `analisisfisico`
  ADD PRIMARY KEY (`codigo_analisisfisico`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `analisissensorial`
--
ALTER TABLE `analisissensorial`
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `asociados`
--
ALTER TABLE `asociados`
  ADD PRIMARY KEY (`codigo_up`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`marca`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `controlsecadora`
--
ALTER TABLE `controlsecadora`
  ADD PRIMARY KEY (`cod_secadora`);

--
-- Indices de la tabla `fijar`
--
ALTER TABLE `fijar`
  ADD UNIQUE KEY `clave` (`clave`);

--
-- Indices de la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `noasociados`
--
ALTER TABLE `noasociados`
  ADD PRIMARY KEY (`cedula_noasociados`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `resultadosecado`
--
ALTER TABLE `resultadosecado`
  ADD PRIMARY KEY (`codigo_resultado`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `secado`
--
ALTER TABLE `secado`
  ADD PRIMARY KEY (`codigo_secado`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisisfisico`
--
ALTER TABLE `analisisfisico`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `analisissensorial`
--
ALTER TABLE `analisissensorial`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `asociados`
--
ALTER TABLE `asociados`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `controlsecadora`
--
ALTER TABLE `controlsecadora`
  MODIFY `cod_secadora` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fijar`
--
ALTER TABLE `fijar`
  MODIFY `clave` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noasociados`
--
ALTER TABLE `noasociados`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `resultadosecado`
--
ALTER TABLE `resultadosecado`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `secado`
--
ALTER TABLE `secado`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
