<?php 
session_start(); 
// SOLO ADMIN 
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] != 'admin') { 
header("Location: ../index.php"); 
exit(); 
} 
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Crear Producto</title> 

    <link 
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css
    " rel="stylesheet"> 
</head> 

<body> 

    <nav class="navbar navbar-dark bg-dark"> 
        <div class="container-fluid"> 
            <span class="navbar-brand">Crear Producto</span> 

            <a href="dashboard.php" class="btn btn-secondary"> 
                Volver 
            </a> 
        </div> 
    </nav> 