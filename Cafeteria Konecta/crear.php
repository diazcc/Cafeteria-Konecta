<?php

    require_once "conexion.php";
    $conexion = Conectar::conexion();
    $registro = $conexion->query("SELECT * FROM producto;")->fetchAll(PDO::FETCH_OBJ);
    if (isset($_POST['create'])) {
        $nombre_producto = $_POST['nombre_producto'];
        $precio = $_POST['precio'];
        $peso = $_POST['peso'];
        $referencia = $_POST['referencia'];
        $categoria = $_POST['categoria'];
        $fecha = $_POST['fecha'];
        $stock = $_POST['stock'];
        $query ="INSERT INTO `producto` (`id`, `nombre_producto`, `precio`, `stock`, `referencia`, `peso`, `categoria`, `fecha`) VALUES (NULL, '$nombre_producto', '$precio', '$stock', '$referencia', '$peso', '$categoria', '$fecha');";
        $conexion->query($query);
        header("Location:index.php");
    }

?>