CREATE DATABASE IF NOT EXISTS Actividades;

USE Actividades;
CREATE TABLE Usuarios(
    user VARCHAR (50) PRIMARY KEY NOT NULL,
    pass VARCHAR (50) NOT NULL
);
CREATE TABLE empleados(
    doc VARCHAR (50) PRIMARY KEY,
    nombre VARCHAR (50) NOT NULL,
    apellido VARCHAR (50) NOT NULL,
    telefono VARCHAR (50) NOT NULL,
    user VARCHAR (50) NOT NULL,
    INDEX(user),
    FOREIGN KEY empleado(user) REFERENCES Usuarios(user)
);
CREATE TABLE actividades(
    idActividad INT AUTO_INCREMENT PRIMARY KEY,
    descripcionActividad TEXT NOT NULL
);
CREATE TABLE tiempos(
    idtiempo INT AUTO_INCREMENT PRIMARY KEY,
    fecActividad DATE NOT NULL,
    cantHoras INT (3) NOT NULL,
    user VARCHAR (50) NOT NULL,
    idActividad INT NOT NULL,
    INDEX(idActividad),
    FOREIGN KEY tiempos(idActividad) REFERENCES actividades(idActividad),
    INDEX(user),
    FOREIGN KEY tiempo(user) REFERENCES Usuarios(user)
);
