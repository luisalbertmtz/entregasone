CREATE TABLE IF NOT EXISTS `Bitacora` (
  `idBitacora` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `idUsuario` int(7) DEFAULT NULL COMMENT 'Id Usuario',
  `idProducto` int(7) NOT NULL,
  `accion` varchar(100) NOT NULL COMMENT 'Acción Realizada',
  `fechaCreacion` datetime,
  PRIMARY KEY (`idBitacora`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Bitácora de Eventos';


CREATE TABLE IF NOT EXISTS `Usuarios` (
  `idUsuario` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `username` varchar(50) NOT NULL COMMENT 'Nombre de Usuario',
  `nombreCompleto` varchar(80) NOT NULL COMMENT 'Nombre Completo',
  `password` varchar(50) NOT NULL COMMENT 'Password',
  `email` varchar(50) NOT NULL COMMENT 'E-mail',
  `telefono` varchar(50) NOT NULL COMMENT 'Telefono',
  `idRol` int(7) DEFAULT NULL COMMENT 'Id Rol',
  `activo` bit,
  `fechaCreacion` datetime,
  `fechaActualizacion` datetime,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Usuarios';

CREATE TABLE IF NOT EXISTS `Rol` (
  `idRol` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `Nombre` varchar(80) NOT NULL COMMENT 'Nombre',
  `activo` bit,
  `fechaCreacion` datetime,
  `fechaActualizacion` datetime,
  PRIMARY KEY (`idRol`)
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Roles';

CREATE TABLE IF NOT EXISTS `Productos` (
  `idProducto` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `Nombre` varchar(80) NOT NULL COMMENT 'Nombre del Prodocuto',
  `idCategoria` int(7) DEFAULT NULL,
  `idProveedor` int(7) DEFAULT NULL,
  `activo` bit,
  `fechaCreacion` datetime,
  `fechaActualizacion` datetime,
  PRIMARY KEY (`idProducto`)
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Productos';

CREATE TABLE IF NOT EXISTS `Proveedores` (
  `idProveedor` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `Nombre` varchar(80) NOT NULL COMMENT 'Nombre',
  `email` varchar(50) NOT NULL COMMENT 'E-mail',
  `telefono` varchar(50) NOT NULL COMMENT 'Telefono',
  `activo` bit,
  `fechaCreacion` datetime,
  `fechaActualizacion` datetime,
  PRIMARY KEY (`idProveedor`)
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Roles';

CREATE TABLE IF NOT EXISTS `Categorias` (
  `idCategoria` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `Nombre` varchar(50) NOT NULL COMMENT 'Categoría',
  `activo` bit,
  `fechaCreacion` datetime,
  `fechaActualizacion` datetime,
  PRIMARY KEY (`idCategoria`)
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Categorias de Producto';

CREATE TABLE IF NOT EXISTS `Inventario` (
  `idInventario` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `idUsuario` int(7) NOT NULL COMMENT 'Id Usuario',
  `idProducto` int(7) NOT NULL COMMENT 'Id Producto',
  `Comentario` varchar(130) NOT NULL COMMENT 'Comentario',
  `cantidad` int(7) DEFAULT NULL,
  `inventario` int(7) DEFAULT NULL,
  `fechaCreacion` datetime,
  PRIMARY KEY (`idInventario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Bitácora de Eventos';