<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscador</title>
</head>
<body>
 <h1>Buscar</h1>   
 <form method="GET" action= "{{ route('buscar') }}">
    <input name="curso" placeholder="Ingrese el curso" type="text">
    <input name="paralelo" placeholder="Ingrese el paralelo" type="text">
    <button type="submit">Enviar</button>
 </form>

 <br>
 <table>
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($estudiante))
            @foreach ($estudiante as $e)
                <tr>
                    <td>{{$e['cedula']}}</td>
                    <td>{{$e['nombre']}}</td>
                    <td>{{$e['apellido']}}</td>
                    <td>{{$e['direccion']}}</td>

                </tr>
            @endforeach
            
        @endif
    </tbody>
 </table>
</body>
</html>