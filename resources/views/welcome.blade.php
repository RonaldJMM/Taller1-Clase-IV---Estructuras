<html>
    
    <head>
        
        <title> Introducción </title>
        <!-- css boostrap -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    
                   
                    <br><br>
                    <center>
                        <a href="http://localhost/ProyectoI/public/index"><button type="button" class="btn btn-secondary">Inicio</button></a>
                        &nbsp;&nbsp;
                        <a href="http://localhost/ProyectoI/public/definicion"><button type="button" class="btn btn-secondary">Definición</button></a>
                        &nbsp;&nbsp;
                        <a href="http://localhost/ProyectoI/public/clasificacion"><button type="button" class="btn btn-secondary">Clasificación</button></a>
                        &nbsp;&nbsp;
                        <a href="http://localhost/ProyectoI/public/tipos"><button type="button" class="btn btn-secondary">Tipos</button></a>
                        &nbsp;&nbsp;
                        <a href="http://localhost/ProyectoI/public/medios"><button type="button" class="btn btn-secondary">Medios</button></a>

                    </center>
                    <br>
                    
            <font color="black" face="Lithos Pro">
                
            <div class="container">
              <div class="row">

                <div class="col"><h1>Ejercicio</h1></div>
                
                <div class="w-100"></div>
                <div class="col">
                    <blockquote class="blockquote">
                      <form action="{{ url('formulario')}}" method="post">
                        {{csrf_field()}}
                        NOMBRE:
                        <input type="text" name="nombre">
                        APELLIDO: 
                        <input type="text" name="apellido">
                        EDAD: 
                        <input type="text" name="edad">
                        TELEFONO: 
                        <input type="text" name="telefono">
                        <br><br><button type="submit">Enviar</button>
                      </form>
                      
                    </blockquote>

                    </div>
                
              </div>
            </div>
            </font>
            
        </div>
        
        <!-- js boostrap -->
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>


</html>