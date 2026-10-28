<?php
// Conexion centralizada: todos los modulos la usan con require_once
$conexion = new mysqli("localhost", "root", "", "soporte_db");
if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion->connect_error);
}
$conexion->set_charset("utf8mb4");
