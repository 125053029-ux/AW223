<?php
require_once("conexion.php");

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: admin.php");
    exit;
}

$id = $_GET["id"];

$sql = "SELECT * FROM mensajes WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows == 0) {
    header("Location: admin.php");
    exit;
}

$mensajeActual = $resultado->fetch_assoc();

$stmt->close();
?>

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
        <a href="admin.php" class="regresar" title="Regresar a administración">←</a>
    </nav>

    <!-- Contenido principal -->
    <main>
        <section>

            <h2>Formulario de edición</h2>

            <!-- Mensaje para las alertas -->
            <div id="mensajeAlerta"></div>

            <form id="formEditar" action="actualizar.php" method="POST">

                <input
                    type="hidden"
                    name="id"
                    value="<?php echo htmlspecialchars($mensajeActual['id']); ?>">

                <div class="campo">
                    <label for="nombre">Nombre:</label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        value="<?php echo htmlspecialchars($mensajeActual['nombre']); ?>"
                        required>
                </div>

                <div class="campo">
                    <label for="correo">Correo electrónico:</label>

                    <input
                        type="email"
                        id="correo"
                        name="correo"
                        value="<?php echo htmlspecialchars($mensajeActual['correo']); ?>"
                        required>
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje:</label>

                    <textarea
                        id="mensaje"
                        name="mensaje"
                        rows="5"
                        required><?php echo htmlspecialchars($mensajeActual['mensaje']); ?></textarea>
                </div>

                <button type="submit">Actualizar mensaje</button>

            </form>

        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2026 Mi Portafolio</p>
        <p>Práctica de Programación Web</p>
    </footer>

<script src="./js/AlertInsert.js"></script>

</body>
</html>
