<?php
include_once ('../Model/consulta.php');
include_once ('../Model/guardar.php');
include_once ('../Model/delete.php');

$opc = $_SERVER["REQUEST_METHOD"];
switch ($opc) {
    case 'GET':
        Consulta :: getEstudiantes();
        break;
    case 'POST':
        Guardar :: guardarEstudiantes();
        break;
    case 'DELETE':
        Eliminar :: eliminarEstudiantes();
        break;
    default:
        echo "No se encontro la opcion";
        break;
}
?>