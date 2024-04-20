<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
</head>
<body>
    <h1>Calificaciones de {{ $user->name }}</h1>

    <table>
        <thead>
            <tr>
                <th>Grupo</th>
                <th>Materia</th>
                <th>Calificación</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gruposInscritos as $grupo)
                <tr>
                    <td>{{ $grupo->id }}</td>
                    <td>{{ $grupo->materia->name }}</td>
                    <td>{{ $grupo->calificaciones()->max('calificacion')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
