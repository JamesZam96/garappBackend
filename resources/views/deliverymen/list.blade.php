<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repartidores</title>
</head>
<body>
    <h1>Repartidores registrados</h1>
    @foreach ($deliverymen as $deliveryman)
    <tr>
        <td>{{$deliveryman->person_id}}</td>
        <td>{{$deliveryman->vehicle_id}}</td>
        <td><a href="{{route('deliveryman.show',$deliveryman->id)}}">Mostrar</a></td>
        <td><a href="{{route('deliveryman.edit',$deliveryman->id)}}">Editar</a></td>
        <td>
            <form action="{{route('deliveryman.destroy',$deliveryman->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
    </tr>
    @endforeach
</body>
</html>