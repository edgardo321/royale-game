<?php 
$tituloPagina = "Royale Game - Tienda de Videojuegos";
$royalegame = "Royale Game";
include_once __DIR__ . '/header.php';

$streamers = [
    ["nombre" => "Mario 'Morales' Ruiz", "esp" => "Capitán Equipo Esports FPS", "exp" => "Campeón Regional 2025"],
    ["nombre" => "Banner' Rosa", "esp" => "Especialista en RPGs & Speedruns", "exp" => "Streamer Destacada"],
    ["nombre" => "cristopher 'lokiel' Vega", "esp" => "Analista de Torneos & Caster", "exp" => "5 años en la escena"],
    ["nombre" => "tony 'ventura' bellota", "esp" => "Diseñadora de Comunidades & Mods", "exp" => "Modding Expert"]
    ];
?>
<link rel="stylesheet" href="estilos.css">
<div class="encabezado-pagina">
    <div class="contenedor">
        <h1>Nuestros Creadores y Pro-Players</h1>
        <p>Conoce al talento que impulsa los torneos y eventos de la comunidad Royale.</p>
    </div>
</div>

<section class="contenedor seccion">
    <div class="grid-tarjetas">
        <?php foreach ($streamers as $s): ?>
            <div class="tarjeta-doctor">
                <h3><?php echo $s['nombre']; ?></h3>
                <span class="especialidad"><?php echo $s['esp']; ?></span>
                <p><?php echo $s['exp']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include_once __DIR__ . '/footer.php'; ?>
