<?php

include("bbdd/BaseDeDatos.php");
include("bbdd/DbMySql.php");
include("clases/Guagua.php");

if(isset($_POST['alta'])){
    altaGuagua();
}

if(isset($_POST['editar'])){
    editarGuagua();
}

if(isset($_GET['borrar'])){
    borrarGuagua($_GET['borrar']);
}


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
    $menu = '<li><a href="index.php" class="'.$class1.'">Inicio</a></li>
            <li><a href="alta_guagua.php" class="'.$class2.'">Alta Guaguas</a></li>
            <li><a href="ver_guaguas.php" class="'.$class3.'">Ver Guaguas</a></li>
            <li><a href="alta_conductores.php" class="'.$class4.'">Alta Conductores</a></li>
            <li><a href="ver_conductores.php" class="'.$class5.'">Ver Conductores</a></li>';
            return $menu;
        }


function altaGuagua(){
          $nombre = $_POST['nombre'];
          $color = $_POST['color']; 
          $capacidad = $_POST['capacidad'];
          $guagua = new Guagua($nombre,$color,$capacidad);
          
          conexionBD($guagua->darDeAlta());
          header ('Location:ver_guaguas.php');
        }

function verGuaguas(){

    $consulta = "SELECT * FROM guagua";
    $valor = conexionBD($consulta);

    $resultado ='';
    while($row = mysqli_fetch_assoc($valor)){
        $resultado .= '<h3>Nombre: 
                            <span>'.$row['nombre'].'</span>
                            <a href="editar_guagua.php?id='.$row['ID'] .'"class="editar">
                                <img src="images/editar.png">
                            </a>
                        </h3>';

        $resultado .= '<h4>Color: <span>'.$row['color'].'</span></h4>';
        
        $resultado .= '<h4>Capacidad: '.$row['capacidad'].'</span></h4>';
    }
    //$resultado = 'hola';
    return $resultado;
}


function cargarGuaguaEditar($id){

    $consulta = "SELECT * FROM guagua WHERE ID='$id'";
    $valor = conexionBD($consulta);
    // while($row = mysqli_fetch_assoc($valor)){
    //     $nombre = $row['nombre'];
    //     $color = $row['color'];
    //     $capacidad = $row['capacidad'];
    // }
    // $resultado = Array($nombre,$color,$capacidad);
    // return $resultado;
    return mysqli_fetch_assoc($valor);
    
}

function editarGuagua(){
    $id = htmlentities($_POST['ID']);
    $nombre = htmlentities($_POST['nombre']);
    $color = htmlentities($_POST['color']); 
    $capacidad = htmlentities($_POST['capacidad']);
    $consulta = "UPDATE guagua set Nombre='$nombre', Color='$color', Capacidad='$capacidad'
                WHERE ID='$id'";

    conexionBD($consulta);
    header ('Location:ver_guaguas.php?id='.$id);

}

function borrarGuagua($id){
    $consulta ="DELETE FROM guagua WHERE ID='$id'";
    conexionBD($consulta);
    header('Location:ver_guaguas.php');
}

?>