<?php 
session_start();
$tituloPagina = "Royale Game - Recargas y Códigos";
$royalegame = "Royale Game";
include_once __DIR__ . '/header.php';

// Si se envió el formulario, guardamos datos opcionales en sesión y redirigimos a exito.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['recarga_detalles'] = [
        "gamer" => htmlspecialchars($_POST['gamer']),
        "plataforma" => htmlspecialchars($_POST['plataforma']),
        "monto" => htmlspecialchars($_POST['monto'])
    ];
    
    // Redirección inmediata a exito.php
    header("Location: exito.php");
    exit();
}
?>

<link rel="stylesheet" href="estilos.css">

<div class="encabezado-pagina">
    <div class="contenedor">
        <h1>Recargas y Códigos Digitales</h1>
        <p>Obtén saldo para tus plataformas y juegos favoritos de forma segura.</p>
    </div>
</div>

<section class="contenedor seccion">
    <div class="caja-formulario">
        <!-- AQUÍ SE CAMBIÓ EL ACTION PARA APUNTAR A exito.php -->
        <form action="exito.php" method="POST">
            <div class="campo">
                <label for="gamer">Tu Gamertag / ID de Usuario:</label>
                <input type="text" id="gamer" name="gamer" required placeholder="Ej. ShadowGamer99">
            </div>

            <div class="campo">
                <label for="plataforma">Selecciona la Plataforma / Juego:</label>
                <select id="plataforma" name="plataforma" required>
                    <option value="">-- Selecciona una opción --</option>
                    <option value="Steam Wallet">Steam Wallet</option>
                    <option value="PlayStation Network">PlayStation Network (PSN)</option>
                    <option value="Xbox Gift Card">Xbox Gift Card</option>
                    <option value="V-Bucks (Fortnite)">V-Bucks (Fortnite)</option>
                    <option value="Robux (Roblox)">Robux (Roblox)</option>
                </select>
            </div>

            <div class="campo">
                <label for="monto">Monto de la Recarga:</label>
                <select id="monto" name="monto" required>
                    <option value="">-- Selecciona el monto --</option>
                    <option value="$10 USD">$10 USD</option>
                    <option value="$20 USD">$20 USD</option>
                    <option value="$50 USD">$50 USD</option>
                    <option value="$100 USD">$100 USD</option>
                </select>
            </div>

            <button type="submit" class="btn-primario btn-bloque">Procesar Recarga</button>
        </form>
    </div>
</section>

<?php include_once __DIR__ . '/footer.php';?>