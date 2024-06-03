<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a la página principal de compañías</title>
</head>
<body>
    <h1>Establecimiento</h1>
    <a href="/warehouses/create">Crear un Establecimiento</a>

    <ul>
        @foreach ($warehouses as $warehouse)
            <li>
                <a href="{{ route('warehouses.show', $warehouse->id) }}">
                    Nombre: {{ $warehouse->name }}
                </a>
                <p>Dirección: {{ $warehouse->address }}</p>
                <p>Teléfono: {{ $warehouse->phone }}</p>
            </li>
        @endforeach
    </ul>
    
    {{ $warehouses->links() }} <!-- Agrega la paginación -->
</body>
</html>
