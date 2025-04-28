<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

// Usuario y clave predefinidos
$usuario_valido = "alumno";
$clave_valida = "agua123";

if ($_POST['usuario'] === $usuario_valido && $_POST['clave'] === $clave_valida) {
    $_SESSION['logueado'] = true;
    header("Location: formulario.php"); // redirige al formulario
    exit;
} else {
    echo "Usuario o contraseña incorrectos. <a href='login.html'>Volver a intentar</a>";
}
?>
</body>
</html>