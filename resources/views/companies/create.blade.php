<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registar Compañia</title>
</head>
<body>
    <h1>Registrar Compañia</h1>
    <form action="{{route('company.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nit:</label>
        <input type="text" name="nit">
        <br>
        <br>
        <label for="">Nombre</label>
        <input type="text" name="companyName">
        <br>
        <br>
        <label for="">Direccion</label>
        <input type="text" name="address">
        <br>
        <br>
        <label for="">Correo</label>
        <input type="text" name="email">
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>