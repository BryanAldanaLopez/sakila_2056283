 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
    <form class="form-horizontal" method="POST" action="{{ url('categorias/store')  }}">
        @csrf
        <fieldset>
        <!-- detectar si la variable exito tiene un valor -->
          @if (session("Exito"))
           <div class="alert-success"> {{session("Exito")}}</div>      
              
          @endif
        <!-- Form Name -->
        <legend>Nueva categoria </legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="nombre">Nombre de categoria</label>  
          <div class="col-md-4">
          <input id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="ingrese aqui su categoria" class="form-control input-md">
          <strong class="text-danger"> {{ $errors->first('nombre')  }}</strong>
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for=""></label>
          <div class="col-md-4">
            <button id="" type="submit" name="" class="btn btn-primary">Enviar</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        
 </body>
 </html>

