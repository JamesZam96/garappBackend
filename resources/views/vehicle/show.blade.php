<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido {{$vehicle->brand}} {{$vehicle->model}}</h1>
    <p>Tu direccion es {{$vehicle->year}}</p>
    <p>Tu numero de celular es {{$vehicle->plate}}</p>
    <p>Tu correo electronico es {{$vehicle->type}}</p>
    <a href="{{route('vehicles.index')}}">Ir a la pagina principal</a>
    <br><br>
    <a href="{{route('vehicles.edit' , $vehicle)}}">Editar</a>

    <form action="{{route('vehicles.destroy', $vehicle)}}" method="POST">
        @csrf
        @method('DELETE')
    <br>
<button type="submit">Eliminar</button>
</form>   
</body>
</html>