<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "db_dontono");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Configurar caracteres correctos para tildes y eñes de las ubicaciones
$conexion->set_charset("utf8mb4");

$sql = "SELECT * FROM sucursal";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestras Sucursales - Ferretería Don Toño</title>
    <link rel="stylesheet" href="styles/styles.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Contenedor fijo para que todas las imágenes de las sucursales midan igual */
        .sucursal-img-container {
            height: 220px;
            overflow: hidden;
        }
        .sucursal-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
        }
        
        
        .sucursal-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
        }
        .sucursal-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15) !important;
        }
    </style>
</head>
<body class="bg-light">
    
    <?php require_once("components/navbar-.php"); ?>    

    <div class="container mt-5"> 
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark display-6">
                <i class="fa-solid fa-store text-primary me-2"></i> Nuestras Sucursales
            </h2>
            <p class="text-muted">Encuentra la sucursal de Ferretería Don Toño más cercana a ti</p>
        </div>

        <div class="row g-4"> 
            <?php if ($resultado && $resultado->num_rows > 0): ?>
                <?php while($sucursal = $resultado->fetch_assoc()): ?> 
                    <div class="col-10 col-sm-8 col-md-6 col-lg-4 mx-auto"> 
                        <div class="card h-100 shadow-sm sucursal-card"> 
                            
                            <div class="sucursal-img-container">
                                <?php 
                                $rutaImg = !empty($sucursal['imagen']) ? "img/sucursales/" . $sucursal['imagen'] : "img/sucursales/default.jpg";
                                ?>
                                <img src="<?php echo $rutaImg; ?>" class="card-img-top" alt="Sucursal <?php echo htmlspecialchars($sucursal['nombre']); ?>"> 
                            </div>

                            <div class="card-body d-flex flex-column"> 
                                <h5 class="card-title fw-bold text-dark mb-3">
                                    <i class="fa-solid fa-location-dot text-danger me-1"></i> 
                                    <?php echo htmlspecialchars($sucursal['nombre']); ?>
                                </h5> 
                                
                                <p class="card-text text-secondary mb-2 small">
                                    <strong>Ubicación:</strong> <?php echo htmlspecialchars($sucursal['ubicacion']); ?>
                                </p>

                                <p class="card-text text-muted flex-grow-1 fs-6"> 
                                    <?php echo htmlspecialchars($sucursal['descripcion']); ?> 
                                </p>
                                
                                <div class="mt-3 pt-3 border-top">
                                    <a href="#" class="btn btn-primary w-100 rounded-pill shadow-sm">
                                        <i class="fa-solid fa-map-marked-alt me-1"></i> Ver más detalles
                                    </a> 
                                </div>
                            </div> 
                        </div> 
                    </div> 
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12 text-center my-5">
                    <p class="fs-5 text-muted"><i class="fa-solid fa-store-slash text-warning mb-2 d-block fs-1"></i> No se encontraron sucursales disponibles.</p>
                </div>
            <?php endif; ?>
        </div> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>