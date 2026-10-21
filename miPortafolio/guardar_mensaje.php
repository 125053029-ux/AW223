<?php
require_once("conexion.php");

$nombre = trim($_POST["txtnombre"]);
$correo = trim($_POST["txtcorreo"]);
$mensaje = trim($_POST["txtmensaje"]);

if ($nombre == "" || $correo == "" || $mensaje == "" || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.php?estadophp=error");
    exit;
}

$sqlInsert = "INSERT INTO mensajes(nombre, correo, mensaje) VALUES (?, ?, ?)";

$stmt = $conexion->prepare($sqlInsert);
$stmt->bind_param("sss", $nombre, $correo, $mensaje);

if ($stmt->execute()) {
    header("Location: index.php?estadophp=exito");
} else {
    header("Location: index.php?estadophp=error");
}

$stmt->close();
$conexion->close();
exit;
?>