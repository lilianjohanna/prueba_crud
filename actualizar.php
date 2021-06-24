<?php
$mysqli = include_once "conexion.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];
$proveedor = $_POST["proveedor_id"];

$sentencia = $mysqli->prepare("UPDATE productos SET
nombre = ?,
precio = ?,
cantidad = ?,
proveedor_id = ?
WHERE id = ?");
$sentencia->bind_param("ssi", $nombre, $precio, $cantidad, $proveedor, $id);
$sentencia->execute();
header("Location: listar.php");
