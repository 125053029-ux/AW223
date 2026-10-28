<?php
require_once "consultas.php";
$titulo = "Solicitudes";
$subtitulo = "Modulo de solicitudes de soporte";
include "includes/encabezado.php";
?>
        <section>
            <h2>Nueva solicitud</h2>
            <form class="validar" action="guardar_solicitud.php" method="POST">
                <div class="campo"><label for="usuario">Solicitante</label>
                    <select id="usuario" name="id_usuario" required>
                        <option value="">Selecciona un usuario</option>
                        <?php $rs = listaUsuarios(); while ($u = $rs->fetch_assoc()) { ?>
                            <option value="<?php echo $u['id_usuario']; ?>"><?php echo htmlspecialchars($u['nombre']); ?></option>
                        <?php } ?>
                    </select></div>
                <div class="campo"><label for="equipo">Equipo</label>
                    <select id="equipo" name="id_equipo" required>
                        <option value="">Selecciona un equipo</option>
                        <?php $rs = listaEquipos(); while ($e = $rs->fetch_assoc()) { ?>
                            <option value="<?php echo $e['id_equipo']; ?>"><?php echo htmlspecialchars($e['nombre']); ?></option>
                        <?php } ?>
                    </select></div>
                <div class="campo"><label for="descripcion">Descripcion del problema</label>
                    <textarea id="descripcion" name="descripcion" rows="4" placeholder="Describe el problema" required></textarea></div>
                <button type="submit">Registrar solicitud</button>
            </form>
        </section>
        <section>
            <h2>Solicitudes registradas</h2>
            <div class="tabla"><table>
                <thead><tr><th>ID</th><th>Usuario</th><th>Equipo</th><th>Problema</th><th>Estado</th></tr></thead>
                <tbody>
                <?php $rs = listaSolicitudes(); while ($s = $rs->fetch_assoc()) { ?>
                    <tr><td><?php echo $s['id_solicitud']; ?></td>
                        <td><?php echo htmlspecialchars($s['usuario']); ?></td>
                        <td><?php echo htmlspecialchars($s['equipo']); ?></td>
                        <td><?php echo htmlspecialchars($s['descripcion']); ?></td>
                        <td><span class="estado <?php echo claseEstado($s['estado']); ?>"><?php echo $s['estado']; ?></span></td></tr>
                <?php } ?>
                </tbody>
            </table></div>
        </section>
        <p class="volver"><a class="boton" href="index.php">Volver al menu</a></p>
<?php include "includes/pie.php"; ?>
