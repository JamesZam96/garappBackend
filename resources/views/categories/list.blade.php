<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>

<body>
    <h1>Categorias registradas</h1>
    @foreach ($categories as $category)
    <tr>
        <td>{{$category->name}}</td>
        <td>{{$category->description}}</td>

        <td><a href="{{route('category.show',$category->id)}}">Mostrar</a></td>
        <td><a href="{{route('category.edit',$category->id)}}">Editar</a></td>
        <td>
            <form action="{{route('category.destroy',$category->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
    </tr>
    @endforeach
</body>
</html>