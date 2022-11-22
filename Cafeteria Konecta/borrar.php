<?php

    require_once "conexion.php";
    $conexion = Conectar::conexion();

    $id = $_GET["id"];
    $conexion->query("DELETE FROM PRODUCTO WHERE ID='$id'");
    header("Location:index.php");

?>