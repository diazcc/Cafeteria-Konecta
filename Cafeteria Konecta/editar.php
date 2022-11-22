<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="stylesheets.css">
</head>

<body>

<h1>Actualizar productos</h1>

<?php

    require_once "conexion.php";
    $ejecutar = Conectar::conexion();

    if(!isset($_POST['bot_actualizar'])){
        $id=$_GET["id"];
        $nombre_producto=$_GET["nombre_producto"];
        $precio=$_GET["precio"];
        $peso=$_GET["peso"];
        $referencia=$_GET["referencia"];
        $categoria=$_GET["categoria"];
        $fecha=$_GET["fecha"];
        $stock=$_GET["stock"];

    }else{

        $id=$_POST['id'];
        $nombre_producto=$_POST['nombre_producto'];
        $precio=$_POST['precio'];
        $peso=$_POST['peso'];
        $referencia=$_POST['referencia'];
        $categoria=$_POST['categoria'];
        $fecha=$_POST['fecha'];
        $stock=$_POST['stock'];

        $query="UPDATE `producto` SET `nombre_producto` = '$nombre_producto', `precio` = '$precio', `peso` = '$peso', `stock` = '$stock', `referencia` = '$referencia', `categoria` = '$categoria', `fecha` = '$fecha' WHERE `producto`.`id` = $id;";
        $ejecutar->query($query);
        header("Location:index.php");
    }
        


?>

<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id ?>"></td>
    </tr>
    <tr>
      <td>Nombre producto</td>
      <td><label for="nom"></label>
      <input type="text" name="nombre_producto" id="nombre_producto" value="<?php echo $nombre_producto ?>" ></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><label for="ape"></label>
      <input type="text" name="precio" id="precio" value="<?php echo $precio ?>"></td>
    </tr>
    <tr>
      <td>Peso</td>
      <td><label for="dir"></label>
      <input type="text" name="peso" id="peso" value="<?php echo $peso ?>"></td>
    </tr>
    <tr>
      <td>Referencia</td>
      <td><label for="dir"></label>
      <input type="text" name="referencia" id="referencia" value="<?php echo $referencia ?>"></td>
    </tr>
    <tr>
    <tr>
      <td>Categoria</td>
      <td><label for="dir"></label>
      <input type="text" name="categoria" id="categoria" value="<?php echo $categoria ?>"></td>
    </tr>
    <tr>
      <td>Fecha</td>
      <td><label for="dir"></label>
      <input type="text" name="fecha" id="fecha" value="<?php echo $fecha ?>"></td>
    </tr>
    <tr>
      <td>Stock</td>
      <td><label for="dir"></label>
      <input type="text" name="stock" id="stock" value="<?php echo $stock ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Guardar"></td>
    </tr>
  </table>
</form>

<a href="index.php"><button>Regresar</button></a>
<p>&nbsp;</p>
</body>
</html>