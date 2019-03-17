<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <div class="col-md-6 mx-auto mt-5">
            <div class="card ">
            <div class="card-header">
                <h3 class="text-center">Formulario</h3>
                <div class="card-body">
                <form action ="LogicaEva1y2.php"  method="POST">
                    
                    <input type="hidden" value="<?php echo $_GET["doc"]; ?>" name="doc">
                    <input type="hidden" value="1" name="ev">
                    </div>
                    <div class="form-group">
                         <h5> <label>Responda el sigueinte cuestionario y envielo con el boton que se encuentra en la parte inferior. </label></h5>
                    </div>
                    <div class="form-group">
                        <b> <label> Pregunta 1: para usted el SENA es:</label></b>
                    </div>
                    <div class="form-check">
                       <input type="radio" class="form-check-input" name="1" value="rio" >Un rio de china <br/>
                       <input type="radio"  class="form-check-input" name="1" value="ins" >Una institucion de formacion <br/>
                       <input type="radio" class="form-check-input" name="1" value="barr" >Un barrio de Santiago de Cali <br/>
                       <input type="radio"  class="form-check-input" name="1" value="nig" >Ninguna de las anteriores<br/>
                    </div>
                    <div class="form-group">
                    <br/>  <b> <label> Pregunta 2: Que es una solucion de software:</label></b>
                    </div>
                    <div class="form-check">
                       <input type="radio"  class="form-check-input" name="2" value="peg" >Un pegante para computadores <br/>
                       <input type="radio"  class="form-check-input" name="2" value="sol" >Un programa que soluciona algo <br/>
                       <input type="radio" class="form-check-input" name="2" value="pro" >Un programa pegajoso <br/>
                       <input type="radio"  class="form-check-input" name="2" value="nigu" >Ninguna 
                    </div>
                    <div class="form-group">
                    <br/>  <b> <label> Pregunta 3: La suma de la raiz cuadrada de 144 y 56 es :</label></b>
                    <!-- 144= 12  y 56 =7,5 -->
                    </div>
                    <div class="form-group">
                      <input type="number" name="raiz" class="form-control">
                    </div>                
                    <div class="form-group">
                    <br/>  <b> <label> Pregunta 4: Cual es la capital de patagonia :</label></b>
                    </div>
                    <div class="form-check">
                       <input type="radio"  class="form-check-input" name="4" value="ar" >Argentina <br/>
                       <input type="radio"  class="form-check-input" name="4" value="qui" >Quito <br/>
                       <input type="radio" class="form-check-input" name="4" value="bue" >Buenos aires <br/>
                       <input type="radio"  class="form-check-input" name="4" value="pata" >Patagonia no es un pais 
                    </div>
                    <div class="form-group">
                    <br/>  <b> <label> Pregunta 5: De los siguientes seleccione el dia de hoy :</label></b>
                    </div>
                    <div class="form-group">
                    <select id="" class="form-control" name ="dias">
                        <option value="Mon">Lunes</option>
                        <option value="Tue">Martes</option>
                        <option value="Wed">Miercoles</option>
                        <option value="Thu">Jueves</option>
                        <option value="Fri">Viernes</option>
                        <option value="Sat">Sabado</option>
                        <option value="Sun">Domingo</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="enviar" class="btn btn-warning btn-block">               
                    </div>
                </form>
                </div>
            </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>