<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel Principal</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['user']; ?>!</h2>
    <a href="figuras.php">Ir al cálculo de figuras</a><br>
    <a href="cuadrantes.php">Ir al ejercicio de cuadrantes</a><br><br>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
