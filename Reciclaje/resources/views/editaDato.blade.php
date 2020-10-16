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
        <input type="hidden" name="id" value="{{$reciclador->id}}">
        <input type="text" name="nombre" value="{{$reciclador->nombre}}">
        <input type="text" name="diasrecoleccion" value="{{$reciclador->diasrecoleccion}}">
        <input type="submit">
    </form>
</body>
</html>