<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registar Producto</title>
</head>
<body>
    <h1>Registrar</h1>
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nombre producto</label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="">Descripcion</label>
        <input type="text" name="description">
        <br>
        <br>
        <label for="">Precio</label>
        <input type="text" name="price">
        <br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>