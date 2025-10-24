<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$resultado = "";
if ($_POST) {
    $b = $_POST['base'];
    $h = $_POST['altura'];
    if ($b > 0 && $h > 0) {
        $area = $b * $h;
        $perimetro = 2 * ($b + $h);
        $resultado = "Área: $area<br>Perímetro: $perimetro";
    } else {
        $resultado = "Error: los valores deben ser positivos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Figuras</title></head>
<body>
    <h2>Cálculo de Área y Perímetro</h2>
    <form method="POST">
        Base: <input type="number" name="base" required><br>
        Altura: <input type="number" name="altura" required><br>
        <button type="submit">Calcular</button>
    </form>
    <p><?php echo $resultado; ?></p>
    <a href="panel.php">Volver al panel</a>
</body>
</html>
