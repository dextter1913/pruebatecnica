DROP DATABASE IF EXISTS Actividades;
CREATE DATABASE IF NOT EXISTS Actividades;

USE Actividades;
CREATE TABLE Usuarios(
    user VARCHAR (50) PRIMARY KEY NOT NULL,
    pass VARCHAR (50) NOT NULL
);
INSERT INTO Usuarios(user, pass) VALUES('admin','123');
INSERT INTO Usuarios(user, pass) VALUES('dextter1913','123');
CREATE TABLE empleados(
    doc VARCHAR (50) PRIMARY KEY,
    nombre VARCHAR (50) NOT NULL,
    apellido VARCHAR (50) NOT NULL,
    telefono VARCHAR (50) NOT NULL,
    user VARCHAR (50) NOT NULL,
    INDEX(user),
    FOREIGN KEY empleado(user) REFERENCES Usuarios(user)
);
INSERT INTO empleados(doc, nombre, apellido, telefono, user) VALUES('1035391050','Cristian','Aguirre','3166857000','admin');
CREATE TABLE actividades(
    idActividad INT AUTO_INCREMENT PRIMARY KEY,
    NombreActividad VARCHAR (50) NOT NULL,
    descripcionActividad TEXT NOT NULL,
    user VARCHAR (50) NOT NULL,
    INDEX(user),
    FOREIGN  KEY actividades(user) REFERENCES Usuarios(user)
);
CREATE TABLE tiempos(
    idtiempo INT AUTO_INCREMENT PRIMARY KEY,
    fecTiempos DATE NOT NULL,
    cantHoras INT (3) NOT NULL,
    user VARCHAR (50) NOT NULL,
    idActividad INT NOT NULL,
    INDEX(idActividad),
    FOREIGN KEY tiempos(idActividad) REFERENCES actividades(idActividad),
    INDEX(user),
    FOREIGN KEY tiempo(user) REFERENCES Usuarios(user)
);
