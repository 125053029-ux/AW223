<?php /* Variables esperadas: $titulo, $subtitulo */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?> | Soporte Tecnico UPQ</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <header>
        <h1><?php echo $titulo; ?></h1>
        <p><?php echo $subtitulo; ?></p>
    </header>
    <nav>
        <a href="index.php">Menu principal</a>
    </nav>
    <main>
