<?php
// Funciones de consulta, igual que consulta_mensajes.php del portafolio

function listaUsuarios(){
    require "conexion.php";
    return mysqli_query($conexion, "SELECT * FROM usuarios ORDER BY nombre");
}

function listaEquipos(){
    require "conexion.php";
    return mysqli_query($conexion, "SELECT * FROM equipos ORDER BY nombre");
}

function listaSolicitudes(){
    require "conexion.php";
    $sql = "SELECT s.id_solicitud, u.nombre AS usuario, e.nombre AS equipo, s.descripcion, s.estado
            FROM solicitudes s
            JOIN usuarios u ON u.id_usuario = s.id_usuario
            JOIN equipos e ON e.id_equipo = s.id_equipo
            ORDER BY s.id_solicitud DESC";
    return mysqli_query($conexion, $sql);
}

function obtenerSolicitud($id){
    require "conexion.php";
    $sql = "SELECT s.*, u.nombre AS usuario, e.nombre AS equipo
            FROM solicitudes s
            JOIN usuarios u ON u.id_usuario = s.id_usuario
            JOIN equipos e ON e.id_equipo = s.id_equipo
            WHERE s.id_solicitud = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    return $resultado->fetch_assoc();
}

function historialSolicitud($id){
    require "conexion.php";
    $stmt = $conexion->prepare("SELECT * FROM seguimiento WHERE id_solicitud = ? ORDER BY id_seguimiento DESC");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result();
}

// Convierte "En proceso" en "en-proceso" para usarlo como clase de CSS
function claseEstado($estado){
    return strtolower(str_replace(" ", "-", $estado));
}
