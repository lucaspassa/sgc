-- Prueba Git Otra prueba
-- Volcado de datos para la tabla `permisos`
--
INSERT INTO `permisos` (`codigoPermiso`, `descripcion`) VALUES
('TODO', 'Todos los permisos');
--
-- Volcado de datos para la tabla `roles`
--
INSERT INTO `roles` (`idRol`, `nombreRol`, `descripcion`) VALUES
(1, 'administrador', 'administrador');

-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `rol_permiso`
--

INSERT INTO `rol_permiso` (`codigoPermiso`, `idRol`) VALUES
('TODO', 1);

-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `clave`, `fechaAlta`, `idRol`) VALUES
(1, 'matias', 'matias', '2016-05-06', 1),
(2, 'diego', 'diego', '2016-05-06', 1),
(3, 'lucas', 'lucas', '2016-05-06', 1),
(4, 'bruno', 'bruno', '2016-05-06', 1),
(5, 'bauty', 'bauty', '2016-05-06', 1),
(6, 'daniel', 'daniel', '2016-05-06', 1);
