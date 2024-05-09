<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes registrados</h1>
    @foreach ($customers as $customer)
    <tr>
        <td>{{$customer->person_id}}</td>
        <td>{{$customer->vehicle_id}}</td>
        <td><a href="{{route('customer.show',$customer->id)}}">Mostrar</a></td>
        <td><a href="{{route('customer.edit',$customer->id)}}">Editar</a></td>
        <td>
            <form action="{{route('customer.destroy',$customer->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
    </tr>
    @endforeach
</body>
</html>