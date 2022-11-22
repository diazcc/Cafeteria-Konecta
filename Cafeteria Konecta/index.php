<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="stylesheets.css">


</head>

<body>

<?php 
    require_once "conexion.php";
    require_once "crear.php";
    $conexion = Conectar::conexion();
    $registro = $conexion->query("SELECT * FROM producto;")->fetchAll(PDO::FETCH_OBJ);
?>


<h1>CAFETERIA<span class="subtitulo">Konecta</span></h1>

    <a href="ventas.php"><button>Vender</button></a>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table width="50%" border="0" align="center">
        <td colspan="8" class="primera_fila">Productos</td>   
        <tr >
            <td class="primera_fila">Id</td>
            <td class="primera_fila">Nombre Producto</td>
            <td class="primera_fila">Precio</td>
            <td class="primera_fila">Peso</td>
            <td class="primera_fila">Referencia</td>
            <td class="primera_fila">Categoria</td>
            <td class="primera_fila">Fecha</td>
            <td class="primera_fila">Stock</td>
        </tr> 

        <?php
            foreach ($registro as $producto):
        ?>
        <tr>
            <td><?php echo $producto->id ?></td>
            <td><?php echo $producto->nombre_producto ?></td>
            <td><?php echo $producto->precio ?></td>
            <td><?php echo $producto->peso ?></td>
            <td><?php echo $producto->referencia ?></td>
            <td><?php echo $producto->categoria ?></td>
            <td><?php echo $producto->fecha ?></td>
            <td><?php echo $producto->stock ?></td>

            <td class="bot"><a href="borrar.php?id=<?php echo $producto->id  ?>"><input type='button' name='del' id='del' value='Eliminar producto'></a></td>
            <td class='bot'> <a href="editar.php?id=<?php echo $producto->id ?> & nombre_producto=<?php echo $producto->nombre_producto?> & precio=<?php echo $producto->precio?> & peso=<?php echo $producto->peso ?> & referencia=<?php echo $producto->referencia ?> &categoria=<?php echo $producto->categoria ?> &fecha=<?php echo $producto->fecha?> &stock=<?php echo $producto->stock ?>"> 

            <input type='button' name='up' id='up' value='Editar producto'></a></td>
        </tr>       
        <tr>

        <?php
            endforeach;
        ?>

        <td></td>
            <td><input type='text' name='nombre_producto'id='nombre_producto' size='10' class='centrado'></td>
            <td><input type='text' name='precio'id='precio' size='10' class='centrado'></td>
            <td><input type='text' name='peso'id='peso' size='10' class='centrado'></td>
            <td><input type='text' name='referencia'id='referencia' size='10' class='centrado'></td>
            <td><input type='text' name='categoria'id='categoria' size='10' class='centrado'></td>
            <td><input type='text' name='fecha'id='fecha' size='10' class='centrado'></td>
            <td><input type='text' name='stock'id='stock' size='10' class='centrado'></td>
            <td class='bot'><input type='submit' name='create' id='create' value='Insertar nuevo'></td></tr>    
        </table>
    </form>
    

    <a href="<?php include "mayorstock.php"; ?>"> <button>Producto de mayor cantidad</button></a> <!-- QUERY A LA CONSULTA: select id, nombre_producto, stock from producto where stock = (select max(stock) from producto); -->
        <!-- Mil disculpas por entregar el proyecto incompleto
                -   Realizar la venta (disminui el stock)
                -   Las dos consultas sql(Mas vendido, mayor stock)
        -->
</body>
</html>