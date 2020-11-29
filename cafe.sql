-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2020 a las 03:18:09
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafe`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarUsu` (IN `_ID_Usuarios` INT)  begin
	select * from usuarios where ID_Usuarios=_ID_Usuarios;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EditarUsuarios` (IN `_ID_Usuarios` INT, IN `_Nombre_Usuario` VARCHAR(40), IN `_Apellido_Pa_Usuario` VARCHAR(40), IN `_Apellido_Ma_Usuario` VARCHAR(40), IN `_Edad` INT, IN `_Sexo` BOOLEAN, IN `_UserNme` VARCHAR(30), IN `_Psswr` VARCHAR(20), IN `_estado` INT)  begin
	
		update usuarios set
		Apellido_Ma_Usuario=_Apellido_Ma_Usuario,Edad=_Edad,Sexo=_Sexo,UserNme=_UserNme,Psswr=_Psswr,estado=_estado
        where ID_Usuarios=_ID_Usuarios;
	
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Eliminar_Us` (IN `_Nombre_Usuario` VARCHAR(40))  begin
	delete from usuarios where Nombre_Usuario=_Nombre_Usuario;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuario` (IN `_ID_Usuarios` INT, IN `_Nombre_Usuario` VARCHAR(40), IN `_Apellido_Pa_Usuario` VARCHAR(40), IN `_Apellido_Ma_Usuario` VARCHAR(40), IN `_Edad` INT, IN `_Sexo` BOOLEAN, IN `_UserNme` VARCHAR(30), IN `_Psswr` VARCHAR(20), IN `_estado` INT)  begin
		insert into proveedores
        (_Nombre_Usuario,_Apellido_Pa_Usuario,_Apellido_Ma_Usuario,_Edad,_Sexo,_UserNme,_Psswr,_estado)
		values (Nombre_Usuario,Apellido_Pa_Usuario,Apellido_Ma_Usuario,Edad,Sexo,UserNme,Psswr,estado);
    
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Proce_Almac_Proveedores` (IN `_ID_Proveedores` INT, IN `_Nombre_proveedor` VARCHAR(30), IN `_CorreoElectronico_proveedor` VARCHAR(30), IN `_RazonSocual_Proveedor` VARCHAR(30), IN `_estado` INT, IN `accion` VARCHAR(20))  begin
	case accion
    when 'nuevo' then 
		insert into proveedores(Nombre_proveedor,CorreoElectronico_proveedor, RazonSocual_Proveedor,estado)
		values (_Nombre_proveedor,_CorreoElectronico_proveedor,_RazonSocual_Proveedor,_estado);
    when 'editar' then 
		update proveedores set
        Nombre_proveedor=_Nombre_proveedor,CorreoElectronico_proveedor=_CorreoElectronico_proveedor,RazonSocual_Proveedor=_RazonSocual_Proveedor,estado=_estado
        where ID_Proveedores=_ID_Proveedores;
	when 'eliminar' then
		delete from proveedores where ID_Proveedores=_ID_Proveedores;
	when 'consultar' then 
		select * from proveedores where ID_Proveedores=_ID_Proveedores;
    end case;    
    
end$$

--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `NombreCompl` (`_ID_Usuarios` INT) RETURNS VARCHAR(50) CHARSET latin1 NO SQL
BEGIN 
    	DECLARE NOmbre_ap varchar(50);
        SET NOmbre_ap = (SELECT CONCAT (Nombre_Usuario," ",Apellido_Pa_Usuario," ", Apellido_Ma_Usuario) 
        FROM usuarios 
        WHERE ID_Usuarios=_ID_Usuarios);

RETURN NOmbre_ap;

END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `numProductosNombr` (`P_nombre` VARCHAR(50)) RETURNS INT(5) NO SQL
BEGIN

