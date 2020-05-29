<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha256-0XAFLBbK7DgQ8t7mRWU5BF2OMm9tjtfH945Z7TTeNIo=" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
</head>
<body>
        <form method="POST" action="{{ url('categorias/update' ) }}" class="form-horizontal">
        @csrf
        <input name="id" type="hidden" value="{{ $categoria->category_id }}" />
        <fieldset>
        <!-- detectar si la variable "exito" tiene un valor -->
        @if(session("exito")):   
            <div class="alert-success">{{  session("exito")    }}</div>
        @endif    
        <!-- Form Name -->
        <legend>Editar Categoría</legend>
​
        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nombre Categoría:</label>  
        <div class="col-md-4">
        <input id="textinput" name="categoria" value="{{ $categoria->name  }}" type="text" placeholder="" class="form-control input-md">
          <strong class="text-danger"> {{  $errors->first('nombre')  }} </strong>
        </div>
        </div>
​
        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
            <button id="" name="" class="btn btn-primary">Enviar</button>
        </div>
        </div>
​
        </fieldset>
        </form>
</body>
</html>