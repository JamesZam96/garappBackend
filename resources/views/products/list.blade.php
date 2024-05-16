<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>
    <h1>Productos registradas</h1>
    @foreach ($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
        <td><a href="{{route('product.show',$product->id)}}">Mostrar</a></td>
        <td><a href="{{route('product.edit',$product->id)}}">Editar</a></td>
        <td>
            <form action="{{route('product.destroy',$product->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
    </tr>
    @endforeach
</body>
</html>