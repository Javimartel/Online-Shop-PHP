-- Creamos y utilizamos la base de datos tienda
CREATE DATABASE IF NOT EXISTS tienda;
USE tienda;

-- Empezamos a crear las tablas
CREATE TABLE IF NOT EXISTS usuarios (
    id_user INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nick VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone INT(9) NOT NULL,
    admin BOOLEAN NOT NULL DEFAULT 0
);

CREATE TABLE IF NOT EXISTS productos (
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
    purchase_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- DROP DATABASE IF EXISTS tienda;

-- Insertamos un admin
INSERT INTO usuarios (nick, password, email, phone, admin) VALUES (
    "admin", "admin", "admin@gmail.com", 111111111, 1
);

-- Insertamos usuarios
INSERT INTO usuarios (nick, password, email, phone) VALUES 
    ("Javi", "123", "javi@gmail.com", 123456789),
    ("Test", "123", "test@gmail.com", 987654321);

-- Insertamos productos
INSERT INTO productos (name, price, description, image) VALUES
    ("Black Forest Pastry", 12, "Cake - Pastries", "../images/img-template/cake-item1.jpg"),
    ("Sprinkled Donuts", 12, "Cake - Pastries", "../images/img-template/cake-item2.jpg"),
    ("Black Forest Cupcake", 12, "Cake - Pastries", "../images/img-template/cake-item3.jpg"),
    ("Macarons with Berries", 12, "Cake - Pastries", "../images/img-template/cake-item4.jpg");

-- Insertamos una compra
INSERT INTO carrito (id_user, id_product) VALUES
    (2, 2),
    (3, 3);

-- Comprobamos el carrito
SELECT usuarios.nick, productos.name 
FROM usuarios INNER JOIN carrito
ON usuarios.id_user = carrito.id_user
INNER JOIN productos
ON productos.id_product = carrito.id_product;
