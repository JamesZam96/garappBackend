<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina para registrar un vehiculo</title>
</head>
<body>
    <h1>Aqui podras registrar</h1>
    <form action="{{route('vehicles.store')}}" method="POST">
        @csrf
        <label >Marca
            <br>
            <input type="text" name="brand" value="{{old('brand')}}">
        </label>
        <br>
        @error('brand')
            <span>{{$message}}</span>
        @enderror
        <label >Marca
            <br>
            <input type="text" name="model" value="{{old('model')}}">
        </label>
        <br>
        @error('model')
        <span>{{$message}}</span>
        @enderror
        <label >Año
            <br>
            <input type="number" name="year" value="{{old('year')}}">
        </label>
        @error('year')
            <span>{{$message}}</span>
        @enderror
        <br>
        <label >Ingresa la placa
            <br>
            <input type="number" name="plate" value="{{old('plate')}}">
        </label>
        @error('plate')
            <span>{{$message}}</span>
        @enderror
        <br>
        <label >Ingresa el tipo del vehiculo
            <br>
            <input type="text" name="type" value="{{old('type')}}">
        </label>
        @error('type')
            <span>{{$message}}</span>
        @enderror
        <br><br>
        <button type="submit">crear</button>
    </form>
    
</body>
</html>