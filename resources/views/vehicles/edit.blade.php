<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Registrar vehic$vehiclea</h1>
    <form action="{{route('vehicle.update', $vehicle)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">Escribe la marca</label>
        <input type="text" name="brand" value="{{old('name',$vehicle->brand)}}">
        <br>
        <br>
        <label for="">Escribe el modelo</label>
        <input type="text" name="model" value="{{old('model',$vehicle->model)}}">
        <br>
        <br>
        <label for="">Escribe el año</label>
        <input type="text" name="year" value="{{old('year',$vehicle->year)}}">
        <br>
        <br>
        <label for="">Escribe la placa</label>
        <input type="text" name="plate" value="{{old('plate',$vehicle->plate)}}">
        <br>
        <br>
        <label for="">Selecciona el tipo</label>
        <select name="type" id="">
            <option value="{{old('type',$vehicle->type)}}" hidden>{{old('type',$vehicle->type)}}</option>
            <option value="Moto">Moto</option>
            <option value="Carro">Carro</option>
        </select>
        <br>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>