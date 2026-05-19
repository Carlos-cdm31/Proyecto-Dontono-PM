<?php 
// php/register.php
include("conexion.php"); // Asegúrate de que conexion.php esté en la misma carpeta 'php/'

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Limpiamos los datos para evitar inyecciones básicas
    $nombre = trim($_POST['nombre']); 
    $correo = trim($_POST['correo']); 
    $plain_password = $_POST['password'];

    // Validamos que los campos no vayan vacíos
    if (empty($nombre) || empty($correo) || empty($plain_password)) {
        echo "<div style='font-family:sans-serif; text-align:center; margin-top:50px;'><h3>Todos los campos son obligatorios.</h3><a href='../register.html'>Volver</a></div>";
        exit();
    }

    // HASH DE CONTRASEÑA SEGURO
    $password = password_hash($plain_password, PASSWORD_DEFAULT); 
    
    // Preparar la consulta SQL
    $sql = "INSERT INTO usuarios (nombre, correo, password, rol) VALUES (?, ?, ?, 'usuario')"; 
    $stmt = $conn->prepare($sql); 
    
    if ($stmt) {
        $stmt->bind_param("sss", $nombre, $correo, $password); 
        
        if ($stmt->execute()) { 
            // Si todo sale bien, muestra un mensaje estético y redirige al login en 3 segundos
            echo "
            <!DOCTYPE html>
            <html lang='es'>
            <head>
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
            </head>
            <body class='bg-light d-flex align-items-center justify-content-center' style='min-height: 100vh;'>
                <div class='card p-5 shadow text-center' style='max-width: 400px;'>
                    <div class='text-success display-1 mb-3'><i class='form-label'>✓</i></div>
                    <h3 class='fw-bold text-dark'>¡Registro Exitoso!</h3>
                    <p class='text-muted'>Usuario creado correctamente. Redirigiendo al inicio de sesión...</p>
                    <div class='spinner-border text-primary mt-2' role='status'></div>
                </div>
                <script>
                    setTimeout(function(){
                        window.location.href = '../login.html';
                    }, 3000);
                </script>
            </body>
            </html>";
        } else { 
            echo "Error al registrar el usuario: " . $stmt->error; 
        } 
        $stmt->close();
    } else {
        echo "Error en la preparación de la base de datos: " . $conn->error;
    }
} 
?>