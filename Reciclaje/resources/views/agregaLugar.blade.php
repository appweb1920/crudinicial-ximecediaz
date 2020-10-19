<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="row">
<form class="col s12" action="/addLugar" method="POST">
        @csrf
        <div class="row"><div class="input-field col s6"><input placeholder="Direccion del lugar" id="first_name" type="text" class="validate" name="direccion">
          <label for="direccion">Direccion</label>
          </div>
          <div class="input-field col s6"><input placeholder="Basura a recolectar" id="first_name" type="text" class="validate" name="tipoB">
          <label for="direccion">Tipo de basura</label>
          </div>
          <div class="input-field col s6"><input type="time" class="validate" name="horarioA">
          
          </div>
          <div class="input-field col s6"><input type="time" class="validate" name="horarioC">
          
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