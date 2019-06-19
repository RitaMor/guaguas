<?php

include("BaseDeDatos.php");
include("DbMySql.php");

// $prueba = new BaseDeDatos('localhost','guaguas','rita1234','guaguas',3306,'mysql');
// $prueba->verconfiguracion();

// echo'<pre>';
// print_r($prueba);
// echo'<pre>';

$dbLocal = new DbMySql('localhost','guaguas','rita1234','guaguas',3306);
$dbLocal->setQuery("SELECT * FROM guagua");

$dbLocal->verConfiguracion();

echo '<pre>';
print_r($dbLocal->queryToArray());
echo '</pre>';

?>