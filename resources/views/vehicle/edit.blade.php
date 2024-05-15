<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina para registrar un vehiculo</title>
</head>
<body>
    <h1>Aqui podras editar el vehiculo</h1>
    <form action="{{route('vehicles.update', $vehicle->id)}}" method="POST">
        @csrf
        @method('put')
        <label >Marca
            <br>
            <input type="text" name="brand" value="{{old('brand',$vehicle->brand)}}">
        </label>
        <br>
        @error('brand')
            <span>{{$message}}</span>
        @enderror
        <label >Modelo
            <br>
            <input type="text" name="model" value="{{old('model',$vehicle->model)}}">
        </label>
        <br>
        @error('model')
        <span>{{$message}}</span>
        @enderror
        <label >Año
            <br>
            <input type="number" name="year" value="{{old('year',$vehicle->year)}}">
        </label>
        @error('year')
            <span>{{$message}}</span>
        @enderror
        <br>
        <label >Ingresa la placa
            <br>
            <input type="number" name="plate" value="{{old('plate',$vehicle->plate)}}">
        </label>
        @error('plate')
            <span>{{$message}}</span>
        @enderror
        <br>
        <label >Ingresa el tipo del vehiculo
            <br>
            <input type="text" name="type" value="{{old('type',$vehicle->type)}}">
        </label>
        @error('type')
            <span>{{$message}}</span>
        @enderror
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
    
</body>
</html>