<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Portafolio</title> 
    <link rel="stylesheet" href="./css/estilos.css"> 

</head> 
<body> 
    
   
    <!-- Encabezado --> 
    <header> 
        <h1>Mi Portafolio</h1> 
        <p id="bienvenida">Bienvenido a mi sitio web personal</p> 
        <button id="cambiarTexto">Cambiar Bienvenido</button>
    </header> 

    <!-- NavegaciOn --> 
      
    <nav> 
        <a href="#inicio">Inicio</a> 
        <a href="#sobre-mi">Sobre mí</a> 
        <a href="#habilidades">Habilidades</a> 
        <a href="#proyectos">Proyectos</a> 
        <a href="#contacto">Contacto</a>
        <a href="admin.php">Admin</a>
    </nav>

    <!-- Contenido principal --> 
    <main> 
        <section class="seccion-inicio" id="inicio"> 
            <div class="seccion-contenido"> 
                <h2>Hola, Soy DUL</h2> 
                <p>Soy estudiante de ITIID y estoy aprendiendo web</p> 
                <a href="#proyectos" class="boton">Ver mis proyectos</a> 
            </div> 
        </section> 
       
        <!-- Seccion sobre mi --> 
        <section id="sobre-mi"> 
            <h2>Sobre mi</h2> 
            <div class="sobre-mi-contenido"> 
                <img src="" alt=""> 
                <div> 
                    <p>Algo sobre mi</p> 
                    <p>En esta practica estoy aprendiendo HTML y CSS</p> 
                </div> 
            </div> 
        </section> 
 
        <!-- Habilidades --> 
        <section id="habilidades"> 
            <h2>Mis habilidades</h2> 
            
            <ul class="lista-habilidades"> 
                <li>Scratch</li> 
                <li>JAVA</li> 
                <li>Pseint</li> 
                <li>Packet Tracer</li> 
                <li>MySQL</li> 
            </ul> 
            <div class="botones-habilidades">
                <button id="cambiarColor">Cambiar color</button>
            <button id="cambiarLetra">Cambiar topologia</button>

            </div>
        </section> 
 
        <!-- Seccion de proyectos --> 
        <section id="proyectos"> 
            <h2>Mis proyectos</h2> 
            <div class="contenedor-proyectos"> 
                <article class="proyecto"> 
                    <h3>Sistema de algo 1</h3> 
                    <p>Descripcion del sistema</p> 
                    <a href="">Ver proyectos</a> 
                </article> 
                <article class="proyecto"> 
                    <h3>Sistema de algo 2</h3> 
                    <p>Descripcion del sistema</p> 
                    <a href="">Ver proyectos</a> 
                </article> 
            </div> 
        </section> 

     
        <!-- Seccion de contacto -->
<section id="contacto">

    <h2>Contacto</h2>

    <form id="formulario" action="guardar_mensaje.php" method="post">

        <div class="campo">
            <label for="nombre">Nombre</label>

            <input
                type="text"
                id="nombre"
                name="txtnombre"
                placeholder="Escribe tu nombre"
                required>
        </div>

        <div class="campo">
            <label for="email">Correo electronico</label>

            <input
                type="email"
                id="email"
                name="txtcorreo"
                placeholder="ejemplo@correo.com"
                required>
        </div>

        <div class="campo">
            <label for="mensaje">Mensaje</label>

            <textarea
                id="mensaje"
                name="txtmensaje"
                rows="5"
                placeholder="Escribe tu mensaje"
                required></textarea>
        </div>

        <button type="submit">Enviar mensaje</button>

    </form>

    <p id="mensajeFormulario"></p>

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