<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="row">
<form class="col s12" action="/add" method="POST">
        @csrf
        <div class="row"><div class="input-field col s6"><input placeholder="Placeholder" id="first_name" type="text" class="validate" name="nombre">
          <label for="first_name">Nombre Completo</label>
          </div></div>
          <div class="row">
        <div class="input-field col s12">
        <select multiple>
      <option value="" disabled selected>Escoge los días</option>
      <option value="Lunes">Lunes</option>
      <option value="Martes">Martes</option>
      <option value="Miércoles">Miércoles</option>
      <option value="Jueves">Jueves</option>
      <option value="Viernes">Viernes</option>
      <option value="Sábado">Sádabo</option>
      <option value="Domingo">Domingo</option>
    </select>
    </div></div>
    <div class="row"><input type="submit"></div>
    </form>
    </div>
    <script>
    
    var instance = M.FormSelect.getInstance(elem);
    instance.getSelectedValues();

    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });

  
       </script>
</body>
</html>