<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializando una nueva sesionj de curl; ch = cURL handle (INICIO)
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla (CONFIGURO)
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Ejecutar la petición y guardar el resultado (LLAMO)
$result = curl_exec($ch);
// Decodifico el json
$data = json_decode($result, true);

// una alternativa seria utilizar file_get_contents
// $result = file_get_contents(API_URL);
// si solo es un GET a una API
// $data = json_decode($result, true);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Proxima pelicula de Marvel">
    <title>Proxima Pelicula de Marvel</title>
    <!-- Centered viewport (PICO CSS)-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <link rel="icon" type="image/png" href="<?= $data['poster_url'] ?>">
</head>

<body>
    <header>
        <h1 style="font-size: 90px;">Proxima Pelicula de Marvel</h1>
    </header>
    <hr>
    <main>
        <section>
            <div class="section1">
                <h2 style="font-size: 55px;"><?= $data['title'] . " se estrena en " . $data['days_until'] . " día(s)!!" ?></h2>

                <p style="font-size: 30px;">Fecha de estreno: <?= $data['release_date'] ?></p>
                <p style="font-size: 30px;">¿Cual es la siguiente? <?= $data['following_production']['title'] ?></p>
                <img src="<?= $data['poster_url'] ?>" alt="<?= $data['title'] ?>" style=" border-radius: 15px;" width="700">
            </div>
            <div class="section2"><a href="https://github.com/jair000">
                    <img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/github-white-icon.png" alt="Github" target="_blank" width="100">
                </a></div>

        </section>
    </main>
    <hr>
    <footer>
        <p>Pagina hecha por Jairo 🤍</p>
        <p>Inspirado en la API de <a href="https://whenisthenextmcufilm.com" target="_blank">When Is The Next MCU Film</a> | <a href="https://whenisthenextmcufilm.com/api" target="_blank">API</a></p>
    </footer>
</body>
<style>
    section {
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    div,
    header {
        text-align: center;
    }

    .section2 {
        margin-top: 50px;
    }