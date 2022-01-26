-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 11-07-2021 a las 19:02:02
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Base de datos: `dbtecnoshop`

-- --------------------------------------------------------------------------------------------------------------------------------------------

-- Estructura de tabla para la tabla `tbcategoria`

DROP TABLE IF EXISTS `tbcategoria`;
CREATE TABLE IF NOT EXISTS `tbcategoria`(
	`id_categoria` int(15) NOT NULL AUTO_INCREMENT,
	`categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`id_categoria`)
) 	ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbcategoria`
--

INSERT INTO `tbcategoria` (`id_categoria`, `categoria`) VALUES 
	(1, 'Celulares'),
	(2, 'Tablets'),
	(3, 'Televisores'),
	(4, 'Computadoras'),
	(5, 'Consolas y Videojuegos');

-- --------------------------------------------------------------------------------------------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbciudad`
--

DROP TABLE IF EXISTS `tbciudad`;
CREATE TABLE IF NOT EXISTS `tbciudad` (
	`id_ciudad` int(15) NOT NULL AUTO_INCREMENT,
	`ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`id_ciudad`)
) 	ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbciudad`
--

INSERT INTO `tbciudad` (`id_ciudad`, `ciudad`) VALUES
	(1, 'Quito'),
	(2, 'Guayaquil'),
	(3, 'Cuenca'),
	(4, 'Machala'),
	(5, 'Ambato');

-- --------------------------------------------------------------------------------------------------------------------------------------------

--
-- Estructura de tabla para la tabla `tborden`
--

DROP TABLE IF EXISTS `tborden`;
CREATE TABLE IF NOT EXISTS `tborden` (
	`id_orden` int(15) NOT NULL AUTO_INCREMENT,
	`id_usuario` int(15) NOT NULL,
	`fecha_compra` date NOT NULL,
	`fecha_entrega` date NOT NULL,
	`ciudad` int(15) NOT NULL,
	`direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`total` double NOT NULL,
	`estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`id_orden`)
) 	ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tborden`
--

INSERT INTO `tborden` (`id_orden`, `id_usuario`, `fecha_compra`, `fecha_entrega`, `ciudad`, `direccion`, `nombre`, `total`, `estado`) VALUES
	(1, 1, '2021-12-17', '2021-12-20', 2, 'Sauces 6', 'David',0.33, 'pendiente'),
	(2, 2, '2021-12-17', '2021-12-20', 2, 'Pradera', 'Lian',0.33, 'pendiente');

