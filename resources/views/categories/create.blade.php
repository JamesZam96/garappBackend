<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registar Categoria</title>
</head>
<body>
    <h1>Registrar Categoria</h1>
    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <select name="product_id">
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }} - {{ $product->description }}- {{ $product->price }}</option>
            @endforeach
        </select>

        <br><br>
        <label for="">Nombre categoria:</label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="">Descripcion</label>
        <input type="text" name="description">
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>