<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registar repartidor</title>
</head>
<body>
    <h1>Registrar repartidor</h1>
    <form action="{{route('deliveryman.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Número de licencia</label>
        <input type="number" name="licenseNumber">
        <br>
        <br>
        <label for=""></label>
        <select name="person_id" id="">
            <option value="" hidden>Seleccione</option>
            @foreach ($people as $person)
                <option value="{{$person->id}}">{{$person->id}}-{{$person->name}}</option>
            @endforeach 
        </select>
        <br>
        <br>
        <label for=""></label>
        <select name="vehicle_id" id="">
            <option value="" hidden>Seleccione</option>
            @foreach ($vehicles as $vehicle)
                <option value="{{$vehicle->id}}">{{$vehicle->id}}-{{$vehicle->brand}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>