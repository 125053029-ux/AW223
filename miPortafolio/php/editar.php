<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar mensaje | Mi Portafolio</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

    <!-- Encabezado -->
    <header class="encabezado-admin">
        <a href="../index.html" class="regresar" title="Regresar al portafolio">←</a>

        <h1>Editar mensaje</h1>
        <p>Modificar los datos del mensaje seleccionado</p>
    </header>

    <!-- Contenido principal -->
    <main>
        <section>
            <h2>Formulario de edicion</h2>

            <p style="text-align: center;">
                <a href="admin.php" class="boton">← Regresar a administracion</a>
            </p>

            <form id="formEditar">

                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" value="" required>
                </div>

                <div class="campo">
                    <label for="correo">Correo electronico:</label>
                    <input type="email" id="correo" value="" required>
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" rows="5" required></textarea>
                </div>

                <button type="submit">Actualizar mensaje</button>

                <p id="resultadoEditar"></p>

            </form>
        </section>
    </main>

    <!-- Pie de pagina -->
    <footer>
        <p>&copy; 2026 Mi Portafolio</p>
        <p>Practica de Programacion Web</p>
    </footer>

    <script>
        // Mensajes de ejemplo
        var mensajes = {
            1: {
                nombre: "dul",
                correo: "dul@correo.com",
                mensaje: "Hola, me gusto tu portafolio."
            }
            
        };

        // Obtener el numero del mensaje seleccionado
        var parametros = new URLSearchParams(window.location.search);
        var id = parametros.get("id");

        // Mostrar los datos en el formulario
        if (mensajes[id]) {
            document.getElementById("nombre").value = mensajes[id].nombre;
            document.getElementById("correo").value = mensajes[id].correo;
            document.getElementById("mensaje").value = mensajes[id].mensaje;
        } else {
            document.getElementById("resultadoEditar").textContent =
                "No se encontro el mensaje seleccionado.";
        }

        // Simular la actualizacion
        document.getElementById("formEditar").addEventListener("submit", function(event) {
            event.preventDefault();

            document.getElementById("resultadoEditar").textContent =
                "Los cambios no se guardan permanentemente.";
        });
    </script>

</body>
</html>
