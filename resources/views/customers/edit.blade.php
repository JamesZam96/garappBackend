<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar cliente</h1>
    <form action="{{route('customer.update', $customer)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">Selecciona el id de la persona</label>
        <select name="type" id="">
            <option value="{{old('type',$vehicle->type)}}" hidden>{{old('type',$vehicle->type)}}</option>
        </select>
        <br>
        <br>
        <label for="">Selecciona el id del vehiculo</label>
        <select name="type" id="">
            <option value="{{old('type',$vehicle->type)}}" hidden>{{old('type',$vehicle->type)}}</option>
        </select>
        <br>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>