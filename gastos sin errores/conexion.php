<?php
$conexion = new mysqli("localhost", "root", "", "gastos_db");

if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>