<?php 

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

function obtenerJuegos($conexion){
$sql="SELECT id_juego,
nombre,
anio,
empresa
from t_juegos";


$result=mysqli_query($conexion,$sql);

    $juegos = array();

    if($result && mysqli_num_rows($result) >= 1){

        $juegos = $result;

    }

    return $juegos;


}


