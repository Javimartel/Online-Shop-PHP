<?php
    $config = include "../config/config.php";
    try {
        $dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
        $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
        
        // Si no han cambiado la imagen, le asignamos la anterior
        if ($_POST["update-image"] == "") {
            $image = $_POST["img-product"];
        } else {
            $image = "../images/new-img/".$_POST["update-image"];
        }

        $consultaSQL = 'UPDATE productos
                        SET name = "'.$_POST["update-name"].'", price = "'.$_POST["update-price"].'", description = "'.$_POST["update-description"].'", image = "'.$image.'"
                        WHERE id_product = "'.$_POST["id-product"].'"';
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();

    } catch (PDOException $error) {}
?>