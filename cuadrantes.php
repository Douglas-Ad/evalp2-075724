<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$resultado = "";
if ($_POST) {
    $x = $_POST['x'];
    $y = $_POST['y'];

    if (!is_numeric($x) || !is_numeric($y)) {
        $resultado = "Error: ingrese valores numéricos.";
    } elseif ($x == 0 && $y == 0) {
        $resultado = "El punto está en el origen (0,0).";
    } elseif ($x == 0) {
        $resultado = "El punto está sobre el eje Y.";
    } elseif ($y == 0) {
        $resultado = "El punto está sobre el eje X.";
    } elseif ($x > 0 && $y > 0) {
        $resultado = "El punto está en el I cuadrante.";
    } elseif ($x < 0 && $y > 0) {
        $resultado = "El punto está en el II cuadrante.";
    } elseif ($x < 0 && $y < 0) {
        $resultado = "El punto está en el III cuadrante.";
    } elseif ($x > 0 && $y < 0) {
        $resultado = "El punto está en el IV cuadrante.";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Cuadrantes</title></head>
<body>
    <h2>Determinador de Cuadrantes</h2>
    <form method="POST">
        Valor X: <input type="number" name="x" required><br>
        Valor Y: <input type="number" name="y" required><br>
        <button type="submit">Evaluar</button>
    </form>
    <p><?php echo $resultado; ?></p>
    <a href="panel.php">Volver al panel</a>
</body>
</html>
