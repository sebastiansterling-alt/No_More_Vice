-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS NoMoreViceDB;
USE NoMoreViceDB;

-- Tabla de Usuarios
CREATE TABLE Usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de Administradores
CREATE TABLE Administradores (
    id_admin INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de Contenido (Problemática, Motivación, Consecuencias, Rutinas, etc.)
CREATE TABLE Contenido (
    id_contenido INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    descripcion TEXT NOT NULL,
    categoria ENUM('Problemática','Motivación','Consecuencias','Rutinas','Malos Hábitos') NOT NULL,
    fecha_publicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    id_admin INT,
    FOREIGN KEY (id_admin) REFERENCES Administradores(id_admin)
);

-- Tabla de Estadísticas (Progreso de usuarios)
CREATE TABLE Estadisticas (
    id_estadistica INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    progreso INT CHECK (progreso >= 0 AND progreso <= 100), -- porcentaje de avance
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES Usuarios(id_usuario) ON DELETE CASCADE
);

-- Tabla de Gestión de Página (acciones del administrador)
CREATE TABLE GestionPagina (
    id_gestion INT AUTO_INCREMENT PRIMARY KEY,
    id_admin INT NOT NULL,
    accion VARCHAR(255) NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_admin) REFERENCES Administradores(id_admin) ON DELETE CASCADE
);
