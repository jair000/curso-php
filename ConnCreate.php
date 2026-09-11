<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$database = "album";

try {
    $conn = new PDO(
        "mysql:host=$servidor;dbname=$database",
        $usuario,
        $contrasena
    );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion.', 'foto.png')";
    $conn->exec($sql);

    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
