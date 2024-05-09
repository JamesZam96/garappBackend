<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registar vehiculo</title>
</head>
<body>
    <h1>Registrar vehículo</h1>
    <form action="{{route('vehicle.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Escribe la marca</label>
        <input type="text" name="brand">
        <br>
        <br>
        <label for="">Escribe el modelo</label>
        <input type="text" name="model">
        <br>
        <br>
        <label for="">Escribe el año</label>
        <input type="text" name="year">
        <br>
        <br>
        <label for="">Escribe la placa</label>
        <input type="text" name="plate">
        <br>
        <br>
        <label for="">Selecciona el tipo</label>
        <select name="type" id="" required>
            <option value="" selected disabled hidden>Selecciona</option>
            <option value="Moto">Moto</option>
            <option value="Carro">Carro</option>
        </select>
        <br>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>