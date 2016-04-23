
CREATE TABLE `tm_usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_codigo` varchar(100) NOT NULL,
  `usuario_nombre_completo` varchar(100) NOT NULL,
  `usuario_password` varchar(100) NOT NULL,
  `usuario_bloqueado` int(11) NOT NULL,
  `usuario_intentos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `agile-pm-dev`.tm_usuarios(
   usuario_id
  ,usuario_codigo
  ,usuario_nombre_completo
  ,usuario_password
  ,usuario_bloqueado
  ,usuario_intentos
) VALUES (
   1 -- usuario_id - IN int(11)
  ,'icarballo' -- usuario_codigo - IN varchar(100)
  ,'Isaac Carballo' -- usuario_nombre_completo - IN varchar(100)
  ,'mg18' -- usuario_password - IN varchar(100)
  ,0 -- usuario_bloqueado - IN int(11)
  ,0 -- usuario_intentos - IN int(11)
)
