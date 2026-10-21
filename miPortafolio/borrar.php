<?php
require_once("conexion.php");

$id = $_POST["id"];

$sql = "DELETE FROM mensajes WHERE id = ?";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute() && $stmt->affected_rows > 0) {
    header("Location: admin.php?estadophp=borrado");
} else {
    header("Location: admin.php?estadophp=error");
}

$stmt->close();
$conexion->close();
exit;
?>