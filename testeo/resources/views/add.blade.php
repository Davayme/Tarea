<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Agregar</h1>
    <form method="POST" action="{{ route('guardar') }}">
        @csrf
        <input type="text" name= "cedula" id= "cedula" placeholder="Cedula">
        <input type="text" name= "nombre" placeholder="Nombre">
        <input type="text" name= "apellido" placeholder="Apellido">
        <input type="text" name= "direccion" placeholder="Direccion ">
        <input type="text" name= "telefono" placeholder="Telefono">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>