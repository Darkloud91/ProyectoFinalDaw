DROP DATABASE IF EXISTS tosbase;
CREATE DATABASE tosbase;
USE tosbase;

CREATE TABLE noticia(
	`id_noticia` INT AUTO_INCREMENT NOT NULL,
    `id_usuario` INT NOT NULL,
    `titulo` VARCHAR(255) NOT NULL,
	`descripcion` VARCHAR(255) NOT NULL,
	`fecha` DATETIME NOT NULL,
    `tipo` INT NOT NULL,
    `imagen` VARCHAR(255),
    `ref` VARCHAR(255),
	CONSTRAINT `noticia` PRIMARY KEY (`id_noticia`),
	CONSTRAINT `fk_noticiaUs` FOREIGN KEY(`id_usuario`) REFERENCES phpbb_users(`user_id`)
);

CREATE TABLE simulacion(
	`id_simulacion` INT AUTO_INCREMENT NOT NULL,
    `id_usuario` INT NOT NULL,
    `nombre` VARCHAR(100) UNIQUE NOT NULL,
	`rango_1` VARCHAR(255) NOT NULL,
	`rango_2` VARCHAR(255),
    `rango_3` VARCHAR(255),
    `rango_4` VARCHAR(255),
    `rango_5` VARCHAR(255),
    `rango_6` VARCHAR(255),
    `rango_7` VARCHAR(255),
	`FUE` INT DEFAULT 7 NOT NULL,
    `CON` INT DEFAULT 4 NOT NULL,
    `INT` INT DEFAULT 3 NOT NULL,
    `SPR` INT DEFAULT 4 NOT NULL,
    `DES` INT DEFAULT 9 NOT NULL,
	CONSTRAINT `simulacion` PRIMARY KEY(`id_simulacion`),
	CONSTRAINT `fk_simulacionUs` FOREIGN KEY(`id_usuario`) REFERENCES phpbb_users(`user_id`)
);

CREATE TABLE clase(
	`id_clase` INT AUTO_INCREMENT NOT NULL,
	`nombre` VARCHAR(50) NOT NULL,
	`nombre_ingles` VARCHAR(50) NOT NULL,
	`rango` int NOT NULL,
	`tipo` int,
	`funcion` int,
    `dificultad` int,
	`descripcion` TEXT,
    `circulo` INT NOT NULL,
    `avatar_tabla` VARCHAR(255),
    `avatar_m` VARCHAR(255),
    `avatar_f` VARCHAR(255),
    `logo` VARCHAR(255),
	CONSTRAINT `clase` PRIMARY KEY(`id_clase`)
);

CREATE TABLE contiene(
	`id_clase` INT NOT NULL,
	`id_simulacion` INT NOT NULL,
	CONSTRAINT `contiene` PRIMARY KEY(`id_clase`, `id_simulacion`),
	CONSTRAINT `fk_contieneC` FOREIGN KEY(`id_clase`) REFERENCES clase(`id_clase`),
    CONSTRAINT `fk_contieneM` FOREIGN KEY(`id_simulacion`) REFERENCES simulacion(`id_simulacion`)
);

CREATE TABLE habilidad(
	`id_habilidad` INT AUTO_INCREMENT NOT NULL,
    `id_clase` INT NOT NULL,
	`nombre` VARCHAR(100) NOT NULL,
	`nombre_ingles` VARCHAR(100) NOT NULL,
	`tipo` VARCHAR(100),
    `nivel` INT NOT NULL,
    `pm` INT NOT NULL,
    `descripcion` TEXT NOT NULL,
    `tipo_arma` VARCHAR(255),
    `imagen` VARCHAR(255) NOT NULL,
    `video` VARCHAR(255),
    `circulo` INT NOT NULL,
	CONSTRAINT `habilidad` PRIMARY KEY(`id_habilidad`),
	CONSTRAINT `fk_habilidadC` FOREIGN KEY(`id_habilidad`) REFERENCES clase(`id_clase`)
);

CREATE TABLE atributo_habilidad(
	`id_atr_habilidad` INT AUTO_INCREMENT NOT NULL,
    `id_habilidad` INT NOT NULL,
	`nombre` VARCHAR(100) NOT NULL,
	`nombre_ingles` VARCHAR(100) NOT NULL,
    `tipo` VARCHAR(100),
    `nivel` INT NOT NULL,
	`descripcion` TEXT NOT NULL,
    `efecto` VARCHAR(255) NOT NULL,
    `imagen` VARCHAR(255) NOT NULL,
	CONSTRAINT `atributo_habilidad` PRIMARY KEY(`id_atr_habilidad`),
	CONSTRAINT `fk_atr_habilidadHab` FOREIGN KEY(`id_habilidad`) REFERENCES habilidad(`id_habilidad`)
);

