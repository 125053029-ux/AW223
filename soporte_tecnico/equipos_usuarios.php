<?php
$titulo = "Equipo / Usuario";
$subtitulo = "Selecciona una opcion";
include "includes/encabezado.php";
?>
        <section>
            <h2>Menu de gestion</h2>
            <div class="tarjetas">
                <a class="tarjeta" href="usuarios.php"><h3>Gestion de usuarios</h3><p>Registrar y consultar usuarios</p></a>
                <a class="tarjeta" href="equipos.php"><h3>Gestion de equipos</h3><p>Registrar y consultar equipos</p></a>
            </div>
        </section>
        <p class="volver"><a class="boton" href="index.php">Volver al menu</a></p>
<?php include "includes/pie.php"; ?>
