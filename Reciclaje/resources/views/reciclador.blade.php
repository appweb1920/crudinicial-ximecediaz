<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col s6">
            <h3>Recolectores</h3>
        </div>
        
    </div>

    <table class="striped, highlight">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Días de trabajo</th>
                <th>Centro de recolección</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @if(!is_null($reciclador))
            @foreach($reciclador as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->nombre}}</td>
                <td>{{$r->diasrecoleccion}}</td>
                <td><ul>
            @foreach($r->getLugar() as $l)
            <li>{{$l->direccion}}</li>
            @endforeach
            </ul>
        </td>
                <td><a href="/editar/{{$r->id}}">
                        <i class="small material-icons blue-text text-darken-3">mode_edit</i></a>
                    <a href="/borrar/{{$r->id}}"><i class="small material-icons red-text text-darken-2">
                            delete</i></a>
                    <a href="/mirar/{{$r->id}}"><i class="small material-icons green-text text-darken-2">
                            visibility</i></a></td>
                
            </tr>
            @endforeach
            @endif
        </tbody>

    </table>
    <div class="col s6 right" style="padding: 30px 60px 30px 30px">
        <a class="btn-floating btn-large waves-effect waves-light red" href="/agrega">
        <i class="material-icons">add</i></a></div>
    <div><h4>Lugares</h4></div>
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
                <td>{{$lr->tipo-basura}}</td>
                <td>{{$lr->horario-apertura}}</td>
                <td>{{$lr->horario-cierre}}</td>
                <td><a href="/editar/{{$r->id}}">
                        <i class="small material-icons blue-text text-darken-3">mode_edit</i></a>
                    <a href="/borrar/{{$r->id}}"><i class="small material-icons red-text text-darken-2">
                            delete</i></a>
                    <a href="/mirar/{{$r->id}}"><i class="small material-icons green-text text-darken-2">
                            visibility</i></a></td>
                
            </tr>
            @endforeach
            @endif
        </tbody>

    </table>
    <div class="col s6 right" style="padding: 30px 60px 30px 30px">
        <a class="btn-floating btn-large waves-effect waves-light red" href="/agrega">
        <i class="material-icons">add</i></a></div>
</body>

</html>