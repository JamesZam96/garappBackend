<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registar persona</title>
</head>
<body>
    <h1>Registrar persona</h1>
    <form action="{{route('person.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Escribe tu nombre</label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="">Escribe tu apellido</label>
        <input type="text" name="lastname">
        <br>
        <br>
        <label for="">Escribe tu direcion</label>
        <input type="text" name="address">
        <br>
        <br>
        <label for="">Escribe tu telefono</label>
        <input type="text" name="phoneNumber">
        <br>
        <br>
        <label for="">Escribe tu email</label>
        <input type="email" name="email">
        <br>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>