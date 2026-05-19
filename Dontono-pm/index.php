<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería Don Toño - Inicio</title>
    <link rel="stylesheet" href="styles/styles.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        .feature-box {
            transition: transform 0.3s ease;
        }
        .feature-box:hover {
            transform: translateY(-5px);
        }
        .icon-circle {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #0d6efd, #003bb3);
            color: white;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="bg-light">

    <?php require_once("components/navbar-.php"); ?> 

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/dontono.jpg" class="d-block w-100" alt="Ferretería Don Toño">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h5 class="fw-bold fs-3">¡Bienvenido a Ferretería Don Toño!</h5>
                    <p>Calidad, variedad y los mejores precios para tus proyectos de construcción y hogar.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ferre1.jpg" class="d-block w-100" alt="Herramientas">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h5 class="fw-bold fs-3">Herramientas Profesionales</h5>
                    <p>Encuentra marcas líderes que garantizan la resistencia que necesitas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ferre2.jpg" class="d-block w-100" alt="Materiales de construcción">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h5 class="fw-bold fs-3">Todo para la Construcción</h5>
                    <p>Desde la base hasta el techo, te acompañamos en cada etapa de tu obra.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <div class="container my-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-4 bg-white rounded shadow-sm m-2"> 
            <div class="col-10 col-sm-8 col-lg-6 mx-auto"> 
                <img src="img/6288505.webp" class="d-block mx-lg-auto img-fluid rounded-4 shadow" alt="Herramientas de trabajo" width="700" height="500" loading="lazy"> 
            </div> 
            <div class="col-lg-6"> 
                <h1 class="display-5 fw-bold text-dark lh-1 mb-3">Construye tus ideas con los mejores materiales</h1> 
                <p class="lead text-muted">En Ferretería Don Toño nos dedicamos a proveer soluciones integrales para albañilería, fontanería, electricidad y carpintería. Más de 20 años sirviendo a nuestra comunidad con atención personalizada y cotizaciones a tu medida.</p> 
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4"> 
                    <a href="productos.php" class="btn btn-primary btn-lg px-4 me-md-2 rounded-pill shadow-sm"><i class="fa-solid fa-store me-2"></i>Ver Productos</a> 
                    <a href="sucursales.php" class="btn btn-outline-secondary btn-lg px-4 rounded-pill"><i class="fa-solid fa-map-location-dot me-2"></i>Visitar Sucursales</a> 
                </div> 
            </div> 
        </div>
    </div>

    <div class="container my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">¿Qué te ofrecemos?</h2>
            <p class="text-muted">Explora nuestra variedad de servicios y departamentos principales</p>
        </div>
        
        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3 m-2"> 
            <div class="col feature-box"> 
                <div class="p-4 bg-white h-100 rounded shadow-sm text-center border-top border-primary border-4">
                    <div class="icon-circle mb-3 shadow-sm"> 
                        <i class="fa-solid fa-screwdriver-wrench fs-4"></i>
                    </div> 
                    <h3 class="fs-4 fw-bold text-dark">Herramientas</h3> 
                    <p class="text-muted">Equipos manuales y eléctricos de alta resistencia, ideales para carpintería, mecánica y tareas cotidianas del hogar.</p> 
                    <a href="productos.php" class="btn btn-link text-decoration-none fw-bold mt-2">
                        Explorar catálogo <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a> 
                </div>
            </div> 
            
            <div class="col feature-box"> 
                <div class="p-4 bg-white h-100 rounded shadow-sm text-center border-top border-primary border-4">
                    <div class="icon-circle mb-3 shadow-sm"> 
                        <i class="fa-solid fa-brush fs-4"></i>
                    </div> 
                    <h3 class="fs-4 fw-bold text-dark">Pintura y Acabados</h3> 
                    <p class="text-muted">Amplia gama de colores, brochas, rodillos y selladores de protección climática para interiores y exteriores.</p> 
                    <a href="productos.php" class="btn btn-link text-decoration-none fw-bold mt-2">
                        Ver opciones <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a> 
                </div>
            </div> 
            
            <div class="col feature-box"> 
                <div class="p-4 bg-white h-100 rounded shadow-sm text-center border-top border-primary border-4">
                    <div class="icon-circle mb-3 shadow-sm"> 
                        <i class="fa-solid fa-hammer fs-4"></i>
                    </div> 
                    <h3 class="fs-4 fw-bold text-dark">Materiales Fuertes</h3> 
                    <p class="text-muted">Hierro, cemento, bloques y techos estructurales para cimentar tus obras con la mayor seguridad y garantía del mercado.</p> 
                    <a href="productos.php" class="btn btn-link text-decoration-none fw-bold mt-2">
                        Saber más <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a> 
                </div>
            </div> 
        </div>
    </div>

    <footer class="bg-white text-dark py-4 mt-5 border-top shadow-sm"> 
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="col-md-4 d-flex align-items-center"> 
                <span class="text-muted">© 2026 Ferretería Don Toño. Todos los derechos reservados.</span> 
            </div> 

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex fs-4 mb-0"> 
                <li class="ms-3">
                    <a class="text-muted hover-primary" href="#" aria-label="Instagram">
                        <i class="fa-brands fa-instagram text-danger"></i>
                    </a>
                </li> 
                <li class="ms-3">
                    <a class="text-muted" href="#" aria-label="Facebook">
                        <i class="fa-brands fa-facebook text-primary"></i>
                    </a>
                </li> 
            </ul> 
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>