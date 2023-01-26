<?php
    if (isset($_POST["remove-carrito"])) {
        if ($index) {
            $config = include "./config/config.php";
        } else{
            $config = include "../config/config.php";
        }
        try {
            $dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
            $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

            // Eliminamos del carrito
            $consultaSQL = 'DELETE FROM carrito WHERE id_product = "'.$_POST["id-product"].'" AND purchase_date = "'.$_POST["purchase-date"].'"';
            $sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute();

        } catch (PDOException $error) {}
    }
?>