<?php
require_once "conexion.php";

$concepto = trim($_POST["concepto"] ?? "");
$monto = trim($_POST["monto"] ?? "");
$categoria = trim($_POST["categoria"] ?? "");

if ($concepto === "" || $monto === "" || $categoria === "") {
    header("Location: index.php?estado=error");
    exit();
}

$sql = "INSERT INTO gastos (concepto, monto, categoria) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sss", $concepto, $monto, $categoria);

if ($stmt->execute()) {
    header("Location: index.php?estado=exito");
} else {
    header("Location: index.php?estado=error");
}

$stmt->close();
$conexion->close();
exit();
?>