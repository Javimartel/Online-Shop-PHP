-- Creamos y utilizamos la base de datos tienda
CREATE DATABASE IF NOT EXISTS tienda;
USE tienda;

-- Creamos un usuario y le damos todos los permisos
CREATE USER IF NOT EXISTS 'javi'@'localhost' IDENTIFIED BY '12345';

GRANT ALL PRIVILEGES ON tienda.* TO javi@'localhost' IDENTIFIED BY '12345';
FLUSH PRIVILEGES;

-- Empezamos a crear las tablas
CREATE TABLE IF NOT EXISTS usuario (
    id_user INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nick VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone INT(9) NOT NULL,
    admin BOOLEAN NOT NULL
);

CREATE TABLE IF NOT EXISTS producto (
    id_product INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    price DEC(5, 2) NOT NULL,   -- Ejemplo: 999,99
    description VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS carrito (
    id_carrito INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_user INT(11) NOT NULL,
    id_product INT(11) NOT NULL,
    purchase_date DATE NOT NULL
);

-- DROP DATABASE IF EXISTS tienda;