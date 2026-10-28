<?php
require_once "consultas.php";

$id = $_GET["id"];
$sol = obtenerSolicitud($id);

if ($sol == null) {
    header("Location: seguimiento.php?error=1");
    exit;
}

$titulo = "Atender solicitud #" . $sol['id_solicitud'];
$subtitulo = htmlspecialchars($sol['usuario']) . " - " . htmlspecialchars($sol['equipo']);
include "includes/encabezado.php";
?>
        <section>
            <h2>Actualizar estado</h2>
            <p class="detalle"><strong>Problema:</strong> <?php echo htmlspecialchars($sol['descripcion']); ?><br>
                <strong>Estado actual:</strong> <span class="estado <?php echo claseEstado($sol['estado']); ?>"><?php echo $sol['estado']; ?></span></p>
            <form class="validar" action="actualizar_seguimiento.php" method="POST">
                <input type="hidden" name="id_solicitud" value="<?php echo $sol['id_solicitud']; ?>">
                <div class="campo"><label for="estado">Nuevo estado</label>
                    <select id="estado" name="estado" required>
                        <option value="">Selecciona un estado</option>
                        <option value="En proceso">En proceso</option>
                        <option value="Resuelta">Resuelta</option>
                    </select></div>
                <div class="campo"><label for="observacion">Observacion de la atencion</label>
                    <textarea id="observacion" name="observacion" rows="4" required></textarea></div>
                <button type="submit">Guardar cambios</button>
            </form>
        </section>
        <section>
            <h2>Historial de atencion</h2>
            <div class="tabla"><table>
                <thead><tr><th>Fecha</th><th>Estado</th><th>Observacion</th></tr></thead>
                <tbody>
                <?php $h = historialSolicitud($sol['id_solicitud']); while ($r = $h->fetch_assoc()) { ?>
                    <tr><td><?php echo $r['fecha_act']; ?></td>
                        <td><span class="estado <?php echo claseEstado($r['estado']); ?>"><?php echo $r['estado']; ?></span></td>
                        <td><?php echo htmlspecialchars($r['observacion']); ?></td></tr>
                <?php } ?>
                </tbody>
            </table></div>
        </section>
        <p class="volver"><a class="boton" href="seguimiento.php">Volver al menu</a></p>
<?php include "includes/pie.php"; ?>
