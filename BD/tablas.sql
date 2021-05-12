
CREATE TABLE `tbpersonas` (
  `id` int(10) AUTO_INCREMENT PRIMARY KEY,
  `codigo` varchar(10) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `celular` int(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `idsexo` int(10) NOT NULL,
  `idbeca` int(10) NOT NULL,
  `idcarrera` int(10) NOT NULL
);

CREATE TABLE `tbsexo` (
  `id` int(10) AUTO_INCREMENT PRIMARY KEY,
  `sexo` varchar(20) NOT NULL
);

CREATE TABLE `tbcarreras` (
  `id` int(10) AUTO_INCREMENT PRIMARY KEY,
  `codigo` varchar(10) NOT NULL,
  `carrera` varchar(50) NOT NULL
);

CREATE TABLE `tbbeca` (
  `id` int(10) AUTO_INCREMENT PRIMARY KEY,
  `beca` varchar(10) NOT NULL
);


ALTER TABLE tbpersonas ADD CONSTRAINT fk_perso_beca FOREIGN KEY (idbeca) REFERENCES tbbeca (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tbpersonas ADD CONSTRAINT fk_perso_carr FOREIGN KEY (idcarrera) REFERENCES tbcarreras (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tbpersonas ADD CONSTRAINT fk_perso_sexo FOREIGN KEY (idsexo) REFERENCES tbsexo (id) ON DELETE CASCADE ON UPDATE CASCADE;
