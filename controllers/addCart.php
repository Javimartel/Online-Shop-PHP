<?php
    /**
     * Controlador para añadir un producto al carrito
     * @package User
     * @version 1.0
    */
    
    $config = include "../config/config.php";
    try {
        $dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
        $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

        // Coger el ID del usuario que está conectado
        $consultaSQL = 'SELECT id_user FROM usuarios WHERE nick = "'.$_SESSION["user"]["nick"].'"';
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();
        $id_user = $sentencia->fetchAll();

        // Añadir producto al carrito con el id del usuario
        $consultaSQL = "INSERT INTO carrito (id_user, id_product)";
        $consultaSQL .= "VALUES (" . $id_user[0][0] .", ". $_POST["id-product"] . ")";
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();

    } catch (PDOException $error) {}
?>