<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container text-center mt-5">
        <div class="card shadow p-4">
            <h2 class="mb-3">Bienvenido, <?php echo $_SESSION['user']; ?> 👋</h2>
            <p class="lead">Seleccione una opción:</p>
            <div class="d-grid gap-3">
                <a href="figuras.php" class="btn btn-outline-primary">Ejercicio 1: Cálculo de Figuras</a>
                <a href="cuadrantes.php" class="btn btn-outline-success">Ejercicio 2: Cuadrantes</a>
            </div>
            <hr>
            <a href="logout.php" class="btn btn-danger mt-2">Cerrar sesión</a>
        </div>
    </div>
</body>
</html>
