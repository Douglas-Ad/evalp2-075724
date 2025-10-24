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
        $resultado = "<div class='alert alert-danger'>Error: ingrese valores numéricos.</div>";
    } elseif ($x == 0 && $y == 0) {
        $resultado = "<div class='alert alert-info'>El punto está en el origen (0,0).</div>";
    } elseif ($x == 0) {
        $resultado = "<div class='alert alert-warning'>El punto está sobre el eje Y.</div>";
    } elseif ($y == 0) {
        $resultado = "<div class='alert alert-warning'>El punto está sobre el eje X.</div>";
    } elseif ($x > 0 && $y > 0) {
        $resultado = "<div class='alert alert-success'>El punto está en el I cuadrante.</div>";
    } elseif ($x < 0 && $y > 0) {
        $resultado = "<div class='alert alert-success'>El punto está en el II cuadrante.</div>";
    } elseif ($x < 0 && $y < 0) {
        $resultado = "<div class='alert alert-success'>El punto está en el III cuadrante.</div>";
    } elseif ($x > 0 && $y < 0) {
        $resultado = "<div class='alert alert-success'>El punto está en el IV cuadrante.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cuadrantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h3 class="text-center mb-3">Determinador de Cuadrantes</h3>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Valor X:</label>
                    <input type="number" name="x" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Valor Y:</label>
                    <input type="number" name="y" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Evaluar</button>
            </form>
            <div class="mt-3"><?php echo $resultado; ?></div>
            <a href="panel.php" class="btn btn-secondary w-100 mt-2">Volver al panel</a>
        </div>
    </div>
</body>
</html>
