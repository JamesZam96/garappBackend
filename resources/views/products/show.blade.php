<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Producto</title>
</head>
<body>
    <h1>Detalles del Producto</h1>
    <p>Nombre: {{ $product->name }}</p>
    <p>Descripción: {{ $product->description }}</p>
    <p>Precio: {{ $product->price }}</p>
    <a href="{{ route('products.index') }}">Ir a la página principal de productos</a>
    <br><br>
    <a href="{{ route('products.update', $product) }}">Editar</a>

    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method('DELETE')
        <br>
        <button type="submit">Eliminar</button>
    </form>   
</body>
</html>