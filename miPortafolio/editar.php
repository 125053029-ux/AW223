<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar mensaje | Mi Portafolio</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>

    <!-- Encabezado -->
    <header class="encabezado-admin">


        <h1>Editar mensaje</h1>
        <p>Modificar los datos del mensaje seleccionado</p>
    </header>
<nav> 
        <a href="index.php" class="regresar" title="Regresar al portafolio">🏠</a>
<a href="admin.php" class="regresar">←</a>
    </nav>
    <!-- Contenido principal -->
    <main>
        <section>
            <h2>Formulario de edicion</h2>


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
        
       /* var mensajes = {
            1: {
                nombre: "dul",
                correo: "dul@correo.com",
                mensaje: "Hola, me gusto tu portafolio."
            }
            
        };*/

         var parametros = new URLSearchParams(window.location.search);
         var id = parametros.get("id");

        if (mensajes[id]) {
        document.getElementById("nombre").value = mensajes[id].nombre;
        document.getElementById("correo").value = mensajes[id].correo;
        document.getElementById("mensaje").value = mensajes[id].mensaje;
         } else {
        document.getElementById("resultadoEditar").textContent =
                 "No se encontro el mensaje seleccionado";
           }

         document.getElementById("formEditar").addEventListener("submit", function(event) {
             event.preventDefault();

             document.getElementById("resultadoEditar").textContent =
                 "Los cambios no se guardan permanentemente.";
         });
    </script>

</body>
</html>
