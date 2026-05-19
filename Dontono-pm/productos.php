<?php 
session_start(); 
// Conectamos a la base de datos
include("php/conexion.php");  

// Consulta para traer los productos
$sql = "SELECT * FROM productos"; 
$resultado = $conn->query($sql); 
?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Don Toño</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para que todas las tarjetas e imágenes tengan simetría perfecta */
        .card-img-container {
            height: 200px;
            overflow: hidden;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-img-container img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }
        .product-card {
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.12) !important;
        }
    </style>
</head>
<body>
    
    <?php require_once("components/navbar-.php"); ?> 

    <div class="container mt-5"> 
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-dark"><i class="fa-solid fa-boxes-stacked text-primary me-2"></i> Nuestros Productos</h2> 
            <span class="badge bg-primary px-3 py-2 fs-6"><?php echo $resultado->num_rows; ?> Productos</span>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4"> 
            <?php if ($resultado && $resultado->num_rows > 0): ?>
                <?php while($producto = $resultado->fetch_assoc()): ?> 
                    <div class="col"> 
                        <div class="card h-100 shadow-sm border-0 product-card"> 
                            
                            <div class="card-img-container p-3">
                                <?php 
                                if (!empty($producto['imagen'])) {
                                    // Si tiene imagen asignada en la base de datos
                                    $rutaImagen = "img/productos/" . $producto['imagen'];
                                } else {
                                    // SI ESTÁ VACÍA: Usa una imagen genérica bonita de ferretería desde internet
                                    $rutaImagen = "https://images.unsplash.com/photo-1581244277943-fe4a9c777189?w=500&auto=format&fit=crop&q=60";
                                }
                                ?>
                                <img src="<?php echo $rutaImagen; ?>" class="card-img-top rounded" alt="<?php echo htmlspecialchars($producto['nombre']); ?>"> 
                            </div>
                            
                            <div class="card-body d-flex flex-column"> 
                                <h5 class="card-title text-dark fw-bold mb-2"><?php echo htmlspecialchars($producto['nombre']); ?></h5> 
                                <p class="card-text text-muted flex-grow-1 fs-6"> 
                                    <?php echo htmlspecialchars($producto['descripcion']); ?> 
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                                    <span class="fs-4 fw-bold text-success">
                                        $<?php echo number_format($producto['precio'], 2); ?>
                                    </span> 
                                    <a href="#" class="btn btn-primary btn-sm px-3 rounded-pill">
                                        <i class="fa-solid fa-cart-plus me-1"></i> Ver más
                                    </a> 
                                </div>
                            </div> 
                        </div> 
                    </div> 
                <?php endwhile; ?> 
            <?php else: ?>
                <div class="col-12 text-center my-5">
                    <p class="fs-5 text-muted"><i class="fa-solid fa-triangle-exclamation text-warning mb-2 d-block fs-1"></i> No hay productos registrados aún.</p>
                </div>
            <?php endif; ?>
        </div> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>