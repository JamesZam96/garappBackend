<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
</head>

<body>
    <h1>Empresas registradas</h1>
    @foreach ($companies as $company)
    <tr>
        Nit: <td>{{$company->nit}}</td>
        Nombre: <td>{{$company->companyName}}</td>
        Direccion: <td>{{$company->address}}</td>
        Correo: <td>{{$company->email}}</td>


        <td><a href="{{route('company.show',$company->id)}}">Mostrar</a></td>
        <td><a href="{{route('company.edit',$company->id)}}">Editar</a></td>
        <td>
            <form action="{{route('company.destroy',$company->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
    </tr>
    @endforeach
</body>
</html>