<?php
$mysqli = include_once "conexion.php";
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];
$proveedor = $_POST["proveedor_id"];
$sentencia = $mysqli->prepare("INSERT INTO productos
(nombre, precio, cantidad, proveedor_id) 
VALUES
(?, ?, ?, ?)");
$sentencia->bind_param("ss", $nombre, $precio, $cantidad, $proveedor);
$sentencia->execute();
header("Location: listar.php");
?>