declare numeroProductosN int;
    
    select count(*) into numeroProductosN
    from productos
    where Nombre_Productos=P_nombre;
    
    return numeroProductosN;
 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_pro`
--

CREATE TABLE `categorias_pro` (
  `ID_Categorias_Pro` int(11) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `condicion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias_pro`
--

INSERT INTO `categorias_pro` (`ID_Categorias_Pro`, `categoria`, `Nombre`, `condicion`) VALUES
(4, 'liquida y gaseosa', 'comida1', 1),
(14, 'BEBIDAS CALIENTES', 'CHOCOLATE', 1),
(15, 'BEBIDAS CALIENTES', 'CHOCOLATE DESLACTOSADO', 1),
(19, 'BEBIDAS CALIENTES', 'CHOCLATE BLANCO DESLACTOS', 1),
(20, 'BEBIDAS CALIENTES', 'CHOCOLATE AL ROMPOPE', 1),
(22, 'BEBIDAS CALIENTES', 'CHOCOLATE CON BOMBONES', 1),
(28, 'BEBIDAS CALIENTES', 'CAPUCCINO ROMPOPE', 1),
(29, 'BEBIDAS CALIENTES', 'CAPUCCINO MENTA', 1),
(30, 'BEBIDAS CALIENTES', 'CAPUCCINO AVELLANA', 0),
(31, 'BEBIDAS CALIENTES', 'CAPUCCINO VAINILLA', 0),
(32, 'BEBIDAS CALIENTES', 'CAPUCCINO CAJETA', 0),
(33, 'BEBIDAS CALIENTES', 'CAPUCCINO AMARETO', 0),
(34, 'BEBIDAS CALIENTES', 'CAPUCCINO CON BOMBONES', 0),
(35, 'BEBIDAS CALIENTES', 'CAPUCCINO DESLACTOSADO', 0),
(36, 'BEBIDAS CALIENTES', 'TISANA FRUTOS ROJOS', 0),
(37, 'BEBIDAS CALIENTES', 'TISANA FRESA KIWI', 0),
(38, 'BEBIDAS CALIENTES', 'TISANA FRESA MANGO', 0),
(39, 'BEBIDAS CALIENTES', 'TISANA MORAS', 0),
(40, 'BEBIDAS CALIENTES', 'TELLI', 0),
(41, 'BEBIDAS CALIENTES', 'TÉ MANZANILLA', 0),
(42, 'BEBIDAS CALIENTES', 'TÉ LIMÓN', 0),
(44, 'BEBIDAS CALIENTES', 'LIMONADA', 0),
(45, 'BEBIDAS CALIENTES', 'NARANJADA', 0),
(46, 'BEBIDAS FRÍAS', 'HORCHATA DE CAFÉ', 0),
(47, 'BEBIDAS FRÍAS', 'TISANA FRÍA FRUTOS ROJOS', 0),
(48, 'BEBIDAS FRÍAS', 'TISANA FRÍA MORAS', 0),
(49, 'BEBIDAS FRÍAS', 'TISANA FRÍA FRESA KIWI', 0),
(50, 'BEBIDAS FRÍAS', 'TISANA FRÍA FRESA MANGO', 0),
(51, 'BEBIDAS FRÍAS', 'TÉ FRÍO LIMÓN', 0),
(52, 'BEBIDAS FRÍAS', 'TÉ FRÍO MANZANILLA', 0),
(53, 'BEBIDAS FRÍAS', 'SMOOTHIE', 0),
(54, 'BEBIDAS FRÍAS', 'CHAMORELLI', 0),
(55, 'BEBIDAS FRÍAS', 'FRAPPÉ TRADICIONAL', 0),
(56, 'BEBIDAS FRÍAS', 'FRAPPÉ ROMPOPE', 0),
(57, 'BEBIDAS FRÍAS', 'FRAPPÉ FRESA', 0),
(58, 'BEBIDAS FRÍAS', 'FRAPPÉ CHOCOLATE', 0),
(59, 'BEBIDAS FRÍAS', 'FRAPPÉ VAINILLA', 0),
(60, 'BEBIDAS FRÍAS', 'FRAPPÉ GRIEGO', 0),
(61, 'BEBIDAS FRÍAS', 'FRAPPÉ AVELLANA', 0),
(62, 'BEBIDAS FRÍAS', 'FRAPPÉ BOMBÓN', 0),
(63, 'BEBIDAS FRÍAS', 'FRAPPÉ AMARETO', 0),
(64, 'BEBIDAS FRÍAS', 'FRAPPÉ MENTA', 0),
(65, 'BEBIDAS FRÍAS', 'FRAPPÉ OREO', 0),
(66, 'BEBIDAS FRÍAS', 'FRAPPÉ CHOCOMENTA', 0),
(67, 'BEBIDAS FRÍAS', 'FRAPPÉ CHOCOAVELLANA', 0),
(68, 'BEBIDAS FRÍAS', 'FRAPPÉ HIERBABUENA', 0),
(69, 'BEBIDAS FRÍAS', 'FRAPPÉ CAJETA', 0),
(70, 'BEBIDAS FRÍAS', 'FRAPPÉ NUTELLA', 0),
(71, 'BEBIDAS FRÍAS', 'AGUA NATURAL', 0),
(72, 'BEBIDAS FRÍAS', 'AGUA MINERAL', 0),
(73, 'BEBIDAS FRÍAS', 'COCA COLA', 0),
(74, 'POSTRES', 'WAFFLES CON FRUTA', 0),
(75, 'POSTRES', 'WAFFLES DULCES CON QUESO', 0),
(76, 'POSTRES', 'WAFFLES MERMELADA', 0),
(77, 'POSTRES', 'WAFFLES NUTELLA', 0),
(78, 'POSTRES', 'WAFFLES CHOCOLATE', 0),
(79, 'POSTRES', 'WAFFLES LECHERA', 0),
(80, 'POSTRES', 'WAFFLES CAJETA', 0),
(81, 'POSTRES', 'WAFFLES MIEL', 0),
(82, 'POSTRES', 'PASTEL DE ZANAHORIA', 0),
(83, 'POSTRES', 'CHEESECAKE MAZAPÁN', 0),
(84, 'POSTRES', 'CHEESECAKE NUTELLA', 0),
(85, 'POSTRES', 'CHEESECAKE ZARZAMORA', 0),
(86, 'POSTRES', 'CHEESECAKE FRAMBUESA', 0),
(87, 'POSTRES', 'CHEESECAKE OREO', 0),
(88, 'POSTRES', 'CHEESECAKE CHOCOMENTA', 0),
(89, 'POSTRES', 'GALLETAS MANTEQUILLA', 0),
(90, 'POSTRES', 'GALLETAS AVENA', 0),
(91, 'POSTRES', 'CUPCAKE OREO', 0),
(92, 'POSTRES', 'CUPCAKE ZARZAMORA', 0),
(93, 'POSTRES', 'CUPCAKE CHOCOLATE', 0),
(94, 'POSTRES', 'CUPCAKE VAINILLA', 0),
(95, 'POSTRES', 'CUPCAKE NUTELLA', 0),
(96, 'POSTRES', 'CUPCAKE PHILADELPHIA', 0),
(97, 'POSTRES', 'CUPCAKE FRESA', 0),
(98, 'POSTRES', 'CUPCAKE RELLENO NUTELLA', 0),
(99, 'POSTRES', 'CUERNITO DULCE CHOCOLATE', 0),
(100, 'POSTRES', 'CUERNITO DULCE LECHERA', 0),
(101, 'POSTRES', 'CUERNITO DULCE MIEL', 0),
(102, 'POSTRES', 'CUERNITO DULCE NUTELLA', 0),
(103, 'POSTRES', 'CUERNITO DULCE MERMELADA', 0),
(104, 'SNACKS', 'ENSALADA JAMÓN QUESO', 0),
(105, 'SNACKS', 'ENSALADA ATÚN', 0),
(106, 'SNACKS', 'ENSALADA PRIMAVERA', 0),
(107, 'SNACKS', 'ENSALADA ATÚN QUESO', 0),
(108, 'SNACKS', 'CUERNITO JAMÓN', 0),
(109, 'SNACKS', 'CUERNITO ATÚN', 0),
(110, 'SNACKS', 'CUERNITO 3 QUESOS', 0),
(111, 'SNACKS', 'CUERNITO VEGETARIANO', 0),
(112, 'SNACKS', 'WAFFLES JAMÓN QUESO', 0),
(113, 'CAFÉ MOLIDO', '1 KG CAFÉ GOURMET', 0),
(114, 'CAFÉ MOLIDO', '1/2 KG CAFÉ GOURMET', 0),
(115, 'CAFÉ MOLIDO', '1/4 KG CAFÉ GOURMET', 0),
(116, 'CAFÉ MOLIDO', '1 KG CAFÉ PREMIUM', 0),
(117, 'CAFÉ MOLIDO', '1/2 KG CAFÉ PREMIUM', 0),
(118, 'CAFÉ MOLIDO', '1/4 KG CAFÉ PREMIUM', 0),
(119, 'wer 3', 'as', 0),
(120, '', '', 0),
(121, '', '', 0),
(122, 'sd', '', 0),
(123, 'e', 'er', 0),
(124, 'd', '', 0),
(125, '', '', 0),
(126, 'asidugiusohiou', 'sdlk', 0),
(127, 'crack', 'crack', 0),
(128, 'rob', 'rob', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `datos_proveedor`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `datos_proveedor` (
`Nombre` varchar(30)
,`Correo_Electronico` varchar(30)
,`Municipio` varchar(20)
,`Direccion` varchar(56)
,`Codigo_Postal` int(11)
,`Tipo_de_Telefono` varchar(10)
,`Numero_de_Telefono` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `datos_usua`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `datos_usua` (
`Nombre_Completo` varchar(337)
,`Direccion` varchar(62)
,`Edad` int(11)
,`Sexo` tinyint(1)
,`Usuario` varchar(255)
,`Contraseña` varchar(255)
,`tipoDe_Telefono` varchar(10)
,`Numero_Telefonico` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones_proveedores`
--

