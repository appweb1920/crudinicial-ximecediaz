<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Sistema recolector de basura</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/reciclador">Recolectores</a></li>
        <li><a href="/lugares">Lugares</a></li>
      </ul>
    </div>
  </nav>
<div><h3>Lugares</h3></div>
    <table class="striped, highlight">
        <thead>
            <tr>
                <th>ID</th>
                <th>Direccion</th>
                <th>Tipo de basura</th>
                <th>Horario de apertura</th>
                <th>Horario de cierre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if(!is_null($lugar))
            @foreach($lugar as $lr)
            <tr>
                <td>{{$lr->id}}</td>
                <td>{{$lr->direccion}}</td>
                <td>{{$lr->tipoB}}</td>
                <td>{{$lr->horarioA}}</td>
                <td>{{$lr->horarioC}}</td>
                <td><a href="/editarLugar/{{$lr->id}}">
                        <i class="small material-icons blue-text text-darken-3">mode_edit</i></a>
                    <a href="/borrarLugar/{{$lr->id}}"><i class="small material-icons red-text text-darken-2">
                            delete</i></a>
                    <!-- <a href="/mirarLugar/{{$lr->id}}"><i class="small material-icons green-text text-darken-2">
                            visibility</i></a>-->
                        </td> 
                
            </tr>
            @endforeach
            @endif
        </tbody>

    </table>
    <div class="col s6 right" style="padding: 30px 60px 30px 30px">
        <a class="btn-floating btn-large waves-effect waves-light red" href="/agregaLugar">
        <i class="material-icons">add</i></a></div>
</body>
</html>