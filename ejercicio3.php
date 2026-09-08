<?php
if ($_POST) {

    $btn = $_POST['btn'];
    switch ($btn) {
        case 'Botón 1':
            echo "Has presionado el botón 1 <style>body{background-color: red;}</style>";
            break;
        case 'Botón 2':
            echo "Has presionado el botón 2 <style>body{background-color: blue;}</style>";
            break;
        case 'Botón 3':
            echo "Has presionado el botón 3 <style>body{background-color: green;}</style>";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <title>ejercicio3</title>
</head>

<body>
    <form action="ejercicio3.php" method="post">
        <input type="submit" value="Botón 1" name="btn">
        <input type="submit" value="Botón 2" name="btn">
        <input type="submit" value="Botón 3" name="btn">
    </form>
</body>

</html>