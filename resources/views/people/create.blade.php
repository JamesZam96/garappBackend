<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicio Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="card mt-5">
        <div class="card-header text-center">Personas</div>
        <div class="card-body d-flex justify-content-start">
            
            <form  class="d-flex flex-column " action="{{route('person.store')}}" method="POST" >
                @csrf
                <label>
                    Nombre: <input type="text" name="name" placeholder="Nombre">
                </label>
                <br>
                <label>
                    Apellido: <input type="text" name="lastname"  placeholder="Apellido">
                </label> 
                <br>
                <label>
                    Direccion: <input type="text" name="address" placeholder="Año">
                </label>
                <br>    
                <label>
                    Numero de telefono: <input type="text" name="phoneNumber" placeholder="Numero Telefono">
                </label>
                <br>
                <label>
                    Correo: <input type="text" name="email" placeholder="Correo">
                </label>
                <br>
                <button class="btn btn-success" type="submit">Registrar</button>
                
            </form>
        </div>
        <div class="card-footer text-muted">Footer</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
    