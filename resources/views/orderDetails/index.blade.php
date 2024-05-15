<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a la pagina principla de people</title>
</head>
<body>
    <h1>Registrate como gente</h1>
    <a href="{{route('orders.create')}}">crear un people</a>
    @foreach ($orders as $order)
    <li><a href="{{route('orders.show', $order->id)}}">{{$order->name}}</a></li>
        {{$orders->links()}}
    @endforeach
    
</body>
</html>