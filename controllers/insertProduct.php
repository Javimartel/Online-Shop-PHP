<?php
    $config = include "../config/config.php";
    try {
        $dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
        $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
        $producto = [
            "name" => $_POST["insert-name"],
            "price" => $_POST["insert-price"],
            "description" => $_POST["insert-description"],
            "image" => "../images/new-img/".$_POST["insert-image"]
        ];
        $consultaSQL = "INSERT INTO productos (name, price, description, image)";
        $consultaSQL .= "VALUES (:" . implode(", :", array_keys($producto)) . ")";
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute($producto);

    } catch (PDOException $error) {}
?>