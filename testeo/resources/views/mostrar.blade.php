<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>

    <h1>Estudiantes</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
            </tr>
        </thead>
        
        <tbody>
            
            @foreach ($estudiantes as $e)
            <tr>
            <td>
            <a href= "{{ route('estudiantes.show', ['cedula'=>$e['cedula']]) }}">
                {{ $e['cedula'] }}
            </a>
            </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>