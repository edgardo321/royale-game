<?php 
session_start();
$tituloPagina = "Royale Game - Tienda de Videojuegos";
$royalegame = "Royale Game";
include_once __DIR__ . '/header.php';

// Únicamente 4 juegos configurados
$juegos = [
    [
        "id" => 1,
        "tipo" => "Juego base",
        "titulo" => "Tomb Raider GOTY", 
        "desc" => "Explora los inicios de Lara Croft en una intensa aventura de supervivencia.", 
        "precio_original" => 19.99,
        "precio" => 17.99, 
        "descuento" => "-10%",
        "imagen" => "https://images.g2a.com/323x433/1x1x1/tomb-raider-goty-edition-p10000006245/5d4a8e5146177c6b054326e2"
    ],
    [
        "id" => 2,
        "tipo" => "Juego base",
        "titulo" => "Rise of the Tomb Raider", 
        "desc" => "Descubre los secretos de Siberia en busca de la inmortalidad.", 
        "precio_original" => 29.99,
        "precio" => 20.99, 
        "descuento" => "-30%",
        "imagen" => "https://imgs.search.brave.com/spi3EfQqzSTsHlKhq7FDnFdNkk6BPwzvEC0o0clw9NY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/c3RhdGljbmVvLmNv/bS9ldy90aHVtYi9j/L2NiL1Jzel9yaXNl/X29mX3RoZV90b21i/X3JhaWRlcl90aXRs/ZV9waWMuanBnLzcz/MHB4LVJzel9yaXNl/X29mX3RoZV90b21i/X3JhaWRlcl90aXRs/ZV9waWMuanBn"
    ],
    [
        "id" => 3,
        "tipo" => "Juego base",
        "titulo" => "Shadow of the Tomb Raider", 
        "desc" => "Salva al mundo de un apocalipsis maya y conviértete en la saqueadora de tumbas.", 
        "precio_original" => 39.99,
        "precio" => 27.99, 
        "descuento" => "-30%",
        "imagen" => "https://imgs.search.brave.com/DGPq8BMcBkGXszfFS09M15jKkdQSsUfmNR3fy6-9xWg/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9hcmVh/anVnb25lcy5zcG9y/dC5lcy93cC1jb250/ZW50L3VwbG9hZHMv/MjAxOS8wOC9TaGFk/b3dPbmUuanBnLndl/YnA"
    ],
    [
        "id" => 4,
        "tipo" => "Juego base",
        "titulo" => "Fifa 22", 
        "desc" => "Mejora tu plantilla y enfrenta a otros jugadoress.", 
        "precio_original" => 49.99,
        "precio" => 44.99, 
        "descuento" => "-10%",
        "imagen" => "https://media.falabella.com/falabellaCO/127802720_01/w=1500,h=1500,fit=cover"
    ]
];
?>
<link rel="stylesheet" href="estilos.css">

