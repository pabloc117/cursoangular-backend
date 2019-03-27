CREATE DATABASE IF NOT EXISTS cursoAngular;
USE cursoAngular;
CREATE TABLE productos(
id int(255) auto_increment NOT NULL,
nombre varchar(255),
descrition text,
precio VARCHAR(255),
imagen VARCHAR(255),
CONSTRAINT pk_productos PRIMARY KEY(id)
)ENGINE=InnoDb;
