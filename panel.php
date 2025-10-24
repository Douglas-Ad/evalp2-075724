<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Panel Principal</title></head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['user']; ?>!</h2>
    <p>Seleccione una opción:</p>
    <ul>
        <li><a href="figuras.php">Ejercicio 1: Cálculo de Figuras</a></li>
        <li><a href="cuadrantes.php">Ejercicio 2: Cuadrantes</a></li>
    </ul>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
