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
        <a href="index.php" class="regresar" title="Regresar al portafolio">←</a>
        <h1>Administracion</h1>
        <p>Mensajes recibidos</p>
    </header>

    <!-- Contenido principal -->
    <main>
        <section>
            <h2>Lista de mensajes</h2>

            <div class="tabla-mensajes">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo electronico</th>
                            <th>Mensaje</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>dul</td>
                            <td>dul@correo.com</td>
                            <td>Hola, me gusto tu portafolio.</td>
                            <td class="acciones">
                                <a href="editar.php?id=1"
                                   class="icono-accion editar"
                                   title="Editar mensaje">✏️</a>

                                <button type="button"
                                        class="icono-accion borrar"
                                        title="Borrar mensaje"
                                        onclick="alert('La opcion de borrar se habilitara despues.');">
                                    🗑️
                                </button>
                            </td>
                        </tr>

                        
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

</body>
</html>

