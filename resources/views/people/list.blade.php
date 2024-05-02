<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>
<body>
    <h1>Personas registradas</h1>
    @foreach ($people as $person)
    <tr>
        <td>{{$person->name}}</td>
        <td>{{$person->lastname}}</td>
        <td>{{$person->address}}</td>
        <td>{{$person->phoneNumber}}</td>
        <td>{{$person->email}}</td>
        <td><a href="{{route('person.show',$person->idperson)}}">Mostrar</a></td>
        <td><a href="{{route('person.edit',$person->idperson)}}">Editar</a></td>
        <td>
            <form action="{{route('person.destroy',$person->idperson)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
    </tr>
    @endforeach
</body>
</html>