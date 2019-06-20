<?php
include("funciones.php");
$menu = menu(3);
$resultado = verGuaguas();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <title>Ver Guaguas</title>
</head>
<body>
    <header>
        <h1><img src="images/logo.png" alt="Logo"></h1>
        <h2>Ver Guaguas</h2>
    </header>
    <nav>
        <ul>
            <?= $menu ?>
        </ul>
    </nav>
    <section>
        <?= $resultado ?>
    </section>
    <article id="ver_autobuses">
            <img src="images/autobus.png" alt="Guaguas"/>
    </article>
        <div class="nuevobus">
            <a href="alta_guagua.php">
                <img src="images/nuevobus.png" alt="Dar de alta guagua"/>
            </a>
        </div>
</body>
</html>