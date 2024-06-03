<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a la página principal de productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <a href="/products/create">Crear un nuevo producto</a>
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                <p>Precio: {{ $product->price }}</p>
            </li>
        @endforeach
    </ul>
    {{ $products->links() }}
</body>
</html>
