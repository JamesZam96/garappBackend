<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Registrar Categoria</h1>
    <form action="{{route('person.update', $person)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">Nombre categoria:</label>
        <input type="text" name="name" value="{{old('name',$category->name)}}">
        <br>
        <br>
        <label for="">Descripcion</label>
        <input type="text" name="description" value="{{old('name',$category->name)}}">
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>