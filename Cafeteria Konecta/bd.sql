CREATE  DATABASE ventas;
USE ventas;

CREATE TABLE `producto` (
  `id` int(15) AUTO_INCREMENT PRIMARY KEY,
  `nombre_producto` varchar(30) NOT NULL,
  `precio` int(15) NOT NULL,
  `stock` int(15) NOT NULL,
  `referencia` varchar(30) NOT NULL,
  `peso` int(15) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `fecha` date NOT NULL
);