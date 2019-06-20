<?php
include("funciones.php");
$menu = menu(2);
$resultado = verGuaguas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <title>Alta Guagua</title>
</head>
<body>
    <header>
        <h1><img src="images/logo.png" alt="Logo"></h1>
        <h2>Alta Guaguas</h2>
    </header>
    <nav>
        <ul>
            <?= $menu ?>
        </ul>
    </nav>
    <form method="post" action="funciones.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="Nombre"/>
        <label for="color">Color</label>
        <input type="text" name="color" id="Color"/>
        <label for="capacidad">Capacidad</label>
        <input type="text" name="capacidad" id="Capacidad"/>
        <input type="submit" value="Dar de Alta" name="alta"/> 

        <div class="clearfix"></div>

    </form>
   
    <article id="autobus">
            <img src="images/autobus.png" alt="Guaguas"/>
    </article>

        
</body>
</html>