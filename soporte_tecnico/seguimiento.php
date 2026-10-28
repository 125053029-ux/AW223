<?php
require_once "consultas.php";
$titulo = "Seguimiento";
$subtitulo = "Modulo de seguimiento de solicitudes";
include "includes/encabezado.php";
?>
        <section>
            <h2>Solicitudes registradas</h2>
            <div class="tabla"><table>
                <thead><tr><th>ID</th><th>Usuario</th><th>Equipo</th><th>Problema</th><th>Estado</th><th>Opciones</th></tr></thead>
                <tbody>
                <?php $rs = listaSolicitudes(); while ($s = $rs->fetch_assoc()) { ?>
                    <tr><td><?php echo $s['id_solicitud']; ?></td>
                        <td><?php echo htmlspecialchars($s['usuario']); ?></td>
                        <td><?php echo htmlspecialchars($s['equipo']); ?></td>
                        <td><?php echo htmlspecialchars($s['descripcion']); ?></td>
                        <td><span class="estado <?php echo claseEstado($s['estado']); ?>"><?php echo $s['estado']; ?></span></td>
                        <td><a class="boton" href="atender.php?id=<?php echo $s['id_solicitud']; ?>">Atender</a></td></tr>
                <?php } ?>
                </tbody>
            </table></div>
        </section>
        <p class="volver"><a class="boton" href="index.php">Volver al menu</a></p>
<?php include "includes/pie.php"; ?>
