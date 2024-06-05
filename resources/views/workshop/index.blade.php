<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a la página principal de establecimientos</title>
</head>
<body>
    <h1>Establecimiento</h1>
    <a href="/workshops/create">Crear un Establecimiento</a>

    <ul>
        @foreach ($workshops as $workshop)
            <li>
                <a href="{{ route('workshops.show', $workshop->id) }}">
                    Nombre: {{ $workshop->name }}
                </a>
                <p>Dirección: {{ $workshop->address }}</p>
                <p>Teléfono: {{ $workshop->phone }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
