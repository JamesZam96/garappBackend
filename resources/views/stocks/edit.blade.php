<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Registrar persona</h1>
    <form action="{{route('person.update', $person)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">Escribe tu nombre</label>
        <input type="text" name="name" value="{{old('name',$person->name)}}">
        <br>
        <br>
        <label for="">Escribe tu apellido</label>
        <input type="text" name="lastname" value="{{old('lastname',$person->lastname)}}">
        <br>
        <br>
        <label for="">Escribe tu direcion</label>
        <input type="text" name="address" value="{{old('address',$person->address)}}">
        <br>
        <br>
        <label for="">Escribe tu telefono</label>
        <input type="text" name="phoneNumber" value="{{old('phoneNumber',$person->phoneNumber)}}">
        <br>
        <br>
        <label for="">Escribe tu email</label>
        <input type="email" name="email" value="{{old('email',$person->email)}}">
        <br>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>