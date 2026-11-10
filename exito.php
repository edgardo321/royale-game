<?php 
session_start();
$tituloPagina = "Transferencia Exitosa - Royale Game"; // O el nombre de tu plataforma
include_once __DIR__ . '/header.php';
?>

<link rel="stylesheet" href="estilos.css">

<style>
    :root {
        --epic-bg-dark: #121212;
        --epic-bg-card: #202020;
        --epic-border: #2f2f2f;
        --epic-blue: #0074e4;
        --epic-blue-hover: #005fa3;
        --epic-success: #10b981;
        --epic-text-main: #ffffff;
        --epic-text-muted: #9e9e9e;
    }

    body {
        background-color: var(--epic-bg-dark);
        color: var(--epic-text-main);
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    }

    .seccion-exito {
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }

    .tarjeta-exito {
        background-color: var(--epic-bg-card);
        border: 1px solid var(--epic-border);
        border-radius: 12px;
        padding: 40px;
        max-width: 500px;
        width: 100%;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    }

    .icono-exito {
        width: 70px;
        height: 70px;
        background-color: rgba(16, 185, 129, 0.15);
        color: var(--epic-success);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.2rem;
        margin: 0 auto 20px auto;
        border: 2px solid var(--epic-success);
    }

    .tarjeta-exito h1 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--epic-text-main);
    }

    .tarjeta-exito p {
        color: var(--epic-text-muted);
        font-size: 0.95rem;
        margin-bottom: 30px;
    }

    /* Detalles de la transferencia (Opcional) */
    .detalles-transferencia {
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 30px;
        text-align: left;
    }

    .detalle-fila {
        display: flex;
        justify-content: space-between;
        font-size: 0.9rem;
        margin-bottom: 8px;
    }

    .detalle-fila:last-child {
        margin-bottom: 0;
    }

    .detalle-label {
        color: var(--epic-text-muted);
    }

    .detalle-valor {
        color: var(--epic-text-main);
        font-weight: 500;
    }

    /* Botones de acción */
    .acciones-exito {
        display: flex;
        gap: 12px;
        flex-direction: column;
    }

    .btn-principal {
        background-color: var(--epic-blue);
        color: white;
        border: none;
        border-radius: 6px;
        padding: 12px 20px;
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        cursor: pointer;
        transition: background-color 0.2s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-principal:hover {
        background-color: var(--epic-blue-hover);
    }

    .btn-secundario {
        background-color: transparent;
        color: var(--epic-text-muted);
        border: 1px solid var(--epic-border);
        border-radius: 6px;
        padding: 12px 20px;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-secundario:hover {
        color: var(--epic-text-main);
        border-color: var(--epic-text-muted);
    }
</style>

<div class="seccion-exito">
    <div class="tarjeta-exito">
        <!-- Icono de Check con SVG -->
        <div class="icono-exito">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
        </div>

        <h1>¡Transferencia Exitosa!</h1>
        <p>Tu pago o transferencia se ha procesado correctamente y de forma segura.</p>

        <!-- Bloque opcional con datos de la transacción (puedes llenarlo con $_SESSION o variables PHP si las tienes) -->
        <div class="detalles-transferencia">
            <div class="detalle-fila">
                <span class="detalle-label">Estado:</span>
                <span class="detalle-valor" style="color: var(--epic-success);">Completado</span>
            </div>
            <div class="detalle-fila">
                <span class="detalle-label">Fecha:</span>
                <span class="detalle-valor"><?php echo date("d/m/Y H:i"); ?></span>
            </div>
            <div class="detalle-fila">
                <span class="detalle-label">Referencia:</span>
                <span class="detalle-valor">#TRX-<?php echo rand(100000, 999999); ?></span>
            </div>
        </div>

        <!-- Botones de navegación -->
        <div class="acciones-exito">
            <a href="index.php" class="btn-principal">Volver a la Tienda</a>
            <a href="carrito.php" class="btn-secundario">Ver Mis Pedidos / Carrito</a>
        </div>
    </div>
</div>

<?php include_once __DIR__ . '/footer.php'; ?>