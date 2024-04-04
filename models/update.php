<?php
include_once ("conexion.php");
class Actualizar
{

    public static function actualizarEstudiantes()
    {
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];

        $sql = "UPDATE estudiantes SET nombre = '$nombre', apellido = '$apellido', direccion = '$direccion', telefono = '$telefono' WHERE cedula = '$cedula'";

        include_once ("conexion.php");
        $objeto = new Conexion();
        $conexion = $objeto->conectar();

        $resultado = $conexion->prepare($sql);
        $resultado->execute();
        echo json_encode('Se actualizo');

    }
}
?>