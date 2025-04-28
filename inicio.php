<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacion de inicio de sesion</title>
</head>
<body>
<?php
if (empty($_POST['nombre']) || empty($_POST['mensaje'])) {
    echo "Error: Todos los campos son obligatorios.";
    exit;
}

$nombre = htmlspecialchars($_POST['nombre']);
$mensaje = htmlspecialchars($_POST['mensaje']);

echo "Gracias por tu reporte, $nombre. Lo revisaremos pronto.";
?>

</body>
</html>