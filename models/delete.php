<?php
include_once ("conexion.php");
class Eliminar {

public static function eliminarEstudiantes() {
    $objeto = new Conexion();
    $conexion = $objeto->conectar();
    
    $cedula = $_GET['cedula'];
    
    $sqlDelete = "DELETE FROM estudiantes WHERE cedula = '$cedula' ";
    $resultado = $conexion->prepare($sqlDelete);
    $resultado->execute();
    echo json_encode($resultado);

}

}
?>