<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion | Mi Portafolio</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>

    

    <!-- Encabezado -->
    <header class="encabezado-admin">

        <h1>Administracion</h1>
        <p>Mensajes recibidos</p>

    </header>

    <nav>
        <a href="index.php" class="regresar" title="Regresar al portafolio">🏠</a>
    </nav>

    <!-- Contenido principal -->
    <main>
        <section>

            <h2>Lista de mensajes</h2>

            <div class="tabla-mensajes">

                <table>

                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo electronico</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        require 'consulta_mensajes.php';

                        $rsMensajes = consultaMensajes();

                        while ($arrMensaje = mysqli_fetch_array($rsMensajes)) {

                            echo "<tr>
                            <td>" . htmlspecialchars($arrMensaje['nombre']) . "</td>
                            <td>" . htmlspecialchars($arrMensaje['correo']) . "</td>
                            <td>" . htmlspecialchars($arrMensaje['mensaje']) . "</td>
                            <td>" . htmlspecialchars($arrMensaje['timeStaps']) . "</td>

                            <td class='acciones'>

                            <a href='editar.php?id=" . $arrMensaje['id'] . "'
                            class='icono-accion editar'
                            title='Editar mensaje'>✏️</a>

                            <form action='borrar.php' method='POST'
style='display:inline-block; width:auto; margin:0; padding:0;'
onsubmit='return confirm(\"¿Estás seguro de borrar este mensaje?\");'>
                                <input type='hidden' name='id'
                                value='" . $arrMensaje['id'] . "'>

                               <button type='submit'
                                class='icono-accion borrar'
                                            title='Borrar mensaje'>
                                                        🗑️
                                                </button>

                            </form>

                            </td>
                            </tr>";
                        }
                        ?>

                    </tbody>

                </table>

            </div>

            <p class="mensaje-vacio">
                DULCESITA
            </p>

        </section>
    </main>

    <!-- Pie de pagina -->
    <footer>
        <p>&copy; 2026 Mi Portafolio</p>
        <p>Practica de Programacion Web</p>
    </footer>
<script src="./js/AlertInsert.js"></script>
</body>
</html>