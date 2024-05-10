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
        <select name="person_id" id="">
            <option value="{{old('person_id',$customer->person_id)}}" hidden>{{old('person_id',$customer->person_id)}}</option>
        </select>
        <br>
        <br>
        <label for="">Selecciona el id del vehiculo</label>
        <select name="vehicle_id" id="">
            <option value="{{old('vehicle_id',$customer->vehicle_id)}}" hidden>{{old('vehicle_id',$customer->vehicle_id)}}</option>
        </select>
        <br>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>