<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="guardaEdicion" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$lugar->id}}">
        <input type="text" name="direccion" value="{{$lugar->direccion}}">
        <input type="text" name="tipoB" value="{{$lugar->tipoB}}">
        <input type="time" name="horarioA" value="{{$lugar->horarioA}}">
        <input type="time" name="horarioC" value="{{$lugar->horarioC}}">
        <input type="submit">
    </form>
</body>
</html>