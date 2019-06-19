<?php
include("funciones.php");
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
    <section>
        <?= $resultado ?>
    </section>
    <article id="ver_autobuses">
            <img src="images/autobuses.png" alt="Guaguas"/>
    </article>
        <div class="nuevobus">
            <a href="alta_autobuses.php">
                <img src="images/nuevobus.png" alt="Dar de alta"/>
            </a>
        </div>
</body>
</html>