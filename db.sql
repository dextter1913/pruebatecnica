CREATE DATABASE IF NOT EXISTS trello;

USE trello;

CREATE TABLE empleados(
    doc VARCHAR (50) PRIMARY KEY,
    nombre VARCHAR (50) NOT NULL,
    apellido VARCHAR (50) NOT NULL,
    telefono VARCHAR (50)
)