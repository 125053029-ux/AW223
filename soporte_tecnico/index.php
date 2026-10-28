<?php
$titulo = "Soporte Tecnico";
$subtitulo = "Sistema web de soporte tecnico universitario";
include "includes/encabezado.php";
?>
        <section>
            <h2>Pagina principal</h2>
            <div class="tarjetas">
                <a class="tarjeta" href="equipos_usuarios.php"><h3>Equipo / Usuario</h3><p>Gestion de usuarios y equipos</p></a>
                <a class="tarjeta" href="solicitudes.php"><h3>Solicitud</h3><p>Crear y consultar solicitudes</p></a>
                <a class="tarjeta" href="seguimiento.php"><h3>Seguimiento</h3><p>Actualizar el estado de atencion</p></a>
            </div>
        </section>
<?php include "includes/pie.php"; ?>