CREATE TABLE `direcciones_proveedores` (
  `ID_Direccion_Proveedor` int(11) NOT NULL,
  `Estado_Repu` varchar(20) NOT NULL,
  `Municipio` varchar(20) NOT NULL,
  `Colonia` varchar(20) NOT NULL,
  `NombreCalle_Direccion` varchar(20) NOT NULL,
  `NumeroExterior_Direccion` int(11) NOT NULL,
  `NumeroInterior_Direccion` varchar(4) NOT NULL,
  `CodigoPostal_Direccion` int(11) NOT NULL,
  `ID_Proveedores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direcciones_proveedores`
--

INSERT INTO `direcciones_proveedores` (`ID_Direccion_Proveedor`, `Estado_Repu`, `Municipio`, `Colonia`, `NombreCalle_Direccion`, `NumeroExterior_Direccion`, `NumeroInterior_Direccion`, `CodigoPostal_Direccion`, `ID_Proveedores`) VALUES
(2, 'Puebla', 'Teziutlan', 'Atoluca', '7 de obtubre', 161, 'S/n', 7657, 2),
(3, 'Puebla', 'Teziutlán', 'Centro', 'Cuahutemoc', 1, '161', 73800, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones_usuarios`
--

CREATE TABLE `direcciones_usuarios` (
  `ID_Direccion_Usuario` int(11) NOT NULL,
  `Estado_Repu` varchar(20) NOT NULL,
  `Municipio` varchar(20) NOT NULL,
  `Colonia` varchar(20) NOT NULL,
  `NombreCalle_Direccion` varchar(20) NOT NULL,
  `NumeroExterior_Direccion` int(11) NOT NULL,
  `NumeroInterior_Direccion` varchar(4) NOT NULL,
  `CodigoPostal_Direccion` int(11) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direcciones_usuarios`
--

INSERT INTO `direcciones_usuarios` (`ID_Direccion_Usuario`, `Estado_Repu`, `Municipio`, `Colonia`, `NombreCalle_Direccion`, `NumeroExterior_Direccion`, `NumeroInterior_Direccion`, `CodigoPostal_Direccion`, `id`) VALUES
(7, 'Mexico121', 'Capital', 'CMDX', 'asdfgh', 32, '90', 1234, 2),
(8, 'puebla', 'Teziutlan', 'San Sebas', 'casa de vic', 12, '65', 73800, 3),
(9, 'DF', 'CDM', 'CMDX', 'asdfgh', 12, '12', 76, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_Productos` int(11) NOT NULL,
  `Nombre_Productos` varchar(50) NOT NULL,
  `Precio_DeVenta_Productos` int(11) NOT NULL,
  `Fecha_Entrada` date NOT NULL,
  `Fecha_Salida` date NOT NULL,
  `ID_Categorias_Pro` int(11) NOT NULL,
  `ID_Proveedores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_Productos`, `Nombre_Productos`, `Precio_DeVenta_Productos`, `Fecha_Entrada`, `Fecha_Salida`, `ID_Categorias_Pro`, `ID_Proveedores`) VALUES
(129, 'lechita nido', 23, '2019-11-08', '2019-11-20', 19, 1),
(136, 'lechita nido', 30, '2019-11-03', '2019-10-15', 4, 2),
(138, 'Café gourtmet', 40, '2019-12-01', '2019-12-04', 113, 7),
(139, 'Smoothie', 35, '2019-11-01', '2019-12-04', 53, 6),
(140, 'Cuernito 3 Quesos', 28, '2019-11-02', '2019-12-04', 110, 7),
(141, 'Ensalada Primavera', 50, '2019-12-03', '2019-12-06', 106, 9),
(142, 'Galleta Avena', 30, '2019-12-03', '2019-12-07', 90, 4);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `productos_adquiridos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `productos_adquiridos` (
`Nombre_Productos` varchar(50)
,`Precio_DeVenta_Productos` int(11)
,`categoria` varchar(20)
,`Nombre_proveedor` varchar(30)
,`CorreoElectronico_proveedor` varchar(30)
,`Numero_Telefono` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_ventas`
--

CREATE TABLE `productos_ventas` (
  `ID_Productos_Ventas` int(11) NOT NULL,
  `Precio_Producto` varchar(30) NOT NULL,
  `Cantidad_Producto` int(11) NOT NULL,
  `Importe` varchar(30) NOT NULL,
  `ID_Productos` int(11) NOT NULL,
  `ID_Ventas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `ID_Proveedores` int(11) NOT NULL,
  `Nombre_proveedor` varchar(30) NOT NULL,
  `CorreoElectronico_proveedor` varchar(30) NOT NULL,
  `RazonSocual_Proveedor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`ID_Proveedores`, `Nombre_proveedor`, `CorreoElectronico_proveedor`, `RazonSocual_Proveedor`) VALUES
(1, 'Miriam g', 'mriam@hotmail.com', 'ventas'),
(2, 'Rocio', '@Rocio.com', 'vender'),
(4, 'Leonel', 'leo@hotmail.com', 'venta'),
(6, 'Marco', 'Marco_mich@hotmail.com', 'promover'),
(7, 'La gondola', 'lagon@hotmail.com', 'Quesos'),
(8, 'Dulcima', 'dici@hotmail.com', 'Crema '),
(9, 'Pastora', 'pastorita@hotmail.com', 'Quesos'),
(10, 'Quesos del norte', 'QueseriaNor@hotmail.com', 'Vender quesos'),
(12, 'pro', 'pro', 'pro'),
(13, 'pruebA', 'prueba', 'prueba'),
(14, 'Dulsima', 'dulsima@hotmail.com', 'pro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos_proveedores`
--

CREATE TABLE `telefonos_proveedores` (
  `ID_Telefonos_Proveedores` int(11) NOT NULL,
  `tipoDe_Telefono` varchar(10) NOT NULL,
  `Numero_Telefono` varchar(15) NOT NULL,
  `ID_Proveedores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `telefonos_proveedores`
--

INSERT INTO `telefonos_proveedores` (`ID_Telefonos_Proveedores`, `tipoDe_Telefono`, `Numero_Telefono`, `ID_Proveedores`) VALUES
(2, 'Movil', '23110000', 2),
(3, 'Casa', '2311111', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos_usuarios`
--

CREATE TABLE `telefonos_usuarios` (
  `ID_Telefonos_Usuarios` int(11) NOT NULL,
  `tipoDe_Telefono` varchar(10) NOT NULL,
  `Numero_Telefono` varchar(15) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `telefonos_usuarios`
--

INSERT INTO `telefonos_usuarios` (`ID_Telefonos_Usuarios`, `tipoDe_Telefono`, `Numero_Telefono`, `id`) VALUES
(59, 'Celular', '2311556773', 2),
(60, 'Casita', '1234', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Apellido_Pa_Usuario` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Apellido_Ma_Usuario` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Sexo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `Apellido_Pa_Usuario`, `Apellido_Ma_Usuario`, `Edad`, `Sexo`) VALUES
(2, 'Jonathan', 'jonathan@jon', NULL, '$2y$10$J3NtvqWyrsSabvf7WVKclePUKrLPpmexEbHk.2.nifd9ZU0lTJ0Om', NULL, '2020-11-24 06:07:25', '2020-11-24 06:07:25', 'Gregorio', 'Patricio', 21, 1),
(3, 'rob', 'jon@jon', NULL, '$2y$10$qf0jLpZbb2vh8HdFgYKHCOvT/XnpqVxcO2ugE/yRhYrEe83tcS9WO', NULL, '2020-11-25 01:34:09', '2020-11-25 01:34:09', 'salaxar', 'como sea', 26, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID_Ventas` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `hora_venta` time NOT NULL,
  `Total_ven` varchar(30) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `ventas_realizada`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `ventas_realizada` (
`Nombre_Productos` varchar(50)
,`Precio_Producto` varchar(30)
,`Cantidad_Producto` int(11)
,`Importe` varchar(30)
,`fecha_venta` date
,`hora_venta` time
);

-- --------------------------------------------------------

--
-- Estructura para la vista `datos_proveedor`
--
DROP TABLE IF EXISTS `datos_proveedor`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datos_proveedor`  AS  select `pro`.`Nombre_proveedor` AS `Nombre`,`pro`.`CorreoElectronico_proveedor` AS `Correo_Electronico`,`dp`.`Municipio` AS `Municipio`,concat(`dp`.`Colonia`,', ',`dp`.`NombreCalle_Direccion`,', ','#',`dp`.`NumeroExterior_Direccion`) AS `Direccion`,`dp`.`CodigoPostal_Direccion` AS `Codigo_Postal`,`tp`.`tipoDe_Telefono` AS `Tipo_de_Telefono`,`tp`.`Numero_Telefono` AS `Numero_de_Telefono` from ((`proveedores` `pro` join `direcciones_proveedores` `dp` on(`pro`.`ID_Proveedores` = `dp`.`ID_Proveedores`)) join `telefonos_proveedores` `tp` on(`pro`.`ID_Proveedores` = `tp`.`ID_Proveedores`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `datos_usua`
--
DROP TABLE IF EXISTS `datos_usua`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datos_usua`  AS  select concat(`u`.`name`,' ',`u`.`Apellido_Pa_Usuario`,' ',`u`.`Apellido_Ma_Usuario`) AS `Nombre_Completo`,concat(`du`.`Municipio`,', ',`du`.`Colonia`,', numero ',`du`.`NumeroExterior_Direccion`) AS `Direccion`,`u`.`Edad` AS `Edad`,`u`.`Sexo` AS `Sexo`,`u`.`email` AS `Usuario`,`u`.`password` AS `Contraseña`,`tu`.`tipoDe_Telefono` AS `tipoDe_Telefono`,`tu`.`Numero_Telefono` AS `Numero_Telefonico` from ((`users` `u` join `telefonos_usuarios` `tu` on(`u`.`id` = `tu`.`id`)) join `direcciones_usuarios` `du` on(`u`.`id` = `du`.`id`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `productos_adquiridos`
--
DROP TABLE IF EXISTS `productos_adquiridos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productos_adquiridos`  AS  select `pr`.`Nombre_Productos` AS `Nombre_Productos`,`pr`.`Precio_DeVenta_Productos` AS `Precio_DeVenta_Productos`,`catp`.`categoria` AS `categoria`,`prov`.`Nombre_proveedor` AS `Nombre_proveedor`,`prov`.`CorreoElectronico_proveedor` AS `CorreoElectronico_proveedor`,`telpro`.`Numero_Telefono` AS `Numero_Telefono` from (((`productos` `pr` join `categorias_pro` `catp` on(`pr`.`ID_Categorias_Pro` = `catp`.`ID_Categorias_Pro`)) join `proveedores` `prov` on(`pr`.`ID_Proveedores` = `prov`.`ID_Proveedores`)) join `telefonos_proveedores` `telpro` on(`prov`.`ID_Proveedores` = `telpro`.`ID_Proveedores`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `ventas_realizada`
--
DROP TABLE IF EXISTS `ventas_realizada`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ventas_realizada`  AS  select `pro`.`Nombre_Productos` AS `Nombre_Productos`,`prov`.`Precio_Producto` AS `Precio_Producto`,`prov`.`Cantidad_Producto` AS `Cantidad_Producto`,`prov`.`Importe` AS `Importe`,`ve`.`fecha_venta` AS `fecha_venta`,`ve`.`hora_venta` AS `hora_venta` from ((`productos_ventas` `prov` join `productos` `pro` on(`prov`.`ID_Productos` = `pro`.`ID_Productos`)) join `ventas` `ve` on(`prov`.`ID_Ventas` = `ve`.`ID_Ventas`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias_pro`
--
ALTER TABLE `categorias_pro`
  ADD PRIMARY KEY (`ID_Categorias_Pro`);

--
-- Indices de la tabla `direcciones_proveedores`
--
ALTER TABLE `direcciones_proveedores`
  ADD PRIMARY KEY (`ID_Direccion_Proveedor`),
  ADD KEY `ID_Proveedores` (`ID_Proveedores`);

--
-- Indices de la tabla `direcciones_usuarios`
--
ALTER TABLE `direcciones_usuarios`
  ADD PRIMARY KEY (`ID_Direccion_Usuario`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_Productos`),
  ADD KEY `ID_Categorias_Pro` (`ID_Categorias_Pro`),
  ADD KEY `ID_Proveedores` (`ID_Proveedores`);

--
-- Indices de la tabla `productos_ventas`
--
ALTER TABLE `productos_ventas`
  ADD PRIMARY KEY (`ID_Productos_Ventas`),
  ADD KEY `ID_Productos` (`ID_Productos`),
  ADD KEY `ID_Ventas` (`ID_Ventas`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID_Proveedores`);

--
-- Indices de la tabla `telefonos_proveedores`
--
ALTER TABLE `telefonos_proveedores`
  ADD PRIMARY KEY (`ID_Telefonos_Proveedores`),
  ADD KEY `ID_Proveedores` (`ID_Proveedores`);

--
-- Indices de la tabla `telefonos_usuarios`
--
ALTER TABLE `telefonos_usuarios`
  ADD PRIMARY KEY (`ID_Telefonos_Usuarios`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID_Ventas`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias_pro`
--
ALTER TABLE `categorias_pro`
  MODIFY `ID_Categorias_Pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT de la tabla `direcciones_proveedores`
--
ALTER TABLE `direcciones_proveedores`
  MODIFY `ID_Direccion_Proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `direcciones_usuarios`
--
ALTER TABLE `direcciones_usuarios`
  MODIFY `ID_Direccion_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_Productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT de la tabla `productos_ventas`
--
ALTER TABLE `productos_ventas`
  MODIFY `ID_Productos_Ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `ID_Proveedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `telefonos_proveedores`
--
ALTER TABLE `telefonos_proveedores`
  MODIFY `ID_Telefonos_Proveedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `telefonos_usuarios`
--
ALTER TABLE `telefonos_usuarios`
  MODIFY `ID_Telefonos_Usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID_Ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `direcciones_proveedores`
--
ALTER TABLE `direcciones_proveedores`
  ADD CONSTRAINT `Direcciones_Proveedores` FOREIGN KEY (`ID_Proveedores`) REFERENCES `proveedores` (`ID_Proveedores`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `direcciones_usuarios`
--
ALTER TABLE `direcciones_usuarios`
  ADD CONSTRAINT `Direcciones_User` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `Productos_Categorioa_Pro` FOREIGN KEY (`ID_Categorias_Pro`) REFERENCES `categorias_pro` (`ID_Categorias_Pro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Productos_Proveedores` FOREIGN KEY (`ID_Proveedores`) REFERENCES `proveedores` (`ID_Proveedores`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos_ventas`
--
ALTER TABLE `productos_ventas`
  ADD CONSTRAINT `Productos_Vents_Productos` FOREIGN KEY (`ID_Productos`) REFERENCES `productos` (`ID_Productos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Productos_vents_Ventas` FOREIGN KEY (`ID_Ventas`) REFERENCES `ventas` (`ID_Ventas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `telefonos_proveedores`
--
ALTER TABLE `telefonos_proveedores`
  ADD CONSTRAINT `Telefonos_Proveedores` FOREIGN KEY (`ID_Proveedores`) REFERENCES `proveedores` (`ID_Proveedores`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `telefonos_usuarios`
--
ALTER TABLE `telefonos_usuarios`
  ADD CONSTRAINT `Telefono_User` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `Ventas_Users` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
