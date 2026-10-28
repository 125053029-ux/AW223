<?php
require_once "consultas.php";
$titulo = "Usuarios";
$subtitulo = "Modulo de usuarios y equipos";
include "includes/encabezado.php";
?>
        <section>
            <h2>Registrar usuario</h2>
            <form class="validar" action="guardar_usuario.php" method="POST">
                <div class="campo"><label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required></div>
                <div class="campo"><label for="correo">Correo electronico</label>
                    <input type="email" id="correo" name="correo" placeholder="ejemplo@upq.edu.mx" required></div>
                <button type="submit">Guardar usuario</button>
            </form>
        </section>
        <section>
            <h2>Usuarios registrados</h2>
            <div class="tabla"><table>
                <thead><tr><th>ID</th><th>Nombre</th><th>Correo electronico</th></tr></thead>
                <tbody>
                <?php $rs = listaUsuarios(); while ($u = $rs->fetch_assoc()) { ?>
                    <tr><td><?php echo $u['id_usuario']; ?></td>
                        <td><?php echo htmlspecialchars($u['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($u['correo']); ?></td></tr>
                <?php } ?>
                </tbody>
            </table></div>
        </section>
        <p class="volver"><a class="boton" href="equipos_usuarios.php">Volver al menu</a></p>
<?php include "includes/pie.php"; ?>
