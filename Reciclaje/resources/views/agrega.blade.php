<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
</head>

<body>

    <div class="row">
        <form class="col s12" action="/add" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s6"><input placeholder="Placeholder" id="first_name" type="text" class="validate" name="nombre">
                    <label for="first_name">Nombre Completo</label>
                </div>
            </div>
            <div class="col s6"></div>
            <label>Días de la semana</label>
            <select multiple name="diasrecoleccion">
                <option value="" disabled selected>Escoge los días</option>
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miércoles">Miércoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
                <option value="Sábado">Sádabo</option>
                <option value="Domingo">Domingo</option>
            </select>

            <div class="row">
                <label>Centro de recolección</label>
                <select name="idLugar">
                    @if(!is_null($lugar))@foreach($lugar as $lr)<option value="{{$lr->id}}">{{$lr->direccion}}</option>
                    @endforeach
                    @endif
                </select>

            </div>
            <div class="row"><input type="submit"></div>
        </form>
    </div>

</body>

</html>