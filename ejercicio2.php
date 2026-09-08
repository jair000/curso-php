<?php
$nombre = "";
if ($_POST) {
    $nombre = $_POST['txtNombre'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    hola mundo
    <form action="ejercicio2.php" method="post">
        Nombre: <input type="text" name="txtNombre" placeholder="Ingresa tu nombre">
        <hr>
        <button type="submit">Enviar</button>
        <br>
        <?php if ($nombre): ?>
            <p>Nombre: <?php echo $nombre; ?></p>
        <?php endif; ?>
    </form>
</body>

</html>