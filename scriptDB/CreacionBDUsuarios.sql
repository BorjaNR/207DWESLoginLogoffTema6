--Eliminar base de datos en caso de que exista
DROP DATABASE IF EXISTS DB207DWESProyectoTema5;

DROP USER IF EXISTS 'user207DWESProyectoTema5'@'%';

--Crear la base de datos
CREATE DATABASE DB207DWESProyectoTema5;

--Utilizar la base de datos recién creada
USE DB207DWESProyectoTema5;

--Crear la tabla T01_Usuario
CREATE TABLE T01_Usuario (
    T01_CodUsuario CHAR(8) PRIMARY KEY,
    T01_Password VARCHAR(64),
    T01_DescUsuario VARCHAR(255),
    T01_NumConexiones INT DEFAULT 0,
    T01_FechaHoraUltimaConexion DATETIME DEFAULT NULL,
    T01_Perfil ENUM('usuario','administrador') DEFAULT 'usuario',
    T01_ImagenUsuario BLOB
)ENGINE=INNODB;

--Crear la tabla T02_Departamento
CREATE TABLE T02_Departamento (
    T02_CodDepartamento CHAR(3) PRIMARY KEY,
    T02_DescDepartamento VARCHAR(255),
    T02_FechaCreacionDepartamento DATETIME DEFAULT CURRENT_TIMESTAMP,
    T02_VolumenDeNegocio FLOAT,
    T02_FechaBajaDepartamento DATETIME
)ENGINE=INNODB;

--Creación del usuario de la base de datos
CREATE USER 'user207DWESProyectoTema5'@'%' IDENTIFIED BY 'paso';
--Otorgar permisos al usuario para acceder a la base de datos
GRANT ALL PRIVILEGES ON DB207DWESProyectoTema5.* TO 'user207DWESProyectoTema5'@'%';