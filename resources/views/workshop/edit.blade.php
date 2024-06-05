<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar taller</title>
</head>
<body>
    <h1>Editar taller</h1>
    <form action="{{ route('workshops.update', $workshop) }}" method="POST">
        @csrf
        @method('patch')
        <label>NIT
            <br>
            <input type="number" name="nit" value="{{ old('nit', $workshop->nit) }}">
        </label>
        <br>
        @error('nit')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label>Nombre
            <br>
            <input type="text" name="name" value="{{ old('name', $workshop->name) }}">
        </label>
        <br>
        @error('name')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label>Dirección
            <br>
            <input type="text" name="address" value="{{ old('address', $workshop->address) }}">
        </label>
        <br>
        @error('address')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label>Correo electrónico
            <br>
            <input type="email" name="email" value="{{ old('email', $workshop->email) }}">
        </label>
        <br>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label>Teléfono
            <br>
            <input type="number" name="phone" value="{{ old('phone', $workshop->phone) }}">
        </label>
        <br>
        @error('phone')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label for="">Usuario</label>
        <select name="user_id">
            <option value="" hidden>Seleccione</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $user->id === $workshop->user_id ? 'selected' : '' }}>
                    {{ $user->id }} - {{ $user->name }}
                </option>
            @endforeach 
        </select>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
