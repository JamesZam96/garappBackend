<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Registrar producto</h1>
    <form action="{{route('product.update', $product)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">Editar nombre</label>
        <input type="text" name="name" value="{{old('name',$product->name)}}">
        <br>
        <br>
        <label for="">Editar descripcion</label>
        <input type="text" name="description" value="{{old('description',$product->description)}}">
        <br>
        <br>
        <label for="">Editar precio</label>
        <input type="text" name="price" value="{{old('price',$product->price)}}">
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>