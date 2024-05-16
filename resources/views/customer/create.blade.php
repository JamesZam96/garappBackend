<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cliente</title>
</head>
<body>
    <h1>Crear Cliente</h1>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <button type="submit">Crear</button>
    </form>
</body>
</html>
