<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Recolectores</h1>
    <form action="/add" method="POST">
        @csrf
        <input type="text" name="nombre">
        <input type="text" name="diasrecoleccion">
        <input type="submit">
    </form>
    <div>
    @if(!is_null($reciclador))
    @foreach($reciclador as $r)
        <p>{{$r->nombre}}</p>
        <p>{{$r->diasrecoleccion}}</p>
        <a href="/editar/{{$r->id}}">Editar</a>
        <a href="/borrar/{{$r->id}}">Borrar</a>
        <br>
    @endforeach
    @endif
    </div>
</body>
</html>