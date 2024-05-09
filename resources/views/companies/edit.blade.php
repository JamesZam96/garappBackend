<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Registrar Categoria</h1>
    <form action="{{route('company.update', $person)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">Nit:</label>
        <input type="text" name="nit" value="{{old('name',$company->nit)}}">
        <br>
        <br>
        <label for="">Nombre</label>
        <input type="text" name="companyName" value="{{old('name',$company->companyName)}}">
        <br>
        <br>
        <label for="">Direccion</label>
        <input type="text" name="address" value="{{old('name',$company->address)}}">
        <br>
        <br>
        <label for="">Correo</label>
        <input type="text" name="email" value="{{old('name',$company->email)}}">
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>