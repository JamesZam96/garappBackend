<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
</head>
<body>
    <h1>Vehiculos registrados</h1>
    @foreach ($vehicles as $vehicle)
    <tr>
        <td>{{$vehicle->brand}}</td>
        <td>{{$vehicle->model}}</td>
        <td>{{$vehicle->year}}</td>
        <td>{{$vehicle->plate}}</td>
        <td>{{$vehicle->type}}</td>
        <td><a href="{{route('vehicle.show',$vehicle->id)}}">Mostrar</a></td>
        <td><a href="{{route('vehicle.edit',$vehicle->id)}}">Editar</a></td>
        <td>
            <form action="{{route('vehicle.destroy',$vehicle->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
    </tr>
    @endforeach
</body>
</html>