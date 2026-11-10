<?php 
$tituloPagina = "Royale Game - Tienda de Videojuegos";
$royalegame = "Royale Game";
include_once __DIR__ . '/header.php';
?>
<link rel="stylesheet" href="estilos.css">

<section class="hero">
    <div class="contenedor hero-contenido">
        <h1>Sube de nivel en el mundo del gaming</h1>
        <p>Los mejores títulos, preventas exclusivas y créditos para todas tus plataformas favoritas al mejor precio.</p>
        <div class="hero-botones">
            <a href="catalogo.php" class="btn-primario">Ver Catálogo</a>
        </div>
    </div>
</section>

<section class="contenedor seccion">
    <h2 class="titulo-seccion">Acceso Rápido a Secciones</h2>
    <div class="grid-tarjetas">
        <div class="tarjeta-acceso">
            <h3>🎮 Catálogo de Juegos</h3>
            <p>Explora preventas, lanzamientos y clásicos para PC, PlayStation, Xbox y Nintendo.</p>
            <a href="catalogo.php">Ver juegos &rarr;</a>
        </div>
        <div class="tarjeta-acceso">
            <h3>⚡ Tarjetas y Recargas</h3>
            <p>Tarjetas de regalo, V-Bucks, Robux, saldo de Steam y mucho más al instante.</p>
            <a href="compras.php">Comprar saldo &rarr;</a>
        </div>
        <div class="tarjeta-acceso">
            <h3>👥 Fundadores</h3>
            <p>Mira quién fue el que creó tu sitio favorito.</p>
            <a href="creadores.php">Ver equipo &rarr;</a>
        </div>
        <div class="tarjeta-acceso">
            <h3>❓ Sobre Nosotros</h3>
            <p>Conoce más acerca de nuestra tienda virtual y nuestro compromiso con los gamers.</p>
            <a href="nosotros.php">Conocer más &rarr;</a>
        </div>
    </div>
</section>
<?php include_once __DIR__ . '/footer.php'; ?>