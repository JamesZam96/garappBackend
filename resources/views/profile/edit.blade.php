<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <h1>Editar persona</h1>
    <form action="{{ route('profiles.update', $people) }}" method="POST">
        @csrf
        @method('PUT')
        <label >Nombre
            <br>
            <input type="text" name="name" value="{{ old('name', $people->name) }}">
        </label>
        <br>
        @error('name')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label >Apellido
            <br>
            <input type="text" name="lastname" value="{{ old('lastname', $people->lastname) }}">
        </label>
        <br>
        @error('lastname')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label >Dirección
            <br>
            <input type="text" name="address" value="{{ old('address', $people->address) }}">
        </label>
        <br>
        @error('address')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label >Número de teléfono
            <br>
            <input type="number" name="phoneNumber" value="{{ old('phoneNumber', $people->phoneNumber) }}">
        </label>
        <br>
        @error('phoneNumber')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label >Correo electrónico
            <br>
            <input type="email" name="email" value="{{ old('email', $people->email) }}">
        </label>
        <br>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
