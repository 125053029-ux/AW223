<?php
function consultaGasto(){
    require_once "conexion.php";
    
    $selectMsj="select * from gastos";
    try{
        $rsGasto=mysqli_query($conexion,$selectMsj);
        mysqli_close($conexion);
        return $rsGasto;


    }catch(Exception $e){
        die('Algo paso al consultar:'.$e->getMessage());
    }
}