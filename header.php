<?php 
$tituloPagina = "Royale Game - Tienda de Videojuegos";
$royalegame = "Royale Game";
include_once __DIR__ . '/header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($tituloPagina) ? $tituloPagina . " | " . $nombreClinica : $nombreClinica; ?></title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body></body>
    <!-- Navegación Principal -->
    <header class="header-principal">
        <div class="contenedor navbar">
            <a href="index.php" class="logo" style="display: flex; align-items: center; text-decoration: none;">
    <img src="LOGO.png" alt="Logo de Royale Games" style="width:280px; height: 130px; margin-right: -80px; margin-left: -200px;">
    <span style="color: #8b5cf6; font-weight: bold;">Royale</span>
    <span style="color: #e2e8f0; font-weight: bold;">Games</span>
</a>
            <nav class="menu-navegacion">
            <a href="index.php">Inicio</a>
            <a href="nosotros.php">Nosotros</a>
            <a href="catalogo.php">Catálogo</a>
            <a href="carrito.php">Carrito</a>
            <a href="creadores.php">Creadores</a>
        </nav>
        </div>
    </header>