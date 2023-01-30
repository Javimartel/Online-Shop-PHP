<?php
    /**
     * Controlador para insertar un producto en la base de datos
     * @package Admin
     * @version 1.0
    */

    $config = include "../config/config.php";
    try {
        $dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
        $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
        $producto = [
            "name" => trim(strip_tags($_POST["insert-name"])),
            "price" => trim(strip_tags($_POST["insert-price"])),
            "description" => trim(strip_tags($_POST["insert-description"])),
            "image" => "../images/new-img/".trim(strip_tags($_POST["insert-image"]))
        ];

        // Se inserta el producto nuevo
        $consultaSQL = "INSERT INTO productos (name, price, description, image)";
        $consultaSQL .= "VALUES (:" . implode(", :", array_keys($producto)) . ")";
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute($producto);

    } catch (PDOException $error) {}
?>