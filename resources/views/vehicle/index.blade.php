<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a la pagina principla de vehicle</title>
</head>
<body>
    <h1>Registrar vehiculo</h1>
    <a href="{{route('vehicles.create')}}">crear un people</a>
    @foreach ($vehicles as $vehicle)
    <li><a href="{{route('vehicles.show', $vehicle->id)}}">{{$vehicle->brand}}</a></li>
        {{$vehicles->links()}}
    @endforeach
    
</body>
</html>