SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

create database CRUD1;
use crud1;
SET SQL_SAFE_UPDATES = 0;

CREATE TABLE clientes (
id_cliente INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
cod_registro INT(20) NOT NULL,
nombre_cliente VARCHAR(50) NOT NULL,
tipo_doc VARCHAR(11) NOT NULL,
direccion VARCHAR(50) NOT NULL,
telefono INT(20) NOT NULL,
correo VARCHAR(50) NOT NULL,
fecha datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
--
INSERT INTO `clientes` (`cod_registro`, `nombre_cliente`, `tipo_doc`, `direccion`, `telefono`, `correo`) VALUES
('123', 'Juan Carlos', 'cc', 'call 45', '32029233', 'hshg@123.com'),
('124','Sandobal Gutierre', 'TI', 'cra 982', '5555', 'ccccg@123.com'),
('125','leonardo parra', 'pasaporte', 'diag 34 nro 1', '601454', 'elmas@outlook.com');
COMMIT;

select * from clientes;
ALTER TABLE clientes AUTO_INCREMENT = 0;