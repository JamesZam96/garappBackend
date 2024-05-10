<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar repartidor</h1>
    <form action="{{route('deliveryman.update', $deliveryman)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">Número de licencia</label>
        <input type="text" name="licenseNumber" value="{{old('licenseNumber',$deliveryman->licenseNumber)}}">
        <br>
        <br>
        <label for="">Selecciona el id de la persona</label>
        <select name="person_id" id="">
            <option value="{{old('person_id',$deliveryman->person_id)}}" hidden>{{old('person_id',$deliveryman->person_id)}}</option>
        </select>
        <br>
        <br>
        <label for="">Selecciona el id del vehiculo</label>
        <select name="vehicle_id" id="">
            <option value="{{old('vehicle_id',$deliveryman->vehicle_id)}}" hidden>{{old('vehicle_id',$deliveryman->vehicle_id)}}</option>
        </select>
        <br>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>