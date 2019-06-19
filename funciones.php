<?php

include("bbdd/BaseDeDatos.php");
include("bbdd/DbMySql.php");


function conexionBD($consulta){
    $dbLocal = new DbMySql('localhost','guaguas','rita1234','guaguas',3306);
    $valor = $dbLocal->setQuery($consulta);
    return $valor;
}

function menu($numero){

    $class1='';$class2='';$class3='';$class4='';$class5='';

        switch($numero){
            case 1:
            $class1='active';
            break;
            case 2:
            $class2='active';
            break;
            case 3:
            $class3='active';
            break;
            case 4:
            $class4='active';
            break;
            case 5:
            $class5='active';
            break;
        }
    $menu = '<li><a href="index.php" class="<?=$uno?>">Inicio</a></li>
            <li><a href="alta_guaguas.php" class="<?=$dos?>">Alta Guaguas</a></li>
            <li><a href="ver_guaguas.php" class="<?=$tres?>">Ver Guaguas</a></li>
            <li><a href="alta_conductores.php" class="<?=$cuatro?>">Alta Conductores</a></li>
            <li><a href="ver_conductores.php" class="<?=$cinco?>">Ver Conductores</a></li>';
            return $menu;
        }

function verGuaguas(){

    $consulta = "SELECT * FROM guagua";
    $valor = conexionBD($consulta);

    $resultado ='';
    while($row = mysqli_fetch_assoc($valor)){
        $resultado .= '<h3>Nombre: 
                            <span>'.$row['nombre'].'</span>
                            <a href=editar_autobuses.php" class="editar">
                                <img src="images/editar.png">
                            </a>
                        </h3>';

        $resultado .= '<h4>Color: <span>'.$row['color'].'</span></h4>';
        
        $resultado .= '<h4>Capacidad: '.$row['capacidad'].'</span></h4>';
    }
    //$resultado = 'hola';
    return $resultado;
}

?>