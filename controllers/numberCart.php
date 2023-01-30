<?php
    /**
     * Controlador para mostrar el número de elementos en el carrito
     * @package General
     * @version 1.0
    */

    if ($index) {
        $config = include "./config/config.php";
    } else{
        $config = include "../config/config.php";
    }
    try {
        $dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
        $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

        // Coger el ID del usuario que está conectado
        $consultaSQL = 'SELECT id_user FROM usuarios WHERE nick = "'.$_SESSION["user"]["nick"].'"';
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();
        $id_user = $sentencia->fetchAll();

        // Consultar elementos en el carrito
        $consultaSQL = 'SELECT COUNT(*) FROM carrito WHERE id_user = "'.$id_user[0][0].'"';
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();
        $elementos_carrito = $sentencia->fetch();

    } catch (PDOException $error) {}
?>