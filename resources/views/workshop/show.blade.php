<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Taller</title>
</head>
<body>
    <h1>Detalles del Taller</h1>
    <p>NIT: {{ $workshop->nit }}</p>
    <p>Nombre del Taller: {{ $workshop->name }}</p>
    <p>Dirección: {{ $workshop->address }}</p>
    <p>Correo electrónico: {{ $workshop->email }}</p>
    <p>Teléfono: {{ $workshop->phone }}</p>
    
    <a href="{{ route('workshop.index') }}">Ir a la página principal</a>
    <br><br>

    <a href="{{ route('workshops.update', $workshop) }}">Editar</a>

    <form action="{{ route('workshops.destroy', $workshop) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
