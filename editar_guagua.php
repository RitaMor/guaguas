<?php
include("funciones.php");
$menu = menu(0);

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$resultado = cargarGuaguaEditar($id);
$nombre = $resultado['nombre'];
$color = $resultado['color'];
$capacidad = $resultado['capacidad'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <title>Editar Guagua</title>
</head>
<body>
    <header>
        <h1><img src="images/logo.png" alt="Logo"></h1>
        <h2>Editar Guaguas <?= $id ?></h2>
    </header>
    <nav>
        <ul>
            <?= $menu ?>
        </ul>
    </nav>
    <form method="post" action="funciones.php">
        <input type="hidden" name="ID" value="<?= $id ?>"/>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="Nombre" value="<?= $nombre ?>"/>
        <label for="color">Color</label>
        <input type="text" name="color" id="Color" value="<?= $color ?>"/>
        <label for="capacidad">Capacidad</label>
        <input type="text" name="capacidad" id="Capacidad" value="<?= $capacidad ?>"/>
        <input type="submit" value="Guardar" name="editar" class="boton_editar"/> 
        <a href="funciones.php?borrar=<?= $id ?>" class="borrar">Eliminar</a>
        <div class="clearfix"></div>

    </form>
   
    <article id="autobus">
            <img src="images/autobus.png" alt="Guaguas"/>
    </article>

        
</body>
</html>