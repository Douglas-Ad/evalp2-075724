<?php
session_start();
include("db.php");

if ($_POST) {
    $usuario = $_POST['user'];
    $clave = md5($_POST['pass']); // ciframos la contraseña

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $usuario;
        header("Location: panel.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        Usuario: <input type="text" name="user" required><br>
        Contraseña: <input type="password" name="pass" required><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