CREATE TABLE atributo_clase(
	`id__atr_clase` INT AUTO_INCREMENT NOT NULL,
    `id_clase` INT NOT NULL,
	`nombre` VARCHAR(100) NOT NULL,
	`nombre_ingles` VARCHAR(100) NOT NULL,
    `tipo` VARCHAR(100) NOT NULL,
    `nivel` INT NOT NULL,
	`descripcion` TEXT NOT NULL,
    `efecto` VARCHAR(255) NOT NULL,
    `imagen` VARCHAR(255) NOT NULL,
	CONSTRAINT `atributo_clase` PRIMARY KEY(`id__atr_clase`),
	CONSTRAINT `fk_atr_claseCla` FOREIGN KEY(`id_clase`) REFERENCES clase(`id_clase`)
);

CREATE TABLE monstruo(
	`id_monstruo` INT AUTO_INCREMENT NOT NULL,
	`nombre` VARCHAR(50) NOT NULL,
	`nombre_ingles` VARCHAR(50) NOT NULL,
    `imagen` VARCHAR(255) NOT NULL,
	`nivel` INT NOT NULL,
	`tipo` INT NOT NULL,
    `raza` INT NOT NULL,
    `elemento` INT NOT NULL,
    `armadura` INT NOT NULL,
    `tamanio` VARCHAR(255) NOT NULL,
    `movimiento` INT NOT NULL,
    `velocidad` VARCHAR(255) NOT NULL,
    `ps` INT NOT NULL,
    `exp_personaje` INT NOT NULL,
    `exp_clase`INT NOT NULL,
    `descripcion`TEXT NOT NULL,
	CONSTRAINT `monstruo` PRIMARY KEY(`id_monstruo`)
);

CREATE TABLE mapa(
	`id_mapa` INT AUTO_INCREMENT NOT NULL,
	`nombre` VARCHAR(100) NOT NULL,
	`nombre_ingles` VARCHAR(100) NOT NULL,
	`area` VARCHAR(100) NOT NULL,
	`tipo` VARCHAR(100) NOT NULL,
    `nivel` INT NOT NULL,
    `avatar` VARCHAR(255) NOT NULL,
    `orbe_revivir` int DEFAULT 0 NOT NULL,
	CONSTRAINT `mapa` PRIMARY KEY(`id_mapa`)
);

CREATE TABLE conecta(
	`id_conecta` INT AUTO_INCREMENT NOT NULL,
	`id_mapa` INT NOT NULL,
    `id_mapaconectado` INT NOT NULL,
	CONSTRAINT `conecta` PRIMARY KEY(`id_conecta`),
	CONSTRAINT `fk_conectaM` FOREIGN KEY(`id_mapa`) REFERENCES mapa(`id_mapa`),
    CONSTRAINT `fk_Mconecta` FOREIGN KEY(`id_mapaconectado`) REFERENCES mapa(`id_mapa`)
);

CREATE TABLE esta(
	`id_monstruo` INT NOT NULL,
	`id_mapa` INT NOT NULL,
	CONSTRAINT `esta` PRIMARY KEY(`id_monstruo`, `id_mapa`),
	CONSTRAINT `fk_estaMo` FOREIGN KEY(`id_monstruo`) REFERENCES monstruo(`id_monstruo`),
    CONSTRAINT `fk_estaMa` FOREIGN KEY(`id_mapa`) REFERENCES mapa(`id_mapa`)
);

CREATE TABLE objeto(
	`id_objeto` INT AUTO_INCREMENT NOT NULL,
	`nombre` VARCHAR(50) NOT NULL,
	`nombre_ingles` VARCHAR(50) NOT NULL,
	`nivel` int NOT NULL,
	`descripcion` TEXT NOT NULL,
    `tipo_danio` VARCHAR(30) NOT NULL,
    `clases` VARCHAR(255) NOT NULL,
    `imagen` VARCHAR(255) NOT NULL,
	CONSTRAINT `objeto` PRIMARY KEY(`id_objeto`)
);

CREATE TABLE deja_caer(
	`id_monstruo` INT NOT NULL,
	`id_objeto` INT NOT NULL,
	CONSTRAINT `deja_caer` PRIMARY KEY(`id_monstruo`, `id_objeto`),
	CONSTRAINT `fk_deja_caerM` FOREIGN KEY(`id_monstruo`) REFERENCES monstruo(`id_monstruo`),
    CONSTRAINT `fk_deja_caerO` FOREIGN KEY(`id_objeto`) REFERENCES objeto(`id_objeto`)
);
