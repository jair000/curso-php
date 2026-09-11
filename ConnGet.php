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

    $sql = "SELECT * FROM `fotos`";
    $sentencia = $conn->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    foreach ($resultado as $foto) {
        echo "ID: " . $foto['id'] . "<br>" . ", Nombre: " . $foto['nombre'] . ", Ruta: " . $foto['ruta'] . "<br>";
    }
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
