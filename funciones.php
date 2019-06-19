<?php

include("bbdd/BaseDeDatos.php");
include("bbdd/DbMySql.php");


function conexionBD($consulta){
    $dbLocal = new DbMySql('localhost','guaguas','rita1234','guaguas',3306);
    $valor = $dbLocal->setQuery($consulta);
    return $valor;
}

function verGuaguas(){

    $consulta = "SELECT * FROM guagua";
    $valor = conexionBD($consulta);

    $resultado ='';
    while($row = mysqli_fetch_assoc($valor)){
        $resultado .= '<h3>Nombre: <span>'.$row['nombre'].'</span></h3>';
        $resultado .= '<h4>Color: <span>'.$row['color'].'</span></h4>';
        $resultado .= '<h4>Capacidad: '.$row['capacidad'].'</span></h4>';
    }
    //$resultado = 'hola';
    return $resultado;
}

?>