<?php
    $config = include "./config.php";
    try {
        $conexion = new PDO('mysql:host='.$config['db']['host'], $config['db']['user'], $config['db']['pass'], $config['db']['options']);
        $sql = file_get_contents("../database/bbdd.sql");
        $conexion->exec($sql);
    echo "La base de datos se ha creado con éxito";
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
?>
