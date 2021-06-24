<?php
include_once "encabezado.php";

$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT id, nombre, precio, cantidad, proveedor_id FROM videojuegos");
$productos = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de productos</h1>
    </div>
    <div class="col-12">
        <a class="btn btn-success my-2" href="formulario_registrar.php">Agregar nuevo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
					<th>Cantidad</th>
					<th>Proveedor</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($productos as $producto) { ?>
                    <tr>
                        <td><?php echo $producto["id"] ?></td>
                        <td><?php echo $producto["nombre"] ?></td>
                        <td><?php echo $producto["precio"] ?></td>
						<td><?php echo $producto["cantidad"] ?></td>
						<td><?php echo $producto["proveedor_id"] ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $videojuego["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a href="eliminar.php?id=<?php echo $videojuego["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "pie.php" ?>