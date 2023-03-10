-- Eliminamos si existe la base de datos tienda
DROP DATABASE IF EXISTS tienda;

-- Creamos y utilizamos la base de datos tienda
CREATE DATABASE IF NOT EXISTS tienda;
USE tienda;

-- Empezamos a crear las tablas
CREATE TABLE IF NOT EXISTS usuarios (
    id_user INT(11) AUTO_INCREMENT PRIMARY KEY,
    nick VARCHAR(30) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone INT(9) NOT NULL,
    admin BOOLEAN NOT NULL DEFAULT 0
);

CREATE TABLE IF NOT EXISTS productos (
    id_product INT(11)  AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    price DEC(5, 2) NOT NULL,   -- Ejemplo: 999,99
    description VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS carrito (
    id_carrito INT(11) AUTO_INCREMENT PRIMARY KEY,
    id_user INT(11) NOT NULL,
    id_product INT(11) NOT NULL,
    purchase_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_user) REFERENCES usuarios (id_user) ON DELETE CASCADE,
    FOREIGN KEY (id_product) REFERENCES productos (id_product) ON DELETE CASCADE
);

-- Insertamos un admin
INSERT INTO usuarios (nick, password, email, phone, admin) VALUES (
    "admin", "$2y$10$Utt.bH1OSKXWuOoj2bm0fesE8NjbavvU8B6ryL3Sd6NLce2BiRkIe", "admin@gmail.com", 111111111, 1
);

-- Insertamos usuarios
INSERT INTO usuarios (nick, password, email, phone) VALUES 
    ("Javi", "$2y$10$kcf3R/QIKNl56.MUYx1okOYa7ruNdsmtfPtYfwUEjrzuTYqlSvALu", "javi@gmail.com", 123456789);

-- Insertamos productos
INSERT INTO productos (name, price, description, image) VALUES
    ("Black Forest Pastry", 12, "Cake - Pastries", "../images/img-template/cake-item1.jpg"),
    ("Sprinkled Donuts", 12, "Cake - Pastries", "../images/img-template/cake-item2.jpg"),
    ("Black Forest Cupcake", 12, "Cake - Pastries", "../images/img-template/cake-item3.jpg"),
    ("Macarons Berries", 12, "Cake - Pastries", "../images/img-template/cake-item4.jpg"),
    ("Lollipop", 2, "Candies", "../images/new-img/lollipop.png"),
    ("Chocolates", 10, "Chocolates", "../images/new-img/chocolates.jpg");
