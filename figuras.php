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
        $resultado = "<div class='alert alert-success'>Área: $area<br>Perímetro: $perimetro</div>";
    } else {
        $resultado = "<div class='alert alert-danger'>Error: los valores deben ser positivos.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Figuras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h3 class="text-center mb-3">Cálculo de Área y Perímetro</h3>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Base:</label>
                    <input type="number" name="base" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Altura:</label>
                    <input type="number" name="altura" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Calcular</button>
            </form>
            <div class="mt-3"><?php echo $resultado; ?></div>
            <a href="panel.php" class="btn btn-secondary w-100 mt-2">Volver al panel</a>
        </div>
    </div>
</body>
</html>
