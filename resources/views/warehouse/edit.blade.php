<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar </h1>
    <form action="{{ route('warehouses.update', $warehouse) }}" method="POST">
        @csrf <!-- Directiva de Blade para agregar el token CSRF -->
        @method('patch') <!-- Utilizado para enviar el método PATCH -->

        <label>NIT:
            <br>
            <input type="number" name="nit" value="{{ old('nit', $warehouses->nit) }}">
        </label>
        <br>
        <!-- Mostrar errores de validación -->
        @error('nit')
            <span>{{ $message }}</span>
            <br><br>
        @enderror

        <label>Nombre del Establecimiento:
            <br>
            <input type="text" name="name" value="{{ old('name', $warehouses->name) }}">
        </label>
        <br>
        <!-- Mostrar errores de validación -->
        @error('name')
            <span>{{ $message }}</span>
            <br><br>
        @enderror

        <label>Dirección:
            <br>
            <input type="text" name="address" value="{{ old('address', $warehouses->address) }}">
        </label>
        <br>
        <!-- Mostrar errores de validación -->
        @error('address')
            <span>{{ $message }}</span>
            <br><br>
        @enderror

        <label>Correo:
            <br>
            <input type="text" name="email" value="{{ old('email', $warehouses->email) }}">
        </label>
        <br>
        <!-- Mostrar errores de validación -->
        @error('email')
            <span>{{ $message }}</span>
            <br><br>
        @enderror

        <br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
