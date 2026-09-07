<?php
$name = "Jairo";
$edad = 22;
$salida = "Hello, $name !";
$salida .= ", con una edad de $edad";
define("img", 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcFw8bH2qpxoFN7LORu9mUteHWJ_WD33sgaDormvI7yA&s=10');
var_dump($edad);
$esViejo = match ($edad >= 18) {
    true => 'eres mayor de edad',
    false => 'no eres mayor de edad'
};

$mejoresLenguajes = ["PHP", "JavaScript", "Python"];
$mejoresLenguajes[] = "Java";
$mejoresLenguajes[] = "C++";
?>

<?php if ($name == "Jairo") : ?>
    <p>Name: <?= $name; ?></p>
<?php else : ?>
    <p>Name: <?= "Otro" ?></p>
<?php endif; ?>
<?php
$person = [
    "name" => $name,
    "age" => $edad
];

$person["name"] = "Maria";
$person["age"] = 25;
?>


<ul>
    <?php foreach ($mejoresLenguajes as $key => $lenguaje): ?>
        <li><?= $key . " " . $lenguaje ?></li>
    <?php endforeach; ?>
</ul>

<h2><?= $esViejo; ?></h2>
<img src="<?= img; ?>" alt="Profile Image" width="200">
<h1>
    <?= $salida; ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>