-- --------------------------------------------------------------------------------------------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproducto`
--

DROP TABLE IF EXISTS `tbproducto`;
CREATE TABLE IF NOT EXISTS `tbproducto` (
	`id_producto` int(15) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`id_categoria` int(15) NOT NULL,
	`precio` double NOT NULL,
	`stock` int(15) NOT NULL,
	`marca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`id_producto`)
) 	ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbproducto`
--

INSERT INTO `tbproducto` (`id_producto`, `nombre`, `descripcion`, `id_categoria`, `precio`, `stock`, `marca`, `img`) VALUES
	-- Celulares
	(1, 'Celular Umidigi', 'Celular Umidigi A11, 4GB, 128GB, dual sim', 1, 162.65, 50, 'Umudigi', 'Imagenes/Celular1.jpg'),
	(2, 'Celular Xiaomi Redmi Note 9', 'Celular Xiaomi Redmi Note 9, 128GB, Dual Sim', 1, 228.89, 50, 'Xiaomi', 'Imagenes/Celular2.jpg'),
	-- Tablets
	(3, 'Tablet Amazon Fire 7', 'Tablet Amazon Fire 7 16GB, 2019, VARIOS COLORES', 2, 78.75, 50, 'Amazon', 'Imagenes/Tablet1.jpg'),
	(4, 'Tablet Amazon Fire 8', 'Tablet Amazon Fire 8 pulg, 32GB, modelo 2020', 2, 110.25, 50, 'Amazon', 'Imagenes/Tablet2.jpg'),
	-- Televisores
	(5, 'Televisor TCL 32" HD Android', 'Modelo:32S60A
	Pulgadas: 32"
	Color: Negro Ultradelgado
	Resolución: HD, HDR
	HDR: Decodificacion HDR 2K
	Incluye: Control con mando de Voz 
	Entradas:(1) HDMI,(1) HDMI ARC & MHL, (1) USB 2.0, Componentes(AV), LAN, Audio Óptico, Aux In 
	Bluetooth: Si 
	Memoria: Memoria ROM 8GB
	Procesador CPU CA53*4 64bit 
	Wifi integrado: Si 
	Certificados de Google Android Certificado por Google Android Google Android TV UI y TCL TV + 3.0 UI Certificacion CB CTS (Certificación oficial de Google)', 3, 271.95, 20, 'TCL', 'Imagenes/Televisor1.jpg'),
	(6, 'Televisor Led 55" TCL Curve HD', 'Uhd4000r curved screenMetallic frame9.9mm narrow frame11mm super slimMinimalist design standArt design individual speakerCertified netflixCertified you tubeCrackleTcl app store (zeasn)Tv + os 2.0Sports modeQuick startPvrFull funcional remote controlQuad core a7 1ghz cpuDual core mali450mp2 400mhz1 gb ddr + 4gb flashHdmi 1.4*3 usb 2.0*2', 3, 586.96, 20, 'TCL', 'Imagenes/Televisor2.jpg'),
	-- Computadoras
	(7, 'Laptop HP Core i5 11va, 12gb, 512gb, 14pulg, w10 Con Aro de Luz Gratis', 'Microprocesador: Intel® Core ™ i5-1135G7 (hasta 4,2 GHz con tecnología Intel® Turbo Boost, 8 MB de caché L3, 4 colores)
	Chipset: SoC integrado Intel®
	Memoria, estándar: SDRAM DDR4-2666 de 12 GB (1 x 4 GB, 1 x 8 GB)
	Gráficos de video: Gráficos Intel® Iris® Xᵉ
	Disco duro: SSD PCIe® NVMe ™ M.2 de 512 GB
	Unidad óptica no incluida
	Monitor: 35,6 cm (14 ") en diagonal, FHD (1920 x 1080), IPS, microborde, BrightView, 250 nits, 45% NTSC
	Conectividad inalámbrica: Combinación de Intel® Wi-Fi 6 AX201 (2x2) y Bluetooth® 5 (compatible con velocidades de transferencia de archivos Gigabit)
	Ranuras de expansión: 1 lector de tarjetas multimedia SD multiformato
	Puertos externos:
	1 velocidad de señalización SuperSpeed ​​USB Type-C® 5Gbps 
	2 Velocidad de señalización de 5 Gbps USB tipo A SuperSpeed
	1 HDMI 1.4b
	1 pin inteligente de CA
	1 combo de auriculares / micrófono
	Dimensiones mínimas (An x Pr x Al): 32,4 x 22,5 x 1,79 centímetros
	Peso: 1,46 kilogramos
	Tipo de fuente de alimentación: Adaptador de alimentación de CA inteligente de 45 W
	Tipo de Batería: Iones de litio de 3 celdas y 41 Wh
	Cámara HD HP True Vision 720p con micrófonos digitales integrados de matriz dual
	Funciones de audio: Altavoces duales
	Sistema operativo: Windows 10 Home 64', 4, 855.75, 5, 'HP', 'Imagenes/Laptop1.jpg'),
	(8, 'Laptop MSI Gaming Core i7, 512GB, 8GB, GTX1650 4GB', 'Sistema Operativo: Microsoft Windows 10. 
	Procesador: Intel Core i7-9750H de 2,4 GHz. 
	Almacenamiento: SSD NVMe 512 GB. 
	Memoria RAM: 8 GB de RAM DDR4-2666. 
	NVIDIA GeForce GTX1650 Ti Max-Q 4GB GDDR6. 
	Sin unidad óptica. 
	Pantalla IPS Full HD de 15,6" (1920x1080). 
	Puertos: USB 3.1; 1 x USB 3.2 (Gen 1 Tipo-C); 3 x USB 3.2 (Gen 1 Tipo-A) 1x HDMI; 1x LAN RJ-45; 1x Audio. 
	Cámara HD HP Wide Vision de 720p con micrófonos digitales de matriz dual integrados. 
	Audio: 2 altavoces de 2,0 W. Conectividad: Combinación Wi-Fi (802.11) y Bluetooth 5. 
	Batería Polímero de litio de 3 celdas. 
	Dimensiones: 14,13 x 9,99 x 0,85 pulgadas.', 4, 1291.49, 5, 'MSI', 'Imagenes/Laptop2.jpg');
	/*-- Consolas y Videojuegos
	(9, 'Consola Super Nintendo, 400 juegos, 2 palancas', 'CARACTERISTICAS:
	Estilo retro 400 juegos 2 palancas
	Introducir la AC 220 VSalida DC 6V-150mA
	400 juegos incorporados
	Tamaño de la consola: 14.6 * 11.1 * 5cm
	El paquete incluye: 1 * consola de juegos 2 * manijas de cable1 * Cable AV1 * adaptador de corriente1 * Manual de usuario', 5, 19.95, 5, 'ONE', 'Imagenes/Consolas1.jpg'),
	(10, 'Palanca Gamepad Bluetooth', 'Palanca control gamer bluetooth gamepad Android celular', 5, 13.65, 5, 'ONE', 'Imagenes/Consolas2.jpg');
	*/
-- --------------------------------------------------------------------------------------------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
	`id_usuario` int(15) NOT NULL AUTO_INCREMENT,
	`usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`contrasena` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`id_ciudad` int(15) NOT NULL,
	`celular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`id_usuario`)
)	ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`id_usuario`, `usuario`, `contrasena`, `nombre`, `apellido`, `email`, `direccion`, `id_ciudad`, `celular`) VALUES
	(1, 'admin', '12345', 'admin', 'admin', 'admin@ups.edu.ec', 'servidor', 2, '0994907777'),
	(2, 'david22', '12345', 'David', 'Aguilar', 'daguilarr1@est.ups.edu.ec', 'UPS Centenario', 2, '0994907778'),
	(3, 'lian22', '12345', 'Lian', 'Mejia', 'lmejiag@est.ups.edu.ec', 'UPS Centenario', 2, '0994907779');
	COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
