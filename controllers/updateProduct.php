<?php
    $config = include "../config/config.php";
    try {
        $dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
        $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
        
        // Si no han cambiado la imagen, le asignamos la anterior
        if ($_POST["update-image"] == "") {
            $image = trim(strip_tags($_POST["img-product"]));
        } else {
            $image = "../images/new-img/".trim(strip_tags($_POST["update-image"]));
        }

        $consultaSQL = 'UPDATE productos
                        SET name = "'.trim(strip_tags($_POST["update-name"])).'", price = "'.trim(strip_tags($_POST["update-price"])).'", description = "'.trim(strip_tags($_POST["update-description"])).'", image = "'.$image.'"
                        WHERE id_product = "'.trim(strip_tags($_POST["id-product"])).'"';
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();

    } catch (PDOException $error) {}
?>