<style>
    /* Estilos Estilo Epic Games Store */
    :root {
        --epic-bg-dark: #121212;
        --epic-bg-card: #202020;
        --epic-border: #2f2f2f;
        --epic-blue: #0074e4;
        --epic-blue-hover: #005fa3;
        --epic-text-main: #ffffff;
        --epic-text-muted: #9e9e9e;
    }

    body {
        background-color: var(--epic-bg-dark);
        color: var(--epic-text-main);
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    }

    .encabezado-pagina {
        padding: 40px 20px 20px 20px;
        text-align: center;
    }

    .encabezado-pagina h1 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .encabezado-pagina p {
        color: var(--epic-text-muted);
        font-size: 1rem;
    }

    /* Carousel / Hero Section */
    .hero-carousel {
        position: relative;
        width: 100%;
        height: 400px;
        background: var(--epic-bg-card);
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 40px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
    }

    .carousel-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        display: flex;
    }

    .carousel-slide.active {
        opacity: 1;
        z-index: 2;
    }

    .carousel-slide img {
        width: 60%;
        height: 100%;
        object-fit: cover;
    }

    .carousel-content {
        width: 40%;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: linear-gradient(90deg, rgba(32,32,32,0.95) 0%, rgba(32,32,32,1) 100%);
        height: 100%;
        box-sizing: border-box;
    }

    .carousel-content h2 {
        font-size: 1.8rem;
        margin: 10px 0;
    }

    .carousel-content p {
        color: var(--epic-text-muted);
        font-size: 0.95rem;
        margin-bottom: 20px;
        line-height: 1.4;
    }

    .carousel-dots {
        position: absolute;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 8px;
        z-index: 10;
    }

    .dot {
        width: 10px;
        height: 10px;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .dot.active {
        background-color: var(--epic-text-main);
    }

    /* Cards Grid */
    .grid-epic {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 24px;
    }

    .tarjeta-epic {
        background-color: transparent;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.2s ease;
        display: flex;
        flex-direction: column;
    }

    .tarjeta-epic:hover {
        transform: translateY(-6px);
    }

    .contenedor-imagen-epic {
        width: 100%;
        height: 320px;
        background-color: var(--epic-bg-card);
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid var(--epic-border);
        transition: border-color 0.2s;
    }

    .tarjeta-epic:hover .contenedor-imagen-epic {
        border-color: #555;
    }

    .contenedor-imagen-epic img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .tarjeta-epic:hover .contenedor-imagen-epic img {
        transform: scale(1.03);
    }

    .info-juego-epic {
        padding: 12px 4px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .tipo-juego {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: var(--epic-text-muted);
        letter-spacing: 0.5px;
        margin-bottom: 4px;
    }

    .titulo-juego {
        font-size: 1rem;
        font-weight: 500;
        color: var(--epic-text-main);
        margin: 0 0 10px 0;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .precio-bloque {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 14px;
    }

    .badge-descuento {
        background-color: var(--epic-blue);
        color: white;
        font-size: 0.75rem;
        font-weight: 700;
        padding: 2px 6px;
        border-radius: 4px;
    }

    .precio-original {
        font-size: 0.85rem;
        color: var(--epic-text-muted);
        text-decoration: line-through;
    }

    .precio-final {
        font-size: 0.95rem;
        font-weight: 600;
        color: var(--epic-text-main);
    }

    .btn-comprar-epic {
        background-color: var(--epic-blue);
        color: white;
        border: none;
        border-radius: 4px;
        padding: 10px 16px;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        cursor: pointer;
        transition: background-color 0.2s;
        width: 100%;
    }

    .btn-comprar-epic:hover {
        background-color: var(--epic-blue-hover);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-carousel {
            height: auto;
        }
        .carousel-slide {
            flex-direction: column;
            position: relative;
            opacity: 1;
            display: none;
        }
        .carousel-slide.active {
            display: flex;
        }
        .carousel-slide img {
            width: 100%;
            height: 220px;
        }
        .carousel-content {
            width: 100%;
            padding: 20px;
        }
    }
</style>

<div class="encabezado-pagina">
    <div class="contenedor">
        <h1>Catálogo de Videojuegos</h1>
        <p>Descubre los títulos destacados y llévalos al mejor precio.</p>
    </div>
</div>

<section class="contenedor seccion">
    
    <!-- CAROUSEL SUPERIOR -->
    <div class="hero-carousel" id="heroCarousel">
        <?php foreach ($juegos as $index => $j): ?>
            <div class="carousel-slide <?php echo ($index === 0) ? 'active' : ''; ?>">
                <img src="<?php echo $j['imagen']; ?>" alt="<?php echo htmlspecialchars($j['titulo']); ?>">
                <div class="carousel-content">
                    <span class="tipo-juego" style="color: #60a5fa; font-weight: bold;"><?php echo $j['tipo']; ?> - Destacado</span>
                    <h2><?php echo $j['titulo']; ?></h2>
                    <p><?php echo $j['desc']; ?></p>
                    <div class="precio-bloque">
                        <span class="badge-descuento"><?php echo $j['descuento']; ?></span>
                        <span class="precio-original"><?php echo number_format($j['precio_original'], 2); ?> US$</span>
                        <span class="precio-final" style="font-size: 1.2rem;"><?php echo number_format($j['precio'], 2); ?> US$</span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        
        <!-- Indicadores de puntos -->
        <div class="carousel-dots" id="carouselDots">
            <?php foreach ($juegos as $index => $j): ?>
                <span class="dot <?php echo ($index === 0) ? 'active' : ''; ?>" onclick="currentSlide(<?php echo $index; ?>)"></span>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- CUADRÍCULA DE TARJETAS EPIC GAMES -->
    <div class="grid-epic">
        <?php foreach ($juegos as $j): ?>
            <div class="tarjeta-epic">
                <div class="contenedor-imagen-epic">
                    <img src="<?php echo $j['imagen']; ?>" alt="<?php echo htmlspecialchars($j['titulo']); ?>">
                </div>

                <div class="info-juego-epic">
                    <span class="tipo-juego"><?php echo $j['tipo']; ?></span>
                    <h3 class="titulo-juego" title="<?php echo htmlspecialchars($j['titulo']); ?>"><?php echo $j['titulo']; ?></h3>
                    
                    <div class="precio-bloque">
                        <span class="badge-descuento"><?php echo $j['descuento']; ?></span>
                        <span class="precio-original"><?php echo number_format($j['precio_original'], 2); ?> US$</span>
                        <span class="precio-final"><?php echo number_format($j['precio'], 2); ?> US$</span>
                    </div>

                    <form action="carrito.php" method="POST" style="display: flex; flex-direction: column;">
                        <input type="hidden" name="id" value="<?php echo $j['id']; ?>">
                        <input type="hidden" name="titulo" value="<?php echo htmlspecialchars($j['titulo']); ?>">
                        <input type="hidden" name="precio" value="<?php echo $j['precio']; ?>">
                        <input type="hidden" name="imagen" value="<?php echo $j['imagen']; ?>">
                        
                        <button type="submit" name="agregar" class="btn-comprar-epic">
                            Añadir al Carrito
                        </button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Script JavaScript para el slider automático -->
<script>
    let slideIndex = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.dot');
    let slideInterval;

    function showSlide(n) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        slideIndex = (n + slides.length) % slides.length;
        
        slides[slideIndex].classList.add('active');
        dots[slideIndex].classList.add('active');
    }

    function nextSlide() {
        showSlide(slideIndex + 1);
    }

    function currentSlide(n) {
        showSlide(n);
        resetTimer();
    }

    function resetTimer() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 4000);
    }

    slideInterval = setInterval(nextSlide, 4000);
</script>

<?php include_once __DIR__ . '/footer.php'; ?>