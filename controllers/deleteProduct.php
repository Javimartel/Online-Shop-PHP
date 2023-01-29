<?php
    $config = include "../config/config.php";
    try {
        $dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
        $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
        
        // Se elimina de la base de datos según el ID
        $consultaSQL = 'DELETE FROM productos WHERE id_product = "'.$_POST["id-product"].'"';
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();

    } catch (PDOException $error) {}
?>