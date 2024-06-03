<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido {{$profile->name}}</h1>
    <p>Tu direccion es {{$profile->address}}</p>
    <p>Tu numero de celular es {{$profile->phoneNumber}}</p>
    <p>Tu correo electronico es {{$profile->email}}</p>
    <a href="{{route('profiles.index')}}">Ir a la pagina principal</a>
    <br><br>
    <a href="{{route('profiles.edit' , $profile)}}">Editar</a>

    <form action="{{route('profiles.destroy', $profile)}}" method="POST">
        @csrf
        @method('DELETE')
    <br>
<button type="submit">Eliminar</button>
</form>   
</body>
</html>