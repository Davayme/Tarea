<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles estudiante</title>
</head>
<body>
    @foreach ($estudiantes as $e)
        @if ($e['cedula'] == $cedula)
        <h2>{{$e['nombre']}}</h2>
        <h2>{{$e['apellido']}}</h2>
        @endif
    @endforeach
</body>
</html>