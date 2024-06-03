<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina para grear un people</title>
</head>
<body>
    <h1>Aqui podras crear un people</h1>
    <form action="/profiles/create" method="POST">
        @csrf
        <label >Apellido completo
            <br>
            <input type="text" name="lastname" value="{{old('lastname')}}">
        </label>
        <br>
        @error('lastname')
        <span>{{$message}}</span>
        @enderror
        <label >Ingresa tu direccion
            <br>
            <input type="text" name="address" value="{{old('address')}}">
        </label>
        @error('address')
            <span>{{$message}}</span>
        @enderror
        <br>
        <label >Ingresa tu numero de telefono
            <br>
            <input type="number" name="phoneNumber" value="{{old('phoneNumber')}}">
        </label>
        @error('phoneNumber')
            <span>{{$message}}</span>
        @enderror
        <br>
        <label >Imagen
            <br>
            <input type="url" name="profile_img_url" value="{{old('profile_img_url')}}">
        </label>
        @error('profile_img_url')
            <span>{{$message}}</span>
        @enderror
        <br><br>
        <label >Tipo de dni
            <br>
            <select name="type_dni">
                <option value="dni" {{ old('type_dni') == 'dni' ? 'selected' : '' }}>DNI</option>
                <option value="passport" {{ old('type_dni') == 'passport' ? 'selected' : '' }}>Pasaporte</option>
                <option value="other" {{ old('type_dni') == 'other' ? 'selected' : '' }}>Otro</option>
            </select>
        @error('type_dni')
            <span>{{$message}}</span>
        @enderror
        <br><br>
        <label >DNI
            <br>
            <input type="number" name="dni" value="{{old('dni')}}">
        </label>
        @error('dni')
            <span>{{$message}}</span>
        @enderror
        <br><br>
        <label for="">Selecciona la persona</label>
        <select name="user_id" id="">
            <option value="" hidden>Seleccione</option>
            @foreach ($user as $people)
                <option value="{{$people->id}}">{{$people->id}}-{{$people->name}}</option>
            @endforeach 
        </select>
        <button type="submit">crear</button>
    </form>
    
</body>
</html>