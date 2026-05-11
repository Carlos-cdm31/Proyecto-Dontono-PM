<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería Don Toño</title>
    <link rel="stylesheet" href="styles/styles.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ajuste personalizado para centrar las flechas abajo si es necesario en pantallas pequeñas */
        @media (max-width: 768px) {
            .carousel-control-prev, .carousel-control-next {
                margin-bottom: 3rem !important;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Ferreteria Don Toño</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="sucursales.php">Sucursales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="precios.php">Precios</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="productos.php"><i class="fa-solid fa-screwdriver-wrench me-2"></i>Herramientas</a></li>
                            <li><a class="dropdown-item" href="construccion.php"><i class="fa-solid fa-trowel me-2"></i>Construcción</a></li>
                            <li><a class="dropdown-item" href="pintura.php"><i class="fa-solid fa-paint-roller me-2"></i>Pintura</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="todos-productos.php">Ver todo el catálogo</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="ms-auto"> 
                    <?php if (isset($_SESSION['usuario_id'])): ?> 
                        <div class="dropdown"> 
                            <a class="btn btn-outline-secondary dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                                <i class="fa-solid fa-circle-user me-2"></i> 
                                <?php echo $_SESSION['nombre']; ?> 
                            </a> 

                            <ul class="dropdown-menu dropdown-menu-end"> 
                                <li> 
                                    <a class="dropdown-item" href="profile.php"> 
                                        <i class="fa-solid fa-id-card me-2"></i> Perfil 
                                    </a> 
                                </li> 
                                <li><hr class="dropdown-divider"></li> 
                                <li> 
                                    <a class="dropdown-item text-danger" href="php/logout.php"> 
                                        <i class="fa-solid fa-right-from-bracket me-2"></i> Cerrar sesión
                                    </a> 
                                </li> 
                            </ul> 
                        </div> 
                    <?php else: ?> 
                        <a class="btn btn-outline-primary me-2" href="login.html">Login</a> 
                        <a class="btn btn-primary" href="register.html">Registrarse</a> 
                    <?php endif; ?> 
                </div>
            </div>
        </div>
    </nav>

    <!-- Carousel con flechas abajo -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/dontono.jpg" class="d-block w-100" alt="Ferretería principal">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Calidad Garantizada</h5>
                    <p>Las mejores marcas para tus proyectos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ferre1.jpg" class="d-block w-100" alt="Herramientas">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Variedad de Herramientas</h5>
                    <p>Todo lo que necesitas en un solo lugar.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ferre2.jpg" class="d-block w-100" alt="Materiales">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Materiales de Construcción</h5>
                    <p>Construye tus sueños con nosotros.</p>
                </div>
            </div>
        </div>
        
        <!-- Controles movidos abajo usando clases de posición de Bootstrap -->
        <button class="carousel-control-prev position-absolute bottom-0 start-0 top-auto h-auto mb-4 ms-5" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev" style="width: 5%;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next position-absolute bottom-0 end-0 top-auto h-auto mb-4 me-5" type="button" data-bs-target="#carouselExampleFade" data-bs-slide=next" style="width: 5%;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Hero Section -->
    <div class="row flex-lg-row-reverse align-items-center g-5 m-4"> 
        <div class="col-10 col-sm-8 col-lg-6"> 
            <img src="img/6288505.webp" class="d-block mx-lg-auto img-fluid rounded-5" alt="Hero" width="700" height="500" loading="lazy"> 
        </div> 
        <div class="col-lg-6"> 
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Expertos en Ferretería</h1> 
            <p class="lead">Bienvenido a Ferretería Don Toño. Ofrecemos soluciones integrales para el hogar y la construcción con más de 20 años de experiencia en el mercado.</p> 
            <div class="d-grid gap-2 d-md-flex justify-content-md-start"> 
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Ver Ofertas</button> 
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Contactar</button> 
            </div> 
        </div> 
    </div>

    <!-- Features con Iconos Negros -->
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 m-4"> 
        <div class="feature col"> 
            <!-- Cambio: text-dark y eliminación de text-bg-primary bg-gradient -->
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-dark fs-2 mb-3 p-2 rounded"> 
                <i class="fa-solid fa-screwdriver-wrench"></i>
            </div> 
            <h3 class="fs-2 text-body-emphasis">Herramientas</h3> 
            <p>Manuales y eléctricas de la más alta resistencia para profesionales y aficionados.</p> 
            <a href="productos.php" class="icon-link">Ver catálogo <i class="fa-solid fa-chevron-right"></i></a> 
        </div> 
        
        <div class="feature col"> 
            <!-- Cambio: text-dark y eliminación de text-bg-primary bg-gradient -->
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-dark fs-2 mb-3 p-2 rounded"> 
                <i class="fa-solid fa-brush"></i>
            </div> 
            <h3 class="fs-2 text-body-emphasis">Pinturas</h3> 
            <p>Amplia gama de colores y acabados para interiores y exteriores con protección climática.</p> 
            <a href="pintura.php" class="icon-link">Ver colores <i class="fa-solid fa-chevron-right"></i></a> 
        </div> 
        
        <div class="feature col"> 
            <!-- Cambio: text-dark y eliminación de text-bg-primary bg-gradient -->
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-dark fs-2 mb-3 p-2 rounded"> 
                <i class="fa-solid fa-hammer"></i>
            </div> 
            <h3 class="fs-2 text-body-emphasis">Construcción</h3> 
            <p>Cemento, varillas y todo lo necesario para cimentar tus proyectos con seguridad.</p> 
            <a href="construccion.php" class="icon-link">Más información <i class="fa-solid fa-chevron-right"></i></a> 
        </div> 
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"> 
        <div class="col-md-4 d-flex align-items-center ms-4"> 
            <span class="mb-3 mb-md-0 text-body-secondary">© 2026 Ferretería Don Toño</span> 
        </div> 

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-5"> 
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fa-brands fa-instagram fs-4"></i></a></li> 
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fa-brands fa-facebook fs-4"></i></a></li> 
        </ul> 
    </footer>
    
    <!-- Bootstrap 5.3.3 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>