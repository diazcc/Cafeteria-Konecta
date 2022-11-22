<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="stylesheets.css">
</head>

<body>

<h1>Ventas</h1>

<?php

    require_once "conexion.php";
    // require_once "buscar.php";
    $ejecutar = Conectar::conexion();
    $registro = $ejecutar->query("SELECT * FROM producto;")->fetchAll(PDO::FETCH_OBJ);
    
    
    if (isset($_POST['buscar'])) {

      $id = $_POST['buscador'];
      echo "--------" . $id . "-------";
      //--------
      $registro = $ejecutar->query("SELECT id, nombre_producto, precio, fecha, stock FROM producto WHERE id=$id;")->fetchAll(PDO::FETCH_OBJ);
      foreach($registro as $producto){}
  }


?>

<form name="formBuscar" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <table width="40%" border="0" align="center">

    <td colspan="2">Buscar producto</td>
    <tr>
      
      <td colspan="2"><label for="id"></label>
      <input type="num" name="buscador" id="buscador" placeholder="Escribe el id del producto"></td>
      <td class="bot"><input type='submit' name='buscar' id='buscar' value='Buscar'></td>
    </tr>
    <tr>
      <td>Id producto</td>
      <td>
        <?php echo $producto->id;?>
      </td>
    </tr>
    <tr>
      <td>Nombre producto</td>
      <td>
        <?php echo $producto->nombre_producto;?>
      </td>
    </tr>
    <tr>
      <td>Precio</td>
      <td>
      <?php echo $producto->precio;?>
      </td>
    </tr>
    <tr>
    <tr>
      <td>Fecha</td>
      <td>
      <?php echo $producto->fecha;?>
      </td>
    </tr>
    <tr>
      <td>Cantidad</td>
      <td>
      <?php echo $producto->stock;?>
      </td>
    </tr>
    <tr>
      <td>Cantidad a vender</td>
      <td>
        <input type="num" name="cantidad_vender" id="cantidad_vender" placeholder="cantidad">
      </td>
    </tr>
    <tr>
      <td colspan="2"><button name="guardar">Vender</button></td>
    </tr>
  </table>
</form>

<a href="index.php"><button>Regresar</button></a>
<p>&nbsp;</p>
</body>
</html>