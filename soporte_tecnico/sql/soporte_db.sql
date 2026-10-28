DROP DATABASE IF EXISTS soporte_db;
CREATE DATABASE soporte_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE soporte_db;

CREATE TABLE usuarios (
  id_usuario INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  correo VARCHAR(100) NOT NULL
);
CREATE TABLE equipos (
  id_equipo INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  descripcion TEXT NOT NULL
);
CREATE TABLE solicitudes (
  id_solicitud INT AUTO_INCREMENT PRIMARY KEY,
  id_usuario INT NOT NULL,
  id_equipo INT NOT NULL,
  descripcion TEXT NOT NULL,
  estado VARCHAR(20) NOT NULL DEFAULT 'Pendiente',
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
  FOREIGN KEY (id_equipo) REFERENCES equipos(id_equipo)
);
CREATE TABLE seguimiento (
  id_seguimiento INT AUTO_INCREMENT PRIMARY KEY,
  id_solicitud INT NOT NULL,
  estado VARCHAR(20) NOT NULL,
  observacion TEXT NOT NULL,
  fecha_act TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_solicitud) REFERENCES solicitudes(id_solicitud) ON DELETE CASCADE
);
