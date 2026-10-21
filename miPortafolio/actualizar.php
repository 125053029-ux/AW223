<?php
require_once("conexion.php");

$id = $_POST["id"];
$nombre = trim($_POST["nombre"]);
$correo = trim($_POST["correo"]);
$mensaje = trim($_POST["mensaje"]);

if ($nombre == "" || $correo == "" || $mensaje == "" || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    header("Location: editar.php?id=" . $id . "&error=1");
    exit;
}

$sql = "UPDATE mensajes SET nombre = ?, correo = ?, mensaje = ? WHERE id = ?";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("sssi", $nombre, $correo, $mensaje, $id);

if ($stmt->execute()) {
    header("Location: admin.php?estadophp=actualizado");
} else {
    header("Location: admin.php?estadophp=error");
}

$stmt->close();
$conexion->close();
exit;
?>