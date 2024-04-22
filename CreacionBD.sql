CREATE DATABASE IF NOT EXISTS recomendaciones;

USE recomendaciones;

DROP TABLE IF EXISTS doctores;
CREATE TABLE doctores(
	id_doctor INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido_p VARCHAR(30) NOT NULL,
    apellido_m VARCHAR(30) NULL,
    cedula VARCHAR(10) NOT NULL,
    fecha_nac DATE NOT NULL,
    telefono VARCHAR(10) NOT NULL,
    correo VARCHAR(70) NOT NULL,
    especialidad VARCHAR(70) NOT NULL,
    PRIMARY KEY (id_doctor)
);