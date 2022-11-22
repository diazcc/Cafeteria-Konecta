<?php 

    require_once "conexion.php";
    $conexion = Conectar::conexion();
    $id ="21";
    $registro = $conexion->query("SELECT id, nombre_producto, precio, fecha, stock FROM producto WHERE id=$id;")->fetchAll(PDO::FETCH_OBJ);
    foreach($registro as $producto){}

    // if (isset($_POST['buscar'])) {
    //     echo "holasss";
    //     header("Location:ventas.php");
    // }

?>
