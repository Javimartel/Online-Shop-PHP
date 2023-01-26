<?php
    $config = include "../config/config.php";
    try {
        $dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
        $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

        // Coger el ID del usuario que está conectado
        $consultaSQL = 'SELECT id_user FROM usuarios WHERE nick = "'.$_SESSION["user"]["nick"].'"';
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();
        $id_user = $sentencia->fetchAll();

        // Consultar número de elementos en el carrito
        $consultaSQL = 'SELECT COUNT(*) FROM carrito WHERE id_user = "'.$id_user[0][0].'"';
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();
        $elementos_carrito = $sentencia->fetch();

        // Consultar todos los productos del carrito
        $consultaSQL = 'SELECT productos.id_product, productos.name, productos.price, productos.description, productos.image, carrito.purchase_date 
                        FROM productos INNER JOIN carrito
                        ON productos.id_product = carrito.id_product
                        INNER JOIN usuarios
                        ON usuarios.id_user = carrito.id_user WHERE carrito.id_user = "'.$id_user[0][0].'"';
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();
        $productos_carrito = $sentencia->fetchAll();

    } catch (PDOException $error) {}
?>